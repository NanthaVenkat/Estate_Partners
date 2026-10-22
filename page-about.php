<?php

/**
 * Template Name: About
 *
 * About Us page: hero + stats, who we are, vision/mission/objective, what sets us apart,
 * values, journey stats, projects carousel (Swiper), why choose us carousel (Swiper),
 * process carousel (Swiper), verification, FAQ and call-to-action strip.
 *
 * Applies automatically to a page with the slug "about", or choose "About"
 * in Page Attributes > Template.
 *
 * @package YourThemeName
 */

get_header();

$td   = 'vnktheme-textdomain';
$a    = get_template_directory_uri() . '/assets/images/about/';
$logo = get_template_directory_uri() . '/assets/images/logo.png';
$home = home_url('/');

$hero_img = has_post_thumbnail() ? get_the_post_thumbnail_url(null, 'full') : $a . 'hero.jpg';

/* Shared class strings (same typography/spacing as the About section on the home page). */
$container = 'container mx-auto px-4 sm:px-6 lg:px-8';
$section   = 'py-16 sm:py-20 lg:py-24';
$eyebrow   = 'text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3';
$h2        = 'font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight';
$body      = 'sm:text-lg text-[#444444]';
$btn_gold  = 'inline-flex items-center gap-2 bg-gold hover:bg-gold-dark text-white font-semibold px-7 py-3.5 rounded-lg transition-colors';

/* ------------------------------------------------------------------ *
 * Content (edit text here; the markup below loops over these arrays)
 * ------------------------------------------------------------------ */

$hero_stats = array(
    array('icon' => 'fa-award',        'num' => '12 +',      'label' => 'Years of Experience'),
    array('icon' => 'fa-users',        'num' => '1200 +',    'label' => 'Happy Customers'),
    array('icon' => 'fa-file-lines',   'num' => '1000 +',    'label' => 'Properties Listed'),
    array('icon' => 'fa-indian-rupee-sign', 'num' => '₹500 Cr+', 'label' => 'In Transactions Facilitated'),
);

$vmo = array(
    'vision'    => array(
        'icon'  => 'fa-lightbulb',
        'title' => 'Our Vision',
        'text'  => 'To be Coimbatore’s most trusted name in real estate: a platform where every property decision starts with verified information and ends with complete confidence.',
    ),
    'mission'   => array(
        'icon'  => 'fa-rocket',
        'title' => 'Our Mission',
        'text'  => 'To simplify the property buying journey by bringing verified plots, villas, and apartments together in one place, backed by honest guidance and dependable end-to-end support.',
    ),
    'objective' => array(
        'icon'  => 'fa-bullseye',
        'title' => 'Our Objective',
        'text'  => 'We’re committed to innovative and proactive strategies that keep buyers informed at every step, combining local market knowledge with genuine care for client outcomes.',
    ),
);

$apart = array(
    array('icon' => 'fa-award',      'title' => 'Strong Industry Expertise',      'text' => 'Years of hands-on experience navigating Coimbatore’s property market, developers, and approval pathways.'),
    array('icon' => 'fa-chart-line', 'title' => 'Ideal Investment Opportunities', 'text' => 'Curated access to plots, villas, and apartments in locations with genuine long-term growth potential.'),
    array('icon' => 'fa-bullseye',   'title' => 'Goal-Driven Commitment',         'text' => 'Every recommendation is guided by your specific budget, timeline, and property goals — not a generic pitch.'),
    array('icon' => 'fa-eye',        'title' => 'Committed to Transparency',      'text' => 'Clear communication on pricing, approvals, and project status, with no hidden surprises along the way.'),
);

$values = array(
    array('icon' => 'fa-gem',       'title' => 'Transparency',        'text' => 'We share clear, accurate information about every project: approvals, pricing, and documentation — so you always know exactly where things stand.'),
    array('icon' => 'fa-users',     'title' => 'Customer Centricity', 'text' => 'Every recommendation we make is built around your needs, budget, and goals — not a one-size-fits-all approach to property buying.'),
    array('icon' => 'fa-trophy',    'title' => 'Excellence',          'text' => 'We hold ourselves to high standards in how we verify projects, communicate with clients, and follow through on every commitment we make.'),
    array('icon' => 'fa-handshake', 'title' => 'Team Work',           'text' => 'Our consultants, legal advisors, and support staff work together closely, so you get consistent, well-coordinated guidance throughout your journey.'),
);

$journey = array(
    array('num' => '14 +',  'label' => 'Years in Business'),
    array('num' => '100 +', 'label' => 'Projects Featured'),
    array('num' => '100%',  'label' => 'Client-Focused Service'),
);

$projects = array(
    array('img' => 'project-plots.jpg',      'title' => 'Residential Plots',   'url' => $home . '#projects'),
    array('img' => 'project-villas.jpg',     'title' => 'Premium Villas',      'url' => $home . '#projects'),
    array('img' => 'project-apartments.jpg', 'title' => 'Premium Apartments',  'url' => $home . '#projects'),
);

$why = array(
    array('icon' => 'fa-user-shield',  'title' => 'Customer First Transparency',      'text' => 'At Estate Partners, our clients are at the center of everything we do. We ensure complete transparency by presenting only verified properties with clear legal documentation, approved layouts, and accurate project details. This approach helps every homebuyer make decisions with confidence and peace of mind.'),
    array('icon' => 'fa-award',        'title' => 'Expertise That Delivers Real Value', 'text' => 'With strong knowledge of the Coimbatore real estate market, we guide you toward apartments, villas, and residential plots that match your requirements. Our expertise allows us to identify properties that offer not just quality living but also long-term appreciation and reliable investment potential.'),
    array('icon' => 'fa-location-dot', 'title' => 'Prime Locations For Smart Living', 'text' => 'We promote properties located in Coimbatore’s most promising and fast-developing areas. These locations offer excellent connectivity, access to schools, hospitals, IT hubs, and daily conveniences — ensuring both comfortable living and strong future growth.'),
    array('icon' => 'fa-building',     'title' => 'Quality Projects with Lasting Value', 'text' => 'We collaborate with reputed builders and developers to bring you premium apartments, luxury villas, and gated community plots that meet high standards of planning and execution. Each project is selected for its design quality, functionality, and long-term value — making it a secure and rewarding investment.'),
);

$steps = array(
    array('icon' => 'fa-comments',          'title' => 'Get to Know Your Requirements',      'text' => 'We begin by understanding your preferences, aspirations, budget, and expectations to make your property search easy.'),
    array('icon' => 'fa-house-circle-check', 'title' => 'Present Relevant Opportunities',    'text' => 'Based on your requirements, we thoughtfully curate suitable projects and share the details that matter most to you.'),
    array('icon' => 'fa-route',             'title' => 'Arrange a Personalized Site Visit',  'text' => 'We coordinate a convenient visit, giving you the opportunity to experience the property, its surroundings, amenities, and possibilities firsthand.'),
    array('icon' => 'fa-headset',           'title' => 'Be There for Your Questions',        'text' => 'We take the time to understand your thoughts, answer your queries, and coordinate with the relevant teams to provide the information you need.'),
    array('icon' => 'fa-file-signature',    'title' => 'Make the Next Steps Simple',         'text' => 'When you are ready to proceed, we assist you with the booking process, documentation, and coordination with the project team.'),
    array('icon' => 'fa-flag-checkered',    'title' => 'Support You Through Completion',     'text' => 'Our relationship continues beyond the booking, with ongoing assistance and coordination through registration, documentation, and handover.'),
);

$verify = array(
    array('icon' => 'fa-clipboard-check', 'title' => '1. RERA & Approval Check',         'text' => 'We verify available RERA registration and relevant project approvals provided by the developer.'),
    array('icon' => 'fa-building',        'title' => '2. Developer & Project Details',   'text' => 'We review the developer’s information, specifications, location, configurations, pricing, and availability.'),
    array('icon' => 'fa-file-lines',      'title' => '3. Documentation Review',          'text' => 'We request and review relevant project documents as the information shown to customers is properly supported.'),
    array('icon' => 'fa-map-location-dot', 'title' => '4. Site Verification',           'text' => 'Where applicable, our team visits the site to check location, development status, surroundings, and progress.'),
    array('icon' => 'fa-calendar-check',  'title' => '5. Availability',                  'text' => 'We coordinate with the developer’s sales team to keep availability and pricing information as current as possible.'),
    array('icon' => 'fa-arrows-rotate',   'title' => '6. Information Updates',           'text' => 'Project information changes over time, so we work with our partners to keep pricing and status details updated.'),
);

$faqs = array(
    array(
        'q' => 'Who is Estate Partners?',
        'a' => 'Estate Partners is a Coimbatore-based real estate company specializing in premium residential developments. The company focuses on creating well-planned communities with strategic locations, robust infrastructure, and long-term value.'
    ),
    array(
        'q' => 'What types of real estate projects does Estate Partners offer?',
        'a' => 'We feature residential plots, premium villas, and apartments across Coimbatore, each reviewed before it is listed.'
    ),
    array(
        'q' => 'Where are Estate Partners projects located?',
        'a' => 'Our projects are located across Coimbatore’s growing residential corridors, selected for connectivity, infrastructure, and long-term potential.'
    ),
    array(
        'q' => 'Are our projects RERA and DTCP approved?',
        'a' => 'We check RERA registration and the relevant approvals for every project before it is listed, and we share these details with you on request.'
    ),
    array(
        'q' => 'Does Estate Partners undertake community and social responsibility initiatives?',
        'a' => 'Please contact our team to learn about our community initiatives and the programs we support.'
    ),
    array(
        'q' => 'Why should I choose Estate Partners for residential plots in Coimbatore?',
        'a' => 'Because we combine local market knowledge with verified project information and dependable support from the first enquiry through registration.'
    ),
);
?>

<main id="primary" class="site-main">

    <!-- ======================= HERO ======================= -->
    <section class="relative isolate overflow-hidden">
        <img src="<?php echo esc_url($hero_img); ?>" alt="" class="absolute inset-0 w-full h-full object-cover object-right -z-20" />
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/35 to-transparent -z-10"></div>

        <div class="<?php echo esc_attr($container); ?> pt-16 pb-28 sm:pt-24 sm:pb-36 lg:pt-28 lg:pb-44">
            <div class="reveal max-w-xl text-white">
                <p class="text-gold-light font-bold uppercase tracking-[0.18em] text-sm mb-3"><?php esc_html_e('Our Story', $td); ?></p>
                <h1 class="font-prata text-4xl sm:text-5xl lg:text-6xl leading-tight"><?php esc_html_e('Building Trust, One Home at a Time', $td); ?></h1>
                <p class="mt-5 sm:text-lg leading-relaxed text-white/90"><?php esc_html_e('For over a decade, Estate Partners has helped families and investors find verified, well-located properties across Coimbatore.', $td); ?></p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="<?php echo esc_url($home . '#projects'); ?>" class="<?php echo esc_attr($btn_gold); ?>"><?php esc_html_e('Explore Our Properties', $td); ?> <i class="fa-solid fa-arrow-right text-sm"></i></a>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="inline-flex items-center gap-2 bg-[#302F5A] hover:bg-ink text-white font-semibold px-7 py-3.5 rounded-lg transition-colors"><?php esc_html_e('Talk to Our Experts', $td); ?> <i class="fa-solid fa-arrow-right text-sm"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats bar (overlaps hero) -->
    <section class="relative z-10 -mt-14 sm:-mt-16">
        <div class="<?php echo esc_attr($container); ?>">
            <div class="reveal max-w-5xl mx-auto bg-white border border-ink-line shadow-xl rounded-2xl lg:rounded-full px-6 py-6 lg:py-7 grid grid-cols-2 lg:grid-cols-4 gap-y-6 lg:gap-0 lg:divide-x lg:divide-ink-line">
                <?php foreach ($hero_stats as $stat) : ?>
                    <div class="flex items-center justify-center gap-3 lg:px-4">
                        <i class="fa-solid <?php echo esc_attr($stat['icon']); ?> text-gold text-3xl shrink-0" aria-hidden="true"></i>
                        <div>
                            <p class="text-xl sm:text-2xl font-semibold text-[#302F5A] leading-none"><?php echo esc_html($stat['num']); ?></p>
                            <p class="mt-1 text-xs text-[#444444]"><?php echo esc_html($stat['label']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ======================= WHO WE ARE ======================= -->
    <section class="<?php echo esc_attr($section); ?>">
        <div class="<?php echo esc_attr($container); ?> grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div class="reveal rounded-2xl overflow-hidden shadow-xl">
                <img src="<?php echo esc_url($a . 'who-we-are.jpg'); ?>" alt="<?php esc_attr_e('Estate Partners helping buyers make confident property decisions', $td); ?>" class="w-full h-[360px] sm:h-[460px] object-cover" loading="lazy" />
            </div>
            <div class="reveal <?php echo esc_attr($body); ?>">
                <p class="<?php echo esc_attr($eyebrow); ?>"><?php esc_html_e('Who We Are', $td); ?></p>
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('Making Property Decisions Simpler, Clearer & More Confident', $td); ?></h2>
                <p class="mt-5 leading-relaxed"><?php esc_html_e('Estate Partners was founded with a simple goal: make property search in Coimbatore easier, faster, and more transparent. What started as a small team helping local families find the right home has grown into a trusted platform connecting buyers with verified plots, villas, and apartments across the city.', $td); ?></p>
                <p class="mt-4 leading-relaxed"><?php esc_html_e('We work closely with reputed developers, verify project details before listing them, and stay involved through every stage of the buying journey — from the first site visit to final registration. Our focus has always stayed the same: helping people make confident property decisions, backed by honest, accurate information.', $td); ?></p>
            </div>
        </div>
    </section>

    <!-- ======================= VISION / MISSION / OBJECTIVE ======================= -->
    <section class="bg-brand-cream <?php echo esc_attr($section); ?>">
        <div class="<?php echo esc_attr($container); ?>">

            <!-- Desktop diagram -->
            <div class="reveal hidden xl:block relative mx-auto max-w-5xl aspect-[1000/720]">
                <!-- Logo circle -->
                <div class="absolute left-1/2 top-0 -translate-x-1/2 w-[20%] aspect-square rounded-full bg-white border border-ink-line shadow-lg flex items-center justify-center p-8">
                    <img src="<?php echo esc_url($logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="w-full h-auto object-contain" loading="lazy" />
                </div>

                <!-- Curve -->
                <svg class="absolute left-0 top-[22%] w-full" viewBox="0 0 1000 340" fill="none" aria-hidden="true">
                    <path d="M150 100 C 300 320, 700 320, 850 100" stroke="#302F5A" stroke-width="1.5" stroke-dasharray="2 6" stroke-linecap="round" />
                </svg>

                <!-- Nodes -->
                <span class="absolute left-[15%] top-[35.8%] -translate-x-1/2 -translate-y-1/2 w-16 h-16 rounded-full bg-[#302F5A] text-gold-light inline-flex items-center justify-center text-2xl shadow-lg"><i class="fa-solid <?php echo esc_attr($vmo['vision']['icon']); ?>"></i></span>
                <span class="absolute left-1/2 top-[58.75%] -translate-x-1/2 -translate-y-1/2 w-16 h-16 rounded-full bg-[#302F5A] text-gold-light inline-flex items-center justify-center text-2xl shadow-lg"><i class="fa-solid <?php echo esc_attr($vmo['mission']['icon']); ?>"></i></span>
                <span class="absolute left-[85%] top-[35.8%] -translate-x-1/2 -translate-y-1/2 w-16 h-16 rounded-full bg-[#302F5A] text-gold-light inline-flex items-center justify-center text-2xl shadow-lg"><i class="fa-solid <?php echo esc_attr($vmo['objective']['icon']); ?>"></i></span>

                <!-- Texts -->
                <div class="absolute left-0 top-[42%] w-[32%] <?php echo esc_attr($body); ?>">
                    <h3 class="font-prata text-[#302F5A] text-3xl"><?php echo esc_html($vmo['vision']['title']); ?></h3>
                    <p class="mt-3 text-base leading-relaxed"><?php echo esc_html($vmo['vision']['text']); ?></p>
                </div>
                <div class="absolute right-0 top-[42%] w-[32%] <?php echo esc_attr($body); ?>">
                    <h3 class="font-prata text-[#302F5A] text-3xl"><?php echo esc_html($vmo['objective']['title']); ?></h3>
                    <p class="mt-3 text-base leading-relaxed"><?php echo esc_html($vmo['objective']['text']); ?></p>
                </div>
                <div class="absolute left-1/2 top-[66%] -translate-x-1/2 w-[38%] text-center <?php echo esc_attr($body); ?>">
                    <h3 class="font-prata text-[#302F5A] text-3xl"><?php echo esc_html($vmo['mission']['title']); ?></h3>
                    <p class="mt-3 text-base leading-relaxed"><?php echo esc_html($vmo['mission']['text']); ?></p>
                </div>
            </div>

            <!-- Mobile / tablet stack -->
            <div class="xl:hidden max-w-3xl mx-auto">
                <div class="reveal text-center mb-10">
                    <span class="inline-flex w-28 h-28 rounded-full bg-white border border-ink-line shadow-lg items-center justify-center p-5">
                        <img src="<?php echo esc_url($logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="w-full h-auto object-contain" loading="lazy" />
                    </span>
                </div>
                <div class="grid gap-8 <?php echo esc_attr($body); ?>">
                    <?php foreach (array('vision', 'mission', 'objective') as $key) : ?>
                        <div class="reveal flex items-start gap-5">
                            <span class="w-14 h-14 rounded-full bg-[#302F5A] text-gold-light inline-flex items-center justify-center text-xl shrink-0"><i class="fa-solid <?php echo esc_attr($vmo[$key]['icon']); ?>"></i></span>
                            <div>
                                <h3 class="font-prata text-[#302F5A] text-2xl sm:text-3xl"><?php echo esc_html($vmo[$key]['title']); ?></h3>
                                <p class="mt-2 text-base leading-relaxed"><?php echo esc_html($vmo[$key]['text']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </section>

    <!-- ======================= WHAT SETS US APART ======================= -->
    <section class="<?php echo esc_attr($section); ?>">
        <div class="<?php echo esc_attr($container); ?> grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div class="reveal rounded-2xl overflow-hidden shadow-xl">
                <img src="<?php echo esc_url($a . 'apart.jpg'); ?>" alt="<?php esc_attr_e('Handing over the keys to a new home', $td); ?>" class="w-full h-[360px] sm:h-[520px] object-cover" loading="lazy" />
            </div>
            <div class="reveal">
                <p class="<?php echo esc_attr($eyebrow); ?>"><?php esc_html_e('Estate Partners', $td); ?></p>
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('What Sets Estate Partners Apart', $td); ?></h2>
                <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-8 text-[#444444]">
                    <?php foreach ($apart as $item) : ?>
                        <div>
                            <span class="w-12 h-12 rounded-xl bg-gold-pale text-gold inline-flex items-center justify-center text-xl"><i class="fa-solid <?php echo esc_attr($item['icon']); ?>"></i></span>
                            <h3 class="mt-4 text-lg font-semibold text-[#302F5A]"><?php echo esc_html($item['title']); ?></h3>
                            <p class="mt-2 text-sm sm:text-base leading-relaxed"><?php echo esc_html($item['text']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================= OUR VALUES ======================= -->
    <section class="bg-brand-cream <?php echo esc_attr($section); ?>">
        <div class="<?php echo esc_attr($container); ?>">
            <h2 class="reveal <?php echo esc_attr($h2); ?> text-center"><?php esc_html_e('Our Values', $td); ?></h2>
            <div class="mt-10 sm:mt-12 max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php foreach ($values as $item) : ?>
                    <div class="reveal bg-white rounded-xl shadow-lg p-7 sm:p-8 text-[#444444]">
                        <div class="flex items-center gap-4">
                            <i class="fa-solid <?php echo esc_attr($item['icon']); ?> text-gold text-3xl" aria-hidden="true"></i>
                            <h3 class="font-prata text-[#302F5A] text-2xl"><?php echo esc_html($item['title']); ?></h3>
                        </div>
                        <p class="mt-4 leading-relaxed"><?php echo esc_html($item['text']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ======================= OUR JOURNEY SO FAR ======================= -->
    <section class="relative isolate overflow-hidden <?php echo esc_attr($section); ?>">
        <img src="<?php echo esc_url($a . 'journey-bg.jpg'); ?>" alt="" class="absolute inset-0 w-full h-full object-cover -z-20" loading="lazy" />
        <div class="absolute inset-0 bg-[#1b1a3a]/80 -z-10"></div>
        <div class="<?php echo esc_attr($container); ?> text-center text-white">
            <h2 class="reveal font-prata text-3xl sm:text-4xl leading-tight"><?php esc_html_e('Our Journey So Far', $td); ?></h2>
            <p class="reveal mt-3 max-w-xl mx-auto text-sm text-white/80"><?php esc_html_e('Estate Partners continues to expand its footprint by delivering well-planned developments designed for modern lifestyles.', $td); ?></p>
            <div class="mt-10 sm:mt-12 grid grid-cols-1 sm:grid-cols-3 gap-5 sm:gap-6">
                <?php foreach ($journey as $item) : ?>
                    <div class="reveal border border-white/60 rounded-lg px-6 py-10 sm:py-12">
                        <p class="text-4xl sm:text-5xl font-medium"><?php echo esc_html($item['num']); ?></p>
                        <p class="mt-2 text-sm text-white/85"><?php echo esc_html($item['label']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ======================= PROJECTS WE OFFER (Swiper) ======================= -->
    <section id="projects" class="<?php echo esc_attr($section); ?> scroll-mt-24">
        <div class="<?php echo esc_attr($container); ?>">
            <h2 class="reveal <?php echo esc_attr($h2); ?> text-center"><?php esc_html_e('Projects We Offer', $td); ?></h2>

            <div class="swiper projects-swiper mt-10 sm:mt-12" style="--swiper-theme-color:#b3814e;">
                <div class="swiper-wrapper">
                    <?php foreach ($projects as $project) : ?>
                        <div class="swiper-slide !h-auto">
                            <a href="<?php echo esc_url($project['url']); ?>" class="group relative block rounded-lg overflow-hidden h-[260px] sm:h-[300px]">
                                <img src="<?php echo esc_url($a . $project['img']); ?>" alt="<?php echo esc_attr($project['title']); ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                                <span class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></span>
                                <span class="absolute left-5 bottom-5 text-white font-semibold text-base sm:text-lg"><?php echo esc_html($project['title']); ?></span>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination !static mt-8"></div>
            </div>
        </div>
    </section>

    <!-- ======================= WHY CHOOSE (Swiper) ======================= -->
    <section class="bg-brand-cream <?php echo esc_attr($section); ?>">
        <div class="<?php echo esc_attr($container); ?>">
            <h2 class="reveal <?php echo esc_attr($h2); ?> text-center"><?php esc_html_e('Why Choose Estate Partners', $td); ?></h2>
            <p class="reveal mt-3 text-center text-sm text-[#444444]"><?php esc_html_e('Guided with expertise. Delivered with transparency.', $td); ?></p>

            <div class="swiper why-swiper mt-10 sm:mt-12 !py-2" style="--swiper-theme-color:#b3814e;">
                <div class="swiper-wrapper">
                    <?php foreach ($why as $i => $item) : ?>
                        <div class="swiper-slide !h-auto">
                            <article data-active="<?php echo 1 === $i ? 'true' : 'false'; ?>" class="why-card group h-full rounded-2xl border border-ink-line bg-white p-7 text-[#444444] shadow-sm transition-colors duration-300 data-[active=true]:bg-gold data-[active=true]:border-gold data-[active=true]:text-white data-[active=true]:shadow-xl">
                                <span class="w-12 h-12 rounded-full bg-gold-pale text-gold inline-flex items-center justify-center text-lg transition-colors group-data-[active=true]:bg-white/20 group-data-[active=true]:text-white"><i class="fa-solid <?php echo esc_attr($item['icon']); ?>"></i></span>
                                <h3 class="mt-5 text-lg font-semibold text-[#302F5A] transition-colors group-data-[active=true]:text-white"><?php echo esc_html($item['title']); ?></h3>
                                <p class="mt-3 text-sm leading-relaxed"><?php echo esc_html($item['text']); ?></p>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination !static mt-8"></div>
            </div>
        </div>
    </section>

    <!-- ======================= PROCESS (Swiper) ======================= -->
    <section class="<?php echo esc_attr($section); ?>">
        <div class="<?php echo esc_attr($container); ?>">
            <div class="reveal text-center">
                <p class="<?php echo esc_attr($eyebrow); ?>"><?php esc_html_e('Process', $td); ?></p>
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('Your Journey With Estate Partner', $td); ?></h2>
                <p class="mt-3 max-w-2xl mx-auto text-sm sm:text-base text-[#444444]"><?php esc_html_e('A simple, transparent approach designed to make your land-buying journey smooth and hassle-free.', $td); ?></p>
            </div>

            <div class="swiper process-swiper mt-10 sm:mt-14" style="--swiper-theme-color:#b3814e;">
                <div class="swiper-wrapper">
                    <?php foreach ($steps as $i => $step) : ?>
                        <div class="swiper-slide !h-auto border-r border-ink-line last:border-r-0 px-5 text-[#444444]">
                            <p class="text-xs font-bold tracking-[0.18em] text-gold"><?php echo esc_html(sprintf('STEP %d', $i + 1)); ?></p>
                            <i class="fa-solid <?php echo esc_attr($step['icon']); ?> mt-5 text-2xl text-gold" aria-hidden="true"></i>
                            <h3 class="mt-4 text-sm font-bold uppercase tracking-wide text-[#302F5A]"><?php echo esc_html($step['title']); ?></h3>
                            <p class="mt-3 text-sm leading-relaxed"><?php echo esc_html($step['text']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination !static mt-8"></div>
            </div>
        </div>
    </section>

    <!-- ======================= HOW WE VERIFY ======================= -->
    <section class="bg-[#302F5A] <?php echo esc_attr($section); ?>">
        <div class="<?php echo esc_attr($container); ?>">
            <div class="reveal text-center text-white">
                <p class="text-gold-light font-bold uppercase tracking-[0.18em] text-sm mb-3"><?php esc_html_e('Trust & Verification', $td); ?></p>
                <h2 class="font-prata text-3xl sm:text-4xl leading-tight"><?php esc_html_e('How We Verify Our Projects', $td); ?></h2>
                <p class="mt-3 max-w-3xl mx-auto text-sm text-white/80"><?php esc_html_e('We believe every property decision should begin with verified information. Before featuring a project on Estate Partners, we follow a structured process to check key details, approvals, and on-ground information.', $td); ?></p>
            </div>
            <div class="mt-10 sm:mt-14 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($verify as $item) : ?>
                    <div class="reveal bg-white rounded-xl p-7 shadow-lg text-[#444444]">
                        <span class="w-11 h-11 rounded-lg bg-gold-pale text-gold inline-flex items-center justify-center text-lg"><i class="fa-solid <?php echo esc_attr($item['icon']); ?>"></i></span>
                        <h3 class="mt-4 text-lg font-semibold text-[#302F5A]"><?php echo esc_html($item['title']); ?></h3>
                        <p class="mt-2 text-sm sm:text-base leading-relaxed"><?php echo esc_html($item['text']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ======================= FAQ ======================= -->
    <section class="relative isolate overflow-hidden bg-brand-cream">
        <img src="<?php echo esc_url($a . 'faq-bg.jpg'); ?>" alt="" class="absolute inset-0 w-full h-full object-cover opacity-40 -z-10" loading="lazy" />

        <div class="<?php echo esc_attr($container); ?> grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-6 items-end">
            <div class="reveal pt-16 sm:pt-20 lg:py-24">
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('FAQ’s', $td); ?></h2>

                <div class="mt-8 space-y-4">
                    <?php foreach ($faqs as $i => $faq) : ?>
                        <details name="faq" class="group rounded-lg bg-white text-[#302F5A] shadow-md open:bg-gold open:text-white transition-colors" <?php echo 0 === $i ? 'open' : ''; ?>>
                            <summary class="flex items-center justify-between gap-4 cursor-pointer list-none px-6 py-4 font-semibold [&::-webkit-details-marker]:hidden">
                                <span><?php echo esc_html($faq['q']); ?></span>
                                <span class="w-7 h-7 rounded-full border border-current inline-flex items-center justify-center shrink-0 text-xs transition-transform group-open:rotate-180"><i class="fa-solid fa-chevron-down"></i></span>
                            </summary>
                            <p class="px-6 pb-5 text-sm leading-relaxed text-white/95"><?php echo esc_html($faq['a']); ?></p>
                        </details>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="reveal hidden lg:flex justify-center items-end self-end">
                <img src="<?php echo esc_url($a . 'faq-person.png'); ?>" alt="" class="max-h-[640px] w-auto object-contain object-bottom" loading="lazy" />
            </div>
        </div>
    </section>

</main>

<script>
    /* Swiper carousels for the About page. Runs after the footer scripts (Swiper) have loaded. */
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof Swiper === 'undefined') {
            return;
        }

        function pager(selector) {
            return {
                el: selector + ' .swiper-pagination',
                clickable: true
            };
        }

        // Projects We Offer
        new Swiper('.projects-swiper', {
            slidesPerView: 1.15,
            spaceBetween: 20,
            grabCursor: true,
            watchOverflow: true,
            pagination: pager('.projects-swiper'),
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

        // Why Choose Estate Partners
        var why = new Swiper('.why-swiper', {
            slidesPerView: 1.1,
            spaceBetween: 20,
            grabCursor: true,
            watchOverflow: true,
            pagination: pager('.why-swiper'),
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                1280: {
                    slidesPerView: 4,
                    spaceBetween: 24
                }
            }
        });

        // Highlight the card the visitor hovers over / taps (default: the 2nd card).
        var cards = document.querySelectorAll('.why-card');
        cards.forEach(function(card) {
            function activate() {
                cards.forEach(function(c) {
                    c.setAttribute('data-active', 'false');
                });
                card.setAttribute('data-active', 'true');
            }
            card.addEventListener('mouseenter', activate);
            card.addEventListener('click', activate);
        });

        // Your Journey With Estate Partner
        new Swiper('.process-swiper', {
            slidesPerView: 1.2,
            spaceBetween: 0,
            grabCursor: true,
            watchOverflow: true,
            pagination: pager('.process-swiper'),
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
</script>

<?php
get_footer();
