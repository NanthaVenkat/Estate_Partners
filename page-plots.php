<?php

/**
 * Template Name: Plots Landing Page
 * Apartment project landing page: Aara Enclave, Ganapathy.
 *
 * Name / location / price / phone are pulled from the project's ACF fields when filled.
 * Images go in /assets/images/apartment/ (file names used below are placeholders).
 *
 * @package EstatePartners
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
/* Shared class strings (same typography/spacing as the About section on the home page). */
$td   = 'vnktheme-textdomain';
$container = 'container mx-auto px-4 sm:px-6 lg:px-8';
$section   = 'py-16 sm:py-20 lg:py-24';
$h2        = 'font-prata text-[#302F5A] text-3xl xl:text-4xl leading-tight';
$address = 'Villankurichi Rd, B.R. Puram Industrial Estate, Coimbatore, Tamil Nadu 641014';

$why = array(
    array('icon' => 'https://localhost/estate_partners/wp-content/uploads/2026/10/LocalExpertise.svg',  'title' => 'Prime Location',      'text' => "Situated in Kalapatti, one of Coimbatore's established residential and commercial growth corridors."),
    array('icon' => 'https://localhost/estate_partners/wp-content/uploads/2026/10/about-icons-6.svg',        'title' => 'Build Your Way', 'text' => "Choose your plot and create a home designed around your family's needs."),
    array('icon' => 'https://localhost/estate_partners/wp-content/uploads/2026/10/about-icons-5.svg', 'title' => 'Planned Development', 'text' => 'Black-top roads, underground infrastructure and avenue plantation.'),
    array('icon' => 'https://localhost/estate_partners/wp-content/uploads/2026/10/about-icons-2.svg',     'title' => 'Secure Community', 'text' => 'Compound wall, 24/7 security and CCTV surveillance.'),
    array('icon' => 'https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-7.svg',     'title' => 'Vaastu Compliant', 'text' => 'Plots planned with 100% Vaastu compliance.'),
    array('icon' => 'https://localhost/estate_partners/wp-content/uploads/2026/10/icon-1.svg',     'title' => 'Future-Ready Location', 'text' => 'Close to IT parks, educational institutions, hospitals and the airport.'),
);


$steps = array(
    array('icon' => 'https://localhost/estate_partners/wp-content/uploads/2026/10/about-icons-11.svg', 'title' => 'EXPLORE AVAILABLE PLOTS',      'text' => 'View the layout and explore available plots based on location, size, facing, and pricing. '),
    array('icon' => 'https://localhost/estate_partners/wp-content/uploads/2026/10/about-icons-12.svg', 'title' => 'SHORTLIST
YOUR PLOT',    'text' => "Choose a plot that suits your budget, preferred size, and future home or investment plans."),
    array('icon' => 'https://localhost/estate_partners/wp-content/uploads/2026/10/about-icons-13.svg',             'title' => 'SITE VISIT &
INSPECTION',  'text' => 'Visit Aara Enclave, see the plot in person, understand the surroundings, and clarify your questions with our team.'),
    array('icon' => 'https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-11.svg',           'title' => 'VERIFY &
CONFIRM',        'text' => 'Review the project approvals, plot details, legal documentation, and payment terms before proceeding.'),
    array('icon' => 'https://localhost/estate_partners/wp-content/uploads/2026/10/about-icons-8.svg',    'title' => 'BOOK YOUR
PLOT',         'text' => 'Pay the booking amount and complete the required booking formalities to reserve your selected plot.'),
    array('icon' => 'https://localhost/estate_partners/wp-content/uploads/2026/10/about-icons-9.svg',    'title' => 'REGISTRATION & OWNERSHIP',     'text' => 'Complete the sale agreement, balance payment, and registration process with support from our team, and take ownership of your plot.'),
);
?>

<style>
    /* Smooth accordion animation transitions */
    .accordion-content {
        transition: max-height 0.35s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.25s ease-in-out;
        max-height: 2000px;
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
            <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-1.png" alt="Aara enclave apartments in Ganapathy" class="w-full h-full object-cover" />
            <!-- <div class="absolute inset-0 bg-gradient-to-r from-[#131313]/80 via-[#131313]/50 to-[#131313]/20 opacity-5"></div> -->
        </div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20 grid xl:grid-cols-[1.2fr_0.8fr] gap-10 items-center">
            <div class="text-[#302F5A]">
<<<<<<< HEAD
                <p class="font-prata text-3xl tracking-[0.3em] uppercase"><img src="https://localhost/estate_partners/wp-content/uploads/2026/11/Aara_Enclave_Logo.png" alt="" class="h-14"></p>
                <h1 class="font-prata text-3xl sm:text-4xl lg:text-5xl leading-tight mt-5">Premium Residential Plots
=======
                <p class="font-prata text-3xl tracking-[0.3em] uppercase"><img src="http://localhost/estate_partners/wp-content/uploads/2026/11/Aara_Enclave_Logo.png" alt="" class="h-14"></p>
                <h1 class="font-prata text-3xl xl:text-4xl lg:text-5xl leading-tight mt-5">Premium Residential Plots
>>>>>>> 1495223e7c1c339aa3315d7392e91d6590662eb2
                    <span class="text-gold">in Kalapatti, Coimbatore</span>
                </h1>
                <p class="mt-4 text-sm sm:text-base font-medium tracking-wide text-[#302F5A]">DTCP & RERA APPROVED | VAASTU COMPLAINT </p>
                <dl class="mt-8 flex flex-wrap gap-4 text-[#302F5A]">
                    <div class="border-r-2 border-[#302F5A] px-4 text-center">
                        <dt class="font-prata text-3xl sm:text-4xl">5.27</dt>
                        <dd class="text-xs font-medium text-[#292929]">Acres</dd>
                    </div>
                    <div class="border-r-2 border-[#302F5A] px-4 text-center">
                        <dt class="font-prata text-3xl sm:text-4xl">56</dt>
                        <dd class="text-xs font-medium text-[#292929]">Premium Plots</dd>
                    </div>
                    <div class="border-r-2 border-[#302F5A] px-4 text-center">
                        <dt class="font-prata text-3xl sm:text-4xl">3 - 6</dt>
                        <dd class="text-xs font-medium text-[#292929]">Premium Plots</dd>
                    </div>
                    <div class="px-2 text-center">
                        <dt class="font-prata text-3xl sm:text-4xl">₹ 26 Lakhs</dt>
                        <dd class="text-xs font-medium text-[#292929]">Onwards</dd>
                    </div>
                </dl>

                <button
                    type="button"
                    class="js-open-enquiry-modal mt-8 inline-block bg-gold text-white text-base font-medium px-5 py-2 rounded-lg">
                    <span>Limited Plots Available</span>
                </button>
            </div>

            <!-- Hero form -->
            <div id="enquire" class="bg-[#F0F6FB] rounded-xl shadow-xl p-6 sm:p-8 scroll-mt-28 max-w-lg mx-auto">
                <h2 class="font-prata text-2xl text-[#302F5A] text-center">Get Lowest Price &amp; Availability</h2>
                <p class="text-sm text-center mt-1 mb-5">Our property expert will get in touch with you</p>
                <?php echo do_shortcode('[wpforms id="41"]'); ?>
                <p class="mt-4 text-xs text-center text-[#444444]">100% Secure | Expert Assistance | Quick Response</p>
                <div class="mt-4 grid grid-cols-3 gap-2 text-xs">
                    <a href="#site-visit" class="rounded-md py-2 px-2 bg-white shadow-2xl flex items-center gap-3"><i class="fa-regular fa-calendar-check bg-[#302F5A] rounded-full p-2 text-white"></i>Book Site Visit</a>
                    <a href="http://localhost/estate_partners/wp-content/uploads/2026/11/Aaraspaces-Brochure.pdf" class="rounded-md py-2 px-2 bg-white shadow-2xl flex items-center gap-3"><i class="fa-solid fa-download bg-[#302F5A] rounded-full p-2 text-white"></i>Download Brochure</a>
                    <a href="https://wa.me/917092958830" class="rounded-md py-2 px-2 bg-white shadow-2xl flex items-center gap-3"><i class="fa-brands fa-whatsapp bg-[#302F5A] rounded-full p-2 text-white"></i>Whatsapp Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature strip -->
    <section class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 xl:-mt-14 py-12 xl:py-0">
        <ul class="bg-white rounded-xl xl:rounded-full shadow-lg border border-ink-line grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 p-5 text-center text-base">
<<<<<<< HEAD
            <li class="flex flex-col items-center gap-2 border-[#19124B] border-r-1 px-3"><img src="https://localhost/estate_partners/wp-content/uploads/2026/10/about-icons-28.svg" alt="" class="w-14 h-14">Clear Legal Documentation</li>
            <li class="flex flex-col items-center gap-2 border-[#19124B] md:border-r-1 px-3"><img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-16.svg" alt="" class="w-14 h-14">Premium Residential Plots</li>
            <li class="flex flex-col items-center gap-2 border-[#19124B] border-r-1 md:border-r-0 lg:border-r-1 px-3"><img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-15.svg" alt="" class="w-14 h-14">Coimbatore Corporation</li>
            <li class="flex flex-col items-center gap-2 border-[#19124B] border-r-0 md:border-r-1 px-3"><img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-14.svg" alt="" class="w-14 h-14">Gated Community</li>
            <li class="flex flex-col items-center gap-2 border-[#19124B] border-r-1 px-3"><img src="https://localhost/estate_partners/wp-content/uploads/2026/11/ready-to-contruct.svg" alt="" class="w-14 h-14">Ready to Construct</li>
            <li class="flex flex-col items-center gap-2 border-[#19124B]"><img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-12.svg" alt="" class="w-14 h-14">Established Location</li>
=======
            <li class="flex flex-col items-center gap-2 border-[#19124B] border-r-1 px-3"><img src="http://localhost/estate_partners/wp-content/uploads/2026/10/about-icons-28.svg" alt="" class="w-14 h-14">Clear Legal Documentation</li>
            <li class="flex flex-col items-center gap-2 border-[#19124B] md:border-r-1 px-3"><img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-16.svg" alt="" class="w-14 h-14">Premium Residential Plots</li>
            <li class="flex flex-col items-center gap-2 border-[#19124B] border-r-1 md:border-r-0 lg:border-r-1 px-3"><img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-15.svg" alt="" class="w-14 h-14">Coimbatore Corporation</li>
            <li class="flex flex-col items-center gap-2 border-[#19124B] border-r-0 md:border-r-1 px-3"><img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-14.svg" alt="" class="w-14 h-14">Gated Community</li>
            <li class="flex flex-col items-center gap-2 border-[#19124B] border-r-1 px-3"><img src="http://localhost/estate_partners/wp-content/uploads/2026/11/ready-to-contruct.svg" alt="" class="w-14 h-14">Ready to Construct</li>
            <li class="flex flex-col items-center gap-2 border-[#19124B]"><img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-12.svg" alt="" class="w-14 h-14">Established Location</li>
>>>>>>> 1495223e7c1c339aa3315d7392e91d6590662eb2
        </ul>
    </section>

    <!-- Sticky tabs -->
    <!-- <nav class="sticky top-0 z-40 bg-white border-b border-ink-line shadow-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 overflow-x-auto">
            <ul class="flex gap-2 py-3 text-sm font-medium whitespace-nowrap">
                <li><a href="#overview" data-tab class="px-4 py-2 rounded-full border border-gold bg-gold text-white hover:border-gold">Project Overview</a></li>
                <li><a href="#why" data-tab class="px-4 py-2 rounded-full border border-ink-line hover:border-gold">Why Aara enclave</a></li>
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
<<<<<<< HEAD
                <h2 class="font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight">Aara Enclave - Project Overview</h2>
=======
                <h2 class="font-prata text-[#302F5A] text-3xl xl:text-4xl leading-tight">Aara Enclave - Project Overview</h2>
>>>>>>> 1495223e7c1c339aa3315d7392e91d6590662eb2
                <p class="mt-4 max-w-4xl mx-auto text-[#676767] leading-relaxed">Everything You Need to Start Building Right, Well-planned plots in prime locations, giving you the perfect foundation to build your dream home and a <b>brighter future</b></p>
            </div>
            <div class="mt-10 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-5 text-base text-[#6B6B6B] text-center">
                <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-12.svg" alt="" class="w-14 h-14 mx-auto mb-4">
                    <h3 class="text-lg text-gold font-medium">Kalapatti</h3>
                    <p class="mt-2">Prime Coimbatore residential location</p>
                </div>
                <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-11.svg" alt="" class="w-14 h-14 mx-auto mb-4">
                    <h3 class="text-lg text-gold font-medium">RERA + DTCP</h3>
                    <p class="mt-2">Approved residential development</p>
                </div>
                <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-10.svg" alt="" class="w-14 h-14 mx-auto mb-4">
                    <h3 class="text-lg text-gold font-medium">5.26 Acres</h3>
                    <p class="mt-2">Thoughtfully planned residential development</p>
                </div>
                <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-16.svg" alt="" class="w-14 h-14 mx-auto mb-4">
                    <h3 class="text-lg text-gold font-medium">56 Plots</h3>
                    <p class="mt-2">Limited premium residential plots</p>
                </div>
                <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-9.svg" alt="" class="w-14 h-14 mx-auto mb-4">
                    <h3 class="text-lg text-gold font-medium">5 -6 Cents</h3>
                    <p class="mt-2">Flexible plot sizes for different requirements</p>
                </div>
                <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-8.svg" alt="" class="w-14 h-14 mx-auto mb-4">
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
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-6.png" alt="Property agreement signing with Estate Partners guidance" class="w-full min-h-[420px] sm:min-h-[520px]" loading="lazy" />
                </div>
                <!-- <div class="absolute -bottom-6 left-5 sm:left-8 bg-ink text-white rounded-2xl px-6 py-5 shadow-xl flex items-center gap-4">
                    <span class="w-12 h-12 rounded-full bg-gold inline-flex items-center justify-center text-xl shrink-0"><i class="fa-solid fa-headset"></i></span>
                    <span>
                        <span class="block font-prata text-2xl leading-none">24/7</span>
                        <span class="block text-xs text-white/70 mt-1 tracking-wide">Buyer support, always</span>
                    </span>
                </div> -->
            </div>

            <div class="reveal order-1 lg:order-2 text-[#444444] sm:text-lg">
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">Your Dream Home</p>
<<<<<<< HEAD
                <h2 class="font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight">Begins with the Right Foundation</h2>
                <p class="mt-5 leading-relaxed">Aara Enclave by Aara enclave offers premium residential plots in Kalapatti, Coimbatore, created for families looking to build a home in a well-connected and rapidly developing part of the city.</p>
=======
                <h2 class="font-prata text-[#302F5A] text-3xl xl:text-4xl leading-tight">Begins with the Right Foundation</h2>
                <p class="mt-5 leading-relaxed">Aara Enclave by Aara Spaces offers premium residential plots in Kalapatti, Coimbatore, created for families looking to build a home in a well-connected and rapidly developing part of the city.</p>
>>>>>>> 1495223e7c1c339aa3315d7392e91d6590662eb2
                <p class="mt-4 leading-relaxed">Spread across 5.27 acres with 56 plots, the development offers plot options ranging from 3 to 6 cents, with 100% Vaastu-compliant planning and RERA & DTCP approvals.</p>
                <p class="mt-4 leading-relaxed">With essential infrastructure, security features and access to major educational, healthcare, employment and transport destinations, Aara Enclave brings together the essentials for both homebuyers and long-term investors.</p>
                <!-- <ul class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm font-medium">
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
                <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A]">Why Invest in Kalapatti?</h2>
                <p class="mt-4 text-sm sm:text-base leading-relaxed text-[#676767]">
                     Kalapatti combines established residential character with proximity to IT parks, educational institutions, healthcare, and shopping destinations. For families, it offers convenient everyday access to essentials. For investors, its continued residential demand along
                    the Sathy Road corridor makes it a location worth serious consideration.
                </p>
            </div>

            <!-- Woman in the middle, three points each side -->
            <div class="mt-10 lg:mt-12 grid lg:grid-cols-[1fr_auto_1fr] gap-x-10 gap-y-8 items-end">

                <!-- Woman (first on mobile, centre on desktop) -->
                <div class="order-first lg:order-none lg:col-start-2 lg:row-start-1 flex justify-center self-end">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/apartment-page-8.png" alt="Smiling home buyer" class="max-w-[520px] h-auto object-contain block" loading="lazy" />
                </div>

                <!-- LEFT column: text right-aligned, gold bar on the right.
           The lg:mr-* values create the curved/staggered look. -->
                <ul class="lg:col-start-1 lg:row-start-1 grid sm:grid-cols-2 lg:grid-cols-1 gap-8 lg:gap-0 lg:self-stretch lg:flex lg:flex-col lg:justify-between lg:pt-2 space-y-6 pb-6 lg:pb-20">
                    <li class="lg:self-end lg:mr-0">
                        <div class="lg:text-right border-l-4 lg:border-l-0 lg:border-r-4 border-gold pl-4 lg:pl-0 lg:pr-4 max-w-xs lg:ml-auto">
                            <h3 class="font-semibold text-lg text-[#302F5A]">Education</h3>
                            <p class="mt-2 text-xs leading-5 text-[#676767]">Home to schools like Camford International and CMS Matriculation, with Kumaraguru College (KCT) and PSG Tech nearby.</p>
                        </div>
                    </li>
                    <li class="lg:self-end lg:mr-9">
                        <div class="lg:text-right border-l-4 lg:border-l-0 lg:border-r-4 border-gold pl-4 lg:pl-0 lg:pr-4 max-w-xs lg:ml-auto">
                            <h3 class="font-semibold text-lg text-[#302F5A]">Employment</h3>
                            <p class="mt-2 text-xs leading-5 text-[#676767]">Close to CHIL SEZ (KGISL), KCT Tech Park, and Adithya Tech Park, all within
                                roughly 5 km.</p>
                        </div>
                    </li>
                    <li class="lg:self-end lg:mr-12">
                        <div class="lg:text-right border-l-4 lg:border-l-0 lg:border-r-4 border-gold pl-4 lg:pl-0 lg:pr-4 max-w-xs lg:ml-auto">
                            <h3 class="font-semibold text-lg text-[#302F5A]">Healthcare</h3>
                            <p class="mt-2 text-xs leading-5 text-[#676767]">Hospitals including KG Speciality Centre,
                                Sri Ramakrishna Hospital, and
                                Surya Hospital nearby.</p>
                        </div>
                    </li>
                </ul>

                <!-- RIGHT column: text left-aligned, gold bar on the left -->
                <ul class="lg:col-start-3 lg:row-start-1 grid sm:grid-cols-2 lg:grid-cols-1 gap-8 lg:gap-0 lg:self-stretch lg:flex lg:flex-col lg:justify-between lg:pt-2 space-y-6 pb-16 sm:pb-20">
                    <li class="lg:self-start lg:ml-0">
                        <div class="border-l-4 border-gold pl-4 max-w-xs">
                            <h3 class="font-semibold text-lg text-[#302F5A]">Connectivity</h3>
                            <p class="mt-2 text-xs leading-5 text-[#676767]">Well-linked to central Coimbatore via Sathy Road (NH 544), with frequent
                                bus services.</p>
                        </div>
                    </li>
                    <li class="lg:self-start lg:ml-6">
                        <div class="border-l-4 border-gold pl-4 max-w-xs">
                            <h3 class="font-semibold text-lg text-[#302F5A]">Shopping</h3>
                            <p class="mt-2 text-xs leading-5 text-[#676767]">Prozone Mall is approximately
                                500 metres away.</p>
                        </div>
                    </li>
                    <li class="lg:self-start lg:ml-8">
                        <div class="border-l-4 border-gold pl-4 max-w-xs">
                            <h3 class="font-semibold text-lg text-[#302F5A]">Residential Growth</h3>
                            <p class="mt-2 text-xs leading-5 text-[#676767]"> A long-established and steadily developing residential corridor with a mix of new and existing apartment projects.</p>
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
                <div class="rounded-3xl overflow-hidden min-h-[320px] lg:min-h-0">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-16.png" alt="Aara enclave tower" class="w-full h-full object-cover" loading="lazy" />
                </div>

                <!-- Content -->
                <div class="flex flex-col justify-center lg:py-8">
                    <p class="text-gold font-semibold uppercase tracking-wide text-xs">Location Advantage</p>
                    <h2 class="font-prata text-2xl sm:text-3xl text-[#302F5A] mt-2">Life &amp; Connectivity in Kalapatti</h2>

                    <ul class="mt-8 grid grid-cols-2 sm:grid-cols-3 gap-x-8 gap-y-10">

                        <!-- Repeat this <li> for each score. Change the number in two places:
               the "9" and the style="width:90%". -->
                        <li>
                            <span class="w-12 h-12"><img src="https://localhost/estate_partners/wp-content/uploads/2026/11/connectivity-1.svg" alt=""></span>
                            <h3 class="mt-3 font-semibold text-[#302F5A]">Connectivity</h3>
                            <p class="mt-3 text-[#302F5A]"><span class="text-2xl font-bold">9</span><span class="text-lg font-medium text-[#302F5A]/70">/10</span></p>
                            <div class="mt-2 h-1.5 rounded-full bg-gray-200 overflow-hidden" role="img" aria-label="9 out of 10">
                                <div class="h-full rounded-full bg-[#302F5A]" style="width:90%"></div>
                            </div>
                            <p class="mt-4 text-sm leading-5 text-[#4D5461]">Easy access to key city corridors, major roads & junctions.</p>
                        </li>

                        <li>
                            <span class="w-12 h-12"><img src="https://localhost/estate_partners/wp-content/uploads/2026/11/connectivity-6.svg" alt=""></span>
                            <h3 class="mt-3 font-semibold text-[#302F5A]">Education</h3>
                            <p class="mt-3 text-[#302F5A]"><span class="text-2xl font-bold">9</span><span class="text-lg font-medium text-[#302F5A]/70">/10</span></p>
                            <div class="mt-2 h-1.5 rounded-full bg-gray-200 overflow-hidden" role="img" aria-label="9 out of 10">
                                <div class="h-full rounded-full bg-[#302F5A]" style="width:90%"></div>
                            </div>
                            <p class="mt-4 text-sm leading-5 text-[#4D5461]">Schools, colleges & reputed institutions nearby.</p>
                        </li>

                        <li>
                            <span class="w-12 h-12"><img src="https://localhost/estate_partners/wp-content/uploads/2026/11/connectivity-3.svg" alt=""></span>
                            <h3 class="mt-3 font-semibold text-[#302F5A]">Healthcare</h3>
                            <p class="mt-3 text-[#302F5A]"><span class="text-2xl font-bold">8</span><span class="text-lg font-medium text-[#302F5A]/70">/10</span></p>
                            <div class="mt-2 h-1.5 rounded-full bg-gray-200 overflow-hidden" role="img" aria-label="8 out of 10">
                                <div class="h-full rounded-full bg-[#302F5A]" style="width:80%"></div>
                            </div>
                            <p class="mt-4 text-sm leading-5 text-[#4D5461]">Leading hospitals & medical centres close by.</p>
                        </li>

                        <li>
                            <span class="w-12 h-12"><img src="https://localhost/estate_partners/wp-content/uploads/2026/11/connectivity-5.svg" alt=""></span>
                            <h3 class="mt-3 font-semibold text-[#302F5A]">Employment</h3>
                            <p class="mt-3 text-[#302F5A]"><span class="text-2xl font-bold">9</span><span class="text-lg font-medium text-[#302F5A]/70">/10</span></p>
                            <div class="mt-2 h-1.5 rounded-full bg-gray-200 overflow-hidden" role="img" aria-label="9 out of 10">
                                <div class="h-full rounded-full bg-[#302F5A]" style="width:90%"></div>
                            </div>
                            <p class="mt-4 text-sm leading-5 text-[#4D5461]">IT parks & business hubs within easy reach.</p>
                        </li>

                        <li>
                            <span class="w-12 h-12"><img src="https://localhost/estate_partners/wp-content/uploads/2026/11/connectivity-4.svg" alt=""></span>
                            <h3 class="mt-3 font-semibold text-[#302F5A]">Shopping</h3>
                            <p class="mt-3 text-[#302F5A]"><span class="text-2xl font-bold">8</span><span class="text-lg font-medium text-[#302F5A]/70">/10</span></p>
                            <div class="mt-2 h-1.5 rounded-full bg-gray-200 overflow-hidden" role="img" aria-label="8 out of 10">
                                <div class="h-full rounded-full bg-[#302F5A]" style="width:80%"></div>
                            </div>
                            <p class="mt-4 text-sm leading-5 text-[#4D5461]">Mails, retail stores & entertainment options nearby.</p>
                        </li>

                        <li>
                            <span class="w-12 h-12"><img src="https://localhost/estate_partners/wp-content/uploads/2026/11/connectivity-2.svg" alt=""></span>
                            <h3 class="mt-3 font-semibold text-[#302F5A]">Airport Access</h3>
                            <p class="mt-3 text-[#302F5A]"><span class="text-2xl font-bold">7</span><span class="text-lg font-medium text-[#302F5A]/70">/10</span></p>
                            <div class="mt-2 h-1.5 rounded-full bg-gray-200 overflow-hidden" role="img" aria-label="9 out of 10">
                                <div class="h-full rounded-full bg-[#302F5A]" style="width:70%"></div>
                            </div>
                            <p class="mt-4 text-sm leading-5 text-[#4D5461]">Coimbatore International Airport - 6.2 km away.</p>
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
            <div class="flex gap-6 flex-col">
                <div class="container mx-auto mb-6">
                    <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">aara enclave for</p>
                    <h2 class="font-prata text-3xl text-[#302F5A] xl:text-4xl leading-tight">Who Is Aara Enclave For?</h2>
                </div>
                <div class="w-full rounded-2xl shadow-lg flex gap-6 items-center p-4">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/lp-icon-3.svg" alt="Looking to Build?" class="w-16">

                    <div class="space-y-2">
                        <h3 class="font-semibold text-gold text-lg">Looking to Build?</h3>
                        <p class="text-[#4D5461]">Choose your plot and build a home
                            according to your family's requirements.</p>
                    </div>
                </div>

                <div class="w-full rounded-2xl shadow-lg flex gap-6 items-center p-4">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/lp-icon-2.svg" alt="Looking to Invest?" class="w-16">

                    <div class="space-y-2">
                        <h3 class="font-semibold text-gold text-lg">Looking to Invest?</h3>
                        <p class="text-[#4D5461]">Own a residential plot in a strategically
                            located part of Kalapatti.</p>
                    </div>
                </div>

                <div class="w-full rounded-2xl shadow-lg flex gap-6 items-center p-4">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/lp-icon-1.svg" alt="Planning for Your Family?" class="w-16">

                    <div class="space-y-2">
                        <h3 class="font-semibold text-gold text-lg">Planning for Your Family?</h3>
                        <p class="text-[#4D5461]">Choose a plot size that gives you the
                            flexibility to plan your future home.</p>
                    </div>
                </div>
            </div>

            <div class="reveal relative">
                <div class="rounded-2xl overflow-hidden">
<<<<<<< HEAD
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-7.png" alt="Property agreement signing with Estate Partners guidance" class="w-full h-full min-h-[420px] object-cover" loading="lazy" />
=======
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-7.png" alt="Property agreement signing with Estate Partners guidance" class="w-full h-full min-h-[420px] object-cover" loading="lazy" />
>>>>>>> 1495223e7c1c339aa3315d7392e91d6590662eb2
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
<<<<<<< HEAD
            <h2 class="reveal <?php echo esc_attr($h2); ?> text-center">Why Aara Enclave</h2>
=======
            <h2 class="reveal <?php echo esc_attr($h2); ?> text-center">why Aara Enclave</h2>
>>>>>>> 1495223e7c1c339aa3315d7392e91d6590662eb2
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
                <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] mt-2">Infrastructure & Amenities</h2>
            </div>
            <ul class="mt-10 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-5 text-[#6A6A6A] text-center text-lg font-medium">
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-6.svg" alt="" class="w-16 h-16">
                    Solar Street Light
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-5.svg" alt="" class="w-16 h-16">
                    Corporation water
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-4.svg" alt="" class="w-16 h-16">
                    Underground
                    drainage provision
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-3.svg" alt="" class="w-16 h-16">
                    Compound Wall
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-2.svg" alt="" class="w-16 h-16">
                    24/7 security
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/icons-ss-13.svg" alt="" class="w-16 h-16">
                    24X7 CCTV surveillance
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-14.svg" alt="" class="w-16 h-16">
                    three grand arch entrance
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-1.svg" alt="" class="w-16 h-16">
                    Perfect Legal Documents
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/icons-ss-5.svg" alt="" class="w-16 h-16">
                    Black road top
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-7.svg" alt="" class="w-16 h-16">
                    Underground Electrical cabling provision
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-9.svg" alt="" class="w-16 h-16">
                    industrial transformers
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center gap-4">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-8.svg" alt="" class="w-16 h-16">
                    Avenue Plantation
                </li>
            </ul>
        </div>
    </section>

    <!-- ======================= GALLERY ======================= -->
    <section id="gallery" class="py-16 sm:py-20 scroll-mt-28">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-gold font-semibold uppercase tracking-wide text-sm">Aara Enclave</p>
                <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] mt-2">From Our Gallery</h2>
            </div>
            <div class="swiper apartment-gallery-swiper mt-10" style="--swiper-theme-color:#b3814e;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide !h-auto">
                        <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-8.png" alt="Aara enclave gallery image" class="rounded-2xl w-full aspect-[4/2] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-9.png" alt="Aara enclave gallery image" class="rounded-2xl w-full aspect-[4/2] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-10.png" alt="Aara enclave gallery image" class="rounded-2xl w-full aspect-[4/2] object-cover" loading="lazy" />
                    </div>
                    <div class="swiper-slide !h-auto">
                        <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-11.png" alt="Aara enclave gallery image" class="rounded-2xl w-full aspect-[4/2] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-12.png" alt="Aara enclave gallery image" class="rounded-2xl w-full aspect-[4/2] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-13.png" alt="Aara enclave gallery image" class="rounded-2xl w-full aspect-[4/2] object-cover" loading="lazy" />
                    </div>
                    <div class="swiper-slide !h-auto">
                        <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-14.png" alt="Aara enclave gallery image" class="rounded-2xl w-full aspect-[4/2] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-15.png" alt="Aara enclave gallery image" class="rounded-2xl w-full aspect-[4/2] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-16.png" alt="Aara enclave gallery image" class="rounded-2xl w-full aspect-[4/2] object-cover" loading="lazy" />
                    </div>
                    <div class="swiper-slide !h-auto">
                        <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-17.png" alt="Aara enclave gallery image" class="rounded-2xl w-full aspect-[4/2] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-18.png" alt="Aara enclave gallery image" class="rounded-2xl w-full aspect-[4/2] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-19.png" alt="Aara enclave gallery image" class="rounded-2xl w-full aspect-[4/2] object-cover" loading="lazy" />
                    </div>
                </div>
                <div class="swiper-pagination !static mt-8"></div>
            </div>
        </div>
    </section>

    <!-- ======================= Master Plan ======================= -->
    <section id="about" class="py-16 sm:py-20  bg-[#FCF7F3] lg:py-24 scroll-mt-24">
        <div class="container mx-auto text-center">
            <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] mt-2 mb-6">Aara Enclave Phase 1</h2>
            <img src="https://www.coimbatoredevelopers.com/wp-content/uploads/2026/06/Aara_Enclave_Web.webp" alt="" class="mx-auto hidded sm:block">
            <img src="https://www.coimbatoredevelopers.com/wp-content/uploads/2026/06/Aara_Enclave_Mob-scaled-1.webp" alt="" class="mx-auto block sm:hidden">
        </div>

        <div class="container mx-auto text-center">
            <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] mt-2 mb-6">Aara Enclave Phase 3</h2>
            <img src="https://www.coimbatoredevelopers.com/wp-content/uploads/2026/10/Aara_Enclave_Phase_3_Web-optimized.webp" alt="" class="mx-auto hidded sm:block">
            <img src="https://www.coimbatoredevelopers.com/wp-content/uploads/2026/10/Aara_Enclave_Phase_3_Mobile_view-optimized.webp" alt="" class="mx-auto block sm:hidden">
        </div>
    </section>

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
                    <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] mt-2 mb-6">Pricing</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm border border-ink-line rounded-xl overflow-hidden">
                            <thead class="bg-[#302F5A] text-white">
                                <tr>
                                    <th class="px-4 py-3">PHASE</th>
                                    <th class="px-4 py-3">CENT</th>
                                    <th class="px-4 py-3">PRICE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t border-ink-line bg-brand-cream">
                                    <td class="px-4 py-3">Phase - 1</td>
                                    <td class="px-4 py-3">1 Cent</td>
                                    <td class="px-4 py-3">Rs.26L Onwards*</td>
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
            <p class="reveal mt-3 text-center text-sm text-[#444444]">Aara Enclave is strategically situated in Kalapatti, one of Coimbatore’s rapidly developing residential and commercial hubs. Its proximity to major IT parks, educational institutions, and healthcare facilities makes it an ideal choice for both homeowners and investors.</p>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d4644.755859975757!2d77.02221!3d11.063585!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTHCsDAzJzQ5LjQiTiA3N8KwMDEnMjkuMyJF!5e1!3m2!1sen!2sin!4v1794394948275!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" class="block w-full h-[320px] sm:h-[420px] lg:h-[520px] border-0 mt-6"></iframe>
    </section>

    <!-- ======================= PROCESS (Swiper) ======================= -->
    <section class="<?php echo esc_attr($section); ?>">
        <div class="<?php echo esc_attr($container); ?>">
            <div class="reveal text-center">
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3"><?php esc_html_e('Process', $td); ?></p>
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('Buyers Process', $td); ?></h2>
                <p class="mt-3 max-w-2xl mx-auto text-sm sm:text-base text-[#444444]"><?php esc_html_e('A simple, transparent approach designed to make your land-buying journey smooth and hassle-free.', $td); ?></p>
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
            <p class="text-gold font-bold uppercase tracking-[0.18em] text-center text-sm mb-3">HOME VS INVESTMENT</p>
            <h2 class="reveal <?php echo esc_attr($h2); ?> text-center">Build Your Dream Home or Invest for Tomorrow</h2>
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
                            BUILD YOUR HOME
                        </h3>
                    </div>

                    <!-- Inner White Card Content -->
                    <div class="bg-white rounded-xl overflow-hidden divide-y divide-gold border border-gold flex-1">
                        <!-- Item 1 -->
                        <div class="flex items-start space-x-3.5 p-4 sm:p-4.5">
                            <i class="fa-solid fa-circle-check text-gold text-base mt-0.5 shrink-0"></i>
                            <span class="text-xs sm:text-sm text-gray-700 font-medium leading-snug">
                                Choose your preferred plot
                            </span>
                        </div>

                        <!-- Item 2 -->
                        <div class="flex items-start space-x-3.5 p-4 sm:p-4.5">
                            <i class="fa-solid fa-circle-check text-gold text-base mt-0.5 shrink-0"></i>
                            <span class="text-xs sm:text-sm text-gray-700 font-medium leading-snug">
                                Design your own home
                            </span>
                        </div>

                        <!-- Item 3 -->
                        <div class="flex items-start space-x-3.5 p-4 sm:p-4.5">
                            <i class="fa-solid fa-circle-check text-gold text-base mt-0.5 shrink-0"></i>
                            <span class="text-xs sm:text-sm text-gray-700 font-medium leading-snug">
                                Plan spaces around your family
                            </span>
                        </div>

                        <!-- Item 4 -->
                        <div class="flex items-start space-x-3.5 p-4 sm:p-4.5">
                            <i class="fa-solid fa-circle-check text-gold text-base mt-0.5 shrink-0"></i>
                            <span class="text-xs sm:text-sm text-gray-700 font-medium leading-snug">
                                Create a long-term family asset
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
                            INVEST FOR FUTURE
                        </h3>
                    </div>

                    <!-- Inner White Card Content -->
                    <div class="bg-white rounded-xl overflow-hidden divide-y divide-gold border border-gold flex-1">
                        <!-- Item 1 -->
                        <div class="flex items-start space-x-3.5 p-4 sm:p-4.5">
                            <i class="fa-solid fa-circle-check text-gold text-base mt-0.5 shrink-0"></i>
                            <span class="text-xs sm:text-sm text-gray-700 font-medium leading-snug">
                                Own land in a growing location
                            </span>
                        </div>

                        <!-- Item 2 -->
                        <div class="flex items-start space-x-3.5 p-4 sm:p-4.5">
                            <i class="fa-solid fa-circle-check text-gold text-base mt-0.5 shrink-0"></i>
                            <span class="text-xs sm:text-sm text-gray-700 font-medium leading-snug">
                                Flexible holding period
                            </span>
                        </div>

                        <!-- Item 3 -->
                        <div class="flex items-start space-x-3.5 p-4 sm:p-4.5">
                            <i class="fa-solid fa-circle-check text-gold text-base mt-0.5 shrink-0"></i>
                            <span class="text-xs sm:text-sm text-gray-700 font-medium leading-snug">
                                Potential long-term appreciation
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
<<<<<<< HEAD
            <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">LATEST PLOT PRICE</p>
            <h2 class="font-prata text-3xl text-[#302F5A] sm:text-4xl leading-tight">Get the Latest Aara Enclave Price</h2>
            <!-- <p class="mt-4 max-w-4xl mx-auto text-[#444444] leading-relaxed">Buying property is a major decision. You don't have to figure it out alone. Tell us what you are looking for — your preferred location,
=======
            <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">LATEST VILLA PRICE</p>
            <h2 class="font-prata text-3xl text-[#302F5A] xl:text-4xl leading-tight">Get the Latest Aara Enclave Price</h2>
            <!-- <p class="mt-4 max-w-4xl mx-auto text-[#444444] leading-relaxed text-sm xl:text-base">Buying property is a major decision. You don't have to figure it out alone. Tell us what you are looking for — your preferred location,
>>>>>>> 1495223e7c1c339aa3315d7392e91d6590662eb2
                property type, budget and purpose — and our team can help you shortlist suitable projects in Coimbatore.</p> -->
        </div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <div class="grid grid-cols-2 sm:grid-cols-3 bg-[#FCF7F3] p-5 sm:p-8 rounded-2xl border border-[#B3814E80] gap-6">
                <h2 class="text-gold font-prata text-xl lg:text-2xl font-semibold text-center col-span-2 md:col-span-3">Plot prices can vary based on:</h2>

                <div class="rounded-2xl border border-[#B3814E80] bg-white flex text-center flex-col gap-4 items-center text-[#302F5A] p-4">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-4.svg" alt="" class="w-14 h-14">
                    <p>Plot size</p>
                </div>

                <div class="rounded-2xl border border-[#B3814E80] bg-white flex text-center flex-col gap-4 items-center text-[#302F5A] p-4">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-3.svg" alt="" class="w-14 h-14">
                    <p>Facing</p>
                </div>

                <div class="rounded-2xl border border-[#B3814E80] bg-white flex text-center flex-col gap-4 items-center text-[#302F5A] p-4">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-1.svg" alt="" class="w-14 h-14">
                    <p>Location within layout</p>
                </div>

                <div class="rounded-2xl border border-[#B3814E80] bg-white flex text-center flex-col gap-4 items-center text-[#302F5A] p-4">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aataspace-icon-1.svg" alt="" class="w-14 h-14">
                    <p>Road width</p>
                </div>

                <div class="rounded-2xl border border-[#B3814E80] bg-white flex text-center flex-col gap-4 items-center text-[#302F5A] p-4">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aataspace-icon-2.svg" alt="" class="w-14 h-14">
                    <p>Corner status</p>
                </div>

                <div class="rounded-2xl border border-[#B3814E80] bg-white flex text-center flex-col gap-4 items-center text-[#302F5A] p-4">
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-2.svg" alt="" class="w-14 h-14">
                    <p>Current offers</p>
                </div>

                <div class="col-span-2 sm:col-span-3">
                    <?php echo do_shortcode('[wpforms id="41"]'); ?>
                </div>
            </div>

            <div class="reveal relative rounded-2xl overflow-hidden h-full min-h-[420px] bg-cover bg-center" style="background-image: url('https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-7.png');">
                <!-- <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-7.png" alt="Property agreement signing with Estate Partners guidance" class="w-full h-full min-h-[420px] object-cover" loading="lazy" /> -->
            </div>
        </div>
    </section>

    <!-- ======================= TESTIMONIALS ======================= -->
    <?php get_template_part('template-parts/template-testimonials'); ?>

    <!-- Site Visit -->
    <section id="about" class="pt-16 sm:pt-20 lg:pt-24 scroll-mt-24">
        <div class="container relative mx-auto rounded-2xl overflow-hidden p-12 bg-cover bg-center"
            style="background-image: url('https://localhost/estate_partners/wp-content/uploads/2026/11/aaraspace.png');">
            <!-- <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div> -->

            <div class="relative grid lg:grid-cols-2 gap-6 z-10">
                <div class="text-gold">
                    <p class="font-bold uppercase tracking-[0.18em] text-sm mb-3">site visit</p>
                    <h2 class="font-prata text-3xl sm:text-4xl leading-tight"><span class="text-[#302F5A]">See It. Walk It. </span><br class="hidden sm:inline-block">Imagine Your Home.</h2>
                </div>

                <div id="enquire" class="bg-white rounded-xl shadow-xl p-6 sm:p-8 scroll-mt-28 max-w-lg lg:ml-auto">
<<<<<<< HEAD
                    <p id="site-visit" class="font-bold text-gold uppercase tracking-[0.18em] text-sm mb-3 text-center">SCHEDULE A</p>
=======
                    <p class="font-bold text-gold uppercase tracking-[0.18em] text-sm mb-3 text-center">SCHEDULE A</p>
>>>>>>> 1495223e7c1c339aa3315d7392e91d6590662eb2
                    <h2 class="font-prata text-2xl text-[#302F5A] text-center">Free Site Visit to Aara Enclave</h2>
                    <?php echo do_shortcode('[wpforms id="300"]'); ?>
                    <p class="flex items-center gap-6 p-4 rounded-xl border border-[#B3814E80] bg-[#FCF7F3] text-[#404042]"><i class="fa-solid fa-taxi text-gold text-3xl"></i> Free cab assistance available — subject to availability.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- ======================= About ======================= -->
    <section id="about" class="py-16 sm:py-20 lg:py-24 scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <div class="reveal text-base text-[#444444]">
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">assistance</p>
                <h2 class="font-prata text-[#302F5A] text-3xl xl:text-4xl leading-tight">NRI Assistance</h2>
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
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/aara-enclave-5.png" alt="Property agreement signing with Estate Partners guidance" class="w-full min-h-[420px] sm:min-h-[520px]" loading="lazy" />
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

            <div class="reveal relative h-full">
<<<<<<< HEAD
                <div class="reveal relative rounded-2xl overflow-hidden h-full min-h-[420px] bg-cover bg-center" style="background-image: url('https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-5.png');">
                    <!-- <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-5.png" alt="Property agreement signing with Estate Partners guidance" class="w-full h-full min-h-[420px] object-cover" loading="lazy" /> -->
=======
                <div class="reveal relative rounded-2xl overflow-hidden h-full min-h-[420px] bg-cover bg-center" style="background-image: url('http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-5.png');">
                    <!-- <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-5.png" alt="Property agreement signing with Estate Partners guidance" class="w-full h-full min-h-[420px] object-cover" loading="lazy" /> -->
>>>>>>> 1495223e7c1c339aa3315d7392e91d6590662eb2
                </div>
            </div>

            <div class="grid lg:grid-cols-3 bg-[#FCF7F3] p-6 sm:p-12 rounded-3xl border border-[#B3814E80] gap-6">
<<<<<<< HEAD
                <h2 class="text-gold font-prata text-xl lg:text-3xl font-semibold text-center col-span-3">Ready to Find Your Plots?</h2>
=======
                <h2 class="text-gold font-prata text-xl lg:text-3xl font-semibold text-center col-span-3">Ready to Find Your Villa?</h2>
>>>>>>> 1495223e7c1c339aa3315d7392e91d6590662eb2
                <p class="max-w-4xl mx-auto text-[#444444] leading-relaxed col-span-3">Get the Latest Price, Availability & Project Details</p>

                <div class="col-span-3">
                    <?php echo do_shortcode('[wpforms id="41"]'); ?>
                </div>
                <div class="col-span-3 grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 2xl:grid-cols-3 gap-4 text-base">
                    <a href="#site-visit" class="p-2 xl:py-3 xl:px-4 border border-[#B3814E] rounded-md flex items-center gap-3">
                        <i class="fa-solid fa-phone text-xl xl:text-2xl text-[#302F5A] border p-3 rounded-full"></i>
                        Get Free Consultation
                    </a>
                    <a href="http://localhost/estate_partners/wp-content/uploads/2026/11/Aaraspaces-Brochure.pdf" class="p-2 xl:py-3 xl:px-4 border border-[#B3814E] rounded-md flex items-center gap-3">
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
<<<<<<< HEAD
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/11/Aara_Enclave_Logo.png" alt="Aara enclave" class="w-14" loading="lazy" />
                </span>
                <div>
                    <p class="text-gold font-semibold uppercase text-xs tracking-wide mb-3">Developer</p>
                    <h2 class="font-prata text-3xl text-[#302F5A]">Aara Enclave</h2>
                </div>
                <p class="text-sm leading-relaxed">Aara enclave focuses on developing residential and commercial properties in Coimbatore, with projects designed around location, planning and long-term usability.</p>
=======
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/11/Aara_Enclave_Logo.png" alt="Aara Spaces" class="w-14" loading="lazy" />
                </span>
                <div>
                    <p class="text-gold font-semibold uppercase text-xs tracking-wide mb-3">Developer</p>
                    <h2 class="font-prata text-3xl text-[#302F5A]">Aara Spaces</h2>
                </div>
                <p class="text-xs leading-relaxed">Aara Spaces focuses on developing residential and commercial properties in Coimbatore, with projects designed around location, planning and long-term usability.</p>
>>>>>>> 1495223e7c1c339aa3315d7392e91d6590662eb2
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
                            'terms'    => 'plots',
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
<<<<<<< HEAD
    <?php get_template_part('template-parts/section-similar-projects', null, array('type' => 'plots')); ?>
=======
    <section class="bg-white py-16 sm:py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">for you</p>
                <h2 class="font-prata text-[#302F5A] text-3xl xl:text-4xl leading-tight">Similar Projects</h2>
            </div>

            <div class="grid sm:grid-cols-2 gap-12 lg:gap-18 mt-12">
                <?php
                $properties = new WP_Query(array(
                    'post_type' => 'project',
                    'posts_per_page' => 3,
                ));

                if ($properties->have_posts()) :
                    while ($properties->have_posts()) : $properties->the_post();
                        get_template_part('template-parts/template-similar-properties-card');
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>
>>>>>>> 1495223e7c1c339aa3315d7392e91d6590662eb2

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
                            <a href="javascript:void(0)"
                                class="group flex items-center justify-between gap-4 px-4 py-3 hover:bg-[#fbf6f1] transition-colors">
                                <span>
                                    <span class="block text-base font-semibold text-gold">15 New Plots</span>
                                    <span class="block text-sm text-[#131313] mt-0.5">in Ganapathy, Coimbatore</span>
                                </span>
                                <span
                                    class="w-6 h-6 shrink-0 rounded-full bg-[#302F5A] text-white text-[10px] inline-flex items-center justify-center group-hover:bg-gold transition-colors"><i
                                        class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="group flex items-center justify-between gap-4 px-4 py-3 hover:bg-[#fbf6f1] transition-colors">
                                <span>
                                    <span class="block text-base font-semibold text-gold">2 Apartments for Sale</span>
                                    <span class="block text-sm text-[#131313] mt-0.5">in Ganapathy, Coimbatore</span>
                                </span>
                                <span
                                    class="w-6 h-6 shrink-0 rounded-full bg-[#302F5A] text-white text-[10px] inline-flex items-center justify-center group-hover:bg-gold transition-colors"><i
                                        class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="group flex items-center justify-between gap-4 px-4 py-3 hover:bg-[#fbf6f1] transition-colors">
                                <span>
                                    <span class="block text-base font-semibold text-gold">2 Villas for Sale</span>
                                    <span class="block text-sm text-[#131313] mt-0.5">in Ganapathy, Coimbatore</span>
                                </span>
                                <span
                                    class="w-6 h-6 shrink-0 rounded-full bg-[#302F5A] text-white text-[10px] inline-flex items-center justify-center group-hover:bg-gold transition-colors"><i
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
                            <a href="javascript:void(0)"
                                class="group flex items-center justify-between gap-4 px-4 py-3 hover:bg-[#fbf6f1] transition-colors">
                                <span>
                                    <span class="block text-base font-semibold text-gold">15 New Plots</span>
                                    <span class="block text-sm text-[#131313] mt-0.5">in Vadavalli, Coimbatore</span>
                                </span>
                                <span
                                    class="w-6 h-6 shrink-0 rounded-full bg-[#302F5A] text-white text-[10px] inline-flex items-center justify-center group-hover:bg-gold transition-colors"><i
                                        class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="group flex items-center justify-between gap-4 px-4 py-3 hover:bg-[#fbf6f1] transition-colors">
                                <span>
                                    <span class="block text-base font-semibold text-gold">2 Apartments for Sale</span>
                                    <span class="block text-sm text-[#131313] mt-0.5">in Vadavalli, Coimbatore</span>
                                </span>
                                <span
                                    class="w-6 h-6 shrink-0 rounded-full bg-[#302F5A] text-white text-[10px] inline-flex items-center justify-center group-hover:bg-gold transition-colors"><i
                                        class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="group flex items-center justify-between gap-4 px-4 py-3 hover:bg-[#fbf6f1] transition-colors">
                                <span>
                                    <span class="block text-base font-semibold text-gold">2 Villas for Sale</span>
                                    <span class="block text-sm text-[#131313] mt-0.5">in Vadavalli, Coimbatore</span>
                                </span>
                                <span
                                    class="w-6 h-6 shrink-0 rounded-full bg-[#302F5A] text-white text-[10px] inline-flex items-center justify-center group-hover:bg-gold transition-colors"><i
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
                            <a href="javascript:void(0)"
                                class="group flex items-center justify-between gap-4 px-4 py-3 hover:bg-[#fbf6f1] transition-colors">
                                <span>
                                    <span class="block text-base font-semibold text-gold">15 New Plots</span>
                                    <span class="block text-sm text-[#131313] mt-0.5">in Thudiyalur, Coimbatore</span>
                                </span>
                                <span
                                    class="w-6 h-6 shrink-0 rounded-full bg-[#302F5A] text-white text-[10px] inline-flex items-center justify-center group-hover:bg-gold transition-colors"><i
                                        class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="group flex items-center justify-between gap-4 px-4 py-3 hover:bg-[#fbf6f1] transition-colors">
                                <span>
                                    <span class="block text-base font-semibold text-gold">2 Apartments for Sale</span>
                                    <span class="block text-sm text-[#131313] mt-0.5">in Thudiyalur, Coimbatore</span>
                                </span>
                                <span
                                    class="w-6 h-6 shrink-0 rounded-full bg-[#302F5A] text-white text-[10px] inline-flex items-center justify-center group-hover:bg-gold transition-colors"><i
                                        class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="group flex items-center justify-between gap-4 px-4 py-3 hover:bg-[#fbf6f1] transition-colors">
                                <span>
                                    <span class="block text-base font-semibold text-gold">2 Villas for Sale</span>
                                    <span class="block text-sm text-[#131313] mt-0.5">in Thudiyalur, Coimbatore</span>
                                </span>
                                <span
                                    class="w-6 h-6 shrink-0 rounded-full bg-[#302F5A] text-white text-[10px] inline-flex items-center justify-center group-hover:bg-gold transition-colors"><i
                                        class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </article>

            </div>
        </div>
    </section>

    <!-- ======================= Calculator ======================= -->
    <!-- Calculator Section -->
    <?php get_template_part('template-parts/calculators'); ?>

    <section id="about" class="pb-16 sm:pb-20 lg:pb-24 scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 ">

            <div class="reveal text-center mb-6 sm:text-lg text-[#444444]">
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">finanace</p>
                <h2 class="font-prata text-[#302F5A] text-3xl xl:text-4xl leading-tight">Supported By</h2>
            </div>

            <!-- <div class="grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-6 gap-6"> -->
            <div class="flex flex-wrap justify-center gap-6">
                <!-- <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-6-scaled.png" alt="" class="h-16 mx-auto"> -->
                <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-4-scaled.png" alt="" class="h-16 mx-auto">
                <!-- <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-3.png" alt="" class="h-16 mx-auto">
                <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-2.png" alt="" class="h-16 mx-auto"> -->
                <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-9.png  " alt="" class="h-16 mx-auto">
                <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-12.png" alt="" class="h-16 mx-auto">
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
                        <span>1. Where can I find land for sale in Kalapatti, Coimbatore?</span>
                        <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus hidden"></i></span>
                    </summary>
                    <p class="mt-3 text-sm pl-5">If you're looking for land for sale in Kalapatti, Coimbatore, Aara Enclave is a premium residential layout located behind NGP College, just 10 minutes from Coimbatore International Airport. Spread across 5.27 acres with 56 well-planned plots, it is one of the trusted destinations for buyers seeking plots in Kalapatti with excellent connectivity and future growth potential.</p>
                </details>
                <details class="py-4">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
                        <span>2. Is Aara Enclave DTCP and RERA approved?</span>
                        <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus hidden"></i></span>
                    </summary>
                    <p class="mt-3 text-sm pl-5">Yes. Aara Enclave is a DTCP and RERA-approved residential project offering DTCP approved plots in Kalapatti, Coimbatore. The development spans 5.27 acres and features 100% Vaastu-compliant plots with clear legal titles, making it a secure choice for homebuyers and investors.</p>
                </details>
                <details class="py-4">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
                        <span>3. What amenities are available at Aara Enclave?</span>
                        <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus hidden"></i></span>
                    </summary>
                    <p class="mt-3 text-sm pl-5">Aara Enclave offers premium amenities, including solar street lights, corporation water, underground drainage, a compound wall, 24×7 security, CCTV surveillance, grand arch entrances, 33-ft black-top roads, underground electrical cabling, avenue plantation, a children's playground, and a turf area. These features make it one of the preferred gated community plots in Coimbatore for families and investors.</p>
                </details>
                <details class="py-4">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
                        <span>4. Is Aara Enclave close to IT parks in Coimbatore?</span>
                        <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus hidden"></i></span>
                    </summary>
                    <p class="mt-3 text-sm pl-5">Yes. Aara Enclave enjoys excellent connectivity to major IT hubs. Global Tech Park is just 3 km away, while TIDEL Park and KCT Tech Park are 5.2 km away. SVB Tech Park is 4.8 km away, and ELCOT IT Park is only 5.6 km from the project, making these plots in Kalapatti an ideal choice for IT professionals.</p>
                </details>
                <details class="py-4">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
                        <span>5. How far is Aara Enclave from Coimbatore International Airport?</span>
                        <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus hidden"></i></span>
                    </summary>
                    <p class="mt-3 text-sm pl-5">Aara Enclave is located just 5.5 km from Coimbatore International Airport, Sitra, which is approximately a 10-minute drive. This prime location makes it one of the most convenient options for land for sale in Kalapatti, Coimbatore.</p>
                </details>
                <details class="py-4">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
                        <span>6. Is Kalapatti a good area to buy residential land in Coimbatore?</span>
                        <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus hidden"></i></span>
                    </summary>
                    <p class="mt-3 text-sm pl-5">Yes. Kalapatti is one of Coimbatore's fastest-growing residential and investment destinations. Its proximity to IT parks, educational institutions like NGP College, hospitals, and Coimbatore International Airport has increased demand for land for sale in Kalapatti, Coimbatore. Buyers looking for plots in Kalapatti benefit from strong appreciation potential and excellent infrastructure.</p>
                </details>
                <details class="py-4">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
                        <span>7. What are the best DTCP approved plots in Kalapatti, Coimbatore?</span>
                        <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus hidden"></i></span>
                    </summary>
                    <p class="mt-3 text-sm pl-5">Aara Enclave is one of the leading DTCP approved plots in Kalapatti, Coimbatore. The project is also RERA-approved and offers clear legal titles, a thoughtfully planned 5.27-acre layout, 33-ft roads, 24×7 security, premium infrastructure, and excellent connectivity to Coimbatore Airport and major IT corridors. It is also recognized as one of the best gated community plots in Coimbatore.</p>
                </details>
                <details class="py-4">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
                        <span>8. Can NRIs buy land at Aara Enclave?</span>
                        <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus hidden"></i></span>
                    </summary>
                    <p class="mt-3 text-sm pl-5">Yes. NRIs can confidently invest in land for sale in Kalapatti, Coimbatore at Aara Enclave. Our team provides complete documentation assistance, power of attorney guidance, and remote transaction support, making the buying process smooth and hassle-free.</p>
                </details>
                <details class="py-4">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
                        <span>9. Is a bank loan available for plots at Aara Enclave?</span>
                        <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus hidden"></i></span>
                    </summary>
                    <p class="mt-3 text-sm pl-5">Yes. Since Aara Enclave offers DTCP approved plots in Kalapatti, Coimbatore with clear legal documentation, leading banks and financial institutions can provide plot loans, subject to the buyer's eligibility and the lender's approval.</p>
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