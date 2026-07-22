<?php
/**
 * Template Name: Discovery Packs Page
 *
 * @package El_Balghiti_Parfums
 */

get_header(); ?>

<!-- Main Content Container -->
  <main class="flex-grow pt-40 pb-24 w-full bg-[var(--t-bg)] transition-colors duration-500">
    <div class="max-w-6xl mx-auto px-6">
      
      <!-- Hero Section -->
      <div class="text-center mb-16 max-w-2xl mx-auto">
        <h1 class="font-montserrat font-bold text-2xl sm:text-3xl tracking-[0.25em] text-[var(--t-text)] uppercase mb-4" data-i18n="packsHeader">
          THE DISCOVERY WARDROBE
        </h1>
        <p class="font-cormorant text-lg sm:text-xl leading-relaxed text-[var(--t-text-secondary)] italic" data-i18n="packsSubtitle">
          Experience our freshly hand-blended extraits in curated trios, or build your own signature collection.
        </p>
      </div>

      <!-- Curated Packs Section -->
      <div class="mb-24">
        <h2 class="font-montserrat font-bold text-xs tracking-[0.3em] uppercase text-center mb-12 text-[var(--t-text)]" data-i18n="curatedPacksTitle">
          CURATED COLLECTION BUNDLES
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
          
          <!-- Card 1: Best Sellers Trio -->
          <div class="flex flex-col justify-between border border-[var(--t-border-subtle)] bg-[var(--t-bg)] p-6 md:p-8 rounded-sm hover:border-[var(--t-text)] transition-colors duration-300">
            <div>
              <div class="w-full bg-[var(--t-bg-secondary)] border border-[var(--t-border-subtle)] aspect-square flex items-center justify-center p-8 rounded-sm overflow-hidden mb-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/discovery-set.png" alt="The Best Sellers Trio" class="max-h-full max-w-full object-contain hover:scale-105 transition-transform duration-500">
              </div>
              <div class="flex justify-between items-start mb-2 font-mono text-[0.65rem] tracking-wider uppercase">
                <div class="flex flex-col">
                  <h3 class="font-montserrat font-bold text-sm tracking-[0.2em] text-[var(--t-text)]" data-i18n="bestSellersTrioTitle">THE BEST SELLERS TRIO</h3>
                  <span class="text-[var(--t-text-muted)] lowercase mt-1" data-i18n="trioSizeDesc">3x 50ml bottles</span>
                </div>
                <span class="font-bold text-sm text-[var(--t-text)]">950 DH</span>
              </div>
              <p class="font-cormorant text-base leading-relaxed text-[var(--t-text-secondary)] italic mt-4 mb-8" data-i18n="bestSellersTrioDesc">
                A selection of our three most loved creations. Includes Oud Al-Balghiti, فاس Rose, and Desert Amber. Perfectly hand-blended and bottled to order.
              </p>
            </div>
            <button class="w-full py-4 bg-[#3c3c3c] dark:bg-[#eaeaea] text-white dark:text-black font-semibold text-xs tracking-[0.25em] transition-all duration-300 hover:opacity-90 cursor-pointer rounded-sm font-mono uppercase" id="add-best-sellers-btn" data-i18n="addToCart">
              ADD TO CART
            </button>
          </div>

          <!-- Card 2: The Oud Archive -->
          <div class="flex flex-col justify-between border border-[var(--t-border-subtle)] bg-[var(--t-bg)] p-6 md:p-8 rounded-sm hover:border-[var(--t-text)] transition-colors duration-300">
            <div>
              <div class="w-full bg-[var(--t-bg-secondary)] border border-[var(--t-border-subtle)] aspect-square flex items-center justify-center p-8 rounded-sm overflow-hidden mb-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/discovery-set.png" alt="The Oud Archive" class="max-h-full max-w-full object-contain hover:scale-105 transition-transform duration-500">
              </div>
              <div class="flex justify-between items-start mb-2 font-mono text-[0.65rem] tracking-wider uppercase">
                <div class="flex flex-col">
                  <h3 class="font-montserrat font-bold text-sm tracking-[0.2em] text-[var(--t-text)]" data-i18n="oudArchiveTitle">THE OUD ARCHIVE</h3>
                  <span class="text-[var(--t-text-muted)] lowercase mt-1" data-i18n="trioSizeDesc">3x 50ml bottles</span>
                </div>
                <span class="font-bold text-sm text-[var(--t-text)]">1100 DH</span>
              </div>
              <p class="font-cormorant text-base leading-relaxed text-[var(--t-text-secondary)] italic mt-4 mb-8" data-i18n="oudArchiveDesc">
                A deep exploration of the most mystical wood. Featuring our raw Oud Al-Balghiti oil, alongside custom variations blending dark leather and Moroccan spices.
              </p>
            </div>
            <button class="w-full py-4 bg-[#3c3c3c] dark:bg-[#eaeaea] text-white dark:text-black font-semibold text-xs tracking-[0.25em] transition-all duration-300 hover:opacity-90 cursor-pointer rounded-sm font-mono uppercase" id="add-oud-archive-btn" data-i18n="addToCart">
              ADD TO CART
            </button>
          </div>

        </div>
      </div>

      <!-- Custom Trio Builder Section -->
      <div class="w-full bg-gray-50 dark:bg-[#111] border border-[var(--t-border-subtle)] rounded-sm p-8 md:p-16 transition-colors duration-500">
        <div class="max-w-4xl mx-auto">
          
          <div class="text-center mb-12">
            <h2 class="font-montserrat font-bold text-sm tracking-[0.3em] uppercase text-[var(--t-text)] mb-4" data-i18n="customTrioHeader">
              BUILD YOUR CUSTOM TRIO
            </h2>
            <p class="font-cormorant text-base text-[var(--t-text-secondary)] italic" data-i18n="customTrioSubtitle">
              Choose three 50ml extraits de parfum to create your custom discovery wardrobe.
            </p>
          </div>

          <!-- Silhouettes Row -->
          <div class="flex flex-col md:flex-row gap-12 justify-center items-center mb-12">
            
            <!-- Bottle 1 -->
            <div class="flex flex-col items-center gap-6 w-full max-w-[200px]">
              <div class="custom-bottle-silhouette w-24 h-40 flex items-center justify-center border border-dashed border-[var(--t-border)] opacity-40 transition-all duration-500 bg-white dark:bg-[#181818]" id="bottle-slot-1">
                <!-- Apothecary label layout inside bottle -->
                <div class="hidden slot-label font-mono text-[0.45rem] tracking-wider text-center p-1 bg-white dark:bg-black text-[var(--t-text)] border border-[var(--t-border-subtle)] w-11/12 uppercase leading-tight font-semibold">
                  <div class="border-b border-[var(--t-border-subtle)] pb-0.5 mb-0.5">EL BALGHITI</div>
                  <div class="slot-label-text truncate">SCENT 1</div>
                  <div class="text-[0.35rem] text-[var(--t-text-muted)] mt-0.5">50ml</div>
                </div>
                <!-- Default empty plus sign -->
                <span class="plus-icon font-mono text-lg text-[var(--t-text-muted)]">+</span>
              </div>
              <div class="w-full relative custom-searchable-dropdown" data-slot="1">
                <input type="text" 
                       placeholder="Select Scent 1..." 
                       data-i18n-placeholder="selectScent1"
                       class="dropdown-search-input w-full bg-transparent text-[var(--t-text)] border-b border-[var(--t-border)] outline-none py-2 font-mono text-[0.65rem] tracking-wider uppercase text-center focus:border-[var(--t-text)] cursor-pointer rounded-none" 
                       id="scent-select-1"
                       autocomplete="off"
                       data-selected-value="">
                <div class="dropdown-panel hidden absolute top-full left-0 w-full mt-1 bg-[var(--t-bg-secondary)] border border-[var(--t-border-subtle)] shadow-xl z-20 rounded-sm font-mono text-[0.65rem] uppercase tracking-wider max-h-48 overflow-y-auto hide-scrollbar">
                  <div class="dropdown-option p-2.5 hover:bg-[var(--t-border-subtle)] cursor-pointer text-center" data-value="God of Fire" data-i18n="scentGodOfFire">Inspired by God of Fire</div>
                  <div class="dropdown-option p-2.5 hover:bg-[var(--t-border-subtle)] cursor-pointer text-center" data-value="Baccarat Rouge" data-i18n="scentBaccarat">Inspired by Baccarat Rouge</div>
                  <div class="dropdown-option p-2.5 hover:bg-[var(--t-border-subtle)] cursor-pointer text-center" data-value="Ombre Nomade" data-i18n="scentOmbre">Inspired by Ombre Nomade</div>
                  <div class="dropdown-option p-2.5 hover:bg-[var(--t-border-subtle)] cursor-pointer text-center" data-value="Black Phantom" data-i18n="scentBlackPhantom">Inspired by Black Phantom</div>
                  <div class="dropdown-option p-2.5 hover:bg-[var(--t-border-subtle)] cursor-pointer text-center" data-value="Lost Cherry" data-i18n="scentLostCherry">Inspired by Lost Cherry</div>
                </div>
              </div>
            </div>

            <!-- Bottle 2 -->
            <div class="flex flex-col items-center gap-6 w-full max-w-[200px]">
              <div class="custom-bottle-silhouette w-24 h-40 flex items-center justify-center border border-dashed border-[var(--t-border)] opacity-40 transition-all duration-500 bg-white dark:bg-[#181818]" id="bottle-slot-2">
                <div class="hidden slot-label font-mono text-[0.45rem] tracking-wider text-center p-1 bg-white dark:bg-black text-[var(--t-text)] border border-[var(--t-border-subtle)] w-11/12 uppercase leading-tight font-semibold">
                  <div class="border-b border-[var(--t-border-subtle)] pb-0.5 mb-0.5">EL BALGHITI</div>
                  <div class="slot-label-text truncate">SCENT 2</div>
                  <div class="text-[0.35rem] text-[var(--t-text-muted)] mt-0.5">50ml</div>
                </div>
                <span class="plus-icon font-mono text-lg text-[var(--t-text-muted)]">+</span>
              </div>
              <div class="w-full relative custom-searchable-dropdown" data-slot="2">
                <input type="text" 
                       placeholder="Select Scent 2..." 
                       data-i18n-placeholder="selectScent2"
                       class="dropdown-search-input w-full bg-transparent text-[var(--t-text)] border-b border-[var(--t-border)] outline-none py-2 font-mono text-[0.65rem] tracking-wider uppercase text-center focus:border-[var(--t-text)] cursor-pointer rounded-none" 
                       id="scent-select-2"
                       autocomplete="off"
                       data-selected-value="">
                <div class="dropdown-panel hidden absolute top-full left-0 w-full mt-1 bg-[var(--t-bg-secondary)] border border-[var(--t-border-subtle)] shadow-xl z-20 rounded-sm font-mono text-[0.65rem] uppercase tracking-wider max-h-48 overflow-y-auto hide-scrollbar">
                  <div class="dropdown-option p-2.5 hover:bg-[var(--t-border-subtle)] cursor-pointer text-center" data-value="God of Fire" data-i18n="scentGodOfFire">Inspired by God of Fire</div>
                  <div class="dropdown-option p-2.5 hover:bg-[var(--t-border-subtle)] cursor-pointer text-center" data-value="Baccarat Rouge" data-i18n="scentBaccarat">Inspired by Baccarat Rouge</div>
                  <div class="dropdown-option p-2.5 hover:bg-[var(--t-border-subtle)] cursor-pointer text-center" data-value="Ombre Nomade" data-i18n="scentOmbre">Inspired by Ombre Nomade</div>
                  <div class="dropdown-option p-2.5 hover:bg-[var(--t-border-subtle)] cursor-pointer text-center" data-value="Black Phantom" data-i18n="scentBlackPhantom">Inspired by Black Phantom</div>
                  <div class="dropdown-option p-2.5 hover:bg-[var(--t-border-subtle)] cursor-pointer text-center" data-value="Lost Cherry" data-i18n="scentLostCherry">Inspired by Lost Cherry</div>
                </div>
              </div>
            </div>

            <!-- Bottle 3 -->
            <div class="flex flex-col items-center gap-6 w-full max-w-[200px]">
              <div class="custom-bottle-silhouette w-24 h-40 flex items-center justify-center border border-dashed border-[var(--t-border)] opacity-40 transition-all duration-500 bg-white dark:bg-[#181818]" id="bottle-slot-3">
                <div class="hidden slot-label font-mono text-[0.45rem] tracking-wider text-center p-1 bg-white dark:bg-black text-[var(--t-text)] border border-[var(--t-border-subtle)] w-11/12 uppercase leading-tight font-semibold">
                  <div class="border-b border-[var(--t-border-subtle)] pb-0.5 mb-0.5">EL BALGHITI</div>
                  <div class="slot-label-text truncate">SCENT 3</div>
                  <div class="text-[0.35rem] text-[var(--t-text-muted)] mt-0.5">50ml</div>
                </div>
                <span class="plus-icon font-mono text-lg text-[var(--t-text-muted)]">+</span>
              </div>
              <div class="w-full relative custom-searchable-dropdown" data-slot="3">
                <input type="text" 
                       placeholder="Select Scent 3..." 
                       data-i18n-placeholder="selectScent3"
                       class="dropdown-search-input w-full bg-transparent text-[var(--t-text)] border-b border-[var(--t-border)] outline-none py-2 font-mono text-[0.65rem] tracking-wider uppercase text-center focus:border-[var(--t-text)] cursor-pointer rounded-none" 
                       id="scent-select-3"
                       autocomplete="off"
                       data-selected-value="">
                <div class="dropdown-panel hidden absolute top-full left-0 w-full mt-1 bg-[var(--t-bg-secondary)] border border-[var(--t-border-subtle)] shadow-xl z-20 rounded-sm font-mono text-[0.65rem] uppercase tracking-wider max-h-48 overflow-y-auto hide-scrollbar">
                  <div class="dropdown-option p-2.5 hover:bg-[var(--t-border-subtle)] cursor-pointer text-center" data-value="God of Fire" data-i18n="scentGodOfFire">Inspired by God of Fire</div>
                  <div class="dropdown-option p-2.5 hover:bg-[var(--t-border-subtle)] cursor-pointer text-center" data-value="Baccarat Rouge" data-i18n="scentBaccarat">Inspired by Baccarat Rouge</div>
                  <div class="dropdown-option p-2.5 hover:bg-[var(--t-border-subtle)] cursor-pointer text-center" data-value="Ombre Nomade" data-i18n="scentOmbre">Inspired by Ombre Nomade</div>
                  <div class="dropdown-option p-2.5 hover:bg-[var(--t-border-subtle)] cursor-pointer text-center" data-value="Black Phantom" data-i18n="scentBlackPhantom">Inspired by Black Phantom</div>
                  <div class="dropdown-option p-2.5 hover:bg-[var(--t-border-subtle)] cursor-pointer text-center" data-value="Lost Cherry" data-i18n="scentLostCherry">Inspired by Lost Cherry</div>
                </div>
              </div>
            </div>

          </div>

          <!-- Price & Add custom pack CTA -->
          <div class="flex flex-col items-center gap-6 border-t border-[var(--t-border-subtle)] pt-10 mt-10">
            <div class="font-mono text-xs uppercase tracking-widest text-[var(--t-text)] font-semibold flex gap-2">
              <span data-i18n="customSetLabel">CUSTOM SET</span>
              <span>—</span>
              <span>950 DH</span>
            </div>
            
            <button class="w-full max-w-lg py-4 bg-gray-300 dark:bg-neutral-800 text-gray-500 dark:text-neutral-500 font-semibold text-xs tracking-[0.25em] font-mono uppercase cursor-not-allowed rounded-sm transition-all duration-300" id="add-custom-pack-btn" disabled data-i18n="addCustomPackBtn">
              ADD CUSTOM PACK TO CART
            </button>
          </div>

        </div>
      </div>

    </div>
  </main>

  <!-- Global Footer -->

<?php get_footer(); ?>
