{{-- resources/views/partials/front/navbar.blade.php --}}
<header id="ss-navbar" class="ss-navbar">
  <div class="ss-container">
    <nav class="ss-nav-container" aria-label="Main navigation">

      <!-- Logo: Sun Mark + Wordmark -->
      <a href="{{ url('/') }}" class="ss-brand" aria-label="SolarShare home">
        <svg class="ss-brand-mark" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <circle cx="18" cy="18" r="7" fill="#FFB020" />
          <path d="M18 2V7M18 29V34M2 18H7M29 18H34M6.68 6.68L10.22 10.22M25.78 25.78L29.32 29.32M6.68 29.32L10.22 25.78M25.78 10.22L29.32 6.68" stroke="#FF6B3D" stroke-width="2.6" stroke-linecap="round" />
          <circle cx="18" cy="18" r="13.5" stroke="#0F5C6B" stroke-width="1.8" stroke-dasharray="3 4" />
        </svg>
        Solar<span>Share</span>
      </a>

      <!-- Desktop Navigation Links -->
      <ul class="ss-nav-menu" role="menubar">
        <li role="none"><a href="{{ url('/#how-it-works') }}" class="ss-nav-link" role="menuitem">How it works</a></li>
        <li role="none"><a href="{{ url('/#equipment') }}" class="ss-nav-link" role="menuitem">Equipment</a></li>
        <li role="none"><a href="{{ url('/#impact') }}" class="ss-nav-link" role="menuitem">Impact</a></li>
        <li role="none"><a href="{{ url('/#community') }}" class="ss-nav-link" role="menuitem">Community</a></li>
        <li role="none"><a href="{{ url('/#faq') }}" class="ss-nav-link" role="menuitem">FAQ</a></li>
        <!-- Sun dot glider indicator -->
        <div id="ss-nav-sun-indicator" class="ss-nav-sun-indicator" aria-hidden="true"></div>
      </ul>

      <!-- Right Action Buttons -->
      <div class="ss-nav-actions">
        @auth
          <a href="{{ Route::has('dashboard') ? route('dashboard') : '#' }}" class="ss-btn ss-btn-ghost">Dashboard</a>
        @endauth
        @guest
          <a href="{{ route('login') }}" class="ss-btn ss-btn-ghost">Log in</a>
          <a href="{{ route('register') }}" class="ss-btn ss-btn-primary">Get started</a>
        @endguest

        <!-- Mobile Hamburger Toggle -->
        <button id="ss-hamburger" class="ss-hamburger" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="ss-mobile-menu">
          <span class="ss-hamburger-line"></span>
          <span class="ss-hamburger-line"></span>
          <span class="ss-hamburger-line"></span>
        </button>
      </div>

    </nav>
  </div>

  <!-- Fullscreen Mobile Menu -->
  <div id="ss-mobile-menu" class="ss-mobile-menu" aria-hidden="true">
    <ul class="ss-mobile-nav-list">
      <li class="ss-mobile-nav-item"><a href="{{ url('/#how-it-works') }}" class="ss-mobile-nav-link">How it works</a></li>
      <li class="ss-mobile-nav-item"><a href="{{ url('/#equipment') }}" class="ss-mobile-nav-link">Equipment</a></li>
      <li class="ss-mobile-nav-item"><a href="{{ url('/#impact') }}" class="ss-mobile-nav-link">Impact</a></li>
      <li class="ss-mobile-nav-item"><a href="{{ url('/#community') }}" class="ss-mobile-nav-link">Community</a></li>
      <li class="ss-mobile-nav-item"><a href="{{ url('/#faq') }}" class="ss-mobile-nav-link">FAQ</a></li>
    </ul>
    <div style="display: flex; flex-direction: column; gap: 1rem;">
      @auth
        <a href="{{ Route::has('dashboard') ? route('dashboard') : '#' }}" class="ss-btn ss-btn-primary w-100 ss-mobile-nav-link">Dashboard</a>
      @endauth
      @guest
        <a href="{{ route('login') }}" class="ss-btn ss-btn-secondary w-100 ss-mobile-nav-link">Log in</a>
        <a href="{{ route('register') }}" class="ss-btn ss-btn-primary w-100 ss-mobile-nav-link">Get started</a>
      @endguest
    </div>
  </div>
</header>
