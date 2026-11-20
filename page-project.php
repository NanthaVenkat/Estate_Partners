<?php

/**
 * Template Name: Projects Page
 *
 *
 * @package EstatePartners
 */

get_header();
?>

<section class="relative py-16 sm:py-20 lg:py-24 bg-[#FCF7F3] scroll-mt-24 bg-cover bg-center min-h-[490px] flex items-center
" style="background-image: url(http://localhost/estate_partners/wp-content/uploads/2026/11/app_projects_banner-scaled.jpg);">
    <!-- overlay -->
    <div class="absolute inset-0 bg-linear-to-r from-black/80 via-black/40 to-transparent"></div>
    <div class="container mx-auto relative px-4 sm:px-6 lg:px-8 space-y-10 z-50">
        <div class="lg:max-w-xl text-white">
            <h2 class="hero-title font-prata leading-snug">Apartments</h2>
            <p class="text-white text-2xl lg:text-3xl mb-4">Premium Residential Apartments as Your Dream Home</p>
        </div>
</section>

<!-- ======================= STATUS / TIMELINE ======================= -->
<section id="status" class="py-16 sm:py-20 lg:py-24 scroll-mt-24">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 space-y-10 grid grid-cols-[350px_1fr] gap-6">
        <div class="border border-[#B3814E80] rounded-xl p-4 h-full">
            <h4 class="text-lg font-semibold text-[#404042] mb-6">Filters</h4>
            <!-- properties -->
            <p class="text-[#404042] px-4 py-2 rounded-sm bg-[#FCF7F3] mb-4">No.of Bedrooms</p>
            <div class="project-tab-wrr flex flex-wrap gap-3 reveal" role="tablist" aria-label="Project category">
                <button type="button" class="project-tab active border border-white/30 rounded-full px-8 py-2 text-sm font-semibold tracking-wider" data-target="panel-all" role="tab" aria-selected="true">All Projects</button>
                <button type="button" class="project-tab border border-gold/30 bg-white rounded-full px-8 py-2 text-sm font-semibold tracking-wider" data-target="apartment" role="tab" aria-selected="false">Apartments</button>
                <button type="button" class="project-tab border border-gold/30 bg-white rounded-full px-8 py-2 text-sm font-semibold tracking-wider" data-target="villas" role="tab" aria-selected="false">Villas</button>
                <button type="button" class="project-tab border border-gold/30 bg-white rounded-full px-8 py-2 text-sm font-semibold tracking-wider" data-target="plots" role="tab" aria-selected="false">Plots</button>
            </div>

            <!-- Location -->
            <p class="text-[#404042] px-4 py-2 rounded-sm bg-[#FCF7F3] mb-4">Location</p>
            <div class="project-tab-wrr flex flex-wrap gap-3 reveal" role="tablist" aria-label="Project category">
                <button type="button" class="project-tab active border border-white/30 rounded-full px-8 py-2 text-sm font-semibold tracking-wider" data-target="kalapatti" role="tab" aria-selected="true">Kalapatti</button>
                <button type="button" class="project-tab border border-gold/30 bg-white rounded-full px-8 py-2 text-sm font-semibold tracking-wider" data-target="saravanampatti" role="tab" aria-selected="false">Saravanampatti</button>
                <button type="button" class="project-tab border border-gold/30 bg-white rounded-full px-8 py-2 text-sm font-semibold tracking-wider" data-target="ganapathy" role="tab" aria-selected="false">Ganapathy</button>
                <button type="button" class="project-tab border border-gold/30 bg-white rounded-full px-8 py-2 text-sm font-semibold tracking-wider" data-target="vadavalli" role="tab" aria-selected="false">Vadavalli</button>
            </div>
        </div>

        <!-- Ongoing -->
        <div class="project-pannel-wrr grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
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
