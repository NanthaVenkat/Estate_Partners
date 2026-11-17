<?php

/**
 * Template Name: Villas Page
 *
 * About Us page: hero + stats, who we are, vision/mission/objective, what sets us apart,
 * values, journey stats, projects carousel (Swiper), why choose us carousel (Swiper),
 * process carousel (Swiper), verification, FAQ and call-to-action strip.
 *
 * Applies automatically to a page with the slug "about", or choose "About"
 * in Page Attributes > Template.
 *
 * @package EstatePartners
 */

get_header();
?>

<section id="status" class="py-16 sm:py-20 lg:py-24 bg-[#FCF7F3] scroll-mt-24">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
        <div class="text-center max-w-4xl mx-auto reveal">
            <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">explore our projects</p>
            <h2 class="font-prata text-3xl sm:text-4xl leading-tight text-[#302F5A]">Our Signature Developments</h2>
            <!-- <p class="mt-4 text-[#444444] leading-relaxed">Explore handpicked apartments, villas and residential plots across Coimbatore. Each project gives you the information you need to shortlist with
                confidence — including location, price, configurations, amenities, approvals, floor plans, availability and possession details</p> -->
        </div>

        <div class="project-pannel-wrr grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- Project post type -->
            <?php
            $properties = new WP_Query(array(
                'post_type'      => 'project',
                'posts_per_page' => -1,
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'property_type',
                        'field'    => 'slug',
                        'terms'    => array('villa', 'villas'),
                    ),
                ),
            ));

            if ($properties->have_posts()):
                while ($properties->have_posts()): $properties->the_post();
                    get_template_part('template-parts/template-properties-card');
                endwhile;
                wp_reset_postdata();
            else:
                echo '<p class="col-span-full text-center text-gray-500 py-10">No villas projects found.</p>';
            endif;
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
