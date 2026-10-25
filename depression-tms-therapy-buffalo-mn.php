<?php
$page_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalClinic",
      "name": "Tranquil Minds Mental Health - Depression TMS Therapy for Buffalo MN",
      "url": "https://tranquilmindsmentalhealth.com/depression-tms-therapy-buffalo-mn.php",
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
      "areaServed": {
        "@type": "City",
        "name": "Buffalo",
        "sameAs": "https://en.wikipedia.org/wiki/Buffalo,_Minnesota"
      }
    },
    {
      "@type": "MedicalCondition",
      "name": "Major Depressive Disorder",
      "possibleTreatment": [
        {
          "@type": "MedicalTherapy",
          "name": "NeuroStar Transcranial Magnetic Stimulation (TMS)"
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
          "name": "Buffalo, MN",
          "item": "https://tranquilmindsmentalhealth.com/tms-therapy-buffalo-mn.php"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Depression TMS",
          "item": "https://tranquilmindsmentalhealth.com/depression-tms-therapy-buffalo-mn.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Why do antidepressants fail for so many Buffalo depression patients?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The landmark NIMH STAR*D study demonstrated that when initial antidepressants fail, subsequent trials have success rates dropping below 15%. Medications circulate chemically throughout the body, whereas depression is rooted in localized underactive neural circuitry in the prefrontal cortex."
          }
        },
        {
          "@type": "Question",
          "name": "How does NeuroStar TMS physically target the brain in depression?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "NeuroStar uses focused MRI-strength magnetic pulses to stimulate neurons in the left dorsolateral prefrontal cortex (DLPFC). This stimulation awakens dormant neural pathways, triggering natural releases of dopamine, serotonin, and norepinephrine."
          }
        },
        {
          "@type": "Question",
          "name": "What are the clinical remission and response rates for depression?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "In real-world clinical registry studies of over 14,000 patients, 83% of individuals completing NeuroStar therapy experienced a significant reduction in depressive symptoms, and 62% achieved complete clinical remission."
          }
        },
        {
          "@type": "Question",
          "name": "Can Buffalo patients reduce or stop taking antidepressants during or after TMS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Many patients successfully taper down or discontinue medications after achieving remission under the direct guidance of Roxanne DoBrava, PMHNP-BC. Others maintain a lower dosage to preserve optimal emotional wellness."
          }
        },
        {
          "@type": "Question",
          "name": "What is the commute time and routine for Buffalo residents?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The drive from downtown Buffalo or Buffalo High School takes only 10 to 12 minutes straight north on MN-25 N into Monticello. Outpatient sessions take 19 minutes with zero recovery time, letting you drive home immediately."
          }
        },
        {
          "@type": "Question",
          "name": "Which health insurance plans cover depression TMS for Wright County residents?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "TMS therapy is covered by all major Minnesota insurance carriers, including Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna for eligible patients."
          }
        },
        {
          "@type": "Question",
          "name": "How quickly can I begin treatment at Tranquil Minds?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We offer complimentary 15-minute consultations and can typically schedule initial psychiatric evaluations within days. Once insurance pre-authorization is approved (usually 1-2 weeks), therapy begins without hospital waitlists."
          }
        }
      ]
    }
  ]
}
</script>
';
$page_title       = "Depression TMS Therapy Buffalo MN | Treatment for Severe Depression";
$page_description = "Specialized depression and treatment-resistant depression TMS therapy for Buffalo, MN residents. Located 10 minutes away in Monticello. In-network with insurance.";
$hero_title       = 'Depression TMS for Buffalo, MN:<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">When Pills Have Failed.</span>';
$hero_subtitle    = 'Major depression is biological, not a personal failing. Discover FDA-cleared NeuroStar® TMS therapy just 10 minutes north on MN-25 in Monticello.';
$hero_badge       = 'Wright County Depression Specialist';
$hero_cta1_text   = 'How TMS Treats Depression';
$hero_cta1_link   = '#science';
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
            <a href="tms-therapy-buffalo-mn.php" class="hover:text-primary transition-colors">Buffalo, MN</a>
            <span>/</span>
            <span class="text-primary font-semibold">Depression TMS</span>
        </div>
    </div>

    <!-- ===== CLINICAL FOCUS ===== -->
    <section id="science" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 fade-in-section">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Biological Treatment</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl text-primary font-heading mb-6 leading-tight">
                        Targeting the Root Cause of Depression for Buffalo Patients
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 font-light">
                        When people in Buffalo struggle with severe or persistent depression, they are usually handed a prescription for an antidepressant. But what happens when the first medication doesn't work? And the second only brings side effects like weight gain, exhaustion, or emotional numbness?
                    </p>
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        Neuroimaging reveals that in chronic depression, the <strong>left dorsolateral prefrontal cortex (DLPFC)</strong> becomes underactive and disconnected from deeper emotional centers. Antidepressants flood your entire bloodstream with chemicals; <strong><a href="neurostar-tms.php" class="text-accent hover:underline">NeuroStar® TMS therapy</a></strong> delivers focused, MRI-strength magnetic pulses directly to those dormant brain circuits, stimulating natural neurotransmitter production and neuroplasticity.
                    </p>

                    <div class="bg-white p-6 rounded-3xl border border-primary/10 shadow-sm mb-8">
                        <div class="text-sm font-bold text-primary mb-2">Clinical Results for Major Depression:</div>
                        <div class="grid sm:grid-cols-2 gap-4 text-xs text-gray-600">
                            <div>• <strong>83% Response Rate:</strong> Measurable, life-changing symptom reduction</div>
                            <div>• <strong>62% Full Remission:</strong> Complete liberation from clinical depressive criteria</div>
                            <div>• <strong>Zero Systemic Effects:</strong> No sexual dysfunction, no weight gain</div>
                            <div>• <strong>10-Min Commute:</strong> Straight up MN-25 N into Monticello</div>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="contact.php" class="px-8 py-4 bg-accent text-white rounded-full font-bold shadow-md hover:bg-accent-light transition-all inline-block">Book Buffalo Depression Consultation</a>
                        <a href="tms-therapy-buffalo-mn.php" class="px-8 py-4 bg-white text-primary border border-primary/20 rounded-full font-bold hover:bg-primary/5 transition-all inline-block">Buffalo Location Hub &rarr;</a>
                    </div>
                </div>

                <div class="lg:col-span-5 fade-in-section">
                    <div class="bg-white rounded-3xl p-8 border border-primary/10 shadow-xl">
                        <h3 class="text-2xl font-bold text-primary font-heading mb-4">Signs It's Time to Consider TMS</h3>
                        <div class="space-y-3 text-sm text-gray-600 mb-6">
                            <div class="p-3 bg-[#FAFAFF] rounded-xl border border-primary/5">
                                <strong>1. Tried 2+ Antidepressants:</strong> You've tried medications like Zoloft, Prozac, Lexapro, or Wellbutrin without lasting relief. See our <a href="treatment-resistant-depression.php" class="text-accent hover:underline font-semibold">TRD guide</a>.
                            </div>
                            <div class="p-3 bg-[#FAFAFF] rounded-xl border border-primary/5">
                                <strong>2. Emotional Numbness:</strong> The pills took away extreme sadness, but also erased joy, excitement, and motivation.
                            </div>
                            <div class="p-3 bg-[#FAFAFF] rounded-xl border border-primary/5">
                                <strong>3. Unrelenting Brain Fog:</strong> Fatigue and memory issues make simple tasks feel overwhelming. Test cognitive vitality with <a href="creyos-cognitive-testing.php" class="text-accent hover:underline font-semibold">Creyos testing</a>.
                            </div>
                        </div>

                        <div class="p-4 bg-accent/10 rounded-2xl text-xs text-primary font-semibold mb-4">
                            Located just 10 miles from Buffalo Lake at 154 East Broadway Street, Suite 2, Monticello, MN.
                        </div>

                        <a href="https://maps.google.com/?q=154+East+Broadway+Street+Suite+2,+Monticello,+MN+55362" target="_blank" rel="noopener" class="text-accent font-bold text-xs hover:underline flex items-center gap-1">Open Directions in Google Maps &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CLINICAL COMPARISON ===== -->
    <section class="py-16 bg-white relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Clinical Comparison</span>
                <h2 class="text-3xl md:text-4xl text-primary font-heading mb-4">NeuroStar TMS vs. Medication Management</h2>
                <p class="text-gray-600 text-base">Why Wright County patients turn to neurostimulation when pills fail:</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 fade-in-section mb-10">
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">Traditional Antidepressants</h3>
                    <ul class="space-y-2 text-sm text-gray-600 mb-4">
                        <li>• Affects entire body and bloodstream</li>
                        <li>• Common weight gain, libido loss, insomnia</li>
                        <li>• Success drops below 15% after 2 trials</li>
                        <li>• Requires continuous daily medication</li>
                    </ul>
                    <a href="psychiatry.php" class="text-accent font-bold text-xs hover:underline">Psychiatric Medication Review &rarr;</a>
                </div>
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">NeuroStar® TMS Therapy</h3>
                    <ul class="space-y-2 text-sm text-gray-600 mb-4">
                        <li>• Non-invasive magnetic pulses target DLPFC</li>
                        <li>• Zero systemic side effects or sedation</li>
                        <li>• 83% response rate in real-world patients</li>
                        <li>• 19-minute sessions; drive yourself home</li>
                    </ul>
                    <a href="what-is-tms-therapy.php" class="text-accent font-bold text-xs hover:underline">How TMS Works &rarr;</a>
                </div>
            </div>

            <!-- Surrounding Towns Links -->
            <div class="bg-[#FAFAFF] p-6 rounded-3xl border border-primary/10 text-center">
                <span class="text-xs uppercase tracking-wider text-primary/60 font-bold block mb-2">Nearby Surrounding Communities</span>
                <p class="text-xs text-gray-500 mb-3">Providing depression and TRD therapy across Wright &amp; Sherburne counties:</p>
                <div class="flex flex-wrap justify-center gap-3 text-xs">
                    <a href="tms-therapy-buffalo-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Buffalo, MN Hub</a>
                    <a href="tms-therapy-big-lake-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Big Lake, MN</a>
                    <a href="tms-therapy-st-michael-albertville-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">St. Michael &amp; Albertville</a>
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
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Frequently Asked Questions: Depression TMS in Buffalo</h2>
                <p class="text-gray-500 text-lg">Clear clinical answers for Buffalo patients seeking advanced depression recovery.</p>
            </div>

            <div class="space-y-4 fade-in-section">
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Why do antidepressants fail for so many Buffalo depression patients?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            The landmark NIMH STAR*D study demonstrated that when initial antidepressants fail, subsequent trials have success rates dropping below 15%. Medications circulate chemically throughout the body, whereas depression is rooted in localized underactive neural circuitry in the prefrontal cortex.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How does NeuroStar TMS physically target the brain in depression?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            NeuroStar uses focused MRI-strength magnetic pulses to stimulate neurons in the left dorsolateral prefrontal cortex (DLPFC). This stimulation awakens dormant neural pathways, triggering natural releases of dopamine, serotonin, and norepinephrine. Read more in <a href="what-is-tms-therapy.php" class="text-accent hover:underline">What Is TMS Therapy</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What are the clinical remission and response rates for depression?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            In real-world clinical registry studies of over 14,000 patients, 83% of individuals completing NeuroStar therapy experienced a significant reduction in depressive symptoms, and 62% achieved complete clinical remission. Explore our <a href="depression.php" class="text-accent hover:underline">Depression Program</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Can Buffalo patients reduce or stop taking antidepressants during or after TMS?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Many patients successfully taper down or discontinue medications after achieving remission under the direct guidance of Roxanne DoBrava, PMHNP-BC. Others maintain a lower dosage to preserve optimal emotional wellness. Learn about our <a href="psychiatry.php" class="text-accent hover:underline">psychiatric medication management</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What is the commute time and routine for Buffalo residents?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            The drive from downtown Buffalo or Buffalo High School takes only 10 to 12 minutes straight north on MN-25 N into Monticello. Outpatient sessions take 19 minutes with zero recovery time, letting you drive home immediately. See our <a href="tms-therapy-buffalo-mn.php" class="text-accent hover:underline">Buffalo Location Guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Which health insurance plans cover depression TMS for Wright County residents?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            TMS therapy is covered by all major Minnesota insurance carriers, including Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna for eligible patients. Check our <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a> for qualification criteria.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How quickly can I begin treatment at Tranquil Minds?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            We offer complimentary 15-minute consultations and can typically schedule initial psychiatric evaluations within days. Once insurance pre-authorization is approved (usually 1-2 weeks), therapy begins without hospital waitlists. Contact us today through our <a href="contact.php" class="text-accent hover:underline">Contact page</a> or call <a href="tel:+16124298280" class="text-accent font-semibold hover:underline">612-429-8280</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
