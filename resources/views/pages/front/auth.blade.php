{{-- resources/views/pages/front/auth.blade.php --}}
@extends('layouts.front')

@section('title', 'Sign In or Join SolarShare — Clean Energy Sharing')
@section('meta_description', 'Sign in to SolarShare or register a new account to rent portable solar panels, home batteries, and small wind turbines from neighbors.')

@section('content')
<section class="ss-auth-section" data-initial-tab="{{ $initialTab ?? 'login' }}">
  <!-- Ambient Solar Glow Orbs in Background -->
  <div class="ss-auth-orb ss-auth-orb-amber" aria-hidden="true"></div>
  <div class="ss-auth-orb ss-auth-orb-teal" aria-hidden="true"></div>

  <div class="ss-container ss-auth-container">

    <!-- Top Breadcrumb / Return Link -->
    <div class="ss-auth-topbar">
      <a href="{{ url('/') }}" class="ss-auth-back-link">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <line x1="19" y1="12" x2="5" y2="12"></line>
          <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
        <span>Back to SolarShare</span>
      </a>
      <div class="ss-auth-trust-badge">
        <span class="ss-pulse-dot"></span>
        <span>100% Verified Neighborhood Sharing</span>
      </div>
    </div>

    <!-- Main Split Glass Auth Card -->
    <div class="ss-auth-card">

      <!-- Left Column: Visual Brand & Community Value Showcase -->
      <div class="ss-auth-showcase">
        <div class="ss-auth-showcase-content">
          
          <div class="ss-auth-badge">
            <svg class="ss-auth-badge-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <circle cx="12" cy="12" r="5"></circle>
              <line x1="12" y1="1" x2="12" y2="3"></line>
              <line x1="12" y1="21" x2="12" y2="23"></line>
              <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
              <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
              <line x1="1" y1="12" x2="3" y2="12"></line>
              <line x1="21" y1="12" x2="23" y2="12"></line>
              <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
              <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
            </svg>
            <span>The SolarShare Network</span>
          </div>

          <h1 class="ss-auth-showcase-title">
            Borrow the sun.<br>
            <span class="ss-text-gradient">Power your world.</span>
          </h1>

          <p class="ss-auth-showcase-desc">
            Connect with verified neighbors to rent high-capacity power stations and solar gear on demand, or earn passive income from your idle clean energy setup.
          </p>

          <!-- Key Benefit Points -->
          <div class="ss-auth-perks">
            <div class="ss-auth-perk-item">
              <div class="ss-auth-perk-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                </svg>
              </div>
              <div class="ss-auth-perk-text">
                <strong>940+ Clean Power Units</strong>
                <span>EcoFlow, Jackery, GoalZero & more ready today</span>
              </div>
            </div>

            <div class="ss-auth-perk-item">
              <div class="ss-auth-perk-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                </svg>
              </div>
              <div class="ss-auth-perk-text">
                <strong>$10,000 Gear Guarantee</strong>
                <span>Every transaction covered with peer insurance</span>
              </div>
            </div>

            <div class="ss-auth-perk-item">
              <div class="ss-auth-perk-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                  <circle cx="12" cy="10" r="3"></circle>
                </svg>
              </div>
              <div class="ss-auth-perk-text">
                <strong>Local Neighborhood Pickups</strong>
                <span>Average distance just 1.1 miles from your doorstep</span>
              </div>
            </div>
          </div>

          <!-- Mini Community Testimonial Card -->
          <div class="ss-auth-mini-quote">
            <div class="ss-auth-quote-stars">★★★★★</div>
            <p class="ss-auth-quote-text">
              “Renting out my solar generator when not on road trips made me $420 this summer while helping neighbors stay powered.”
            </p>
            <div class="ss-auth-quote-author">
              <div class="ss-auth-avatar">JR</div>
              <div>
                <strong>Jordan R.</strong>
                <span>SolarShare Lender • Boulder, CO</span>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Right Column: Interactive Tabbed Form (Login / Register) -->
      <div class="ss-auth-hub">
        
        <!-- Tab Switcher Navigation -->
        <div class="ss-auth-tab-nav" role="tablist" aria-label="Sign in or Sign up">
          <div class="ss-auth-tab-glider" id="ss-auth-glider" aria-hidden="true"></div>
          <button 
            type="button" 
            role="tab" 
            class="ss-auth-tab-btn {{ ($initialTab ?? 'login') === 'login' ? 'is-active' : '' }}" 
            id="ss-tab-btn-login" 
            aria-selected="{{ ($initialTab ?? 'login') === 'login' ? 'true' : 'false' }}" 
            aria-controls="ss-auth-panel-login"
            data-tab="login"
          >
            Log In
          </button>
          <button 
            type="button" 
            role="tab" 
            class="ss-auth-tab-btn {{ ($initialTab ?? 'login') === 'register' ? 'is-active' : '' }}" 
            id="ss-tab-btn-register" 
            aria-selected="{{ ($initialTab ?? 'login') === 'register' ? 'true' : 'false' }}" 
            aria-controls="ss-auth-panel-register"
            data-tab="register"
          >
            Create Account
          </button>
        </div>

        <!-- ==========================================
             PANEL 1: LOGIN FORM
             ========================================== -->
        <div 
          id="ss-auth-panel-login" 
          class="ss-auth-panel {{ ($initialTab ?? 'login') === 'login' ? 'is-active' : '' }}" 
          role="tabpanel" 
          aria-labelledby="ss-tab-btn-login"
        >
          <div class="ss-auth-header">
            <h2 class="ss-auth-title">Welcome back</h2>
            <p class="ss-auth-subtitle">Enter your credentials to access your SolarShare dashboard</p>
          </div>

          <!-- Social Quick Sign-In -->
          <div class="ss-auth-socials">
            <button type="button" class="ss-auth-oauth-btn" aria-label="Sign in with Google">
              <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true">
                <path fill="#EA4335" d="M12 5c1.6 0 3 .6 4.1 1.6l3.1-3.1C17.3 1.8 14.8 1 12 1 7.5 1 3.7 3.6 1.9 7.3l3.7 2.9C6.5 7.4 9 5 12 5z"/>
                <path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.7-.2-2.3H12v4.5h6.5c-.3 1.5-1.1 2.8-2.4 3.7l3.7 2.9c2.2-2 3.7-5.1 3.7-8.8z"/>
                <path fill="#FBBC05" d="M5.6 14.8c-.2-.7-.4-1.5-.4-2.3s.1-1.6.4-2.3L1.9 7.3C.7 9.7 0 12.3 0 15.2c0 2.8.7 5.5 1.9 7.8l3.7-2.9z"/>
                <path fill="#34A853" d="M12 23.5c3.2 0 6-1.1 8-3l-3.7-2.9c-1.1.7-2.5 1.2-4.3 1.2-3 0-5.5-2-6.4-4.8L1.9 17C3.7 20.7 7.5 23.5 12 23.5z"/>
              </svg>
              <span>Google</span>
            </button>
            <button type="button" class="ss-auth-oauth-btn" aria-label="Sign in with Apple">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M15.97 6.89c.66-.82 1.11-1.95.99-3.09-.95.04-2.11.64-2.79 1.45-.6.7-1.13 1.84-.99 2.96 1.06.08 2.14-.54 2.79-1.32z"/>
              </svg>
              <span>Apple</span>
            </button>
          </div>

          <div class="ss-auth-divider">
            <span>or sign in with email</span>
          </div>

          <!-- Static Login Form -->
          <form class="ss-auth-form" id="ss-login-form" onsubmit="return false;">
            
            <!-- Email Input -->
            <div class="ss-form-group">
              <label for="ss-login-email" class="ss-form-label">Email address</label>
              <div class="ss-input-wrap">
                <span class="ss-input-icon">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                  </svg>
                </span>
                <input 
                  type="email" 
                  id="ss-login-email" 
                  name="email" 
                  class="ss-form-input" 
                  placeholder="name@example.com" 
                  autocomplete="email"
                  required
                >
              </div>
            </div>

            <!-- Password Input with Toggle -->
            <div class="ss-form-group">
              <div class="ss-form-label-row">
                <label for="ss-login-password" class="ss-form-label">Password</label>
                <!-- Line for Forgot Password -->
                <button type="button" class="ss-forgot-pwd-link" id="ss-btn-forgot-password">
                  Forgot password?
                </button>
              </div>
              <div class="ss-input-wrap">
                <span class="ss-input-icon">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                  </svg>
                </span>
                <input 
                  type="password" 
                  id="ss-login-password" 
                  name="password" 
                  class="ss-form-input" 
                  placeholder="Enter your password" 
                  autocomplete="current-password"
                  required
                >
                <button type="button" class="ss-pwd-toggle" aria-label="Toggle password visibility" data-target="ss-login-password">
                  <svg class="ss-eye-show" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                  </svg>
                  <svg class="ss-eye-hide d-none" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                    <line x1="1" y1="1" x2="23" y2="23"></line>
                  </svg>
                </button>
              </div>
            </div>

            <!-- Remember Me Row -->
            <div class="ss-form-options">
              <label class="ss-checkbox-label">
                <input type="checkbox" id="ss-remember-me" name="remember" class="ss-checkbox-input">
                <span class="ss-checkbox-custom">
                  <svg width="12" height="10" viewBox="0 0 12 10" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <polyline points="1.5 5 4.5 8 10.5 2"></polyline>
                  </svg>
                </span>
                <span class="ss-checkbox-text">Remember me for 30 days</span>
              </label>
            </div>

            <!-- Submit Button with Animation -->
            <button type="submit" class="ss-btn ss-btn-primary ss-btn-submit" id="ss-btn-login-submit">
              <span class="ss-btn-text">Sign In to SolarShare</span>
              <span class="ss-btn-spinner d-none" aria-hidden="true"></span>
              <svg class="ss-btn-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </button>

          </form>

          <!-- Bottom Switch Prompt -->
          <div class="ss-auth-switch-prompt">
            <span>Don't have an account yet?</span>
            <button type="button" class="ss-switch-link" data-switch-to="register">
              Create an account
            </button>
          </div>

        </div>


        <!-- ==========================================
             PANEL 2: SIGN UP / REGISTER FORM
             ========================================== -->
        <div 
          id="ss-auth-panel-register" 
          class="ss-auth-panel {{ ($initialTab ?? 'login') === 'register' ? 'is-active' : '' }}" 
          role="tabpanel" 
          aria-labelledby="ss-tab-btn-register"
        >
          <div class="ss-auth-header">
            <h2 class="ss-auth-title">Create your account</h2>
            <p class="ss-auth-subtitle">Join 3,150+ neighbors sharing clean energy gear</p>
          </div>

          <!-- Social Quick Sign-In -->
          <div class="ss-auth-socials">
            <button type="button" class="ss-auth-oauth-btn" aria-label="Sign up with Google">
              <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true">
                <path fill="#EA4335" d="M12 5c1.6 0 3 .6 4.1 1.6l3.1-3.1C17.3 1.8 14.8 1 12 1 7.5 1 3.7 3.6 1.9 7.3l3.7 2.9C6.5 7.4 9 5 12 5z"/>
                <path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.7-.2-2.3H12v4.5h6.5c-.3 1.5-1.1 2.8-2.4 3.7l3.7 2.9c2.2-2 3.7-5.1 3.7-8.8z"/>
                <path fill="#FBBC05" d="M5.6 14.8c-.2-.7-.4-1.5-.4-2.3s.1-1.6.4-2.3L1.9 7.3C.7 9.7 0 12.3 0 15.2c0 2.8.7 5.5 1.9 7.8l3.7-2.9z"/>
                <path fill="#34A853" d="M12 23.5c3.2 0 6-1.1 8-3l-3.7-2.9c-1.1.7-2.5 1.2-4.3 1.2-3 0-5.5-2-6.4-4.8L1.9 17C3.7 20.7 7.5 23.5 12 23.5z"/>
              </svg>
              <span>Google</span>
            </button>
            <button type="button" class="ss-auth-oauth-btn" aria-label="Sign up with Apple">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M15.97 6.89c.66-.82 1.11-1.95.99-3.09-.95.04-2.11.64-2.79 1.45-.6.7-1.13 1.84-.99 2.96 1.06.08 2.14-.54 2.79-1.32z"/>
              </svg>
              <span>Apple</span>
            </button>
          </div>

          <div class="ss-auth-divider">
            <span>or continue with email</span>
          </div>

          <!-- Static Sign Up Form -->
          <form class="ss-auth-form" id="ss-register-form" onsubmit="return false;">

            <!-- Full Name Input -->
            <div class="ss-form-group">
              <label for="ss-register-name" class="ss-form-label">Full name</label>
              <div class="ss-input-wrap">
                <span class="ss-input-icon">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                </span>
                <input 
                  type="text" 
                  id="ss-register-name" 
                  name="name" 
                  class="ss-form-input" 
                  placeholder="e.g. Alex Morgan" 
                  autocomplete="name"
                  required
                >
              </div>
            </div>

            <!-- Email Input -->
            <div class="ss-form-group">
              <label for="ss-register-email" class="ss-form-label">Email address</label>
              <div class="ss-input-wrap">
                <span class="ss-input-icon">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                  </svg>
                </span>
                <input 
                  type="email" 
                  id="ss-register-email" 
                  name="email" 
                  class="ss-form-input" 
                  placeholder="name@example.com" 
                  autocomplete="email"
                  required
                >
              </div>
            </div>

            <!-- Role Selector Pills -->
            <div class="ss-form-group">
              <label class="ss-form-label">I'm joining to:</label>
              <div class="ss-role-selector" role="radiogroup" aria-label="Account primary role">
                <label class="ss-role-pill">
                  <input type="radio" name="solar_role" value="rent" checked>
                  <span class="ss-role-btn">
                    <span class="ss-role-icon">⚡</span>
                    <span>Rent gear</span>
                  </span>
                </label>
                <label class="ss-role-pill">
                  <input type="radio" name="solar_role" value="lend">
                  <span class="ss-role-btn">
                    <span class="ss-role-icon">☀️</span>
                    <span>Lend & earn</span>
                  </span>
                </label>
                <label class="ss-role-pill">
                  <input type="radio" name="solar_role" value="both">
                  <span class="ss-role-btn">
                    <span class="ss-role-icon">🤝</span>
                    <span>Both</span>
                  </span>
                </label>
              </div>
            </div>

            <!-- Password Input with Strength Meter -->
            <div class="ss-form-group">
              <label for="ss-register-password" class="ss-form-label">Create password</label>
              <div class="ss-input-wrap">
                <span class="ss-input-icon">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                  </svg>
                </span>
                <input 
                  type="password" 
                  id="ss-register-password" 
                  name="password" 
                  class="ss-form-input" 
                  placeholder="At least 8 characters" 
                  autocomplete="new-password"
                  required
                >
                <button type="button" class="ss-pwd-toggle" aria-label="Toggle password visibility" data-target="ss-register-password">
                  <svg class="ss-eye-show" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                  </svg>
                  <svg class="ss-eye-hide d-none" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                    <line x1="1" y1="1" x2="23" y2="23"></line>
                  </svg>
                </button>
              </div>

              <!-- Animated Password Strength Bar -->
              <div class="ss-pwd-meter-wrap" id="ss-pwd-meter-container">
                <div class="ss-pwd-meter-track">
                  <div class="ss-pwd-meter-fill" id="ss-pwd-meter-fill"></div>
                </div>
                <div class="ss-pwd-meter-hint" id="ss-pwd-meter-hint">Password strength: Empty</div>
              </div>
            </div>

            <!-- Confirm Password Input -->
            <div class="ss-form-group">
              <label for="ss-register-confirm" class="ss-form-label">Confirm password</label>
              <div class="ss-input-wrap">
                <span class="ss-input-icon">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </span>
                <input 
                  type="password" 
                  id="ss-register-confirm" 
                  name="password_confirmation" 
                  class="ss-form-input" 
                  placeholder="Repeat your password" 
                  autocomplete="new-password"
                  required
                >
              </div>
            </div>

            <!-- Terms & Community Guidelines Checkbox -->
            <div class="ss-form-options">
              <label class="ss-checkbox-label">
                <input type="checkbox" id="ss-terms-agree" name="terms" class="ss-checkbox-input" checked required>
                <span class="ss-checkbox-custom">
                  <svg width="12" height="10" viewBox="0 0 12 10" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <polyline points="1.5 5 4.5 8 10.5 2"></polyline>
                  </svg>
                </span>
                <span class="ss-checkbox-text">
                  I agree to SolarShare's <a href="#" class="ss-inline-link">Terms</a> and <a href="#" class="ss-inline-link">Community Safety Guarantee</a>
                </span>
              </label>
            </div>

            <!-- Submit Button with Animation -->
            <button type="submit" class="ss-btn ss-btn-primary ss-btn-submit" id="ss-btn-register-submit">
              <span class="ss-btn-text">Create SolarShare Account</span>
              <span class="ss-btn-spinner d-none" aria-hidden="true"></span>
              <svg class="ss-btn-sun-spark" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <circle cx="12" cy="12" r="5"></circle>
                <line x1="12" y1="1" x2="12" y2="3"></line>
                <line x1="12" y1="21" x2="12" y2="23"></line>
                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                <line x1="1" y1="12" x2="3" y2="12"></line>
                <line x1="21" y1="12" x2="23" y2="12"></line>
                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
              </svg>
            </button>

          </form>

          <!-- Bottom Switch Prompt -->
          <div class="ss-auth-switch-prompt">
            <span>Already have an account?</span>
            <button type="button" class="ss-switch-link" data-switch-to="login">
              Sign in instead
            </button>
          </div>

        </div>

      </div>

    </div>

  </div>

  <!-- Interactive Feedback Toast Notification -->
  <div id="ss-auth-toast" class="ss-auth-toast" role="status" aria-live="polite">
    <div class="ss-auth-toast-icon" id="ss-toast-icon">☀️</div>
    <div class="ss-auth-toast-body">
      <div class="ss-auth-toast-title" id="ss-toast-title">Success</div>
      <div class="ss-auth-toast-desc" id="ss-toast-desc">Demo mode: Action simulated successfully.</div>
    </div>
    <button type="button" class="ss-auth-toast-close" id="ss-toast-close" aria-label="Close message">×</button>
  </div>
</section>
@endsection
