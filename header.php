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
    <?php wp_head(); ?>
</head>

<body <?php body_class('font-poppins text-ink antialiased bg-white'); ?>>
    <?php wp_body_open(); ?>

    <!-- ======================= TOP BAR ======================= -->
    <div class="bg-ink text-white text-xs sm:text-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2 flex items-center justify-between gap-4">
            <a href="tel:+917092958830" class="inline-flex items-center gap-2 hover:text-gold-light transition-colors">
                <i class="fa-solid fa-phone text-gold"></i>
                <span class="font-medium tracking-wide">+91 70929 58830</span>
            </a>
            <div class="flex items-center gap-4">
                <a href="<?php echo esc_url($home . '#insights'); ?>" class="hidden sm:inline hover:text-gold-light transition-colors"><?php esc_html_e('Blog', 'your-theme-textdomain'); ?></a>
                <a href="<?php echo esc_url($home . '#contact'); ?>" class="hidden sm:inline hover:text-gold-light transition-colors"><?php esc_html_e('Contact Us', 'your-theme-textdomain'); ?></a>
                <span class="hidden sm:inline text-white/30">|</span>
                <div class="flex items-center gap-3">
                    <a href="#" aria-label="Facebook" class="hover:text-gold-light transition-colors"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram" class="hover:text-gold-light transition-colors"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn" class="hover:text-gold-light transition-colors"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" aria-label="YouTube" class="hover:text-gold-light transition-colors"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================= HEADER ======================= -->
    <header id="site-header" class="sticky top-0 z-50 bg-white/95 backdrop-blur border-b border-ink-line">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20 gap-4">
                <!-- Logo -->
                <a href="<?php echo esc_url($home); ?>" class="flex items-center gap-3 shrink-0" aria-label="<?php echo esc_attr(get_bloginfo('name')); ?> home">
                    <img src="<?php echo esc_url($img_uri . '/logo.png'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?> logo" class="h-10 sm:h-12 w-auto object-contain" />
                </a>

                <!-- Desktop nav -->
                <nav class="hidden lg:flex items-center gap-8 text-[15px] font-medium" aria-label="Primary">
                    <a href="<?php echo esc_url($home . '#home'); ?>" class="nav-link active hover:text-gold transition-colors">Home</a>
                    <a href="<?php echo esc_url($home . '#about'); ?>" class="nav-link hover:text-gold transition-colors">About Us</a>
                    <a href="<?php echo esc_url($home . '#projects'); ?>" class="nav-link hover:text-gold transition-colors">Projects</a>
                    <a href="<?php echo esc_url($home . '#types'); ?>" class="nav-link hover:text-gold transition-colors">Apartments</a>
                    <a href="<?php echo esc_url($home . '#types'); ?>" class="nav-link hover:text-gold transition-colors">Villas</a>
                    <a href="<?php echo esc_url($home . '#locations'); ?>" class="nav-link hover:text-gold transition-colors">Locations</a>
                    <a href="<?php echo esc_url($home . '#insights'); ?>" class="nav-link hover:text-gold transition-colors">Blog</a>
                </nav>

                <!-- Actions -->
                <div class="flex items-center gap-2 sm:gap-3">
                    <a href="<?php echo esc_url($home . '#find'); ?>" aria-label="Search properties" class="hidden sm:inline-flex w-11 h-11 items-center justify-center rounded-full border border-ink-line hover:border-gold hover:text-gold transition-colors">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <a href="<?php echo esc_url($home . '#contact'); ?>" aria-label="Favourite projects" class="relative hidden sm:inline-flex w-11 h-11 items-center justify-center rounded-full border border-ink-line hover:border-gold hover:text-gold transition-colors">
                        <i class="fa-regular fa-heart"></i>
                        <span class="absolute -top-1 -right-1 w-5 h-5 rounded-full bg-brand-red text-white text-[11px] font-semibold inline-flex items-center justify-center">3</span>
                    </a>
                    <a href="<?php echo esc_url($home . '#enquire'); ?>" class="hidden md:inline-flex items-center gap-2 bg-ink text-white font-medium text-sm px-6 py-3 rounded-lg hover:bg-gold transition-colors">
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
                <a href="<?php echo esc_url($home . '#home'); ?>" class="py-3 hover:text-gold">Home</a>
                <a href="<?php echo esc_url($home . '#about'); ?>" class="py-3 hover:text-gold">About Us</a>
                <a href="<?php echo esc_url($home . '#projects'); ?>" class="py-3 hover:text-gold">Projects</a>
                <a href="<?php echo esc_url($home . '#types'); ?>" class="py-3 hover:text-gold">Apartments</a>
                <a href="<?php echo esc_url($home . '#types'); ?>" class="py-3 hover:text-gold">Villas</a>
                <a href="<?php echo esc_url($home . '#locations'); ?>" class="py-3 hover:text-gold">Locations</a>
                <a href="<?php echo esc_url($home . '#insights'); ?>" class="py-3 hover:text-gold">Blog</a>
                <a href="<?php echo esc_url($home . '#contact'); ?>" class="py-3 hover:text-gold">Contact Us</a>
                <a href="<?php echo esc_url($home . '#enquire'); ?>" class="my-3 inline-flex items-center justify-center gap-2 bg-ink text-white font-medium text-sm px-6 py-3 rounded-lg">
                    Enquire Now <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>
            </nav>
        </div>
    </header>