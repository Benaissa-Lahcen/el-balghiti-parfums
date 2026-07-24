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
  <div id="search-overlay" class="fixed inset-0 backdrop-blur-md flex-col items-center pt-20 sm:pt-24 px-4" style="z-index:9999; background:rgba(0,0,0,0.92); display:none;">
    <!-- Close Button -->
    <button id="close-search" class="absolute top-6 right-6 sm:top-8 sm:right-8 text-white/70 hover:text-white text-3xl font-mono cursor-pointer transition-colors p-2 outline-none" aria-label="Close search" onclick="closeSearchOverlay()">✕</button>

    <!-- Search Box Container -->
    <div class="w-full max-w-4xl mx-auto flex flex-col items-center">
      <input type="text" id="search-input" oninput="handleSearchInput(this.value)" placeholder="Search by fragrance name, brand, or inspired-by note..." class="bg-transparent border-b-2 border-white/30 text-white text-xl sm:text-3xl md:text-4xl outline-none placeholder-white/50 w-full max-w-4xl px-4 py-2 text-center font-montserrat" style="color:white;">
      <div id="search-results" class="max-w-4xl mx-auto mt-6 sm:mt-8 flex flex-col gap-2 w-full px-2 sm:px-4 overflow-y-auto" style="max-height:68vh;"></div>
    </div>
  </div>

  <script>
    if (typeof window.perfumeCatalog === 'undefined') {
      window.perfumeCatalog = [
        { name: "Vulcain Fire", brand: "French Avenue", inspiredBy: ["God of Fire", "SHL", "Stephane Humbert Lucas"], type: "Branded Dupe", notes: "Mango, Lemon, Amber", price: "450 DH", image: "assets/images/vulcain-fire.jpg", url: "#" },
        { name: "Baroque Rouge 540", brand: "Maison Alhambra", inspiredBy: ["Baccarat Rouge", "MFK", "540"], type: "Branded Dupe", notes: "Saffron, Jasmine, Cedar", price: "350 DH", image: "assets/images/baroque.jpg", url: "#" },
        { name: "Pure Musk Tahara", brand: "El Balghiti", inspiredBy: ["White Musk", "Clean"], type: "Thick Musk", notes: "White Lotus, Vanilla, Musk", price: "150 DH", image: "assets/images/tahara.jpg", url: "#" },
        { name: "Ombre Leather Extract", brand: "Custom Atelier", inspiredBy: ["Tom Ford", "Ombre Leather"], type: "Custom Blend", notes: "Cardamom, Leather, Patchouli", price: "250 DH", image: "assets/images/ombre.jpg", url: "#" }
      ];
    }

    function openSearchOverlay() {
      var overlay = document.getElementById('search-overlay');
      if (!overlay) return;
      overlay.style.display = 'flex';
      document.body.style.overflow = 'hidden';
      var input = document.getElementById('search-input');
      if (input) {
        input.value = '';
        setTimeout(function(){ input.focus(); }, 150);
      }
      handleSearchInput('');
    }

    function closeSearchOverlay() {
      var overlay = document.getElementById('search-overlay');
      if (!overlay) return;
      overlay.style.display = 'none';
      document.body.style.overflow = '';
    }

    function setSearchQuery(text) {
      var input = document.getElementById('search-input');
      if (input) {
        input.value = text;
        handleSearchInput(text);
      }
    }

    function handleSearchInput(queryValue) {
      var searchResults = document.getElementById('search-results');
      if (!searchResults) return;

      var query = (queryValue || '').trim().toLowerCase();

      if (!query) {
        searchResults.innerHTML = `
          <div class="text-center py-8 text-white/60 font-mono text-xs sm:text-sm">
            <p class="mb-4 uppercase tracking-[0.25em] text-[0.65rem] text-white/40 font-semibold">Popular Fragrance DNA Searches</p>
            <div class="flex flex-wrap gap-2.5 justify-center max-w-xl mx-auto">
              <button type="button" onclick="setSearchQuery('God of Fire')" class="px-4 py-2 bg-white/10 hover:bg-white/20 border border-white/10 rounded-full text-xs text-white transition-all cursor-pointer font-montserrat">God of Fire</button>
              <button type="button" onclick="setSearchQuery('Baccarat Rouge')" class="px-4 py-2 bg-white/10 hover:bg-white/20 border border-white/10 rounded-full text-xs text-white transition-all cursor-pointer font-montserrat">Baccarat Rouge 540</button>
              <button type="button" onclick="setSearchQuery('Tahara')" class="px-4 py-2 bg-white/10 hover:bg-white/20 border border-white/10 rounded-full text-xs text-white transition-all cursor-pointer font-montserrat">Pure Musk Tahara</button>
              <button type="button" onclick="setSearchQuery('Tom Ford')" class="px-4 py-2 bg-white/10 hover:bg-white/20 border border-white/10 rounded-full text-xs text-white transition-all cursor-pointer font-montserrat">Tom Ford Ombre Leather</button>
            </div>
          </div>
        `;
        return;
      }

      var catalog = window.perfumeCatalog || [];
      var matches = catalog.filter(function(product) {
        var nameMatch = product.name.toLowerCase().indexOf(query) !== -1;
        var brandMatch = product.brand.toLowerCase().indexOf(query) !== -1;
        var inspiredMatch = Array.isArray(product.inspiredBy) && product.inspiredBy.some(function(item) {
          return item.toLowerCase().indexOf(query) !== -1;
        });
        var notesMatch = product.notes ? product.notes.toLowerCase().indexOf(query) !== -1 : false;
        return nameMatch || brandMatch || inspiredMatch || notesMatch;
      });

      if (matches.length === 0) {
        searchResults.innerHTML = "<p class='text-white/70 text-center mt-10 text-base sm:text-lg font-montserrat'>We are currently sourcing this DNA. Contact us for custom blending.</p>";
      } else {
        var isPhp = typeof themeUri !== 'undefined';
        searchResults.innerHTML = matches.map(function(product) {
          var imgPath = isPhp && !product.image.startsWith('http') ? themeUri + '/' + product.image : product.image;
          return `
            <a href="${product.url}" class="flex items-center gap-4 sm:gap-6 p-3.5 sm:p-4 hover:bg-white/10 transition-all border-b border-white/10 group cursor-pointer text-left rounded-sm">
              <img src="${imgPath}" alt="${product.name}" class="w-14 h-14 sm:w-16 sm:h-16 object-cover rounded-md shadow-lg group-hover:scale-105 transition-transform duration-300">
              <div class="flex flex-col">
                <span class="text-base sm:text-xl text-white font-montserrat font-medium">${product.name}</span>
                <span class="text-xs sm:text-sm text-gray-400 font-mono">${product.brand} • ${product.type}</span>
                <span class="text-[0.7rem] sm:text-xs italic text-gray-400 font-cormorant mt-0.5">${product.notes}</span>
              </div>
              <span class="text-sm sm:text-lg text-white font-semibold ml-auto font-mono whitespace-nowrap">${product.price}</span>
            </a>
          `;
        }).join('');
      }
    }

    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') closeSearchOverlay();
    });
  </script>
