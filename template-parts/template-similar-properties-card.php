<?php
// Get ACF fields
$image       = get_field('property_image');
$name        = get_field('property_name');
$location    = get_field('property_location');
$details     = get_field('property_detail_list'); // Group field
$price       = get_field('property_price');
$number      = get_field('contact_number');
$verified    = get_field('verified_button');
$page_link   = get_field('property_page');

// Get subfields from group
$total_units_title = !empty($details['units_title']) ? $details['units_title'] : 'Units';
$total_size_title  = !empty($details['size_title']) ? $details['size_title'] : 'Size';
$area_acres_title  = !empty($details['areas_title']) ? $details['areas_title'] : 'Areas';
$amenities_title   = !empty($details['amenities_title']) ? $details['amenities_title'] : 'Amenities';
$total_units       = !empty($details['units']) ? $details['units'] : '__';
$total_size        = !empty($details['size']) ? $details['size'] : '__';
$area_acres        = !empty($details['areas']) ? $details['areas'] : '__';
$amenities         = !empty($details['amenities']) ? $details['amenities'] : '__';

// Taxonomy terms for data target
$terms = get_the_terms(get_the_id(), 'property_type');

$target_class = '';
if ($terms && !is_wp_error($terms)) {
    $target_class = strtolower($terms[0]->slug);
}
?>

<<<<<<< HEAD
<article class="project-pannel relative bg-gold/10 rounded-2xl border border-gold/50 transition-colors grid lg:grid-cols-[40%_60%] overflow-hidden" data-target="<?php echo esc_attr($target_class); ?>">

    <div class="relative overflow-hidden h-52 lg:h-full">
=======
<article class="project-pannel relative bg-gold/10 rounded-2xl border border-gold/50 transition-colors grid grid-cols-[40%_60%]" data-target="<?php echo esc_attr($target_class); ?>">

    <div class="relative overflow-hidden rounded-t-2xl h-52">
>>>>>>> 1495223e7c1c339aa3315d7392e91d6590662eb2
        <?php if ($image) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($name); ?>" class="w-full h-full object-cover" loading="lazy" />
        <?php endif; ?>

        <?php if ($verified) : ?>
            <span class="absolute top-4 left-4 bg-green-600 text-white font-medium p-1.5 rounded-full text-[0.7rem]">
                <i class="fa-solid fa-check text-green-600 bg-white rounded-full p-1"></i> Verified
            </span>
        <?php endif; ?>
    </div>

    <div class="p-6">
        <div class="flex items-center justify-between gap-6">
            <div>
                <h3 class="text-2xl font-semibold text-gold"><?php echo esc_html($name); ?></h3>
                <p class="text-[#302F5A] mt-1">
                    <i class="fa-solid fa-location-dot mr-1.5"></i><?php echo esc_html($location); ?>
                </p>
            </div>
        </div>

        <ul class="mt-4 grid grid-cols-2 gap-4 text-xs font-medium text-[#302F5A]">
            <?php if ($total_size) : ?>
                <li class="flex items-center gap-2">
<<<<<<< HEAD
                    <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/areas-1.svg" alt="">
=======
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/areas-1.svg" alt="">
>>>>>>> 1495223e7c1c339aa3315d7392e91d6590662eb2
                    <div>
                        <h6 class="font-semibold"><?php echo esc_html($total_size_title); ?></h6>
                        <p class="text-[#404042]"><?php echo esc_html($total_size); ?></p>
                    </div>
                </li>

                <?php if ($area_acres) : ?>
                    <li class="flex items-center gap-2">
<<<<<<< HEAD
                        <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/areas-4.svg" alt="">
=======
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/areas-4.svg" alt="">
>>>>>>> 1495223e7c1c339aa3315d7392e91d6590662eb2
                        <div>
                            <h6 class="font-semibold"><?php echo esc_html($area_acres_title); ?></h6>
                            <p class="text-[#404042]"><?php echo esc_html($area_acres); ?></p>
                        </div>
                    </li>
                <?php endif; ?>

                <?php if ($total_units) : ?>
                    <li class="flex items-center gap-2">
<<<<<<< HEAD
                        <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/areas-3.svg" alt="">
=======
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/areas-3.svg" alt="">
>>>>>>> 1495223e7c1c339aa3315d7392e91d6590662eb2
                        <div>
                            <h6 class="font-semibold"><?php echo esc_html($total_units_title); ?></h6>
                            <p class="text-[#404042]"><?php echo esc_html($total_units); ?></p>
                        </div>
                    </li>
                <?php endif; ?>

                <?php if ($amenities) : ?>
                    <li class="flex items-center gap-2">
<<<<<<< HEAD
                        <img src="https://localhost/estate_partners/wp-content/uploads/2026/10/areas-2.svg" alt="">
=======
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/areas-2.svg" alt="">
>>>>>>> 1495223e7c1c339aa3315d7392e91d6590662eb2
                        <div>
                            <h6 class="font-semibold"><?php echo esc_html($amenities_title); ?></h6>
                            <p class='text-[#404042]'><?php echo $amenities; ?></p>
                        </div>
                    </li>
                <?php endif; ?>

                <li class="col-span-2">
                    <p class="w-full inline-block text-base px-4 py-2 rounded-lg gap-3 font-medium text-center text-white bg-[#302F5A]">
                        <span class="font-bold"><?php echo esc_html($price); ?></span>
                    </p>
                </li>
        </ul>
    <?php endif; ?>
    </div>
</article>