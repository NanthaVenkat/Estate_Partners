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
$total_units = $details['units'] ?? '__';
$total_size = $details['size'] ?? '__';
$area_acres = $details['areas'] ?? '__';
$amenities  = $details['amenities'] ?? '__';

// taxonomy vterms for data target
$terms = get_the_terms(get_the_id(), 'property_type');

$target_class = '';
if ($terms && !is_wp_Error($terms)) {
    $target_class = strtolower($terms[0]->slug);
}

?>

<article class="project-pannel relative bg-white rounded-2xl hover:border-gold/60 transition-colors shadow-lg" data-target="<?php echo esc_attr($target_class); ?>">

    <!-- Prime Location -->
    <!-- <div class="-left-4 absolute top-45 z-10">
        <p class="rounded-e-lg rounded-tl-lg py-2 px-4 bg-[#302F5A] text-white font-semibold">Prime location</p>
        <div class="-top-0.5 left-0.5 relative w-0 h-0 border-l-[10px] border-l-transparent border-t-[10px] border-t-[#1B1B32] border-r-[10px] border-r-transparent -rotate-135">
        </div>
    </div> -->

    <div class="relative h-52 overflow-hidden rounded-t-2xl">
        <?php if ($image) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($name); ?>" class="w-full h-full object-cover" loading="lazy" />
        <?php endif; ?>

        <?php if ($verified) : ?>
            <span class="absolute top-4 left-4 bg-green-600 text-white font-medium p-1.5 rounded-full text-[0.7rem]">
                <i class="fa-solid fa-check text-green-600 bg-white rounded-full p-1"></i> Verified
            </span>
        <?php endif; ?>

        <!-- <div class="flex flex-col gap-4 absolute top-4 right-4 leading-none text-black">
            <button class="relative rounded-md group cursor-pointer transition-all p-1.5 bg-white">
                Tooltip
                <span class="absolute right-0 top-0 -translate-x-1/2 px-2 py-1 bg-[#302F5A] text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none">
                    Add to Wishlist
                </span>
                <i class="fa-regular fa-heart group-hover:scale-[1.1]"></i>
            </button>

            <button class="relative rounded-md group cursor-pointer transition-all p-1.5 bg-white">
                <span class="absolute right-0 top-0 -translate-x-1/2 px-2 py-1 bg-[#302F5A] text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none">
                    Share
                </span>
                <i class="fa-regular fa-share-from-square group-hover:scale-[1.1]"></i>
            </button>

            <button class="relative rounded-md group cursor-pointer transition-all p-1.5 bg-white">
                <span class="absolute right-0 top-0 -translate-x-1/2 px-2 py-1 bg-[#302F5A] text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none">
                    Compare
                </span>
                <i class="fa-solid fa-code-compare group-hover:scale-[1.1]"></i>
            </button>
        </div> -->
    </div>

    <div class="p-6">

        <h3 class="text-2xl font-semibold text-gold"><?php echo esc_html($name); ?></h3>
        <p class="text-[#302F5A] mt-1">
            <i class="fa-solid fa-location-dot mr-1.5"></i><?php echo esc_html($location); ?>
        </p>

        <ul class="mt-4 grid grid-cols-2 gap-4 text-xs font-medium text-[#302F5A]">
            <?php if ($total_size) : ?>
                <li class="flex items-center gap-2">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/areas-1.svg" alt="">
                    <div>
                        <h6 class="font-semibold">Units</h6>
                        <p class="text-[#404042]"><?php echo esc_html($total_size); ?></p>
                    </div>
                </li>
            <?php endif; ?>

            <?php if ($area_acres) : ?>
                <li class="flex items-center gap-2">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/areas-4.svg" alt="">
                    <div>
                        <h6 class="font-semibold">Areas</h6>
                        <p class="text-[#404042]"><?php echo esc_html($area_acres); ?></p>
                    </div>
                </li>
            <?php endif; ?>

            <?php if ($total_size) : ?>
                <li class="flex items-center gap-2">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/areas-3.svg" alt="">
                    <div>
                        <h6 class="font-semibold">Size</h6>
                        <p class="text-[#404042]"><?php echo esc_html($total_size); ?></p>
                    </div>
                </li>
            <?php endif; ?>

            <?php if ($amenities) : ?>
                <li class="flex items-center gap-2">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/areas-2.svg" alt="">
                    <div>
                        <h6 class="font-semibold">Amenities</h6>
                        <p class='text-[#404042]'><?php echo $amenities; ?></p>
                    </div>
                </li>
            <?php endif; ?>

            <li class="col-span-2">
                <p class="w-full inline-block text-base px-4 py-2 rounded-lg gap-3 font-medium text-center text-white bg-[#302F5A]">
                    <span class="font-bold"><?php echo esc_html($price); ?>
                </p>
            </li>
        </ul>

        <div class="mt-4 grid grid-cols-2 gap-4 text-xs font-medium text-[#302F5A]">
            <a href="tel:<?php echo esc_attr($number); ?>" class="border border-[#302F5A] text-[#302F5A] text-center rounded-lg py-2 px-3">Call Us <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
            <?php if (!empty($page_link)) : ?>
                <a href="<?php echo esc_url($page_link); ?>" class="border border-[#302F5A] text-[#302F5A] text-center rounded-lg py-2 px-3">Know More <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
            <?php else : ?>
                <button
                    type="button"
                    class="js-open-enquiry-modal border border-[#302F5A] text-[#302F5A] text-center rounded-lg py-2 px-3">
                    <span>Enquire Now</span>
                    <i class="fa-regular fa-paper-plane text-xsm ml-2"></i>
                </button>
            <?php endif; ?>
        </div>
    </div>
</article>