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
                    <img src="<?php echo esc_url($img_uri . '/6_2_802.png'); ?>" alt="Premium villa exterior in Coimbatore" class="absolute inset-0 w-full h-full object-cover" />
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
                <p class="text-sm text-ink-muted mb-5">Search across locations, types and budgets.</p>
                <form class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-3" onsubmit="return false;">
                    <label class="block">
                        <span class="text-xs font-semibold uppercase tracking-wider text-ink-muted">Location</span>
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
                        <span class="text-xs font-semibold uppercase tracking-wider text-ink-muted">Property Type</span>
                        <select class="mt-1 w-full border border-ink-line rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-gold/60 focus:border-gold">
                            <option>Apartments</option>
                            <option>Villas</option>
                            <option>Residential Plots</option>
                        </select>
                    </label>
                    <label class="block">
                        <span class="text-xs font-semibold uppercase tracking-wider text-ink-muted">Configuration</span>
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
                        <span class="text-xs font-semibold uppercase tracking-wider text-ink-muted">Status</span>
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

    <!-- ======================= FEATURED PROJECTS ======================= -->
    <section id="projects" class="py-16 sm:py-20 lg:py-24 scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-end justify-between gap-6 mb-10 reveal">
                <div class="max-w-2xl">
                    <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">Handpicked For You</p>
                    <h2 class="font-prata text-3xl sm:text-4xl lg:text-5xl leading-tight">Featured Residential Projects in Coimbatore</h2>
                    <p class="mt-4 text-ink-muted leading-relaxed">Each project gives you the information you need to shortlist with confidence — including location, configurations, amenities, approvals and possession details.</p>
                </div>
                <div class="flex items-center gap-3">
                    <button class="projects-prev w-12 h-12 rounded-full border border-ink-line inline-flex items-center justify-center hover:bg-ink hover:text-white hover:border-ink transition-colors" aria-label="Previous projects"><i class="fa-solid fa-arrow-left"></i></button>
                    <button class="projects-next w-12 h-12 rounded-full border border-ink-line inline-flex items-center justify-center hover:bg-ink hover:text-white hover:border-ink transition-colors" aria-label="Next projects"><i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>

            <div class="swiper projects-swiper reveal">
                <div class="swiper-wrapper pb-14">

                    <article class="swiper-slide project-card group bg-white rounded-2xl overflow-hidden border border-ink-line shadow-sm hover:shadow-xl transition-shadow h-auto">
                        <div class="relative overflow-hidden h-60">
                            <img src="<?php echo esc_url($img_uri . '/5_2_802.png'); ?>" alt="Infinium Onelife apartment residences" class="w-full h-full object-cover" loading="lazy" />
                            <span class="absolute top-4 left-4 bg-ink/90 text-white text-xs font-semibold px-3 py-1.5 rounded-full">Ongoing</span>
                            <button aria-label="Save Infinium Onelife to favourites" class="absolute top-4 right-4 w-9 h-9 rounded-full bg-white/95 inline-flex items-center justify-center text-ink hover:text-brand-red transition-colors"><i class="fa-regular fa-heart"></i></button>
                        </div>
                        <div class="p-6">
                            <h3 class="font-prata text-2xl">Infinium Onelife</h3>
                            <p class="mt-1 text-sm text-ink-muted"><i class="fa-solid fa-location-dot text-gold mr-1.5"></i>Saravanampatti, Coimbatore</p>
                            <div class="mt-4 flex flex-wrap gap-2 text-xs font-medium">
                                <span class="bg-brand-cream border border-ink-line rounded-full px-3 py-1.5">2, 3, 3.5 &amp; 4 BHK</span>
                                <span class="bg-brand-cream border border-ink-line rounded-full px-3 py-1.5">Apartments</span>
                            </div>
                            <a href="#enquire" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-ink hover:text-gold transition-colors">View Details <i class="fa-solid fa-arrow-right text-xs"></i></a>
                        </div>
                    </article>

                    <article class="swiper-slide project-card group bg-white rounded-2xl overflow-hidden border border-ink-line shadow-sm hover:shadow-xl transition-shadow h-auto">
                        <div class="relative overflow-hidden h-60">
                            <img src="<?php echo esc_url($img_uri . '/24_2_802.png'); ?>" alt="Infinium Central 16 apartment towers with pool deck" class="w-full h-full object-cover" loading="lazy" />
                            <span class="absolute top-4 left-4 bg-ink/90 text-white text-xs font-semibold px-3 py-1.5 rounded-full">Ongoing</span>
                            <button aria-label="Save Infinium Central 16 to favourites" class="absolute top-4 right-4 w-9 h-9 rounded-full bg-white/95 inline-flex items-center justify-center text-ink hover:text-brand-red transition-colors"><i class="fa-regular fa-heart"></i></button>
                        </div>
                        <div class="p-6">
                            <h3 class="font-prata text-2xl">Infinium Central 16</h3>
                            <p class="mt-1 text-sm text-ink-muted"><i class="fa-solid fa-location-dot text-gold mr-1.5"></i>Peelamedu, Coimbatore</p>
                            <div class="mt-4 flex flex-wrap gap-2 text-xs font-medium">
                                <span class="bg-brand-cream border border-ink-line rounded-full px-3 py-1.5">3 &amp; 4 BHK</span>
                                <span class="bg-brand-cream border border-ink-line rounded-full px-3 py-1.5">Apartments</span>
                            </div>
                            <a href="#enquire" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-ink hover:text-gold transition-colors">View Details <i class="fa-solid fa-arrow-right text-xs"></i></a>
                        </div>
                    </article>

                    <article class="swiper-slide project-card group bg-white rounded-2xl overflow-hidden border border-ink-line shadow-sm hover:shadow-xl transition-shadow h-auto">
                        <div class="relative overflow-hidden h-60">
                            <img src="<?php echo esc_url($img_uri . '/7_2_802.png'); ?>" alt="Infinium Altitude premium residences" class="w-full h-full object-cover" loading="lazy" />
                            <span class="absolute top-4 left-4 bg-gold text-white text-xs font-semibold px-3 py-1.5 rounded-full">Upcoming</span>
                            <button aria-label="Save Infinium Altitude to favourites" class="absolute top-4 right-4 w-9 h-9 rounded-full bg-white/95 inline-flex items-center justify-center text-ink hover:text-brand-red transition-colors"><i class="fa-regular fa-heart"></i></button>
                        </div>
                        <div class="p-6">
                            <h3 class="font-prata text-2xl">Infinium Altitude</h3>
                            <p class="mt-1 text-sm text-ink-muted"><i class="fa-solid fa-location-dot text-gold mr-1.5"></i>Kalapatti, Coimbatore</p>
                            <div class="mt-4 flex flex-wrap gap-2 text-xs font-medium">
                                <span class="bg-brand-cream border border-ink-line rounded-full px-3 py-1.5">4 &amp; 5 BHK</span>
                                <span class="bg-brand-cream border border-ink-line rounded-full px-3 py-1.5">Apartments</span>
                            </div>
                            <a href="#enquire" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-ink hover:text-gold transition-colors">View Details <i class="fa-solid fa-arrow-right text-xs"></i></a>
                        </div>
                    </article>

                    <article class="swiper-slide project-card group bg-white rounded-2xl overflow-hidden border border-ink-line shadow-sm hover:shadow-xl transition-shadow h-auto">
                        <div class="relative overflow-hidden h-60">
                            <img src="<?php echo esc_url($img_uri . '/23_2_802.png'); ?>" alt="Aara Enclave plotted community residences" class="w-full h-full object-cover" loading="lazy" />
                            <span class="absolute top-4 left-4 bg-ink/90 text-white text-xs font-semibold px-3 py-1.5 rounded-full">Ongoing</span>
                            <button aria-label="Save Aara Enclave to favourites" class="absolute top-4 right-4 w-9 h-9 rounded-full bg-white/95 inline-flex items-center justify-center text-ink hover:text-brand-red transition-colors"><i class="fa-regular fa-heart"></i></button>
                        </div>
                        <div class="p-6">
                            <h3 class="font-prata text-2xl">Aara Enclave</h3>
                            <p class="mt-1 text-sm text-ink-muted"><i class="fa-solid fa-location-dot text-gold mr-1.5"></i>Kalapatti, Coimbatore</p>
                            <div class="mt-4 flex flex-wrap gap-2 text-xs font-medium">
                                <span class="bg-brand-cream border border-ink-line rounded-full px-3 py-1.5">51 Plots</span>
                                <span class="bg-brand-cream border border-ink-line rounded-full px-3 py-1.5">2.27 Acres</span>
                            </div>
                            <a href="#enquire" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-ink hover:text-gold transition-colors">View Details <i class="fa-solid fa-arrow-right text-xs"></i></a>
                        </div>
                    </article>

                    <article class="swiper-slide project-card group bg-white rounded-2xl overflow-hidden border border-ink-line shadow-sm hover:shadow-xl transition-shadow h-auto">
                        <div class="relative overflow-hidden h-60">
                            <img src="<?php echo esc_url($img_uri . '/26_2_802.png'); ?>" alt="Wellington Village residential project" class="w-full h-full object-cover" loading="lazy" />
                            <span class="absolute top-4 left-4 bg-gold text-white text-xs font-semibold px-3 py-1.5 rounded-full">Upcoming</span>
                            <button aria-label="Save Wellington Village to favourites" class="absolute top-4 right-4 w-9 h-9 rounded-full bg-white/95 inline-flex items-center justify-center text-ink hover:text-brand-red transition-colors"><i class="fa-regular fa-heart"></i></button>
                        </div>
                        <div class="p-6">
                            <h3 class="font-prata text-2xl">Wellington Village</h3>
                            <p class="mt-1 text-sm text-ink-muted"><i class="fa-solid fa-location-dot text-gold mr-1.5"></i>Coimbatore</p>
                            <div class="mt-4 flex flex-wrap gap-2 text-xs font-medium">
                                <span class="bg-brand-cream border border-ink-line rounded-full px-3 py-1.5">Residential Community</span>
                            </div>
                            <a href="#enquire" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-ink hover:text-gold transition-colors">View Details <i class="fa-solid fa-arrow-right text-xs"></i></a>
                        </div>
                    </article>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- ======================= PROPERTY TYPES ======================= -->
    <section id="types" class="py-16 sm:py-20 lg:py-24 bg-brand-cream scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12 reveal">
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">Explore Better Projects</p>
                <h2 class="font-prata text-3xl sm:text-4xl lg:text-5xl leading-tight">Explore Better Projects with Estate Partners</h2>
                <p class="mt-4 text-ink-muted leading-relaxed">Whether you are looking for a ready home, planning to build your own, or investing for the future, explore properties by type.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                <article class="reveal group bg-white rounded-2xl overflow-hidden border border-ink-line shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all">
                    <div class="overflow-hidden h-64">
                        <img src="<?php echo esc_url($img_uri . '/24_2_802.png'); ?>" alt="Apartment residences" class="w-full h-full object-cover" loading="lazy" />
                    </div>
                    <div class="p-7">
                        <div class="w-12 h-12 rounded-xl bg-gold/10 text-gold inline-flex items-center justify-center text-xl mb-4"><i class="fa-solid fa-building"></i></div>
                        <h3 class="font-prata text-2xl">Apartments</h3>
                        <p class="mt-3 text-sm text-ink-muted leading-relaxed">From compact 1 &amp; 2 BHK homes to spacious 3 &amp; 4 BHK residences, discover apartments across prime Coimbatore locations.</p>
                        <a href="#projects" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold hover:text-gold transition-colors">Explore Apartments <i class="fa-solid fa-arrow-right text-xs"></i></a>
                    </div>
                </article>

                <article class="reveal group bg-white rounded-2xl overflow-hidden border border-ink-line shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all">
                    <div class="overflow-hidden h-64">
                        <img src="<?php echo esc_url($img_uri . '/6_2_802.png'); ?>" alt="Independent villa" class="w-full h-full object-cover" loading="lazy" />
                    </div>
                    <div class="p-7">
                        <div class="w-12 h-12 rounded-xl bg-gold/10 text-gold inline-flex items-center justify-center text-xl mb-4"><i class="fa-solid fa-house-chimney"></i></div>
                        <h3 class="font-prata text-2xl">Villas</h3>
                        <p class="mt-3 text-sm text-ink-muted leading-relaxed">Discover independent and gated-community villas designed for families looking for more space, privacy and premium living.</p>
                        <a href="#projects" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold hover:text-gold transition-colors">Explore Villas <i class="fa-solid fa-arrow-right text-xs"></i></a>
                    </div>
                </article>

                <article class="reveal group bg-white rounded-2xl overflow-hidden border border-ink-line shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all">
                    <div class="overflow-hidden h-64">
                        <img src="<?php echo esc_url($img_uri . '/20_pexels_curtis_adams_7027791.png'); ?>" alt="Map showing residential plot locations" class="w-full h-full object-cover" loading="lazy" />
                    </div>
                    <div class="p-7">
                        <div class="w-12 h-12 rounded-xl bg-gold/10 text-gold inline-flex items-center justify-center text-xl mb-4"><i class="fa-solid fa-map-location-dot"></i></div>
                        <h3 class="font-prata text-2xl">Residential Plots</h3>
                        <p class="mt-3 text-sm text-ink-muted leading-relaxed">Choose a plot today and build your home your way — or secure land as a long-term investment.</p>
                        <a href="#projects" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold hover:text-gold transition-colors">Explore Plots <i class="fa-solid fa-arrow-right text-xs"></i></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ======================= ABOUT ======================= -->
    <section id="about" class="py-16 sm:py-20 lg:py-24 scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div class="reveal relative order-2 lg:order-1">
                <div class="rounded-2xl overflow-hidden shadow-xl">
                    <img src="<?php echo esc_url($img_uri . '/9_image_262.png'); ?>" alt="Property agreement signing with Estate Partners guidance" class="w-full h-[420px] sm:h-[520px] object-cover" loading="lazy" />
                </div>
                <div class="absolute -bottom-6 left-5 sm:left-8 bg-ink text-white rounded-2xl px-6 py-5 shadow-xl flex items-center gap-4">
                    <span class="w-12 h-12 rounded-full bg-gold inline-flex items-center justify-center text-xl shrink-0"><i class="fa-solid fa-headset"></i></span>
                    <span>
                        <span class="block font-prata text-2xl leading-none">24/7</span>
                        <span class="block text-xs text-white/70 mt-1 tracking-wide">Buyer support, always</span>
                    </span>
                </div>
            </div>

            <div class="reveal order-1 lg:order-2">
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">About Us</p>
                <h2 class="font-prata text-3xl sm:text-4xl lg:text-5xl leading-tight">Why Choose Estate Partners?</h2>
                <p class="mt-5 text-ink-soft leading-relaxed">Estate Partners helps you discover, compare and choose residential properties across Coimbatore with greater clarity and confidence.</p>
                <p class="mt-4 text-ink-muted leading-relaxed">From emerging neighbourhoods to established residential destinations, we bring together apartments, villas and residential plots in one platform — with detailed project information, location insights, pricing guidance and buyer-focused support.</p>
                <p class="mt-4 text-ink-muted leading-relaxed">Our goal is simple: make property buying in Coimbatore easier, more transparent and better informed.</p>
                <ul class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm font-medium">
                    <li class="flex items-center gap-3 bg-brand-cream border border-ink-line rounded-xl px-4 py-3"><i class="fa-solid fa-circle-check text-gold"></i> Detailed project info</li>
                    <li class="flex items-center gap-3 bg-brand-cream border border-ink-line rounded-xl px-4 py-3"><i class="fa-solid fa-circle-check text-gold"></i> Location insights</li>
                    <li class="flex items-center gap-3 bg-brand-cream border border-ink-line rounded-xl px-4 py-3"><i class="fa-solid fa-circle-check text-gold"></i> Pricing guidance</li>
                    <li class="flex items-center gap-3 bg-brand-cream border border-ink-line rounded-xl px-4 py-3"><i class="fa-solid fa-circle-check text-gold"></i> Buyer-focused support</li>
                </ul>
                <a href="#enquire" class="mt-8 inline-flex items-center gap-2 bg-ink hover:bg-gold text-white font-semibold px-7 py-3.5 rounded-lg transition-colors">Know More About Estate Partners <i class="fa-solid fa-arrow-right text-sm"></i></a>
            </div>
        </div>
    </section>

    <!-- ======================= STATUS / TIMELINE ======================= -->
    <section id="status" class="py-16 sm:py-20 lg:py-24 bg-ink text-white scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-10 reveal">
                <p class="text-gold-light font-bold uppercase tracking-[0.18em] text-sm mb-3">Explore Projects by Project Status</p>
                <h2 class="font-prata text-3xl sm:text-4xl lg:text-5xl leading-tight">Find Projects Based on Your Timeline</h2>
                <p class="mt-4 text-white/70 leading-relaxed">Whether you want to move soon or plan ahead, explore projects based on their current development stage.</p>
            </div>

            <div class="flex justify-center gap-3 mb-10 reveal" role="tablist" aria-label="Project status">
                <button class="status-tab active border border-white/30 rounded-full px-8 py-3 text-sm font-semibold tracking-wider" data-target="panel-ongoing" role="tab">Ongoing Projects</button>
                <button class="status-tab border border-white/30 rounded-full px-8 py-3 text-sm font-semibold tracking-wider" data-target="panel-upcoming" role="tab">Upcoming Projects</button>
            </div>

            <!-- Ongoing -->
            <div id="panel-ongoing" class="status-panel grid grid-cols-1 md:grid-cols-3 gap-6">
                <article class="bg-white/[0.06] border border-white/15 rounded-2xl overflow-hidden hover:border-gold/60 transition-colors">
                    <div class="h-52 overflow-hidden"><img src="<?php echo esc_url($img_uri . '/23_2_802.png'); ?>" alt="Aara Enclave" class="w-full h-full object-cover" loading="lazy" /></div>
                    <div class="p-6">
                        <h3 class="font-prata text-2xl">Aara Enclave</h3>
                        <p class="text-sm text-white/60 mt-1"><i class="fa-solid fa-location-dot text-gold mr-1.5"></i>Kalapatti, Coimbatore</p>
                        <p class="text-sm text-white/75 mt-3 leading-relaxed">A landmark plotted community in Kalapatti, delivering spacious layouts, strong connectivity and a well-established residential environment.</p>
                        <div class="mt-4 flex flex-wrap gap-2 text-xs font-medium">
                            <span class="border border-white/20 rounded-full px-3 py-1.5">51 Plots</span>
                            <span class="border border-white/20 rounded-full px-3 py-1.5">2.27 Acres</span>
                            <span class="border border-white/20 rounded-full px-3 py-1.5">DTCP &amp; RERA Approved</span>
                            <span class="border border-white/20 rounded-full px-3 py-1.5">CCTV Provided</span>
                        </div>
                    </div>
                </article>
                <article class="bg-white/[0.06] border border-white/15 rounded-2xl overflow-hidden hover:border-gold/60 transition-colors">
                    <div class="h-52 overflow-hidden"><img src="<?php echo esc_url($img_uri . '/5_2_802.png'); ?>" alt="Infinium Onelife" class="w-full h-full object-cover" loading="lazy" /></div>
                    <div class="p-6">
                        <h3 class="font-prata text-2xl">Infinium Onelife</h3>
                        <p class="text-sm text-white/60 mt-1"><i class="fa-solid fa-location-dot text-gold mr-1.5"></i>Saravanampatti, Coimbatore</p>
                        <p class="text-sm text-white/75 mt-3 leading-relaxed">Be among the early buyers and explore newly launched residential projects in emerging Coimbatore locations.</p>
                        <div class="mt-4 flex flex-wrap gap-2 text-xs font-medium">
                            <span class="border border-white/20 rounded-full px-3 py-1.5">2, 3, 3.5 &amp; 4 BHK</span>
                            <span class="border border-white/20 rounded-full px-3 py-1.5">Apartments</span>
                        </div>
                    </div>
                </article>
                <article class="bg-white/[0.06] border border-white/15 rounded-2xl overflow-hidden hover:border-gold/60 transition-colors">
                    <div class="h-52 overflow-hidden"><img src="<?php echo esc_url($img_uri . '/24_2_802.png'); ?>" alt="Infinium Central 16" class="w-full h-full object-cover" loading="lazy" /></div>
                    <div class="p-6">
                        <h3 class="font-prata text-2xl">Infinium Central 16</h3>
                        <p class="text-sm text-white/60 mt-1"><i class="fa-solid fa-location-dot text-gold mr-1.5"></i>Peelamedu, Coimbatore</p>
                        <p class="text-sm text-white/75 mt-3 leading-relaxed">Thoughtfully designed layouts, modern amenities and secure surroundings where life truly thrives.</p>
                        <div class="mt-4 flex flex-wrap gap-2 text-xs font-medium">
                            <span class="border border-white/20 rounded-full px-3 py-1.5">3 &amp; 4 BHK</span>
                            <span class="border border-white/20 rounded-full px-3 py-1.5">Apartments</span>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Upcoming -->
            <div id="panel-upcoming" class="status-panel hidden grid grid-cols-1 md:grid-cols-3 gap-6">
                <article class="bg-white/[0.06] border border-white/15 rounded-2xl overflow-hidden hover:border-gold/60 transition-colors">
                    <div class="h-52 overflow-hidden"><img src="<?php echo esc_url($img_uri . '/7_2_802.png'); ?>" alt="Infinium Altitude" class="w-full h-full object-cover" loading="lazy" /></div>
                    <div class="p-6">
                        <h3 class="font-prata text-2xl">Infinium Altitude</h3>
                        <p class="text-sm text-white/60 mt-1"><i class="fa-solid fa-location-dot text-gold mr-1.5"></i>Kalapatti, Coimbatore</p>
                        <p class="text-sm text-white/75 mt-3 leading-relaxed">Plan ahead with an upcoming address in one of Coimbatore's fastest-developing neighbourhoods.</p>
                        <div class="mt-4 flex flex-wrap gap-2 text-xs font-medium">
                            <span class="border border-white/20 rounded-full px-3 py-1.5">4 &amp; 5 BHK</span>
                            <span class="border border-white/20 rounded-full px-3 py-1.5">Apartments</span>
                        </div>
                    </div>
                </article>
                <article class="bg-white/[0.06] border border-white/15 rounded-2xl overflow-hidden hover:border-gold/60 transition-colors">
                    <div class="h-52 overflow-hidden"><img src="<?php echo esc_url($img_uri . '/26_2_802.png'); ?>" alt="Wellington Village" class="w-full h-full object-cover" loading="lazy" /></div>
                    <div class="p-6">
                        <h3 class="font-prata text-2xl">Wellington Village</h3>
                        <p class="text-sm text-white/60 mt-1"><i class="fa-solid fa-location-dot text-gold mr-1.5"></i>Coimbatore</p>
                        <p class="text-sm text-white/75 mt-3 leading-relaxed">A forthcoming residential community crafted for long-term comfort and value.</p>
                        <div class="mt-4 flex flex-wrap gap-2 text-xs font-medium">
                            <span class="border border-white/20 rounded-full px-3 py-1.5">Residential Community</span>
                        </div>
                    </div>
                </article>
                <article class="bg-white/[0.06] border border-gold/50 rounded-2xl p-6 flex flex-col justify-center">
                    <div class="w-12 h-12 rounded-xl bg-gold/15 text-gold-light inline-flex items-center justify-center text-xl mb-4"><i class="fa-solid fa-bell"></i></div>
                    <h3 class="font-prata text-2xl">Looking to Invest?</h3>
                    <p class="text-sm text-white/75 mt-3 leading-relaxed">Explore locations and projects with potential for long-term value — and get notified first.</p>
                    <a href="#enquire" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-gold-light hover:text-white transition-colors">Notify Me <i class="fa-solid fa-arrow-right text-xs"></i></a>
                </article>
            </div>
        </div>
    </section>

    <!-- ======================= LOCATIONS ======================= -->
    <section id="locations" class="py-16 sm:py-20 lg:py-24 scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="reveal relative">
                <div class="rounded-2xl overflow-hidden shadow-xl">
                    <img src="<?php echo esc_url($img_uri . '/19_pexels_curtis_adams_7027791.png'); ?>" alt="Hands holding a model home — finding the right neighbourhood" class="w-full h-[380px] sm:h-[480px] object-cover" loading="lazy" />
                </div>
                <div class="absolute top-5 left-5 bg-white/95 backdrop-blur rounded-xl px-5 py-3 shadow-lg">
                    <p class="font-prata text-lg leading-tight">Coimbatore Property Market</p>
                    <p class="text-xs text-ink-muted mt-0.5">Sought-after &amp; fast-developing locations</p>
                </div>
            </div>
            <div class="reveal">
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">Neighbourhoods</p>
                <h2 class="font-prata text-3xl sm:text-4xl lg:text-5xl leading-tight">Explore Properties by Location</h2>
                <p class="mt-4 text-ink-muted leading-relaxed">Explore residential projects across some of Coimbatore's most sought-after and fast-developing locations. Explore areas such as Kalapatti, Saravanampatti, Vadavalli, Thudiyalur and other growing neighbourhoods.</p>
                <div class="mt-7 flex flex-wrap gap-2.5">
                    <a href="#projects" class="location-pill border border-ink-line rounded-full px-5 py-2.5 text-sm font-medium">Kalapatti</a>
                    <a href="#projects" class="location-pill border border-ink-line rounded-full px-5 py-2.5 text-sm font-medium">Saravanampatti</a>
                    <a href="#projects" class="location-pill border border-ink-line rounded-full px-5 py-2.5 text-sm font-medium">Vadavalli</a>
                    <a href="#projects" class="location-pill border border-ink-line rounded-full px-5 py-2.5 text-sm font-medium">Thudiyalur</a>
                    <a href="#projects" class="location-pill border border-ink-line rounded-full px-5 py-2.5 text-sm font-medium">Peelamedu</a>
                    <a href="#projects" class="location-pill border border-ink-line rounded-full px-5 py-2.5 text-sm font-medium">Ganapathy</a>
                    <a href="#projects" class="location-pill border border-ink-line rounded-full px-5 py-2.5 text-sm font-medium">Sulur</a>
                    <a href="#projects" class="location-pill border border-ink-line rounded-full px-5 py-2.5 text-sm font-medium">Vedapatti</a>
                    <a href="#projects" class="location-pill border border-ink-line rounded-full px-5 py-2.5 text-sm font-medium">Vellalore</a>
                    <a href="#projects" class="location-pill border border-ink-line rounded-full px-5 py-2.5 text-sm font-medium">Ramanathapuram</a>
                    <a href="#projects" class="location-pill border border-ink-line rounded-full px-5 py-2.5 text-sm font-medium">Idikarai</a>
                    <a href="#projects" class="location-pill border border-ink-line rounded-full px-5 py-2.5 text-sm font-medium">Mettupalayam</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================= TIMELINE / MOVE-IN ======================= -->
    <section class="pb-16 sm:pb-20 lg:pb-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <article class="reveal location-card group relative rounded-2xl overflow-hidden h-96">
                    <img src="<?php echo esc_url($img_uri . '/21_pexels_curtis_adams_7027791.png'); ?>" alt="Ready-to-move living room interior" class="absolute inset-0 w-full h-full object-cover" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/40 to-transparent"></div>
                    <div class="relative h-full flex flex-col justify-end p-7 text-white">
                        <h3 class="font-prata text-2xl">Move In Soon</h3>
                        <p class="mt-2 text-sm text-white/80">Ready and nearing-completion homes for families that want to move without the wait.</p>
                    </div>
                </article>
                <article class="reveal location-card group relative rounded-2xl overflow-hidden h-96">
                    <img src="<?php echo esc_url($img_uri . '/6_2_802.png'); ?>" alt="Villa being built your way" class="absolute inset-0 w-full h-full object-cover" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/40 to-transparent"></div>
                    <div class="relative h-full flex flex-col justify-end p-7 text-white">
                        <h3 class="font-prata text-2xl">Build Your Way</h3>
                        <p class="mt-2 text-sm text-white/80">Choose a plot today and build your home your way — designed around your family.</p>
                    </div>
                </article>
                <article class="reveal location-card group relative rounded-2xl overflow-hidden h-96">
                    <img src="<?php echo esc_url($img_uri . '/16_image_123.png'); ?>" alt="Property price growth and investment" class="absolute inset-0 w-full h-full object-cover" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/40 to-transparent"></div>
                    <div class="relative h-full flex flex-col justify-end p-7 text-white">
                        <h3 class="font-prata text-2xl">Invest for Tomorrow</h3>
                        <p class="mt-2 text-sm text-white/80">Explore locations and projects with potential for long-term value.</p>
                    </div>
                </article>
            </div>

            <!-- Promises -->
            <div class="mt-14 bg-brand-cream border border-ink-line rounded-2xl p-7 sm:p-10 reveal">
                <div class="flex flex-col lg:flex-row lg:items-center gap-8">
                    <div class="lg:max-w-xs shrink-0">
                        <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-2">Our Promises</p>
                        <h2 class="font-prata text-3xl leading-tight">Buying With Confidence</h2>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 flex-1">
                        <div class="flex gap-4">
                            <span class="w-12 h-12 shrink-0 rounded-xl bg-ink text-gold-light inline-flex items-center justify-center text-lg"><i class="fa-solid fa-circle-check"></i></span>
                            <span><span class="block font-semibold">Verified</span><span class="block text-sm text-ink-muted mt-1">Approvals, layouts and project details checked for you.</span></span>
                        </div>
                        <div class="flex gap-4">
                            <span class="w-12 h-12 shrink-0 rounded-xl bg-ink text-gold-light inline-flex items-center justify-center text-lg"><i class="fa-solid fa-tag"></i></span>
                            <span><span class="block font-semibold">Lowest Price Guaranteed</span><span class="block text-sm text-ink-muted mt-1">Find a lower price anywhere, tell us and we will match it.</span></span>
                        </div>
                        <div class="flex gap-4">
                            <span class="w-12 h-12 shrink-0 rounded-xl bg-ink text-gold-light inline-flex items-center justify-center text-lg"><i class="fa-solid fa-headset"></i></span>
                            <span><span class="block font-semibold">24/7 Support</span><span class="block text-sm text-ink-muted mt-1">Guidance from first enquiry to final handover.</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================= GUIDANCE / ENQUIRE ======================= -->
    <section id="enquire" class="py-16 sm:py-20 lg:py-24 bg-white scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch">
            <div class="reveal relative rounded-2xl overflow-hidden min-h-[420px]">
                <img src="<?php echo esc_url($img_uri . '/4_image_259.png'); ?>" alt="Handshake over a model home — expert buyer guidance" class="absolute inset-0 w-full h-full object-cover" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-ink/90 via-ink/35 to-transparent"></div>
                <div class="relative h-full flex flex-col justify-end p-7 sm:p-10 text-white">
                    <p class="text-gold-light font-bold uppercase tracking-[0.18em] text-sm mb-3">Need Guidance</p>
                    <h2 class="font-prata text-3xl sm:text-4xl leading-tight">Not Sure Which Property Is Right for You?</h2>
                    <p class="mt-4 text-white/85 leading-relaxed text-sm sm:text-base">Buying property is a major decision. You don't have to figure it out alone. Tell us what you are looking for — your preferred location, property type, budget and purpose — and our team can help you shortlist suitable projects in Coimbatore.</p>
                    <a href="tel:+917092958830" class="mt-6 inline-flex items-center gap-3 text-lg font-semibold hover:text-gold-light transition-colors"><span class="w-11 h-11 rounded-full bg-gold inline-flex items-center justify-center text-white"><i class="fa-solid fa-phone"></i></span> +91 70929 58830</a>
                </div>
            </div>

            <div class="reveal bg-brand-cream border border-ink-line rounded-2xl p-7 sm:p-10">
                <h3 class="font-prata text-2xl sm:text-3xl leading-snug">Our property expert will get in touch with you</h3>
                <p class="mt-2 text-sm text-ink-muted">Share your details and preferences — we will call you back shortly.</p>
                <!-- <form id="enquiry-form" class="mt-7 space-y-4" novalidate>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <label class="block">
                            <span class="text-xs font-semibold uppercase tracking-wider text-ink-muted">Full Name</span>
                            <input type="text" required placeholder="Your name" class="mt-1 w-full border border-ink-line rounded-lg px-4 py-3 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-gold/60 focus:border-gold" />
                        </label>
                        <label class="block">
                            <span class="text-xs font-semibold uppercase tracking-wider text-ink-muted">Phone Number*</span>
                            <input id="enquiry-phone" type="tel" required placeholder="+91 XXXXX XXXXX" class="mt-1 w-full border border-ink-line rounded-lg px-4 py-3 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-gold/60 focus:border-gold" />
                        </label>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <label class="block">
                            <span class="text-xs font-semibold uppercase tracking-wider text-ink-muted">I am looking for</span>
                            <select class="mt-1 w-full border border-ink-line rounded-lg px-4 py-3 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-gold/60 focus:border-gold">
                                <option>Apartment</option>
                                <option>Villa</option>
                                <option>Residential Plot</option>
                                <option>Investment Advice</option>
                            </select>
                        </label>
                        <label class="block">
                            <span class="text-xs font-semibold uppercase tracking-wider text-ink-muted">Preferred Location</span>
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
                        <span class="text-xs font-semibold uppercase tracking-wider text-ink-muted">Message (optional)</span>
                        <textarea rows="3" placeholder="Budget, purpose, timeline…" class="mt-1 w-full border border-ink-line rounded-lg px-4 py-3 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-gold/60 focus:border-gold"></textarea>
                    </label>
                    <p id="enquiry-msg" class="hidden text-sm font-medium"></p>
                    <button type="submit" class="w-full inline-flex items-center justify-center gap-2 bg-brand-purple hover:bg-ink text-white font-semibold px-7 py-4 rounded-lg transition-colors">Enquire Now <i class="fa-solid fa-arrow-right text-sm"></i></button>
                    <p class="text-xs text-ink-muted text-center">By submitting, you agree to our Privacy Policy.</p>
                </form> -->
            </div>
        </div>
    </section>

    <!-- ======================= TESTIMONIALS ======================= -->
    <section id="testimonials" class="py-16 sm:py-20 lg:py-24 bg-brand-cream scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12 reveal">
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">Testimonials</p>
                <h2 class="font-prata text-3xl sm:text-4xl lg:text-5xl leading-tight">What Our Customers Say</h2>
                <p class="mt-4 text-ink-muted">Real experiences from people who trusted Estate Partners.</p>
            </div>

            <div class="swiper testimonials-swiper reveal">
                <div class="swiper-wrapper pb-14">
                    <figure class="swiper-slide h-auto bg-white rounded-2xl border border-ink-line p-7 sm:p-8 shadow-sm flex flex-col">
                        <div class="text-gold text-xl mb-4"><i class="fa-solid fa-quote-left"></i></div>
                        <blockquote class="text-ink-soft leading-relaxed flex-1">The team understood exactly what we were looking for and helped us shortlist properties based on our budget and preferred location.</blockquote>
                        <figcaption class="mt-6 flex items-center gap-4">
                            <img src="<?php echo esc_url($img_uri . '/17_ellipse_15.png'); ?>" alt="Vigneshwaran" class="w-12 h-12 rounded-full object-cover" loading="lazy" />
                            <span><span class="block font-semibold">Vigneshwaran</span><span class="block text-xs text-ink-muted">Home Buyer, Coimbatore</span></span>
                        </figcaption>
                    </figure>
                    <figure class="swiper-slide h-auto bg-white rounded-2xl border border-ink-line p-7 sm:p-8 shadow-sm flex flex-col">
                        <div class="text-gold text-xl mb-4"><i class="fa-solid fa-quote-left"></i></div>
                        <blockquote class="text-ink-soft leading-relaxed flex-1">The project information and site-visit support made the entire property search much easier.</blockquote>
                        <figcaption class="mt-6 flex items-center gap-4">
                            <img src="<?php echo esc_url($img_uri . '/18_ellipse_15.png'); ?>" alt="Kavi Priya" class="w-12 h-12 rounded-full object-cover" loading="lazy" />
                            <span><span class="block font-semibold">Kavi Priya</span><span class="block text-xs text-ink-muted">Home Buyer, Coimbatore</span></span>
                        </figcaption>
                    </figure>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- ======================= INSIGHTS ======================= -->
    <section id="insights" class="py-16 sm:py-20 lg:py-24 scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-end justify-between gap-6 mb-10 reveal">
                <div class="max-w-2xl">
                    <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">Real Estate Insights</p>
                    <h2 class="font-prata text-3xl sm:text-4xl lg:text-5xl leading-tight">News and Articles</h2>
                    <p class="mt-4 text-ink-muted leading-relaxed">Stay informed with practical guides, property insights and local market information to help you make smarter real estate decisions.</p>
                </div>
                <div class="flex items-center gap-3">
                    <button class="insights-prev w-12 h-12 rounded-full border border-ink-line inline-flex items-center justify-center hover:bg-ink hover:text-white hover:border-ink transition-colors" aria-label="Previous articles"><i class="fa-solid fa-arrow-left"></i></button>
                    <button class="insights-next w-12 h-12 rounded-full border border-ink-line inline-flex items-center justify-center hover:bg-ink hover:text-white hover:border-ink transition-colors" aria-label="Next articles"><i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>

            <div class="swiper insights-swiper reveal">
                <div class="swiper-wrapper pb-14">
                    <article class="swiper-slide insight-card group bg-white rounded-2xl overflow-hidden border border-ink-line shadow-sm hover:shadow-xl transition-shadow h-auto">
                        <div class="overflow-hidden h-56"><img src="<?php echo esc_url($img_uri . '/28_rectangle_10323.png'); ?>" alt="Reviewing property documents before buying" class="w-full h-full object-cover" loading="lazy" /></div>
                        <div class="p-6">
                            <p class="text-xs font-bold uppercase tracking-wider text-gold">Buying Guides</p>
                            <h3 class="mt-2 font-prata text-xl leading-snug">What to Check Before Buying Your Home</h3>
                            <p class="mt-2 text-sm text-ink-muted leading-relaxed">Learn what to check before buying an apartment, villa or residential plot.</p>
                            <span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold group-hover:text-gold transition-colors">Read More <i class="fa-solid fa-arrow-right text-xs"></i></span>
                        </div>
                    </article>
                    <article class="swiper-slide insight-card group bg-white rounded-2xl overflow-hidden border border-ink-line shadow-sm hover:shadow-xl transition-shadow h-auto">
                        <div class="overflow-hidden h-56"><img src="<?php echo esc_url($img_uri . '/29_rectangle_10323.png'); ?>" alt="Comparing apartment and villa models" class="w-full h-full object-cover" loading="lazy" /></div>
                        <div class="p-6">
                            <p class="text-xs font-bold uppercase tracking-wider text-gold">Buying Guides</p>
                            <h3 class="mt-2 font-prata text-xl leading-snug">Apartments vs Villas: Finding Your Fit</h3>
                            <p class="mt-2 text-sm text-ink-muted leading-relaxed">Space, privacy, budget and lifestyle — how to choose with confidence.</p>
                            <span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold group-hover:text-gold transition-colors">Read More <i class="fa-solid fa-arrow-right text-xs"></i></span>
                        </div>
                    </article>
                    <article class="swiper-slide insight-card group bg-white rounded-2xl overflow-hidden border border-ink-line shadow-sm hover:shadow-xl transition-shadow h-auto">
                        <div class="overflow-hidden h-56"><img src="<?php echo esc_url($img_uri . '/30_rectangle_10323.png'); ?>" alt="Analysing locations for real estate investment" class="w-full h-full object-cover" loading="lazy" /></div>
                        <div class="p-6">
                            <p class="text-xs font-bold uppercase tracking-wider text-gold">Locality Guides</p>
                            <h3 class="mt-2 font-prata text-xl leading-snug">Coimbatore Growth Corridors to Watch</h3>
                            <p class="mt-2 text-sm text-ink-muted leading-relaxed">Explore locations and projects with potential for long-term value.</p>
                            <span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold group-hover:text-gold transition-colors">Read More <i class="fa-solid fa-arrow-right text-xs"></i></span>
                        </div>
                    </article>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <!-- Buyer guides -->
            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 reveal">
                <a href="#insights" class="flex items-center gap-4 bg-brand-cream border border-ink-line rounded-xl px-5 py-4 hover:border-gold hover:-translate-y-0.5 transition-all">
                    <span class="w-11 h-11 shrink-0 rounded-lg bg-ink text-gold-light inline-flex items-center justify-center"><i class="fa-solid fa-book-open"></i></span>
                    <span><span class="block font-semibold text-sm">New Buyers Guide</span><span class="block text-xs text-ink-muted">Start here</span></span>
                </a>
                <a href="#insights" class="flex items-center gap-4 bg-brand-cream border border-ink-line rounded-xl px-5 py-4 hover:border-gold hover:-translate-y-0.5 transition-all">
                    <span class="w-11 h-11 shrink-0 rounded-lg bg-ink text-gold-light inline-flex items-center justify-center"><i class="fa-solid fa-plane"></i></span>
                    <span><span class="block font-semibold text-sm">NRI Guide</span><span class="block text-xs text-ink-muted">Buy from abroad</span></span>
                </a>
                <a href="#insights" class="flex items-center gap-4 bg-brand-cream border border-ink-line rounded-xl px-5 py-4 hover:border-gold hover:-translate-y-0.5 transition-all">
                    <span class="w-11 h-11 shrink-0 rounded-lg bg-ink text-gold-light inline-flex items-center justify-center"><i class="fa-solid fa-key"></i></span>
                    <span><span class="block font-semibold text-sm">Buying Guides</span><span class="block text-xs text-ink-muted">Step-by-step help</span></span>
                </a>
                <a href="#locations" class="flex items-center gap-4 bg-brand-cream border border-ink-line rounded-xl px-5 py-4 hover:border-gold hover:-translate-y-0.5 transition-all">
                    <span class="w-11 h-11 shrink-0 rounded-lg bg-ink text-gold-light inline-flex items-center justify-center"><i class="fa-solid fa-map"></i></span>
                    <span><span class="block font-semibold text-sm">Locality Guides</span><span class="block text-xs text-ink-muted">Know your area</span></span>
                </a>
            </div>
        </div>
    </section>

    <!-- ======================= CTA BAND ======================= -->
    <section class="bg-brand-purple text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-14 sm:py-16 flex flex-col lg:flex-row lg:items-center gap-8">
            <div class="flex-1 reveal">
                <h2 class="font-prata text-3xl sm:text-4xl leading-tight">Let's help you find a space that truly feels home</h2>
                <p class="mt-3 text-white/75 text-sm sm:text-base">Register for exclusive offers on handpicked Coimbatore projects.</p>
            </div>
            <!-- <form id="newsletter-form" class="reveal w-full lg:max-w-md" onsubmit="return false;">
                <div class="flex flex-col sm:flex-row gap-3">
                    <input type="email" required placeholder="Your email address" aria-label="Email address" class="flex-1 rounded-lg px-5 py-3.5 text-sm text-ink focus:outline-none focus:ring-2 focus:ring-gold" />
                    <button type="submit" class="inline-flex items-center justify-center gap-2 bg-gold hover:bg-gold-dark text-white font-semibold px-7 py-3.5 rounded-lg text-sm transition-colors whitespace-nowrap">Register Now</button>
                </div>
                <p id="newsletter-note" class="hidden mt-3 text-sm text-gold-light"></p>
            </form> -->
        </div>
    </section>
</main>

<?php get_footer(); ?>