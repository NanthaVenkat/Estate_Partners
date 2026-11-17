<?php

/**
 * Blog and category listing.
 *
 * @package EstatePartners
 */

if (! defined('ABSPATH')) {
    exit;
}

$current_category = is_category() ? get_queried_object() : null;
$category_id      = $current_category instanceof WP_Term && 'category' === $current_category->taxonomy
    ? (int) $current_category->term_id
    : 0;
$categories = get_categories(
    array(
        'hide_empty' => true,
        'orderby'    => 'name',
        'order'      => 'ASC',
    )
);
$all_posts_background_ids = get_posts(
    array(
        'post_type'           => 'post',
        'post_status'         => 'publish',
        'numberposts'         => 1,
        'meta_key'            => '_thumbnail_id',
        'orderby'             => 'date',
        'order'               => 'DESC',
        'fields'              => 'ids',
        'ignore_sticky_posts' => true,
    )
);
$all_posts_background = $all_posts_background_ids
    ? get_the_post_thumbnail_url($all_posts_background_ids[0], 'medium_large')
    : '';
$category_backgrounds = array();
foreach ($categories as $category) {
    $category_background_ids = get_posts(
        array(
            'post_type'           => 'post',
            'post_status'         => 'publish',
            'numberposts'         => 1,
            'cat'                 => (int) $category->term_id,
            'meta_key'            => '_thumbnail_id',
            'orderby'             => 'date',
            'order'               => 'DESC',
            'fields'              => 'ids',
            'ignore_sticky_posts' => true,
        )
    );
    $category_backgrounds[$category->term_id] = $category_background_ids
        ? get_the_post_thumbnail_url($category_background_ids[0], 'medium_large')
        : '';
}
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

// Custom background images for blog category filters
$category_backgrounds = array(
<<<<<<< HEAD
    'all'          => 'https://localhost/estate_partners/wp-content/uploads/2026/11/all-blogs.png',
    'uncategorized' => 'https://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-5.png',
    'apartments-villas' => 'http://localhost/estate_partners/wp-content/uploads/2026/11/blog_category-1.jpg',
    'gated-community-living' => 'http://localhost/estate_partners/wp-content/uploads/2026/11/blog_category-4.png',
    'city-locality-guides' => 'http://localhost/estate_partners/wp-content/uploads/2026/11/blog_category-5.png',
    'plots-land-investment' => 'http://localhost/estate_partners/wp-content/uploads/2026/11/blog_category-3.png',
    'property-price-insights' => 'http://localhost/estate_partners/wp-content/uploads/2026/11/blog_category-2.png',
    'real-estate-market-trends' => 'http://localhost/estate_partners/wp-content/uploads/2026/11/blog_category-1.png',
=======
    'all'          => 'http://localhost/estate_partners/wp-content/uploads/2026/11/all-blogs.png',
    'uncategorized' => 'http://localhost/estate_partners/wp-content/uploads/2026/10/apartment-page-5.png',
>>>>>>> 1495223e7c1c339aa3315d7392e91d6590662eb2
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
                    <1?php esc_html_e('Hot Topics', 'estatepartners'); ?>
                </h1>
            </header>

            <1?php if ($hot_topics->have_posts()) : ?>
                <div class="-mx-4 overflow-x-auto px-4 pb-4 sm:mx-0 sm:px-0" aria-label="<1?php esc_attr_e('Hot topics', 'estatepartners'); ?>">
                    <div class="flex min-w-max gap-3">
                        <1?php while ($hot_topics->have_posts()) : $hot_topics->the_post(); ?>
                            <a href="<1?php the_permalink(); ?>" class="group relative block h-28 w-36 shrink-0 overflow-hidden rounded-xl bg-[#302F5A] shadow-sm sm:h-32 sm:w-40">
                                <1?php if (has_post_thumbnail()) : ?>
                                    <1?php the_post_thumbnail('medium', array('class' => 'h-full w-full object-cover transition-transform duration-300 group-hover:scale-105')); ?>
                                <1?php endif; ?>
                                <span class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></span>
                                <span class="absolute inset-x-3 bottom-3 line-clamp-2 text-xs font-semibold leading-snug text-white">
                                    <1?php the_title(); ?>
                                </span>
                            </a>
                        <1?php endwhile; ?>
                    </div>
                </div>
                <1?php wp_reset_postdata(); ?>
            <1?php else : ?>
                <p class="py-8 text-sm text-[#6B6B6B]"><1?php esc_html_e('New articles will appear here soon.', 'estatepartners'); ?></p>
            <1?php endif; ?>
        </div>
    </section> -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.categoryNav', {
        slidesPerView: 'auto',
        spaceBetween: 12,
        watchOverflow: true,
        navigation: {
            nextEl: '.categoryNav .swiper-button-next',
            prevEl: '.categoryNav .swiper-button-prev',
        },
    });
});
    </script>

    <section id="city-guide" class="py-16 sm:pb-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
<<<<<<< HEAD
            <?php if ($articles->have_posts()) : ?>
                <div class="mb-6 border-b border-ink-line">
                    <h2 class="inline-block border-b-2 border-gold px-2 pb-3 font-semibold text-xl text-[#302F5A]">Hot Topics</h2>
                </div>
                <nav class="swiper categoryNav mb-8 flex flex-wrap gap-3" aria-label="<?php esc_attr_e('Filter blog posts by category', 'estatepartners'); ?>">
                    <div class="swiper-wrapper">
                        <a href="<?php echo esc_url(home_url('/blog/')); ?>"
                            class="swiper-slide inline-flex !h-32 !w-max items-end rounded-xl border bg-[#302F5A] bg-cover bg-center px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:border-gold hover:shadow-md <?php echo ! $category_id ? 'border-gold ring-2 ring-gold/40' : 'border-ink-line'; ?>"
                            <?php if ($all_posts_background) : ?>style="background-image: linear-gradient(#00000000, #000000), url('<?php echo esc_url($category_backgrounds['all']); ?>');" <?php endif; ?>
                            <?php echo ! $category_id ? 'aria-current="page"' : ''; ?>>
                            <?php esc_html_e('All Posts', 'estatepartners'); ?>
                        </a>
                        <?php foreach ($categories as $category) : ?>
                            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"
                                class="swiper-slide inline-flex !h-32 !w-max items-end rounded-xl border bg-[#302F5A] bg-cover bg-center px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:border-gold hover:shadow-md <?php echo $category_id === (int) $category->term_id ? 'border-gold ring-2 ring-gold/40' : 'border-ink-line'; ?>"

                                <?php if (!empty($category_backgrounds[$category->slug])) : ?>
                                style="background-image: linear-gradient(#00000000, #000000), url('<?php echo esc_url($category_backgrounds[$category->slug]); ?>');"
                                <?php endif; ?>

                                <?php echo $category_id === (int) $category->term_id ? 'aria-current="page"' : ''; ?>>

                                <?php echo esc_html($category->name); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </nav>
            <?php endif; ?>
=======
            <div class="mb-6 border-b border-ink-line">
                <h2 class="inline-block border-b-2 border-gold px-2 pb-3 font-semibold text-xl text-[#302F5A]">Hot Topics</h2>
            </div>
            <nav class="mb-8 flex flex-wrap gap-3" aria-label="<?php esc_attr_e('Filter blog posts by category', 'estatepartners'); ?>">
                <a href="<?php echo esc_url(home_url('/blog/')); ?>"
                    class="inline-flex h-32 min-w-32 items-end rounded-xl border bg-[#302F5A] bg-cover bg-center px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:border-gold hover:shadow-md <?php echo ! $category_id ? 'border-gold ring-2 ring-gold/40' : 'border-ink-line'; ?>"
                    <?php if ($all_posts_background) : ?>style="background-image: linear-gradient(rgba(19,19,19,.5), rgba(19,19,19,.72)), url('<?php echo esc_url($category_backgrounds['all']); ?>');"<?php endif; ?>
                    <?php echo ! $category_id ? 'aria-current="page"' : ''; ?>>
                    <?php esc_html_e('All Posts', 'estatepartners'); ?>
                </a>
                <?php foreach ($categories as $category) : ?>
    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"
       class="inline-flex h-32 min-w-32 items-end rounded-xl border bg-[#302F5A] bg-cover bg-center px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:border-gold hover:shadow-md <?php echo $category_id === (int) $category->term_id ? 'border-gold ring-2 ring-gold/40' : 'border-ink-line'; ?>"

       <?php if (!empty($category_backgrounds[$category->slug])) : ?>
           style="background-image: linear-gradient(rgba(19,19,19,.5), rgba(19,19,19,.72)), url('<?php echo esc_url($category_backgrounds[$category->slug]); ?>');"
       <?php endif; ?>

       <?php echo $category_id === (int) $category->term_id ? 'aria-current="page"' : ''; ?>>

        <?php echo esc_html($category->name); ?>
    </a>
<?php endforeach; ?>
            </nav>

            <div class="mb-6 border-b border-ink-line">
                <h2 class="inline-block border-b-2 border-gold px-2 pb-3 font-semibold text-xl text-[#302F5A]">
                    <?php
                    if (is_category()) {
                        single_cat_title();
                    } else {
                        esc_html_e('City Guide', 'estatepartners');
                    }
                    ?>
                </h2>
            </div>
>>>>>>> 1495223e7c1c339aa3315d7392e91d6590662eb2

            <?php if ($articles->have_posts()) : ?>
                <div class="mb-6 border-b border-ink-line">
                    <h2 class="inline-block border-b-2 border-gold px-2 pb-3 font-semibold text-xl text-[#302F5A]">
                        <?php
                        if (is_category()) {
                            single_cat_title();
                        } else {
                            esc_html_e('City Guide', 'estatepartners');
                        }
                        ?>
                    </h2>
                </div>

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
                                    <?php the_post_thumbnail('large', array('class' => 'w-full object-cover transition-transform duration-300 group-hover:scale-105')); ?>
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