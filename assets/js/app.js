/**
 * El Balghiti Parfums - Application Logic
 * Handles Theme (Light/Dark) and Language (EN/AR) toggles
 */

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
    accessibilityTitlePage: "Accessibility Statement — El Balghiti Parfums",
    accessibilityHeader: "ACCESSIBILITY STATEMENT",
    accessibilitySection1Title: "1. DIGITAL INCLUSION",
    accessibilitySection1Body: "El Balghiti Parfums is dedicated to ensuring digital accessibility for all visitors. We continuously optimize our web experience to match modern accessibility guidelines."
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
    accessibilityTitlePage: "بيان إمكانية الوصول — عطور البلغيتي",
    accessibilityHeader: "بيان إمكانية الوصول",
    accessibilitySection1Title: "١. الدمج الرقمي",
    accessibilitySection1Body: "تلتزم عطور البلغيتي بضمان إمكانية الوصول الرقمي لجميع الزوار. نحن نواصل تحسين تجربة موقعنا لتتوافق مع إرشادات إمكانية الوصول الحديثة."
  }
};

document.addEventListener('DOMContentLoaded', () => {
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
      
      let imgUrl = "assets/images/bottle-oud.png";
      if (item.id === 'oud-lotion') imgUrl = "assets/images/rec-lotion.png";
      if (item.id === 'oud-shower-gel') imgUrl = "assets/images/rec-shower.png";
      if (item.id === 'oud-sample') imgUrl = "assets/images/note-oud.png";
      
      itemEl.innerHTML = `
        <div class="flex gap-4 items-center">
          <div class="w-16 h-16 bg-[var(--t-bg-secondary)] border border-[var(--t-border-subtle)] flex items-center justify-center p-2 rounded-sm overflow-hidden flex-shrink-0">
            <img src="${imgUrl}" alt="${item.name}" class="max-h-full max-w-full object-contain">
          </div>
          <div class="flex flex-col font-mono text-[0.65rem] tracking-wider uppercase text-[var(--t-text)]">
            <span class="font-bold">${item.name}</span>
            <span class="text-[var(--t-text-muted)] lowercase">${item.size ? item.size : ''}</span>
            ${item.personalization ? `<span class="text-[var(--t-text-soft)] text-[0.6rem] mt-1 normal-case leading-tight">${lang === 'ar' ? 'مخصص لـ' : 'For'}: "${item.personalization}"</span>` : ''}
            
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
        window.location.href = 'checkout.html';
      } else {
        const lang = localStorage.getItem('lang') || 'en';
        alert(lang === 'ar' ? 'سلتك فارغة حالياً.' : 'Your cart is currently empty.');
      }
    });
  });
});
