<?php
$page_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalClinic",
      "name": "Tranquil Minds Mental Health - TMS Therapy for Otsego, MN",
      "url": "https://tranquilmindsmentalhealth.com/tms-therapy-otsego-mn.php",
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
        "name": "Otsego",
        "sameAs": "https://en.wikipedia.org/wiki/Otsego,_Minnesota"
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
          "name": "Otsego, MN",
          "item": "https://tranquilmindsmentalhealth.com/tms-therapy-otsego-mn.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How long is the drive from Otsego to Tranquil Minds in Monticello?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The drive from Otsego takes only 12 to 14 minutes (about 12 miles) west via County Road 39 or I-94 W into downtown Monticello, making daily outpatient TMS sessions quick and convenient."
          }
        },
        {
          "@type": "Question",
          "name": "Why do Otsego residents choose Tranquil Minds over large hospital systems?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Unlike massive metro health systems with impersonal waiting rooms and rotating staff, Tranquil Minds offers a private, serene boutique setting where your care is directly managed by Roxanne DoBrava, PMHNP-BC."
          }
        },
        {
          "@type": "Question",
          "name": "Can I continue working while undergoing daily TMS therapy?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. NeuroStar sessions last only 19 minutes and cause no cognitive fog or sedation. Otsego professionals easily attend sessions during lunch breaks or before/after standard work hours and return to work immediately."
          }
        },
        {
          "@type": "Question",
          "name": "Which insurance plans cover TMS for Otsego residents?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tranquil Minds is in-network with Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna for qualifying treatment-resistant depression."
          }
        },
        {
          "@type": "Question",
          "name": "What does a NeuroStar TMS treatment feel like?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patients feel a rhythmic, light tapping sensation on the scalp resembling a woodpecker tap. Most patients relax, listen to podcasts, or chat with their certified technician throughout the 19-minute session."
          }
        },
        {
          "@type": "Question",
          "name": "Can I reduce or taper off my psychiatric medications after TMS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Many patients who achieve remission or symptom response are able to safely reduce or taper antidepressant dosages under the careful supervision of our psychiatric nurse practitioner."
          }
        },
        {
          "@type": "Question",
          "name": "How do I schedule a confidential consultation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can request a free 15-minute consultation through our website or call 612-429-8280. Our team will verify your insurance benefits and schedule your diagnostic evaluation."
          }
        }
      ]
    }
  ]
}
</script>
';
$page_title       = "TMS Therapy Otsego MN | Modern Depression & Anxiety Relief";
$page_description = "Providing certified NeuroStar® TMS therapy and psychiatric care for Otsego, MN. Located just 12 minutes west in Monticello. In-network with major insurance.";
$hero_title       = 'TMS Therapy for Otsego, MN:<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Restoring Your Mental Peace.</span>';
$hero_subtitle    = 'Looking for innovative, drug-free depression and OCD treatment near Otsego? Discover personalized NeuroStar® TMS therapy just 12 minutes away in Monticello.';
$hero_badge       = 'Serving Otsego & Eastern Wright County';
$hero_cta1_text   = 'View Route from Otsego';
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
            <span class="text-primary font-semibold">Otsego, MN</span>
        </div>
    </div>

    <!-- ===== OTSEGO COMMUNITY OVERVIEW ===== -->
    <section class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 fade-in-section">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Community Psychiatric Care</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl text-primary font-heading mb-6 leading-tight">
                        Drug-Free, Science-Backed Mental Health for Otsego Residents
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 font-light">
                        Otsego is one of Minnesota's most rapidly expanding communities, but along with rapid growth often comes intense stress, isolation, and persistent depressive conditions that don't respond to standard medication management.
                    </p>
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        If you have tried multiple SSRIs or SNRIs without getting your vitality back, <strong><a href="neurostar-tms.php" class="text-accent hover:underline">NeuroStar® TMS therapy</a></strong> offers a powerful medical breakthrough. Located just 12 miles west in downtown Monticello, Tranquil Minds delivers non-invasive magnetic pulses that stimulate underactive mood circuits—without memory loss, sedation, or weight gain.
                    </p>

                    <div class="bg-white p-6 rounded-3xl border border-primary/10 shadow-sm mb-8">
                        <h3 class="text-primary font-bold text-base mb-3">Why Otsego Patients Choose Tranquil Minds:</h3>
                        <div class="grid sm:grid-cols-2 gap-3 text-sm text-gray-600">
                            <div>• Quick 12 to 14-minute commute via County Rd 39 or I-94</div>
                            <div>• Direct care by board-certified PMHNP-BC Roxanne DoBrava</div>
                            <div>• Covered by <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline font-semibold">BCBS MN, HealthPartners, Medica &amp; Medicare</a></div>
                            <div>• Flexible morning, afternoon &amp; lunchtime appointment slots</div>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="contact.php" class="px-8 py-4 bg-accent text-white rounded-full font-bold shadow-md hover:bg-accent-light transition-all inline-block">Book Your Otsego Consultation</a>
                        <a href="treatment-resistant-depression.php" class="px-8 py-4 bg-white text-primary border border-primary/20 rounded-full font-bold hover:bg-primary/5 transition-all inline-block">Learn About TRD &rarr;</a>
                    </div>
                </div>

                <div class="lg:col-span-5 fade-in-section">
                    <div id="route" class="bg-white rounded-3xl p-8 border border-primary/10 shadow-xl">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 bg-accent/15 text-accent text-xs font-bold rounded-full uppercase">County Rd 39 / I-94</span>
                            <span class="text-xs text-gray-400 font-semibold">12 Miles · 13 Mins</span>
                        </div>
                        <h3 class="text-2xl font-bold text-primary font-heading mb-3">Easy Driving Route from Otsego</h3>
                        <p class="text-gray-500 text-sm mb-6">Reach our peaceful Monticello clinic in just minutes:</p>

                        <div class="space-y-4 text-sm text-gray-700 mb-6">
                            <div class="flex items-start gap-3">
                                <span class="font-bold text-accent">1.</span>
                                <div>Take County Road 39 W or MN-101 S to I-94 W.</div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="font-bold text-accent">2.</span>
                                <div>Drive westbound past Albertville into Monticello.</div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="font-bold text-accent">3.</span>
                                <div>Take Exit 193/194 onto Broadway Street. Our private suite is located at 154 East Broadway Street, Suite 2.</div>
                            </div>
                        </div>

                        <div class="bg-[#FAFAFF] p-4 rounded-xl border border-primary/5 text-xs text-gray-500 mb-4">
                            <strong>Accepted Insurances:</strong> HealthPartners, BCBS MN, Medica, UHC, Medicare, Aetna, Cigna. See our <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
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
                <h2 class="text-3xl md:text-4xl text-primary font-heading mb-4">Evidence-Based Treatment for Otsego Patients</h2>
            </div>

            <div class="grid md:grid-cols-2 gap-6 fade-in-section mb-10">
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-2">Major Depressive Disorder</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">NeuroStar TMS stimulates dormant brain cells in the left dorsolateral prefrontal cortex, bringing over 83% of patients significant symptom reduction.</p>
                    <a href="depression.php" class="text-accent font-bold text-xs hover:underline">Learn About Depression Care &rarr;</a>
                </div>
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-2">Severe Anxiety &amp; Panic</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Stop relying on sedating medications. FDA-cleared TMS calms overactive limbic loops to restore calm and daytime mental clarity.</p>
                    <a href="anxiety.php" class="text-accent font-bold text-xs hover:underline">Learn About Anxiety Treatment &rarr;</a>
                </div>
            </div>

            <!-- Surrounding Towns Links -->
            <div class="bg-[#FAFAFF] p-6 rounded-3xl border border-primary/10 text-center">
                <span class="text-xs uppercase tracking-wider text-primary/60 font-bold block mb-2">Nearby Surrounding Communities</span>
                <p class="text-xs text-gray-500 mb-3">Serving Wright, Sherburne, and Hennepin County residents:</p>
                <div class="flex flex-wrap justify-center gap-3 text-xs">
                    <a href="tms-therapy-elk-river-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Elk River, MN</a>
                    <a href="tms-therapy-rogers-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Rogers, MN</a>
                    <a href="tms-therapy-st-michael-albertville-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">St. Michael &amp; Albertville</a>
                    <a href="tms-therapy-big-lake-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Big Lake, MN</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FAQ ACCORDION (7 EXPANDABLE ITEMS) ===== -->
    <section class="py-16 bg-[#FAFAFF] relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Common Questions</span>
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Frequently Asked Questions: Otsego, MN</h2>
                <p class="text-gray-500 text-lg">Clear answers for Otsego residents seeking advanced, non-drug mental health care.</p>
            </div>

            <div class="space-y-4 fade-in-section">
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How long is the drive from Otsego to Tranquil Minds in Monticello?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            The drive from Otsego takes only 12 to 14 minutes (about 12 miles) west via County Road 39 or I-94 W into downtown Monticello, making daily outpatient TMS sessions quick and convenient.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Why do Otsego residents choose Tranquil Minds over large hospital systems?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Unlike massive metro health systems with impersonal waiting rooms and rotating staff, Tranquil Minds offers a private, serene boutique setting where your care is directly managed by Roxanne DoBrava, PMHNP-BC. Learn more on our <a href="about.php" class="text-accent hover:underline">About page</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Can I continue working while undergoing daily TMS therapy?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. NeuroStar sessions last only 19 minutes and cause no cognitive fog or sedation. Otsego professionals easily attend sessions during lunch breaks or before/after standard work hours and return to work immediately. Read more in <a href="what-is-tms-therapy.php" class="text-accent hover:underline">What Is TMS Therapy</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Which insurance plans cover TMS for Otsego residents?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Tranquil Minds is in-network with Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna for qualifying treatment-resistant depression. See our full <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What does a NeuroStar TMS treatment feel like?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Patients feel a rhythmic, light tapping sensation on the scalp resembling a woodpecker tap. Most patients relax, listen to podcasts, or chat with their certified technician throughout the 19-minute session in our comfortable clinic chair.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Can I reduce or taper off my psychiatric medications after TMS?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Many patients who achieve remission or symptom response are able to safely reduce or taper antidepressant dosages under the careful supervision of our psychiatric nurse practitioner. Learn about our comprehensive <a href="psychiatry.php" class="text-accent hover:underline">psychiatric medication management</a>.
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
                            You can request a free 15-minute consultation through our <a href="contact.php" class="text-accent hover:underline">Contact page</a> or call <a href="tel:+16124298280" class="text-accent font-semibold hover:underline">612-429-8280</a>. Our team will verify your insurance benefits and schedule your diagnostic evaluation.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
