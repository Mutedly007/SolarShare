@extends('layouts.front')

@section('title', 'SolarShare')

@section('content')
    <!-- SECTION: hero -->
    <section class="ss-hero ss-hero-video-mode" id="hero">
      
      <!-- Wind Turbine Looping Video Canvas -->
      <div class="ss-hero-wind-canvas" aria-hidden="true">
        <video autoplay loop muted playsinline poster="{{ asset('assets/videos/hero-wind-turbine-poster.jpg') }}" class="ss-hero-video-element">
          <source src="{{ asset('assets/videos/hero-wind-turbine.mp4') }}" type="video/mp4">
        </video>
        <div class="ss-hero-video-scrim"></div>
      </div>

      <div class="ss-container" style="position: relative; z-index: 2;">
        <div class="row align-items-center">
          
          <!-- Left Column: Copy & CTAs -->
          <div class="col-lg-7 col-md-12">
            <div class="ss-hero-content">
              
              <!-- Subtle Trust Pill -->
              <div class="ss-hero-badge ss-reveal">
                <span class="ss-badge-dot"></span>
                <span>Peer-to-Peer Clean Power · 100% Insured</span>
              </div>

              <!-- Masked Slide-Up Headline Reveal -->
              <h1 class="ss-hero-title ss-reveal ss-delay-1">
                <span class="ss-word-mask"><span class="ss-word ss-word-1">Borrow</span></span>
                <span class="ss-word-mask"><span class="ss-word ss-word-2">the</span></span>
                <span class="ss-word-mask"><span class="ss-word ss-word-3">sun.</span></span>
                <br>
                <span class="ss-word-mask"><span class="ss-word ss-word-4">Lend</span></span>
                <span class="ss-word-mask"><span class="ss-word ss-word-5">your</span></span>
                <span class="ss-word-mask"><span class="ss-word ss-word-6">own.</span></span>
              </h1>

              <p class="ss-hero-subtitle ss-reveal ss-delay-2">
                Rent high-yield solar panels, portable batteries and whisper-quiet micro wind turbines from trusted neighbors — or earn steady income from idle clean power gear.
              </p>

              <div class="ss-hero-cta ss-reveal ss-delay-3">
                <a href="#equipment" class="ss-btn ss-btn-primary ss-btn-lg">
                  Browse equipment
                  <svg width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M4.166 10h11.667m0 0l-5-5m5 5l-5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </a>
                <a href="#community" class="ss-btn ss-btn-secondary ss-btn-lg" style="background: rgba(255, 255, 255, 0.12); color: #FFF; border-color: rgba(255, 255, 255, 0.3);">
                  List your equipment
                </a>
              </div>

              <!-- Quick Verification Proof -->
              <div class="ss-hero-stats-preview ss-reveal ss-delay-4">
                <div class="ss-stat-mini">
                  <span class="ss-stat-mini-val" style="color: #FFFFFF;">15 mins</span>
                  <span class="ss-stat-mini-lbl" style="color: rgba(255,255,255,0.7);">Average pickup radius</span>
                </div>
                <div style="width: 1px; height: 32px; background: rgba(255,255,255,0.2);"></div>
                <div class="ss-stat-mini">
                  <span class="ss-stat-mini-val" style="color: #FFFFFF;">$3,000</span>
                  <span class="ss-stat-mini-lbl" style="color: rgba(255,255,255,0.7);">SolarShield protection</span>
                </div>
                <div style="width: 1px; height: 32px; background: rgba(255,255,255,0.2);"></div>
                <div class="ss-stat-mini">
                  <span class="ss-stat-mini-val" style="color: #FFB020;">4.9 ★</span>
                  <span class="ss-stat-mini-lbl" style="color: rgba(255,255,255,0.7);">Community rating</span>
                </div>
              </div>

            </div>
          </div>

          <!-- Right Column: Glass Floating Equipment Cards -->
          <div class="col-lg-5 col-md-12 mt-4 mt-lg-0">
            <div class="ss-hero-visual-col">
              
              <div class="ss-glass-card-stack">
                
                <div class="ss-glass-equipment-card ss-reveal ss-delay-1">
                  <div class="ss-glass-card-icon" style="background: rgba(255, 107, 61, 0.25); color: #FF6B3D; border-color: rgba(255, 107, 61, 0.4);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="13" rx="2"/><path d="M3 10.5h18M9 4v13M15 4v13M6 21l3-4M18 21l-3-4"/></svg>
                  </div>
                  <div style="flex-grow: 1;">
                    <div class="ss-glass-card-title">EcoFold 220W Bifacial Panel</div>
                    <div class="ss-glass-card-meta">
                      <span class="ss-glass-card-price">$18/day</span>
                      <span>·</span>
                      <span>0.8 miles away</span>
                      <span>·</span>
                      <span style="color: #10B981;">★ 4.9 (38)</span>
                    </div>
                  </div>
                </div>

                <div class="ss-glass-equipment-card ss-reveal ss-delay-2">
                  <div class="ss-glass-card-icon" style="background: rgba(15, 92, 107, 0.25); color: #38BDF8; border-color: rgba(56, 189, 248, 0.4);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="6" width="16" height="14" rx="3"/><path d="M8 3h8v3H8z"/><circle cx="9" cy="11" r="1.5"/><circle cx="15" cy="11" r="1.5"/><path d="M8 15h8"/></svg>
                  </div>
                  <div style="flex-grow: 1;">
                    <div class="ss-glass-card-title">Anker Solix 768Wh Station</div>
                    <div class="ss-glass-card-meta">
                      <span class="ss-glass-card-price">$28/day</span>
                      <span>·</span>
                      <span>1.4 miles away</span>
                      <span>·</span>
                      <span style="color: #10B981;">★ 5.0 (24)</span>
                    </div>
                  </div>
                </div>

                <div class="ss-glass-equipment-card ss-reveal ss-delay-3">
                  <div class="ss-glass-card-icon" style="background: rgba(16, 185, 129, 0.25); color: #34D399; border-color: rgba(52, 211, 153, 0.4);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="3"/><path d="M12 11v11M12 8l-6-4M12 8l6-4"/></svg>
                  </div>
                  <div style="flex-grow: 1;">
                    <div class="ss-glass-card-title">AirX 400W Micro Wind Kit</div>
                    <div class="ss-glass-card-meta">
                      <span class="ss-glass-card-price">$22/day</span>
                      <span>·</span>
                      <span>2.1 miles away</span>
                      <span>·</span>
                      <span style="color: #10B981;">★ 4.8 (19)</span>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>

    </section>
    <!-- /SECTION: hero -->

    <!-- SECTION: social proof & mission -->
    <section class="ss-mission-social">
      <div class="ss-container">
        <div class="ss-mission-card ss-reveal">
          <div class="row align-items-center">
            <div class="col-lg-8 col-md-12">
              <p class="ss-mission-reveal-text">
                "We believe clean power shouldn't sit idle in garages. SolarShare connects neighbors to share high-efficiency solar arrays, portable batteries, and micro-turbines on demand."
              </p>
              <div class="ss-story-avatars-wrap">
                <div class="ss-story-avatar-stack">
                  <img src="{{ asset('assets/images/story-1.webp') }}" alt="Community member Elena" loading="lazy">
                  <img src="{{ asset('assets/images/story-2.webp') }}" alt="Community member Marcus" loading="lazy">
                  <img src="{{ asset('assets/images/story-3.webp') }}" alt="Community member Aisha" loading="lazy">
                </div>
                <span style="font-size: 0.95rem; font-weight: 600; color: var(--ss-ink-muted);">
                  Joined by 3,150+ verified local clean power hosts across the UK & Europe
                </span>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 text-lg-end mt-4 mt-lg-0">
              <div style="display: inline-flex; flex-direction: column; align-items: flex-start; gap: 0.5rem; background: var(--ss-midday-sky); padding: 1.5rem; border-radius: 18px;">
                <span style="font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; color: var(--ss-deep-teal);">Verified Clean Impact</span>
                <span style="font-family: var(--ss-font-heading); font-size: 2rem; font-weight: 800; color: var(--ss-deep-teal); line-height: 1;">12,480 kWh</span>
                <span style="font-size: 0.85rem; color: var(--ss-ink-muted);">Zero-emission power generated & shared locally</span>
              </div>
            </div>
          </div>

          <div class="ss-brand-pills-row">
            <span style="font-size: 0.8rem; font-weight: 700; text-transform: uppercase; color: var(--ss-ink-subtle); letter-spacing: 0.05em;">Supported Hardware:</span>
            <span class="ss-brand-pill">EcoFlow</span>
            <span class="ss-brand-pill">Jackery</span>
            <span class="ss-brand-pill">Anker Solix</span>
            <span class="ss-brand-pill">Bluetti</span>
            <span class="ss-brand-pill">Renogy</span>
            <span class="ss-brand-pill">Goal Zero</span>
          </div>
        </div>
      </div>
    </section>
    <!-- /SECTION: social proof & mission -->

    <!-- SECTION: solutions-showcase -->
    <section class="ss-section" style="padding: 0;">
      <div class="ss-container">
        <div class="ss-solar-showcase ss-reveal" id="solutions">
          
          <video class="ss-showcase-video-bg" autoplay loop muted playsinline poster="{{ asset('assets/videos/solar-showcase-poster.jpg') }}">
            <source src="{{ asset('assets/videos/solar-showcase.mp4') }}" type="video/mp4">
          </video>
          
          <div class="ss-showcase-overlay" aria-hidden="true"></div>

          <div class="ss-showcase-content">
            <div class="ss-showcase-top">
              <div>
                <div class="ss-section-tag" style="background: rgba(255, 255, 255, 0.12); color: #FFF; border-color: rgba(255, 255, 255, 0.25);">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                  <span>Tailored Hardware Categories</span>
                </div>
                <h2 class="ss-section-title" style="color: #FFFFFF; max-width: 22ch; margin-bottom: 0.75rem;">
                  Engineered For Clean Power Anywhere
                </h2>
                <p class="ss-section-subtitle" style="color: rgba(255, 255, 255, 0.85); margin-bottom: 0; max-width: 50ch;">
                  Whether off-grid camping, setting up remote field audio, or backing up essential home appliances during grid outages.
                </p>
              </div>

              <div>
                <a href="#equipment" class="ss-btn ss-btn-primary">
                  Explore all gear
                  <svg width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M4.166 10h11.667m0 0l-5-5m5 5l-5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </a>
              </div>
            </div>

            <div class="ss-showcase-cards-grid">
              
              <!-- Card 1 -->
              <div class="ss-showcase-card ss-reveal ss-delay-1">
                <div class="ss-showcase-card-icon">
                  <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="3" y="4" width="18" height="13" rx="2"/><path d="M3 10.5h18M9 4v13M15 4v13M6 21l3-4M18 21l-3-4"/></svg>
                </div>
                <h3 class="ss-showcase-card-title">Mobile Solar Arrays</h3>
                <p class="ss-showcase-card-text">Foldable 100W to 400W monocrystalline panels with ETFE weatherproof layers and universal MC4 connectors for all power stations.</p>
              </div>

              <!-- Card 2 -->
              <div class="ss-showcase-card ss-reveal ss-delay-2">
                <div class="ss-showcase-card-icon" style="background: rgba(255, 176, 32, 0.15); color: var(--ss-sun-amber-hover);">
                  <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="4" y="6" width="16" height="14" rx="3"/><path d="M8 3h8v3H8z"/><circle cx="9" cy="11" r="1.5"/><circle cx="15" cy="11" r="1.5"/><path d="M8 15h8"/></svg>
                </div>
                <h3 class="ss-showcase-card-title">LiFePO4 Power Stations</h3>
                <p class="ss-showcase-card-text">Ultra-safe lithium battery generators from 512Wh to 2048Wh with pure sine wave 230V AC output and high-speed USB-C fast charging.</p>
              </div>

              <!-- Card 3 -->
              <div class="ss-showcase-card ss-reveal ss-delay-3">
                <div class="ss-showcase-card-icon" style="background: rgba(16, 185, 129, 0.12); color: var(--ss-success);">
                  <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="8" r="3"/><path d="M12 11v11M12 8l-6-4M12 8l6-4"/></svg>
                </div>
                <h3 class="ss-showcase-card-title">Micro Wind Turbines</h3>
                <p class="ss-showcase-card-text">Lightweight 400W coastal and ridge wind kits that generate steady electricity throughout the night and in cloudy weather conditions.</p>
              </div>

            </div>

          </div>

        </div>
      </div>
    </section>
    <!-- /SECTION: solutions-showcase -->

    <!-- SECTION: how-it-works (Sticky Process Layout) -->
    <section class="ss-section ss-how" id="how-it-works">
      <div class="ss-container">
        
        <div class="ss-process-sticky-layout">
          
          <!-- Sticky Left Column -->
          <div class="ss-process-sticky-left ss-reveal">
            <div class="ss-process-step-indicator">
              <span id="ss-process-current-step">Step 01 of 03</span>
            </div>
            
            <h2 class="ss-section-title" style="margin-bottom: 1rem;">
              A Proven Process for Clean Power Sharing
            </h2>
            
            <p class="ss-section-subtitle" style="margin-bottom: 2rem;">
              Built for neighbors by neighbors. Renting or lending gear takes under five minutes with end-to-end ID verification and damage protection.
            </p>

            <a href="#equipment" class="ss-btn ss-btn-primary ss-btn-lg">
              Get started now
              <svg width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M4.166 10h11.667m0 0l-5-5m5 5l-5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>

          <!-- Stacking Process Cards (Right Column) -->
          <div class="ss-process-cards-stack">
            
            <!-- Step 1 -->
            <div class="ss-process-card ss-reveal ss-delay-1" data-step="01">
              <div class="ss-process-media">
                <div class="ss-reveal-wrap">
                  <img src="{{ asset('assets/images/process-1.avif') }}" alt="Listing clean energy equipment" loading="lazy">
                  <div class="ss-reveal-frame"></div>
                </div>
              </div>
              <div class="ss-process-body">
                <div class="ss-process-num-badge">01 — PRE-TRIP VERIFICATION</div>
                <h3 class="ss-process-title">Snap, Verify & List in Minutes</h3>
                <p class="ss-process-text">Lenders photograph their solar panel, battery station, or micro turbine, set custom weekend or daily rates, and prove functionality through a 2-minute identity check.</p>
              </div>
            </div>

            <!-- Step 2 -->
            <div class="ss-process-card ss-reveal ss-delay-2" data-step="02">
              <div class="ss-process-media">
                <div class="ss-reveal-wrap">
                  <img src="{{ asset('assets/images/process-2.avif') }}" alt="Locating tested gear nearby" loading="lazy">
                  <div class="ss-reveal-frame"></div>
                </div>
              </div>
              <div class="ss-process-body">
                <div class="ss-process-num-badge">02 — NEIGHBORHOOD BOOKING</div>
                <h3 class="ss-process-title">Browse Tested Gear Within 15 Miles</h3>
                <p class="ss-process-text">Renters search verified items nearby, pick trip dates, and place a secured temporary hold. Meet locally at a community spot or doorstep for an instant handover.</p>
              </div>
            </div>

            <!-- Step 3 -->
            <div class="ss-process-card ss-reveal ss-delay-3" data-step="03">
              <div class="ss-process-media">
                <div class="ss-reveal-wrap">
                  <img src="{{ asset('assets/images/process-3.avif') }}" alt="Deploying renewable power" loading="lazy">
                  <div class="ss-reveal-frame"></div>
                </div>
              </div>
              <div class="ss-process-body">
                <div class="ss-process-num-badge">03 — FIELD POWER & RETURN</div>
                <h3 class="ss-process-title">Power Your Journey, Return Charged</h3>
                <p class="ss-process-text">Run silent, fume-free clean electricity anywhere. Hand the equipment back charged, automatically release the deposit hold, and swap five-star community reviews.</p>
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

        <!-- Asymmetric 2x2 Bento Grid with Curtain Reveals -->
        <div class="ss-arvora-bento">
          
          <!-- Tile 1 (Wide, 1.3fr) -->
          <div class="ss-bento-project-item ss-reveal">
            <div class="ss-bento-project-media">
              <div class="ss-reveal-wrap">
                <img src="{{ asset('assets/images/solar-1.avif') }}" alt="SkyVolt 400W Monocrystalline Array in Field" loading="lazy">
                <div class="ss-reveal-frame"></div>
              </div>
            </div>
            <div class="ss-bento-project-body">
              <span class="ss-bento-project-tag">Portable Solar Array</span>
              <h3 class="ss-bento-project-title">SkyVolt 400W High-Output Solar Array</h3>
              <p class="ss-bento-project-desc">Rugged quad-fold solar array featuring 23.4% monocrystalline cell efficiency and integrated kickstands. Perfect for basecamps, vans, and emergency charging.</p>
            </div>
          </div>

          <!-- Tile 2 (Tall, 1fr) -->
          <div class="ss-bento-project-item ss-reveal ss-delay-1">
            <div class="ss-bento-project-media">
              <div class="ss-reveal-wrap">
                <img src="{{ asset('assets/images/solar-2.avif') }}" alt="Sunergy Works Home Battery Storage" loading="lazy">
                <div class="ss-reveal-frame"></div>
              </div>
            </div>
            <div class="ss-bento-project-body">
              <span class="ss-bento-project-tag">Storage & Backup</span>
              <h3 class="ss-bento-project-title">Sunergy Works LiFePO4 Station (2048Wh)</h3>
              <p class="ss-bento-project-desc">Massive capacity lithium iron phosphate station capable of running fridges, medical CPAP units, and heavy-duty power tools off-grid.</p>
            </div>
          </div>

          <!-- Tile 3 (Tall, 1fr) -->
          <div class="ss-bento-project-item ss-reveal">
            <div class="ss-bento-project-media">
              <div class="ss-reveal-wrap">
                <img src="{{ asset('assets/images/solar-3.avif') }}" alt="PowerHub Micro Wind Turbine" loading="lazy">
                <div class="ss-reveal-frame"></div>
              </div>
            </div>
            <div class="ss-bento-project-body">
              <span class="ss-bento-project-tag">Micro Wind Generation</span>
              <h3 class="ss-bento-project-title">PowerHub AirX 400W Wind Generator</h3>
              <p class="ss-bento-project-desc">Aerodynamic carbon fiber blades that spin noiselessly, generating power in 7 knot breezes and through coastal night storms.</p>
            </div>
          </div>

          <!-- Tile 4 (Wide, 1.3fr) -->
          <div class="ss-bento-project-item ss-reveal ss-delay-1">
            <div class="ss-bento-project-media">
              <div class="ss-reveal-wrap">
                <img src="{{ asset('assets/images/solar-4.avif') }}" alt="EcoEdge Farmstead Clean Energy Hub" loading="lazy">
                <div class="ss-reveal-frame"></div>
              </div>
            </div>
            <div class="ss-bento-project-body">
              <span class="ss-bento-project-tag">Dual Solar + Battery Pack</span>
              <h3 class="ss-bento-project-title">EcoEdge Farmstead & Expedition Kit</h3>
              <p class="ss-bento-project-desc">Complete off-grid combo including 200W foldable panel, 1024Wh battery station, and heavy-duty 50ft extension cable pack for remote locations.</p>
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

    <!-- SECTION: why-choose -->
    <section class="ss-section ss-why-choose" id="why-choose">
      <div class="ss-container">
        
        <div class="ss-section-header ss-reveal">
          <div class="ss-section-tag">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
            <span>Community Trust & Protection</span>
          </div>
          <h2 class="ss-section-title">Why Neighbors Choose SolarShare</h2>
          <p class="ss-section-subtitle">Creating a cleaner, shared-power future with neighborhood security at its core.</p>
        </div>

        <div class="ss-why-choose-grid">
          
          <!-- Left Bento Box (Dual split sub-card) -->
          <div class="ss-why-left-card ss-reveal">
            <div>
              <div class="ss-why-thumb-wrap">
                <div class="ss-reveal-wrap">
                  <img src="{{ asset('assets/images/choose-1.avif') }}" alt="Neighbor testing clean power equipment" loading="lazy">
                  <div class="ss-reveal-frame"></div>
                </div>
              </div>
              <a href="#equipment" class="ss-btn ss-btn-secondary ss-btn-sm w-100 justify-content-center">Browse all items</a>
            </div>

            <div class="ss-why-divider d-none d-sm-block"></div>

            <div>
              <div class="ss-counter-huge">4,850+</div>
              <h4 style="font-family: var(--ss-font-heading); font-size: 1.25rem; font-weight: 700; margin-bottom: 0.35rem; color: var(--ss-ink);">Happy Borrowers</h4>
              <p style="font-size: 0.88rem; color: var(--ss-ink-muted); margin-bottom: 1.25rem;">Renting verified clean gear across 140+ neighborhood chapters.</p>
              
              <div class="ss-story-avatar-stack mb-3">
                <img src="{{ asset('assets/images/story-1.webp') }}" alt="Borrower review" loading="lazy">
                <img src="{{ asset('assets/images/story-2.webp') }}" alt="Borrower review" loading="lazy">
                <img src="{{ asset('assets/images/story-3.webp') }}" alt="Borrower review" loading="lazy">
              </div>

              <div style="display: inline-flex; align-items: center; gap: 0.45rem; font-size: 0.82rem; font-weight: 700; color: var(--ss-success);">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"><polyline points="20 6 9 17 4 12"/></svg>
                <span>ID-Verified Community</span>
              </div>
            </div>
          </div>

          <!-- Right Bento Box (Video backdrop with 99.4% stat) -->
          <div class="ss-why-right-card ss-reveal ss-delay-1">
            <video class="ss-why-video-bg" autoplay loop muted playsinline poster="{{ asset('assets/videos/solar-team-poster.jpg') }}">
              <source src="{{ asset('assets/videos/solar-team.mp4') }}" type="video/mp4">
            </video>
            <div class="ss-why-overlay" aria-hidden="true"></div>

            <div class="ss-why-right-content">
              <div class="ss-counter-huge" style="color: #FFFFFF;">99.4%</div>
              <h3 style="font-family: var(--ss-font-heading); font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem; color: #FFFFFF;">Booking Satisfaction</h3>
              <p style="color: rgba(255, 255, 255, 0.85); font-size: 0.95rem; line-height: 1.55; margin-bottom: 0;">
                Every booking includes up to $3,000 SolarShield replacement guarantee, pre-authorized deposit holds, and 24/7 emergency handover claims.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- /SECTION: why-choose -->

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
