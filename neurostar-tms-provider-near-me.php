<?php
$page_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalClinic",
      "name": "Tranquil Minds Mental Health - Certified NeuroStar TMS Provider",
      "url": "https://tranquilmindsmentalhealth.com/neurostar-tms-provider-near-me.php",
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
      "@type": "MedicalTherapy",
      "name": "NeuroStar Advanced Therapy TMS",
      "recognizingAuthority": "FDA",
      "indication": ["Major Depressive Disorder", "Obsessive-Compulsive Disorder", "Adolescent Depression", "Anxious Depression"]
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
          "name": "NeuroStar Provider Near Me",
          "item": "https://tranquilmindsmentalhealth.com/neurostar-tms-provider-near-me.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What makes NeuroStar® different from other TMS therapy systems?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "NeuroStar is the pioneer of TMS therapy, backed by over 8.5 million treatments. It features patented Contact Sensing technology and holds the broadest FDA clearances including adult depression, adolescent depression (15+), and OCD."
          }
        },
        {
          "@type": "Question",
          "name": "How does NeuroStar Contact Sensing technology work?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Contact Sensing dynamically measures coil contact with your scalp in real-time, giving visual feedback to the clinician so every magnetic pulse penetrates to the exact depth and angle needed to stimulate mood circuits."
          }
        },
        {
          "@type": "Question",
          "name": "What conditions are FDA-cleared for treatment with NeuroStar?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "NeuroStar holds FDA clearance for Major Depressive Disorder in adults, Adolescent Depression in youth ages 15 to 21, Obsessive-Compulsive Disorder (OCD), and Major Depression with comorbid anxiety symptoms."
          }
        },
        {
          "@type": "Question",
          "name": "Is NeuroStar TMS safe for teenagers and adolescents?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. NeuroStar is the first and only TMS therapy FDA-cleared for adolescents aged 15 and older, offering a non-drug treatment with no personality dampening, cognitive blunting, or weight gain."
          }
        },
        {
          "@type": "Question",
          "name": "How many total treatments are involved in a NeuroStar protocol?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A standard protocol consists of daily 19-minute sessions Monday through Friday for approximately 6 weeks (30 sessions), followed by a 6-session taper over 3 weeks."
          }
        },
        {
          "@type": "Question",
          "name": "Are there any long-term side effects or risks with NeuroStar?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. NeuroStar does not enter the bloodstream, so there are no systemic side effects like weight gain, sexual dysfunction, or insomnia. The most common mild effect is temporary scalp sensitivity during early sessions."
          }
        },
        {
          "@type": "Question",
          "name": "How do I schedule a NeuroStar consultation at Tranquil Minds?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can schedule a consultation directly on our website or by calling 612-429-8280. Our team will verify your clinical indications and explain your treatment plan."
          }
        }
      ]
    }
  ]
}
</script>
';
$page_title       = "NeuroStar TMS Provider Near Me | Certified MN Clinic";
$page_description = "Looking for a certified NeuroStar® TMS provider near you? Tranquil Minds in Monticello, MN provides patented Contact Sensing TMS for adults & teens (15+).";
$hero_title       = 'NeuroStar® TMS Provider Near Me:<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Advanced Precision Care.</span>';
$hero_subtitle    = 'Experience the #1 physician-recommended TMS system in the nation. Patented Contact Sensing, proven clinical remission, and FDA clearances for adults and teens.';
$hero_badge       = 'Certified NeuroStar® Treatment Center';
$hero_cta1_text   = 'Learn How It Works';
$hero_cta1_link   = '#technology';
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
            <span class="text-primary font-semibold">NeuroStar Provider Near Me</span>
        </div>
    </div>

    <!-- ===== WHY CHOOSE NEUROSTAR ===== -->
    <section id="technology" class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 fade-in-section">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">The Gold Standard</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl text-primary font-heading mb-6 leading-tight">
                        Why Discerning Patients Seek Out a NeuroStar® Certified Provider
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 font-light">
                        Not all magnetic stimulation machines are created equal. NeuroStar® is the pioneering system backed by the largest clinical evidence base in the world, with over 8.5 million treatments delivered to more than 230,000 patients. Learn more about <a href="what-is-tms-therapy.php" class="text-accent font-semibold hover:underline">how TMS works</a>.
                    </p>
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        At Tranquil Minds in Monticello, MN, our team is certified specifically in NeuroStar Advanced Therapy protocols. Using patented <strong>Contact Sensing technology</strong>, our device actively measures contact with the patient's scalp in real-time, giving you total peace of mind that every pulse reaches the precise millimeter of brain tissue required for lasting remission. We serve patients across our <a href="locations.php" class="text-accent font-semibold hover:underline">Central MN service areas</a>.
                    </p>

                    <div class="grid sm:grid-cols-2 gap-4 mb-8">
                        <div class="bg-white p-5 rounded-2xl border border-primary/10">
                            <div class="text-primary font-bold text-lg mb-1 flex items-center gap-2">
                                <span class="w-5 h-5 rounded-full bg-accent/20 text-accent flex items-center justify-center text-xs">✓</span>
                                Patented Contact Sensing
                            </div>
                            <p class="text-gray-500 text-xs">Guarantees precise depth of magnetic penetration during every second of treatment.</p>
                        </div>
                        <div class="bg-white p-5 rounded-2xl border border-primary/10">
                            <div class="text-primary font-bold text-lg mb-1 flex items-center gap-2">
                                <span class="w-5 h-5 rounded-full bg-accent/20 text-accent flex items-center justify-center text-xs">✓</span>
                                Adolescent Clearance (15+)
                            </div>
                            <p class="text-gray-500 text-xs">The only TMS therapy FDA-cleared as a first-line alternative for teenagers. Read about <a href="tms-adolescents.php" class="text-accent hover:underline">adolescent TMS</a>.</p>
                        </div>
                    </div>

                    <a href="#contact" class="px-8 py-4 bg-accent text-white rounded-full font-bold shadow-md hover:bg-accent-light transition-all inline-block">Consult Our NeuroStar Specialist</a>
                </div>

                <div class="lg:col-span-5 fade-in-section">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-primary/10">
                        <img src="assets/neurostar/neurostar-2.webp" alt="Certified NeuroStar TMS provider treating patient in Minnesota" class="w-full h-[420px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent flex flex-col justify-end p-8 text-white">
                            <span class="text-xs font-bold uppercase tracking-wider text-accent-light mb-1">Patented Technology</span>
                            <h3 class="text-2xl font-bold font-heading mb-1">Precise Neural Reactivation</h3>
                            <p class="text-white/80 text-xs">Targeting the left dorsolateral prefrontal cortex with MRI-strength magnetic fields.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== 4 FDA CLEARANCES MATRIX ===== -->
    <section class="py-16 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-14 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Clinical Indications</span>
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">FDA Clearances Held by NeuroStar®</h2>
                <p class="text-gray-600 text-lg">NeuroStar holds unmatched safety and efficacy credentials for four major psychological conditions:</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 fade-in-section">
                <div class="bg-[#FAFAFF] p-6 rounded-3xl border border-primary/10">
                    <div class="text-xs font-bold text-accent uppercase tracking-wider mb-2">FDA-Cleared</div>
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">Major Depressive Disorder (Adults)</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">For adults who have failed to achieve satisfactory improvement from prior medication. Read our <a href="depression.php" class="text-accent hover:underline">Depression care guide</a>.</p>
                </div>
                <div class="bg-[#FAFAFF] p-6 rounded-3xl border border-primary/10">
                    <div class="text-xs font-bold text-accent uppercase tracking-wider mb-2">FDA-Cleared</div>
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">Adolescents Ages 15 to 21</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">The only TMS therapy cleared for teenagers with depression, providing a safe option. Read our <a href="adolescent-mental-health.php" class="text-accent hover:underline">Adolescent mental health guide</a>.</p>
                </div>
                <div class="bg-[#FAFAFF] p-6 rounded-3xl border border-primary/10">
                    <div class="text-xs font-bold text-accent uppercase tracking-wider mb-2">FDA-Cleared</div>
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">Obsessive-Compulsive Disorder (OCD)</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Specialized deep magnetic protocols to soothe hyperactive brain circuits. Read our <a href="ocd.php" class="text-accent hover:underline">OCD care guide</a>.</p>
                </div>
                <div class="bg-[#FAFAFF] p-6 rounded-3xl border border-primary/10">
                    <div class="text-xs font-bold text-accent uppercase tracking-wider mb-2">FDA-Cleared</div>
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">Depression with Anxious Symptoms</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Clinically proven to reduce severe co-occurring anxiety alongside depressive episodes. Read our <a href="anxiety.php" class="text-accent hover:underline">Anxiety guide</a>.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHAT A 19-MINUTE SESSION FEELS LIKE ===== -->
    <section class="py-16 bg-[#2A163F] text-white relative">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto bg-white/5 border border-white/10 rounded-3xl p-8 md:p-12 backdrop-blur-md fade-in-section">
                <div class="text-center mb-10">
                    <span class="text-accent-light font-bold tracking-widest uppercase text-xs mb-2 block">Step-By-Step Walkthrough</span>
                    <h2 class="text-3xl md:text-4xl font-heading mb-3">What Does a NeuroStar Session Actually Feel Like?</h2>
                    <p class="text-white/70 text-base">Many patients feel nervous before their first visit. Here is the exact reality of your daily 19-minute session:</p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-accent text-white flex items-center justify-center font-bold text-sm flex-shrink-0 mt-1">1</div>
                        <div>
                            <h3 class="font-bold text-lg text-white">Recline in our Ergonomic Spa-Like Chair</h3>
                            <p class="text-white/70 text-sm leading-relaxed mt-1">You settle into a plush leather chair in a private room. You remain fully clothed, comfortable, and wide awake.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-accent text-white flex items-center justify-center font-bold text-sm flex-shrink-0 mt-1">2</div>
                        <div>
                            <h3 class="font-bold text-lg text-white">Gentle Magnetic Tapping Sensation</h3>
                            <p class="text-white/70 text-sm leading-relaxed mt-1">The NeuroStar coil rests lightly on the left side of your head. When active, you feel a rapid, gentle tapping sensation—often compared to a woodpecker tap or scalp massage.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-accent text-white flex items-center justify-center font-bold text-sm flex-shrink-0 mt-1">3</div>
                        <div>
                            <h3 class="font-bold text-lg text-white">Relax, Listen to Music, or Chat</h3>
                            <p class="text-white/70 text-sm leading-relaxed mt-1">During the 19 minutes, you can listen to a podcast, watch Netflix on our screen, chat with your certified technician, or meditate quietly.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-accent text-white flex items-center justify-center font-bold text-sm flex-shrink-0 mt-1">4</div>
                        <div>
                            <h3 class="font-bold text-lg text-white">Drive Away Immediately</h3>
                            <p class="text-white/70 text-sm leading-relaxed mt-1">Once the timer finishes, the coil is removed. There is no grogginess, no memory fog, and no recovery time. You get into your car and drive straight to your next activity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FAQ ACCORDION (7 EXPANDABLE ITEMS) ===== -->
    <section class="py-16 bg-[#FAFAFF] relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Common Questions</span>
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Frequently Asked Questions: NeuroStar Provider</h2>
                <p class="text-gray-500 text-lg">Details on technology, adolescent safety, session frequency, and clinical outcomes.</p>
            </div>

            <div class="space-y-4 fade-in-section">
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What makes NeuroStar® different from other TMS therapy systems?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            NeuroStar is the pioneer of TMS therapy, backed by over 8.5 million treatments. It features patented Contact Sensing technology and holds the broadest FDA clearances including adult depression, adolescent depression (15+), and OCD. Read more on our <a href="neurostar-tms.php" class="text-accent hover:underline">NeuroStar TMS page</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How does NeuroStar Contact Sensing technology work?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Contact Sensing dynamically measures coil contact with your scalp in real-time, giving visual feedback to the clinician so every magnetic pulse penetrates to the exact depth and angle needed to stimulate mood circuits without guesswork.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What conditions are FDA-cleared for treatment with NeuroStar?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            NeuroStar holds FDA clearance for Major Depressive Disorder in adults, Adolescent Depression in youth ages 15 to 21, Obsessive-Compulsive Disorder (OCD), and Major Depression with comorbid anxiety symptoms. Explore our complete <a href="conditions.php" class="text-accent hover:underline">Conditions We Treat</a> directory.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Is NeuroStar TMS safe for teenagers and adolescents?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. NeuroStar is the first and only TMS therapy FDA-cleared for adolescents aged 15 and older, offering a non-drug treatment with no personality dampening, cognitive blunting, or weight gain. Read more on our <a href="tms-adolescents.php" class="text-accent hover:underline">Adolescent TMS page</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How many total treatments are involved in a NeuroStar protocol?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            A standard protocol consists of daily 19-minute sessions Monday through Friday for approximately 6 weeks (30 sessions), followed by a 6-session taper over 3 weeks. Because sessions are brief, patients easily schedule around work or classes.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Are there any long-term side effects or risks with NeuroStar?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            No. NeuroStar does not enter the bloodstream, so there are no systemic side effects like weight gain, sexual dysfunction, or insomnia. The most common mild effect is temporary scalp sensitivity during early sessions, which fades quickly.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How do I schedule a NeuroStar consultation at Tranquil Minds?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            You can schedule a consultation directly on our <a href="contact.php" class="text-accent hover:underline">Contact page</a> or by calling <a href="tel:+16124298280" class="text-accent font-semibold hover:underline">612-429-8280</a>. Our team will verify your clinical indications and explain your treatment plan.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
