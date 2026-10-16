<?php

/**
 * Theme functions and definitions
 *
 * @package MyThemeName
 */

if (! defined('ABSPATH')) {
    exit; // Block direct access to this file.
}

/**
 * Theme version. Bump it when you ship changes so browsers refresh cached files.
 */
define('MYTHEME_VERSION', '1.0.0');

/**
 * 1. Theme setup: features WordPress should enable for this theme.
 */
function vnktheme_setup()
{
    // Let WordPress manage the <title> tag.
    add_theme_support('title-tag');

    // Enable featured images (needed for has_post_thumbnail()).
    add_theme_support('post-thumbnails');

    // Output valid HTML5 markup for core elements.
    add_theme_support(
        'html5',
        array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script')
    );

    // Add RSS feed links to <head>.
    add_theme_support('automatic-feed-links');

    // Register a navigation menu (print it with wp_nav_menu() in header.php).
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'vnktheme-textdomain'),
        )
    );
}
add_action('after_setup_theme', 'vnktheme_setup');

/**
 * 2. Enqueue styles and scripts.
 */
function vnktheme_enqueue_assets()
{

    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    /*
	 * ---- CSS ----
	 */

    // Google Fonts (Prata + Poppins).
    wp_enqueue_style(
        'vnktheme-fonts',
        'https://fonts.googleapis.com/css2?family=Prata&family=Poppins:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    // Font Awesome.
    wp_enqueue_style(
        'vnktheme-fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css',
        array(),
        '6.5.2'
    );

    // Swiper CSS.
    wp_enqueue_style(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),
        '11'
    );

    // Main theme stylesheet (style.css in the theme root): your own custom CSS
    // (.nav-link, .social-btn, .footer-link, etc.). Loads last so it can override the rest.
    wp_enqueue_style(
        'vnktheme-style',
        get_stylesheet_uri(),
        array('vnktheme-fontawesome', 'swiper'),
        filemtime(get_stylesheet_directory() . '/style.css')
    );

    /*
	 * ---- JavaScript ----
	 */

    // jQuery: WordPress already bundles it. Just list 'jquery' as a dependency.
    // (Do not load jQuery from a CDN; it can break plugins.)
    wp_enqueue_script('jquery');

    // Tailwind CSS v4 browser CDN.
    wp_enqueue_script(
        'vnktheme-tailwind',
        'https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4',
        array(),
        null,
        false
    );

    // Swiper JS (footer).
    wp_enqueue_script(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        '11',
        true
    );

    // GSAP and ScrollTrigger power scroll-based animations.
    wp_enqueue_script(
        'gsap',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js',
        array(),
        '3.12.5',
        true
    );
    wp_enqueue_script(
        'gsap-scrolltrigger',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js',
        array('gsap'),
        '3.12.5',
        true
    );

    // Your custom scripts, loaded in the footer, after their dependencies.
    $main_js = '/assets/js/main.js';
    if (file_exists($theme_dir . $main_js)) {
        wp_enqueue_script(
            'vnktheme-main',
            $theme_uri . $main_js,
            array('jquery', 'swiper', 'gsap-scrolltrigger'),
            filemtime($theme_dir . $main_js),
            true // true = load in footer.
        );

        // Pass PHP values to JavaScript (available as vnkthemeData in main.js).
        wp_localize_script(
            'vnktheme-main',
            'vnkthemeData',
            array(
                'ajaxUrl' => admin_url('admin-ajax.php'),
                'nonce'   => wp_create_nonce('vnktheme_nonce'),
                'homeUrl' => home_url('/'),
            )
        );
    }

    // Load the comment-reply script only where threaded comments are used.
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'vnktheme_enqueue_assets');
