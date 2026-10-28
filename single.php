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
            <div class="container mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
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
                <div class="mt-5 flex flex-wrap items-center gap-x-4 gap-y-2 text-sm text-[#6B6B6B]">
                    <span><?php the_author(); ?></span>
                    <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>"><?php echo esc_html(get_the_date()); ?></time>
                </div>

                <?php if (has_post_thumbnail()) : ?>
                    <figure class="mt-8 overflow-hidden rounded-2xl">
                        <?php the_post_thumbnail('large', array('class' => 'h-auto max-h-[560px] w-full object-cover')); ?>
                    </figure>
                <?php endif; ?>

                <style>
                    .blog-content {
                        color: #444;
                        font-size: 1rem;
                        line-height: 1.8;
                    }

                    .blog-content > * + * {
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
                        text-underline-offset: 3px;
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
                        border-left: 3px solid #b3814e;
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

                <div class="mt-10 border-t border-ink-line pt-6">
                    <a href="<?php echo esc_url($posts_page_id ? get_permalink($posts_page_id) : home_url('/')); ?>" class="inline-flex items-center gap-2 text-sm font-semibold text-gold hover:text-[#302F5A]">
                        <i class="fa-solid fa-arrow-left" aria-hidden="true"></i>
                        <?php esc_html_e('Back to Blog', 'estatepartners'); ?>
                    </a>
                </div>
            </div>
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