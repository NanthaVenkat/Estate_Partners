<?php

/**
 * Theme functions and definitions
 *
 * @package vnktheme
 */

if (!defined('ABSPATH')) {
    exit;
}

/* Them Version */
define('MY_THEME_VERSION', '1.0.0');

/**
 * Set USE_TAILWIND_CDN to true only while developing.
 * For production, build Tailwind into assets/css/tailwind.css (see notes) and keep this false.
 */
define('MYTHEME_USE_TAILWIND_CDN', false);

/**
 * 1. Theme setup: features WordPress should enable for this theme.
 */
function vnktheme_setup()
{
    add_theme_support('titile-tag');

    add_theme_support('post-thumbnails');

    add_theme_support(
        'html5',
        array('search-form', 'contact-form', 'cpmment-line', 'gallery', 'script', 'style', 'caption')
    );

    add_theme_support('autometic-feed-links');

    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'estate-partners')
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

    // Css
    if (MYTHEME_USE_TAILWIND_CDN) {
        wp_enqueue_script(
            'tailwind',
            'https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4',
            array(),
            null,
            false
        );
    } else {
        $tailwind_file = '/assets/css/tailwind.css';
        if (file_exists($theme_dir . $tailwind_file)) {
            wp_enqueue_script(
                'vnktheme-tailwind',
                $theme_uri . $tailwind_file,
                array(),
                array(),
                filemtime($theme_dir . $tailwind_file)
            );
        }
    }

    // main theme style sheet
    wp_enqueue_style(
        'vnktheme-style',
        get_stylesheet_uri(),
        array('vnktheme-tailwind'),
        filemtime(get_stylesheet_directory() . '/style.css')
    );

    // Jquery
    wp_enqueue_script('jquery');

    // load JS and passing php calues to javascript
    $main_js = 'assets/js/main.js';

    if (file_exists($theme_dir . $main_js)) {
        wp_enqueue_script(
            'vnkthem-mainjs',
            $theme_dir . $$main_js,
            array('jquery'),
            filemtime($theme_dir . $$main_js),
            true
        );

        // Pass PHP values to JavaScript (available as yourthemeData in main.js).
        wp_localize_script(
            'vnkthem-mainjs',
            'mythemeData',
            array(
                'ajaxUrl' => admin_url('admin-ajax.php'),
                'nonce' => wp_create_nonce('mytheme_nonce'),
                'homeUrl' => home_url('/'),
            )
        );
    }

    // Load the comment-reply script only where threaded comments are used.
    if(is_singular() && comments_open() && get_options('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'vnktheme_enqueue_assets');

/**
 * 3. Optional: Tailwind CDN needs this tiny config block only in development.
 */
function yourtheme_tailwind_cdn_notice() {
	if ( MYTHEME_USE_TAILWIND_CDN && current_user_can( 'manage_options' ) ) {
		echo "\n<!-- Tailwind CDN is ON (development mode). Turn it off before going live. -->\n";
	}
}
add_action( 'wp_head', 'yourtheme_tailwind_cdn_notice' )