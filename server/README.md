# Server configuration

This folder holds the web server configuration for the request-mirror.ohdear.app server.
Laravel Forge no longer manages this server. Caddy serves the app, and this folder is the only place its configuration lives.

## Install or update

Deploy first, so the server has the latest copy of this folder. Then run:

```sh
sudo /home/forge/request-mirror.ohdear.app/current/server/install.sh
```

The script is safe to run again. It installs Caddy from Caddy's own apt repository, copies the `Caddyfile` to `/etc/caddy/Caddyfile`, checks it, and reloads Caddy.

## Test hosts for Oh Dear's certificate health tests

Each host below serves a broken certificate on purpose. Oh Dear's test suite connects to them to check that the certificate health checker finds each problem.
All of them are DNS only in Cloudflare (grey cloud), so the TLS connection reaches this server and not Cloudflare.

| Host | Certificate | Comes from |
|---|---|---|
| `expired.request-mirror.ohdear.app` | Expired, publicly trusted chain | A Sectigo certificate for `ohdear.app` that expired on 2026-11-18. Copied by hand. |
| `wrong-host.request-mirror.ohdear.app` | Valid, but for another name | The Let's Encrypt certificate of `request-mirror.ohdear.app`, through `fallback_sni` in the `Caddyfile`. |
| `self-signed.request-mirror.ohdear.app` | Self-signed | `certs/generate.sh` |
| `untrusted-root.request-mirror.ohdear.app` | Signed by a root no browser trusts | `certs/generate.sh` |
| `sha1-intermediate.request-mirror.ohdear.app` | Intermediate signed with SHA-1 | `certs/generate.sh` |

`ports.request-mirror.ohdear.app` is the target of Oh Dear's ports test. It expects ports 80, 443 and 9999 to be open and port 23 to be closed.

The certificates from `certs/generate.sh` are test material. Their private keys are committed on purpose.
nginx cannot serve the SHA-1 chain: OpenSSL refuses to load it with "ca md too weak". That is one reason this server runs Caddy.

## What is not in this repository

Private keys of real certificates are copied to `/etc/caddy/certs/` by hand. They are never committed.

## Rolling back to nginx

nginx is still installed, but stopped and disabled. To go back:

```sh
sudo systemctl disable --now caddy
sudo systemctl enable --now nginx
```
