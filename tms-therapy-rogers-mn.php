<?php
$page_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalClinic",
      "name": "Tranquil Minds Mental Health - TMS Therapy for Rogers, MN",
      "url": "https://tranquilmindsmentalhealth.com/tms-therapy-rogers-mn.php",
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
        {"@type": "City", "name": "Rogers", "sameAs": "https://en.wikipedia.org/wiki/Rogers,_Minnesota"},
        {"@type": "City", "name": "Dayton", "sameAs": "https://en.wikipedia.org/wiki/Dayton,_Minnesota"}
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
          "name": "Rogers, MN",
          "item": "https://tranquilmindsmentalhealth.com/tms-therapy-rogers-mn.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How long is the drive from Rogers to Tranquil Minds in Monticello?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The drive from Rogers takes only 14 to 16 minutes (approximately 16 miles) heading westbound on I-94, offering a fast reverse commute away from metro congestion directly to our clinic."
          }
        },
        {
          "@type": "Question",
          "name": "Why do Rogers patients choose Tranquil Minds over Twin Cities hospital clinics?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rather than fighting Minneapolis traffic and paying for hospital parking ramps, Rogers patients enjoy a stress-free highway drive to a private boutique clinic where care is directly supervised by board-certified PMHNP-BC Roxanne DoBrava."
          }
        },
        {
          "@type": "Question",
          "name": "Can Rogers working professionals schedule convenient appointments around their commute?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. NeuroStar TMS sessions last only 19 minutes with zero sedation or downtime. Patients easily attend sessions before their workday, during lunch, or on their evening commute home along I-94."
          }
        },
        {
          "@type": "Question",
          "name": "Which insurance plans cover TMS therapy for Rogers and Hennepin County residents?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tranquil Minds is in-network with Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna for qualifying depressive disorders."
          }
        },
        {
          "@type": "Question",
          "name": "How does TMS compare to antidepressant medications for Rogers patients?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Antidepressants circulate throughout the entire body and commonly cause unwanted side effects such as fatigue, emotional blunting, weight gain, or sexual dysfunction. TMS uses targeted magnetic fields to stimulate mood-regulating brain tissue with zero systemic side effects."
          }
        },
        {
          "@type": "Question",
          "name": "Can teenagers in the Rogers area receive TMS therapy?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. NeuroStar TMS is FDA-cleared for adolescents aged 15 and older with Major Depressive Disorder, offering high school students a proven non-drug therapy that does not impair memory or focus."
          }
        },
        {
          "@type": "Question",
          "name": "How do I get started with an initial evaluation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can request a complimentary 15-minute consultation through our website or call 612-429-8280. Our team will verify your insurance benefits and schedule your evaluation promptly."
          }
        }
      ]
    }
  ]
}
</script>
';
$page_title       = "TMS Therapy Rogers MN | Leading NeuroStar TMS Care";
$page_description = "Serving Rogers and Dayton, MN. Tranquil Minds provides FDA-cleared NeuroStar® TMS therapy and psychiatric care just 16 minutes west on I-94 in Monticello.";
$hero_title       = 'TMS Therapy for Rogers, MN:<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Modern Mental Healing.</span>';
$hero_subtitle    = 'Discover non-drug, non-invasive depression relief just 16 minutes west on I-94. Certified NeuroStar® TMS therapy in a calm, boutique clinic setting.';
$hero_badge       = 'Serving Rogers & I-94 Corridor';
$hero_cta1_text   = 'View Route from Rogers';
$hero_cta1_link   = '#rogers-route';
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
            <span class="text-primary font-semibold">Rogers, MN</span>
        </div>
    </div>

    <!-- ===== ROGERS COMMUNITY HIGHLIGHT ===== -->
    <section class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 fade-in-section">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Hennepin County Care</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl text-primary font-heading mb-6 leading-tight">
                        A Clear Path Out of Depression for Rogers Residents
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 font-light">
                        Residents in Rogers and Dayton often find themselves caught between two healthcare worlds: navigating crowded Minneapolis hospitals to the south or driving aimlessly to find psychiatric appointments with available openings.
                    </p>
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        Just 16 minutes west on I-94, <strong>Tranquil Minds in Monticello</strong> offers an immediate, tranquil solution. We specialize in <strong><a href="neurostar-tms.php" class="text-accent hover:underline">NeuroStar® TMS therapy</a></strong>—an FDA-cleared, drug-free therapy that targets underactive mood centers with gentle magnetic pulses, helping up to 62% of patients achieve full remission from severe depressive symptoms.
                    </p>

                    <div class="bg-white p-6 rounded-3xl border border-primary/10 shadow-sm mb-8">
                        <h3 class="text-primary font-bold text-base mb-3">The Rogers Advantage:</h3>
                        <div class="grid sm:grid-cols-2 gap-3 text-sm text-gray-600">
                            <div>• Quick 16-minute reverse commute along I-94 W</div>
                            <div>• Personalized 1-on-1 care by Roxanne DoBrava, PMHNP-BC</div>
                            <div>• Zero sedation or recovery downtime needed</div>
                            <div>• In-network with <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline font-semibold">BCBS MN, HealthPartners, Medica &amp; UHC</a></div>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="contact.php" class="px-8 py-4 bg-accent text-white rounded-full font-bold shadow-md hover:bg-accent-light transition-all inline-block">Book Rogers Consultation</a>
                        <a href="treatment-resistant-depression.php" class="px-8 py-4 bg-white text-primary border border-primary/20 rounded-full font-bold hover:bg-primary/5 transition-all inline-block">Explore TRD Care &rarr;</a>
                    </div>
                </div>

                <div class="lg:col-span-5 fade-in-section">
                    <!-- Commute Info Card -->
                    <div id="rogers-route" class="bg-white rounded-3xl p-8 border border-primary/10 shadow-xl">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 bg-accent/15 text-accent text-xs font-bold rounded-full uppercase">I-94 West</span>
                            <span class="text-xs text-gray-400 font-semibold">16 Miles · 16 Mins</span>
                        </div>
                        <h3 class="text-2xl font-bold text-primary font-heading mb-3">Directions from Rogers, MN</h3>
                        <p class="text-gray-500 text-sm mb-6">Effortless highway navigation straight into Monticello:</p>

                        <div class="space-y-4 text-sm text-gray-700 mb-6">
                            <div class="flex items-start gap-3">
                                <span class="font-bold text-accent">1.</span>
                                <div>Merge onto I-94 W from MN-101 / Rogers Drive.</div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="font-bold text-accent">2.</span>
                                <div>Drive westbound past St. Michael and Albertville (approx 12 miles).</div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="font-bold text-accent">3.</span>
                                <div>Take Exit 193/194 onto Broadway Street into downtown Monticello. Park directly in front of Suite 2.</div>
                            </div>
                        </div>

                        <div class="bg-[#FAFAFF] p-4 rounded-xl border border-primary/5 text-xs text-gray-500 mb-4">
                            <strong>Coverage:</strong> In-network with Medicare, HealthPartners, BCBS MN, Medica, UHC. See our <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
                        </div>

                        <a href="https://maps.google.com/?q=154+East+Broadway+Street+Suite+2,+Monticello,+MN+55362" target="_blank" rel="noopener" class="text-accent font-bold text-xs hover:underline flex items-center gap-1">Open in Google Maps &rarr;</a>
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
                <h2 class="text-3xl md:text-4xl text-primary font-heading mb-4">Advanced Solutions for Rogers Residents</h2>
                <p class="text-gray-600 text-base">Evidence-based psychiatric therapies beyond conventional medication limits:</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 fade-in-section mb-10">
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-2">Major Depressive Disorder (MDD)</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Stimulate underactive neural networks in the left prefrontal cortex to alleviate apathy, despair, and mental fatigue naturally.</p>
                    <a href="depression.php" class="text-accent font-bold text-xs hover:underline">Depression Care Details &rarr;</a>
                </div>
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-2">Adolescent Mental Health (15+)</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">FDA-cleared for teenagers. Provides safe, non-drug relief for high school students experiencing persistent depressive symptoms.</p>
                    <a href="tms-adolescents.php" class="text-accent font-bold text-xs hover:underline">Teen TMS Program &rarr;</a>
                </div>
            </div>

            <!-- Surrounding Towns Links -->
            <div class="bg-[#FAFAFF] p-6 rounded-3xl border border-primary/10 text-center">
                <span class="text-xs uppercase tracking-wider text-primary/60 font-bold block mb-2">Nearby Surrounding Communities</span>
                <p class="text-xs text-gray-500 mb-3">Serving the Northwest Hennepin and Wright County communities:</p>
                <div class="flex flex-wrap justify-center gap-3 text-xs">
                    <a href="tms-therapy-maple-grove-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Maple Grove, MN</a>
                    <a href="tms-therapy-st-michael-albertville-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">St. Michael &amp; Albertville</a>
                    <a href="tms-therapy-elk-river-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Elk River, MN</a>
                    <a href="tms-therapy-otsego-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Otsego, MN</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FAQ ACCORDION (7 EXPANDABLE ITEMS) ===== -->
    <section class="py-16 bg-[#FAFAFF] relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Common Questions</span>
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Frequently Asked Questions: Rogers, MN</h2>
                <p class="text-gray-500 text-lg">Helpful guidance for Rogers and Dayton patients exploring non-invasive psychiatric TMS therapy.</p>
            </div>

            <div class="space-y-4 fade-in-section">
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How long is the drive from Rogers to Tranquil Minds in Monticello?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            The drive from Rogers takes only 14 to 16 minutes (approximately 16 miles) heading westbound on I-94, offering a fast reverse commute away from metro congestion directly to our clinic.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Why do Rogers patients choose Tranquil Minds over Twin Cities hospital clinics?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Rather than fighting Minneapolis traffic and paying for hospital parking ramps, Rogers patients enjoy a stress-free highway drive to a private boutique clinic where care is directly supervised by board-certified PMHNP-BC Roxanne DoBrava. Read more on our <a href="about.php" class="text-accent hover:underline">About page</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Can Rogers working professionals schedule convenient appointments around their commute?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. NeuroStar TMS sessions last only 19 minutes with zero sedation or downtime. Patients easily attend sessions before their workday, during lunch, or on their evening commute home along I-94.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Which insurance plans cover TMS therapy for Rogers and Hennepin County residents?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Tranquil Minds is in-network with Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna for qualifying depressive disorders. See our detailed <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How does TMS compare to antidepressant medications for Rogers patients?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Antidepressants circulate throughout the entire body and commonly cause unwanted side effects such as fatigue, emotional blunting, weight gain, or sexual dysfunction. TMS uses targeted magnetic fields to stimulate mood-regulating brain tissue with zero systemic side effects. Explore <a href="what-is-tms-therapy.php" class="text-accent hover:underline">What Is TMS Therapy</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Can teenagers in the Rogers area receive TMS therapy?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. NeuroStar TMS is FDA-cleared for adolescents aged 15 and older with Major Depressive Disorder, offering high school students a proven non-drug therapy that does not impair memory or focus. Read our dedicated <a href="tms-adolescents.php" class="text-accent hover:underline">Adolescent TMS guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How do I get started with an initial evaluation?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            You can request a complimentary 15-minute consultation through our <a href="contact.php" class="text-accent hover:underline">Contact page</a> or call <a href="tel:+16124298280" class="text-accent font-semibold hover:underline">612-429-8280</a>. Our team will verify your insurance benefits and schedule your evaluation promptly.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
