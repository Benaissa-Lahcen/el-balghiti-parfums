<?php
/**
 * Template Name: Our Story Page
 *
 * @package El_Balghiti_Parfums
 */

get_header(); ?>

<!-- Editorial Main Container -->
  <main class="flex-grow pt-32 sm:pt-40 w-full flex flex-col bg-[var(--t-bg)] transition-colors duration-500">
    
    <!-- Step 2: Editorial Hero Section -->
    <section class="w-full max-w-7xl mx-auto px-6 md:px-16 pt-12 pb-16 flex flex-col gap-8 items-center text-center">
      <h1 class="font-montserrat font-bold text-4xl sm:text-6xl md:text-8xl tracking-[0.2em] text-[var(--t-text)] uppercase leading-none" data-i18n="storyHeader">
        OUR HERITAGE.
      </h1>
      
      <div class="w-full aspect-[21/9] overflow-hidden border border-[var(--t-border-subtle)] bg-[var(--t-bg-secondary)] flex items-center justify-center rounded-sm">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/story-hero.png" alt="Casablanca historic street" class="w-full h-full object-cover">
      </div>
      
      <p class="font-mono text-[0.65rem] sm:text-xs tracking-[0.25em] uppercase text-[var(--t-text-muted)]" data-i18n="storyBadge">
        EST. 2006 — CASABLANCA, MOROCCO
      </p>
    </section>

    <!-- Step 3: Alternating narrative layout -->
    
    <!-- Section 1: The Origins -->
    <section class="w-full border-t border-[var(--t-border-subtle)] bg-[var(--t-bg)] py-20 transition-colors">
      <div class="max-w-7xl mx-auto px-6 md:px-16 grid grid-cols-1 md:grid-cols-2 gap-16 md:gap-32 items-center">
        <!-- Col 1: Tall portrait image of the brothers -->
        <div class="w-full aspect-[3/4] overflow-hidden border border-[var(--t-border-subtle)] bg-[var(--t-bg-secondary)] rounded-sm">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/story-brothers.png" alt="Moustapha and Hicham Elbelghiti" class="w-full h-full object-cover">
        </div>
        <!-- Col 2: Origins text content -->
        <div class="flex flex-col text-left">
          <h2 class="font-montserrat font-bold text-xs tracking-[0.25em] uppercase text-[var(--t-text)] mb-6" data-i18n="originsTitle">
            THE BEGINNING
          </h2>
          <p class="font-cormorant text-xl leading-relaxed text-[var(--t-text-secondary)] italic" data-i18n="originsBody">
            The El Balghiti legacy began in 2004. Two brothers, Moustapha and Hicham Elbelghiti, driven by a profound obsession for olfactory craftsmanship, began their journey working within the very first generic perfume boutique in Morocco. By 2006, they opened the first independent El Balghiti store. The mission was absolute: uncompromising quality and a relentless devotion to the client.
          </p>
        </div>
      </div>
    </section>

    <!-- Section 2: Sourcing and Craft -->
    <section class="w-full border-t border-[var(--t-border-subtle)] bg-[var(--t-bg-secondary)] py-20 transition-colors">
      <div class="max-w-7xl mx-auto px-6 md:px-16 grid grid-cols-1 md:grid-cols-2 gap-16 md:gap-32 items-center">
        <!-- Col 1: Sourcing text content -->
        <div class="flex flex-col text-left order-2 md:order-1">
          <h2 class="font-montserrat font-bold text-xs tracking-[0.25em] uppercase text-[var(--t-text)] mb-6" data-i18n="sourcingTitle">
            FROM FRANCE TO MOROCCO
          </h2>
          <p class="font-cormorant text-xl leading-relaxed text-[var(--t-text-secondary)] italic" data-i18n="sourcingBody">
            A great fragrance is only as good as its raw materials. We exclusively source the highest-rated, pure raw oils directly from the historic perfume houses of France. These premium extracts are then brought to our laboratories, where they are meticulously measured, blended, and aged by hand to create the perfect extrait de parfum.
          </p>
        </div>
        <!-- Col 2: Square image -->
        <div class="w-full aspect-square overflow-hidden border border-[var(--t-border-subtle)] bg-[var(--t-bg)] rounded-sm order-1 md:order-2">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/story-sourcing.png" alt="Raw amber oils and glass beaker" class="w-full h-full object-cover">
        </div>
      </div>
    </section>

    <!-- Section 3: The Legacy -->
    <section class="w-full border-t border-[var(--t-border-subtle)] bg-[var(--t-bg)] py-24 transition-colors">
      <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="font-montserrat font-bold text-xs tracking-[0.25em] uppercase text-[var(--t-text)] mb-6" data-i18n="legacyTitle">
          TWO DECADES OF EXCELLENCE
        </h2>
        <p class="font-cormorant text-2xl sm:text-3xl leading-relaxed text-[var(--t-text-secondary)] italic max-w-3xl mx-auto" data-i18n="legacyBody">
          Today, with over five dedicated boutiques across Casablanca and throughout Morocco, El Balghiti Parfums remains an independent, family-driven house. We do not compromise on our process, and we continue to bottle memories for those who demand the exceptional.
        </p>
      </div>
    </section>

  </main>

  <!-- Global Footer -->

<?php get_footer(); ?>
