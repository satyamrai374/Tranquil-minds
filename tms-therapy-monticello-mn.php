<?php
$page_schema = '
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "MedicalClinic",
            "name": "Tranquil Minds Mental Health - TMS Therapy for Monticello, MN",
            "url": "https://tranquilmindsmentalhealth.com/tms-therapy-monticello-mn.php",
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
                    "item": "https://tranquilmindsmentalhealth.com/tms-therapy-monticello-mn.php"
                }
            ]
        },
        {
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "Where is Tranquil Minds located in Monticello, MN?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Our clinic is located at 154 East Broadway Street, Suite 2, in downtown Monticello, MN 55362, with reserved free ground-level patient parking directly in front."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What mental health conditions does Tranquil Minds treat in Monticello?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "We treat Major Depressive Disorder, Treatment-Resistant Depression, Generalized Anxiety Disorder, Anxious Depression, OCD, PTSD, and Adolescent Depression (ages 15+)."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How does NeuroStar TMS therapy work for Monticello patients?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "NeuroStar TMS uses targeted magnetic pulses to stimulate underactive neurons in the mood centers of the brain. Sessions take only 19 minutes with zero systemic side effects."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Which insurance plans are accepted in Monticello?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "We are in-network with Blue Cross Blue Shield MN, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna. Read our Insurance Guide."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can I drive myself to and from daily appointments?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes. NeuroStar TMS requires no anesthesia or sedation. You remain awake and clear-headed, and can drive home or to work immediately."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How does Roxanne DoBrava, PMHNP-BC, supervise care?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "As a board-certified Psychiatric Nurse Practitioner, Roxanne DoBrava personally oversees your psychiatric diagnostic evaluation, brain mapping, and protocol calibration. Learn more on our About page."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How do I schedule a confidential consultation?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Book a complimentary 15-minute consultation through our Contact form or call 612-429-8280."
                    }
                }
            ]
        }
    ]
}
</script>
';
$page_title       = "TMS Therapy Monticello MN | NeuroStar® TMS & Psychiatry Clinic";
$page_description = "Looking for premier TMS therapy in Monticello, MN? Tranquil Minds provides FDA-cleared NeuroStar® TMS and psychiatric care at 154 East Broadway Street.";
$hero_title       = 'TMS Therapy in Monticello, MN:<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Your Hometown Mental Health Sanctuary.</span>';
$hero_subtitle    = 'Walk or drive minutes from anywhere in Monticello. Certified NeuroStar® TMS therapy and compassionate psychiatric care right here on East Broadway Street.';
$hero_badge       = 'Monticello Home Clinic · 154 E Broadway St';
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
                        Leading Psychiatric & TMS Care for Monticello Residents
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
                            <p class="text-gray-500 text-xs">Only 1–3 Mins (Downtown Monticello) via Broadway Street / Central Monticello.</p>
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
                            <span class="px-3 py-1 bg-accent/15 text-accent text-xs font-bold rounded-full uppercase">Broadway Street / Central Monticello</span>
                            <span class="text-xs text-gray-400 font-semibold">Downtown Monticello · 1–3 Mins</span>
                        </div>
                        <h3 class="text-2xl font-bold text-primary font-heading mb-3">Easy Driving Route from Monticello</h3>
                        <p class="text-gray-500 text-sm mb-6">Enjoy a straightforward commute directly into downtown Monticello:</p>

                        <div class="space-y-4 text-sm text-gray-700 mb-6">
                            <div class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-accent text-white flex items-center justify-center text-xs font-bold flex-shrink-0">1</span>
                                <div>Located conveniently on East Broadway Street right in downtown Monticello.</div>
                            </div>                            <div class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-accent text-white flex items-center justify-center text-xs font-bold flex-shrink-0">2</span>
                                <div>Minutes from Monticello High School, River City Plaza, and Mississippi Drive.</div>
                            </div>                            <div class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-accent text-white flex items-center justify-center text-xs font-bold flex-shrink-0">3</span>
                                <div>Easy ground-floor access with reserved patient parking directly outside Suite 2.</div>
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
                    <a href="tms-therapy-big-lake-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Big Lake, MN</a> <a href="tms-therapy-buffalo-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Buffalo, MN</a> <a href="tms-therapy-albertville-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Albertville, MN</a> <a href="tms-therapy-becker-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Becker, MN</a> 
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
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Where is Tranquil Minds located in Monticello, MN?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Our clinic is located at 154 East Broadway Street, Suite 2, in downtown Monticello, MN 55362, with reserved free ground-level patient parking directly in front.
                        </div>
                    </div>
                </div>
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What mental health conditions does Tranquil Minds treat in Monticello?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            We treat Major Depressive Disorder, Treatment-Resistant Depression, Generalized Anxiety Disorder, Anxious Depression, OCD, PTSD, and Adolescent Depression (ages 15+).
                        </div>
                    </div>
                </div>
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How does NeuroStar TMS therapy work for Monticello patients?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            NeuroStar TMS uses targeted magnetic pulses to stimulate underactive neurons in the mood centers of the brain. Sessions take only 19 minutes with zero systemic side effects.
                        </div>
                    </div>
                </div>
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Which insurance plans are accepted in Monticello?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            We are in-network with Blue Cross Blue Shield MN, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna. Read our <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
                        </div>
                    </div>
                </div>
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Can I drive myself to and from daily appointments?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. NeuroStar TMS requires no anesthesia or sedation. You remain awake and clear-headed, and can drive home or to work immediately.
                        </div>
                    </div>
                </div>
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How does Roxanne DoBrava, PMHNP-BC, supervise care?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            As a board-certified Psychiatric Nurse Practitioner, Roxanne DoBrava personally oversees your psychiatric diagnostic evaluation, brain mapping, and protocol calibration. Learn more on our <a href="about.php" class="text-accent hover:underline">About page</a>.
                        </div>
                    </div>
                </div>
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How do I schedule a confidential consultation?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Book a complimentary 15-minute consultation through our <a href="contact.php" class="text-accent hover:underline">Contact form</a> or call <a href="tel:+16124298280" class="text-accent font-semibold hover:underline">612-429-8280</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>