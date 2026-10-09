<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'home'])->name('home');
Route::get('/shop', [ProductController::class, 'index'])->name('shop');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Old static-site URLs
Route::permanentRedirect('/index.html', '/');
Route::permanentRedirect('/shop.html', '/shop');
Route::get('/product-{slug}.html', fn (string $slug) => redirect()->route('products.show', $slug, 301))
    ->where('slug', '[a-z0-9-]+');
