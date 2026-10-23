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
                    <a href="<?php echo esc_url($home . '#home'); ?>" class="nav-link active hover:text-gold transition-colors">Home</a>
                    <a href="<?php echo esc_url($home . '/about-us/'); ?>" class="nav-link hover:text-gold transition-colors">About Us</a>
                    <!-- <a href="<?php echo esc_url($home . '#projects'); ?>" class="nav-link hover:text-gold transition-colors">Projects</a> -->
                    <!-- <a href="<?php echo esc_url($home . '#types'); ?>" class="nav-link hover:text-gold transition-colors">Apartments</a> -->
                    <!-- <a href="<?php echo esc_url($home . '#types'); ?>" class="nav-link hover:text-gold transition-colors">Villas</a> -->
                    <a href="<?php echo esc_url($home . '/contact-us/'); ?>" class="nav-link hover:text-gold transition-colors">Contact</a>
                    <!-- <a href="<?php echo esc_url($home . '#insights'); ?>" class="nav-link hover:text-gold transition-colors">Blog</a> -->
                </nav>

                <!-- Actions -->
                <div class="flex items-center gap-4 sm:gap-3">
                    <a href="<?php echo esc_url($home . '#contact'); ?>" aria-label="Favourite projects" class="relative hidden sm:inline-flex text-2xl items-center justify-center text-brand-red transition-colors mr-2">
                        <i class="fa-regular fa-heart"></i>
                        <!-- <span class="absolute -top-2 -right-2 w-5 h-5 rounded-full bg-brand-red text-white text-[11px] font-semibold inline-flex items-center justify-center">3</span> -->
                    </a>
                    <!-- COntact number -->
                    <a href="tel:+917092958830" class="text-[#302F5A] font-semibold"><i class="fa-solid fa-phone mr-2"></i>+91 70929 58830</a>
                    <a href="<?php echo esc_url($home . '#enquire'); ?>" class="hidden md:inline-flex items-center gap-2 bg-[#B3814E] text-white font-medium text-sm px-6 py-3 rounded-lg hover:bg-gold transition-colors">
                        Enquire Now <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
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
                <a href="<?php echo esc_url($home . '#enquire'); ?>" class="my-3 inline-flex items-center justify-center gap-2 bg-ink text-white font-medium text-sm px-6 py-3 rounded-lg">
                    Enquire Now <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>
            </nav>
        </div>
    </header>