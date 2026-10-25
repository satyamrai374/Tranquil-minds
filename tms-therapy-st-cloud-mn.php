<?php
$page_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalClinic",
      "name": "Tranquil Minds Mental Health - TMS Therapy for St. Cloud, MN",
      "url": "https://tranquilmindsmentalhealth.com/tms-therapy-st-cloud-mn.php",
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
        {"@type": "City", "name": "St. Cloud", "sameAs": "https://en.wikipedia.org/wiki/St._Cloud,_Minnesota"},
        {"@type": "City", "name": "Sartell"},
        {"@type": "City", "name": "Sauk Rapids"},
        {"@type": "City", "name": "Clearwater"}
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
          "name": "Locations",
          "item": "https://tranquilmindsmentalhealth.com/locations.php"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "St. Cloud, MN",
          "item": "https://tranquilmindsmentalhealth.com/tms-therapy-st-cloud-mn.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How far is Tranquil Minds from St. Cloud, MN?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tranquil Minds is approximately 25 miles southeast of St. Cloud down I-94 E. The drive takes about 22 to 25 minutes past Clearwater, offering fast highway navigation with free door-side parking directly outside our clinic."
          }
        },
        {
          "@type": "Question",
          "name": "Can St. Cloud college students receive TMS therapy?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Students from St. Cloud State University (SCSU) and surrounding colleges frequently choose TMS because it does not cause memory impairment, cognitive dulling, or grogginess, allowing them to excel in classes while receiving daily treatment."
          }
        },
        {
          "@type": "Question",
          "name": "Why should Central Minnesota residents drive to Monticello instead of waiting for local hospital openings?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Regional health systems across Central Minnesota frequently have 3 to 6-month waitlists for psychiatric evaluations and specialized neurostimulation. Tranquil Minds can typically evaluate new patients within days and launch treatment quickly."
          }
        },
        {
          "@type": "Question",
          "name": "Which insurance plans cover TMS for St. Cloud and Stearns County residents?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tranquil Minds is in-network with Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna for eligible depression patients."
          }
        },
        {
          "@type": "Question",
          "name": "Can patients drive themselves back to St. Cloud immediately after a TMS session?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. NeuroStar TMS requires no sedation, anesthesia, or grogginess. You are completely alert and clear-headed the moment the 19-minute session ends, allowing you to comfortably drive back up I-94 to St. Cloud."
          }
        },
        {
          "@type": "Question",
          "name": "Does TMS help if multiple antidepressant pills have failed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. NeuroStar is specifically FDA-cleared for Treatment-Resistant Depression. While subsequent medication trials yield diminishing returns, TMS achieves a clinical response rate of over 83% in clinical registry studies."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a formal referral from my St. Cloud healthcare provider?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No formal referral is required. Patients can directly book a complimentary 15-minute consultation through our website or by calling 612-429-8280. We collaborate with your local doctors upon request."
          }
        }
      ]
    }
  ]
}
</script>
';
$page_title       = "TMS Therapy Near St. Cloud MN | Advanced Depression Treatment";
$page_description = "Serving St. Cloud, Clearwater, and Central MN. Tranquil Minds provides certified NeuroStar® TMS therapy and psychiatric care just 24 minutes southeast down I-94.";
$hero_title       = 'TMS Therapy for St. Cloud, MN:<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Central Minnesota Care.</span>';
$hero_subtitle    = 'Looking for certified NeuroStar® TMS therapy near St. Cloud? Escape long clinic waitlists and receive personalized, non-invasive psychiatric healing just down I-94.';
$hero_badge       = 'Serving St. Cloud & Stearns County';
$hero_cta1_text   = 'View Route from St. Cloud';
$hero_cta1_link   = '#st-cloud-route';
$hero_cta2_text   = 'Book Consultation';
$hero_cta2_link   = '#contact';
?>
<?php include 'header.php'; ?>
<?php include 'hero-service.php'; ?>

    <!-- Breadcrumb -->
    <div class="bg-[#FAFAFF] border-b border-primary/5 py-3">
        <div class="container mx-auto px-6 text-xs text-gray-500 flex items-center gap-2">
            <a href="index.php" class="hover:text-primary transition-colors">Home</a>
            <span>/</span>
            <a href="locations.php" class="hover:text-primary transition-colors">Locations</a>
            <span>/</span>
            <span class="text-primary font-semibold">St. Cloud, MN</span>
        </div>
    </div>

    <!-- ===== ST CLOUD REGIONAL OVERVIEW ===== -->
    <section class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 fade-in-section">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Central Minnesota Regional Hub</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl text-primary font-heading mb-6 leading-tight">
                        Breakthrough TMS Depression Care for St. Cloud &amp; Stearns County
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 font-light">
                        Throughout St. Cloud, Sartell, Sauk Rapids, and Clearwater, individuals struggling with major depression and anxiety frequently encounter months-long delays when trying to see a specialized psychiatric provider. When medications fail to bring relief, frustration can turn into despair.
                    </p>
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        Just 24 minutes southeast on I-94, <strong>Tranquil Minds in Monticello</strong> offers immediate access to FDA-cleared <strong><a href="neurostar-tms.php" class="text-accent hover:underline">NeuroStar® TMS therapy</a></strong>. Using focused magnetic pulses, NeuroStar gently activates the brain circuits responsible for mood regulation, bringing up to 83% of patients measurable relief without the side effects of systemic antidepressants.
                    </p>

                    <div class="grid sm:grid-cols-2 gap-4 mb-8">
                        <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                            <div class="text-primary font-bold text-base mb-1">Direct Highway Access</div>
                            <p class="text-gray-500 text-xs">A fast, straight drive down I-94 East past Clearwater into Monticello.</p>
                        </div>
                        <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                            <div class="text-primary font-bold text-base mb-1">Cognitive Clarity for Students</div>
                            <p class="text-gray-500 text-xs">No "medication fog" for SCSU and college students during classes.</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="contact.php" class="px-8 py-4 bg-accent text-white rounded-full font-bold shadow-md hover:bg-accent-light transition-all inline-block">Book Your St. Cloud Consultation</a>
                        <a href="treatment-resistant-depression.php" class="px-8 py-4 bg-white text-primary border border-primary/20 rounded-full font-bold hover:bg-primary/5 transition-all inline-block">Treatment-Resistant Depression &rarr;</a>
                    </div>
                </div>

                <div class="lg:col-span-5 fade-in-section">
                    <!-- Commute Info Card -->
                    <div id="st-cloud-route" class="bg-white rounded-3xl p-8 border border-primary/10 shadow-xl">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 bg-accent/15 text-accent text-xs font-bold rounded-full uppercase">I-94 Eastbound</span>
                            <span class="text-xs text-gray-400 font-semibold">25 Miles · 24 Mins</span>
                        </div>
                        <h3 class="text-2xl font-bold text-primary font-heading mb-3">Directions from St. Cloud, MN</h3>
                        <p class="text-gray-500 text-sm mb-6">Easy highway navigation from downtown St. Cloud or SCSU campus:</p>

                        <div class="space-y-4 text-sm text-gray-700 mb-6">
                            <div class="flex items-start gap-3">
                                <span class="font-bold text-accent">1.</span>
                                <div>Head southeast out of St. Cloud and merge onto I-94 E.</div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="font-bold text-accent">2.</span>
                                <div>Pass Clearwater and approach the Monticello exits.</div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="font-bold text-accent">3.</span>
                                <div>Take Exit 193/194 onto MN-25 N into Broadway Street. Suite 2 is ready with free door-side parking.</div>
                            </div>
                        </div>

                        <div class="bg-[#FAFAFF] p-4 rounded-xl border border-primary/5 text-xs text-gray-500 mb-4">
                            <strong>Insurance Coverage:</strong> In-network with Medicare, HealthPartners, BCBS MN, Medica, and UHC. See our <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
                        </div>

                        <a href="https://maps.google.com/?q=154+East+Broadway+Street+Suite+2,+Monticello,+MN+55362" target="_blank" rel="noopener" class="text-accent font-bold text-xs hover:underline flex items-center gap-1">Open Directions in Google Maps &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CLINICAL CONDITIONS SPOTLIGHT ===== -->
    <section class="py-16 bg-white relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Specialized Clinical Care</span>
                <h2 class="text-3xl md:text-4xl text-primary font-heading mb-4">Targeted Care for Central Minnesota</h2>
                <p class="text-gray-600 text-base">Explore comprehensive outpatient psychiatric services close to Stearns and Wright counties:</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 fade-in-section mb-10">
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-2">Major Depressive Disorder (MDD)</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Physical magnetic stimulation directly targets underactive cortical circuits, reawakening natural serotonin and dopamine neurotransmitter pathways.</p>
                    <a href="depression.php" class="text-accent font-bold text-xs hover:underline">Learn About Depression Care &rarr;</a>
                </div>
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-2">Cognitive Health &amp; Testing</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Track memory, focus, and executive function with computerized Creyos testing throughout your psychiatric care plan.</p>
                    <a href="creyos-cognitive-testing.php" class="text-accent font-bold text-xs hover:underline">Explore Cognitive Testing &rarr;</a>
                </div>
            </div>

            <!-- Surrounding Towns Links -->
            <div class="bg-[#FAFAFF] p-6 rounded-3xl border border-primary/10 text-center">
                <span class="text-xs uppercase tracking-wider text-primary/60 font-bold block mb-2">Nearby Surrounding Communities</span>
                <p class="text-xs text-gray-500 mb-3">Serving Central Minnesota communities along the I-94 and US-10 corridors:</p>
                <div class="flex flex-wrap justify-center gap-3 text-xs">
                    <a href="tms-therapy-becker-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Becker, MN</a>
                    <a href="tms-therapy-big-lake-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Big Lake, MN</a>
                    <a href="tms-therapy-buffalo-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Buffalo, MN</a>
                    <a href="best-tms-clinic-minnesota.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Best TMS Clinic MN</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FAQ ACCORDION (7 EXPANDABLE ITEMS) ===== -->
    <section class="py-16 bg-[#FAFAFF] relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Common Questions</span>
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Frequently Asked Questions: St. Cloud, MN</h2>
                <p class="text-gray-500 text-lg">Clear answers for St. Cloud and Stearns County patients seeking advanced psychiatric care.</p>
            </div>

            <div class="space-y-4 fade-in-section">
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How far is Tranquil Minds from St. Cloud, MN?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Tranquil Minds is approximately 25 miles southeast of St. Cloud down I-94 E. The drive takes about 22 to 25 minutes past Clearwater, offering fast highway navigation with free door-side parking directly outside our clinic.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Can St. Cloud college students receive TMS therapy?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. Students from St. Cloud State University (SCSU) and surrounding colleges frequently choose TMS because it does not cause memory impairment, cognitive dulling, or grogginess, allowing them to excel in classes while receiving daily treatment.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Why should Central Minnesota residents drive to Monticello instead of waiting for local hospital openings?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Regional health systems across Central Minnesota frequently have 3 to 6-month waitlists for psychiatric evaluations and specialized neurostimulation. Tranquil Minds can typically evaluate new patients within days and launch treatment quickly. Learn about our clinic on our <a href="about.php" class="text-accent hover:underline">About page</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Which insurance plans cover TMS for St. Cloud and Stearns County residents?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Tranquil Minds is in-network with Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna for eligible depression patients. Read our full <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Can patients drive themselves back to St. Cloud immediately after a TMS session?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. NeuroStar TMS requires no sedation, anesthesia, or grogginess. You are completely alert and clear-headed the moment the 19-minute session ends, allowing you to comfortably drive back up I-94 to St. Cloud. Learn more about the procedure in <a href="what-is-tms-therapy.php" class="text-accent hover:underline">What Is TMS Therapy</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Does TMS help if multiple antidepressant pills have failed?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. NeuroStar is specifically FDA-cleared for Treatment-Resistant Depression. While subsequent medication trials yield diminishing returns, TMS achieves a clinical response rate of over 83% in clinical registry studies. Explore our <a href="treatment-resistant-depression.php" class="text-accent hover:underline">TRD program details</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Do I need a formal referral from my St. Cloud healthcare provider?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            No formal referral is required. Patients can directly book a complimentary 15-minute consultation through our <a href="contact.php" class="text-accent hover:underline">Contact page</a> or by calling <a href="tel:+16124298280" class="text-accent font-semibold hover:underline">612-429-8280</a>. We collaborate with your local doctors upon request.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
