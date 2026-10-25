<?php
$page_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalClinic",
      "name": "Tranquil Minds Mental Health - Anxiety TMS Treatment for Big Lake MN",
      "url": "https://tranquilmindsmentalhealth.com/anxiety-tms-treatment-big-lake-mn.php",
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
      "@type": "MedicalCondition",
      "name": "Generalized Anxiety Disorder and Anxious Depression",
      "possibleTreatment": [
        {
          "@type": "MedicalTherapy",
          "name": "NeuroStar TMS for Anxious Depression"
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
          "name": "Big Lake, MN",
          "item": "https://tranquilmindsmentalhealth.com/tms-therapy-big-lake-mn.php"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Anxiety TMS Treatment",
          "item": "https://tranquilmindsmentalhealth.com/anxiety-tms-treatment-big-lake-mn.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is anxious depression and how does TMS relieve it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Anxious depression occurs when severe depressive episodes are accompanied by persistent worry, physical restlessness, or panic. TMS strengthens the brain\'s prefrontal cortex, restoring top-down regulatory control over an overactive amygdala and quieting the fight-or-flight response."
          }
        },
        {
          "@type": "Question",
          "name": "Is NeuroStar TMS FDA-cleared specifically for anxiety symptoms?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. NeuroStar holds an explicit FDA clearance for Major Depressive Disorder with comorbid anxiety symptoms, offering clinically proven reduction in both depressive apathy and agonizing daily anxiety."
          }
        },
        {
          "@type": "Question",
          "name": "Can Big Lake patients avoid benzodiazepines or sedating drugs with TMS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. While medications like Xanax, Klonopin, or sedating SNRIs can cause dependency, brain fog, or memory impairment, TMS is entirely non-sedating and drug-free, retraining neural circuits naturally."
          }
        },
        {
          "@type": "Question",
          "name": "How quickly do patients feel physical anxiety relief during treatment?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Many patients notice physical relaxation—such as reduced jaw tension, deeper sleep, and less chest tightness—by weeks 2 to 4 of their daily 19-minute NeuroStar sessions."
          }
        },
        {
          "@type": "Question",
          "name": "How long is the commute from Big Lake and can I drive myself?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The drive takes less than 5 minutes (about 3 miles) directly south across the MN-25 Mississippi River bridge. Because TMS involves no anesthesia or sedation, you can drive yourself back to Big Lake immediately."
          }
        },
        {
          "@type": "Question",
          "name": "Does insurance cover TMS for anxiety symptoms accompanied by depression?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Major Minnesota insurance carriers including Blue Cross Blue Shield MN, HealthPartners, Medica, UnitedHealthcare, and Medicare cover TMS when anxiety occurs alongside treatment-resistant depression."
          }
        },
        {
          "@type": "Question",
          "name": "How do I get scheduled for an assessment?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can request a free 15-minute consultation via our website or call 612-429-8280. Roxanne DoBrava, PMHNP-BC, will review your clinical history and verify your insurance coverage."
          }
        }
      ]
    }
  ]
}
</script>
';
$page_title       = "Anxiety TMS Treatment Big Lake MN | Relieve Anxious Depression";
$page_description = "Specialized anxiety and anxious depression TMS treatment for Big Lake, MN. Non-sedating NeuroStar® therapy located just 5 minutes across the river bridge in Monticello.";
$hero_title       = 'Anxiety TMS for Big Lake, MN:<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Calming the Overactive Mind.</span>';
$hero_subtitle    = 'Break free from chronic worry, chest tightness, and panic. Discover FDA-cleared NeuroStar® TMS therapy for anxious depression just 5 minutes across the Mississippi bridge.';
$hero_badge       = 'Non-Sedating Anxiety Care';
$hero_cta1_text   = 'How TMS Calms Anxiety';
$hero_cta1_link   = '#anxiety-science';
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
            <a href="tms-therapy-big-lake-mn.php" class="hover:text-primary transition-colors">Big Lake, MN</a>
            <span>/</span>
            <span class="text-primary font-semibold">Anxiety TMS Treatment</span>
        </div>
    </div>

    <!-- ===== ANXIETY SCIENCE SECTION ===== -->
    <section id="anxiety-science" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 fade-in-section">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Non-Drug Anxiety Relief</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl text-primary font-heading mb-6 leading-tight">
                        Relieving the Constant State of Fight-or-Flight
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 font-light">
                        For many Big Lake residents, depression rarely exists alone—it is accompanied by a knot in the stomach, racing thoughts, chronic muscle tension, and sudden waves of panic. When doctors prescribe sedative medications like Xanax, Valium, or high-dose SNRIs, patients often trade severe anxiety for grogginess and dependency.
                    </p>
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        <strong><a href="neurostar-tms.php" class="text-accent hover:underline">NeuroStar® TMS therapy is FDA-cleared for depression with comorbid anxiety symptoms</a>.</strong> By delivering rhythmic magnetic stimulation to underactive prefrontal cortex regulatory circuits, TMS helps the brain restore its natural braking system over the hyperactive amygdala. You gain calm, clear focus without sedation.
                    </p>

                    <div class="bg-white p-6 rounded-3xl border border-primary/10 shadow-sm mb-8">
                        <div class="text-sm font-bold text-primary mb-2">Advantages of TMS for Big Lake Patients:</div>
                        <div class="grid sm:grid-cols-2 gap-4 text-xs text-gray-600">
                            <div>• <strong>No Benzodiazepines:</strong> Zero risk of dependency or tolerance</div>
                            <div>• <strong>No Daytime Drowsiness:</strong> Maintain sharp executive function</div>
                            <div>• <strong>5-Minute Bridge Commute:</strong> Across MN-25 into downtown Monticello</div>
                            <div>• <strong>Covered by Most Insurance:</strong> In-network benefit verification</div>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="contact.php" class="px-8 py-4 bg-accent text-white rounded-full font-bold shadow-md hover:bg-accent-light transition-all inline-block">Book Big Lake Anxiety Consultation</a>
                        <a href="tms-therapy-big-lake-mn.php" class="px-8 py-4 bg-white text-primary border border-primary/20 rounded-full font-bold hover:bg-primary/5 transition-all inline-block">Big Lake Clinic Hub &rarr;</a>
                    </div>
                </div>

                <div class="lg:col-span-5 fade-in-section">
                    <div class="bg-white rounded-3xl p-8 border border-primary/10 shadow-xl">
                        <h3 class="text-2xl font-bold text-primary font-heading mb-4">Anxious Depression Symptoms We Treat</h3>
                        <div class="space-y-3 text-sm text-gray-700 mb-6">
                            <div class="p-3 bg-[#FAFAFF] rounded-xl border border-primary/5">
                                <strong>Physical Tension &amp; Restlessness:</strong> Inability to relax, jaw clenching, tight shoulders, and constant agitation.
                            </div>
                            <div class="p-3 bg-[#FAFAFF] rounded-xl border border-primary/5">
                                <strong>Catastrophic "What-If" Loops:</strong> Relentless worry about health, finances, family safety, or work errors.
                            </div>
                            <div class="p-3 bg-[#FAFAFF] rounded-xl border border-primary/5">
                                <strong>Sleep Disruption:</strong> Waking up in a panic at 3:00 AM with heart pounding and racing thoughts.
                            </div>
                        </div>

                        <div class="p-4 bg-accent/10 rounded-2xl text-xs text-primary font-semibold">
                            Located just across the river at 154 East Broadway Street, Suite 2, Monticello, MN.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CLINICAL COMPARISON ===== -->
    <section class="py-16 bg-white relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Comprehensive Anxiety Care</span>
                <h2 class="text-3xl md:text-4xl text-primary font-heading mb-4">A Holistic Approach to Lasting Serenity</h2>
                <p class="text-gray-600 text-base">Moving beyond quick-fix sedatives to biological neuroplastic healing:</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 fade-in-section mb-10">
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">Psychiatric Assessment</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Roxanne DoBrava, PMHNP-BC, performs careful evaluations to distinguish primary Generalized Anxiety Disorder from comorbid depressive disorders and medication-induced akathisia.</p>
                    <a href="psychiatry.php" class="text-accent font-bold text-xs hover:underline">Psychiatric Evaluation Details &rarr;</a>
                </div>
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">Targeted Neurostimulation</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Non-invasive pulses gently recalibrate the frontolimbic emotional network, giving you your internal composure back without addictive side effects.</p>
                    <a href="what-is-tms-therapy.php" class="text-accent font-bold text-xs hover:underline">How TMS Works &rarr;</a>
                </div>
            </div>

            <!-- Surrounding Towns Links -->
            <div class="bg-[#FAFAFF] p-6 rounded-3xl border border-primary/10 text-center">
                <span class="text-xs uppercase tracking-wider text-primary/60 font-bold block mb-2">Nearby Surrounding Communities</span>
                <p class="text-xs text-gray-500 mb-3">Serving Sherburne and Wright county residents:</p>
                <div class="flex flex-wrap justify-center gap-3 text-xs">
                    <a href="tms-therapy-big-lake-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Big Lake Hub</a>
                    <a href="tms-therapy-elk-river-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Elk River, MN</a>
                    <a href="tms-therapy-becker-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Becker, MN</a>
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
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Frequently Asked Questions: Anxiety TMS in Big Lake</h2>
                <p class="text-gray-500 text-lg">Clear clinical answers for Big Lake residents seeking non-drug anxiety relief.</p>
            </div>

            <div class="space-y-4 fade-in-section">
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What is anxious depression and how does TMS relieve it?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Anxious depression occurs when severe depressive episodes are accompanied by persistent worry, physical restlessness, or panic. TMS strengthens the brain's prefrontal cortex, restoring top-down regulatory control over an overactive amygdala and quieting the fight-or-flight response. Read our <a href="anxiety.php" class="text-accent hover:underline">Anxiety Overview</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Is NeuroStar TMS FDA-cleared specifically for anxiety symptoms?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. NeuroStar holds an explicit FDA clearance for Major Depressive Disorder with comorbid anxiety symptoms, offering clinically proven reduction in both depressive apathy and agonizing daily anxiety. Learn more on our <a href="neurostar-tms.php" class="text-accent hover:underline">NeuroStar TMS page</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Can Big Lake patients avoid benzodiazepines or sedating drugs with TMS?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. While medications like Xanax, Klonopin, or sedating SNRIs can cause dependency, brain fog, or memory impairment, TMS is entirely non-sedating and drug-free, retraining neural circuits naturally.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How quickly do patients feel physical anxiety relief during treatment?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Many patients notice physical relaxation—such as reduced jaw tension, deeper sleep, and less chest tightness—by weeks 2 to 4 of their daily 19-minute NeuroStar sessions. Read more in <a href="what-is-tms-therapy.php" class="text-accent hover:underline">What Is TMS Therapy</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How long is the commute from Big Lake and can I drive myself?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            The drive takes less than 5 minutes (about 3 miles) directly south across the MN-25 Mississippi River bridge. Because TMS involves no anesthesia or sedation, you can drive yourself back to Big Lake immediately. See our <a href="tms-therapy-big-lake-mn.php" class="text-accent hover:underline">Big Lake Location Guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Does insurance cover TMS for anxiety symptoms accompanied by depression?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. Major Minnesota insurance carriers including Blue Cross Blue Shield MN, HealthPartners, Medica, UnitedHealthcare, and Medicare cover TMS when anxiety occurs alongside treatment-resistant depression. See our full <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How do I get scheduled for an assessment?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            You can request a free 15-minute consultation via our <a href="contact.php" class="text-accent hover:underline">Contact page</a> or call <a href="tel:+16124298280" class="text-accent font-semibold hover:underline">612-429-8280</a>. Roxanne DoBrava, PMHNP-BC, will review your clinical history and verify your insurance coverage.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
