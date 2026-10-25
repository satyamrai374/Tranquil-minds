<?php
$page_schema = '
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "MedicalClinic",
            "name": "Tranquil Minds Mental Health - Major Depressive Disorder Care for Monticello, MN",
            "url": "https://tranquilmindsmentalhealth.com/depression-tms-therapy-monticello-mn.php",
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
                    "dayOfWeek": [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday"
                    ],
                    "opens": "09:00",
                    "closes": "18:00"
                }
            ],
            "areaServed": {
                "@type": "City",
                "name": "Monticello"
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
                    "name": "Monticello, MN",
                    "item": "https://tranquilmindsmentalhealth.com/depression-tms-therapy-monticello-mn.php"
                }
            ]
        },
        {
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "Why choose TMS therapy for depression in Monticello?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "NeuroStar TMS delivers targeted physical magnetic pulses directly to the left prefrontal cortex, stimulating neuroplasticity and serotonin release without pills or systemic side effects."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What is the success rate for depression patients undergoing TMS?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Clinical registry studies show that over 83% of patients experience significant symptom reduction, and up to 62% achieve complete clinical remission."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How does TMS differ from antidepressant pills?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Antidepressants circulate through the entire body and cause fatigue or weight gain. TMS is non-systemic and non-invasive, focusing exclusively on mood circuits. Read What Is TMS Therapy."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Does Medicare cover depression TMS in Monticello?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes. Medicare Part B covers NeuroStar TMS therapy for eligible patients diagnosed with treatment-resistant depression."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How long does each depression session take?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Each outpatient session takes only 19 minutes in our comfortable treatment chair, allowing you to resume your day immediately."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can I continue my current medications during TMS?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes. TMS safely complements existing medications. Patients may gradually taper dosages under Roxanne DoBrava\'s supervision after remission."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How can Monticello residents schedule an initial assessment?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Request a free 15-minute consultation through our Contact page or call 612-429-8280."
                    }
                }
            ]
        }
    ]
}
</script>
';
$page_title       = "Depression TMS Therapy Monticello MN | Advanced Non-Drug Relief";
$page_description = "FDA-cleared NeuroStar® TMS therapy for severe and treatment-resistant depression in Monticello, MN. Over 83% response rate. In-network with Medicare and major insurance.";
$hero_title       = 'Depression TMS in Monticello:<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Restoring Hope & Brain Health.</span>';
$hero_subtitle    = 'When antidepressant medications haven’t brought relief, NeuroStar® TMS directly activates underactive mood circuits. Right here in your Monticello community.';
$hero_badge       = 'Depression Specialty Care · Monticello, MN';
$hero_cta1_text   = 'View Commute Route';
$hero_cta1_link   = '#route';
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
            <span class="text-primary font-semibold">Monticello, MN</span>
        </div>
    </div>

    <!-- ===== COMMUNITY SPOTLIGHT ===== -->
    <section class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 fade-in-section">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Wright County Mental Wellness</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl text-primary font-heading mb-6 leading-tight">
                        Major Depressive Disorder Care for Monticello, MN
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 font-light">
                        Residents of Monticello and surrounding Wright County communities deserve rapid access to cutting-edge psychiatric care without months-long waits at crowded regional medical centers or stressful metro commutes.
                    </p>
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        At Tranquil Minds in Monticello, located just <strong>1–3 Mins (Downtown Monticello)</strong> away, board-certified Psychiatric-Mental Health Nurse Practitioner <strong>Roxanne DoBrava, PMHNP-BC</strong> provides personalized psychiatric evaluations and <strong><a href="neurostar-tms.php" class="text-accent hover:underline">FDA-cleared NeuroStar® TMS therapy</a></strong>. Our non-invasive, drug-free magnetic protocols physically reawaken dormant mood circuits with zero systemic medication side effects.
                    </p>

                    <div class="grid sm:grid-cols-2 gap-4 mb-8">
                        <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                            <div class="text-accent font-bold text-lg mb-1 font-heading">Fast Commute</div>
                            <p class="text-gray-500 text-xs">Only 1–3 Mins (Downtown Monticello) via East Broadway Street / Monticello Hub.</p>
                        </div>
                        <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                            <div class="text-primary font-bold text-lg mb-1 font-heading">Zero Downtime</div>
                            <p class="text-gray-500 text-xs">19-minute sessions; drive yourself home or to work immediately.</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="contact.php" class="px-8 py-4 bg-accent text-white rounded-full font-bold shadow-md hover:bg-accent-light transition-all inline-block">Schedule Monticello Consultation</a>
                        <a href="what-is-tms-therapy.php" class="px-8 py-4 bg-white text-primary border border-primary/20 rounded-full font-bold hover:bg-primary/5 transition-all inline-block">How TMS Works &rarr;</a>
                    </div>
                </div>

                <div class="lg:col-span-5 fade-in-section">
                    <!-- Commute Info Card -->
                    <div id="route" class="bg-white rounded-3xl p-8 border border-primary/10 shadow-xl">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 bg-accent/15 text-accent text-xs font-bold rounded-full uppercase">East Broadway Street / Monticello Hub</span>
                            <span class="text-xs text-gray-400 font-semibold">Downtown Monticello · 1–3 Mins</span>
                        </div>
                        <h3 class="text-2xl font-bold text-primary font-heading mb-3">Easy Driving Route from Monticello</h3>
                        <p class="text-gray-500 text-sm mb-6">Enjoy a straightforward commute directly into downtown Monticello:</p>

                        <div class="space-y-4 text-sm text-gray-700 mb-6">
                            <div class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-accent text-white flex items-center justify-center text-xs font-bold flex-shrink-0">1</span>
                                <div>Conveniently situated in downtown Monticello at 154 East Broadway Street.</div>
                            </div>                            <div class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-accent text-white flex items-center justify-center text-xs font-bold flex-shrink-0">2</span>
                                <div>Directly accessible from MN-25, I-94 Exit 193/194, and Wright County Road 75.</div>
                            </div>                            <div class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-accent text-white flex items-center justify-center text-xs font-bold flex-shrink-0">3</span>
                                <div>Private, quiet consultation suites with reserved front-door parking.</div>
                            </div>
                        </div>

                        <div class="bg-[#FAFAFF] p-4 rounded-xl border border-primary/5 text-xs text-gray-500 mb-4">
                            <strong>Accepted Insurances:</strong> In-network with Blue Cross Blue Shield MN, HealthPartners, Medica, UnitedHealthcare, and Medicare. See our <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
                        </div>

                        <a href="https://maps.google.com/?q=154+East+Broadway+Street+Suite+2,+Monticello,+MN+55362" target="_blank" rel="noopener" class="text-accent font-bold text-xs hover:underline flex items-center gap-1">Open Directions in Google Maps &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CLINICAL COMPARISON & SURROUNDING HUBS ===== -->
    <section class="py-16 bg-white relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Specialized Clinical Programs</span>
                <h2 class="text-3xl md:text-4xl text-primary font-heading mb-4">Advanced Solutions for Monticello Patients</h2>
                <p class="text-gray-600 text-base">Explore evidence-based mental health programs tailored to your personal journey:</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 fade-in-section mb-10">
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-2">Major Depression &amp; TRD</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Over 83% of patients experience significant symptom reduction after a NeuroStar protocol. Escape the cycle of failed medications.</p>
                    <a href="treatment-resistant-depression.php" class="text-accent font-bold text-xs hover:underline">Learn About TRD Care &rarr;</a>
                </div>
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-2">Anxiety &amp; OCD Relief</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Non-sedating magnetic therapy soothes hyperactive amygdala and CSTC loops to relieve chronic worry, panic, and compulsions.</p>
                    <a href="anxiety.php" class="text-accent font-bold text-xs hover:underline">Explore Anxiety &amp; OCD Care &rarr;</a>
                </div>
            </div>

            <!-- Surrounding Towns Links -->
            <div class="bg-[#FAFAFF] p-6 rounded-3xl border border-primary/10 text-center">
                <span class="text-xs uppercase tracking-wider text-primary/60 font-bold block mb-2">Nearby Surrounding Communities</span>
                <p class="text-xs text-gray-500 mb-3">Also serving patients across our regional service network:</p>
                <div class="flex flex-wrap justify-center gap-3 text-xs">
                    <a href="depression-tms-therapy-buffalo-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Buffalo Depression TMS</a> <a href="tms-therapy-big-lake-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Big Lake TMS</a> <a href="treatment-resistant-depression-st-michael-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">STMA TRD Care</a> <a href="insurance-covered-tms-therapy.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Insurance Guide</a> 
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FAQ ACCORDION (7 EXPANDABLE ITEMS) ===== -->
    <section class="py-16 bg-[#FAFAFF] relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Common Questions</span>
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Frequently Asked Questions: Monticello, MN</h2>
                <p class="text-gray-500 text-lg">Clear clinical answers for Monticello and Wright County residents considering TMS therapy.</p>
            </div>

            <div class="space-y-4 fade-in-section">

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Why choose TMS therapy for depression in Monticello?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            NeuroStar TMS delivers targeted physical magnetic pulses directly to the left prefrontal cortex, stimulating neuroplasticity and serotonin release without pills or systemic side effects.
                        </div>
                    </div>
                </div>
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What is the success rate for depression patients undergoing TMS?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Clinical registry studies show that over 83% of patients experience significant symptom reduction, and up to 62% achieve complete clinical remission.
                        </div>
                    </div>
                </div>
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How does TMS differ from antidepressant pills?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Antidepressants circulate through the entire body and cause fatigue or weight gain. TMS is non-systemic and non-invasive, focusing exclusively on mood circuits. Read <a href="what-is-tms-therapy.php" class="text-accent hover:underline">What Is TMS Therapy</a>.
                        </div>
                    </div>
                </div>
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Does Medicare cover depression TMS in Monticello?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. Medicare Part B covers NeuroStar TMS therapy for eligible patients diagnosed with treatment-resistant depression.
                        </div>
                    </div>
                </div>
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How long does each depression session take?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Each outpatient session takes only 19 minutes in our comfortable treatment chair, allowing you to resume your day immediately.
                        </div>
                    </div>
                </div>
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Can I continue my current medications during TMS?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. TMS safely complements existing medications. Patients may gradually taper dosages under Roxanne DoBrava's supervision after remission.
                        </div>
                    </div>
                </div>
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How can Monticello residents schedule an initial assessment?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Request a free 15-minute consultation through our <a href="contact.php" class="text-accent hover:underline">Contact page</a> or call <a href="tel:+16124298280" class="text-accent font-semibold hover:underline">612-429-8280</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>