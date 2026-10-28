<?php
/**
 * Blog and category listing.
 *
 * @package EstatePartners
 */

if (! defined('ABSPATH')) {
    exit;
}

$current_category = is_category() ? get_queried_object() : get_category_by_slug('city-guide');
$category_id      = $current_category instanceof WP_Term && 'category' === $current_category->taxonomy
    ? (int) $current_category->term_id
    : 0;
$paged = max(1, (int) get_query_var('paged'), (int) get_query_var('page'));

$hot_topics = new WP_Query(
    array(
        'post_type'           => 'post',
        'post_status'         => 'publish',
        'posts_per_page'      => 7,
        'ignore_sticky_posts' => true,
        'no_found_rows'       => true,
    )
);

$article_args = array(
    'post_type'           => 'post',
    'post_status'         => 'publish',
    'posts_per_page'      => (int) get_option('posts_per_page', 10),
    'paged'               => $paged,
    'ignore_sticky_posts' => true,
);

if ($category_id) {
    $article_args['cat'] = $category_id;
}

$articles = new WP_Query($article_args);
?>

<main id="primary" class="site-main bg-white">
    <!-- <section class="py-8 sm:py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <header class="mb-4 border-b border-ink-line pb-3">
                <h1 class="font-prata text-xl sm:text-2xl text-[#302F5A]">
                    <?php esc_html_e('Hot Topics', 'estatepartners'); ?>
                </h1>
            </header>

            <?php if ($hot_topics->have_posts()) : ?>
                <div class="-mx-4 overflow-x-auto px-4 pb-4 sm:mx-0 sm:px-0" aria-label="<?php esc_attr_e('Hot topics', 'estatepartners'); ?>">
                    <div class="flex min-w-max gap-3">
                        <?php while ($hot_topics->have_posts()) : $hot_topics->the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="group relative block h-28 w-36 shrink-0 overflow-hidden rounded-xl bg-[#302F5A] shadow-sm sm:h-32 sm:w-40">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium', array('class' => 'h-full w-full object-cover transition-transform duration-300 group-hover:scale-105')); ?>
                                <?php endif; ?>
                                <span class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></span>
                                <span class="absolute inset-x-3 bottom-3 line-clamp-2 text-xs font-semibold leading-snug text-white">
                                    <?php the_title(); ?>
                                </span>
                            </a>
                        <?php endwhile; ?>
                    </div>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p class="py-8 text-sm text-[#6B6B6B]"><?php esc_html_e('New articles will appear here soon.', 'estatepartners'); ?></p>
            <?php endif; ?>
        </div>
    </section> -->

    <section id="city-guide" class="py-16 sm:pb-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-6 border-b border-ink-line">
                <h2 class="inline-block border-b-2 border-gold px-2 pb-3 font-prata text-xl text-[#302F5A]">
                    <?php
                    if (is_category()) {
                        single_cat_title();
                    } else {
                        esc_html_e('City Guide', 'estatepartners');
                    }
                    ?>
                </h2>
            </div>

            <?php if ($articles->have_posts()) : ?>
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    <?php while ($articles->have_posts()) : $articles->the_post(); ?>
                        <?php
                        $categories    = get_the_category();
                        $category      = $categories ? $categories[0] : null;
                        $category_name = $category ? $category->name : __('City Guide', 'estatepartners');
                        ?>
                        <article <?php post_class('overflow-hidden rounded-xl border border-[#B3814E40] bg-[#FCF7F3] shadow-sm transition-shadow hover:shadow-md'); ?>>
                            <a href="<?php the_permalink(); ?>" class="group block overflow-hidden bg-[#302F5A]">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large', array('class' => 'aspect-[4/3] w-full object-cover transition-transform duration-300 group-hover:scale-105')); ?>
                                <?php else : ?>
                                    <div class="flex aspect-[4/3] items-center justify-center text-white/80" aria-hidden="true">
                                        <i class="fa-solid fa-city text-4xl"></i>
                                    </div>
                                <?php endif; ?>
                            </a>
                            <div class="p-4">
                                <div class="mb-3 flex items-center gap-2 text-[10px] font-medium uppercase tracking-wide text-[#6B6B6B]">
                                    <i class="fa-regular fa-user text-gold" aria-hidden="true"></i>
                                    <span><?php the_author(); ?></span>
                                    <span aria-hidden="true">·</span>
                                    <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>"><?php echo esc_html(get_the_date()); ?></time>
                                </div>
                                <p class="mb-2 text-[10px] font-semibold uppercase tracking-wide text-gold"><?php echo esc_html($category_name); ?></p>
                                <h3 class="font-prata text-sm leading-snug text-[#B3814E]">
                                    <a href="<?php the_permalink(); ?>" class="hover:text-[#302F5A]">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                <div class="mt-4 flex items-center justify-between gap-3 border-t border-[#B3814E30] pt-3 text-[10px] font-semibold uppercase tracking-wide text-gold">
                                    <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>"><?php echo esc_html(get_the_date('M j, Y')); ?></time>
                                    <a href="<?php the_permalink(); ?>" class="hover:text-[#302F5A]"><?php esc_html_e('Read more', 'estatepartners'); ?></a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <?php
                $pagination = paginate_links(
                    array(
                        'total'     => $articles->max_num_pages,
                        'current'   => $paged,
                        'type'      => 'list',
                        'prev_text' => __('Previous', 'estatepartners'),
                        'next_text' => __('Next', 'estatepartners'),
                    )
                );
                if ($pagination) :
                    ?>
                    <nav class="mt-10 flex justify-center text-sm text-[#302F5A]" aria-label="<?php esc_attr_e('Blog pagination', 'estatepartners'); ?>">
                        <?php echo wp_kses_post($pagination); ?>
                    </nav>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p class="rounded-xl border border-ink-line bg-[#FCF7F3] px-5 py-8 text-center text-sm text-[#6B6B6B]">
                    <?php esc_html_e('No articles have been published here yet.', 'estatepartners'); ?>
                </p>
            <?php endif; ?>
        </div>
    </section>
</main>
