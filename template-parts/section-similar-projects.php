
<?php

// Usage: get_template_part('template-parts/section-similar-projects', null, array('type' => 'villas'));
$type = isset($args['type']) ? sanitize_title($args['type']) : '';

$query_args = array(
    'post_type'      => 'project',
    'posts_per_page' => -1,
);

// Only this type (apartments / villas / plots)
if ($type) {
    $query_args['tax_query'] = array(
        array(
            'taxonomy' => 'property_type',
            'field'    => 'slug',
            'terms'    => $type,
        ),
    );
}

// On a single project page, don't show the project itself
if (is_singular('project')) {
    $query_args['post__not_in'] = array(get_the_ID());
}

$properties = new WP_Query($query_args);

if ($properties->have_posts()) : ?>
    <section class="bg-white py-16 sm:py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-gold font-bold uppercase tracking-[0.18em] text-sm mb-3">for you</p>
                <h2 class="font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight">Similar Projects</h2>
            </div>

            <div class="swiper similar-projects-swiper mt-12">
                <div class="swiper-wrapper">
                    <?php while ($properties->have_posts()) : $properties->the_post(); ?>
                        <div class="swiper-slide h-auto">
                            <?php get_template_part('template-parts/template-similar-properties-card'); ?>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>

                <div class="flex items-center justify-between mt-8">
                    <div class="similar-projects-pagination swiper-pagination !static !w-auto"></div>
                    <div class="flex items-center gap-3">
                        <button class="similar-projects-prev w-12 h-12 rounded-full border border-[#302F5A]/30 inline-flex items-center justify-center hover:bg-[#302F5A] hover:text-white transition-colors" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></button>
                        <button class="similar-projects-next w-12 h-12 rounded-full border border-[#302F5A]/30 inline-flex items-center justify-center hover:bg-[#302F5A] hover:text-white transition-colors" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>