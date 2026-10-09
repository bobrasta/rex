<?php

namespace App\Providers;

use App\Models\Product;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // The cart script needs every product's price/name/image on every page.
        View::composer('layouts.app', function ($view) {
            $view->with('cartProducts', Product::ordered()->get()->mapWithKeys(
                fn (Product $product) => [$product->slug => $product->toCartArray()]
            ));
        });
    }
}
