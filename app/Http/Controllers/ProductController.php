<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function home(): View
    {
        return view('home', ['bestSellers' => Product::featured()->get()]);
    }

    public function index(): View
    {
        return view('shop', ['products' => Product::ordered()->get()]);
    }

    public function show(Product $product): View
    {
        $related = Product::where('category', $product->category)
            ->whereKeyNot($product->getKey())
            ->ordered()
            ->take(4)
            ->get();

        return view('products.show', compact('product', 'related'));
    }
}
