<?php
$page_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalClinic",
      "name": "Tranquil Minds Mental Health - TMS Therapy for Big Lake, MN",
      "url": "https://tranquilmindsmentalhealth.com/tms-therapy-big-lake-mn.php",
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
        "name": "Big Lake",
        "sameAs": "https://en.wikipedia.org/wiki/Big_Lake,_Minnesota"
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
          "name": "Big Lake, MN",
          "item": "https://tranquilmindsmentalhealth.com/tms-therapy-big-lake-mn.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How close is Tranquil Minds to Big Lake, MN?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tranquil Minds is directly across the Mississippi River from Big Lake, MN—just 3 miles away via the MN-25 bridge. The drive takes less than 5 minutes from downtown Big Lake or the Northstar Commuter rail station."
          }
        },
        {
          "@type": "Question",
          "name": "Can Big Lake commuters fit TMS into their daily schedule?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Because our clinic is just 5 minutes across the river and NeuroStar sessions last only 19 minutes with zero recovery time, Big Lake patients frequently schedule sessions before boarding the Northstar train, on their lunch break, or after work."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a doctor referral from my Big Lake clinic to start TMS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No formal referral is required to schedule an initial consultation with Roxanne DoBrava, PMHNP-BC. Patients can self-refer directly, and our clinical team will coordinate medical records with your existing providers."
          }
        },
        {
          "@type": "Question",
          "name": "What are the common side effects of NeuroStar TMS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The most common sensation is mild, temporary scalp tapping or tenderness during pulses that subsides within the first week. TMS does not cause weight gain, sexual dysfunction, memory loss, or fatigue common with psychiatric drugs."
          }
        },
        {
          "@type": "Question",
          "name": "Which health insurance plans cover TMS therapy for Big Lake residents?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "TMS is covered by all major Minnesota insurance carriers including Blue Cross Blue Shield Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Aetna, Cigna, and Optum for eligible treatment-resistant conditions."
          }
        },
        {
          "@type": "Question",
          "name": "How does TMS treat anxious depression for Sherburne County patients?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "NeuroStar TMS is FDA-cleared for Major Depressive Disorder with comorbid anxiety symptoms. It stimulates underactive left DLPFC brain networks while calming overstimulated amygdala loops, restoring natural emotional balance."
          }
        },
        {
          "@type": "Question",
          "name": "How quickly can Big Lake patients begin treatment?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Unlike Twin Cities health systems with 3 to 6-month waitlists, Tranquil Minds can typically evaluate Big Lake patients within days and initiate TMS sessions as soon as insurance authorization is secured (typically 1 to 2 weeks)."
          }
        }
      ]
    }
  ]
}
</script>
';
$page_title       = "TMS Therapy Big Lake MN | Non-Invasive Depression Care (5 Mins Away)";
$page_description = "Seeking TMS therapy in Big Lake, MN? Tranquil Minds is located just across the Mississippi River bridge in Monticello. FDA-cleared NeuroStar® TMS and psychiatry.";
$hero_title       = 'TMS Therapy for Big Lake, MN:<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Just Across the River.</span>';
$hero_subtitle    = 'Experience world-class NeuroStar® TMS therapy and compassionate psychiatric care less than 5 minutes from downtown Big Lake. Non-drug, non-invasive, and covered by insurance.';
$hero_badge       = 'Immediate Neighbor · 3 Miles Away';
$hero_cta1_text   = 'View 5-Min Route';
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
            <span class="text-primary font-semibold">Big Lake, MN</span>
        </div>
    </div>

    <!-- ===== BIG LAKE NEIGHBORHOOD SPOTLIGHT ===== -->
    <section class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 fade-in-section">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Direct Neighboring Community</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl text-primary font-heading mb-6 leading-tight">
                        Elite Psychiatric Care for Big Lake Residents — 5 Minutes Away
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 font-light">
                        For residents of Big Lake, Minnesota, accessing cutting-edge psychiatric treatment does not require an hour-long trek down Highway 10 or navigating Twin Cities traffic. Tranquil Minds Mental Health is situated just across the Mississippi River on Broadway Street in Monticello.
                    </p>
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        If you or someone in your family is struggling with persistent major depression, anxious depression, or treatment-resistant symptoms, <strong><a href="neurostar-tms.php" class="text-accent hover:underline">NeuroStar® TMS therapy</a></strong> offers a medically validated path forward. Because sessions last only 19 minutes and you can drive immediately afterward, fitting care into your Big Lake routine is completely seamless.
                    </p>

                    <div class="grid sm:grid-cols-2 gap-4 mb-8">
                        <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                            <div class="text-accent font-bold text-xl mb-1 font-heading">3 Miles Across MN-25</div>
                            <p class="text-gray-500 text-xs">Drive south on MN-25 across the river and you have arrived at our doorstep.</p>
                        </div>
                        <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                            <div class="text-primary font-bold text-xl mb-1 font-heading">Perfect for Commuters</div>
                            <p class="text-gray-500 text-xs">Ideal before or after your Northstar rail commute or during a lunch break.</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="contact.php" class="px-8 py-4 bg-accent text-white rounded-full font-bold shadow-md hover:bg-accent-light transition-all inline-block">Book Big Lake Consultation</a>
                        <a href="anxiety-tms-treatment-big-lake-mn.php" class="px-8 py-4 bg-white text-primary border border-primary/20 rounded-full font-bold hover:bg-primary/5 transition-all inline-block">Anxiety TMS Guide &rarr;</a>
                    </div>
                </div>

                <div class="lg:col-span-5 fade-in-section">
                    <!-- 5-Minute Route Card -->
                    <div id="route" class="bg-white rounded-3xl p-8 border border-primary/10 shadow-xl">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 bg-green-500/15 text-green-700 text-xs font-bold rounded-full uppercase">Super Quick Commute</span>
                            <span class="text-xs text-gray-400 font-semibold">3 Miles · 4–6 Mins</span>
                        </div>
                        <h3 class="text-2xl font-bold text-primary font-heading mb-3">Directions from Big Lake, MN</h3>
                        <p class="text-gray-500 text-sm mb-6">Whether you are near Big Lake High School, the Northstar Commuter Station, or Lake Mitchell, we are virtually in your backyard:</p>

                        <ol class="space-y-4 text-sm text-gray-700 border-l-2 border-primary/15 pl-4 ml-2 mb-6">
                            <li>
                                <div class="font-bold text-primary">Head South on MN-25 S</div>
                                <div class="text-xs text-gray-500">Cross the US-10 intersection heading toward the Mississippi River.</div>
                            </li>
                            <li>
                                <div class="font-bold text-primary">Cross the Mississippi River Bridge</div>
                                <div class="text-xs text-gray-500">Enjoy the quick scenic river crossing directly into downtown Monticello.</div>
                            </li>
                            <li>
                                <div class="font-bold text-primary">Turn onto East Broadway Street</div>
                                <div class="text-xs text-gray-500">Pull into 154 East Broadway Street, Suite 2. Reserved patient parking is right outside.</div>
                            </li>
                        </ol>

                        <div class="bg-[#FAFAFF] p-4 rounded-xl border border-primary/5 text-xs text-gray-500 mb-4">
                            <strong>Accepted In-Network:</strong> Blue Cross Blue Shield, HealthPartners, Medica, UnitedHealthcare, Medicare. See our <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
                        </div>

                        <a href="https://maps.google.com/?q=154+East+Broadway+Street+Suite+2,+Monticello,+MN+55362" target="_blank" rel="noopener" class="text-accent font-bold text-xs hover:underline flex items-center gap-1">Open in Google Maps &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SYMPTOM CHECKLIST FOR BIG LAKE RESIDENTS ===== -->
    <section class="py-16 bg-white relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Self Assessment</span>
                <h2 class="text-3xl md:text-4xl text-primary font-heading mb-4">Are You Suffering in Silence in Big Lake?</h2>
                <p class="text-gray-600 text-base">If any of the following apply to your mental health journey, you may be an ideal candidate for NeuroStar TMS:</p>
            </div>

            <div class="grid md:grid-cols-2 gap-4 fade-in-section mb-10">
                <div class="flex items-start gap-3 p-5 bg-[#FAFAFF] rounded-2xl border border-primary/5">
                    <span class="w-6 h-6 rounded-full bg-accent/15 text-accent flex items-center justify-center font-bold text-xs flex-shrink-0 mt-0.5">✓</span>
                    <span class="text-sm text-gray-700">Antidepressant medications have left you emotionally flat, exhausted, or caused weight gain. Learn about our <a href="treatment-resistant-depression.php" class="text-accent hover:underline font-semibold">TRD programs</a>.</span>
                </div>
                <div class="flex items-start gap-3 p-5 bg-[#FAFAFF] rounded-2xl border border-primary/5">
                    <span class="w-6 h-6 rounded-full bg-accent/15 text-accent flex items-center justify-center font-bold text-xs flex-shrink-0 mt-0.5">✓</span>
                    <span class="text-sm text-gray-700">You experience persistent brain fog and memory issues that make your workday difficult. Explore our <a href="creyos-cognitive-testing.php" class="text-accent hover:underline font-semibold">Creyos cognitive testing</a>.</span>
                </div>
                <div class="flex items-start gap-3 p-5 bg-[#FAFAFF] rounded-2xl border border-primary/5">
                    <span class="w-6 h-6 rounded-full bg-accent/15 text-accent flex items-center justify-center font-bold text-xs flex-shrink-0 mt-0.5">✓</span>
                    <span class="text-sm text-gray-700">Severe anxiety or panic attacks compound your depressive episodes. Read our <a href="anxiety.php" class="text-accent hover:underline font-semibold">Anxiety Treatment guide</a>.</span>
                </div>
                <div class="flex items-start gap-3 p-5 bg-[#FAFAFF] rounded-2xl border border-primary/5">
                    <span class="w-6 h-6 rounded-full bg-accent/15 text-accent flex items-center justify-center font-bold text-xs flex-shrink-0 mt-0.5">✓</span>
                    <span class="text-sm text-gray-700">You want a solution that doesn't rely on daily narcotics or sedation. Understand <a href="what-is-tms-therapy.php" class="text-accent hover:underline font-semibold">how TMS works</a>.</span>
                </div>
            </div>

            <!-- Nearby Hyperlocal Hubs -->
            <div class="bg-[#FAFAFF] p-6 rounded-3xl border border-primary/10 text-center">
                <span class="text-xs uppercase tracking-wider text-primary/60 font-bold block mb-2">Nearby Surrounding Communities</span>
                <p class="text-xs text-gray-500 mb-3">We also provide premier outpatient psychiatric and TMS services to neighboring towns:</p>
                <div class="flex flex-wrap justify-center gap-3 text-xs">
                    <a href="tms-therapy-elk-river-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Elk River, MN</a>
                    <a href="tms-therapy-becker-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Becker, MN</a>
                    <a href="tms-therapy-buffalo-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Buffalo, MN</a>
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
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Frequently Asked Questions: Big Lake, MN</h2>
                <p class="text-gray-500 text-lg">Helpful guidance for Big Lake residents considering non-invasive psychiatric TMS therapy.</p>
            </div>

            <div class="space-y-4 fade-in-section">
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How close is Tranquil Minds to Big Lake, MN?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Tranquil Minds is directly across the Mississippi River from Big Lake, MN—just 3 miles away via the MN-25 bridge. The drive takes less than 5 minutes from downtown Big Lake or the Northstar Commuter rail station, making daily sessions effortless.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Can Big Lake commuters fit TMS into their daily schedule?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. Because our clinic is just 5 minutes across the river and <a href="neurostar-tms.php" class="text-accent hover:underline">NeuroStar TMS</a> sessions last only 19 minutes with zero recovery time or grogginess, Big Lake patients frequently schedule sessions before boarding the Northstar train, on their lunch break, or after work.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Do I need a doctor referral from my Big Lake clinic to start TMS?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            No formal referral is required to schedule an initial consultation with Roxanne DoBrava, PMHNP-BC. Patients can self-refer directly by calling <a href="tel:+16124298280" class="text-accent font-semibold hover:underline">612-429-8280</a> or booking online, and our clinical team will coordinate medical records with your existing providers.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What are the common side effects of NeuroStar TMS?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            The most common sensation is mild, temporary scalp tapping or tenderness during pulses that typically subsides within the first week. TMS does not cause weight gain, sexual dysfunction, memory loss, or sedation common with psychiatric medications. Learn more about safety in our <a href="what-is-tms-therapy.php" class="text-accent hover:underline">What Is TMS Therapy</a> guide.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Which health insurance plans cover TMS therapy for Big Lake residents?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            TMS is covered by all major Minnesota insurance carriers including Blue Cross Blue Shield Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Aetna, Cigna, and Optum for eligible treatment-resistant conditions. Check our detailed <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a> for requirements.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How does TMS treat anxious depression for Sherburne County patients?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            NeuroStar TMS is FDA-cleared for Major Depressive Disorder with comorbid anxiety symptoms. It stimulates underactive left DLPFC brain networks while calming overstimulated amygdala loops, restoring natural emotional balance. Read our dedicated <a href="anxiety-tms-treatment-big-lake-mn.php" class="text-accent hover:underline">Big Lake Anxiety TMS page</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How quickly can Big Lake patients begin treatment?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Unlike Twin Cities health systems with 3 to 6-month waitlists, Tranquil Minds can typically evaluate Big Lake patients within days and initiate TMS sessions as soon as insurance authorization is secured (typically 1 to 2 weeks). Start today by visiting our <a href="contact.php" class="text-accent hover:underline">Contact page</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
