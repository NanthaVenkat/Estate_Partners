<?php 
$testimonialTitle = get_field('testimonials_title');
$testimonialHeading = get_field('testimonials_heading');
?>
<section id="testimonials" class="py-16 sm:py-20 lg:py-24 bg-[#302F5A] scroll-mt-24">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-[30%_70%]">
        <div class="text-white max-w-4xl mx-auto mb-12 reveal">
            <p class="font-bold uppercase tracking-[0.18em] text-sm mb-3"><?php echo $testimonialTitle; ?></p>
            <h2 class="font-prata text-3xl sm:text-4xl leading-tight"><?php echo $testimonialHeading; ?></h2>
        </div>

        <div class="swiper testimonials-swiper reveal w-full h-max">
            <div class="swiper-wrapper">

                <?php if (have_rows('testimonials')) : ?>
                    <?php while (have_rows('testimonials')) : the_row(); ?>

                        <?php
                        // Move these INSIDE the loop
                        $profile_picture = get_sub_field('reviewer_profile');
                        $review_content = get_sub_field('review');
                        $reviewer_name = get_sub_field('reviewer_name');
                        $reviewer_details = get_sub_field('reviewer_details');
                        ?>

                        <figure class="swiper-slide bg-white rounded-2xl border border-ink-line p-7 sm:p-8 shadow-sm flex flex-col">
                            <div class="text-gold text-6xl text-gold/50 mb-4">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>
                            <blockquote class="text-[#302F5A]-soft leading-relaxed flex-1">
                                <?php echo esc_html($review_content); ?>
                            </blockquote>
                            <figcaption class="mt-6 flex items-center gap-4 border-t border-[#D4D4D4] pt-6">
                                <?php if ($profile_picture) : ?>
                                    <img src="<?php echo esc_url($profile_picture['url']); ?>"
                                        alt="<?php echo esc_attr($reviewer_name); ?>"
                                        class="w-12 h-12 rounded-full object-cover"
                                        loading="lazy" />
                                <?php else: ?>
                                <img src="http://localhost/estate_partners/wp-content/uploads/2026/11/avatar.webp"
                                        alt="<?php echo esc_attr($reviewer_name); ?>"
                                        class="w-12 h-12 rounded-full object-cover"
                                        loading="lazy" />
                                <?php endif; ?>
                                <span>
                                    <span class="block font-semibold"><?php echo esc_html($reviewer_name); ?></span>
                                    <span class="block text-xs text-[#302F5A]-muted"><?php echo esc_html($reviewer_details); ?></span>
                                </span>
                            </figcaption>
                        </figure>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
            <div class="swiper-pagination"></div>
            <div class="flex gap-6">
                <div class="swiper-button-prev !relative !left-0 !mt-0 hidden md:flex"></div>
                <div class="swiper-button-next !relative !right-0 !mt-0 hidden md:flex"></div>
            </div>
        </div>
    </div>
</section>