<?php
if (!isset($pageTitle)) {
    $pageTitle = "Al-Habib Tours & Travels | Lucknow Umrah Packages 2026 & Complete Guidance";
}
if (!isset($pageDescription)) {
    $pageDescription = "Official portal of Al-Habib Tours & Travels, Bangarmau Unnao (UP). Lucknow & Delhi Umrah packages starting ₹99,000, Hafiz Yusuf Malik group departures, step-by-step Umrah guide with Duas, and verified Miqat rules.";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Umrah packages Lucknow, Umrah packages 2026, Lucknow to Makkah Umrah, Hafiz Yusuf Malik Bangarmau, Al Habib Tours Unnao, Miqat rules air travel, Dam rulings Umrah, Step by step Umrah guide Duas, Tan'im Masjid Aisha rules">
    <meta name="author" content="Sahil Khan (Software Engineer)">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="https://alhabibtours.com/">

    <!-- Open Graph Social Meta Tags -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:url" content="https://alhabibtours.com/">
    <meta property="og:site_name" content="Al-Habib Tours & Travels">
    <meta property="og:image" content="https://alhabibtours.com/assets/images/kaaba_1.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="twitter:image" content="https://alhabibtours.com/assets/images/kaaba_1.jpg">

    <!-- Schema.org JSON-LD Structured Data for LocalBusiness & TravelAgency -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "TravelAgency",
      "name": "Al-Habib Tours & Travels",
      "image": "https://alhabibtours.com/assets/images/kaaba_1.jpg",
      "@id": "https://alhabibtours.com/",
      "url": "https://alhabibtours.com/",
      "telephone": "+917860432995",
      "priceRange": "₹99,000 - ₹1,39,000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Lucknow Road",
        "addressLocality": "Bangarmau",
        "addressRegion": "Unnao, Uttar Pradesh",
        "postalCode": "209868",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 26.9113,
        "longitude": 80.2081
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday",
          "Sunday"
        ],
        "opens": "08:00",
        "closes": "22:00"
      },
      "sameAs": [
        "https://wa.me/917860432995"
      ]
    }
    </script>

    <!-- Schema.org FAQPage Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "What is the starting price for 15-day Umrah package from Lucknow?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Al-Habib Tours & Travels offers benchmarked 15-day Lucknow Umrah packages starting from ₹99,000 for Economy, ₹1,19,000 for Comfort (Most Popular), and ₹1,39,000 for Premium VIP Luxury."
        }
      }, {
        "@type": "Question",
        "name": "What is the Miqat boundary for flight departures from India to Jeddah?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Pilgrims flying directly from India to Jeddah pass the parallel Miqat boundary (Yalamlam / Al-Juhfah) in mid-air approximately 20 to 30 minutes before reaching Jeddah airport. Ihram garments must be put on before boarding or in flight before crossing this point."
        }
      }]
    }
    </script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Custom Style System -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/rtl.css">
</head>
<body>

<!-- Floating Quick Action Buttons (WhatsApp & Call) -->
<div class="floating-contact-widget">
    <a href="https://wa.me/917860432995?text=Assalamu%20Alaikum%20Hafiz%20Yusuf%20Malik%20Sahab,%20I%20have%20an%20Umrah/Hajj%20query." 
       target="_blank" class="floating-btn floating-btn-wa shadow-lg" title="WhatsApp Us">
        <i class="bi bi-whatsapp"></i>
    </a>
    <a href="tel:+917860432995" class="floating-btn floating-btn-phone shadow-lg" title="Call Us Direct">
        <i class="bi bi-telephone-fill"></i>
    </a>
</div>

<!-- Header Master Wrapper (Clean Responsive Navbar) -->
<header class="master-header sticky-top">
    <!-- Top Contact Strip -->
    <div class="top-info-strip py-2">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 small">
                <!-- Location & Guide -->
                <div class="d-flex align-items-center flex-wrap gap-3">
                    <span>
                        <i class="bi bi-geo-alt-fill text-gold me-1"></i>
                        <span class="lang-text lang-en">Lucknow Road, Bangarmau, Unnao, UP</span>
                        <span class="lang-text lang-hi d-none">लखनऊ रोड, बांगरमऊ, उन्नाव, यू.पी.</span>
                        <span class="lang-text lang-ur d-none" dir="rtl">لکھنؤ روڈ، باگرمئو، اناؤ، یو پی</span>
                    </span>
                    <span class="border-start border-secondary-subtle ps-3">
                        <i class="bi bi-person-fill text-gold me-1"></i>
                        <span class="lang-text lang-en">Lead Guide: <strong>Hafiz Yusuf Malik</strong></span>
                        <span class="lang-text lang-hi d-none">गाइड: <strong>हाफ़िज़ युसुफ़ मलिक</strong></span>
                        <span class="lang-text lang-ur d-none" dir="rtl">گائیڈ: <strong>حافظ یوسف ملک</strong></span>
                    </span>
                </div>

                <!-- Call & WhatsApp Support -->
                <div class="d-flex align-items-center gap-3">
                    <a href="tel:+917860432995" class="text-decoration-none fw-bold">
                        <i class="bi bi-telephone-fill text-gold me-1"></i> +91 7860432995
                    </a>
                    <a href="https://wa.me/917860432995" target="_blank" class="fw-bold text-decoration-none text-emerald-medium">
                        <i class="bi bi-whatsapp me-1"></i> WhatsApp Support
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar (Clean HTML Standard Paths) -->
    <nav class="navbar navbar-expand-xl bg-white navbar-light py-2 shadow-sm">
        <div class="container">
            <!-- Brand Logo -->
            <a class="navbar-brand d-flex align-items-center me-3" href="index.html">
                <div class="navbar-brand-logo rounded-circle me-2 d-flex align-items-center justify-content-center">
                    <i class="bi bi-moon-stars-fill text-dark fs-5"></i>
                </div>
                <div>
                    <span class="d-block fw-extrabold text-emerald-medium fs-5 leading-tight tracking-tight">AL-HABIB</span>
                    <span class="d-block text-gold small text-uppercase tracking-wider fw-bold fs-8">TOURS & TRAVELS</span>
                </div>
            </a>

            <!-- Mobile Toggler -->
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible Single-Line Nav Items -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-xl-0 ms-xl-2 gap-1">
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" href="index.html">
                            <i class="bi bi-house-door-fill me-1 text-emerald-medium"></i>
                            <span class="lang-text lang-en">Home</span>
                            <span class="lang-text lang-hi d-none">होम</span>
                            <span class="lang-text lang-ur d-none" dir="rtl">ہوم</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" href="umrah_guide.html">
                            <i class="bi bi-book-half me-1 text-emerald-medium"></i>
                            <span class="lang-text lang-en">Umrah Guide & Duas</span>
                            <span class="lang-text lang-hi d-none">उमराह गाइड व दुआएं</span>
                            <span class="lang-text lang-ur d-none" dir="rtl">طریقہ عمرہ و دعائیں</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" href="miqat.html">
                            <i class="bi bi-compass-fill me-1 text-emerald-medium"></i>
                            <span class="lang-text lang-en">Miqat Guide</span>
                            <span class="lang-text lang-hi d-none">मीक़ात गाइड</span>
                            <span class="lang-text lang-ur d-none" dir="rtl">رہنمائے میقات</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" href="tanim.html">
                            <i class="bi bi-geo-fill me-1 text-emerald-medium"></i>
                            <span class="lang-text lang-en">Tan'im & Al-Hill</span>
                            <span class="lang-text lang-hi d-none">तनीम व अल-हिल</span>
                            <span class="lang-text lang-ur d-none" dir="rtl">تنعیم و الحل</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" href="packages.html">
                            <i class="bi bi-box-seam-fill me-1 text-emerald-medium"></i>
                            <span class="lang-text lang-en">Packages</span>
                            <span class="lang-text lang-hi d-none">टूर पैकेज</span>
                            <span class="lang-text lang-ur d-none" dir="rtl">ٹور پیکجز</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" href="contact.html">
                            <i class="bi bi-envelope-fill me-1 text-emerald-medium"></i>
                            <span class="lang-text lang-en">Contact</span>
                            <span class="lang-text lang-hi d-none">संपर्क</span>
                            <span class="lang-text lang-ur d-none" dir="rtl">رابطہ</span>
                        </a>
                    </li>
                </ul>

                <!-- Language Selector & Book Button (No Wrap) -->
                <div class="d-flex align-items-center gap-2 flex-nowrap mt-2 mt-xl-0">
                    <div class="dropdown">
                        <button class="btn btn-outline-dark btn-sm dropdown-toggle fw-bold px-3 py-2 text-nowrap" type="button" id="langDropdown" data-bs-toggle="dropdown">
                            <i class="bi bi-translate me-1"></i> <span id="currentLangText">English</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow-lg rounded-3 border-0">
                            <li><a class="dropdown-item lang-select-btn px-3 py-2 fw-semibold" href="#" data-lang="en">🇬🇧 English</a></li>
                            <li><a class="dropdown-item lang-select-btn px-3 py-2 fw-semibold" href="#" data-lang="hi">🇮🇳 हिन्दी (Hindi)</a></li>
                            <li><a class="dropdown-item lang-select-btn px-3 py-2 fw-semibold" href="#" data-lang="ur">🇵🇰/🇮🇳 اردو (Urdu)</a></li>
                        </ul>
                    </div>

                    <a href="https://wa.me/917860432995?text=Assalamu%20Alaikum%20Hafiz%20Yusuf%20Malik%20Sahab,%20I%20want%20to%20book%20an%20Umrah%20package." 
                       target="_blank" class="btn btn-gold btn-sm fw-bold px-3 py-2 shadow text-nowrap">
                        <i class="bi bi-whatsapp me-1"></i> Book Umrah
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
