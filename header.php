<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="El Balghiti Parfums — Maison de Parfum. Artisanal luxury fragrances crafted with rare and precious ingredients from around the world.">
  
  <!-- Preconnect for performance -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700;800;900&family=Tajawal:wght@300;400;500;700;800&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body <?php body_class('bg-[#F9F9F7] text-[#0A0A0A] dark:bg-[#0A0A0A] dark:text-[#F9F9F7] antialiased'); ?>>

  <!-- ═══════════════════════════════════════════════════════
       NAVIGATION
       ═══════════════════════════════════════════════════════ -->
  <header id="main-header" class="w-full fixed top-0 left-0 z-50 bg-[var(--t-bg)] border-b border-[var(--t-border-subtle)]">
    <!-- Top Monospace Promo Banner -->
    <div class="w-full bg-black dark:bg-[#151515] text-white py-2 text-center text-[0.6rem] sm:text-[0.65rem] tracking-[0.2em] sm:tracking-[0.25em] font-mono uppercase" data-i18n="promoBannerText">
      Every El Balghiti creation is fresh hand-blended.
    </div>

    <!-- Navigation Bar -->
    <nav id="main-nav" role="navigation" aria-label="Main navigation" class="w-full">
      <div class="max-w-7xl mx-auto px-4 md:px-12 py-3.5 sm:py-5 flex flex-col md:gap-4 justify-between w-full">
        
        <!-- Row 1: Left (Mobile Hamburger, Desktop Search), Center (Logo), Right (Cart/Toggles) -->
        <div class="flex items-center justify-between w-full relative">
          <!-- Left: Mobile Menu Button & Search, Desktop Search -->
          <div class="flex items-center gap-3">
            <button class="mobile-menu-btn md:hidden text-[var(--t-text)] cursor-pointer" id="mobile-menu-btn" aria-label="Open mobile menu">
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </button>
            
            <button class="md:hidden text-[var(--t-text)] cursor-pointer search-trigger" aria-label="Search" onclick="openSearchOverlay()">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </button>

            <!-- Desktop Search Box -->
            <div class="hidden md:flex items-center gap-2 text-xs tracking-wider text-[var(--t-text-muted)] cursor-pointer hover:text-[var(--t-text)] transition-colors search-trigger" onclick="openSearchOverlay()">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
              <span class="font-mono uppercase text-[0.7rem] tracking-widest">Search</span>
            </div>
          </div>

          <!-- Center Logo (EL BALGHITI, dynamic clamp font size) -->
          <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 flex items-center justify-center">
            <a href="<?php echo home_url('/'); ?>" class="logo-text text-xl sm:text-2xl font-montserrat tracking-[0.25em] font-semibold text-[var(--t-text)] hover:opacity-80 transition-opacity" id="nav-logo" aria-label="El Balghiti Parfums — Home">
              EL BALGHITI
            </a>
          </div>

          <!-- Right: Desktop and Mobile Cart / actions -->
          <div class="flex items-center gap-4 sm:gap-6 font-mono text-[0.7rem] uppercase">
            <!-- Desktop/Mobile Cart -->
            <a href="#" class="flex items-center gap-1.5 hover:underline text-[var(--t-text)] font-semibold" aria-label="Cart">
              <svg class="w-5 h-5 stroke-[1.5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
              </svg>
              <span>(0)</span>
            </a>

            <!-- Desktop-only Lang / Theme Toggles (Sleek text-based) -->
            <div class="hidden md:flex items-center gap-4 border-l border-[var(--t-border-subtle)] pl-4">
              <button class="lang-toggle hover:underline text-[var(--t-text)] font-semibold cursor-pointer">
                <span class="lang-text">AR</span>
              </button>
              <button class="theme-toggle hover:underline text-[var(--t-text)] font-semibold cursor-pointer">
                <span class="theme-text">DARK</span>
              </button>
            </div>
          </div>
        </div>

        <!-- Row 2: Desktop centered category links -->
        <div class="hidden md:flex items-center justify-center gap-10 py-1.5 border-t border-[var(--t-border-subtle)] text-[0.7rem] tracking-[0.2em] font-montserrat uppercase">
          <a href="<?php echo home_url('/shop/'); ?>" class="hover:text-[var(--t-text-muted)] transition-colors" data-i18n="collections">Collections</a>
          <a href="<?php echo home_url('/packs/'); ?>" class="hover:text-[var(--t-text-muted)] transition-colors" data-i18n="packs">Packs</a>
          <a href="<?php echo home_url('/our-story/'); ?>" class="hover:text-[var(--t-text-muted)] transition-colors" data-i18n="ourStoryLink">Our Story</a>
          <a href="<?php echo home_url('/#atelier-section'); ?>" class="hover:text-[var(--t-text-muted)] transition-colors" data-i18n="about">About</a>
        </div>

      </div>
    </nav>
    
    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu" id="mobile-menu" aria-hidden="true">
      <div class="mobile-menu-inner p-6 flex flex-col justify-between h-full bg-[var(--t-bg)]">
        <div>
          <!-- Close button -->
          <div class="flex justify-end w-full mb-8">
            <button class="mobile-menu-close text-[var(--t-text)] cursor-pointer" id="mobile-menu-close" aria-label="Close mobile menu">
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>

          <!-- Links -->
          <div class="mobile-menu-links flex flex-col gap-6 font-montserrat text-lg uppercase tracking-wider">
            <a href="<?php echo home_url('/shop/'); ?>" class="mobile-link text-[var(--t-text)] font-semibold" data-i18n="collections">Collections</a>
            <a href="<?php echo home_url('/packs/'); ?>" class="mobile-link text-[var(--t-text)] font-semibold" data-i18n="packs">Packs</a>
            <a href="<?php echo home_url('/our-story/'); ?>" class="mobile-link text-[var(--t-text)] font-semibold" data-i18n="ourStoryLink">Our Story</a>
            <a href="<?php echo home_url('/#atelier-section'); ?>" class="mobile-link text-[var(--t-text)] font-semibold" data-i18n="about">About</a>
          </div>
        </div>

        <!-- Drawer Footer: Toggles -->
        <div class="flex flex-col gap-4 border-t border-[var(--t-border-subtle)] pt-6 font-mono text-xs uppercase tracking-widest">
          <div class="flex items-center justify-between">
            <span class="text-[var(--t-text-muted)]">Language</span>
            <button class="lang-toggle text-[var(--t-text)] font-semibold cursor-pointer">
              <span class="lang-text">AR</span>
            </button>
          </div>
          <div class="flex items-center justify-between">
            <span class="text-[var(--t-text-muted)]">Theme</span>
            <button class="theme-toggle text-[var(--t-text)] font-semibold cursor-pointer">
              <span class="theme-text">DARK</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- ═══════════════════════════════════════════════════════
       SEARCH OVERLAY
       ═══════════════════════════════════════════════════════ -->
  <div id="search-overlay" class="fixed inset-0 backdrop-blur-md flex-col items-center pt-24 px-4" style="z-index:9999; background:rgba(0,0,0,0.92); display:none;">
    <!-- Close Button -->
    <button id="close-search" class="absolute top-8 right-8 text-white/70 hover:text-white text-3xl font-mono cursor-pointer transition-colors p-2 outline-none" aria-label="Close search" onclick="closeSearchOverlay()">✕</button>

    <!-- Search Box Container -->
    <div class="w-full max-w-4xl mx-auto flex flex-col items-center">
      <input type="text" id="search-input" placeholder="Search by fragrance name, brand, or inspired-by note..." class="bg-transparent border-b-2 border-white/30 text-white text-2xl md:text-4xl outline-none placeholder-white/50 w-full max-w-4xl px-4 py-2 text-center font-montserrat" style="color:white; font-size:2rem;">
      <div id="search-results" class="max-w-4xl mx-auto mt-8 flex flex-col gap-2 w-full px-4 overflow-y-auto" style="max-height:70vh;"></div>
    </div>
  </div>

  <script>
    function openSearchOverlay() {
      var overlay = document.getElementById('search-overlay');
      if (!overlay) return;
      overlay.style.display = 'flex';
      document.body.style.overflow = 'hidden';
      var input = document.getElementById('search-input');
      if (input) { input.value = ''; setTimeout(function(){ input.focus(); }, 150); }
      var results = document.getElementById('search-results');
      if (results) results.innerHTML = '';
    }
    function closeSearchOverlay() {
      var overlay = document.getElementById('search-overlay');
      if (!overlay) return;
      overlay.style.display = 'none';
      document.body.style.overflow = '';
    }
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') closeSearchOverlay();
    });
  </script>
