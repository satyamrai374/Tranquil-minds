<?php
$page_title = "Consultation Request Received - Tranquil Minds Mental Health";
$page_description = "Thank you for requesting a psychiatric consultation at Tranquil Minds. Our clinical coordinator will reach out shortly to confirm your appointment.";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="robots" content="noindex, nofollow">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../assets/logo/Tranquil-logo.png">
    <link rel="shortcut icon" type="image/png" href="../assets/logo/Tranquil-logo.png">
    <link rel="apple-touch-icon" href="../assets/logo/Tranquil-logo.png">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17988087500"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-17988087500');
    </script>
    <!-- Event snippet for Submit lead form conversion page -->
    <script>
      gtag('event', 'conversion', {
          'send_to': 'AW-17988087500/vKtoCMeOidIcEMzdsYFD',
          'value': 1.0,
          'currency': 'USD'
      });
    </script>

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
    </style>
</head>

<body class="bg-cream font-sans text-primary min-h-screen flex flex-col selection:bg-primary/20 selection:text-primary">

    <!-- Header -->
    <header class="w-full bg-primary py-4 border-b border-white/10 shadow-md">
        <div class="container mx-auto px-6 flex items-center justify-between">
            <a href="index.php" class="flex items-center gap-2 sm:gap-3 group">
                <img src="../assets/logo/Tranquil-logo.png" alt="Tranquil Minds Logo" class="h-9 sm:h-11 w-auto filter brightness-0 invert">
                <span class="font-heading text-white font-bold text-lg sm:text-2xl tracking-tight leading-none group-hover:text-purple-200 transition-colors">Tranquil Minds</span>
            </a>

            <div>
                <a href="tel:+16124298280" class="inline-flex items-center gap-1.5 px-3 py-1.5 sm:px-4 sm:py-2 bg-white/15 hover:bg-white/25 text-white font-bold rounded-full transition-all text-xs sm:text-sm border border-white/20 shadow">
                    <svg class="w-4 h-4 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    <span class="hidden sm:inline">Call Us:</span> (612) 429-8280
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow flex items-center justify-center py-12 px-4 sm:px-6">
        <div class="max-w-xl w-full bg-white rounded-3xl p-8 sm:p-12 border border-primary/10 text-center shadow-xl">
            
            <!-- Success Icon -->
            <div class="w-16 h-16 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-inner">
                <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>

            <h1 class="text-2xl sm:text-3xl font-heading text-primary mb-3">We Have Received Your Request!</h1>
            <p class="text-gray-600 text-sm sm:text-base mb-6 leading-relaxed font-medium">
                Thank you for taking the first step toward lasting mental wellness. Our clinical care team is reviewing your details and will call or text you shortly to verify your insurance and confirm your appointment.
            </p>

            <!-- What to expect box -->
            <div class="bg-cream rounded-2xl p-5 border border-primary/10 text-left mb-6 space-y-3 text-xs sm:text-sm text-gray-700">
                <h4 class="font-bold text-primary text-sm flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-primary"></span> What happens next?
                </h4>
                <div class="flex items-start gap-2.5">
                    <span class="font-bold text-primary">1.</span>
                    <span><strong>Prompt Follow-Up:</strong> A clinical coordinator will reach out during business hours.</span>
                </div>
                <div class="flex items-start gap-2.5">
                    <span class="font-bold text-primary">2.</span>
                    <span><strong>Free Insurance Check:</strong> We will verify your coverage and review copays with zero surprise fees.</span>
                </div>
                <div class="flex items-start gap-2.5">
                    <span class="font-bold text-primary">3.</span>
                    <span><strong>Confirmed Evaluation:</strong> We will lock in your in-person or telehealth visit with Roxanne DoBrava.</span>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="tel:+16124298280" class="inline-flex items-center justify-center gap-2 px-6 py-3.5 bg-primary hover:bg-primary-dark text-white font-bold rounded-full transition-all text-sm shadow-md">
                    <svg class="w-4 h-4 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    <span>Call Clinic Directly</span>
                </a>
                <a href="../index.php" class="inline-flex items-center justify-center px-6 py-3.5 bg-cream hover:bg-gray-100 text-primary font-bold rounded-full transition-all text-sm border border-primary/10">
                    Return to Home
                </a>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-brand-dark text-white/60 py-6 border-t border-white/10 text-xs text-center">
        <div class="container mx-auto px-6">
            <p>&copy; 2026 Tranquil Minds Mental Health Inc. Monticello, MN. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
