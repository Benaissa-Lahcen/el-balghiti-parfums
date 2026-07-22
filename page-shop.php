<?php
/**
 * Template Name: Shop Page
 *
 * @package El_Balghiti_Parfums
 */

get_header(); ?>

<!-- ═══════════════════════════════════════════════════════
       SHOP MAIN CONTENT
       ═══════════════════════════════════════════════════════ -->
  <main class="flex-grow pt-36 sm:pt-48 pb-24 px-6 md:px-16 w-full max-w-[1400px] mx-auto">
    
    <!-- Page Header & Filters -->
    <section class="mb-16 md:mb-24 text-center">
      <h1 class="font-montserrat font-semibold text-sm md:text-base tracking-[0.45em] uppercase text-[var(--t-text)] mb-12" data-i18n="pageTitleCollection">THE COLLECTION</h1>
      
      <!-- Scrollable Filters -->
      <div class="w-full overflow-x-auto whitespace-nowrap hide-scrollbar border-b border-[var(--t-border)] pb-2 flex justify-start md:justify-center gap-8 md:gap-16">
        <a href="#" class="font-cormorant text-xl tracking-wide text-[var(--t-text)] border-b border-black dark:border-white pb-2" data-i18n="filterAll">All</a>
        <a href="#" class="font-cormorant text-xl tracking-wide text-[var(--t-text-muted)] hover:text-[var(--t-text)] transition-colors pb-2" data-i18n="filterExtraits">Extraits de Parfum</a>
        <a href="#" class="font-cormorant text-xl tracking-wide text-[var(--t-text-muted)] hover:text-[var(--t-text)] transition-colors pb-2" data-i18n="filterRawOils">Raw Oils</a>
        <a href="#" class="font-cormorant text-xl tracking-wide text-[var(--t-text-muted)] hover:text-[var(--t-text)] transition-colors pb-2" data-i18n="filterDiscovery">Discovery Packs</a>
      </div>
    </section>

    <!-- Catalog Grid (6 Items) -->
    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-16 md:gap-x-12 lg:gap-x-16">
      
      <!-- Card 1 -->
      <article class="product-card group">
        <a href="<?php echo home_url('/product-oud/'); ?>" class="product-image-link block mb-6 overflow-hidden relative" aria-label="Discover Oud Al-Balghiti">
          <div class="aspect-[4/5] bg-[var(--t-border)] relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bottle-oud.png" alt="Oud Al-Balghiti" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
          </div>
        </a>
        <div class="text-center">
          <h3 class="font-montserrat font-medium text-xs tracking-[0.3em] uppercase text-[var(--t-text)] mb-2" data-i18n="oudTitle">Oud Al-Balghiti</h3>
          <p class="font-cormorant text-lg italic text-[var(--t-text-secondary)] mb-4" data-i18n="oudNotes">Oud, Leather, Patchouli</p>
          <a href="<?php echo home_url('/product-oud/'); ?>" class="product-discover text-[0.6rem] tracking-[0.25em] uppercase text-[var(--t-text-muted)] hover:text-[var(--t-text)]" data-i18n="discover">Discover</a>
        </div>
      </article>

      <!-- Card 2 -->
      <article class="product-card group">
        <a href="#" class="product-image-link block mb-6 overflow-hidden relative" aria-label="Discover Rose de Fès">
          <div class="aspect-[4/5] bg-[var(--t-border)] relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bottle-rose.png" alt="Rose de Fès" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
          </div>
        </a>
        <div class="text-center">
          <h3 class="font-montserrat font-medium text-xs tracking-[0.3em] uppercase text-[var(--t-text)] mb-2" data-i18n="roseTitle">Rose de Fès</h3>
          <p class="font-cormorant text-lg italic text-[var(--t-text-secondary)] mb-4" data-i18n="roseNotes">Damask Rose, Saffron, Amber</p>
          <a href="#" class="product-discover text-[0.6rem] tracking-[0.25em] uppercase text-[var(--t-text-muted)] hover:text-[var(--t-text)]" data-i18n="discover">Discover</a>
        </div>
      </article>

      <!-- Card 3 -->
      <article class="product-card group">
        <a href="#" class="product-image-link block mb-6 overflow-hidden relative" aria-label="Discover Ambre Saharien">
          <div class="aspect-[4/5] bg-[var(--t-border)] relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bottle-amber.png" alt="Ambre Saharien" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
          </div>
        </a>
        <div class="text-center">
          <h3 class="font-montserrat font-medium text-xs tracking-[0.3em] uppercase text-[var(--t-text)] mb-2" data-i18n="amberTitle">Ambre Saharien</h3>
          <p class="font-cormorant text-lg italic text-[var(--t-text-secondary)] mb-4" data-i18n="amberNotes">Amber, Benzoin, Vanilla</p>
          <a href="#" class="product-discover text-[0.6rem] tracking-[0.25em] uppercase text-[var(--t-text-muted)] hover:text-[var(--t-text)]" data-i18n="discover">Discover</a>
        </div>
      </article>

      <!-- Card 4 -->
      <article class="product-card group">
        <a href="#" class="product-image-link block mb-6 overflow-hidden relative" aria-label="Discover Neroli d'Atlas">
          <div class="aspect-[4/5] bg-[var(--t-border)] relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bottle-amber.png" alt="Neroli d'Atlas placeholder" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 mix-blend-luminosity">
          </div>
        </a>
        <div class="text-center">
          <h3 class="font-montserrat font-medium text-xs tracking-[0.3em] uppercase text-[var(--t-text)] mb-2" data-i18n="neroliTitle">Néroli d'Atlas</h3>
          <p class="font-cormorant text-lg italic text-[var(--t-text-secondary)] mb-4" data-i18n="neroliNotes">Neroli, Cedarwood, Musk</p>
          <a href="#" class="product-discover text-[0.6rem] tracking-[0.25em] uppercase text-[var(--t-text-muted)] hover:text-[var(--t-text)]" data-i18n="discover">Discover</a>
        </div>
      </article>

      <!-- Card 5 -->
      <article class="product-card group">
        <a href="#" class="product-image-link block mb-6 overflow-hidden relative" aria-label="Discover Jasmine Noir">
          <div class="aspect-[4/5] bg-[var(--t-border)] relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bottle-rose.png" alt="Jasmine Noir placeholder" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 mix-blend-luminosity">
          </div>
        </a>
        <div class="text-center">
          <h3 class="font-montserrat font-medium text-xs tracking-[0.3em] uppercase text-[var(--t-text)] mb-2" data-i18n="jasmineTitle">Jasmine Noir</h3>
          <p class="font-cormorant text-lg italic text-[var(--t-text-secondary)] mb-4" data-i18n="jasmineNotes">Night-blooming Jasmine, Sandalwood</p>
          <a href="#" class="product-discover text-[0.6rem] tracking-[0.25em] uppercase text-[var(--t-text-muted)] hover:text-[var(--t-text)]" data-i18n="discover">Discover</a>
        </div>
      </article>

      <!-- Card 6 -->
      <article class="product-card group">
        <a href="#" class="product-image-link block mb-6 overflow-hidden relative" aria-label="Discover The Discovery Trio">
          <div class="aspect-[4/5] bg-[var(--t-border)] relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bottle-oud.png" alt="Discovery Trio placeholder" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 mix-blend-luminosity">
          </div>
        </a>
        <div class="text-center">
          <h3 class="font-montserrat font-medium text-xs tracking-[0.3em] uppercase text-[var(--t-text)] mb-2" data-i18n="discoveryTrioTitle">The Discovery Trio</h3>
          <p class="font-cormorant text-lg italic text-[var(--t-text-secondary)] mb-4" data-i18n="discoveryTrioNotes">Experience our signatures</p>
          <a href="#" class="product-discover text-[0.6rem] tracking-[0.25em] uppercase text-[var(--t-text-muted)] hover:text-[var(--t-text)]" data-i18n="discover">Discover</a>
        </div>
      </article>

    </section>
  </main>

  <!-- ═══════════════════════════════════════════════════════
       FOOTER (Le Labo Style Newsletter & Accordions)
       ═══════════════════════════════════════════════════════ -->

<?php get_footer(); ?>
