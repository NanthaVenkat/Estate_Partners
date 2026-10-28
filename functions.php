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

/**
 * Register the dedicated blog URL and its pagination routes.
 */
function estatepartners_register_blog_routes()
{
    add_rewrite_rule('^blog/page/([0-9]+)/?$', 'index.php?estatepartners_blog=1&paged=$matches[1]', 'top');
    add_rewrite_rule('^blog/?$', 'index.php?estatepartners_blog=1', 'top');

    if ('1' !== get_option('estatepartners_blog_routes_flushed')) {
        flush_rewrite_rules(false);
        update_option('estatepartners_blog_routes_flushed', '1');
    }
}
add_action('init', 'estatepartners_register_blog_routes');

/**
 * Allow WordPress to recognize the dedicated blog route query variable.
 *
 * @param array $query_vars Public query variables.
 * @return array
 */
function estatepartners_blog_query_vars($query_vars)
{
    $query_vars[] = 'estatepartners_blog';

    return $query_vars;
}
add_filter('query_vars', 'estatepartners_blog_query_vars');

/**
 * Load published posts for the dedicated blog route.
 *
 * @param WP_Query $query The main query.
 */
function estatepartners_prepare_blog_route($query)
{
    if (is_admin() || ! $query->is_main_query() || ! $query->get('estatepartners_blog')) {
        return;
    }

    $query->set('post_type', 'post');
    $query->set('post_status', 'publish');
    $query->set('posts_per_page', (int) get_option('posts_per_page', 10));
    $query->is_home = true;
    $query->is_404  = false;
}
add_action('pre_get_posts', 'estatepartners_prepare_blog_route');

/**
 * Use the blog listing template for the dedicated blog route.
 *
 * @param string $template Current template path.
 * @return string
 */
function estatepartners_blog_route_template($template)
{
    if (get_query_var('estatepartners_blog')) {
        return get_template_directory() . '/page-blog.php';
    }

    return $template;
}
add_filter('template_include', 'estatepartners_blog_route_template');

// 1. Register Projects Custom Post Type
function register_projects_cpt() {
    register_post_type('project', array(
        'labels' => array(
            'name'          => 'Projects',
            'singular_name' => 'Project',
            'add_new_item'  => 'Add New Project',
            'edit_item'     => 'Edit Project',
            'all_items'     => 'All Projects',
        ),
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-building',
        'supports'     => array(
            'title',
            'editor',
            'thumbnail',
        ),
        'show_in_rest' => true,
        'rewrite'      => array(
            'slug' => 'projects',
        ),
    ));
}
add_action('init', 'register_projects_cpt');


// 2. Register Property Type Taxonomy
function register_property_type_taxonomy() {
    register_taxonomy('property_type', array('project'), array(
        'labels' => array(
            'name'          => 'Property Types',
            'singular_name' => 'Property Type',
            'all_items'     => 'All Property Types',
            'edit_item'     => 'Edit Property Type',
            'add_new_item'  => 'Add New Property Type',
        ),
        'public'            => true,
        'hierarchical'      => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => array(
            'slug' => 'property-type',
        ),
    ));
}
add_action('init', 'register_property_type_taxonomy');
