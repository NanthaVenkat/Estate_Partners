<?php
/**
 * Search results template.
 *
 * @package EstatePartners
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main bg-white">
    <section class="py-12 sm:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <header class="mb-8">
                <p class="text-sm font-semibold uppercase tracking-wide text-gold">
                    <?php esc_html_e('Search', 'estatepartners'); ?>
                </p>
                <h1 class="mt-2 font-prata text-3xl text-[#302F5A] sm:text-4xl">
                    <?php
                    printf(
                        esc_html__('Search results for: %s', 'estatepartners'),
                        '<span class="text-gold">' . esc_html(get_search_query()) . '</span>'
                    );
                    ?>
                </h1>
            </header>

            <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="mb-10 flex max-w-2xl flex-col gap-3 sm:flex-row">
                <label for="search-results-query" class="sr-only"><?php esc_html_e('Search', 'estatepartners'); ?></label>
                <input id="search-results-query" type="search" name="s" value="<?php echo esc_attr(get_search_query()); ?>" class="min-w-0 flex-1 rounded-lg border border-ink-line px-4 py-3 text-sm text-[#302F5A] focus:border-gold focus:outline-none focus:ring-2 focus:ring-gold/30" />
                <button type="submit" class="inline-flex items-center justify-center gap-2 rounded-lg bg-[#302F5A] px-6 py-3 font-semibold text-white transition-colors hover:bg-gold">
                    <i class="fa-solid fa-magnifying-glass text-sm" aria-hidden="true"></i>
                    <?php esc_html_e('Search', 'estatepartners'); ?>
                </button>
            </form>

            <?php if (have_posts()) : ?>
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    <?php while (have_posts()) : the_post(); ?>
                        <article <?php post_class('overflow-hidden rounded-xl border border-[#B3814E40] bg-[#FCF7F3] shadow-sm transition-shadow hover:shadow-md'); ?>>
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>" class="block overflow-hidden bg-[#302F5A]">
                                    <?php the_post_thumbnail('large', array('class' => 'aspect-[4/3] w-full object-cover')); ?>
                                </a>
                            <?php endif; ?>
                            <div class="p-5">
                                <p class="mb-2 text-xs font-semibold uppercase tracking-wide text-gold">
                                    <?php echo esc_html('page' === get_post_type() ? __('Page', 'estatepartners') : __('Article', 'estatepartners')); ?>
                                </p>
                                <h2 class="font-prata text-xl leading-snug text-[#302F5A]">
                                    <a href="<?php the_permalink(); ?>" class="hover:text-gold"><?php the_title(); ?></a>
                                </h2>
                                <div class="mt-3 text-sm leading-relaxed text-[#444444]">
                                    <?php the_excerpt(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-gold hover:text-[#302F5A]">
                                    <?php esc_html_e('Read more', 'estatepartners'); ?>
                                    <i class="fa-solid fa-arrow-right text-xs" aria-hidden="true"></i>
                                </a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <div class="mt-10 flex justify-center text-sm text-[#302F5A]">
                    <?php
                    the_posts_pagination(
                        array(
                            'prev_text' => __('Previous', 'estatepartners'),
                            'next_text' => __('Next', 'estatepartners'),
                            'aria_label' => __('Search results pagination', 'estatepartners'),
                        )
                    );
                    ?>
                </div>
            <?php else : ?>
                <p class="rounded-xl border border-ink-line bg-[#FCF7F3] px-5 py-8 text-center text-sm text-[#6B6B6B]">
                    <?php esc_html_e('No results found. Try a different search term.', 'estatepartners'); ?>
                </p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>