<?php

/**
 * The header template
 *
 * @package EstatePartners
 */

if (! defined('ABSPATH')) {
    exit;
}

$img_uri = get_template_directory_uri() . '/assets/images';
$home    = home_url('/');

// Media-library URLs (swap to $img_uri . '/logo.svg' etc. if you move the files into the theme).
$logo_url   = 'https://estatepartners.in/wp-content/uploads/2026/11/logo.svg';
$modal_img  = 'https://estatepartners.in/wp-content/uploads/2026/10/enquery-banner.png';
$phone_show = '+91 70929 58830';
$phone_tel  = 'tel:+917092958830';

$is_blog_section     = is_home() || is_page('blog') || is_singular('post') || is_category() || is_tag() || is_date() || is_author();
$is_projects_section = is_post_type_archive('project') || is_tax('property_type') || is_singular('project') || is_page(array('apartments', 'plots', 'villas'));

/*
 * Project links, built ONCE and used by both the desktop dropdown and the mobile menu
 * (before, the same lookups ran twice per page load).
 */
$project_types = array(
    'apartments' => 'Apartments',
    'plots'      => 'Plots',
    'villas'     => 'Villas',
);
$project_links = array();
foreach ($project_types as $slug => $label) {
    $page_item = get_page_by_path($slug);
    $url       = '';
    if ($page_item) {
        $url = get_permalink($page_item);
    } else {
        $term = get_term_by('slug', $slug, 'property_type');
        if ($term && ! is_wp_error($term)) {
            $url = get_term_link($term);
        }
    }
    if (! $url || is_wp_error($url)) {
        $url = home_url('/property-type/' . $slug . '/');
    }
    $project_links[] = array(
        'label'  => $label,
        'url'    => $url,
        'active' => is_page($slug) || is_tax('property_type', $slug),
    );
}

// Blog URL: uses the "Posts page" from Settings → Reading if set, otherwise /blog/.
$blog_page_id = (int) get_option('page_for_posts');
$blog_url     = $blog_page_id ? get_permalink($blog_page_id) : $home . 'blog/';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- tracking codes -->
    <script async src="https://www.googletagmanager.com/gtm.js?id=GTM-5BXSTLZB"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    </script>

    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "zcx3bke88d");
    </script>
    <!-- End of tracking codes -->

    <style type="text/tailwindcss">
        @theme {
            --font-prata: 'Prata', serif;
            --font-poppins: 'Poppins', sans-serif;
            --color-gold: #b3814e;
            --color-gold-light: #e3c98f;
            --color-gold-pale: #f5ecdc;
            --color-gold-dark: #8f6535;
            --color-ink: #131313;
            --color-ink-soft: #3d3d3d;
            --color-ink-muted: #6f6f6f;
            --color-ink-line: #e7e2d8;
            --color-brand-red: #ed1c24;
            --color-brand-purple: #302e5a;
            --color-brand-cream: #faf7f1;
        }
    </style>
    <?php wp_head(); ?>

    <style>
        /* ---------- Header ---------- */
        #site-header {
            transition: box-shadow .25s ease;
        }

        #site-header.is-scrolled {
            box-shadow: 0 4px 20px rgba(0, 0, 0, .06);
        }

        /* WordPress admin bar (only visible when logged in) */
        .admin-bar #site-header {
            top: 2rem;
        }

        .admin-bar #mobile-menu {
            top: 2rem;
            height: calc(100dvh - 2rem);
        }

        @media (max-width: 782px) {
            .admin-bar #site-header {
                top: 2.875rem;
            }

            .admin-bar #mobile-menu {
                top: 2.875rem;
                height: calc(100dvh - 2.875rem);
            }
        }

        @media (max-width: 600px) {
            .admin-bar #site-header {
                top: 0;
            }

            .admin-bar #mobile-menu {
                top: 0;
                height: 100dvh;
            }
        }

        /* ---------- Mobile menu (slides in from the right) ----------
           Closed = off-canvas AND visibility:hidden, so keyboard focus can't reach hidden links
           and the shadow can't leak onto the page. */
        /* ---------- Mobile menu (slides in from the right) ---------- */
        #mobile-menu {
            position: fixed;
            top: 0;
            right: 0;
            width: 85%;
            max-width: 25rem;
            height: 100vh;
            height: 100dvh;
            background: #fff;
            z-index: 60;
            overflow-y: auto;
            overscroll-behavior: contain;
            transform: translateX(100%);
            visibility: hidden;
            pointer-events: none;
            transition: transform .3s ease-in-out, visibility .3s ease-in-out;
        }

        #mobile-menu.active {
            transform: translateX(0);
            visibility: visible;
            pointer-events: auto;
            box-shadow: -10px 0 30px rgba(0, 0, 0, .1);
        }

        #mobile-menu-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .5);
            z-index: 55;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transition: opacity .3s ease-in-out, visibility .3s ease-in-out;
        }

        #mobile-menu-overlay.active {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        /* Stop page scrolling behind the menu / modal */
        body.scroll-lock {
            overflow: hidden;
        }

        /* Mobile submenu accordion (height animates to the real content height) */
        .mobile-submenu {
            display: grid;
            grid-template-rows: 0fr;
            visibility: hidden;
            transition: grid-template-rows .3s ease, visibility 0s linear .3s;
        }

        .mobile-submenu>div {
            overflow: hidden;
            min-height: 0;
        }

        .mobile-submenu.open {
            grid-template-rows: 1fr;
            visibility: visible;
            transition: grid-template-rows .3s ease, visibility 0s;
        }

        .mobile-dropdown-arrow {
            transition: transform .3s ease;
        }

        .mobile-dropdown-arrow.open {
            transform: rotate(180deg);
        }

        /* Hamburger -> X. Bars are 0.125rem tall with a 0.375rem gap, so centres are 0.5rem apart. */
        #menu-btn {
            gap: 0.375rem;
        }

        #menu-btn span {
            display: block;
            width: 1.375rem;
            height: 0.125rem;
            background: currentColor;
            border-radius: 0.125rem;
            transition: transform .3s ease, opacity .2s ease;
        }

        #menu-btn.active span:nth-child(1) {
            transform: translateY(0.5rem) rotate(45deg);
        }

        #menu-btn.active span:nth-child(2) {
            opacity: 0;
        }

        #menu-btn.active span:nth-child(3) {
            transform: translateY(-0.5rem) rotate(-45deg);
        }

        /* Enquiry modal animation */
        #modalCard {
            transition: transform .3s ease, opacity .3s ease;
        }

        @media (prefers-reduced-motion: reduce) {

            #mobile-menu,
            #mobile-menu-overlay,
            .mobile-submenu,
            #menu-btn span,
            #modalCard {
                transition-duration: .01ms !important;
                transition-delay: 0s !important;
            }
        }
    </style>
</head>

<body <?php body_class('font-poppins text-ink antialiased bg-white'); ?>>
    <?php wp_body_open(); ?>

    <!-- Floating buttons -->
    <div class="fixed top-1/5 right-0 flex flex-col gap-4 z-50 text-lg">
        <!-- Share Button -->
        <button onclick="sharePage()" class="p-3 rounded-l-lg bg-white shadow-lg hover:bg-gold hover:text-white transition-all cursor-pointer" aria-label="Share this page">
            <img src="https://estatepartners.in/wp-content/uploads/2026/11/share.svg" alt="" class="w-4 h-4">
        </button>

        <?php
        // Full URL of each brochure (copy it from Media Library → file → "Copy URL")
        $brochures = array(
            'page-apartments.php' => 'http://estatepartners.in/wp-content/uploads/2026/11/Infinium-Altitude-EP.pdf',
            'page-villas.php'     => 'http://estatepartners.in/wp-content/uploads/2026/11/Infinium-Central-16-EP.pdf',
            'page-plots.php'      => 'http://estatepartners.in/wp-content/uploads/2026/11/Aaraspaces-Brochure.pdf',
        );

        $brochure_url = '';
        foreach ($brochures as $template => $url) {
            if (is_page_template($template)) {
                $brochure_url = $url;
                break;
            }
        }
        ?>

        <?php if ($brochure_url) : ?>
            <a href="<?php echo esc_url($brochure_url); ?>" download
                aria-label="<?php esc_attr_e('Download brochure', 'vnktheme-textdomain'); ?>"
                class="p-3 rounded-l-lg bg-white shadow-lg hover:bg-gold hover:text-white transition-all">
                <img src="https://estatepartners.in/wp-content/uploads/2026/11/download_broucher.svg" alt="" class="w-4 h-4">
            </a>
        <?php endif; ?>

        <!-- Call Button -->
        <a href="tel:+917092958830" class="p-3 rounded-l-lg bg-white shadow-lg hover:bg-gold hover:text-white transition-all" aria-label="Call us">
            <img src="https://estatepartners.in/wp-content/uploads/2026/11/phone.svg" alt="" class="w-4 h-4">
        </a>
    </div>

    <script>
        function sharePage() {
            // Check if Web Share API is supported (Mobile devices)
            if (navigator.share) {
                navigator.share({
                    title: document.title,
                    url: window.location.href
                }).catch(err => console.log('Share cancelled'));
            } else {
                // Fallback for Desktop: Copy link to clipboard
                copyToClipboard(window.location.href);

                // Show toast notification
                showToast('Link copied to clipboard!');
            }
        }

        function copyToClipboard(text) {
            // Modern approach
            if (navigator.clipboard) {
                navigator.clipboard.writeText(text);
            } else {
                // Fallback for older browsers
                const input = document.createElement('input');
                input.value = text;
                document.body.appendChild(input);
                input.select();
                document.execCommand('copy');
                document.body.removeChild(input);
            }
        }

        function showToast(message) {
            // Create toast element
            const toast = document.createElement('div');
            toast.className = 'fixed bottom-6 left-1/2 transform -translate-x-1/2 bg-[#302F5A] text-white px-6 py-3 rounded-lg shadow-xl z-[999] flex items-center gap-2';
            toast.innerHTML = '<i class="fa-solid fa-check-circle"></i> ' + message;

            document.body.appendChild(toast);

            // Remove after 3 seconds
            setTimeout(() => {
                toast.style.opacity = '0';
                toast.style.transition = 'opacity 0.3s';
                setTimeout(() => toast.remove(), 300);
            }, 3000);
        }
    </script>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu-overlay" class="lg:hidden" aria-hidden="true"></div>

    <!-- Mobile Menu (slides from the right). Kept OUTSIDE <header>: the header's backdrop-blur
         would otherwise become the containing block of this fixed panel. -->
    <div id="mobile-menu" class="lg:hidden" role="dialog" aria-label="Menu">
        <div class="flex flex-col h-full">
            <div class="flex items-center justify-between p-4 border-b border-ink-line">
                <span class="text-lg font-semibold text-[#302F5A]">Menu</span>
                <button id="mobile-close-btn" type="button"
                    class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-gray-100"
                    aria-label="Close menu">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>

            <nav class="flex-1 overflow-y-auto p-4" aria-label="Mobile">
                <div class="flex flex-col divide-y divide-ink-line/70">
                    <a href="<?php echo esc_url($home); ?>"
                        class="py-4 text-base font-medium hover:text-gold transition-colors <?php echo is_front_page() ? 'text-gold' : 'text-ink'; ?>"
                        <?php echo is_front_page() ? 'aria-current="page"' : ''; ?>>Home</a>

                    <a href="<?php echo esc_url($home . 'about-us/'); ?>"
                        class="py-4 text-base font-medium hover:text-gold transition-colors <?php echo is_page('about-us') ? 'text-gold' : 'text-ink'; ?>"
                        <?php echo is_page('about-us') ? 'aria-current="page"' : ''; ?>>About</a>

                    <!-- Projects accordion -->
                    <div class="py-4">
                        <button id="mobile-projects-toggle" type="button"
                            class="w-full flex items-center justify-between text-base font-medium hover:text-gold transition-colors <?php echo $is_projects_section ? 'text-gold' : 'text-ink'; ?>"
                            aria-expanded="false" aria-controls="mobile-projects-submenu">
                            <span>Ongoing Projects</span>
                            <i class="fa-solid fa-chevron-down mobile-dropdown-arrow text-sm" aria-hidden="true"></i>
                        </button>

                        <div id="mobile-projects-submenu" class="mobile-submenu pl-4">
                            <div>
                                <a href="https://estatepartners.in/all-projects/" class="block py-3 text-sm hover:text-gold transition-colors <?php echo $item['active'] ? 'text-gold font-semibold' : 'text-ink-soft'; ?>">All projects</a>
                                <?php foreach ($project_links as $item) : ?>
                                    <a href="<?php echo esc_url($item['url']); ?>"
                                        class="block py-3 text-sm hover:text-gold transition-colors <?php echo $item['active'] ? 'text-gold font-semibold' : 'text-ink-soft'; ?>">
                                        <?php echo esc_html($item['label']); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <a href="<?php echo esc_url($blog_url); ?>"
                        class="py-4 text-base font-medium hover:text-gold transition-colors <?php echo $is_blog_section ? 'text-gold' : 'text-ink'; ?>"
                        <?php echo $is_blog_section ? 'aria-current="page"' : ''; ?>>Blog</a>

                    <a href="<?php echo esc_url($home . 'contact-us/'); ?>"
                        class="py-4 text-base font-medium hover:text-gold transition-colors <?php echo is_page('contact-us') ? 'text-gold' : 'text-ink'; ?>"
                        <?php echo is_page('contact-us') ? 'aria-current="page"' : ''; ?>>Contact Us</a>
                </div>

                <div class="mt-8 space-y-3">
                    <a href="<?php echo esc_attr($phone_tel); ?>"
                        class="flex items-center justify-center gap-2 w-full py-3 px-4 border border-[#B3814E] text-[#302F5A] rounded-lg font-medium">
                        <i class="fa-solid fa-phone" aria-hidden="true"></i>
                        <?php echo esc_html($phone_show); ?>
                    </a>

                    <button type="button"
                        class="js-open-enquiry-modal w-full flex items-center justify-center gap-2 bg-[#B3814E] text-white font-medium px-6 py-3 rounded-lg hover:bg-gold-dark transition-colors">
                        <i class="fa-regular fa-paper-plane" aria-hidden="true"></i>
                        Enquire Now
                    </button>
                </div>
            </nav>
        </div>
    </div>

    <!-- ======================= HEADER ======================= -->
    <header id="site-header" class="sticky top-0 z-50 bg-white/95 backdrop-blur border-b border-ink-line">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20 gap-4">

                <!-- Logo -->
                <a href="<?php echo esc_url($home); ?>" class="flex items-center gap-3 shrink-0"
                    aria-label="<?php echo esc_attr(get_bloginfo('name')); ?> home">
                    <img src="<?php echo esc_url($logo_url); ?>"
                        alt="<?php echo esc_attr(get_bloginfo('name')); ?> logo"
                        class="h-10 xl:h-12 w-auto object-contain" />
                </a>

                <!-- Desktop nav -->
                <nav class="hidden lg:flex items-center gap-6 xl:gap-8 text-[0.9375rem] font-medium" aria-label="Primary">
                    <a href="<?php echo esc_url($home); ?>"
                        class="nav-link <?php echo is_front_page() ? 'active' : ''; ?> hover:text-gold transition-colors"
                        <?php echo is_front_page() ? 'aria-current="page"' : ''; ?>>Home</a>

                    <a href="<?php echo esc_url($home . 'about-us/'); ?>"
                        class="nav-link <?php echo is_page('about-us') ? 'active' : ''; ?> hover:text-gold transition-colors"
                        <?php echo is_page('about-us') ? 'aria-current="page"' : ''; ?>>About</a>

                    <!-- Projects dropdown (opens on hover, click/tap and keyboard; JS below) -->
                    <div class="relative group self-stretch flex items-center" data-dropdown data-open="false">
                        <button type="button"
                            class="nav-link inline-flex items-center gap-2 hover:text-gold transition-colors <?php echo $is_projects_section ? 'active' : ''; ?>"
                            aria-haspopup="true" aria-expanded="false" aria-controls="projects-dropdown">
                            Ongoing Projects
                            <i class="fa-solid fa-chevron-down text-[0.625rem] transition-transform group-data-[open=true]:rotate-180" aria-hidden="true"></i>
                        </button>

                        <div id="projects-dropdown" data-dropdown-panel
                            class="hidden absolute left-0 top-full w-52 z-50">
                            <!-- pt-1 is a hover bridge so the menu doesn't close while the mouse crosses the gap -->
                            <div class="pt-1">
                                <div class="bg-white rounded-lg shadow-xl border border-ink-line py-2">
                                    <a href="https://estatepartners.in/all-projects/" class="block px-5 py-3 text-sm hover:bg-gold-pale hover:text-gold transition-colors <?php echo $item['active'] ? 'text-gold font-semibold' : 'text-ink'; ?>">All projects</a>
                                    <?php foreach ($project_links as $item) : ?>
                                        <a href="<?php echo esc_url($item['url']); ?>"
                                            class="block px-5 py-3 text-sm hover:bg-gold-pale hover:text-gold transition-colors <?php echo $item['active'] ? 'text-gold font-semibold' : 'text-ink'; ?>"
                                            <?php echo $item['active'] ? 'aria-current="page"' : ''; ?>>
                                            <?php echo esc_html($item['label']); ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="<?php echo esc_url($blog_url); ?>"
                        class="nav-link <?php echo $is_blog_section ? 'active' : ''; ?> hover:text-gold transition-colors"
                        <?php echo $is_blog_section ? 'aria-current="page"' : ''; ?>>Blog</a>

                    <a href="<?php echo esc_url($home . 'contact-us/'); ?>"
                        class="nav-link <?php echo is_page('contact-us') ? 'active' : ''; ?> hover:text-gold transition-colors"
                        <?php echo is_page('contact-us') ? 'aria-current="page"' : ''; ?>>Contact us</a>
                </nav>

                <!-- Actions -->
                <div class="flex items-center gap-3 sm:gap-4">
                    <!-- Phone number: only from xl, where there is room next to the nav -->
                    <a href="<?php echo esc_attr($phone_tel); ?>" class="hidden xl:inline-flex items-center text-[#302F5A] font-semibold whitespace-nowrap">
                        <i class="fa-solid fa-phone mr-2" aria-hidden="true"></i><?php echo esc_html($phone_show); ?>
                    </a>

                    <!-- Phone icon: phones only (the number is inside the menu too) -->
                    <a href="<?php echo esc_attr($phone_tel); ?>" aria-label="Call us"
                        class="md:hidden w-11 h-11 flex items-center justify-center rounded-lg border border-ink-line text-[#302F5A]">
                        <i class="fa-solid fa-phone" aria-hidden="true"></i>
                    </a>

                    <button type="button"
                        class="js-open-enquiry-modal hidden md:inline-flex items-center gap-2 bg-[#B3814E] text-white font-medium text-sm px-6 py-3 rounded-lg hover:bg-gold-dark transition-colors whitespace-nowrap">
                        <i class="fa-regular fa-paper-plane text-sm" aria-hidden="true"></i>
                        <span>Enquire Now</span>
                    </button>

                    <!-- Hamburger -->
                    <button id="menu-btn" type="button"
                        class="lg:hidden relative w-11 h-11 flex flex-col items-center justify-center rounded-lg border border-ink-line text-ink"
                        aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- ======================= ENQUIRY MODAL ======================= -->
    <!-- The backdrop scrolls, so the form is never cut off on short screens. -->
    <div id="modalBackdrop"
        class="fixed inset-0 bg-black/80 backdrop-blur-sm z-[70] hidden overflow-y-auto p-4"
        aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="enquiry-modal-title">
        <div class="min-h-full flex items-center justify-center">
            <div class="relative w-full max-w-4xl">
                <button id="closeModalBtn" type="button"
                    class="absolute -top-3 -right-3 md:-top-4 md:-right-4 w-9 h-9 md:w-10 md:h-10 bg-white hover:bg-gray-100 text-gray-700 rounded-full flex items-center justify-center shadow-lg transition-transform hover:scale-110 z-10 cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-brand-purple"
                    aria-label="Close modal">
                    <i class="fa-solid fa-xmark text-lg" aria-hidden="true"></i>
                </button>

                <div id="modalCard"
                    class="scale-95 opacity-0 bg-white rounded-2xl md:rounded-3xl shadow-2xl overflow-hidden grid grid-cols-1 md:grid-cols-2 md:min-h-[30rem]">
                    <div class="relative hidden md:block bg-gray-900 overflow-hidden">
                        <img src="<?php echo esc_url($modal_img); ?>"
                            alt="Real Estate Planning & Checklist" class="w-full h-full object-cover object-center"
                            onerror="this.onerror=null; this.src='https://placehold.co/800x800/2a2a3a/ffffff?text=Estate+Partners';" />
                        <div class="absolute inset-0 bg-[linear-gradient(to_top,rgba(0,0,0,.4),transparent)]"></div>
                    </div>

                    <div class="p-6 sm:p-8 md:p-10 flex flex-col justify-center bg-white">
                        <h2 id="enquiry-modal-title"
                            class="text-2xl md:text-3xl font-bold text-[#302F5A] mb-6 tracking-tight">Enquire Now</h2>
                        <?php echo do_shortcode('[wpforms id="41"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const $ = (id) => document.getElementById(id);
            const body = document.body;

            const header = $('site-header');
            const menuBtn = $('menu-btn');
            const mobileMenu = $('mobile-menu');
            const mobileOverlay = $('mobile-menu-overlay');
            const mobileCloseBtn = $('mobile-close-btn');
            const projectsToggle = $('mobile-projects-toggle');
            const projectsSubmenu = $('mobile-projects-submenu');
            const modalBackdrop = $('modalBackdrop');
            const modalCard = $('modalCard');
            const closeModalBtn = $('closeModalBtn');

            const menuIsOpen = () => mobileMenu.classList.contains('active');
            const modalIsOpen = () => modalBackdrop.getAttribute('aria-hidden') === 'false';
            // Page scroll is locked while either the menu or the modal is open.
            const syncScrollLock = () => body.classList.toggle('scroll-lock', menuIsOpen() || modalIsOpen());

            /* ---------- Shadow once the page is scrolled ---------- */
            const onScroll = () => header.classList.toggle('is-scrolled', window.scrollY > 8);
            onScroll();
            window.addEventListener('scroll', onScroll, {
                passive: true
            });

            /* ---------- Mobile menu ---------- */
            function openMobileMenu() {
                mobileMenu.classList.add('active');
                mobileOverlay.classList.add('active');
                menuBtn.classList.add('active');
                menuBtn.setAttribute('aria-expanded', 'true');
                menuBtn.setAttribute('aria-label', 'Close menu');
                syncScrollLock();
                mobileCloseBtn.focus({
                    preventScroll: true
                });
            }

            function closeMobileMenu(returnFocus) {
                if (!menuIsOpen()) return;
                mobileMenu.classList.remove('active');
                mobileOverlay.classList.remove('active');
                menuBtn.classList.remove('active');
                menuBtn.setAttribute('aria-expanded', 'false');
                menuBtn.setAttribute('aria-label', 'Open menu');
                syncScrollLock();
                if (returnFocus) menuBtn.focus({
                    preventScroll: true
                });
            }

            menuBtn.addEventListener('click', () => (menuIsOpen() ? closeMobileMenu(true) : openMobileMenu()));
            mobileCloseBtn.addEventListener('click', () => closeMobileMenu(true));
            mobileOverlay.addEventListener('click', () => closeMobileMenu(true));
            // Tapping a link closes the menu (needed for same-page anchors; harmless otherwise).
            mobileMenu.querySelectorAll('a').forEach((a) => a.addEventListener('click', () => closeMobileMenu()));

            // Projects accordion
            projectsToggle.addEventListener('click', () => {
                const open = projectsSubmenu.classList.toggle('open');
                projectsToggle.querySelector('.mobile-dropdown-arrow').classList.toggle('open', open);
                projectsToggle.setAttribute('aria-expanded', String(open));
            });

            /* ---------- Desktop dropdown ---------- */
            const canHover = window.matchMedia('(hover: hover)');
            document.querySelectorAll('[data-dropdown]').forEach((dd) => {
                const btn = dd.querySelector('button');
                const panel = dd.querySelector('[data-dropdown-panel]');
                const setOpen = (open) => {
                    dd.dataset.open = String(open);
                    btn.setAttribute('aria-expanded', String(open));
                    panel.classList.toggle('hidden', !open);
                };

                dd.addEventListener('mouseenter', () => {
                    if (canHover.matches) setOpen(true);
                });
                dd.addEventListener('mouseleave', () => {
                    if (canHover.matches) setOpen(false);
                });
                // Mouse: a click keeps it open (hover already opened it). Touch / keyboard: click toggles.
                btn.addEventListener('click', () => setOpen(canHover.matches ? true : dd.dataset.open !== 'true'));
                dd.addEventListener('focusout', (e) => {
                    if (!dd.contains(e.relatedTarget)) setOpen(false);
                });
                dd.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape') {
                        setOpen(false);
                        btn.focus();
                    }
                });
                document.addEventListener('click', (e) => {
                    if (!dd.contains(e.target)) setOpen(false);
                });
            });

            /* ---------- Enquiry modal ---------- */
            let lastTrigger = null;
            let closeTimer = null;

            function openModal(trigger) {
                clearTimeout(closeTimer);
                closeMobileMenu(); // don't leave the menu open behind the modal
                lastTrigger = trigger;
                modalBackdrop.classList.remove('hidden');
                modalBackdrop.setAttribute('aria-hidden', 'false');
                syncScrollLock();
                // two frames so the browser registers the "closed" state before animating in
                requestAnimationFrame(() => requestAnimationFrame(() => {
                    modalCard.classList.remove('scale-95', 'opacity-0');
                    modalCard.classList.add('scale-100', 'opacity-100');
                }));
                closeModalBtn.focus({
                    preventScroll: true
                });
            }

            function closeModal() {
                if (!modalIsOpen()) return;
                modalCard.classList.remove('scale-100', 'opacity-100');
                modalCard.classList.add('scale-95', 'opacity-0');
                modalBackdrop.setAttribute('aria-hidden', 'true');
                syncScrollLock();
                closeTimer = setTimeout(() => {
                    modalBackdrop.classList.add('hidden');
                    if (lastTrigger) lastTrigger.focus({
                        preventScroll: true
                    });
                }, 300);
            }

            document.querySelectorAll('.js-open-enquiry-modal').forEach((trigger) => {
                trigger.addEventListener('click', (e) => {
                    e.preventDefault();
                    openModal(trigger);
                });
            });
            closeModalBtn.addEventListener('click', closeModal);
            modalBackdrop.addEventListener('click', (e) => {
                // clicks on the dark area (backdrop or its centring wrapper), not on the card
                if (e.target === modalBackdrop || e.target === modalBackdrop.firstElementChild) closeModal();
            });

            /* ---------- Keyboard: Escape + focus trap in the modal ---------- */
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    if (modalIsOpen()) closeModal();
                    else if (menuIsOpen()) closeMobileMenu(true);
                    return;
                }
                if (e.key === 'Tab' && modalIsOpen()) {
                    const focusables = Array.from(modalBackdrop.querySelectorAll(
                        'a[href], button:not([disabled]), input:not([type="hidden"]):not([disabled]), select, textarea, [tabindex]:not([tabindex="-1"])'
                    )).filter((el) => el.offsetParent !== null);
                    if (!focusables.length) return;
                    const first = focusables[0];
                    const last = focusables[focusables.length - 1];
                    if (e.shiftKey && document.activeElement === first) {
                        e.preventDefault();
                        last.focus();
                    } else if (!e.shiftKey && document.activeElement === last) {
                        e.preventDefault();
                        first.focus();
                    }
                }
            });

            /* ---------- Close the mobile menu if the window grows to desktop width ---------- */
            window.addEventListener('resize', () => {
                if (window.innerWidth >= 1024) closeMobileMenu();
            });
        });
    </script>