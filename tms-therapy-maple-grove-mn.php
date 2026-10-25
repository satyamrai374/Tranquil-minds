<?php
$page_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalClinic",
      "name": "Tranquil Minds Mental Health - TMS Therapy for Maple Grove, MN",
      "url": "https://tranquilmindsmentalhealth.com/tms-therapy-maple-grove-mn.php",
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
        "name": "Maple Grove",
        "sameAs": "https://en.wikipedia.org/wiki/Maple_Grove,_Minnesota"
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
          "name": "Maple Grove, MN",
          "item": "https://tranquilmindsmentalhealth.com/tms-therapy-maple-grove-mn.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Why do patients in Maple Grove travel to Monticello for TMS therapy?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Many Maple Grove residents choose Tranquil Minds to escape congested metro hospital networks, 3 to 6-month waitlists, and impersonal assembly-line care. Driving 20 minutes west on I-94 is a stress-free reverse commute that leads to private, boutique psychiatric treatment with free door-side parking."
          }
        },
        {
          "@type": "Question",
          "name": "Is TMS covered for Maple Grove patients with commercial insurance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Tranquil Minds is in-network with all major Minnesota commercial carriers common in the NW metro, including Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna."
          }
        },
        {
          "@type": "Question",
          "name": "Is TMS FDA-cleared for teenagers in Maple Grove high schools?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. NeuroStar TMS is FDA-cleared for adolescents aged 15 and older with Major Depressive Disorder, offering Maple Grove and Osseo high schoolers an effective, non-drug alternative that does not impair memory, sports performance, or study habits."
          }
        },
        {
          "@type": "Question",
          "name": "How long does daily treatment take and can I drive myself?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Each NeuroStar TMS session takes only 19 minutes. There is no anesthesia, grogginess, or memory loss, allowing Maple Grove patients to drive themselves directly home, back to work, or run errands immediately afterward."
          }
        },
        {
          "@type": "Question",
          "name": "How does NeuroStar TMS compare to taking antidepressants?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Antidepressant medications circulate throughout your entire body via the bloodstream, frequently causing unwanted side effects such as weight gain, sexual dysfunction, insomnia, or emotional numbness. TMS targets only the exact mood center of the brain with gentle magnetic fields, avoiding systemic side effects."
          }
        },
        {
          "@type": "Question",
          "name": "How does Tranquil Minds coordinate with my Maple Grove primary care doctor or therapist?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We believe in collaborative mental health care. With your permission, our clinical team shares routine progress updates and objective Creyos cognitive testing data with your current therapist or primary care doctor so everyone stays aligned."
          }
        },
        {
          "@type": "Question",
          "name": "How quickly can I start treatment at Tranquil Minds?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "While metro hospital programs often require months of waiting, Tranquil Minds can schedule initial comprehensive evaluations within days. Once insurance pre-authorization is confirmed (usually 1 to 2 weeks), daily treatment can begin promptly."
          }
        }
      ]
    }
  ]
}
</script>
';
$page_title       = "TMS Therapy Near Maple Grove MN | NW Metro Non-Drug Depression Care";
$page_description = "Looking for TMS therapy near Maple Grove, MN? Skip the metro hospital waitlists. Tranquil Minds provides FDA-cleared NeuroStar® TMS just 20 minutes west on I-94.";
$hero_title       = 'TMS Therapy for Maple Grove:<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Escape the Metro Crowd.</span>';
$hero_subtitle    = 'Tired of 3-month waitlists and crowded hospital ramps in Hennepin County? Experience private, boutique NeuroStar® TMS therapy just 20 minutes west in peaceful Monticello.';
$hero_badge       = 'Serving Maple Grove & NW Hennepin County';
$hero_cta1_text   = 'Why Commute West?';
$hero_cta1_link   = '#why-west';
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
            <span class="text-primary font-semibold">Maple Grove, MN</span>
        </div>
    </div>

    <!-- ===== WHY COMMUTE WEST FROM MAPLE GROVE ===== -->
    <section id="why-west" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 fade-in-section">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">A Peaceful Alternative</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl text-primary font-heading mb-6 leading-tight">
                        Why Maple Grove Patients Choose Our Monticello Sanctuary
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 font-light">
                        For residents of Maple Grove, Plymouth, and the northwest suburbs, receiving mental health care at massive hospital conglomerates often feels clinical, cold, and transactional. You face months on waiting lists, expensive parking ramps, and rotating medical staff who don't know your story.
                    </p>
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        A quick 20 to 22-minute reverse commute westbound on I-94 brings you to <strong>Tranquil Minds in Monticello</strong>. Here, psychiatric care is personal, warm, and elevated. Under the direct leadership of Roxanne DoBrava, PMHNP-BC, we offer FDA-cleared <strong><a href="neurostar-tms.php" class="text-accent hover:underline">NeuroStar® TMS therapy</a></strong> for severe depression, treatment resistance, and OCD in private, soundproof suites.
                    </p>

                    <div class="grid sm:grid-cols-2 gap-4 mb-8">
                        <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                            <div class="text-accent font-bold text-lg mb-1 font-heading">Zero Metro Traffic</div>
                            <p class="text-gray-500 text-xs">Drive westbound against morning rush hour—fast, easy 70 mph driving.</p>
                        </div>
                        <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                            <div class="text-primary font-bold text-lg mb-1 font-heading">Fast Intake Appointments</div>
                            <p class="text-gray-500 text-xs">Start your therapy within days, rather than waiting months for hospital clearance.</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="contact.php" class="px-8 py-4 bg-accent text-white rounded-full font-bold shadow-md hover:bg-accent-light transition-all inline-block">Schedule Your Maple Grove Visit</a>
                        <a href="adolescent-mental-health-tms-maple-grove-mn.php" class="px-8 py-4 bg-white text-primary border border-primary/20 rounded-full font-bold hover:bg-primary/5 transition-all inline-block">Teen TMS Program &rarr;</a>
                    </div>
                </div>

                <div class="lg:col-span-5 fade-in-section">
                    <!-- Commute Info Card -->
                    <div class="bg-white rounded-3xl p-8 border border-primary/10 shadow-xl">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 bg-accent/15 text-accent text-xs font-bold rounded-full uppercase">Reverse Commute</span>
                            <span class="text-xs text-gray-400 font-semibold">24 Miles · 22 Mins</span>
                        </div>
                        <h3 class="text-2xl font-bold text-primary font-heading mb-3">The Maple Grove Route</h3>
                        <p class="text-gray-500 text-sm mb-6">From Weaver Lake Road, Maple Grove Parkway, or the Arbor Lakes shopping area:</p>

                        <div class="space-y-4 text-sm text-gray-700 mb-6">
                            <div class="flex items-start gap-3">
                                <span class="font-bold text-accent">1.</span>
                                <div>Hop onto I-94 W heading northwest through Rogers and Albertville.</div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="font-bold text-accent">2.</span>
                                <div>Take Exit 193/194 straight into downtown Monticello.</div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="font-bold text-accent">3.</span>
                                <div>Park steps from our front door at 154 East Broadway Street. Free ground-level parking right outside.</div>
                            </div>
                        </div>

                        <div class="bg-[#FAFAFF] p-4 rounded-xl border border-primary/5 text-xs text-gray-500 mb-4">
                            <strong>Accepted In-Network:</strong> Blue Cross Blue Shield, HealthPartners, Medica, UnitedHealthcare, Medicare. Check our <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
                        </div>

                        <a href="https://maps.google.com/?q=154+East+Broadway+Street+Suite+2,+Monticello,+MN+55362" target="_blank" rel="noopener" class="text-accent font-bold text-xs hover:underline flex items-center gap-1">Open Directions in Google Maps &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CLINICAL FOCUS: ADOLESCENTS & TRD ===== -->
    <section class="py-16 bg-white relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Specialized Clinical Care</span>
                <h2 class="text-3xl md:text-4xl text-primary font-heading mb-4">Advanced Solutions for Maple Grove Families</h2>
                <p class="text-gray-600 text-base">Explore evidence-based options that move beyond conventional medication limitations:</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 fade-in-section mb-10">
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-2">Teen TMS (Ages 15+)</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">FDA-cleared magnetic therapy for adolescents suffering from major depression. Protects academic performance without systemic drug side effects.</p>
                    <a href="adolescent-mental-health-tms-maple-grove-mn.php" class="text-accent font-bold text-xs hover:underline">Read Maple Grove Teen TMS Guide &rarr;</a>
                </div>
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-2">Treatment-Resistant Depression</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Over 83% of patients experience significant symptom reduction after completing a NeuroStar protocol. Escape the cycle of failed medications.</p>
                    <a href="treatment-resistant-depression.php" class="text-accent font-bold text-xs hover:underline">Explore TRD Solutions &rarr;</a>
                </div>
            </div>

            <!-- Surrounding Towns Links -->
            <div class="bg-[#FAFAFF] p-6 rounded-3xl border border-primary/10 text-center">
                <span class="text-xs uppercase tracking-wider text-primary/60 font-bold block mb-2">Nearby Surrounding Communities</span>
                <p class="text-xs text-gray-500 mb-3">Serving patients along the Northwest I-94 corridor:</p>
                <div class="flex flex-wrap justify-center gap-3 text-xs">
                    <a href="tms-therapy-rogers-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Rogers, MN</a>
                    <a href="tms-therapy-st-michael-albertville-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">St. Michael &amp; Albertville</a>
                    <a href="tms-therapy-otsego-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Otsego, MN</a>
                    <a href="best-tms-clinic-minnesota.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Best TMS Clinic Minnesota</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FAQ ACCORDION (7 EXPANDABLE ITEMS) ===== -->
    <section class="py-16 bg-[#FAFAFF] relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Common Questions</span>
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Frequently Asked Questions: Maple Grove, MN</h2>
                <p class="text-gray-500 text-lg">Helpful details for Hennepin County patients seeking a higher standard of psychiatric care.</p>
            </div>

            <div class="space-y-4 fade-in-section">
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Why do patients in Maple Grove travel to Monticello for TMS therapy?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Many Maple Grove residents choose Tranquil Minds to escape congested metro hospital networks, 3 to 6-month waitlists, and impersonal assembly-line care. Driving 20 minutes west on I-94 is a stress-free reverse commute that leads to private, boutique psychiatric treatment with free door-side parking.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Is TMS covered for Maple Grove patients with commercial insurance?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. Tranquil Minds is in-network with all major Minnesota commercial carriers common in the NW metro, including Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Medicare, Optum, Cigna, and Aetna. Read our complete <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Is TMS FDA-cleared for teenagers in Maple Grove high schools?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. NeuroStar TMS is FDA-cleared for adolescents aged 15 and older with Major Depressive Disorder, offering Maple Grove and Osseo high schoolers an effective, non-drug alternative that does not impair memory, sports performance, or study habits. Explore our dedicated <a href="adolescent-mental-health-tms-maple-grove-mn.php" class="text-accent hover:underline">Adolescent Mental Health Guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How long does daily treatment take and can I drive myself?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Each NeuroStar TMS session takes only 19 minutes. There is no anesthesia, grogginess, or memory loss, allowing Maple Grove patients to drive themselves directly home, back to work, or run errands immediately afterward.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How does NeuroStar TMS compare to taking antidepressants?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Antidepressant medications circulate throughout your entire body via the bloodstream, frequently causing unwanted side effects such as weight gain, sexual dysfunction, insomnia, or emotional numbness. TMS targets only the exact mood center of the brain with gentle magnetic fields, avoiding systemic side effects. Read <a href="what-is-tms-therapy.php" class="text-accent hover:underline">What Is TMS Therapy</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How does Tranquil Minds coordinate with my Maple Grove primary care doctor or therapist?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            We believe in collaborative mental health care. With your permission, our clinical team shares routine progress updates and objective <a href="creyos-cognitive-testing.php" class="text-accent hover:underline">Creyos cognitive testing data</a> with your current therapist or primary care doctor so everyone stays aligned.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How quickly can I start treatment at Tranquil Minds?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            While metro hospital programs often require months of waiting, Tranquil Minds can schedule initial comprehensive evaluations within days. Once insurance pre-authorization is confirmed (usually 1 to 2 weeks), daily treatment can begin promptly. Visit our <a href="contact.php" class="text-accent hover:underline">Contact page</a> to get started.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
