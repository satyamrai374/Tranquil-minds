<?php
$page_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalClinic",
      "name": "Tranquil Minds Mental Health - OCD Treatment for Elk River MN",
      "url": "https://tranquilmindsmentalhealth.com/ocd-treatment-elk-river-mn.php",
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
        "name": "Elk River",
        "sameAs": "https://en.wikipedia.org/wiki/Elk_River,_Minnesota"
      }
    },
    {
      "@type": "MedicalCondition",
      "name": "Obsessive-Compulsive Disorder",
      "possibleTreatment": [
        {
          "@type": "MedicalTherapy",
          "name": "NeuroStar TMS for OCD"
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
          "name": "Elk River, MN",
          "item": "https://tranquilmindsmentalhealth.com/tms-therapy-elk-river-mn.php"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "OCD Treatment",
          "item": "https://tranquilmindsmentalhealth.com/ocd-treatment-elk-river-mn.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How does NeuroStar TMS treat Obsessive-Compulsive Disorder (OCD)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "NeuroStar TMS uses focused magnetic pulses to modulate the cortico-striato-thalamo-cortical (CSTC) brain circuitry. In OCD, these circuits become hyperactive, firing repeated false alarm signals. Magnetic stimulation helps quiet this circuit, reducing both intrusive obsessions and repetitive physical compulsions."
          }
        },
        {
          "@type": "Question",
          "name": "How is the OCD TMS protocol different from the depression protocol?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "While depression TMS targets the left dorsolateral prefrontal cortex, the FDA-cleared OCD protocol targets the medial prefrontal cortex and anterior cingulate cortex. It also involves brief personalized symptom provocations prior to stimulation to activate the target circuitry."
          }
        },
        {
          "@type": "Question",
          "name": "Does TMS work if high-dose SSRIs or therapy have stalled?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Clinical trials demonstrate that NeuroStar TMS produces statistically significant reductions on the Yale-Brown Obsessive Compulsive Scale (Y-BOCS) even for patients who have not responded adequately to multiple high-dose SSRIs or Exposure and Response Prevention (ERP) therapy."
          }
        },
        {
          "@type": "Question",
          "name": "What common OCD subtypes are treated at Tranquil Minds?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We treat contamination anxiety, aggressive harm-checking, symmetry and alignment obsessions, somatic hyper-awareness, and taboo religious or sexual intrusive thoughts that cause extreme internal distress."
          }
        },
        {
          "@type": "Question",
          "name": "What is the daily commute and time commitment for Elk River OCD patients?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Elk River residents make an easy 14 to 17-minute drive west along US-10 W or MN-101 S to I-94. Daily sessions last about 19 to 20 minutes with zero downtime or sedation, allowing you to return immediately to work or home."
          }
        },
        {
          "@type": "Question",
          "name": "Does health insurance cover TMS therapy for OCD in Minnesota?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, many major Minnesota health plans—including Blue Cross Blue Shield MN, HealthPartners, Medica, UnitedHealthcare, and Medicare—have clinical policies covering FDA-cleared TMS therapy for severe OCD."
          }
        },
        {
          "@type": "Question",
          "name": "How do I begin an OCD evaluation with Roxanne DoBrava, PMHNP-BC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can schedule a complimentary 15-minute consultation through our website or call 612-429-8280. Our clinical team will assess your symptom history and verify insurance benefits."
          }
        }
      ]
    }
  ]
}
</script>
';
$page_title       = "OCD Treatment Elk River MN | FDA-Cleared TMS Therapy";
$page_description = "Specialized OCD TMS treatment for Elk River, MN. NeuroStar® deep magnetic protocols to calm obsessive loops and compulsions just 15 minutes away in Monticello.";
$hero_title       = 'OCD Treatment for Elk River, MN:<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Break Free from the Loop.</span>';
$hero_subtitle    = 'Intrusive thoughts and repetitive compulsions are rooted in hyperactive brain circuits. Experience FDA-cleared NeuroStar® TMS therapy just 15 minutes west on Highway 10.';
$hero_badge       = 'Specialized OCD & TMS Care';
$hero_cta1_text   = 'How TMS Treats OCD';
$hero_cta1_link   = '#ocd-science';
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
            <a href="tms-therapy-elk-river-mn.php" class="hover:text-primary transition-colors">Elk River, MN</a>
            <span>/</span>
            <span class="text-primary font-semibold">OCD Treatment</span>
        </div>
    </div>

    <!-- ===== OCD SCIENCE OVERVIEW ===== -->
    <section id="ocd-science" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 fade-in-section">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">FDA-Cleared OCD Protocol</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl text-primary font-heading mb-6 leading-tight">
                        Quieting the Obsessive Alarm System in the Brain
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 font-light">
                        Obsessive-Compulsive Disorder (OCD) is often trivialized as a personality quirk about cleanliness, but for individuals in Elk River living with moderate to severe OCD, it is an exhausting mental battle. Intrusive doubts, fears of contamination, symmetry compulsions, or relentless checking rituals can consume hours of each day.
                    </p>
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        In OCD, the <strong>cortico-striato-thalamo-cortical (CSTC)</strong> brain circuit becomes hyperactive, firing false alarm signals repeatedly. High-dose SSRIs often provide only partial relief. <strong><a href="neurostar-tms.php" class="text-accent hover:underline">NeuroStar® TMS therapy</a></strong> delivers targeted magnetic stimulation specifically calibrated to modulate these hyperactive circuits, restoring balance and significantly weakening compulsions.
                    </p>

                    <div class="bg-white p-6 rounded-3xl border border-primary/10 shadow-sm mb-8">
                        <h3 class="text-primary font-bold text-base mb-3">NeuroStar OCD Treatment Highlights:</h3>
                        <div class="grid sm:grid-cols-2 gap-3 text-sm text-gray-600">
                            <div>• FDA-cleared specifically for adult OCD</div>
                            <div>• Non-drug therapy with no cognitive sedation</div>
                            <div>• Quick 15-minute commute from Elk River via US-10</div>
                            <div>• In-network with <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline font-semibold">BCBS MN, HealthPartners, Medica &amp; UHC</a></div>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="contact.php" class="px-8 py-4 bg-accent text-white rounded-full font-bold shadow-md hover:bg-accent-light transition-all inline-block">Consult with our OCD Specialist</a>
                        <a href="tms-therapy-elk-river-mn.php" class="px-8 py-4 bg-white text-primary border border-primary/20 rounded-full font-bold hover:bg-primary/5 transition-all inline-block">Elk River Clinic Hub &rarr;</a>
                    </div>
                </div>

                <div class="lg:col-span-5 fade-in-section">
                    <div class="bg-white rounded-3xl p-8 border border-primary/10 shadow-xl">
                        <h3 class="text-2xl font-bold text-primary font-heading mb-4">Common OCD Subtypes We Treat</h3>
                        <div class="space-y-3 text-sm text-gray-700 mb-6">
                            <div class="p-3 bg-[#FAFAFF] rounded-xl border border-primary/5">
                                <strong>Harm &amp; Safety Checking:</strong> Fear of leaving doors unlocked, appliances on, or causing accidental harm to loved ones.
                            </div>
                            <div class="p-3 bg-[#FAFAFF] rounded-xl border border-primary/5">
                                <strong>Contamination &amp; Washing:</strong> Excessive fears of germs, chemicals, or illness leading to repetitive washing rituals.
                            </div>
                            <div class="p-3 bg-[#FAFAFF] rounded-xl border border-primary/5">
                                <strong>Symmetry &amp; Exactness:</strong> Extreme distress when objects are not arranged "just right" or aligned perfectly.
                            </div>
                            <div class="p-3 bg-[#FAFAFF] rounded-xl border border-primary/5">
                                <strong>Taboo &amp; Intrusive Thoughts:</strong> Highly distressing religious, violent, or sexual intrusions that cause shame and panic.
                            </div>
                        </div>

                        <div class="p-4 bg-accent/10 rounded-2xl text-xs text-primary font-semibold">
                            Located just 15 miles west of Elk River at 154 East Broadway Street, Suite 2, Monticello, MN.
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
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Comprehensive OCD Care</span>
                <h2 class="text-3xl md:text-4xl text-primary font-heading mb-4">Integrating TMS with Medication &amp; Therapy</h2>
                <p class="text-gray-600 text-base">How advanced neurostimulation bridges the gap when conventional treatments fall short:</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 fade-in-section mb-10">
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">Medication Management</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">While high-dose SSRIs are standard first-line therapies, many patients experience plateaued results or heavy sedation. TMS can be safely combined with medication to break through treatment resistance.</p>
                    <a href="psychiatry.php" class="text-accent font-bold text-xs hover:underline">Psychiatric Medication Review &rarr;</a>
                </div>
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10">
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">Cognitive &amp; Brain Circuit Health</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Targeted magnetic stimulation weakens compulsive urge patterns, allowing patients to engage in daily routines and therapy with vastly reduced anxiety and friction.</p>
                    <a href="what-is-tms-therapy.php" class="text-accent font-bold text-xs hover:underline">How TMS Works &rarr;</a>
                </div>
            </div>

            <!-- Surrounding Towns Links -->
            <div class="bg-[#FAFAFF] p-6 rounded-3xl border border-primary/10 text-center">
                <span class="text-xs uppercase tracking-wider text-primary/60 font-bold block mb-2">Nearby Surrounding Communities</span>
                <p class="text-xs text-gray-500 mb-3">Providing specialized OCD and mood care across Sherburne &amp; Wright counties:</p>
                <div class="flex flex-wrap justify-center gap-3 text-xs">
                    <a href="tms-therapy-elk-river-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Elk River Hub</a>
                    <a href="tms-therapy-otsego-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Otsego, MN</a>
                    <a href="tms-therapy-rogers-mn.php" class="px-3 py-1.5 bg-white border border-primary/10 rounded-full hover:border-accent hover:text-accent transition-colors">Rogers, MN</a>
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
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Frequently Asked Questions: OCD Treatment Elk River</h2>
                <p class="text-gray-500 text-lg">Clear clinical insights into FDA-cleared neurostimulation for Obsessive-Compulsive Disorder.</p>
            </div>

            <div class="space-y-4 fade-in-section">
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How does NeuroStar TMS treat Obsessive-Compulsive Disorder (OCD)?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            NeuroStar TMS uses focused magnetic pulses to modulate the cortico-striato-thalamo-cortical (CSTC) brain circuitry. In OCD, these circuits become hyperactive, firing repeated false alarm signals. Magnetic stimulation helps quiet this circuit, reducing both intrusive obsessions and repetitive physical compulsions.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How is the OCD TMS protocol different from the depression protocol?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            While depression TMS targets the left dorsolateral prefrontal cortex, the FDA-cleared OCD protocol targets the medial prefrontal cortex and anterior cingulate cortex. It also involves brief personalized symptom provocations prior to stimulation to activate the target circuitry. Read more in <a href="what-is-tms-therapy.php" class="text-accent hover:underline">What Is TMS Therapy</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Does TMS work if high-dose SSRIs or therapy have stalled?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. Clinical trials demonstrate that NeuroStar TMS produces statistically significant reductions on the Yale-Brown Obsessive Compulsive Scale (Y-BOCS) even for patients who have not responded adequately to multiple high-dose SSRIs or Exposure and Response Prevention (ERP) therapy.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What common OCD subtypes are treated at Tranquil Minds?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            We treat contamination anxiety, aggressive harm-checking, symmetry and alignment obsessions, somatic hyper-awareness, and taboo religious or sexual intrusive thoughts that cause extreme internal distress.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What is the daily commute and time commitment for Elk River OCD patients?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Elk River residents make an easy 14 to 17-minute drive west along US-10 W or MN-101 S to I-94. Daily sessions last about 19 to 20 minutes with zero downtime or sedation, allowing you to return immediately to work or home. Learn more in our <a href="tms-therapy-elk-river-mn.php" class="text-accent hover:underline">Elk River Location Guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Does health insurance cover TMS therapy for OCD in Minnesota?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes, many major Minnesota health plans—including Blue Cross Blue Shield MN, HealthPartners, Medica, UnitedHealthcare, and Medicare—have clinical policies covering FDA-cleared TMS therapy for severe OCD. Check our full <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How do I begin an OCD evaluation with Roxanne DoBrava, PMHNP-BC?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            You can schedule a complimentary 15-minute consultation through our <a href="contact.php" class="text-accent hover:underline">Contact page</a> or call <a href="tel:+16124298280" class="text-accent font-semibold hover:underline">612-429-8280</a>. Our clinical team will assess your symptom history and verify insurance benefits.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
