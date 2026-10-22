<?php

/**
 * The footer template
 *
 * Outputs the site footer and closes <body> and <html>.
 *
 * @package YourThemeName
 */

if (! defined('ABSPATH')) {
    exit;
}

$img_uri = get_template_directory_uri() . '/assets/images';
$home    = home_url('/');
?>

<!-- ======================= CTA STRIP ======================= -->
<section class="bg-gold">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-10 flex flex-col md:flex-row items-center justify-between gap-6 text-center md:text-left">
        <h2 class="text-white text-2xl sm:text-3xl lg:text-4xl leading-tight">Let’s help you find a space that truly feels home</h2>
        <a href="tel:+917092958830" class="inline-flex items-center gap-3 bg-[#302F5A] hover:bg-ink text-white font-semibold text-xl sm:text-2xl px-7 py-4 rounded-lg transition-colors shrink-0">
            <i class="fa-solid fa-phone text-lg" aria-hidden="true"></i> +91 70929 58830
        </a>
    </div>
</section>

<!-- ======================= FOOTER ======================= -->
<footer id="contact" class="bg-[#302E5A] text-white scroll-mt-24">

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-14 sm:py-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
        <!-- Brand -->
        <div>
            <span class="inline-block brightness-0 invert rounded-xl px-4 py-2.5">
                <img src="<?php echo esc_url($img_uri . '/logo.png'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?> logo" class="h-10 w-auto object-contain" />
            </span>
            <p class="mt-5 text-sm text-white/65 leading-relaxed">At Estate Partners, every home represents more than just apartments—it embodies your dreams, your family’s future, and a lifetime of memories. With thoughtfully designed layouts, modern amenities, and secure surroundings, we ensure your home is a place where life truly thrives.</p>
        </div>

        <!-- Quick links -->
        <nav aria-label="Quick links">
            <p class="text-xl mb-5">Quick Links</p>
            <ul class="space-y-3 text-sm text-white/70">
                <li><a href="<?php echo esc_url($home . '#home'); ?>" class="footer-link">Home</a></li>
                <li><a href="<?php echo esc_url($home . '#about'); ?>" class="footer-link">About Us</a></li>
                <li><a href="<?php echo esc_url($home . '#projects'); ?>" class="footer-link">Projects</a></li>
                <li><a href="<?php echo esc_url($home . '#insights'); ?>" class="footer-link">Blog</a></li>
                <li><a href="<?php echo esc_url($home . '#enquire'); ?>" class="footer-link">Enquire Now</a></li>
                <li><a href="<?php echo esc_url($home . '#contact'); ?>" class="footer-link">Contact Us</a></li>
            </ul>
        </nav>

        <!-- Projects -->
        <nav aria-label="Explore projects">
            <p class="text-xl mb-5">Explore</p>
            <ul class="space-y-3 text-sm text-white/70">
                <li><a href="<?php echo esc_url($home . '#types'); ?>" class="footer-link">Apartments</a></li>
                <li><a href="<?php echo esc_url($home . '#types'); ?>" class="footer-link">Villas</a></li>
                <li><a href="<?php echo esc_url($home . '#types'); ?>" class="footer-link">Residential Plots</a></li>
                <li><a href="<?php echo esc_url($home . '#status'); ?>" class="footer-link">Ongoing Projects</a></li>
                <li><a href="<?php echo esc_url($home . '#status'); ?>" class="footer-link">Upcoming Projects</a></li>
                <li><a href="<?php echo esc_url($home . '#locations'); ?>" class="footer-link">Locations</a></li>
            </ul>
        </nav>

        <!-- Contact -->
        <div>
            <p class="mt-5 text-sm font-semibold tracking-wide">Follow us on</p>
            <div class="mt-3 flex items-center gap-3">
                <a href="#" aria-label="Facebook" class="social-btn w-10 h-10 rounded-full border border-white/25 inline-flex items-center justify-center"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" aria-label="Instagram" class="social-btn w-10 h-10 rounded-full border border-white/25 inline-flex items-center justify-center"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" aria-label="LinkedIn" class="social-btn w-10 h-10 rounded-full border border-white/25 inline-flex items-center justify-center"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" aria-label="YouTube" class="social-btn w-10 h-10 rounded-full border border-white/25 inline-flex items-center justify-center"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>

        <div class="border-t border-white/10 col-span-1 sm:col-span-2 lg:col-span-4">
            <div class="mx-auto px-4 sm:px-6 lg:px-8 py-5 flex items-center justify-center gap-3 text-xs text-white/55">
                <p>Copyright © <span id="year"><?php echo esc_html(date_i18n('Y')); ?></span> <?php echo esc_html(get_bloginfo('name')); ?>. Designed &amp; Developed by Bright Bridge Infotech.</p>
                <!-- <div class="flex items-center gap-5">
                    <a href="<`?php echo esc_url(get_privacy_policy_url() ?: '#'); ?>" class="hover:text-gold-light transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-gold-light transition-colors">Terms of Use</a>
                </div> -->
            </div>
        </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>