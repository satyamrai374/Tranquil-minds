<?php
$page_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalClinic",
      "name": "Tranquil Minds Mental Health - TMS Therapy for St. Michael & Albertville, MN",
      "url": "https://tranquilmindsmentalhealth.com/tms-therapy-st-michael-albertville-mn.php",
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
        {"@type": "City", "name": "St. Michael", "sameAs": "https://en.wikipedia.org/wiki/St._Michael,_Minnesota"},
        {"@type": "City", "name": "Albertville", "sameAs": "https://en.wikipedia.org/wiki/Albertville,_Minnesota"}
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
          "name": "St. Michael & Albertville, MN",
          "item": "https://tranquilmindsmentalhealth.com/tms-therapy-st-michael-albertville-mn.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How far is Tranquil Minds from St. Michael and Albertville?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tranquil Minds is only 9 to 11 miles northwest of St. Michael and Albertville, MN. A straightforward drive westbound on I-94 takes about 10 minutes, providing an easy reverse commute away from metro gridlock."
          }
        },
        {
          "@type": "Question",
          "name": "Is TMS therapy safe for teenagers in the STMA area?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. NeuroStar TMS is FDA-cleared for adolescents aged 15 and older with Major Depressive Disorder, providing a drug-free treatment option without psychiatric medication side effects like emotional blunting or weight changes."
          }
        },
        {
          "@type": "Question",
          "name": "Can STMA working professionals fit daily TMS sessions into their commute?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely. NeuroStar sessions take only 19 minutes and require zero downtime or sedation. Patients can drive immediately before or after their workday without interrupting professional or family schedules."
          }
        },
        {
          "@type": "Question",
          "name": "Which insurance plans cover TMS for St. Michael and Albertville patients?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tranquil Minds is in-network with Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna for eligible depression patients."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between TMS and ECT (Electroconvulsive Therapy)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "TMS is gentle, targeted, and non-systemic. It requires no general anesthesia, induces no seizures, causes no memory loss, and is performed in a comfortable outpatient chair while you remain fully awake."
          }
        },
        {
          "@type": "Question",
          "name": "How does Tranquil Minds help with Treatment-Resistant Depression in STMA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "When 2 or more antidepressant medications fail, TMS delivers targeted magnetic stimulation to activate dormant neural networks in the prefrontal cortex, achieving clinical response in over 80% of patients."
          }
        },
        {
          "@type": "Question",
          "name": "How can I schedule an assessment for myself or my teenager?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can request a free 15-minute consultation through our website or call 612-429-8280. Our clinical team coordinates insurance pre-authorization directly with your insurer."
          }
        }
      ]
    }
  ]
}
</script>
';
$page_title       = "TMS Therapy St. Michael & Albertville MN | STMA Mental Health Care";
$page_description = "Serving St. Michael & Albertville (STMA), MN. Tranquil Minds provides FDA-cleared NeuroStar® TMS therapy and psychiatric care just 10 minutes west on I-94.";
$hero_title       = 'TMS Therapy for STMA:<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">St. Michael &amp; Albertville.</span>';
$hero_subtitle    = 'Experience elite psychiatric care and drug-free NeuroStar® TMS therapy just 10 minutes west on I-94. Reverse commute away from Twin Cities traffic to healing.';
$hero_badge       = 'Serving STMA & Eastern Wright County';
$hero_cta1_text   = 'View STMA Commute';
$hero_cta1_link   = '#commute';
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
            <span class="text-primary font-semibold">St. Michael &amp; Albertville, MN</span>
        </div>
    </div>

    <!-- ===== STMA COMMUNITY HIGHLIGHT ===== -->
    <section class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 fade-in-section">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">STMA Mental Wellness</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl text-primary font-heading mb-6 leading-tight">
                        Advanced Depression, Anxiety &amp; Teen Care for STMA Families
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 font-light">
                        St. Michael and Albertville are vibrant, high-achieving communities filled with hardworking families, bustling school activities, and daily commutes. But the pressure of modern family life, coupled with biological vulnerability, can lead to severe clinical depression, burnout, and debilitating anxiety.
                    </p>
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        If medications have left you or your teenager feeling sluggish, emotionally numb, or experiencing unresolved treatment-resistant depression, you don't have to drive 45 minutes into Minneapolis to get elite care. Located just 10 minutes west on I-94 in Monticello, Tranquil Minds delivers <strong><a href="neurostar-tms.php" class="text-accent hover:underline">NeuroStar® TMS therapy</a></strong> in a quiet, confidential boutique setting.
                    </p>

                    <div class="grid sm:grid-cols-2 gap-4 mb-8">
                        <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                            <div class="text-primary font-bold text-base mb-1">Easy Reverse Commute</div>
                            <p class="text-gray-500 text-xs">Drive west on I-94 away from Minneapolis morning traffic jams.</p>
                        </div>
                        <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                            <div class="text-primary font-bold text-base mb-1">Adolescent TMS (15+)</div>
                            <p class="text-gray-500 text-xs">FDA-cleared drug-free alternative for <a href="tms-adolescents.php" class="text-accent hover:underline">STMA high school students</a>.</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="contact.php" class="px-8 py-4 bg-accent text-white rounded-full font-bold shadow-md hover:bg-accent-light transition-all inline-block">Schedule STMA Consultation</a>
                        <a href="treatment-resistant-depression-st-michael-mn.php" class="px-8 py-4 bg-white text-primary border border-primary/20 rounded-full font-bold hover:bg-primary/5 transition-all inline-block">STMA TRD Treatment &rarr;</a>
                    </div>
                </div>

                <div class="lg:col-span-5 fade-in-section">
                    <!-- Commute Visual -->
                    <div id="commute" class="bg-white rounded-3xl p-8 border border-primary/10 shadow-xl">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 bg-accent/15 text-accent text-xs font-bold rounded-full uppercase">I-94 Westbound</span>
                            <span class="text-xs text-gray-400 font-semibold">9–11 Miles · 10 Mins</span>
                        </div>
                        <h3 class="text-2xl font-bold text-primary font-heading mb-3">Directions from St. Michael &amp; Albertville</h3>
                        <p class="text-gray-500 text-sm mb-6">Visiting from the Albertville Premium Outlets or central St. Michael is remarkably simple:</p>

                        <div class="space-y-4 text-sm text-gray-700 mb-6">
                            <div class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-accent text-white flex items-center justify-center text-xs font-bold flex-shrink-0">1</span>
                                <div>
                                    <div class="font-bold text-primary">Merge onto I-94 W</div>
                                    <div class="text-xs text-gray-500">From Albertville / St. Michael, head west past County Rd 19 / 37.</div>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-accent text-white flex items-center justify-center text-xs font-bold flex-shrink-0">2</span>
                                <div>
                                    <div class="font-bold text-primary">Take Exit 193 or 194</div>
                                    <div class="text-xs text-gray-500">Exit into Monticello onto MN-25 N / Broadway Street.</div>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-accent text-white flex items-center justify-center text-xs font-bold flex-shrink-0">3</span>
                                <div>
                                    <div class="font-bold text-primary">Arrive at Suite 2</div>
                                    <div class="text-xs text-gray-500">Park directly outside 154 East Broadway Street. Total trip: 10 mins.</div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-[#FAFAFF] p-4 rounded-xl border border-primary/5 text-xs text-gray-500 mb-4">
                            <strong>Insurance Coverage:</strong> Major commercial plans &amp; Medicare accepted. Learn more in our <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
                        </div>

                        <a href="https://maps.google.com/?q=154+East+Broadway+Street+Suite+2,+Monticello,+MN+55362" target="_blank" rel="noopener" class="text-accent font-bold text-xs hover:underline flex items-center gap-1">Open Directions in Google Maps &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CLINICAL FOCUS CARDS ===== -->
    <section class="py-16 bg-white relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Specialized Clinical Care</span>
                <h2 class="text-3xl md:text-4xl text-primary font-heading mb-4">Proven Programs for STMA Patients</h2>
                <p class="text-gray-600 text-base">Comprehensive psychiatric care tailored to your unique clinical history:</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 fade-in-section mb-12">
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-2">Treatment-Resistant Depression (TRD)</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">When two or more antidepressants have disappointed you, NeuroStar magnetic therapy physically stimulates underactive prefrontal cortex neurons to spark neuroplasticity.</p>
                    <a href="treatment-resistant-depression-st-michael-mn.php" class="text-accent font-bold text-xs hover:underline">STMA TRD Treatment &rarr;</a>
                </div>
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-2">Adolescent Depression (Ages 15+)</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">FDA-cleared for teens. No sedation, no memory loss, and no interruption to STMA High School classes or athletic activities.</p>
                    <a href="tms-adolescents.php" class="text-accent font-bold text-xs hover:underline">Teen TMS Information &rarr;</a>
                </div>
            </div>

            <!-- Surrounding Towns Links -->
            <div class="bg-[#FAFAFF] p-6 rounded-3xl border border-primary/10 text-center">
                <span class="text-xs uppercase tracking-wider text-primary/60 font-bold block mb-2">Nearby Surrounding Communities</span>
                <p class="text-xs text-gray-500 mb-3">Serving the entire I-94 corridor across Wright &amp; Hennepin counties:</p>
                <div class="flex flex-wrap justify-center gap-3 text-xs">
                    <a href="tms-therapy-rogers-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Rogers, MN</a>
                    <a href="tms-therapy-otsego-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Otsego, MN</a>
                    <a href="tms-therapy-buffalo-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Buffalo, MN</a>
                    <a href="tms-therapy-maple-grove-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Maple Grove, MN</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FAQ ACCORDION (7 EXPANDABLE ITEMS) ===== -->
    <section class="py-16 bg-[#FAFAFF] relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Common Questions</span>
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Frequently Asked Questions: STMA</h2>
                <p class="text-gray-500 text-lg">Clear answers for St. Michael and Albertville residents seeking non-drug psychiatric care.</p>
            </div>

            <div class="space-y-4 fade-in-section">
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How far is Tranquil Minds from St. Michael and Albertville?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Tranquil Minds is only 9 to 11 miles northwest of St. Michael and Albertville, MN. A straightforward drive westbound on I-94 takes about 10 minutes, providing an easy reverse commute away from metro gridlock directly to Monticello.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Is TMS therapy safe for teenagers in the STMA area?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. NeuroStar TMS is FDA-cleared for adolescents aged 15 and older with Major Depressive Disorder, providing a drug-free treatment option without psychiatric medication side effects like emotional blunting or weight changes. Read more in our <a href="tms-adolescents.php" class="text-accent hover:underline">Teen TMS guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Can STMA working professionals fit daily TMS sessions into their commute?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Absolutely. NeuroStar sessions take only 19 minutes and require zero downtime or sedation. Patients can drive immediately before or after their workday without interrupting professional or family schedules.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Which insurance plans cover TMS for St. Michael and Albertville patients?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Tranquil Minds is in-network with Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna for eligible depression patients. Explore our comprehensive <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What is the difference between TMS and ECT (Electroconvulsive Therapy)?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            TMS is gentle, targeted, and non-systemic. It requires no general anesthesia, induces no seizures, causes no memory loss, and is performed in a comfortable outpatient chair while you remain fully awake. Read <a href="what-is-tms-therapy.php" class="text-accent hover:underline">How TMS Works</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How does Tranquil Minds help with Treatment-Resistant Depression in STMA?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            When 2 or more antidepressant medications fail, TMS delivers targeted magnetic stimulation to activate dormant neural networks in the prefrontal cortex, achieving clinical response in over 80% of patients. Visit our <a href="treatment-resistant-depression-st-michael-mn.php" class="text-accent hover:underline">STMA TRD Page</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How can I schedule an assessment for myself or my teenager?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            You can request a free 15-minute consultation through our <a href="contact.php" class="text-accent hover:underline">Contact form</a> or call <a href="tel:+16124298280" class="text-accent font-semibold hover:underline">612-429-8280</a>. Our clinical team coordinates insurance pre-authorization directly with your insurer.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
