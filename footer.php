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
            <a href="<?php echo home_url('/our-story/'); ?>" class="block hover:text-[var(--t-text)]">About Us</a>
            <a href="<?php echo home_url('/atelier/'); ?>" class="block hover:text-[var(--t-text)]">Our Atelier</a>
            <a href="<?php echo home_url('/refill/'); ?>" class="block hover:text-[var(--t-text)]">Refill Program</a>
            <a href="<?php echo home_url('/craftsmanship/'); ?>" class="block hover:text-[var(--t-text)]">Craftsmanship</a>
          </div>
        </div>

        <!-- Accordion 2: Client Care -->
        <div class="border-b border-[var(--t-border-subtle)] md:border-b-0 py-4 md:py-0">
          <button class="footer-accordion-header w-full md:pointer-events-none flex justify-between items-center text-[var(--t-text)] font-semibold font-mono text-[0.65rem] tracking-widest uppercase cursor-pointer" onclick="toggleFooterAccordion(this)">
            <span data-i18n="footerCareTitle">Client Care</span>
            <span class="md:hidden transition-transform duration-300 transform accordion-plus">+</span>
          </button>
          <div class="footer-accordion-content hidden md:block mt-4 flex flex-col gap-2 font-mono text-[0.65rem] tracking-wider text-[var(--t-text-muted)] uppercase">
            <a href="<?php echo home_url('/contact/'); ?>" class="block hover:text-[var(--t-text)]">Contact Us</a>
            <a href="<?php echo home_url('/shipping/'); ?>" class="block hover:text-[var(--t-text)]">Shipping & Returns</a>
            <a href="<?php echo home_url('/faq/'); ?>" class="block hover:text-[var(--t-text)]">Faq</a>
            <a href="<?php echo home_url('/appointments/'); ?>" class="block hover:text-[var(--t-text)]">Boutique Appointments</a>
          </div>
        </div>

        <!-- Accordion 3: Privacy & Terms -->
        <div class="border-b border-[var(--t-border-subtle)] md:border-b-0 py-4 md:py-0">
          <button class="footer-accordion-header w-full md:pointer-events-none flex justify-between items-center text-[var(--t-text)] font-semibold font-mono text-[0.65rem] tracking-widest uppercase cursor-pointer" onclick="toggleFooterAccordion(this)">
            <span data-i18n="footerTermsTitle">Privacy & Terms</span>
            <span class="md:hidden transition-transform duration-300 transform accordion-plus">+</span>
          </button>
          <div class="footer-accordion-content hidden md:block mt-4 flex flex-col gap-2 font-mono text-[0.65rem] tracking-wider text-[var(--t-text-muted)] uppercase">
            <a href="<?php echo home_url('/privacy/'); ?>" class="block hover:text-[var(--t-text)]">Privacy Policy</a>
            <a href="<?php echo home_url('/terms/'); ?>" class="block hover:text-[var(--t-text)]">Terms of Service</a>
            <a href="<?php echo home_url('/accessibility/'); ?>" class="block hover:text-[var(--t-text)]">Accessibility Statement</a>
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
      }
    }

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

  <!-- Inline Core Application Logic -->
  <script>
    const themeUri = "<?php echo get_template_directory_uri(); ?>";
    const checkoutUrl = "<?php echo home_url('/checkout/'); ?>";
/**
 * El Balghiti Parfums - Application Logic
 * Handles Theme (Light/Dark), Language (EN/AR), and Smart Search
 */

const perfumeCatalog = [
  { name: "Oud Al-Balghiti", brand: "El Balghiti", inspiredBy: ["Signature", "Oud", "Leather"], type: "Extrait de Parfum", notes: "Oud, Leather, Patchouli", price: "1,200 DH", image: themeUri + "/assets/images/bottle-oud.png", url: "product-oud.html" },
  { name: "Rose de Fès", brand: "El Balghiti", inspiredBy: ["Signature", "Rose", "Saffron"], type: "Extrait de Parfum", notes: "Damask Rose, Saffron, Amber", price: "1,100 DH", image: "assets/images/bottle-rose.png", url: "shop.html" },
  { name: "Ambre Saharien", brand: "El Balghiti", inspiredBy: ["Signature", "Amber", "Vanilla"], type: "Extrait de Parfum", notes: "Amber, Benzoin, Vanilla Absolute", price: "1,150 DH", image: "assets/images/bottle-amber.png", url: "shop.html" },
  { name: "Discovery Set", brand: "El Balghiti", inspiredBy: ["Packs", "Samples"], type: "Discovery Pack", notes: "3 x 10ml Extraits de Parfum", price: "450 DH", image: themeUri + "/assets/images/discovery-set.png", url: "packs.html" },
  { name: "Vulcain Fire", brand: "French Avenue", inspiredBy: ["God of Fire", "SHL", "Stephane Humbert Lucas"], type: "Branded Dupe", notes: "Mango, Lemon, Amber", price: "450 DH", image: "assets/images/vulcain-fire.jpg", url: "shop.html" },
  { name: "Baroque Rouge 540", brand: "Maison Alhambra", inspiredBy: ["Baccarat Rouge", "MFK", "540"], type: "Branded Dupe", notes: "Saffron, Jasmine, Cedar", price: "350 DH", image: "assets/images/baroque.jpg", url: "shop.html" },
  { name: "Pure Musk Tahara", brand: "El Balghiti", inspiredBy: ["White Musk", "Clean"], type: "Thick Musk", notes: "White Lotus, Vanilla, Musk", price: "150 DH", image: "assets/images/tahara.jpg", url: "shop.html" },
  { name: "Ombre Leather Extract", brand: "Custom Atelier", inspiredBy: ["Tom Ford", "Ombre Leather"], type: "Custom Blend", notes: "Cardamom, Leather, Patchouli", price: "250 DH", image: "assets/images/ombre.jpg", url: "shop.html" }
];

const translations = {
  en: {
    promoBannerText: "Every El Balghiti creation is fresh hand-blended.",
    collections: "Collections",
    about: "About",
    cart: "Cart (0)",
    heroSubtitle: "Maison de Parfum",
    discover: "Discover",
    signatureScents: "Signature Scents",
    oudTitle: "Oud Al-Balghiti",
    oudNotes: "Oud, Leather, Patchouli",
    roseTitle: "Rose de Fès",
    roseNotes: "Damask Rose, Saffron, Amber",
    amberTitle: "Ambre Saharien",
    amberNotes: "Amber, Benzoin, Vanilla Absolute",
    atelierTitle: "The Art of Extraction",
    atelierText: "Crafted in the heart of Morocco, our extraits de parfum are an intimate study of raw materials, shadows, and skin. We do not blend for the masses; we bottle memories.",
    pageTitleCollection: "The Collection",
    filterAll: "All",
    filterExtraits: "Extraits de Parfum",
    filterRawOils: "Raw Oils",
    filterDiscovery: "Discovery Packs",
    neroliTitle: "Néroli d'Atlas",
    neroliNotes: "Neroli, Cedarwood, Musk",
    jasmineTitle: "Jasmine Noir",
    jasmineNotes: "Night-blooming Jasmine, Sandalwood",
    discoveryTrioTitle: "The Discovery Trio",
    discoveryTrioNotes: "Experience our signatures",
    
    // Single Product - Oud
    oudPageTitle: "OUD AL-BALGHITI",
    oudInspiration: "Inspiration: Noir 29 / Batch: 001",
    oudPrice: "450 DH",
    oudStory: "Oud Al-Balghiti is a dark, nocturnal study of Moroccan leather and precious oud. Inspired by the dense, smoke-filled air of ancient medinas, it weaves together the raw depth of cedarwood, vetiver, and black tea, balanced by the fleeting sweetness of ripe fig. It is a fragrance that exists in the shadows, lingering close to the skin, whispering secrets of wood and spice.",
    topNotesTitle: "Top Notes",
    topNotesContent: "Bergamot, Black Tea, Fig",
    heartNotesTitle: "Heart Notes",
    heartNotesContent: "Cedar, Vetiver, Musk",
    baseNotesTitle: "Base Notes",
    baseNotesContent: "Amber, Oud, Leather",
    addToCart: "ADD TO CART",
    
    // Dosage & Composition Details
    dosageSectionTitle: "COMPOSITION & DOSAGE",
    noteFigTitle: "FIG & BLACK TEA",
    noteFigDesc: "Provides a sweet, green, and slightly earthy brightness to balance the heavy resins.",
    noteLeatherTitle: "MOROCCAN LEATHER",
    noteLeatherDesc: "Adds a warm, smoky, animalic depth that captures the spirit of Moroccan heritage.",
    noteOudTitle: "AGARWOOD (OUD)",
    noteOudDesc: "The dark, resinous foundation. Woody, mysterious, and incredibly long-lasting.",

    // Fragrance Pyramid & Ratings
    pyramidTitle: "FRAGRANCE PYRAMID",
    noteBergamotName: "Bergamot",
    noteBlackTeaName: "Black Tea",
    noteFigName: "Fig",
    noteCedarName: "Cedar",
    noteVetiverName: "Vetiver",
    noteMuskName: "Musk",
    noteAmberName: "Amber",
    noteOudName: "Oud",
    noteLeatherName: "Leather",
    ratingsTitle: "RATINGS",
    ratingScent: "SCENT",
    ratingLongevity: "LONGEVITY",
    ratingSillage: "SILLAGE",
    ratingBottle: "BOTTLE",
    
    // Checkout Form Keys
    oudSubtitleMono: "extrait de parfum",
    selectSize: "Size",
    selectQuantity: "Quantity",
    personalizationLabel: "For",
    homeDelivery: "Home Delivery",
    standardShippingDesc: "• Free standard shipping on orders over 450 DH",
    sameDayShippingDesc: "• Same-day delivery (Order M-F by 2:00 pm in Rabat / Casablanca)",
    inStorePickup: "In-store Pickup",
    viewStores: "View stores",
    notReady: "Not ready to commit?",
    addSample: "add sample to cart",
    haveOldBottle: "Have an old bottle?",
    refillHere: "refill here",
    needHelp: "Need help?",
    contactUs: "Contact Us",

    // Recommendations Keys
    recommendationsTitle: "Recommendations for you",
    recLotionTitle: "OUD AL-BALGHITI",
    recLotionDesc: "237 ml perfuming body lotion",
    recLotionPrice: "USD $97.00",
    recShowerTitle: "OUD AL-BALGHITI",
    recShowerDesc: "237 ml perfuming shower gel",
    recShowerPrice: "USD $67.00",
    recAddToCart: "Add to Cart",

    // Footer Keys
    newsletterTitle: "JOIN OUR NEWSLETTER",
    newsletterDesc: "By entering your email and clicking \"Sign Up\", you agree to receive personalized updates on our creations, craftsmanship, and Medinas workshops.",
    signUpBtn: "SIGN UP",
    footerAboutTitle: "About El Balghiti",
    footerCareTitle: "Client Care",
    footerTermsTitle: "Privacy & Terms",
    footerVisitTitle: "Visit Us",

    // Cart Drawer Keys
    cartTitle: "YOUR CART",
    cartSubtotal: "Subtotal",
    cartTaxesDesc: "Shipping and taxes calculated at checkout.",
    checkoutBtn: "PROCEED TO CHECKOUT",

    // Checkout Page Keys
    checkoutHeader: "CHECKOUT",
    shippingAddressTitle: "SHIPPING ADDRESS",
    shippingSummaryLabel: "Shipping",
    freeStandard: "Free",
    paymentMethodTitle: "PAYMENT",
    codTitle: "Cash on Delivery",
    codDesc: "Pay with cash upon delivery to your doorstep.",
    completeOrderBtn: "COMPLETE ORDER",
    summaryTitle: "ORDER SUMMARY",

    // Input Placeholders
    personalizePlaceholder: "personalize here...",
    newsletterEmailPlaceholder: "Enter your email address",
    firstNamePlaceholder: "First Name",
    lastNamePlaceholder: "Last Name",
    addressPlaceholder: "Address",
    cityPlaceholder: "City",

    // Our Story Keys
    ourStoryLink: "Our Story",
    storyTitlePage: "Our Story — El Balghiti Parfums",
    storyHeader: "OUR HERITAGE.",
    storyBadge: "EST. 2006 — CASABLANCA, MOROCCO",
    originsTitle: "THE BEGINNING",
    originsBody: "The El Balghiti legacy began in 2004. Two brothers, Moustapha and Hicham Elbelghiti, driven by a profound obsession for olfactory craftsmanship, began their journey working within the very first generic perfume boutique in Morocco. By 2006, they opened the first independent El Balghiti store. The mission was absolute: uncompromising quality and a relentless devotion to the client.",
    sourcingTitle: "FROM FRANCE TO MOROCCO",
    sourcingBody: "A great fragrance is only as good as its raw materials. We exclusively source the highest-rated, pure raw oils directly from the historic perfume houses of France. These premium extracts are then brought to our laboratories, where they are meticulously measured, blended, and aged by hand to create the perfect extrait de parfum.",
    legacyTitle: "TWO DECADES OF EXCELLENCE",
    legacyBody: "Today, with over five dedicated boutiques across Casablanca and throughout Morocco, El Balghiti Parfums remains an independent, family-driven house. We do not compromise on our process, and we continue to bottle memories for those who demand the exceptional.",

    // Privacy Page Keys
    privacyTitlePage: "Privacy Policy — El Balghiti Parfums",
    privacyHeader: "PRIVACY POLICY",
    privacySection1Title: "1. INFORMATION WE COLLECT",
    privacySection1Body: "We collect information you provide directly to us when placing an order, subscribing to our newsletter, or contacting customer service. This includes name, delivery address, phone number, and communication history.",
    privacySection2Title: "2. HOW WE USE YOUR INFORMATION",
    privacySection2Body: "Your information is used strictly to process and confirm orders, coordinate cash on delivery, and send newsletter updates if subscribed. We do not sell or share your data with third parties.",

    // Terms Page Keys
    termsTitlePage: "Terms of Service — El Balghiti Parfums",
    termsHeader: "TERMS OF SERVICE",
    termsSection1Title: "1. AGREEMENT TO TERMS",
    termsSection1Body: "By accessing our website and placing cash-on-delivery orders, you agree to be bound by these Terms of Service. Please review them carefully before checkout.",
    termsSection2Title: "2. CASH ON DELIVERY & CONFIRMATION",
    termsSection2Body: "All orders are subject to telephone confirmation. If we cannot reach you within 48 hours to confirm the shipping details, your order will be cancelled automatically.",

    // Shipping Page Keys
    shippingTitlePage: "Shipping & Delivery — El Balghiti Parfums",
    shippingHeader: "SHIPPING & DELIVERY",
    shippingSection1Title: "1. MOROCCAN CASH ON DELIVERY",
    shippingSection1Body: "Complimentary Cash on Delivery across Morocco. All orders are hand-blended in our laboratories upon request. Please expect a confirmation call within 24 hours of placing your order. Standard delivery times are 1-2 business days for Casablanca, and 3-5 business days for all other regions.",

    // FAQ Page Keys
    faqTitlePage: "FAQ — El Balghiti Parfums",
    faqHeader: "FREQUENTLY ASKED QUESTIONS",
    faqQ1: "Where do you source your raw ingredients?",
    faqA1: "We exclusively source our highly-rated, pure raw oils directly from historic perfume houses in Grasse, France. These extracts are then aged and hand-blended in our Casablanca laboratories.",
    faqQ2: "How does the Cash on Delivery (COD) process work?",
    faqA2: "Once you complete your checkout, we will call you to confirm your address details. We then package your hand-blended fragrance and ship it. You pay in cash to the courier only when the package is delivered to your doorstep.",
    faqQ3: "What bottle sizes do you offer?",
    faqA3: "Our signature scents are offered in standard 15ml, 50ml, and 100ml apothecary glass bottles. We also offer 1.5ml samples for exploration before committing to a full size.",
    faqA4: "Yes, we offer custom typewriter personalization (up to 23 characters) on the label for our 50ml and 100ml bottles at checkout. It makes for a truly unique gift.",

    // Atelier Page Keys
    atelierTitlePage: "Our Atelier — El Balghiti Parfums",
    atelierHeader: "OUR ATELIER",
    atelierSection1Title: "1. THE CASABLANCA LAB",
    atelierSection1Body: "Our primary atelier is located in Casablanca, Morocco. Here, our perfumers combine raw oil extracts from Grasse, France with local elements to blend and mature each fragrance by hand.",

    // Refill Page Keys
    refillTitlePage: "Refill Program — El Balghiti Parfums",
    refillHeader: "REFILL PROGRAM",
    refillSection1Title: "1. SUSTAINABLE LUXURY",
    refillSection1Body: "Bring your empty El Balghiti apothecary bottle back to any of our boutiques for a fresh hand-blended refill at a reduced cost. We sterilize and reuse the premium glass container.",

    // Craftsmanship Page Keys
    craftsmanshipTitlePage: "Craftsmanship — El Balghiti Parfums",
    craftsmanshipHeader: "CRAFTSMANSHIP",
    craftsmanshipSection1Title: "1. THE ART OF SLOWNESS",
    craftsmanshipSection1Body: "We do not rush. Each batch of perfume matures for several weeks in temperature-controlled dark chambers. This slow maceration process ensures that the natural oils develop their full, rich character.",

    // Contact Page Keys
    contactTitlePage: "Contact Us — El Balghiti Parfums",
    contactHeader: "CONTACT US",
    contactSection1Title: "1. CLIENT RELATIONS",
    contactSection1Body: "For inquiries regarding custom blending, private workshops, or order tracking, please contact our Casablanca atelier at support@elbalghiti.com or via telephone at +212 522-000000.",

    // Appointments Page Keys
    appointmentsTitlePage: "Boutique Appointments — El Balghiti Parfums",
    appointmentsHeader: "BOUTIQUE APPOINTMENTS",
    appointmentsSection1Title: "1. PRIVATE SESSIONS",
    appointmentsSection1Body: "Book a private olfactory consultation at our Casablanca boutique. Our master perfumers will guide you through a selection of raw oils to discover your signature scent profile.",

    // Accessibility Page Keys
    accessibilitySection1Body: "El Balghiti Parfums is dedicated to ensuring digital accessibility for all visitors. We continuously optimize our web experience to match modern accessibility guidelines.",

    // Packs Page Keys
    packsTitlePage: "Discovery Sets — El Balghiti Parfums",
    packsHeader: "THE DISCOVERY WARDROBE",
    packsSubtitle: "Experience our freshly hand-blended extraits in curated trios, or build your own signature collection.",
    curatedPacksTitle: "CURATED COLLECTION BUNDLES",
    bestSellersTrioTitle: "THE BEST SELLERS TRIO",
    trioSizeDesc: "3x 50ml bottles",
    bestSellersTrioDesc: "A selection of our three most loved creations. Includes Oud Al-Balghiti, فاس Rose, and Desert Amber. Perfectly hand-blended and bottled to order.",
    oudArchiveTitle: "THE OUD ARCHIVE",
    oudArchiveDesc: "A deep exploration of the most mystical wood. Featuring our raw Oud Al-Balghiti oil, alongside custom variations blending dark leather and Moroccan spices.",
    customTrioHeader: "BUILD YOUR CUSTOM TRIO",
    customTrioSubtitle: "Choose three 50ml extraits de parfum to create your custom discovery wardrobe.",
    selectScent1: "Select Scent 1...",
    selectScent2: "Select Scent 2...",
    selectScent3: "Select Scent 3...",
    scentGodOfFire: "Inspired by God of Fire",
    scentBaccarat: "Inspired by Baccarat Rouge",
    scentOmbre: "Inspired by Ombre Nomade",
    scentBlackPhantom: "Inspired by Black Phantom",
    scentLostCherry: "Inspired by Lost Cherry",
    customSetLabel: "CUSTOM SET",
    addCustomPackBtn: "ADD CUSTOM PACK TO CART",
    packs: "Packs"
  }, ar: {
    promoBannerText: "كل ابتكار من البلغيتي يتم خلطه يدوياً طازجاً.",
    collections: "المجموعات",
    about: "عنا",
    cart: "سلة التسوق (0)",
    heroSubtitle: "دار العطور",
    discover: "اكتشف",
    signatureScents: "عطور مميزة",
    oudTitle: "عود البلغيتي",
    oudNotes: "عود، جلد، باتشولي",
    roseTitle: "ورد فاس",
    roseNotes: "ورد جوري، زعفران، عنبر",
    amberTitle: "عنبر صحراوي",
    amberNotes: "عنبر، بنزوين، فانيليا",
    atelierTitle: "فن الاستخلاص",
    atelierText: "مصنوعة في قلب المغرب، عطورنا هي دراسة حميمة للمواد الخام والظلال والبشرة. نحن لا نمزج للجماهير؛ نحن نعبئ الذكريات.",
    pageTitleCollection: "المجموعة",
    filterAll: "الكل",
    filterExtraits: "خلاصات العطور",
    filterRawOils: "زيوت خام",
    filterDiscovery: "مجموعات الاستكشاف",
    neroliTitle: "نيرولي الأطلس",
    neroliNotes: "نيرولي، خشب الأرز، مسك",
    jasmineTitle: "ياسمين نوار",
    jasmineNotes: "ياسمين ليلي، خشب الصندل",
    discoveryTrioTitle: "ثلاثية الاستكشاف",
    discoveryTrioNotes: "اكتشف عطورنا المميزة",
    
    // Single Product - Oud
    oudPageTitle: "عود البلغيتي",
    oudInspiration: "الإلهام: نوار 29 / الدفعة: 001",
    oudPrice: "450 درهم",
    oudStory: "عود البلغيتي هو دراسة ليلية داكنة للجلود المغربية والعود الثمين. مستوحى من الهواء الكثيف المليء بالدخان في المدن القديمة، يمزج بين العمق الخام لخشب الأرز، نجيل الهند والشاي الأسود، متوازناً مع حلاوة التين الناضج العابرة. عطر يعيش في الظلال، يستقر قريباً من البشرة، ويهمس بأسرار الخشب والتوابل.",
    topNotesTitle: "المكونات العليا",
    topNotesContent: "برغموت، شاي أسود، تين",
    heartNotesTitle: "المكونات الوسطى",
    heartNotesContent: "خشب الأرز، نجيل الهند، مسك",
    baseNotesTitle: "المكونات الأساسية",
    baseNotesContent: "عنبر، عود، جلد",
    addToCart: "أضف إلى السلة",

    // Dosage & Composition Details
    dosageSectionTitle: "التركيب والنسب",
    noteFigTitle: "التين والشاي الأسود",
    noteFigDesc: "يضفي إشراقة حلوة وخضراء وترابية خفيفة لموازنة الصموغ الثقيلة.",
    noteLeatherTitle: "الجلد المغربي",
    noteLeatherDesc: "يضيف عمقاً دافئاً ودخانياً يعبر عن روح التراث المغربي.",
    noteOudTitle: "خشب العود",
    noteOudDesc: "الأساس الداكن والراتنجي. خشبي وغامض ويدوم طويلاً بشكل مذهل.",

    // Fragrance Pyramid & Ratings
    pyramidTitle: "الهرم العطري",
    noteBergamotName: "برغموت",
    noteBlackTeaName: "شاي أسود",
    noteFigName: "تين",
    noteCedarName: "خشب الأرز",
    noteVetiverName: "نجيل الهند",
    noteMuskName: "مسك",
    noteAmberName: "عنبر",
    noteOudName: "عود",
    noteLeatherName: "جلد",
    ratingsTitle: "التقييمات",
    ratingScent: "الرائحة",
    ratingLongevity: "الثبات",
    ratingSillage: "الفوحان",
    ratingBottle: "الزجاجة",

    // Checkout Form Keys
    oudSubtitleMono: "خلاصة عطر",
    selectSize: "الحجم",
    selectQuantity: "الكمية",
    personalizationLabel: "مخصص لـ",
    homeDelivery: "التوصيل للمنزل",
    standardShippingDesc: "• شحن قياسي مجاني للطلبات الأكثر من 450 درهم",
    sameDayShippingDesc: "• توصيل في نفس اليوم (اطلب من الإثنين إلى الجمعة قبل الساعة 2:00 مساءً في الرباط / الدار البيضاء)",
    inStorePickup: "الاستلام من المتجر",
    viewStores: "عرض المتاجر",
    notReady: "غير مستعد للشراء الآن؟",
    addSample: "أضف عينة للسلة",
    haveOldBottle: "هل لديك زجاجة قديمة؟",
    refillHere: "أعد التعبئة هنا",
    needHelp: "هل تحتاج لمساعدة؟",
    contactUs: "اتصل بنا",

    // Recommendations Keys
    recommendationsTitle: "عطور مقترحة لك",
    recLotionTitle: "عود البلغيتي",
    recLotionDesc: "٢٣٧ مل لوشن معطر للجسم",
    recLotionPrice: "٩٧ درهم",
    recShowerTitle: "عود البلغيتي",
    recShowerDesc: "٢٣٧ مل جل استحمام معطر",
    recShowerPrice: "٦٧ درهم",
    recAddToCart: "أضف إلى السلة",

    // Footer Keys
    newsletterTitle: "اشترك في نشرتنا الإخبارية",
    newsletterDesc: "عبر إدخال بريدك الإلكتروني والضغط على \"اشتراك\"، فإنك توافق على تلقي تحديثات مخصصة حول ابتكاراتنا وحرفيتنا وورش عملنا في المدينة.",
    signUpBtn: "اشتراك",
    footerAboutTitle: "عن البلغيتي",
    footerCareTitle: "عناية العملاء",
    footerTermsTitle: "الخصوصية والشروط",
    footerVisitTitle: "قم بزيارتنا",

    // Cart Drawer Keys
    cartTitle: "سلتك",
    cartSubtotal: "المجموع الفرعي",
    cartTaxesDesc: "يتم حساب الشحن والضرائب عند الدفع.",
    checkoutBtn: "المتابعة لإتمام الطلب",

    // Checkout Page Keys
    checkoutHeader: "إتمام الطلب",
    shippingAddressTitle: "عنوان الشحن",
    shippingSummaryLabel: "الشحن",
    freeStandard: "مجاني",
    paymentMethodTitle: "طريقة الدفع",
    codTitle: "الدفع عند الاستلام",
    codDesc: "ادفع نقداً عند استلام طلبك عند عتبة بابك.",
    completeOrderBtn: "إكمال الطلب",
    summaryTitle: "ملخص الطلب",

    // Input Placeholders
    personalizePlaceholder: "اكتب التخصيص هنا...",
    newsletterEmailPlaceholder: "أدخل بريدك الإلكتروني",
    firstNamePlaceholder: "الاسم الأول",
    lastNamePlaceholder: "اسم العائلة",
    addressPlaceholder: "العنوان",
    cityPlaceholder: "المدينة",

    // Our Story Keys
    ourStoryLink: "قصتنا",
    storyTitlePage: "قصتنا — عطور البلغيتي",
    storyHeader: "تراثنا.",
    storyBadge: "تأسس عام ٢٠٠٦ — الدار البيضاء، المغرب",
    originsTitle: "البداية",
    originsBody: "بدأ إرث البلغيتي في عام ٢٠٠٤. بدأ شقيقان، مصطفى وهشام البلغيتي، مدفوعين بشغف عميق بصناعة العطور، رحلتهما بالعمل داخل أول متجر عطور عام في المغرب. وبحلول عام ٢٠٠٦، افتتحا أول متجر مستقل للبلغيتي. كانت المهمة مطلقة: جودة لا تضاهى وتفانٍ لا هوادة فيه للعميل.",
    sourcingTitle: "من فرنسا إلى المغرب",
    sourcingBody: "إن جودة العطر تكمن في جودة مواده الخام. نحن نستورد حصرياً الزيوت الخام النقية الأعلى تقييماً مباشرةً من بيوت العطور التاريخية في فرنسا. ثم يتم جلب هذه المستخلصات الفاخرة إلى مختبراتنا، حيث يتم قياسها ومزجها وتعتيقها بعناية فائقة يدوياً لابتكار خلاصة العطر المثالية.",
    legacyTitle: "عقدان من التميز",
    legacyBody: "اليوم، ومع وجود أكثر من خمسة متاجر متخصصة في الدار البيضاء ومختلف أنحاء المغرب، تظل عطور البلغيتي داراً مستقلة تديرها العائلة. نحن لا نساوم على طريقتنا في العمل، ونستمر في تعبئة الذكريات لأولئك الذين يطلبون التميز.",

    // Privacy Page Keys
    privacyTitlePage: "سياسة الخصوصية — عطور البلغيتي",
    privacyHeader: "سياسة الخصوصية",
    privacySection1Title: "١. المعلومات التي نجمعها",
    privacySection1Body: "نحن نجمع المعلومات التي تقدمها لنا مباشرة عند تقديم طلب، أو الاشتراك في نشرتنا الإخبارية، أو الاتصال بخدمة العملاء. ويشمل ذلك الاسم، وعنوان التسليم، ورقم الهاتف، وسجل الاتصالات.",
    privacySection2Title: "٢. كيف نستخدم معلوماتك",
    privacySection2Body: "تُستخدم معلوماتك بشكل صارم لمعالجة الطلبات وتأكيدها، وتنسيق الدفع عند الاستلام، وإرسال تحديثات النشرة الإخبارية في حال الاشتراك. نحن لا نبيع أو نشارك بياناتك مع أطراف ثالثة.",

    // Terms Page Keys
    termsTitlePage: "شروط الخدمة — عطور البلغيتي",
    termsHeader: "شروط الخدمة",
    termsSection1Title: "١. الموافقة على الشروط",
    termsSection1Body: "من خلال الوصول إلى موقعنا وتقديم طلبات الدفع عند الاستلام، فإنك توافق على الالتزام بشروط الخدمة هذه. يرجى مراجعتها بعناية قبل الدفع.",
    termsSection2Title: "٢. الدفع عند الاستلام والتأكيد",
    termsSection2Body: "تخضع جميع الطلبات للتأكيد الهاتفي. إذا لم نتمكن من الوصول إليك في غضون ٤٨ ساعة لتأكيد تفاصيل الشحن، فسيتم إلغاء طلبك تلقائياً.",

    // Shipping Page Keys
    shippingTitlePage: "الشحن والتوصيل — عطور البلغيتي",
    shippingHeader: "الشحن والتوصيل",
    shippingSection1Title: "١. الدفع عند الاستلام بالمغرب",
    shippingSection1Body: "شحن وتوصيل مجاني مع ميزة الدفع عند الاستلام في جميع أنحاء المغرب. يتم خلط جميع الطلبات يدوياً في مختبراتنا بناءً على الطلب. يرجى توقع مكالمة تأكيد في غضون ٢٤ ساعة من تقديم طلبك. أوقات التوصيل القياسية هي ١-٢ أيام عمل للدار البيضاء، و ٣-٥ أيام عمل لجميع المناطق الأخرى.",

    // FAQ Page Keys
    faqTitlePage: "الأسئلة الشائعة — عطور البلغيتي",
    faqHeader: "الأسئلة الشائعة",
    faqQ1: "من أين تستوردون مكوناتكم الخام؟",
    faqA1: "نحن نستورد حصرياً زيوتنا الخام النقية الأعلى تقييماً مباشرةً من بيوت العطور التاريخية في غراس، فرنسا. ثم يتم تعتيق هذه المستخلصات ومزجها يدوياً في مختبراتنا بالدار البيضاء.",
    faqQ2: "كيف تعمل عملية الدفع عند الاستلام (COD)؟",
    faqA2: "بمجرد إتمام الدفع، سنتصل بك لتأكيد تفاصيل عنوانك. ثم نقوم بتعبئة عطرك الممزوج يدوياً وشحنه. وتدفع نقداً للمندوب فقط عندما يتم تسليم الطرد إلى عتبة بابك.",
    faqQ3: "ما هي أحجام الزجاجات التي تقدمونها؟",
    faqA3: "تتوفر عطورنا المميزة بأحجام قياسية تبلغ ١٥ مل، و ٥٠ مل، و ١٠0 مل في زجاجات صيدلانية. كما نقدم عينات بحجم ١.٥ مل للاستكشاف قبل الشراء.",
    faqA4: "نعم، نحن نقدم تخصيصاً بالآلة الكاتبة (حتى ٢٣ حرفاً) على الملصق لزجاجاتنا بحجم ٥٠ مل و ١٠٠ مل عند الدفع. مما يجعلها هدية فريدة حقاً.",

    // Atelier Page Keys
    atelierTitlePage: "مختبرنا — عطور البلغيتي",
    atelierHeader: "مختبرنا",
    atelierSection1Title: "١. مختبر الدار البيضاء",
    atelierSection1Body: "يقع مختبرنا الرئيسي في الدار البيضاء، المغرب. هنا، يجمع خبراؤنا بين مستخلصات الزيوت الخام من غراس بفرنسا مع العناصر المحلية لمزج وتعتيق كل عطر يدوياً.",

    // Refill Page Keys
    refillTitlePage: "برنامج إعادة التعبئة — عطور البلغيتي",
    refillHeader: "برنامج إعادة التعبئة",
    refillSection1Title: "١. الفخامة المستدامة",
    refillSection1Body: "أحضر زجاجة عطور البلغيتي الفارغة إلى أي من متاجرنا للحصول على إعادة تعبئة جديدة ممزوجة يدوياً بسعر مخفض. نحن نقوم بتعقيم وإعادة استخدام الحاوية الزجاجية الفاخرة.",

    // Craftsmanship Page Keys
    craftsmanshipTitlePage: "الحرفية — عطور البلغيتي",
    craftsmanshipHeader: "الحرفية",
    craftsmanshipSection1Title: "١. فن التأني",
    craftsmanshipSection1Body: "نحن لا نستعجل. كل دفعة من العطور تعتق لعدة أسابيع في غرف مظلمة خاضعة للتحكم في درجة الحرارة. تضمن عملية التعتيق البطيئة هذه أن تطور الزيوت الطبيعية طابعها الكامل والغني.",

    // Contact Page Keys
    contactTitlePage: "اتصل بنا — عطور البلغيتي",
    contactHeader: "اتصل بنا",
    contactSection1Title: "١. علاقات العملاء",
    contactSection1Body: "للاستفسارات المتعلقة بالمزج المخصص، أو ورش العمل الخاصة، أو تتبع الطلبات، يرجى الاتصال بمختبرنا في الدار البيضاء على support@elbalghiti.com أو عبر الهاتف على 000000-522 212+.",

    // Appointments Page Keys
    appointmentsTitlePage: "مواعيد المتجر — عطور البلغيتي",
    appointmentsHeader: "مواعيد المتجر",
    appointmentsSection1Title: "١. جلسات خاصة",
    appointmentsSection1Body: "احجز استشارة عطرية خاصة في متجرنا بالدار البيضاء. سيقوم خبراؤنا بإرشادك عبر مجموعة مختارة من الزيوت الخام لاكتشاف طابعك العطري المميز.",

    // Accessibility Page Keys
    accessibilitySection1Body: "تلتزم عطور البلغيتي بضمان إمكانية الوصول الرقمي لجميع الزوار. نحن نواصل تحسين تجربة موقعنا لتتوافق مع إرشادات إمكانية الوصول الحديثة.",

    // Packs Page Keys
    packsTitlePage: "مجموعات الاستكشاف — عطور البلغيتي",
    packsHeader: "خزانة الاستكشاف",
    packsSubtitle: "اختبر خلاصات عطورنا المركزة الممزوجة يدوياً طازجة في ثلاثيات منسقة، أو ابنِ مجموعتك الخاصة المميزة.",
    curatedPacksTitle: "مجموعات منسقة فاخرة",
    bestSellersTrioTitle: "ثلاثية الأكثر مبيعاً",
    trioSizeDesc: "٣ زجاجات بحجم ٥٠ مل",
    bestSellersTrioDesc: "مجموعة مختارة من إبداعاتنا الثلاثة الأكثر طلباً. تتضمن عود البلغيتي، ورد فاس، وعنبر الصحراء. خُلِطت يدوياً وعُبِّئت حسب الطلب.",
    oudArchiveTitle: "أرشيف العود",
    oudArchiveDesc: "استكشاف عميق لأكثر الأخشاب غموضاً. تتميز بزيت عود البلغيتي الخام، إلى جانب لمسات مخصصة تمزج بين الجلد الداكن والتوابل المغربية.",
    customTrioHeader: "ابنِ ثلاثيتك المخصصة",
    customTrioSubtitle: "اختر ثلاثة خلاصات عطور مركزة بحجم ٥٠ مل لتصميم خزانة الاستكشاف المخصصة لك.",
    selectScent1: "اختر العطر الأول...",
    selectScent2: "اختر العطر الثاني...",
    selectScent3: "اختر العطر الثالث...",
    scentGodOfFire: "مستوحى من جاد أوف فاير",
    scentBaccarat: "مستوحى من باكارات روج",
    scentOmbre: "مستوحى من أومبر نوماد",
    scentBlackPhantom: "مستوحى من بلاك فانتوم",
    scentLostCherry: "مستوحى من لوست شيري",
    customSetLabel: "مجموعة مخصصة",
    addCustomPackBtn: "إضافة المجموعة المخصصة للسلة",
    packs: "المجموعات"
  }
};

document.addEventListener('DOMContentLoaded', () => {
  // --- Smart Search Logic ---
  const searchOverlay = document.getElementById('search-overlay');
  const searchInput = document.getElementById('search-input');
  const searchResults = document.getElementById('search-results');
  const closeSearchBtn = document.getElementById('close-search');

  const openSearch = () => {
    if (!searchOverlay) return;
    searchOverlay.classList.remove('hidden');
    searchOverlay.classList.add('flex');
    document.body.style.overflow = 'hidden';
    if (searchInput) {
      searchInput.value = '';
      setTimeout(() => searchInput.focus(), 100);
    }
    if (searchResults) {
      searchResults.innerHTML = '';
    }
  };

  const closeSearch = () => {
    if (!searchOverlay) return;
    searchOverlay.classList.remove('flex');
    searchOverlay.classList.add('hidden');
    document.body.style.overflow = '';
  };

  // Use event delegation on document body for search triggers
  document.body.addEventListener('click', (e) => {
    const trigger = e.target.closest('.search-trigger');
    if (trigger) {
      e.preventDefault();
      e.stopPropagation();
      openSearch();
    }
  });

  if (closeSearchBtn) {
    closeSearchBtn.addEventListener('click', closeSearch);
  }

  if (searchOverlay) {
    searchOverlay.addEventListener('click', (e) => {
      if (e.target === searchOverlay) {
        closeSearch();
      }
    });
  }

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && searchOverlay && !searchOverlay.classList.contains('hidden')) {
      closeSearch();
    }
  });

  if (searchInput && searchResults) {
    searchInput.addEventListener('input', (e) => {
      const query = e.target.value.trim().toLowerCase();

      if (!query) {
        searchResults.innerHTML = '';
        return;
      }

      const matches = perfumeCatalog.filter(product => {
        const nameMatch = product.name.toLowerCase().includes(query);
        const brandMatch = product.brand.toLowerCase().includes(query);
        const inspiredMatch = Array.isArray(product.inspiredBy) && product.inspiredBy.some(item => item.toLowerCase().includes(query));
        return nameMatch || brandMatch || inspiredMatch;
      });

      if (matches.length === 0) {
        searchResults.innerHTML = `<p class='text-white/70 text-center mt-10 text-lg'>We are currently sourcing this DNA. Contact us for custom blending.</p>`;
      } else {
        const isPhp = typeof themeUri !== 'undefined';
        searchResults.innerHTML = matches.map(product => {
          const imgPath = isPhp && !product.image.startsWith('http') ? `${themeUri}/${product.image}` : product.image;
          return `
            <a href="${product.url}" class="flex items-center gap-6 p-4 hover:bg-white/10 transition-colors border-b border-white/10 group cursor-pointer">
              <img src="${imgPath}" alt="${product.name}" class="w-16 h-16 object-cover rounded-md shadow-lg group-hover:scale-105 transition-transform duration-300">
              <div class="flex flex-col">
                <span class="text-xl text-white font-montserrat font-medium">${product.name}</span>
                <span class="text-sm text-gray-400 font-mono">${product.brand} • ${product.type}</span>
                <span class="text-xs italic text-gray-500 font-cormorant mt-1">${product.notes}</span>
              </div>
              <span class="text-lg text-white font-semibold ml-auto font-mono">${product.price}</span>
            </a>
          `;
        }).join('');
      }
    });
  }

  // --- Theme Toggle Logic ---
  const themeToggleBtns = document.querySelectorAll('.theme-toggle');
  const themeIcons = document.querySelectorAll('.theme-icon');
  
  // SVG paths for Sun (Light Mode) and Moon (Dark Mode)
  const sunPath = "M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z";
  const moonPath = "M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z";

  let currentTheme = localStorage.getItem('theme') || 'light';

  const applyTheme = (theme) => {
    if (theme === 'dark') {
      document.documentElement.classList.add('dark');
      themeIcons.forEach(icon => {
        if (icon.tagName.toLowerCase() === 'path') {
          icon.setAttribute('d', sunPath);
        }
      });
      themeToggleBtns.forEach(btn => {
        const textSpan = btn.querySelector('.theme-text');
        if (textSpan) textSpan.textContent = 'LIGHT';
      });
    } else {
      document.documentElement.classList.remove('dark');
      themeIcons.forEach(icon => {
        if (icon.tagName.toLowerCase() === 'path') {
          icon.setAttribute('d', moonPath);
        }
      });
      themeToggleBtns.forEach(btn => {
        const textSpan = btn.querySelector('.theme-text');
        if (textSpan) textSpan.textContent = 'DARK';
      });
    }
  };

  applyTheme(currentTheme);

  themeToggleBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      currentTheme = currentTheme === 'light' ? 'dark' : 'light';
      localStorage.setItem('theme', currentTheme);
      applyTheme(currentTheme);
    });
  });

  // --- Language Toggle Logic ---
  const langToggleBtns = document.querySelectorAll('.lang-toggle');
  
  let currentLang = localStorage.getItem('lang') || 'en';

  const applyLanguage = (lang) => {
    // 1. Update Direction and Classes
    if (lang === 'ar') {
      document.documentElement.setAttribute('dir', 'rtl');
      document.documentElement.lang = 'ar';
      document.documentElement.classList.add('lang-ar');
    } else {
      document.documentElement.setAttribute('dir', 'ltr');
      document.documentElement.lang = 'en';
      document.documentElement.classList.remove('lang-ar');
    }

    // Update all language toggle buttons' texts
    langToggleBtns.forEach(btn => {
      const langText = btn.querySelector('.lang-text') || btn;
      langText.textContent = lang === 'ar' ? 'EN' : 'AR';
    });

    // 2. Translate Text Content
    const elements = document.querySelectorAll('[data-i18n]');
    elements.forEach(el => {
      const key = el.getAttribute('data-i18n');
      if (translations[lang] && translations[lang][key]) {
        el.textContent = translations[lang][key];
      }
    });

    // 3. Translate Placeholders
    const placeholderElements = document.querySelectorAll('[data-i18n-placeholder]');
    placeholderElements.forEach(el => {
      const key = el.getAttribute('data-i18n-placeholder');
      if (translations[lang] && translations[lang][key]) {
        el.setAttribute('placeholder', translations[lang][key]);
      }
    });

    // 4. Update dropdown inputs text values to match translated options
    const dropdownInputs = document.querySelectorAll('.dropdown-search-input');
    dropdownInputs.forEach(input => {
      const selectedVal = input.getAttribute('data-selected-value');
      if (selectedVal) {
        const parent = input.closest('.custom-searchable-dropdown');
        if (parent) {
          const matchedOpt = parent.querySelector(`.dropdown-option[data-value="${selectedVal}"]`);
          if (matchedOpt) {
            input.value = matchedOpt.textContent;
          }
        }
      }
    });
  };

  applyLanguage(currentLang);

  langToggleBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      currentLang = currentLang === 'en' ? 'ar' : 'en';
      localStorage.setItem('lang', currentLang);
      applyLanguage(currentLang);
    });
  });

  // --- Mobile Menu Logic ---
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileMenuClose = document.getElementById('mobile-menu-close');
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileLinks = document.querySelectorAll('.mobile-link');

  const openMobileMenu = () => {
    mobileMenu.classList.add('open');
    mobileMenu.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden'; // Prevent scrolling
  };

  const closeMobileMenu = () => {
    mobileMenu.classList.remove('open');
    mobileMenu.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  };

  if (mobileMenuBtn && mobileMenuClose && mobileMenu) {
    mobileMenuBtn.addEventListener('click', openMobileMenu);
    mobileMenuClose.addEventListener('click', closeMobileMenu);
    
    mobileLinks.forEach(link => {
      link.addEventListener('click', closeMobileMenu);
    });
  }

  // --- Cart Drawer System Logic ---
  const cartDrawer = document.getElementById('cart-drawer');
  const cartDrawerOverlay = document.getElementById('cart-drawer-overlay');
  const cartDrawerClose = document.getElementById('cart-drawer-close');
  const cartDrawerItems = document.getElementById('cart-drawer-items');
  const cartDrawerSubtotal = document.getElementById('cart-drawer-subtotal');
  const cartIconBtns = document.querySelectorAll('a[aria-label="Cart"]');

  const openCartDrawer = () => {
    if (cartDrawer && cartDrawerOverlay) {
      renderCartDrawerItems();
      cartDrawerOverlay.classList.remove('opacity-0', 'pointer-events-none');
      cartDrawerOverlay.classList.add('opacity-100', 'pointer-events-auto');
      cartDrawer.classList.add('open');
      document.body.style.overflow = 'hidden';
    }
  };

  const closeCartDrawer = () => {
    if (cartDrawer && cartDrawerOverlay) {
      cartDrawerOverlay.classList.remove('opacity-100', 'pointer-events-auto');
      cartDrawerOverlay.classList.add('opacity-0', 'pointer-events-none');
      cartDrawer.classList.remove('open');
      document.body.style.overflow = '';
    }
  };

  if (cartDrawerClose && cartDrawerOverlay) {
    cartDrawerClose.addEventListener('click', closeCartDrawer);
    cartDrawerOverlay.addEventListener('click', closeCartDrawer);
  }

  cartIconBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      openCartDrawer();
    });
  });

  const getProductPrice = (productId) => {
    if (productId === 'oud-al-balghiti') return 450;
    if (productId === 'oud-lotion') return 97;
    if (productId === 'oud-shower-gel') return 67;
    if (productId === 'oud-sample') return 15;
    if (productId === 'best-sellers-trio') return 950;
    if (productId === 'oud-archive-trio') return 1100;
    if (productId === 'custom-trio-pack') return 950;
    return 450;
  };

  const renderCartDrawerItems = () => {
    if (!cartDrawerItems) return;
    
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    cartDrawerItems.innerHTML = '';
    
    const lang = localStorage.getItem('lang') || 'en';
    
    if (cart.length === 0) {
      const emptyMsg = document.createElement('div');
      emptyMsg.className = "flex flex-col items-center justify-center h-48 text-[var(--t-text-muted)] font-mono text-xs uppercase tracking-widest";
      emptyMsg.textContent = lang === 'ar' ? 'سلتك فارغة.' : 'Your cart is empty.';
      cartDrawerItems.appendChild(emptyMsg);
      if (cartDrawerSubtotal) cartDrawerSubtotal.textContent = '0 DH';
      return;
    }
    
    let subtotal = 0;
    
    cart.forEach((item, index) => {
      const price = getProductPrice(item.id);
      const itemTotal = price * item.quantity;
      subtotal += itemTotal;
      
      const itemEl = document.createElement('div');
      itemEl.className = "flex gap-4 pb-6 border-b border-[var(--t-border-subtle)] items-start justify-between";
      
      let imgUrl = themeUri + "/assets/images/bottle-oud.png";
      if (item.id === 'oud-lotion') imgUrl = themeUri + "/assets/images/rec-lotion.png";
      if (item.id === 'oud-shower-gel') imgUrl = themeUri + "/assets/images/rec-shower.png";
      if (item.id === 'oud-sample') imgUrl = themeUri + "/assets/images/note-oud.png";
      if (item.id === 'best-sellers-trio' || item.id === 'oud-archive-trio' || item.id === 'custom-trio-pack') imgUrl = themeUri + "/assets/images/discovery-set.png";
      
      itemEl.innerHTML = `
        <div class="flex gap-4 items-center">
          <div class="w-16 h-16 bg-[var(--t-bg-secondary)] border border-[var(--t-border-subtle)] flex items-center justify-center p-2 rounded-sm overflow-hidden flex-shrink-0">
            <img src="${imgUrl}" alt="${item.name}" class="max-h-full max-w-full object-contain">
          </div>
          <div class="flex flex-col font-mono text-[0.65rem] tracking-wider uppercase text-[var(--t-text)]">
            <span class="font-bold">${item.name}</span>
            <span class="text-[var(--t-text-muted)] lowercase">${item.size ? item.size : ''}</span>
            ${item.id === 'custom-trio-pack' ? 
              `<span class="text-[var(--t-text-soft)] text-[0.6rem] mt-1 normal-case leading-tight block">${lang === 'ar' ? 'مكونات المجموعة:' : 'Scents included:'}</span>
               <ul class="list-disc list-inside text-[var(--t-text-soft)] text-[0.55rem] normal-case mt-0.5 pl-1 leading-normal">
                 ${item.personalization.split(', ').map(scent => `<li>${scent}</li>`).join('')}
               </ul>` : 
              (item.personalization ? `<span class="text-[var(--t-text-soft)] text-[0.6rem] mt-1 normal-case leading-tight">${lang === 'ar' ? 'مخصص لـ' : 'For'}: "${item.personalization}"</span>` : '')
            }
            
            <div class="flex items-center gap-2 mt-2 border border-[var(--t-border-subtle)] w-max p-1 bg-[var(--t-bg-secondary)]">
              <button class="px-1.5 hover:opacity-75 cursor-pointer font-bold" onclick="updateItemQty(${index}, -1)">−</button>
              <span class="px-1 text-[var(--t-text-soft)]">${item.quantity}</span>
              <button class="px-1.5 hover:opacity-75 cursor-pointer font-bold" onclick="updateItemQty(${index}, 1)">+</button>
            </div>
          </div>
        </div>
        <div class="flex flex-col items-end gap-2 font-mono text-[0.65rem]">
          <span class="font-bold text-[var(--t-text)]">${itemTotal} DH</span>
          <button class="underline hover:text-[var(--t-text)] text-[var(--t-text-muted)] cursor-pointer tracking-wider" onclick="removeItemFromCart(${index})">${lang === 'ar' ? 'إزالة' : 'REMOVE'}</button>
        </div>
      `;
      cartDrawerItems.appendChild(itemEl);
    });
    
    if (cartDrawerSubtotal) {
      cartDrawerSubtotal.textContent = `${subtotal} DH`;
    }
  };

  window.updateItemQty = (index, delta) => {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    if (!cart[index]) return;
    
    cart[index].quantity += delta;
    if (cart[index].quantity <= 0) {
      cart.splice(index, 1);
    }
    
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartCounts();
    renderCartDrawerItems();
  };

  window.removeItemFromCart = (index) => {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.splice(index, 1);
    
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartCounts();
    renderCartDrawerItems();
  };

  // --- Cart System Logic ---
  const updateCartCounts = () => {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const totalQty = cart.reduce((total, item) => total + item.quantity, 0);
    const cartSpans = document.querySelectorAll('a[aria-label="Cart"] span');
    cartSpans.forEach(span => {
      span.textContent = `(${totalQty})`;
    });
  };

  const showLuxuryToast = (productName) => {
    const existingToast = document.getElementById('luxury-toast');
    if (existingToast) existingToast.remove();
    
    const toast = document.createElement('div');
    toast.id = 'luxury-toast';
    toast.className = "fixed bottom-8 right-8 z-50 bg-[#3c3c3c] dark:bg-[#eaeaea] text-white dark:text-black px-6 py-4 border border-t-[var(--t-border-subtle)] shadow-xl font-mono text-[0.65rem] tracking-widest uppercase transition-all duration-500 transform translate-y-10 opacity-0 rounded-sm";
    
    const lang = localStorage.getItem('lang') || 'en';
    if (lang === 'ar') {
      toast.textContent = `تمت إضافة [${productName}] إلى السلة.`;
      toast.style.right = 'auto';
      toast.style.left = '2rem';
    } else {
      toast.textContent = `[${productName}] added to cart.`;
    }
    
    document.body.appendChild(toast);
    
    setTimeout(() => {
      toast.classList.remove('translate-y-10', 'opacity-0');
      toast.classList.add('translate-y-0', 'opacity-100');
    }, 10);
    
    setTimeout(() => {
      toast.classList.remove('translate-y-0', 'opacity-100');
      toast.classList.add('translate-y-10', 'opacity-0');
      setTimeout(() => toast.remove(), 500);
    }, 3000);
  };

  // Initialize count on load
  updateCartCounts();

  // 1. Primary Add to Cart Button (Oud Page Detail)
  const addToCartBtn = document.getElementById('add-to-cart-btn');
  if (addToCartBtn) {
    addToCartBtn.addEventListener('click', () => {
      const sizeSelect = document.getElementById('product-size');
      const qtySelect = document.getElementById('product-qty');
      const personalInput = document.getElementById('personalization-input');
      
      const size = sizeSelect ? sizeSelect.value : '50';
      const qty = qtySelect ? parseInt(qtySelect.value, 10) : 1;
      const personalization = personalInput ? personalInput.value.trim() : '';

      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      const prodName = 'OUD AL-BALGHITI';
      
      const existingItemIndex = cart.findIndex(item => 
        item.id === 'oud-al-balghiti' && 
        item.size === size && 
        item.personalization === personalization
      );
      
      if (existingItemIndex > -1) {
        cart[existingItemIndex].quantity += qty;
      } else {
        cart.push({
          id: 'oud-al-balghiti',
          name: prodName,
          size: size,
          quantity: qty,
          personalization: personalization
        });
      }

      localStorage.setItem('cart', JSON.stringify(cart));
      updateCartCounts();

      // Muted luxury button feedback
      const originalText = addToCartBtn.textContent;
      const originalI18n = addToCartBtn.getAttribute('data-i18n');
      
      addToCartBtn.textContent = 'ADDED';
      addToCartBtn.removeAttribute('data-i18n');
      addToCartBtn.style.opacity = '0.8';
      
      setTimeout(() => {
        addToCartBtn.textContent = originalText;
        if (originalI18n) {
          addToCartBtn.setAttribute('data-i18n', originalI18n);
          const currentLang = localStorage.getItem('lang') || 'en';
          if (translations[currentLang] && translations[currentLang][originalI18n]) {
            addToCartBtn.textContent = translations[currentLang][originalI18n];
          }
        }
        addToCartBtn.style.opacity = '';
      }, 1500);

      openCartDrawer();
    });
  }

  // 2. Recommendations Add to Cart Links
  const recAddToCartLinks = document.querySelectorAll('[data-i18n="recAddToCart"]');
  recAddToCartLinks.forEach((link, idx) => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      const prodId = idx === 0 ? 'oud-lotion' : 'oud-shower-gel';
      const prodName = idx === 0 ? 'OUD AL-BALGHITI BODY LOTION' : 'OUD AL-BALGHITI SHOWER GEL';
      
      const existingItemIndex = cart.findIndex(item => item.id === prodId);
      if (existingItemIndex > -1) {
        cart[existingItemIndex].quantity += 1;
      } else {
        cart.push({
          id: prodId,
          name: prodName,
          size: '237ml',
          quantity: 1,
          personalization: ''
        });
      }
      
      localStorage.setItem('cart', JSON.stringify(cart));
      updateCartCounts();
      
      openCartDrawer();
    });
  });

  // 3. Sample Add to Cart Links
  const addSampleLinks = document.querySelectorAll('[data-i18n="addSample"]');
  addSampleLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      const prodId = 'oud-sample';
      const prodName = 'OUD AL-BALGHITI SAMPLE';
      
      const existingItemIndex = cart.findIndex(item => item.id === prodId);
      if (existingItemIndex > -1) {
        cart[existingItemIndex].quantity += 1;
      } else {
        cart.push({
          id: prodId,
          name: prodName,
          size: '1.5ml',
          quantity: 1,
          personalization: ''
        });
      }
      
      localStorage.setItem('cart', JSON.stringify(cart));
      updateCartCounts();
      
      openCartDrawer();
    });
  });

  // 4. Proceed to Checkout Redirection Handler
  const checkoutBtns = document.querySelectorAll('[data-i18n="checkoutBtn"]');
  checkoutBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      if (cart.length > 0) {
        window.location.href = checkoutUrl;
      } else {
        const lang = localStorage.getItem('lang') || 'en';
        alert(lang === 'ar' ? 'سلتك فارغة حالياً.' : 'Your cart is currently empty.');
      }
    });
  });

  // --- Discovery Page Curated & Custom Packs Logic ---
  const addBestSellersBtn = document.getElementById('add-best-sellers-btn');
  const addOudArchiveBtn = document.getElementById('add-oud-archive-btn');

  const addPreMadePackToCart = (prodId, prodName, size) => {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const existingIndex = cart.findIndex(item => item.id === prodId);
    if (existingIndex > -1) {
      cart[existingIndex].quantity += 1;
    } else {
      cart.push({
        id: prodId,
        name: prodName,
        size: size,
        quantity: 1,
        personalization: ''
      });
    }
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartCounts();
    showLuxuryToast(prodName);
    openCartDrawer();
  };

  if (addBestSellersBtn) {
    addBestSellersBtn.addEventListener('click', () => {
      addPreMadePackToCart('best-sellers-trio', 'THE BEST SELLERS TRIO', '3x 50ml');
    });
  }

  if (addOudArchiveBtn) {
    addOudArchiveBtn.addEventListener('click', () => {
      addPreMadePackToCart('oud-archive-trio', 'THE OUD ARCHIVE', '3x 50ml');
    });
  }

  // Custom Trio Builder Interaction
  const dropdownInputs = document.querySelectorAll('.dropdown-search-input');
  const addCustomPackBtn = document.getElementById('add-custom-pack-btn');

  const updateSilhouetteUI = (slotNum, selectedScent) => {
    const slotEl = document.getElementById(`bottle-slot-${slotNum}`);
    if (!slotEl) return;
    const labelEl = slotEl.querySelector('.slot-label');
    const labelTextEl = slotEl.querySelector('.slot-label-text');
    const plusIcon = slotEl.querySelector('.plus-icon');

    if (selectedScent) {
      plusIcon.classList.add('hidden');
      labelEl.classList.remove('hidden');
      labelTextEl.textContent = selectedScent;
      slotEl.style.opacity = '1';
      slotEl.style.borderStyle = 'solid';
    } else {
      plusIcon.classList.remove('hidden');
      labelEl.classList.add('hidden');
      slotEl.style.opacity = '0.4';
      slotEl.style.borderStyle = 'dashed';
    }
  };

  const checkBuilderSelections = () => {
    let allSelected = true;
    const selectedScents = [];

    dropdownInputs.forEach(input => {
      const selectedValue = input.getAttribute('data-selected-value');
      if (!selectedValue) {
        allSelected = false;
      } else {
        selectedScents.push(`Inspired by ${selectedValue}`);
      }
    });

    if (addCustomPackBtn) {
      if (allSelected) {
        addCustomPackBtn.disabled = false;
        addCustomPackBtn.classList.remove('bg-gray-300', 'dark:bg-neutral-800', 'text-gray-500', 'dark:text-neutral-500', 'cursor-not-allowed');
        addCustomPackBtn.classList.add('bg-[#3c3c3c]', 'dark:bg-[#eaeaea]', 'text-white', 'dark:text-black', 'hover:opacity-90', 'cursor-pointer');
      } else {
        addCustomPackBtn.disabled = true;
        addCustomPackBtn.classList.add('bg-gray-300', 'dark:bg-neutral-800', 'text-gray-500', 'dark:text-neutral-500', 'cursor-not-allowed');
        addCustomPackBtn.classList.remove('bg-[#3c3c3c]', 'dark:bg-[#eaeaea]', 'text-white', 'dark:text-black', 'hover:opacity-90', 'cursor-pointer');
      }
    }

    return { allSelected, selectedScents };
  };

  dropdownInputs.forEach(input => {
    const parent = input.closest('.custom-searchable-dropdown');
    if (!parent) return;
    const panel = parent.querySelector('.dropdown-panel');
    const options = panel.querySelectorAll('.dropdown-option');
    const slotNum = parent.getAttribute('data-slot');

    input.addEventListener('focus', () => {
      document.querySelectorAll('.dropdown-panel').forEach(p => p.classList.add('hidden'));
      panel.classList.remove('hidden');
      filterOptions(input.value);
    });

    input.addEventListener('input', (e) => {
      panel.classList.remove('hidden');
      filterOptions(e.target.value);
    });

    function filterOptions(query) {
      const q = query.trim().toLowerCase();
      options.forEach(opt => {
        const text = opt.textContent.toLowerCase();
        if (text.includes(q)) {
          opt.style.display = 'block';
        } else {
          opt.style.display = 'none';
        }
      });
    }

    options.forEach(opt => {
      opt.addEventListener('click', (e) => {
        e.stopPropagation();
        const value = opt.getAttribute('data-value');
        const text = opt.textContent;
        
        input.value = text;
        input.setAttribute('data-selected-value', value);
        
        panel.classList.add('hidden');
        
        updateSilhouetteUI(slotNum, value);
        checkBuilderSelections();
      });
    });

    input.addEventListener('blur', () => {
      setTimeout(() => {
        const currentVal = input.getAttribute('data-selected-value');
        if (currentVal) {
          const matchedOpt = Array.from(options).find(opt => opt.getAttribute('data-value') === currentVal);
          if (matchedOpt) {
            input.value = matchedOpt.textContent;
          }
        } else {
          input.value = '';
          updateSilhouetteUI(slotNum, '');
        }
        panel.classList.add('hidden');
        checkBuilderSelections();
      }, 250);
    });
  });

  document.addEventListener('click', (e) => {
    if (!e.target.closest('.custom-searchable-dropdown')) {
      document.querySelectorAll('.dropdown-panel').forEach(p => p.classList.add('hidden'));
    }
  });

  if (addCustomPackBtn) {
    addCustomPackBtn.addEventListener('click', () => {
      const { allSelected, selectedScents } = checkBuilderSelections();
      if (!allSelected) return;

      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      const prodId = 'custom-trio-pack';
      const prodName = 'CUSTOM TRIO PACK';
      const personalizationStr = selectedScents.join(', ');

      const existingIndex = cart.findIndex(item => 
        item.id === prodId && 
        item.personalization === personalizationStr
      );

      if (existingIndex > -1) {
        cart[existingIndex].quantity += 1;
      } else {
        cart.push({
          id: prodId,
          name: prodName,
          size: '3x 50ml',
          quantity: 1,
          personalization: personalizationStr
        });
      }

      localStorage.setItem('cart', JSON.stringify(cart));
      updateCartCounts();
      showLuxuryToast(prodName);
      
      dropdownInputs.forEach(input => {
        input.value = '';
        input.setAttribute('data-selected-value', '');
        const parent = input.closest('.custom-searchable-dropdown');
        if (parent) {
          const slotNum = parent.getAttribute('data-slot');
          updateSilhouetteUI(slotNum, '');
        }
      });
      checkBuilderSelections();

      openCartDrawer();
    });
  }
});

  </script>

  <?php wp_footer(); ?>
</body>
</html>
