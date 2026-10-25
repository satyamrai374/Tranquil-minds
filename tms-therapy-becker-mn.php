<?php
$page_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalClinic",
      "name": "Tranquil Minds Mental Health - TMS Therapy for Becker, MN",
      "url": "https://tranquilmindsmentalhealth.com/tms-therapy-becker-mn.php",
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
        {"@type": "City", "name": "Becker", "sameAs": "https://en.wikipedia.org/wiki/Becker,_Minnesota"},
        {"@type": "City", "name": "Clear Lake", "sameAs": "https://en.wikipedia.org/wiki/Clear_Lake,_Minnesota"}
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
          "name": "Becker, MN",
          "item": "https://tranquilmindsmentalhealth.com/tms-therapy-becker-mn.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How long does the drive take from Becker to Tranquil Minds in Monticello?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The drive from Becker takes only 8 to 10 minutes (about 8 miles) southeast down US-10 E and across the MN-25 Mississippi River bridge directly into downtown Monticello."
          }
        },
        {
          "@type": "Question",
          "name": "How private and confidential is treatment at Tranquil Minds for Becker residents?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tranquil Minds operates as an independent, discreet boutique clinic with reserved parking and private treatment rooms. Becker patients receive personalized psychiatric care without the crowded waiting rooms or community exposure of local community clinics."
          }
        },
        {
          "@type": "Question",
          "name": "Does Medicare cover TMS therapy for Becker retirees and seniors?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Traditional Medicare and Medicare Advantage plans provide robust coverage for FDA-cleared NeuroStar TMS therapy for patients diagnosed with clinical depression who have not achieved relief from medication."
          }
        },
        {
          "@type": "Question",
          "name": "What other insurance plans are accepted for Becker patients?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tranquil Minds is in-network with Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna."
          }
        },
        {
          "@type": "Question",
          "name": "What is the daily session length and schedule commitment?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "NeuroStar TMS sessions last approximately 19 minutes per day, scheduled Monday through Friday for 6 to 9 weeks. Flexible early morning, midday, and late afternoon slots make attendance effortless."
          }
        },
        {
          "@type": "Question",
          "name": "Can I still work, drive, or manage machinery during TMS therapy?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Unlike psychiatric drugs that cause grogginess, weight gain, or delayed reflexes, TMS produces zero sedation or cognitive impairment. You can drive immediately and resume work or daily physical tasks safely."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a doctor\'s referral to schedule a consultation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No physician referral is required. You can self-refer directly by booking a complimentary 15-minute consultation through our website or calling 612-429-8280."
          }
        }
      ]
    }
  ]
}
</script>
';
$page_title       = "TMS Therapy Becker MN | Local Outpatient TMS & Psychiatry";
$page_description = "Serving Becker and Clear Lake, MN. Tranquil Minds provides FDA-cleared NeuroStar® TMS therapy and psychiatric care just 10 minutes away in Monticello.";
$hero_title       = 'TMS Therapy for Becker, MN:<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Discreet, Local Healing.</span>';
$hero_subtitle    = 'Access advanced psychiatric care and drug-free NeuroStar® TMS therapy just 10 minutes southeast down US-10. Safe, confidential, and covered by insurance.';
$hero_badge       = 'Serving Becker & Sherburne County';
$hero_cta1_text   = 'View Route from Becker';
$hero_cta1_link   = '#becker-route';
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
            <span class="text-primary font-semibold">Becker, MN</span>
        </div>
    </div>

    <!-- ===== BECKER COMMUNITY HIGHLIGHT ===== -->
    <section class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 fade-in-section">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Sherburne County Care</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl text-primary font-heading mb-6 leading-tight">
                        Confidential, Drug-Free Mental Health Support for Becker Residents
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 font-light">
                        For residents of Becker, Clear Lake, and the surrounding agricultural and energy communities, seeking mental health care can sometimes feel daunting due to local privacy concerns or a lack of specialized psychiatric options nearby.
                    </p>
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        At Tranquil Minds in Monticello, located just 8 miles southeast across the river, we provide a private, respectful sanctuary. Under the care of board-certified Psychiatric Nurse Practitioner Roxanne DoBrava, our clinic offers <strong><a href="neurostar-tms.php" class="text-accent hover:underline">NeuroStar® TMS therapy</a></strong>—an FDA-cleared treatment that uses gentle magnetic pulses to relieve severe depression and OCD without systemic medication side effects.
                    </p>

                    <div class="bg-white p-6 rounded-3xl border border-primary/10 shadow-sm mb-8">
                        <h3 class="text-primary font-bold text-base mb-3">Why Becker Patients Choose Tranquil Minds:</h3>
                        <div class="grid sm:grid-cols-2 gap-3 text-sm text-gray-600">
                            <div>• Quick 10-minute drive via US-10 E and MN-25 S</div>
                            <div>• Total patient privacy in a boutique setting</div>
                            <div>• Non-drug therapy with no sedation or grogginess</div>
                            <div>• In-network with <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline font-semibold">Medicare &amp; major MN insurance</a></div>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="contact.php" class="px-8 py-4 bg-accent text-white rounded-full font-bold shadow-md hover:bg-accent-light transition-all inline-block">Book Becker Consultation</a>
                        <a href="depression.php" class="px-8 py-4 bg-white text-primary border border-primary/20 rounded-full font-bold hover:bg-primary/5 transition-all inline-block">Depression TMS Care &rarr;</a>
                    </div>
                </div>

                <div class="lg:col-span-5 fade-in-section">
                    <!-- Commute Info Card -->
                    <div id="becker-route" class="bg-white rounded-3xl p-8 border border-primary/10 shadow-xl">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 bg-accent/15 text-accent text-xs font-bold rounded-full uppercase">US-10 E / MN-25 S</span>
                            <span class="text-xs text-gray-400 font-semibold">8 Miles · 10 Mins</span>
                        </div>
                        <h3 class="text-2xl font-bold text-primary font-heading mb-3">Directions from Becker, MN</h3>
                        <p class="text-gray-500 text-sm mb-6">Enjoy a brief 10-minute drive right into downtown Monticello:</p>

                        <div class="space-y-4 text-sm text-gray-700 mb-6">
                            <div class="flex items-start gap-3">
                                <span class="font-bold text-accent">1.</span>
                                <div>Take US-10 E southeast from Becker toward Big Lake.</div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="font-bold text-accent">2.</span>
                                <div>Turn South onto MN-25 S and cross the Mississippi River bridge into Monticello.</div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="font-bold text-accent">3.</span>
                                <div>Turn onto East Broadway Street. Suite 2 is on your left with free parking directly outside.</div>
                            </div>
                        </div>

                        <div class="bg-[#FAFAFF] p-4 rounded-xl border border-primary/5 text-xs text-gray-500 mb-4">
                            <strong>Accepted Insurances:</strong> Medicare, BCBS MN, HealthPartners, Medica, UHC, Cigna, Aetna. See our <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
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
                <h2 class="text-3xl md:text-4xl text-primary font-heading mb-4">Personalized Programs for Becker Patients</h2>
                <p class="text-gray-600 text-base">Comprehensive psychiatric solutions tailored to your unique health goals:</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 fade-in-section mb-10">
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-2">Depression Care Without Pills</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Say goodbye to fatigue, dry mouth, and weight gain. NeuroStar TMS stimulates dormant brain cells with focused magnetic pulses to restore energy and focus naturally.</p>
                    <a href="what-is-tms-therapy.php" class="text-accent font-bold text-xs hover:underline">How TMS Works &rarr;</a>
                </div>
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-2">Psychiatric Medication Oversight</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Under board-certified nurse practitioner Roxanne DoBrava, receive thoughtful medication reviews, optimization, or supervised de-prescribing when TMS induces remission.</p>
                    <a href="psychiatry.php" class="text-accent font-bold text-xs hover:underline">Psychiatry Services &rarr;</a>
                </div>
            </div>

            <!-- Surrounding Towns Links -->
            <div class="bg-[#FAFAFF] p-6 rounded-3xl border border-primary/10 text-center">
                <span class="text-xs uppercase tracking-wider text-primary/60 font-bold block mb-2">Nearby Surrounding Communities</span>
                <p class="text-xs text-gray-500 mb-3">Serving towns across Sherburne, Wright, and Stearns counties:</p>
                <div class="flex flex-wrap justify-center gap-3 text-xs">
                    <a href="tms-therapy-big-lake-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Big Lake, MN</a>
                    <a href="tms-therapy-st-cloud-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">St. Cloud, MN</a>
                    <a href="tms-therapy-elk-river-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Elk River, MN</a>
                    <a href="tms-therapy-buffalo-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Buffalo, MN</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FAQ ACCORDION (7 EXPANDABLE ITEMS) ===== -->
    <section class="py-16 bg-[#FAFAFF] relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Common Questions</span>
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Frequently Asked Questions: Becker, MN</h2>
                <p class="text-gray-500 text-lg">Clear answers for Becker residents exploring outpatient psychiatric TMS therapy.</p>
            </div>

            <div class="space-y-4 fade-in-section">
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How long does the drive take from Becker to Tranquil Minds in Monticello?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            The drive from Becker takes only 8 to 10 minutes (about 8 miles) southeast down US-10 E and across the MN-25 Mississippi River bridge directly into downtown Monticello.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How private and confidential is treatment at Tranquil Minds for Becker residents?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Tranquil Minds operates as an independent, discreet boutique clinic with reserved parking and private treatment rooms. Becker patients receive personalized psychiatric care without the crowded waiting rooms or community exposure of local clinics. Learn more about our clinic on our <a href="about.php" class="text-accent hover:underline">About page</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Does Medicare cover TMS therapy for Becker retirees and seniors?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. Traditional Medicare and Medicare Advantage plans provide robust coverage for FDA-cleared NeuroStar TMS therapy for patients diagnosed with clinical depression who have not achieved relief from medication. See our full <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What other insurance plans are accepted for Becker patients?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Tranquil Minds is in-network with Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna for eligible depression patients.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What is the daily session length and schedule commitment?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            <a href="neurostar-tms.php" class="text-accent hover:underline">NeuroStar TMS</a> sessions last approximately 19 minutes per day, scheduled Monday through Friday for 6 to 9 weeks. Flexible early morning, midday, and late afternoon slots make attendance effortless.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Can I still work, drive, or manage machinery during TMS therapy?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. Unlike psychiatric drugs that cause grogginess, weight gain, or delayed reflexes, TMS produces zero sedation or cognitive impairment. You can drive immediately and resume work or daily physical tasks safely. Learn more in <a href="what-is-tms-therapy.php" class="text-accent hover:underline">What Is TMS Therapy</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Do I need a doctor's referral to schedule a consultation?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            No physician referral is required. You can self-refer directly by booking a complimentary 15-minute consultation through our <a href="contact.php" class="text-accent hover:underline">Contact page</a> or calling <a href="tel:+16124298280" class="text-accent font-semibold hover:underline">612-429-8280</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
