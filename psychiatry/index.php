<?php
$page_title = "Psychiatrist in Monticello, MN | Board-Certified Psychiatric Care & Medication Management";
$page_description = "Looking for a psychiatrist in Monticello, MN? Tranquil Minds provides compassionate, board-certified psychiatric evaluations and personalized medication management for depression, anxiety, ADHD, bipolar, and PTSD. Most insurances accepted.";
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://tranquilmindsmentalhealth.com/psychiatry/">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../assets/logo/Tranquil-logo.png">
    <link rel="shortcut icon" type="image/png" href="../assets/logo/Tranquil-logo.png">
    <link rel="apple-touch-icon" href="../assets/logo/Tranquil-logo.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#502882',
                        'primary-dark': '#3b1d62',
                        'primary-light': '#6c3ba8',
                        'soft-purple': '#F3EFFF',
                        'cream': '#FAFAFF',
                        'brand-dark': '#0B0612',
                    },
                    fontFamily: {
                        sans: ['Quicksand', 'sans-serif'],
                        heading: ['Bauhaus Soft', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        @font-face {
            font-family: "Bauhaus Soft";
            src: url("../assets/BAUHAUS SOFT/BauhausSoftDisplay2.0-Regular.woff2") format("woff2"),
                 url("../assets/BAUHAUS SOFT/BauhausSoftDisplay2.0-Regular.woff") format("woff");
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        .font-heading {
            font-family: "Bauhaus Soft", cursive, sans-serif;
        }

        input:focus, select:focus, textarea:focus {
            box-shadow: 0 0 0 3px rgba(80, 40, 130, 0.15);
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    <!-- Google reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="bg-cream font-sans text-primary min-h-screen flex flex-col selection:bg-primary/20 selection:text-primary antialiased pb-16 lg:pb-0">

    <!-- Top Announcement Bar -->
    <div class="bg-brand-dark text-white/90 text-xs py-2 px-4 border-b border-white/10 hidden md:block">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center gap-2">
                <span class="inline-block w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                <span class="font-semibold text-purple-200">Now Accepting New Patients in Monticello &amp; Across Minnesota</span>
                <span class="text-white/30">•</span>
                <span class="text-white/80">In-Person &amp; Virtual Appointments</span>
            </div>
            <div class="flex items-center gap-4 text-white/80">
                <span class="flex items-center gap-1.5 text-white/90">
                    <svg class="w-3.5 h-3.5 text-purple-300" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    In-Network Insurance &amp; Medicare
                </span>
                <a href="tel:+16124298280" class="text-white font-bold hover:text-purple-300 transition-colors">Call: (612) 429-8280</a>
            </div>
        </div>
    </div>

    <!-- Header / Navigation -->
    <header class="w-full bg-primary/95 backdrop-blur-md border-b border-white/10 sticky top-0 z-40 py-2.5 sm:py-3 transition-all shadow-md">
        <div class="container mx-auto px-3 sm:px-6 flex items-center justify-between gap-2 sm:gap-4">
            
            <!-- Brand Logo & Title -->
            <a href="../index.php" class="flex items-center gap-2 sm:gap-2.5 md:gap-3 group flex-shrink-0">
                <img src="../assets/logo/Tranquil-logo.png" alt="Tranquil Minds Mental Health" class="h-7 sm:h-9 md:h-10 w-auto object-contain filter brightness-0 invert transition-transform group-hover:scale-105">
                <div class="flex flex-col">
                    <span class="font-heading text-white font-bold text-base sm:text-lg md:text-xl xl:text-2xl tracking-tight leading-none group-hover:text-purple-200 transition-colors">Tranquil Minds</span>
                    <span class="text-[9px] sm:text-[10px] md:text-[11px] text-purple-200 font-semibold tracking-wider uppercase mt-0.5 hidden xs:block">Psychiatry &amp; Medication</span>
                </div>
            </a>

            <!-- Section Navigation (Desktop: lg+) -->
            <nav class="hidden lg:flex items-center gap-3.5 xl:gap-6 2xl:gap-7 font-bold text-white/90 text-xs xl:text-sm whitespace-nowrap">
                <a href="#services" class="hover:text-purple-200 transition-colors py-1">Services</a>
                <a href="#conditions" class="hover:text-purple-200 transition-colors py-1">Conditions</a>
                <a href="#why-us" class="hover:text-purple-200 transition-colors py-1">Why Us</a>
                <a href="#doctor" class="hover:text-purple-200 transition-colors py-1">Provider</a>
                <a href="#reviews" class="hover:text-purple-200 transition-colors py-1">Reviews</a>
                <a href="#insurance" class="hover:text-purple-200 transition-colors py-1">Insurance</a>
                <a href="#faq" class="hover:text-purple-200 transition-colors py-1">FAQ</a>
            </nav>

            <!-- Call Out CTA & Mobile Trigger -->
            <div class="flex items-center gap-1.5 sm:gap-2.5 md:gap-3 flex-shrink-0">
                <!-- Phone Call Pill -->
                <a href="tel:+16124298280" class="inline-flex items-center gap-1.5 px-2.5 py-1.5 sm:px-3.5 sm:py-2 bg-white/15 hover:bg-white/25 text-white font-bold rounded-full transition-all text-[11px] sm:text-xs border border-white/20 shadow-sm flex-shrink-0">
                    <svg class="w-3.5 h-3.5 text-purple-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span class="hidden sm:inline">Call:</span> <span>(612) 429-8280</span>
                </a>

                <!-- Consultation CTA Button -->
                <a href="#consultation-form" class="hidden md:inline-flex items-center px-3.5 py-1.5 lg:px-4 lg:py-2 bg-white text-primary hover:bg-soft-purple font-bold rounded-full transition-all text-xs shadow-sm flex-shrink-0 whitespace-nowrap">
                    Book Consultation
                </a>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-toggle" type="button" class="lg:hidden p-1.5 sm:p-2 text-white hover:text-purple-200 focus:outline-none rounded-xl hover:bg-white/10 transition-colors flex-shrink-0" aria-label="Toggle Navigation Menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Drawer Overlay -->
    <div id="mobile-menu-drawer" class="fixed inset-0 z-50 flex justify-end bg-black/60 backdrop-blur-xs opacity-0 pointer-events-none transition-opacity duration-300">
        <div class="absolute inset-0 bg-transparent" id="mobile-menu-overlay-click"></div>
        <div class="relative w-80 max-w-[85vw] bg-white h-full shadow-2xl p-5 sm:p-6 flex flex-col justify-between transform translate-x-full transition-transform duration-300 overflow-y-auto">
            <div>
                <!-- Drawer Header -->
                <div class="flex items-center justify-between pb-4 border-b border-primary/10">
                    <div class="flex items-center gap-2">
                        <img src="../assets/logo/Tranquil-logo.png" alt="Tranquil Minds" class="h-7 w-auto">
                        <span class="font-heading text-primary font-bold text-lg">Tranquil Minds</span>
                    </div>
                    <button id="mobile-menu-close" type="button" class="p-1.5 text-primary hover:text-primary-dark rounded-lg hover:bg-primary/5 focus:outline-none" aria-label="Close menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Primary CTA inside drawer -->
                <div class="pt-4 pb-2">
                    <a href="#consultation-form" class="mobile-nav-link block w-full py-3 px-4 bg-primary text-white text-center font-bold rounded-xl shadow-md text-sm hover:bg-primary-dark transition-colors">
                        Request Free Consultation
                    </a>
                </div>

                <!-- Navigation List -->
                <nav class="flex flex-col gap-1 pt-2 font-bold text-sm text-primary/80">
                    <a href="#services" class="mobile-nav-link flex items-center justify-between py-2.5 px-3 rounded-xl hover:bg-soft-purple hover:text-primary transition-colors">
                        <span>Psychiatry Services</span>
                        <svg class="w-4 h-4 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                    <a href="#conditions" class="mobile-nav-link flex items-center justify-between py-2.5 px-3 rounded-xl hover:bg-soft-purple hover:text-primary transition-colors">
                        <span>Conditions We Treat</span>
                        <svg class="w-4 h-4 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                    <a href="#why-us" class="mobile-nav-link flex items-center justify-between py-2.5 px-3 rounded-xl hover:bg-soft-purple hover:text-primary transition-colors">
                        <span>Why Tranquil Minds</span>
                        <svg class="w-4 h-4 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                    <a href="#doctor" class="mobile-nav-link flex items-center justify-between py-2.5 px-3 rounded-xl hover:bg-soft-purple hover:text-primary transition-colors">
                        <span>Meet Provider (Roxanne)</span>
                        <svg class="w-4 h-4 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                    <a href="#reviews" class="mobile-nav-link flex items-center justify-between py-2.5 px-3 rounded-xl hover:bg-soft-purple hover:text-primary transition-colors">
                        <span>Patient Reviews (4.5★)</span>
                        <svg class="w-4 h-4 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                    <a href="#insurance" class="mobile-nav-link flex items-center justify-between py-2.5 px-3 rounded-xl hover:bg-soft-purple hover:text-primary transition-colors">
                        <span>Insurance &amp; Coverage</span>
                        <svg class="w-4 h-4 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                    <a href="#faq" class="mobile-nav-link flex items-center justify-between py-2.5 px-3 rounded-xl hover:bg-soft-purple hover:text-primary transition-colors">
                        <span>Frequently Asked Questions</span>
                        <svg class="w-4 h-4 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </nav>
            </div>

            <!-- Drawer Footer Contact -->
            <div class="pt-5 border-t border-primary/10 text-xs text-primary/70 space-y-2 mt-4">
                <a href="tel:+16124298280" class="flex items-center justify-center gap-2 py-2.5 bg-soft-purple text-primary font-bold rounded-xl text-center w-full">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    <span>Call (612) 429-8280</span>
                </a>
                <p class="text-center text-[11px] text-gray-500 pt-1">154 E Broadway St #2, Monticello, MN</p>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <main class="flex-grow">

        <!-- ================= HERO SECTION (STREAMLINED & CONCISE) ================= -->
        <section class="relative pt-12 pb-10 md:pt-20 md:pb-16 overflow-hidden bg-cover bg-center" style="background-image: linear-gradient(to bottom, rgba(15, 10, 25, 0.75), rgba(80, 40, 130, 0.85)), url('../assets/tranquilminds-hero-banner.webp');">
            <!-- Background Blurs -->
            <div class="absolute top-1/4 left-0 w-72 h-72 bg-primary/20 rounded-full blur-[100px] pointer-events-none"></div>
            <div class="absolute bottom-10 right-0 w-96 h-96 bg-primary/10 rounded-full blur-[120px] pointer-events-none"></div>

            <div class="container mx-auto px-4 sm:px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                    
                    <!-- Left: Clean Headline & Highlights (7 Cols) -->
                    <div class="lg:col-span-7 space-y-5 sm:space-y-6">
                        
                        <div class="space-y-3">
                            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-heading text-white leading-[1.12]">
                                Psychiatry &amp; Medication <br>
                                <span class="text-purple-300">in Monticello, MN.</span>
                            </h1>

                            <p class="text-base sm:text-lg text-white/90 leading-relaxed max-w-2xl font-medium">
                                Board-certified psychiatric evaluations and personalized medication management for depression, anxiety, ADHD, and mood disorders — tailored with care.
                            </p>
                        </div>

                        <!-- 4 Compact Highlight Cards -->
                        <div class="grid grid-cols-2 gap-3 pt-2">
                            <!-- Card 1 -->
                            <div class="bg-white/10 border border-white/10 p-3.5 rounded-2xl flex flex-col justify-between backdrop-blur-xs">
                                <div class="w-8 h-8 rounded-full bg-purple-500/25 flex items-center justify-center text-purple-300 mb-2">
                                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white text-xs sm:text-sm">Board-Certified</h4>
                                    <p class="text-[10px] sm:text-xs text-white/75 leading-snug mt-0.5 font-medium">APRN, PMHNP-BC Provider</p>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="bg-white/10 border border-white/10 p-3.5 rounded-2xl flex flex-col justify-between backdrop-blur-xs">
                                <div class="w-8 h-8 rounded-full bg-purple-500/25 flex items-center justify-center text-purple-300 mb-2">
                                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white text-xs sm:text-sm">60-Min Intakes</h4>
                                    <p class="text-[10px] sm:text-xs text-white/75 leading-snug mt-0.5 font-medium">Unhurried, attentive care</p>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="bg-white/10 border border-white/10 p-3.5 rounded-2xl flex flex-col justify-between backdrop-blur-xs">
                                <div class="w-8 h-8 rounded-full bg-purple-500/25 flex items-center justify-center text-purple-300 mb-2">
                                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white text-xs sm:text-sm">Insurance Covered</h4>
                                    <p class="text-[10px] sm:text-xs text-white/75 leading-snug mt-0.5 font-medium">Major plans &amp; Medicare</p>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="bg-white/10 border border-white/10 p-3.5 rounded-2xl flex flex-col justify-between backdrop-blur-xs">
                                <div class="w-8 h-8 rounded-full bg-purple-500/25 flex items-center justify-center text-purple-300 mb-2">
                                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white text-xs sm:text-sm">In-Person &amp; Virtual</h4>
                                    <p class="text-[10px] sm:text-xs text-white/75 leading-snug mt-0.5 font-medium">Monticello &amp; Minnesota-wide</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Right: Lead Capture Form Card (5 Cols) -->
                    <div class="lg:col-span-5 w-full scroll-mt-20 sm:scroll-mt-24" id="consultation-form">
                        <div class="bg-white p-5 sm:p-6 md:p-8 rounded-3xl shadow-xl border border-primary/10 relative">
                            <h3 class="text-xl sm:text-2xl font-heading text-primary font-bold mb-1">Request Consultation</h3>
                            <p class="text-[11px] sm:text-xs text-primary/80 font-semibold mb-4 leading-normal">Fill out this secure form. Our clinical team will reach out promptly to schedule your visit and verify insurance.</p>
                            
                            <form id="lead-form" class="space-y-3" accept-charset="UTF-8" action="https://app.formester.com/forms/iiVM0R9kD/submissions" method="POST">
                                <!-- Name -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    <div class="space-y-1">
                                        <label for="first-name" class="text-xs font-bold text-primary block">First Name *</label>
                                        <input type="text" id="first-name" name="first-name" required placeholder="First name"
                                            class="w-full px-3.5 py-2.5 bg-cream/60 border border-gray-200 rounded-xl focus:border-primary focus:ring-0 outline-none transition-all placeholder-gray-400 text-sm text-primary">
                                    </div>
                                    <div class="space-y-1">
                                        <label for="last-name" class="text-xs font-bold text-primary block">Last Name *</label>
                                        <input type="text" id="last-name" name="last-name" required placeholder="Last name"
                                            class="w-full px-3.5 py-2.5 bg-cream/60 border border-gray-200 rounded-xl focus:border-primary focus:ring-0 outline-none transition-all placeholder-gray-400 text-sm text-primary">
                                    </div>
                                </div>

                                <!-- Email & Phone -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    <div class="space-y-1">
                                        <label for="email" class="text-xs font-bold text-primary block">Email Address *</label>
                                        <input type="email" id="email" name="email" required placeholder="you@example.com"
                                            class="w-full px-3.5 py-2.5 bg-cream/60 border border-gray-200 rounded-xl focus:border-primary focus:ring-0 outline-none transition-all placeholder-gray-400 text-sm text-primary">
                                    </div>
                                    <div class="space-y-1">
                                        <label for="phone" class="text-xs font-bold text-primary block">Phone Number *</label>
                                        <input type="tel" id="phone" name="phone" required placeholder="(612) 000-0000"
                                            class="w-full px-3.5 py-2.5 bg-cream/60 border border-gray-200 rounded-xl focus:border-primary focus:ring-0 outline-none transition-all placeholder-gray-400 text-sm text-primary">
                                    </div>
                                </div>

                                <!-- Primary Concern -->
                                <div class="space-y-1">
                                    <label for="condition" class="text-xs font-bold text-primary block">Primary Concern *</label>
                                    <select id="condition" name="condition" required
                                        class="w-full px-3.5 py-2.5 bg-cream/60 border border-gray-200 rounded-xl focus:border-primary focus:ring-0 outline-none transition-all text-sm text-primary cursor-pointer">
                                        <option value="" disabled selected>Select primary concern...</option>
                                        <option value="Psychiatric Evaluation">Comprehensive Psychiatric Evaluation (New Patient)</option>
                                        <option value="Medication Management">Medication Management &amp; Optimization</option>
                                        <option value="Depression">Depression / Major Depressive Disorder</option>
                                        <option value="Anxiety">Anxiety / Panic Disorder / Social Anxiety</option>
                                        <option value="ADHD">ADHD / Focus Challenges (Teens &amp; Adults)</option>
                                        <option value="Bipolar Disorder">Bipolar Disorder / Mood Regulation</option>
                                        <option value="PTSD">PTSD / Trauma Recovery</option>
                                        <option value="OCD">OCD (Obsessive Compulsive)</option>
                                        <option value="TMS Therapy">TMS Therapy Consultation</option>
                                        <option value="Other">Other Consultation / General Inquiry</option>
                                    </select>
                                </div>

                                <!-- Insurance Provider -->
                                <div class="space-y-1">
                                    <label for="insurance" class="text-xs font-bold text-primary block">Insurance Provider (Optional)</label>
                                    <input type="text" id="insurance" name="insurance" placeholder="e.g. BCBS, Medicare, HealthPartners, Aetna"
                                        class="w-full px-3.5 py-2.5 bg-cream/60 border border-gray-200 rounded-xl focus:border-primary focus:ring-0 outline-none transition-all placeholder-gray-400 text-sm text-primary">
                                </div>

                                <!-- SMS Consent -->
                                <div class="flex items-start gap-2.5 pt-1">
                                    <div class="flex items-center h-5 mt-0.5">
                                        <input id="consent" name="consent" type="checkbox" required
                                            class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary accent-primary cursor-pointer">
                                    </div>
                                    <label for="consent" class="text-[10px] text-gray-600 font-medium leading-tight cursor-pointer select-none">
                                        I consent to receive SMS appointment updates and notifications from Tranquil Minds. Msg frequency varies. Reply STOP to opt out.
                                    </label>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit"
                                    class="g-recaptcha w-full py-3.5 bg-primary hover:bg-primary-dark text-white font-bold rounded-xl shadow-lg shadow-primary/15 active:scale-[0.99] transition-all text-base tracking-wide mt-2 cursor-pointer"
                                    data-sitekey="6LfpS4UtAAAAAJm8uR1NtbrBqhxTnCk-SLi5K3Dc"
                                    data-callback="onLeadFormSubmit"
                                    data-action="submit">
                                    Request Free Consultation
                                </button>
                            </form>
                            <script>
                                function onLeadFormSubmit(token) {
                                    const form = document.getElementById("lead-form");
                                    if (form.checkValidity()) {
                                        form.submit();
                                    } else {
                                        form.reportValidity();
                                    }
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= INSURANCE BANNER ================= -->
        <section class="py-6 bg-white border-b border-primary/10">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="flex flex-col md:flex-row items-center justify-between gap-4 text-center md:text-left">
                    <div>
                        <span class="text-xs font-bold text-primary uppercase tracking-widest block">Insurance &amp; Coverage</span>
                        <h3 class="text-base sm:text-lg font-bold text-primary">In-Network With Major Commercial Insurances &amp; Medicare</h3>
                    </div>
                    <div class="flex flex-wrap items-center justify-center gap-3 sm:gap-6 opacity-85">
                        <img src="../assets/insurances/blue-cross-logo.png" alt="Blue Cross Blue Shield" class="h-6 sm:h-7 object-contain">
                        <img src="../assets/insurances/medicare.webp" alt="Medicare" class="h-6 sm:h-7 object-contain">
                        <img src="../assets/insurances/united-healthcare-logo.jpeg" alt="UnitedHealthcare" class="h-6 sm:h-7 object-contain">
                        <img src="../assets/insurances/aetna-logo.png" alt="Aetna" class="h-6 sm:h-7 object-contain">
                        <img src="../assets/insurances/cigna.webp" alt="Cigna" class="h-5 sm:h-6 object-contain">
                        <img src="../assets/insurances/optum-logo.png" alt="Optum" class="h-5 sm:h-6 object-contain">
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= PSYCHIATRY SERVICES SECTION ================= -->
        <section id="services" class="scroll-mt-20 sm:scroll-mt-24 py-12 sm:py-20 bg-cream">
            <div class="container mx-auto px-4 sm:px-6">
                
                <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-14">
                    <span class="text-primary font-bold tracking-widest uppercase text-xs">Our Clinical Offerings</span>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-heading text-primary mt-2">Comprehensive Psychiatric Services</h2>
                    <p class="text-base text-gray-600 font-medium mt-3 leading-relaxed">
                        At Tranquil Minds, we combine modern psychopharmacology, clinical assessments, and neurostimulation to provide personalized, whole-person mental healthcare.
                    </p>
                </div>

                <!-- Services Mobile Slider / Desktop Grid -->
                <div class="flex overflow-x-auto gap-5 max-w-6xl mx-auto snap-x snap-mandatory md:grid md:grid-cols-3 md:gap-8 md:overflow-x-visible no-scrollbar pb-6 md:pb-0 px-2 md:px-0">
                    
                    <!-- Service Card 1 -->
                    <div class="bg-white rounded-3xl p-6 sm:p-7 border border-primary/10 shadow-lg hover:shadow-xl transition-all duration-300 flex flex-col justify-between group w-[85%] sm:w-[55%] flex-shrink-0 snap-center md:w-auto md:flex-shrink">
                        <div>
                            <div class="h-44 sm:h-48 w-full rounded-2xl overflow-hidden mb-5 relative">
                                <img src="../assets/home/medication-management.png" alt="Psychiatric Medication Management" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute top-3 left-3 bg-primary text-white text-[11px] font-bold px-3 py-1 rounded-full">Core Speciality</div>
                            </div>
                            <h3 class="text-xl font-bold text-primary mb-2">Psychiatric Medication Management</h3>
                            <p class="text-sm text-gray-600 leading-relaxed mb-4">
                                Precise, collaborative prescribing tailored to your unique symptom profile. We avoid overmedication, carefully monitor side effects, and optimize your dosing with ongoing follow-up.
                            </p>
                            <ul class="space-y-2 text-xs font-semibold text-gray-700">
                                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span>Medication initiation, adjustments &amp; tapering</li>
                                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span>Comprehensive drug interaction screening</li>
                                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span>Close monitoring with scheduled check-ins</li>
                            </ul>
                        </div>
                        <div class="mt-6 pt-4 border-t border-gray-100">
                            <a href="#consultation-form" class="inline-flex items-center text-xs font-bold text-primary hover:text-primary-dark gap-1.5 group-hover:translate-x-1 transition-transform">
                                Book Medication Review <svg class="w-4 h-4 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Service Card 2 -->
                    <div class="bg-white rounded-3xl p-6 sm:p-7 border border-primary/10 shadow-lg hover:shadow-xl transition-all duration-300 flex flex-col justify-between group w-[85%] sm:w-[55%] flex-shrink-0 snap-center md:w-auto md:flex-shrink">
                        <div>
                            <div class="h-44 sm:h-48 w-full rounded-2xl overflow-hidden mb-5 relative">
                                <img src="../assets/home/tranquil-main-image-home.webp" alt="Comprehensive Psychiatric Diagnostic Evaluations" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute top-3 left-3 bg-primary text-white text-[11px] font-bold px-3 py-1 rounded-full">New Patients</div>
                            </div>
                            <h3 class="text-xl font-bold text-primary mb-2">Psychiatric Diagnostic Evaluations</h3>
                            <p class="text-sm text-gray-600 leading-relaxed mb-4">
                                A thorough 60-minute initial intake to deeply evaluate your medical history, psychological symptoms, lifestyle, and cognitive function before recommending any treatment.
                            </p>
                            <ul class="space-y-2 text-xs font-semibold text-gray-700">
                                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span>60-minute comprehensive initial assessment</li>
                                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span>Cognitive screening &amp; ADHD assessment</li>
                                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span>Differential diagnosis &amp; second opinions</li>
                            </ul>
                        </div>
                        <div class="mt-6 pt-4 border-t border-gray-100">
                            <a href="#consultation-form" class="inline-flex items-center text-xs font-bold text-primary hover:text-primary-dark gap-1.5 group-hover:translate-x-1 transition-transform">
                                Request Evaluation <svg class="w-4 h-4 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Service Card 3 -->
                    <div class="bg-white rounded-3xl p-6 sm:p-7 border border-primary/10 shadow-lg hover:shadow-xl transition-all duration-300 flex flex-col justify-between group w-[85%] sm:w-[55%] flex-shrink-0 snap-center md:w-auto md:flex-shrink">
                        <div>
                            <div class="h-44 sm:h-48 w-full rounded-2xl overflow-hidden mb-5 relative">
                                <img src="../assets/home/psychotherapy.png" alt="Integrative Psychiatry and TMS Therapy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute top-3 left-3 bg-primary text-white text-[11px] font-bold px-3 py-1 rounded-full">Integrative Care</div>
                            </div>
                            <h3 class="text-xl font-bold text-primary mb-2">Integrative Psychiatry &amp; TMS</h3>
                            <p class="text-sm text-gray-600 leading-relaxed mb-4">
                                When standard medications haven't brought enough relief, we offer advanced Neurostar® TMS therapy (FDA-cleared, non-drug neurostimulation) seamlessly integrated with clinical care.
                            </p>
                            <ul class="space-y-2 text-xs font-semibold text-gray-700">
                                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span>Treatment-Resistant Depression protocols</li>
                                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span>Non-invasive Neurostar® TMS therapy</li>
                                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span>Supportive psychotherapy integration</li>
                            </ul>
                        </div>
                        <div class="mt-6 pt-4 border-t border-gray-100">
                            <a href="#consultation-form" class="inline-flex items-center text-xs font-bold text-primary hover:text-primary-dark gap-1.5 group-hover:translate-x-1 transition-transform">
                                Explore TMS Options <svg class="w-4 h-4 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>

                </div>

                <!-- Mobile swipe indicator -->
                <div class="flex items-center justify-center gap-1.5 text-[11px] text-gray-400 mt-2 md:hidden">
                    <span>← Swipe to explore services →</span>
                </div>

            </div>
        </section>

        <!-- ================= CONDITIONS WE TREAT GRID ================= -->
        <section id="conditions" class="scroll-mt-20 sm:scroll-mt-24 py-12 sm:py-20 bg-white border-t border-primary/10">
            <div class="container mx-auto px-4 sm:px-6">
                
                <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-12">
                    <span class="text-primary font-bold tracking-widest uppercase text-xs">Specialized Treatment</span>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-heading text-primary mt-2">Conditions We Diagnose &amp; Treat</h2>
                    <p class="text-base text-gray-600 font-medium mt-3 leading-relaxed">
                        Evidence-based psychiatric therapies customized for teens (15+) and adults facing complex or persistent mental health challenges.
                    </p>
                </div>

                <!-- Conditions Mobile Slider / Desktop Grid -->
                <div class="flex overflow-x-auto gap-5 max-w-6xl mx-auto snap-x snap-mandatory sm:grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-6 sm:overflow-x-visible no-scrollbar pb-6 sm:pb-0 px-2 sm:px-0">
                    
                    <!-- Condition 1: Depression -->
                    <div class="p-5 bg-cream/40 rounded-2xl border border-primary/10 hover:border-primary/30 hover:shadow-md transition-all w-[80%] sm:w-auto flex-shrink-0 snap-center sm:flex-shrink">
                        <div class="h-40 rounded-xl overflow-hidden mb-4">
                            <img src="../assets/home/depression.png" alt="Depression and Treatment-Resistant Depression" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-1.5">Depression &amp; Mood Disorders</h3>
                        <p class="text-xs text-gray-600 leading-relaxed font-medium">
                            Persistent sadness, low motivation, sleep disruption, and Treatment-Resistant Depression (TRD) addressed through targeted pharmacotherapy and neurostimulation.
                        </p>
                    </div>

                    <!-- Condition 2: Anxiety -->
                    <div class="p-5 bg-cream/40 rounded-2xl border border-primary/10 hover:border-primary/30 hover:shadow-md transition-all w-[80%] sm:w-auto flex-shrink-0 snap-center sm:flex-shrink">
                        <div class="h-40 rounded-xl overflow-hidden mb-4">
                            <img src="../assets/home/anxiety.png" alt="Anxiety and Panic Disorders" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-1.5">Anxiety &amp; Panic Disorders</h3>
                        <p class="text-xs text-gray-600 leading-relaxed font-medium">
                            Generalized anxiety (GAD), panic attacks, social phobias, and chronic physiological tension calmed through evidence-based medication protocols.
                        </p>
                    </div>

                    <!-- Condition 3: ADHD -->
                    <div class="p-5 bg-cream/40 rounded-2xl border border-primary/10 hover:border-primary/30 hover:shadow-md transition-all w-[80%] sm:w-auto flex-shrink-0 snap-center sm:flex-shrink">
                        <div class="h-40 rounded-xl overflow-hidden mb-4">
                            <img src="../assets/home/adhd.png" alt="ADHD Evaluation and Treatment" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-1.5">ADHD &amp; Executive Functioning</h3>
                        <p class="text-xs text-gray-600 leading-relaxed font-medium">
                            Comprehensive assessment and targeted treatment for inattention, impulsivity, brain fog, and task paralysis in adolescents and adults.
                        </p>
                    </div>

                    <!-- Condition 4: Bipolar -->
                    <div class="p-5 bg-cream/40 rounded-2xl border border-primary/10 hover:border-primary/30 hover:shadow-md transition-all w-[80%] sm:w-auto flex-shrink-0 snap-center sm:flex-shrink">
                        <div class="h-40 rounded-xl overflow-hidden mb-4">
                            <img src="../assets/home/bipolar.png" alt="Bipolar Disorder" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-1.5">Bipolar Disorder</h3>
                        <p class="text-xs text-gray-600 leading-relaxed font-medium">
                            Expert mood stabilization for Bipolar I &amp; II to prevent cyclical depressive dips and manic or hypomanic spikes.
                        </p>
                    </div>

                    <!-- Condition 5: PTSD -->
                    <div class="p-5 bg-cream/40 rounded-2xl border border-primary/10 hover:border-primary/30 hover:shadow-md transition-all w-[80%] sm:w-auto flex-shrink-0 snap-center sm:flex-shrink">
                        <div class="h-40 rounded-xl overflow-hidden mb-4">
                            <img src="../assets/home/ptsd.png" alt="PTSD and Trauma Care" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-1.5">PTSD &amp; Trauma</h3>
                        <p class="text-xs text-gray-600 leading-relaxed font-medium">
                            Trauma-informed psychiatric care to relieve flashbacks, hypervigilance, and emotional numbing in a safe, compassionate setting.
                        </p>
                    </div>

                    <!-- Condition 6: OCD -->
                    <div class="p-5 bg-cream/40 rounded-2xl border border-primary/10 hover:border-primary/30 hover:shadow-md transition-all w-[80%] sm:w-auto flex-shrink-0 snap-center sm:flex-shrink">
                        <div class="h-40 rounded-xl overflow-hidden mb-4">
                            <img src="../assets/home/ocd.png" alt="OCD and Compulsive Cycles" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-1.5">OCD &amp; Intrusive Thoughts</h3>
                        <p class="text-xs text-gray-600 leading-relaxed font-medium">
                            Disrupting compulsive cycles and intrusive thought loops using high-dose evidence-based medications and neurostimulation support.
                        </p>
                    </div>

                </div>

                <!-- Mobile swipe indicator -->
                <div class="flex items-center justify-center gap-1.5 text-[11px] text-gray-400 mt-2 sm:hidden">
                    <span>← Swipe to explore conditions →</span>
                </div>

                <div class="text-center mt-8 sm:mt-10">
                    <a href="#consultation-form" class="inline-flex items-center gap-2 px-8 py-3.5 bg-primary hover:bg-primary-dark text-white font-bold rounded-full transition-all shadow-md">
                        Check If Your Condition Qualifies
                        <svg class="w-4 h-4 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

            </div>
        </section>

        <!-- ================= WHY TRANQUIL MINDS (MOBILE OPTIMIZED COMPARISON) ================= -->
        <section id="why-us" class="scroll-mt-20 sm:scroll-mt-24 py-12 sm:py-20 bg-cream">
            <div class="container mx-auto px-4 sm:px-6 max-w-5xl">
                
                <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-12">
                    <span class="text-primary font-bold tracking-widest uppercase text-xs">The Tranquil Minds Difference</span>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-heading text-primary mt-2">How We Compare</h2>
                    <p class="text-base text-gray-600 font-medium mt-3">
                        We built Tranquil Minds to provide the personal, unhurried psychiatric care you deserve.
                    </p>
                </div>

                <!-- DESKTOP TABLE (md:block) -->
                <div class="hidden md:block bg-white rounded-3xl shadow-xl border border-primary/10 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse min-w-[600px]">
                            <thead>
                                <tr class="border-b border-primary/10">
                                    <th class="py-5 px-6 text-sm font-bold text-gray-500 uppercase tracking-wider w-1/3 bg-gray-50/70">
                                        Feature / Care Standard
                                    </th>
                                    <th class="py-5 px-6 text-base font-heading font-bold text-white bg-primary w-1/3 text-center shadow-sm">
                                        <div class="flex items-center justify-center gap-1.5">
                                            <span>Tranquil Minds</span>
                                            <span class="inline-block w-2 h-2 rounded-full bg-purple-300"></span>
                                        </div>
                                    </th>
                                    <th class="py-5 px-6 text-sm font-bold text-gray-600 bg-gray-100/80 w-1/3 text-center">
                                        Typical Clinic / Hospital
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 text-sm">
                                <!-- Row 1 -->
                                <tr class="hover:bg-purple-50/20 transition-colors">
                                    <td class="py-4 px-6 font-bold text-primary">Initial Evaluation Time</td>
                                    <td class="py-4 px-6 text-center font-bold text-primary bg-soft-purple/40">
                                        <span class="inline-flex items-center gap-1.5 text-primary">
                                            <svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                            60-Minute Comprehensive Intake
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-center text-gray-500">
                                        <span class="inline-flex items-center gap-1.5">
                                            <span class="text-gray-400 font-bold">✕</span> 15–20 minute rushed review
                                        </span>
                                    </td>
                                </tr>

                                <!-- Row 2 -->
                                <tr class="hover:bg-purple-50/20 transition-colors">
                                    <td class="py-4 px-6 font-bold text-primary">Appointment Availability</td>
                                    <td class="py-4 px-6 text-center font-bold text-primary bg-soft-purple/40">
                                        <span class="inline-flex items-center gap-1.5 text-primary">
                                            <svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                            Same-Week Appointments
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-center text-gray-500">
                                        <span class="inline-flex items-center gap-1.5">
                                            <span class="text-gray-400 font-bold">✕</span> 3 to 6-month waitlists
                                        </span>
                                    </td>
                                </tr>

                                <!-- Row 3 -->
                                <tr class="hover:bg-purple-50/20 transition-colors">
                                    <td class="py-4 px-6 font-bold text-primary">Provider Continuity</td>
                                    <td class="py-4 px-6 text-center font-bold text-primary bg-soft-purple/40">
                                        <span class="inline-flex items-center gap-1.5 text-primary">
                                            <svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                            Consistent Care with Roxanne DoBrava
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-center text-gray-500">
                                        <span class="inline-flex items-center gap-1.5">
                                            <span class="text-gray-400 font-bold">✕</span> Rotating doctors / random staff
                                        </span>
                                    </td>
                                </tr>

                                <!-- Row 4 -->
                                <tr class="hover:bg-purple-50/20 transition-colors">
                                    <td class="py-4 px-6 font-bold text-primary">Prescribing Philosophy</td>
                                    <td class="py-4 px-6 text-center font-bold text-primary bg-soft-purple/40">
                                        <span class="inline-flex items-center gap-1.5 text-primary">
                                            <svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                            Targeted, Conservative &amp; Monitored
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-center text-gray-500">
                                        <span class="inline-flex items-center gap-1.5">
                                            <span class="text-gray-400 font-bold">✕</span> Generic "trial &amp; error" prescribing
                                        </span>
                                    </td>
                                </tr>

                                <!-- Row 5 -->
                                <tr class="hover:bg-purple-50/20 transition-colors">
                                    <td class="py-4 px-6 font-bold text-primary">Integrative Treatment Options</td>
                                    <td class="py-4 px-6 text-center font-bold text-primary bg-soft-purple/40">
                                        <span class="inline-flex items-center gap-1.5 text-primary">
                                            <svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                            Medication + Neurostar® TMS + Therapy
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-center text-gray-500">
                                        <span class="inline-flex items-center gap-1.5">
                                            <span class="text-gray-400 font-bold">✕</span> Medication-only silos
                                        </span>
                                    </td>
                                </tr>

                                <!-- Row 6 -->
                                <tr class="hover:bg-purple-50/20 transition-colors">
                                    <td class="py-4 px-6 font-bold text-primary">Visit Formats</td>
                                    <td class="py-4 px-6 text-center font-bold text-primary bg-soft-purple/40">
                                        <span class="inline-flex items-center gap-1.5 text-primary">
                                            <svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                            In-Person (Monticello) &amp; Telehealth MN
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-center text-gray-500">
                                        <span class="inline-flex items-center gap-1.5">
                                            <span class="text-gray-400 font-bold">✕</span> Strict in-person or app-only
                                        </span>
                                    </td>
                                </tr>

                                <!-- Row 7 -->
                                <tr class="hover:bg-purple-50/20 transition-colors">
                                    <td class="py-4 px-6 font-bold text-primary">Insurance &amp; Billing</td>
                                    <td class="py-4 px-6 text-center font-bold text-primary bg-soft-purple/40">
                                        <span class="inline-flex items-center gap-1.5 text-primary">
                                            <svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                            100% Free Pre-Visit Verification
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-center text-gray-500">
                                        <span class="inline-flex items-center gap-1.5">
                                            <span class="text-gray-400 font-bold">✕</span> Unexpected billing surprises
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Table Footer CTA -->
                    <div class="p-6 bg-cream/60 border-t border-primary/10 text-center">
                        <a href="#consultation-form" class="inline-flex items-center gap-2 px-8 py-3.5 bg-primary hover:bg-primary-dark text-white font-bold rounded-full transition-all shadow-md text-sm">
                            Schedule Your 60-Minute Evaluation
                            <svg class="w-4 h-4 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- MOBILE OPTIMIZED COMPARISON CARDS (block md:hidden) -->
                <div class="block md:hidden space-y-4">
                    
                    <!-- Mobile Comparison Card 1 -->
                    <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                        <div class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2.5">Initial Evaluation Time</div>
                        <div class="space-y-2">
                            <div class="p-3 bg-soft-purple/60 rounded-xl border border-primary/10 flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-primary text-white flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">✓</span>
                                <div>
                                    <span class="text-xs font-bold text-primary block">Tranquil Minds</span>
                                    <span class="text-xs text-primary/90 font-medium">60-Minute Comprehensive Intake</span>
                                </div>
                            </div>
                            <div class="p-3 bg-gray-50 rounded-xl border border-gray-100 flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">✕</span>
                                <div>
                                    <span class="text-xs font-semibold text-gray-600 block">Typical Clinic</span>
                                    <span class="text-xs text-gray-500">15–20 minute rushed review</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Comparison Card 2 -->
                    <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                        <div class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2.5">Appointment Availability</div>
                        <div class="space-y-2">
                            <div class="p-3 bg-soft-purple/60 rounded-xl border border-primary/10 flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-primary text-white flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">✓</span>
                                <div>
                                    <span class="text-xs font-bold text-primary block">Tranquil Minds</span>
                                    <span class="text-xs text-primary/90 font-medium">Same-Week Appointments</span>
                                </div>
                            </div>
                            <div class="p-3 bg-gray-50 rounded-xl border border-gray-100 flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">✕</span>
                                <div>
                                    <span class="text-xs font-semibold text-gray-600 block">Typical Clinic</span>
                                    <span class="text-xs text-gray-500">3 to 6-month waitlists</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Comparison Card 3 -->
                    <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                        <div class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2.5">Provider Continuity</div>
                        <div class="space-y-2">
                            <div class="p-3 bg-soft-purple/60 rounded-xl border border-primary/10 flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-primary text-white flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">✓</span>
                                <div>
                                    <span class="text-xs font-bold text-primary block">Tranquil Minds</span>
                                    <span class="text-xs text-primary/90 font-medium">Consistent 1-on-1 Care with Roxanne</span>
                                </div>
                            </div>
                            <div class="p-3 bg-gray-50 rounded-xl border border-gray-100 flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">✕</span>
                                <div>
                                    <span class="text-xs font-semibold text-gray-600 block">Typical Clinic</span>
                                    <span class="text-xs text-gray-500">Rotating doctors / random staff</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Comparison Card 4 -->
                    <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                        <div class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2.5">Prescribing &amp; Treatments</div>
                        <div class="space-y-2">
                            <div class="p-3 bg-soft-purple/60 rounded-xl border border-primary/10 flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-primary text-white flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">✓</span>
                                <div>
                                    <span class="text-xs font-bold text-primary block">Tranquil Minds</span>
                                    <span class="text-xs text-primary/90 font-medium">Targeted Dosing + Neurostar® TMS</span>
                                </div>
                            </div>
                            <div class="p-3 bg-gray-50 rounded-xl border border-gray-100 flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">✕</span>
                                <div>
                                    <span class="text-xs font-semibold text-gray-600 block">Typical Clinic</span>
                                    <span class="text-xs text-gray-500">Generic trial-and-error / medication-only</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Comparison Card 5 -->
                    <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                        <div class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2.5">Insurance &amp; Billing</div>
                        <div class="space-y-2">
                            <div class="p-3 bg-soft-purple/60 rounded-xl border border-primary/10 flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-primary text-white flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">✓</span>
                                <div>
                                    <span class="text-xs font-bold text-primary block">Tranquil Minds</span>
                                    <span class="text-xs text-primary/90 font-medium">100% Free Pre-Visit Verification</span>
                                </div>
                            </div>
                            <div class="p-3 bg-gray-50 rounded-xl border border-gray-100 flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">✕</span>
                                <div>
                                    <span class="text-xs font-semibold text-gray-600 block">Typical Clinic</span>
                                    <span class="text-xs text-gray-500">Hidden fees &amp; billing surprises</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Action CTA -->
                    <div class="pt-2 text-center">
                        <a href="#consultation-form" class="inline-flex items-center justify-center w-full py-3.5 bg-primary hover:bg-primary-dark text-white font-bold rounded-xl shadow-md text-sm">
                            <span>Schedule 60-Min Evaluation</span>
                            <svg class="w-4 h-4 ml-1.5 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>

                </div>

            </div>
        </section>

        <!-- ================= PROVIDER SPOTLIGHT ================= -->
        <section id="doctor" class="scroll-mt-20 sm:scroll-mt-24 py-12 sm:py-20 bg-white border-t border-primary/10">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="max-w-5xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
                    
                    <!-- Photo & Badges (5 Cols) -->
                    <div class="lg:col-span-5 relative">
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white bg-soft-purple">
                            <img src="../assets/home/rox-image.png" alt="Roxanne DoBrava, APRN-CNP, PMHNP-BC" class="w-full h-auto object-cover max-h-[480px]">
                            <div class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-primary/95 via-primary/70 to-transparent p-5 text-white">
                                <p class="font-bold text-lg font-heading">Roxanne DoBrava</p>
                                <p class="text-xs text-purple-200">APRN-CNP, PMHNP-BC &bull; Clinic Founder</p>
                            </div>
                        </div>
                        <div class="absolute -bottom-4 -right-4 bg-primary text-white p-3.5 rounded-2xl shadow-lg border-2 border-white text-center hidden sm:block">
                            <span class="block text-xs font-bold uppercase tracking-wider text-purple-200">Board-Certified</span>
                            <span class="text-sm font-extrabold">Psychiatric Nurse Practitioner</span>
                        </div>
                    </div>

                    <!-- Provider Info (7 Cols) -->
                    <div class="lg:col-span-7 space-y-5 text-primary">
                        <div class="flex items-center gap-2 text-primary font-bold uppercase text-xs tracking-wider">
                            <span class="w-8 h-0.5 bg-primary"></span> Clinical Leadership
                        </div>
                        
                        <h2 class="text-3xl sm:text-4xl md:text-5xl font-heading text-primary leading-tight">
                            Meet Roxanne DoBrava, <span class="text-primary-light">PMHNP-BC</span>
                        </h2>
                        
                        <p class="text-base text-gray-700 leading-relaxed">
                            Roxanne is a board-certified Psychiatric Mental Health Nurse Practitioner with extensive experience diagnosing and treating psychiatric conditions in adolescents and adults.
                        </p>

                        <div class="p-5 bg-cream border-l-4 border-primary rounded-r-2xl text-gray-700 italic text-sm sm:text-base leading-relaxed">
                            "Mental health is deeply personal. My goal is to create a safe, warm space where we work together to understand the root causes of your symptoms — empowering you with the exact clinical tools, medications, and support you need to feel like yourself again."
                        </div>

                        <!-- Credentials List -->
                        <div class="grid grid-cols-2 gap-3 pt-2 text-xs sm:text-sm font-bold text-primary">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-primary"></span>Board-Certified PMHNP-BC
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-primary"></span>Advanced Psychopharmacology
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-primary"></span>Certified Neurostar® TMS Provider
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-primary"></span>Teens (15+) &amp; Adult Specialist
                            </div>
                        </div>

                        <div class="pt-3">
                            <a href="#consultation-form" class="inline-flex items-center gap-2 px-6 py-3 bg-primary hover:bg-primary-dark text-white font-bold rounded-full text-sm transition-all shadow-md">
                                Schedule with Roxanne
                                <svg class="w-4 h-4 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ================= WRITTEN PATIENT REVIEWS & TESTIMONIALS (SINGLE ROW SLIDER) ================= -->
        <section id="reviews" class="scroll-mt-20 sm:scroll-mt-24 py-12 sm:py-20 bg-cream border-t border-primary/10 relative overflow-hidden">
            <!-- Background Blurs -->
            <div class="absolute top-0 right-0 w-80 h-80 bg-primary/5 rounded-full blur-[100px] pointer-events-none"></div>
            <div class="absolute bottom-0 left-0 w-80 h-80 bg-purple-400/5 rounded-full blur-[100px] pointer-events-none"></div>

            <div class="container mx-auto px-4 sm:px-6 relative z-10">
                
                <!-- Section Header & Navigation Controls -->
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-8 sm:mb-12 max-w-6xl mx-auto">
                    <div class="text-center md:text-left max-w-2xl">
                        <span class="text-primary font-bold tracking-widest uppercase text-xs">Patient Testimonials</span>
                        <h2 class="text-3xl sm:text-4xl md:text-5xl font-heading text-primary mt-2">Real Stories of Healing &amp; Hope</h2>
                        <p class="text-base text-gray-600 font-medium mt-3 leading-relaxed">
                            Read what patients in Monticello and across Minnesota say about their care with Roxanne and the team at Tranquil Minds.
                        </p>
                    </div>

                    <!-- Right Header Widget: Google Badge + Arrow Buttons -->
                    <div class="flex items-center justify-center md:justify-end gap-3 flex-shrink-0">
                        <div class="inline-flex items-center gap-2.5 bg-white rounded-2xl border border-primary/10 shadow-sm px-4 py-2">
                            <svg class="w-5 h-5" viewBox="0 0 24 24"><path fill="#4285F4" d="M12.24 10.285V13.4h6.887c-.279 1.56-1.602 4.58-6.887 4.58-4.59 0-8.332-3.799-8.332-8.486S7.65 1.009 12.24 1.009c2.61 0 4.35 1.127 5.35 2.083l2.45-2.355C18.47 1.832 15.62 0 12.24 0 5.58 0 0 5.372 0 12s5.58 12 12.24 12c6.96 0 11.57-4.887 11.57-11.787 0-.796-.08-1.402-.19-1.928H12.24z"/></svg>
                            <span class="text-sm font-bold text-primary">4.5</span>
                            <div class="flex text-amber-400">
                                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-3.5 h-3.5" viewBox="0 0 20 20"><defs><linearGradient id="halfStarGradPsych"><stop offset="50%" stop-color="#FBBF24"/><stop offset="50%" stop-color="#D1D5DB"/></linearGradient></defs><path fill="url(#halfStarGradPsych)" d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                        </div>

                        <!-- Prev / Next Slider Arrows -->
                        <div class="flex items-center gap-2">
                            <button id="review-prev-btn" type="button" aria-label="Previous Review" class="w-10 h-10 rounded-full border border-primary/20 bg-white text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-all shadow-sm active:scale-95">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
                            </button>
                            <button id="review-next-btn" type="button" aria-label="Next Review" class="w-10 h-10 rounded-full border border-primary/20 bg-white text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-all shadow-sm active:scale-95">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- SINGLE ROW SLIDER TRACK -->
                <div id="reviews-slider-track" class="flex overflow-x-auto gap-6 max-w-6xl mx-auto snap-x snap-mandatory scroll-smooth no-scrollbar py-4 px-2">
                    
                    <!-- Review 1: Kaitlyn Charlson -->
                    <div class="bg-white border border-primary/10 rounded-3xl p-6 sm:p-7 flex flex-col justify-between shadow-md hover:shadow-xl transition-all duration-300 w-[85%] sm:w-[380px] md:w-[400px] flex-shrink-0 snap-center">
                        <div>
                            <!-- Rating Stars + Google Icon -->
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex text-amber-400">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                </div>
                                <svg class="w-4 h-4 opacity-80" viewBox="0 0 24 24"><path fill="#4285F4" d="M12.24 10.285V13.4h6.887c-.279 1.56-1.602 4.58-6.887 4.58-4.59 0-8.332-3.799-8.332-8.486S7.65 1.009 12.24 1.009c2.61 0 4.35 1.127 5.35 2.083l2.45-2.355C18.47 1.832 15.62 0 12.24 0 5.58 0 0 5.372 0 12s5.58 12 12.24 12c6.96 0 11.57-4.887 11.57-11.787 0-.796-.08-1.402-.19-1.928H12.24z"/></svg>
                            </div>
                            <!-- Review Text -->
                            <p class="text-gray-700 text-sm leading-relaxed mb-6 font-medium italic">
                                &ldquo;I had an amazing experience with the team at Tranquil Minds Mental Health. Roxanne was very invested in my experience and accommodating for my needs. The environment is extremely welcoming and you instantly feel at home. They truly want the best for their patients.&rdquo;
                            </p>
                        </div>
                        <!-- Author -->
                        <div class="flex items-center gap-3 pt-4 border-t border-gray-100">
                            <div class="w-9 h-9 rounded-full bg-soft-purple text-primary font-bold flex items-center justify-center text-xs flex-shrink-0">KC</div>
                            <div>
                                <h4 class="font-bold text-primary text-xs sm:text-sm leading-tight">Kaitlyn Charlson</h4>
                                <span class="text-[11px] text-gray-500">Verified Patient</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 2: David DoBrava (USAF Veteran) -->
                    <div class="bg-white border border-primary/10 rounded-3xl p-6 sm:p-7 flex flex-col justify-between shadow-md hover:shadow-xl transition-all duration-300 w-[85%] sm:w-[380px] md:w-[400px] flex-shrink-0 snap-center">
                        <div>
                            <!-- Rating Stars + Google Icon -->
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex text-amber-400">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                </div>
                                <svg class="w-4 h-4 opacity-80" viewBox="0 0 24 24"><path fill="#4285F4" d="M12.24 10.285V13.4h6.887c-.279 1.56-1.602 4.58-6.887 4.58-4.59 0-8.332-3.799-8.332-8.486S7.65 1.009 12.24 1.009c2.61 0 4.35 1.127 5.35 2.083l2.45-2.355C18.47 1.832 15.62 0 12.24 0 5.58 0 0 5.372 0 12s5.58 12 12.24 12c6.96 0 11.57-4.887 11.57-11.787 0-.796-.08-1.402-.19-1.928H12.24z"/></svg>
                            </div>
                            <!-- Review Text -->
                            <p class="text-gray-700 text-sm leading-relaxed mb-6 font-medium italic">
                                &ldquo;Roxanne and the team went out of their way to help me. As a retired USAF veteran, their care has helped me with PTSD, anxiety, and depression. I would recommend Tranquil Minds to everyone that needs support.&rdquo;
                            </p>
                        </div>
                        <!-- Author -->
                        <div class="flex items-center gap-3 pt-4 border-t border-gray-100">
                            <div class="w-9 h-9 rounded-full bg-soft-purple text-primary font-bold flex items-center justify-center text-xs flex-shrink-0">DD</div>
                            <div>
                                <h4 class="font-bold text-primary text-xs sm:text-sm leading-tight">David DoBrava</h4>
                                <span class="text-[11px] text-gray-500">Retired USAF Veteran</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 3: Linnae Efraimson -->
                    <div class="bg-white border border-primary/10 rounded-3xl p-6 sm:p-7 flex flex-col justify-between shadow-md hover:shadow-xl transition-all duration-300 w-[85%] sm:w-[380px] md:w-[400px] flex-shrink-0 snap-center">
                        <div>
                            <!-- Rating Stars + Google Icon -->
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex text-amber-400">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                </div>
                                <svg class="w-4 h-4 opacity-80" viewBox="0 0 24 24"><path fill="#4285F4" d="M12.24 10.285V13.4h6.887c-.279 1.56-1.602 4.58-6.887 4.58-4.59 0-8.332-3.799-8.332-8.486S7.65 1.009 12.24 1.009c2.61 0 4.35 1.127 5.35 2.083l2.45-2.355C18.47 1.832 15.62 0 12.24 0 5.58 0 0 5.372 0 12s5.58 12 12.24 12c6.96 0 11.57-4.887 11.57-11.787 0-.796-.08-1.402-.19-1.928H12.24z"/></svg>
                            </div>
                            <!-- Review Text -->
                            <p class="text-gray-700 text-sm leading-relaxed mb-6 font-medium italic">
                                &ldquo;These ladies are the best in the business hands down! Fully trust Roxanne. She is so knowledgeable and has your best interests at heart. Super easy to get ahold of and communicate with! Highly recommend :)&rdquo;
                            </p>
                        </div>
                        <!-- Author -->
                        <div class="flex items-center gap-3 pt-4 border-t border-gray-100">
                            <div class="w-9 h-9 rounded-full bg-soft-purple text-primary font-bold flex items-center justify-center text-xs flex-shrink-0">LE</div>
                            <div>
                                <h4 class="font-bold text-primary text-xs sm:text-sm leading-tight">Linnae Efraimson</h4>
                                <span class="text-[11px] text-gray-500">Verified Patient</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 4: Lynnette Redinger -->
                    <div class="bg-white border border-primary/10 rounded-3xl p-6 sm:p-7 flex flex-col justify-between shadow-md hover:shadow-xl transition-all duration-300 w-[85%] sm:w-[380px] md:w-[400px] flex-shrink-0 snap-center">
                        <div>
                            <!-- Rating Stars + Google Icon -->
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex text-amber-400">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                </div>
                                <svg class="w-4 h-4 opacity-80" viewBox="0 0 24 24"><path fill="#4285F4" d="M12.24 10.285V13.4h6.887c-.279 1.56-1.602 4.58-6.887 4.58-4.59 0-8.332-3.799-8.332-8.486S7.65 1.009 12.24 1.009c2.61 0 4.35 1.127 5.35 2.083l2.45-2.355C18.47 1.832 15.62 0 12.24 0 5.58 0 0 5.372 0 12s5.58 12 12.24 12c6.96 0 11.57-4.887 11.57-11.787 0-.796-.08-1.402-.19-1.928H12.24z"/></svg>
                            </div>
                            <!-- Review Text -->
                            <p class="text-gray-700 text-sm leading-relaxed mb-6 font-medium italic">
                                &ldquo;I am so glad I found Tranquil Minds. It is a life changer for sure. Roxanne is awesome, attentive, and genuinely listens to your symptoms without rushing.&rdquo;
                            </p>
                        </div>
                        <!-- Author -->
                        <div class="flex items-center gap-3 pt-4 border-t border-gray-100">
                            <div class="w-9 h-9 rounded-full bg-soft-purple text-primary font-bold flex items-center justify-center text-xs flex-shrink-0">LR</div>
                            <div>
                                <h4 class="font-bold text-primary text-xs sm:text-sm leading-tight">Lynnette Redinger</h4>
                                <span class="text-[11px] text-gray-500">Verified Patient</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 5: Linda Wipper Anderson -->
                    <div class="bg-white border border-primary/10 rounded-3xl p-6 sm:p-7 flex flex-col justify-between shadow-md hover:shadow-xl transition-all duration-300 w-[85%] sm:w-[380px] md:w-[400px] flex-shrink-0 snap-center">
                        <div>
                            <!-- Rating Stars + Google Icon -->
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex text-amber-400">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                </div>
                                <svg class="w-4 h-4 opacity-80" viewBox="0 0 24 24"><path fill="#4285F4" d="M12.24 10.285V13.4h6.887c-.279 1.56-1.602 4.58-6.887 4.58-4.59 0-8.332-3.799-8.332-8.486S7.65 1.009 12.24 1.009c2.61 0 4.35 1.127 5.35 2.083l2.45-2.355C18.47 1.832 15.62 0 12.24 0 5.58 0 0 5.372 0 12s5.58 12 12.24 12c6.96 0 11.57-4.887 11.57-11.787 0-.796-.08-1.402-.19-1.928H12.24z"/></svg>
                            </div>
                            <!-- Review Text -->
                            <p class="text-gray-700 text-sm leading-relaxed mb-6 font-medium italic">
                                &ldquo;Roxanne knows her stuff and is very easy to talk to. She makes psychiatric care comfortable, understandable, and completely stigma-free.&rdquo;
                            </p>
                        </div>
                        <!-- Author -->
                        <div class="flex items-center gap-3 pt-4 border-t border-gray-100">
                            <div class="w-9 h-9 rounded-full bg-soft-purple text-primary font-bold flex items-center justify-center text-xs flex-shrink-0">LW</div>
                            <div>
                                <h4 class="font-bold text-primary text-xs sm:text-sm leading-tight">Linda Wipper Anderson</h4>
                                <span class="text-[11px] text-gray-500">Verified Patient</span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Swipe Indicator for mobile -->
                <div class="flex items-center justify-center gap-1.5 text-[11px] text-gray-400 mt-1 md:hidden">
                    <span>← Swipe to explore reviews →</span>
                </div>

                <!-- Reviews Section Actions -->
                <div class="text-center mt-8 sm:mt-12 flex flex-col sm:flex-row items-center justify-center gap-3">
                    <a href="https://www.google.com/search?q=Tranquil+Minds+Mental+Health+Monticello+MN+reviews" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-6 py-3.5 bg-white border border-primary/15 text-primary rounded-full font-bold hover:border-primary/40 hover:shadow-md transition-all text-xs sm:text-sm">
                        <svg class="w-4 h-4" viewBox="0 0 24 24"><path fill="#4285F4" d="M12.24 10.285V13.4h6.887c-.279 1.56-1.602 4.58-6.887 4.58-4.59 0-8.332-3.799-8.332-8.486S7.65 1.009 12.24 1.009c2.61 0 4.35 1.127 5.35 2.083l2.45-2.355C18.47 1.832 15.62 0 12.24 0 5.58 0 0 5.372 0 12s5.58 12 12.24 12c6.96 0 11.57-4.887 11.57-11.787 0-.796-.08-1.402-.19-1.928H12.24z"/></svg>
                        <span>Read Google Reviews</span>
                    </a>
                    <a href="#consultation-form" class="inline-flex items-center gap-2 px-7 py-3.5 bg-primary hover:bg-primary-dark text-white font-bold rounded-full transition-all text-xs sm:text-sm shadow-md">
                        <span>Book Your Consultation</span>
                        <svg class="w-4 h-4 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

            </div>

            <!-- Slider Script -->
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const track = document.getElementById("reviews-slider-track");
                    const prevBtn = document.getElementById("review-prev-btn");
                    const nextBtn = document.getElementById("review-next-btn");
                    if (track && prevBtn && nextBtn) {
                        prevBtn.addEventListener("click", function() {
                            track.scrollBy({ left: -420, behavior: "smooth" });
                        });
                        nextBtn.addEventListener("click", function() {
                            track.scrollBy({ left: 420, behavior: "smooth" });
                        });
                    }
                });
            </script>
        </section>

        <!-- ================= CLINIC AMBIENCE / ORIGINAL PHOTOS ================= -->
        <section class="py-12 sm:py-20 bg-white border-t border-primary/10">
            <div class="container mx-auto px-4 sm:px-6">
                
                <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-12">
                    <span class="text-primary font-bold tracking-widest uppercase text-xs">Our Monticello Sanctuary</span>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-heading text-primary mt-2">A Calm, Welcoming Healing Environment</h2>
                    <p class="text-base text-gray-600 font-medium mt-3">
                        We designed our Monticello clinic to feel like a tranquil retreat — not a sterile medical office.
                    </p>
                </div>

                <!-- Ambience Mobile Slider / Desktop Grid -->
                <div class="flex overflow-x-auto gap-4 max-w-6xl mx-auto snap-x snap-mandatory sm:grid sm:grid-cols-3 sm:gap-6 sm:overflow-x-visible no-scrollbar pb-6 sm:pb-0 px-2 sm:px-0">
                    <div class="rounded-3xl overflow-hidden shadow-lg border border-primary/10 group h-64 sm:h-72 w-[80%] sm:w-auto flex-shrink-0 snap-center sm:flex-shrink">
                        <img src="../assets/new-imags/ambience-1.webp" alt="Tranquil Minds Clinic Ambience" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="rounded-3xl overflow-hidden shadow-lg border border-primary/10 group h-64 sm:h-72 w-[80%] sm:w-auto flex-shrink-0 snap-center sm:flex-shrink">
                        <img src="../assets/new-imags/ambience-2.webp" alt="Tranquil Minds Consultation Room" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="rounded-3xl overflow-hidden shadow-lg border border-primary/10 group h-64 sm:h-72 w-[80%] sm:w-auto flex-shrink-0 snap-center sm:flex-shrink">
                        <img src="../assets/new-imags/ambience-3.webp" alt="Tranquil Minds Treatment Suite" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>

                <!-- Mobile swipe indicator -->
                <div class="flex items-center justify-center gap-1.5 text-[11px] text-gray-400 mt-2 sm:hidden">
                    <span>← Swipe to view clinic ambience →</span>
                </div>

                <div class="text-center mt-6 sm:mt-8 text-xs text-gray-500 font-medium">
                    Located conveniently at <strong>154 East Broadway Street Suite 2, Monticello, MN 55362</strong> with free, private parking.
                </div>

            </div>
        </section>

        <!-- ================= 3-STEP SIMPLE PROCESS ================= -->
        <section class="py-12 sm:py-20 bg-white border-t border-primary/10">
            <div class="container mx-auto px-4 sm:px-6">
                
                <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-14">
                    <span class="text-primary font-bold tracking-widest uppercase text-xs">Simple Onboarding</span>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-heading text-primary mt-2">How To Get Started In 3 Easy Steps</h2>
                    <p class="text-base text-gray-600 font-medium mt-3">
                        Getting help shouldn't be complicated or stressful. Here is what you can expect from your very first contact.
                    </p>
                </div>

                <!-- Process Mobile Slider / Desktop Grid -->
                <div class="flex overflow-x-auto gap-5 max-w-5xl mx-auto snap-x snap-mandatory md:grid md:grid-cols-3 md:gap-8 md:overflow-x-visible no-scrollbar pb-6 md:pb-0 px-2 md:px-0">
                    
                    <!-- Step 1 -->
                    <div class="bg-cream/50 p-6 sm:p-8 rounded-3xl border border-primary/10 text-center relative group hover:border-primary/30 transition-all w-[85%] sm:w-[60%] flex-shrink-0 snap-center md:w-auto md:flex-shrink">
                        <div class="w-14 h-14 rounded-full bg-primary text-white font-heading text-2xl flex items-center justify-center mx-auto mb-5 shadow-md group-hover:scale-110 transition-transform">
                            1
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-2">Request Consultation</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Fill out our secure online form or call <a href="tel:+16124298280" class="text-primary font-bold hover:underline">612-429-8280</a>. Our clinical coordinator will verify your insurance and schedule your visit.
                        </p>
                    </div>

                    <!-- Step 2 -->
                    <div class="bg-cream/50 p-6 sm:p-8 rounded-3xl border border-primary/10 text-center relative group hover:border-primary/30 transition-all w-[85%] sm:w-[60%] flex-shrink-0 snap-center md:w-auto md:flex-shrink">
                        <div class="w-14 h-14 rounded-full bg-primary text-white font-heading text-2xl flex items-center justify-center mx-auto mb-5 shadow-md group-hover:scale-110 transition-transform">
                            2
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-2">In-Depth Evaluation</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Meet Roxanne for an unhurried 60-minute evaluation (in-person or telehealth) to discuss your symptoms, previous treatments, and recovery goals.
                        </p>
                    </div>

                    <!-- Step 3 -->
                    <div class="bg-cream/50 p-6 sm:p-8 rounded-3xl border border-primary/10 text-center relative group hover:border-primary/30 transition-all w-[85%] sm:w-[60%] flex-shrink-0 snap-center md:w-auto md:flex-shrink">
                        <div class="w-14 h-14 rounded-full bg-primary text-white font-heading text-2xl flex items-center justify-center mx-auto mb-5 shadow-md group-hover:scale-110 transition-transform">
                            3
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-2">Targeted Care &amp; Support</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Begin your personalized treatment plan with regular, attentive monitoring and seamless medication adjustments until you feel your absolute best.
                        </p>
                    </div>

                </div>

                <!-- Mobile swipe indicator -->
                <div class="flex items-center justify-center gap-1.5 text-[11px] text-gray-400 mt-2 md:hidden">
                    <span>← Swipe to view steps →</span>
                </div>

                <div class="text-center mt-8 sm:mt-12">
                    <a href="#consultation-form" class="inline-flex items-center gap-2 px-8 py-4 bg-primary hover:bg-primary-dark text-white font-bold rounded-full transition-all text-base shadow-lg shadow-primary/15">
                        Start Step 1: Request Free Consultation
                        <svg class="w-4 h-4 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

            </div>
        </section>

        <!-- ================= INSURANCE VERIFICATION SECTION ================= -->
        <section id="insurance" class="scroll-mt-20 sm:scroll-mt-24 py-14 sm:py-20 bg-cream border-t border-primary/10">
            <div class="container mx-auto px-4 sm:px-6 max-w-4xl text-center">
                <div class="bg-white border-2 border-primary/10 rounded-3xl p-8 sm:p-12 shadow-xl">
                    <span class="text-primary font-bold uppercase tracking-widest text-xs">Affordable &amp; In-Network</span>
                    <h2 class="text-3xl sm:text-4xl font-heading text-primary mt-2 mb-4">Insurance &amp; Billing Made Simple</h2>
                    <p class="text-base text-gray-600 font-medium max-w-2xl mx-auto mb-8 leading-relaxed">
                        We believe quality psychiatric care should be accessible. We accept major commercial insurances, Medicare, and offer transparent out-of-pocket options.
                    </p>

                    <!-- Insurance Badges Grid -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 items-center justify-center max-w-2xl mx-auto mb-8">
                        <div class="py-3.5 px-3 bg-cream rounded-xl text-xs font-bold text-primary border border-primary/10 flex items-center justify-center">Blue Cross Blue Shield</div>
                        <div class="py-3.5 px-3 bg-cream rounded-xl text-xs font-bold text-primary border border-primary/10 flex items-center justify-center">Medicare</div>
                        <div class="py-3.5 px-3 bg-cream rounded-xl text-xs font-bold text-primary border border-primary/10 flex items-center justify-center">HealthPartners</div>
                        <div class="py-3.5 px-3 bg-cream rounded-xl text-xs font-bold text-primary border border-primary/10 flex items-center justify-center">UnitedHealthcare</div>
                        <div class="py-3.5 px-3 bg-cream rounded-xl text-xs font-bold text-primary border border-primary/10 flex items-center justify-center">Aetna</div>
                        <div class="py-3.5 px-3 bg-cream rounded-xl text-xs font-bold text-primary border border-primary/10 flex items-center justify-center">Cigna</div>
                        <div class="py-3.5 px-3 bg-cream rounded-xl text-xs font-bold text-primary border border-primary/10 flex items-center justify-center">Optum</div>
                        <div class="py-3.5 px-3 bg-cream rounded-xl text-xs font-bold text-primary border border-primary/10 flex items-center justify-center">Medica &amp; More</div>
                    </div>

                    <div class="p-4 bg-soft-purple rounded-2xl border border-primary/10 text-xs sm:text-sm text-primary font-semibold max-w-xl mx-auto mb-6">
                        🔒 Our team conducts a 100% complimentary insurance verification before your first visit so there are zero surprise bills.
                    </div>

                    <a href="#consultation-form" class="inline-flex items-center gap-2 px-7 py-3 bg-primary hover:bg-primary-dark text-white font-bold rounded-full text-sm transition-all shadow-md">
                        Verify My Insurance Coverage
                        <svg class="w-4 h-4 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- ================= FAQ ACCORDION ================= -->
        <section id="faq" class="scroll-mt-20 sm:scroll-mt-24 py-14 sm:py-20 bg-white border-t border-primary/10">
            <div class="container mx-auto px-4 sm:px-6 max-w-4xl">
                
                <div class="text-center mb-12">
                    <span class="text-primary font-bold tracking-widest uppercase text-xs">Clarity &amp; Answers</span>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-heading text-primary mt-2">Frequently Asked Questions</h2>
                    <p class="text-sm text-gray-600 font-semibold mt-3">Everything you need to know about starting psychiatric care at Tranquil Minds.</p>
                </div>

                <div class="space-y-4">
                    
                    <!-- FAQ 1 -->
                    <div class="border border-primary/10 rounded-2xl p-5 bg-cream/30 group">
                        <button type="button" class="accordion-header w-full text-left flex justify-between items-center focus:outline-none cursor-pointer">
                            <span class="text-base sm:text-lg font-bold text-primary">Will I be forced to take medication?</span>
                            <svg class="w-5 h-5 text-primary transform transition-transform duration-300 flex-shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <p class="pt-4 text-gray-700 font-medium leading-relaxed text-sm">
                                Absolutely not. Psychiatric care is a collaborative partnership. During your evaluation, we discuss all available options—including non-medication interventions like Neurostar® TMS therapy, lifestyle modifications, and psychotherapy. You are always in control of your treatment decisions.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="border border-primary/10 rounded-2xl p-5 bg-cream/30 group">
                        <button type="button" class="accordion-header w-full text-left flex justify-between items-center focus:outline-none cursor-pointer">
                            <span class="text-base sm:text-lg font-bold text-primary">How quickly can I be seen for an appointment?</span>
                            <svg class="w-5 h-5 text-primary transform transition-transform duration-300 flex-shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <p class="pt-4 text-gray-700 font-medium leading-relaxed text-sm">
                                Unlike large hospital systems with 3 to 6-month waitlists, we strive to offer appointments within the same week. When you submit your consultation request, our coordinator will reach out promptly to find a time that works best for your schedule.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="border border-primary/10 rounded-2xl p-5 bg-cream/30 group">
                        <button type="button" class="accordion-header w-full text-left flex justify-between items-center focus:outline-none cursor-pointer">
                            <span class="text-base sm:text-lg font-bold text-primary">Do you offer Telehealth video appointments?</span>
                            <svg class="w-5 h-5 text-primary transform transition-transform duration-300 flex-shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <p class="pt-4 text-gray-700 font-medium leading-relaxed text-sm">
                                Yes! We provide secure, HIPAA-compliant telehealth psychiatry appointments for patients residing anywhere in Minnesota, as well as in-person appointments at our welcoming clinic in Monticello, MN.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="border border-primary/10 rounded-2xl p-5 bg-cream/30 group">
                        <button type="button" class="accordion-header w-full text-left flex justify-between items-center focus:outline-none cursor-pointer">
                            <span class="text-base sm:text-lg font-bold text-primary">Can you take over management of my existing prescriptions?</span>
                            <svg class="w-5 h-5 text-primary transform transition-transform duration-300 flex-shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <p class="pt-4 text-gray-700 font-medium leading-relaxed text-sm">
                                Yes. If you are transitioning from another provider or feel your current medications aren't working as well as they should, we perform a thorough review, optimize doses, eliminate unnecessary prescriptions, and ensure smooth continuation of your care.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="border border-primary/10 rounded-2xl p-5 bg-cream/30 group">
                        <button type="button" class="accordion-header w-full text-left flex justify-between items-center focus:outline-none cursor-pointer">
                            <span class="text-base sm:text-lg font-bold text-primary">What age groups do you treat?</span>
                            <svg class="w-5 h-5 text-primary transform transition-transform duration-300 flex-shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <p class="pt-4 text-gray-700 font-medium leading-relaxed text-sm">
                                We treat adolescents (ages 15 and older) and adults. We specialize in adolescent anxiety, ADHD, and school stress, as well as adult mood, trauma, and depressive disorders.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- FAQ Footer Box -->
                <div class="mt-12 text-center bg-cream p-6 sm:p-8 rounded-3xl border border-primary/10">
                    <h4 class="font-bold text-primary text-lg mb-2">Have a question not listed here?</h4>
                    <p class="text-sm text-gray-600 mb-5">Our care coordinators are ready to help answer any questions regarding insurance, appointments, or services.</p>
                    <div class="flex flex-col sm:flex-row gap-3 justify-center">
                        <a href="#consultation-form" class="px-6 py-3 bg-primary hover:bg-primary-dark text-white font-bold rounded-full text-sm transition-all shadow-md">
                            Submit a Question Online
                        </a>
                        <a href="tel:+16124298280" class="px-6 py-3 bg-white border border-primary/20 hover:bg-cream text-primary font-bold rounded-full text-sm transition-all flex items-center justify-center gap-2">
                            <svg class="w-4 h-4 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            Call (612) 429-8280
                        </a>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <!-- ================= FOOTER WITH INTERACTIVE MAP ================= -->
    <footer class="bg-brand-dark text-white/70 py-12 sm:py-16 border-t border-white/10 text-xs">
        <div class="container mx-auto px-4 sm:px-6">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center border-b border-white/10 pb-10 mb-8">
                
                <!-- Left: Brand Info & Clinic Details (6 Cols) -->
                <div class="lg:col-span-6 space-y-4 text-center lg:text-left">
                    <div class="flex items-center justify-center lg:justify-start gap-2.5">
                        <img src="../assets/logo/Tranquil-logo.png" alt="Tranquil Minds Logo" class="h-8 filter brightness-0 invert">
                        <span class="font-heading text-white font-bold text-xl sm:text-2xl">Tranquil Minds</span>
                    </div>
                    
                    <p class="leading-relaxed text-white/70 max-w-lg mx-auto lg:mx-0 text-xs sm:text-sm">
                        Compassionate, evidence-based psychiatric evaluations, medication management, and Neurostar® TMS therapy for adolescents and adults in Monticello, MN and across Minnesota.
                    </p>

                    <!-- Contact & Address Details -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2 text-white/80">
                        <div class="bg-white/5 p-3.5 rounded-xl border border-white/10">
                            <span class="text-purple-300 font-bold uppercase tracking-wider text-[10px] block mb-1">Monticello Clinic</span>
                            <a href="https://www.google.com/maps/search/?api=1&query=154+East+Broadway+Street+Suite+2+Monticello+MN+55362" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors block text-xs leading-relaxed">
                                154 East Broadway Street Suite 2,<br>Monticello, MN 55362
                            </a>
                        </div>
                        <div class="bg-white/5 p-3.5 rounded-xl border border-white/10">
                            <span class="text-purple-300 font-bold uppercase tracking-wider text-[10px] block mb-1">Contact &amp; Inquiries</span>
                            <div class="space-y-1 text-xs">
                                <a href="tel:+16124298280" class="hover:text-purple-200 transition-colors block font-bold text-white">(612) 429-8280</a>
                                <p class="text-white/60">Fax: 855-239-8566</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-2 flex flex-wrap items-center justify-center lg:justify-start gap-3">
                        <a href="#consultation-form" class="inline-flex items-center gap-2 px-6 py-3 bg-primary hover:bg-primary-dark text-white font-bold rounded-full transition-all text-xs shadow-md">
                            <span>Request Free Consultation</span>
                            <svg class="w-3.5 h-3.5 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                        <a href="https://www.google.com/maps/search/?api=1&query=154+East+Broadway+Street+Suite+2+Monticello+MN+55362" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 px-5 py-3 bg-white/10 hover:bg-white/20 text-white font-bold rounded-full transition-all text-xs border border-white/15">
                            <svg class="w-3.5 h-3.5 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span>Get Directions</span>
                        </a>
                    </div>
                </div>

                <!-- Right: Interactive Google Map Embed (6 Cols) -->
                <div class="lg:col-span-6">
                    <div class="relative rounded-2xl sm:rounded-3xl overflow-hidden shadow-2xl border border-white/15 bg-black/40 h-64 sm:h-72 w-full group">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2826.8523714684756!2d-93.79641682374624!3d45.30581447107499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b3a67a4e28b3a5%3A0x5a4568d47bdfd3d5!2s154%20E%20Broadway%20St%20%232%2C%20Monticello%2C%20MN%2055362!5e0!3m2!1sen!2sus!4v1705000000000!5m2!1sen!2sus"
                            class="w-full h-full border-0 filter contrast-[1.05]"
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Tranquil Minds Mental Health Clinic Location in Monticello, MN">
                        </iframe>

                        <!-- Map Floating Badge Overlay -->
                        <div class="absolute bottom-3 left-3 right-3 sm:right-auto bg-brand-dark/90 backdrop-blur-md border border-white/20 p-2.5 rounded-xl text-white flex items-center justify-between gap-3 shadow-lg pointer-events-none">
                            <div class="flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse flex-shrink-0"></span>
                                <span class="text-[11px] font-bold">154 E Broadway St #2, Monticello, MN</span>
                            </div>
                            <a href="https://www.google.com/maps/search/?api=1&query=154+East+Broadway+Street+Suite+2+Monticello+MN+55362" target="_blank" rel="noopener noreferrer" class="text-purple-300 hover:text-white text-[10px] font-bold underline pointer-events-auto">
                                Open Map
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Footer Bottom Legal & Copyright -->
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4 text-[11px] text-white/40 font-medium">
                <div>&copy; 2026 Tranquil Minds Mental Health Inc. All rights reserved.</div>
                <div class="flex gap-4">
                    <a href="../privacy-policy.php" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="../terms-of-service.php" class="hover:text-white transition-colors">Terms of Service</a>
                    <a href="../accessibility-statement.php" class="hover:text-white transition-colors">Accessibility</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- ================= FIXED BOTTOM ACTION BAR (MOBILE ONLY) ================= -->
    <div class="fixed bottom-0 inset-x-0 bg-brand-dark/95 backdrop-blur-md border-t border-white/15 p-2.5 z-40 lg:hidden flex gap-2 shadow-2xl">
        <a href="tel:+16124298280" class="flex-1 py-3 bg-white/10 hover:bg-white/20 text-white font-bold rounded-xl text-center text-xs flex items-center justify-center gap-1.5 border border-white/20">
            <svg class="w-4 h-4 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
            <span>Call Now</span>
        </a>
        <a href="#consultation-form" class="flex-1 py-3 bg-primary hover:bg-primary-dark text-white font-bold rounded-xl text-center text-xs flex items-center justify-center gap-1.5 shadow-md">
            <span>Book Consultation</span>
            <svg class="w-4 h-4 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </a>
    </div>

    <!-- Accordion & Mobile Menu Scripts -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // FAQ Accordion
            const accordions = document.querySelectorAll(".accordion-header");
            accordions.forEach((header) => {
                header.addEventListener("click", () => {
                    const content = header.nextElementSibling;
                    const icon = header.querySelector("svg");
                    const isActive = header.classList.contains("active");

                    accordions.forEach((h) => {
                        h.classList.remove("active");
                        h.nextElementSibling.style.maxHeight = null;
                        const otherIcon = h.querySelector("svg");
                        if (otherIcon) otherIcon.classList.remove("rotate-180");
                    });

                    if (!isActive) {
                        header.classList.add("active");
                        content.style.maxHeight = content.scrollHeight + "px";
                        if (icon) icon.classList.add("rotate-180");
                    }
                });
            });

            // Mobile Menu Drawer
            const menuToggle = document.getElementById("mobile-menu-toggle");
            const menuClose = document.getElementById("mobile-menu-close");
            const overlayClick = document.getElementById("mobile-menu-overlay-click");
            const drawer = document.getElementById("mobile-menu-drawer");
            const drawerContent = drawer.querySelector("div.relative");
            const mobileLinks = document.querySelectorAll(".mobile-nav-link");

            const openDrawer = () => {
                drawer.classList.remove("opacity-0", "pointer-events-none");
                drawerContent.classList.remove("translate-x-full");
                drawerContent.classList.add("translate-x-0");
                document.body.style.overflow = "hidden";
            };

            const closeDrawer = () => {
                drawer.classList.add("opacity-0", "pointer-events-none");
                drawerContent.classList.remove("translate-x-0");
                drawerContent.classList.add("translate-x-full");
                document.body.style.overflow = "";
            };

            if (menuToggle) menuToggle.addEventListener("click", openDrawer);
            if (menuClose) menuClose.addEventListener("click", closeDrawer);
            if (overlayClick) overlayClick.addEventListener("click", closeDrawer);

            mobileLinks.forEach((link) => {
                link.addEventListener("click", closeDrawer);
            });
        });
    </script>

</body>
</html>
