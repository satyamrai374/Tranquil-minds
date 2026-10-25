<?php
$page_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalClinic",
      "name": "Tranquil Minds Mental Health - Adolescent TMS Therapy Near Maple Grove MN",
      "url": "https://tranquilmindsmentalhealth.com/adolescent-mental-health-tms-maple-grove-mn.php",
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
        {"@type": "City", "name": "Maple Grove", "sameAs": "https://en.wikipedia.org/wiki/Maple_Grove,_Minnesota"},
        {"@type": "City", "name": "Plymouth"},
        {"@type": "City", "name": "Osseo"},
        {"@type": "City", "name": "Wayzata"}
      ]
    },
    {
      "@type": "MedicalCondition",
      "name": "Adolescent Depression (Ages 15-21)",
      "possibleTreatment": [
        {
          "@type": "MedicalTherapy",
          "name": "NeuroStar TMS for Adolescents (FDA-Cleared)"
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
          "name": "Maple Grove, MN",
          "item": "https://tranquilmindsmentalhealth.com/tms-therapy-maple-grove-mn.php"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Adolescent TMS",
          "item": "https://tranquilmindsmentalhealth.com/adolescent-mental-health-tms-maple-grove-mn.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What age groups are FDA-cleared for adolescent TMS therapy?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "NeuroStar TMS is FDA-cleared as a safe and effective treatment for adolescents and young adults aged 15 to 21 diagnosed with Major Depressive Disorder, offering young patients a clinically proven non-drug therapeutic alternative."
          }
        },
        {
          "@type": "Question",
          "name": "How does TMS protect teenagers from antidepressant side effects?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Unlike psychiatric pills that carry adolescent black-box warnings and frequently cause weight gain, lethargy, insomnia, emotional blunting, or agitation, TMS targets only the mood regulation center of the brain with zero chemical side effects on developing teenage bodies."
          }
        },
        {
          "@type": "Question",
          "name": "Can Maple Grove students attend school and athletic practices normally during treatment?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Each session takes just 19 minutes with zero downtime, grogginess, or memory loss. Students can schedule appointments before school, after classes, or between sports practices and return immediately to homework, tests, and team sports."
          }
        },
        {
          "@type": "Question",
          "name": "How does Tranquil Minds monitor cognitive function in adolescents?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We utilize computerized Creyos cognitive testing to assess memory, attention, response times, and executive function. This allows parents, teens, and our clinical team to monitor quantifiable improvements in mental sharpness as depressive symptoms lift."
          }
        },
        {
          "@type": "Question",
          "name": "What is the parental involvement during adolescent TMS treatment?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Parents participate in the initial psychiatric consultation, weekly progress evaluations, and safety reviews with Roxanne DoBrava, PMHNP-BC. We partner closely with families to ensure a supportive healing environment."
          }
        },
        {
          "@type": "Question",
          "name": "Does health insurance cover TMS for adolescents in Minnesota?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Following FDA clearance for ages 15+, major Minnesota insurance carriers—including Blue Cross Blue Shield MN, HealthPartners, Medica, UnitedHealthcare, and Optum—provide coverage for eligible adolescent depression patients."
          }
        },
        {
          "@type": "Question",
          "name": "How do Maple Grove parents schedule an evaluation for their teen?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Parents can request a complimentary 15-minute consultation through our website or call 612-429-8280. Our clinical staff will review your teen\'s medical background and handle insurance pre-authorization directly."
          }
        }
      ]
    }
  ]
}
</script>
';
$page_title       = "Adolescent TMS & Mental Health Near Maple Grove MN | Teen Depression (15+)";
$page_description = "FDA-cleared adolescent TMS therapy for teenagers (15+) near Maple Grove, MN. Safe, drug-free depression care without medication side effects in Monticello.";
$hero_title       = 'Adolescent TMS Therapy:<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">For Maple Grove Teens.</span>';
$hero_subtitle    = 'FDA-cleared for ages 15+. Protect your teenager from the risks of psychiatric medication side effects with proven, drug-free NeuroStar® magnetic therapy.';
$hero_badge       = 'FDA-Cleared for Adolescents (15+)';
$hero_cta1_text   = 'Teen TMS Safety &amp; Evidence';
$hero_cta1_link   = '#teen-safety';
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
            <a href="tms-therapy-maple-grove-mn.php" class="hover:text-primary transition-colors">Maple Grove, MN</a>
            <span>/</span>
            <span class="text-primary font-semibold">Adolescent TMS</span>
        </div>
    </div>

    <!-- ===== ADOLESCENT TMS SCIENCE SECTION ===== -->
    <section id="teen-safety" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 fade-in-section">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">A Breakthrough for Young Minds</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl text-primary font-heading mb-6 leading-tight">
                        A Safe, Medication-Free Answer for Teen Depression in the NW Suburbs
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 font-light">
                        For parents in Maple Grove, Wayzata, Plymouth, and Osseo, watching your teenager withdraw into depression, drop their grades, and lose interest in their passions is heartbreaking. Traditional antidepressant medications carry black-box warnings for adolescents, often causing weight gain, insomnia, increased agitation, or emotional detachment.
                    </p>
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        <strong><a href="neurostar-tms.php" class="text-accent hover:underline">NeuroStar® TMS is the first and only TMS therapy FDA-cleared for adolescents aged 15 and older with Major Depressive Disorder</a>.</strong> Because it uses focused magnetic fields—exactly like an MRI machine—it stimulates natural brain connectivity without circulating chemicals through developing organs or changing your teen's personality.
                    </p>

                    <div class="grid sm:grid-cols-2 gap-4 mb-8">
                        <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                            <div class="text-primary font-bold text-base mb-1">No School Interference</div>
                            <p class="text-gray-500 text-xs">19-minute sessions fit easily after school or before sports practice.</p>
                        </div>
                        <div class="bg-white p-5 rounded-2xl border border-primary/10 shadow-sm">
                            <div class="text-primary font-bold text-base mb-1">Zero Cognitive Blunting</div>
                            <p class="text-gray-500 text-xs">Teens stay completely alert and mentally sharp for homework and exams.</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="contact.php" class="px-8 py-4 bg-accent text-white rounded-full font-bold shadow-md hover:bg-accent-light transition-all inline-block">Schedule Teen Consultation</a>
                        <a href="tms-therapy-maple-grove-mn.php" class="px-8 py-4 bg-white text-primary border border-primary/20 rounded-full font-bold hover:bg-primary/5 transition-all inline-block">Maple Grove Hub &rarr;</a>
                    </div>
                </div>

                <div class="lg:col-span-5 fade-in-section">
                    <div class="bg-white rounded-3xl p-8 border border-primary/10 shadow-xl">
                        <div class="relative rounded-2xl overflow-hidden mb-6">
                            <img src="assets/neurostar/teen.webp" alt="Teenager receiving safe NeuroStar TMS therapy in Minnesota" class="w-full h-52 object-cover">
                        </div>
                        <h3 class="text-2xl font-bold text-primary font-heading mb-3">Why Parents Choose NeuroStar for Teens</h3>
                        <ul class="space-y-3 text-sm text-gray-700">
                            <li class="flex items-start gap-2">
                                <span class="text-accent font-bold">✓</span>
                                <span>No systemic medication side effects or personality dampening</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-accent font-bold">✓</span>
                                <span><a href="creyos-cognitive-testing.php" class="text-accent hover:underline">Creyos cognitive testing</a> to track memory and attention gains</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-accent font-bold">✓</span>
                                <span>Compassionate 1-on-1 care with Roxanne DoBrava, PMHNP-BC</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-accent font-bold">✓</span>
                                <span>Fast 20-minute reverse commute westbound on I-94 to Monticello</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CLINICAL COMPARISON ===== -->
    <section class="py-16 bg-white relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Teen Treatment Comparison</span>
                <h2 class="text-3xl md:text-4xl text-primary font-heading mb-4">Adolescent TMS vs. Traditional Antidepressants</h2>
                <p class="text-gray-600 text-base">Key differences that make non-invasive magnetic stimulation the modern choice for teens:</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 fade-in-section mb-10">
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">Psychiatric Medications</h3>
                    <ul class="space-y-2 text-sm text-gray-600 mb-4">
                        <li>• Black box warnings for adolescents under 24</li>
                        <li>• Fatigue, weight fluctuations, and insomnia</li>
                        <li>• Can cause emotional detachment and apathy</li>
                        <li>• Difficult withdrawal symptoms if stopped</li>
                    </ul>
                    <a href="psychiatry.php" class="text-accent font-bold text-xs hover:underline">Adolescent Medication Review &rarr;</a>
                </div>
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">NeuroStar® Teen TMS</h3>
                    <ul class="space-y-2 text-sm text-gray-600 mb-4">
                        <li>• FDA-cleared specifically for ages 15 and up</li>
                        <li>• Zero systemic side effects or organ impact</li>
                        <li>• Preserves study habits, focus, and athletic energy</li>
                        <li>• 19-minute sessions; drive or ride right home</li>
                    </ul>
                    <a href="tms-adolescents.php" class="text-accent font-bold text-xs hover:underline">Learn About Teen TMS &rarr;</a>
                </div>
            </div>

            <!-- Surrounding Towns Links -->
            <div class="bg-[#FAFAFF] p-6 rounded-3xl border border-primary/10 text-center">
                <span class="text-xs uppercase tracking-wider text-primary/60 font-bold block mb-2">Nearby Surrounding Communities</span>
                <p class="text-xs text-gray-500 mb-3">Serving families across the Northwest Hennepin and Wright County corridor:</p>
                <div class="flex flex-wrap justify-center gap-3 text-xs">
                    <a href="tms-therapy-maple-grove-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Maple Grove Hub</a>
                    <a href="tms-therapy-rogers-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Rogers, MN</a>
                    <a href="tms-therapy-st-michael-albertville-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">STMA</a>
                    <a href="insurance-covered-tms-therapy.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Insurance Guide</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FAQ ACCORDION (7 EXPANDABLE ITEMS) ===== -->
    <section class="py-16 bg-[#FAFAFF] relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Common Questions</span>
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Frequently Asked Questions: Teen TMS Near Maple Grove</h2>
                <p class="text-gray-500 text-lg">Helpful guidance for parents navigating adolescent depression care options.</p>
            </div>

            <div class="space-y-4 fade-in-section">
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What age groups are FDA-cleared for adolescent TMS therapy?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            NeuroStar TMS is FDA-cleared as a safe and effective treatment for adolescents and young adults aged 15 to 21 diagnosed with Major Depressive Disorder, offering young patients a clinically proven non-drug therapeutic alternative. Read our <a href="tms-adolescents.php" class="text-accent hover:underline">Adolescent TMS overview</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How does TMS protect teenagers from antidepressant side effects?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Unlike psychiatric pills that carry adolescent black-box warnings and frequently cause weight gain, lethargy, insomnia, emotional blunting, or agitation, TMS targets only the mood regulation center of the brain with zero chemical side effects on developing teenage bodies.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Can Maple Grove students attend school and athletic practices normally during treatment?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. Each session takes just 19 minutes with zero downtime, grogginess, or memory loss. Students can schedule appointments before school, after classes, or between sports practices and return immediately to homework, tests, and team sports.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How does Tranquil Minds monitor cognitive function in adolescents?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            We utilize computerized <a href="creyos-cognitive-testing.php" class="text-accent hover:underline">Creyos cognitive testing</a> to assess memory, attention, response times, and executive function. This allows parents, teens, and our clinical team to monitor quantifiable improvements in mental sharpness as depressive symptoms lift.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What is the parental involvement during adolescent TMS treatment?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Parents participate in the initial psychiatric consultation, weekly progress evaluations, and safety reviews with Roxanne DoBrava, PMHNP-BC. We partner closely with families to ensure a supportive healing environment. Learn more on our <a href="about.php" class="text-accent hover:underline">About page</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Does health insurance cover TMS for adolescents in Minnesota?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. Following FDA clearance for ages 15+, major Minnesota insurance carriers—including Blue Cross Blue Shield MN, HealthPartners, Medica, UnitedHealthcare, and Optum—provide coverage for eligible adolescent depression patients. See our full <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How do Maple Grove parents schedule an evaluation for their teen?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Parents can request a complimentary 15-minute consultation through our <a href="contact.php" class="text-accent hover:underline">Contact page</a> or call <a href="tel:+16124298280" class="text-accent font-semibold hover:underline">612-429-8280</a>. Our clinical staff will review your teen's medical background and handle insurance pre-authorization directly.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
