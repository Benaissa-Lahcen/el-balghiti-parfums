/**
 * El Balghiti Parfums - Application Logic
 * Handles Theme (Light/Dark) and Language (EN/AR) toggles
 */

const translations = {
  en: {
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
    addToCart: "ADD TO CART"
  },
  ar: {
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
    addToCart: "أضف إلى السلة"
  }
};

document.addEventListener('DOMContentLoaded', () => {
  // --- Theme Toggle Logic ---
  const themeToggleBtn = document.getElementById('theme-toggle');
  const themeIcon = document.getElementById('theme-icon');
  
  // SVG paths for Sun (Light Mode) and Moon (Dark Mode)
  const sunPath = "M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z";
  const moonPath = "M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z";

  let currentTheme = localStorage.getItem('theme') || 'light';

  const applyTheme = (theme) => {
    if (theme === 'dark') {
      document.documentElement.classList.add('dark');
      themeIcon.setAttribute('d', sunPath);
    } else {
      document.documentElement.classList.remove('dark');
      themeIcon.setAttribute('d', moonPath);
    }
  };

  applyTheme(currentTheme);

  themeToggleBtn.addEventListener('click', () => {
    currentTheme = currentTheme === 'light' ? 'dark' : 'light';
    localStorage.setItem('theme', currentTheme);
    applyTheme(currentTheme);
  });

  // --- Language Toggle Logic ---
  const langToggleBtn = document.getElementById('lang-toggle');
  const langText = document.getElementById('lang-text');
  
  let currentLang = localStorage.getItem('lang') || 'en';

  const applyLanguage = (lang) => {
    // 1. Update Direction and Classes
    if (lang === 'ar') {
      document.documentElement.setAttribute('dir', 'rtl');
      document.documentElement.lang = 'ar';
      document.documentElement.classList.add('lang-ar');
      langText.textContent = 'EN';
    } else {
      document.documentElement.setAttribute('dir', 'ltr');
      document.documentElement.lang = 'en';
      document.documentElement.classList.remove('lang-ar');
      langText.textContent = 'AR';
    }

    // 2. Translate Text Content
    const elements = document.querySelectorAll('[data-i18n]');
    elements.forEach(el => {
      const key = el.getAttribute('data-i18n');
      if (translations[lang] && translations[lang][key]) {
        el.textContent = translations[lang][key];
      }
    });
  };

  applyLanguage(currentLang);

  langToggleBtn.addEventListener('click', () => {
    currentLang = currentLang === 'en' ? 'ar' : 'en';
    localStorage.setItem('lang', currentLang);
    applyLanguage(currentLang);
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
});
