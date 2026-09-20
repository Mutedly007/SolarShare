/**
 * SolarShare — Interactive Front-End Logic
 * Vanilla ES Module / Universal Script
 * Smooth performance using IntersectionObserver, RAF, and CSS custom property updates
 */

(function initSolarShare() {
  function start() {
    const isReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const isPointerFine = window.matchMedia('(pointer: fine)').matches;

    // Signal that JS is ready to activate progressive enhancement reveals
    document.documentElement.classList.add('ss-js-ready');

    /* ==========================================================================
       1. THE SUN IS THE NARRATOR: Dynamic Sky & Arc Sun
       ========================================================================== */
    const skyBackdrop = document.getElementById('ss-sky-backdrop');
    const skyStars = document.getElementById('ss-sky-stars');
    const narratorSun = document.getElementById('ss-narrator-sun');

    function updateNarratorSunAndSky() {
      const scrollY = window.scrollY || window.pageYOffset;
      const docHeight = document.documentElement.scrollHeight - window.innerHeight;
      const progress = Math.max(0, Math.min(1, docHeight > 0 ? scrollY / docHeight : 0));

      if (!isReducedMotion && narratorSun) {
        const winW = window.innerWidth;
        const winH = window.innerHeight;
        
        const sunX = 30 + progress * (winW - 120);
        const arcHeight = Math.min(winH * 0.45, 300);
        const sunY = (1 - Math.sin(progress * Math.PI)) * arcHeight + 35;
        
        narratorSun.style.transform = `translate3d(${sunX}px, ${sunY}px, 0)`;

        if (progress < 0.28) {
          narratorSun.style.background = 'radial-gradient(circle, #FFF4CE 0%, #FFB020 60%, #FF6B3D 100%)';
          narratorSun.style.boxShadow = '0 0 28px rgba(255, 176, 32, 0.65), 0 0 70px rgba(255, 176, 32, 0.35)';
        } else if (progress < 0.68) {
          narratorSun.style.background = 'radial-gradient(circle, #FFFFFF 0%, #FFF5D0 40%, #FFB020 100%)';
          narratorSun.style.boxShadow = '0 0 36px rgba(255, 230, 150, 0.8), 0 0 85px rgba(255, 176, 32, 0.45)';
        } else if (progress < 0.88) {
          narratorSun.style.background = 'radial-gradient(circle, #FFE2B8 0%, #FF8A3D 60%, #E2481F 100%)';
          narratorSun.style.boxShadow = '0 0 32px rgba(255, 107, 61, 0.7), 0 0 75px rgba(255, 107, 61, 0.35)';
        } else {
          narratorSun.style.background = 'radial-gradient(circle, #FF9565 0%, #DF4D26 70%, #0E1B2C 100%)';
          narratorSun.style.boxShadow = '0 0 20px rgba(255, 107, 61, 0.4)';
        }
      }

      if (skyBackdrop) {
        if (progress < 0.28) {
          document.documentElement.style.setProperty('--ss-sky-top', '#FDE4CC');
          document.documentElement.style.setProperty('--ss-sky-bottom', '#FFF9F2');
          document.documentElement.style.setProperty('--ss-sky-radial', 'rgba(255, 176, 32, 0.28)');
          if (skyStars) skyStars.classList.remove('is-visible');
        } else if (progress < 0.68) {
          document.documentElement.style.setProperty('--ss-sky-top', '#CDEBF5');
          document.documentElement.style.setProperty('--ss-sky-bottom', '#F5FBFE');
          document.documentElement.style.setProperty('--ss-sky-radial', 'rgba(205, 235, 245, 0.35)');
          if (skyStars) skyStars.classList.remove('is-visible');
        } else if (progress < 0.88) {
          document.documentElement.style.setProperty('--ss-sky-top', '#FCD692');
          document.documentElement.style.setProperty('--ss-sky-bottom', '#FBE5D6');
          document.documentElement.style.setProperty('--ss-sky-radial', 'rgba(255, 107, 61, 0.22)');
          if (skyStars) skyStars.classList.remove('is-visible');
        } else {
          document.documentElement.style.setProperty('--ss-sky-top', '#0E1B2C');
          document.documentElement.style.setProperty('--ss-sky-bottom', '#070F1A');
          document.documentElement.style.setProperty('--ss-sky-radial', 'rgba(15, 92, 107, 0.2)');
          if (skyStars) skyStars.classList.add('is-visible');
        }
      }

      updateHowItWorksLine();
    }

    let ticking = false;
    window.addEventListener('scroll', () => {
      if (!ticking) {
        window.requestAnimationFrame(() => {
          updateNarratorSunAndSky();
          updateNavbarOnScroll();
          ticking = false;
        });
        ticking = true;
      }
    }, { passive: true });

    window.addEventListener('resize', () => {
      updateNarratorSunAndSky();
      repositionNavIndicator();
    }, { passive: true });

    /* ==========================================================================
       2. NAVBAR: Frosted Glass, Active Indicator & Mobile Menu
       ========================================================================== */
    const navbar = document.getElementById('ss-navbar');
    const navLinks = document.querySelectorAll('.ss-nav-link');
    const navIndicator = document.getElementById('ss-nav-sun-indicator');
    const hamburger = document.getElementById('ss-hamburger');
    const mobileMenu = document.getElementById('ss-mobile-menu');
    const mobileLinks = document.querySelectorAll('.ss-mobile-nav-link');

    function updateNavbarOnScroll() {
      if (!navbar) return;
      if (window.scrollY > 40) {
        navbar.classList.add('ss-scrolled');
      } else {
        navbar.classList.remove('ss-scrolled');
      }
    }

    let activeSectionId = '';
    const sections = document.querySelectorAll('section[id]');
    
    function updateActiveNavLink(id) {
      if (!id || activeSectionId === id) return;
      activeSectionId = id;
      
      let activeLink = null;
      navLinks.forEach(link => {
        if (link.getAttribute('href') === `#${id}`) {
          activeLink = link;
        }
      });

      if (activeLink && navIndicator) {
        const linkRect = activeLink.getBoundingClientRect();
        const parentRect = activeLink.closest('.ss-nav-menu').getBoundingClientRect();
        const offsetLeft = linkRect.left - parentRect.left + (linkRect.width / 2) - 4;
        navIndicator.style.transform = `translate3d(${offsetLeft}px, 0, 0)`;
        navIndicator.classList.add('is-active');
      } else if (navIndicator) {
        navIndicator.classList.remove('is-active');
      }
    }

    function repositionNavIndicator() {
      if (activeSectionId) {
        const activeLink = document.querySelector(`.ss-nav-link[href="#${activeSectionId}"]`);
        if (activeLink && navIndicator) {
          const linkRect = activeLink.getBoundingClientRect();
          const parentRect = activeLink.closest('.ss-nav-menu').getBoundingClientRect();
          const offsetLeft = linkRect.left - parentRect.left + (linkRect.width / 2) - 4;
          navIndicator.style.transform = `translate3d(${offsetLeft}px, 0, 0)`;
        }
      }
    }

    const sectionObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          updateActiveNavLink(entry.target.id);
        }
      });
    }, {
      rootMargin: '-25% 0px -45% 0px',
      threshold: 0.1
    });

    sections.forEach(sec => sectionObserver.observe(sec));

    if (hamburger && mobileMenu) {
      const focusableElements = mobileMenu.querySelectorAll('a, button');
      const firstFocusable = focusableElements[0];
      const lastFocusable = focusableElements[focusableElements.length - 1];

      function toggleMobileMenu(open) {
        const isOpen = open !== undefined ? open : !mobileMenu.classList.contains('is-open');
        hamburger.classList.toggle('is-open', isOpen);
        hamburger.setAttribute('aria-expanded', isOpen);
        mobileMenu.classList.toggle('is-open', isOpen);
        document.body.style.overflow = isOpen ? 'hidden' : '';

        if (isOpen && firstFocusable) {
          firstFocusable.focus();
        }
      }

      hamburger.addEventListener('click', () => toggleMobileMenu());

      mobileLinks.forEach(link => {
        link.addEventListener('click', () => toggleMobileMenu(false));
      });

      document.addEventListener('keydown', (e) => {
        if (mobileMenu.classList.contains('is-open')) {
          if (e.key === 'Escape') {
            toggleMobileMenu(false);
            hamburger.focus();
          } else if (e.key === 'Tab') {
            if (e.shiftKey && document.activeElement === firstFocusable) {
              e.preventDefault();
              lastFocusable.focus();
            } else if (!e.shiftKey && document.activeElement === lastFocusable) {
              e.preventDefault();
              firstFocusable.focus();
            }
          }
        }
      });
    }

    /* ==========================================================================
       3. HERO INTERACTION & SOLAR PANEL TRACKING
       ========================================================================== */
    const heroVisual = document.getElementById('ss-hero-visual');
    const panelGroup = document.getElementById('ss-panel-tilt-group');
    const floatCards = document.querySelectorAll('.ss-float-card');

    if (isPointerFine && heroVisual && panelGroup && !isReducedMotion) {
      heroVisual.addEventListener('mousemove', (e) => {
        const rect = heroVisual.getBoundingClientRect();
        const mouseX = e.clientX - rect.left;
        const mouseY = e.clientY - rect.top;
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        
        const deltaX = (mouseX - centerX) / centerX;
        const tiltAngle = Math.max(-20, Math.min(20, deltaX * 20));
        panelGroup.style.transform = `rotate(${tiltAngle}deg)`;

        floatCards.forEach((card, i) => {
          const depth = (i + 1) * 9;
          const moveX = (mouseX - centerX) / depth;
          const moveY = (mouseY - centerY) / depth;
          card.style.transform = `translate3d(${moveX}px, ${moveY}px, 0)`;
        });
      });

      heroVisual.addEventListener('mouseleave', () => {
        panelGroup.style.transform = 'rotate(0deg)';
        floatCards.forEach(card => {
          card.style.transform = 'translate3d(0, 0, 0)';
        });
      });
    }

    /* ==========================================================================
       4. HOW IT WORKS: Scroll-Driven Line & Step Charge
       ========================================================================== */
    const howSection = document.getElementById('how-it-works');
    const howPathActive = document.getElementById('ss-how-path-active');
    const stepCards = document.querySelectorAll('.ss-step-card');

    function updateHowItWorksLine() {
      if (!howSection || !howPathActive || isReducedMotion) return;
      const rect = howSection.getBoundingClientRect();
      const winHeight = window.innerHeight;

      if (rect.top < winHeight && rect.bottom > 0) {
        const visibleRange = winHeight + rect.height;
        const scrolledInto = winHeight - rect.top;
        const scrollPct = Math.max(0, Math.min(1, scrolledInto / visibleRange));

        const totalLength = 900;
        const offset = totalLength * (1 - scrollPct * 1.35);
        howPathActive.style.strokeDashoffset = Math.max(0, offset);

        stepCards.forEach((card, idx) => {
          const threshold = 0.18 + idx * 0.18;
          if (scrollPct >= threshold) {
            card.classList.add('is-charged');
          } else {
            card.classList.remove('is-charged');
          }
        });
      }
    }

    /* ==========================================================================
       5. EQUIPMENT: 3D Tilt Effect on Bento Cards
       ========================================================================== */
    const bentoCards = document.querySelectorAll('.ss-bento-card');
    if (isPointerFine && !isReducedMotion) {
      bentoCards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
          const rect = card.getBoundingClientRect();
          const x = e.clientX - rect.left;
          const y = e.clientY - rect.top;
          const centerX = rect.width / 2;
          const centerY = rect.height / 2;
          
          const rotateX = ((centerY - y) / centerY) * 4.5;
          const rotateY = ((x - centerX) / centerX) * 4.5;

          card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-4px)`;
        });

        card.addEventListener('mouseleave', () => {
          card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0)';
        });
      });
    }

    /* ==========================================================================
       6. IMPACT: Count-up Statistics, Gauge & Bar Chart Animation
       ========================================================================== */
    const impactSection = document.getElementById('impact');
    const countElements = document.querySelectorAll('.ss-count-val');
    const gaugeFill = document.getElementById('ss-gauge-fill');
    const chartBars = document.querySelectorAll('.ss-bar');
    let impactAnimated = false;

    function runCountUp(el) {
      const target = parseFloat(el.getAttribute('data-target'));
      const isFloat = el.getAttribute('data-float') === 'true';
      const duration = 1600;
      const startTime = performance.now();

      function updateCount(now) {
        const elapsed = now - startTime;
        const progress = Math.min(1, elapsed / duration);
        const ease = 1 - Math.pow(1 - progress, 3);
        const current = target * ease;

        if (isFloat) {
          el.textContent = current.toFixed(1);
        } else {
          el.textContent = Math.round(current).toLocaleString();
        }

        if (progress < 1) {
          requestAnimationFrame(updateCount);
        } else {
          if (isFloat) {
            el.textContent = target.toFixed(1);
          } else {
            el.textContent = target.toLocaleString();
          }
        }
      }

      requestAnimationFrame(updateCount);
    }

    if (impactSection) {
      const impactObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting && !impactAnimated) {
            impactAnimated = true;

            countElements.forEach(el => {
              if (!isReducedMotion) {
                runCountUp(el);
              } else {
                const target = el.getAttribute('data-target');
                el.textContent = parseFloat(target).toLocaleString();
              }
            });

            if (gaugeFill) {
              gaugeFill.style.strokeDashoffset = '26.4';
            }

            chartBars.forEach(bar => {
              const height = bar.getAttribute('data-height');
              bar.style.height = `${height}%`;
            });

            impactObserver.disconnect();
          }
        });
      }, { threshold: 0.2 });

      impactObserver.observe(impactSection);
    }

    /* ==========================================================================
       7. COMMUNITY: Two-Tab Switch (Rent vs Lend)
       ========================================================================== */
    const tabButtons = document.querySelectorAll('.ss-tab-btn');
    const tabPanels = document.querySelectorAll('.ss-tab-panel');

    tabButtons.forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        const targetId = btn.getAttribute('aria-controls');

        tabButtons.forEach(b => {
          b.setAttribute('aria-selected', 'false');
          b.setAttribute('tabindex', '-1');
        });
        btn.setAttribute('aria-selected', 'true');
        btn.setAttribute('tabindex', '0');

        tabPanels.forEach(panel => {
          if (panel.id === targetId) {
            panel.classList.add('is-active');
          } else {
            panel.classList.remove('is-active');
          }
        });
      });

      btn.addEventListener('keydown', (e) => {
        let index = Array.from(tabButtons).indexOf(btn);
        if (e.key === 'ArrowRight') {
          e.preventDefault();
          const next = tabButtons[(index + 1) % tabButtons.length];
          next.focus();
          next.click();
        } else if (e.key === 'ArrowLeft') {
          e.preventDefault();
          const prev = tabButtons[(index - 1 + tabButtons.length) % tabButtons.length];
          prev.focus();
          prev.click();
        }
      });
    });

    /* ==========================================================================
       8. FAQ: Accordion Smooth Height (CSS Grid trick)
       ========================================================================== */
    const accordionTriggers = document.querySelectorAll('.ss-accordion-trigger');

    accordionTriggers.forEach(trigger => {
      trigger.addEventListener('click', () => {
        const item = trigger.closest('.ss-accordion-item');
        const isExpanded = trigger.getAttribute('aria-expanded') === 'true';

        accordionTriggers.forEach(otherTrigger => {
          if (otherTrigger !== trigger) {
            otherTrigger.setAttribute('aria-expanded', 'false');
            otherTrigger.closest('.ss-accordion-item').classList.remove('is-open');
          }
        });

        trigger.setAttribute('aria-expanded', !isExpanded);
        item.classList.toggle('is-open', !isExpanded);
      });
    });

    /* ==========================================================================
       9. FINAL CTA: Dusk Sunset Observer
       ========================================================================== */
    const ctaDusk = document.getElementById('ss-cta-dusk');
    if (ctaDusk) {
      const duskObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            ctaDusk.classList.add('is-visible');
          }
        });
      }, { threshold: 0.15 });
      duskObserver.observe(ctaDusk);
    }

    /* ==========================================================================
       10. FOOTER NEWSLETTER: Inline Validation & Feedback
       ========================================================================== */
    const newsletterForm = document.getElementById('ss-newsletter-form');
    const newsletterInput = document.getElementById('ss-newsletter-email');
    const newsletterMsg = document.getElementById('ss-newsletter-msg');

    if (newsletterForm && newsletterInput && newsletterMsg) {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      newsletterInput.addEventListener('input', () => {
        const val = newsletterInput.value.trim();
        if (val === '') {
          newsletterInput.classList.remove('is-valid', 'is-invalid');
          newsletterMsg.textContent = '';
        } else if (emailRegex.test(val)) {
          newsletterInput.classList.add('is-valid');
          newsletterInput.classList.remove('is-invalid');
          newsletterMsg.style.color = 'var(--ss-success)';
          newsletterMsg.textContent = '✓ Ready to receive clean energy alerts';
        } else {
          newsletterInput.classList.add('is-invalid');
          newsletterInput.classList.remove('is-valid');
          newsletterMsg.style.color = 'var(--ss-ember-coral)';
          newsletterMsg.textContent = 'Please enter a valid email address';
        }
      });

      newsletterForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const val = newsletterInput.value.trim();
        if (emailRegex.test(val)) {
          newsletterInput.value = '';
          newsletterInput.classList.remove('is-valid');
          newsletterMsg.style.color = 'var(--ss-sun-amber)';
          newsletterMsg.textContent = '★ Thank you! You are subscribed to SolarShare alerts.';
        } else {
          newsletterInput.classList.add('is-invalid');
          newsletterMsg.style.color = 'var(--ss-ember-coral)';
          newsletterMsg.textContent = 'Please provide a valid email before subscribing.';
          newsletterInput.focus();
        }
      });
    }

    /* ==========================================================================
       11. MICRO-INTERACTIONS: Magnetic Pull on Desktop Buttons
       ========================================================================== */
    const magneticButtons = document.querySelectorAll('.ss-btn');
    if (isPointerFine && !isReducedMotion) {
      magneticButtons.forEach(btn => {
        btn.addEventListener('mousemove', (e) => {
          const rect = btn.getBoundingClientRect();
          const x = e.clientX - rect.left - rect.width / 2;
          const y = e.clientY - rect.top - rect.height / 2;
          btn.style.transform = `translate3d(${x * 0.16}px, ${y * 0.16}px, 0)`;
        });

        btn.addEventListener('mouseleave', () => {
          btn.style.transform = 'translate3d(0, 0, 0)';
        });
      });
    }

    /* ==========================================================================
       12. SCROLL ENTRANCE REVEALS (Once, Unobserve on Reveal)
       ========================================================================== */
    const revealElements = document.querySelectorAll('.ss-reveal');
    if (!isReducedMotion) {
      const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.1,
        rootMargin: '0px 0px -30px 0px'
      });

      revealElements.forEach(el => revealObserver.observe(el));
    } else {
      revealElements.forEach(el => el.classList.add('is-visible'));
    }

    // Initial trigger
    updateNarratorSunAndSky();
    updateNavbarOnScroll();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', start);
  } else {
    start();
  }
})();
