# Server configuration

This folder holds the web server configuration for the request-mirror.ohdear.app server.
Laravel Forge no longer manages this server. Caddy serves the app, and this folder is the only place its configuration lives.

## Install or update

Deploy first, so the server has the latest copy of this folder. Then run:

```sh
sudo /home/forge/request-mirror.ohdear.app/current/server/install.sh
```

The script is safe to run again. It installs Caddy from Caddy's own apt repository, copies the `Caddyfile` to `/etc/caddy/Caddyfile`, checks it, and reloads Caddy.

## What is not in this repository

Private keys of real certificates are copied to `/etc/caddy/certs/` by hand. They are never committed.

## Rolling back to nginx

nginx is still installed, but stopped and disabled. To go back:

```sh
sudo systemctl disable --now caddy
sudo systemctl enable --now nginx
```
