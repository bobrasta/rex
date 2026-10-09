@extends('layouts.app')

@section('title', "{$product->name} | REX")
@section('description', $product->description)

@php($btn = "inline-flex shrink-0 items-center justify-center gap-2 text-sm font-medium whitespace-nowrap transition-all outline-none focus-visible:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/50 disabled:pointer-events-none disabled:opacity-50 h-10 rounded-md px-6")

@section('content')
<main class="mx-auto max-w-7xl px-4 py-10">
  <a
    class="mb-6 inline-flex items-center gap-2 text-sm font-semibold text-muted-foreground hover:text-foreground"
    href="{{ route('shop', ['category' => $product->category]) }}"
    ><svg aria-hidden="true" class="lucide lucide-arrow-left size-4" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
      <path d="m12 19-7-7 7-7"></path>
      <path d="M19 12H5"></path></svg
    >{{ config("rex.categories.{$product->category}.title", 'Shop') }}</a
  >
  <div class="grid gap-10 md:grid-cols-2">
    <div class="relative aspect-square overflow-hidden rounded-sm bg-muted">
      <img alt="{{ $product->name }}" class="size-full object-cover" src="{{ asset($product->image) }}" />
      @if ($product->discount())
        <span class="absolute left-4 top-4 rounded-sm bg-accent px-3 py-1 font-mono text-sm font-bold text-accent-foreground">Save {{ $product->discount() }}%</span>
      @endif
    </div>
    <div>
      <p class="font-mono text-xs uppercase tracking-[0.3em] text-accent">{{ $product->tag }}</p>
      <h1 class="mt-2 text-5xl font-black leading-[0.95] md:text-6xl">{{ $product->name }}</h1>
      <div class="mt-6 flex flex-wrap items-baseline gap-3">
        <span class="text-3xl font-extrabold">{{ App\Models\Product::money($product->price) }}</span>
        @if ($product->old_price)
          <span class="text-lg text-muted-foreground line-through">{{ App\Models\Product::money($product->old_price) }}</span>
        @endif
        <span class="text-muted-foreground">/ {{ $product->unit }}</span>
      </div>
      <p class="mt-6 text-lg text-muted-foreground">{{ $product->description }}</p>
      <div class="mt-8 flex flex-wrap gap-3">
        <button class="{{ $btn }} bg-accent text-accent-foreground hover:bg-accent/90" data-add="{{ $product->slug }}" type="button">
          Add to cart
        </button>
        <button class="{{ $btn }} bg-secondary text-secondary-foreground hover:bg-secondary/80" data-action="quote" data-product="{{ $product->name }}" type="button">
          Request a quote
        </button>
      </div>
      <ul class="mt-8 space-y-3 border-y py-6">
        <li class="flex items-center gap-3 text-sm">
          <svg aria-hidden="true" class="lucide lucide-truck size-5 text-accent" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"></path>
            <path d="M15 18H9"></path>
            <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"></path>
            <circle cx="17" cy="18" r="2"></circle>
            <circle cx="7" cy="18" r="2"></circle>
          </svg>
          Free delivery in 1 to 3 days
        </li>
        <li class="flex items-center gap-3 text-sm">
          <svg aria-hidden="true" class="lucide lucide-banknote size-5 text-accent" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
            <rect height="12" rx="2" width="20" x="2" y="6"></rect>
            <circle cx="12" cy="12" r="2"></circle>
            <path d="M6 12h.01M18 12h.01"></path>
          </svg>
          Pay on delivery: cash or mobile money
        </li>
        <li class="flex items-center gap-3 text-sm">
          <svg aria-hidden="true" class="lucide lucide-shield-check size-5 text-accent" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
            <path d="m9 12 2 2 4-4"></path>
          </svg>
          Tested for water, wear and fire
        </li>
      </ul>
      @if ($product->specs)
        <dl class="mt-6 divide-y">
          @foreach ($product->specs as $label => $value)
            <div class="flex justify-between gap-4 py-3 text-sm">
              <dt class="font-mono uppercase tracking-wider text-muted-foreground">{{ $label }}</dt>
              <dd class="text-right font-semibold">{{ $value }}</dd>
            </div>
          @endforeach
        </dl>
      @endif
    </div>
  </div>
  @if ($related->isNotEmpty())
    <section class="mt-24">
      <h2 class="mb-8 text-4xl font-black md:text-5xl">You may also need</h2>
      <div class="grid gap-x-6 gap-y-12 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($related as $item)
          @include('partials.product-card', ['product' => $item])
        @endforeach
      </div>
    </section>
  @endif
</main>
@endsection
