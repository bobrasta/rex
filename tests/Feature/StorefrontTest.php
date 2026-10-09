<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StorefrontTest extends TestCase
{
    use RefreshDatabase;

    protected bool $seed = true;

    public function test_home_page_lists_the_best_sellers_in_order(): void
    {
        $names = Product::featured()->pluck('name')->all();

        $this->get('/')->assertOk()->assertSeeInOrder($names);
    }

    public function test_shop_lists_every_product(): void
    {
        $this->get('/shop')
            ->assertOk()
            ->assertSee(Product::count().' products');
    }

    public function test_product_page_shows_details_and_related_products(): void
    {
        $this->get('/products/wpc-walnut')
            ->assertOk()
            ->assertSee('WPC flooring, walnut')
            ->assertSee('Save 25%')
            ->assertSee('8 mm')
            ->assertSee('You may also need')
            ->assertSee('SPC flooring, natural oak');
    }

    public function test_unknown_product_is_not_found(): void
    {
        $this->get('/products/does-not-exist')->assertNotFound();
    }

    public function test_old_static_urls_redirect_permanently(): void
    {
        $this->get('/index.html')->assertRedirect('/')->assertStatus(301);
        $this->get('/shop.html')->assertRedirect('/shop')->assertStatus(301);
        $this->get('/product-wpc-walnut.html')->assertRedirect('/products/wpc-walnut')->assertStatus(301);
    }
}
