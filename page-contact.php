<?php

/**
 * Template Name: Contact
 *
 * Contact page: hero, contact card + form, map and call-to-action strip.
 * Applies automatically to a page with the slug "contact", or choose
 * "Contact" in Page Attributes > Template.
 *
 * @package YourThemeName
 */

get_header();

$img_uri  = get_template_directory_uri() . '/assets/images';
$hero_img = has_post_thumbnail() ? get_the_post_thumbnail_url(null, 'full') : $img_uri . '/contact-hero.jpg';

$address = 'Villankurichi Rd, B.R. Puram Industrial Estate, Coimbatore, Tamil Nadu 641014';
$phone   = '0422 297 0022';
$email   = 'info@estatepartners.in';
$cta_tel = '+91 70929 58830';

// Result of the last form submission (set by the handler in functions.php).
$status = isset($_GET['contact']) ? sanitize_key(wp_unslash($_GET['contact'])) : '';

$socials = array(
    array('label' => 'Threads',   'icon' => 'fa-threads',      'url' => '#'),
    array('label' => 'Pinterest', 'icon' => 'fa-pinterest-p',  'url' => '#'),
    array('label' => 'X',         'icon' => 'fa-x-twitter',    'url' => '#'),
    array('label' => 'Instagram', 'icon' => 'fa-instagram',    'url' => '#'),
    array('label' => 'YouTube',   'icon' => 'fa-youtube',      'url' => '#'),
    array('label' => 'LinkedIn',  'icon' => 'fa-linkedin-in',  'url' => '#'),
    array('label' => 'Facebook',  'icon' => 'fa-facebook-f',   'url' => '#'),
);

$field = 'w-full bg-transparent border-0 border-b border-[#cfcfcf] focus:border-gold outline-none focus:outline-none focus:ring-0 py-4 text-base text-[#444444] placeholder:text-[#8a8a8a] transition-colors';
?>

<main id="primary" class="site-main">

    <!-- ======================= HERO ======================= -->
    <section class="relative isolate overflow-hidden">
        <img src="<?php echo esc_url($hero_img); ?>" alt="" class="absolute inset-0 w-full h-full object-cover -z-20" />
        <div class="absolute inset-0 bg-black/50 -z-10"></div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-40 sm:pt-28 sm:pb-52 lg:pt-32 lg:pb-64 text-center">
            <h1 class="reveal font-prata text-white text-4xl sm:text-5xl lg:text-6xl leading-tight max-w-4xl mx-auto">
                <?php esc_html_e('Contact Estate Partners in Coimbatore', 'vnktheme-textdomain'); ?>
            </h1>
        </div>
    </section>

    <!-- ======================= CONTACT CARD ======================= -->
    <section id="contact-form" class="relative z-10 -mt-28 sm:-mt-40 lg:-mt-52 scroll-mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal bg-white border border-ink-line rounded-2xl shadow-xl p-4 sm:p-5 grid grid-cols-1 lg:grid-cols-[minmax(0,5fr)_minmax(0,7fr)] gap-8 lg:gap-14">

                <!-- Contact information panel -->
                <div class="bg-[#302F5A] text-white rounded-xl p-7 sm:p-10 flex flex-col">
                    <h2 class="font-prata text-3xl sm:text-4xl leading-tight"><?php esc_html_e('Contact Information', 'vnktheme-textdomain'); ?></h2>
                    <p class="mt-3 leading-relaxed text-white/90"><?php esc_html_e('Contact us if you have any queries. Thank you!', 'vnktheme-textdomain'); ?></p>

                    <hr class="my-7 border-white/30" />

                    <ul class="space-y-7">
                        <li class="flex items-start gap-4">
                            <i class="fa-solid fa-location-dot text-2xl mt-1 shrink-0" aria-hidden="true"></i>
                            <div>
                                <p class="font-semibold text-lg"><?php esc_html_e('Address', 'vnktheme-textdomain'); ?></p>
                                <p class="mt-1 text-white/90 leading-relaxed"><?php echo esc_html($address); ?></p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <i class="fa-solid fa-phone-volume text-2xl mt-1 shrink-0" aria-hidden="true"></i>
                            <div>
                                <p class="font-semibold text-lg"><?php esc_html_e('Phone', 'vnktheme-textdomain'); ?></p>
                                <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $phone)); ?>" class="mt-1 inline-block text-white/90 hover:text-gold-light transition-colors"><?php echo esc_html($phone); ?></a>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <i class="fa-regular fa-envelope text-2xl mt-1 shrink-0" aria-hidden="true"></i>
                            <div>
                                <p class="font-semibold text-lg"><?php esc_html_e('Mail Id', 'vnktheme-textdomain'); ?></p>
                                <a href="mailto:<?php echo esc_attr($email); ?>" class="mt-1 inline-block text-white/90 hover:text-gold-light transition-colors"><?php echo esc_html($email); ?></a>
                            </div>
                        </li>
                    </ul>

                    <div class="mt-10 lg:mt-auto pt-2">
                        <p class="text-sm font-semibold tracking-wide"><?php esc_html_e('Follow us on', 'vnktheme-textdomain'); ?></p>
                        <div class="mt-3 flex flex-wrap items-center gap-3">
                            <?php foreach ($socials as $social) : ?>
                                <a href="<?php echo esc_url($social['url']); ?>" aria-label="<?php echo esc_attr($social['label']); ?>" class="w-9 h-9 rounded-full border border-white/70 inline-flex items-center justify-center text-sm hover:bg-gold hover:border-gold transition-colors">
                                    <i class="fa-brands <?php echo esc_attr($social['icon']); ?>"></i>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Enquiry form -->
                <div class="px-1 sm:px-4 lg:px-0 lg:pr-10 py-4 lg:py-8 sm:text-lg text-[#444444]">

                    <?php if ('success' === $status) : ?>
                        <div class="mb-6 rounded-lg border border-green-200 bg-green-50 text-green-800 px-5 py-4 text-base" role="status">
                            <?php esc_html_e('Thank you! Your message has been sent. We will get back to you shortly.', 'vnktheme-textdomain'); ?>
                        </div>
                    <?php elseif ('error' === $status) : ?>
                        <div class="mb-6 rounded-lg border border-red-200 bg-red-50 text-red-800 px-5 py-4 text-base" role="alert">
                            <?php esc_html_e('Sorry, something went wrong. Please check the details and try again.', 'vnktheme-textdomain'); ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" novalidate class="space-y-3">
                        <input type="hidden" name="action" value="yourtheme_contact" />
                        <?php wp_nonce_field('yourtheme_contact', 'yourtheme_contact_nonce'); ?>

                        <!-- Honeypot: hidden from people, bots fill it in -->
                        <div class="hidden" aria-hidden="true">
                            <label for="website">Website</label>
                            <input type="text" id="website" name="website" tabindex="-1" autocomplete="off" />
                        </div>

                        <div>
                            <label for="contact-name" class="sr-only"><?php esc_html_e('Your Name', 'vnktheme-textdomain'); ?></label>
                            <input type="text" id="contact-name" name="contact_name" required autocomplete="name" placeholder="<?php esc_attr_e('Your Name', 'vnktheme-textdomain'); ?>" class="<?php echo esc_attr($field); ?>" />
                        </div>

                        <div>
                            <label for="contact-email" class="sr-only"><?php esc_html_e('Email', 'vnktheme-textdomain'); ?></label>
                            <input type="email" id="contact-email" name="contact_email" required autocomplete="email" placeholder="<?php esc_attr_e('Email', 'vnktheme-textdomain'); ?>" class="<?php echo esc_attr($field); ?>" />
                        </div>

                        <div>
                            <label for="contact-phone" class="sr-only"><?php esc_html_e('Mobile Number', 'vnktheme-textdomain'); ?></label>
                            <input type="tel" id="contact-phone" name="contact_phone" required autocomplete="tel" inputmode="tel" pattern="[0-9+\-\s]{10,15}" placeholder="<?php esc_attr_e('Mobile Number', 'vnktheme-textdomain'); ?>" class="<?php echo esc_attr($field); ?>" />
                        </div>

                        <div>
                            <label for="contact-message" class="sr-only"><?php esc_html_e('Message', 'vnktheme-textdomain'); ?></label>
                            <textarea id="contact-message" name="contact_message" rows="3" required placeholder="<?php esc_attr_e('Message', 'vnktheme-textdomain'); ?>" class="<?php echo esc_attr($field); ?> resize-none"></textarea>
                        </div>

                        <div class="pt-6">
                            <button type="submit" class="inline-flex items-center gap-2 bg-gold hover:bg-gold-dark text-white font-semibold uppercase tracking-wide px-7 py-3.5 rounded-lg transition-colors">
                                <?php esc_html_e('Submit', 'vnktheme-textdomain'); ?>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- ======================= MAP ======================= -->
    <section class="mt-16 sm:mt-20" aria-label="<?php esc_attr_e('Our location', 'vnktheme-textdomain'); ?>">
        <iframe
            title="<?php esc_attr_e('Estate Partners location map', 'vnktheme-textdomain'); ?>"
            src="<?php echo esc_url('https://maps.google.com/maps?q=' . rawurlencode($address) . '&t=&z=16&ie=UTF8&iwloc=&output=embed'); ?>"
            class="block w-full h-[320px] sm:h-[420px] lg:h-[520px] border-0"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            allowfullscreen></iframe>
    </section>

</main>

<?php
get_footer();
