  <!-- ═══════════════════════════════════════════════════════
       FOOTER (Le Labo Style Newsletter & Accordions)
       ═══════════════════════════════════════════════════════ -->
  <footer class="w-full border-t border-[var(--t-border-subtle)] bg-[var(--t-bg)] mt-20 pt-16 pb-12 px-6 md:px-16">
    <div class="max-w-7xl mx-auto flex flex-col items-center">
      
      <!-- Newsletter Block -->
      <div class="w-full max-w-xl text-center mb-16">
        <h2 class="font-montserrat font-bold text-xs tracking-[0.3em] uppercase mb-4 text-[var(--t-text)]" data-i18n="newsletterTitle">
          JOIN OUR NEWSLETTER
        </h2>
        <p class="font-sans text-xs text-[var(--t-text-secondary)] leading-relaxed mb-6" data-i18n="newsletterDesc">
          By entering your email and clicking "Sign Up", you agree to receive personalized updates on our creations, craftsmanship, and Medinas workshops.
        </p>
        <div class="flex flex-col gap-3">
          <input type="email" data-i18n-placeholder="newsletterEmailPlaceholder" placeholder="Enter your email address" class="w-full bg-[var(--t-bg)] text-[var(--t-text)] border border-[var(--t-border)] px-4 py-3 text-xs font-mono rounded-sm outline-none placeholder:text-[var(--t-text-muted)] focus:border-[var(--t-text)] text-center">
          <button class="w-full py-3 bg-[#3c3c3c] dark:bg-[#eaeaea] text-white dark:text-black font-mono font-semibold text-xs tracking-[0.25em] transition-all duration-300 uppercase hover:opacity-90 cursor-pointer rounded-sm" data-i18n="signUpBtn">
            SIGN UP
          </button>
        </div>
      </div>

      <!-- Footer Accordion Columns -->
      <div class="w-full grid grid-cols-1 md:grid-cols-4 gap-0 md:gap-8 border-t border-[var(--t-border-subtle)] pt-10">
        
        <!-- Accordion 1: About -->
        <div class="border-b border-[var(--t-border-subtle)] md:border-b-0 py-4 md:py-0">
          <button class="footer-accordion-header w-full md:pointer-events-none flex justify-between items-center text-[var(--t-text)] font-semibold font-mono text-[0.65rem] tracking-widest uppercase cursor-pointer" onclick="toggleFooterAccordion(this)">
            <span data-i18n="footerAboutTitle">About El Balghiti</span>
            <span class="md:hidden transition-transform duration-300 transform accordion-plus">+</span>
          </button>
          <div class="footer-accordion-content hidden md:block mt-4 flex flex-col gap-2 font-mono text-[0.65rem] tracking-wider text-[var(--t-text-muted)] uppercase">
            <a href="our-story.html" class="block hover:text-[var(--t-text)]">About Us</a>
            <a href="atelier.html" class="block hover:text-[var(--t-text)]">Our Atelier</a>
            <a href="refill.html" class="block hover:text-[var(--t-text)]">Refill Program</a>
            <a href="craftsmanship.html" class="block hover:text-[var(--t-text)]">Craftsmanship</a>
          </div>
        </div>

        <!-- Accordion 2: Client Care -->
        <div class="border-b border-[var(--t-border-subtle)] md:border-b-0 py-4 md:py-0">
          <button class="footer-accordion-header w-full md:pointer-events-none flex justify-between items-center text-[var(--t-text)] font-semibold font-mono text-[0.65rem] tracking-widest uppercase cursor-pointer" onclick="toggleFooterAccordion(this)">
            <span data-i18n="footerCareTitle">Client Care</span>
            <span class="md:hidden transition-transform duration-300 transform accordion-plus">+</span>
          </button>
          <div class="footer-accordion-content hidden md:block mt-4 flex flex-col gap-2 font-mono text-[0.65rem] tracking-wider text-[var(--t-text-muted)] uppercase">
            <a href="contact.html" class="block hover:text-[var(--t-text)]">Contact Us</a>
            <a href="shipping.html" class="block hover:text-[var(--t-text)]">Shipping & Returns</a>
            <a href="faq.html" class="block hover:text-[var(--t-text)]">Faq</a>
            <a href="appointments.html" class="block hover:text-[var(--t-text)]">Boutique Appointments</a>
          </div>
        </div>

        <!-- Accordion 3: Privacy & Terms -->
        <div class="border-b border-[var(--t-border-subtle)] md:border-b-0 py-4 md:py-0">
          <button class="footer-accordion-header w-full md:pointer-events-none flex justify-between items-center text-[var(--t-text)] font-semibold font-mono text-[0.65rem] tracking-widest uppercase cursor-pointer" onclick="toggleFooterAccordion(this)">
            <span data-i18n="footerTermsTitle">Privacy & Terms</span>
            <span class="md:hidden transition-transform duration-300 transform accordion-plus">+</span>
          </button>
          <div class="footer-accordion-content hidden md:block mt-4 flex flex-col gap-2 font-mono text-[0.65rem] tracking-wider text-[var(--t-text-muted)] uppercase">
            <a href="privacy.html" class="block hover:text-[var(--t-text)]">Privacy Policy</a>
            <a href="terms.html" class="block hover:text-[var(--t-text)]">Terms of Service</a>
            <a href="accessibility.html" class="block hover:text-[var(--t-text)]">Accessibility Statement</a>
          </div>
        </div>

        <!-- Accordion 4: Visit Us -->
        <div class="py-4 md:py-0">
          <button class="footer-accordion-header w-full md:pointer-events-none flex justify-between items-center text-[var(--t-text)] font-semibold font-mono text-[0.65rem] tracking-widest uppercase cursor-pointer" onclick="toggleFooterAccordion(this)">
            <span data-i18n="footerVisitTitle">Visit Us</span>
            <span class="md:hidden transition-transform duration-300 transform accordion-plus">+</span>
          </button>
          <div class="footer-accordion-content hidden md:block mt-4 flex flex-col gap-2 font-mono text-[0.65rem] tracking-wider text-[var(--t-text-muted)] uppercase leading-relaxed normal-case">
            <p>RUE DES APOTHÉCAIRES, CASABLANCA</p>
            <p class="mt-2">BOUTIQUE HOURS:</p>
            <p>MON - SAT: 10:00 AM - 7:00 PM</p>
          </div>
        </div>

      </div>

      <!-- Copyright & Socials row -->
      <div class="w-full border-t border-[var(--t-border-subtle)] mt-12 pt-8 flex flex-col sm:flex-row justify-between items-center gap-4 font-mono text-[0.6rem] sm:text-[0.65rem] text-[var(--t-text-muted)] uppercase tracking-widest">
        <div>
          <span>© 2026 El Balghiti Parfums. All Rights Reserved.</span>
        </div>
        <div class="flex gap-6">
          <a href="#" class="hover:text-[var(--t-text)]">Instagram</a>
          <a href="#" class="hover:text-[var(--t-text)]">Pinterest</a>
          <a href="#" class="hover:text-[var(--t-text)]">Facebook</a>
        </div>
      </div>

    </div>
  </footer>

  <script>
    function toggleFooterAccordion(btn) {
      const plusSpan = btn.querySelector('.accordion-plus');
      if (plusSpan) {
        plusSpan.textContent = plusSpan.textContent === '+' ? '−' : '+';
        plusSpan.classList.toggle('rotate-90');
      }
      const content = btn.nextElementSibling;
      if (content) {
        content.classList.toggle('hidden');
        content.classList.toggle('flex');
        content.classList.toggle('flex-col');
        content.classList.toggle('pl-2');
        content.classList.toggle('pt-3');
        content.classList.toggle('pb-2');
        content.classList.toggle('qp-2');
      }
    }
  </script>

  <!-- ═══════════════════════════════════════════════════════
       SCRIPTS
       ═══════════════════════════════════════════════════════ -->
  <script>
    // Navigation scroll effect
    const nav = document.getElementById('main-nav');
    window.addEventListener('scroll', () => {
      if (window.pageYOffset > 60) {
        nav.classList.add('scrolled');
      } else {
        nav.classList.remove('scrolled');
      }
    }, { passive: true });

    // Smooth fade-out of scroll indicator on scroll
    const scrollIndicator = document.getElementById('scroll-indicator');
    window.addEventListener('scroll', () => {
      const scrollY = window.pageYOffset;
      const fadeStart = 50;
      const fadeEnd = 300;

      if (!scrollIndicator) return;

      if (scrollY <= fadeStart) {
        scrollIndicator.style.opacity = '';
      } else if (scrollY >= fadeEnd) {
        scrollIndicator.style.opacity = '0';
        scrollIndicator.style.pointerEvents = 'none';
      } else {
        const progress = (scrollY - fadeStart) / (fadeEnd - fadeStart);
        scrollIndicator.style.opacity = String(1 - progress);
      }
    }, { passive: true });
  </script>

  <!-- Cart Drawer Overlay -->
  <div id="cart-drawer-overlay" class="fixed inset-0 bg-black/40 backdrop-blur-xs z-40 opacity-0 pointer-events-none transition-opacity duration-300"></div>

  <!-- Cart Drawer Container -->
  <div id="cart-drawer" class="fixed top-0 right-0 h-full w-full sm:w-[400px] bg-[var(--t-bg)] border-l border-[var(--t-border-subtle)] z-50 translate-x-full transition-transform duration-300 flex flex-col shadow-2xl">
    <!-- Header -->
    <div class="p-6 border-b border-[var(--t-border-subtle)] flex justify-between items-center bg-[var(--t-bg)]">
      <h2 class="font-montserrat font-bold text-xs tracking-[0.25em] uppercase text-[var(--t-text)]" data-i18n="cartTitle">YOUR CART</h2>
      <button id="cart-drawer-close" class="text-[var(--t-text)] hover:opacity-75 cursor-pointer font-mono text-base outline-none p-1" aria-label="Close cart">✕</button>
    </div>

    <!-- Cart Items Container (Scrollable) -->
    <div id="cart-drawer-items" class="flex-grow overflow-y-auto p-6 flex flex-col gap-6 hide-scrollbar bg-[var(--t-bg)]">
      <!-- Items populated dynamically by JS -->
    </div>

    <!-- Footer -->
    <div class="p-6 border-t border-[var(--t-border-subtle)] bg-[var(--t-bg-secondary)] flex flex-col gap-4 font-mono text-xs uppercase tracking-wider text-[var(--t-text)]">
      <div class="flex justify-between items-center font-bold">
        <span data-i18n="cartSubtotal">Subtotal</span>
        <span id="cart-drawer-subtotal">0 DH</span>
      </div>
      <p class="text-[0.6rem] text-[var(--t-text-muted)] normal-case border-b border-[var(--t-border-subtle)] pb-4 leading-relaxed" data-i18n="cartTaxesDesc">
        Shipping and taxes calculated at checkout.
      </p>
      <button class="w-full py-4 bg-[#3c3c3c] dark:bg-[#eaeaea] text-white dark:text-black font-semibold text-xs tracking-[0.25em] transition-all duration-300 hover:opacity-90 cursor-pointer rounded-sm" data-i18n="checkoutBtn">
        PROCEED TO CHECKOUT
      </button>
    </div>
  </div>

  <?php wp_footer(); ?>
</body>
</html>
