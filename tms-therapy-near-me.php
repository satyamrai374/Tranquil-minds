<?php
$page_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalClinic",
      "name": "Tranquil Minds Mental Health - TMS Therapy Near Me",
      "url": "https://tranquilmindsmentalhealth.com/tms-therapy-near-me.php",
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
      "medicalSpecialty": ["Psychiatric", "MentalHealth"]
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
          "name": "Service Areas",
          "item": "https://tranquilmindsmentalhealth.com/locations.php"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "TMS Therapy Near Me",
          "item": "https://tranquilmindsmentalhealth.com/tms-therapy-near-me.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do I find TMS therapy near me in Minnesota?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tranquil Minds Mental Health is located at 154 East Broadway Street, Suite 2, Monticello, MN 55362, serving patients throughout Wright, Sherburne, and Hennepin counties including Buffalo, Elk River, Big Lake, STMA, and Maple Grove. Free consultations can be scheduled online or by calling 612-429-8280."
          }
        },
        {
          "@type": "Question",
          "name": "What qualifies me for TMS therapy near me under insurance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most health insurance plans require a diagnosis of Major Depressive Disorder, a history of trying two or more antidepressants without sufficient improvement, and prior participation in psychotherapy."
          }
        },
        {
          "@type": "Question",
          "name": "Can I drive myself home after daily TMS sessions?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. NeuroStar TMS requires no anesthesia, sedation, or memory-impairing medication. Patients can drive themselves to and from the clinic and immediately return to work, school, or daily routines."
          }
        },
        {
          "@type": "Question",
          "name": "Is TMS therapy painful or uncomfortable?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most patients describe TMS as a rhythmic tapping sensation on the scalp, similar to a woodpecker tap. Any mild scalp sensitivity typically diminishes after the first week of treatment."
          }
        },
        {
          "@type": "Question",
          "name": "What is the clinical success rate of NeuroStar TMS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "In real-world clinical outcomes, up to 83% of patients experience a significant measurable reduction in depressive symptoms, and 62% achieve full remission after completing their treatment course."
          }
        },
        {
          "@type": "Question",
          "name": "How is NeuroStar TMS different from other TMS systems?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "NeuroStar features patented Contact Sensing technology that actively monitors magnetic coil contact with your scalp in real-time to guarantee accurate dose delivery, and holds FDA clearances for adult depression, adolescent depression (15+), and OCD."
          }
        },
        {
          "@type": "Question",
          "name": "How do I get started with a consultation at Tranquil Minds?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can schedule a complimentary 15-minute consultation directly through our website or by calling 612-429-8280. Our clinical team will evaluate your medical history and verify your insurance benefits."
          }
        }
      ]
    }
  ]
}
</script>
';
$page_title       = "TMS Therapy Near Me | Certified NeuroStar Clinic Monticello MN";
$page_description = "Looking for TMS therapy near me? Tranquil Minds provides FDA-cleared NeuroStar® TMS for depression & OCD in Monticello, serving Buffalo, Elk River, STMA, and Central MN.";
$hero_title       = 'TMS Therapy Near Me:<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Your Nearest Healing Center.</span>';
$hero_subtitle    = 'Searching for certified NeuroStar® TMS therapy close to home? Discover drug-free, non-invasive relief located right here in Central Minnesota with zero hospital waitlists.';
$hero_badge       = 'Local Provider · Accepting New Patients';
$hero_cta1_text   = 'Check Your Zip Code';
$hero_cta1_link   = '#locator';
$hero_cta2_text   = 'Free 15-Min Consult';
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
            <span class="text-primary font-semibold">TMS Therapy Near Me</span>
        </div>
    </div>

    <!-- ===== INTRO & LOCATOR SECTION ===== -->
    <section id="locator" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/10 rounded-full blur-[140px] translate-x-1/3 -translate-y-1/4 pointer-events-none"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 fade-in-section">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Certified Local Clinic</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl text-primary font-heading mb-6 leading-tight">
                        Find Effective TMS Therapy Right Around the Corner
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 font-light">
                        When depression or OCD does not respond to prescription antidepressants, finding a certified Transcranial Magnetic Stimulation (TMS) clinic nearby is a life-changing turning point. You do not need to drive into Minneapolis or navigate overwhelming university hospital complexes to access advanced brain stimulation. Explore our complete guide to <a href="what-is-tms-therapy.php" class="text-accent font-semibold hover:underline">what TMS therapy is</a>.
                    </p>
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        Tranquil Minds Mental Health is located at <strong>154 East Broadway Street, Suite 2 in Monticello, MN</strong>. Positioned right along I-94 and MN-25, our clinic serves patients throughout Wright, Sherburne, and Hennepin counties with rapid intake and compassionate care. Check why we are rated among the <a href="best-tms-clinic-minnesota.php" class="text-accent font-semibold hover:underline">best TMS clinics in Minnesota</a> and learn about <a href="insurance-covered-tms-therapy.php" class="text-accent font-semibold hover:underline">insurance coverage for TMS</a>.
                    </p>

                    <!-- Service Radius Badges -->
                    <div class="bg-white p-6 rounded-3xl border border-primary/10 shadow-sm mb-8">
                        <div class="text-xs font-bold uppercase tracking-widest text-primary/60 mb-3">Nearby Cities We Routinely Serve:</div>
                        <div class="flex flex-wrap gap-2">
                            <a href="tms-therapy-buffalo-mn.php" class="px-3 py-1 bg-soft-green text-primary text-xs font-bold rounded-full border border-primary/10 hover:bg-accent hover:text-white transition-all">Buffalo (10m)</a>
                            <a href="tms-therapy-big-lake-mn.php" class="px-3 py-1 bg-soft-green text-primary text-xs font-bold rounded-full border border-primary/10 hover:bg-accent hover:text-white transition-all">Big Lake (3m)</a>
                            <a href="tms-therapy-elk-river-mn.php" class="px-3 py-1 bg-soft-green text-primary text-xs font-bold rounded-full border border-primary/10 hover:bg-accent hover:text-white transition-all">Elk River (15m)</a>
                            <a href="tms-therapy-st-michael-albertville-mn.php" class="px-3 py-1 bg-soft-green text-primary text-xs font-bold rounded-full border border-primary/10 hover:bg-accent hover:text-white transition-all">STMA (9m)</a>
                            <a href="tms-therapy-otsego-mn.php" class="px-3 py-1 bg-soft-green text-primary text-xs font-bold rounded-full border border-primary/10 hover:bg-accent hover:text-white transition-all">Otsego (12m)</a>
                            <a href="tms-therapy-maple-grove-mn.php" class="px-3 py-1 bg-soft-green text-primary text-xs font-bold rounded-full border border-primary/10 hover:bg-accent hover:text-white transition-all">Maple Grove (22m)</a>
                            <a href="tms-therapy-st-cloud-mn.php" class="px-3 py-1 bg-soft-green text-primary text-xs font-bold rounded-full border border-primary/10 hover:bg-accent hover:text-white transition-all">St. Cloud (24m)</a>
                            <a href="tms-therapy-becker-mn.php" class="px-3 py-1 bg-soft-green text-primary text-xs font-bold rounded-full border border-primary/10 hover:bg-accent hover:text-white transition-all">Becker (8m)</a>
                            <a href="tms-therapy-rogers-mn.php" class="px-3 py-1 bg-soft-green text-primary text-xs font-bold rounded-full border border-primary/10 hover:bg-accent hover:text-white transition-all">Rogers (16m)</a>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <a href="#contact" class="px-8 py-4 bg-accent text-white rounded-full font-bold shadow-lg hover:bg-accent-light transition-all">Schedule a Free Visit</a>
                        <a href="tel:+16124298280" class="text-primary font-bold hover:text-accent transition-colors">Or call (612) 429-8280</a>
                    </div>
                </div>

                <div class="lg:col-span-5 fade-in-section">
                    <!-- Interactive Distance Card -->
                    <div class="bg-white rounded-3xl p-8 border border-primary/10 shadow-xl relative overflow-hidden">
                        <div class="w-12 h-12 rounded-2xl bg-accent/15 flex items-center justify-center text-accent mb-6">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-primary font-heading mb-2">Are You in Our Service Area?</h3>
                        <p class="text-gray-500 text-sm mb-6">We routinely provide outpatient TMS therapy to residents in these local zip codes:</p>
                        
                        <div class="grid grid-cols-3 gap-2 text-center text-xs font-bold text-primary mb-6">
                            <div class="p-2.5 bg-[#FAFAFF] rounded-xl border border-primary/5">55362 (Monticello)</div>
                            <div class="p-2.5 bg-[#FAFAFF] rounded-xl border border-primary/5">55309 (Big Lake)</div>
                            <div class="p-2.5 bg-[#FAFAFF] rounded-xl border border-primary/5">55313 (Buffalo)</div>
                            <div class="p-2.5 bg-[#FAFAFF] rounded-xl border border-primary/5">55301 (Albertville)</div>
                            <div class="p-2.5 bg-[#FAFAFF] rounded-xl border border-primary/5">55376 (St. Michael)</div>
                            <div class="p-2.5 bg-[#FAFAFF] rounded-xl border border-primary/5">55330 (Elk River)</div>
                            <div class="p-2.5 bg-[#FAFAFF] rounded-xl border border-primary/5">55374 (Rogers)</div>
                            <div class="p-2.5 bg-[#FAFAFF] rounded-xl border border-primary/5">55308 (Becker)</div>
                            <div class="p-2.5 bg-[#FAFAFF] rounded-xl border border-primary/5">55369 (Maple Grove)</div>
                        </div>

                        <div class="border-t border-primary/10 pt-4 flex items-center justify-between text-xs text-gray-500">
                            <span>Don't see your zip code?</span>
                            <a href="locations.php" class="text-accent font-bold hover:underline">View All Locations &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHAT TO LOOK FOR IN A TMS CLINIC NEAR YOU ===== -->
    <section class="py-16 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-14 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Smart Patient Guide</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">
                    What to Look for When Choosing a TMS Clinic
                </h2>
                <p class="text-gray-600 text-lg">
                    Not all TMS therapy centers operate with the same standard of precision and personal care. Here is how Tranquil Minds delivers elite, patient-first clinical treatment:
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 fade-in-section">
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <div class="w-12 h-12 rounded-2xl bg-primary text-white flex items-center justify-center font-bold text-lg mb-6">01</div>
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">NeuroStar® Contact Sensing</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        NeuroStar is the only system with patented Contact Sensing that dynamically monitors coil position in real-time, ensuring exact dose delivery to the mood center every single second. Learn more on our <a href="neurostar-tms-provider-near-me.php" class="text-accent hover:underline">NeuroStar Provider page</a>.
                    </p>
                    <span class="text-xs font-bold text-accent uppercase tracking-wider">#1 Doctor-Recommended</span>
                </div>

                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <div class="w-12 h-12 rounded-2xl bg-primary text-white flex items-center justify-center font-bold text-lg mb-6">02</div>
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">Direct Provider Access</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        At corporate hospital chains, you may never see the prescribing doctor. At Tranquil Minds, Roxanne DoBrava, PMHNP-BC directly oversees your mapping, checks in weekly, and adjusts your parameters. Read about <a href="about.php" class="text-accent hover:underline">our provider philosophy</a>.
                    </p>
                    <span class="text-xs font-bold text-accent uppercase tracking-wider">Continuity of Care</span>
                </div>

                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <div class="w-12 h-12 rounded-2xl bg-primary text-white flex items-center justify-center font-bold text-lg mb-6">03</div>
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">Comprehensive Insurance Advocacy</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        We don't leave you stranded with paperwork. Our team files your prior authorization directly with Blue Cross, HealthPartners, Medicare, or your commercial insurer before your first pulse. Learn about <a href="insurance.php" class="text-accent hover:underline">insurance coverage</a>.
                    </p>
                    <span class="text-xs font-bold text-accent uppercase tracking-wider">Zero Surprise Bills</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TMS VS TRADITIONAL PILLS COMPARISON TABLE ===== -->
    <section class="py-16 bg-[#2A163F] text-white relative">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl mx-auto text-center mb-12 fade-in-section">
                <h2 class="text-3xl md:text-5xl font-heading mb-4">TMS Therapy vs. Antidepressant Medications</h2>
                <p class="text-white/70 text-lg">See why so many Central Minnesota patients choose localized magnetic stimulation over cycling through endless medication trials. Read our guide to <a href="treatment-resistant-depression.php" class="text-accent-light underline">treatment-resistant depression</a>.</p>
            </div>

            <div class="max-w-4xl mx-auto bg-white/5 border border-white/10 rounded-3xl overflow-hidden backdrop-blur-md fade-in-section">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-white/10 bg-white/5 text-xs font-bold uppercase tracking-wider text-accent-light">
                                <th class="p-6">Feature</th>
                                <th class="p-6">NeuroStar® TMS Therapy</th>
                                <th class="p-6">Oral Antidepressants (SSRIs/SNRIs)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/10 text-sm text-white/80">
                            <tr>
                                <td class="p-6 font-bold text-white">Mechanism</td>
                                <td class="p-6 text-accent-light font-semibold">Focused magnetic pulses directly to underactive mood circuits</td>
                                <td class="p-6 text-white/60">Systemic chemical changes circulated throughout entire bloodstream</td>
                            </tr>
                            <tr>
                                <td class="p-6 font-bold text-white">Systemic Side Effects</td>
                                <td class="p-6 text-accent-light font-semibold">None (No weight gain, sexual dysfunction, or insomnia)</td>
                                <td class="p-6 text-white/60">Common (Fatigue, nausea, weight gain, emotional numbness)</td>
                            </tr>
                            <tr>
                                <td class="p-6 font-bold text-white">Clinical Remission Rate</td>
                                <td class="p-6 text-accent-light font-semibold">Up to 62% achieve full symptom remission</td>
                                <td class="p-6 text-white/60">Decreases with each failed trial (under 15% after 2+ trials)</td>
                            </tr>
                            <tr>
                                <td class="p-6 font-bold text-white">Sedation &amp; Downtime</td>
                                <td class="p-6 text-accent-light font-semibold">Zero downtime — drive yourself immediately</td>
                                <td class="p-6 text-white/60">Daily pill burden; tapering required to avoid withdrawal</td>
                            </tr>
                            <tr>
                                <td class="p-6 font-bold text-white">Insurance Coverage</td>
                                <td class="p-6 text-accent-light font-semibold">Covered by Medicare &amp; most major MN commercial plans</td>
                                <td class="p-6 text-white/60">Typically covered with tiered copays</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FAQ ACCORDION (7 EXPANDABLE ITEMS) ===== -->
    <section class="py-16 bg-[#FAFAFF] relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Common Questions</span>
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Frequently Asked Questions: TMS Near Me</h2>
                <p class="text-gray-500 text-lg">Everything you need to know about finding and receiving TMS therapy in Central Minnesota.</p>
            </div>

            <div class="space-y-4 fade-in-section">
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How do I find TMS therapy near me in Minnesota?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Tranquil Minds Mental Health is located at 154 East Broadway Street, Suite 2, Monticello, MN 55362. We serve residents across Wright, Sherburne, and Hennepin counties including <a href="tms-therapy-buffalo-mn.php" class="text-accent hover:underline">Buffalo</a>, <a href="tms-therapy-elk-river-mn.php" class="text-accent hover:underline">Elk River</a>, <a href="tms-therapy-big-lake-mn.php" class="text-accent hover:underline">Big Lake</a>, <a href="tms-therapy-st-michael-albertville-mn.php" class="text-accent hover:underline">STMA</a>, and <a href="tms-therapy-maple-grove-mn.php" class="text-accent hover:underline">Maple Grove</a>. You can book a free consultation online or call <a href="tel:+16124298280" class="text-accent font-semibold hover:underline">612-429-8280</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What qualifies me for TMS therapy near me under insurance?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Most health insurance plans require a diagnosis of Major Depressive Disorder, a history of trying two or more antidepressants without sufficient improvement, and prior participation in psychotherapy. We handle the entire authorization process for you; read our <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a> for full details.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Can I drive myself home after daily TMS sessions?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes, absolutely. NeuroStar TMS requires no anesthesia, sedation, or grogginess-inducing medication. You remain completely alert throughout the 19-minute session, listen to music or talk with your technician, and drive directly back to work or home.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Is TMS therapy painful or uncomfortable?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Most patients describe TMS as a rhythmic tapping sensation on the scalp, similar to a woodpecker tap. Any mild scalp sensitivity typically diminishes after the first week of treatment. There are no systemic medication side effects like nausea or weight gain. Read more on our <a href="neurostar-tms.php" class="text-accent hover:underline">NeuroStar TMS page</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What is the clinical success rate of NeuroStar TMS?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            In clinical outcomes, up to 83% of patients experience a significant measurable reduction in depressive symptoms, and 62% achieve full remission after completing their treatment course. Review clinical outcomes on our <a href="best-tms-clinic-minnesota.php" class="text-accent hover:underline">Best TMS Clinic guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How is NeuroStar TMS different from other TMS systems?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            NeuroStar features patented Contact Sensing technology that actively monitors magnetic coil contact with your scalp in real-time to guarantee accurate dose delivery, and holds FDA clearances for adult depression, adolescent depression (15+), and OCD. Read our <a href="neurostar-tms-provider-near-me.php" class="text-accent hover:underline">NeuroStar Provider page</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How do I get started with a consultation at Tranquil Minds?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            You can schedule a complimentary 15-minute consultation directly through our website or by calling <a href="tel:+16124298280" class="text-accent font-semibold hover:underline">612-429-8280</a>. Our clinical team will evaluate your medical history and verify your insurance benefits. Visit our <a href="contact.php" class="text-accent hover:underline">Contact page</a> to connect now.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
