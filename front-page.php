<?php get_header(); ?>

  <!-- ═══════════════════════════════════════════════════════
       HERO — Cinematic Full-screen
       ═══════════════════════════════════════════════════════ -->
  <main>
    <section class="hero-cinematic" id="hero-section" aria-label="Hero">

      <!-- Background Image with Ken Burns cinematic animation -->
      <div class="hero-image-wrapper" id="hero-image-container" aria-hidden="true">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.png"
          alt=""
          class="hero-image"
          id="hero-image"
        >
      </div>

      <!-- Gradient Overlay -->
      <div class="hero-overlay-gradient" aria-hidden="true"></div>

      <!-- Centered Content -->
      <div class="hero-content" id="hero-content">
        <h1 class="hero-logo text-4xl sm:text-6xl md:text-7xl tracking-[0.35em]">EL BALGHITI</h1>
        <div class="hero-divider" aria-hidden="true"></div>
        <p class="hero-subtitle text-xs sm:text-sm tracking-[0.4em] md:tracking-[0.65em]" data-i18n="heroSubtitle">Maison de Parfum</p>
      </div>

      <!-- Scroll to Discover -->
      <div class="scroll-indicator" id="scroll-indicator" aria-label="Scroll to discover">
        <span class="scroll-indicator-text" data-i18n="discover">Discover</span>
        <div class="scroll-indicator-line" aria-hidden="true"></div>
      </div>

    </section>

    <!-- ═══════════════════════════════════════════════════════
         THE ART OF EXTRACTION (Replaced Brand Philosophy)
         ═══════════════════════════════════════════════════════ -->
    <section class="atelier-section" id="atelier-section" aria-label="Craftsmanship">
      <div class="atelier-inner grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Image Side -->
        <div class="atelier-image-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/craftsmanship.png" alt="Perfume ingredients processing" class="atelier-image">
        </div>
        <!-- Text Side -->
        <div class="atelier-content md:px-16">
          <h2 class="atelier-title text-sm md:text-base tracking-[0.45em]" data-i18n="atelierTitle">The Art of Extraction</h2>
          <p class="atelier-text text-xl sm:text-2xl lg:text-3xl" data-i18n="atelierText">
            Crafted in the heart of Morocco, our extraits de parfum are an intimate study of raw materials, shadows, and skin. We do not blend for the masses; we bottle memories.
          </p>
          <a href="<?php echo home_url('/our-story/'); ?>" class="product-discover mt-8 text-xs md:text-sm" data-i18n="discover">Discover</a>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════
         FEATURED COLLECTION
         ═══════════════════════════════════════════════════════ -->
    <section class="collection-section" id="collection-section" aria-label="Signature Collection">
      <div class="collection-inner">

        <!-- Section Header -->
        <div class="collection-header mb-12 md:mb-20" id="collection-header">
          <span class="collection-title text-xs md:text-sm tracking-[0.45em]" data-i18n="signatureScents">Signature Scents</span>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-y-12 md:gap-x-12 lg:gap-x-16" id="product-grid">

          <!-- Card 1 — Oud Al-Balghiti -->
          <article class="product-card" id="product-oud">
            <a href="<?php echo home_url('/product-oud/'); ?>" class="product-image-link" aria-label="Discover Oud Al-Balghiti">
              <div class="product-image-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bottle-oud.png" alt="Oud Al-Balghiti perfume bottle" class="product-image">
              </div>
            </a>
            <div class="product-info">
              <h3 class="product-title" data-i18n="oudTitle">Oud Al-Balghiti</h3>
              <p class="product-notes" data-i18n="oudNotes">Oud, Leather, Patchouli</p>
              <a href="<?php echo home_url('/product-oud/'); ?>" class="product-discover" data-i18n="discover">Discover</a>
            </div>
          </article>

          <!-- Card 2 — Rose de Fès -->
          <article class="product-card" id="product-rose">
            <a href="<?php echo home_url('/shop/'); ?>" class="product-image-link" aria-label="Discover Rose de Fès">
              <div class="product-image-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bottle-rose.png" alt="Rose de Fès perfume bottle" class="product-image">
              </div>
            </a>
            <div class="product-info">
              <h3 class="product-title" data-i18n="roseTitle">Rose de Fès</h3>
              <p class="product-notes" data-i18n="roseNotes">Damask Rose, Saffron, Amber</p>
              <a href="<?php echo home_url('/shop/'); ?>" class="product-discover" data-i18n="discover">Discover</a>
            </div>
          </article>

          <!-- Card 3 — Ambre Saharien -->
          <article class="product-card" id="product-amber">
            <a href="<?php echo home_url('/shop/'); ?>" class="product-image-link" aria-label="Discover Ambre Saharien">
              <div class="product-image-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bottle-amber.png" alt="Ambre Saharien perfume bottle" class="product-image">
              </div>
            </a>
            <div class="product-info">
              <h3 class="product-title" data-i18n="amberTitle">Ambre Saharien</h3>
              <p class="product-notes" data-i18n="amberNotes">Amber, Benzoin, Vanilla Absolute</p>
              <a href="<?php echo home_url('/shop/'); ?>" class="product-discover" data-i18n="discover">Discover</a>
            </div>
          </article>

        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
