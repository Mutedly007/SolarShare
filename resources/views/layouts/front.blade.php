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

  <!-- ===== Page Preloader (inline so it renders before Vite bundles) ===== -->
  <div id="ss-preloader" style="
    position: fixed;
    inset: 0;
    z-index: 99999;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: #10202B;
    transition: opacity 0.6s cubic-bezier(0.4, 0, 0.2, 1), visibility 0.6s cubic-bezier(0.4, 0, 0.2, 1);
  ">
    <!-- Spinner container -->
    <div style="position: relative; width: 80px; height: 80px;">
      <!-- Outer ring -->
      <svg style="position: absolute; inset: 0; animation: ss-spin 1.8s linear infinite;" width="80" height="80" viewBox="0 0 80 80">
        <circle cx="40" cy="40" r="35" fill="none" stroke="rgba(255,176,32,0.12)" stroke-width="3"/>
        <circle cx="40" cy="40" r="35" fill="none" stroke="url(#ss-grad)" stroke-width="3" stroke-linecap="round" stroke-dasharray="160" stroke-dashoffset="120"/>
        <defs><linearGradient id="ss-grad" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" stop-color="#FFB020"/><stop offset="100%" stop-color="#FF6B3D"/></linearGradient></defs>
      </svg>
      <!-- Inner ring (counter-rotating) -->
      <svg style="position: absolute; inset: 12px; animation: ss-spin-reverse 2.4s linear infinite;" width="56" height="56" viewBox="0 0 56 56">
        <circle cx="28" cy="28" r="23" fill="none" stroke="rgba(56,189,248,0.1)" stroke-width="2"/>
        <circle cx="28" cy="28" r="23" fill="none" stroke="rgba(56,189,248,0.5)" stroke-width="2" stroke-linecap="round" stroke-dasharray="110" stroke-dashoffset="85"/>
      </svg>
      <!-- Sun core -->
      <div style="
        position: absolute;
        top: 50%; left: 50%;
        transform: translate(-50%, -50%);
        width: 22px; height: 22px;
        border-radius: 50%;
        background: linear-gradient(135deg, #FFB020, #FF8C00);
        box-shadow: 0 0 20px rgba(255,176,32,0.5), 0 0 40px rgba(255,176,32,0.2);
        animation: ss-core-pulse 1.8s ease-in-out infinite;
      "></div>
    </div>
    <!-- Brand -->
    <p style="
      margin-top: 1.5rem;
      font-family: 'Sora', 'DM Sans', system-ui, sans-serif;
      font-size: 0.8rem;
      font-weight: 600;
      color: rgba(255,255,255,0.4);
      letter-spacing: 0.18em;
      text-transform: uppercase;
      animation: ss-text-fade 1.8s ease-in-out infinite;
    ">SolarShare</p>
    <style>
      @keyframes ss-spin { to { transform: rotate(360deg); } }
      @keyframes ss-spin-reverse { to { transform: rotate(-360deg); } }
      @keyframes ss-core-pulse {
        0%, 100% { transform: translate(-50%,-50%) scale(1); opacity: 1; }
        50% { transform: translate(-50%,-50%) scale(1.15); opacity: 0.7; }
      }
      @keyframes ss-text-fade {
        0%, 100% { opacity: 0.4; }
        50% { opacity: 0.7; }
      }
    </style>
  </div>

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

  @includeUnless(request()->routeIs('onboarding.*'), 'partials.front.navbar')

  @if (session('success'))
  <div id="ss-flash-message" style="position:fixed; top:90px; left:50%; transform:translateX(-50%); z-index:10000; background:#10B981; color:#fff; padding:0.8rem 1.4rem; border-radius:12px; box-shadow:0 12px 30px -8px rgba(16,185,129,0.5); font-size:0.9rem; font-weight:600; max-width:90vw; text-align:center; transition:opacity 0.5s ease, visibility 0.5s ease;">
    {{ session('success') }}
  </div>
  <script>
    (function () {
      var flash = document.getElementById('ss-flash-message');
      if (flash) {
        setTimeout(function () {
          flash.style.opacity = '0';
          flash.style.visibility = 'hidden';
          setTimeout(function () { flash.remove(); }, 500);
        }, 4000);
      }
    })();
  </script>
  @endif

  <main>
    @yield('content')
  </main>

  @includeUnless(request()->routeIs('onboarding.*'), 'partials.front.footer')

  <!-- Dismiss preloader once everything is loaded -->
  <script>
    window.addEventListener('load', function() {
      var preloader = document.getElementById('ss-preloader');
      if (preloader) {
        preloader.style.opacity = '0';
        preloader.style.visibility = 'hidden';
        setTimeout(function() { preloader.remove(); }, 600);
      }
    });
  </script>

</body>
</html>
