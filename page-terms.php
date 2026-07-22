<?php
/**
 * Template Name: Terms of Service Page
 *
 * @package El_Balghiti_Parfums
 */

get_header(); ?>

<!-- Editorial Policy Main Container -->
  <main class="flex-grow pt-40 pb-24 w-full bg-[var(--t-bg)] transition-colors duration-500 font-sans">
    <div class="max-w-3xl mx-auto px-6">
      
      <!-- Title -->
      <h1 class="font-montserrat font-bold text-2xl sm:text-3xl tracking-[0.2em] text-center text-[var(--t-text)] uppercase pb-6 border-b border-[var(--t-border-subtle)] mb-12" data-i18n="termsHeader">
        TERMS OF SERVICE
      </h1>

      <!-- Content -->
      <div class="flex flex-col">
        <h2 class="font-montserrat font-bold text-xs tracking-[0.25em] uppercase text-[var(--t-text)] mt-12 mb-4" data-i18n="termsSection1Title">
          1. AGREEMENT TO TERMS
        </h2>
        <p class="font-cormorant text-lg leading-relaxed text-[var(--t-text-secondary)] italic" data-i18n="termsSection1Body">
          By accessing our website and placing cash-on-delivery orders, you agree to be bound by these Terms of Service. Please review them carefully before checkout.
        </p>

        <h2 class="font-montserrat font-bold text-xs tracking-[0.25em] uppercase text-[var(--t-text)] mt-12 mb-4" data-i18n="termsSection2Title">
          2. CASH ON DELIVERY & CONFIRMATION
        </h2>
        <p class="font-cormorant text-lg leading-relaxed text-[var(--t-text-secondary)] italic" data-i18n="termsSection2Body">
          All orders are subject to telephone confirmation. If we cannot reach you within 48 hours to confirm the shipping details, your order will be cancelled automatically.
        </p>
      </div>

    </div>
  </main>

  <!-- Global Footer -->

<?php get_footer(); ?>
