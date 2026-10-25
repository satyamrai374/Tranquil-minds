<?php
$page_schema = '
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "MedicalClinic",
            "name": "Tranquil Minds Mental Health - TMS Therapy for Osseo, MN",
            "url": "https://tranquilmindsmentalhealth.com/tms-therapy-osseo-mn.php",
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
                "name": "Osseo"
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
                    "name": "Osseo, MN",
                    "item": "https://tranquilmindsmentalhealth.com/tms-therapy-osseo-mn.php"
                }
            ]
        },
        {
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "How long does it take to travel from Osseo to Tranquil Minds in Monticello?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "The drive from Osseo takes approximately 21 Mins (22 Miles) via I-94 W directly into downtown Monticello. Our clinic at 154 East Broadway Street offers dedicated, free patient parking right outside."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Why do patients in Osseo choose Tranquil Minds over large hospital systems?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Unlike congested hospital networks with 3 to 6-month waitlists and impersonal care, Tranquil Minds provides a private boutique setting where your care is directly supervised by board-certified Psychiatric Nurse Practitioner Roxanne DoBrava, PMHNP-BC. Read our About page."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What conditions does NeuroStar TMS treat for Osseo residents?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "NeuroStar TMS is FDA-cleared for Major Depressive Disorder, Treatment-Resistant Depression, OCD, and Adolescent Depression (ages 15+). Learn more about our clinical treatments on our NeuroStar TMS page."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can I drive myself to and from daily appointments in Monticello?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes. NeuroStar TMS requires no anesthesia, sedation, or downtime. Sessions last just 19 minutes, and you are 100% alert and ready to drive home or return to work immediately. Read more in What Is TMS Therapy."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Which insurance plans are in-network for Osseo patients?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Tranquil Minds is in-network with Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna. View our full Insurance Guide."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How does TMS compare to prescription medications?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "While psychiatric medications circulate throughout your entire body and often trigger weight gain, fatigue, or sexual side effects, TMS delivers targeted magnetic stimulation directly to mood-regulating brain circuits without systemic side effects. Explore our TRD solutions."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How do I schedule an initial psychiatric evaluation?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "You can request a complimentary 15-minute consultation via our Contact page or call us at 612-429-8280. Our team will verify your insurance coverage promptly."
                    }
                }
            ]
        }
    ]
}
</script>
';
$page_title       = "TMS Therapy Osseo MN | Leading NeuroStar TMS & Psychiatry";
$page_description = "Serving Osseo, MN. Tranquil Minds provides FDA-cleared NeuroStar® TMS therapy and psychiatric care just 21 Mins west on I-94 in Monticello.";
$hero_title       = 'TMS Therapy for Osseo, MN:<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">A Peaceful Reverse Commute to Healing.</span>';
$hero_subtitle    = 'Skip the crowded hospital ramps and long waitlists of Hennepin County. Experience private, boutique psychiatric care just 21 Mins (22 Miles) west in Monticello.';
$hero_badge       = 'Serving Osseo & Hennepin County';
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
            <span class="text-primary font-semibold">Osseo, MN</span>
        </div>
    </div>

    <!-- ===== COMMUNITY SPOTLIGHT ===== -->
    <section class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 fade-in-section">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Hennepin County Mental Wellness</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl text-primary font-heading mb-6 leading-tight">
                        Leading Psychiatric & TMS Care for Osseo Residents
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 font-light">
                        Residents of Osseo and surrounding Hennepin County communities deserve rapid access to cutting-edge psychiatric care without months-long waits at crowded regional medical centers or stressful metro commutes.
                    </p>
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        At Tranquil Minds in Monticello, located just <strong>21 Mins (22 Miles)</strong> away, board-certified Psychiatric-Mental Health Nurse Practitioner <strong>Roxanne DoBrava, PMHNP-BC</strong> provides personalized psychiatric evaluations and <strong><a href="neurostar-tms.php" class="text-accent hover:underline">FDA-cleared NeuroStar® TMS therapy</a></strong>. Our non-invasive, drug-free magnetic protocols physically reawaken dormant mood circuits with zero systemic medication side effects.
                    </p>

                    <div class="grid sm:grid-cols-2 gap-4 mb-8">
                        <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                            <div class="text-accent font-bold text-lg mb-1 font-heading">Fast Commute</div>
                            <p class="text-gray-500 text-xs">Only 21 Mins (22 Miles) via I-94 W.</p>
                        </div>
                        <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                            <div class="text-primary font-bold text-lg mb-1 font-heading">Zero Downtime</div>
                            <p class="text-gray-500 text-xs">19-minute sessions; drive yourself home or to work immediately.</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="contact.php" class="px-8 py-4 bg-accent text-white rounded-full font-bold shadow-md hover:bg-accent-light transition-all inline-block">Schedule Osseo Consultation</a>
                        <a href="what-is-tms-therapy.php" class="px-8 py-4 bg-white text-primary border border-primary/20 rounded-full font-bold hover:bg-primary/5 transition-all inline-block">How TMS Works &rarr;</a>
                    </div>
                </div>

                <div class="lg:col-span-5 fade-in-section">
                    <!-- Commute Info Card -->
                    <div id="route" class="bg-white rounded-3xl p-8 border border-primary/10 shadow-xl">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 bg-accent/15 text-accent text-xs font-bold rounded-full uppercase">I-94 W</span>
                            <span class="text-xs text-gray-400 font-semibold">22 Miles · 21 Mins</span>
                        </div>
                        <h3 class="text-2xl font-bold text-primary font-heading mb-3">Easy Driving Route from Osseo</h3>
                        <p class="text-gray-500 text-sm mb-6">Enjoy a straightforward commute directly into downtown Monticello:</p>

                        <div class="space-y-4 text-sm text-gray-700 mb-6">
                            <div class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-accent text-white flex items-center justify-center text-xs font-bold flex-shrink-0">1</span>
                                <div>Head northwest on I-94 W from Osseo / County Rd 81.</div>
                            </div>                            <div class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-accent text-white flex items-center justify-center text-xs font-bold flex-shrink-0">2</span>
                                <div>Drive 20 miles past Rogers and St. Michael.</div>
                            </div>                            <div class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-accent text-white flex items-center justify-center text-xs font-bold flex-shrink-0">3</span>
                                <div>Take Exit 193 into Monticello. Door-side free parking.</div>
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
                <h2 class="text-3xl md:text-4xl text-primary font-heading mb-4">Advanced Solutions for Osseo Patients</h2>
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
                    <a href="tms-therapy-maple-grove-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Maple Grove, MN</a> <a href="tms-therapy-rogers-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Rogers, MN</a> <a href="tms-therapy-st-michael-albertville-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">STMA, MN</a> <a href="insurance-covered-tms-therapy.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Insurance Guide</a> 
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FAQ ACCORDION (7 EXPANDABLE ITEMS) ===== -->
    <section class="py-16 bg-[#FAFAFF] relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Common Questions</span>
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Frequently Asked Questions: Osseo, MN</h2>
                <p class="text-gray-500 text-lg">Clear clinical answers for Osseo and Hennepin County residents considering TMS therapy.</p>
            </div>

            <div class="space-y-4 fade-in-section">

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How long does it take to travel from Osseo to Tranquil Minds in Monticello?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            The drive from Osseo takes approximately 21 Mins (22 Miles) via I-94 W directly into downtown Monticello. Our clinic at 154 East Broadway Street offers dedicated, free patient parking right outside.
                        </div>
                    </div>
                </div>
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Why do patients in Osseo choose Tranquil Minds over large hospital systems?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Unlike congested hospital networks with 3 to 6-month waitlists and impersonal care, Tranquil Minds provides a private boutique setting where your care is directly supervised by board-certified Psychiatric Nurse Practitioner Roxanne DoBrava, PMHNP-BC. Read our <a href="about.php" class="text-accent hover:underline">About page</a>.
                        </div>
                    </div>
                </div>
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What conditions does NeuroStar TMS treat for Osseo residents?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            NeuroStar TMS is FDA-cleared for Major Depressive Disorder, Treatment-Resistant Depression, OCD, and Adolescent Depression (ages 15+). Learn more about our clinical treatments on our <a href="neurostar-tms.php" class="text-accent hover:underline">NeuroStar TMS page</a>.
                        </div>
                    </div>
                </div>
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Can I drive myself to and from daily appointments in Monticello?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. NeuroStar TMS requires no anesthesia, sedation, or downtime. Sessions last just 19 minutes, and you are 100% alert and ready to drive home or return to work immediately. Read more in <a href="what-is-tms-therapy.php" class="text-accent hover:underline">What Is TMS Therapy</a>.
                        </div>
                    </div>
                </div>
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Which insurance plans are in-network for Osseo patients?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Tranquil Minds is in-network with Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna. View our full <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
                        </div>
                    </div>
                </div>
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How does TMS compare to prescription medications?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            While psychiatric medications circulate throughout your entire body and often trigger weight gain, fatigue, or sexual side effects, TMS delivers targeted magnetic stimulation directly to mood-regulating brain circuits without systemic side effects. Explore our <a href="treatment-resistant-depression.php" class="text-accent hover:underline">TRD solutions</a>.
                        </div>
                    </div>
                </div>
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How do I schedule an initial psychiatric evaluation?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            You can request a complimentary 15-minute consultation via our <a href="contact.php" class="text-accent hover:underline">Contact page</a> or call us at <a href="tel:+16124298280" class="text-accent font-semibold hover:underline">612-429-8280</a>. Our team will verify your insurance coverage promptly.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>