<?php

/**
 * Template Name: Projects Page
 *
 *
 * @package EstatePartners
 */

get_header();
?>

<!-- ======================= STATUS / TIMELINE ======================= -->
<section id="status" class="py-16 sm:py-20 lg:py-24 bg-[#FCF7F3] scroll-mt-24">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
        <div class="text-center max-w-4xl mx-auto reveal">
            <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">explore our projects</p>
            <h2 class="font-prata text-3xl sm:text-4xl leading-tight text-[#302F5A]">Featured Residential Projects in Coimbatore</h2>
            <p class="mt-4 text-[#444444] leading-relaxed">Explore handpicked apartments, villas and residential plots across Coimbatore. Each project gives you the information you need to shortlist with
                confidence — including location, price, configurations, amenities, approvals, floor plans, availability and possession details</p>
        </div>

        <div class="project-tab-wrr flex flex-wrap justify-center gap-3 reveal" role="tablist" aria-label="Project category">
            <button type="button" class="project-tab active border border-white/30 rounded-full px-8 py-2 text-sm font-semibold tracking-wider" data-target="panel-all" role="tab" aria-selected="true">All Projects</button>
            <button type="button" class="project-tab border border-gold/30 bg-white rounded-full px-8 py-2 text-sm font-semibold tracking-wider" data-target="apartment" role="tab" aria-selected="false">Apartments</button>
            <button type="button" class="project-tab border border-gold/30 bg-white rounded-full px-8 py-2 text-sm font-semibold tracking-wider" data-target="villas" role="tab" aria-selected="false">Villas</button>
            <button type="button" class="project-tab border border-gold/30 bg-white rounded-full px-8 py-2 text-sm font-semibold tracking-wider" data-target="plots" role="tab" aria-selected="false">Plots</button>
        </div>

        <!-- Ongoing -->
        <div class="project-pannel-wrr grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- Project post type -->
            <?php
            $properties = new WP_Query(array(
                'post_type' => 'project',
                'posts_per_page' => -1,
            ));

            if ($properties->have_posts()):
                while ($properties->have_posts()): $properties->the_post();
                    get_template_part('template-parts/template-properties-card');
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

    </div>
</section>

<?php
get_footer();
