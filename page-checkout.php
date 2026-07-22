<?php
/**
 * Template Name: Checkout Page
 *
 * @package El_Balghiti_Parfums
 */

get_header(); ?>

<!-- Checkout Grid Container -->
  <main class="flex-grow max-w-7xl w-full mx-auto px-6 md:px-16 py-12">
    <h1 class="font-montserrat font-bold text-2xl tracking-[0.2em] uppercase border-b border-[var(--t-border-subtle)] pb-4 mb-8 text-[var(--t-text)]" data-i18n="checkoutHeader">
      CHECKOUT
    </h1>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
      <!-- Left Column: Form Details (7 Cols) -->
      <div class="lg:col-span-7 flex flex-col gap-10">
        
        <form id="checkout-form" class="flex flex-col gap-10">
          <!-- Shipping Address -->
          <section>
            <h2 class="font-montserrat font-bold text-xs tracking-[0.25em] uppercase text-[var(--t-text)] mb-4" data-i18n="shippingAddressTitle">
              SHIPPING ADDRESS
            </h2>
            <div class="flex flex-col gap-4">
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                  <input type="text" id="checkout-firstname" required data-i18n-placeholder="firstNamePlaceholder" placeholder="First Name" class="w-full bg-[var(--t-bg)] text-[var(--t-text)] border border-[var(--t-border)] hover:border-[var(--t-text)] focus:border-[var(--t-text)] transition-colors px-4 py-3.5 text-xs font-mono rounded-sm outline-none placeholder:text-[var(--t-text-muted)]">
                </div>
                <div>
                  <input type="text" id="checkout-lastname" required data-i18n-placeholder="lastNamePlaceholder" placeholder="Last Name" class="w-full bg-[var(--t-bg)] text-[var(--t-text)] border border-[var(--t-border)] hover:border-[var(--t-text)] focus:border-[var(--t-text)] transition-colors px-4 py-3.5 text-xs font-mono rounded-sm outline-none placeholder:text-[var(--t-text-muted)]">
                </div>
              </div>
              <div>
                <input type="text" id="checkout-address" required data-i18n-placeholder="addressPlaceholder" placeholder="Address" class="w-full bg-[var(--t-bg)] text-[var(--t-text)] border border-[var(--t-border)] hover:border-[var(--t-text)] focus:border-[var(--t-text)] transition-colors px-4 py-3.5 text-xs font-mono rounded-sm outline-none placeholder:text-[var(--t-text-muted)]">
              </div>
              <div>
                <input type="text" id="checkout-city" required data-i18n-placeholder="cityPlaceholder" placeholder="City" class="w-full bg-[var(--t-bg)] text-[var(--t-text)] border border-[var(--t-border)] hover:border-[var(--t-text)] focus:border-[var(--t-text)] transition-colors px-4 py-3.5 text-xs font-mono rounded-sm outline-none placeholder:text-[var(--t-text-muted)]">
              </div>
            </div>
          </section>

          <!-- 4. Payment Method -->
          <section>
            <h2 class="font-montserrat font-bold text-xs tracking-[0.25em] uppercase text-[var(--t-text)] mb-4" data-i18n="paymentMethodTitle">
              PAYMENT
            </h2>
            <div class="border border-[var(--t-border-subtle)] p-4 flex flex-col gap-2 bg-[var(--t-bg-secondary)] rounded-sm">
              <div class="flex items-center gap-3 font-mono text-[0.65rem] tracking-wider text-[var(--t-text)]">
                <input type="radio" checked id="payment-cod" class="accent-[var(--t-text)]">
                <label for="payment-cod" class="font-bold cursor-pointer" data-i18n="codTitle">Cash on Delivery</label>
              </div>
              <p class="text-[0.65rem] text-[var(--t-text-muted)] leading-relaxed pl-6" data-i18n="codDesc">
                Pay with cash upon delivery to your doorstep.
              </p>
            </div>
          </section>

          <!-- Checkout CTA -->
          <div>
            <button type="submit" class="w-full py-4.5 bg-[#3c3c3c] dark:bg-[#eaeaea] text-white dark:text-black font-mono font-semibold text-xs tracking-[0.25em] transition-all duration-300 uppercase hover:opacity-90 cursor-pointer border border-[#3c3c3c] dark:border-[#eaeaea] rounded-sm" data-i18n="completeOrderBtn">
              COMPLETE ORDER
            </button>
          </div>
        </form>

      </div>

      <!-- Right Column: Order Summary (5 Cols) -->
      <div class="lg:col-span-5 border border-[var(--t-border-subtle)] p-6 bg-[var(--t-bg-secondary)] rounded-sm sticky top-36">
        <h2 class="font-montserrat font-bold text-xs tracking-[0.25em] uppercase border-b border-[var(--t-border)] pb-3 mb-6 text-[var(--t-text)]" data-i18n="summaryTitle">
          ORDER SUMMARY
        </h2>

        <!-- Items Container -->
        <div id="checkout-summary-items" class="flex flex-col gap-5 max-h-[350px] overflow-y-auto hide-scrollbar mb-6">
          <!-- Dynamically populated -->
        </div>

        <!-- Prices calculation -->
        <div class="border-t border-[var(--t-border)] pt-4 flex flex-col gap-3 font-mono text-xs uppercase tracking-wider text-[var(--t-text)]">
          <div class="flex justify-between items-center">
            <span class="text-[var(--t-text-muted)]" data-i18n="cartSubtotal">Subtotal</span>
            <span id="checkout-subtotal" class="font-bold">0 DH</span>
          </div>
          <div class="flex justify-between items-center">
            <span class="text-[var(--t-text-muted)]" data-i18n="shippingSummaryLabel">Shipping</span>
            <span class="font-bold text-[var(--t-text-muted)]" data-i18n="freeStandard">Free</span>
          </div>
          <div class="flex justify-between items-center border-t border-[var(--t-border)] pt-3 text-sm font-bold">
            <span>Total</span>
            <span id="checkout-total">0 DH</span>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Success Overlay / Order Confirmed Modal -->
  <div id="success-overlay" class="fixed inset-0 bg-black/40 backdrop-blur-xs z-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-500">
    <div class="bg-[var(--t-bg)] border border-[var(--t-border-subtle)] p-8 md:p-12 w-full max-w-md mx-6 text-center shadow-2xl flex flex-col items-center gap-6 rounded-sm">
      <div class="w-16 h-16 rounded-full border border-[var(--t-text)] flex items-center justify-center text-xl text-[var(--t-text)] font-semibold">
        ✓
      </div>
      <h3 class="font-montserrat font-bold text-base tracking-[0.25em] uppercase text-[var(--t-text)]">
        ORDER CONFIRMED
      </h3>
      <p class="font-mono text-[0.65rem] tracking-wider text-[var(--t-text-secondary)] uppercase leading-relaxed">
        Thank you for your purchase. We have received your order and are preparing your fresh Moroccan elixir. You will receive a call shortly for confirmation.
      </p>
      <a href="<?php echo home_url('/shop/'); ?>" class="w-full py-3.5 bg-[#3c3c3c] dark:bg-[#eaeaea] text-white dark:text-black font-mono font-semibold text-xs tracking-[0.25em] transition-all duration-300 uppercase hover:opacity-90 rounded-sm">
        Back to Shop
      </a>
    </div>
  </div>

  <!-- Le Labo style newsletter & footer -->

<?php get_footer(); ?>
