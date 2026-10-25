<?php
$page_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalClinic",
      "name": "Tranquil Minds Mental Health - Locations & Service Areas",
      "url": "https://tranquilmindsmentalhealth.com/locations.php",
      "logo": "https://tranquilmindsmentalhealth.com/assets/logo/Tranquil-logo.png",
      "description": "Comprehensive mental wellness clinic and certified NeuroStar TMS provider serving Monticello, Buffalo, Elk River, Big Lake, St. Michael, Maple Grove, St. Cloud, and communities across Wright, Sherburne, Hennepin, and Stearns counties.",
      "telephone": "+16124298280",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "154 East Broadway Street, Suite 2",
        "addressLocality": "Monticello",
        "addressRegion": "MN",
        "postalCode": "55362",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 45.3058,
        "longitude": -93.7964
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
          "opens": "09:00",
          "closes": "18:00"
        }
      ],
      "areaServed": [
        {"@type": "City", "name": "Monticello"},
        {"@type": "City", "name": "Buffalo"},
        {"@type": "City", "name": "Elk River"},
        {"@type": "City", "name": "Big Lake"},
        {"@type": "City", "name": "St. Michael"},
        {"@type": "City", "name": "Albertville"},
        {"@type": "City", "name": "Otsego"},
        {"@type": "City", "name": "Maple Grove"},
        {"@type": "City", "name": "Rogers"},
        {"@type": "City", "name": "Becker"},
        {"@type": "City", "name": "St. Cloud"}
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://tranquilmindsmentalhealth.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Service Areas & Locations",
          "item": "https://tranquilmindsmentalhealth.com/locations.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What cities and counties does Tranquil Minds Mental Health serve?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tranquil Minds serves communities throughout Wright, Sherburne, Hennepin, and Stearns counties, including Monticello, Buffalo, Elk River, Big Lake, St. Michael, Albertville, Otsego, Maple Grove, Rogers, Becker, Clearwater, and St. Cloud."
          }
        },
        {
          "@type": "Question",
          "name": "Where is your primary clinic located in Central Minnesota?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our flagship clinic is located at 154 East Broadway Street, Suite 2, Monticello, MN 55362, situated conveniently right off I-94 and MN-25 with free ground-level parking directly outside our doors."
          }
        },
        {
          "@type": "Question",
          "name": "How long does a typical NeuroStar® TMS treatment appointment take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A standard NeuroStar TMS session lasts just 19 minutes. Because there is zero sedation or grogginess, most patients spend less than 30 minutes total at our clinic from arrival to departure."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a doctor referral from another clinic to start care?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No physician referral is required for an initial consultation. Patients across Central Minnesota can self-refer directly by booking online or calling our clinic at 612-429-8280."
          }
        },
        {
          "@type": "Question",
          "name": "Does insurance cover TMS therapy across your service areas?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. NeuroStar TMS therapy is covered by all major health insurance plans in Minnesota including Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna for qualifying patients."
          }
        },
        {
          "@type": "Question",
          "name": "Can patients drive themselves to and from daily appointments?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, absolutely. Unlike ECT or sedating medications, TMS has no systemic cognitive effects. Patients remain fully alert and can immediately drive home or return to work or school."
          }
        },
        {
          "@type": "Question",
          "name": "How quickly can a new patient begin treatment?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Unlike university health networks with multi-month waiting lists, Tranquil Minds typically schedules initial psychiatric consultations within 5 to 7 days, and begins therapy promptly once insurance authorization is verified."
          }
        }
      ]
    }
  ]
}
</script>
';
$page_title       = "Service Areas & Clinic Locations | Tranquil Minds Mental Health MN";
$page_description = "Explore our local service areas in Central Minnesota. Providing certified NeuroStar® TMS therapy, medication management, and psychiatry to Monticello, Buffalo, Elk River, Big Lake, STMA, Maple Grove, and beyond.";
$hero_title       = 'Our Locations &amp;<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Service Areas.</span>';
$hero_subtitle    = 'Located in Monticello, MN, Tranquil Minds delivers world-class NeuroStar® TMS therapy and compassionate psychiatric care to communities across Wright, Sherburne, and Hennepin counties.';
$hero_badge       = 'Central Minnesota Mental Health Hub';
$hero_cta1_text   = 'Explore Cities We Serve';
$hero_cta1_link   = '#service-areas';
$hero_cta2_text   = 'Book Consultation';
$hero_cta2_link   = '#contact';
?>
<?php include 'header.php'; ?>
<?php include 'hero-service.php'; ?>

    <!-- ===== BREADCRUMB ===== -->
    <div class="bg-[#FAFAFF] border-b border-primary/5 py-3">
        <div class="container mx-auto px-6 text-xs text-gray-500 flex items-center gap-2">
            <a href="index.php" class="hover:text-primary transition-colors">Home</a>
            <span>/</span>
            <span class="text-primary font-semibold">Service Areas &amp; Locations</span>
        </div>
    </div>

    <!-- ===== CLINIC HEADQUARTERS HIGHLIGHT ===== -->
    <section class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/10 rounded-full blur-[140px] translate-x-1/3 -translate-y-1/4 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary/8 rounded-full blur-[120px] -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 fade-in-section">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Primary Facility</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl text-primary mb-6 leading-tight" style="font-family: 'Bauhaus Soft', cursive;">
                        A Serene Sanctuary in the Heart of Monticello, MN
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 font-light">
                        Tranquil Minds Mental Health was founded to give Central Minnesota residents an alternative to congested hospital systems and sterile clinical environments. Nestled conveniently on Broadway Street in downtown Monticello, our modern boutique clinic provides peaceful, non-assembly-line psychiatric care. We specialize in <a href="neurostar-tms.php" class="text-accent font-semibold hover:underline">NeuroStar® TMS therapy</a>, <a href="medication-management.php" class="text-accent font-semibold hover:underline">medication management</a>, and <a href="psychotherapy.php" class="text-accent font-semibold hover:underline">psychotherapy</a>.
                    </p>
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        Whether you are traveling from just across the Mississippi River in <a href="tms-therapy-big-lake-mn.php" class="text-primary font-bold hover:text-accent transition-colors">Big Lake</a> or commuting along I-94 from <a href="tms-therapy-buffalo-mn.php" class="text-primary font-bold hover:text-accent transition-colors">Buffalo</a>, <a href="tms-therapy-st-michael-albertville-mn.php" class="text-primary font-bold hover:text-accent transition-colors">St. Michael &amp; Albertville</a>, or <a href="tms-therapy-maple-grove-mn.php" class="text-primary font-bold hover:text-accent transition-colors">Maple Grove</a>, our doors are open with zero waitlists, free on-site parking, and a caring team dedicated solely to your healing. Explore our <a href="tms-therapy-near-me.php" class="text-accent font-semibold hover:underline">TMS clinic locator guide</a> to check travel distances.
                    </p>

                    <div class="grid sm:grid-cols-3 gap-4 mb-8">
                        <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                            <div class="text-accent font-bold text-2xl mb-1" style="font-family: 'Bauhaus Soft', cursive;">154 E Broadway</div>
                            <div class="text-xs text-gray-500 uppercase tracking-wider">Suite 2, Monticello MN</div>
                        </div>
                        <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                            <div class="text-primary font-bold text-2xl mb-1" style="font-family: 'Bauhaus Soft', cursive;">10–25 Mins</div>
                            <div class="text-xs text-gray-500 uppercase tracking-wider">Avg. Drive Across Region</div>
                        </div>
                        <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                            <div class="text-accent font-bold text-2xl mb-1" style="font-family: 'Bauhaus Soft', cursive;">100% In-Network</div>
                            <div class="text-xs text-gray-500 uppercase tracking-wider"><a href="insurance-covered-tms-therapy.php" class="hover:underline">MN Insurance &amp; Medicare</a></div>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="https://maps.google.com/?q=154+East+Broadway+Street+Suite+2,+Monticello,+MN+55362" target="_blank" rel="noopener" class="px-7 py-3.5 bg-primary text-white rounded-full font-bold hover:bg-accent transition-all duration-300 shadow-md flex items-center gap-2">
                            <span>Get GPS Driving Directions</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        </a>
                        <a href="tel:+16124298280" class="px-7 py-3.5 bg-white border border-primary/20 text-primary rounded-full font-bold hover:border-accent hover:text-accent transition-all duration-300">
                            Call 612-429-8280
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5 fade-in-section">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border border-primary/10">
                        <img src="assets/new-imags/ambience-1.webp" alt="Tranquil Minds relaxing clinic waiting suite in Monticello MN" class="w-full h-[440px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent flex flex-col justify-end p-8 text-white">
                            <span class="inline-block px-3 py-1 bg-accent/80 backdrop-blur-md rounded-full text-xs font-bold uppercase tracking-widest mb-2 w-max">Peaceful Atmosphere</span>
                            <h3 class="text-2xl font-bold font-heading mb-1">Tranquil Minds Headquarters</h3>
                            <p class="text-white/80 text-sm">Private NeuroStar® treatment suites with plush ergonomic seating.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== INTERACTIVE TRAVEL MATRIX ===== -->
    <section class="py-16 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-14 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Drive Time &amp; Routes</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-3xl md:text-5xl text-primary mb-5" style="font-family: 'Bauhaus Soft', cursive;">
                    Conveniently Close to Home
                </h2>
                <p class="text-gray-600 text-lg">
                    NeuroStar® TMS sessions take only 19 minutes once daily. Because you remain fully awake with no sedation, patients easily fit appointments into morning routines or lunch hours. Learn <a href="what-is-tms-therapy.php" class="text-accent font-semibold hover:underline">what TMS therapy is</a> and how it gently awakens dormant mood circuits.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 fade-in-section">
                <?php
                $commutes = [
                    ['city' => 'Big Lake, MN', 'time' => '4 - 6 mins', 'dist' => '3 miles', 'route' => 'MN-25 S across the river bridge', 'link' => 'tms-therapy-big-lake-mn.php'],
                    ['city' => 'Buffalo, MN', 'time' => '10 - 13 mins', 'dist' => '10 miles', 'route' => 'Direct North on MN-25 N', 'link' => 'tms-therapy-buffalo-mn.php'],
                    ['city' => 'Albertville / STMA', 'time' => '9 - 12 mins', 'dist' => '9 miles', 'route' => 'Direct West on I-94 W (Exit 193)', 'link' => 'tms-therapy-st-michael-albertville-mn.php'],
                    ['city' => 'Becker, MN', 'time' => '8 - 11 mins', 'dist' => '8 miles', 'route' => 'US-10 E to MN-25 S', 'link' => 'tms-therapy-becker-mn.php'],
                    ['city' => 'Otsego, MN', 'time' => '12 - 15 mins', 'dist' => '12 miles', 'route' => 'County Rd 39 or I-94 W', 'link' => 'tms-therapy-otsego-mn.php'],
                    ['city' => 'Elk River, MN', 'time' => '14 - 17 mins', 'dist' => '15 miles', 'route' => 'US-10 W or MN-101 to I-94', 'link' => 'tms-therapy-elk-river-mn.php'],
                    ['city' => 'Rogers, MN', 'time' => '15 - 18 mins', 'dist' => '16 miles', 'route' => 'I-94 W straight into Monticello', 'link' => 'tms-therapy-rogers-mn.php'],
                    ['city' => 'Maple Grove, MN', 'time' => '20 - 24 mins', 'dist' => '24 miles', 'route' => 'I-94 W (Reverse traffic commute)', 'link' => 'tms-therapy-maple-grove-mn.php'],
                ];
                foreach ($commutes as $c): ?>
                <a href="<?php echo $c['link']; ?>" class="group bg-[#FAFAFF] hover:bg-primary p-6 rounded-3xl border border-primary/10 hover:border-transparent transition-all duration-300 hover:shadow-xl hover:-translate-y-1 block">
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-accent/15 text-accent group-hover:bg-white/20 group-hover:text-white transition-colors"><?php echo $c['time']; ?></span>
                        <span class="text-xs text-gray-400 group-hover:text-white/60 font-semibold"><?php echo $c['dist']; ?></span>
                    </div>
                    <h3 class="text-xl font-bold text-primary group-hover:text-white transition-colors mb-2" style="font-family: 'Bauhaus Soft', cursive;"><?php echo $c['city']; ?></h3>
                    <p class="text-gray-500 group-hover:text-white/80 text-sm mb-4 transition-colors"><?php echo $c['route']; ?></p>
                    <div class="flex items-center gap-2 text-accent group-hover:text-white text-xs font-bold transition-colors">
                        <span>Explore Local Care</span>
                        <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== DEDICATED HYPERLOCAL PAGES DIRECTORY ===== -->
    <section id="service-areas" class="py-20 bg-[#2A163F] relative overflow-hidden text-white">
        <div class="absolute top-0 right-0 w-[700px] h-[700px] bg-accent rounded-full blur-[180px] opacity-15 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-primary/40 rounded-full blur-[160px] opacity-20 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl mb-14 fade-in-section">
                <div class="flex items-center gap-3 mb-4">
                    <span class="h-px w-12 bg-white/30"></span>
                    <span class="text-accent-light font-bold tracking-widest uppercase text-xs">Community Network &amp; Service Directory</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-heading mb-4 text-white">
                    Explore Hyperlocal &amp; Targeted Pages
                </h2>
                <p class="text-white/70 text-lg">
                    Discover specialized care guides, verified driving routes to our Monticello clinic, insurance coverage matrices, and condition-specific TMS treatments across 68+ Central Minnesota communities and search hubs. Check why we are rated among the <a href="best-tms-clinic-minnesota.php" class="text-accent-light underline">best TMS clinics in Minnesota</a>.
                </p>
            </div>

            <!-- Directory Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 fade-in-section">

                <!-- Card 1: Monticello Flagship Hub -->
                <div class="bg-white/5 border border-white/10 hover:border-accent/40 rounded-3xl p-7 backdrop-blur-md transition-all duration-300 hover:shadow-2xl hover:bg-white/[0.07]">
                    <div class="flex items-center justify-between mb-5">
                        <div class="w-12 h-12 rounded-2xl bg-accent/20 flex items-center justify-center text-accent">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <span class="text-xs px-2.5 py-1 rounded-full bg-accent/20 text-accent-light font-semibold">Flagship Hub</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 font-heading text-white">Monticello Clinic</h3>
                    <p class="text-white/60 text-xs mb-5">Specialized psychiatric suites and complete TMS programs located right at 154 E Broadway.</p>
                    <ul class="space-y-2.5">
                        <li><a href="tms-therapy-monticello-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Monticello, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="depression-tms-therapy-monticello-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>Depression TMS Monticello</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="anxiety-treatment-monticello-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>Anxiety Treatment Monticello</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="ocd-treatment-monticello-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>OCD Treatment Monticello</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="treatment-resistant-depression-monticello-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>Treatment-Resistant Depression Monticello</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="adolescent-tms-therapy-monticello-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>Adolescent TMS Monticello (15+)</span> <span class="text-white/40">&rarr;</span></a></li>
                    </ul>
                </div>

                <!-- Card 2: Wright County Towns -->
                <div class="bg-white/5 border border-white/10 hover:border-accent/40 rounded-3xl p-7 backdrop-blur-md transition-all duration-300 hover:shadow-2xl hover:bg-white/[0.07]">
                    <div class="flex items-center justify-between mb-5">
                        <div class="w-12 h-12 rounded-2xl bg-accent/20 flex items-center justify-center text-accent">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        </div>
                        <span class="text-xs px-2.5 py-1 rounded-full bg-white/10 text-white/70 font-semibold">Wright County (12)</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 font-heading text-white">Wright County Towns</h3>
                    <p class="text-white/60 text-xs mb-5">Fast access via MN-25, MN-55, and I-94 with free parking and zero hospital waitlists.</p>
                    <ul class="space-y-2 max-h-[300px] overflow-y-auto pr-1">
                        <li><a href="tms-therapy-buffalo-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Buffalo, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-st-michael-albertville-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS St. Michael &amp; Albertville</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-albertville-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Albertville, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-delano-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Delano, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-annandale-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Annandale, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-maple-lake-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Maple Lake, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-clearwater-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Clearwater, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-rockford-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Rockford, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-hanover-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Hanover, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-montrose-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Montrose, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-howard-lake-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Howard Lake, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-cokato-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Cokato, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                    </ul>
                </div>

                <!-- Card 3: Sherburne & Stearns Corridor -->
                <div class="bg-white/5 border border-white/10 hover:border-accent/40 rounded-3xl p-7 backdrop-blur-md transition-all duration-300 hover:shadow-2xl hover:bg-white/[0.07]">
                    <div class="flex items-center justify-between mb-5">
                        <div class="w-12 h-12 rounded-2xl bg-accent/20 flex items-center justify-center text-accent">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
                        </div>
                        <span class="text-xs px-2.5 py-1 rounded-full bg-white/10 text-white/70 font-semibold">North &amp; West (14)</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 font-heading text-white">Sherburne &amp; Stearns</h3>
                    <p class="text-white/60 text-xs mb-5">Serving US-10, MN-25, and MN-23 communities seeking outpatient, non-invasive neuromodulation.</p>
                    <ul class="space-y-2 max-h-[300px] overflow-y-auto pr-1">
                        <li><a href="tms-therapy-elk-river-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Elk River, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-big-lake-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Big Lake, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-becker-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Becker, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-zimmerman-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Zimmerman, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-princeton-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Princeton, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-clear-lake-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Clear Lake, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-st-cloud-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy St. Cloud, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-sartell-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Sartell, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-sauk-rapids-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Sauk Rapids, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-waite-park-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Waite Park, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-st-joseph-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy St. Joseph, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-cold-spring-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Cold Spring, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-ramsey-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Ramsey, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-anoka-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Anoka, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                    </ul>
                </div>

                <!-- Card 4: West Hennepin & Suburbs -->
                <div class="bg-white/5 border border-white/10 hover:border-accent/40 rounded-3xl p-7 backdrop-blur-md transition-all duration-300 hover:shadow-2xl hover:bg-white/[0.07]">
                    <div class="flex items-center justify-between mb-5">
                        <div class="w-12 h-12 rounded-2xl bg-accent/20 flex items-center justify-center text-accent">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path></svg>
                        </div>
                        <span class="text-xs px-2.5 py-1 rounded-full bg-white/10 text-white/70 font-semibold">West Hennepin (15)</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 font-heading text-white">West Hennepin &amp; Metro</h3>
                    <p class="text-white/60 text-xs mb-5">Reverse-commute convenience along I-94 and US-12 away from congested Twin Cities traffic.</p>
                    <ul class="space-y-2 max-h-[300px] overflow-y-auto pr-1">
                        <li><a href="tms-therapy-maple-grove-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Maple Grove, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-rogers-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Rogers, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-otsego-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Otsego, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-dayton-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Dayton, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-plymouth-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Plymouth, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-osseo-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Osseo, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-corcoran-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Corcoran, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-greenfield-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Greenfield, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-medina-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Medina, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-wayzata-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Wayzata, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-long-lake-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Long Lake, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-minnetonka-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Minnetonka, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-mound-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Mound, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-champlin-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Champlin, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="tms-therapy-coon-rapids-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TMS Therapy Coon Rapids, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                    </ul>
                </div>

                <!-- Card 5: Condition-Specific Regional Hubs -->
                <div class="bg-white/5 border border-white/10 hover:border-accent/40 rounded-3xl p-7 backdrop-blur-md transition-all duration-300 hover:shadow-2xl hover:bg-white/[0.07]">
                    <div class="flex items-center justify-between mb-5">
                        <div class="w-12 h-12 rounded-2xl bg-accent/20 flex items-center justify-center text-accent">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <span class="text-xs px-2.5 py-1 rounded-full bg-white/10 text-white/70 font-semibold">Specialized Care (17)</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 font-heading text-white">Condition Centers</h3>
                    <p class="text-white/60 text-xs mb-5">FDA-cleared protocols for Depression, Anxiety, OCD, TRD, and Adolescent Mental Health.</p>
                    <ul class="space-y-2 max-h-[300px] overflow-y-auto pr-1">
                        <li><a href="depression-tms-therapy-buffalo-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>Depression TMS Buffalo, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="depression-tms-therapy-maple-grove-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>Depression TMS Maple Grove</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="depression-tms-therapy-elk-river-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>Depression TMS Elk River</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="depression-tms-therapy-st-cloud-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>Depression TMS St. Cloud</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="depression-tms-therapy-rogers-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>Depression TMS Rogers, MN</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="anxiety-tms-treatment-big-lake-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>Anxiety TMS Care Big Lake</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="anxiety-treatment-maple-grove-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>Anxiety Treatment Maple Grove</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="anxiety-treatment-elk-river-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>Anxiety Treatment Elk River</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="anxiety-treatment-st-cloud-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>Anxiety Treatment St. Cloud</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="anxiety-treatment-otsego-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>Anxiety Treatment Otsego</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="ocd-treatment-elk-river-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>OCD Treatment Elk River</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="ocd-treatment-maple-grove-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>OCD Treatment Maple Grove</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="ocd-treatment-st-cloud-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>OCD Treatment St. Cloud</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="treatment-resistant-depression-st-michael-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TRD Treatment St. Michael</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="treatment-resistant-depression-maple-grove-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>TRD Treatment Maple Grove</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="adolescent-mental-health-tms-maple-grove-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>Teen TMS Maple Grove (15+)</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="adolescent-mental-health-tms-st-michael-mn.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-1 border-b border-white/5 transition-colors"><span>Adolescent TMS St. Michael (15+)</span> <span class="text-white/40">&rarr;</span></a></li>
                    </ul>
                </div>

                <!-- Card 6: Targeted Search Hubs -->
                <div class="bg-white/5 border border-white/10 hover:border-accent/40 rounded-3xl p-7 backdrop-blur-md transition-all duration-300 hover:shadow-2xl hover:bg-white/[0.07]">
                    <div class="flex items-center justify-between mb-5">
                        <div class="w-12 h-12 rounded-2xl bg-accent/20 flex items-center justify-center text-accent">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <span class="text-xs px-2.5 py-1 rounded-full bg-accent/20 text-accent-light font-semibold">Targeted Guides</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 font-heading text-white">Targeted Search Hubs</h3>
                    <p class="text-white/60 text-xs mb-5">In-depth clinical explanations, technology comparisons, and insurance qualification guides.</p>
                    <ul class="space-y-3">
                        <li><a href="tms-therapy-near-me.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-2 border-b border-white/5 transition-colors"><span>TMS Therapy Near Me &bull; Travel Matrix</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="best-tms-clinic-minnesota.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-2 border-b border-white/5 transition-colors"><span>Best TMS Clinic in Minnesota &bull; Comparison</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="insurance-covered-tms-therapy.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-2 border-b border-white/5 transition-colors"><span>Insurance-Covered TMS &bull; BCBS, HealthPartners, Medicare</span> <span class="text-white/40">&rarr;</span></a></li>
                        <li><a href="neurostar-tms-provider-near-me.php" class="text-white/80 hover:text-accent-light text-xs flex items-center justify-between py-2 border-b border-white/5 transition-colors"><span>NeuroStar® Provider Near Me &bull; Contact Coil Technology</span> <span class="text-white/40">&rarr;</span></a></li>
                    </ul>
                    <div class="mt-6 pt-5 border-t border-white/10 flex items-center justify-between">
                        <span class="text-xs text-white/50">Need assistance checking coverage?</span>
                        <a href="tel:+16124298280" class="text-xs font-bold text-accent-light hover:underline">612-429-8280</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== LOCAL PATIENT EXPERIENCE ===== -->
    <section class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto bg-white rounded-3xl p-8 md:p-12 shadow-xl border border-primary/5 fade-in-section">
                <div class="flex items-center gap-3 mb-4">
                    <span class="h-px w-10 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Why Drive to Monticello?</span>
                </div>
                <h2 class="text-3xl md:text-4xl text-primary font-heading mb-6">
                    A Better Way to Heal in Central Minnesota
                </h2>
                <div class="grid md:grid-cols-2 gap-8 text-gray-600">
                    <div>
                        <h3 class="text-lg font-bold text-primary mb-2 flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-accent/15 text-accent flex items-center justify-center text-xs">✓</span>
                            Personalized Provider Relationships
                        </h3>
                        <p class="text-sm leading-relaxed mb-4">
                            At Tranquil Minds, you are treated directly by founder Roxanne DoBrava, APRN-CNP, PMHNP-BC, rather than rotated through different medical residents or hospital shifts. Read more on our <a href="about.php" class="text-accent font-semibold hover:underline">About Us page</a>.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-primary mb-2 flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-accent/15 text-accent flex items-center justify-center text-xs">✓</span>
                            Discreet, Private Sanctuary
                        </h3>
                        <p class="text-sm leading-relaxed mb-4">
                            Avoid the stress of large medical campuses and parking garages. Our clinic features dedicated ground-level parking and a quiet, calming interior designed for relaxation.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-primary mb-2 flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-accent/15 text-accent flex items-center justify-center text-xs">✓</span>
                            Objective Cognitive Progress
                        </h3>
                        <p class="text-sm leading-relaxed mb-4">
                            We incorporate <a href="creyos.php" class="text-accent font-semibold hover:underline">Creyos cognitive health assessments</a> alongside clinical ratings so you can quantitatively see your memory, attention, and mood circuits improving.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-primary mb-2 flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-accent/15 text-accent flex items-center justify-center text-xs">✓</span>
                            Flexible Working-Hour Sessions
                        </h3>
                        <p class="text-sm leading-relaxed mb-4">
                            We open Monday through Friday from 9 AM to 6 PM with expedited appointment scheduling, ensuring therapy fits smoothly around your employment and family life.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FAQ ACCORDION ===== -->
    <section class="py-16 bg-white relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Common Questions</span>
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Frequently Asked Questions: Central MN Locations</h2>
                <p class="text-gray-500 text-lg">Clear, transparent answers about our locations, travel times, and psychiatric care.</p>
            </div>

            <div class="space-y-4 fade-in-section">
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What cities and counties does Tranquil Minds Mental Health serve?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Tranquil Minds serves communities throughout Wright, Sherburne, Hennepin, and Stearns counties, including Monticello, <a href="tms-therapy-buffalo-mn.php" class="text-accent hover:underline">Buffalo</a>, <a href="tms-therapy-elk-river-mn.php" class="text-accent hover:underline">Elk River</a>, <a href="tms-therapy-big-lake-mn.php" class="text-accent hover:underline">Big Lake</a>, <a href="tms-therapy-st-michael-albertville-mn.php" class="text-accent hover:underline">St. Michael &amp; Albertville</a>, <a href="tms-therapy-otsego-mn.php" class="text-accent hover:underline">Otsego</a>, <a href="tms-therapy-maple-grove-mn.php" class="text-accent hover:underline">Maple Grove</a>, <a href="tms-therapy-rogers-mn.php" class="text-accent hover:underline">Rogers</a>, <a href="tms-therapy-becker-mn.php" class="text-accent hover:underline">Becker</a>, and <a href="tms-therapy-st-cloud-mn.php" class="text-accent hover:underline">St. Cloud</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Where is your primary clinic located in Central Minnesota?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Our clinic is located at 154 East Broadway Street, Suite 2, Monticello, MN 55362. We are situated directly off I-94 and MN-25 with free ground-level parking right outside our entrance. You can find detailed driving maps on our <a href="contact.php" class="text-accent hover:underline">Contact page</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How long does a typical NeuroStar® TMS treatment appointment take?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            A standard NeuroStar TMS session lasts just 19 minutes. Because there is zero sedation or grogginess, most patients spend less than 30 minutes total at our clinic from arrival to departure, making it easy to fit into workdays or lunch breaks. Learn more on our <a href="what-is-tms-therapy.php" class="text-accent hover:underline">What Is TMS Therapy guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Do I need a doctor referral from another clinic to start care?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            No physician referral is required for an initial consultation. Patients across Central Minnesota can self-refer directly by booking online or calling our clinic at <a href="tel:+16124298280" class="text-accent font-semibold hover:underline">612-429-8280</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Does insurance cover TMS therapy across your service areas?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. NeuroStar TMS therapy is covered by all major health insurance plans in Minnesota including Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna for qualifying patients. Check our <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a> for full pre-authorization details.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Can patients drive themselves to and from daily appointments?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes, absolutely. Unlike ECT or sedating medications, TMS has no systemic cognitive effects. Patients remain fully alert and can immediately drive home or return to work or school. Read our <a href="tms-adults.php" class="text-accent hover:underline">TMS for Adults guide</a> for treatment insights.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How quickly can a new patient begin treatment?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Unlike university health networks with multi-month waiting lists, Tranquil Minds typically schedules initial psychiatric consultations within 5 to 7 days, and begins therapy promptly once insurance authorization is verified. <a href="contact.php" class="text-accent font-semibold hover:underline">Book a free consultation today</a> to get started.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
