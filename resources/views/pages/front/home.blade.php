@extends('layouts.front')

@section('title', 'SolarShare')

@section('content')
    <!-- SECTION: hero -->
    <section class="ss-hero" id="hero">
      <div class="ss-container">
        <div class="row align-items-center">
          
          <!-- Left Column: Copy & CTAs -->
          <div class="col-lg-6 col-md-12">
            <div class="ss-hero-content">
              
              <!-- Subtle Trust Pill -->
              <div class="ss-hero-badge">
                <span class="ss-badge-dot"></span>
                <span>Peer-to-Peer Clean Power · 100% Insured</span>
              </div>

              <!-- Masked Slide-Up Headline Reveal -->
              <h1 class="ss-hero-title">
                <span class="ss-word-mask"><span class="ss-word ss-word-1">Borrow</span></span>
                <span class="ss-word-mask"><span class="ss-word ss-word-2">the</span></span>
                <span class="ss-word-mask"><span class="ss-word ss-word-3">sun.</span></span>
                <br>
                <span class="ss-word-mask"><span class="ss-word ss-word-4">Lend</span></span>
                <span class="ss-word-mask"><span class="ss-word ss-word-5">your</span></span>
                <span class="ss-word-mask"><span class="ss-word ss-word-6">own.</span></span>
              </h1>

              <p class="ss-hero-subtitle">
                Rent portable solar panels, batteries and small wind turbines from people nearby, or earn from the ones sitting in your garage.
              </p>

              <div class="ss-hero-cta">
                <a href="#equipment" class="ss-btn ss-btn-primary ss-btn-lg">
                  Browse equipment
                  <svg width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M4.166 10h11.667m0 0l-5-5m5 5l-5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </a>
                <a href="#community" class="ss-btn ss-btn-secondary ss-btn-lg">
                  List your equipment
                </a>
              </div>

              <!-- Quick Verification Proof -->
              <div class="ss-hero-stats-preview">
                <div class="ss-stat-mini">
                  <span class="ss-stat-mini-val">15 mins</span>
                  <span class="ss-stat-mini-lbl">Average pickup radius</span>
                </div>
                <div style="width: 1px; height: 32px; background: rgba(16,32,43,0.1);"></div>
                <div class="ss-stat-mini">
                  <span class="ss-stat-mini-val">$3,000</span>
                  <span class="ss-stat-mini-lbl">SolarShield protection</span>
                </div>
                <div style="width: 1px; height: 32px; background: rgba(16,32,43,0.1);"></div>
                <div class="ss-stat-mini">
                  <span class="ss-stat-mini-val">4.9 ★</span>
                  <span class="ss-stat-mini-lbl">Community rating</span>
                </div>
              </div>

            </div>
          </div>

          <!-- Right Column: Interactive Scene & Floating Equipment Cards -->
          <div class="col-lg-6 col-md-12">
            <div class="ss-hero-visual-col" id="ss-hero-visual">
              <div class="ss-hero-scene-container">
                
                <!-- Floating Equipment Card 1 (Top Left) -->
                <div class="ss-float-card ss-float-card-1">
                  <div class="ss-float-card-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <rect x="3" y="4" width="18" height="13" rx="2" stroke="#FF6B3D" stroke-width="2"/>
                      <path d="M3 10.5h18M9 4v13M15 4v13M6 21l3-4M18 21l-3-4" stroke="#FF6B3D" stroke-width="1.8" stroke-linecap="round"/>
                    </svg>
                  </div>
                  <div class="ss-float-card-info">
                    <span class="ss-float-card-name">EcoFold 120W Panel</span>
                    <div class="ss-float-card-meta">
                      <span class="ss-float-card-price">$14/day</span>
                      <span>·</span>
                      <span>★ 4.9 (38)</span>
                    </div>
                  </div>
                </div>

                <!-- Floating Equipment Card 2 (Bottom Right) -->
                <div class="ss-float-card ss-float-card-2">
                  <div class="ss-float-card-icon" style="background: rgba(15, 92, 107, 0.12);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <rect x="4" y="6" width="16" height="14" rx="3" stroke="#0F5C6B" stroke-width="2"/>
                      <path d="M8 3h8v3H8z" fill="#0F5C6B"/>
                      <circle cx="9" cy="11" r="1.5" fill="#0F5C6B"/>
                      <circle cx="15" cy="11" r="1.5" fill="#0F5C6B"/>
                      <path d="M8 15h8" stroke="#0F5C6B" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                  </div>
                  <div class="ss-float-card-info">
                    <span class="ss-float-card-name">Anker Solix 768Wh</span>
                    <div class="ss-float-card-meta">
                      <span class="ss-float-card-price">$28/day</span>
                      <span>·</span>
                      <span>★ 5.0 (24)</span>
                    </div>
                  </div>
                </div>

                <!-- Floating Equipment Card 3 (Bottom Left) -->
                <div class="ss-float-card ss-float-card-3">
                  <div class="ss-float-card-icon" style="background: rgba(16, 185, 129, 0.12);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <circle cx="12" cy="8" r="3" stroke="#10B981" stroke-width="2"/>
                      <path d="M12 11v11M12 8l-6-4M12 8l6-4" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                  </div>
                  <div class="ss-float-card-info">
                    <span class="ss-float-card-name">AirX 400W Wind Kit</span>
                    <div class="ss-float-card-meta">
                      <span class="ss-float-card-price">$22/day</span>
                      <span>·</span>
                      <span>★ 4.8 (19)</span>
                    </div>
                  </div>
                </div>

                <!-- Central Interactive SVG Illustration: Rising Sun, Tiltable Panel & Battery -->
                <div class="ss-hero-svg-wrapper">
                  <svg viewBox="0 0 500 440" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-100" aria-label="Interactive illustration of sun charging solar panel and power station">
                    <defs>
                      <linearGradient id="heroSunGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#FFF5D8"/>
                        <stop offset="50%" stop-color="#FFB020"/>
                        <stop offset="100%" stop-color="#FF6B3D"/>
                      </linearGradient>
                      
                      <radialGradient id="sunGlowGrad" cx="50%" cy="50%" r="50%">
                        <stop offset="0%" stop-color="#FFB020" stop-opacity="0.45"/>
                        <stop offset="70%" stop-color="#FF6B3D" stop-opacity="0.15"/>
                        <stop offset="100%" stop-color="#FFE3C2" stop-opacity="0"/>
                      </radialGradient>

                      <linearGradient id="panelCells" x1="0" y1="0" x2="1" y2="1">
                        <stop offset="0%" stop-color="#143447"/>
                        <stop offset="100%" stop-color="#0F5C6B"/>
                      </linearGradient>

                      <!-- Particle conduit dash animation -->
                      <linearGradient id="flowGrad" x1="0" y1="0" x2="1" y2="0">
                        <stop offset="0%" stop-color="#FFB020"/>
                        <stop offset="100%" stop-color="#10B981"/>
                      </linearGradient>
                    </defs>

                    <!-- Horizon arc line -->
                    <path d="M20 380 Q 250 360 480 380" stroke="rgba(16, 32, 43, 0.08)" stroke-width="2" stroke-dasharray="4 6"/>

                    <!-- Ambient Rising Sun with Pulsing Halo & Rotating Rays -->
                    <g transform="translate(0, 0)">
                      <circle cx="380" cy="120" r="85" fill="url(#sunGlowGrad)" />
                      <circle cx="380" cy="120" r="46" fill="url(#heroSunGrad)" />
                      
                      <!-- Rotating Sun Rays -->
                      <g class="ss-hero-sun-rays">
                        <line x1="380" y1="52" x2="380" y2="36" stroke="#FFB020" stroke-width="3.5" stroke-linecap="round"/>
                        <line x1="380" y1="188" x2="380" y2="204" stroke="#FFB020" stroke-width="3.5" stroke-linecap="round"/>
                        <line x1="312" y1="120" x2="296" y2="120" stroke="#FFB020" stroke-width="3.5" stroke-linecap="round"/>
                        <line x1="448" y1="120" x2="464" y2="120" stroke="#FFB020" stroke-width="3.5" stroke-linecap="round"/>
                        <line x1="332" y1="72" x2="320" y2="60" stroke="#FF6B3D" stroke-width="3" stroke-linecap="round"/>
                        <line x1="428" y1="168" x2="440" y2="180" stroke="#FF6B3D" stroke-width="3" stroke-linecap="round"/>
                        <line x1="332" y1="168" x2="320" y2="180" stroke="#FF6B3D" stroke-width="3" stroke-linecap="round"/>
                        <line x1="428" y1="72" x2="440" y2="60" stroke="#FF6B3D" stroke-width="3" stroke-linecap="round"/>
                      </g>
                    </g>

                    <!-- Stand Ground Shadow -->
                    <ellipse cx="220" cy="380" rx="90" ry="12" fill="rgba(16, 32, 43, 0.06)" />
                    <ellipse cx="395" cy="378" rx="45" ry="9" fill="rgba(16, 32, 43, 0.06)" />

                    <!-- Tiltable Solar Panel Assembly (Tracks Mouse Pointer) -->
                    <g id="ss-panel-tilt-group" class="ss-panel-tilt-group">
                      <!-- Stand legs -->
                      <path d="M175 378 L218 290 L265 378" stroke="#798E9C" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                      <line x1="190" y1="340" x2="248" y2="340" stroke="#798E9C" stroke-width="3"/>
                      
                      <!-- Panel Chassis / Outer Rim -->
                      <rect x="130" y="195" width="180" height="120" rx="10" transform="rotate(-15 220 255)" fill="#E2E8F0" stroke="#CBD5E1" stroke-width="4"/>
                      <!-- Dark Monocrystalline Matrix -->
                      <rect x="136" y="201" width="168" height="108" rx="7" transform="rotate(-15 220 255)" fill="url(#panelCells)"/>
                      
                      <!-- Photovoltaic Grid lines -->
                      <g transform="rotate(-15 220 255)" stroke="rgba(255, 255, 255, 0.22)" stroke-width="1.2">
                        <line x1="136" y1="237" x2="304" y2="237"/>
                        <line x1="136" y1="273" x2="304" y2="273"/>
                        <line x1="178" y1="201" x2="178" y2="309"/>
                        <line x1="220" y1="201" x2="220" y2="309"/>
                        <line x1="262" y1="201" x2="262" y2="309"/>
                      </g>

                      <!-- Sunlight reflection gleam on glass -->
                      <path d="M142 206 L280 206 L220 304 L142 304 Z" transform="rotate(-15 220 255)" fill="rgba(255, 255, 255, 0.12)"/>
                    </g>

                    <!-- Energy Flow Conduit Path from Panel to Battery -->
                    <path id="ss-energy-cable" d="M 235 345 C 275 390, 325 395, 365 348" stroke="url(#flowGrad)" stroke-width="3.5" stroke-linecap="round" stroke-dasharray="6 8">
                      <animate attributeName="stroke-dashoffset" values="40; 0" dur="1.2s" repeatCount="indefinite"/>
                    </path>

                    <!-- Portable Battery / Power Station -->
                    <g transform="translate(355, 280)">
                      <rect x="0" y="20" width="85" height="78" rx="12" fill="#10202B" stroke="#334155" stroke-width="3"/>
                      <path d="M22 20 V8 C22 4 26 0 32 0 H53 C59 0 63 4 63 8 V20" fill="none" stroke="#64748B" stroke-width="4"/>
                      <rect x="12" y="32" width="61" height="28" rx="5" fill="#070F1A" stroke="#1E293B" stroke-width="1.5"/>
                      <text x="18" y="45" fill="#10B981" font-family="'Sora', sans-serif" font-size="9" font-weight="700">98%</text>
                      <text x="44" y="45" fill="#FFB020" font-family="'Sora', sans-serif" font-size="7">118W IN</text>
                      
                      <!-- Battery Fill Level Gauge (animated) -->
                      <rect x="18" y="49" width="49" height="5" rx="2" fill="#1E293B"/>
                      <rect x="18" y="49" width="48" height="5" rx="2" fill="#10B981">
                        <animate attributeName="width" values="32; 48; 32" dur="4s" repeatCount="indefinite" />
                      </rect>

                      <circle cx="24" cy="74" r="5" fill="#1E293B"/>
                      <circle cx="42" cy="74" r="5" fill="#1E293B"/>
                      <rect x="56" y="70" width="14" height="8" rx="2" fill="#FF6B3D"/>
                    </g>
                  </svg>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- /SECTION: hero -->

    <!-- SECTION: how-it-works -->
    <section class="ss-section ss-how" id="how-it-works">
      <div class="ss-container">
        
        <div class="ss-section-header text-center ss-reveal">
          <div class="ss-section-tag">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            <span>Simple 4-Step Cycle</span>
          </div>
          <h2 class="ss-section-title">How SolarShare Works</h2>
          <p class="ss-section-subtitle mx-auto" style="margin: 0 auto;">Clean energy equipment is built to last decades, not gather dust. Sharing takes minutes.</p>
        </div>

        <div class="ss-how-track">
          <!-- Connecting SVG line charging with scroll progress -->
          <svg class="ss-how-svg-line" viewBox="0 0 1140 40" fill="none" preserveAspectRatio="none" aria-hidden="true">
            <line x1="60" y1="20" x2="1080" y2="20" class="ss-how-path-bg" />
            <line id="ss-how-path-active" x1="60" y1="20" x2="1080" y2="20" class="ss-how-path-active" stroke-dasharray="900" stroke-dashoffset="900" />
          </svg>

          <div class="row">
            
            <!-- Step 1: List -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
              <div class="ss-step-card ss-reveal ss-delay-1" id="step-1">
                <div class="ss-step-header">
                  <div class="ss-step-node">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                      <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
                      <circle cx="12" cy="13" r="4"/>
                    </svg>
                  </div>
                  <span class="ss-step-num">01</span>
                </div>
                <h3 class="ss-step-title">List</h3>
                <p class="ss-step-desc">Snap your idle gear, set your daily price, and verify your ID in 2 minutes.</p>
              </div>
            </div>

            <!-- Step 2: Book -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
              <div class="ss-step-card ss-reveal ss-delay-2" id="step-2">
                <div class="ss-step-header">
                  <div class="ss-step-node">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                      <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                      <line x1="16" y1="2" x2="16" y2="6"/>
                      <line x1="8" y1="2" x2="8" y2="6"/>
                      <line x1="3" y1="10" x2="21" y2="10"/>
                    </svg>
                  </div>
                  <span class="ss-step-num">02</span>
                </div>
                <h3 class="ss-step-title">Book</h3>
                <p class="ss-step-desc">Browse tested gear within 15 miles, choose dates, and place a secured deposit.</p>
              </div>
            </div>

            <!-- Step 3: Exchange -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
              <div class="ss-step-card ss-reveal ss-delay-3" id="step-3">
                <div class="ss-step-header">
                  <div class="ss-step-node">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                      <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                      <circle cx="9" cy="7" r="4"/>
                      <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                      <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                  </div>
                  <span class="ss-step-num">03</span>
                </div>
                <h3 class="ss-step-title">Exchange</h3>
                <p class="ss-step-desc">Meet locally for a safe handover or opt for quick neighbourhood drop-off.</p>
              </div>
            </div>

            <!-- Step 4: Review -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
              <div class="ss-step-card ss-reveal ss-delay-4" id="step-4">
                <div class="ss-step-header">
                  <div class="ss-step-node">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                  </div>
                  <span class="ss-step-num">04</span>
                </div>
                <h3 class="ss-step-title">Review</h3>
                <p class="ss-step-desc">Return the gear charged, release the deposit, and swap 5-star community trust.</p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>
    <!-- /SECTION: how-it-works -->

    <!-- SECTION: equipment -->
    <section class="ss-section ss-equipment" id="equipment">
      <div class="ss-container">
        
        <div class="ss-section-header ss-reveal">
          <div class="ss-section-tag">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
            <span>Renewable Hardware</span>
          </div>
          <h2 class="ss-section-title">Equipment Built For Any Journey</h2>
          <p class="ss-section-subtitle">From weekend wild camping and campervan trips to remote fieldwork and home power backup.</p>
        </div>

        <!-- Asymmetric Bento Grid of 5 Categories -->
        <div class="ss-bento-grid">
          
          <!-- Category 1: Portable Solar Panels (Featured Tile, 7 cols) -->
          <div class="ss-bento-card ss-bento-featured ss-reveal">
            <div class="ss-bento-content">
              <span class="ss-bento-badge">Most Popular</span>
              <h3 class="ss-bento-title">Portable Solar Panels</h3>
              <p class="ss-bento-desc">Foldable monocrystalline kits from 50W to 400W. Weatherproof ETFE coatings, integrated kickstands, and universal MC4 or Anderson outputs.</p>
            </div>
            <div class="ss-bento-art">
              <svg viewBox="0 0 280 140" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Foldable solar panels illustration">
                <rect x="20" y="20" width="70" height="95" rx="6" fill="#143447" stroke="#38BDF8" stroke-width="2"/>
                <rect x="98" y="20" width="70" height="95" rx="6" fill="#0F5C6B" stroke="#38BDF8" stroke-width="2"/>
                <rect x="176" y="20" width="70" height="95" rx="6" fill="#143447" stroke="#38BDF8" stroke-width="2"/>
                <!-- Cell grids -->
                <path d="M20 52 h70 M20 84 h70 M98 52 h70 M98 84 h70 M176 52 h70 M176 84 h70" stroke="rgba(255,255,255,0.25)" stroke-width="1.2"/>
                <path d="M55 20 v95 M133 20 v95 M211 20 v95" stroke="rgba(255,255,255,0.25)" stroke-width="1.2"/>
                <!-- Hinges & Handle -->
                <rect x="90" y="35" width="8" height="14" rx="2" fill="#94A3B8"/>
                <rect x="90" y="80" width="8" height="14" rx="2" fill="#94A3B8"/>
                <rect x="168" y="35" width="8" height="14" rx="2" fill="#94A3B8"/>
                <rect x="168" y="80" width="8" height="14" rx="2" fill="#94A3B8"/>
                <path d="M120 115 h26 v8 h-26 z" fill="#FFB020"/>
              </svg>
            </div>
          </div>

          <!-- Category 2: Batteries & Power Banks (5 cols) -->
          <div class="ss-bento-card ss-bento-battery ss-reveal ss-delay-1">
            <div class="ss-bento-content">
              <span class="ss-bento-badge" style="color: var(--ss-sun-amber-hover);">Essential Storage</span>
              <h3 class="ss-bento-title">Batteries & Power Stations</h3>
              <p class="ss-bento-desc">LiFePO4 power plants from 256Wh to 2048Wh with pure sine wave AC sockets, high-speed USB-C PD, and silent operation.</p>
            </div>
            <div class="ss-bento-art">
              <svg viewBox="0 0 200 130" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Power station illustration">
                <rect x="35" y="25" width="130" height="90" rx="14" fill="#0E1B2C" stroke="#334155" stroke-width="3"/>
                <path d="M70 25 V12 C70 8 74 5 80 5 H120 C126 5 130 8 130 12 V25" fill="none" stroke="#64748B" stroke-width="4"/>
                <rect x="52" y="42" width="96" height="30" rx="6" fill="#070F1A"/>
                <text x="62" y="60" fill="#10B981" font-family="'Sora', sans-serif" font-size="11" font-weight="700">100%</text>
                <text x="100" y="60" fill="#FFB020" font-family="'Sora', sans-serif" font-size="9">768Wh</text>
                <circle cx="60" cy="92" r="7" fill="#1E293B"/>
                <circle cx="85" cy="92" r="7" fill="#1E293B"/>
                <rect x="108" y="87" width="22" height="10" rx="2" fill="#FF6B3D"/>
              </svg>
            </div>
          </div>

          <!-- Category 3: Small Wind Turbines (4 cols) -->
          <div class="ss-bento-card ss-bento-wind ss-reveal">
            <div class="ss-bento-content">
              <span class="ss-bento-badge" style="color: var(--ss-deep-teal);">All-Weather</span>
              <h3 class="ss-bento-title">Small Wind Turbines</h3>
              <p class="ss-bento-desc">Lightweight micro-turbines for night-time and coastal camping when the sun has gone down.</p>
            </div>
            <div class="ss-bento-art">
              <svg viewBox="0 0 160 120" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Wind turbine illustration">
                <line x1="80" y1="50" x2="80" y2="115" stroke="#64748B" stroke-width="4" stroke-linecap="round"/>
                <circle cx="80" cy="50" r="8" fill="#FFB020"/>
                <path d="M80 50 Q 85 20 80 5 Q 75 20 80 50 Z" fill="#0F5C6B"/>
                <path d="M80 50 Q 110 65 125 72 Q 105 78 80 50 Z" fill="#0F5C6B"/>
                <path d="M80 50 Q 50 65 35 72 Q 55 78 80 50 Z" fill="#0F5C6B"/>
                <path d="M20 30 Q 40 25 60 30" stroke="#CDEBF5" stroke-width="2" stroke-linecap="round"/>
                <path d="M100 20 Q 120 15 140 20" stroke="#CDEBF5" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </div>
          </div>

          <!-- Category 4: Portable Inverters (4 cols) -->
          <div class="ss-bento-card ss-bento-inverter ss-reveal ss-delay-1">
            <div class="ss-bento-content">
              <span class="ss-bento-badge">Clean Power</span>
              <h3 class="ss-bento-title">Portable Inverters</h3>
              <p class="ss-bento-desc">Pure sine wave 12V to 230V inverters to safely run laptops, cameras, CPAP machines, and power tools.</p>
            </div>
            <div class="ss-bento-art">
              <svg viewBox="0 0 160 120" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Power inverter illustration">
                <rect x="25" y="30" width="110" height="65" rx="8" fill="#1E293B" stroke="#475569" stroke-width="2"/>
                <rect x="35" y="42" width="22" height="40" rx="3" fill="#0F5C6B"/>
                <path d="M70 62 Q 78 48 85 62 T 100 62" stroke="#FFB020" stroke-width="2.5" fill="none"/>
                <circle cx="118" cy="52" r="5" fill="#10B981"/>
                <circle cx="118" cy="72" r="5" fill="#EF4444"/>
              </svg>
            </div>
          </div>

          <!-- Category 5: Solar Lamps & Lighting (4 cols) -->
          <div class="ss-bento-card ss-bento-lamps ss-reveal ss-delay-2">
            <div class="ss-bento-content">
              <span class="ss-bento-badge" style="color: var(--ss-ember-coral);">Illumination</span>
              <h3 class="ss-bento-title">Solar Lamps & Hubs</h3>
              <p class="ss-bento-desc">Rugged 360-degree campsite lighting kits with USB power sharing and modular hanging solar pucks.</p>
            </div>
            <div class="ss-bento-art">
              <svg viewBox="0 0 160 120" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Solar lamp illustration">
                <path d="M60 25 H100 L95 40 H65 Z" fill="#334155"/>
                <rect x="65" y="20" width="30" height="5" rx="2" fill="#FFB020"/>
                <path d="M65 40 L55 85 H105 L95 40 Z" fill="rgba(255, 176, 32, 0.25)" stroke="#FFB020" stroke-width="2"/>
                <circle cx="80" cy="62" r="12" fill="#FFE3C2"/>
                <rect x="52" y="85" width="56" height="15" rx="4" fill="#1E293B"/>
                <path d="M80 8 Q80 2 80 0" stroke="#94A3B8" stroke-width="2"/>
              </svg>
            </div>
          </div>

        </div>

        <!-- Featured Listings Row -->
        <div class="ss-listings-header ss-reveal">
          <div>
            <h3 class="ss-section-title" style="font-size: 1.75rem; margin-bottom: 0.35rem;">Featured Gear Available Nearby</h3>
            <p class="ss-section-subtitle" style="margin-bottom: 0;">Verified equipment tested by local community hosts.</p>
          </div>
          <a href="#how-it-works" class="ss-btn ss-btn-secondary d-none d-lg-flex">View all 940+ items</a>
        </div>

        <div class="row">
          @foreach ($featuredEquipment as $i => $item)
          <div class="col-lg-3 col-md-6">
            <div class="ss-listing-card ss-reveal ss-delay-{{ $i + 1 }}">
              <div class="ss-listing-thumb">
                <span class="ss-listing-status" @if(!empty($item['status_style'])) style="{{ $item['status_style'] }}" @endif>
                  <span class="ss-listing-status-dot" @if(!empty($item['dot_style'])) style="{{ $item['dot_style'] }}" @endif></span>
                  {{ $item['status'] }}
                </span>
                <span class="ss-listing-capacity">{{ $item['capacity'] }}</span>
                {!! $item['svg'] !!}
              </div>
              <div class="ss-listing-body">
                <h4 class="ss-listing-name">{{ $item['name'] }}</h4>
                <div class="ss-listing-meta">
                  <span>{{ $item['distance'] }}</span>
                  <span class="ss-listing-rating"><span class="ss-star-icon">★</span> {{ $item['rating'] }} ({{ $item['reviews'] }})</span>
                </div>
                <div class="ss-listing-footer">
                  <div class="ss-listing-price">
                    <span class="ss-price-currency">$</span>
                    <span class="ss-price-val">{{ $item['price'] }}</span>
                    <span class="ss-price-unit">/day</span>
                  </div>
                  <button class="ss-btn ss-btn-secondary ss-btn-sm ss-listing-cta">Request</button>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section>
    <!-- /SECTION: equipment -->

    <!-- SECTION: impact -->
    <section class="ss-section ss-impact" id="impact">
      <div class="ss-container">
        
        <div class="ss-section-header text-center ss-reveal">
          <div class="ss-section-tag">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
            <span>Real Local Impact</span>
          </div>
          <h2 class="ss-section-title">Clean Power Harvested Together</h2>
          <p class="ss-section-subtitle mx-auto" style="margin: 0 auto;">Every kilowatt-hour shared avoids fossil fuel emissions and keeps clean gear in active service.</p>
        </div>

        <!-- 4 Count-Up Tiles -->
        <div class="row">
          @foreach ($stats as $i => $stat)
          <div class="col-lg-3 col-sm-6">
            <div class="ss-impact-tile ss-reveal ss-delay-{{ $i + 1 }}">
              <div class="ss-impact-num">
                <span class="ss-count-val" data-target="{{ $stat['target'] }}" data-float="{{ !empty($stat['is_float']) ? 'true' : 'false' }}">{{ $stat['value'] }}</span>
                @if (!empty($stat['unit']))
                  <span style="font-size: 1.6rem;">{{ $stat['unit'] }}</span>
                @endif
              </div>
              <div class="ss-impact-label">{{ $stat['label'] }}</div>
            </div>
          </div>
          @endforeach
        </div>

        <!-- Visual Analytics: Circular Gauge & Clean Energy Bar Chart -->
        <div class="ss-impact-visuals ss-reveal">
          <div class="row align-items-center">
            
            <!-- Circular Gauge -->
            <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
              <div class="ss-gauge-wrapper">
                <svg class="ss-gauge-svg" viewBox="0 0 160 160" aria-hidden="true">
                  <circle class="ss-gauge-bg" cx="80" cy="80" r="70" />
                  <circle id="ss-gauge-fill" class="ss-gauge-fill" cx="80" cy="80" r="70" />
                </svg>
                <div class="ss-gauge-value">94%</div>
                <div class="ss-gauge-caption">Neighborhood Equipment Utilization Rate</div>
              </div>
            </div>

            <!-- Animated Bar Chart -->
            <div class="col-lg-7 col-md-12">
              <div class="ss-barchart-wrapper">
                <div class="ss-barchart-title">Monthly Clean Energy Shared (kWh)</div>
                
                <div class="ss-barchart-bars" aria-label="Bar chart showing monthly clean energy shared">
                  <div class="ss-bar-col">
                    <div class="ss-bar" data-height="45" style="--bar-default-height: 45%;" title="Apr: 1,120 kWh"></div>
                    <span class="ss-bar-lbl">Apr</span>
                  </div>
                  <div class="ss-bar-col">
                    <div class="ss-bar" data-height="65" style="--bar-default-height: 65%;" title="May: 1,840 kWh"></div>
                    <span class="ss-bar-lbl">May</span>
                  </div>
                  <div class="ss-bar-col">
                    <div class="ss-bar" data-height="88" style="--bar-default-height: 88%;" title="Jun: 2,640 kWh"></div>
                    <span class="ss-bar-lbl">Jun</span>
                  </div>
                  <div class="ss-bar-col">
                    <div class="ss-bar" data-height="98" style="--bar-default-height: 98%;" title="Jul: 3,120 kWh"></div>
                    <span class="ss-bar-lbl">Jul</span>
                  </div>
                  <div class="ss-bar-col">
                    <div class="ss-bar" data-height="92" style="--bar-default-height: 92%;" title="Aug: 2,900 kWh"></div>
                    <span class="ss-bar-lbl">Aug</span>
                  </div>
                  <div class="ss-bar-col">
                    <div class="ss-bar" data-height="78" style="--bar-default-height: 78%;" title="Sep: 2,260 kWh"></div>
                    <span class="ss-bar-lbl">Sep</span>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>

      </div>
    </section>
    <!-- /SECTION: impact -->

    <!-- SECTION: community -->
    <section class="ss-section ss-community" id="community">
      <div class="ss-container">
        
        <div class="ss-section-header text-center ss-reveal">
          <div class="ss-section-tag">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            <span>Peer-to-Peer Model</span>
          </div>
          <h2 class="ss-section-title">Designed for Renters and Lenders</h2>
          <p class="ss-section-subtitle mx-auto" style="margin: 0 auto;">Whether you need portable power this weekend or have equipment gathering dust in your garage.</p>
        </div>

        <!-- Accessible Two-Tab Switch -->
        <div class="ss-tab-container ss-reveal">
          <div class="ss-tab-list" role="tablist" aria-label="Community user roles">
            <button class="ss-tab-btn" role="tab" id="tab-rent" aria-selected="true" aria-controls="panel-rent" tabindex="0">I want to rent</button>
            <button class="ss-tab-btn" role="tab" id="tab-lend" aria-selected="false" aria-controls="panel-lend" tabindex="-1">I want to lend</button>
          </div>
        </div>

        <!-- Tab Panel 1: Renters -->
        <div class="ss-tab-panel is-active" id="panel-rent" role="tabpanel" aria-labelledby="tab-rent">
          <div class="row align-items-center">
            
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
              <ul class="ss-benefits-list">
                
                <li class="ss-benefit-item">
                  <div class="ss-benefit-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                  <div>
                    <h4 class="ss-benefit-title">Zero Upfront Equipment Cost</h4>
                    <p class="ss-benefit-desc">Access high-end $1,500+ lithium power stations and solar arrays for under $20 a day, without storage or depreciation headaches.</p>
                  </div>
                </li>

                <li class="ss-benefit-item">
                  <div class="ss-benefit-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                  <div>
                    <h4 class="ss-benefit-title">Tested, Charged & Verified</h4>
                    <p class="ss-benefit-desc">Every piece of hardware is inspected, fully charged before handover, and supplied with matching charging cables and adapters.</p>
                  </div>
                </li>

                <li class="ss-benefit-item">
                  <div class="ss-benefit-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                  <div>
                    <h4 class="ss-benefit-title">SolarShield Protection Included</h4>
                    <p class="ss-benefit-desc">Accidental damage and mechanical breakdowns are backed by our comprehensive insurance policy, so you can explore worry-free.</p>
                  </div>
                </li>

              </ul>

              <a href="#equipment" class="ss-btn ss-btn-primary">Browse available gear</a>
            </div>

            <div class="col-lg-6 col-md-12">
              <div class="ss-p2p-scene">
                <!-- Inline SVG Peer-to-Peer Neighborhood Scene -->
                <svg viewBox="0 0 440 260" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100" aria-label="Two neighborhood houses connected by sharing power line">
                  <line x1="20" y1="230" x2="420" y2="230" stroke="rgba(16,32,43,0.1)" stroke-width="2"/>
                  
                  <!-- House A (Lender) -->
                  <g transform="translate(40, 90)">
                    <rect x="0" y="45" width="110" height="95" rx="6" fill="#F8FAFC" stroke="#CBD5E1" stroke-width="2"/>
                    <polygon points="55,0 -10,48 120,48" fill="#0F5C6B"/>
                    <rect x="15" y="15" width="35" height="22" rx="2" fill="#38BDF8" opacity="0.8"/>
                    <rect x="60" y="15" width="35" height="22" rx="2" fill="#38BDF8" opacity="0.8"/>
                    <rect x="42" y="90" width="26" height="50" rx="3" fill="#FFB020"/>
                    <rect x="15" y="60" width="22" height="22" rx="2" fill="#CDEBF5"/>
                    <rect x="73" y="60" width="22" height="22" rx="2" fill="#CDEBF5"/>
                  </g>

                  <!-- House B (Renter) -->
                  <g transform="translate(290, 105)">
                    <rect x="0" y="40" width="105" height="85" rx="6" fill="#F8FAFC" stroke="#CBD5E1" stroke-width="2"/>
                    <polygon points="52,0 -8,42 112,42" fill="#1E293B"/>
                    <rect x="40" y="75" width="25" height="50" rx="3" fill="#143447"/>
                    <rect x="14" y="55" width="20" height="20" rx="2" fill="#FFE3C2"/>
                    <rect x="71" y="55" width="20" height="20" rx="2" fill="#FFE3C2"/>
                  </g>

                  <!-- Animated Glowing Peer-to-Peer Energy Conduit -->
                  <path d="M 150 170 C 200 120, 240 120, 290 170" stroke="#FFB020" stroke-width="4" stroke-linecap="round" stroke-dasharray="8 10">
                    <animate attributeName="stroke-dashoffset" values="36; 0" dur="1.5s" repeatCount="indefinite"/>
                  </path>
                  <circle cx="220" cy="138" r="14" fill="#FFB020" opacity="0.2"/>
                  <circle cx="220" cy="138" r="7" fill="#FFB020"/>
                </svg>
              </div>
            </div>

          </div>
        </div>

        <!-- Tab Panel 2: Lenders -->
        <div class="ss-tab-panel" id="panel-lend" role="tabpanel" aria-labelledby="tab-lend">
          <div class="row align-items-center">
            
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
              <ul class="ss-benefits-list">
                
                <li class="ss-benefit-item">
                  <div class="ss-benefit-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                  <div>
                    <h4 class="ss-benefit-title">Earn $150 – $600 / Month</h4>
                    <p class="ss-benefit-desc">Turn high-end equipment into passive recurring revenue. Most owners recoup the entire equipment purchase cost in just two seasons.</p>
                  </div>
                </li>

                <li class="ss-benefit-item">
                  <div class="ss-benefit-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                  <div>
                    <h4 class="ss-benefit-title">Guaranteed Replacement & Security Hold</h4>
                    <p class="ss-benefit-desc">Every renter places a pre-authorized deposit. In the rare event of damage, SolarShield covers repair or complete replacement value.</p>
                  </div>
                </li>

                <li class="ss-benefit-item">
                  <div class="ss-benefit-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                  <div>
                    <h4 class="ss-benefit-title">Vetted Neighbors on Your Terms</h4>
                    <p class="ss-benefit-desc">You choose who borrows, set minimum rental days, and approve every handover schedule directly through secure in-app messaging.</p>
                  </div>
                </li>

              </ul>

              <a href="#community" class="ss-btn ss-btn-primary">List your gear for free</a>
            </div>

            <div class="col-lg-6 col-md-12">
              <div class="ss-p2p-scene">
                <!-- Peer-to-peer Lender Illustration -->
                <svg viewBox="0 0 440 260" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100" aria-label="Lender dashboard graphic showing earnings and security guarantee">
                  <rect x="60" y="30" width="320" height="200" rx="16" fill="#10202B" stroke="#334155" stroke-width="2"/>
                  <rect x="85" y="55" width="130" height="70" rx="10" fill="#1E293B"/>
                  <text x="100" y="80" fill="#94A3B8" font-family="'DM Sans', sans-serif" font-size="12">September Payout</text>
                  <text x="100" y="110" fill="#FFB020" font-family="'Sora', sans-serif" font-size="24" font-weight="800">$480.00</text>
                  
                  <rect x="230" y="55" width="125" height="70" rx="10" fill="#1E293B"/>
                  <text x="245" y="80" fill="#94A3B8" font-family="'DM Sans', sans-serif" font-size="12">Completed Trips</text>
                  <text x="245" y="110" fill="#10B981" font-family="'Sora', sans-serif" font-size="24" font-weight="800">14</text>
                  
                  <!-- Protection Badge -->
                  <rect x="85" y="145" width="270" height="55" rx="8" fill="rgba(16, 185, 129, 0.12)" stroke="#10B981" stroke-width="1.5"/>
                  <circle cx="115" cy="172" r="14" fill="#10B981"/>
                  <path d="M109 172 l4 4 l8 -8" stroke="#FFFFFF" stroke-width="2" fill="none"/>
                  <text x="140" y="168" fill="#FFFFFF" font-family="'Sora', sans-serif" font-size="12" font-weight="700">SolarShield Host Guarantee</text>
                  <text x="140" y="184" fill="#94A3B8" font-family="'DM Sans', sans-serif" font-size="10">Up to $3,000 protection per booking</text>
                </svg>
              </div>
            </div>

          </div>
        </div>

        <!-- Horizontal Testimonial Strip (Auto-scrolls, pauses on hover) -->
        <div class="ss-testimonials-wrap">
          <div class="ss-marquee-track">
            
            <!-- Quote 1 -->
            <div class="ss-testimonial-card">
              <p class="ss-testimonial-quote">"Rented a 200W panel for a 5-day backcountry shoot in Snowdonia. Charged all our camera packs and drone batteries flawlessly without a noisy petrol generator."</p>
              <div class="ss-testimonial-author">
                <div class="ss-author-avatar">EV</div>
                <div>
                  <div class="ss-author-name">Elena Vance</div>
                  <div class="ss-author-role">Outdoor Videographer</div>
                </div>
              </div>
            </div>

            <!-- Quote 2 -->
            <div class="ss-testimonial-card">
              <p class="ss-testimonial-quote">"My Anker battery was gathering dust between family camping trips. It made $420 last month renting to festival-goers and weekend remote workers in Bristol."</p>
              <div class="ss-testimonial-author">
                <div class="ss-author-avatar" style="background: linear-gradient(135deg, var(--ss-deep-teal) 0%, #167D91 100%);">MT</div>
                <div>
                  <div class="ss-author-name">Marcus Thorne</div>
                  <div class="ss-author-role">Homeowner & Cyclist</div>
                </div>
              </div>
            </div>

            <!-- Quote 3 -->
            <div class="ss-testimonial-card">
              <p class="ss-testimonial-quote">"When an unexpected storm knocked our neighborhood power out for 18 hours, I booked a solar battery 3 streets over in 10 minutes. Kept our baby's monitor and fridge running."</p>
              <div class="ss-testimonial-author">
                <div class="ss-author-avatar" style="background: linear-gradient(135deg, #10B981 0%, #059669 100%);">AP</div>
                <div>
                  <div class="ss-author-name">Aisha Patel</div>
                  <div class="ss-author-role">Remote Software Engineer</div>
                </div>
              </div>
            </div>

            <!-- Quote 4 -->
            <div class="ss-testimonial-card">
              <p class="ss-testimonial-quote">"As an off-grid van builder, testing wind vs solar gear before committing $2,000 to my own setup saved me a small fortune. The local handover took 3 minutes."</p>
              <div class="ss-testimonial-author">
                <div class="ss-author-avatar" style="background: linear-gradient(135deg, var(--ss-ember-coral) 0%, #E2481F 100%);">LO</div>
                <div>
                  <div class="ss-author-name">Liam O'Connor</div>
                  <div class="ss-author-role">DIY Campervan Builder</div>
                </div>
              </div>
            </div>

            <!-- Duplicate set for seamless continuous marquee loop -->
            <div class="ss-testimonial-card" aria-hidden="true">
              <p class="ss-testimonial-quote">"Rented a 200W panel for a 5-day backcountry shoot in Snowdonia. Charged all our camera packs and drone batteries flawlessly without a noisy petrol generator."</p>
              <div class="ss-testimonial-author">
                <div class="ss-author-avatar">EV</div>
                <div>
                  <div class="ss-author-name">Elena Vance</div>
                  <div class="ss-author-role">Outdoor Videographer</div>
                </div>
              </div>
            </div>

            <div class="ss-testimonial-card" aria-hidden="true">
              <p class="ss-testimonial-quote">"My Anker battery was gathering dust between family camping trips. It made $420 last month renting to festival-goers and weekend remote workers in Bristol."</p>
              <div class="ss-testimonial-author">
                <div class="ss-author-avatar" style="background: linear-gradient(135deg, var(--ss-deep-teal) 0%, #167D91 100%);">MT</div>
                <div>
                  <div class="ss-author-name">Marcus Thorne</div>
                  <div class="ss-author-role">Homeowner & Cyclist</div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>
    <!-- /SECTION: community -->

    <!-- SECTION: faq -->
    <section class="ss-section ss-faq" id="faq">
      <div class="ss-container">
        
        <div class="ss-section-header text-center ss-reveal">
          <div class="ss-section-tag">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
            <span>Questions & Trust</span>
          </div>
          <h2 class="ss-section-title">Frequently Asked Questions</h2>
          <p class="ss-section-subtitle mx-auto" style="margin: 0 auto;">Everything you need to know about deposits, insurance, and neighborhood handovers.</p>
        </div>

        <div class="ss-faq-list">
          
          <!-- FAQ 1 -->
          <div class="ss-accordion-item is-open ss-reveal ss-delay-1">
            <button class="ss-accordion-trigger" aria-expanded="true" aria-controls="faq-ans-1">
              <span>How do security deposits work?</span>
              <span class="ss-accordion-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
              </span>
            </button>
            <div class="ss-accordion-body" id="faq-ans-1">
              <div class="ss-accordion-content">
                <div class="ss-accordion-inner">
                  When you book equipment, a temporary authorization hold is placed on your payment card. No funds leave your account unless damage is reported. Once the lender confirms the equipment is returned safely and operational, the hold is released automatically within 2 hours.
                </div>
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="ss-accordion-item ss-reveal ss-delay-2">
            <button class="ss-accordion-trigger" aria-expanded="false" aria-controls="faq-ans-2">
              <span>What happens if equipment is damaged or lost?</span>
              <span class="ss-accordion-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
              </span>
            </button>
            <div class="ss-accordion-body" id="faq-ans-2">
              <div class="ss-accordion-content">
                <div class="ss-accordion-inner">
                  Every booking is automatically backed by our SolarShield Protection Guarantee. In the unlikely event of accidental drops, water ingress or component failure, SolarShare covers repair or complete replacement value up to $3,000, with dedicated 24/7 claims support.
                </div>
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="ss-accordion-item ss-reveal ss-delay-3">
            <button class="ss-accordion-trigger" aria-expanded="false" aria-controls="faq-ans-3">
              <span>Who is eligible to list equipment on SolarShare?</span>
              <span class="ss-accordion-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
              </span>
            </button>
            <div class="ss-accordion-body" id="faq-ans-3">
              <div class="ss-accordion-content">
                <div class="ss-accordion-inner">
                  Anyone aged 18 or older with genuine renewable energy equipment can list. Lenders complete a quick two-minute government ID verification and upload two photos of the gear powered on to prove functionality before listings go live.
                </div>
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="ss-accordion-item ss-reveal ss-delay-4">
            <button class="ss-accordion-trigger" aria-expanded="false" aria-controls="faq-ans-4">
              <span>How does pricing and lender payout work?</span>
              <span class="ss-accordion-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
              </span>
            </button>
            <div class="ss-accordion-body" id="faq-ans-4">
              <div class="ss-accordion-content">
                <div class="ss-accordion-inner">
                  Lenders set their own daily, weekend, and weekly rental rates. You keep 85% of every booking; SolarShare retains a 15% platform fee to cover credit card processing, ID checks, and SolarShield insurance. Payouts transfer directly to your bank account 24 hours after booking start.
                </div>
              </div>
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="ss-accordion-item ss-reveal ss-delay-4">
            <button class="ss-accordion-trigger" aria-expanded="false" aria-controls="faq-ans-5">
              <span>Is it safe to meet lenders and renters in person?</span>
              <span class="ss-accordion-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
              </span>
            </button>
            <div class="ss-accordion-body" id="faq-ans-5">
              <div class="ss-accordion-content">
                <div class="ss-accordion-inner">
                  Yes. All members are phone and identity-verified. Messaging stays within the encrypted app so private contact details are shielded. Handover locations are agreed in advance—members often choose local community centers, coffee shops, or safe doorstep handoffs.
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- /SECTION: faq -->

    <!-- SECTION: cta -->
    <section class="ss-section ss-cta-dusk" id="ss-cta-dusk">
      <div class="ss-container text-center ss-reveal">
        
        <div class="ss-section-tag">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
          <span>Join the Clean Energy Movement</span>
        </div>

        <h2 class="ss-section-title">Ready to share some sunshine?</h2>
        <p class="ss-section-subtitle mx-auto" style="margin: 0 auto 2.5rem; max-width: 58ch;">
          Join thousands of neighbors borrowing and lending clean power today. Free signup, no subscriptions, cancel anytime.
        </p>

        <div class="ss-hero-cta justify-content-center" style="margin-bottom: 2rem;">
          <a href="#equipment" class="ss-btn ss-btn-primary ss-btn-lg">
            Get started
            <svg width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M4.166 10h11.667m0 0l-5-5m5 5l-5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
          <a href="#how-it-works" class="ss-btn ss-btn-secondary ss-btn-lg" style="background: rgba(255, 255, 255, 0.08); color: #FFF; border-color: rgba(255, 255, 255, 0.2);">
            Learn more
          </a>
        </div>

        <!-- Setting Sun Horizon SVG Scene (Sets as section enters view) -->
        <div class="ss-setting-sun-wrap">
          <svg viewBox="0 0 440 180" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-100" aria-label="Sun setting behind mountain horizon illustration">
            <defs>
              <radialGradient id="sunsetGlow" cx="50%" cy="50%" r="50%">
                <stop offset="0%" stop-color="#FFB020" stop-opacity="0.8"/>
                <stop offset="60%" stop-color="#FF6B3D" stop-opacity="0.4"/>
                <stop offset="100%" stop-color="#0E1B2C" stop-opacity="0"/>
              </radialGradient>
            </defs>
            
            <!-- Sun Sinking behind horizon -->
            <g class="ss-sun-sunset">
              <circle cx="220" cy="110" r="75" fill="url(#sunsetGlow)" />
              <circle cx="220" cy="110" r="42" fill="#FFB020" />
            </g>

            <!-- Horizon Ridges & Neighborhood Silhouette -->
            <path d="M0 135 Q 110 115 220 128 Q 330 140 440 125 L 440 180 L 0 180 Z" fill="#0E1B2C"/>
            <path d="M0 150 Q 160 138 270 145 Q 370 152 440 142 L 440 180 L 0 180 Z" fill="#070F1A"/>
            
            <!-- Little Solar Rooftop Silhouettes on Horizon -->
            <rect x="90" y="128" width="18" height="12" rx="1" fill="#070F1A"/>
            <polygon points="99,122 86,129 112,129" fill="#070F1A"/>
            <rect x="310" y="132" width="22" height="15" rx="1" fill="#070F1A"/>
            <polygon points="321,126 306,133 336,133" fill="#070F1A"/>
          </svg>
        </div>

      </div>
    </section>
    <!-- /SECTION: cta -->
@endsection
