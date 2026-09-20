{{-- resources/views/layouts/front.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'SolarShare') — Peer-to-Peer Renewable Energy Equipment Sharing</title>
  <meta name="description" content="@yield('meta_description', 'Borrow the sun. Lend your own. Rent portable solar panels, batteries, and small wind turbines from neighbors, or earn from idle clean power gear.')">

  <!-- Assets: Vite bundles Bootstrap CSS + Landing CSS + Landing JS -->
  @vite(['resources/js/front/landing.js'])
</head>
<body>

  <!-- ==========================================================================
       THE SUN IS THE NARRATOR: Fixed Sky Layer & Orbiting Narrator Sun
       ========================================================================== -->
  <div id="ss-sky-backdrop" class="ss-sky-backdrop" aria-hidden="true">
    <svg id="ss-sky-stars" class="ss-sky-stars" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
      <circle cx="12%" cy="18%" r="1.5" fill="#FFFFFF" opacity="0.6" />
      <circle cx="28%" cy="10%" r="2" fill="#FFE3C2" opacity="0.8" />
      <circle cx="45%" cy="22%" r="1.2" fill="#FFFFFF" opacity="0.5" />
      <circle cx="62%" cy="8%" r="1.8" fill="#FFF4D0" opacity="0.75" />
      <circle cx="78%" cy="16%" r="2.2" fill="#FFE3C2" opacity="0.9" />
      <circle cx="91%" cy="25%" r="1.4" fill="#FFFFFF" opacity="0.6" />
      <circle cx="20%" cy="38%" r="1.6" fill="#FFF4D0" opacity="0.7" />
      <circle cx="85%" cy="42%" r="1.8" fill="#FFFFFF" opacity="0.8" />
    </svg>
  </div>

  <!-- The Narrator Sun: moves along an arc across the viewport on scroll -->
  <div id="ss-narrator-sun" class="ss-narrator-sun" aria-hidden="true"></div>

  @include('partials.front.navbar')

  <main>
    @yield('content')
  </main>

  @include('partials.front.footer')

</body>
</html>
