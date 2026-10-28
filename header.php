<?php

/**
 * The header template
 *
 * Outputs everything from <!DOCTYPE> down to the end of the site header.
 * footer.php closes <body> and <html>.
 *
 * @package YourThemeName
 */

if (! defined('ABSPATH')) {
    exit;
}

$img_uri = get_template_directory_uri() . '/assets/images';
$home    = home_url('/');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
</head>

<body <?php body_class('font-poppins text-ink antialiased bg-white'); ?>>
    <?php wp_body_open(); ?>

    <!-- JavaScript Modal Interaction Controller -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const closeModalBtn = document.getElementById('closeModalBtn');
            const modalBackdrop = document.getElementById('modalBackdrop');
            const modalCard = document.getElementById('modalCard');
            const openModalBtns = document.querySelectorAll('.js-open-enquiry-modal');
            let lastModalTrigger = null;
            let previousBodyOverflow = '';

            if (!closeModalBtn || !modalBackdrop || !modalCard) {
                return;
            }

            function openModal(trigger) {
                lastModalTrigger = trigger;
                previousBodyOverflow = document.body.style.overflow;
                modalBackdrop.classList.remove('opacity-0', 'invisible');
                modalBackdrop.classList.add('opacity-100', 'visible');
                modalBackdrop.setAttribute('aria-hidden', 'false');

                modalCard.classList.remove('scale-95', 'opacity-0');
                modalCard.classList.add('scale-100', 'opacity-100');

                document.body.style.overflow = 'hidden';
                closeModalBtn.focus();
            }

            function closeModal() {
                modalBackdrop.classList.remove('opacity-100', 'visible');
                modalBackdrop.classList.add('opacity-0', 'invisible');
                modalBackdrop.setAttribute('aria-hidden', 'true');

                modalCard.classList.remove('scale-100', 'opacity-100');
                modalCard.classList.add('scale-95', 'opacity-0');

                document.body.style.overflow = previousBodyOverflow;
                if (lastModalTrigger) {
                    lastModalTrigger.focus();
                }
            }

            openModalBtns.forEach((trigger) => {
                trigger.addEventListener('click', (event) => {
                    event.preventDefault();
                    openModal(trigger);
                });
            });

            closeModalBtn.addEventListener('click', closeModal);

            modalBackdrop.addEventListener('click', (event) => {
                if (event.target === modalBackdrop) {
                    closeModal();
                }
            });

            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape' && modalBackdrop.classList.contains('opacity-100')) {
                    closeModal();
                }
            });
        });
    </script>

    <!-- ======================= HEADER ======================= -->
    <header id="site-header" class="sticky top-0 z-50 bg-white/95 backdrop-blur border-b border-ink-line">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20 gap-4">
                <!-- Logo -->
                <a href="<?php echo esc_url($home); ?>" class="flex items-center gap-3 shrink-0" aria-label="<?php echo esc_attr(get_bloginfo('name')); ?> home">
                    <img src="<?php echo esc_url($img_uri . '/logo.png'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?> logo" class="h-10 sm:h-12 w-auto object-contain" />
                </a>

                <!-- Desktop nav -->
                <nav class="hidden lg:flex items-center gap-8 text-[15px] font-medium" aria-label="Primary">
                    <a href="<?php echo esc_url($home . ''); ?>" class="nav-link active hover:text-gold transition-colors">Home</a>
                    <a href="<?php echo esc_url($home . '/about-us/'); ?>" class="nav-link hover:text-gold transition-colors">About Us</a>
                    <!-- <a href="<?php echo esc_url($home . '#projects'); ?>" class="nav-link hover:text-gold transition-colors">Projects</a> -->
                    <!-- <a href="<?php echo esc_url($home . '#types'); ?>" class="nav-link hover:text-gold transition-colors">Apartments</a> -->
                    <!-- <a href="<?php echo esc_url($home . '#types'); ?>" class="nav-link hover:text-gold transition-colors">Villas</a> -->
                    <a href="<?php echo esc_url($home . '/contact-us/'); ?>" class="nav-link hover:text-gold transition-colors">Contact</a>
                    <!-- <a href="<?php echo esc_url($home . '#insights'); ?>" class="nav-link hover:text-gold transition-colors">Blog</a> -->
                </nav>

                <!-- Actions -->
                <div class="flex items-center gap-4 sm:gap-3">
                    <a href="<?php echo esc_url($home . '#contact'); ?>" aria-label="Favourite projects" class="hidden relative hidden sm:inline-flex text-2xl items-center justify-center text-brand-red transition-colors mr-2">
                        <i class="fa-regular fa-heart"></i>
                        <!-- <span class="absolute -top-2 -right-2 w-5 h-5 rounded-full bg-brand-red text-white text-[11px] font-semibold inline-flex items-center justify-center">3</span> -->
                    </a>
                    <!-- COntact number -->
                    <a href="tel:+917092958830" class="text-[#302F5A] font-semibold"><i class="fa-solid fa-phone mr-2"></i>+91 70929 58830</a>
                    <!-- <a href="<`?php echo esc_url($home . '#enquire'); ?>" class="hidden md:inline-flex items-center gap-2 bg-[#B3814E] text-white font-medium text-sm px-6 py-3 rounded-lg hover:bg-gold transition-colors">
                        Enquire Now <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a> -->

                    <button
                        type="button"
                        class="js-open-enquiry-modal hidden md:inline-flex items-center gap-2 bg-[#B3814E] text-white font-medium text-sm px-6 py-3 rounded-lg hover:bg-gold transition-colors">
                        <i class="fa-regular fa-paper-plane text-sm"></i>
                        <span>Enquire Now</span>
                    </button>

                    <!-- Hamburger -->
                    <button id="menu-btn" class="lg:hidden inline-flex w-11 h-11 items-center justify-center rounded-lg border border-ink-line" aria-label="Open menu" aria-expanded="false">
                        <i id="menu-open-icon" class="fa-solid fa-bars text-lg"></i>
                        <i id="menu-close-icon" class="fa-solid fa-xmark text-lg hidden"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden lg:hidden border-t border-ink-line bg-white">
            <nav class="px-4 sm:px-6 py-4 flex flex-col text-base font-medium divide-y divide-ink-line/70" aria-label="Mobile">
                <a href="<?php echo esc_url($home . ''); ?>" class="py-3 hover:text-gold">Home</a>
                <a href="<?php echo esc_url($home . '/about-us/'); ?>" class="py-3 hover:text-gold">About Us</a>
                <!-- <a href="<?php echo esc_url($home . '#projects'); ?>" class="py-3 hover:text-gold">Projects</a> -->
                <!-- <a href="<?php echo esc_url($home . '#types'); ?>" class="py-3 hover:text-gold">Apartments</a> -->
                <!-- <a href="<?php echo esc_url($home . '#types'); ?>" class="py-3 hover:text-gold">Villas</a> -->
                <!-- <a href="<?php echo esc_url($home . '#locations'); ?>" class="py-3 hover:text-gold">Locations</a> -->
                <!-- <a href="<?php echo esc_url($home . '#insights'); ?>" class="py-3 hover:text-gold">Blog</a> -->
                <a href="<?php echo esc_url($home . '/contact-us/'); ?>" class="py-3 hover:text-gold">Contact Us</a>
                <a href="<?php echo esc_url($home . '#enquire'); ?>" class="my-3 inline-flex items-center justify-center gap-2 bg-gold text-white font-medium text-sm px-6 py-3 rounded-lg">
                    Enquire Now <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>

                <button
                    type="button"
                    class="js-open-enquiry-modal inline-flex items-center gap-2 bg-brand-navy hover:bg-brand-navyHover text-white px-8 py-3.5 rounded-xl font-semibold text-lg shadow-lg shadow-brand-navy/30 hover:shadow-brand-navy/50 transform hover:-translate-y-0.5 transition-all duration-200 cursor-pointer">
                    <i class="fa-regular fa-paper-plane text-sm"></i>
                    <span>Enquire Now</span>
                </button>
            </nav>
        </div>
    </header>

    <!-- Modal Overlay Container -->
    <div
        id="modalBackdrop"
        class="modal-backdrop fixed inset-0 bg-black/80 backdrop-blur-sm z-50 flex items-center justify-center p-4 opacity-0 invisible"
        aria-hidden="true"
        role="dialog"
        aria-modal="true"
        aria-labelledby="enquiry-modal-title">

        <!-- Modal Outer Wrapper (Relative for floating close button positioning) -->
        <div class="relative w-full max-w-4xl">

            <!-- Close Button floating top-right -->
            <button
                id="closeModalBtn"
                type="button"
                class="absolute -top-3 -right-3 md:-top-4 md:-right-4 w-9 h-9 md:w-10 md:h-10 bg-white hover:bg-gray-100 text-gray-700 rounded-full flex items-center justify-center shadow-lg transition-transform hover:scale-110 z-10 cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-navy"
                aria-label="Close modal">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>

            <!-- Modal Card Body -->
            <div
                id="modalCard"
                class="modal-content transform scale-95 opacity-0 bg-white rounded-2xl md:rounded-3xl shadow-2xl overflow-hidden grid grid-cols-1 md:grid-cols-2 min-h-[480px]">

                <!-- Left Side: Image Container -->
                <div class="relative hidden md:block bg-gray-900 overflow-hidden">
                    <img
                        src="http://localhost/estate_partners/wp-content/uploads/2026/10/enquery-banner.png"
                        alt="Real Estate Planning & Checklist"
                        class="w-full h-full object-cover object-center"
                        onerror="this.onerror=null; this.src='https://placehold.co/800x800/2a2a3a/ffffff?text=Estate+Partners';" />
                    <!-- Subtle Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                </div>

                <!-- Right Side: Form Content -->
                <div class="p-8 md:p-10 flex flex-col justify-center bg-white">
                    <h2 id="enquiry-modal-title" class="text-2xl md:text-3xl font-bold text-[#302F5A] mb-6 tracking-tight">
                        Enquire Now
                    </h2>

                    <?php echo do_shortcode('[wpforms id="41"]'); ?>
                </div>

            </div>
        </div>
    </div>