# REX — Home & Building Surfaces

Laravel storefront for REX: flooring, wall panels, cladding, accessories and furniture boards, delivered free across Tanzania with pay-on-delivery.

## Setup

```sh
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite      # default DB is SQLite; set DB_* in .env for MySQL
php artisan migrate                 # creates the tables and loads the starting catalogue
php artisan serve
```

On a live server, point the web root at `public/`. The cart and shop scripts build links like `/products/...`, so serve the site from the domain root.

## Where things live

| What | Where |
|---|---|
| Pages | `routes/web.php` → `app/Http/Controllers/ProductController.php` |
| Products | `products` table (`app/Models/Product.php`); initial data in `database/seeders/ProductSeeder.php` |
| Shop categories, site description | `config/rex.php` |
| Layout, header, footer, product card | `resources/views/layouts/app.blade.php`, `resources/views/partials/` |
| Home / shop / product page | `resources/views/home.blade.php`, `shop.blade.php`, `products/show.blade.php` |
| Cart, quote modal, filters, countdown | `public/js/site.js` (cart lives in the browser; checkout goes to WhatsApp) |
| Styles | `public/css/index.css` (prebuilt Tailwind), `public/css/site.css` (REX additions) |
| Logos and photos | `public/assets/` |

## Editing products

- Change a price, name, description or specs in the `products` table. To reset everything to the seeded catalogue, run `php artisan db:seed --class=ProductSeeder`; it updates rows by slug.
- Best sellers on the home page are the products with a `featured_position` (1 = first), ordered by that number.
- The shop lists every product by `sort_order`. "You may also need" shows up to 4 others from the same category.
- Images go in `public/assets/`; store the path as `assets/your-image.jpg`.

## Deploying on Railway

Railway builds from GitHub with Railpack (PHP version comes from `composer.json`). On every start it runs `php artisan migrate --force`, which creates the SQLite file if needed and loads the catalogue on a fresh database.

Service variables: `APP_KEY` (from `php artisan key:generate --show`), `APP_ENV=production`, `APP_DEBUG=false`, `APP_URL`, `LOG_CHANNEL=stderr`.

The default SQLite database lives in the container and is rebuilt from the seeder on each deploy, so product edits made on the server don't survive a redeploy. To edit products in production, add a Railway Postgres or MySQL service and point `DB_CONNECTION` / `DB_URL` at it.

## Before going live

1. `public/js/site.js` → edit `REX_CONFIG` at the top: WhatsApp number, phone, email and showrooms.
2. Set `APP_URL`, `APP_ENV=production` and `APP_DEBUG=false` in `.env`.

Old static URLs (`/index.html`, `/shop.html`, `/product-<slug>.html`) redirect permanently to the new ones.
