    <!-- Developer -->
    <section class="bg-brand-cream py-16 sm:py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-[auto_1fr_1.3fr] gap-6 items-center pb-8 border-b border-ink-line">
                <span
                    class="w-20 h-20 rounded-full bg-white shadow inline-flex items-center justify-center overflow-hidden">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/image-254.png"
                        alt="Infinium Realty" class="w-14" loading="lazy" />
                </span>
                <div>
                    <p class="text-gold font-semibold uppercase text-xs tracking-wide">Developer</p>
                    <h2 class="font-prata text-3xl text-[#302F5A]">Infinium Realty</h2>
                </div>
                <p class="text-xs leading-relaxed">Infinium Realty focuses on developing premium residential properties
                    in Coimbatore, with projects designed around location, planning and long-term usability. Infinium
                    Altitude reflects this approach, combining modern architecture with a comprehensive amenity offering
                    across a well-connected Sathy Road location.</p>
            </div>

            <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-12 mt-12">
                <h2 class="font-semibold text-center sm:col-span-2 xl:col-span-3 text-3xl text-[#302F5A]">OTHER PROJECTS
                </h2>
                <?php
                $properties = new WP_Query(array(
                    'post_type' => 'project',
                    'posts_per_page' => 3,
                ));

                if ($properties->have_posts()):
                    while ($properties->have_posts()):
                        $properties->the_post();
                        get_template_part('template-parts/template-properties-card');
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

