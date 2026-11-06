<?php

/**
 * Template Name: Apartment Landing Page
 * Apartment project landing page: Infinium Altitude, Ganapathy.
 *
 * Name / location / price / phone are pulled from the project's ACF fields when filled.
 * Images go in /assets/images/apartment/ (file names used below are placeholders).
 *
 * @package EstatePartners
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<?php
get_template_part('template-parts/property-landing/styles');
?>
<main>

    <?php
    get_template_part('template-parts/property-landing/hero');
    get_template_part('template-parts/property-landing/feature-strip');
    get_template_part('template-parts/property-landing/sticky-tabs');
    get_template_part('template-parts/property-landing/overview');
    get_template_part('template-parts/property-landing/about');
    get_template_part('template-parts/property-landing/investment-location');
    get_template_part('template-parts/property-landing/location-advantage');
    get_template_part('template-parts/property-landing/project-guidance');
    get_template_part('template-parts/property-landing/why-choose');
    get_template_part('template-parts/property-landing/amenities');
    get_template_part('template-parts/property-landing/gallery');
    get_template_part('template-parts/property-landing/master-plan');
    get_template_part('template-parts/property-landing/floor-plans');
    get_template_part('template-parts/property-landing/floor-plan-tabs');
    get_template_part('template-parts/property-landing/nested-tab-script');
    get_template_part('template-parts/property-landing/specifications');
    get_template_part('template-parts/property-landing/location-benefits');
    get_template_part('template-parts/property-landing/buyer-journey');
    get_template_part('template-parts/property-landing/ownership-vs-investment');
    get_template_part('template-parts/property-landing/buyer-guidance');
    get_template_part('template-parts/property-landing/testimonials');
    get_template_part('template-parts/property-landing/supported-by');
    get_template_part('template-parts/property-landing/financing');
    get_template_part('template-parts/property-landing/contact-guidance');
    get_template_part('template-parts/property-landing/developer');
    get_template_part('template-parts/property-landing/nearby-projects');
    get_template_part('template-parts/property-landing/calculators');
    get_template_part('template-parts/property-landing/faq');
    ?>
</main>
<?php
get_template_part('template-parts/property-landing/floating-whatsapp');
get_template_part('template-parts/property-landing/scripts');
?>

<?php get_footer(); ?>