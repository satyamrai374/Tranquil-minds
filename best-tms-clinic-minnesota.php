<?php
$page_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalClinic",
      "name": "Tranquil Minds Mental Health - Best TMS Clinic in Minnesota",
      "url": "https://tranquilmindsmentalhealth.com/best-tms-clinic-minnesota.php",
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
      "medicalSpecialty": ["Psychiatric", "MentalHealth"],
      "founder": {
        "@type": "Person",
        "name": "Roxanne DoBrava",
        "jobTitle": "Psychiatric Mental Health Nurse Practitioner (PMHNP-BC)"
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
          "name": "NeuroStar TMS",
          "item": "https://tranquilmindsmentalhealth.com/neurostar-tms.php"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Best TMS Clinic Minnesota",
          "item": "https://tranquilmindsmentalhealth.com/best-tms-clinic-minnesota.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What distinguishes Tranquil Minds as one of the best TMS clinics in Minnesota?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tranquil Minds combines board-certified psychiatric leadership by Roxanne DoBrava, PMHNP-BC, patented NeuroStar Contact Sensing equipment, objective Creyos cognitive health tracking, and a peaceful, private sanctuary setting with zero hospital waitlists."
          }
        },
        {
          "@type": "Question",
          "name": "How do your clinical remission rates compare to standard therapies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Up to 83% of patients completing their treatment course experience measurable depression relief, and 62% achieve full remission—far outperforming third- and fourth-line antidepressant medication trials."
          }
        },
        {
          "@type": "Question",
          "name": "Who oversees the TMS treatments at Tranquil Minds?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Founder Roxanne DoBrava, APRN-CNP, PMHNP-BC personally oversees your brain mapping, treatment parameters, and weekly progress reviews, guaranteeing continuity of care rather than rotating you between anonymous hospital staff."
          }
        },
        {
          "@type": "Question",
          "name": "What is Creyos cognitive testing, and how is it used during TMS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Creyos is a scientifically validated digital assessment that measures memory, attention, and executive function. We use it to establish objective baselines and quantitatively track cognitive recovery as your mood improves."
          }
        },
        {
          "@type": "Question",
          "name": "How does a boutique clinic compare to hospital health systems?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Unlike crowded hospital health systems with paid parking ramps, multi-month waitlists, and rushed 10-minute check-ins, Tranquil Minds provides door-side free parking, private treatment suites, and generous provider time."
          }
        },
        {
          "@type": "Question",
          "name": "Is NeuroStar TMS covered by Medicare and Minnesota private insurance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. NeuroStar TMS is in-network and covered by Medicare Part B, Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Optum, Cigna, and Aetna for qualifying patients."
          }
        },
        {
          "@type": "Question",
          "name": "How quickly can I get an appointment at Tranquil Minds?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We pride ourselves on rapid intake. Consultations are typically scheduled within 5 to 7 business days, allowing you to begin treatment without agonizing delays."
          }
        }
      ]
    }
  ]
}
</script>
';
$page_title       = "Best TMS Clinic in Minnesota | Top Rated NeuroStar Provider";
$page_description = "Discover why Tranquil Minds is recognized among the best TMS clinics in Minnesota. Board-certified psychiatric care, 83% depression response rate, and boutique comfort.";
$hero_title       = 'Best TMS Clinic in Minnesota:<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Personalized Excellence.</span>';
$hero_subtitle    = 'Advanced NeuroStar® technology meets intimate, compassionate psychiatric care. See why patients travel across Central Minnesota to heal at Tranquil Minds.';
$hero_badge       = 'Premier NeuroStar Provider in MN';
$hero_cta1_text   = 'Compare Our Approach';
$hero_cta1_link   = '#comparison';
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
            <a href="neurostar-tms.php" class="hover:text-primary transition-colors">NeuroStar TMS</a>
            <span>/</span>
            <span class="text-primary font-semibold">Best TMS Clinic Minnesota</span>
        </div>
    </div>

    <!-- ===== 5 PILLARS OF EXCELLENCE ===== -->
    <section class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-14 fade-in-section">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-px w-12 bg-primary/40"></span>
                    <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Clinical Distinction</span>
                    <span class="h-px w-12 bg-primary/40"></span>
                </div>
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">
                    What Makes Tranquil Minds the Best Choice for TMS in Minnesota?
                </h2>
                <p class="text-gray-600 text-lg">
                    Too many patients experience mental healthcare as an impersonal, revolving door of quick check-ins. Tranquil Minds was created to redefine psychiatric excellence in Minnesota through five clinical pillars:
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 fade-in-section">
                <div class="bg-white p-8 rounded-3xl border border-primary/10 shadow-sm hover:shadow-xl transition-all">
                    <div class="w-12 h-12 rounded-2xl bg-accent/15 text-accent flex items-center justify-center font-bold text-xl mb-6">1</div>
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">1-on-1 Provider Care</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        Every patient is evaluated, mapped, and monitored directly by board-certified Psychiatric Nurse Practitioner <a href="about.php" class="text-accent font-semibold hover:underline">Roxanne DoBrava, APRN-CNP, PMHNP-BC</a>. You always know who is managing your brain health.
                    </p>
                    <span class="text-xs font-bold text-primary/60 uppercase">Consistency &amp; Trust</span>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-primary/10 shadow-sm hover:shadow-xl transition-all">
                    <div class="w-12 h-12 rounded-2xl bg-accent/15 text-accent flex items-center justify-center font-bold text-xl mb-6">2</div>
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">Authentic NeuroStar® Precision</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        We invest in top-tier NeuroStar equipment equipped with patented Contact Sensing coil navigation, delivering millimeter precision to the mood center. Learn about our <a href="neurostar-tms-provider-near-me.php" class="text-accent font-semibold hover:underline">certified NeuroStar protocols</a>.
                    </p>
                    <span class="text-xs font-bold text-primary/60 uppercase">#1 Doctor-Recommended</span>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-primary/10 shadow-sm hover:shadow-xl transition-all">
                    <div class="w-12 h-12 rounded-2xl bg-accent/15 text-accent flex items-center justify-center font-bold text-xl mb-6">3</div>
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">Objective Creyos Cognitive Tracking</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        We don't guess if you are improving. We use standardized <a href="creyos.php" class="text-accent font-semibold hover:underline">Creyos cognitive testing</a> to measure baseline brain function and graph your improvements in attention, memory, and executive function.
                    </p>
                    <span class="text-xs font-bold text-primary/60 uppercase">Measurable Brain Data</span>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-primary/10 shadow-sm hover:shadow-xl transition-all">
                    <div class="w-12 h-12 rounded-2xl bg-accent/15 text-accent flex items-center justify-center font-bold text-xl mb-6">4</div>
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">Sanctuary Atmosphere</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        Forget crowded waiting areas and parking ramps. Our <a href="locations.php" class="text-accent font-semibold hover:underline">Monticello clinic</a> offers a quiet, spa-like environment with private suites, soft lighting, and gentle music designed to lower cortisol and anxiety.
                    </p>
                    <span class="text-xs font-bold text-primary/60 uppercase">Door-Side Free Parking</span>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-primary/10 shadow-sm hover:shadow-xl transition-all">
                    <div class="w-12 h-12 rounded-2xl bg-accent/15 text-accent flex items-center justify-center font-bold text-xl mb-6">5</div>
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">Holistic Medical Integration</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        TMS is not administered in a silo. We coordinate your magnetic therapy with tailored <a href="medication-management.php" class="text-accent font-semibold hover:underline">medication management</a> and <a href="psychotherapy.php" class="text-accent font-semibold hover:underline">psychotherapy</a> to safeguard long-term remission.
                    </p>
                    <span class="text-xs font-bold text-primary/60 uppercase">Comprehensive Psychiatry</span>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-primary/10 shadow-sm hover:shadow-xl transition-all flex flex-col justify-center bg-gradient-to-br from-primary/5 to-accent/10">
                    <div class="text-accent font-bold text-3xl font-heading mb-2">83% / 62%</div>
                    <div class="text-primary font-bold text-base mb-1">Clinical Response &amp; Remission</div>
                    <p class="text-gray-500 text-xs leading-relaxed mb-4">Real results observed in patients completing their standard 36-session NeuroStar protocol.</p>
                    <a href="#contact" class="text-accent font-bold text-sm hover:underline flex items-center gap-1">Start Your Journey &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CLINICAL COMPARISON: TRANQUIL MINDS VS LARGE HOSPITALS ===== -->
    <section id="comparison" class="py-16 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl mx-auto text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Direct Comparison</span>
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Boutique Clinic vs. Large Metro Hospital Systems</h2>
                <p class="text-gray-600 text-lg">Compare what your daily experience looks like when receiving TMS treatment at Tranquil Minds versus large healthcare networks.</p>
            </div>

            <div class="max-w-4xl mx-auto bg-white border border-primary/15 rounded-3xl shadow-xl overflow-hidden fade-in-section">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-primary text-white text-xs font-bold uppercase tracking-wider">
                                <th class="p-6">Care Dimension</th>
                                <th class="p-6 bg-accent">Tranquil Minds Mental Health</th>
                                <th class="p-6">Metro Hospital Health Systems</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 text-sm text-gray-700">
                            <tr>
                                <td class="p-6 font-bold text-primary">Wait Time to Start</td>
                                <td class="p-6 bg-soft-green font-semibold text-primary">Usually within 5 to 7 days of consultation</td>
                                <td class="p-6 text-gray-500">Often 2 to 4 months on hospital waiting lists</td>
                            </tr>
                            <tr>
                                <td class="p-6 font-bold text-primary">Prescribing Provider</td>
                                <td class="p-6 bg-soft-green font-semibold text-primary">Same PMHNP-BC directly manages your care</td>
                                <td class="p-6 text-gray-500">Rotating medical staff, residents, or technicians</td>
                            </tr>
                            <tr>
                                <td class="p-6 font-bold text-primary">Clinic Atmosphere</td>
                                <td class="p-6 bg-soft-green font-semibold text-primary">Private calming suite, serene boutique decor</td>
                                <td class="p-6 text-gray-500">Sterile hospital basement, busy corridors, paid parking</td>
                            </tr>
                            <tr>
                                <td class="p-6 font-bold text-primary">Parking &amp; Access</td>
                                <td class="p-6 bg-soft-green font-semibold text-primary">Free ground-level parking right at the door</td>
                                <td class="p-6 text-gray-500">Multi-story ramps, ticket validation, long walks</td>
                            </tr>
                            <tr>
                                <td class="p-6 font-bold text-primary">Cognitive Health Metrics</td>
                                <td class="p-6 bg-soft-green font-semibold text-primary">Standardized Creyos cognitive tracking included</td>
                                <td class="p-6 text-gray-500">Rarely offered or billed as separate neuropsych visit</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== PATIENT TESTIMONIAL ===== -->
    <section class="py-16 bg-[#2A163F] text-white relative">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center fade-in-section">
                <div class="w-16 h-16 rounded-full bg-accent/20 flex items-center justify-center text-accent mx-auto mb-6">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                </div>
                <blockquote class="text-2xl md:text-3xl font-light leading-relaxed mb-6 italic text-white/90">
                    &ldquo;After 12 years of trying four different antidepressants with zero relief, I felt completely hopeless. Roxanne took the time to listen to my whole story. Week four of NeuroStar TMS was like someone turned the lights back on in my mind. I am grateful every day that I found Tranquil Minds.&rdquo;
                </blockquote>
                <div class="text-accent font-bold text-lg font-heading">Sarah M.</div>
                <div class="text-white/60 text-sm">Wright County, MN Resident · Verified Patient &bull; Read more <a href="testimonials.php" class="text-accent-light underline">patient testimonials</a></div>
            </div>
        </div>
    </section>

    <!-- ===== FAQ ACCORDION (7 EXPANDABLE ITEMS) ===== -->
    <section class="py-16 bg-[#FAFAFF] relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Common Questions</span>
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Frequently Asked Questions: Best TMS Clinic</h2>
                <p class="text-gray-500 text-lg">Insights on our clinical standards, outcomes, and patient experience.</p>
            </div>

            <div class="space-y-4 fade-in-section">
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What distinguishes Tranquil Minds as one of the best TMS clinics in Minnesota?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Tranquil Minds combines board-certified psychiatric leadership by Roxanne DoBrava, PMHNP-BC, patented NeuroStar Contact Sensing equipment, objective Creyos cognitive health tracking, and a peaceful, private sanctuary setting with zero hospital waitlists. Learn more on our <a href="about.php" class="text-accent hover:underline">About page</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How do your clinical remission rates compare to standard therapies?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Up to 83% of patients completing their treatment course experience measurable depression relief, and 62% achieve full remission—far outperforming third- and fourth-line antidepressant medication trials. Review the scientific data on our <a href="what-is-tms-therapy.php" class="text-accent hover:underline">What Is TMS Therapy guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Who oversees the TMS treatments at Tranquil Minds?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Founder Roxanne DoBrava, APRN-CNP, PMHNP-BC personally oversees your brain mapping, treatment parameters, and weekly progress reviews, guaranteeing continuity of care rather than rotating you between anonymous hospital staff.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What is Creyos cognitive testing, and how is it used during TMS?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Creyos is a scientifically validated digital assessment that measures memory, attention, and executive function. We use it to establish objective baselines and quantitatively track cognitive recovery as your mood improves. Learn more on our <a href="creyos.php" class="text-accent hover:underline">Cognitive Testing page</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How does a boutique clinic compare to hospital health systems?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Unlike crowded hospital health systems with paid parking ramps, multi-month waitlists, and rushed 10-minute check-ins, Tranquil Minds provides door-side free parking, private treatment suites, and generous provider time. Check our <a href="locations.php" class="text-accent hover:underline">Locations Hub</a> for local route info.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Is NeuroStar TMS covered by Medicare and Minnesota private insurance?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. NeuroStar TMS is in-network and covered by Medicare Part B, Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, Optum, Cigna, and Aetna for qualifying patients. Check our <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a> for prior authorization criteria.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How quickly can I get an appointment at Tranquil Minds?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            We pride ourselves on rapid intake. Consultations are typically scheduled within 5 to 7 business days, allowing you to begin treatment without agonizing delays. Schedule your complimentary 15-minute consultation on our <a href="contact.php" class="text-accent hover:underline">Contact page</a> or call <a href="tel:+16124298280" class="text-accent font-semibold hover:underline">612-429-8280</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
