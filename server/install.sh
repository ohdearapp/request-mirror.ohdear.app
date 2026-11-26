#!/usr/bin/env bash
# Installs Caddy and this folder's configuration on the request-mirror.ohdear.app server.
# Run it as root from a checkout of this repository: sudo server/install.sh
# It is safe to run again. It never starts or stops a service. It only reloads Caddy when Caddy is running.
set -euo pipefail

here="$(cd "$(dirname "$0")" && pwd)"

if [ "$(id -u)" -ne 0 ]; then
    echo "Run this as root." >&2
    exit 1
fi

install -m 644 "$here/apt/caddy-stable-archive-keyring.gpg" /usr/share/keyrings/caddy-stable-archive-keyring.gpg
install -m 644 "$here/apt/caddy-stable.list" /etc/apt/sources.list.d/caddy-stable.list
install -m 644 "$here/apt/caddy-stable.pref" /etc/apt/preferences.d/caddy-stable.pref

if ! dpkg -s caddy >/dev/null 2>&1; then
    # The package starts Caddy right after installing it. While nginx still holds ports 80 and 443,
    # that start would fail. policy-rc.d tells the package scripts not to start any service.
    printf '#!/bin/sh\nexit 101\n' > /usr/sbin/policy-rc.d
    chmod 755 /usr/sbin/policy-rc.d
    trap 'rm -f /usr/sbin/policy-rc.d' EXIT

    # Refresh only Caddy's repository. A full apt-get update is not needed here,
    # and it can fail on unrelated repositories.
    apt-get update -q \
        -o Dir::Etc::sourcelist=/etc/apt/sources.list.d/caddy-stable.list \
        -o Dir::Etc::sourceparts=- \
        -o APT::Get::List-Cleanup=0
    DEBIAN_FRONTEND=noninteractive apt-get install -y -q caddy

    rm -f /usr/sbin/policy-rc.d
    trap - EXIT
fi

# Before the switch, nginx serves the site. Caddy must not start at boot while nginx still does.
if systemctl is-enabled --quiet nginx 2>/dev/null; then
    systemctl disable --quiet caddy
fi

install -d -o caddy -g caddy -m 755 /var/log/caddy
install -d -o root -g caddy -m 750 /etc/caddy/certs

"$here/certs/generate.sh" /etc/caddy/certs
chown root:caddy /etc/caddy/certs/*.crt /etc/caddy/certs/*.key
chmod 640 /etc/caddy/certs/*.crt /etc/caddy/certs/*.key

install -m 644 "$here/Caddyfile" /etc/caddy/Caddyfile
# Validate as the caddy user. Run as root, it would create the log files owned by root, and Caddy could not write to them.
sudo -u caddy caddy validate --config /etc/caddy/Caddyfile --adapter caddyfile

# Oh Dear's ports test expects port 9999 to be open.
ufw allow 9999/tcp >/dev/null

# Forge renewed the certificate with this weekly cron. Caddy renews it now.
# The Forge script also restarts nginx, which must stay stopped once Caddy serves the site.
rm -f /etc/cron.d/letsencrypt-renew-*

if systemctl is-active --quiet caddy; then
    systemctl reload caddy
fi

echo "Caddy configuration installed."
