<?php

/**
 * Template Name: Apartment Landing Page
 * Apartment project landing page: Infinium Altitude, Ganapathy.
 *
 * Name / location / price / phone are pulled from the project's ACF fields when filled.
 * Images go in /assets/images/apartment/ (file names used below are placeholders).
 *
 * @package YourThemeName
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
    array('icon' => 'http://localhost/estate_partners/wp-content/uploads/2026/10/LocalExpertise.svg',  'title' => 'Prime Location',      'text' => "Situated on Sathy Road, Ganapathy, one of Coimbatore's established and well-connected residential corridors."),
    array('icon' => 'http://localhost/estate_partners/wp-content/uploads/2026/10/about-icons-6.svg',        'title' => 'Choose Your Layout', 'text' => 'Select from 2, 3, 3.5, or 4 BHK homes designed around different family needs.'),
    array('icon' => 'http://localhost/estate_partners/wp-content/uploads/2026/10/about-icons-5.svg', 'title' => 'Planned Development', 'text' => 'Two thoughtfully designed towers with modern architecture and 50+ lifestyle amenities.'),
    array('icon' => 'http://localhost/estate_partners/wp-content/uploads/2026/10/about-icons-2.svg',     'title' => 'Secure Community', 'text' => 'Gated community with 24×7 security and CCTV surveillance.'),
    array('icon' => 'http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-7.svg',     'title' => 'Vaastu Compliant', 'text' => 'Homes planned with 100% Vaastu compliance.'),
    array('icon' => 'http://localhost/estate_partners/wp-content/uploads/2026/10/icon-1.svg',     'title' => 'Future-Ready Location', 'text' => 'Close to IT parks, educational institutions, hospitals, and Prozone Mall.'),
);


$steps = array(
    array('icon' => 'http://localhost/estate_partners/wp-content/uploads/2026/10/about-icons-11.svg', 'title' => 'Explore Available Homes',      'text' => 'View floor plans and explore available units based on tower, configuration, and pricing.'),
    array('icon' => 'http://localhost/estate_partners/wp-content/uploads/2026/10/about-icons-12.svg', 'title' => 'SHORTLIST
YOUR home',    'text' => 'Choose a unit that suits your budget, preferred configuration, and lifestyle needs.'),
    array('icon' => 'http://localhost/estate_partners/wp-content/uploads/2026/10/about-icons-13.svg',             'title' => 'SITE VISIT &
INSPECTION',  'text' => 'Visit Infinium Altitude, view the sample unit, and clarify your questions with our team.'),
    array('icon' => 'http://localhost/estate_partners/wp-content/uploads/2026/10/about-icons-10.svg',           'title' => 'VERIFY &
CONFIRM',        'text' => 'Review project approvals, unit details, legal documentation, and payment terms before proceeding.'),
    array('icon' => 'http://localhost/estate_partners/wp-content/uploads/2026/10/about-icons-9.svg',    'title' => 'BOOK YOUR
HOME',         'text' => ' Pay the booking amount and complete the required booking formalities to reserve your unit.'),
    array('icon' => 'http://localhost/estate_partners/wp-content/uploads/2026/10/about-icons-8.svg',    'title' => 'REGISTRATION & OWNERSHIP',     'text' => 'Complete the sale agreement, balance payment, and registration process, and take ownership of your home.'),
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
            <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-1-scaled.jpg" alt="Infinium Altitude apartments in Ganapathy" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-gradient-to-r from-[#131313]/80 via-[#131313]/50 to-[#131313]/20"></div>
        </div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20 grid lg:grid-cols-[1.2fr_0.8fr] gap-10 items-center">
            <div class="text-white">
                <p class="font-prata text-3xl tracking-[0.3em] uppercase"><img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-11.png" alt="" class="h-14"></p>
                <h1 class="font-prata text-3xl sm:text-4xl lg:text-5xl leading-tight mt-5">Premium 2, 3, 3.5 &amp; 4 BHK Apartments in Ganapathy, Coimbatore</h1>
                <p class="mt-4 text-sm sm:text-base tracking-wide text-white/90">DTCP &amp; RERA APPROVED | 100% VAASTU COMPLIANT</p>
                <dl class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-4">
                    <div class="border-r-2 border-white px-2 text-center">
                        <dt class="font-prata text-3xl sm:text-4xl">4.13</dt>
                        <dd class="text-xs text-white/80">Acres</dd>
                    </div>
                    <div class="border-r-2 border-white px-2 text-center">
                        <dt class="font-prata text-3xl sm:text-4xl">232</dt>
                        <dd class="text-xs text-white/80">Units</dd>
                    </div>
                    <div class="border-r-2 border-white px-2 text-center">
                        <dt class="font-prata text-3xl sm:text-4xl">2 Towers</dt>
                        <dd class="text-xs text-white/80">Premium Plots</dd>
                    </div>
                    <div class="px-2 text-center">
                        <dt class="font-prata text-3xl sm:text-4xl">₹1.01 Cr</dt>
                        <dd class="text-xs text-white/80">Onwards</dd>
                    </div>
                </dl>

                <button
                    type="button"
                    class="js-open-enquiry-modal mt-8 inline-block bg-gold text-white text-base font-medium px-5 py-2 rounded-xl">
                    <span>Limited Apartments Available</span>
                </button>
            </div>

            <!-- Hero form -->
            <div id="enquire" class="bg-white rounded-xl shadow-xl p-6 sm:p-8 scroll-mt-28">
                <h2 class="font-prata text-2xl text-[#302F5A] text-center">Get Lowest Price &amp; Availability</h2>
                <p class="text-sm text-center mt-1 mb-5">Our property expert will get in touch with you</p>
                <form method="post" action="#" class="space-y-3">
                    <input type="text" name="name" required placeholder="Name*" class="w-full rounded-md border border-gold/40 bg-white px-4 py-3 text-sm text-[#444444] placeholder:text-[#444444]/60 focus:outline-none focus:border-gold" />
                    <input type="email" name="email" placeholder="Email" class="w-full rounded-md border border-gold/40 bg-white px-4 py-3 text-sm text-[#444444] placeholder:text-[#444444]/60 focus:outline-none focus:border-gold" />
                    <div class="flex items-stretch rounded-md border border-gold/40 bg-white overflow-hidden">
                        <span class="px-3 inline-flex items-center gap-1 text-sm text-[#444444] border-r border-gold/30">🇮🇳 +91</span>
                        <input type="tel" name="phone" required pattern="[0-9+\- ]{10,15}" placeholder="Phone Number*" class="flex-1 px-3 py-3 text-sm focus:outline-none min-w-0" />
                        <button type="button" data-send-otp class="bg-gold text-white text-xs font-semibold px-4">Send OTP</button>
                    </div>
                    <select name="interest" class="w-full rounded-md border border-gold/40 bg-white px-4 py-3 text-sm text-[#444444] focus:outline-none focus:border-gold">
                        <option value="">I'm interested in</option>
                        <option>2 BHK</option>
                        <option>3 BHK</option>
                        <option>3.5 BHK</option>
                        <option>4 BHK</option>
                    </select>
                    <button type="submit" class="w-full bg-[#302F5A] text-white font-medium rounded-md py-3 hover:bg-gold transition-colors">Get Price Now <i class="fa-solid fa-arrow-right text-xs ml-1"></i></button>
                </form>
                <p class="mt-4 text-xs text-center text-[#444444]">100% Secure | Expert Assistance | Quick Response</p>
                <div class="mt-4 grid grid-cols-3 gap-2 text-xs">
                    <a href="#site-visit" class="border border-gold/40 rounded-md py-2 px-1 text-center hover:border-gold"><i class="fa-regular fa-calendar-check text-gold block mb-1"></i>Book Site Visit</a>
                    <a href="#enquire-cta" class="border border-gold/40 rounded-md py-2 px-1 text-center hover:border-gold"><i class="fa-solid fa-download text-gold block mb-1"></i>Download Brochure</a>
                    <a href="https://wa.me/917092958830" class="border border-gold/40 rounded-md py-2 px-1 text-center hover:border-gold"><i class="fa-brands fa-whatsapp text-gold block mb-1"></i>Whatsapp Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature strip -->
    <section class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 xl:-mt-14 py-12 xl:py-0">
        <ul class="bg-white rounded-xl xl:rounded-full shadow-lg border border-ink-line grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 p-5 text-center text-base">
            <li class="flex flex-col items-center gap-2 border-r-1 px-3"><img src="http://localhost/estate_partners/wp-content/uploads/2026/10/about-icons-28.svg" alt="">Clear Legal Documentation</li>
            <li class="flex flex-col items-center gap-2 md:border-r-1 px-3"><img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-16.svg" alt="">Premium Apartments</li>
            <li class="flex flex-col items-center gap-2 border-r-1 md:border-r-0 lg:border-r-1 px-3"><img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-15.svg" alt="">Coimbatore Corporation Approved</li>
            <li class="flex flex-col items-center gap-2 border-r-0 md:border-r-1 px-3"><img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-14.svg" alt="">Gated Community</li>
            <li class="flex flex-col items-center gap-2 border-r-1 px-3"><img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-13.svg" alt="">50+ Lifestyle Amenities</li>
            <li class="flex flex-col items-center gap-2"><img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-12.svg" alt="">Established Location</li>
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
                <h2 class="font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight">Infinium Altitude - Project Overview</h2>
                <p class="mt-4 max-w-4xl mx-auto text-[#302F5A]-muted leading-relaxed"> Elevated living designed for everyday comfort. Two thoughtfully planned towers offering 2, 3, 3.5 & 4 BHK homes in one of Coimbatore's fastest-growing residential corridors.</p>
            </div>
            <div class="mt-10 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-5 text-base text-[#6B6B6B] text-center">
                <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-12.svg" alt="" class="w-14 h-14 mx-auto mb-4">
                    <h3 class="text-lg text-gold font-medium">Ganapathy</h3>
                    <p class="mt-2">Established residential corridor on Sathy Road</p>
                </div>
                <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-11.svg" alt="" class="w-14 h-14 mx-auto mb-4">
                    <h3 class="text-lg text-gold font-medium">RERA + DTCP</h3>
                    <p class="mt-2">Approved residential development</p>
                </div>
                <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-10.svg" alt="" class="w-14 h-14 mx-auto mb-4">
                    <h3 class="text-lg text-gold font-medium">4.13 Acres</h3>
                    <p class="mt-2">Thoughtfully planned residential development</p>
                </div>
                <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-16.svg" alt="" class="w-14 h-14 mx-auto mb-4">
                    <h3 class="text-lg text-gold font-medium">232 Units</h3>
                    <p class="mt-2">Across two premium towers</p>
                </div>
                <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-9.svg" alt="" class="w-14 h-14 mx-auto mb-4">
                    <h3 class="text-lg text-gold font-medium">2 - 4 BHK</h3>
                    <p class="mt-2">Flexible configurations for every family size</p>
                </div>
                <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-8.svg" alt="" class="w-14 h-14 mx-auto mb-4">
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
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-14.png" alt="Property agreement signing with Estate Partners guidance" class="w-full min-h-[420px] sm:min-h-[520px]" loading="lazy" />
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
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">Your Dream Home</p>
                <h2 class="font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight">Elevated Living
                    Begins Here</h2>
                <p class="mt-5 leading-relaxed"> Infinium Altitude by Infinium Developers offers premium 2, 3, 3.5 & 4 BHK apartments in Ganapathy, Coimbatore, on the Sathy Road corridor — created for families and professionals looking for a well-connected, amenity-rich place to call home.</p>
                <p class="mt-4 leading-relaxed">Spread across 4.13 acres with 232 units in two towers — the Executive Tower (2 & 3 BHK) and the Signature Tower (3.5 & 4 BHK) — the development offers 50+ lifestyle amenities, 100% Vaastu-compliant planning, and RERA & DTCP approvals.</p>
                <p class="mt-4 leading-relaxed">With access to major schools, colleges, hospitals, IT parks, and Prozone Mall just minutes away, Infinium Altitude brings together the essentials for both homeowners and long-term investors.</p>
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


    <!-- ======================= WHY INVEST ======================= -->
    <section id="invest" class="bg-brand-cream py-16 sm:py-20 scroll-mt-28">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto">
                <p class="text-gold font-semibold uppercase tracking-wide text-sm">Location Advantage</p>
                <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] mt-2">Why Invest in Ganapathy?</h2>
            </div>
            <div class="mt-10 grid md:grid-cols-2 gap-8">
                <div class="space-y-5">
                    <div class="bg-white rounded-2xl p-5 shadow-sm">
                        <h3 class="font-prata text-lg text-gold">Education</h3>
                        <p class="text-sm mt-2">Home to schools like Camford International and CSI Matriculation, with Kumaraguru College, KCT and PSG Tech nearby.</p>
                    </div>
                    <div class="bg-white rounded-2xl p-5 shadow-sm">
                        <h3 class="font-prata text-lg text-gold">Employment</h3>
                        <p class="text-sm mt-2">Close to CHIL SEZ, KGISL, KCT Tech Park and Adithya Tech Park, all within roughly 5 km.</p>
                    </div>
                    <div class="bg-white rounded-2xl p-5 shadow-sm">
                        <h3 class="font-prata text-lg text-gold">Healthcare</h3>
                        <p class="text-sm mt-2">Hospitals including KG Speciality Centre, Sri Ramakrishna Hospital and Surya Hospital nearby.</p>
                    </div>
                </div>
                <div class="space-y-5">
                    <div class="bg-white rounded-2xl p-5 shadow-sm">
                        <h3 class="font-prata text-lg text-gold">Connectivity</h3>
                        <p class="text-sm mt-2">Well-linked to central Coimbatore via Sathy Road (NH 544), with frequent bus services.</p>
                    </div>
                    <div class="bg-white rounded-2xl p-5 shadow-sm">
                        <h3 class="font-prata text-lg text-gold">Shopping</h3>
                        <p class="text-sm mt-2">Prozone Mall is approximately 500 metres away.</p>
                    </div>
                    <div class="bg-white rounded-2xl p-5 shadow-sm">
                        <h3 class="font-prata text-lg text-gold">Residential Growth</h3>
                        <p class="text-sm mt-2">A long-established and steadily developing residential corridor with a mix of new and existing apartment projects.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================= Need Guidence ======================= -->
    <section id="about" class="py-16 sm:py-20 lg:py-24 scroll-mt-24">

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div class="flex gap-5 flex-col">
                <div class="container mx-auto mb-6">
                    <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">infinium altitude for</p>
                    <h2 class="font-prata text-3xl text-[#302F5A] sm:text-4xl leading-tight"> Who Is Infinium Altitude For?</h2>
                </div>
                <div class="w-full rounded-2xl shadow-lg flex gap-6 items-center p-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/lp-icon-3.svg" alt="Looking for a Ready Home?" class="w-16">

                    <div class="space-y-2">
                        <h3 class="font-semibold text-gold text-lg">Looking for a Ready Home?</h3>
                        <p class="text-[#4D5461]">Move into a thoughtfully designed home
                            with premium specifications and modern amenities.</p>
                    </div>
                </div>

                <div class="w-full rounded-2xl shadow-lg flex gap-6 items-center p-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/lp-icon-2.svg" alt="Looking to Invest?" class="w-16">

                    <div class="space-y-2">
                        <h3 class="font-semibold text-gold text-lg">Looking to Invest?</h3>
                        <p class="text-[#4D5461]">Explore locations and projects with potential for
                            long-term value.</p>
                    </div>
                </div>

                <div class="w-full rounded-2xl shadow-lg flex gap-6 items-center p-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/lp-icon-1.svg" alt="Planning for Your Family?" class="w-16">

                    <div class="space-y-2">
                        <h3 class="font-semibold text-gold text-lg">Planning for Your Family?</h3>
                        <p class="text-[#4D5461]">Find plots and properties that can become your future
                            home or investment.</p>
                    </div>
                </div>
            </div>

            <div class="reveal relative">
                <div class="rounded-2xl overflow-hidden">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-1.png" alt="Property agreement signing with Estate Partners guidance" class="w-full h-full min-h-[420px] object-cover" loading="lazy" />
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
            <h2 class="reveal <?php echo esc_attr($h2); ?> text-center">Why Infinium Altitude</h2>
            <p class="reveal mt-3 text-center text-sm text-[#444444]">Well-planned plots in prime locations, giving you the perfect foundation to build your dream home and a <b>brighter future</b></p>

            <div class="mt-10 sm:mt-12 !py-2" style="--swiper-theme-color:#b3814e;">
                <div class="grid smg:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php foreach ($why as $i => $item) : ?>
                        <article class="why-card group h-full rounded-2xl border border-ink-line bg-white p-7 text-[#444444] shadow-sm transition-colors duration-300 hover:bg-gold hover:border-gold hover:text-white hover:shadow-xl">
                            <span class="w-12 h-12 rounded-full bg-gold-pale text-gold inline-flex items-center justify-center text-lg transition-colors group-hover:bg-white/20 group-hover:text-white">
                                <img src="<?php echo esc_url($item['icon']); ?>" alt="<?php echo esc_attr($item['title']); ?>" class="w-16 h-16" loading="lazy" />
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
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/icons-ss-1.svg" alt="" class="w-16 h-16">
                    Swimming Pool
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/icons-ss-17.svg" alt="" class="w-16 h-16">
                    Clubhouse with 50+ Amenities
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/icons-ss-16.svg" alt="" class="w-16 h-16">
                    Mini Theatre
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/icons-ss-15.svg" alt="" class="w-16 h-16">
                    Gym
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/icons-ss-14.svg" alt="" class="w-16 h-16">
                    Party Hall
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/icons-ss-13.svg" alt="" class="w-16 h-16">
                    24x7 CCTV surveillance
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/icons-ss-12.svg" alt="" class="w-16 h-16">
                    Steam Room
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/icons-ss-11.svg" alt="" class="w-16 h-16">
                    Sauna Room
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/icons-ss-10.svg" alt="" class="w-16 h-16">
                    Library
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/icons-ss-9.svg" alt="" class="w-16 h-16">
                    Amphitheater
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/icons-ss-8.svg" alt="" class="w-16 h-16">
                    Meeting Room
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/icons-ss-7.svg" alt="" class="w-16 h-16">
                    Visitors Lounge
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/icons-ss-2.svg" alt="" class="w-16 h-16">
                    Kids Play Area
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/icons-ss-3.svg" alt="" class="w-16 h-16">
                    Lawn Mound
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/icons-ss-1.svg" alt="" class="w-16 h-16">
                    Stepped Reflective Pool
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/icons-ss-4.svg" alt="" class="w-16 h-16">
                    Caretaker's Room
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/icons-ss-5.svg" alt="" class="w-16 h-16">
                    Black Road Top
                </li>
                <li class="rounded-2xl border-1 border-[#B3814E33] p-5 flex flex-col items-center">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/icons-ss-6.svg" alt="" class="w-16 h-16">
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
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Rectangle-158.png" alt="Infinium Altitude gallery image" class="rounded-2xl w-full aspect-[4/3] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Rectangle-159.png" alt="Infinium Altitude gallery image" class="rounded-2xl w-full aspect-[4/3] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Rectangle-161.png" alt="Infinium Altitude gallery image" class="rounded-2xl w-full aspect-[4/3] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Rectangle-162.png" alt="Infinium Altitude gallery image" class="rounded-2xl w-full aspect-[4/3] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Rectangle-163.png" alt="Infinium Altitude gallery image" class="rounded-2xl w-full aspect-[4/3] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Rectangle-164.png" alt="Infinium Altitude gallery image" class="rounded-2xl w-full aspect-[4/3] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Rectangle-165.png" alt="Infinium Altitude gallery image" class="rounded-2xl w-full aspect-[4/3] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Rectangle-166.png" alt="Infinium Altitude gallery image" class="rounded-2xl w-full aspect-[4/3] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Rectangle-167.png" alt="Infinium Altitude gallery image" class="rounded-2xl w-full aspect-[4/3] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Rectangle-168.png" alt="Infinium Altitude gallery image" class="rounded-2xl w-full aspect-[4/3] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Rectangle-169.png" alt="Infinium Altitude gallery image" class="rounded-2xl w-full aspect-[4/3] object-cover" loading="lazy" />
                    </div>

                    <div class="swiper-slide !h-auto">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Rectangle-170.png" alt="Infinium Altitude gallery image" class="rounded-2xl w-full aspect-[4/3] object-cover" loading="lazy" />
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
            <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/plans-2.png" alt="" class="mx-auto">
        </div>
    </section>

    <!-- ======================= Floor Plan ======================= -->
    <section id="about" class="py-16 sm:py-20  bg-[#FCF7F3] lg:py-24 scroll-mt-24">
        <div class="container mx-auto text-center">
            <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] mt-2 mb-6">FLOOR LAYOUT PLANS</h2>
            <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/plans-1.png" alt="" class="mx-auto">
        </div>
    </section>

    <!-- Price tables -->
    <section class="py-16 sm:py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mt-10 grid gap-8">
                <div class="text-center">
                    <p class="text-gold font-semibold uppercase tracking-wide text-sm">Property</p>
                    <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] mt-2 mb-6">Apartment Specifications</h2>

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
                                <div class="bg-[#FCF7F3] py-2.5 px-4 text-center font-bold text-navyText tracking-wider text-xs sm:text-sm border-b border-[#B3814E80] uppercase">
                                    STRUCTURE
                                </div>

                                <div class="divide-y divide-tableBorder border-b border-[#B3814E80]">
                                    <!-- Row 1 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-navyText md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Floors
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            Ground + 1st Floor (2nd Floor in Villa 6 & 7)
                                        </div>
                                    </div>

                                    <!-- Row 2 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-navyText md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Structure system
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            RCC Framed Structure - Earthquake resistant (seismic compliant - Zone 3)
                                        </div>
                                    </div>

                                    <!-- Row 3 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-navyText md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Masonry
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            200mm external walls & 100mm internal walls
                                        </div>
                                    </div>

                                    <!-- Row 4 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-navyText md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Floor to Floor Height
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            3250 mm (incl. slab)
                                        </div>
                                    </div>

                                    <!-- Row 5 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-navyText md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            ATT
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            Anti-termite treatment will be provided
                                        </div>
                                    </div>
                                </div>

                                <!-- ================= SECTION 2: FLOOR FINISHES ================= -->
                                <div class="bg-[#FCF7F3] py-2.5 px-4 text-center font-bold text-navyText tracking-wider text-xs sm:text-sm border-b border-[#B3814E80] uppercase">
                                    FLOOR FINISHES
                                </div>

                                <div class="divide-y divide-tableBorder border-b border-[#B3814E80]">
                                    <!-- Row 1 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-navyText md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Living / Dining
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            Premium range 1800mm x 1200mm vitrified tiles
                                        </div>
                                    </div>

                                    <!-- Row 2 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-navyText md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Bedrooms & Kitchen
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            Premium range 1200mm x 600mm vitrified tiles
                                        </div>
                                    </div>

                                    <!-- Row 3 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-navyText md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Outdoor Deck Area
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            Wood finish deck tiles
                                        </div>
                                    </div>

                                    <!-- Row 4 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-navyText md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Balconies, Toilets & Utility
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            Anti-skid tiles
                                        </div>
                                    </div>

                                    <!-- Row 5 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-navyText md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Car Park
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            Durable parking tiles
                                        </div>
                                    </div>

                                    <!-- Row 6 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-navyText md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Open Terrace
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            Weather resistant pressed clay tiles
                                        </div>
                                    </div>
                                </div>

                                <!-- ================= SECTION 3: WALL & CEILING FINISHES ================= -->
                                <div class="bg-[#FCF7F3] py-2.5 px-4 text-center font-bold text-navyText tracking-wider text-xs sm:text-sm border-b border-[#B3814E80] uppercase">
                                    WALL & CEILING FINISHES
                                </div>

                                <div class="divide-y divide-tableBorder">
                                    <!-- Row 1 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-navyText md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Internal Walls & Ceilings
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            2 coats of putty, 1 coat of primer & 2 coats of premium emulsion paint
                                        </div>
                                    </div>

                                    <!-- Row 2 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-navyText md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
                                            Exterior & Elevation
                                        </div>
                                        <div class="md:col-span-8 p-2.5 sm:p-3 text-gray-700 bg-white flex items-center">
                                            Weather resistant texture finish
                                        </div>
                                    </div>

                                    <!-- Row 3 -->
                                    <div class="grid grid-cols-1 md:grid-cols-12">
                                        <div class="md:col-span-4 p-2.5 sm:p-3 text-right font-bold text-navyText md:border-r border-[#B3814E80] flex items-center justify-end bg-white">
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
                    <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] mt-2 mb-6">Executive</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm border border-ink-line rounded-xl overflow-hidden">
                            <thead class="bg-[#302F5A] text-white">
                                <tr>
                                    <th class="px-4 py-3">BHK</th>
                                    <th class="px-4 py-3">UNIT TYPE</th>
                                    <th class="px-4 py-3">SUPER BUILT - UP AREA</th>
                                    <th class="px-4 py-3">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t border-ink-line">
                                    <td class="px-4 py-3">2 BHK </td>
                                    <td class="px-4 py-3">Apartment</td>
                                    <td class="px-4 py-3">1,377 sq.ft</td>
                                    <td class="px-4 py-3">Rs.1.01 Crs Onwards*</td>
                                </tr>
                                <tr class="border-t border-ink-line bg-brand-cream">
                                    <td class="px-4 py-3">3 BHK</td>
                                    <td class="px-4 py-3">Apartment</td>
                                    <td class="px-4 py-3">2,137 sq.ft</td>
                                    <td class="px-4 py-3">Rs.1.5 Crs Onwards*</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="text-center">
                    <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] mt-2 mb-6">Signature</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm border border-ink-line rounded-xl overflow-hidden">
                            <thead class="bg-[#302F5A] text-white">
                                <tr>
                                    <th class="px-4 py-3">Type</th>
                                    <th class="px-4 py-3">Category</th>
                                    <th class="px-4 py-3">Size</th>
                                    <th class="px-4 py-3">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t border-ink-line">
                                    <td class="px-4 py-3">3.5 BHK</td>
                                    <td class="px-4 py-3">Apartment</td>
                                    <td class="px-4 py-3">2,537 sq.ft</td>
                                    <td class="px-4 py-3">Rs.2.02 Crs Onwards*</td>
                                </tr>
                                <tr class="border-t border-ink-line bg-brand-cream">
                                    <td class="px-4 py-3">4 BHK</td>
                                    <td class="px-4 py-3">Apartment</td>
                                    <td class="px-4 py-3">3,332 sq.ft</td>
                                    <td class="px-4 py-3">Rs.2.83 Crs Onwards*</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-5xl w-full mx-auto text-center">
        <div class="<?php echo esc_attr($container); ?>">
            <h2 class="reveal <?php echo esc_attr($h2); ?> text-center">Location Benefits</h2>
            <p class="reveal mt-3 text-center text-sm text-[#444444]">Infinium Altitude is strategically situated on Sathy Road, Ganapathy, one of Coimbatore's established residential corridors. Its proximity to major IT parks, educational institutions, and healthcare facilities makes it an ideal choice for both homeowners and investors.</p>
        </div>

        <iframe
            title="<?php esc_attr_e('Estate Partners location map', 'vnktheme-textdomain'); ?>"
            src="<?php echo esc_url('https://maps.google.com/maps?q=' . rawurlencode($address) . '&t=&z=16&ie=UTF8&iwloc=&output=embed'); ?>"
            class="block w-full h-[320px] sm:h-[420px] lg:h-[520px] border-0 mt-6"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            allowfullscreen></iframe>
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

        <p class="text-gold font-bold uppercase tracking-[0.18em] text-center text-sm mb-3">apartment Ownership vs Investment</p>
        <h2 class="reveal <?php echo esc_attr($h2); ?> text-center">Move In or Invest — Either Way, You're Covered</h2>
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
                            Choose your preferred configuration
                        </span>
                    </div>

                    <!-- Item 2 -->
                    <div class="flex items-start space-x-3.5 p-4 sm:p-4.5">
                        <i class="fa-solid fa-circle-check text-gold text-base mt-0.5 shrink-0"></i>
                        <span class="text-xs sm:text-sm text-gray-700 font-medium leading-snug">
                            Move into a fully finished home
                        </span>
                    </div>

                    <!-- Item 3 -->
                    <div class="flex items-start space-x-3.5 p-4 sm:p-4.5">
                        <i class="fa-solid fa-circle-check text-gold text-base mt-0.5 shrink-0"></i>
                        <span class="text-xs sm:text-sm text-gray-700 font-medium leading-snug">
                            Enjoy 50+ lifestyle amenities from day one
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
                        INVEST FOR THE FUTURE
                    </h3>
                </div>

                <!-- Inner White Card Content -->
                <div class="bg-white rounded-xl overflow-hidden divide-y divide-gold border border-gold flex-1">
                    <!-- Item 1 -->
                    <div class="flex items-start space-x-3.5 p-4 sm:p-4.5">
                        <i class="fa-solid fa-circle-check text-gold text-base mt-0.5 shrink-0"></i>
                        <span class="text-xs sm:text-sm text-gray-700 font-medium leading-snug">
                            Potential long-term appreciation
                        </span>
                    </div>

                    <!-- Item 2 -->
                    <div class="flex items-start space-x-3.5 p-4 sm:p-4.5">
                        <i class="fa-solid fa-circle-check text-gold text-base mt-0.5 shrink-0"></i>
                        <span class="text-xs sm:text-sm text-gray-700 font-medium leading-snug">
                            Strong rental demand from nearby tech parks
                        </span>
                    </div>

                    <!-- Item 3 -->
                    <div class="flex items-start space-x-3.5 p-4 sm:p-4.5">
                        <i class="fa-solid fa-circle-check text-gold text-base mt-0.5 shrink-0"></i>
                        <span class="text-xs sm:text-sm text-gray-700 font-medium leading-snug">
                            Own an apartment in a growing IT corridor
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
            <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">LATEST apartment PRICE</p>
            <h2 class="font-prata text-3xl text-[#302F5A] sm:text-4xl leading-tight">Get the Latest Infinium Altitude Price</h2>
            <p class="mt-4 max-w-4xl mx-auto text-[#444444] leading-relaxed">Buying property is a major decision. You don't have to figure it out alone. Tell us what you are looking for — your preferred location,
                property type, budget and purpose — and our team can help you shortlist suitable projects in Coimbatore.</p>
        </div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <div class="grid grid-cols-2 bg-[#FCF7F3] p-5 rounded-2xl border border-[#B3814E80] gap-6">
                <h2 class="text-gold font-prata text-xl font-semibold text-center col-span-2"> Apartment prices can vary based on:</h2>

                <div class="rounded-2xl border border-[#B3814E80] bg-white flex flex-col gap-4 items-center text-[#302F5A] p-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-4.svg" alt="" class="w-14 h-14">
                    <p>Floor level</p>
                </div>

                <div class="rounded-2xl border border-[#B3814E80] bg-white flex flex-col gap-4 items-center text-[#302F5A] p-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-3.svg" alt="" class="w-14 h-14">
                    <p>Floor level</p>
                </div>

                <div class="rounded-2xl border border-[#B3814E80] bg-white flex flex-col gap-4 items-center text-[#302F5A] p-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-1.svg" alt="" class="w-14 h-14">
                    <p>Floor level</p>
                </div>

                <div class="rounded-2xl border border-[#B3814E80] bg-white flex flex-col gap-4 items-center text-[#302F5A] p-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-2.svg" alt="" class="w-14 h-14">
                    <p>Floor level</p>
                </div>

                <div class="col-span-2">
                    <?php echo do_shortcode('[wpforms id="41"]'); ?>
                </div>
            </div>

            <div class="reveal relative">
                <div class="rounded-2xl overflow-hidden">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-7.png" alt="Property agreement signing with Estate Partners guidance" class="w-full h-full min-h-[420px] object-cover" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <!-- ======================= TESTIMONIALS ======================= -->
    <section id="testimonials" class="py-16 sm:py-20 lg:py-24 bg-[#302F5A] scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-[30%_70%]">
            <div class="text-white max-w-4xl mx-auto mb-12 reveal">
                <p class="ont-bold uppercase tracking-[0.18em] text-sm mb-3">What Our Customers Say</p>
                <h2 class="font-prata text-3xl sm:text-4xl leading-tight">Real experiences from people who trusted Estate Partners.</h2>
                <!-- <p class="mt-4 text-[#302F5A]-muted">Real experiences from people who trusted Estate Partners.</p> -->
            </div>

            <div class="swiper testimonials-swiper reveal w-full h-max">
                <div class="swiper-wrapper pb-14">
                    <figure class="swiper-slide bg-white rounded-2xl border border-ink-line p-7 sm:p-8 shadow-sm flex flex-col">
                        <div class="text-gold text-6xl text-gold/50 mb-4"><i class="fa-solid fa-quote-left"></i></div>
                        <blockquote class="text-[#302F5A]-soft leading-relaxed flex-1">The team understood exactly what we were looking for and helped us shortlist properties based on our budget and preferred location.</blockquote>
                        <figcaption class="mt-6 flex items-center gap-4">
                            <img src="<?php echo esc_url($img_uri . '/17_ellipse_15.png'); ?>" alt="Vigneshwaran" class="w-12 h-12 rounded-full object-cover" loading="lazy" />
                            <span><span class="block font-semibold">Vigneshwaran</span><span class="block text-xs text-[#302F5A]-muted">Home Buyer, Coimbatore</span></span>
                        </figcaption>
                    </figure>
                    <figure class="swiper-slide bg-white rounded-2xl border border-ink-line p-7 sm:p-8 shadow-sm flex flex-col">
                        <div class="text-gold text-6xl text-gold/50 mb-4"><i class="fa-solid fa-quote-left"></i></div>
                        <blockquote class="text-[#302F5A]-soft leading-relaxed flex-1">The project information and site-visit support made the entire property search much easier.</blockquote>
                        <figcaption class="mt-6 flex items-center gap-4">
                            <img src="<?php echo esc_url($img_uri . '/18_ellipse_15.png'); ?>" alt="Kavi Priya" class="w-12 h-12 rounded-full object-cover" loading="lazy" />
                            <span><span class="block font-semibold">Kavi Priya</span><span class="block text-xs text-[#302F5A]-muted">Home Buyer, Coimbatore</span></span>
                        </figcaption>
                    </figure>
                    <figure class="swiper-slide bg-white rounded-2xl border border-ink-line p-7 sm:p-8 shadow-sm flex flex-col">
                        <div class="text-gold text-6xl text-gold/50 mb-4"><i class="fa-solid fa-quote-left"></i></div>
                        <blockquote class="text-[#302F5A]-soft leading-relaxed flex-1">The team understood exactly what we were looking for and helped us shortlist properties based on our budget and preferred location.</blockquote>
                        <figcaption class="mt-6 flex items-center gap-4">
                            <img src="<?php echo esc_url($img_uri . '/17_ellipse_15.png'); ?>" alt="Vigneshwaran" class="w-12 h-12 rounded-full object-cover" loading="lazy" />
                            <span><span class="block font-semibold">Vigneshwaran</span><span class="block text-xs text-[#302F5A]-muted">Home Buyer, Coimbatore</span></span>
                        </figcaption>
                    </figure>
                </div>
                <div class="swiper-pagination"></div>
                <div class="flex gap-6">
                    <div class="swiper-button-prev !relative !left-0 !mt-0 hidden md:flex"></div>
                    <div class="swiper-button-next !relative !right-0 !mt-0 hidden md:flex"></div>
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
                <p class="mt-5 leading-relaxed">For NRIs looking to invest back home, we offer a seamless and structured apartment-buying experience. From remote assistance to verified legal documentation and guided processes, every detail is handled with care </p>
                <p class="mt-4 leading-relaxed">So your investment in Coimbatore is secure, transparent, and easy to manage, no matter where you are.</p>
                <button
                    type="button"
                    class="js-open-enquiry-modal mt-8 inline-flex items-center gap-2 bg-gold hover:bg-gold text-white font-semibold px-7 py-3.5 rounded-lg transition-colors">
                    <span>Explore More </span>
                    <i class="fa-solid fa-arrow-right text-sm"></i>
                </button>
            </div>

            <div class="reveal relative">
                <div class="rounded-2xl overflow-hidden">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-13.png" alt="Property agreement signing with Estate Partners guidance" class="w-full min-h-[420px] sm:min-h-[520px]" loading="lazy" />
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
                <div class="rounded-2xl overflow-hidden">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-5.png" alt="Property agreement signing with Estate Partners guidance" class="w-full h-full min-h-[420px] object-cover" loading="lazy" />
                </div>
            </div>

            <div class="grid lg:grid-cols-3 bg-[#FCF7F3] p-6 rounded-2xl border border-[#B3814E80] gap-6">
                <h2 class="text-gold font-prata text-xl font-semibold text-center col-span-3">Ready to Find Your Villa?</h2>
                <p class="max-w-4xl mx-auto text-[#444444] leading-relaxed col-span-3">Get the Latest Price, Availability & Project Details</p>

                <div class="col-span-3">
                    <?php echo do_shortcode('[wpforms id="41"]'); ?>
                </div>

            </div>

        </div>
    </section>

    <!-- Developer -->
    <section class="bg-brand-cream py-16 sm:py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-[auto_1fr_1.3fr] gap-6 items-center pb-8 border-b border-ink-line">
                <span class="w-20 h-20 rounded-full bg-white shadow inline-flex items-center justify-center overflow-hidden">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/image-254.png" alt="Infinium Realty" class="w-14" loading="lazy" />
                </span>
                <div>
                    <p class="text-gold font-semibold uppercase text-xs tracking-wide">Developer</p>
                    <h2 class="font-prata text-3xl text-[#302F5A]">Infinium Realty</h2>
                </div>
                <p class="text-xs leading-relaxed">Infinium Realty focuses on developing premium residential properties in Coimbatore, with projects designed around location, planning and long-term usability. Infinium Altitude reflects this approach, combining modern architecture with a comprehensive amenity offering across a well-connected Sathy Road location.</p>
            </div>
        </div>
    </section>

    <section id="about" class="py-16 sm:py-20 lg:py-24 scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 ">

            <div class="reveal text-center mb-6 sm:text-lg text-[#444444]">
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">finanace</p>
                <h2 class="font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight">Supported By</h2>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-6 gap-6">
                <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-6-scaled.png" alt="" class="h-16">
                <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-4-scaled.png" alt="" class="h-16">
                <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-3.png" alt="" class="h-16">
                <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-2.png" alt="" class="h-16">
                <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-9.png  " alt="" class="h-16">
                <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-12.png" alt="" class="h-16">
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
                        <span>1. What's included in the listed apartment price: is it the final cost?</span>
                        <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus hidden"></i></span>
                    </summary>
                    <p class="mt-3 text-sm pl-5">The listed price is typically the base sale price. Additional costs like GST, registration, stamp duty, parking charges and club/amenity fees are usually separate.</p>
                </details>
                <details class="py-4">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
                        <span>2. What's the difference between carpet area and built-up area?</span>
                        <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus hidden"></i></span>
                    </summary>
                    <p class="mt-3 text-sm pl-5">Carpet area is the usable floor area inside the walls of the apartment. Built-up area adds the thickness of the walls and balconies, and super built-up adds your share of common areas.</p>
                </details>
                <details class="py-4">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
                        <span>3. Are these apartments ready-to-move or under construction?</span>
                        <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus hidden"></i></span>
                    </summary>
                    <p class="mt-3 text-sm pl-5">Please contact our team for the latest construction status and handover timeline of each tower.</p>
                </details>
                <details class="py-4">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
                        <span>4. Can I filter apartments by BHK configuration and budget?</span>
                        <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus hidden"></i></span>
                    </summary>
                    <p class="mt-3 text-sm pl-5">Yes. Our team can shortlist 2, 3, 3.5 and 4 BHK options that match your budget and preferred tower.</p>
                </details>
                <details class="py-4">
                    <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
                        <span>5. Is home loan financing available for these apartment projects?</span>
                        <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus hidden"></i></span>
                    </summary>
                    <p class="mt-3 text-sm pl-5">Yes. The project is supported by leading banks and housing finance companies. Our team can help with eligibility and documentation.</p>
                </details>
            </div>
        </div>
    </section>

    <!-- CTA strip -->
    <section class="bg-gold">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 flex flex-col md:flex-row items-center justify-between gap-5">
            <p class="text-white font-semibold text-xl sm:text-2xl text-center md:text-left">Let's help you find a space that truly feels home</p>
            <a href="tel:+917092958830" class="inline-flex items-center gap-3 bg-[#302F5A] text-white font-semibold text-xl px-6 py-3 rounded-md">
                <i class="fa-solid fa-phone"></i>+91 70929 58830
            </a>
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
                        slidesPerView: 3,
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
    });
</script>

<?php get_footer(); ?>