@extends('layouts.app')

@section('content')
        <section class="relative overflow-hidden">
          <img
            alt="Living room with fluted wall panels"
            class="absolute inset-0 size-full object-cover"
            src="{{ asset('assets/img1.jpg') }}"
          />
          <div
            class="absolute inset-0 bg-gradient-to-r from-[oklch(0.16_0.04_255)]/95 via-[oklch(0.16_0.04_255)]/70 to-transparent"
          ></div>
          <div class="relative mx-auto max-w-7xl px-4 py-24 md:py-36">
            <p
              class="mb-6 font-mono text-xs uppercase tracking-[0.3em] text-accent"
              style="opacity: 1; transform: none"
            >
              Building surfaces · Tanzania
            </p>
            <h1
              class="max-w-3xl text-balance text-6xl font-black leading-[0.9] text-white md:text-8xl"
              style="opacity: 1; transform: none"
            >
              Every surface, <span class="text-accent">built to last.</span>
            </h1>
            <p class="mt-6 max-w-lg text-lg text-white/80" style="opacity: 1">
              Flooring, interior wall finishes, exterior cladding, accessories
              and furniture boards for homes and projects of every size.
            </p>
            <div
              class="mt-10 flex flex-wrap gap-3"
              style="opacity: 1; transform: none"
            >
              <a
                class="inline-flex shrink-0 items-center justify-center gap-2 text-sm font-medium whitespace-nowrap transition-all outline-none focus-visible:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/50 disabled:pointer-events-none disabled:opacity-50 aria-invalid:border-destructive aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 [&amp;_svg]:pointer-events-none [&amp;_svg]:shrink-0 [&amp;_svg:not([class*='size-'])]:size-4 h-10 rounded-md px-6 has-[&gt;svg]:px-4 bg-accent text-accent-foreground hover:bg-accent/90"
                data-size="lg"
                data-slot="button"
                data-variant="default"
                href="{{ route('shop') }}"
                >Shop materials
                <svg
                  aria-hidden="true"
                  class="lucide lucide-arrow-right"
                  fill="none"
                  height="24"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  width="24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path></svg></a
              ><button
                class="inline-flex shrink-0 items-center justify-center gap-2 text-sm font-medium whitespace-nowrap transition-all outline-none focus-visible:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/50 disabled:pointer-events-none disabled:opacity-50 aria-invalid:border-destructive aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 [&amp;_svg]:pointer-events-none [&amp;_svg]:shrink-0 [&amp;_svg:not([class*='size-'])]:size-4 bg-secondary text-secondary-foreground hover:bg-secondary/80 h-10 rounded-md px-6 has-[&gt;svg]:px-4"
                data-action="quote"
                data-size="lg"
                data-slot="button"
                data-variant="secondary"
              >
                Get a free quote
              </button>
            </div>
            <div class="mt-14 grid max-w-3xl gap-3 sm:grid-cols-3">
              <div
                class="flex items-center gap-3 rounded-sm border border-white/15 bg-white/10 p-4 text-white backdrop-blur"
                style="opacity: 1; transform: none"
              >
                <svg
                  aria-hidden="true"
                  class="lucide lucide-truck size-5 shrink-0 text-accent"
                  fill="none"
                  height="24"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  width="24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"
                  ></path>
                  <path d="M15 18H9"></path>
                  <path
                    d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"
                  ></path>
                  <circle cx="17" cy="18" r="2"></circle>
                  <circle cx="7" cy="18" r="2"></circle>
                </svg>
                <div>
                  <div
                    class="font-serif text-lg font-bold uppercase leading-none"
                  >
                    Free delivery
                  </div>
                  <div class="text-xs text-white/70">
                    1 to 3 days, anywhere in Tanzania
                  </div>
                </div>
              </div>
              <div
                class="flex items-center gap-3 rounded-sm border border-white/15 bg-white/10 p-4 text-white backdrop-blur"
                style="opacity: 1; transform: none"
              >
                <svg
                  aria-hidden="true"
                  class="lucide lucide-banknote size-5 shrink-0 text-accent"
                  fill="none"
                  height="24"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  width="24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <rect height="12" rx="2" width="20" x="2" y="6"></rect>
                  <circle cx="12" cy="12" r="2"></circle>
                  <path d="M6 12h.01M18 12h.01"></path>
                </svg>
                <div>
                  <div
                    class="font-serif text-lg font-bold uppercase leading-none"
                  >
                    Pay on delivery
                  </div>
                  <div class="text-xs text-white/70">
                    Cash, M-Pesa, Tigo Pesa or Airtel
                  </div>
                </div>
              </div>
              <div
                class="flex items-center gap-3 rounded-sm border border-white/15 bg-white/10 p-4 text-white backdrop-blur"
                style="opacity: 1; transform: none"
              >
                <svg
                  aria-hidden="true"
                  class="lucide lucide-shield-check size-5 shrink-0 text-accent"
                  fill="none"
                  height="24"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  width="24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"
                  ></path>
                  <path d="m9 12 2 2 4-4"></path>
                </svg>
                <div>
                  <div
                    class="font-serif text-lg font-bold uppercase leading-none"
                  >
                    Quality tested
                  </div>
                  <div class="text-xs text-white/70">Water, wear and fire</div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="overflow-hidden bg-accent py-4 text-accent-foreground">
          <div
            class="flex w-max gap-10 whitespace-nowrap font-serif text-2xl font-extrabold uppercase rex-marquee"
          >
            <span class="flex items-center gap-10"
              >SPC flooring<span class="opacity-50">+</span></span
            ><span class="flex items-center gap-10"
              >Fluted WPC<span class="opacity-50">+</span></span
            ><span class="flex items-center gap-10"
              >PU stone<span class="opacity-50">+</span></span
            ><span class="flex items-center gap-10"
              >Marble sheet<span class="opacity-50">+</span></span
            ><span class="flex items-center gap-10"
              >Exterior cladding<span class="opacity-50">+</span></span
            ><span class="flex items-center gap-10"
              >Skirting<span class="opacity-50">+</span></span
            ><span class="flex items-center gap-10"
              >Installation clips<span class="opacity-50">+</span></span
            ><span class="flex items-center gap-10"
              >Melamine boards<span class="opacity-50">+</span></span
            ><span class="flex items-center gap-10"
              >SPC flooring<span class="opacity-50">+</span></span
            ><span class="flex items-center gap-10"
              >Fluted WPC<span class="opacity-50">+</span></span
            ><span class="flex items-center gap-10"
              >PU stone<span class="opacity-50">+</span></span
            ><span class="flex items-center gap-10"
              >Marble sheet<span class="opacity-50">+</span></span
            ><span class="flex items-center gap-10"
              >Exterior cladding<span class="opacity-50">+</span></span
            ><span class="flex items-center gap-10"
              >Skirting<span class="opacity-50">+</span></span
            ><span class="flex items-center gap-10"
              >Installation clips<span class="opacity-50">+</span></span
            ><span class="flex items-center gap-10"
              >Melamine boards<span class="opacity-50">+</span></span
            >
          </div>
        </div>
        <section class="mx-auto max-w-7xl px-4 py-24">
          <div class="mb-10">
            <p class="font-mono text-xs uppercase tracking-[0.3em] text-accent">
              01 / Categories
            </p>
            <h2 class="mt-2 text-5xl font-black md:text-6xl">
              Shop by category
            </h2>
          </div>
          <div class="grid gap-4 md:grid-cols-4 md:grid-rows-2 md:h-[640px]">
            <a
              class="group relative h-64 overflow-hidden rounded-sm text-left md:h-auto md:col-span-2 md:row-span-2 block"
              href="{{ route('shop') }}?category=flooring"
              style="opacity: 1; transform: none"
              ><img
                alt="Flooring"
                class="absolute inset-0 size-full object-cover transition-transform duration-700 group-hover:scale-105"
                loading="lazy"
                src="{{ asset('assets/img2.jpg') }}" />
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"
              ></div>
              <div
                class="absolute inset-x-0 bottom-0 flex items-end justify-between p-6 text-white"
              >
                <div>
                  <h3 class="text-3xl font-extrabold md:text-4xl">Flooring</h3>
                  <p class="text-sm text-white/75">SPC, WPC and porcelain</p>
                </div>
                <span
                  class="grid size-10 place-items-center rounded-full bg-accent text-accent-foreground transition-transform group-hover:translate-x-1"
                  ><svg
                    aria-hidden="true"
                    class="lucide lucide-arrow-right size-4"
                    fill="none"
                    height="24"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    width="24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path></svg
                ></span></div></a
            ><a
              class="group relative h-64 overflow-hidden rounded-sm text-left md:h-auto block"
              href="{{ route('shop') }}?category=interior"
              style="opacity: 1; transform: none"
              ><img
                alt="Interior walls"
                class="absolute inset-0 size-full object-cover transition-transform duration-700 group-hover:scale-105"
                loading="lazy"
                src="{{ asset('assets/img3.jpg') }}" />
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"
              ></div>
              <div
                class="absolute inset-x-0 bottom-0 flex items-end justify-between p-6 text-white"
              >
                <div>
                  <h3 class="text-3xl font-extrabold md:text-4xl">
                    Interior walls
                  </h3>
                  <p class="text-sm text-white/75">
                    Fluted WPC, PU stone, marble sheet
                  </p>
                </div>
                <span
                  class="grid size-10 place-items-center rounded-full bg-accent text-accent-foreground transition-transform group-hover:translate-x-1"
                  ><svg
                    aria-hidden="true"
                    class="lucide lucide-arrow-right size-4"
                    fill="none"
                    height="24"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    width="24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path></svg
                ></span></div></a
            ><a
              class="group relative h-64 overflow-hidden rounded-sm text-left md:h-auto block"
              href="{{ route('shop') }}?category=exterior"
              style="opacity: 1; transform: none"
              ><img
                alt="Exterior cladding"
                class="absolute inset-0 size-full object-cover transition-transform duration-700 group-hover:scale-105"
                loading="lazy"
                src="{{ asset('assets/img4.jpg') }}" />
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"
              ></div>
              <div
                class="absolute inset-x-0 bottom-0 flex items-end justify-between p-6 text-white"
              >
                <div>
                  <h3 class="text-3xl font-extrabold md:text-4xl">
                    Exterior cladding
                  </h3>
                  <p class="text-sm text-white/75">Weatherproof WPC facades</p>
                </div>
                <span
                  class="grid size-10 place-items-center rounded-full bg-accent text-accent-foreground transition-transform group-hover:translate-x-1"
                  ><svg
                    aria-hidden="true"
                    class="lucide lucide-arrow-right size-4"
                    fill="none"
                    height="24"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    width="24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path></svg
                ></span></div></a
            ><a
              class="group relative h-64 overflow-hidden rounded-sm text-left md:h-auto block"
              href="{{ route('shop') }}?category=accessories"
              style="opacity: 1; transform: none"
              ><img
                alt="Accessories"
                class="absolute inset-0 size-full object-cover transition-transform duration-700 group-hover:scale-105"
                loading="lazy"
                src="{{ asset('assets/img5.jpg') }}" />
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"
              ></div>
              <div
                class="absolute inset-x-0 bottom-0 flex items-end justify-between p-6 text-white"
              >
                <div>
                  <h3 class="text-3xl font-extrabold md:text-4xl">
                    Accessories
                  </h3>
                  <p class="text-sm text-white/75">
                    Clips, skirting, adhesive, profiles
                  </p>
                </div>
                <span
                  class="grid size-10 place-items-center rounded-full bg-accent text-accent-foreground transition-transform group-hover:translate-x-1"
                  ><svg
                    aria-hidden="true"
                    class="lucide lucide-arrow-right size-4"
                    fill="none"
                    height="24"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    width="24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path></svg
                ></span></div></a
            ><a
              class="group relative h-64 overflow-hidden rounded-sm text-left md:h-auto block"
              href="{{ route('shop') }}?category=boards"
              style="opacity: 1; transform: none"
              ><img
                alt="Furniture boards"
                class="absolute inset-0 size-full object-cover transition-transform duration-700 group-hover:scale-105"
                loading="lazy"
                src="{{ asset('assets/img6.jpg') }}" />
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"
              ></div>
              <div
                class="absolute inset-x-0 bottom-0 flex items-end justify-between p-6 text-white"
              >
                <div>
                  <h3 class="text-3xl font-extrabold md:text-4xl">
                    Furniture boards
                  </h3>
                  <p class="text-sm text-white/75">
                    Melamine and MDF for joinery
                  </p>
                </div>
                <span
                  class="grid size-10 place-items-center rounded-full bg-accent text-accent-foreground transition-transform group-hover:translate-x-1"
                  ><svg
                    aria-hidden="true"
                    class="lucide lucide-arrow-right size-4"
                    fill="none"
                    height="24"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    width="24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path></svg
                ></span></div
            ></a>
          </div>
        </section>
        <section class="border-y bg-card">
          <div class="mx-auto max-w-7xl px-4 py-24">
            <div class="flex items-end justify-between">
              <div class="mb-10">
                <p
                  class="font-mono text-xs uppercase tracking-[0.3em] text-accent"
                >
                  02 / Popular
                </p>
                <h2 class="mt-2 text-5xl font-black md:text-6xl">
                  Best sellers
                </h2>
              </div>
              <a
                class="inline-flex shrink-0 items-center justify-center gap-2 rounded-md text-sm font-medium whitespace-nowrap transition-all outline-none focus-visible:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/50 disabled:pointer-events-none disabled:opacity-50 aria-invalid:border-destructive aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 [&amp;_svg]:pointer-events-none [&amp;_svg]:shrink-0 [&amp;_svg:not([class*='size-'])]:size-4 hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50 h-9 px-4 py-2 has-[&gt;svg]:px-3 mb-10"
                data-size="default"
                data-slot="button"
                data-variant="ghost"
                href="{{ route('shop') }}"
                >View all
                <svg
                  aria-hidden="true"
                  class="lucide lucide-arrow-right"
                  fill="none"
                  height="24"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  width="24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path></svg
              ></a>
            </div>
            <div class="grid gap-x-6 gap-y-12 sm:grid-cols-2 lg:grid-cols-4">
              @foreach ($bestSellers as $product)
                @include('partials.product-card')
              @endforeach
            </div>
          </div>
        </section>
        <section class="mx-auto max-w-7xl px-4 py-24">
          <div class="rex-split">
            <div class="rex-split-media">
              <img
                alt="Close-up of oak wall panel grain"
                loading="lazy"
                src="{{ asset('assets/img3.jpg') }}"
              />
            </div>
            <div>
              <p class="font-mono text-xs uppercase tracking-[0.3em] text-accent">
                03 / Our standard
              </p>
              <h2 class="mt-2 text-5xl font-black md:text-6xl">
                Quality you can trust
              </h2>
              <p class="mt-4 max-w-md text-muted-foreground">
                Every REX product is tested for water, wear and fire before we
                sell it, so it looks right on day one and stays that way.
              </p>
              <ol class="rex-numlist">
                <li><span>01</span>100% waterproof SPC and WPC cores</li>
                <li><span>02</span>Click-lock and clip systems, no specialist tools</li>
                <li><span>03</span>Fire-rated interior wall panels</li>
                <li><span>04</span>Matched accessories for clean edges and joints</li>
              </ol>
            </div>
          </div>
        </section>
        <section class="mx-auto max-w-7xl px-4 pb-24">
          <div class="rex-split">
            <div>
              <p class="font-mono text-xs uppercase tracking-[0.3em] text-accent">
                04 / Delivery
              </p>
              <h2 class="mt-2 text-5xl font-black md:text-6xl">
                Quick delivery in Tanzania
              </h2>
              <p class="mt-4 max-w-md text-muted-foreground">
                We dispatch fast and pack every board and panel flat and
                edge-protected, so it arrives ready to fit. Pay when it reaches
                you.
              </p>
              <div class="rex-stats">
                <div><b>1&ndash;3 days</b><small>Door or site delivery</small></div>
                <div><b>Free</b><small>Anywhere in Tanzania</small></div>
                <div><b>On arrival</b><small>Cash or mobile money</small></div>
              </div>
            </div>
            <div class="rex-split-media">
              <img
                alt="Finished home with REX exterior cladding"
                loading="lazy"
                src="{{ asset('assets/img4.jpg') }}"
              />
            </div>
          </div>
        </section>
        <section class="mx-auto max-w-7xl px-4 pb-24">
          <div class="rex-band">
            <img alt="" loading="lazy" src="{{ asset('assets/img16.jpg') }}" />
            <div class="rex-band-grid">
              <div class="rex-glass">
                <svg aria-hidden="true" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M3 11h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-5Zm0 0a9 9 0 1 1 18 0m0 0v5a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3Z"
                  ></path>
                  <path d="M21 16v2a4 4 0 0 1-4 4h-5"></path>
                </svg>
                <h3>Expert support</h3>
                <p>
                  Help choosing, measuring and installing, before, during and
                  after your order.
                </p>
              </div>
              <div class="rex-glass">
                <svg aria-hidden="true" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                  <rect height="12" rx="2" width="20" x="2" y="6"></rect>
                  <circle cx="12" cy="12" r="2"></circle>
                  <path d="M6 12h.01M18 12h.01"></path>
                </svg>
                <h3>Cash on delivery</h3>
                <p>
                  Pay only when your order arrives, with cash or mobile money at
                  the door.
                </p>
              </div>
              <div class="rex-glass">
                <svg aria-hidden="true" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"
                  ></path>
                  <path d="M15 18H9"></path>
                  <path
                    d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"
                  ></path>
                  <circle cx="17" cy="18" r="2"></circle>
                  <circle cx="7" cy="18" r="2"></circle>
                </svg>
                <h3>Fast, free shipping</h3>
                <p>
                  Packed with care and delivered with tracking, anywhere in
                  Tanzania.
                </p>
              </div>
            </div>
          </div>
        </section>
        <section class="mx-auto max-w-7xl px-4 py-24" id="serve">
          <div class="mb-10">
            <p class="font-mono text-xs uppercase tracking-[0.3em] text-accent">
              05 / Who we serve
            </p>
            <h2 class="mt-2 text-5xl font-black md:text-6xl">
              Built for every kind of builder
            </h2>
          </div>
          <div
            class="grid gap-px overflow-hidden rounded-sm border bg-border md:grid-cols-3"
          >
            <div class="bg-background p-8">
              <svg
                aria-hidden="true"
                class="lucide lucide-house size-8 text-accent"
                fill="none"
                height="24"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                width="24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                <path
                  d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
                ></path>
              </svg>
              <h3 class="mt-6 text-3xl font-extrabold">Homeowners</h3>
              <p class="mt-2 text-muted-foreground">
                Pick a finish, we measure, deliver and recommend a trusted
                fitter.
              </p>
            </div>
            <div class="bg-background p-8">
              <svg
                aria-hidden="true"
                class="lucide lucide-hard-hat size-8 text-accent"
                fill="none"
                height="24"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                width="24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path d="M10 10V5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5"></path>
                <path d="M14 6a6 6 0 0 1 6 6v3"></path>
                <path d="M4 15v-3a6 6 0 0 1 6-6"></path>
                <rect height="4" rx="1" width="20" x="2" y="15"></rect>
              </svg>
              <h3 class="mt-6 text-3xl font-extrabold">Contractors</h3>
              <p class="mt-2 text-muted-foreground">
                Bulk pricing, site delivery schedules and fast quotes for
                tenders.
              </p>
            </div>
            <div class="bg-background p-8">
              <svg
                aria-hidden="true"
                class="lucide lucide-palette size-8 text-accent"
                fill="none"
                height="24"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                width="24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12 22a1 1 0 0 1 0-20 10 9 0 0 1 10 9 5 5 0 0 1-5 5h-2.25a1.75 1.75 0 0 0-1.4 2.8l.3.4a1.75 1.75 0 0 1-1.4 2.8z"
                ></path>
                <circle cx="13.5" cy="6.5" fill="currentColor" r=".5"></circle>
                <circle cx="17.5" cy="10.5" fill="currentColor" r=".5"></circle>
                <circle cx="6.5" cy="12.5" fill="currentColor" r=".5"></circle>
                <circle cx="8.5" cy="7.5" fill="currentColor" r=".5"></circle>
              </svg>
              <h3 class="mt-6 text-3xl font-extrabold">Interior designers</h3>
              <p class="mt-2 text-muted-foreground">
                Free samples, spec sheets and trade pricing for every project.
              </p>
            </div>
          </div>
        </section>
        <section class="mx-auto max-w-7xl px-4 pb-24">
          <div class="relative overflow-hidden rounded-sm">
            <img
              alt="Feature wall"
              class="absolute inset-0 size-full object-cover"
              loading="lazy"
              src="{{ asset('assets/img11.jpg') }}"
            />
            <div
              class="absolute inset-0 bg-gradient-to-r from-[oklch(0.16_0.04_255)] via-[oklch(0.16_0.04_255)]/80 to-transparent"
            ></div>
            <div class="relative max-w-xl p-10 text-white md:p-16">
              <p
                class="font-mono text-xs uppercase tracking-[0.3em] text-accent"
              >
                This week only
              </p>
              <h2 class="mt-4 text-5xl font-black leading-[0.95] md:text-7xl">
                Up to 30% off wall panels
              </h2>
              <p class="mt-4 text-white/80">
                Fluted WPC, PU stone and marble sheet. Refresh a feature wall in
                a weekend.
              </p>
              <div aria-label="Offer ends in" class="rex-countdown" data-countdown role="timer">
                <div><b data-cd="d">00</b><small>Days</small></div>
                <div><b data-cd="h">00</b><small>Hrs</small></div>
                <div><b data-cd="m">00</b><small>Min</small></div>
                <div><b data-cd="s">00</b><small>Sec</small></div>
              </div>
              <a
                class="inline-flex shrink-0 items-center justify-center gap-2 text-sm font-medium whitespace-nowrap transition-all outline-none focus-visible:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/50 disabled:pointer-events-none disabled:opacity-50 aria-invalid:border-destructive aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 [&amp;_svg]:pointer-events-none [&amp;_svg]:shrink-0 [&amp;_svg:not([class*='size-'])]:size-4 h-10 rounded-md px-6 has-[&gt;svg]:px-4 mt-8 bg-accent text-accent-foreground hover:bg-accent/90"
                data-size="lg"
                data-slot="button"
                data-variant="default"
                href="{{ route('shop') }}?category=interior"
                >Shop the deals
                <svg
                  aria-hidden="true"
                  class="lucide lucide-arrow-right"
                  fill="none"
                  height="24"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  width="24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path d="M5 12h14"></path>
                  <path d="m12 5 7 7-7 7"></path></svg
              ></a>
            </div>
          </div>
        </section>
        <section class="bg-primary text-primary-foreground">
          <div
            class="mx-auto grid max-w-7xl items-center gap-10 px-4 py-20 md:grid-cols-2"
          >
            <div>
              <svg
                aria-hidden="true"
                class="lucide lucide-headset size-10 text-accent"
                fill="none"
                height="24"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                width="24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M3 11h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-5Zm0 0a9 9 0 1 1 18 0m0 0v5a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3Z"
                ></path>
                <path d="M21 16v2a4 4 0 0 1-4 4h-5"></path>
              </svg>
              <h2 class="mt-6 text-5xl font-black leading-[0.95] md:text-6xl">
                Not sure how much you need?
              </h2>
              <p class="mt-4 max-w-md opacity-80">
                Send us your room sizes or drawings. Our team will calculate
                quantities and send a free quote within 24 hours.
              </p>
            </div>
            <div class="flex flex-wrap gap-3 md:justify-end">
              <button
                class="inline-flex shrink-0 items-center justify-center gap-2 text-sm font-medium whitespace-nowrap transition-all outline-none focus-visible:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/50 disabled:pointer-events-none disabled:opacity-50 aria-invalid:border-destructive aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 [&amp;_svg]:pointer-events-none [&amp;_svg]:shrink-0 [&amp;_svg:not([class*='size-'])]:size-4 h-10 rounded-md px-6 has-[&gt;svg]:px-4 bg-accent text-accent-foreground hover:bg-accent/90"
                data-action="quote"
                data-size="lg"
                data-slot="button"
                data-variant="default"
              >
                Request a quote</button
              ><button
                class="inline-flex shrink-0 items-center justify-center gap-2 text-sm font-medium whitespace-nowrap transition-all outline-none focus-visible:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/50 disabled:pointer-events-none disabled:opacity-50 aria-invalid:border-destructive aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 [&amp;_svg]:pointer-events-none [&amp;_svg]:shrink-0 [&amp;_svg:not([class*='size-'])]:size-4 bg-secondary text-secondary-foreground hover:bg-secondary/80 h-10 rounded-md px-6 has-[&gt;svg]:px-4"
                data-action="whatsapp"
                data-size="lg"
                data-slot="button"
                data-variant="secondary"
              >
                Chat on WhatsApp
              </button>
            </div>
          </div>
        </section>
        
@endsection
