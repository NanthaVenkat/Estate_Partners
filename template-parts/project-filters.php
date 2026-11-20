<?php
/**
 * template-parts/project-filters.php
 *
 * Reusable filter sidebar. Use on any page:
 *
 *   get_template_part('template-parts/project-filters', null, array(
 *       'target'    => '#project-list',   // selector of the grid that holds the cards
 *       'show_type' => true,              // false on Apartments / Villas / Plots pages
 *   ));
 *
 * Location, BHK and Amenities chips are built from the cards on the page (so they are always accurate).
 * Price and plot-size ranges are defined below: edit them freely.
 */

$args      = isset($args) && is_array($args) ? $args : array();
$target    = !empty($args['target']) ? $args['target'] : '#project-list';
$show_type = isset($args['show_type']) ? (bool) $args['show_type'] : true;

// label, min (inclusive), max (exclusive, '' = no limit). Values in rupees.
$price_ranges = array(
    array('Under 10 L', 0,        1000000),
    array('10 L - 20 L', 1000000, 2000000),
    array('20 L - 30 L', 2000000, 3000000),
    array('30 L - 40 L', 3000000, 4000000),
    array('Above 40 L', 4000000,  ''),
);

// label, min cents, max cents ('' = no limit)
$cent_ranges = array(
    array('Up to 3 cents', 0,  3),
    array('3 - 5 cents',   3,  5),
    array('5 - 10 cents',  5,  10),
    array('Above 10 cents', 10, ''),
);

$types = get_terms(array('taxonomy' => 'property_type', 'hide_empty' => true));

$chip = 'inline-block cursor-pointer select-none rounded-full border border-gold/30 bg-white px-4 py-2 text-sm font-semibold text-[#302F5A] transition-colors hover:border-gold peer-checked:border-[#302F5A] peer-checked:bg-[#302F5A] peer-checked:text-white peer-focus-visible:ring-2 peer-focus-visible:ring-gold';
$head = 'text-[#404042] px-4 py-2 rounded-sm bg-[#FCF7F3] mb-4';
?>
<aside data-project-filters data-target="<?php echo esc_attr($target); ?>"
    class="border border-[#B3814E80] rounded-xl p-4 h-fit lg:sticky lg:top-28" aria-label="Project filters">

    <div class="mb-6 flex items-center justify-between gap-3">
        <h4 class="text-lg font-semibold text-[#404042]">Filters</h4>
        <button type="button" data-filter-reset class="text-sm font-semibold text-gold hover:underline">Reset</button>
    </div>
    <p data-filter-count class="mb-6 text-sm text-[#6B6B6B]" aria-live="polite"></p>

    <?php if ($show_type && $types && !is_wp_error($types)) : ?>
        <!-- Property type -->
        <div class="mb-8" data-filter-section>
            <p class="<?php echo esc_attr($head); ?>">Property Type</p>
            <div class="flex flex-wrap gap-3">
                <?php foreach ($types as $t) : ?>
                    <label class="relative">
                        <input type="checkbox" class="peer sr-only" data-filter="type" value="<?php echo esc_attr($t->slug); ?>">
                        <span class="<?php echo esc_attr($chip); ?>"><?php echo esc_html($t->name); ?></span>
                    </label>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

    <!-- Location (chips built by JS from the cards) -->
    <div class="mb-8" data-filter-section>
        <p class="<?php echo esc_attr($head); ?>">Location</p>
        <div class="flex flex-wrap gap-3" data-filter-group="location"></div>
    </div>

    <!-- BHK: apartments & villas only -->
    <div class="mb-8" data-filter-section data-for="apartments villas">
        <p class="<?php echo esc_attr($head); ?>">No. of Bedrooms</p>
        <div class="flex flex-wrap gap-3" data-filter-group="bhk"></div>
    </div>

    <!-- Plot size: plots only -->
    <div class="mb-8" data-filter-section data-for="plots">
        <p class="<?php echo esc_attr($head); ?>">Plot Size</p>
        <div class="flex flex-wrap gap-3">
            <?php foreach ($cent_ranges as $r) : ?>
                <label class="relative">
                    <input type="checkbox" class="peer sr-only" data-filter="cents" value="<?php echo esc_attr($r[0]); ?>"
                        data-min="<?php echo esc_attr($r[1]); ?>" data-max="<?php echo esc_attr($r[2]); ?>">
                    <span class="<?php echo esc_attr($chip); ?>"><?php echo esc_html($r[0]); ?></span>
                </label>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Price -->
    <div class="mb-8" data-filter-section>
        <p class="<?php echo esc_attr($head); ?>">Price</p>
        <div class="flex flex-wrap gap-3">
            <?php foreach ($price_ranges as $r) : ?>
                <label class="relative">
                    <input type="checkbox" class="peer sr-only" data-filter="price" value="<?php echo esc_attr($r[0]); ?>"
                        data-min="<?php echo esc_attr($r[1]); ?>" data-max="<?php echo esc_attr($r[2]); ?>">
                    <span class="<?php echo esc_attr($chip); ?>"><?php echo esc_html($r[0]); ?></span>
                </label>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Amenities (chips built by JS from the cards) -->
    <div data-filter-section>
        <p class="<?php echo esc_attr($head); ?>">Amenities</p>
        <div class="flex flex-wrap gap-3" data-filter-group="amenities"></div>
    </div>
</aside>