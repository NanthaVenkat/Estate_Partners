<?php

/**
 * Template Name: Villas Landing Page
 * Apartment project landing page: Infinium Altitude, Ganapathy.
 *
 * Name / location / price / phone are pulled from the project's ACF fields when filled.
 * Images go in /assets/images/apartment/ (file names used below are placeholders).
 *
 * @package EstatePartners
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();
/* Shared class strings (same typography/spacing as the About section on the home page). */
$td   = 'vnktheme-textdomain';
$container = 'container mx-auto px-4 sm:px-6 lg:px-8';
$section   = 'py-16 sm:py-20 lg:py-24';
$h2        = 'font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight';
$address = 'Villankurichi Rd, B.R. Puram Industrial Estate, Coimbatore, Tamil Nadu 641014';

$why = array(
    array('icon' => 'https://estatepartners.in/wp-content/uploads/2026/10/LocalExpertise.svg',  'title' => 'Heritage Location',      'text' => "Built on the site of Coimbatore's historic Central Studios, once among the city's busiest film production houses."),
    array('icon' => 'https://estatepartners.in/wp-content/uploads/2026/10/about-icons-6.svg',        'title' => 'Genuine Exclusivity', 'text' => 'Only 16 villas across 1.42 acres — a rare, small-scale development, not a mass housing project.'),
    array('icon' => 'https://estatepartners.in/wp-content/uploads/2026/10/about-icons-5.svg', 'title' => 'Mediterranean-Inspired Design', 'text' => ' G+1 & G+2 architecture focused on indoor-outdoor living, bigger spaces, and natural light.'),
    array('icon' => 'https://estatepartners.in/wp-content/uploads/2026/10/about-icons-2.svg',     'title' => 'Secure Community', 'text' => 'Gated community with 24×7 security and CCTV surveillance.'),
    array('icon' => 'https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-7.svg',     'title' => 'Vaastu Compliant', 'text' => 'Plots planned with 100% Vaastu compliance.'),
    array('icon' => 'https://estatepartners.in/wp-content/uploads/2026/10/icon-1.svg',     'title' => 'Central, Future-Ready Location', 'text' => '2 minutes off Trichy Road, close to schools, hospitals, and the city centre.'),
);


$steps = array(
    array('icon' => 'https://estatepartners.in/wp-content/uploads/2026/10/about-icons-11.svg', 'title' => 'Explore Available Villas',      'text' => 'View the master plan and explore available villas based on size, layout, and pricing.'),
    array('icon' => 'https://estatepartners.in/wp-content/uploads/2026/10/about-icons-12.svg', 'title' => 'SHORTLIST
YOUR VILLA',    'text' => "Choose a villa that suits your budget, preferred layout, and family's future plans."),
    array('icon' => 'https://estatepartners.in/wp-content/uploads/2026/10/about-icons-13.svg',             'title' => 'SITE VISIT &
INSPECTION',  'text' => 'Visit Infinium Central 16, see the villa in person, and clarify your questions with our team.'),
    array('icon' => 'https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-11.svg',           'title' => 'VERIFY &
CONFIRM',        'text' => 'Review project approvals, villa details, legal documentation, and payment terms before proceeding.'),
    array('icon' => 'https://estatepartners.in/wp-content/uploads/2026/10/about-icons-8.svg',    'title' => 'BOOK YOUR
VILLA',         'text' => 'Pay the booking amount and complete the required booking formalities to reserve your villa.'),
    array('icon' => 'https://estatepartners.in/wp-content/uploads/2026/10/about-icons-9.svg',    'title' => 'REGISTRATION & OWNERSHIP',     'text' => 'Complete the sale agreement, balance payment, and registration process, and take ownership of your villa.'),
);
?>

<style>
    /* Smooth accordion animation transitions */
    .accordion-content {
        transition: max-height 0.35s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.25s ease-in-out;
        max-height: 125rem;
        opacity: 1;
        overflow: hidden;
    }

    .accordion-content.collapsed {
        max-height: 0;
        opacity: 0;
    }

    .chevron-icon {
        transition: transform 0.3s ease;
    }

    .chevron-icon.rotated {
        transform: rotate(180deg);
    }
</style>

<main>

    <!-- ======================= HERO ======================= -->
    <section class="relative isolate">
        <div class="absolute inset-0 -z-10">
            <img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-1-scaled.jpg" alt="Infinium Altitude apartments in Ganapathy" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-gradient-to-r from-[#131313]/80 via-[#131313]/50 to-[#131313]/20"></div>
        </div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20 grid xl:grid-cols-[1.2fr_0.8fr] gap-10 items-center">
            <div class="text-white">
                <p class="font-prata text-3xl tracking-[0.3em] uppercase"><img src="https://estatepartners.in/wp-content/uploads/2026/11/infinium-central-16-logo.png" alt="" class="h-14"></p>
                <h1 class="font-prata text-3xl sm:text-4xl lg:text-5xl leading-tight mt-5">Ultra-Luxury 4 BHK Villas
                    in Ramanathapuram, Coimbatore</h1>
                <p class="mt-4 text-sm sm:text-base tracking-wide text-white/90">RERA APPROVED | 100% VAASTU COMPLIANT</p>
                <dl class="mt-8 flex flex-wrap sm:grid-cols-4 gap-4">
                    <div class="border-r-2 border-white px-4 text-center">
                        <dt class="font-prata text-3xl sm:text-4xl">1.42</dt>
                        <dd class="text-xs text-white/80">Acres</dd>
                    </div>
                    <div class="border-r-2 border-white px-4 text-center">
                        <dt class="font-prata text-3xl sm:text-4xl">16</dt>
                        <dd class="text-xs text-white/80">Villas</dd>
                    </div>
                    <!-- <div class="border-r-2 border-white px-4 text-center">
                        <dt class="font-prata text-3xl sm:text-4xl">2 Towers</dt>
                        <dd class="text-xs text-white/80">Premium Plots</dd>
                    </div> -->
                    <div class="px-4 text-center">
                        <dt class="font-prata text-3xl sm:text-4xl">₹ 5 Crores</dt>
                        <dd class="text-xs text-white/80">Onwards</dd>
                    </div>
                </dl>

                <button
                    type="button"
                    class="js-open-enquiry-modal mt-8 inline-block bg-gold text-white text-base font-medium px-5 py-2 rounded-xl">
                    <span>Limited Villas Available</span>
                </button>
            </div>

            <!-- Hero form -->
            <div id="enquire" class="bg-[#F0F6FB] rounded-xl shadow-xl p-6 sm:p-8 scroll-mt-28">
                <h2 class="font-prata text-2xl text-[#302F5A] text-center">Get Lowest Price &amp; Availability</h2>
                <p class="text-sm text-center mt-1 mb-5">Our property expert will get in touch with you</p>
                <?php echo do_shortcode('[wpforms id="41"]'); ?>
                <p class="mt-4 text-xs text-center text-[#444444]">100% Secure | Expert Assistance | Quick Response</p>
                <div class="mt-4 grid grid-cols-3 gap-2 text-xs">
                    <a href="#site-visit" class="rounded-md py-2 px-2 bg-white shadow-2xl flex items-center gap-3"><i class="fa-regular fa-calendar-check bg-[#302F5A] rounded-full p-2 text-white"></i>Book Site Visit</a>
                    <a href="#enquire-cta" class="rounded-md py-2 px-2 bg-white shadow-2xl flex items-center gap-3"><i class="fa-solid fa-download bg-[#302F5A] rounded-full p-2 text-white"></i>Download Brochure</a>
                    <a href="https://wa.me/917092958830" class="rounded-md py-2 px-2 bg-white shadow-2xl flex items-center gap-3"><i class="fa-brands fa-whatsapp bg-[#302F5A] rounded-full p-2 text-white"></i>Whatsapp Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature strip -->
    <section class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 xl:-mt-14 py-12 xl:py-0">
        <ul class="bg-white rounded-xl xl:rounded-full shadow-lg border border-ink-line grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 p-5 text-center text-base">
            <li class="flex flex-col items-center gap-2 border-[#19124B] border-r-1 px-3"><img src="https://estatepartners.in/wp-content/uploads/2026/10/about-icons-28.svg" alt="" class="w-14 h-14">Clear Legal Documentation</li>
            <li class="flex flex-col items-center gap-2 border-[#19124B] md:border-r-1 px-3"><img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-16.svg" alt="" class="w-14 h-14">Premium Villas</li>
            <li class="flex flex-col items-center gap-2 border-[#19124B] border-r-1 md:border-r-0 lg:border-r-1 px-3"><img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-15.svg" alt="" class="w-14 h-14">Coimbatore Corporation Approved</li>
            <li class="flex flex-col items-center gap-2 border-[#19124B] border-r-0 md:border-r-1 px-3"><img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-14.svg" alt="" class="w-14 h-14">Gated Community</li>
            <li class="flex flex-col items-center gap-2 border-[#19124B] border-r-1 px-3"><img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-13.svg" alt="" class="w-14 h-14">50+ Lifestyle Amenities</li>
            <li class="flex flex-col items-center gap-2 border-[#19124B]"><img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-12.svg" alt="" class="w-14 h-14">Established Location</li>
        </ul>
    </section>

    <!-- Sticky tabs -->
    <!-- <nav class="sticky top-0 z-40 bg-white border-b border-ink-line shadow-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 overflow-x-auto">
            <ul class="flex gap-2 py-3 text-sm font-medium whitespace-nowrap">
                <li><a href="#overview" data-tab class="px-4 py-2 rounded-full border border-gold bg-gold text-white hover:border-gold">Project Overview</a></li>
                <li><a href="#why" data-tab class="px-4 py-2 rounded-full border border-ink-line hover:border-gold">Why Infinium Altitude</a></li>
                <li><a href="#layout" data-tab class="px-4 py-2 rounded-full border border-ink-line hover:border-gold">Layout</a></li>
                <li><a href="#amenities" data-tab class="px-4 py-2 rounded-full border border-ink-line hover:border-gold">Amenities</a></li>
                <li><a href="#gallery" data-tab class="px-4 py-2 rounded-full border border-ink-line hover:border-gold">Gallery</a></li>
                <li><a href="#invest" data-tab class="px-4 py-2 rounded-full border border-ink-line hover:border-gold">Why Invest in Ganapathy?</a></li>
            </ul>
        </div>
    </nav> -->

    <!-- ======================= OVERVIEW ======================= -->
    <section id="overview" class="py-16 sm:py-20 scroll-mt-28">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight">Infinium Central 16 - Project Overview</h2>
                <p class="mt-4 max-w-4xl mx-auto text-[#302F5A] leading-relaxed">A rare address in the heart of the city. Only 16 Mediterranean-inspired villas, built on the site of Coimbatore's historic Central Studios.</p>
            </div>
            <div class="mt-10 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-5 text-base text-[#6B6B6B] text-center">
                <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-12.svg" alt="" class="w-14 h-14 mx-auto mb-4">
                    <h3 class="text-lg text-gold font-medium">Ramanathapuram</h3>
                    <p class="mt-2">Central, established Coimbatore address</p>
                </div>
                <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-11.svg" alt="" class="w-14 h-14 mx-auto mb-4">
                    <h3 class="text-lg text-gold font-medium">RERA + DTCP</h3>
                    <p class="mt-2">Registered residential development</p>
                </div>
                <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-10.svg" alt="" class="w-14 h-14 mx-auto mb-4">
                    <h3 class="text-lg text-gold font-medium">1.42 Acres</h3>
                    <p class="mt-2">Compact, exclusive villa community</p>
                </div>
                <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-16.svg" alt="" class="w-14 h-14 mx-auto mb-4">
                    <h3 class="text-lg text-gold font-medium">16 Villas</h3>
                    <p class="mt-2">A rare, small-scale development</p>
                </div>
                <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-9.svg" alt="" class="w-14 h-14 mx-auto mb-4">
                    <h3 class="text-lg text-gold font-medium">7.4-9.4 Cents</h3>
                    <p class="mt-2">Private plot per villa</p>
                </div>
                <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-8.svg" alt="" class="w-14 h-14 mx-auto mb-4">
                    <h3 class="text-lg text-gold font-medium">100% Vaastu</h3>
                    <p class="mt-2">Designed with Vaastu considerations</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================= About ======================= -->
    <section id="about" class="py-16 sm:py-20 lg:py-24 scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div class="reveal relative order-2 lg:order-1">
                <div class="rounded-2xl overflow-hidden">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/11/infinium-central-2.png" alt="Property agreement signing with Estate Partners guidance" class="w-full min-h-[26.25rem] sm:min-h-[32.5rem]" loading="lazy" />
                </div>
                <!-- <div class="absolute -bottom-6 left-5 sm:left-8 bg-ink text-white rounded-2xl px-6 py-5 shadow-xl flex items-center gap-4">
                    <span class="w-12 h-12 rounded-full bg-gold inline-flex items-center justify-center text-xl shrink-0"><i class="fa-solid fa-headset"></i></span>
                    <span>
                        <span class="block font-prata text-2xl leading-none">24/7</span>
                        <span class="block text-xs text-white/70 mt-1 tracking-wide">Buyer support, always</span>
                    </span>
                </div> -->
            </div>

            <div class="reveal order-1 lg:order-2 sm:text-lg text-[#444444]">
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">ultra - luxury living</p>
                <h2 class="font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight">Where Heritage Meets Ultra-Luxury Living</h2>
                <p class="mt-5 leading-relaxed">Infinium Central 16 by Infinium Developers stands on the site of Coimbatore's historic Central Studios — once one of the busiest film production houses of the Kollywood era, and now home to just 16 privileged families.</p>
                <p class="mt-4 leading-relaxed">Spread across 1.42 acres, each Mediterranean-inspired villa sits on 7.4 to 9.4 cents with 3,600 to 4,300 sq.ft of built-up space, designed around indoor-outdoor living, bigger spaces, and natural light suited to Coimbatore's climate. With 55% open space and greenery, 100% Vaastu-compliant planning, and RERA registration, Infinium Central 16 offers a combination of scarcity, heritage, and central location that's hard to find elsewhere in the city's villa market.</p> <!-- <ul class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm font-medium">
                    <li class="flex items-center gap-3 bg-brand-cream border border-ink-line rounded-xl px-4 py-3"><i class="fa-solid fa-circle-check text-gold"></i> Detailed project info</li>
                    <li class="flex items-center gap-3 bg-brand-cream border border-ink-line rounded-xl px-4 py-3"><i class="fa-solid fa-circle-check text-gold"></i> Location insights</li>
                    <li class="flex items-center gap-3 bg-brand-cream border border-ink-line rounded-xl px-4 py-3"><i class="fa-solid fa-circle-check text-gold"></i> Pricing guidance</li>
                    <li class="flex items-center gap-3 bg-brand-cream border border-ink-line rounded-xl px-4 py-3"><i class="fa-solid fa-circle-check text-gold"></i> Buyer-focused support</li>
                </ul> -->
                <button
                    type="button"
                    class="js-open-enquiry-modal mt-8 inline-flex items-center gap-2 bg-gold hover:bg-gold text-white font-semibold px-7 py-3.5 rounded-lg transition-colors">
                    <span>know more details </span>
                    <i class="fa-solid fa-arrow-right text-sm"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- ============ SECTION START ============ -->
    <section id="invest" class="bg-brand-cream pt-16 sm:pt-20 overflow-hidden">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A]">Why Invest in Ramanathapuram?</h2>
                <p class="mt-4 text-sm sm:text-base leading-relaxed text-[#676767]">
                    Ramanathapuram sits centrally in Coimbatore, just 2 minutes off Trichy Road and close to Singanallur and Race Course. It's an established address that combines everyday connectivity with a rare heritage story — the site once home to Central Studios, a landmark of the Kollywood film era.
                </p>
            </div>

            <!-- Woman in the middle, three points each side -->
            <div class="mt-10 lg:mt-12 grid lg:grid-cols-[1fr_auto_1fr] gap-x-10 gap-y-8 items-end">

                <!-- Woman (first on mobile, centre on desktop) -->
                <div class="order-first lg:order-none lg:col-start-2 lg:row-start-1 flex justify-center self-end">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/11/apartment-page-8.png" alt="Smiling home buyer" class="max-w-[32.5rem] h-auto object-contain block" loading="lazy" />
                </div>

                <!-- LEFT column: text right-aligned, gold bar on the right.
           The lg:mr-* values create the curved/staggered look. -->
                <ul class="lg:col-start-1 lg:row-start-1 grid sm:grid-cols-2 lg:grid-cols-1 gap-8 lg:gap-0 lg:self-stretch lg:flex lg:flex-col lg:justify-between lg:pt-2 space-y-6 pb-6 lg:pb-20">
                    <li class="lg:self-end lg:mr-0">
                        <div class="lg:text-right border-l-4 lg:border-l-0 lg:border-r-4 border-gold pl-4 lg:pl-0 lg:pr-4 max-w-xs lg:ml-auto">
                            <h3 class="font-semibold text-lg text-[#302F5A]">Heritage</h3>
                            <p class="mt-2 text-xs leading-5 text-[#676767]">Built on the site of the historic Central Studios, a distinctive address unlike any other in the city.</p>
                        </div>
                    </li>
                    <li class="lg:self-end lg:mr-9">
                        <div class="lg:text-right border-l-4 lg:border-l-0 lg:border-r-4 border-gold pl-4 lg:pl-0 lg:pr-4 max-w-xs lg:ml-auto">
                            <h3 class="font-semibold text-lg text-[#302F5A]">Connectivity</h3>
                            <p class="mt-2 text-xs leading-5 text-[#676767]">2 minutes off Trichy Road, 5 minutes to Singanallur & Ramanathapuram Junction, 10 minutes to Race Course.</p>
                        </div>
                    </li>
                    <li class="lg:self-end lg:mr-12">
                        <div class="lg:text-right border-l-4 lg:border-l-0 lg:border-r-4 border-gold pl-4 lg:pl-0 lg:pr-4 max-w-xs lg:ml-auto">
                            <h3 class="font-semibold text-lg text-[#302F5A]">Education</h3>
                            <p class="mt-2 text-xs leading-5 text-[#676767]">Reputed schools including Alvernia, Carmel Garden, SSVM, BVM Global, Perks, St. Francis, and St. Joseph's within 5–10 minutes.</p>
                        </div>
                    </li>
                </ul>

                <!-- RIGHT column: text left-aligned, gold bar on the left -->
                <ul class="lg:col-start-3 lg:row-start-1 grid sm:grid-cols-2 lg:grid-cols-1 gap-8 lg:gap-0 lg:self-stretch lg:flex lg:flex-col lg:justify-between lg:pt-2 space-y-6 pb-16 sm:pb-20">
                    <li class="lg:self-start lg:ml-0">
                        <div class="border-l-4 border-gold pl-4 max-w-xs">
                            <h3 class="font-semibold text-lg text-[#302F5A]">Healthcare</h3>
                            <p class="mt-2 text-xs leading-5 text-[#676767]">Gem Hospital, Kidney Centre, PSG Hospitals, and Child Trust Hospital within 10–15 minutes.</p>
                        </div>
                    </li>
                    <li class="lg:self-start lg:ml-6">
                        <div class="border-l-4 border-gold pl-4 max-w-xs">
                            <h3 class="font-semibold text-lg text-[#302F5A]">Lifestyle & Leisure</h3>
                            <p class="mt-2 text-xs leading-5 text-[#676767]">Close to Coimbatore Smart City Lakes, premium restaurants, and shopping hubs.</p>
                        </div>
                    </li>
                    <li class="lg:self-start lg:ml-8">
                        <div class="border-l-4 border-gold pl-4 max-w-xs">
                            <h3 class="font-semibold text-lg text-[#302F5A]">Exclusivity</h3>
                            <p class="mt-2 text-xs leading-5 text-[#676767]">Only 16 villas in the entire community, keeping the neighbourhood genuinely low-density.</p>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </section>

    <!-- ============ SECTION START ============ -->
    <section id="location-advantage" class="py-12 sm:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-[0.8fr_1.2fr] gap-8 lg:gap-12 items-stretch">

                <!-- Image: stretches to the height of the content column -->
                <div class="rounded-3xl overflow-hidden min-h-[20rem] lg:min-h-0">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/11/infinium-central-1.jpg" alt="Infinium Altitude tower" class="w-full h-full object-cover" loading="lazy" />
                </div>

                <!-- Content -->
                <div class="flex flex-col justify-center lg:py-8">
                    <p class="text-gold font-semibold uppercase tracking-wide text-xs">Location Advantage</p>
                    <h2 class="font-prata text-2xl sm:text-3xl text-[#302F5A] mt-2">Life &amp; Connectivity in Ramanathapuram</h2>

                    <ul class="mt-8 grid grid-cols-2 sm:grid-cols-3 gap-x-8 gap-y-10">

                        <!-- Repeat this <li> for each score. Change the number in two places:
               the "9" and the style="width:90%". -->
                        <li>
                            <span class="w-12 h-12"><img src="https://estatepartners.in/wp-content/uploads/2026/11/connectivity-1.svg" alt=""></span>
                            <h3 class="mt-3 font-semibold text-[#302F5A]">Connectivity</h3>
                            <p class="mt-3 text-[#302F5A]"><span class="text-2xl font-bold">9</span><span class="text-lg font-medium text-[#302F5A]/70">/10</span></p>
                            <div class="mt-2 h-1.5 rounded-full bg-gray-200 overflow-hidden" role="img" aria-label="9 out of 10">
                                <div class="h-full rounded-full bg-[#302F5A]" style="width:90%"></div>
                            </div>
                            <p class="mt-4 text-sm leading-5 text-[#4D5461]">2 minutes off Trichy Road; close to Salem-Kochi Highway & Ukkadam Pollachi bypass</p>
                        </li>

                        <li>
                            <span class="w-12 h-12"><img src="https://estatepartners.in/wp-content/uploads/2026/11/connectivity-6.svg" alt=""></span>
                            <h3 class="mt-3 font-semibold text-[#302F5A]">Education</h3>
                            <p class="mt-3 text-[#302F5A]"><span class="text-2xl font-bold">9</span><span class="text-lg font-medium text-[#302F5A]/70">/10</span></p>
                            <div class="mt-2 h-1.5 rounded-full bg-gray-200 overflow-hidden" role="img" aria-label="9 out of 10">
                                <div class="h-full rounded-full bg-[#302F5A]" style="width:90%"></div>
                            </div>
                            <p class="mt-4 text-sm leading-5 text-[#4D5461]">Multiple reputed schools within 5–10 minutes</p>
                        </li>

                        <li>
                            <span class="w-12 h-12"><img src="https://estatepartners.in/wp-content/uploads/2026/11/connectivity-3.svg" alt=""></span>
                            <h3 class="mt-3 font-semibold text-[#302F5A]">Healthcare</h3>
                            <p class="mt-3 text-[#302F5A]"><span class="text-2xl font-bold">8</span><span class="text-lg font-medium text-[#302F5A]/70">/10</span></p>
                            <div class="mt-2 h-1.5 rounded-full bg-gray-200 overflow-hidden" role="img" aria-label="8 out of 10">
                                <div class="h-full rounded-full bg-[#302F5A]" style="width:80%"></div>
                            </div>
                            <p class="mt-4 text-sm leading-5 text-[#4D5461]">Leading hospitals within
                                10–15 minutes</p>
                        </li>

                        <li>
                            <span class="w-12 h-12"><img src="https://estatepartners.in/wp-content/uploads/2026/11/connectivity-5.svg" alt=""></span>
                            <h3 class="mt-3 font-semibold text-[#302F5A]">Central Location</h3>
                            <p class="mt-3 text-[#302F5A]"><span class="text-2xl font-bold">9</span><span class="text-lg font-medium text-[#302F5A]/70">/10</span></p>
                            <div class="mt-2 h-1.5 rounded-full bg-gray-200 overflow-hidden" role="img" aria-label="9 out of 10">
                                <div class="h-full rounded-full bg-[#302F5A]" style="width:90%"></div>
                            </div>
                            <p class="mt-4 text-sm leading-5 text-[#4D5461]">10 minutes to Race Course and Coimbatore Railway Station</p>
                        </li>

                        <li>
                            <span class="w-12 h-12"><img src="https://estatepartners.in/wp-content/uploads/2026/11/connectivity-4.svg" alt=""></span>
                            <h3 class="mt-3 font-semibold text-[#302F5A]">Lifestyle & Leisure</h3>
                            <p class="mt-3 text-[#302F5A]"><span class="text-2xl font-bold">8</span><span class="text-lg font-medium text-[#302F5A]/70">/10</span></p>
                            <div class="mt-2 h-1.5 rounded-full bg-gray-200 overflow-hidden" role="img" aria-label="8 out of 10">
                                <div class="h-full rounded-full bg-[#302F5A]" style="width:80%"></div>
                            </div>
                            <p class="mt-4 text-sm leading-5 text-[#4D5461]">Close to Smart City Lakes, restaurants, and shopping</p>
                        </li>

                        <li>
                            <span class="w-12 h-12"><img src="https://estatepartners.in/wp-content/uploads/2026/11/connectivity-2.svg" alt=""></span>
                            <h3 class="mt-3 font-semibold text-[#302F5A]">Airport Access</h3>
                            <p class="mt-3 text-[#302F5A]"><span class="text-2xl font-bold">7</span><span class="text-lg font-medium text-[#302F5A]/70">/10</span></p>
                            <div class="mt-2 h-1.5 rounded-full bg-gray-200 overflow-hidden" role="img" aria-label="9 out of 10">
                                <div class="h-full rounded-full bg-[#302F5A]" style="width:70%"></div>
                            </div>
                            <p class="mt-4 text-sm leading-5 text-[#4D5461]">Coimbatore International Airport approximately 20 minutes away</p>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ============ SECTION END ============ -->


    <!-- ======================= Need Guidence ======================= -->
    <section id="about" class="py-16 sm:py-20 lg:py-24 scroll-mt-24">

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div class="flex gap-5 flex-col">
                <div class="container mx-auto mb-6">
                    <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">Who Is It For</p>
                    <h2 class="font-prata text-3xl text-[#302F5A] sm:text-4xl leading-tight">Who Is Infinium Central 16 For?</h2>
                </div>
                <div class="w-full rounded-2xl shadow-lg flex gap-6 items-center p-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/lp-icon-3.svg" alt="Looking for Exclusivity?" class="w-16">

                    <div class="space-y-2">
                        <h3 class="font-semibold text-gold text-lg">Looking for Exclusivity?</h3>
                        <p class="text-[#4D5461]">Own one of only 16 villas in a community
                            built around genuine privacy and scarcity.</p>
                    </div>
                </div>

                <div class="w-full rounded-2xl shadow-lg flex gap-6 items-center p-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/lp-icon-2.svg" alt="Looking to Invest?" class="w-16">

                    <div class="space-y-2">
                        <h3 class="font-semibold text-gold text-lg">Looking to Invest?</h3>
                        <p class="text-[#4D5461]">Own a rare, centrally-located villa asset
                            with a distinctive heritage backstory.</p>
                    </div>
                </div>

                <div class="w-full rounded-2xl shadow-lg flex gap-6 items-center p-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/lp-icon-1.svg" alt="Planning a Family Legacy Home?" class="w-16">

                    <div class="space-y-2">
                        <h3 class="font-semibold text-gold text-lg">Planning a Family Legacy Home?</h3>
                        <p class="text-[#4D5461]">Choose a spacious 4 BHK villa designed to
                            be a long-term family residence.</p>
                    </div>
                </div>
            </div>

            <div class="reveal relative">
                <div class="rounded-2xl overflow-hidden">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/11/infinium-central-1.png" alt="Property agreement signing with Estate Partners guidance" class="w-full h-full min-h-[26.25rem] object-cover" loading="lazy" />
                </div>
                <!-- <div class="absolute -bottom-6 left-5 sm:left-8 bg-ink text-white rounded-2xl px-6 py-5 shadow-xl flex items-center gap-4">
                    <span class="w-12 h-12 rounded-full bg-gold inline-flex items-center justify-center text-xl shrink-0"><i class="fa-solid fa-headset"></i></span>
                    <span>
                        <span class="block font-prata text-2xl leading-none">24/7</span>
                        <span class="block text-xs text-white/70 mt-1 tracking-wide">Buyer support, always</span>
                    </span>
                </div> -->
            </div>

        </div>
    </section>

    <!-- ======================= WHY CHOOSE (Swiper) ======================= -->
    <section class="bg-brand-cream <?php echo esc_attr($section); ?>">
        <div class="<?php echo esc_attr($container); ?>">
            <p class="text-gold font-bold uppercase tracking-[0.18em] text-center text-sm mb-3">Why Us</p>
            <h2 class="reveal <?php echo esc_attr($h2); ?> text-center">Why Infinium Central 16</h2>
            <p class="reveal mt-3 text-center text-sm text-[#444444]">Well-planned plots in prime locations, giving you the perfect foundation to build your dream home and a <b>brighter future</b></p>

            <div class="mt-10 sm:mt-12 !py-2" style="--swiper-theme-color:#b3814e;">
                <div class="grid smg:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php foreach ($why as $i => $item) : ?>
                        <article class="why-card group h-full rounded-2xl border border-ink-line bg-white p-7 text-[#444444] shadow-sm transition-colors duration-300 hover:bg-gold hover:border-gold hover:text-white hover:shadow-xl">
                            <span class="w-16 h-16 rounded-full bg-gold-pale text-gold inline-flex items-center justify-center text-lg transition-colors group-hover:bg-white/20 group-hover:text-white">
                                <img src="<?php echo esc_url($item['icon']); ?>" alt="<?php echo esc_attr($item['title']); ?>" loading="lazy" />
                            </span>
                            <h3 class="mt-5 text-lg font-semibold text-[#302F5A] transition-colors group-hover:text-white"><?php echo esc_html($item['title']); ?></h3>
                            <p class="mt-3 text-sm leading-relaxed"><?php echo esc_html($item['text']); ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>


    <!-- ======================= AMENITIES ======================= -->
    <section id="amenities" class="bg-white py-16 sm:py-20 scroll-mt-28">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-gold font-semibold uppercase tracking-wide text-sm">Lifestyle</p>
                <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] mt-2">50+ Lifestyle Amenities</h2>
            </div>
            <ul class="mt-10 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-5 text-[#6A6A6A] text-center text-lg font-medium">
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/icons-ss-1.svg" alt="" class="w-16 h-16">
                    Swimming Pool
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/icons-ss-17.svg" alt="" class="w-16 h-16">
                    Clubhouse with 50+ Amenities
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/icons-ss-16.svg" alt="" class="w-16 h-16">
                    Mini Theatre
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/icons-ss-15.svg" alt="" class="w-16 h-16">
                    Gym
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/icons-ss-14.svg" alt="" class="w-16 h-16">
                    Party Hall
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/icons-ss-13.svg" alt="" class="w-16 h-16">
                    24x7 CCTV surveillance
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/icons-ss-12.svg" alt="" class="w-16 h-16">
                    Steam Room
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/icons-ss-11.svg" alt="" class="w-16 h-16">
                    Sauna Room
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/icons-ss-10.svg" alt="" class="w-16 h-16">
                    Library
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/icons-ss-9.svg" alt="" class="w-16 h-16">
                    Amphitheater
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/icons-ss-8.svg" alt="" class="w-16 h-16">
                    Meeting Room
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/icons-ss-7.svg" alt="" class="w-16 h-16">
                    Visitors Lounge
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/icons-ss-2.svg" alt="" class="w-16 h-16">
                    Kids Play Area
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/icons-ss-3.svg" alt="" class="w-16 h-16">
                    Lawn Mound
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/icons-ss-1.svg" alt="" class="w-16 h-16">
                    Stepped Reflective Pool
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/icons-ss-4.svg" alt="" class="w-16 h-16">
                    Caretaker's Room
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/icons-ss-5.svg" alt="" class="w-16 h-16">
                    Black Road Top
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/icons-ss-6.svg" alt="" class="w-16 h-16">
                    Leisure
                </li>
            </ul>
        </div>
    </section>

    <!-- ======================= GALLERY ======================= -->
    <section id="gallery" class="py-16 sm:py-20 scroll-mt-28">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-gold font-semibold uppercase tracking-wide text-sm">INFINIUM ALTITUDE</p>
                <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] mt-2">From Our Gallery</h2>
            </div>
            <div class="swiper apartment-gallery-swiper mt-10" style="--swiper-theme-color:#b3814e;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide !h-auto">
                        <img src="https://estatepartners.in/wp-content/uploads/2026/11/infinium-cental-gall-1.png" alt="Infinium Altitude gallery image" class="rounded-2xl w-full aspect-[4/2] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="https://estatepartners.in/wp-content/uploads/2026/11/infinium-cental-gall-2.png" alt="Infinium Altitude gallery image" class="rounded-2xl w-full aspect-[4/2] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="https://estatepartners.in/wp-content/uploads/2026/11/infinium-cental-gall-3.png" alt="Infinium Altitude gallery image" class="rounded-2xl w-full aspect-[4/2] object-cover" loading="lazy" />
                    </div>
                    <div class="swiper-slide !h-auto">
                        <img src="https://estatepartners.in/wp-content/uploads/2026/11/infinium-cental-gall-1.png" alt="Infinium Altitude gallery image" class="rounded-2xl w-full aspect-[4/2] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="https://estatepartners.in/wp-content/uploads/2026/11/infinium-cental-gall-2.png" alt="Infinium Altitude gallery image" class="rounded-2xl w-full aspect-[4/2] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="https://estatepartners.in/wp-content/uploads/2026/11/infinium-cental-gall-3.png" alt="Infinium Altitude gallery image" class="rounded-2xl w-full aspect-[4/2] object-cover" loading="lazy" />
                    </div>
                </div>
                <div class="swiper-pagination !static mt-8"></div>
            </div>
        </div>
    </section>

    <!-- ======================= Master Plan ======================= -->
    <section id="about" class="py-16 sm:py-20  bg-[#FCF7F3] lg:py-24 scroll-mt-24">
        <div class="container mx-auto text-center">
            <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] mt-2 mb-6">MASTER PLAN</h2>
            <img src="http://estatepartners.in/wp-content/uploads/2026/11/infinium-central-16-1.jpeg" alt="" class="mx-auto">
        </div>
    </section>

    <!-- ======================= Floor Plan ======================= -->
    <section id="about" class="py-16 sm:py-20  bg-[#FCF7F3] lg:py-24 scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">
            <h2 class="font-prata text-2xl sm:text-3xl text-[#302F5A] text-center uppercase">Floor Layout Plans</h2>

            <!-- LEVEL 1: villa pills -->
            <div role="tablist" data-tabs aria-label="Villa" class="mt-8 flex overflow-auto gap-3 sm:gap-5 overflow-x-auto py-2 [scrollbar-width:none]">
                <button type="button" role="tab" id="tab-villa-1" aria-controls="villa-1" aria-selected="true" class="shrink-0 rounded-full border border-gray-200 bg-white shadow-sm px-8 sm:px-10 py-2.5 text-sm font-medium text-[#302F5A] transition-colors aria-selected:bg-[#302F5A] aria-selected:text-white aria-selected:border-[#302F5A]">Villa 1</button>
                <button type="button" role="tab" id="tab-villa-2" aria-controls="villa-2" aria-selected="false" class="shrink-0 rounded-full border border-gray-200 bg-white shadow-sm px-8 sm:px-10 py-2.5 text-sm font-medium text-[#302F5A] transition-colors aria-selected:bg-[#302F5A] aria-selected:text-white aria-selected:border-[#302F5A]">Villa 2</button>
                <button type="button" role="tab" id="tab-villa-3" aria-controls="villa-3" aria-selected="false" class="shrink-0 rounded-full border border-gray-200 bg-white shadow-sm px-8 sm:px-10 py-2.5 text-sm font-medium text-[#302F5A] transition-colors aria-selected:bg-[#302F5A] aria-selected:text-white aria-selected:border-[#302F5A]">Villa 3</button>
                <button type="button" role="tab" id="tab-villa-4" aria-controls="villa-4" aria-selected="false" class="shrink-0 rounded-full border border-gray-200 bg-white shadow-sm px-8 sm:px-10 py-2.5 text-sm font-medium text-[#302F5A] transition-colors aria-selected:bg-[#302F5A] aria-selected:text-white aria-selected:border-[#302F5A]">Villa 4</button>
                <button type="button" role="tab" id="tab-villa-5" aria-controls="villa-5" aria-selected="false" class="shrink-0 rounded-full border border-gray-200 bg-white shadow-sm px-8 sm:px-10 py-2.5 text-sm font-medium text-[#302F5A] transition-colors aria-selected:bg-[#302F5A] aria-selected:text-white aria-selected:border-[#302F5A]">Villa 5</button>
                <button type="button" role="tab" id="tab-villa-6" aria-controls="villa-6" aria-selected="false" class="shrink-0 rounded-full border border-gray-200 bg-white shadow-sm px-8 sm:px-10 py-2.5 text-sm font-medium text-[#302F5A] transition-colors aria-selected:bg-[#302F5A] aria-selected:text-white aria-selected:border-[#302F5A]">Villa 6</button>
                <button type="button" role="tab" id="tab-villa-7" aria-controls="villa-7" aria-selected="false" class="shrink-0 rounded-full border border-gray-200 bg-white shadow-sm px-8 sm:px-10 py-2.5 text-sm font-medium text-[#302F5A] transition-colors aria-selected:bg-[#302F5A] aria-selected:text-white aria-selected:border-[#302F5A]">Villa 7</button>
                <button type="button" role="tab" id="tab-villa-9" aria-controls="villa-9" aria-selected="false" class="shrink-0 rounded-full border border-gray-200 bg-white shadow-sm px-8 sm:px-10 py-2.5 text-sm font-medium text-[#302F5A] transition-colors aria-selected:bg-[#302F5A] aria-selected:text-white aria-selected:border-[#302F5A]">Villa 9-19</button>
            </div>

            <div role="tabpanel" id="villa-1" aria-labelledby="tab-villa-1" hidden>
                <!-- LEVEL 2: sizes for Villa 1 -->
                <div role="tablist" data-tabs aria-label="Villa 1 sizes" class="mt-6 flex overflow-x-auto border-b border-gray-300 [scrollbar-width:none]">
                    <button type="button" role="tab" id="tab-villa-1-1" aria-controls="villa-1-1" aria-selected="true" class="flex-1 min-w-[10.625rem] px-3 py-3 text-xs text-[#444444] border-b-2 border-transparent -mb-px transition-colors aria-selected:border-gold aria-selected:text-[#302F5A] aria-selected:font-semibold">Villa 1</button>
                </div>

                <div role="tabpanel" id="villa-1-1" aria-labelledby="tab-villa-1-1" class="relative mt-5 bg-[#faf6f1] p-3 sm:p-6 rounded-sm">
                    <img src="http://estatepartners.in/wp-content/uploads/2026/11/infinium-central-16-9.jpeg" alt="Villa 1 floor plan, 2537 sq.ft" class="mx-auto w-full max-w-4xl h-auto" loading="lazy" />
                </div>
            </div>

            <div role="tabpanel" id="villa-2" aria-labelledby="tab-villa-2" hidden>
                <!-- LEVEL 2: sizes for Villa 2 -->
                <div role="tablist" data-tabs aria-label="Villa 2 sizes" class="mt-6 flex overflow-x-auto border-b border-gray-300 [scrollbar-width:none]">
                    <button type="button" role="tab" id="tab-villa-2-1" aria-controls="villa-2-1" aria-selected="true" class="flex-1 min-w-[10.625rem] px-3 py-3 text-xs text-[#444444] border-b-2 border-transparent -mb-px transition-colors aria-selected:border-gold aria-selected:text-[#302F5A] aria-selected:font-semibold">Villa 2</button>
                </div>

                <div role="tabpanel" id="villa-2-1" aria-labelledby="tab-villa-2-1" class="relative mt-5 bg-[#faf6f1] p-3 sm:p-6 rounded-sm">
                    <img src="http://estatepartners.in/wp-content/uploads/2026/11/infinium-central-16-8.jpeg" alt="Villa 2 floor plan, 2964 sq.ft" class="mx-auto w-full max-w-4xl h-auto" loading="lazy" />
                </div>
            </div>

            <div role="tabpanel" id="villa-3" aria-labelledby="tab-villa-3">
                <!-- LEVEL 2: sizes for Villa 3 -->
                <div role="tablist" data-tabs aria-label="Villa 3 sizes" class="mt-6 flex overflow-x-auto border-b border-gray-300 [scrollbar-width:none]">
                    <button type="button" role="tab" id="tab-villa-3-1" aria-controls="villa-3-1" aria-selected="true" class="flex-1 min-w-[10.625rem] px-3 py-3 text-xs text-[#444444] border-b-2 border-transparent -mb-px transition-colors aria-selected:border-gold aria-selected:text-[#302F5A] aria-selected:font-semibold">Villa 3</button>
                </div>

                <div role="tabpanel" id="villa-3-1" aria-labelledby="tab-villa-3-1" class="relative mt-5 bg-[#faf6f1] p-3 sm:p-6 rounded-sm">
                    <img src="http://estatepartners.in/wp-content/uploads/2026/11/infinium-central-16-7.jpeg" alt="Villa 3 floor plan, 2537 sq.ft" class="mx-auto w-full max-w-4xl h-auto" loading="lazy" />
                </div>
            </div>

            <div role="tabpanel" id="villa-4" aria-labelledby="tab-villa-4" hidden>
                <!-- LEVEL 2: sizes for Villa 4 -->
                <div role="tablist" data-tabs aria-label="Villa 4 sizes" class="mt-6 flex overflow-x-auto border-b border-gray-300 [scrollbar-width:none]">
                    <button type="button" role="tab" id="tab-villa-4-1" aria-controls="villa-4-1" aria-selected="true" class="flex-1 min-w-[10.625rem] px-3 py-3 text-xs text-[#444444] border-b-2 border-transparent -mb-px transition-colors aria-selected:border-gold aria-selected:text-[#302F5A] aria-selected:font-semibold">Villa 4</button>
                </div>

                <div role="tabpanel" id="villa-4-1" aria-labelledby="tab-villa-4-1" class="relative mt-5 bg-[#faf6f1] p-3 sm:p-6 rounded-sm">
                    <img src="http://estatepartners.in/wp-content/uploads/2026/11/infinium-central-16-6.jpeg" alt="Villa 4 floor plan, 3850 sq.ft" class="mx-auto w-full max-w-4xl h-auto" loading="lazy" />
                </div>
            </div>

            <div role="tabpanel" id="villa-5" aria-labelledby="tab-villa-5" hidden>
                <!-- LEVEL 2: sizes for Villa 5 -->
                <div role="tablist" data-tabs aria-label="Villa 5 sizes" class="mt-6 flex overflow-x-auto border-b border-gray-300 [scrollbar-width:none]">
                    <button type="button" role="tab" id="tab-villa-5-1" aria-controls="villa-5-1" aria-selected="true" class="flex-1 min-w-[10.625rem] px-3 py-3 text-xs text-[#444444] border-b-2 border-transparent -mb-px transition-colors aria-selected:border-gold aria-selected:text-[#302F5A] aria-selected:font-semibold">Villa 5</button>
                </div>

                <div role="tabpanel" id="villa-5-1" aria-labelledby="tab-villa-5-1" class="relative mt-5 bg-[#faf6f1] p-3 sm:p-6 rounded-sm">
                    <img src="http://estatepartners.in/wp-content/uploads/2026/11/infinium-central-16-5.jpeg" alt="Villa 5 floor plan, 3961 sq.ft" class="mx-auto w-full max-w-4xl h-auto" loading="lazy" />
                </div>
            </div>

            <div role="tabpanel" id="villa-6" aria-labelledby="tab-villa-6" hidden>
                <!-- LEVEL 2: sizes for Villa 5 -->
                <div role="tablist" data-tabs aria-label="Villa 5 sizes" class="mt-6 flex overflow-x-auto border-b border-gray-300 [scrollbar-width:none]">
                    <button type="button" role="tab" id="tab-villa-6-1" aria-controls="villa-6-1" aria-selected="true" class="flex-1 min-w-[10.625rem] px-3 py-3 text-xs text-[#444444] border-b-2 border-transparent -mb-px transition-colors aria-selected:border-gold aria-selected:text-[#302F5A] aria-selected:font-semibold">Villa 5</button>
                </div>

                <div role="tabpanel" id="villa-6-1" aria-labelledby="tab-villa-6-1" class="relative mt-5 bg-[#faf6f1] p-3 sm:p-6 rounded-sm">
                    <img src="hhttp://estatepartners.in/wp-content/uploads/2026/11/infinium-central-16-4.jpeg" alt="Villa 5 floor plan, 3961 sq.ft" class="mx-auto w-full max-w-4xl h-auto" loading="lazy" />
                </div>
            </div>

            <div role="tabpanel" id="villa-7" aria-labelledby="tab-villa-7" hidden>
                <!-- LEVEL 2: sizes for Villa 5 -->
                <div role="tablist" data-tabs aria-label="Villa 5 sizes" class="mt-6 flex overflow-x-auto border-b border-gray-300 [scrollbar-width:none]">
                    <button type="button" role="tab" id="tab-villa-7-1" aria-controls="villa-7-1" aria-selected="true" class="flex-1 min-w-[10.625rem] px-3 py-3 text-xs text-[#444444] border-b-2 border-transparent -mb-px transition-colors aria-selected:border-gold aria-selected:text-[#302F5A] aria-selected:font-semibold">Villa 5</button>
                </div>

                <div role="tabpanel" id="villa-7-1" aria-labelledby="tab-villa-7-1" class="relative mt-5 bg-[#faf6f1] p-3 sm:p-6 rounded-sm">
                    <img src="http://estatepartners.in/wp-content/uploads/2026/11/infinium-central-16-3.jpeg" alt="Villa 5 floor plan, 3961 sq.ft" class="mx-auto w-full max-w-4xl h-auto" loading="lazy" />
                </div>
            </div>

            <div role="tabpanel" id="villa-9" aria-labelledby="tab-villa-9" hidden>
                <!-- LEVEL 2: sizes for Villa 5 -->
                <div role="tablist" data-tabs aria-label="Villa 5 sizes" class="mt-6 flex overflow-x-auto border-b border-gray-300 [scrollbar-width:none]">
                    <button type="button" role="tab" id="tab-villa-9-1" aria-controls="villa-9-1" aria-selected="true" class="flex-1 min-w-[10.625rem] px-3 py-3 text-xs text-[#444444] border-b-2 border-transparent -mb-px transition-colors aria-selected:border-gold aria-selected:text-[#302F5A] aria-selected:font-semibold">Villa 5</button>
                </div>

                <div role="tabpanel" id="villa-9-1" aria-labelledby="tab-villa-9-1" class="relative mt-5 bg-[#faf6f1] p-3 sm:p-6 rounded-sm">
                    <img src="http://estatepartners.in/wp-content/uploads/2026/11/infinium-central-16-2.jpeg" alt="Villa 5 floor plan, 3961 sq.ft" class="mx-auto w-full max-w-4xl h-auto" loading="lazy" />
                </div>
            </div>
        </div>
    </section>
    <!-- ============ SECTION END ============ -->

    <!-- ============ TAB SCRIPT (works for any number of tab groups, nested or not) ============ -->
    <script>
        document.querySelectorAll('[data-tabs]').forEach(function(list) {
            var tabs = Array.prototype.slice.call(list.querySelectorAll(':scope > [role=tab]'));

            function select(tab) {
                tabs.forEach(function(t) {
                    var on = t === tab;
                    t.setAttribute('aria-selected', on);
                    t.tabIndex = on ? 0 : -1;
                    var panel = document.getElementById(t.getAttribute('aria-controls'));
                    if (panel) panel.hidden = !on;
                });
            }

            tabs.forEach(function(tab, i) {
                tab.addEventListener('click', function() {
                    select(tab);
                });
                tab.addEventListener('keydown', function(e) {
                    var n = e.key === 'ArrowRight' ? i + 1 : e.key === 'ArrowLeft' ? i - 1 : null;
                    if (n === null) return;
                    var next = tabs[(n + tabs.length) % tabs.length];
                    next.focus();
                    select(next);
                    e.preventDefault();
                });
            });

            // Start on the tab marked aria-selected="true" (or the first one)
            select(tabs.filter(function(t) {
                return t.getAttribute('aria-selected') === 'true';
            })[0] || tabs[0]);
        });
    </script>

    <!-- Price tables -->
    <section class="py-16 sm:py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-5xl mt-10 grid gap-8">
                <div class="text-center">
                    <p class="text-gold font-semibold uppercase tracking-wide text-sm">Propertyss</p>
                    <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] mt-2 mb-6">Villa Specifications</h2>

                    <!-- Main Outer Container -->
                    <div class="w-full max-w-5xl mx-auto bg-white rounded-lg shadow-sm overflow-hidden border border-[#B3814E80]">

                        <!-- Header Bar (Accordion Trigger) -->
                        <button
                            id="accordionHeader"
                            type="button"
                            class="w-full bg-navyHeader bg-[#28284c] text-white py-3.5 px-6 flex items-center justify-between cursor-pointer transition-colors focus:outline-none"
                            aria-expanded="true"
                            aria-controls="specificationsBody">
                            <span class="w-4"></span> <!-- Spacer to balance layout -->
                            <span class="text-base sm:text-lg font-bold tracking-wide">Specifications</span>
                            <i id="chevronIcon" class="fa-solid fa-caret-down text-base chevron-icon"></i>
                        </button>

                        <!-- Collapsible Body Content -->
                        <div id="specificationsBody" class="accordion-content p-3 sm:p-4 bg-white">

                            <!-- Bordered Wrapper around Table Sections -->
                            <div class="border border-[#B3814E80] rounded-md overflow-hidden text-sm sm:text-base">

                                <!-- ================= SECTION 1: STRUCTURE ================= -->
                                <div class="bg-[#FCF7F3] py-2.5 px-4 text-center font-bold text-[#302F5A] tracking-wider text-xs sm:text-sm border-b border-[#B3814E80] uppercase">
                                    STRUCTURE
                                </div>

                                <div class="divide-y divide-tableBorder border-b border-[#B3814E80]">
                                    <!-- Row 1 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12 border-[#B3814E80]">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-[#302F5A] md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Floors
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            Ground + 1st Floor (2nd Floor in Villa 6 & 7)
                                        </div>
                                    </div>

                                    <!-- Row 2 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12 border-[#B3814E80]">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-[#302F5A] md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Structure system
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            RCC Framed Structure - Earthquake resistant (seismic compliant - Zone 3)
                                        </div>
                                    </div>

                                    <!-- Row 3 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12 border-[#B3814E80]">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-[#302F5A] md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Masonry
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            200mm external walls & 100mm internal walls
                                        </div>
                                    </div>

                                    <!-- Row 4 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12 border-[#B3814E80]">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-[#302F5A] md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Floor to Floor Height
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            3250 mm (incl. slab)
                                        </div>
                                    </div>

                                    <!-- Row 5 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12 border-[#B3814E80]">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-[#302F5A] md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            ATT
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            Anti-termite treatment will be provided
                                        </div>
                                    </div>
                                </div>

                                <!-- ================= SECTION 2: FLOOR FINISHES ================= -->
                                <div class="bg-[#FCF7F3] py-2.5 px-4 text-center font-bold text-[#302F5A] tracking-wider text-xs sm:text-sm border-b border-[#B3814E80] uppercase">
                                    FLOOR FINISHES
                                </div>

                                <div class="divide-y divide-tableBorder border-b border-[#B3814E80]">
                                    <!-- Row 1 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12 border-[#B3814E80]">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-[#302F5A] md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Living / Dining
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            Premium range 1800mm x 1200mm vitrified tiles
                                        </div>
                                    </div>

                                    <!-- Row 2 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12 border-[#B3814E80]">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-[#302F5A] md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Bedrooms & Kitchen
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            Premium range 1200mm x 600mm vitrified tiles
                                        </div>
                                    </div>

                                    <!-- Row 3 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12 border-[#B3814E80]">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-[#302F5A] md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Outdoor Deck Area
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            Wood finish deck tiles
                                        </div>
                                    </div>

                                    <!-- Row 4 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12 border-[#B3814E80]">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-[#302F5A] md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Balconies, Toilets & Utility
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            Anti-skid tiles
                                        </div>
                                    </div>

                                    <!-- Row 5 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12 border-[#B3814E80]">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-[#302F5A] md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Car Park
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            Durable parking tiles
                                        </div>
                                    </div>

                                    <!-- Row 6 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12 border-[#B3814E80]">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-[#302F5A] md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Open Terrace
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            Weather resistant pressed clay tiles
                                        </div>
                                    </div>
                                </div>

                                <!-- ================= SECTION 3: WALL & CEILING FINISHES ================= -->
                                <div class="bg-[#FCF7F3] py-2.5 px-4 text-center font-bold text-[#302F5A] tracking-wider text-xs sm:text-sm border-b border-[#B3814E80] uppercase">
                                    WALL & CEILING FINISHES
                                </div>

                                <div class="divide-y divide-tableBorder">
                                    <!-- Row 1 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12 border-[#B3814E80]">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-[#302F5A] md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Internal Walls & Ceilings
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            2 coats of putty, 1 coat of primer & 2 coats of premium emulsion paint
                                        </div>
                                    </div>

                                    <!-- Row 2 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12 border-[#B3814E80]">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-[#302F5A] md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Exterior & Elevation
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            Weather resistant texture finish
                                        </div>
                                    </div>

                                    <!-- Row 3 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12 border-[#B3814E80]">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-[#302F5A] md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Bathrooms
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            Wall dado – upto 2100mm from FFLh
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="text-center">
                    <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] mt-2 mb-6">Configuration</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm border border-ink-line rounded-xl overflow-hidden">
                            <thead class="bg-[#302F5A] text-white">
                                <tr>
                                    <th class="px-4 py-3">BHK</th>
                                    <th class="px-4 py-3">UNIT TYPE</th>
                                    <th class="px-4 py-3">LAND AREA</th>
                                    <th class="px-4 py-3">SUPER BUILT - UP AREA</th>
                                    <th class="px-4 py-3">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t border-ink-line bg-brand-cream">
                                    <td class="px-4 py-3">4 BHK</td>
                                    <td class="px-4 py-3">Villa</td>
                                    <td class="px-4 py-3">7.4 to 9.4 Cents</td>
                                    <td class="px-4 py-3">3600 sq.ft to 4300 sq.ft</td>
                                    <td class="px-4 py-3">Rs.1.5 Crs Onwards*</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-center">
        <div class="<?php echo esc_attr($container); ?> max-w-5xl">
            <h2 class="reveal <?php echo esc_attr($h2); ?> text-center">Location Benefits</h2>
            <p class="reveal mt-3 text-center text-sm text-[#444444]">Infinium Altitude is strategically situated on Sathy Road, Ganapathy, one of Coimbatore's established residential corridors. Its proximity to major IT parks, educational institutions, and healthcare facilities makes it an ideal choice for both homeowners and investors.</p>
        </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4645.876292686811!2d77.0107783!3d10.9926756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859e249c8c70f%3A0x571069b4dbb96171!2sINFINIUM%20CENTRAL%2016!5e1!3m2!1sen!2sin!4v1794661931477!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" class="block w-full h-[20rem] sm:h-[26.25rem] lg:h-[32.5rem] border-0 mt-6"></iframe>
    </section>

    <!-- ======================= PROCESS (Swiper) ======================= -->
    <section class="<?php echo esc_attr($section); ?>">
        <div class="<?php echo esc_attr($container); ?>">
            <div class="reveal text-center">
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3"><?php esc_html_e('Process', $td); ?></p>
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('Buyers journey', $td); ?></h2>
                <p class="mt-3 max-w-2xl mx-auto text-sm sm:text-base text-[#444444]"><?php esc_html_e('A simple, transparent approach designed to make your home-buying journey smooth and hassle-free.', $td); ?></p>
            </div>

            <div class="swiper process-swiper mt-10 sm:mt-14" style="--swiper-theme-color:#b3814e;">
                <div class="swiper-wrapper">
                    <?php foreach ($steps as $i => $step) : ?>
                        <div class="swiper-slide !flex flex-col text-center !h-auto shadow-sm last:border-r-0 px-5 text-[#444444]">
                            <p class="text-xs font-bold tracking-[0.18em] text-[#302F5A] "><?php echo esc_html(sprintf('STEP %d', $i + 1)); ?></p>
                            <span class="rounded-full inline-flex item-center justify-center p-3 bg-white shadow-sm w-14 h-14 mx-auto mt-4">
                                <img src="<?php echo esc_url($step['icon']); ?>" alt="<?php echo esc_attr($step['title']); ?>" class="w-full h-full" loading="lazy" />
                            </span>
                            <h3 class="mt-4 text-sm font-bold uppercase tracking-wide text-[#302F5A]"><?php echo esc_html($step['title']); ?></h3>
                            <p class="mt-3 text-sm leading-relaxed pb-3"><?php echo esc_html($step['text']); ?></p>

                            <div class="mt-auto border-b-2 border-[#302F5A] h-2"></div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination !static mt-8"></div>
            </div>
        </div>
    </section>

    <section class="<?php echo esc_attr($section); ?> bg-[#FCF7F3]">
        <div class="<?php echo esc_attr($container); ?>">

            <p class="text-gold font-bold uppercase tracking-[0.18em] text-center text-sm mb-3">Villa Ownership vs Investment</p>
            <h2 class="reveal <?php echo esc_attr($h2); ?> text-center">A Family Home or a Rare Investment — Either Way, You're Covered</h2>
            <p class="reveal mt-3 text-center text-sm text-[#444444]">Create the home you’ve always dreamed of or make a smart investment for a brighter future. Find the perfect space that grows with your goals.</p>

            <!-- Cards Container -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto text-left mt-6">

                <!-- Card 1: Ready to Move (Navy Header) -->
                <div class="bg-[#302F5A] p-4 sm:p-5 rounded-2xl shadow-sm flex flex-col">
                    <!-- Header -->
                    <div class="flex items-center space-x-3.5 mb-4 px-2 pt-1">
                        <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center shrink-0 shadow-sm">
                            <i class="fa-solid fa-house text-[#302F5A] text-base"></i>
                        </div>
                        <h3 class="text-white font-bold text-base sm:text-lg tracking-wider uppercase">
                            READY TO MOVE
                        </h3>
                    </div>

                    <!-- Inner White Card Content -->
                    <div class="bg-white rounded-xl overflow-hidden divide-y divide-gold border border-gold flex-1">
                        <!-- Item 1 -->
                        <div class="flex items-start space-x-3.5 p-4 sm:p-4.5">
                            <i class="fa-solid fa-circle-check text-gold text-base mt-0.5 shrink-0"></i>
                            <span class="text-xs sm:text-sm text-gray-700 font-medium leading-snug">
                                Choose a spacious 4 BHK villa with a private garden
                            </span>
                        </div>

                        <!-- Item 2 -->
                        <div class="flex items-start space-x-3.5 p-4 sm:p-4.5">
                            <i class="fa-solid fa-circle-check text-gold text-base mt-0.5 shrink-0"></i>
                            <span class="text-xs sm:text-sm text-gray-700 font-medium leading-snug">
                                Move into a home designed for indoor outdoor living
                            </span>
                        </div>

                        <!-- Item 3 -->
                        <div class="flex items-start space-x-3.5 p-4 sm:p-4.5">
                            <i class="fa-solid fa-circle-check text-gold text-base mt-0.5 shrink-0"></i>
                            <span class="text-xs sm:text-sm text-gray-700 font-medium leading-snug">
                                Enjoy 100% power backup and premium fittings from day one
                            </span>
                        </div>

                        <!-- Item 4 -->
                        <div class="flex items-start space-x-3.5 p-4 sm:p-4.5">
                            <i class="fa-solid fa-circle-check text-gold text-base mt-0.5 shrink-0"></i>
                            <span class="text-xs sm:text-sm text-gray-700 font-medium leading-snug">
                                Create a long-term family asset with genuine heritage value
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Invest For The Future (Gold Header) -->
                <div class="bg-gold p-4 sm:p-5 rounded-2xl shadow-sm flex flex-col">
                    <!-- Header -->
                    <div class="flex items-center space-x-3.5 mb-4 px-2 pt-1">
                        <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center shrink-0 shadow-sm">
                            <i class="fa-solid fa-hand-holding-dollar text-gold text-base"></i>
                        </div>
                        <h3 class="text-white font-bold text-base sm:text-lg tracking-wider uppercase">
                            INVEST FOR THE FUTURE
                        </h3>
                    </div>

                    <!-- Inner White Card Content -->
                    <div class="bg-white rounded-xl overflow-hidden divide-y divide-gold border border-gold flex-1">
                        <!-- Item 1 -->
                        <div class="flex items-start space-x-3.5 p-4 sm:p-4.5">
                            <i class="fa-solid fa-circle-check text-gold text-base mt-0.5 shrink-0"></i>
                            <span class="text-xs sm:text-sm text-gray-700 font-medium leading-snug">
                                Own one of only 16 villas in a scarce, central development
                            </span>
                        </div>

                        <!-- Item 2 -->
                        <div class="flex items-start space-x-3.5 p-4 sm:p-4.5">
                            <i class="fa-solid fa-circle-check text-gold text-base mt-0.5 shrink-0"></i>
                            <span class="text-xs sm:text-sm text-gray-700 font-medium leading-snug">
                                A distinctive heritage backstory adds long-term appeal
                            </span>
                        </div>

                        <!-- Item 3 -->
                        <div class="flex items-start space-x-3.5 p-4 sm:p-4.5">
                            <i class="fa-solid fa-circle-check text-gold text-base mt-0.5 shrink-0"></i>
                            <span class="text-xs sm:text-sm text-gray-700 font-medium leading-snug">
                                Potential long-term appreciation in a low-density community
                            </span>
                        </div>

                        <!-- Item 4 -->
                        <div class="flex items-start space-x-3.5 p-4 sm:p-4.5">
                            <i class="fa-solid fa-circle-check text-gold text-base mt-0.5 shrink-0"></i>
                            <span class="text-xs sm:text-sm text-gray-700 font-medium leading-snug">
                                Resale potential subject to market conditions
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- ======================= LAYOUT / FLOOR PLANS ======================= -->
    <!-- <section id="layout" class="py-16 sm:py-20 scroll-mt-28">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-gold font-semibold uppercase tracking-wide text-sm">Floor Plans</p>
                <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] mt-2">Choose Your Layout</h2>
            </div>

            Tower tabs
            <div class="mt-8 flex flex-wrap justify-center gap-3">
                <button type="button" class="fp-type px-5 py-2 rounded-full text-sm font-medium bg-gold text-white" data-fp-type="executive">Executive Tower</button>
                <button type="button" class="fp-type px-5 py-2 rounded-full text-sm font-medium bg-white text-[#302F5A] border border-ink-line" data-fp-type="signature">Signature Tower</button>
            </div>

            Executive Tower
            <div class="fp-panel mt-10" data-fp-panel="executive">
                <div class="flex flex-wrap gap-3 mb-6">
                    <button type="button" class="fp-plan px-4 py-2 rounded-md text-sm font-medium bg-gold text-white" data-fp-plan="<?php echo esc_url($apartment_img_url . 'plan-1.jpg'); ?>">2 BHK – 2537 sq.ft</button>
                    <button type="button" class="fp-plan px-4 py-2 rounded-md text-sm font-medium bg-white text-[#302F5A] border border-ink-line" data-fp-plan="<?php echo esc_url($apartment_img_url . 'plan-2.jpg'); ?>">3 BHK – 3764 sq.ft</button>
                    <button type="button" class="fp-plan px-4 py-2 rounded-md text-sm font-medium bg-white text-[#302F5A] border border-ink-line" data-fp-plan="<?php echo esc_url($apartment_img_url . 'plan-3.jpg'); ?>">3 BHK – 2964 sq.ft</button>
                </div>
                <img src="<?php echo esc_url($apartment_img_url . 'plan-1.jpg'); ?>" alt="Floor plan" class="fp-image w-full max-w-3xl mx-auto rounded-2xl border border-ink-line" />
            </div>

            Signature Tower
            <div class="fp-panel mt-10 hidden" data-fp-panel="signature">
                <div class="flex flex-wrap gap-3 mb-6">
                    <button type="button" class="fp-plan px-4 py-2 rounded-md text-sm font-medium bg-gold text-white" data-fp-plan="<?php echo esc_url($apartment_img_url . 'plan-4.jpg'); ?>">3.5 BHK – 3850 sq.ft</button>
                    <button type="button" class="fp-plan px-4 py-2 rounded-md text-sm font-medium bg-white text-[#302F5A] border border-ink-line" data-fp-plan="<?php echo esc_url($apartment_img_url . 'plan-5.jpg'); ?>">4 BHK – 3961 sq.ft</button>
                </div>
                <img src="<?php echo esc_url($apartment_img_url . 'plan-4.jpg'); ?>" alt="Floor plan" class="fp-image w-full max-w-3xl mx-auto rounded-2xl border border-ink-line" />
            </div>
        </div>
    </section> -->

    <!-- ======================= Need Guidence ======================= -->
    <section id="about" class="py-16 sm:py-20 lg:py-24 scroll-mt-24">
        <div class="container mx-auto text-center mb-6">
            <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">LATEST VILLA PRICE</p>
            <h2 class="font-prata text-3xl text-[#302F5A] sm:text-4xl leading-tight">Get the Latest Infinium Central 16 Price</h2>
            <!-- <p class="mt-4 max-w-4xl mx-auto text-[#444444] leading-relaxed">Buying property is a major decision. You don't have to figure it out alone. Tell us what you are looking for — your preferred location,
                property type, budget and purpose — and our team can help you shortlist suitable projects in Coimbatore.</p> -->
        </div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <div class="grid grid-cols-2 bg-[#FCF7F3] p-5 sm:p-8 rounded-2xl border border-[#B3814E80] gap-6">
                <h2 class="]text-gold font-prata text-xl lg:text-2xl font-semibold text-center col-span-2">Plot prices can vary based on:</h2>

                <div class="rounded-2xl border border-[#B3814E80] bg-white flex text-center flex-col gap-4 items-center text-[#302F5A] p-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-4.svg" alt="" class="w-14 h-14">
                    <p> Plot size within the 7.4–9.4 cent range</p>
                </div>

                <div class="rounded-2xl border border-[#B3814E80] bg-white flex text-center flex-col gap-4 items-center text-[#302F5A] p-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-3.svg" alt="" class="w-14 h-14">
                    <p>Floor configuration (G+1 / G+2)</p>
                </div>

                <div class="rounded-2xl border border-[#B3814E80] bg-white flex text-center flex-col gap-4 items-center text-[#302F5A] p-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-1.svg" alt="" class="w-14 h-14">
                    <p>Villa position within the layout</p>
                </div>

                <div class="rounded-2xl border border-[#B3814E80] bg-white flex text-center flex-col gap-4 items-center text-[#302F5A] p-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-2.svg" alt="" class="w-14 h-14">
                    <p>Current offers</p>
                </div>

                <div class="col-span-2">
                    <?php echo do_shortcode('[wpforms id="41"]'); ?>
                </div>
            </div>

            <div class="reveal relative rounded-2xl overflow-hidden h-full min-h-[26.25rem] bg-cover bg-center" style="background-image: url('https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-7.png');">
                <!-- <img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-7.png" alt="Property agreement signing with Estate Partners guidance" class="w-full h-full min-h-[26.25rem] object-cover" loading="lazy" /> -->
            </div>
        </div>
    </section>

    <!-- ======================= TESTIMONIALS ======================= -->
    <?php get_template_part('template-parts/template-testimonials'); ?>

    <!-- ============ Video SECTION START ============ -->
    <section id="testimonial-videos" class="bg-brand-cream py-12 sm:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center">
                <p class="text-gold font-semibold uppercase tracking-wide text-xs">Testimonial Videos</p>
                <h2 class="font-prata text-2xl sm:text-3xl lg:text-4xl text-[#302F5A] mt-2">Trusted By Families Across Coimbatore</h2>
            </div>

            <div class="swiper testimonials-video-swiper mt-8 sm:mt-10">
                <div class="swiper-wrapper">

                    <!-- Slide 1: put the YouTube video ID (the part after ?v=) in data-video-id and in the thumbnail URL.
             To use your own thumbnail, change the <img src> to any image. -->
                    <div class="swiper-slide rounded-2xl overflow-hidden">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Fdfytk0EofE?si=qzg9-KnIaoiFL231" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <!-- Slide 2: put the YouTube video ID (the part after ?v=) in data-video-id and in the thumbnail URL.
             To use your own thumbnail, change the <img src> to any image. -->
                    <div class="swiper-slide rounded-2xl overflow-hidden">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/vrYe80LRfzY?si=u8U1sKWo26O3p61f" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                </div>
                <!-- Dots (static, sits under the slides) -->
                <div class="video-pagination mt-8 flex justify-center gap-2"></div>
            </div>

        </div>
    </section>

    <!-- Site Visit -->
    <section id="about" class="pt-16 sm:pt-20 lg:pt-24 scroll-mt-24">
        <div class="container relative mx-auto rounded-2xl overflow-hidden p-12 bg-cover bg-center"
            style="background-image: url('https://estatepartners.in/wp-content/uploads/2026/11/infinium-central-site-banner.jpg');">
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>

            <div class="relative grid lg:grid-cols-2 gap-6 z-10">
                <div class="text-white">
                    <p class="font-bold uppercase tracking-[0.18em] text-sm mb-3">site visit</p>
                    <h2 class="font-prata text-3xl sm:text-4xl leading-tight">See It. Walk It. <br class="hidden sm:inline-block">Infinium Central 16</h2>
                </div>

                <div id="enquire" class="bg-white rounded-xl shadow-xl p-6 sm:p-8 scroll-mt-28 max-w-lg lg:ml-auto">
                    <p id="site-visit" class="font-bold text-gold uppercase tracking-[0.18em] text-sm mb-3 text-center">SCHEDULE A</p>
                    <h2 class="font-prata text-2xl text-[#302F5A] text-center">Free Site Visit to Infinium Altitude</h2>
                    <?php echo do_shortcode('[wpforms id="300"]'); ?>
                    <p class="flex items-center gap-6 p-4 rounded-xl border border-[#B3814E80] bg-[#FCF7F3] text-[#404042]"><i class="fa-solid fa-taxi text-gold text-3xl"></i> Free cab assistance available — subject to availability.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- ======================= About ======================= -->
    <section id="about" class="py-16 sm:py-20 lg:py-24 scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <div class="reveal sm:text-lg text-[#444444]">
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">assistance</p>
                <h2 class="font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight">NRI Assistance</h2>
                <p class="mt-5 leading-relaxed">For NRIs looking to invest back home, Adissia offers a seamless and structured land buying experience. From remote assistance to verified legal documentation and guided processes, every detail is handled with care.</p>
                <p class="mt-4 leading-relaxed">This ensures your investment in Coimbatore is secure, transparent,
                    and easy to manage, no matter where you are.</p>
                <button
                    type="button"
                    class="js-open-enquiry-modal mt-8 inline-flex items-center gap-2 bg-gold hover:bg-gold text-white font-semibold px-7 py-3.5 rounded-lg transition-colors">
                    <span>Explore More </span>
                    <i class="fa-solid fa-arrow-right text-sm"></i>
                </button>
            </div>

            <div class="reveal relative">
                <div class="rounded-2xl overflow-hidden">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-13.png" alt="Property agreement signing with Estate Partners guidance" class="w-full min-h-[26.25rem] sm:min-h-[32.5rem]" loading="lazy" />
                </div>
                <!-- <div class="absolute -bottom-6 left-5 sm:left-8 bg-ink text-white rounded-2xl px-6 py-5 shadow-xl flex items-center gap-4">
                    <span class="w-12 h-12 rounded-full bg-gold inline-flex items-center justify-center text-xl shrink-0"><i class="fa-solid fa-headset"></i></span>
                    <span>
                        <span class="block font-prata text-2xl leading-none">24/7</span>
                        <span class="block text-xs text-white/70 mt-1 tracking-wide">Buyer support, always</span>
                    </span>
                </div> -->
            </div>
        </div>
    </section>

    <!-- ======================= Need Guidence ======================= -->
    <section id="about" class="py-16 sm:py-20 lg:py-24 scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <div class="reveal relative">
                <div class="rounded-3xl overflow-hidden">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-5.png" alt="Property agreement signing with Estate Partners guidance" class="w-full h-full min-h-[26.25rem] object-cover" loading="lazy" />
                </div>
            </div>

            <div class="grid lg:grid-cols-3 bg-[#FCF7F3] p-6 sm:p-12 rounded-3xl border border-[#B3814E80] gap-6">
                <h2 class="text-gold font-prata text-xl font-semibold text-center col-span-3">Ready to Find Your Villa?</h2>
                <p class="max-w-4xl mx-auto text-[#444444] leading-relaxed col-span-3">Get the Latest Price, Availability & Project Details</p>

                <div class="col-span-3">
                    <?php echo do_shortcode('[wpforms id="41"]'); ?>
                </div>
                <div class="col-span-3 grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 2xl:grid-cols-3 gap-4 text-base">
                    <a href="#site-visit" class="p-2 xl:py-3 xl:px-4 border border-[#B3814E] rounded-md flex items-center gap-3">
                        <i class="fa-solid fa-phone text-xl xl:text-2xl text-[#302F5A] border p-3 rounded-full"></i>
                        Get Free Consultation
                    </a>
                    <a href="http://estatepartners.in/wp-content/uploads/2026/11/Infinium-Central-16-EP.pdf" class="p-2 xl:py-3 xl:px-4 border border-[#B3814E] rounded-md flex items-center gap-3">
                        <i class="fa-brands fa-whatsapp text-xl xl:text-2xl text-[#302F5A] border p-3 rounded-full"></i>
                        WhatsApp
                    </a>
                    <a href="https://wa.me/917092958830" class="p-2 xl:py-3 xl:px-4 border border-[#B3814E] rounded-md flex items-center gap-3">
                        <i class="fa-regular fa-calendar-check text-xl xl:text-2xl text-[#302F5A] border p-3 rounded-full"></i>
                        Book Site Visit
                    </a>
                </div>

            </div>

        </div>
    </section>

    <!-- Developer -->
    <section class="bg-brand-cream py-16 sm:py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-[auto_1fr_1.3fr] gap-6 items-center pb-8 border-b border-ink-line">
                <span class="w-20 h-20 rounded-full bg-white shadow inline-flex items-center justify-center overflow-hidden">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/11/Aara_Enclave_Logo.png" alt="Aara enclave" class="w-14" loading="lazy" />
                </span>
                <div>
                    <p class="text-gold font-semibold uppercase text-xs tracking-wide mb-3">Developer</p>
                    <h2 class="font-prata text-3xl text-[#302F5A]">Infinium Realty</h2>
                </div>
                <p class="text-xs leading-relaxed">Infinium Realty focuses on developing premium residential properties in Coimbatore, with projects designed around location, planning, and long-term usability. Infinium Altitude reflects this approach, combining modern architecture with a comprehensive amenity offering across a well-connected Sathy Road location.</p>
            </div>

            <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-12 lg:gap-18 mt-12">
                <h2 class="font-semibold text-center sm:col-span-2 xl:col-span-3 text-3xl text-[#302F5A]">OTHER PROJECTS</h2>
                <?php
                $properties = new WP_Query(array(
                    'post_type' => 'project',
                    'posts_per_page' => 3,
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'property_type',
                            'field'    => 'slug',
                            'terms'    => 'villas',
                        ),
                    ),
                ));

                if ($properties->have_posts()) :
                    while ($properties->have_posts()) : $properties->the_post();
                        get_template_part('template-parts/template-properties-card');
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Developer -->
    <?php get_template_part('template-parts/section-similar-projects', null, array('type' => 'villas')); ?>

    <!-- ============ SECTION START (pure HTML, no script needed) ============ -->
    <section id="nearby-projects" class="bg-[#302F5A] py-12 sm:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center text-white">
                <p class="text-xs font-bold uppercase tracking-wide">For you</p>
                <h2 class="font-prata text-3xl sm:text-4xl mt-2">Nearby Projects</h2>
            </div>

            <div class="mt-8 sm:mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

                <!-- Card: Ganapathy -->
                <article class="rounded-lg bg-[#fbf6f1] border border-gray-200 overflow-hidden">
                    <header class="flex items-center gap-4 px-5 py-5 border-b border-gold/20">
                        <span
                            class="w-11 h-11 shrink-0 rounded-full bg-white inline-flex items-center justify-center text-gold"><i
                                class="fa-solid fa-location-dot"></i></span>
                        <h3 class="text-lg font-semibold text-gold">Ganapathy, Coimbatore</h3>
                    </header>
                    <ul class="m-4 sm:m-5 rounded-lg bg-white border border-gold/30 divide-y divide-gray-200">
                        <li>
                            <a href="#plots"
                                class="group flex items-center justify-between gap-4 px-4 py-3 hover:bg-[#fbf6f1] transition-colors">
                                <span>
                                    <span class="block text-base font-semibold text-gold">15 New Plots</span>
                                    <span class="block text-sm text-[#131313] mt-0.5">in Ganapathy, Coimbatore</span>
                                </span>
                                <span
                                    class="w-6 h-6 shrink-0 rounded-full bg-[#302F5A] text-white text-[0.625rem] inline-flex items-center justify-center group-hover:bg-gold transition-colors"><i
                                        class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="#apartments"
                                class="group flex items-center justify-between gap-4 px-4 py-3 hover:bg-[#fbf6f1] transition-colors">
                                <span>
                                    <span class="block text-base font-semibold text-gold">2 Apartments for Sale</span>
                                    <span class="block text-sm text-[#131313] mt-0.5">in Ganapathy, Coimbatore</span>
                                </span>
                                <span
                                    class="w-6 h-6 shrink-0 rounded-full bg-[#302F5A] text-white text-[0.625rem] inline-flex items-center justify-center group-hover:bg-gold transition-colors"><i
                                        class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="#villas"
                                class="group flex items-center justify-between gap-4 px-4 py-3 hover:bg-[#fbf6f1] transition-colors">
                                <span>
                                    <span class="block text-base font-semibold text-gold">2 Villas for Sale</span>
                                    <span class="block text-sm text-[#131313] mt-0.5">in Ganapathy, Coimbatore</span>
                                </span>
                                <span
                                    class="w-6 h-6 shrink-0 rounded-full bg-[#302F5A] text-white text-[0.625rem] inline-flex items-center justify-center group-hover:bg-gold transition-colors"><i
                                        class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </article>

                <!-- Card: Vadavalli -->
                <article class="rounded-lg bg-[#fbf6f1] border border-gray-200 overflow-hidden">
                    <header class="flex items-center gap-4 px-5 py-5 border-b border-gold/20">
                        <span
                            class="w-11 h-11 shrink-0 rounded-full bg-white inline-flex items-center justify-center text-gold"><i
                                class="fa-solid fa-location-dot"></i></span>
                        <h3 class="text-lg font-semibold text-gold">Vadavalli, Coimbatore</h3>
                    </header>
                    <ul class="m-4 sm:m-5 rounded-lg bg-white border border-gold/30 divide-y divide-gray-200">
                        <li>
                            <a href="#plots"
                                class="group flex items-center justify-between gap-4 px-4 py-3 hover:bg-[#fbf6f1] transition-colors">
                                <span>
                                    <span class="block text-base font-semibold text-gold">15 New Plots</span>
                                    <span class="block text-sm text-[#131313] mt-0.5">in Vadavalli, Coimbatore</span>
                                </span>
                                <span
                                    class="w-6 h-6 shrink-0 rounded-full bg-[#302F5A] text-white text-[0.625rem] inline-flex items-center justify-center group-hover:bg-gold transition-colors"><i
                                        class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="#apartments"
                                class="group flex items-center justify-between gap-4 px-4 py-3 hover:bg-[#fbf6f1] transition-colors">
                                <span>
                                    <span class="block text-base font-semibold text-gold">2 Apartments for Sale</span>
                                    <span class="block text-sm text-[#131313] mt-0.5">in Vadavalli, Coimbatore</span>
                                </span>
                                <span
                                    class="w-6 h-6 shrink-0 rounded-full bg-[#302F5A] text-white text-[0.625rem] inline-flex items-center justify-center group-hover:bg-gold transition-colors"><i
                                        class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="#villas"
                                class="group flex items-center justify-between gap-4 px-4 py-3 hover:bg-[#fbf6f1] transition-colors">
                                <span>
                                    <span class="block text-base font-semibold text-gold">2 Villas for Sale</span>
                                    <span class="block text-sm text-[#131313] mt-0.5">in Vadavalli, Coimbatore</span>
                                </span>
                                <span
                                    class="w-6 h-6 shrink-0 rounded-full bg-[#302F5A] text-white text-[0.625rem] inline-flex items-center justify-center group-hover:bg-gold transition-colors"><i
                                        class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </article>

                <!-- Card: Thudiyalur -->
                <article class="rounded-lg bg-[#fbf6f1] border border-gray-200 overflow-hidden">
                    <header class="flex items-center gap-4 px-5 py-5 border-b border-gold/20">
                        <span
                            class="w-11 h-11 shrink-0 rounded-full bg-white inline-flex items-center justify-center text-gold"><i
                                class="fa-solid fa-location-dot"></i></span>
                        <h3 class="text-lg font-semibold text-gold">Thudiyalur, Coimbatore</h3>
                    </header>
                    <ul class="m-4 sm:m-5 rounded-lg bg-white border border-gold/30 divide-y divide-gray-200">
                        <li>
                            <a href="#plots"
                                class="group flex items-center justify-between gap-4 px-4 py-3 hover:bg-[#fbf6f1] transition-colors">
                                <span>
                                    <span class="block text-base font-semibold text-gold">15 New Plots</span>
                                    <span class="block text-sm text-[#131313] mt-0.5">in Thudiyalur, Coimbatore</span>
                                </span>
                                <span
                                    class="w-6 h-6 shrink-0 rounded-full bg-[#302F5A] text-white text-[0.625rem] inline-flex items-center justify-center group-hover:bg-gold transition-colors"><i
                                        class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="#apartments"
                                class="group flex items-center justify-between gap-4 px-4 py-3 hover:bg-[#fbf6f1] transition-colors">
                                <span>
                                    <span class="block text-base font-semibold text-gold">2 Apartments for Sale</span>
                                    <span class="block text-sm text-[#131313] mt-0.5">in Thudiyalur, Coimbatore</span>
                                </span>
                                <span
                                    class="w-6 h-6 shrink-0 rounded-full bg-[#302F5A] text-white text-[0.625rem] inline-flex items-center justify-center group-hover:bg-gold transition-colors"><i
                                        class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="#villas"
                                class="group flex items-center justify-between gap-4 px-4 py-3 hover:bg-[#fbf6f1] transition-colors">
                                <span>
                                    <span class="block text-base font-semibold text-gold">2 Villas for Sale</span>
                                    <span class="block text-sm text-[#131313] mt-0.5">in Thudiyalur, Coimbatore</span>
                                </span>
                                <span
                                    class="w-6 h-6 shrink-0 rounded-full bg-[#302F5A] text-white text-[0.625rem] inline-flex items-center justify-center group-hover:bg-gold transition-colors"><i
                                        class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </article>

            </div>
        </div>
    </section>

    <!-- Calculator Section -->
    <?php get_template_part('template-parts/calculators'); ?>

    <section id="about" class="pb-16 sm:pb-20 lg:pb-24 scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 ">

            <div class="reveal text-center mb-6 sm:text-lg text-[#444444]">
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">finanace</p>
                <h2 class="font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight">Supported By</h2>
            </div>

            <!-- <div class="grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-6 gap-6"> -->
            <div class="flex flex-wrap justify-center gap-6">
                <!-- <img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-6-scaled.png" alt="" class="h-16 mx-auto"> -->
                <img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-4-scaled.png" alt="" class="h-16 mx-auto">
                <!-- <img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-3.png" alt="" class="h-16 mx-auto">
                <img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-2.png" alt="" class="h-16 mx-auto"> -->
                <img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-9.png  " alt="" class="h-16 mx-auto">
                <img src="https://estatepartners.in/wp-content/uploads/2026/10/apartment-page-12.png" alt="" class="h-16 mx-auto">
            </div>

        </div>
    </section>

    <!-- FAQ -->
    <section class="bg-brand-cream py-16 sm:py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-3xl">
            <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] text-center">FAQs</h2>
            <div class="mt-8 divide-y divide-gold/30 border-b border-gold/30">
                <details class="py-4" open>
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
                        <span>What are the best luxury gated community villas for sale in Coimbatore?</span>
                        <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus hidden"></i></span>
                    </summary>
                    <p class="mt-3 text-sm pl-5">Infinium Central 16 in Ramanathapuram is one of the most exclusive luxury gated community villas in Coimbatore. This premium development features only 16 Mediterranean-inspired 4 BHK villas in Coimbatore spread across 1.42 acres. RERA-registered and built on the site of the historic Central Studios, it is also one of the most sought-after new gated community villas in Coimbatore for luxury homebuyers.</p>
                </details>
                <details class="py-4">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
                        <span>Where is Infinium Central 16 located?</span>
                        <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus hidden"></i></span>
                    </summary>
                    <p class="mt-3 text-sm pl-5">Infinium Central 16 is located near the historic Central Studios, just off Trichy Road in Ramanathapuram, Coimbatore, offering heritage charm along with excellent connectivity to the city's major destinations. Its central location makes it a preferred choice for buyers looking for luxury gated community villas in Coimbatore with convenient access to schools, hospitals, and business hubs.</p>
                </details>
                <details class="py-4">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
                        <span>What is the price of villas at Infinium Central 16?</span>
                        <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus hidden"></i></span>
                    </summary>
                    <p class="mt-3 text-sm pl-5">Villas at Infinium Central 16 start from ₹5.5 crore onwards, with land areas ranging from 7.4 to 9.4 cents and super built-up areas between 3,600 and 4,300 sq.ft. These premium 4 BHK villas in Coimbatore are designed for discerning homebuyers seeking spacious living, elegant architecture, and a prestigious address.</p>
                </details>
                <details class="py-4">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
                        <span>What amenities are available at Infinium Central 16?</span>
                        <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus hidden"></i></span>
                    </summary>
                    <p class="mt-3 text-sm pl-5">Infinium Central 16 offers premium lifestyle amenities including a clubhouse, party hall, indoor gym, indoor games room, barbeque station, aroma garden, private home theatre option, and 100% power backup for every villa. These world-class facilities enhance the experience of living in one of the finest luxury gated community villas in Coimbatore.</p>
                </details>
                <details class="py-4">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
                        <span>Are there individual villas for sale in Coimbatore at Infinium Central 16?</span>
                        <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus hidden"></i></span>
                    </summary>
                    <p class="mt-3 text-sm pl-5">Yes. Each of the 16 units at Infinium Central 16 is a standalone individual villa in Coimbatore, not a shared or row-house structure, with its own private 7.4–9.4 cent plot within a secure gated community. Buyers looking for individual villas in Coimbatore can enjoy complete privacy along with premium community amenities.</p>
                </details>
                <details class="py-4">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
                        <span>What is the carpet area vs. super built-up area at Infinium Central 16?</span>
                        <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus hidden"></i></span>
                    </summary>
                    <p class="mt-3 text-sm pl-5">Infinium Central 16 villas offer a super built-up area of 3,600 to 4,300 sq.ft across land parcels of 7.4 to 9.4 cents. The actual carpet area varies based on the villa design and floor configuration. These spacious 4 BHK villas in Coimbatore are thoughtfully planned to maximize comfort, functionality, and luxury.</p>
                </details>
                <details class="py-4">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
                        <span>What's the difference between villas in Coimbatore and gated community villas?</span>
                        <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus hidden"></i></span>
                    </summary>
                    <p class="mt-3 text-sm pl-5">Standalone villas in Coimbatore can be independently built or purchased without shared community infrastructure, whereas new gated community villas in Coimbatore, such as Infinium Central 16, offer the added benefits of 24×7 security, premium lifestyle amenities, professionally maintained common areas, and a secure residential environment. Buyers looking for luxury gated community villas in Coimbatore often prefer gated developments for their enhanced lifestyle and long-term value.</p>
                </details>
            </div>
        </div>
    </section>

</main>

<!-- Floating WhatsApp -->
<a href="https://wa.me/917092958830" aria-label="Chat on WhatsApp" class="fixed bottom-5 right-5 z-50 w-14 h-14 rounded-full bg-green-500 text-white text-3xl inline-flex items-center justify-center shadow-lg">
    <i class="fa-brands fa-whatsapp"></i>
</a>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof Swiper !== 'undefined') {
            new Swiper('.apartment-gallery-swiper', {
                slidesPerView: 1.15,
                spaceBetween: 20,
                grabCursor: true,
                watchOverflow: true,
                centeredSlides: true,
                loop: true,
                pagination: {
                    el: '.apartment-gallery-swiper .swiper-pagination',
                    clickable: true
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 24
                    },
                    1024: {
                        slidesPerView: 1.5,
                        spaceBetween: 28
                    }
                }
            });
        }

        var fpTypes = document.querySelectorAll('.fp-type');
        var fpPanels = document.querySelectorAll('.fp-panel');

        fpTypes.forEach(function(btn) {
            btn.addEventListener('click', function() {
                var id = btn.getAttribute('data-fp-type');
                fpTypes.forEach(function(item) {
                    var active = item === btn;
                    item.classList.toggle('bg-gold', active);
                    item.classList.toggle('text-white', active);
                    item.classList.toggle('bg-white', !active);
                    item.classList.toggle('text-[#302F5A]', !active);
                });
                fpPanels.forEach(function(panel) {
                    panel.classList.toggle('hidden', panel.getAttribute('data-fp-panel') !== id);
                });
            });
        });

        document.querySelectorAll('.fp-plan').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var panel = btn.closest('.fp-panel');
                if (!panel) return;

                panel.querySelectorAll('.fp-plan').forEach(function(item) {
                    var active = item === btn;
                    item.classList.toggle('bg-gold', active);
                    item.classList.toggle('text-white', active);
                    item.classList.toggle('bg-white', !active);
                    item.classList.toggle('text-[#302F5A]', !active);
                });

                var image = panel.querySelector('.fp-image');
                var imageUrl = btn.getAttribute('data-fp-plan');
                if (image && imageUrl) image.src = imageUrl;
            });
        });

        document.querySelectorAll('[data-send-otp]').forEach(function(button) {
            button.addEventListener('click', function() {
                button.textContent = 'Coming soon';
            });
        });

        var tabs = document.querySelectorAll('[data-tab]');

        function setActiveTab(activeTab) {
            tabs.forEach(function(tab) {
                var active = tab === activeTab;
                tab.classList.toggle('bg-gold', active);
                tab.classList.toggle('text-white', active);
                tab.classList.toggle('border-gold', active);
                tab.classList.toggle('text-[#302F5A]', !active);
                tab.classList.toggle('border-ink-line', !active);
            });
        }

        if ('IntersectionObserver' in window) {
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (!entry.isIntersecting) return;
                    var activeTab = document.querySelector('[data-tab][href="#' + entry.target.id + '"]');
                    if (activeTab) setActiveTab(activeTab);
                });
            }, {
                rootMargin: '-40% 0px -55% 0px'
            });

            tabs.forEach(function(tab) {
                var section = document.querySelector(tab.getAttribute('href'));
                if (section) observer.observe(section);
            });
        }

        document.querySelectorAll('details').forEach(function(details) {
            var plus = details.querySelector('.faq-plus');
            var minus = details.querySelector('.faq-minus');
            if (!plus || !minus) return;

            function syncIcon() {
                plus.classList.toggle('hidden', details.open);
                minus.classList.toggle('hidden', !details.open);
            }

            syncIcon();
            details.addEventListener('toggle', syncIcon);
        });

        function pager(selector) {
            return {
                el: selector + ' .swiper-pagination',
                clickable: true
            };
        }


        // Your Journey With Estate Partner
        new Swiper('.process-swiper', {
            slidesPerView: 1.2,
            spaceBetween: 0,
            grabCursor: true,
            watchOverflow: true,
            // pagination: pager('.process-swiper'),
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 3
                },
                1024: {
                    slidesPerView: 4
                },
                1280: {
                    slidesPerView: 6
                }
            }
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        const accordionHeader = document.getElementById('accordionHeader');
        const specificationsBody = document.getElementById('specificationsBody');
        const chevronIcon = document.getElementById('chevronIcon');

        accordionHeader.addEventListener('click', () => {
            const isCollapsed = specificationsBody.classList.contains('collapsed');

            if (isCollapsed) {
                specificationsBody.classList.remove('collapsed');
                chevronIcon.classList.remove('rotated');
                accordionHeader.setAttribute('aria-expanded', 'true');
            } else {
                specificationsBody.classList.add('collapsed');
                chevronIcon.classList.add('rotated');
                accordionHeader.setAttribute('aria-expanded', 'false');
            }
        });

        const SubmitText = document.getElementById('wpforms-submit-41');
        SubmitText.innerText = 'Get Lowest Price';
        console.log(SubmitText.innerText);
    });
</script>

<?php get_footer(); ?>