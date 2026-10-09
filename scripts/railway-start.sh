#!/bin/bash
# Railway start command (see railway.json). Railpack's built-in start script
# skips Laravel's setup in some versions, so do it here before serving.
set -e

php artisan migrate --force   # creates the SQLite file on first boot and loads the catalogue
php artisan optimize

exec docker-php-entrypoint --config /Caddyfile --adapter caddyfile 2>&1
