<?php
$page_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalClinic",
      "name": "Tranquil Minds Mental Health - TMS Therapy for Elk River, MN",
      "url": "https://tranquilmindsmentalhealth.com/tms-therapy-elk-river-mn.php",
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
        "name": "Elk River",
        "sameAs": "https://en.wikipedia.org/wiki/Elk_River,_Minnesota"
      }
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
          "name": "Elk River, MN",
          "item": "https://tranquilmindsmentalhealth.com/tms-therapy-elk-river-mn.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How long is the drive from Elk River to Tranquil Minds in Monticello?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The drive from downtown Elk River takes only 14 to 17 minutes (about 15 miles) west along US-10 W or via MN-101 S to I-94 W, making daily outpatient TMS sessions quick and effortless."
          }
        },
        {
          "@type": "Question",
          "name": "Do Elk River patients need to take time off work for TMS sessions?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. NeuroStar TMS sessions last approximately 19 minutes with zero recovery time, memory impairment, or sedation. Most Elk River professionals attend sessions during lunch breaks or before/after standard work shifts."
          }
        },
        {
          "@type": "Question",
          "name": "How is NeuroStar TMS different from medications for Elk River patients?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Antidepressants circulate throughout the entire bloodstream and often cause fatigue, sexual side effects, or weight gain. TMS uses targeted magnetic pulses that directly stimulate mood-regulating brain tissue with zero systemic side effects."
          }
        },
        {
          "@type": "Question",
          "name": "What insurance plans are accepted for Elk River residents?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tranquil Minds is in-network with Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna for qualifying patients."
          }
        },
        {
          "@type": "Question",
          "name": "Is TMS therapy effective for severe OCD and intrusive thoughts?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. NeuroStar is FDA-cleared for OCD, using deep magnetic pulses to soothe the hyperactive brain circuits that trigger repetitive obsessions, checking rituals, and intrusive anxiety."
          }
        },
        {
          "@type": "Question",
          "name": "Can teenagers from Elk River receive TMS therapy?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. NeuroStar holds FDA clearance for adolescents aged 15 and older with Major Depressive Disorder, offering Elk River high schoolers a non-drug alternative that does not impair memory or focus."
          }
        },
        {
          "@type": "Question",
          "name": "How do I get started with an initial evaluation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can request a free 15-minute consultation through our website or call 612-429-8280. Our team will verify your insurance and schedule your appointment with Roxanne DoBrava, PMHNP-BC."
          }
        }
      ]
    }
  ]
}
</script>
';
$page_title       = "TMS Therapy Elk River MN | NeuroStar® TMS & Psychiatry Clinic";
$page_description = "Looking for TMS therapy in Elk River, MN? Tranquil Minds provides FDA-cleared NeuroStar® TMS for depression and OCD just 15 minutes away in Monticello.";
$hero_title       = 'TMS Therapy for Elk River, MN:<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Modern Brain Stimulation.</span>';
$hero_subtitle    = 'Skip the 3-month waitlists at Twin Cities hospital networks. Access compassionate, certified NeuroStar® TMS therapy just 15 minutes west on Highway 10.';
$hero_badge       = 'Serving Elk River & Sherburne County';
$hero_cta1_text   = 'View Commute & Hours';
$hero_cta1_link   = '#elk-river-commute';
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
            <span class="text-primary font-semibold">Elk River, MN</span>
        </div>
    </div>

    <!-- ===== ELK RIVER COMMUNITY FOCUS ===== -->
    <section class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 fade-in-section">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Sherburne County Psychiatry</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl text-primary font-heading mb-6 leading-tight">
                        Advanced Depression &amp; OCD Relief for the Elk River Community
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 font-light">
                        Residents of Elk River, Otsego, and surrounding Sherburne County communities are often told that medication and talk therapy are the only tools for mental wellness. But when prescription pills cause emotional blunting, insomnia, or simply fail to lift the heavy dark cloud of clinical depression, what comes next? Learn more on our <a href="treatment-resistant-depression.php" class="text-accent font-semibold hover:underline">treatment-resistant depression guide</a>.
                    </p>
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        <strong><a href="neurostar-tms.php" class="text-accent font-semibold hover:underline">Transcranial Magnetic Stimulation (TMS)</a></strong> is an FDA-cleared, non-invasive treatment that uses focused MRI-strength magnetic fields to awaken dormant neural circuits in the mood center of your brain. Just 15 minutes down the road in Monticello, Tranquil Minds delivers elite NeuroStar® TMS care in a tranquil, confidential clinic. Explore our <a href="ocd-treatment-elk-river-mn.php" class="text-accent font-semibold hover:underline">Elk River OCD Treatment guide</a>.
                    </p>

                    <div class="grid sm:grid-cols-2 gap-4 mb-8">
                        <div class="bg-white p-5 rounded-2xl border border-primary/10">
                            <div class="text-primary font-bold text-base mb-1">15-Minute Highway 10 Drive</div>
                            <p class="text-gray-500 text-xs">Fast commute along US-10 W or MN-101 into Monticello.</p>
                        </div>
                        <div class="bg-white p-5 rounded-2xl border border-primary/10">
                            <div class="text-primary font-bold text-base mb-1">Zero Medication Side Effects</div>
                            <p class="text-gray-500 text-xs">No gastrointestinal issues, no weight changes, no fatigue.</p>
                        </div>
                    </div>

                    <a href="#contact" class="px-8 py-4 bg-accent text-white rounded-full font-bold shadow-md hover:bg-accent-light transition-all inline-block">Schedule Your Elk River Consultation</a>
                </div>

                <div class="lg:col-span-5 fade-in-section">
                    <!-- Commute Info Card -->
                    <div id="elk-river-commute" class="bg-white rounded-3xl p-8 border border-primary/10 shadow-xl">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 bg-accent/15 text-accent text-xs font-bold rounded-full uppercase">US-10 W / MN-101</span>
                            <span class="text-xs text-gray-400 font-semibold">15 Miles · 15 Mins</span>
                        </div>
                        <h3 class="text-2xl font-bold text-primary font-heading mb-3">Elk River Commuter Route</h3>
                        <p class="text-gray-500 text-sm mb-6">Our clinic location is ideal for Elk River professionals and parents who prefer quick, private visits without driving into Hennepin County.</p>

                        <div class="space-y-3 text-sm text-gray-700 mb-6">
                            <div class="flex items-start gap-3">
                                <span class="text-accent font-bold">1.</span>
                                <span>Take US-10 W from downtown Elk River or take MN-101 S to I-94 W.</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="text-accent font-bold">2.</span>
                                <span>Cross the bridge directly into Monticello or exit I-94 onto MN-25 N.</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="text-accent font-bold">3.</span>
                                <span>Arrive at 154 East Broadway Street, Suite 2.</span>
                            </div>
                        </div>

                        <div class="bg-[#FAFAFF] p-4 rounded-xl border border-primary/5 text-xs text-gray-500">
                            <strong>Accepting Elk River Patients:</strong> Blue Cross Blue Shield MN, HealthPartners, Medica, UnitedHealthcare, and Medicare in-network. Read our <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CLINICAL FOCUS: OCD & DEPRESSION ===== -->
    <section class="py-16 bg-white relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Specialized Treatments</span>
                <h2 class="text-3xl md:text-4xl text-primary font-heading mb-4">Targeted Care for Elk River Residents</h2>
            </div>

            <div class="grid md:grid-cols-2 gap-6 fade-in-section">
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-2">Treatment-Resistant Depression</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">When two or more antidepressants have disappointed you, NeuroStar magnetic therapy physically stimulates underactive prefrontal cortex neurons to spark neuroplasticity.</p>
                    <a href="treatment-resistant-depression.php" class="text-accent font-bold text-xs hover:underline">Learn About TRD &rarr;</a>
                </div>
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-2">OCD &amp; Intrusive Thoughts</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Elk River patients struggling with obsessive loops, checking, or contamination anxiety find deep relief through NeuroStar's specialized OCD coil positioning.</p>
                    <a href="ocd-treatment-elk-river-mn.php" class="text-accent font-bold text-xs hover:underline">Read Elk River OCD Guide &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FAQ ACCORDION (7 EXPANDABLE ITEMS) ===== -->
    <section class="py-16 bg-[#FAFAFF] relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Common Questions</span>
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Frequently Asked Questions: Elk River, MN</h2>
                <p class="text-gray-500 text-lg">Clear answers for Sherburne County patients seeking non-drug psychiatric care.</p>
            </div>

            <div class="space-y-4 fade-in-section">
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How long is the drive from Elk River to Tranquil Minds in Monticello?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            The drive from downtown Elk River takes only 14 to 17 minutes (about 15 miles) west along US-10 W or via MN-101 S to I-94 W, making daily outpatient TMS sessions quick and effortless for local Sherburne County commuters.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Do Elk River patients need to take time off work for TMS sessions?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            No. NeuroStar TMS sessions last approximately 19 minutes with zero recovery time, memory impairment, or sedation. Most Elk River professionals attend sessions during lunch breaks or before/after standard work shifts.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How is NeuroStar TMS different from medications for Elk River patients?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Antidepressants circulate throughout the entire bloodstream and often cause fatigue, sexual side effects, or weight gain. TMS uses targeted magnetic pulses that directly stimulate mood-regulating brain tissue with zero systemic side effects. Read our <a href="what-is-tms-therapy.php" class="text-accent hover:underline">What Is TMS Therapy guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What insurance plans are accepted for Elk River residents?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Tranquil Minds is in-network with Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna for qualifying patients. Check our <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a> for full pre-authorization details.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Is TMS therapy effective for severe OCD and intrusive thoughts?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. NeuroStar is FDA-cleared for OCD, using deep magnetic pulses to soothe the hyperactive brain circuits that trigger repetitive obsessions, checking rituals, and intrusive anxiety. Read our specialized <a href="ocd-treatment-elk-river-mn.php" class="text-accent hover:underline">Elk River OCD treatment page</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Can teenagers from Elk River receive TMS therapy?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. NeuroStar holds FDA clearance for adolescents aged 15 and older with Major Depressive Disorder, offering Elk River high schoolers a non-drug alternative that does not impair memory or focus. Explore <a href="tms-adolescents.php" class="text-accent hover:underline">Adolescent TMS</a>.
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
                            You can request a free 15-minute consultation through our <a href="contact.php" class="text-accent hover:underline">Contact page</a> or call <a href="tel:+16124298280" class="text-accent font-semibold hover:underline">612-429-8280</a>. Our team will verify your insurance and schedule your appointment with Roxanne DoBrava, PMHNP-BC.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
