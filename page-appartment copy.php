<?php

/**
 * Template Name: Apartment Landing Page olg
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
?>

<main>

  <!-- ======================= HERO ======================= -->
  <section class="relative isolate">
    <div class="absolute inset-0 -z-10">
      <img src="assets/images/apartment/hero.jpg" alt="Infinium Altitude apartments in Ganapathy" class="w-full h-full object-cover" />
      <div class="absolute inset-0 bg-gradient-to-r from-[#131313]/80 via-[#131313]/50 to-[#131313]/20"></div>
    </div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20 grid lg:grid-cols-[1.2fr_0.8fr] gap-10 items-center">
      <div class="text-white">
        <p class="font-prata text-3xl tracking-[0.3em] uppercase">ALTITUDE</p>
        <h1 class="font-prata text-3xl sm:text-4xl lg:text-5xl leading-tight mt-5">Premium 2, 3, 3.5 &amp; 4 BHK Apartments in Ganapathy, Coimbatore</h1>
        <p class="mt-4 text-sm sm:text-base tracking-wide text-white/90">DTCP &amp; RERA APPROVED | 100% VAASTU COMPLIANT</p>
        <dl class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-4">
          <div class="border-l-2 border-gold pl-3">
            <dt class="font-prata text-2xl">4.13</dt>
            <dd class="text-xs text-white/80">Acres</dd>
          </div>
          <div class="border-l-2 border-gold pl-3">
            <dt class="font-prata text-2xl">232</dt>
            <dd class="text-xs text-white/80">Units</dd>
          </div>
          <div class="border-l-2 border-gold pl-3">
            <dt class="font-prata text-2xl">2</dt>
            <dd class="text-xs text-white/80">Towers</dd>
          </div>
          <div class="border-l-2 border-gold pl-3">
            <dt class="font-prata text-2xl">₹1.01 Cr Onwards</dt>
            <dd class="text-xs text-white/80">Starting Price</dd>
          </div>
        </dl>
        <span class="mt-8 inline-block bg-gold text-white text-sm font-medium px-5 py-2 rounded-full">Limited Apartments Available</span>
      </div>

      <!-- Hero form -->
      <div id="enquire" class="bg-white rounded-2xl shadow-xl p-6 sm:p-8 scroll-mt-28">
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
  <section class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 mt-8">
    <ul class="bg-white rounded-2xl shadow-lg border border-ink-line grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 p-5 text-center text-xs">
      <li class="flex flex-col items-center gap-2"><i class="fa-solid fa-file-shield text-gold text-xl"></i>Clear Legal Documentation</li>
      <li class="flex flex-col items-center gap-2"><i class="fa-solid fa-building text-gold text-xl"></i>Premium Apartments</li>
      <li class="flex flex-col items-center gap-2"><i class="fa-solid fa-landmark text-gold text-xl"></i>Coimbatore Corporation Approved</li>
      <li class="flex flex-col items-center gap-2"><i class="fa-solid fa-shield-halved text-gold text-xl"></i>Gated Community</li>
      <li class="flex flex-col items-center gap-2"><i class="fa-solid fa-dumbbell text-gold text-xl"></i>50+ Lifestyle Amenities</li>
      <li class="flex flex-col items-center gap-2"><i class="fa-solid fa-location-dot text-gold text-xl"></i>Established Location</li>
    </ul>
  </section>

  <!-- Sticky tabs -->
  <nav class="sticky top-0 z-40 bg-white border-b border-ink-line shadow-sm">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 overflow-x-auto no-scrollbar">
      <ul class="flex gap-2 py-3 text-sm font-medium whitespace-nowrap">
        <li><a href="#overview" data-tab class="px-4 py-2 rounded-full border border-ink-line hover:border-gold is-active">Project Overview</a></li>
        <li><a href="#why" data-tab class="px-4 py-2 rounded-full border border-ink-line hover:border-gold">Why Infinium Altitude</a></li>
        <li><a href="#layout" data-tab class="px-4 py-2 rounded-full border border-ink-line hover:border-gold">Layout</a></li>
        <li><a href="#amenities" data-tab class="px-4 py-2 rounded-full border border-ink-line hover:border-gold">Amenities</a></li>
        <li><a href="#gallery" data-tab class="px-4 py-2 rounded-full border border-ink-line hover:border-gold">Gallery</a></li>
        <li><a href="#invest" data-tab class="px-4 py-2 rounded-full border border-ink-line hover:border-gold">Why Invest in Ganapathy?</a></li>
      </ul>
    </div>
  </nav>

  <!-- ======================= OVERVIEW ======================= -->
  <section id="overview" class="py-16 sm:py-20 scroll-mt-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto">
        <p class="text-gold font-semibold uppercase tracking-wide text-sm">Overview</p>
        <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] mt-2">Project Overview</h2>
      </div>
      <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
        <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
          <h3 class="font-prata text-lg text-gold">Ganapathy</h3>
          <p class="text-sm mt-2">Established residential corridor on Sathy Road</p>
        </div>
        <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
          <h3 class="font-prata text-lg text-gold">RERA + DTCP</h3>
          <p class="text-sm mt-2">Approved residential development</p>
        </div>
        <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
          <h3 class="font-prata text-lg text-gold">4.13 Acres</h3>
          <p class="text-sm mt-2">Thoughtfully planned residential development</p>
        </div>
        <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
          <h3 class="font-prata text-lg text-gold">232 Units</h3>
          <p class="text-sm mt-2">Across two premium towers</p>
        </div>
        <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
          <h3 class="font-prata text-lg text-gold">2 - 4 BHK</h3>
          <p class="text-sm mt-2">Flexible configurations for every family size</p>
        </div>
        <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
          <h3 class="font-prata text-lg text-gold">100% Vaastu</h3>
          <p class="text-sm mt-2">Designed with Vaastu considerations</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ======================= WHY ======================= -->
  <section id="why" class="bg-brand-cream py-16 sm:py-20 scroll-mt-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto">
        <p class="text-gold font-semibold uppercase tracking-wide text-sm">Why Choose Us</p>
        <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] mt-2">Why Infinium Altitude</h2>
      </div>
      <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-2xl p-6 shadow-sm">
          <h3 class="font-prata text-xl text-gold">Prime Location</h3>
          <p class="text-sm mt-2">Situated on Sathy Road, Ganapathy, one of Coimbatore's established and well-connected residential corridors.</p>
        </div>
        <div class="bg-white rounded-2xl p-6 shadow-sm">
          <h3 class="font-prata text-xl text-gold">Choose Your Layout</h3>
          <p class="text-sm mt-2">Select from 2, 3, 3.5 or 4 BHK homes designed around different family needs.</p>
        </div>
        <div class="bg-white rounded-2xl p-6 shadow-sm">
          <h3 class="font-prata text-xl text-gold">Planned Development</h3>
          <p class="text-sm mt-2">Two thoughtfully designed towers with modern architecture and 50+ lifestyle amenities.</p>
        </div>
        <div class="bg-white rounded-2xl p-6 shadow-sm">
          <h3 class="font-prata text-xl text-gold">Secure Community</h3>
          <p class="text-sm mt-2">Gated community with 24×7 security and CCTV surveillance.</p>
        </div>
        <div class="bg-white rounded-2xl p-6 shadow-sm">
          <h3 class="font-prata text-xl text-gold">Vaastu Compliant</h3>
          <p class="text-sm mt-2">Homes planned with 100% Vaastu compliance.</p>
        </div>
        <div class="bg-white rounded-2xl p-6 shadow-sm">
          <h3 class="font-prata text-xl text-gold">Future-Ready Location</h3>
          <p class="text-sm mt-2">Close to IT parks, educational institutions, hospitals and Prozone Mall.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ======================= LAYOUT / FLOOR PLANS ======================= -->
  <section id="layout" class="py-16 sm:py-20 scroll-mt-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center">
        <p class="text-gold font-semibold uppercase tracking-wide text-sm">Floor Plans</p>
        <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] mt-2">Choose Your Layout</h2>
      </div>

      <!-- Tower tabs -->
      <div class="mt-8 flex flex-wrap justify-center gap-3">
        <button type="button" class="fp-type px-5 py-2 rounded-full text-sm font-medium bg-gold text-white" data-fp-type="executive">Executive Tower</button>
        <button type="button" class="fp-type px-5 py-2 rounded-full text-sm font-medium bg-white text-[#302F5A] border border-ink-line" data-fp-type="signature">Signature Tower</button>
      </div>

      <!-- Executive Tower -->
      <div class="fp-panel mt-10" data-fp-panel="executive">
        <div class="flex flex-wrap gap-3 mb-6">
          <button type="button" class="fp-plan px-4 py-2 rounded-md text-sm font-medium bg-gold text-white" data-fp-plan="assets/images/apartment/plan-1.jpg">2 BHK – 2537 sq.ft</button>
          <button type="button" class="fp-plan px-4 py-2 rounded-md text-sm font-medium bg-white text-[#302F5A] border border-ink-line" data-fp-plan="assets/images/apartment/plan-2.jpg">3 BHK – 3764 sq.ft</button>
          <button type="button" class="fp-plan px-4 py-2 rounded-md text-sm font-medium bg-white text-[#302F5A] border border-ink-line" data-fp-plan="assets/images/apartment/plan-3.jpg">3 BHK – 2964 sq.ft</button>
        </div>
        <img src="assets/images/apartment/plan-1.jpg" alt="Floor plan" class="fp-image w-full max-w-3xl mx-auto rounded-2xl border border-ink-line" />
      </div>

      <!-- Signature Tower -->
      <div class="fp-panel mt-10 hidden" data-fp-panel="signature">
        <div class="flex flex-wrap gap-3 mb-6">
          <button type="button" class="fp-plan px-4 py-2 rounded-md text-sm font-medium bg-gold text-white" data-fp-plan="assets/images/apartment/plan-4.jpg">3.5 BHK – 3850 sq.ft</button>
          <button type="button" class="fp-plan px-4 py-2 rounded-md text-sm font-medium bg-white text-[#302F5A] border border-ink-line" data-fp-plan="assets/images/apartment/plan-5.jpg">4 BHK – 3961 sq.ft</button>
        </div>
        <img src="assets/images/apartment/plan-4.jpg" alt="Floor plan" class="fp-image w-full max-w-3xl mx-auto rounded-2xl border border-ink-line" />
      </div>
    </div>
  </section>

  <!-- ======================= AMENITIES ======================= -->
  <section id="amenities" class="bg-brand-cream py-16 sm:py-20 scroll-mt-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center">
        <p class="text-gold font-semibold uppercase tracking-wide text-sm">Lifestyle</p>
        <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] mt-2">50+ Lifestyle Amenities</h2>
      </div>
      <ul class="mt-10 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-5 text-center text-sm">
        <li class="bg-white rounded-2xl p-4 shadow-sm"><i class="fa-solid fa-person-swimming text-gold text-2xl block mb-2"></i>Swimming Pool</li>
        <li class="bg-white rounded-2xl p-4 shadow-sm"><i class="fa-solid fa-house-chimney text-gold text-2xl block mb-2"></i>Clubhouse with 50+ Amenities</li>
        <li class="bg-white rounded-2xl p-4 shadow-sm"><i class="fa-solid fa-film text-gold text-2xl block mb-2"></i>Mini Theatre</li>
        <li class="bg-white rounded-2xl p-4 shadow-sm"><i class="fa-solid fa-dumbbell text-gold text-2xl block mb-2"></i>Gym</li>
        <li class="bg-white rounded-2xl p-4 shadow-sm"><i class="fa-solid fa-champagne-glasses text-gold text-2xl block mb-2"></i>Party Hall</li>
        <li class="bg-white rounded-2xl p-4 shadow-sm"><i class="fa-solid fa-video text-gold text-2xl block mb-2"></i>24x7 CCTV surveillance</li>
        <li class="bg-white rounded-2xl p-4 shadow-sm"><i class="fa-solid fa-temperature-high text-gold text-2xl block mb-2"></i>Steam Room</li>
        <li class="bg-white rounded-2xl p-4 shadow-sm"><i class="fa-solid fa-hot-tub-person text-gold text-2xl block mb-2"></i>Sauna Room</li>
        <li class="bg-white rounded-2xl p-4 shadow-sm"><i class="fa-solid fa-book-open text-gold text-2xl block mb-2"></i>Library</li>
        <li class="bg-white rounded-2xl p-4 shadow-sm"><i class="fa-solid fa-masks-theater text-gold text-2xl block mb-2"></i>Amphitheater</li>
        <li class="bg-white rounded-2xl p-4 shadow-sm"><i class="fa-solid fa-users text-gold text-2xl block mb-2"></i>Meeting Room</li>
        <li class="bg-white rounded-2xl p-4 shadow-sm"><i class="fa-solid fa-couch text-gold text-2xl block mb-2"></i>Visitors Lounge</li>
        <li class="bg-white rounded-2xl p-4 shadow-sm"><i class="fa-solid fa-child-reaching text-gold text-2xl block mb-2"></i>Kids Play Area</li>
        <li class="bg-white rounded-2xl p-4 shadow-sm"><i class="fa-solid fa-seedling text-gold text-2xl block mb-2"></i>Lawn Mound</li>
        <li class="bg-white rounded-2xl p-4 shadow-sm"><i class="fa-solid fa-water text-gold text-2xl block mb-2"></i>Stepped Reflective Pool</li>
        <li class="bg-white rounded-2xl p-4 shadow-sm"><i class="fa-solid fa-user-shield text-gold text-2xl block mb-2"></i>Caretaker's Room</li>
        <li class="bg-white rounded-2xl p-4 shadow-sm"><i class="fa-solid fa-road text-gold text-2xl block mb-2"></i>Black Road Top</li>
        <li class="bg-white rounded-2xl p-4 shadow-sm"><i class="fa-solid fa-umbrella-beach text-gold text-2xl block mb-2"></i>Leisure</li>
      </ul>
    </div>
  </section>

  <!-- ======================= GALLERY ======================= -->
  <section id="gallery" class="py-16 sm:py-20 scroll-mt-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center">
        <p class="text-gold font-semibold uppercase tracking-wide text-sm">Visuals</p>
        <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] mt-2">Gallery</h2>
      </div>
      <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
        <img src="assets/images/apartment/gallery-1.jpg" alt="Gallery" class="rounded-2xl w-full aspect-[4/3] object-cover" loading="lazy" />
        <img src="assets/images/apartment/gallery-2.jpg" alt="Gallery" class="rounded-2xl w-full aspect-[4/3] object-cover" loading="lazy" />
        <img src="assets/images/apartment/gallery-3.jpg" alt="Gallery" class="rounded-2xl w-full aspect-[4/3] object-cover" loading="lazy" />
        <img src="assets/images/apartment/gallery-4.jpg" alt="Gallery" class="rounded-2xl w-full aspect-[4/3] object-cover" loading="lazy" />
        <img src="assets/images/apartment/gallery-5.jpg" alt="Gallery" class="rounded-2xl w-full aspect-[4/3] object-cover" loading="lazy" />
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

  <!-- Scores -->
  <section class="py-16 sm:py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] text-center">Location Scorecard</h2>
      <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
        <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
          <div class="flex items-center justify-between"><h3 class="font-semibold text-gold">Connectivity</h3><span class="text-2xl font-prata text-[#302F5A]">9</span></div>
          <p class="text-xs mt-2">Direct access via Sathy Road (NH 544) to central Coimbatore</p>
        </div>
        <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
          <div class="flex items-center justify-between"><h3 class="font-semibold text-gold">Education</h3><span class="text-2xl font-prata text-[#302F5A]">9</span></div>
          <p class="text-xs mt-2">Multiple reputed schools and colleges within 5 km</p>
        </div>
        <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
          <div class="flex items-center justify-between"><h3 class="font-semibold text-gold">Healthcare</h3><span class="text-2xl font-prata text-[#302F5A]">8</span></div>
          <p class="text-xs mt-2">Leading hospitals within easy reach</p>
        </div>
        <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
          <div class="flex items-center justify-between"><h3 class="font-semibold text-gold">Employment</h3><span class="text-2xl font-prata text-[#302F5A]">9</span></div>
          <p class="text-xs mt-2">IT parks and SEZ within ~5 km</p>
        </div>
        <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
          <div class="flex items-center justify-between"><h3 class="font-semibold text-gold">Shopping</h3><span class="text-2xl font-prata text-[#302F5A]">8</span></div>
          <p class="text-xs mt-2">Prozone Mall approximately 500 m away</p>
        </div>
        <div class="bg-brand-cream border border-gold/30 rounded-2xl p-5">
          <div class="flex items-center justify-between"><h3 class="font-semibold text-gold">Airport Access</h3><span class="text-2xl font-prata text-[#302F5A]">9</span></div>
          <p class="text-xs mt-2">Coimbatore International Airport approximately 9–10 km away</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Who is it for -->
  <section class="bg-brand-cream py-16 sm:py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] text-center">Who Is This Project For?</h2>
      <div class="mt-10 grid md:grid-cols-3 gap-6">
        <div class="bg-white rounded-2xl p-6 shadow-sm">
          <h3 class="font-prata text-xl text-gold">Looking for a Ready Home?</h3>
          <p class="text-sm mt-2">Move into a thoughtfully designed home with premium specifications and modern amenities.</p>
        </div>
        <div class="bg-white rounded-2xl p-6 shadow-sm">
          <h3 class="font-prata text-xl text-gold">Looking to Invest?</h3>
          <p class="text-sm mt-2">Own an apartment in one of Ganapathy's most sought-after, well-connected residential corridors.</p>
        </div>
        <div class="bg-white rounded-2xl p-6 shadow-sm">
          <h3 class="font-prata text-xl text-gold">Planning for Your Family?</h3>
          <p class="text-sm mt-2">Choose a configuration, from 2 BHK to 4 BHK, that fits your family's needs today and tomorrow.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Price tables -->
  <section class="py-16 sm:py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] text-center">Price &amp; Configurations</h2>
      <div class="mt-10 grid md:grid-cols-2 gap-8">
        <div>
          <h3 class="font-prata text-xl text-gold mb-4">Executive Tower</h3>
          <div class="overflow-x-auto">
            <table class="w-full text-sm border border-ink-line rounded-xl overflow-hidden">
              <thead class="bg-[#302F5A] text-white">
                <tr><th class="px-4 py-3 text-left">Type</th><th class="px-4 py-3 text-left">Category</th><th class="px-4 py-3 text-left">Size</th><th class="px-4 py-3 text-left">Price</th></tr>
              </thead>
              <tbody>
                <tr class="border-t border-ink-line"><td class="px-4 py-3">2 BHK</td><td class="px-4 py-3">Apartment</td><td class="px-4 py-3">1,377 sq.ft</td><td class="px-4 py-3">Rs.1.01 Crs Onwards*</td></tr>
                <tr class="border-t border-ink-line bg-brand-cream"><td class="px-4 py-3">3 BHK</td><td class="px-4 py-3">Apartment</td><td class="px-4 py-3">2,137 sq.ft</td><td class="px-4 py-3">Rs.1.5 Crs Onwards*</td></tr>
              </tbody>
            </table>
          </div>
        </div>
        <div>
          <h3 class="font-prata text-xl text-gold mb-4">Signature Tower</h3>
          <div class="overflow-x-auto">
            <table class="w-full text-sm border border-ink-line rounded-xl overflow-hidden">
              <thead class="bg-[#302F5A] text-white">
                <tr><th class="px-4 py-3 text-left">Type</th><th class="px-4 py-3 text-left">Category</th><th class="px-4 py-3 text-left">Size</th><th class="px-4 py-3 text-left">Price</th></tr>
              </thead>
              <tbody>
                <tr class="border-t border-ink-line"><td class="px-4 py-3">3.5 BHK</td><td class="px-4 py-3">Apartment</td><td class="px-4 py-3">2,537 sq.ft</td><td class="px-4 py-3">Rs.2.02 Crs Onwards*</td></tr>
                <tr class="border-t border-ink-line bg-brand-cream"><td class="px-4 py-3">4 BHK</td><td class="px-4 py-3">Apartment</td><td class="px-4 py-3">3,332 sq.ft</td><td class="px-4 py-3">Rs.2.3 Crs Onwards*</td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Journey -->
  <section class="bg-brand-cream py-16 sm:py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="font-prata text-3xl sm:text-4xl text-[#302F5A] text-center">Your Home Buying Journey</h2>
      <ol class="mt-10 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <li class="bg-white rounded-2xl p-5 shadow-sm flex gap-4">
          <span class="w-10 h-10 rounded-full bg-gold text-white flex items-center justify-center font-bold shrink-0">1</span>
          <div><h3 class="font-semibold text-gold">Explore Available Homes</h3><p class="text-sm mt-1">Browse towers, layouts and configurations.</p></div>
        </li>
        <li class="bg-white rounded-2xl p-5 shadow-sm flex gap-4">
          <span class="w-10 h-10 rounded-full bg-gold text-white flex items-center justify-center font-bold shrink-0">2</span>
          <div><h3 class="font-semibold text-gold">Shortlist Your Home</h3><p class="text-sm mt-1">Compare options by size, floor and budget.</p></div>
        </li>
        <li class="bg-white rounded-2xl p-5 shadow-sm flex gap-4">
          <span class="w-10 h-10 rounded-full bg-gold text-white flex items-center justify-center font-bold shrink-0">3</span>
          <div><h3 class="font-semibold text-gold">Site Visit &amp; Inspection</h3><p class="text-sm mt-1">Walk the project with our team.</p></div>
        </li>
        <li class="bg-white rounded-2xl p-5 shadow-sm flex gap-4">
          <span class="w-10 h-10 rounded-full bg-gold text-white flex items-center justify-center font-bold shrink-0">4</span>
          <div><h3 class="font-semibold text-gold">Verify &amp; Confirm</h3><p class="text-sm mt-1">Check approvals and documentation.</p></div>
        </li>
        <li class="bg-white rounded-2xl p-5 shadow-sm flex gap-4">
          <span class="w-10 h-10 rounded-full bg-gold text-white flex items-center justify-center font-bold shrink-0">5</span>
          <div><h3 class="font-semibold text-gold">Book Your Home</h3><p class="text-sm mt-1">Reserve your apartment with a booking amount.</p></div>
        </li>
        <li class="bg-white rounded-2xl p-5 shadow-sm flex gap-4">
          <span class="w-10 h-10 rounded-full bg-gold text-white flex items-center justify-center font-bold shrink-0">6</span>
          <div><h3 class="font-semibold text-gold">Registration &amp; Ownership</h3><p class="text-sm mt-1">Complete registration and take ownership.</p></div>
        </li>
      </ol>
    </div>
  </section>

  <!-- Bottom CTA form -->
  <section id="enquire-cta" class="pb-16 sm:pb-20 scroll-mt-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-8 items-stretch">
      <img src="assets/images/apartment/cta-map.jpg" alt="" class="rounded-2xl w-full h-full object-cover min-h-[280px]" loading="lazy" />
      <div class="bg-brand-cream border border-gold/30 rounded-2xl p-6 sm:p-8">
        <h2 class="font-prata text-2xl sm:text-3xl text-gold text-center">Ready to Find Your Apartment?</h2>
        <p class="text-xs text-center mt-1 mb-5">Get the Latest Price, Availability &amp; Project Details</p>
        <form method="post" action="#" class="space-y-3">
          <input type="text" name="name" required placeholder="Your Name*" class="w-full rounded-md border border-gold/40 bg-white px-4 py-3 text-sm text-[#444444] placeholder:text-[#444444]/60 focus:outline-none focus:border-gold" />
          <input type="email" name="email" required placeholder="Email Address*" class="w-full rounded-md border border-gold/40 bg-white px-4 py-3 text-sm text-[#444444] placeholder:text-[#444444]/60 focus:outline-none focus:border-gold" />
          <div class="flex items-stretch rounded-md border border-gold/40 bg-white overflow-hidden">
            <span class="px-3 inline-flex items-center gap-1 text-sm text-[#444444] border-r border-gold/30">🇮🇳 +91</span>
            <input type="tel" name="phone" required pattern="[0-9+\- ]{10,15}" placeholder="Phone Number*" class="flex-1 px-3 py-3 text-sm focus:outline-none min-w-0" />
            <button type="button" data-send-otp class="bg-gold text-white text-xs font-semibold px-4">Send OTP</button>
          </div>
          <button type="submit" class="w-full bg-[#302F5A] text-white font-medium rounded-md py-3 hover:bg-gold transition-colors">Get Price &amp; Availability <i class="fa-solid fa-arrow-right text-xs ml-1"></i></button>
        </form>
        <div class="mt-4 grid grid-cols-3 gap-2 text-xs">
          <a href="tel:+917092958830" class="border border-gold/40 bg-white rounded-md py-3 px-1 text-center hover:border-gold"><i class="fa-solid fa-phone text-gold mr-1"></i>Get Free Consultation</a>
          <a href="https://wa.me/917092958830" class="border border-gold/40 bg-white rounded-md py-3 px-1 text-center hover:border-gold"><i class="fa-brands fa-whatsapp text-gold mr-1"></i>WhatsApp</a>
          <a href="#site-visit" class="border border-gold/40 bg-white rounded-md py-3 px-1 text-center hover:border-gold"><i class="fa-regular fa-calendar text-gold mr-1"></i>Book Site Visit</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Developer -->
  <section class="bg-brand-cream py-16 sm:py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid md:grid-cols-[auto_1fr_1.3fr] gap-6 items-center pb-8 border-b border-ink-line">
        <span class="w-20 h-20 rounded-full bg-white shadow inline-flex items-center justify-center overflow-hidden">
          <img src="assets/images/apartment/infinium-logo.png" alt="Infinium Realty" class="w-14" loading="lazy" />
        </span>
        <div>
          <p class="text-gold font-semibold uppercase text-xs tracking-wide">Developer</p>
          <h2 class="font-prata text-3xl text-[#302F5A]">Infinium Realty</h2>
        </div>
        <p class="text-xs leading-relaxed">Infinium Realty focuses on developing premium residential properties in Coimbatore, with projects designed around location, planning and long-term usability. Infinium Altitude reflects this approach, combining modern architecture with a comprehensive amenity offering across a well-connected Sathy Road location.</p>
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
            <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus"></i></span>
          </summary>
          <p class="mt-3 text-sm pl-5">The listed price is typically the base sale price. Additional costs like GST, registration, stamp duty, parking charges and club/amenity fees are usually separate.</p>
        </details>
        <details class="py-4">
          <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
            <span>2. What's the difference between carpet area and built-up area?</span>
            <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus"></i></span>
          </summary>
          <p class="mt-3 text-sm pl-5">Carpet area is the usable floor area inside the walls of the apartment. Built-up area adds the thickness of the walls and balconies, and super built-up adds your share of common areas.</p>
        </details>
        <details class="py-4">
          <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
            <span>3. Are these apartments ready-to-move or under construction?</span>
            <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus"></i></span>
          </summary>
          <p class="mt-3 text-sm pl-5">Please contact our team for the latest construction status and handover timeline of each tower.</p>
        </details>
        <details class="py-4">
          <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
            <span>4. Can I filter apartments by BHK configuration and budget?</span>
            <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus"></i></span>
          </summary>
          <p class="mt-3 text-sm pl-5">Yes. Our team can shortlist 2, 3, 3.5 and 4 BHK options that match your budget and preferred tower.</p>
        </details>
        <details class="py-4">
          <summary class="cursor-pointer list-none flex items-center justify-between gap-4 text-sm sm:text-base font-medium text-[#222]">
            <span>5. Is home loan financing available for these apartment projects?</span>
            <span class="text-gold shrink-0"><i class="fa-solid fa-plus faq-plus"></i><i class="fa-solid fa-minus faq-minus"></i></span>
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
document.addEventListener('DOMContentLoaded', function () {
  // Floor plans
  var fpTypes = document.querySelectorAll('.fp-type'),
      fpPanels = document.querySelectorAll('.fp-panel');
  fpTypes.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var id = btn.getAttribute('data-fp-type');
      fpTypes.forEach(function (b) {
        var on = b === btn;
        b.classList.toggle('bg-gold', on);
        b.classList.toggle('text-white', on);
        b.classList.toggle('text-[#302F5A]', !on);
      });
      fpPanels.forEach(function (p) {
        p.classList.toggle('hidden', p.getAttribute('data-fp-panel') !== id);
      });
    });
  });
  document.querySelectorAll('.fp-plan').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var panel = btn.closest('.fp-panel');
      panel.querySelectorAll('.fp-plan').forEach(function (b) {
        var on = b === btn;
        b.classList.toggle('bg-gold', on);
        b.classList.toggle('text-white', on);
        b.classList.toggle('bg-white', !on);
        b.classList.toggle('text-[#302F5A]', !on);
      });
      panel.querySelector('.fp-image').src = btn.getAttribute('data-fp-plan');
    });
  });

  // OTP placeholders
  document.querySelectorAll('[data-send-otp]').forEach(function (b) {
    b.addEventListener('click', function () {
      b.textContent = 'Coming soon';
    });
  });

  // Simple scroll-spy for tabs
  var tabs = document.querySelectorAll('[data-tab]');
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (!e.isIntersecting) return;
        tabs.forEach(function (t) {
          t.classList.toggle('is-active', t.getAttribute('href') === '#' + e.target.id);
        });
      });
    }, { rootMargin: '-40% 0px -55% 0px' });
    tabs.forEach(function (t) {
      var s = document.querySelector(t.getAttribute('href'));
      if (s) io.observe(s);
    });
  }
});
</script>

<?php get_footer(); ?>
