<?php
/**
 * Template Name: Product Oud Page
 *
 * @package El_Balghiti_Parfums
 */

get_header(); ?>

<!-- ═══════════════════════════════════════════════════════
       PRODUCT DETAIL MAIN CONTENT
       ═══════════════════════════════════════════════════════ -->
  <main class="flex-grow pt-36 sm:pt-48 pb-24 px-6 md:px-16 w-full max-w-[1400px] mx-auto">
    
    <div class="grid grid-cols-1 md:grid-cols-2 md:gap-16 lg:gap-24 items-start max-w-screen-2xl mx-auto">
      
      <!-- Left Column: The Visuals (Le Labo Style Gallery) -->
      <div class="flex flex-col gap-6 mb-12 md:mb-0">
        <!-- Main Product Image Frame -->
        <div id="main-product-image-frame" class="product-image-container bg-[var(--t-bg-secondary)] aspect-[4/5] md:aspect-[1/1] flex items-center justify-center p-8 md:p-12 border border-[var(--t-border-subtle)] relative overflow-hidden transition-colors duration-500">
          <img id="main-product-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/bottle-oud.png" alt="OUD AL-BALGHITI bottle" class="max-h-[90%] max-w-[90%] object-contain transition-all duration-700 hover:scale-102">
        </div>

        <!-- Thumbnail Gallery -->
        <div class="flex gap-4">
          <!-- Thumbnail 1 (Main Bottle) -->
          <button class="w-20 h-20 border-2 border-[var(--t-text)] bg-[var(--t-bg-secondary)] p-2 flex items-center justify-center overflow-hidden cursor-pointer thumbnail-btn" onclick="changeProductImage('assets/images/bottle-oud.png', this)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bottle-oud.png" alt="OUD AL-BALGHITI front" class="max-h-full max-w-full object-contain">
          </button>
          <!-- Thumbnail 2 (Label Close-up / Atelier style) -->
          <button class="w-20 h-20 border border-[var(--t-border-subtle)] bg-[var(--t-bg-secondary)] p-2 flex items-center justify-center overflow-hidden cursor-pointer thumbnail-btn" onclick="changeProductImage('assets/images/craftsmanship_atelier.png', this)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/craftsmanship_atelier.png" alt="Atelier detail" class="max-h-full max-w-full object-cover">
          </button>
          <!-- Thumbnail 3 (Oud notes detail) -->
          <button class="w-20 h-20 border border-[var(--t-border-subtle)] bg-[var(--t-bg-secondary)] p-2 flex items-center justify-center overflow-hidden cursor-pointer thumbnail-btn" onclick="changeProductImage('assets/images/note-oud.png', this)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/note-oud.png" alt="Oud resin detail" class="max-h-full max-w-full object-cover">
          </button>
        </div>

        <!-- Personalization Link Subtitle -->
        <div class="text-[0.65rem] tracking-widest font-mono text-[var(--t-text-muted)] mt-1 uppercase">
          <span class="hover:text-[var(--t-text)] cursor-pointer">View personalization: label and box</span>
        </div>
      </div>

      <script>
        function changeProductImage(src, btn) {
          const mainImg = document.getElementById('main-product-image');
          if (mainImg) {
            mainImg.src = src;
          }
          const thumbnails = document.querySelectorAll('.thumbnail-btn');
          thumbnails.forEach(t => {
            t.classList.remove('border-2', 'border-[var(--t-text)]');
            t.classList.add('border', 'border-[var(--t-border-subtle)]');
          });
          btn.classList.remove('border', 'border-[var(--t-border-subtle)]');
          btn.classList.add('border-2', 'border-[var(--t-text)]');
        }
      </script>

      <!-- Right Column: The Information & Purchase (Le Labo Checkout style) -->
      <div class="product-info-container flex flex-col">
        
        <!-- Row 1: Title & Price -->
        <div class="flex justify-between items-baseline mb-1 border-b border-[var(--t-border-subtle)] pb-2">
          <h1 class="font-montserrat font-bold text-2xl sm:text-3xl tracking-[0.15em] uppercase text-[var(--t-text)]" data-i18n="oudPageTitle">
            OUD AL-BALGHITI
          </h1>
          <span class="font-mono text-base sm:text-lg text-[var(--t-text)] font-semibold" data-i18n="oudPrice">
            450 DH
          </span>
        </div>
        
        <!-- Monospace Subtitle -->
        <p class="font-mono text-xs tracking-wider text-[var(--t-text-muted)] mb-8 lowercase" data-i18n="oudSubtitleMono">
          extrait de parfum
        </p>

        <!-- Dropdowns & Input Form Container -->
        <div class="flex flex-col gap-4 mb-6">
          <!-- Size Selector -->
          <div>
            <label class="block font-mono text-[0.65rem] tracking-wider uppercase text-[var(--t-text-muted)] mb-1.5" data-i18n="selectSize">Size</label>
            <div class="relative w-full">
              <select id="product-size" class="w-full bg-[var(--t-bg)] text-[var(--t-text)] border border-[var(--t-border)] hover:border-[var(--t-text)] focus:border-[var(--t-text)] transition-colors px-4 py-3 text-xs font-mono uppercase rounded-sm appearance-none outline-none cursor-pointer">
                <option value="50">50 ml</option>
                <option value="100">100 ml</option>
              </select>
              <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-[var(--t-text-muted)]">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path></svg>
              </div>
            </div>
          </div>

          <!-- Quantity Selector -->
          <div>
            <label class="block font-mono text-[0.65rem] tracking-wider uppercase text-[var(--t-text-muted)] mb-1.5" data-i18n="selectQuantity">Quantity</label>
            <div class="relative w-full">
              <select id="product-qty" class="w-full bg-[var(--t-bg)] text-[var(--t-text)] border border-[var(--t-border)] hover:border-[var(--t-text)] focus:border-[var(--t-text)] transition-colors px-4 py-3 text-xs font-mono rounded-sm appearance-none outline-none cursor-pointer">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-[var(--t-text-muted)]">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path></svg>
              </div>
            </div>
          </div>

          <!-- Personalization Input -->
          <div>
            <div class="flex justify-between items-baseline mb-1.5">
              <label class="block font-mono text-[0.65rem] tracking-wider uppercase text-[var(--t-text-muted)]" data-i18n="personalizationLabel">For</label>
              <span id="char-counter" class="font-mono text-[0.65rem] text-[var(--t-text-muted)]">23</span>
            </div>
            <input type="text" id="personalization-input" maxlength="23" data-i18n-placeholder="personalizePlaceholder" placeholder="personalize here..." class="w-full bg-[var(--t-bg)] text-[var(--t-text)] border border-[var(--t-border)] hover:border-[var(--t-text)] focus:border-[var(--t-text)] transition-colors px-4 py-3 text-xs font-mono rounded-sm outline-none placeholder:text-[var(--t-text-muted)]">
          </div>
        </div>

        <!-- Add to Cart Button -->
        <div class="mb-8">
          <button id="add-to-cart-btn" class="w-full py-4 bg-[#3c3c3c] dark:bg-[#eaeaea] text-white dark:text-black font-mono font-semibold text-xs tracking-[0.25em] transition-all duration-300 uppercase hover:opacity-90 cursor-pointer border border-[#3c3c3c] dark:border-[#eaeaea] rounded-sm" data-i18n="addToCart">
            ADD TO CART
          </button>
        </div>

        <!-- Fulfillment details -->
        <div class="mb-10 border-t border-[var(--t-border-subtle)] pt-6 flex flex-col gap-4 font-mono text-[0.65rem] tracking-widest text-[var(--t-text-muted)] uppercase">
          <!-- Home Delivery -->
          <div>
            <div class="flex items-center gap-2 text-[var(--t-text)] font-semibold mb-1">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.75A1.125 1.125 0 012.625 17.625V4.625A1.125 1.125 0 013.75 3.5h11.25A1.125 1.125 0 0116.125 4.625v9.75m-4.875 4.375h1.5m-1.5 0A1.125 1.125 0 0110.25 17.625V14.25m6.875 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.5a1.125 1.125 0 001.125-1.125V11.25m-17.25 0h17.25" /></svg>
              <span data-i18n="homeDelivery">Home Delivery</span>
            </div>
            <p class="normal-case leading-relaxed font-sans text-xs text-[var(--t-text-soft)] pl-6">
              <span data-i18n="standardShippingDesc">• Free standard shipping on orders over 450 DH</span><br>
              <span data-i18n="sameDayShippingDesc">• Same-day delivery (Order M-F by 2:00 pm in Rabat / Casablanca)</span>
            </p>
          </div>

          <!-- In-store Pickup -->
          <div>
            <div class="flex items-center gap-2 text-[var(--t-text)] font-semibold mb-1">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.015a2.993 2.993 0 002.25 1.015c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v5.25a.75.75 0 00.75.75z" /></svg>
              <span data-i18n="inStorePickup">In-store Pickup</span>
            </div>
            <p class="normal-case leading-relaxed font-sans text-xs text-[var(--t-text-soft)] pl-6">
              <a href="#" class="underline hover:text-[var(--t-text)]" data-i18n="viewStores">View stores</a>
            </p>
          </div>
        </div>

        <!-- Story / Editorial Paragraph -->
        <div class="mb-10 border-t border-[var(--t-border-subtle)] pt-6">
          <p class="font-cormorant text-xl leading-relaxed text-[var(--t-text-secondary)] italic mb-4" data-i18n="oudStory">
            Oud Al-Balghiti is a dark, nocturnal study of Moroccan leather and precious oud. Inspired by the dense, smoke-filled air of ancient medinas, it weaves together the raw depth of cedarwood, vetiver, and black tea, balanced by the fleeting sweetness of ripe fig. It is a fragrance that exists in the shadows, lingering close to the skin, whispering secrets of wood and spice.
          </p>
          <span class="font-mono text-[0.85rem] sm:text-sm text-[var(--t-text)] font-semibold uppercase tracking-[0.1em]" data-i18n="oudInspiration">
            Inspiration: Noir 29 / Batch: 001
          </span>
        </div>
        
        <!-- Fragrance Pyramid Section -->
        <div class="fragrance-pyramid mb-10 border-t border-[var(--t-border-subtle)] pt-6">
          <h2 class="font-montserrat font-bold text-xs tracking-[0.25em] uppercase border-b border-[var(--t-border)] pb-2 mb-6" data-i18n="pyramidTitle">FRAGRANCE PYRAMID</h2>
          
          <!-- Top Notes -->
          <div class="mb-6">
            <h3 class="font-montserrat font-semibold text-[0.65rem] tracking-wider uppercase text-[var(--t-text-muted)] mb-3" data-i18n="topNotesTitle">TOP NOTES</h3>
            <div class="flex flex-wrap gap-x-6 gap-y-3">
              <div class="flex items-center gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/note-bergamot.png" alt="Bergamot" class="w-7 h-7 rounded-full border border-[var(--t-border-subtle)] object-cover">
                <span class="font-cormorant text-base text-[var(--t-text-soft)]" data-i18n="noteBergamotName">Bergamot</span>
              </div>
              <div class="flex items-center gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/note-blacktea.png" alt="Black Tea" class="w-7 h-7 rounded-full border border-[var(--t-border-subtle)] object-cover">
                <span class="font-cormorant text-base text-[var(--t-text-soft)]" data-i18n="noteBlackTeaName">Black Tea</span>
              </div>
              <div class="flex items-center gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/note-fig.png" alt="Fig" class="w-7 h-7 rounded-full border border-[var(--t-border-subtle)] object-cover">
                <span class="font-cormorant text-base text-[var(--t-text-soft)]" data-i18n="noteFigName">Fig</span>
              </div>
            </div>
          </div>

          <!-- Heart Notes -->
          <div class="mb-6">
            <h3 class="font-montserrat font-semibold text-[0.65rem] tracking-wider uppercase text-[var(--t-text-muted)] mb-3" data-i18n="heartNotesTitle">HEART NOTES</h3>
            <div class="flex flex-wrap gap-x-6 gap-y-3">
              <div class="flex items-center gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/note-cedar.png" alt="Cedar" class="w-7 h-7 rounded-full border border-[var(--t-border-subtle)] object-cover">
                <span class="font-cormorant text-base text-[var(--t-text-soft)]" data-i18n="noteCedarName">Cedar</span>
              </div>
              <div class="flex items-center gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/note-vetiver.png" alt="Vetiver" class="w-7 h-7 rounded-full border border-[var(--t-border-subtle)] object-cover">
                <span class="font-cormorant text-base text-[var(--t-text-soft)]" data-i18n="noteVetiverName">Vetiver</span>
              </div>
              <div class="flex items-center gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/note-musk.png" alt="Musk" class="w-7 h-7 rounded-full border border-[var(--t-border-subtle)] object-cover">
                <span class="font-cormorant text-base text-[var(--t-text-soft)]" data-i18n="noteMuskName">Musk</span>
              </div>
            </div>
          </div>

          <!-- Base Notes -->
          <div class="mb-8">
            <h3 class="font-montserrat font-semibold text-[0.65rem] tracking-wider uppercase text-[var(--t-text-muted)] mb-3" data-i18n="baseNotesTitle">BASE NOTES</h3>
            <div class="flex flex-wrap gap-x-6 gap-y-3">
              <div class="flex items-center gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/note-amber.png" alt="Amber" class="w-7 h-7 rounded-full border border-[var(--t-border-subtle)] object-cover">
                <span class="font-cormorant text-base text-[var(--t-text-soft)]" data-i18n="noteAmberName">Amber</span>
              </div>
              <div class="flex items-center gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/note-oud.png" alt="Oud" class="w-7 h-7 rounded-full border border-[var(--t-border-subtle)] object-cover">
                <span class="font-cormorant text-base text-[var(--t-text-soft)]" data-i18n="noteOudName">Oud</span>
              </div>
              <div class="flex items-center gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/note-leather.png" alt="Leather" class="w-7 h-7 rounded-full border border-[var(--t-border-subtle)] object-cover">
                <span class="font-cormorant text-base text-[var(--t-text-soft)]" data-i18n="noteLeatherName">Leather</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Performance / Ratings Section -->
        <div class="fragrance-ratings mb-10 border-t border-[var(--t-border-subtle)] pt-6">
          <h2 class="font-montserrat font-bold text-xs tracking-[0.25em] uppercase border-b border-[var(--t-border)] pb-2 mb-6" data-i18n="ratingsTitle">RATINGS</h2>
          
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-5">
            <!-- Scent -->
            <div>
              <div class="flex justify-between font-montserrat text-[0.65rem] tracking-widest uppercase mb-1.5">
                <span class="text-[var(--t-text)] font-semibold" data-i18n="ratingScent">SCENT</span>
                <span class="text-[var(--t-text-muted)] font-mono">9.2</span>
              </div>
              <div class="w-full bg-[var(--t-border-subtle)] h-[2px] overflow-hidden">
                <div class="bg-[var(--t-text)] h-full" style="width: 92%"></div>
              </div>
            </div>

            <!-- Longevity -->
            <div>
              <div class="flex justify-between font-montserrat text-[0.65rem] tracking-widest uppercase mb-1.5">
                <span class="text-[var(--t-text)] font-semibold" data-i18n="ratingLongevity">LONGEVITY</span>
                <span class="text-[var(--t-text-muted)] font-mono">8.8</span>
              </div>
              <div class="w-full bg-[var(--t-border-subtle)] h-[2px] overflow-hidden">
                <div class="bg-[var(--t-text)] h-full" style="width: 88%"></div>
              </div>
            </div>

            <!-- Sillage -->
            <div>
              <div class="flex justify-between font-montserrat text-[0.65rem] tracking-widest uppercase mb-1.5">
                <span class="text-[var(--t-text)] font-semibold" data-i18n="ratingSillage">SILLAGE</span>
                <span class="text-[var(--t-text-muted)] font-mono">8.5</span>
              </div>
              <div class="w-full bg-[var(--t-border-subtle)] h-[2px] overflow-hidden">
                <div class="bg-[var(--t-text)] h-full" style="width: 85%"></div>
              </div>
            </div>

            <!-- Bottle -->
            <div>
              <div class="flex justify-between font-montserrat text-[0.65rem] tracking-widest uppercase mb-1.5">
                <span class="text-[var(--t-text)] font-semibold" data-i18n="ratingBottle">BOTTLE</span>
                <span class="text-[var(--t-text-muted)] font-mono">8.2</span>
              </div>
              <div class="w-full bg-[var(--t-border-subtle)] h-[2px] overflow-hidden">
                <div class="bg-[var(--t-text)] h-full" style="width: 82%"></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Secondary Mono Links -->
        <div class="border-t border-[var(--t-border-subtle)] pt-6 flex flex-col gap-3 font-mono text-[0.65rem] tracking-wider uppercase text-[var(--t-text-muted)]">
          <div class="flex justify-between items-center py-1 border-b border-[var(--t-border-subtle)]">
            <span data-i18n="notReady">Not ready to commit?</span>
            <a href="#" class="underline hover:text-[var(--t-text)] font-semibold" data-i18n="addSample">add sample to cart</a>
          </div>
          <div class="flex justify-between items-center py-1 border-b border-[var(--t-border-subtle)]">
            <span data-i18n="haveOldBottle">Have an old bottle?</span>
            <a href="#" class="underline hover:text-[var(--t-text)] font-semibold" data-i18n="refillHere">refill here</a>
          </div>
          <div class="flex justify-between items-center py-1">
            <span data-i18n="needHelp">Need help?</span>
            <a href="#" class="underline hover:text-[var(--t-text)] font-semibold" data-i18n="contactUs">Contact Us</a>
          </div>
        </div>

      </div>

      <!-- Add script for personalization character counter -->
      <script>
        document.addEventListener('DOMContentLoaded', () => {
          const input = document.getElementById('personalization-input');
          const counter = document.getElementById('char-counter');
          if (input && counter) {
            input.addEventListener('input', () => {
              counter.textContent = 23 - input.value.length;
            });
          }
        });
      </script>

    </div>

    <!-- Recommendations Section -->
    <section class="mt-24 border-t border-[var(--t-border-subtle)] pt-16 w-full">
      <h2 class="font-montserrat font-bold text-xs tracking-[0.25em] uppercase mb-12 text-[var(--t-text)]" data-i18n="recommendationsTitle">
        Recommendations for you
      </h2>
      <div class="grid grid-cols-2 gap-6 sm:gap-12 max-w-4xl">
        <!-- Card 1: Lotion -->
        <div class="flex flex-col">
          <div class="bg-[var(--t-bg-secondary)] aspect-square border border-[var(--t-border-subtle)] p-4 flex items-center justify-center mb-4 rounded-sm">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rec-lotion.png" alt="Oud Al-Balghiti Body Lotion" class="max-h-[90%] max-w-[90%] object-contain">
          </div>
          <h3 class="font-montserrat font-bold text-[0.65rem] sm:text-xs tracking-wider uppercase text-[var(--t-text)] mb-1" data-i18n="recLotionTitle">
            OUD AL-BALGHITI
          </h3>
          <p class="font-mono text-[0.6rem] sm:text-[0.65rem] text-[var(--t-text-muted)] mb-4 lowercase leading-tight" data-i18n="recLotionDesc">
            237 ml perfuming body lotion
          </p>
          <div class="flex justify-between items-center border-t border-[var(--t-border-subtle)] pt-3 text-[0.6rem] sm:text-[0.65rem] font-mono uppercase mt-auto">
            <a href="#" class="underline hover:text-[var(--t-text)] font-semibold" data-i18n="recAddToCart">Add to Cart</a>
            <span class="text-[var(--t-text-muted)]" data-i18n="recLotionPrice">USD $97.00</span>
          </div>
        </div>

        <!-- Card 2: Shower Gel -->
        <div class="flex flex-col">
          <div class="bg-[var(--t-bg-secondary)] aspect-square border border-[var(--t-border-subtle)] p-4 flex items-center justify-center mb-4 rounded-sm">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rec-shower.png" alt="Oud Al-Balghiti Shower Gel" class="max-h-[90%] max-w-[90%] object-contain">
          </div>
          <h3 class="font-montserrat font-bold text-[0.65rem] sm:text-xs tracking-wider uppercase text-[var(--t-text)] mb-1" data-i18n="recShowerTitle">
            OUD AL-BALGHITI
          </h3>
          <p class="font-mono text-[0.6rem] sm:text-[0.65rem] text-[var(--t-text-muted)] mb-4 lowercase leading-tight" data-i18n="recShowerDesc">
            237 ml perfuming shower gel
          </p>
          <div class="flex justify-between items-center border-t border-[var(--t-border-subtle)] pt-3 text-[0.6rem] sm:text-[0.65rem] font-mono uppercase mt-auto">
            <a href="#" class="underline hover:text-[var(--t-text)] font-semibold" data-i18n="recAddToCart">Add to Cart</a>
            <span class="text-[var(--t-text-muted)]" data-i18n="recShowerPrice">USD $67.00</span>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- ═══════════════════════════════════════════════════════
       FOOTER (Le Labo Style Newsletter & Accordions)
       ═══════════════════════════════════════════════════════ -->

<?php get_footer(); ?>
