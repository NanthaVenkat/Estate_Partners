<!-- ======================= Calculator ======================= -->
<section id="insights" class="py-16 sm:py-20 lg:py-24 scroll-mt-24">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">

        <div class="max-w-2xl mb-6 mx-auto">
            <h2 class="font-prata text-[#302F5A] text-center text-3xl sm:text-4xl leading-tight">Helpful Tools</h2>
        </div>

        <!-- Swiper -->
        <div class="swiper tools-swiper">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="flex rounded-lg gap-4 border border-gold/70 bg-gold/20 p-4 h-full">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/calculator-2-scaled.png" alt="" class="w-24 h-24 object-cover rounded-lg shrink-0">
                        <div class="space-y-2">
                            <h2 class="text-gold font-semibold text-xl">EMI Calculator</h2>
                            <p class="text-[#4D5461] text-base">EMI starts at ₹ 11.27 K</p>
                            <a href="http://localhost/estate_partners/home-lone-calculator/" class="text-white font-semibold text-sm rounded-lg px-6 py-3 bg-[#302F5A] inline-block">
                                Calculate now <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="flex rounded-lg gap-4 border border-gold/70 bg-gold/20 p-4 h-full">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/calculator-1.png" alt="" class="w-24 h-24 object-cover rounded-lg shrink-0">
                        <div class="space-y-2">
                            <h2 class="text-gold font-semibold text-xl">Stamp Duty Calculator</h2>
                            <p class="text-[#4D5461] text-base">Find your home loan limit</p>
                            <a href="http://localhost/estate_partners/stamp-duty-calculator/" class="text-white font-semibold text-sm rounded-lg px-6 py-3 bg-[#302F5A] inline-block">
                                Calculate now <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="flex rounded-lg gap-4 border border-gold/70 bg-gold/20 p-4 h-full">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/calculator-3.png" alt="" class="w-24 h-24 object-cover rounded-lg shrink-0">
                        <div class="space-y-2">
                            <h2 class="text-gold font-semibold text-xl">Price Calculator</h2>
                            <p class="text-[#4D5461] text-base">Check the price of your property</p>
                            <a href="http://localhost/estate_partners/plot-price-calculator/" class="text-white font-semibold text-sm rounded-lg px-6 py-3 bg-[#302F5A] inline-block">
                                Calculate now <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div class="flex rounded-lg gap-4 border border-gold/70 bg-gold/20 p-4 h-full">
                        <img src="http://localhost/estate_partners/wp-content/uploads/2026/10/calculator-4.png" alt="" class="w-24 h-24 object-cover rounded-lg shrink-0">
                        <div class="space-y-2">
                            <h2 class="text-gold font-semibold text-xl">Tax Benefit Calculator</h2>
                            <p class="text-[#4D5461] text-base">Check the price of your property</p>
                            <a href="http://localhost/estate_partners/home-loan-tax-calculator/" class="text-white font-semibold text-sm rounded-lg px-6 py-3 bg-[#302F5A] inline-block">
                                Calculate now <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Navigation arrows (optional) -->
            <div class="swiper-button-prev tools-prev"></div>
            <div class="swiper-button-next tools-next"></div>

            <!-- Pagination (optional) -->
            <div class="swiper-pagination tools-pagination mt-6"></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (window.Swiper) {
            new Swiper('.tools-swiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: false,
                pagination: {
                    el: '.tools-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.tools-next',
                    prevEl: '.tools-prev',
                },
                breakpoints: {
                    640: { // sm
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1024: { // lg
                        slidesPerView: 3,
                        spaceBetween: 24,
                    }
                }
            });
        }
    });
</script>