<?php

/**
 * Template Name: Home
 *
 * Contact page: hero, contact card + form, map and call-to-action strip.
 * Applies automatically to a page with the slug "contact", or choose
 * "Contact" in Page Attributes > Template.
 *
 * @package EstatePartners
 */
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
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/2_home_i_2.png" alt="Premium villa exterior in Coimbatore" class="absolute inset-0 w-full h-full object-cover" />
                    <div class="hero-overlay absolute inset-0"></div>
                    <div class="container relative h-full mx-auto px-4 sm:px-6 lg:px-8 flex items-center">
                        <div class="lg:max-w-[85%] xl:max-w-6xl text-white">
                            <p class="text-white font-semibold text-lg mb-4">Find the Right Property in Coimbatore</p>
                            <h2 class="hero-title font-prata leading-snug">Explore verified residential projects across Coimbatore - from premium apartments and villas to residential plots.</h2>
                            <?php
                            $td = 'vnktheme-textdomain';

                            // Tabs: slug must match your property_type term slugs.
                            $search_tabs = array(
                                'plots'      => __('Plots', $td),
                                'apartments' => __('Apartments', $td),
                                'villas'     => __('Villas', $td),
                            );

                            // Trending searches
                            $trending = array('Kalapatti', 'Ganapathy', 'Peelamedu', 'Vellalore');
                            ?>

                            <div class="mt-8 w-full max-w-3xl">
                                <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                                    <input type="hidden" name="post_type" value="project" />

                                    <!-- Tabs -->
                                    <!-- <div class="flex" role="radiogroup" aria-label="<1?php esc_attr_e('Property type', $td); ?>">
                                        <1?php $i = 0;
                                        foreach ($search_tabs as $slug => $label) : ?>
                                            <div class="relative">
                                                <input type="radio" name="property_type" id="search-type-<1?php echo esc_attr($slug); ?>"
                                                    value="<1?php echo esc_attr($slug); ?>" class="peer sr-only" <1?php checked(0 === $i); ?> />
                                                <label for="search-type-<1?php echo esc_attr($slug); ?>"
                                                    class="block cursor-pointer rounded-t-lg border-b-2 border-transparent bg-[#302F5A] px-5 py-3 text-sm font-semibold text-white transition-colors
                        sm:px-8 hover:bg-[#3d3b70]
                        peer-checked:border-[#302F5A] peer-checked:bg-white peer-checked:text-[#302F5A]
                        peer-focus-visible:ring-2 peer-focus-visible:ring-gold">
                                                    <1?php echo esc_html($label); ?>
                                                </label>
                                            </div>
                                        <1?php $i++;
                                        endforeach; ?>
                                    </div> -->

                                    <!-- Search bar -->
                                    <div class="flex flex-col gap-3 rounded-xl bg-white p-3 shadow-lg sm:flex-row sm:items-center sm:p-4">

                                        <!-- Location (fixed to Coimbatore) -->
                                        <div class="flex items-center px-2 sm:px-4 sm:pr-6 sm:border-r sm:border-ink-line">
                                            <span class="font-semibold text-[#444444]"><?php esc_html_e('Coimbatore', $td); ?></span>
                                        </div>

                                        <!-- Input -->
                                        <div class="flex min-w-0 flex-1 items-center gap-3 rounded-lg border border-ink-line px-4 sm:border-0 sm:px-2">
                                            <i class="fa-solid fa-magnifying-glass text-sm text-[#6B6B6B]" aria-hidden="true"></i>
                                            <label for="home-search" class="sr-only"><?php esc_html_e('Search by project or location', $td); ?></label>
                                            <input id="home-search" type="search" name="s" value="<?php echo esc_attr(get_search_query()); ?>"
                                                placeholder="<?php esc_attr_e('Search by "project"', $td); ?>"
                                                class="w-full min-w-0 bg-transparent py-3 text-sm text-[#302F5A] placeholder:text-[#6B6B6B] focus:outline-none" />
                                        </div>

                                        <button type="submit"
                                            class="inline-flex items-center justify-center rounded-lg bg-[#302F5A] px-8 py-3 font-semibold text-white transition-colors hover:bg-gold">
                                            <?php esc_html_e('Search', $td); ?>
                                        </button>
                                    </div>
                                </form>

                                <!-- Trending searches -->
                                <!-- <div class="mt-5 flex flex-wrap items-center gap-3">
                                    <span class="text-sm font-semibold text-white"><1?php esc_html_e('Trending Searches:', $td); ?></span>
                                    <1?php foreach ($trending as $term) : ?>
                                        <a href="<1?php echo esc_url(add_query_arg(array('s' => $term, 'post_type' => 'project'), home_url('/'))); ?>"
                                            class="inline-flex items-center gap-2 rounded-full bg-white px-5 py-2 text-sm font-medium text-[#302F5A] transition-colors hover:bg-gold hover:text-white">
                                            <1?php echo esc_html($term); ?>
                                            <i class="fa-solid fa-arrow-up-right-from-square text-[10px]" aria-hidden="true"></i>
                                        </a>
                                    <1?php endforeach; ?>
                                </div> -->
                            </div>
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
                <p class="text-sm text-[#302F5A] mb-5">Search across locations, types and budgets.</p>
                <form class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-3" onsubmit="return false;">
                    <label class="block">
                        <span class="text-xs font-semibold uppercase tracking-wider text-[#302F5A]">Location</span>
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
                        <span class="text-xs font-semibold uppercase tracking-wider text-[#302F5A]">Property Type</span>
                        <select class="mt-1 w-full border border-ink-line rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-gold/60 focus:border-gold">
                            <option>Apartments</option>
                            <option>Villas</option>
                            <option>Residential Plots</option>
                        </select>
                    </label>
                    <label class="block">
                        <span class="text-xs font-semibold uppercase tracking-wider text-[#302F5A]">Configuration</span>
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
                        <span class="text-xs font-semibold uppercase tracking-wider text-[#302F5A]">Status</span>
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
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/4_image_259.png" alt="Property agreement signing with Estate Partners guidance" class="w-full h-[420px] sm:h-[520px] object-cover" loading="lazy" />
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
                <p class="mt-4 leading-relaxed">Our goal is simple: make property buying in Coimbatore easier, more transparent and better informed.</p>
                <!-- <ul class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm font-medium">
                    <li class="flex items-center gap-3 bg-brand-cream border border-ink-line rounded-xl px-4 py-3"><i class="fa-solid fa-circle-check text-gold"></i> Detailed project info</li>
                    <li class="flex items-center gap-3 bg-brand-cream border border-ink-line rounded-xl px-4 py-3"><i class="fa-solid fa-circle-check text-gold"></i> Location insights</li>
                    <li class="flex items-center gap-3 bg-brand-cream border border-ink-line rounded-xl px-4 py-3"><i class="fa-solid fa-circle-check text-gold"></i> Pricing guidance</li>
                    <li class="flex items-center gap-3 bg-brand-cream border border-ink-line rounded-xl px-4 py-3"><i class="fa-solid fa-circle-check text-gold"></i> Buyer-focused support</li>
                </ul> -->
                <a href="https://estatepartners.in/about-us/" class="mt-5 inline-flex items-center justify-center px-6 w-max sm:px-10 py-2 gap-2 bg-gold rounded-lg text-white text-center w-full font-semibold transition-colors">
                    <span>Know More About Estate Partners</span>
                    <i class="fa-solid fa-arrow-right text-sm"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ======================= GUIDANCE / ENQUIRE ======================= -->
    <section id="enquire" class="py-16 sm:py-20 lg:py-24 bg-[#FCF7F3] scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">Why choose</p>
            <h2 class="font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight">Why Choose Estate Partners?</h2>

            <div class=" grid grid-cols-1 lg:grid-cols-[60%_40%] gap-8 items-stretch">
                <div class="reveal relative">
                    <div class="grid sm:grid-cols-2 rounded-2xl overflow-hidden bg-white mt-6">
                        <div class="space-y-4 p-5 order-1">
                            <img src="https://estatepartners.in/wp-content/uploads/2026/10/LocalExpertise.svg" alt="Local Expertise" class="w-16 h-16">
                            <h4 class="font-semibold text-[#302F5A] text-lg">Local Expertise</h4>
                            <p class="text-[#6B6B6B]">Focused on the Coimbatore market, with insights into neighbourhoods, connectivity, development and property opportunities.</p>
                        </div>

                        <div class="space-y-4 p-5 text-white bg-gold order-2">
                            <img src="https://estatepartners.in/wp-content/uploads/2026/10/CuratedProjects.svg" alt="Curated Projects" class="w-16 h-16">
                            <h4 class="font-semibold text-lg">Curated Projects</h4>
                            <p class="">Only 16 villas across 1.42 acres — a rare, small-scale development, not a mass housing project.
                            </p>
                        </div>

                        <div class="space-y-4 p-5 text-white bg-gold order-4 sm:order-3">
                            <img src="https://estatepartners.in/wp-content/uploads/2026/10/ClearProjectInformation.svg" alt="Clear Project Information" class="w-16 h-16">
                            <h4 class="font-semibold text-lg">Clear Project Information</h4>
                            <p class="">Get important details about location, configurations, pricing, amenities, approvals and project status in one place.</p>
                        </div>

                        <div class="space-y-4 p-5 order-3 sm:order-4">
                            <img src="https://estatepartners.in/wp-content/uploads/2026/10/CompareBeforeYouDecide.svg" alt="Compare Before You Decide" class="w-16 h-16">
                            <h4 class="font-semibold text-[#302F5A] text-lg">Compare Before You Decide</h4>
                            <p class="text-[#6B6B6B]">Shortlist and compare projects based on your budget, requirements, location and investment goals.</p>
                        </div>

                        <div class="space-y-4 p-5 order-5">
                            <img src="https://estatepartners.in/wp-content/uploads/2026/10/PersonalisedGuidance.svg" alt="Personalised Guidance" class="w-16 h-16">
                            <h4 class="font-semibold text-[#302F5A] text-lg">Personalised Guidance</h4>
                            <p class="text-[#6B6B6B]">Not sure what to buy? Our property advisors can help you identify options that match your needs.</p>
                        </div>

                        <div class="space-y-4 p-5 text-white bg-gold order-6">
                            <img src="https://estatepartners.in/wp-content/uploads/2026/10/EndtoEndSupport.svg" alt="End-to-End Support" class="w-16 h-16">
                            <h4 class="font-semibold text-lg">End-to-End Support</h4>
                            <p class="">From your first enquiry and site visit to booking and the next steps, our team stays available to assist you.</p>
                        </div>
                    </div>
                </div>

                <div class="p-8 rounded-2xl bg-white border border-[#B3814E50] h-max my-auto lg:top-20 lg:mt-24">
                    <div class="mb-6 text-center">
                        <h3 class="font-prata text-2xl sm:text-3xl leading-snug text-[#302F5A]">Register For Exclusive Offers</h3>
                        <p class="mt-2 text-sm text-[#444444]">Our property expert will get in touch with you</p>
                    </div>

                    <div class="reveal bg-[#FCF7F3] border border-[#B3814E50] rounded-2xl px-6 p-4 text-center">
                        <?php echo do_shortcode('[wpforms id="41"]'); ?>
                        <p class="text-[#444444] text-sm text-center">By submitting, you agree to our Privacy Policy.</p>

                    </div>
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
                <!-- <p class="mt-4 text-[#302F5A] leading-relaxed">Whether you are looking for a ready home, planning to build your own, or investing for the future, explore properties by type.</p> -->
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-8">
                <div class="reveal group bg-white rounded-2xl overflow-hidden border border-[#B3814E50] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all">
                    <div class="overflow-hidden h-[420px]">
                        <img src="https://estatepartners.in/wp-content/uploads/2026/10/28_rectangle_10323.png" alt="Apartment residences" class="w-full h-full object-cover" loading="lazy" />
                    </div>
                    <div class="p-7">
                        <div class="w-14 h-14 inline-flex items-center justify-center text-xl mb-4"><img src="https://estatepartners.in/wp-content/uploads/2026/10/ZeroBrokerage.svg" alt=""></div>
                        <h3 class="text-2xl font-semibold text-[#302F5A]">Zero Brokerage</h3>
                        <p class="mt-3 text-sm text-[#6B6B6B] leading-relaxed">100% Service, 0% Brokerage</p>
                    </div>
                </div>

                <div class="reveal group bg-white rounded-2xl overflow-hidden border border-[#B3814E50] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all">
                    <div class="overflow-hidden h-[420px]">
                        <img src="https://estatepartners.in/wp-content/uploads/2026/10/29_rectangle_10323.png" alt="Independent villa" class="w-full h-full object-cover" loading="lazy" />
                    </div>
                    <div class="p-7">
                        <div class="w-14 h-14 inline-flex items-center justify-center text-xl mb-4"><img src="https://estatepartners.in/wp-content/uploads/2026/10/LowestpriceGuaranteed.svg" alt=""></div>
                        <h3 class="text-2xl font-semibold text-[#302F5A]">Lowest price Guaranteed</h3>
                        <p class="mt-3 text-sm text-[#6B6B6B] leading-relaxed">Highly unlikely, but if you find a lower price anywhere, tell us and we will match it</p>
                    </div>
                </div>

                <div class="reveal group bg-white rounded-2xl overflow-hidden border border-[#B3814E50] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all">
                    <div class="overflow-hidden h-[420px]">
                        <img src="https://estatepartners.in/wp-content/uploads/2026/10/30_rectangle_10323.png" alt="Map showing residential plot locations" class="w-full h-full object-cover" loading="lazy" />
                    </div>
                    <div class="p-7">
                        <div class="w-14 h-14 inline-flex items-center justify-center text-xl mb-4"><img src="https://estatepartners.in/wp-content/uploads/2026/10/FullServiceSupport.svg" alt=""></div>
                        <h3 class="text-2xl font-semibold text-[#302F5A]">Full Service Support</h3>
                        <p class="mt-3 text-sm text-[#6B6B6B] leading-relaxed">Our sales personnel are accountable for every step</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ======================= Locations ======================= -->
    <section id="types" class="pb-16 sm:pb-20 lg:pb-24 bg-white scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal">
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">Explore Properties by Location</p>
                <h2 class="font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight">Find the right property in the right neighbourhood</h2>
                <p class="mt-4 max-w-4xl mx-auto text-[#302F5A] leading-relaxed">Explore residential projects across some of Coimbatore's most sought-after and fast-developing locations.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-6 sm:gap-10 text-gold text-lg">
                <a href="javascript:void(0)" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-10 h-10">
                    <span class="font-medium">Kalapatti</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="javascript:void(0)" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-10 h-10">
                    <span class="font-medium">Vellalore</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="javascript:void(0)" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-10 h-10">
                    <span class="font-medium">Thudiyalur</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="javascript:void(0)" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-10 h-10">
                    <span class="font-medium">Idikarai</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="javascript:void(0)" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-10 h-10">
                    <span class="font-medium">Sulur</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="javascript:void(0)" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-10 h-10">
                    <span class="font-medium">Ganapathy</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="javascript:void(0)" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-10 h-10">
                    <span class="font-medium">Ramanathapuram</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="javascript:void(0)" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-10 h-10">
                    <span class="font-medium">Vedapatti</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="javascript:void(0)" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-10 h-10">
                    <span class="font-medium">Vadavalli</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="javascript:void(0)" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-10 h-10">
                    <span class="font-medium">Saravanampatti</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="javascript:void(0)" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-10 h-10">
                    <span class="font-medium">Hopes</span>
                    <i class="fa-solid fa-arrow-right ml-auto"></i>
                </a>

                <a href="javascript:void(0)" class="border border-[#9D520E25] p-4 rounded-2xl bg-[#FCF7F3] flex items-center gap-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/Location_icon.svg" alt="" class="w-10 h-10">
                    <span class="font-medium">Perur</span>
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
                            <img src="https://estatepartners.in/wp-content/uploads/2026/10/5_2_802.png" alt="Infinium Onelife apartment residences" class="w-full h-full object-cover" loading="lazy" />
                            <span class="absolute top-4 right-4 bg-white border border-[#B3814E50] text-[#302F5A] text-xs font-semibold px-3 py-1.5 rounded-full"><?php echo ep_get_type_count('apartment'); ?> Apartments</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gold">Apartments</h3>
                            <p class="mt-1 text-sm text-[#6b6b6b]">From compact 1 & 2 BHK homes to spacious 3 & 4 BHK residences, discover apartments across prime Coimbatore locations.</p>
                            <div class="mt-4 flex flex-wrap gap-2 text-xs font-medium">
                                <!-- <span class="bg-[#FBE9E0] text-[#AF562B] rounded-full px-3 py-1.5">5 Trending</span>
                                <span class="bg-[#F7EDDA] text-[#C3954C] rounded-full px-3 py-1.5">3 New Launch</span>
                                <span class="bg-[#E8E8FF] text-[#302F5A] rounded-full px-3 py-1.5">8 Newly Listed</span>
                                <span class="bg-[#E6F5EF] text-[#17A374] rounded-full px-3 py-1.5">4 Ready to move</span> -->
                            </div>
                            <a href="https://estatepartners.in/apartments/" class="mt-5 inline-flex items-center justify-center px-6 py-2 gap-2 bg-[#302F5A] rounded-xl text-white text-center w-full font-semibold transition-colors">Explore Apartments <i class="fa-solid fa-arrow-right text-xs"></i></a>

                            <!-- <button
                                type="button"
                                class="js-open-enquiry-modal mt-5 inline-flex items-center justify-center px-6 py-2 gap-2 bg-[#302F5A] rounded-xl text-white text-center w-full font-semibold transition-colors">
                                <span>Explore Apartments</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </button> -->
                        </div>
                    </div>

                    <div class="swiper-slide project-card group bg-white rounded-2xl overflow-hidden border border-ink-line shadow-sm hover:shadow-xl transition-shadow h-auto">
                        <div class="relative overflow-hidden h-60">
                            <img src="<?php echo esc_url($img_uri . '/24_2_802.png'); ?>" alt="Infinium Central 16 apartment towers with pool deck" class="w-full h-full object-cover" loading="lazy" />
                            <span class="absolute top-4 right-4 bg-white border border-[#B3814E50] text-[#302F5A] text-xs font-semibold px-3 py-1.5 rounded-full"><?php echo ep_get_type_count('villas'); ?> Villas</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gold">Villas</h3>
                            <p class="mt-1 text-sm text-[#6b6b6b]">Discover independent and gated-community villas designed for families looking for more space, privacy and premium living.</p>
                            <div class="mt-4 flex flex-wrap gap-2 text-xs font-medium">
                                <!-- <span class="bg-[#FBE9E0] text-[#AF562B] rounded-full px-3 py-1.5">5 Trending</span>
                                <span class="bg-[#F7EDDA] text-[#C3954C] rounded-full px-3 py-1.5">3 New Launch</span>
                                <span class="bg-[#E8E8FF] text-[#302F5A] rounded-full px-3 py-1.5">8 Newly Listed</span>
                                <span class="bg-[#E6F5EF] text-[#17A374] rounded-full px-3 py-1.5">4 Ready to move</span> -->
                            </div>
                            <a href="https://estatepartners.in/villas/" class="mt-5 inline-flex items-center justify-center px-6 py-2 gap-2 bg-[#302F5A] rounded-xl text-white text-center w-full font-semibold transition-colors">Explore Villas <i class="fa-solid fa-arrow-right text-xs"></i></a>
                            <!-- <button
                                type="button"
                                class="js-open-enquiry-modal mt-5 inline-flex items-center justify-center px-6 py-2 gap-2 bg-[#302F5A] rounded-xl text-white text-center w-full font-semibold transition-colors">
                                <span>Explore Villas</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </button> -->
                        </div>
                    </div>

                    <div class="swiper-slide project-card group bg-white rounded-2xl overflow-hidden border border-ink-line shadow-sm hover:shadow-xl transition-shadow h-auto">
                        <div class="relative overflow-hidden h-60">
                            <img src="<?php echo esc_url($img_uri . '/7_2_802.png'); ?>" alt="Infinium Altitude premium residences" class="w-full h-full object-cover" loading="lazy" />
                            <span class="absolute top-4 right-4 bg-white border border-[#B3814E50] text-[#302F5A] text-xs font-semibold px-3 py-1.5 rounded-full"><?php echo ep_get_type_count('plots'); ?> Plots</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gold">Residential Plots</h3>
                            <p class="mt-1 text-sm text-[#6b6b6b]">Choose a plot today and build your home your way — or secure land as a long-term investment.
                            </p>
                            <div class="mt-4 flex flex-wrap gap-2 text-xs font-medium">
                                <!-- <span class="bg-[#FBE9E0] text-[#AF562B] rounded-full px-3 py-1.5">5 Trending</span>
                                <span class="bg-[#F7EDDA] text-[#C3954C] rounded-full px-3 py-1.5">3 New Launch</span>
                                <span class="bg-[#E8E8FF] text-[#302F5A] rounded-full px-3 py-1.5">8 Newly Listed</span>
                                <span class="bg-[#E6F5EF] text-[#17A374] rounded-full px-3 py-1.5">4 Ready to move</span> -->
                            </div>
                            <a href="https://estatepartners.in/plots/" class="mt-5 inline-flex items-center justify-center px-6 py-2 gap-2 bg-[#302F5A] rounded-xl text-white text-center w-full font-semibold transition-colors">Explore Apartments <i class="fa-solid fa-arrow-right text-xs"></i></a>
                            <!-- <button
                                type="button"
                                class="js-open-enquiry-modal mt-5 inline-flex items-center justify-center px-6 py-2 gap-2 bg-[#302F5A] rounded-xl text-white text-center w-full font-semibold transition-colors">
                                <span>Explore Plots</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </button> -->
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
            <div class="flex gap-8 flex-col">
                <div class="w-full rounded-2xl shadow-lg flex gap-6 items-center p-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/need-guidence-2.svg" alt="Looking for a Home?" class="w-16">

                    <div class="space-y-2">
                        <h3 class="font-semibold text-gold text-lg">Looking for a Home?</h3>
                        <p class="text-[#4D5461]">Find properties that fit your family's lifestyle and budget.</p>
                    </div>
                </div>

                <div class="w-full rounded-2xl shadow-lg flex gap-6 items-center p-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/need-guidence-1.svg" alt="Looking to Invest?" class="w-16">

                    <div class="space-y-2">
                        <h3 class="font-semibold text-gold text-lg">Looking to Invest?</h3>
                        <p class="text-[#4D5461]">Explore locations and projects with potential for
                            long-term value.</p>
                    </div>
                </div>

                <div class="w-full rounded-2xl shadow-lg flex gap-6 items-center p-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/need-guidence-4.svg" alt="Planning for the Future?" class="w-16">

                    <div class="space-y-2">
                        <h3 class="font-semibold text-gold text-lg">Planning for the Future?</h3>
                        <p class="text-[#4D5461]">Find plots and properties that can become your future
                            home or investment.</p>
                    </div>
                </div>

                <div class="w-full rounded-2xl shadow-lg flex gap-6 items-center p-4">
                    <img src="https://estatepartners.in/wp-content/uploads/2026/10/need-guidence-3.svg" alt="NRI Buyer?" class="w-16">

                    <div class="space-y-2">
                        <h3 class="font-semibold text-gold text-lg">NRI Buyer?</h3>
                        <p class="text-[#4D5461]">Get local assistance in exploring and evaluating
                            Coimbatore properties remotely.</p>
                    </div>
                </div>

                <a href="tel:7092958830" class="font-semibold text-white bg-gold rounded-lg flex gap-4 items-center justify-center p-4 text-lg mt-8"><i class="fa-solid fa-phone mr-2"></i>Talk to our Experts For Guidance<i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <!-- <div class="reveal relative"> -->
            <div class="rounded-2xl overflow-hidden h-full min-h-[420px] bg-cover bg-center" style="background-image: url('https://estatepartners.in/wp-content/uploads/2026/11/guidence.png');">
                <!-- <img src="https://estatepartners.in/wp-content/uploads/2026/11/guidence.png" alt="Property agreement signing with Estate Partners guidance" class="w-full h-full min-h-[420px] object-cover" loading="lazy" /> -->
            </div>
            <!-- <div class="absolute -bottom-6 left-5 sm:left-8 bg-ink text-white rounded-2xl px-6 py-5 shadow-xl flex items-center gap-4">
                    <span class="w-12 h-12 rounded-full bg-gold inline-flex items-center justify-center text-xl shrink-0"><i class="fa-solid fa-headset"></i></span>
                    <span>
                        <span class="block font-prata text-2xl leading-none">24/7</span>
                        <span class="block text-xs text-white/70 mt-1 tracking-wide">Buyer support, always</span>
                    </span>
                </div> -->
            <!-- </div> -->

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
                <button type="button" class="project-tab border border-gold/30 bg-white rounded-full px-8 py-2 text-sm font-semibold tracking-wider" data-target="apartment" role="tab" aria-selected="false">Apartments</button>
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

    <!-- ======================= GUIDENCE ======================= -->
    <?php
    /**
     * Status section - same markup as the original, driven by ACF.
     * #status-panels stays empty: your existing JS renders it from STATUS_DATA.
     */
    $categories = get_field('status_categories') ?: [];
    $g_icon     = get_field('guidance_icon');
    $g_buttons  = get_field('guidance_buttons') ?: [];

    // Build STATUS_DATA in the exact shape the existing JS expects:
    // { Category: { 'Project Name': { location, name, url, text, stats: [[label, value], ...] } } }
    $status_data = [];
    foreach ($categories as $cat) {
        $label = $cat['category_label'];
        if (!$label) continue;
        $status_data[$label] = [];
        foreach (($cat['projects'] ?? []) as $p) {
            if (empty($p['project_title'])) continue;
            $stats = [];
            foreach (($p['project_stats'] ?? []) as $s) {
                $stats[] = [$s['stat_label'], $s['stat_value']];
            }
            $status_data[$label][$p['project_title']] = [
                'location' => $p['project_location'],
                'name'     => $p['project_developer'],
                'url'      => !empty($p['project_url']) ? $p['project_url'] : 'javascript:void(0)',
                'text'     => $p['project_text'],
                'stats'    => $stats,
            ];
        }
    }
    ?>
    <section id="status" class="py-14 sm:py-20">

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-gold font-semibold uppercase tracking-wide text-sm"><?php echo esc_html(get_field('status_eyebrow')); ?></p>
            <h2 class="font-prata text-3xl sm:text-4xl lg:text-5xl text-[#302F5A] mt-3"><?php echo esc_html(get_field('status_heading')); ?></h2>
            <p class="mt-4 max-w-xl mx-auto text-sm sm:text-base"><?php echo esc_html(get_field('status_intro')); ?></p>

            <!-- LEVEL 1: status tabs -->
            <div class="mt-10 border-b border-[#131313]">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div role="tablist" aria-label="Project status" data-tabs="status" class="flex justify-center gap-2 sm:gap-10">
                        <?php foreach ($categories as $cat) : ?>
                            <button type="button" role="tab" data-tab="<?php echo esc_attr($cat['category_label']); ?>" class="status-tab px-5 sm:px-12 py-5 sm:py-6 text-sm sm:text-xl font-semibold uppercase tracking-wide transition-colors"><?php echo esc_html($cat['category_label']); ?></button>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- LEVEL 1 panels (each holds its own LEVEL 2 tabs) -->
            <div id="status-panels"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 mt-10">
            <div class="border border-[#B3814E80] bg-gradient-to-r from-[#FFEEE1] to-[#FCF7F3]  rounded-2xl p-5 sm:p-6 lg:px-8
              flex flex-col items-center text-center gap-5
              md:flex-row md:text-left md:gap-6">

                <!-- Icon -->
                <?php if ($g_icon) : ?>
                    <img src="<?php echo esc_url($g_icon['url']); ?>" alt="" class="w-16 h-16 sm:w-20 sm:h-20 shrink-0">
                <?php endif; ?>

                <!-- Text -->
                <div class="text-[#3A391B] space-y-1 sm:space-y-2 flex-1 min-w-0">
                    <p class="text-xs sm:text-sm font-medium uppercase tracking-wide"><?php echo esc_html(get_field('guidance_eyebrow')); ?></p>
                    <h2 class="font-semibold text-lg sm:text-xl"><?php echo esc_html(get_field('guidance_title')); ?></h2>
                    <p class="text-sm sm:text-base"><?php echo esc_html(get_field('guidance_text')); ?></p>
                </div>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 w-full md:w-auto shrink-0">
                    <?php foreach ($g_buttons as $b) :
                        $link = $b['button_link'];
                        if (!$link) continue; ?>
                        <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target'] ?: '_self'); ?>" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-gold hover:bg-[#8f6535] rounded-lg text-white font-semibold whitespace-nowrap transition-colors">
                            <span><?php echo esc_html($link['title']); ?></span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </section>

    <!-- Replaces the hard-coded STATUS_DATA. Keep this BEFORE your existing tabs script. -->
    <script>
        var STATUS_DATA = <?php echo wp_json_encode($status_data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;
    </script>

    <!-- ======================= TESTIMONIALS ======================= -->
    <?php get_template_part('template-parts/template-testimonials'); ?>

    <!-- ======================= Blogs ======================= -->
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'ignore_sticky_posts' => true,
    );
    $blog_query = new WP_Query($args);
    ?>
    <section id="blog" class="py-24 bg-brand-cream px-6">
        <div class="max-w-[1200px] mx-auto">

            <!-- Header -->
            <div class="reveal text-center mb-6">
                <p class="text-gold font-semibold uppercase tracking-wide text-sm">real estate insights</p>
                <h2 class="font-prata text-3xl sm:text-4xl lg:text-5xl text-[#302F5A] mt-3">News and Articles</h2>
                <p class="mt-4 max-w-3xl mx-auto text-sm sm:text-base">Stay informed with practical guides, property insights and local market information to help you make smarter real estate decisions.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php
                if ($blog_query->have_posts()):
                    $index = 0;
                    while ($blog_query->have_posts()):
                        $blog_query->the_post();
                        $index++;



                        // Fetch categories
                        $categories = get_the_category();
                        $category_name = !empty($categories) ? $categories[0]->name : esc_html__('Fitness', 'estatepartners');

                        // Calculate Reading Time (avg 200 words per minute)
                        $word_count = str_word_count(strip_tags(get_the_content()));
                        $read_time = ceil($word_count / 200);
                        $read_time_label = $read_time > 0 ? $read_time . esc_html__(' min read', 'estatepartners') : esc_html__('2 min read', 'estatepartners');

                        $post_id = get_the_ID();
                        // 1. Fetch ACF banner for THIS post (handles URL or Image Array formats)
                        $banner_desk = get_field('desktop_banner', $post_id);
                        if (is_array($banner_desk) && ! empty($banner_desk['url'])) {
                            $banner_desk = $banner_desk['url'];
                        }

                        // 2. Fallback hierarchy: ACF banner -> Post Thumbnail -> Default Placeholder
                        if (! empty($banner_desk)) {
                            $card_image_url = $banner_desk;
                        } elseif (has_post_thumbnail($post_id)) {
                            $card_image_url = get_the_post_thumbnail_url($post_id, 'medium_large');
                        } else {
                            $card_image_url = 'https://evolutionsfitnessclub.com/wp-content/uploads/2026/10/blog.png';
                        }
                ?>
                        <article
                            class="bg-white rounded-2xl overflow-hidden bg-brand-cream reveal shadow-sm stagger-<?php echo esc_attr($index); ?> group cursor-pointer"
                            onclick="location.href='<?php the_permalink(); ?>'">

                            <!-- Image -->
                            <div class="image-zoom-wrap relative">
                                <img src="<?php echo esc_url($card_image_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
                                    class="object-cover object-top w-full h-full" loading="lazy" />
                                <div class="absolute inset-0 bg-gradient-to-t from-card/60 via-transparent to-transparent"></div>

                            </div>

                            <!-- Content details -->
                            <div class="p-6 flex flex-col gap-3">

                                <div class="flex items-center justify-between gap-3 text-[11px] text-[#4D5461]">
                                    <div class="mb-3 flex items-center gap-2 text-[10px] font-medium uppercase tracking-wide text-[#6B6B6B]">
                                        <i class="fa-solid fa-user text-gold"></i>
                                        By: <span><?php the_author(); ?></span>
                                    </div>

                                    <span
                                        class="text-xs text-foreground capitalize tracking-wider">
                                        <i class="fa-solid fa-tags text-gold"></i>
                                        <?php echo esc_html($category_name); ?>
                                    </span>
                                </div>
                                <h3
                                    class="text-base sm:text-lg sm:text-md font-700 text-foreground leading-snug text-gold transition-colors duration-200 line-clamp-2">
                                    <?php the_title(); ?>
                                </h3>
                                <p class="text-sm text-[#6B6B6B] leading-relaxed line-clamp-3">
                                    <?php echo wp_strip_all_tags(get_the_excerpt()); ?>
                                </p>

                                <div class="flex justify-between gap-6 text-xs text-gold border-t border-[#D9D9D9] font-semibold pt-4">

                                    <span><?php echo esc_html(get_the_date()); ?></span>

                                    <a href="<?php the_permalink(); ?>"
                                        class="mt-2 inline-flex items-center gap-2 text-primary font-700 hover:gap-3 transition-all duration-200">
                                        <?php esc_html_e('Read Article', 'estatepartners'); ?>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php
                    endwhile;
                    wp_reset_postdata();

                else:
                    ?>
                    <p class="text-center text-[#444444] text-center font-semibold md:col-span-3">No article Published!</p>
                <?php
                endif;
                ?>
            </div>

        </div>
    </section>

    <!-- ======================= Google Reviews ======================= -->
    <section id="status" class="pt-16 sm:pt-20 lg:pt-24 scroll-mt-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-[#444444]">
            <div class="flex flex-wrap items-center gap-10 rounded-xl border border-[#B3814E80] p-6">
                <div class="flex items-center">
                    <img
                        src="https://estatepartners.in/wp-content/uploads/2026/11/google.png"
                        class="img-fluid w-12 h-12 mr-5"
                        alt="" />
                    <span class="text-2xl">Google Reviews</span>
                </div>

                <div class="flex items-center gap-5 mr-auto">
                    <span class="font-semibold text-6xl">4.5</span>
                    <img src="https://estatepartners.in/wp-content/uploads/2026/11/star.svg" alt="" class="h-6">
                </div>

                <a href="" class="font-semibold uppecase rounded-lg bg-[#302F5A] px-6 py-4 text-white">LEAVE A REVIEW</a>
            </div>
        </div>
    </section>

    <!-- Calculator Section -->
    <?php get_template_part('template-parts/calculators'); ?>

</main>

<script>
    /* ---------- Content: status -> builder -> project ----------
   Add / edit entries here. (Placeholder data except Aara Spaces.) */
    (function() {
        var root = document.getElementById('status');
        if (!root) return;

        function activate(btns, panels, btnAttr, panelAttr, id) {
            btns.forEach(function(b) {
                var on = b.getAttribute(btnAttr) === id;
                b.setAttribute('aria-selected', on ? 'true' : 'false');
                b.classList.toggle('is-active', on);
            });
            panels.forEach(function(p) {
                p.classList.toggle('hidden', p.getAttribute(panelAttr) !== id);
            });
        }

        // Level 1
        var tabs = [].slice.call(root.querySelectorAll('.status-tab'));
        var panels = [].slice.call(root.querySelectorAll('.status-panel'));
        tabs.forEach(function(t) {
            t.addEventListener('click', function() {
                activate(tabs, panels, 'data-tab', 'data-panel', t.getAttribute('data-tab'));
            });
        });
        if (tabs[0]) tabs[0].classList.add('is-active');

        // Level 2 (scoped per category panel)
        panels.forEach(function(panel) {
            var sub = [].slice.call(panel.querySelectorAll('.project-tab'));
            var subPanels = [].slice.call(panel.querySelectorAll('.project-panel'));
            sub.forEach(function(t) {
                t.addEventListener('click', function() {
                    activate(sub, subPanels, 'data-subtab', 'data-subpanel', t.getAttribute('data-subtab'));
                });
            });
            if (sub[0]) sub[0].classList.add('is-active');
        });
    })();

    (function() {
        var esc = function(s) {
            var d = document.createElement('div');
            d.textContent = s;
            return d.innerHTML;
        };
        var slug = function(s) {
            return s.toLowerCase().replace(/[^a-z0-9]+/g, '-');
        };

        /* ---------- Build markup ---------- */
        var html = '';
        Object.keys(STATUS_DATA).forEach(function(status) {
            var builders = STATUS_DATA[status];
            html += '<div role="tabpanel" data-panel="' + status + '" hidden>';

            // LEVEL 2: builder tabs
            html += '<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">' +
                '<div role="tablist" aria-label="Builders" data-tabs="' + status + '-builder" class="no-scrollbar flex items-center overflow-x-auto">';
            var first = true;
            Object.keys(builders).forEach(function(b, i) {
                if (i) html += '<span aria-hidden="true" class="mx-4 text-[#302F5A] shrink-0">-</span>';
                html += '<button type="button" role="tab" data-tab="' + slug(b) + '" class="builder-tab shrink-0 px-4 py-3 text-xs sm:text-sm font-medium uppercase tracking-wide border-b border-[#302F5A] transition-colors">' + esc(b) + '</button>';
            });
            html += '</div></div>';

            // LEVEL 2 panels: project detail
            Object.keys(builders).forEach(function(b) {
                var d = builders[b];
                html += '<div role="tabpanel" data-panel="' + slug(b) + '" hidden class="bg-brand-cream">' +
                    '<div class="grid lg:grid-cols-2">' +
                    '<div class="px-6 sm:px-10 lg:px-14 py-10 lg:py-14 flex flex-col justify-center">' +
                    '<p class="text-gold font-semibold uppercase tracking-wide text-sm flex items-center gap-2"><i class="fa-solid fa-location-dot"></i>' + esc(d.location) + '</p>' +
                    '<h3 class="font-prata text-3xl sm:text-4xl text-left text-[#302F5A] mt-3">' + esc(d.name) + '</h3>' +
                    '<p class="mt-5 max-w-lg leading-8 text-left">' + esc(d.text) + '</p>' +
                    '<a href="' + esc(d.url) + '" class="mt-8 self-start inline-flex items-center gap-3 border border-[#302F5A] text-[#302F5A] font-semibold uppercase text-sm px-6 py-4 rounded-md hover:bg-[#302F5A] hover:text-white transition-colors">Explore more <i class="fa-solid fa-arrow-right-long"></i></a>' +
                    '</div>' +
                    '<dl class="grid grid-cols-2 border-t lg:border-t-0 lg:border-l border-gold/40">';
                d.stats.forEach(function(s, i) {
                    var borders = (i % 2 === 0 ? 'border-r ' : '') + (i < 2 ? 'border-b ' : '');
                    html += '<div class="' + borders + 'border-gold/40 px-4 py-10 sm:py-14 text-center">' +
                        '<dt class="text-xl sm:text-3xl font-semibold uppercase text-[#302F5A]">' + esc(s[0]) + '</dt>' +
                        '<dd class="mt-3 uppercase text-sm sm:text-lg text-[#6f6f6f]">' + esc(s[1]) + '</dd></div>';
                });
                html += '</dl></div></div>';
            });

            html += '</div>';
        });
        document.getElementById('status-panels').innerHTML = html;

        /* ---------- Generic tab logic (works at every level) ---------- */
        var ON = {
            'status-tab': {
                on: ['bg-gold', 'text-white'],
                off: ['text-[#302F5A]']
            },
            'builder-tab': {
                on: ['bg-[#302F5A]', 'text-white'],
                off: ['text-[#302F5A]']
            }
        };

        function activate(list, tab) {
            var tabs = Array.prototype.slice.call(list.querySelectorAll(':scope > [role=tab]'));
            // The panels are the siblings of the tablist's wrapper that carry data-panel.
            var scope = list.closest('[data-panel]') || document.getElementById('status-panels');
            var holder = list.closest('[data-panel]') ? list.closest('[data-panel]') : scope;

            tabs.forEach(function(t) {
                var kind = t.classList.contains('status-tab') ? 'status-tab' : 'builder-tab';
                var active = t === tab;
                t.setAttribute('aria-selected', active);
                t.tabIndex = active ? 0 : -1;
                ON[kind].on.forEach(function(c) {
                    t.classList.toggle(c, active);
                });
                ON[kind].off.forEach(function(c) {
                    t.classList.toggle(c, !active);
                });
                var panel = list.closest('[data-panel]') ? holder.querySelector(':scope > [data-panel="' + t.dataset.tab + '"]') :
                    document.querySelector('#status-panels > [data-panel="' + t.dataset.tab + '"]');
                if (panel) panel.hidden = !active;
            });
        }

        function init(list) {
            var tabs = Array.prototype.slice.call(list.querySelectorAll(':scope > [role=tab]'));
            tabs.forEach(function(t, i) {
                t.addEventListener('click', function() {
                    activate(list, t);
                });
                t.addEventListener('keydown', function(e) {
                    var n = e.key === 'ArrowRight' ? i + 1 : e.key === 'ArrowLeft' ? i - 1 : null;
                    if (n === null) return;
                    var next = tabs[(n + tabs.length) % tabs.length];
                    next.focus();
                    activate(list, next);
                    e.preventDefault();
                });
            });
            activate(list, tabs[0]); // first tab open by default
        }

        // Inner (builder) lists first, then the outer status list.
        document.querySelectorAll('[data-tabs$="-builder"]').forEach(init);
        init(document.querySelector('[data-tabs="status"]'));
    })();
</script>

<?php get_footer(); ?>