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
       BYREDO-STYLE SEARCH OVERLAY (SOLID OPAQUE)
       ═══════════════════════════════════════════════════════ -->
  <div id="search-overlay" class="fixed inset-0 overflow-y-auto flex-col" style="z-index:9999; background-color:#FAF9F6; color:#0A0A0A; display:none;">
    
    <!-- Top Search Header Bar -->
    <div id="search-header-bar" class="w-full border-b border-black/10 px-4 sm:px-8 py-4 sticky top-0 backdrop-blur-md z-10 flex items-center justify-between gap-4 sm:gap-6" style="background-color:#FAF9F6;">
      
      <!-- Back / Close Button (Left) -->
      <button onclick="closeSearchOverlay()" class="flex items-center gap-2 text-inherit hover:opacity-60 transition-opacity cursor-pointer py-2 px-1 outline-none group" aria-label="Close search">
        <svg class="w-5 h-5 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
        </svg>
        <span class="font-mono text-xs uppercase tracking-widest hidden sm:inline-block">Back</span>
      </button>

      <!-- Center Search Bar Pill -->
      <div id="search-pill" class="flex-1 max-w-2xl mx-auto relative flex items-center rounded-full px-4 py-2.5 sm:py-3 transition-all border border-black/10" style="background-color:#EDEDE9;">
        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-400 shrink-0 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
        <input 
          type="text" 
          id="search-input" 
          oninput="handleSearchInput(this.value)" 
          placeholder="What are you looking for?" 
          class="w-full bg-transparent text-xs sm:text-sm md:text-base outline-none placeholder:text-gray-400 font-montserrat tracking-wide"
          style="color:inherit;"
        >
        <button id="clear-search-btn" onclick="clearSearchInput()" class="hidden text-gray-400 hover:text-black dark:hover:text-white p-1 text-xs font-mono">✕</button>
      </div>

      <!-- Right Esc / Cancel text -->
      <button onclick="closeSearchOverlay()" class="text-xs font-mono uppercase tracking-widest hover:opacity-60 transition-opacity p-2 text-gray-400">
        Esc
      </button>
    </div>

    <!-- Search Overlay Main Body -->
    <div class="w-full max-w-7xl mx-auto px-4 sm:px-8 py-8 sm:py-10 flex-1">
      <div style="display:flex; flex-wrap:wrap; gap:2.5rem; width:100%;">
        
        <!-- Left Column: Popular Searches List -->
        <div id="popular-searches-col" style="flex:0 0 240px; border-right:1px solid rgba(0,0,0,0.1); padding-right:1.5rem;">
          <h3 class="font-mono text-xs uppercase tracking-[0.25em] text-gray-400 font-semibold mb-6">Popular Searches</h3>
          <ul style="display:flex; flex-direction:column; gap:0.75rem; list-style:none; padding:0; margin:0;" class="font-montserrat uppercase tracking-wider text-xs sm:text-sm">
            <li><button type="button" onclick="setSearchQuery('Oud Al-Balghiti')" class="text-left text-gray-600 dark:text-gray-300 hover:text-black dark:hover:text-white transition-colors py-1 cursor-pointer">Oud Al-Balghiti</button></li>
            <li><button type="button" onclick="setSearchQuery('Rose de Fès')" class="text-left text-gray-600 dark:text-gray-300 hover:text-black dark:hover:text-white transition-colors py-1 cursor-pointer">Rose de Fès</button></li>
            <li><button type="button" onclick="setSearchQuery('Ambre Saharien')" class="text-left text-gray-600 dark:text-gray-300 hover:text-black dark:hover:text-white transition-colors py-1 cursor-pointer">Ambre Saharien</button></li>
            <li><button type="button" onclick="setSearchQuery('Vulcain Fire')" class="text-left text-gray-600 dark:text-gray-300 hover:text-black dark:hover:text-white transition-colors py-1 cursor-pointer">Vulcain Fire</button></li>
            <li><button type="button" onclick="setSearchQuery('Baroque Rouge 540')" class="text-left text-gray-600 dark:text-gray-300 hover:text-black dark:hover:text-white transition-colors py-1 cursor-pointer">Baroque Rouge 540</button></li>
            <li><button type="button" onclick="setSearchQuery('Pure Musk Tahara')" class="text-left text-gray-600 dark:text-gray-300 hover:text-black dark:hover:text-white transition-colors py-1 cursor-pointer">Pure Musk Tahara</button></li>
            <li><button type="button" onclick="setSearchQuery('Ombre Leather')" class="text-left text-gray-600 dark:text-gray-300 hover:text-black dark:hover:text-white transition-colors py-1 cursor-pointer">Ombre Leather Extract</button></li>
            <li><button type="button" onclick="setSearchQuery('Discovery Set')" class="text-left text-gray-600 dark:text-gray-300 hover:text-black dark:hover:text-white transition-colors py-1 cursor-pointer">Discovery Set</button></li>
          </ul>
        </div>

        <!-- Right Column: Suggested Products / Results Grid -->
        <div style="flex:1 1 0%; min-width:280px; display:flex; flex-direction:column;">
          <div id="search-results-header" style="margin-bottom:1.5rem;">
            <h3 id="search-results-title" class="font-mono text-xs uppercase tracking-[0.25em] text-gray-400 font-semibold">Suggested Creations</h3>
          </div>
          <div id="search-results" style="width:100%;">
            <!-- Dynamically populated -->
          </div>
        </div>

      </div>
    </div>

  </div>

  <script>
    if (typeof window.perfumeCatalog === 'undefined') {
      window.perfumeCatalog = [
        { name: "Oud Al-Balghiti", brand: "El Balghiti", inspiredBy: ["Signature", "Oud", "Leather"], type: "Extrait de Parfum", notes: "Oud, Leather, Patchouli", price: "1,200 DH", image: "assets/images/bottle-oud.png", url: "product-oud.html" },
        { name: "Rose de Fès", brand: "El Balghiti", inspiredBy: ["Signature", "Rose", "Saffron"], type: "Extrait de Parfum", notes: "Damask Rose, Saffron, Amber", price: "1,100 DH", image: "assets/images/bottle-rose.png", url: "shop.html" },
        { name: "Ambre Saharien", brand: "El Balghiti", inspiredBy: ["Signature", "Amber", "Vanilla"], type: "Extrait de Parfum", notes: "Amber, Benzoin, Vanilla Absolute", price: "1,150 DH", image: "assets/images/bottle-amber.png", url: "shop.html" },
        { name: "Discovery Set", brand: "El Balghiti", inspiredBy: ["Packs", "Samples"], type: "Discovery Pack", notes: "3 x 10ml Extraits de Parfum", price: "450 DH", image: "assets/images/discovery-set.png", url: "packs.html" },
        { name: "Vulcain Fire", brand: "French Avenue", inspiredBy: ["God of Fire", "SHL", "Stephane Humbert Lucas"], type: "Branded Dupe", notes: "Mango, Lemon, Amber", price: "370 DH", image: "assets/images/vulcain-fire.jpg", url: "shop.html" },
        { name: "Baroque Rouge 540", brand: "Maison Alhambra", inspiredBy: ["Baccarat Rouge", "MFK", "540"], type: "Branded Dupe", notes: "Saffron, Jasmine, Cedar", price: "350 DH", image: "assets/images/baroque.jpg", url: "shop.html" },
        { name: "Pure Musk Tahara", brand: "El Balghiti", inspiredBy: ["White Musk", "Clean"], type: "Thick Musk", notes: "White Lotus, Vanilla, Musk", price: "150 DH", image: "assets/images/tahara.jpg", url: "shop.html" },
        { name: "Ombre Leather Extract", brand: "Custom Atelier", inspiredBy: ["Tom Ford", "Ombre Leather"], type: "Custom Blend", notes: "Cardamom, Leather, Patchouli", price: "250 DH", image: "assets/images/ombre.jpg", url: "shop.html" }
      ];
    }

    function openSearchOverlay() {
      var overlay = document.getElementById('search-overlay');
      var headerBar = document.getElementById('search-header-bar');
      var searchPill = document.getElementById('search-pill');
      var popCol = document.getElementById('popular-searches-col');
      if (!overlay) return;

      var isDark = document.body.classList.contains('dark') || document.documentElement.classList.contains('dark');
      if (isDark) {
        overlay.style.backgroundColor = '#0D0D0D';
        overlay.style.color = '#F9F9F7';
        if (headerBar) { headerBar.style.backgroundColor = '#0D0D0D'; headerBar.style.borderColor = 'rgba(255,255,255,0.1)'; }
        if (searchPill) { searchPill.style.backgroundColor = '#1C1C1C'; searchPill.style.borderColor = 'rgba(255,255,255,0.1)'; }
        if (popCol) { popCol.style.borderColor = 'rgba(255,255,255,0.1)'; }
      } else {
        overlay.style.backgroundColor = '#FAF9F6';
        overlay.style.color = '#0A0A0A';
        if (headerBar) { headerBar.style.backgroundColor = '#FAF9F6'; headerBar.style.borderColor = 'rgba(0,0,0,0.1)'; }
        if (searchPill) { searchPill.style.backgroundColor = '#EDEDE9'; searchPill.style.borderColor = 'rgba(0,0,0,0.08)'; }
        if (popCol) { popCol.style.borderColor = 'rgba(0,0,0,0.1)'; }
      }

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

    function clearSearchInput() {
      var input = document.getElementById('search-input');
      if (input) {
        input.value = '';
        handleSearchInput('');
        input.focus();
      }
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
      var searchResultsTitle = document.getElementById('search-results-title');
      var clearBtn = document.getElementById('clear-search-btn');
      if (!searchResults) return;

      var query = (queryValue || '').trim().toLowerCase();

      if (clearBtn) {
        if (query) {
          clearBtn.classList.remove('hidden');
        } else {
          clearBtn.classList.add('hidden');
        }
      }

      var catalog = window.perfumeCatalog || [];
      var matches = catalog;

      if (query) {
        if (searchResultsTitle) searchResultsTitle.textContent = 'Search Results';
        matches = catalog.filter(function(product) {
          var nameMatch = product.name.toLowerCase().indexOf(query) !== -1;
          var brandMatch = product.brand.toLowerCase().indexOf(query) !== -1;
          var inspiredMatch = Array.isArray(product.inspiredBy) && product.inspiredBy.some(function(item) {
            return item.toLowerCase().indexOf(query) !== -1;
          });
          var notesMatch = product.notes ? product.notes.toLowerCase().indexOf(query) !== -1 : false;
          var typeMatch = product.type ? product.type.toLowerCase().indexOf(query) !== -1 : false;
          return nameMatch || brandMatch || inspiredMatch || notesMatch || typeMatch;
        });
      } else {
        if (searchResultsTitle) searchResultsTitle.textContent = 'Suggested Creations';
      }

      if (matches.length === 0) {
        searchResults.innerHTML = "<p class='text-gray-400 text-center py-16 text-xs sm:text-sm font-montserrat tracking-wider uppercase'>We are currently sourcing this DNA. Contact us for custom blending.</p>";
      } else {
        var isPhp = typeof themeUri !== 'undefined';
        var isDark = document.body.classList.contains('dark') || document.documentElement.classList.contains('dark');
        var cardBg = isDark ? '#161616' : '#EDEDE9';
        var imgBg = isDark ? '#121212' : '#E3E3DE';
        var textColor = isDark ? '#FFFFFF' : '#0A0A0A';
        var borderColor = isDark ? 'rgba(255,255,255,0.08)' : 'rgba(0,0,0,0.06)';

        searchResults.innerHTML = '<div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(200px, 1fr)); gap:1.5rem; width:100%;">' + matches.map(function(product) {
          var imgPath = isPhp && !product.image.startsWith('http') ? themeUri + '/' + product.image : product.image;
          var targetUrl = isPhp ? (product.url === '#' ? '#' : '<?php echo home_url("/"); ?>' + product.url.replace('.html', '/')) : product.url;
          return `
            <a href="${targetUrl}" class="group block p-4 rounded-sm transition-all cursor-pointer text-left" style="background-color:${cardBg}; border:1px solid ${borderColor}; text-decoration:none;">
              <div style="width:100%; aspect-ratio:1/1; overflow:hidden; border-radius:2px; margin-bottom:0.75rem; display:flex; align-items:center; justify-content:center; background-color:${imgBg};">
                <img src="${imgPath}" alt="${product.name}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" style="width:100%; height:100%; object-fit:cover;">
              </div>
              <span class="block font-mono text-[0.6rem] uppercase tracking-widest text-gray-400 mb-0.5 truncate">${product.brand}</span>
              <h4 class="font-montserrat font-semibold text-xs sm:text-sm uppercase tracking-wider group-hover:underline truncate" style="color:${textColor}; margin:0;">${product.name}</h4>
              <p class="font-cormorant italic text-[0.75rem] text-gray-400 truncate mt-0.5" style="margin-top:0.25rem; margin-bottom:0;">${product.notes}</p>
              <span class="block font-mono text-xs font-bold mt-2" style="color:${textColor}; margin-top:0.5rem;">${product.price}</span>
            </a>
          `;
        }).join('') + '</div>';
      }
    }

    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') closeSearchOverlay();
    });
  </script>
