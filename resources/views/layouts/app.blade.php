<!doctype html>
<html lang="en">
  <head>
    <script>
      try {
        var t = localStorage.getItem("theme");
        if (!t || t === "system") {
          t = matchMedia("(prefers-color-scheme: dark)").matches
            ? "dark"
            : "light";
        }
        document.documentElement.classList.add(t);
        document.documentElement.style.colorScheme = t;
      } catch (e) {
        document.documentElement.classList.add("light");
      }
    </script>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', 'REX | Flooring, Wall Panels and Boards in Tanzania')</title>
    <meta content="@yield('description', config('rex.description'))" name="description" />
    <link
      href="data:image/svg+xml,&lt;svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'&gt;&lt;rect width='100' height='100' rx='14' fill='%231e3a6e'/&gt;&lt;text x='50' y='70' font-size='58' font-family='Arial Black,Arial' font-weight='900' text-anchor='middle' fill='white'&gt;R&lt;/text&gt;&lt;/svg&gt;"
      rel="icon"
      type="image/svg+xml"
    />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      crossorigin=""
      href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@500..900&amp;family=Manrope:wght@400..800&amp;family=JetBrains+Mono:wght@400..700&amp;display=swap"
      rel="stylesheet"
    />
    <!-- Detect dark mode preference and set the class before next-themes loads. This avoids a flash of unstyled content (FOUC) when the page loads. -->
    <link href="{{ asset('css/index.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/site.css') }}" rel="stylesheet" />
    <meta content="@yield('title', 'REX | Flooring, Wall Panels and Boards in Tanzania')" property="og:title" />
    <meta content="@yield('description', config('rex.description'))" property="og:description" />
    <meta content="website" property="og:type" />
    <meta content="{{ asset('assets/img1.jpg') }}" property="og:image" />
  </head>
  <body>
    <div id="root">
      <div class="min-h-screen bg-background">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
      </div>
    </div>
    <script>
      window.REX_PRODUCTS = @json($cartProducts);
      window.REX_CATEGORIES = @json(config('rex.categories'));
    </script>
    <script defer src="{{ asset('js/site.js') }}"></script>
  </body>
</html>
