<?php
/*
Template Name: Product Vulcan Feu
*/
get_header();
?>

  <!-- ═══════════════════════════════════════════════════════
       PRODUCT DETAIL MAIN CONTENT — VULCAN FEU
       ═══════════════════════════════════════════════════════ -->
  <main class="flex-grow pt-36 sm:pt-48 pb-24 px-6 md:px-16 w-full max-w-[1400px] mx-auto">
    
    <div class="grid grid-cols-1 md:grid-cols-2 md:gap-16 lg:gap-24 items-start max-w-screen-2xl mx-auto">
      
      <!-- Left Column: The Visuals Gallery -->
      <div class="flex flex-col gap-6 mb-12 md:mb-0">
        <!-- Main Product Image Frame -->
        <div id="main-product-image-frame" class="product-image-container bg-[var(--t-bg-secondary)] aspect-[4/5] md:aspect-[1/1] flex items-center justify-center p-8 md:p-12 border border-[var(--t-border-subtle)] relative overflow-hidden transition-colors duration-500 rounded-sm">
          <img id="main-product-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/vulcain-fire.jpg" alt="Vulcan Feu French Avenue bottle" class="max-h-[90%] max-w-[90%] object-contain transition-all duration-700 hover:scale-105">
        </div>

        <!-- Thumbnail Gallery -->
        <div class="flex gap-4">
          <!-- Thumbnail 1 (Main Bottle) -->
          <button class="w-20 h-20 border-2 border-[var(--t-text)] bg-[var(--t-bg-secondary)] p-2 flex items-center justify-center overflow-hidden cursor-pointer thumbnail-btn rounded-sm" onclick="changeProductImage('<?php echo get_template_directory_uri(); ?>/assets/images/vulcain-fire.jpg', this)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vulcain-fire.jpg" alt="Vulcan Feu bottle front" class="max-h-full max-w-full object-contain">
          </button>
          <!-- Thumbnail 2 (Mood & Notes) -->
          <button class="w-20 h-20 border border-[var(--t-border-subtle)] bg-[var(--t-bg-secondary)] p-2 flex items-center justify-center overflow-hidden cursor-pointer thumbnail-btn rounded-sm" onclick="changeProductImage('<?php echo get_template_directory_uri(); ?>/assets/images/vulcain-feu-mood.png', this)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vulcain-feu-mood.png" alt="Vulcan Feu notes moodboard" class="max-h-full max-w-full object-cover">
          </button>
        </div>

        <!-- Subtitle -->
        <div class="text-[0.65rem] tracking-widest font-mono text-[var(--t-text-muted)] mt-1 uppercase">
          <span>French Avenue Paris • Hand-Imported Authentic Bottling</span>
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

      <!-- Right Column: The Information & Purchase -->
      <div class="product-info-container flex flex-col">
        
        <!-- Row 1: Title & Price -->
        <div class="flex justify-between items-baseline mb-1 border-b border-[var(--t-border-subtle)] pb-2">
          <h1 class="font-montserrat font-bold text-2xl sm:text-3xl tracking-[0.15em] uppercase text-[var(--t-text)]">
            VULCAN FEU
          </h1>
          <span class="font-mono text-base sm:text-lg text-[var(--t-text)] font-semibold">
            370 DH
          </span>
        </div>
        
        <!-- Monospace Subtitle -->
        <p class="font-mono text-xs tracking-wider text-[var(--t-text-muted)] mb-8 lowercase">
          french avenue • extrait de parfum • unisex
        </p>

        <!-- Dropdowns & Form Container -->
        <div class="flex flex-col gap-4 mb-6">
          <!-- Size Selector -->
          <div>
            <label class="block font-mono text-[0.65rem] tracking-wider uppercase text-[var(--t-text-muted)] mb-1.5">Size</label>
            <div class="relative w-full">
              <select id="product-size" class="w-full bg-[var(--t-bg)] text-[var(--t-text)] border border-[var(--t-border)] hover:border-[var(--t-text)] focus:border-[var(--t-text)] transition-colors px-4 py-3 text-xs font-mono uppercase rounded-sm appearance-none outline-none cursor-pointer">
                <option value="100">100 ml — Extrait de Parfum</option>
              </select>
              <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-[var(--t-text-muted)]">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path></svg>
              </div>
            </div>
          </div>

          <!-- Quantity Selector -->
          <div>
            <label class="block font-mono text-[0.65rem] tracking-wider uppercase text-[var(--t-text-muted)] mb-1.5">Quantity</label>
            <div class="relative w-full">
              <select id="product-qty" class="w-full bg-[var(--t-bg)] text-[var(--t-text)] border border-[var(--t-border)] hover:border-[var(--t-text)] focus:border-[var(--t-text)] transition-colors px-4 py-3 text-xs font-mono rounded-sm appearance-none outline-none cursor-pointer">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-[var(--t-text-muted)]">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path></svg>
              </div>
            </div>
          </div>
        </div>

        <!-- Add to Cart Button -->
        <div class="mb-8">
          <button id="add-to-cart-btn" class="w-full py-4 bg-[#3c3c3c] dark:bg-[#eaeaea] text-white dark:text-black font-mono font-semibold text-xs tracking-[0.25em] transition-all duration-300 uppercase hover:opacity-90 cursor-pointer border border-[#3c3c3c] dark:border-[#eaeaea] rounded-sm">
            ADD TO CART — 370 DH
          </button>
        </div>

        <!-- Fulfillment details -->
        <div class="mb-10 border-t border-[var(--t-border-subtle)] pt-6 flex flex-col gap-4 font-mono text-[0.65rem] tracking-widest text-[var(--t-text-muted)] uppercase">
          <!-- Home Delivery -->
          <div>
            <div class="flex items-center gap-2 text-[var(--t-text)] font-semibold mb-1">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.75A1.125 1.125 0 012.625 17.625V4.625A1.125 1.125 0 013.75 3.5h11.25A1.125 1.125 0 0116.125 4.625v9.75m-4.875 4.375h1.5m-1.5 0A1.125 1.125 0 0110.25 17.625V14.25m6.875 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.5a1.125 1.125 0 001.125-1.125V11.25m-17.25 0h17.25" /></svg>
              <span>Home Delivery</span>
            </div>
            <p class="normal-case leading-relaxed font-sans text-xs text-[var(--t-text-soft)] pl-6">
              • Express 24-48h delivery across all Morocco cities<br>
              • Cash on delivery accepted
            </p>
          </div>
        </div>

        <!-- Story / Editorial Paragraph -->
        <div class="mb-10 border-t border-[var(--t-border-subtle)] pt-6">
          <p class="font-cormorant text-xl leading-relaxed text-[var(--t-text-secondary)] italic mb-4">
            "Smells like a bright sun-ripened mango with a sophisticated woody twist. Super clean and perfect for a warm summer day! Leans masculine with its dry woody base, yet remains a captivating unisex creation."
          </p>
          <span class="font-mono text-[0.85rem] sm:text-sm text-[var(--t-text)] font-semibold uppercase tracking-[0.1em]">
            Inspired by: Stephane Humbert Lucas — God of Fire
          </span>
        </div>
        
        <!-- Fragrance Pyramid Section -->
        <div class="fragrance-pyramid mb-10 border-t border-[var(--t-border-subtle)] pt-6">
          <h2 class="font-montserrat font-bold text-xs tracking-[0.25em] uppercase border-b border-[var(--t-border)] pb-2 mb-6">FRAGRANCE PYRAMID</h2>
          
          <!-- Top Notes -->
          <div class="mb-6">
            <h3 class="font-montserrat font-semibold text-[0.65rem] tracking-wider uppercase text-[var(--t-text-muted)] mb-3">TOP NOTES</h3>
            <div class="flex flex-wrap gap-x-6 gap-y-3">
              <div class="flex items-center gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/note-mango.jpg" alt="Mango" class="w-8 h-8 rounded-full border border-[var(--t-border-subtle)] object-cover shadow-sm">
                <span class="font-cormorant text-base text-[var(--t-text-soft)]">Mango</span>
              </div>
              <div class="flex items-center gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/note-lemon.jpg" alt="Lemon" class="w-8 h-8 rounded-full border border-[var(--t-border-subtle)] object-cover shadow-sm">
                <span class="font-cormorant text-base text-[var(--t-text-soft)]">Zesty Lemon</span>
              </div>
              <div class="flex items-center gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/note-pinkpepper.jpg" alt="Pink Pepper" class="w-8 h-8 rounded-full border border-[var(--t-border-subtle)] object-cover shadow-sm">
                <span class="font-cormorant text-base text-[var(--t-text-soft)]">Pink Pepper</span>
              </div>
              <div class="flex items-center gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/note-ginger.jpg" alt="Ginger" class="w-8 h-8 rounded-full border border-[var(--t-border-subtle)] object-cover shadow-sm">
                <span class="font-cormorant text-base text-[var(--t-text-soft)]">Ginger</span>
              </div>
            </div>
          </div>

          <!-- Heart Notes -->
          <div class="mb-6">
            <h3 class="font-montserrat font-semibold text-[0.65rem] tracking-wider uppercase text-[var(--t-text-muted)] mb-3">HEART NOTES</h3>
            <div class="flex flex-wrap gap-x-6 gap-y-3">
              <div class="flex items-center gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/note-jasmine.jpg" alt="Jasmine" class="w-8 h-8 rounded-full border border-[var(--t-border-subtle)] object-cover shadow-sm">
                <span class="font-cormorant text-base text-[var(--t-text-soft)]">Jasmine</span>
              </div>
              <div class="flex items-center gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/note-drywood.jpg" alt="Dry Wood" class="w-8 h-8 rounded-full border border-[var(--t-border-subtle)] object-cover shadow-sm">
                <span class="font-cormorant text-base text-[var(--t-text-soft)]">Dry Wood Accord</span>
              </div>
            </div>
          </div>

          <!-- Base Notes -->
          <div class="mb-8">
            <h3 class="font-montserrat font-semibold text-[0.65rem] tracking-wider uppercase text-[var(--t-text-muted)] mb-3">BASE NOTES</h3>
            <div class="flex flex-wrap gap-x-6 gap-y-3">
              <div class="flex items-center gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/note-amber.png" alt="Amber" class="w-8 h-8 rounded-full border border-[var(--t-border-subtle)] object-cover shadow-sm">
                <span class="font-cormorant text-base text-[var(--t-text-soft)]">Golden Amber</span>
              </div>
              <div class="flex items-center gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/note-musk.png" alt="Musk" class="w-8 h-8 rounded-full border border-[var(--t-border-subtle)] object-cover shadow-sm">
                <span class="font-cormorant text-base text-[var(--t-text-soft)]">White Musk</span>
              </div>
              <div class="flex items-center gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/note-oud.png" alt="Oud" class="w-8 h-8 rounded-full border border-[var(--t-border-subtle)] object-cover shadow-sm">
                <span class="font-cormorant text-base text-[var(--t-text-soft)]">Oud & Cedar</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Accords & Ratings Section -->
        <div class="fragrance-ratings mb-10 border-t border-[var(--t-border-subtle)] pt-6">
          <h2 class="font-montserrat font-bold text-xs tracking-[0.25em] uppercase border-b border-[var(--t-border)] pb-2 mb-6">MAIN ACCORDS & PERFORMANCE</h2>
          
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-5">
            <!-- Tropical Mango -->
            <div>
              <div class="flex justify-between font-montserrat text-[0.65rem] tracking-widest uppercase mb-1.5">
                <span class="text-[var(--t-text)] font-semibold">TROPICAL MANGO</span>
                <span class="text-[var(--t-text-muted)] font-mono">9.5</span>
              </div>
              <div class="w-full bg-[var(--t-border-subtle)] h-[2px] overflow-hidden">
                <div class="bg-[var(--t-text)] h-full" style="width: 95%"></div>
              </div>
            </div>

            <!-- Citrus & Ginger -->
            <div>
              <div class="flex justify-between font-montserrat text-[0.65rem] tracking-widest uppercase mb-1.5">
                <span class="text-[var(--t-text)] font-semibold">CITRUS & SPICE</span>
                <span class="text-[var(--t-text-muted)] font-mono">9.0</span>
              </div>
              <div class="w-full bg-[var(--t-border-subtle)] h-[2px] overflow-hidden">
                <div class="bg-[var(--t-text)] h-full" style="width: 90%"></div>
              </div>
            </div>

            <!-- Longevity -->
            <div>
              <div class="flex justify-between font-montserrat text-[0.65rem] tracking-widest uppercase mb-1.5">
                <span class="text-[var(--t-text)] font-semibold">LONGEVITY</span>
                <span class="text-[var(--t-text-muted)] font-mono">9.2</span>
              </div>
              <div class="w-full bg-[var(--t-border-subtle)] h-[2px] overflow-hidden">
                <div class="bg-[var(--t-text)] h-full" style="width: 92%"></div>
              </div>
            </div>

            <!-- Sillage -->
            <div>
              <div class="flex justify-between font-montserrat text-[0.65rem] tracking-widest uppercase mb-1.5">
                <span class="text-[var(--t-text)] font-semibold">SILLAGE</span>
                <span class="text-[var(--t-text-muted)] font-mono">8.8</span>
              </div>
              <div class="w-full bg-[var(--t-border-subtle)] h-[2px] overflow-hidden">
                <div class="bg-[var(--t-text)] h-full" style="width: 88%"></div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </main>

<?php get_footer(); ?>
