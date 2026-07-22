<?php
/**
 * Template Name: Privacy Policy Page
 *
 * @package El_Balghiti_Parfums
 */

get_header(); ?>

<!-- Editorial Policy Main Container -->
  <main class="flex-grow pt-40 pb-24 w-full bg-[var(--t-bg)] transition-colors duration-500 font-sans">
    <div class="max-w-3xl mx-auto px-6">
      
      <!-- Title -->
      <h1 class="font-montserrat font-bold text-2xl sm:text-3xl tracking-[0.2em] text-center text-[var(--t-text)] uppercase pb-6 border-b border-[var(--t-border-subtle)] mb-12" data-i18n="privacyHeader">
        PRIVACY POLICY
      </h1>

      <!-- Content -->
      <div class="flex flex-col">
        <h2 class="font-montserrat font-bold text-xs tracking-[0.25em] uppercase text-[var(--t-text)] mt-12 mb-4" data-i18n="privacySection1Title">
          1. INFORMATION WE COLLECT
        </h2>
        <p class="font-cormorant text-lg leading-relaxed text-[var(--t-text-secondary)] italic" data-i18n="privacySection1Body">
          We collect information you provide directly to us when placing an order, subscribing to our newsletter, or contacting customer service. This includes name, delivery address, phone number, and communication history.
        </p>

        <h2 class="font-montserrat font-bold text-xs tracking-[0.25em] uppercase text-[var(--t-text)] mt-12 mb-4" data-i18n="privacySection2Title">
          2. HOW WE USE YOUR INFORMATION
        </h2>
        <p class="font-cormorant text-lg leading-relaxed text-[var(--t-text-secondary)] italic" data-i18n="privacySection2Body">
          Your information is used strictly to process and confirm orders, coordinate cash on delivery, and send newsletter updates if subscribed. We do not sell or share your data with third parties.
        </p>
      </div>

    </div>
  </main>

  <!-- Global Footer -->

<?php get_footer(); ?>
