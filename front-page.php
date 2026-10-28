<?php
get_header();
$img_uri = get_template_directory_uri() . '/assets/images';
?>

<main id="home">
    <!-- ======================= HERO ======================= -->
    <section class="relative" aria-label="Hero">
        <div class="swiper hero-swiper h-[78vh] min-h-[540px] max-h-[860px]">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide relative">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/2_home_i_2.png" alt="Premium villa exterior in Coimbatore" class="absolute inset-0 w-full h-full object-cover" />
                    <div class="hero-overlay absolute inset-0"></div>
                    <div class="container relative h-full mx-auto px-4 sm:px-6 lg:px-8 flex items-center">
                        <div class="max-w-6xl text-white">
                            <p class="text-white font-semibold text-lg mb-4">Find the Right Property in Coimbatore</p>
                            <h2 class="font-prata text-4xl sm:text-3xl lg:text-5xl leading-snug">Explore verified residential projects across Coimbatore - from premium apartments and villas to residential plots.</h2>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination !bottom-24 sm:!bottom-28"></div>
            <div class="swiper-button-prev !left-4 hidden md:flex"></div>
            <div class="swiper-button-next !right-4 hidden md:flex"></div>
        </div>

        <!-- Find-property bar -->
        <!-- <div id="find" class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 sm:-mt-20">
            <div class="bg-white rounded-2xl shadow-[0_20px_60px_rgba(0,0,0,0.15)] border border-ink-line p-5 sm:p-7">
                <p class="font-prata text-xl sm:text-2xl mb-1">Find a Property That Fits Your Lifestyle</p>
                <p class="text-sm text-[#302F5A]-muted mb-5">Search across locations, types and budgets.</p>
                <form class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-3" onsubmit="return false;">
                    <label class="block">
                        <span class="text-xs font-semibold uppercase tracking-wider text-[#302F5A]-muted">Location</span>
                        <select class="mt-1 w-full border border-ink-line rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-gold/60 focus:border-gold">
                            <option>All Coimbatore</option>
                            <option>Kalapatti</option>
                            <option>Saravanampatti</option>
                            <option>Vadavalli</option>
                            <option>Thudiyalur</option>
                            <option>Peelamedu</option>
                            <option>Ganapathy</option>
                            <option>Sulur</option>
                        </select>
                    </label>
                    <label class="block">
                        <span class="text-xs font-semibold uppercase tracking-wider text-[#302F5A]-muted">Property Type</span>
                        <select class="mt-1 w-full border border-ink-line rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-gold/60 focus:border-gold">
                            <option>Apartments</option>
                            <option>Villas</option>
                            <option>Residential Plots</option>
                        </select>
                    </label>
                    <label class="block">
                        <span class="text-xs font-semibold uppercase tracking-wider text-[#302F5A]-muted">Configuration</span>
                        <select class="mt-1 w-full border border-ink-line rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-gold/60 focus:border-gold">
                            <option>Any</option>
                            <option>1, 2 &amp; 3 BHK</option>
                            <option>2, 3, 3.5 &amp; 4 BHK</option>
                            <option>3 &amp; 4 BHK</option>
                            <option>4 &amp; 5 BHK</option>
                            <option>Plots</option>
                        </select>
                    </label>
                    <label class="block">
                        <span class="text-xs font-semibold uppercase tracking-wider text-[#302F5A]-muted">Status</span>
                        <select class="mt-1 w-full border border-ink-line rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-gold/60 focus:border-gold">
                            <option>Ongoing + Upcoming</option>
                            <option>Ongoing Projects</option>
                            <option>Upcoming Projects</option>
                        </select>
                    </label>
                    <div class="flex items-end">
                        <a href="#projects" class="w-full inline-flex items-center justify-center gap-2 bg-ink hover:bg-gold text-white font-semibold px-6 py-3 rounded-lg transition-colors">
                            <i class="fa-solid fa-magnifying-glass text-sm"></i> Search
                        </a>
                    </div>
                </form>
            </div>
        </div> -->
    </section>

    <!-- ======================= ABOUT ======================= -->
    <section id="about" class="py-16 sm:py-20 lg:py-24 scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div class="reveal relative order-2 lg:order-1">
                <div class="rounded-2xl overflow-hidden shadow-xl">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/4_image_259.png" alt="Property agreement signing with Estate Partners guidance" class="w-full h-[420px] sm:h-[520px] object-cover" loading="lazy" />
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
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">About Us</p>
                <h2 class="font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight">Your Trusted Real Estate Partner
                    in Coimbatore</h2>
                <p class="mt-5 leading-relaxed">Estate Partners helps you discover, compare and choose residential properties across Coimbatore with greater clarity and confidence.</p>
                <p class="mt-4 leading-relaxed">From emerging neighbourhoods to established residential destinations, we bring together apartments, villas and residential plots in one platform — with detailed project information, location insights, pricing guidance and buyer-focused support. </p>
                <p class="mt-4 leading-relaxed">Our goal is simple: <b>make property buying in Coimbatore easier, more transparent and better informed.</b></p>
                <!-- <ul class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm font-medium">
                    <li class="flex items-center gap-3 bg-brand-cream border border-ink-line rounded-xl px-4 py-3"><i class="fa-solid fa-circle-check text-gold"></i> Detailed project info</li>
                    <li class="flex items-center gap-3 bg-brand-cream border border-ink-line rounded-xl px-4 py-3"><i class="fa-solid fa-circle-check text-gold"></i> Location insights</li>
                    <li class="flex items-center gap-3 bg-brand-cream border border-ink-line rounded-xl px-4 py-3"><i class="fa-solid fa-circle-check text-gold"></i> Pricing guidance</li>
                    <li class="flex items-center gap-3 bg-brand-cream border border-ink-line rounded-xl px-4 py-3"><i class="fa-solid fa-circle-check text-gold"></i> Buyer-focused support</li>
                </ul> -->
                <a href="#enquire" class="mt-8 inline-flex items-center gap-2 bg-gold hover:bg-gold text-white font-semibold px-7 py-3.5 rounded-lg transition-colors">Know More About Estate Partners <i class="fa-solid fa-arrow-right text-sm"></i></a>
            </div>
        </div>
    </section>

    <!-- ======================= GUIDANCE / ENQUIRE ======================= -->
    <section id="enquire" class="py-16 sm:py-20 lg:py-24 bg-[#FCF7F3] scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-[60%_40%] gap-12 items-stretch">
            <div class="reveal relative">
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">Why choose</p>
                <h2 class="font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight">Why Choose Estate Partners?</h2>
                <div class="grid sm:grid-cols-2 rounded-2xl overflow-hidden bg-white mt-6">
                    <div class="space-y-4 p-5 order-1">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/LocalExpertise.svg" alt="Local Expertise" class="w-16 h-16">
                        <h4 class="font-semibold text-[#302F5A] text-lg">Local Expertise</h4>
                        <p class="text-[#6B6B6B]">Focused on the Coimbatore market, with insights into neighbourhoods, connectivity, development and property opportunities.</p>
                    </div>

                    <div class="space-y-4 p-5 text-white bg-gold order-2">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/CuratedProjects.svg" alt="Curated Projects" class="w-16 h-16">
                        <h4 class="font-semibold text-lg">Curated Projects</h4>
                        <p class="">Only 16 villas across 1.42 acres — a rare, small-scale development, not a mass housing project.
                        </p>
                    </div>

                    <div class="space-y-4 p-5 text-white bg-gold order-4 sm:order-3">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/ClearProjectInformation.svg" alt="Clear Project Information" class="w-16 h-16">
                        <h4 class="font-semibold text-lg">Clear Project Information</h4>
                        <p class="">Get important details about location, configurations, pricing, amenities, approvals and project status in one place.</p>
                    </div>

                    <div class="space-y-4 p-5 order-3 sm:order-4">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/CompareBeforeYouDecide.svg" alt="Compare Before You Decide" class="w-16 h-16">
                        <h4 class="font-semibold text-[#302F5A] text-lg">Compare Before You Decide</h4>
                        <p class="text-[#6B6B6B]">Shortlist and compare projects based on your budget, requirements, location and investment goals.</p>
                    </div>

                    <div class="space-y-4 p-5 order-5">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/PersonalisedGuidance.svg" alt="Personalised Guidance" class="w-16 h-16">
                        <h4 class="font-semibold text-[#302F5A] text-lg">Personalised Guidance</h4>
                        <p class="text-[#6B6B6B]">Not sure what to buy? Our property advisors can help you identify options that match your needs.</p>
                    </div>

                    <div class="space-y-4 p-5 text-white bg-gold order-6">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/EndtoEndSupport.svg" alt="End-to-End Support" class="w-16 h-16">
                        <h4 class="font-semibold text-lg">End-to-End Support</h4>
                        <p class="">From your first enquiry and site visit to booking and the next steps, our team stays available to assist you.</p>
                    </div>
                </div>
            </div>

            <div class="p-8 rounded-2xl bg-white border border-[#B3814E50] h-max lg:sticky lg:top-20 lg:mt-24">
                <div class="mb-6 text-center">
                    <h3 class="font-prata text-2xl sm:text-3xl leading-snug text-[#302F5A]">Register For Exclusive Offers</h3>
                    <p class="mt-2 text-sm text-[#444444]-muted">Our property expert will get in touch with you</p>
                </div>

                <div class="reveal bg-[#FCF7F3] border border-[#B3814E50] rounded-2xl px-6 p-4 text-center">
                    <?php echo do_shortcode('[wpforms id="41"]'); ?>
                    <p class="text-[#444444]-muted text-center">By submitting, you agree to our Privacy Policy.</p>
                    <!-- <form id="enquiry-form" class="mt-7 space-y-4" novalidate>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <label class="block">
                                <span class="text-xs font-semibold uppercase tracking-wider text-[#302F5A]-muted">Full Name</span>
                                <input type="text" required placeholder="Your name" class="mt-1 w-full border border-ink-line rounded-lg px-4 py-3 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-gold/60 focus:border-gold" />
                            </label>
                            <label class="block">
                                <span class="text-xs font-semibold uppercase tracking-wider text-[#302F5A]-muted">Phone Number*</span>
                                <input id="enquiry-phone" type="tel" required placeholder="+91 XXXXX XXXXX" class="mt-1 w-full border border-ink-line rounded-lg px-4 py-3 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-gold/60 focus:border-gold" />
                            </label>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <label class="block">
                                <span class="text-xs font-semibold uppercase tracking-wider text-[#302F5A]-muted">I am looking for</span>
                                <select class="mt-1 w-full border border-ink-line rounded-lg px-4 py-3 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-gold/60 focus:border-gold">
                                    <option>Apartment</option>
                                    <option>Villa</option>
                                    <option>Residential Plot</option>
                                    <option>Investment Advice</option>
                                </select>
                            </label>
                            <label class="block">
                                <span class="text-xs font-semibold uppercase tracking-wider text-[#302F5A]-muted">Preferred Location</span>
                                <select class="mt-1 w-full border border-ink-line rounded-lg px-4 py-3 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-gold/60 focus:border-gold">
                                    <option>Anywhere in Coimbatore</option>
                                    <option>Kalapatti</option>
                                    <option>Saravanampatti</option>
                                    <option>Vadavalli</option>
                                    <option>Thudiyalur</option>
                                    <option>Peelamedu</option>
                                </select>
                            </label>
                        </div>
                        <label class="block">
                            <span class="text-xs font-semibold uppercase tracking-wider text-[#302F5A]-muted">Message (optional)</span>
                            <textarea rows="3" placeholder="Budget, purpose, timeline…" class="mt-1 w-full border border-ink-line rounded-lg px-4 py-3 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-gold/60 focus:border-gold"></textarea>
                        </label>
                        <p id="enquiry-msg" class="hidden text-sm font-medium"></p>
                        <button type="submit" class="w-full inline-flex items-center justify-center gap-2 bg-brand-purple hover:bg-ink text-white font-semibold px-7 py-4 rounded-lg transition-colors">Enquire Now <i class="fa-solid fa-arrow-right text-sm"></i></button>
                        <p class="text-xs text-[#302F5A]-muted text-center">By submitting, you agree to our Privacy Policy.</p>
                    </form> -->
                </div>
            </div>
        </div>
    </section>

    <!-- ======================= PROPERTY TYPES ======================= -->
    <section id="types" class="py-16 sm:py-20 lg:py-24 bg-white scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto mb-12 reveal">
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">Our promises</p>
                <h2 class="font-prata text-3xl sm:text-4xl leading-tight">Explore Better Projects with Estate Partners</h2>
                <!-- <p class="mt-4 text-[#302F5A]-muted leading-relaxed">Whether you are looking for a ready home, planning to build your own, or investing for the future, explore properties by type.</p> -->
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-8">
                <div class="reveal group bg-white rounded-2xl overflow-hidden border border-[#B3814E50] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all">
                    <div class="overflow-hidden h-[420px]">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/28_rectangle_10323.png" alt="Apartment residences" class="w-full h-full object-cover" loading="lazy" />
                    </div>
                    <div class="p-7">
                        <div class="w-14 h-14 inline-flex items-center justify-center text-xl mb-4"><img src="http://localhost/estate_partners/wp-content/uploads/2026/10/ZeroBrokerage.svg" alt=""></div>
                        <h3 class="text-2xl font-semibold text-[#302F5A]">Zero Brokerage</h3>
                        <p class="mt-3 text-sm text-[#6B6B6B]-muted leading-relaxed">100% Service, 0% Brokerage</p>
                    </div>
                </div>

                <div class="reveal group bg-white rounded-2xl overflow-hidden border border-[#B3814E50] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all">
                    <div class="overflow-hidden h-[420px]">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/29_rectangle_10323.png" alt="Independent villa" class="w-full h-full object-cover" loading="lazy" />
                    </div>
                    <div class="p-7">
                        <div class="w-14 h-14 inline-flex items-center justify-center text-xl mb-4"><img src="http://localhost/estate_partners/wp-content/uploads/2026/10/LowestpriceGuaranteed.svg" alt=""></div>
                        <h3 class="text-2xl font-semibold text-[#302F5A]">Lowest price Guaranteed</h3>
                        <p class="mt-3 text-sm text-[#6B6B6B]-muted leading-relaxed">Highly unlikely, but if you find a lower price anywhere, tell us and we will match it</p>
                    </div>
                </div>

                <div class="reveal group bg-white rounded-2xl overflow-hidden border border-[#B3814E50] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all">
                    <div class="overflow-hidden h-[420px]">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/30_rectangle_10323.png" alt="Map showing residential plot locations" class="w-full h-full object-cover" loading="lazy" />
                    </div>
                    <div class="p-7">
                        <div class="w-14 h-14 inline-flex items-center justify-center text-xl mb-4"><img src="http://localhost/estate_partners/wp-content/uploads/2026/10/FullServiceSupport.svg" alt=""></div>
                        <h3 class="text-2xl font-semibold text-[#302F5A]">Full Service Support</h3>
                        <p class="mt-3 text-sm text-[#6B6B6B]-muted leading-relaxed">Our sales personnel are accountable for every step</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ======================= Locations ======================= -->
    <section id="types" class="py-16 sm:py-20 lg:py-24 bg-white scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal">
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">Explore Properties by Location</p>
                <h2 class="font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight">Find the right property in the right neighbourhood</h2>
                <p class="mt-4 max-w-4xl mx-auto text-[#302F5A]-muted leading-relaxed">Explore residential projects across some of Coimbatore's most sought-after and fast-developing locations.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-10 text-gold text-xl">
                <a href="" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-14 h-14">
                    <span class="font-medium">Kalapatti</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-14 h-14">
                    <span class="font-medium">Saravanampatti</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-14 h-14">
                    <span class="font-medium">Ramanadhapuram</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-14 h-14">
                    <span class="font-medium">Vellalore</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-14 h-14">
                    <span class="font-medium">Idikarai</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-14 h-14">
                    <span class="font-medium">Ganapathy</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-14 h-14">
                    <span class="font-medium">Thudiyalur</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-14 h-14">
                    <span class="font-medium">Sulur</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-14 h-14">
                    <span class="font-medium">Vadavalli</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-14 h-14">
                    <span class="font-medium">Vedapatti</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-14 h-14">
                    <span class="font-medium">Peelamedu</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-14 h-14">
                    <span class="font-medium">Mettupalyam</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ======================= FEATURED PROJECTS ======================= -->
    <section id="projects" class="py-16 sm:py-20 lg:py-24 scroll-mt-24 bg-[#FCF7F3]">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-6">
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">Find A PROPERTY</p>
                <h2 class="font-prata text-3xl text-[#302F5A] sm:text-4xl leading-tight">Find a Property That Fits Your Lifestyle</h2>
                <p class="mt-4 max-w-4xl mx-auto text-[#444444] leading-relaxed">Whether you are looking for a ready home, planning to build your own, or investing for the future, explore properties by type.</p>
            </div>

            <div class="swiper projects-swiper reveal">
                <div class="swiper-wrapper">

                    <div class="swiper-slide project-card group bg-white rounded-2xl overflow-hidden border border-ink-line shadow-sm hover:shadow-xl transition-shadow h-auto">
                        <div class="relative overflow-hidden h-60">
                            <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/5_2_802.png" alt="Infinium Onelife apartment residences" class="w-full h-full object-cover" loading="lazy" />
                            <span class="absolute top-4 right-4 bg-white border border-[#B3814E50] text-[#302F5A] text-xs font-semibold px-3 py-1.5 rounded-full">4 Apartments</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gold">Apartments</h3>
                            <p class="mt-1 text-sm text-[#6b6b6b]">From compact 1 & 2 BHK homes to spacious 3 & 4 BHK residences, discover apartments across prime Coimbatore locations.</p>
                            <div class="mt-4 flex flex-wrap gap-2 text-xs font-medium">
                                <span class="bg-[#FBE9E0] text-[#AF562B] rounded-full px-3 py-1.5">5 Trending</span>
                                <span class="bg-[#F7EDDA] text-[#C3954C] rounded-full px-3 py-1.5">3 New Launch</span>
                                <span class="bg-[#E8E8FF] text-[#302F5A] rounded-full px-3 py-1.5">8 Newly Listed</span>
                                <span class="bg-[#E6F5EF] text-[#17A374] rounded-full px-3 py-1.5">4 Ready to move</span>
                            </div>
                            <!-- <a href="#enquire" class="mt-5 inline-flex items-center justify-center px-6 py-2 gap-2 bg-[#302F5A] rounded-xl text-white text-center w-full font-semibold transition-colors">Explore Apartments <i class="fa-solid fa-arrow-right text-xs"></i></a> -->

                            <button
                                type="button"
                                class="js-open-enquiry-modal mt-5 inline-flex items-center justify-center px-6 py-2 gap-2 bg-[#302F5A] rounded-xl text-white text-center w-full font-semibold transition-colors">
                                <span>Explore Apartments</span>
                                <i class="fa-regular fa-paper-plane text-xsm ml-2"></i>
                            </button>
                        </div>
                    </div>

                    <div class="swiper-slide project-card group bg-white rounded-2xl overflow-hidden border border-ink-line shadow-sm hover:shadow-xl transition-shadow h-auto">
                        <div class="relative overflow-hidden h-60">
                            <img src="<?php echo esc_url($img_uri . '/24_2_802.png'); ?>" alt="Infinium Central 16 apartment towers with pool deck" class="w-full h-full object-cover" loading="lazy" />
                            <span class="absolute top-4 right-4 bg-white border border-[#B3814E50] text-[#302F5A] text-xs font-semibold px-3 py-1.5 rounded-full">5 Villas</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gold">Villas</h3>
                            <p class="mt-1 text-sm text-[#6b6b6b]">Discover independent and gated-community villas designed for families looking for more space, privacy and premium living.</p>
                            <div class="mt-4 flex flex-wrap gap-2 text-xs font-medium">
                                <span class="bg-[#FBE9E0] text-[#AF562B] rounded-full px-3 py-1.5">5 Trending</span>
                                <span class="bg-[#F7EDDA] text-[#C3954C] rounded-full px-3 py-1.5">3 New Launch</span>
                                <span class="bg-[#E8E8FF] text-[#302F5A] rounded-full px-3 py-1.5">8 Newly Listed</span>
                                <span class="bg-[#E6F5EF] text-[#17A374] rounded-full px-3 py-1.5">4 Ready to move</span>
                            </div>
                            <button
                                type="button"
                                class="js-open-enquiry-modal mt-5 inline-flex items-center justify-center px-6 py-2 gap-2 bg-[#302F5A] rounded-xl text-white text-center w-full font-semibold transition-colors">
                                <span>Explore Apartments</span>
                                <i class="fa-regular fa-paper-plane text-xsm ml-2"></i>
                            </button>
                        </div>
                    </div>

                    <div class="swiper-slide project-card group bg-white rounded-2xl overflow-hidden border border-ink-line shadow-sm hover:shadow-xl transition-shadow h-auto">
                        <div class="relative overflow-hidden h-60">
                            <img src="<?php echo esc_url($img_uri . '/7_2_802.png'); ?>" alt="Infinium Altitude premium residences" class="w-full h-full object-cover" loading="lazy" />
                            <span class="absolute top-4 right-4 bg-white border border-[#B3814E50] text-[#302F5A] text-xs font-semibold px-3 py-1.5 rounded-full">6 Plots</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gold">Residential Plots</h3>
                            <p class="mt-1 text-sm text-[#6b6b6b]">Choose a plot today and build your home your way — or secure land as a long-term investment.
                            </p>
                            <div class="mt-4 flex flex-wrap gap-2 text-xs font-medium">
                                <span class="bg-[#FBE9E0] text-[#AF562B] rounded-full px-3 py-1.5">5 Trending</span>
                                <span class="bg-[#F7EDDA] text-[#C3954C] rounded-full px-3 py-1.5">3 New Launch</span>
                                <span class="bg-[#E8E8FF] text-[#302F5A] rounded-full px-3 py-1.5">8 Newly Listed</span>
                                <span class="bg-[#E6F5EF] text-[#17A374] rounded-full px-3 py-1.5">4 Ready to move</span>
                            </div>
                            <button
                                type="button"
                                class="js-open-enquiry-modal mt-5 inline-flex items-center justify-center px-6 py-2 gap-2 bg-[#302F5A] rounded-xl text-white text-center w-full font-semibold transition-colors">
                                <span>Explore Apartments</span>
                                <i class="fa-regular fa-paper-plane text-xsm ml-2"></i>
                            </button>
                        </div>
                    </div>

                </div>

                <!-- Pagination & Arrows -->
                <div class="flex flex-wrap items-end justify-between gap-6 mb-10 reveal mt-4">
                    <div class="swiper-pagination"></div>
                    <div class="flex items-center gap-3 z-50">
                        <button class="projects-prev w-12 h-12 rounded-full border border-ink-line inline-flex items-center justify-center hover:bg-ink hover:text-white hover:border-ink transition-colors" aria-label="Previous projects"><i class="fa-solid fa-arrow-left"></i></button>
                        <button class="projects-next w-12 h-12 rounded-full border border-ink-line inline-flex items-center justify-center hover:bg-ink hover:text-white hover:border-ink transition-colors" aria-label="Next projects"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ======================= Need Guidence ======================= -->
    <section id="about" class="py-16 sm:py-20 lg:py-24 scroll-mt-24">
        <div class="container mx-auto text-center mb-6">
            <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">NEED GUIDANCE</p>
            <h2 class="font-prata text-3xl text-[#302F5A] sm:text-4xl leading-tight">Not Sure Which Property Is Right for You?</h2>
            <p class="mt-4 max-w-4xl mx-auto text-[#444444] leading-relaxed">Buying property is a major decision. You don't have to figure it out alone. Tell us what you are looking for — your preferred location,
                property type, budget and purpose — and our team can help you shortlist suitable projects in Coimbatore.</p>
        </div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div class="flex gap-5 flex-col">
                <div class="w-full rounded-2xl shadow-lg flex gap-6 items-center p-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/need-guidence-2.svg" alt="Looking for a Home?" class="w-16">

                    <div class="space-y-2">
                        <h3 class="font-semibold text-gold text-lg">Looking for a Home?</h3>
                        <p class="text-[#4D5461]">Find properties that fit your family's lifestyle and budget.</p>
                    </div>
                </div>

                <div class="w-full rounded-2xl shadow-lg flex gap-6 items-center p-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/need-guidence-1.svg" alt="Looking to Invest?" class="w-16">

                    <div class="space-y-2">
                        <h3 class="font-semibold text-gold text-lg">Looking to Invest?</h3>
                        <p class="text-[#4D5461]">Explore locations and projects with potential for
                            long-term value.</p>
                    </div>
                </div>

                <div class="w-full rounded-2xl shadow-lg flex gap-6 items-center p-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/need-guidence-4.svg" alt="Planning for the Future?" class="w-16">

                    <div class="space-y-2">
                        <h3 class="font-semibold text-gold text-lg">Planning for the Future?</h3>
                        <p class="text-[#4D5461]">Find plots and properties that can become your future
                            home or investment.</p>
                    </div>
                </div>

                <div class="w-full rounded-2xl shadow-lg flex gap-6 items-center p-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/need-guidence-3.svg" alt="NRI Buyer?" class="w-16">

                    <div class="space-y-2">
                        <h3 class="font-semibold text-gold text-lg">NRI Buyer?</h3>
                        <p class="text-[#4D5461]">Get local assistance in exploring and evaluating
                            Coimbatore properties remotely.</p>
                    </div>
                </div>

                <a href="" class="font-semibold text-white bg-gold rounded-xl flex gap-4 items-center justify-center p-4 text-lg mt-8"><i class="fa-solid fa-phone mr-2"></i>Talk to our Experts For Guidance<i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="reveal relative">
                <div class="rounded-2xl overflow-hidden">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/4_image_259.png" alt="Property agreement signing with Estate Partners guidance" class="w-full h-full min-h-[420px] object-cover" loading="lazy" />
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

    <!-- ======================= STATUS / TIMELINE ======================= -->
    <section id="status" class="py-16 sm:py-20 lg:py-24 bg-[#FCF7F3] scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
            <div class="text-center max-w-4xl mx-auto reveal">
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">explore our projects</p>
                <h2 class="font-prata text-3xl sm:text-4xl leading-tight text-[#302F5A]">Featured Residential Projects in Coimbatore</h2>
                <p class="mt-4 text-[#444444] leading-relaxed">Explore handpicked apartments, villas and residential plots across Coimbatore. Each project gives you the information you need to shortlist with
                    confidence — including location, price, configurations, amenities, approvals, floor plans, availability and possession details</p>
            </div>

            <div class="project-tab-wrr flex flex-wrap justify-center gap-3 reveal" role="tablist" aria-label="Project category">
                <button type="button" class="project-tab active border border-white/30 rounded-full px-8 py-2 text-sm font-semibold tracking-wider" data-target="panel-all" role="tab" aria-selected="true">All Projects</button>
                <button type="button" class="project-tab border border-gold/30 bg-white rounded-full px-8 py-2 text-sm font-semibold tracking-wider" data-target="appartment" role="tab" aria-selected="false">Apartments</button>
                <button type="button" class="project-tab border border-gold/30 bg-white rounded-full px-8 py-2 text-sm font-semibold tracking-wider" data-target="villas" role="tab" aria-selected="false">Villas</button>
                <button type="button" class="project-tab border border-gold/30 bg-white rounded-full px-8 py-2 text-sm font-semibold tracking-wider" data-target="plots" role="tab" aria-selected="false">Plots</button>
            </div>

            <!-- Ongoing -->
            <div class="project-pannel-wrr grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Project post type -->
                <?php
                $properties = new WP_Query(array(
                    'post_type' => 'project',
                    'posts_per_page' => -1,
                ));

                if ($properties->have_posts()):
                    while ($properties->have_posts()): $properties->the_post();
                        get_template_part('template-parts/template-properties-card');
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
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

    <!-- ======================= Calculator ======================= -->
    <section id="insights" class="py-16 sm:py-20 lg:py-24 scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            <div class="max-w-2xl mb-6 mx-auto">
                <h2 class="font-prata text-center text-3xl sm:text-4xl leading-tight">Helpful Tools</h2>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="flex flex-row sm:flex-col 2xl:flex-row rounded-lg gap-4 border border-gold/70 bg-gold/20 p-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/calculator-2-scaled.png" alt="" class="w-24 h-24 object-cover rounded-lg">

                    <div class=" space-y-2">
                        <h2 class="text-gold font-semibold text-xl">EMI Calculator</h2>
                        <p class="text-[#4D5461] text-base">EMI starts at ₹ 11.27 K</p>
                        <a href="http://localhost/estate_partners/home-lone-calculator/" class="text-white font-semibold text-sm rounded-lg px-6 py-3 bg-[#302F5A] inline-block">Calculate now <i class="fa-solid fa-arrow-right ml-2"></i></a>
                    </div>
                </div>

                <div class="flex flex-row sm:flex-col 2xl:flex-row rounded-lg gap-4 border border-gold/70 bg-gold/20 p-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/calculator-1.png" alt="" class="w-24 h-24 object-cover rounded-lg">

                    <div class=" space-y-2">
                        <h2 class="text-gold font-semibold text-xl">Stamp Duty Calculator</h2>
                        <p class="text-[#4D5461] text-base">Find your home loan limit</p>
                        <a href="http://localhost/estate_partners/stamp-duty-calculator/" class="text-white font-semibold text-sm rounded-lg px-6 py-3 bg-[#302F5A] inline-block">Calculate now <i class="fa-solid fa-arrow-right ml-2"></i></a>
                    </div>
                </div>

                <div class="flex flex-row sm:flex-col 2xl:flex-row rounded-lg gap-4 border border-gold/70 bg-gold/20 p-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/calculator-3.png" alt="" class="w-24 h-24 object-cover rounded-lg">

                    <div class=" space-y-2">
                        <h2 class="text-gold font-semibold text-xl">Price Calculator</h2>
                        <p class="text-[#4D5461] text-base">Check the price of your property</p>
                        <a href="http://localhost/estate_partners/plot-price-calculator/" class="text-white font-semibold text-sm rounded-lg px-6 py-3 bg-[#302F5A] inline-block">Calculate now <i class="fa-solid fa-arrow-right ml-2"></i></a>
                    </div>
                </div>

                <div class="flex flex-row sm:flex-col 2xl:flex-row rounded-lg gap-4 border border-gold/70 bg-gold/20 p-4">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/calculator-4.png" alt="" class="w-24 h-24 object-cover rounded-lg">

                    <div class=" space-y-2">
                        <h2 class="text-gold font-semibold text-xl">Tax Benifit Calculator</h2>
                        <p class="text-[#4D5461] text-base">Check the price of your property</p>
                        <a href="http://localhost/estate_partners/home-loan-tax-calculator/" class="text-white font-semibold text-sm rounded-lg px-6 py-3 bg-[#302F5A] inline-block">Calculate now <i class="fa-solid fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>