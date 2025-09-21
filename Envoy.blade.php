@setup
$branch = 'main';
$server = "request-mirror.ohdear.app";
$server = "164.92.235.117";
$userAndServer = 'forge@'. $server;
$repository = "ohdearapp/request-mirror.ohdear.app";
$baseDir = "/home/forge/request-mirror.ohdear.app";
$releasesDir = "{$baseDir}/releases";
$persistentDir = "{$baseDir}/persistent";
$currentDir = "{$baseDir}/current";
$newReleaseName = date('Ymd-His');
$newReleaseDir = "{$releasesDir}/{$newReleaseName}";
$user = get_current_user();

function logMessage($message) {
return "echo '\033[32m" .$message. "\033[0m';\n";
}
@endsetup

@servers(['local' => '127.0.0.1', 'remote' => $userAndServer])

@macro('deploy')
startDeployment
cloneRepository
runComposer
runNpm
generateAssets
updateSymlinks
optimizeInstallation
migrateDatabase
blessNewRelease
cleanOldReleases
finishDeploy
@endmacro

@macro('deploy-code')
deployOnlyCode
@endmacro

@task('startDeployment', ['on' => 'local'])
{{ logMessage("🏃  Starting deployment…") }}
git checkout {{ $branch }}
git pull origin {{ $branch }}
@endtask

@task('cloneRepository', ['on' => 'remote'])
{{ logMessage("🌀  Cloning repository…") }}

[ -d {{ $releasesDir }} ] || mkdir {{ $releasesDir }};
[ -d {{ $persistentDir }} ] || mkdir {{ $persistentDir }};
[ -d {{ $persistentDir }}/uploads ] || mkdir {{ $persistentDir }}/uploads;
[ -d {{ $persistentDir }}/admin-uploads ] || mkdir {{ $persistentDir }}/admin-uploads;
[ -d {{ $persistentDir }}/storage ] || mkdir {{ $persistentDir }}/storage;

cd {{ $releasesDir }};

# Create the release dir
mkdir {{ $newReleaseDir }};

# Clone the repo
git clone --depth 1 git@github.com:{{ $repository }} --branch {{ $branch }} {{ $newReleaseName }}

# Configure sparse checkout
cd {{ $newReleaseDir }}
git config core.sparsecheckout true
echo "*" > .git/info/sparse-checkout
echo "!storage" >> .git/info/sparse-checkout
echo "!public/build" >> .git/info/sparse-checkout
git read-tree -mu HEAD

# Mark release
cd {{ $newReleaseDir }}
echo "{{ $newReleaseName }}" > public/release-name.txt
@endtask

@task('runComposer', ['on' => 'remote'])

# Import the environment config
cd {{ $newReleaseDir }};
ln -nfs {{ $baseDir }}/.env .env;

cd {{ $newReleaseDir }};
{{ logMessage("🚚  Running Composer…") }}
ln -nfs {{ $baseDir }}/auth.json auth.json;
composer install --prefer-dist --no-scripts --no-dev -q -o;
@endtask

@task('runNpm', ['on' => 'remote'])
{{ logMessage("📦  Running Yarn…") }}
cd {{ $newReleaseDir }};
npm i
@endtask

@task('generateAssets', ['on' => 'remote'])
{{ logMessage("🌅  Generating assets…") }}
cd {{ $newReleaseDir }};
npm ci --audit false
npm run build
rm -rf node_modules
@endtask

@task('updateSymlinks', ['on' => 'remote'])
{{ logMessage("🔗  Updating symlinks to persistent data…") }}
# Remove the storage directory and replace with persistent data
rm -rf {{ $newReleaseDir }}/storage;
cd {{ $newReleaseDir }};
ln -nfs {{ $baseDir }}/persistent/storage storage;
@endtask

@task('optimizeInstallation', ['on' => 'remote'])
{{ logMessage("✨  Optimizing installation…") }}
cd {{ $newReleaseDir }};
php artisan clear-compiled;
@endtask

@task('migrateDatabase', ['on' => 'remote'])
{{ logMessage("🙈  Migrating database…") }}
cd {{ $newReleaseDir }};
php artisan migrate --force;
@endtask

@task('blessNewRelease', ['on' => 'remote'])
{{ logMessage("🙏  Blessing new release…") }}
ln -nfs {{ $newReleaseDir }} {{ $currentDir }};
cd {{ $newReleaseDir }}
php artisan horizon:terminate
php artisan config:clear
php artisan view:clear
php artisan cache:clear
php artisan config:cache
php artisan route:clear
php artisan route:cache
php artisan event:cache

sudo service php8.2-fpm restart
sudo supervisorctl restart all
php artisan schedule:sync
php artisan health:check
@endtask

@task('cleanOldReleases', ['on' => 'remote'])
{{ logMessage("🚾  Cleaning up old releases…") }}
# Delete all but the 3 most recent.
cd {{ $releasesDir }}
ls -dt {{ $releasesDir }}/* | tail -n +4 | xargs -d "\n" sudo chown -R forge .;
ls -dt {{ $releasesDir }}/* | tail -n +4 | xargs -d "\n" rm -rf;
@endtask

@task('finishDeploy', ['on' => 'local'])
{{ logMessage("🚀  Application deployed!") }}
@endtask

@task('deployOnlyCode',['on' => 'remote'])
{{ logMessage("💻  Deploying code changes…") }}
cd {{ $currentDir }}
git pull origin {{ $branch }}
php artisan config:clear
php artisan view:clear
php artisan cache:clear
php artisan config:cache
php artisan route:clear
php artisan route:cache
php artisan event:cache
php artisan responsecache:clear
php artisan horizon:terminate
sudo service php8.2-fpm restart
php artisan health:check
php artisan schedule:sync
@endtask
