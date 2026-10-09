<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'slug', 'name', 'tag', 'category', 'price', 'old_price', 'unit',
        'image', 'description', 'specs', 'sort_order', 'featured_position',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'integer',
            'old_price' => 'integer',
            'specs' => 'array',
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopeOrdered(Builder $query): void
    {
        $query->orderBy('sort_order')->orderBy('id');
    }

    public function scopeFeatured(Builder $query): void
    {
        $query->whereNotNull('featured_position')->orderBy('featured_position');
    }

    /** Whole-number percentage off the old price, or null when not on sale. */
    public function discount(): ?int
    {
        return $this->old_price ? (int) round((1 - $this->price / $this->old_price) * 100) : null;
    }

    public static function money(int $amount): string
    {
        return number_format($amount).' TZS';
    }

    /** Shape used by the cart script (window.REX_PRODUCTS). */
    public function toCartArray(): array
    {
        return [
            'slug' => $this->slug,
            'name' => $this->name,
            'tag' => $this->tag,
            'price' => $this->price,
            'old' => $this->old_price,
            'unit' => $this->unit,
            'img' => asset($this->image),
            'cat' => $this->category,
        ];
    }
}
