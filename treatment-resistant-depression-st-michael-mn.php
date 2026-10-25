<?php
$page_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalClinic",
      "name": "Tranquil Minds Mental Health - Treatment-Resistant Depression for St. Michael MN",
      "url": "https://tranquilmindsmentalhealth.com/treatment-resistant-depression-st-michael-mn.php",
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
      "@type": "MedicalCondition",
      "name": "Treatment-Resistant Depression (TRD)",
      "possibleTreatment": [
        {
          "@type": "MedicalTherapy",
          "name": "NeuroStar TMS for Treatment-Resistant Depression"
        }
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
          "name": "STMA",
          "item": "https://tranquilmindsmentalhealth.com/tms-therapy-st-michael-albertville-mn.php"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Treatment-Resistant Depression",
          "item": "https://tranquilmindsmentalhealth.com/treatment-resistant-depression-st-michael-mn.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the clinical definition of Treatment-Resistant Depression (TRD)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Treatment-Resistant Depression (TRD) is clinically diagnosed when a patient diagnosed with Major Depressive Disorder does not achieve adequate remission after completing two or more antidepressant medication trials at therapeutic dosages and durations."
          }
        },
        {
          "@type": "Question",
          "name": "Why do subsequent medications have diminishing success rates?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The landmark STAR*D clinical trial demonstrated that after two failed medications, the chance of reaching remission with a third or fourth drug drops to under 15%. This occurs because systemic medications cannot resolve localized neurological hypoactivity in the prefrontal cortex."
          }
        },
        {
          "@type": "Question",
          "name": "How does NeuroStar TMS physically reverse treatment resistance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "NeuroStar delivers focused, MRI-strength magnetic pulses directly to the underactive left dorsolateral prefrontal cortex. This stimulates neuron firing, releases brain-derived neurotrophic factor (BDNF), and rebuilds synaptic connections through neuroplasticity."
          }
        },
        {
          "@type": "Question",
          "name": "What are the clinical response and remission rates for TRD patients?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "In extensive real-world clinical registry studies of over 14,000 patients, 83% of individuals completing NeuroStar therapy experienced a significant reduction in depressive symptoms, and 62% achieved complete clinical remission."
          }
        },
        {
          "@type": "Question",
          "name": "How long is the commute from St. Michael and Albertville?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The drive takes only 10 minutes (9 to 11 miles) heading westbound on I-94 to Monticello Exit 193/194. Sessions take only 19 minutes with zero downtime, allowing you to drive directly to work or home."
          }
        },
        {
          "@type": "Question",
          "name": "Does insurance cover TMS for Treatment-Resistant Depression in Minnesota?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna all have established clinical coverage policies for FDA-cleared TMS therapy for treatment-resistant depression."
          }
        },
        {
          "@type": "Question",
          "name": "How do I schedule an initial TRD consultation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can request a complimentary 15-minute consultation through our website or call 612-429-8280. Our clinical team coordinates medical records and submits insurance pre-authorization directly on your behalf."
          }
        }
      ]
    }
  ]
}
</script>
';
$page_title       = "Treatment-Resistant Depression St. Michael MN | Expert Care";
$page_description = "Specialized treatment-resistant depression (TRD) care for St. Michael & Albertville, MN. NeuroStar® TMS therapy located just 10 minutes west on I-94 in Monticello.";
$hero_title       = 'Treatment-Resistant Depression in STMA:<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Hope When Medications Fail.</span>';
$hero_subtitle    = 'Have 2 or more antidepressants failed to relieve your depression? You are not out of options. Experience proven NeuroStar® TMS therapy just 10 minutes west on I-94.';
$hero_badge       = 'Treatment Resistance Specialist';
$hero_cta1_text   = 'Understanding TRD';
$hero_cta1_link   = '#trd-science';
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
            <a href="tms-therapy-st-michael-albertville-mn.php" class="hover:text-primary transition-colors">STMA</a>
            <span>/</span>
            <span class="text-primary font-semibold">Treatment-Resistant Depression</span>
        </div>
    </div>

    <!-- ===== TRD SCIENCE SECTION ===== -->
    <section id="trd-science" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 fade-in-section">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">When Pills Stop Working</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl text-primary font-heading mb-6 leading-tight">
                        Why Do Antidepressants Stop Working for STMA Patients?
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 font-light">
                        In landmark psychiatric research (the STAR*D study), clinical trials proved that if a patient does not achieve remission from their first two medication trials, the likelihood of success with a third or fourth pill drops below 15%. Yet millions of Americans are kept on an endless cycle of dose increases and drug combinations.
                    </p>
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        <strong>Treatment-Resistant Depression (TRD) is a physiological issue, not a personal weakness.</strong> When neural circuits in the left dorsolateral prefrontal cortex become chronically understimulated, chemicals cannot reach the receptors effectively. <strong><a href="neurostar-tms.php" class="text-accent hover:underline">NeuroStar® TMS therapy</a></strong> physically wakes up these dormant circuits through focused magnetic stimulation, helping over 80% of treatment-resistant patients experience measurable relief.
                    </p>

                    <div class="bg-white p-6 rounded-3xl border border-primary/10 shadow-sm mb-8">
                        <div class="text-sm font-bold text-primary mb-2">The NeuroStar Advantage for TRD:</div>
                        <div class="grid sm:grid-cols-2 gap-4 text-xs text-gray-600">
                            <div>• <strong>Proven After Medication Failure:</strong> Designed specifically for treatment resistance</div>
                            <div>• <strong>Up to 62% Full Remission:</strong> Complete liberation from depression symptoms</div>
                            <div>• <strong>Easy 10-Min Commute:</strong> Quick reverse commute west on I-94</div>
                            <div>• <strong>Covered by Most Insurance:</strong> In-network TRD coverage in MN</div>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="contact.php" class="px-8 py-4 bg-accent text-white rounded-full font-bold shadow-md hover:bg-accent-light transition-all inline-block">Consult Our TRD Specialist</a>
                        <a href="tms-therapy-st-michael-albertville-mn.php" class="px-8 py-4 bg-white text-primary border border-primary/20 rounded-full font-bold hover:bg-primary/5 transition-all inline-block">STMA Clinic Hub &rarr;</a>
                    </div>
                </div>

                <div class="lg:col-span-5 fade-in-section">
                    <div class="bg-white rounded-3xl p-8 border border-primary/10 shadow-xl">
                        <h3 class="text-2xl font-bold text-primary font-heading mb-4">Common Medications Our Patients Have Tried:</h3>
                        <p class="text-gray-500 text-sm mb-4">Most STMA patients who achieve remission with TMS have previously taken one or more of these medications:</p>
                        
                        <div class="grid grid-cols-2 gap-2 text-xs font-semibold text-primary mb-6">
                            <div class="p-2.5 bg-[#FAFAFF] rounded-lg border border-primary/5">Sertraline (Zoloft)</div>
                            <div class="p-2.5 bg-[#FAFAFF] rounded-lg border border-primary/5">Escitalopram (Lexapro)</div>
                            <div class="p-2.5 bg-[#FAFAFF] rounded-lg border border-primary/5">Fluoxetine (Prozac)</div>
                            <div class="p-2.5 bg-[#FAFAFF] rounded-lg border border-primary/5">Venlafaxine (Effexor)</div>
                            <div class="p-2.5 bg-[#FAFAFF] rounded-lg border border-primary/5">Duloxetine (Cymbalta)</div>
                            <div class="p-2.5 bg-[#FAFAFF] rounded-lg border border-primary/5">Bupropion (Wellbutrin)</div>
                        </div>

                        <div class="p-4 bg-accent/10 rounded-2xl text-xs text-primary font-semibold">
                            If you have tried 2 or more of these without relief, you likely meet standard insurance criteria for full TMS coverage!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CLINICAL COMPARISON ===== -->
    <section class="py-16 bg-white relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Clinical Breakthrough</span>
                <h2 class="text-3xl md:text-4xl text-primary font-heading mb-4">Why TMS Succeeds Where Medications Fail</h2>
                <p class="text-gray-600 text-base">The science of focused neurostimulation over whole-body chemical saturation:</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 fade-in-section mb-10">
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">Targeted Brain Circuitry</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Rather than relying on chemical absorption through digestion and bloodstream, TMS creates focused magnetic fields that depolarize neurons directly in the dorsolateral prefrontal cortex.</p>
                    <a href="what-is-tms-therapy.php" class="text-accent font-bold text-xs hover:underline">How TMS Works &rarr;</a>
                </div>
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">Objective Cognitive Tracking</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Throughout your TRD care plan, we utilize computerized Creyos cognitive assessments to measure tangible improvements in attention, memory, and executive function.</p>
                    <a href="creyos-cognitive-testing.php" class="text-accent font-bold text-xs hover:underline">Cognitive Testing Details &rarr;</a>
                </div>
            </div>

            <!-- Surrounding Towns Links -->
            <div class="bg-[#FAFAFF] p-6 rounded-3xl border border-primary/10 text-center">
                <span class="text-xs uppercase tracking-wider text-primary/60 font-bold block mb-2">Nearby Surrounding Communities</span>
                <p class="text-xs text-gray-500 mb-3">Serving Wright, Hennepin, and Sherburne counties with advanced TRD care:</p>
                <div class="flex flex-wrap justify-center gap-3 text-xs">
                    <a href="tms-therapy-st-michael-albertville-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">STMA Location Hub</a>
                    <a href="tms-therapy-rogers-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Rogers, MN</a>
                    <a href="tms-therapy-maple-grove-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Maple Grove, MN</a>
                    <a href="insurance-covered-tms-therapy.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Insurance Guide</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FAQ ACCORDION (7 EXPANDABLE ITEMS) ===== -->
    <section class="py-16 bg-[#FAFAFF] relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Common Questions</span>
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Frequently Asked Questions: Treatment-Resistant Depression in STMA</h2>
                <p class="text-gray-500 text-lg">Clear clinical answers for St. Michael and Albertville residents considering TMS for TRD.</p>
            </div>

            <div class="space-y-4 fade-in-section">
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What is the clinical definition of Treatment-Resistant Depression (TRD)?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Treatment-Resistant Depression (TRD) is clinically diagnosed when a patient diagnosed with Major Depressive Disorder does not achieve adequate remission after completing two or more antidepressant medication trials at therapeutic dosages and durations. Read more about <a href="treatment-resistant-depression.php" class="text-accent hover:underline">TRD criteria</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Why do subsequent medications have diminishing success rates?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            The landmark STAR*D clinical trial demonstrated that after two failed medications, the chance of reaching remission with a third or fourth drug drops to under 15%. This occurs because systemic medications cannot resolve localized neurological hypoactivity in the prefrontal cortex.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How does NeuroStar TMS physically reverse treatment resistance?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            NeuroStar delivers focused, MRI-strength magnetic pulses directly to the underactive left dorsolateral prefrontal cortex. This stimulates neuron firing, releases brain-derived neurotrophic factor (BDNF), and rebuilds synaptic connections through neuroplasticity. Learn more in <a href="what-is-tms-therapy.php" class="text-accent hover:underline">What Is TMS Therapy</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What are the clinical response and remission rates for TRD patients?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            In extensive real-world clinical registry studies of over 14,000 patients, 83% of individuals completing NeuroStar therapy experienced a significant reduction in depressive symptoms, and 62% achieved complete clinical remission. Explore our <a href="neurostar-tms.php" class="text-accent hover:underline">NeuroStar TMS page</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How long is the commute from St. Michael and Albertville?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            The drive takes only 10 minutes (9 to 11 miles) heading westbound on I-94 to Monticello Exit 193/194. Sessions take only 19 minutes with zero downtime, allowing you to drive directly to work or home. See our <a href="tms-therapy-st-michael-albertville-mn.php" class="text-accent hover:underline">STMA Location Guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Does insurance cover TMS for Treatment-Resistant Depression in Minnesota?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna all have established clinical coverage policies for FDA-cleared TMS therapy for treatment-resistant depression. Check our <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How do I schedule an initial TRD consultation?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            You can request a complimentary 15-minute consultation through our <a href="contact.php" class="text-accent hover:underline">Contact page</a> or call <a href="tel:+16124298280" class="text-accent font-semibold hover:underline">612-429-8280</a>. Our clinical team coordinates medical records and submits insurance pre-authorization directly on your behalf.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
