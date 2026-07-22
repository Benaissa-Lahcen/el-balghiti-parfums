<?php
/**
 * Template Name: FAQ Page
 *
 * @package El_Balghiti_Parfums
 */

get_header(); ?>

<!-- Editorial FAQ Main Container -->
  <main class="flex-grow pt-40 pb-24 w-full bg-[var(--t-bg)] transition-colors duration-500 font-sans">
    <div class="max-w-3xl mx-auto px-6">
      
      <!-- Title -->
      <h1 class="font-montserrat font-bold text-2xl sm:text-3xl tracking-[0.2em] text-center text-[var(--t-text)] uppercase pb-6 border-b border-[var(--t-border-subtle)] mb-12" data-i18n="faqHeader">
        FREQUENTLY ASKED QUESTIONS
      </h1>

      <!-- Accordion Grid -->
      <div class="flex flex-col border-t border-gray-200 dark:border-[#222] mb-12">
        <!-- Q1 -->
        <details class="group border-b border-gray-200 dark:border-[#222] py-6">
          <summary class="flex justify-between items-center font-montserrat font-bold text-xs tracking-[0.25em] uppercase text-[var(--t-text)] cursor-pointer list-none outline-none select-none">
            <span data-i18n="faqQ1">Where do you source your raw ingredients?</span>
            <span class="font-mono text-sm group-open:hidden">+</span>
            <span class="font-mono text-sm hidden group-open:block">−</span>
          </summary>
          <div class="mt-4 font-cormorant text-lg leading-relaxed text-[var(--t-text-secondary)] italic">
            <p data-i18n="faqA1">We exclusively source our highly-rated, pure raw oils directly from historic perfume houses in Grasse, France. These extracts are then aged and hand-blended in our Casablanca laboratories.</p>
          </div>
        </details>

        <!-- Q2 -->
        <details class="group border-b border-gray-200 dark:border-[#222] py-6">
          <summary class="flex justify-between items-center font-montserrat font-bold text-xs tracking-[0.25em] uppercase text-[var(--t-text)] cursor-pointer list-none outline-none select-none">
            <span data-i18n="faqQ2">How does the Cash on Delivery (COD) process work?</span>
            <span class="font-mono text-sm group-open:hidden">+</span>
            <span class="font-mono text-sm hidden group-open:block">−</span>
          </summary>
          <div class="mt-4 font-cormorant text-lg leading-relaxed text-[var(--t-text-secondary)] italic">
            <p data-i18n="faqA2">Once you complete your checkout, we will call you to confirm your address details. We then package your hand-blended fragrance and ship it. You pay in cash to the courier only when the package is delivered to your doorstep.</p>
          </div>
        </details>

        <!-- Q3 -->
        <details class="group border-b border-gray-200 dark:border-[#222] py-6">
          <summary class="flex justify-between items-center font-montserrat font-bold text-xs tracking-[0.25em] uppercase text-[var(--t-text)] cursor-pointer list-none outline-none select-none">
            <span data-i18n="faqQ3">What bottle sizes do you offer?</span>
            <span class="font-mono text-sm group-open:hidden">+</span>
            <span class="font-mono text-sm hidden group-open:block">−</span>
          </summary>
          <div class="mt-4 font-cormorant text-lg leading-relaxed text-[var(--t-text-secondary)] italic">
            <p data-i18n="faqA3">Our signature scents are offered in standard 15ml, 50ml, and 100ml apothecary glass bottles. We also offer 1.5ml samples for exploration before committing to a full size.</p>
          </div>
        </details>

        <!-- Q4 -->
        <details class="group border-b border-gray-200 dark:border-[#222] py-6">
          <summary class="flex justify-between items-center font-montserrat font-bold text-xs tracking-[0.25em] uppercase text-[var(--t-text)] cursor-pointer list-none outline-none select-none">
            <span data-i18n="faqQ4">Can I personalize the label on my bottle?</span>
            <span class="font-mono text-sm group-open:hidden">+</span>
            <span class="font-mono text-sm hidden group-open:block">−</span>
          </summary>
          <div class="mt-4 font-cormorant text-lg leading-relaxed text-[var(--t-text-secondary)] italic">
            <p data-i18n="faqA4">Yes, we offer custom typewriter personalization (up to 23 characters) on the label for our 50ml and 100ml bottles at checkout. It makes for a truly unique gift.</p>
          </div>
        </details>
      </div>

    </div>
  </main>

  <!-- Global Footer -->

<?php get_footer(); ?>
