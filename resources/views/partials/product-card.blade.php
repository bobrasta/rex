<div
  class="group flex flex-col"
  data-card="{{ $product->slug }}"
  data-cat="{{ $product->category }}"
  data-search="{{ Str::lower("{$product->name} {$product->tag} {$product->category}") }}"
>
  <a
    class="relative block aspect-[4/5] overflow-hidden rounded-sm bg-muted"
    href="{{ route('products.show', $product) }}"
    ><img
      alt="{{ $product->name }}"
      class="size-full object-cover transition-transform duration-700 group-hover:scale-105"
      loading="lazy"
      src="{{ asset($product->image) }}"
    />@if ($product->discount())<span
      class="absolute left-3 top-3 rounded-sm bg-accent px-2 py-1 font-mono text-xs font-bold text-accent-foreground"
      >-{{ $product->discount() }}%</span
    >@endif</a
  >
  <p class="mt-4 font-mono text-xs uppercase tracking-widest text-muted-foreground">
    {{ $product->tag }}
  </p>
  <a
    class="mt-1 font-serif text-2xl font-bold uppercase leading-tight hover:text-accent"
    href="{{ route('products.show', $product) }}"
    >{{ $product->name }}</a
  >
  <div class="mt-2 flex flex-wrap items-baseline gap-x-2">
    <span class="font-bold">{{ App\Models\Product::money($product->price) }}</span>
    @if ($product->old_price)
      <span class="text-sm text-muted-foreground line-through">{{ App\Models\Product::money($product->old_price) }}</span>
    @endif
    <span class="text-xs text-muted-foreground">/ {{ $product->unit }}</span>
  </div>
  <button
    class="inline-flex shrink-0 items-center justify-center gap-2 rounded-md text-sm font-medium whitespace-nowrap transition-all outline-none focus-visible:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/50 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-9 px-4 py-2 mt-4 w-full"
    data-add="{{ $product->slug }}"
    data-size="default"
    data-slot="button"
    data-variant="default"
  >
    Add to cart
  </button>
</div>
