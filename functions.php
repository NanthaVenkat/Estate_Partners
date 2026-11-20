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

/**
 * Include published posts and pages in front-end search results.
 *
 * @param WP_Query $query The main query.
 */
function estatepartners_search_posts_and_pages($query)
{
    if (is_admin() || ! $query->is_main_query() || ! $query->is_search()) {
        return;
    }

    if ('project' === $query->get('post_type')) {
        return;
    }

    $query->set('post_type', array('post', 'page'));
    $query->set('post_status', 'publish');
}
add_action('pre_get_posts', 'estatepartners_search_posts_and_pages');

/**
 * Search project titles, content, and location/developer metadata.
 *
 * @param WP_Query $query The main query.
 */
function estatepartners_prepare_project_search($query)
{
    if (is_admin() || ! $query->is_main_query() || ! $query->is_search() || 'project' !== $query->get('post_type')) {
        return;
    }

    $query->set('estatepartners_project_search', true);
    $query->set('estatepartners_search_tokens', estatepartners_project_search_tokens($query->get('s')));

    $type = sanitize_key((string) $query->get('property_type'));
    if ($type) {
        $tax_query = (array) $query->get('tax_query');
        foreach ($tax_query as $key => $clause) {
            if (is_array($clause) && isset($clause['taxonomy']) && 'property_type' === $clause['taxonomy']) {
                unset($tax_query[$key]);
            }
        }

        $tax_query[] = array(
            'taxonomy' => 'property_type',
            'field'    => 'slug',
            'terms'    => estatepartners_project_type_slugs($type),
        );
        $query->set('tax_query', $tax_query);
        $query->set('property_type', '');
    }
}
add_action('pre_get_posts', 'estatepartners_prepare_project_search', 9);

/**
 * Convert a search into useful tokens, omitting generic property/search words.
 *
 * @param string $raw Search text.
 * @return string[]
 */
function estatepartners_project_search_tokens($raw)
{
    $raw   = function_exists('mb_strtolower') ? mb_strtolower(wp_strip_all_tags((string) $raw)) : strtolower(wp_strip_all_tags((string) $raw));
    $words = preg_split('/[^\p{L}\p{N}]+/u', $raw, -1, PREG_SPLIT_NO_EMPTY);
    if (! is_array($words)) {
        return array();
    }
    $stop  = array(
        'land', 'lands', 'plot', 'plots', 'site', 'sites', 'layout', 'layouts',
        'flat', 'flats', 'apartment', 'apartments', 'apt', 'villa', 'villas',
        'house', 'houses', 'on', 'in', 'at', 'for', 'near', 'the', 'a', 'an',
        'of', 'to', 'with', 'and', 'from', 'coimbatore', 'cbe', 'kovai',
        'buy', 'sale', 'sell', 'find', 'me', 'my', 'best', 'new', 'project',
        'projects', 'property', 'properties', 'residential',
    );

    return array_values(array_unique(array_diff($words, $stop)));
}

/**
 * Return both common singular/plural slugs for project types.
 *
 * @param string $type Property type slug.
 * @return string[]
 */
function estatepartners_project_type_slugs($type)
{
    $aliases = array(
        'apartment'  => array('apartment', 'apartments'),
        'apartments' => array('apartment', 'apartments'),
        'villa'      => array('villa', 'villas'),
        'villas'     => array('villa', 'villas'),
        'plot'       => array('plot', 'plots'),
        'plots'      => array('plot', 'plots'),
    );

    return isset($aliases[$type]) ? $aliases[$type] : array($type);
}

/**
 * Search project text fields and configured location/developer metadata.
 *
 * @param string   $search Search SQL.
 * @param WP_Query $query  Current query.
 * @return string
 */
function estatepartners_project_search_sql($search, $query)
{
    if (! $query->get('estatepartners_project_search')) {
        return $search;
    }

    $tokens = (array) $query->get('estatepartners_search_tokens');
    if (! $tokens) {
        return '';
    }

    global $wpdb;
    $parts = array();
    foreach ($tokens as $token) {
        $like    = '%' . $wpdb->esc_like($token) . '%';
        $parts[] = $wpdb->prepare(
            "({$wpdb->posts}.post_title LIKE %s OR {$wpdb->posts}.post_excerpt LIKE %s OR {$wpdb->posts}.post_content LIKE %s OR EXISTS (
                SELECT 1 FROM {$wpdb->postmeta} ep_meta
                WHERE ep_meta.post_id = {$wpdb->posts}.ID
                AND ep_meta.meta_key IN ('project_location', 'project_developer')
                AND ep_meta.meta_value LIKE %s
            ))",
            $like,
            $like,
            $like,
            $like
        );
    }

    return ' AND (' . implode(' AND ', $parts) . ') ';
}
add_filter('posts_search', 'estatepartners_project_search_sql', 10, 2);

/**
 * Provide live project suggestions to the homepage search.
 */
function estatepartners_ajax_project_search_suggest()
{
    $raw = isset($_GET['q']) ? sanitize_text_field(wp_unslash($_GET['q'])) : '';
    $length = function_exists('mb_strlen') ? mb_strlen($raw) : strlen($raw);
    if ($length < 2) {
        wp_send_json_success(array('items' => array(), 'all_url' => ''));
    }

    $type = isset($_GET['type']) ? sanitize_key(wp_unslash($_GET['type'])) : '';
    $args = array(
        'post_type'                  => 'project',
        'post_status'                => 'publish',
        'posts_per_page'             => 6,
        's'                          => $raw,
        'estatepartners_project_search' => true,
        'estatepartners_search_tokens'  => estatepartners_project_search_tokens($raw),
        'no_found_rows'              => true,
        'ignore_sticky_posts'        => true,
    );

    if ($type) {
        $args['tax_query'] = array(array(
            'taxonomy' => 'property_type',
            'field'    => 'slug',
            'terms'    => estatepartners_project_type_slugs($type),
        ));
    }

    $selected_type = '';
    if ($type) {
        foreach (estatepartners_project_type_slugs($type) as $type_slug) {
            $selected_term = get_term_by('slug', $type_slug, 'property_type');
            if ($selected_term && ! is_wp_error($selected_term)) {
                $selected_type = $selected_term->name;
                break;
            }
        }
    }

    $query = new WP_Query($args);
    $items = array();
    while ($query->have_posts()) {
        $query->the_post();
        $terms   = get_the_terms(get_the_ID(), 'property_type');
        $items[] = array(
            'title'    => get_the_title(),
            'url'      => get_permalink(),
            'type'     => $selected_type ? $selected_type : (($terms && ! is_wp_error($terms)) ? $terms[0]->name : ''),
            'location' => (string) get_post_meta(get_the_ID(), 'project_location', true),
        );
    }
    wp_reset_postdata();

    $all = array('s' => $raw, 'post_type' => 'project');
    if ($type) {
        $all['property_type'] = $type;
    }

    wp_send_json_success(array(
        'items'   => $items,
        'all_url' => add_query_arg($all, home_url('/')),
    ));
}
add_action('wp_ajax_ep_search_suggest', 'estatepartners_ajax_project_search_suggest');
add_action('wp_ajax_nopriv_ep_search_suggest', 'estatepartners_ajax_project_search_suggest');

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

// Get count of projects in a property_type term (by slug)
function ep_get_type_count($slug) {
    $term = get_term_by('slug', $slug, 'property_type');
    return ($term && !is_wp_error($term)) ? (int) $term->count : 0;
}

// Shortcode: [type_count slug="villas"]
add_shortcode('type_count', function ($atts) {
    $atts = shortcode_atts(array('slug' => ''), $atts);
    return esc_html(ep_get_type_count($atts['slug']));
});


    /* =====================================================================
 * PART 1 - functions.php  (paste into your theme's functions.php)
 * ===================================================================== */

    // Change these two if your taxonomy differs.
    const EP_PROJECT_TAX = 'property_type';
    const EP_PER_PAGE    = 12;

    /**
     * Renders the cards grid + pagination. Used for the first page load AND by AJAX,
     * so both always output identical markup.
     */
    function ep_render_projects($paged = 1, $type = '')
    {
        $args = array(
            'post_type'      => 'project',
            'posts_per_page' => EP_PER_PAGE,
            'paged'          => max(1, (int) $paged),
        );

        if ($type && $type !== 'all') {
            $type_slug = sanitize_title($type);
            $type_terms = array(
                'apartment'  => array('apartment', 'apartments'),
                'apartments' => array('apartment', 'apartments'),
                'villa'      => array('villa', 'villas'),
                'villas'     => array('villa', 'villas'),
                'plot'       => array('plot', 'plots'),
                'plots'      => array('plot', 'plots'),
            );

            $args['tax_query'] = array(array(
                'taxonomy' => EP_PROJECT_TAX,
                'field'    => 'slug',
                'terms'    => isset($type_terms[$type_slug]) ? $type_terms[$type_slug] : array($type_slug),
            ));
        }

        $properties = new WP_Query($args);

        echo '<div class="project-pannel-wrr grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">';
        if ($properties->have_posts()) {
            while ($properties->have_posts()) {
                $properties->the_post();
                get_template_part('template-parts/template-properties-card');
            }
            wp_reset_postdata();
        } else {
            echo '<p class="col-span-full text-center text-[#444444]">No projects found.</p>';
        }
        echo '</div>';

        if ($properties->max_num_pages > 1) {
            echo '<nav class="pagination mt-12 flex justify-center" aria-label="Projects pagination">';
            echo paginate_links(array(
                'base'      => '%_%',                 // no get_pagenum_link(), so it works inside admin-ajax too
                'format'    => '?page=%#%',
                'current'   => max(1, (int) $paged),
                'total'     => $properties->max_num_pages,
                'prev_text' => '<i class="fa-solid fa-chevron-left"></i> Previous',
                'next_text' => 'Next <i class="fa-solid fa-chevron-right"></i>',
                'type'      => 'list',
            ));
            echo '</nav>';
        }
    }

    // AJAX endpoint (logged-in and guests)
    function ep_ajax_load_projects()
    {
        check_ajax_referer('ep_projects_nonce', 'nonce');

        $paged = isset($_POST['paged']) ? absint($_POST['paged']) : 1;
        $type  = isset($_POST['type']) ? sanitize_text_field(wp_unslash($_POST['type'])) : '';

        ob_start();
        ep_render_projects($paged, $type);
        wp_send_json_success(array('html' => ob_get_clean()));
    }
    add_action('wp_ajax_ep_load_projects', 'ep_ajax_load_projects');
    add_action('wp_ajax_nopriv_ep_load_projects', 'ep_ajax_load_projects');

/**
 * functions.php - helpers used by the property card.
 * They turn your existing ACF text into clean values the filter can use.
 */

/**
 * "3 BHK - Rs 88 L Onwards"   => bhk: ['3'],      price: 8800000
 * "2 & 3 BHK - Rs 1.2 Cr"     => bhk: ['2','3'],  price: 12000000
 * "Rs 15 L Onwards" (plots)   => bhk: [],         price: 1500000
 */
function ep_parse_price_text($text)
{
    $out  = array('bhk' => array(), 'price' => null);
    $text = trim((string) $text);
    if ($text === '') {
        return $out;
    }

    $rest = $text;
    if (preg_match('/^(.*?)\bBHK\b/is', $text, $m)) {
        if (preg_match_all('/\d+(?:\.\d+)?/', $m[1], $n)) {
            $out['bhk'] = array_values(array_unique($n[0]));
        }
        $rest = preg_replace('/^.*?\bBHK\b\s*[-–—:|]?\s*/isu', '', $text);
    }

    if (preg_match('/([\d,]+(?:\.\d+)?)\s*(Cr|Crore|Lakh|Lac|L|K)?\b/iu', $rest, $m)) {
        $num  = (float) str_replace(',', '', $m[1]);
        $unit = isset($m[2]) ? strtolower($m[2]) : '';

        if ($unit === 'cr' || $unit === 'crore') {
            $num *= 10000000;
        } elseif ($unit === 'l' || $unit === 'lac' || $unit === 'lakh') {
            $num *= 100000;
        } elseif ($unit === 'k') {
            $num *= 1000;
        }
        $out['price'] = (int) round($num);
    }

    return $out;
}

/**
 * Plot size text -> min/max in cents.
 * "2.5 - 5.5 Cents" => 2.5 / 5.5     "1200 sq.ft" => 2.75 / 2.75     "2 Acres" => 200 / 200
 */
function ep_parse_cents($size)
{
    $size = (string) $size;
    if (!preg_match_all('/\d+(?:\.\d+)?/', $size, $n) || empty($n[0])) {
        return null;
    }

    $nums = array_map('floatval', $n[0]);
    $mul  = 1;
    if (stripos($size, 'sq') !== false) {
        $mul = 1 / 435.6;      // 1 cent = 435.6 sq.ft
    } elseif (stripos($size, 'acre') !== false) {
        $mul = 100;            // 1 acre = 100 cents
    }

    return array('min' => round(min($nums) * $mul, 2), 'max' => round(max($nums) * $mul, 2));
}

/**
 * "Vadavalli (Maharani Avenue)" => "Vadavalli"   |   "Kalapatti, Coimbatore" => "Kalapatti"
 */
function ep_card_area($location)
{
    $parts = preg_split('/[,(]/', (string) $location);
    return trim($parts[0]);
}

/**
 * functions.php - "Amenity" custom post type, shared with your existing property_type taxonomy.
 */

add_action('init', function () {

    register_post_type('amenity', array(
        'labels' => array(
            'name'               => 'Amenities',
            'singular_name'      => 'Amenity',
            'add_new'            => 'Add Amenity',
            'add_new_item'       => 'Add New Amenity',
            'edit_item'          => 'Edit Amenity',
            'new_item'           => 'New Amenity',
            'view_item'          => 'View Amenity',
            'search_items'       => 'Search Amenities',
            'not_found'          => 'No amenities found',
            'not_found_in_trash' => 'No amenities found in Trash',
            'all_items'          => 'All Amenities',
            'menu_name'          => 'Amenities',
        ),
        'public'              => false,   // no single pages / archive: amenities are only shown inside other pages
        'publicly_queryable'  => false,
        'exclude_from_search' => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_rest'        => true,
        'menu_position'       => 21,
        'menu_icon'           => 'dashicons-awards',
        'supports'            => array('title', 'page-attributes'), // title = amenity name, "Order" = display order
        'has_archive'         => false,
        'rewrite'             => false,
    ));

    // Reuse the property_type taxonomy (Plots / Apartments / Villas) on amenities.
    // Priority 20 so it runs after the taxonomy is registered.
    register_taxonomy_for_object_type('property_type', 'amenity');
}, 20);

/**
 * Get amenities.
 *   ep_get_amenities(array('type' => 'apartments'))      -> amenities tagged Apartments
 *   ep_get_amenities(array('ids'  => array(12, 15, 18))) -> exactly these (e.g. one project's amenities)
 */
function ep_get_amenities($args = array())
{
    if (isset($args['ids']) && empty($args['ids'])) {
        return new WP_Query(array('post__in' => array(0))); // asked for specific ones but none chosen: return nothing
    }

    $q = array(
        'post_type'      => 'amenity',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'        => array('menu_order' => 'ASC', 'title' => 'ASC'),
        'no_found_rows'  => true,
    );

    if (!empty($args['type'])) {
        $q['tax_query'] = array(array(
            'taxonomy' => 'property_type',
            'field'    => 'slug',
            'terms'    => (array) $args['type'],
        ));
    }

    if (!empty($args['ids'])) {
        $q['post__in'] = array_map('absint', (array) $args['ids']);
        $q['orderby']  = 'post__in';
    }

    return new WP_Query($q);
}