<!-- ======================= Calculator ======================= -->
<section id="insights" class="py-16 sm:py-20 lg:py-28 scroll-mt-28">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">

    <div class="max-w-2xl mb-8 mx-auto">
      <h2 class="font-prata text-[#302F5A] text-center text-3xl sm:text-4xl leading-tight">Helpful Tools</h2>
    </div>

    <div class="swiper tools-swiper">
      <div class="swiper-wrapper pb-12">

        <!-- Slide 1 -->
        <div class="swiper-slide !h-auto">
          <div class="flex items-center gap-4 h-full rounded-lg border border-gold/50 bg-gold/10 p-4">
            <img src="https://estatepartners.in/wp-content/uploads/2026/10/calculator-2-scaled.png" alt="" class="w-full h-full max-w-[7.5rem] object-cover rounded-lg shrink-0">
            <div class="flex flex-col flex-1 min-w-0 self-stretch">
              <h3 class="text-gold font-semibold text-lg sm:text-xl leading-snug">EMI Calculator</h3>
              <p class="text-[#4D5461] text-sm sm:text-base mt-1">EMI starts at ₹ 11.27 K</p>
              <a href="https://estatepartners.in/home-lone-calculator/" class="mt-auto pt-3 self-start">
                <span class="inline-flex items-center gap-2 whitespace-nowrap text-white font-semibold text-sm rounded-lg px-5 py-2.5 bg-[#302F5A] hover:bg-gold transition-colors">
                  Calculate now <i class="fa-solid fa-arrow-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide !h-auto">
          <div class="flex items-center gap-4 h-full rounded-lg border border-gold/50 bg-gold/10 p-4">
            <img src="https://estatepartners.in/wp-content/uploads/2026/10/calculator-1.png" alt="" class="w-full h-full max-w-[7.5rem] object-cover rounded-lg shrink-0">
            <div class="flex flex-col flex-1 min-w-0 self-stretch">
              <h3 class="text-gold font-semibold text-lg sm:text-xl leading-snug">Stamp Duty Calculator</h3>
              <p class="text-[#4D5461] text-sm sm:text-base mt-1">Find your stamp duty &amp; registration fees</p>
              <a href="https://estatepartners.in/stamp-duty-calculator/" class="mt-auto pt-3 self-start">
                <span class="inline-flex items-center gap-2 whitespace-nowrap text-white font-semibold text-sm rounded-lg px-5 py-2.5 bg-[#302F5A] hover:bg-gold transition-colors">
                  Calculate now <i class="fa-solid fa-arrow-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide !h-auto">
          <div class="flex items-center gap-4 h-full rounded-lg border border-gold/50 bg-gold/10 p-4">
            <img src="https://estatepartners.in/wp-content/uploads/2026/10/calculator-3.png" alt="" class="w-full h-full max-w-[7.5rem] object-cover rounded-lg shrink-0">
            <div class="flex flex-col flex-1 min-w-0 self-stretch">
              <h3 class="text-gold font-semibold text-lg sm:text-xl leading-snug">Price Calculator</h3>
              <p class="text-[#4D5461] text-sm sm:text-base mt-1">Check the price of your property</p>
              <a href="https://estatepartners.in/plot-price-calculator/" class="mt-auto pt-3 self-start">
                <span class="inline-flex items-center gap-2 whitespace-nowrap text-white font-semibold text-sm rounded-lg px-5 py-2.5 bg-[#302F5A] hover:bg-gold transition-colors">
                  Calculate now <i class="fa-solid fa-arrow-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="swiper-slide !h-auto">
          <div class="flex items-center gap-4 h-full rounded-lg border border-gold/50 bg-gold/10 p-4">
            <img src="https://estatepartners.in/wp-content/uploads/2026/10/calculator-4.png" alt="" class="w-full h-full max-w-[7.5rem] object-cover rounded-lg shrink-0">
            <div class="flex flex-col flex-1 min-w-0 self-stretch">
              <h3 class="text-gold font-semibold text-lg sm:text-xl leading-snug">Tax Benefit Calculator</h3>
              <p class="text-[#4D5461] text-sm sm:text-base mt-1">Estimate your home loan tax savings</p>
              <a href="https://estatepartners.in/home-loan-tax-calculator/" class="mt-auto pt-3 self-start">
                <span class="inline-flex items-center gap-2 whitespace-nowrap text-white font-semibold text-sm rounded-lg px-5 py-2.5 bg-[#302F5A] hover:bg-gold transition-colors">
                  Calculate now <i class="fa-solid fa-arrow-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

      </div>

      <!-- Dots only (arrows removed: they sat on top of the cards) -->
      <div class="swiper-pagination tools-pagination"></div>
    </div>
  </div>
</section>

<style>
  .tools-swiper .swiper-pagination-bullet-active { background: #b3814e; }
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
  if (window.Swiper) {
    new Swiper('.tools-swiper', {
      slidesPerView: 1,
      spaceBetween: 16,
      pagination: { el: '.tools-pagination', clickable: true },
      breakpoints: {
        768:  { slidesPerView: 2, spaceBetween: 20 },
        1280: { slidesPerView: 3, spaceBetween: 24 }
      }
    });
  }
});
</script>