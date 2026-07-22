<?php
/**
 * Template Name: Contact Page
 *
 * @package El_Balghiti_Parfums
 */

get_header(); ?>

<!-- Editorial Policy Main Container -->
  <main class="flex-grow pt-40 pb-24 w-full bg-[var(--t-bg)] transition-colors duration-500 font-sans">
    <div class="max-w-3xl mx-auto px-6">
      
      <!-- Title -->
      <h1 class="font-montserrat font-bold text-2xl sm:text-3xl tracking-[0.2em] text-center text-[var(--t-text)] uppercase pb-6 border-b border-[var(--t-border-subtle)] mb-12" data-i18n="contactHeader">
        CONTACT US
      </h1>

      <!-- Content -->
      <div class="flex flex-col">
        <h2 class="font-montserrat font-bold text-xs tracking-[0.25em] uppercase text-[var(--t-text)] mt-12 mb-4" data-i18n="contactSection1Title">
          1. CLIENT RELATIONS
        </h2>
        <p class="font-cormorant text-lg leading-relaxed text-[var(--t-text-secondary)] italic" data-i18n="contactSection1Body">
          For inquiries regarding custom blending, private workshops, or order tracking, please contact our Casablanca atelier at support@elbalghiti.com or via telephone at +212 522-000000.
        </p>
      </div>

    </div>
  </main>

  <!-- Global Footer -->

<?php get_footer(); ?>
