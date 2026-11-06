    <section id="floor-plans" class="bg-[#faf6f1] py-12 sm:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">
            <h2 class="font-prata text-2xl sm:text-3xl text-[#302F5A] text-center uppercase">Floor Layout Plans</h2>

            <!-- LEVEL 1 -->
            <div role="tablist" data-tabs aria-label="Tower and configuration"
                class="mt-8 flex flex-wrap justify-center gap-4">

                <!-- Executive Tower: label + its BHK tabs. data-tab-group gets data-active="true" from the script
           whenever one of ITS tabs is selected, which switches the whole pill to the navy style. -->
                <div data-tab-group
                    class="group/g flex items-center gap-3 sm:gap-4 rounded-full border border-gold bg-white p-2 pl-6 sm:pl-8 data-[active=true]:bg-[#302F5A] data-[active=true]:border-[#302F5A] transition-colors">
                    <span class="text-sm font-medium text-gold group-data-[active=true]/g:text-white">Executive
                        Tower</span>
                    <div
                        class="flex items-center rounded-full border border-gold group-data-[active=true]/g:border-white bg-white p-1">
                        <button type="button" role="tab" id="tab-bhk-2" aria-controls="bhk-2" aria-selected="true"
                            class="rounded-full px-6 sm:px-8 py-2.5 text-sm font-medium transition-colors text-gold group-data-[active=true]/g:text-[#302F5A] aria-selected:!bg-[#302F5A] aria-selected:!text-white">2
                            BHK</button>
                        <span aria-hidden="true" class="w-px h-5 bg-gold/40"></span>
                        <button type="button" role="tab" id="tab-bhk-3" aria-controls="bhk-3" aria-selected="false"
                            class="rounded-full px-6 sm:px-8 py-2.5 text-sm font-medium transition-colors text-gold group-data-[active=true]/g:text-[#302F5A] aria-selected:!bg-[#302F5A] aria-selected:!text-white">3
                            BHK</button>
                    </div>
                </div>

                <!-- Signature Tower: label + its BHK tabs. data-tab-group gets data-active="true" from the script
           whenever one of ITS tabs is selected, which switches the whole pill to the navy style. -->
                <div data-tab-group
                    class="group/g flex items-center gap-3 sm:gap-4 rounded-full border border-gold bg-white p-2 pl-6 sm:pl-8 data-[active=true]:bg-[#302F5A] data-[active=true]:border-[#302F5A] transition-colors">
                    <span class="text-sm font-medium text-gold group-data-[active=true]/g:text-white">Signature
                        Tower</span>
                    <div
                        class="flex items-center rounded-full border border-gold group-data-[active=true]/g:border-white bg-white p-1">
                        <button type="button" role="tab" id="tab-bhk-35" aria-controls="bhk-35" aria-selected="false"
                            class="rounded-full px-6 sm:px-8 py-2.5 text-sm font-medium transition-colors text-gold group-data-[active=true]/g:text-[#302F5A] aria-selected:!bg-[#302F5A] aria-selected:!text-white">3.5
                            BHK</button>
                        <span aria-hidden="true" class="w-px h-5 bg-gold/40"></span>
                        <button type="button" role="tab" id="tab-bhk-4" aria-controls="bhk-4" aria-selected="false"
                            class="rounded-full px-6 sm:px-8 py-2.5 text-sm font-medium transition-colors text-gold group-data-[active=true]/g:text-[#302F5A] aria-selected:!bg-[#302F5A] aria-selected:!text-white">4
                            BHK</button>
                    </div>
                </div>
            </div>

            <div role="tabpanel" id="bhk-2" aria-labelledby="tab-bhk-2">
                <!-- LEVEL 2: sizes for 2 BHK (Executive Tower) -->
                <div role="tablist" data-tabs aria-label="2 BHK sizes"
                    class="mt-6 flex overflow-x-auto border-b border-gray-300 [scrollbar-width:none]">
                    <button type="button" role="tab" id="tab-bhk-2-1" aria-controls="bhk-2-1" aria-selected="true"
                        class="flex-1 min-w-[170px] px-3 py-3 text-xs text-[#444444] border-b-2 border-transparent -mb-px transition-colors aria-selected:border-gold aria-selected:text-[#302F5A] aria-selected:font-semibold">2537
                        sq.ft ( 2 BHK )</button>
                    <button type="button" role="tab" id="tab-bhk-2-2" aria-controls="bhk-2-2" aria-selected="false"
                        class="flex-1 min-w-[170px] px-3 py-3 text-xs text-[#444444] border-b-2 border-transparent -mb-px transition-colors aria-selected:border-gold aria-selected:text-[#302F5A] aria-selected:font-semibold">3764
                        sq.ft ( 2 BHK )</button>
                    <button type="button" role="tab" id="tab-bhk-2-3" aria-controls="bhk-2-3" aria-selected="false"
                        class="flex-1 min-w-[170px] px-3 py-3 text-xs text-[#444444] border-b-2 border-transparent -mb-px transition-colors aria-selected:border-gold aria-selected:text-[#302F5A] aria-selected:font-semibold">2964
                        sq.ft ( 2 BHK )</button>
                    <button type="button" role="tab" id="tab-bhk-2-4" aria-controls="bhk-2-4" aria-selected="false"
                        class="flex-1 min-w-[170px] px-3 py-3 text-xs text-[#444444] border-b-2 border-transparent -mb-px transition-colors aria-selected:border-gold aria-selected:text-[#302F5A] aria-selected:font-semibold">3850
                        sq.ft ( 2 BHK )</button>
                    <button type="button" role="tab" id="tab-bhk-2-5" aria-controls="bhk-2-5" aria-selected="false"
                        class="flex-1 min-w-[170px] px-3 py-3 text-xs text-[#444444] border-b-2 border-transparent -mb-px transition-colors aria-selected:border-gold aria-selected:text-[#302F5A] aria-selected:font-semibold">3961
                        sq.ft ( 2 BHK )</button>
                </div>

                <div role="tabpanel" id="bhk-2-1" aria-labelledby="tab-bhk-2-1"
                    class="relative mt-5 bg-white p-3 sm:p-6">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/11/2bhk.png"
                        alt="Executive Tower 2 BHK floor plan, 2537 sq.ft" class="mx-auto w-full max-w-4xl h-auto"
                        loading="lazy" />
                </div>

                <div role="tabpanel" id="bhk-2-2" aria-labelledby="tab-bhk-2-2" hidden
                    class="relative mt-5 bg-white p-3 sm:p-6">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/11/2bhk.png"
                        alt="Executive Tower 2 BHK floor plan, 3764 sq.ft" class="mx-auto w-full max-w-4xl h-auto"
                        loading="lazy" />
                </div>

                <div role="tabpanel" id="bhk-2-3" aria-labelledby="tab-bhk-2-3" hidden
                    class="relative mt-5 bg-white p-3 sm:p-6">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/11/2bhk.png"
                        alt="Executive Tower 2 BHK floor plan, 2964 sq.ft" class="mx-auto w-full max-w-4xl h-auto"
                        loading="lazy" />
                </div>

                <div role="tabpanel" id="bhk-2-4" aria-labelledby="tab-bhk-2-4" hidden
                    class="relative mt-5 bg-white p-3 sm:p-6">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/11/2bhk.png"
                        alt="Executive Tower 2 BHK floor plan, 3850 sq.ft" class="mx-auto w-full max-w-4xl h-auto"
                        loading="lazy" />
                </div>

                <div role="tabpanel" id="bhk-2-5" aria-labelledby="tab-bhk-2-5" hidden
                    class="relative mt-5 bg-white p-3 sm:p-6">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/11/2bhk.png"
                        alt="Executive Tower 2 BHK floor plan, 3961 sq.ft" class="mx-auto w-full max-w-4xl h-auto"
                        loading="lazy" />
                </div>
            </div>

            <div role="tabpanel" id="bhk-3" aria-labelledby="tab-bhk-3" hidden>
                <!-- LEVEL 2: sizes for 3 BHK (Executive Tower) -->
                <div role="tablist" data-tabs aria-label="3 BHK sizes"
                    class="mt-6 flex overflow-x-auto border-b border-gray-300 [scrollbar-width:none]">
                    <button type="button" role="tab" id="tab-bhk-3-1" aria-controls="bhk-3-1" aria-selected="true"
                        class="flex-1 min-w-[170px] px-3 py-3 text-xs text-[#444444] border-b-2 border-transparent -mb-px transition-colors aria-selected:border-gold aria-selected:text-[#302F5A] aria-selected:font-semibold">2137
                        sq.ft ( 3 BHK )</button>
                    <button type="button" role="tab" id="tab-bhk-3-2" aria-controls="bhk-3-2" aria-selected="false"
                        class="flex-1 min-w-[170px] px-3 py-3 text-xs text-[#444444] border-b-2 border-transparent -mb-px transition-colors aria-selected:border-gold aria-selected:text-[#302F5A] aria-selected:font-semibold">2250
                        sq.ft ( 3 BHK )</button>
                </div>

                <div role="tabpanel" id="bhk-3-1" aria-labelledby="tab-bhk-3-1"
                    class="relative mt-5 bg-white p-3 sm:p-6">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/11/2bhk.png"
                        alt="Executive Tower 3 BHK floor plan, 2137 sq.ft" class="mx-auto w-full max-w-4xl h-auto"
                        loading="lazy" />
                </div>

                <div role="tabpanel" id="bhk-3-2" aria-labelledby="tab-bhk-3-2" hidden
                    class="relative mt-5 bg-white p-3 sm:p-6">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/11/2bhk.png"
                        alt="Executive Tower 3 BHK floor plan, 2250 sq.ft" class="mx-auto w-full max-w-4xl h-auto"
                        loading="lazy" />
                </div>
            </div>

            <div role="tabpanel" id="bhk-35" aria-labelledby="tab-bhk-35" hidden>
                <!-- LEVEL 2: sizes for 3.5 BHK (Signature Tower) -->
                <div role="tablist" data-tabs aria-label="3.5 BHK sizes"
                    class="mt-6 flex overflow-x-auto border-b border-gray-300 [scrollbar-width:none]">
                    <button type="button" role="tab" id="tab-bhk-35-1" aria-controls="bhk-35-1" aria-selected="true"
                        class="flex-1 min-w-[170px] px-3 py-3 text-xs text-[#444444] border-b-2 border-transparent -mb-px transition-colors aria-selected:border-gold aria-selected:text-[#302F5A] aria-selected:font-semibold">2537
                        sq.ft ( 3.5 BHK )</button>
                    <button type="button" role="tab" id="tab-bhk-35-2" aria-controls="bhk-35-2" aria-selected="false"
                        class="flex-1 min-w-[170px] px-3 py-3 text-xs text-[#444444] border-b-2 border-transparent -mb-px transition-colors aria-selected:border-gold aria-selected:text-[#302F5A] aria-selected:font-semibold">2600
                        sq.ft ( 3.5 BHK )</button>
                </div>

                <div role="tabpanel" id="bhk-35-1" aria-labelledby="tab-bhk-35-1"
                    class="relative mt-5 bg-white p-3 sm:p-6">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/11/2bhk.png"
                        alt="Signature Tower 3.5 BHK floor plan, 2537 sq.ft" class="mx-auto w-full max-w-4xl h-auto"
                        loading="lazy" />
                </div>

                <div role="tabpanel" id="bhk-35-2" aria-labelledby="tab-bhk-35-2" hidden
                    class="relative mt-5 bg-white p-3 sm:p-6">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/11/2bhk.png"
                        alt="Signature Tower 3.5 BHK floor plan, 2600 sq.ft" class="mx-auto w-full max-w-4xl h-auto"
                        loading="lazy" />
                </div>
            </div>

            <div role="tabpanel" id="bhk-4" aria-labelledby="tab-bhk-4" hidden>
                <!-- LEVEL 2: sizes for 4 BHK (Signature Tower) -->
                <div role="tablist" data-tabs aria-label="4 BHK sizes"
                    class="mt-6 flex overflow-x-auto border-b border-gray-300 [scrollbar-width:none]">
                    <button type="button" role="tab" id="tab-bhk-4-1" aria-controls="bhk-4-1" aria-selected="true"
                        class="flex-1 min-w-[170px] px-3 py-3 text-xs text-[#444444] border-b-2 border-transparent -mb-px transition-colors aria-selected:border-gold aria-selected:text-[#302F5A] aria-selected:font-semibold">3332
                        sq.ft ( 4 BHK )</button>
                </div>

                <div role="tabpanel" id="bhk-4-1" aria-labelledby="tab-bhk-4-1"
                    class="relative mt-5 bg-white p-3 sm:p-6">
                    <img src="http://localhost/estate_partners/wp-content/uploads/2026/11/2bhk.png"
                        alt="Signature Tower 4 BHK floor plan, 3332 sq.ft" class="mx-auto w-full max-w-4xl h-auto"
                        loading="lazy" />
                </div>
            </div>
        </div>
    </section>
    <!-- ============ SECTION END ============ -->

