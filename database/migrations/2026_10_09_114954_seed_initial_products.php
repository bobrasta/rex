<?php

use Database\Seeders\ProductSeeder;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Load the starting catalogue once per database. Hosts like Railway run
     * `migrate --force` on every start but never `db:seed`, so without this
     * a fresh deploy would have an empty shop. Later edits to products are
     * kept because migrations only run once.
     */
    public function up(): void
    {
        (new ProductSeeder)->run();
    }
};
