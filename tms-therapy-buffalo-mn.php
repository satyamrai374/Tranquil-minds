<?php
$page_schema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalClinic",
      "name": "Tranquil Minds Mental Health - TMS Therapy for Buffalo, MN",
      "url": "https://tranquilmindsmentalhealth.com/tms-therapy-buffalo-mn.php",
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
        "name": "Buffalo",
        "sameAs": "https://en.wikipedia.org/wiki/Buffalo,_Minnesota"
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
          "name": "Buffalo, MN",
          "item": "https://tranquilmindsmentalhealth.com/tms-therapy-buffalo-mn.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How far is Tranquil Minds from Buffalo, MN?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tranquil Minds is just 10 miles north of Buffalo, MN. Driving straight north on MN-25 N takes approximately 11 to 13 minutes, making daily 19-minute TMS appointments exceptionally convenient."
          }
        },
        {
          "@type": "Question",
          "name": "What route should I take from Buffalo to the Monticello clinic?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Take MN-25 N directly out of downtown Buffalo past Lake Pulaski and the Wright County Courthouse corridor straight into Monticello. Turn onto East Broadway Street to arrive at Suite 2."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a doctor referral from a Buffalo clinic to start TMS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No physician referral is required for an initial consultation. You can schedule directly with our board-certified psychiatric nurse practitioner Roxanne DoBrava."
          }
        },
        {
          "@type": "Question",
          "name": "Does insurance cover TMS for Buffalo and Wright County residents?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Major Minnesota carriers including Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, and Medicare cover TMS for qualifying depression."
          }
        },
        {
          "@type": "Question",
          "name": "Can I continue working in Buffalo while receiving daily TMS therapy?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Each session takes just 19 minutes with zero downtime, grogginess, or memory loss. Buffalo patients easily fit appointments into their lunch break or commute."
          }
        },
        {
          "@type": "Question",
          "name": "How does TMS compare to visiting local clinics in Buffalo or Minneapolis?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Unlike crowded Minneapolis hospital systems that require driving 45 minutes on Hwy 55, Tranquil Minds provides intimate, unhurried psychiatric care just 10 minutes away with free door-side parking."
          }
        },
        {
          "@type": "Question",
          "name": "What conditions are treated for Buffalo patients at Tranquil Minds?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We provide specialized treatment for Major Depressive Disorder, Treatment-Resistant Depression, Obsessive-Compulsive Disorder (OCD), Generalized Anxiety, and Adolescent Depression (15+)."
          }
        }
      ]
    }
  ]
}
</script>
';
$page_title       = "TMS Therapy Buffalo MN | Advanced Depression & OCD Treatment";
$page_description = "Looking for TMS therapy in Buffalo, MN? Tranquil Minds provides FDA-cleared NeuroStar® TMS and psychiatric care just 10 minutes away in Monticello via MN-25.";
$hero_title       = 'TMS Therapy for Buffalo, MN:<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-white/50">Healing 10 Minutes Away.</span>';
$hero_subtitle    = 'Wright County residents deserve advanced, drug-free relief from depression and OCD without driving into Minneapolis. Discover certified NeuroStar® TMS care right up Highway 25.';
$hero_badge       = 'Serving Buffalo & Wright County';
$hero_cta1_text   = 'Get Driving Directions';
$hero_cta1_link   = '#directions';
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
            <span class="text-primary font-semibold">Buffalo, MN</span>
        </div>
    </div>

    <!-- ===== LOCAL BUFFALO OVERVIEW ===== -->
    <section class="py-16 bg-[#FAFAFF] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 fade-in-section">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-primary/40"></span>
                        <span class="text-primary/60 font-bold tracking-widest uppercase text-xs">Wright County Mental Health</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl text-primary font-heading mb-6 leading-tight">
                        Drug-Free Relief from Depression &amp; Anxiety for Buffalo Families
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 font-light">
                        For many in Buffalo, MN, living with major depression, postpartum exhaustion, or severe anxiety feels like carrying an invisible weight across Buffalo Lake every single morning. When multiple rounds of antidepressants like Zoloft, Lexapro, or Effexor fail to work or cause weight gain and brain fog, people often assume they have run out of options. Learn more on our <a href="depression-tms-therapy-buffalo-mn.php" class="text-accent font-semibold hover:underline">Buffalo Depression TMS guide</a>.
                    </p>
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        At Tranquil Minds Mental Health, we offer a scientifically proven alternative: <a href="neurostar-tms.php" class="text-accent font-semibold hover:underline">NeuroStar® Transcranial Magnetic Stimulation (TMS)</a>. Located just 10 miles north on MN-25 in Monticello, our clinic provides Buffalo residents with outpatient, non-invasive magnetic brain stimulation that reactivates dormant mood centers with zero systemic side effects. Explore <a href="what-is-tms-therapy.php" class="text-accent font-semibold hover:underline">how TMS therapy works</a>.
                    </p>

                    <!-- Buffalo Commute Highlights -->
                    <div class="bg-white p-6 rounded-3xl border border-primary/10 shadow-sm mb-8">
                        <h3 class="text-primary font-bold text-base mb-3 flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-accent text-white flex items-center justify-center text-xs">📍</span>
                            The Buffalo-to-Monticello Advantage:
                        </h3>
                        <div class="grid sm:grid-cols-2 gap-4 text-sm text-gray-600">
                            <div>• <strong>11–13 min commute:</strong> Straight north on MN-25 N past Lake Pulaski</div>
                            <div>• <strong>Easy parking:</strong> Free private parking right in front of Suite 2</div>
                            <div>• <strong>No metro traffic:</strong> Avoid Hwy 55 rush hour and downtown congestion</div>
                            <div>• <strong>Fast sessions:</strong> 19-minute appointments fit easily into lunch breaks</div>
                        </div>
                    </div>

                    <a href="#contact" class="px-8 py-4 bg-accent text-white rounded-full font-bold shadow-md hover:bg-accent-light transition-all inline-block">Book Buffalo Patient Consultation</a>
                </div>

                <div class="lg:col-span-5 fade-in-section">
                    <!-- Route Visual Card -->
                    <div id="directions" class="bg-white rounded-3xl p-8 border border-primary/10 shadow-xl relative">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 bg-accent/15 text-accent text-xs font-bold rounded-full uppercase">Highway 25 North</span>
                            <span class="text-xs text-gray-400 font-semibold">10 Miles · 12 Mins</span>
                        </div>
                        <h3 class="text-2xl font-bold text-primary font-heading mb-4">Driving Directions from Buffalo, MN</h3>
                        
                        <ol class="space-y-4 text-sm text-gray-600 border-l-2 border-primary/10 pl-4 ml-2">
                            <li>
                                <div class="font-bold text-primary">Head North on MN-25 N</div>
                                <div class="text-xs text-gray-500">Depart downtown Buffalo passing Lake Pulaski and the Wright County Government Center.</div>
                            </li>
                            <li>
                                <div class="font-bold text-primary">Continue North toward Monticello</div>
                                <div class="text-xs text-gray-500">Cross County Road 106 and approach the I-94 interchange corridor.</div>
                            </li>
                            <li>
                                <div class="font-bold text-primary">Turn on East Broadway Street</div>
                                <div class="text-xs text-gray-500">Arrive at 154 East Broadway Street, Suite 2. Convenient free parking is available directly outside.</div>
                            </li>
                        </ol>

                        <div class="mt-6 pt-6 border-t border-gray-100 flex items-center justify-between">
                            <a href="https://maps.google.com/?q=154+East+Broadway+Street+Suite+2,+Monticello,+MN+55362" target="_blank" rel="noopener" class="text-accent font-bold text-xs hover:underline flex items-center gap-1">Open in Google Maps &rarr;</a>
                            <span class="text-xs text-gray-400">Zip Code: 55313</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== LOCAL CONDITIONS TREATED FOR BUFFALO RESIDENTS ===== -->
    <section class="py-16 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-14 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Comprehensive Psychiatry</span>
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Conditions We Treat for Buffalo Residents</h2>
                <p class="text-gray-600 text-lg">Whether you are dealing with chronic major depression, treatment resistance, or anxiety, our clinical services are personalized for you:</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 fade-in-section">
                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10 hover:shadow-lg transition-all">
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">Major Depression</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        Re-energize underactive neural pathways. 83% of patients experience significant symptom reduction without medication weight gain or fatigue.
                    </p>
                    <a href="depression-tms-therapy-buffalo-mn.php" class="text-accent text-xs font-bold hover:underline">Read Buffalo Depression Guide &rarr;</a>
                </div>

                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10 hover:shadow-lg transition-all">
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">OCD &amp; Intrusive Thoughts</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        FDA-cleared deep protocols that soothe obsessive checking, washing, contamination fears, and intrusive thoughts that disrupt daily life.
                    </p>
                    <a href="ocd.php" class="text-accent text-xs font-bold hover:underline">Learn About OCD TMS &rarr;</a>
                </div>

                <div class="bg-[#FAFAFF] p-8 rounded-3xl border border-primary/10 hover:shadow-lg transition-all">
                    <h3 class="text-xl font-bold text-primary font-heading mb-3">Medication Management</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        Compassionate psychiatric reviews to optimize, simplify, or taper psychiatric medications under board-certified supervision.
                    </p>
                    <a href="medication-management.php" class="text-accent text-xs font-bold hover:underline">Explore Medication Care &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FAQ ACCORDION (7 EXPANDABLE ITEMS) ===== -->
    <section class="py-16 bg-[#FAFAFF] relative">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12 fade-in-section">
                <span class="text-primary/60 font-bold tracking-widest uppercase text-xs mb-2 block">Common Questions</span>
                <h2 class="text-3xl md:text-5xl text-primary font-heading mb-4">Frequently Asked Questions: Buffalo, MN</h2>
                <p class="text-gray-500 text-lg">Practical information for Wright County patients exploring TMS therapy.</p>
            </div>

            <div class="space-y-4 fade-in-section">
                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How far is Tranquil Minds from Buffalo, MN?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Tranquil Minds is just 10 miles north of Buffalo, MN. Driving straight north on MN-25 N takes approximately 11 to 13 minutes, making daily 19-minute TMS appointments exceptionally convenient for local Wright County residents.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What route should I take from Buffalo to the Monticello clinic?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Take MN-25 N directly out of downtown Buffalo past Lake Pulaski and the Wright County Courthouse corridor straight into Monticello. Turn onto East Broadway Street to arrive at Suite 2, where free door-side parking awaits.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Do I need a doctor referral from a Buffalo clinic to start TMS?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            No physician referral is required for an initial consultation. You can schedule directly with our board-certified psychiatric nurse practitioner Roxanne DoBrava via our <a href="contact.php" class="text-accent hover:underline">Contact page</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Does insurance cover TMS for Buffalo and Wright County residents?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. Major Minnesota carriers including Blue Cross Blue Shield of Minnesota, HealthPartners, Medica, UnitedHealthcare, and Medicare cover TMS for qualifying depression. Review requirements in our <a href="insurance-covered-tms-therapy.php" class="text-accent hover:underline">Insurance Guide</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Can I continue working in Buffalo while receiving daily TMS therapy?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Yes. Each session takes just 19 minutes with zero downtime, grogginess, or memory loss. Buffalo patients easily fit appointments into their lunch break or commute along MN-25.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">How does TMS compare to visiting clinics in Buffalo or Minneapolis?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            Unlike crowded Minneapolis hospital systems that require driving 45 minutes on Hwy 55, Tranquil Minds provides intimate, unhurried psychiatric care just 10 minutes away with free door-side parking. Learn about our standards on our <a href="best-tms-clinic-minnesota.php" class="text-accent hover:underline">Best TMS Clinic page</a>.
                        </div>
                    </div>
                </div>

                <div class="border-b border-primary/10 overflow-hidden group">
                    <button class="accordion-header w-full py-4 text-left flex justify-between items-center bg-transparent hover:text-accent transition-colors">
                        <span class="text-lg font-bold text-primary group-hover:text-accent transition-colors">What conditions are treated for Buffalo patients at Tranquil Minds?</span>
                        <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-300 group-[.active]:rotate-90">
                            <svg class="w-5 h-5 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </button>
                    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pb-6 text-gray-600 leading-relaxed text-base">
                            We provide specialized treatment for Major Depressive Disorder, <a href="treatment-resistant-depression.php" class="text-accent hover:underline">Treatment-Resistant Depression</a>, <a href="ocd.php" class="text-accent hover:underline">OCD</a>, <a href="anxiety.php" class="text-accent hover:underline">Generalized Anxiety</a>, and <a href="adolescent-mental-health.php" class="text-accent hover:underline">Adolescent Depression (15+)</a>. Call us today at <a href="tel:+16124298280" class="text-accent font-semibold hover:underline">612-429-8280</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
