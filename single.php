<?php

/**
 * The template for displaying single blog posts.
 *
 * @package EstatePartners
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main bg-white">
    <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class('py-10 sm:py-16'); ?>>
            <div class="max-w-[90rem] mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <nav class="mb-8 text-sm text-[#6B6B6B]" aria-label="<?php esc_attr_e('Breadcrumb', 'estatepartners'); ?>">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-gold"><?php esc_html_e('Home', 'estatepartners'); ?></a>
                            <span class="mx-2" aria-hidden="true">/</span>
                            <?php
                            $posts_page_id = (int) get_option('page_for_posts');
                            if ($posts_page_id) :
                            ?>
                                <a href="<?php echo esc_url(get_permalink($posts_page_id)); ?>" class="hover:text-gold"><?php esc_html_e('Blog', 'estatepartners'); ?></a>
                            <?php else : ?>
                                <span><?php esc_html_e('Blog', 'estatepartners'); ?></span>
                            <?php endif; ?>
                        </nav>
                <?php
                        $categories = get_the_category();
                        if ($categories) :
                        ?>
                            <p class="mb-3 text-xs font-semibold uppercase tracking-[0.16em] text-gold">
                                <?php echo esc_html(implode(' · ', wp_list_pluck($categories, 'name'))); ?>
                            </p>
                        <?php endif; ?>

                        <h1 class="font-prata text-3xl leading-tight text-[#302F5A] sm:text-4xl lg:text-5xl">
                            <?php the_title(); ?>
                        </h1>
                        <div class="mt-5 mb-5 flex flex-wrap items-center gap-x-4 gap-y-2 text-sm text-[#6B6B6B]">
                            <span><?php the_author(); ?></span>
                            <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>"><?php echo esc_html(get_the_date()); ?></time>
                        </div>
                <div class="grid items-start gap-10 lg:grid-cols-[minmax(0,1fr)_20rem] lg:gap-12">
                    <div class="min-w-0">

                        <?php if (has_post_thumbnail()) : ?>
                            <figure class="mt-8 overflow-hidden rounded-2xl">
                                <?php the_post_thumbnail('large', array('class' => 'h-auto max-h-[35rem] w-full object-cover')); ?>
                            </figure>
                        <?php endif; ?>

                        <style>
                            .blog-content {
                                color: #444;
                                font-size: 1rem;
                                line-height: 1.8;
                            }

                            .blog-content>*+* {
                                margin-top: 1.25rem;
                            }

                            .blog-content h2,
                            .blog-content h3,
                            .blog-content h4 {
                                color: #302f5a;
                                font-family: Prata, serif;
                                line-height: 1.3;
                            }

                            .blog-content h2 {
                                font-size: 1.75rem;
                            }

                            .blog-content h3 {
                                font-size: 1.4rem;
                            }

                            .blog-content a {
                                color: #b3814e;
                                text-decoration: underline;
                                text-underline-offset: 0.1875rem;
                            }

                            .blog-content ul,
                            .blog-content ol {
                                padding-left: 1.5rem;
                            }

                            .blog-content ul {
                                list-style: disc;
                            }

                            .blog-content ol {
                                list-style: decimal;
                            }

                            .blog-content blockquote {
                                border-left: 0.1875rem solid #b3814e;
                                color: #302f5a;
                                padding-left: 1rem;
                            }

                            .blog-content img {
                                border-radius: 0.75rem;
                                height: auto;
                                max-width: 100%;
                            }

                            .blog-content table {
                                display: block;
                                max-width: 100%;
                                overflow-x: auto;
                            }
                        </style>

                        <div class="blog-content mt-8">
                            <?php the_content(); ?>
                        </div>

                        <?php
                        wp_link_pages(
                            array(
                                'before' => '<nav class="mt-8 flex gap-2 text-sm" aria-label="' . esc_attr__('Post pages', 'estatepartners') . '">',
                                'after'  => '</nav>',
                            )
                        );
                        ?>

                        <?php
                        $back_url   = home_url('/blog/');
                        $back_label = __('Back to Blog', 'estatepartners');

                        if (! empty($categories) && $categories[0]->slug !== 'uncategorized') {
                            $primary_cat = $categories[0];
                            $cat_link    = get_category_link($primary_cat->term_id);

                            if (! is_wp_error($cat_link)) {
                                $back_url   = $cat_link;
                                /* translators: %s: Category name */
                                $back_label = sprintf(__('Back to %s', 'estatepartners'), $primary_cat->name);
                            }
                        }
                        ?>
                        <div class="mt-10 border-t border-ink-line pt-6">
                            <a href="<?php echo esc_url($back_url); ?>" class="inline-flex items-center gap-2 text-sm font-semibold text-gold hover:text-[#302F5A]">
                                <i class="fa-solid fa-arrow-left" aria-hidden="true"></i>
                                <?php echo esc_html($back_label); ?>
                            </a>
                        </div>
                    </div><!-- /left column -->

                    <!-- Recent posts sidebar -->
                    <aside class="" aria-label="<?php esc_attr_e('Recent posts', 'estatepartners'); ?>">
                        <div class="rounded-2xl border border-gold/30 bg-[#FCF7F3] p-6">
                            <h2 class="font-prata text-xl text-[#302F5A]"><?php esc_html_e('Recent Posts', 'estatepartners'); ?></h2>

                            <?php
                            $recent = new WP_Query(array(
                                'post_type'           => 'post',
                                'posts_per_page'      => 5,
                                'post__not_in'        => array(get_the_ID()),
                                'ignore_sticky_posts' => true,
                            ));
                            ?>

                            <?php if ($recent->have_posts()) : ?>
                                <ul class="mt-5 space-y-5">
                                    <?php while ($recent->have_posts()) : $recent->the_post(); ?>
                                        <li>
                                            <a href="<?php the_permalink(); ?>" class="group flex items-center gap-4">
                                                <span class="h-16 w-20 shrink-0 overflow-hidden rounded-lg bg-gold/10">
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <?php the_post_thumbnail('thumbnail', array('class' => 'h-full w-full object-cover', 'loading' => 'lazy')); ?>
                                                    <?php endif; ?>
                                                </span>
                                                <span>
                                                    <span class="block text-sm font-semibold leading-snug text-[#302F5A] group-hover:text-gold"><?php the_title(); ?></span>
                                                    <time class="mt-1 block text-xs text-[#6B6B6B]" datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>"><?php echo esc_html(get_the_date()); ?></time>
                                                </span>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php else : ?>
                                <p class="mt-4 text-sm text-[#6B6B6B]"><?php esc_html_e('No other posts yet.', 'estatepartners'); ?></p>
                            <?php endif;
                            wp_reset_postdata(); ?>
                        </div>

                        <div class="rounded-2xl border border-gold/30 bg-[#FCF7F3] p-6 mt-6">
                            <h2 class="font-prata text-xl text-[#302F5A]"><?php esc_html_e('Our Projects', 'estatepartners'); ?></h2>

                            <ul class="mt-5 space-y-2">
                                <li><a href="https://estatepartners.in/all-projects/" class="group flex items-center gap-4 font-semibold leading-snug text-[#302F5A] hover:text-gold">All Projects</a></li>
                                <li><a href="https://estatepartners.in/apartments/" class="group flex items-center gap-4 font-semibold leading-snug text-[#302F5A] hover:text-gold">Apartments</a></li>
                                <li><a href="https://estatepartners.in/plots/" class="group flex items-center gap-4 font-semibold leading-snug text-[#302F5A] hover:text-gold">Plots</a></li>
                                <li><a href="https://estatepartners.in/villas/" class="group flex items-center gap-4 font-semibold leading-snug text-[#302F5A] hover:text-gold">Villas</a></li>
                            </ul>
                        </div>

                    </aside>
                </div><!-- /grid -->
            </div><!-- /container -->
        </article>

        <!-- <`?php if (comments_open() || get_comments_number()) : ?>
            <div class="container mx-auto max-w-4xl px-4 pb-12 sm:px-6 lg:px-8">
                <`?php comments_template(); ?>
            </div>
        <   ?php endif; ?> -->
    <?php endwhile; ?>
</main>

<?php
get_footer();
