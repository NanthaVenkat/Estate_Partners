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

<!-- ======================= FOOTER ======================= -->
<footer id="contact" class="bg-ink text-white scroll-mt-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 sm:py-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
        <!-- Brand -->
        <div>
            <span class="inline-block bg-white rounded-xl px-4 py-2.5">
                <img src="<?php echo esc_url($img_uri . '/logo.png'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?> logo" class="h-10 w-auto object-contain" />
            </span>
            <p class="mt-5 text-sm text-white/65 leading-relaxed">Your trusted real estate partner in Coimbatore — discover, compare and choose apartments, villas and plots with clarity and confidence.</p>
            <p class="mt-5 text-sm font-semibold tracking-wide">Follow us on</p>
            <div class="mt-3 flex items-center gap-3">
                <a href="#" aria-label="Facebook" class="social-btn w-10 h-10 rounded-full border border-white/25 inline-flex items-center justify-center"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" aria-label="Instagram" class="social-btn w-10 h-10 rounded-full border border-white/25 inline-flex items-center justify-center"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" aria-label="LinkedIn" class="social-btn w-10 h-10 rounded-full border border-white/25 inline-flex items-center justify-center"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" aria-label="YouTube" class="social-btn w-10 h-10 rounded-full border border-white/25 inline-flex items-center justify-center"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>

        <!-- Quick links -->
        <nav aria-label="Quick links">
            <p class="font-prata text-xl mb-5">Quick Links</p>
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
            <p class="font-prata text-xl mb-5">Explore</p>
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
            <p class="font-prata text-xl mb-5">Get in Touch</p>
            <ul class="space-y-4 text-sm text-white/70">
                <li class="flex items-start gap-3"><i class="fa-solid fa-phone text-gold mt-0.5"></i><a href="tel:+917092958830" class="hover:text-gold-light transition-colors">+91 70929 58830</a></li>
                <li class="flex items-start gap-3"><i class="fa-solid fa-location-dot text-gold mt-0.5"></i><span>Coimbatore, Tamil Nadu, India</span></li>
                <li class="flex items-start gap-3"><i class="fa-solid fa-clock text-gold mt-0.5"></i><span>Open 24/7 for enquiries</span></li>
            </ul>
            <a href="<?php echo esc_url($home . '#enquire'); ?>" class="mt-6 inline-flex items-center gap-2 bg-gold hover:bg-gold-dark text-white font-semibold text-sm px-6 py-3 rounded-lg transition-colors">Enquire Now <i class="fa-solid fa-arrow-right text-xs"></i></a>
        </div>
    </div>

    <div class="border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-white/55">
            <p>Copyright © <span id="year"><?php echo esc_html(date_i18n('Y')); ?></span> <?php echo esc_html(get_bloginfo('name')); ?>. Designed &amp; Developed by Bright Bridge Infotech.</p>
            <div class="flex items-center gap-5">
                <a href="<?php echo esc_url(get_privacy_policy_url() ?: '#'); ?>" class="hover:text-gold-light transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-gold-light transition-colors">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>