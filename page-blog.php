<?php
/**
 * Blog page template for the /blog/ page slug.
 *
 * @package EstatePartners
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();
get_template_part('template-parts/content', 'blog-listing');
get_footer();
