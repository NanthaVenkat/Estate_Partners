<?php

/**
 * Template Name: Plot Price Calculator
 *
 * Plot price calculator (cents / sq.ft) with live results, measurement and plot-size guides,
 * FAQ accordion (with FAQPage schema) and CTA strip.
 *
 * Applies automatically to a page with the slug "plot-price-calculator",
 * or choose "Plot Price Calculator" in Page Attributes > Template.
 *
 * @package YourThemeName
 */

get_header();

$td   = 'your-theme-textdomain';
$home = home_url('/');

/* ------------------------------------------------------------------ *
 * Calculator settings (edit here; the JavaScript reads these)
 * ------------------------------------------------------------------ */
$plot = array(
    'sqft_per_cent'      => 435.6,    // 1 cent = 435.6 sq.ft
    'def_cents'          => 5,
    'def_price_per_cent' => 1500000,  // ₹15,00,000 per cent
);

$container = 'container mx-auto px-4 sm:px-6 lg:px-8';
$h2        = 'text-xl sm:text-2xl font-semibold text-[#302F5A]';
$h3        = 'font-semibold text-[#302F5A]';
$p         = 'text-sm sm:text-base leading-relaxed text-[#444444]';
$ul        = 'list-disc pl-6 space-y-1 text-sm sm:text-base leading-relaxed text-[#444444]';
$th        = 'px-6 py-5 font-semibold border-r border-white/20 last:border-r-0';
$td_cell   = 'px-6 py-5 border-r border-ink-line last:border-r-0';

$sqft = (float) $plot['sqft_per_cent'];

$conversions = array(
    array('1 Cent',     $plot['sqft_per_cent'] . ' sq. ft'),
    array('1 Sq. Yard', '9 sq. ft'),
    array('1 Sq. Metre', '10.764 sq. ft'),
    array('1 Acre',     '43,560 sq. ft'),
);

$plot_sizes = array(
    array(2, false, 'Compact home'),
    array(3, false, 'Small family home'),
    array(4, false, 'Comfortable family home'),
    array(5, false, 'Larger home with open space'),
    array(6, true,  'Spacious home / larger requirements'),
);

$budget = array(
    'Plot price',
    'Stamp duty',
    'Registration charges',
    'Applicable taxes',
    'Legal/documentation charges',
    'Development or infrastructure charges, where applicable',
    'Other project-specific charges',
);

$faqs = array(
    array(
        'q' => 'How do I calculate the area of a plot?',
        'a' => 'Plot area can be calculated by multiplying the length by the width of the plot. For example, a 30 ft × 40 ft plot has an area of 1,200 sq. ft.'
    ),
    array(
        'q' => 'How many square feet are there in 1 cent?',
        'a' => '1 cent is equal to ' . $plot['sqft_per_cent'] . ' sq. ft.'
    ),
    array(
        'q' => 'How many cents are in 1 acre?',
        'a' => '1 acre is equal to 100 cents, since 1 acre is 43,560 sq. ft. and 1 cent is ' . $plot['sqft_per_cent'] . ' sq. ft.'
    ),
    array(
        'q' => 'How do I calculate the price of a plot?',
        'a' => 'Multiply the plot area by the price per unit. If the price is quoted per cent, multiply the number of cents by the price per cent. If it is quoted per sq. ft., multiply the area in sq. ft. by the price per sq. ft.'
    ),
    array(
        'q' => 'Can I convert cents into square feet?',
        'a' => 'Yes. Multiply the number of cents by ' . $plot['sqft_per_cent'] . '. For example, 5 cents × ' . $plot['sqft_per_cent'] . ' = ' . number_format(5 * $sqft) . ' sq. ft. The calculator above does this automatically.'
    ),
    array(
        'q' => 'Can I calculate plot dimensions using the plot area?',
        'a' => 'Not exactly. Many different length and width combinations give the same area. For example, 1,200 sq. ft. could be 30 ft × 40 ft or 24 ft × 50 ft, so check the layout plan for the actual dimensions.'
    ),
);

$schema = array(
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => array_map(
        function ($faq) {
            return array(
                '@type'          => 'Question',
                'name'           => $faq['q'],
                'acceptedAnswer' => array('@type' => 'Answer', 'text' => $faq['a']),
            );
        },
        $faqs
    ),
);

$field = 'w-full h-12 rounded-md bg-white text-[#444444] text-sm outline-none focus:ring-2 focus:ring-gold-light';
?>

<style>
    /* Cents / Sq.ft toggle */
    .pp-toggle {
        color: #302F5A;
        transition: background-color .2s, color .2s;
    }

    .pp-toggle[aria-pressed="true"] {
        background: #b3814e;
        color: #fff;
    }

    /* FAQ plus / minus icons: show only one at a time (plain CSS, independent of Tailwind variants) */
    .faq-minus {
        display: none;
    }

    details[open]>summary .faq-plus {
        display: none;
    }

    details[open]>summary .faq-minus {
        display: inline;
    }
</style>

<main id="primary" class="site-main">

    <!-- ======================= PAGE TITLE ======================= -->
    <section class="pt-10 sm:pt-12">
        <div class="<?php echo esc_attr($container); ?>">
            <h1 class="font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight"><?php echo esc_html(get_the_title() ? get_the_title() : __('Plot Price Calculator', $td)); ?></h1>
            <span class="mt-3 block h-[3px] w-14 rounded bg-gold"></span>
        </div>
    </section>

    <!-- ======================= CALCULATOR ======================= -->
    <section class="py-8 sm:py-10">
        <div class="<?php echo esc_attr($container); ?>">
            <div id="plot-calculator"
                class="reveal grid grid-cols-1 lg:grid-cols-2 overflow-hidden rounded-lg border border-ink-line shadow-xl scroll-mt-28"
                data-sqft-per-cent="<?php echo esc_attr($plot['sqft_per_cent']); ?>"
                data-def-cents="<?php echo esc_attr($plot['def_cents']); ?>"
                data-def-price="<?php echo esc_attr($plot['def_price_per_cent']); ?>">

                <!-- Inputs -->
                <div class="bg-[#302F5A] text-white p-6 sm:p-10 lg:p-12 space-y-8">

                    <div>
                        <div class="grid grid-cols-2 gap-1 rounded-md bg-white p-1 border border-white" role="group" aria-label="<?php esc_attr_e('Choose unit', $td); ?>">
                            <button type="button" class="pp-toggle h-12 rounded text-sm font-medium" data-mode="cents" aria-pressed="true"><?php esc_html_e('Cents', $td); ?></button>
                            <button type="button" class="pp-toggle h-12 rounded text-sm font-medium" data-mode="sqft" aria-pressed="false"><?php esc_html_e('Sq.ft', $td); ?></button>
                        </div>
                        <p id="pp-hint" class="mt-3 text-xs text-white/90"><?php esc_html_e('Enter total cents to calculate the price and sq.ft', $td); ?></p>
                    </div>

                    <div>
                        <label id="pp-area-label" for="pp-area" class="block text-lg font-semibold mb-3"><?php esc_html_e('Enter Total No of Cents', $td); ?></label>
                        <input id="pp-area" type="text" inputmode="decimal" maxlength="12" autocomplete="off" placeholder="5" class="<?php echo esc_attr($field); ?> px-5" />
                    </div>

                    <div>
                        <label id="pp-price-label" for="pp-price" class="block text-lg font-semibold mb-3"><?php esc_html_e('Enter Price per cent (₹)', $td); ?></label>
                        <div class="relative">
                            <span class="pointer-events-none absolute left-5 top-1/2 -translate-y-1/2 text-sm text-[#444444]" aria-hidden="true">₹</span>
                            <input id="pp-price" type="text" inputmode="decimal" maxlength="14" autocomplete="off" placeholder="1500000" class="<?php echo esc_attr($field); ?> pl-10 pr-5" />
                        </div>
                    </div>
                </div>

                <!-- Results -->
                <div class="bg-[#fbf6f0] text-[#302F5A] p-6 sm:p-10 lg:p-12 flex flex-col justify-center" aria-live="polite">
                    <p class="text-sm text-[#6f6f6f]"><?php esc_html_e('Total Value', $td); ?></p>
                    <p id="pp-total" class="mt-2 text-3xl sm:text-4xl font-semibold">₹ 0</p>
                    <p id="pp-short" class="mt-2 text-sm text-[#6f6f6f] min-h-[1.25rem]"></p>

                    <dl class="mt-8 text-sm sm:text-base">
                        <div class="flex items-center justify-between gap-4 border-b border-ink-line py-3">
                            <dt class="text-[#6f6f6f]"><?php esc_html_e('Area in cents', $td); ?></dt>
                            <dd id="pp-out-cents" class="font-semibold">0</dd>
                        </div>
                        <div class="flex items-center justify-between gap-4 border-b border-ink-line py-3">
                            <dt class="text-[#6f6f6f]"><?php esc_html_e('Area in Sq.ft', $td); ?></dt>
                            <dd id="pp-out-sqft" class="font-semibold">0</dd>
                        </div>
                        <div class="flex items-center justify-between gap-4 border-b border-ink-line py-3">
                            <dt class="text-[#6f6f6f]"><?php esc_html_e('Price per cent', $td); ?></dt>
                            <dd id="pp-out-ppc" class="font-semibold">₹ 0.00</dd>
                        </div>
                        <div class="flex items-center justify-between gap-4 border-b border-ink-line py-3">
                            <dt class="text-[#6f6f6f]"><?php esc_html_e('Price per sq.ft', $td); ?></dt>
                            <dd id="pp-out-ppsf" class="font-semibold">₹ 0.00</dd>
                        </div>
                    </dl>

                    <p class="mt-5 text-xs text-[#6f6f6f]">
                        <?php
                        printf(
                            /* translators: %s: sq.ft per cent */
                            esc_html__('1 Cent = %s Sq.ft. Figures are estimates.', $td),
                            esc_html($plot['sqft_per_cent'])
                        );
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================= CONTENT ======================= -->
    <section class="pb-16 sm:pb-20">
        <div class="<?php echo esc_attr($container); ?> space-y-14">

            <!-- Area & measurement guide -->
            <div>
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('Plot Area & Measurement Guide', $td); ?></h2>
                <span class="mt-3 block h-[3px] w-14 rounded bg-gold"></span>

                <h3 class="mt-6 <?php echo esc_attr($h3); ?>"><?php esc_html_e('Understand Your Plot Size', $td); ?></h3>
                <p class="mt-2 <?php echo esc_attr($p); ?>"><?php echo wp_kses(__('Plot measurements are commonly expressed in <strong class="text-[#302F5A]">sq. ft., cents, sq. yards, sq. metres and acres.</strong> Use the calculator above to convert between units and understand the total area of your plot.', $td), array('strong' => array('class' => array()))); ?></p>

                <h3 class="mt-5 <?php echo esc_attr($h3); ?>"><?php esc_html_e('Common conversions:', $td); ?></h3>

                <div class="mt-4 max-w-xl overflow-hidden rounded-lg border border-ink-line">
                    <table class="w-full text-sm text-center">
                        <thead class="bg-[#302F5A] text-white">
                            <tr>
                                <th scope="col" class="<?php echo esc_attr($th); ?>"><?php esc_html_e('Unit', $td); ?></th>
                                <th scope="col" class="<?php echo esc_attr($th); ?>"><?php esc_html_e('Equivalent', $td); ?></th>
                            </tr>
                        </thead>
                        <tbody class="text-[#444444]">
                            <?php foreach ($conversions as $row) : ?>
                                <tr class="border-b border-ink-line last:border-b-0">
                                    <td class="<?php echo esc_attr($td_cell); ?>"><?php echo esc_html($row[0]); ?></td>
                                    <td class="<?php echo esc_attr($td_cell); ?>"><?php echo esc_html($row[1]); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <p class="mt-6 <?php echo esc_attr($p); ?>"><?php echo wp_kses(__('You can also calculate the plot area using its <strong class="text-[#302F5A]">length × width.</strong>', $td), array('strong' => array('class' => array()))); ?></p>
                <p class="mt-2 <?php echo esc_attr($p); ?>"><strong class="text-[#302F5A]"><?php esc_html_e('Example:', $td); ?></strong> <?php esc_html_e('A 30 ft × 40 ft plot has an area of 1,200 sq. ft.', $td); ?></p>
            </div>

            <!-- How to calculate plot price -->
            <div>
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('How to Calculate Plot Price', $td); ?></h2>
                <span class="mt-3 block h-[3px] w-14 rounded bg-gold"></span>

                <h3 class="mt-6 <?php echo esc_attr($h3); ?>"><?php esc_html_e('Calculate the Total Cost of Your Plot', $td); ?></h3>
                <p class="mt-2 <?php echo esc_attr($p); ?>"><?php echo wp_kses(__('The total plot price depends on the <strong class="text-[#302F5A]">plot area and price per unit.</strong>', $td), array('strong' => array('class' => array()))); ?></p>

                <h3 class="mt-5 <?php echo esc_attr($h3); ?>"><?php esc_html_e('Formula:', $td); ?></h3>
                <p class="mt-2 <?php echo esc_attr($p); ?>"><?php esc_html_e('Plot Price = Plot Area × Price per Sq. Ft.', $td); ?></p>

                <p class="mt-4 <?php echo esc_attr($p); ?>"><?php esc_html_e('For example:', $td); ?></p>
                <ul class="mt-2 space-y-1 <?php echo esc_attr($p); ?>">
                    <li><strong class="text-[#302F5A]"><?php esc_html_e('Plot Area:', $td); ?></strong> 1,200 sq. ft.</li>
                    <li><strong class="text-[#302F5A]"><?php esc_html_e('Price:', $td); ?></strong> ₹2,500 per sq. ft.</li>
                    <li><strong class="text-[#302F5A]"><?php esc_html_e('Estimated Plot Price:', $td); ?></strong> ₹30,00,000</li>
                </ul>

                <p class="mt-4 <?php echo esc_attr($p); ?>"><?php echo wp_kses(__('If a project quotes its price <strong class="text-[#302F5A]">per cent</strong>, use:', $td), array('strong' => array('class' => array()))); ?></p>
                <p class="mt-2 <?php echo esc_attr($p); ?>"><?php esc_html_e('Plot Price = Number of Cents × Price per Cent', $td); ?></p>
            </div>

            <!-- Plot size guide -->
            <div>
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('Plot Size Guide', $td); ?></h2>
                <span class="mt-3 block h-[3px] w-14 rounded bg-gold"></span>

                <h3 class="mt-6 <?php echo esc_attr($h3); ?>"><?php esc_html_e('What Can You Build on Different Plot Sizes?', $td); ?></h3>

                <div class="mt-4 max-w-3xl overflow-hidden rounded-lg border border-ink-line">
                    <div class="overflow-x-auto">
                        <table class="w-full min-w-[480px] text-sm text-center">
                            <thead class="bg-[#302F5A] text-white">
                                <tr>
                                    <th scope="col" class="<?php echo esc_attr($th); ?>"><?php esc_html_e('Plot Size', $td); ?></th>
                                    <th scope="col" class="<?php echo esc_attr($th); ?>"><?php esc_html_e('Approx. Area', $td); ?></th>
                                    <th scope="col" class="<?php echo esc_attr($th); ?>"><?php esc_html_e('Suitable For', $td); ?></th>
                                </tr>
                            </thead>
                            <tbody class="text-[#444444]">
                                <?php foreach ($plot_sizes as $size) : ?>
                                    <tr class="border-b border-ink-line last:border-b-0">
                                        <td class="<?php echo esc_attr($td_cell); ?>"><?php echo esc_html($size[0] . ($size[1] ? '+' : '') . ' Cents'); ?></td>
                                        <td class="<?php echo esc_attr($td_cell); ?>"><?php echo esc_html(number_format(round($size[0] * $sqft)) . ($size[1] ? '+' : '') . ' sq. ft.'); ?></td>
                                        <td class="<?php echo esc_attr($td_cell); ?> text-left"><?php echo esc_html($size[2]); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <p class="mt-6 <?php echo esc_attr($p); ?>"><?php esc_html_e('The ideal plot size depends on your house plan, setbacks, road width, local building regulations and the space you want for parking, garden and other outdoor areas. Before finalising a plot, check the applicable development and construction rules for the specific location.', $td); ?></p>
            </div>

            <!-- Buying cost -->
            <div>
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('Plot Buying Cost – What Should You Budget?', $td); ?></h2>
                <span class="mt-3 block h-[3px] w-14 rounded bg-gold"></span>

                <h3 class="mt-6 <?php echo esc_attr($h3); ?>"><?php esc_html_e('More Than Just the Plot Price', $td); ?></h3>
                <p class="mt-2 <?php echo esc_attr($p); ?>"><?php esc_html_e('When buying a residential plot, the total acquisition cost can include more than the quoted plot price. Depending on the project and transaction, buyers may need to consider:', $td); ?></p>
                <ul class="mt-3 <?php echo esc_attr($ul); ?>">
                    <?php foreach ($budget as $item) : ?>
                        <li><?php echo esc_html($item); ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?php echo esc_url(home_url('/stamp-duty-calculator/')); ?>" class="mt-4 inline-flex items-center gap-2 font-semibold text-[#302F5A] hover:text-gold transition-colors"><?php esc_html_e('Estimate your stamp duty & registration charges', $td); ?> <i class="fa-solid fa-arrow-right text-xs" aria-hidden="true"></i></a>
            </div>

            <!-- Explore projects box -->
            <div class="reveal rounded-xl border border-ink-line bg-gradient-to-r from-brand-cream to-[#fdeadb] p-6 sm:p-7 flex flex-col md:flex-row md:items-center justify-between gap-6">
                <div class="flex items-center gap-5">
                    <span class="hidden sm:inline-flex w-14 h-14 shrink-0 rounded-full bg-white shadow items-center justify-center text-gold text-xl"><i class="fa-solid fa-house-circle-check" aria-hidden="true"></i></span>
                    <div>
                        <p class="text-xs uppercase tracking-wide text-[#444444]"><?php esc_html_e('Explore Projects', $td); ?></p>
                        <p class="mt-1 text-lg font-semibold text-[#302F5A]"><?php esc_html_e('Planning to Buy a Property in Coimbatore?', $td); ?></p>
                        <p class="mt-1 text-sm text-[#444444]"><?php esc_html_e('Explore properties by location, price, plot size and approval status.', $td); ?></p>
                    </div>
                </div>
                <a href="<?php echo esc_url($home . '#projects'); ?>" class="inline-flex items-center justify-center gap-2 shrink-0 bg-[#302F5A] hover:bg-ink text-white font-semibold text-sm px-8 py-4 rounded-lg transition-colors"><?php esc_html_e('Explore Projects', $td); ?> <i class="fa-solid fa-arrow-right text-xs" aria-hidden="true"></i></a>
            </div>

        </div>
    </section>

    <!-- ======================= FAQ ======================= -->
    <section class="bg-brand-cream py-16 sm:py-20">
        <div class="<?php echo esc_attr($container); ?>">
            <h2 class="reveal font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight text-center"><?php esc_html_e('FAQs', $td); ?></h2>

            <div class="reveal mt-10 max-w-3xl mx-auto">
                <?php foreach ($faqs as $i => $faq) : ?>
                    <details name="pp-faq" class="border-b border-[#d9cdbd]" <?php echo 0 === $i ? 'open' : ''; ?>>
                        <summary class="flex items-center justify-between gap-6 cursor-pointer list-none py-5 text-[#302F5A] font-medium [&::-webkit-details-marker]:hidden">
                            <span><?php echo esc_html(($i + 1) . '. ' . $faq['q']); ?></span>
                            <span class="shrink-0 text-gold">
                                <span class="faq-plus"><i class="fa-solid fa-plus" aria-hidden="true"></i></span>
                                <span class="faq-minus"><i class="fa-solid fa-minus" aria-hidden="true"></i></span>
                            </span>
                        </summary>
                        <p class="pb-5 pr-10 pl-5 text-sm leading-relaxed text-[#444444]"><?php echo esc_html($faq['a']); ?></p>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</main>

<script type="application/ld+json">
    <?php echo wp_json_encode($schema); ?>
</script>

<script>
    /* Plot price calculator: cents <-> sq.ft, live total. The value is stored once (in cents and
   price per cent) so switching units back and forth never loses precision. */
    (function() {
        var root = document.getElementById('plot-calculator');
        if (!root) {
            return;
        }

        var SQFT = parseFloat(root.dataset.sqftPerCent);
        var mode = 'cents';
        var state = {
            cents: parseFloat(root.dataset.defCents) || 0,
            ppc: parseFloat(root.dataset.defPrice) || 0 // price per cent
        };

        var $ = function(id) {
            return document.getElementById(id);
        };
        var el = {
            toggles: root.querySelectorAll('.pp-toggle'),
            hint: $('pp-hint'),
            areaLabel: $('pp-area-label'),
            priceLabel: $('pp-price-label'),
            area: $('pp-area'),
            price: $('pp-price'),
            total: $('pp-total'),
            short: $('pp-short'),
            outCents: $('pp-out-cents'),
            outSqft: $('pp-out-sqft'),
            outPpc: $('pp-out-ppc'),
            outPpsf: $('pp-out-ppsf')
        };

        var nfArea = new Intl.NumberFormat('en-IN', {
            maximumFractionDigits: 2
        });
        var nf0 = new Intl.NumberFormat('en-IN', {
            maximumFractionDigits: 0
        });
        var nf2 = new Intl.NumberFormat('en-IN', {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        });

        var TEXT = {
            cents: {
                hint: 'Enter total cents to calculate the price and sq.ft',
                area: 'Enter Total No of Cents',
                price: 'Enter Price per cent (₹)',
                areaPh: '5',
                pricePh: '1500000'
            },
            sqft: {
                hint: 'Enter total sq.ft to calculate the price and cents',
                area: 'Enter Total Area (Sq.ft)',
                price: 'Enter Price per sq.ft (₹)',
                areaPh: '2178',
                pricePh: '3444'
            }
        };

        function num(s) {
            var n = parseFloat(s);
            return (isNaN(n) || n < 0 || !isFinite(n)) ? 0 : n;
        }

        function round2(n) {
            return Math.round(n * 100) / 100;
        }

        function show(n) {
            return n ? String(round2(n)) : '';
        }

        // Short form of the total: "75 Lakh", "1.25 Crore", "85 Thousand".
        function shortForm(n) {
            var unit, div;
            if (n >= 10000000) {
                div = 10000000;
                unit = 'Crore';
            } else if (n >= 100000) {
                div = 100000;
                unit = 'Lakh';
            } else if (n >= 1000) {
                div = 1000;
                unit = 'Thousand';
            } else {
                return '';
            }
            return parseFloat((n / div).toFixed(2)) + ' ' + unit;
        }

        function sanitize(input) {
            var v = input.value.replace(/[^0-9.]/g, '');
            var dot = v.indexOf('.');
            if (dot !== -1) {
                v = v.slice(0, dot + 1) + v.slice(dot + 1).replace(/\./g, '');
            }
            if (v !== input.value) {
                input.value = v;
            }
        }

        function render() {
            var cents = state.cents,
                ppc = state.ppc;
            var sqft = cents * SQFT,
                ppsf = ppc / SQFT;
            var total = cents * ppc;

            el.total.textContent = '₹ ' + nf0.format(Math.round(total));
            el.short.textContent = shortForm(total);
            el.outCents.textContent = nfArea.format(cents);
            el.outSqft.textContent = nfArea.format(sqft);
            el.outPpc.textContent = '₹ ' + nf2.format(ppc);
            el.outPpsf.textContent = '₹ ' + nf2.format(ppsf);
        }

        // Fill the two inputs from the stored state, in the current unit.
        function fillInputs() {
            if (mode === 'cents') {
                el.area.value = show(state.cents);
                el.price.value = show(state.ppc);
            } else {
                el.area.value = show(state.cents * SQFT);
                el.price.value = show(state.ppc / SQFT);
            }
        }

        function applyLabels() {
            var t = TEXT[mode];
            el.hint.textContent = t.hint;
            el.areaLabel.textContent = t.area;
            el.priceLabel.textContent = t.price;
            el.area.placeholder = t.areaPh;
            el.price.placeholder = t.pricePh;
            el.toggles.forEach(function(btn) {
                btn.setAttribute('aria-pressed', btn.getAttribute('data-mode') === mode ? 'true' : 'false');
            });
        }

        function readInputs() {
            var area = num(el.area.value),
                price = num(el.price.value);
            if (mode === 'cents') {
                state.cents = area;
                state.ppc = price;
            } else {
                state.cents = area / SQFT;
                state.ppc = price * SQFT;
            }
        }

        el.toggles.forEach(function(btn) {
            btn.addEventListener('click', function() {
                var next = btn.getAttribute('data-mode');
                if (next === mode) {
                    return;
                }
                mode = next;
                applyLabels();
                fillInputs();
                render();
            });
        });

        [el.area, el.price].forEach(function(input) {
            input.addEventListener('input', function() {
                sanitize(input);
                readInputs();
                render();
            });
        });

        /* ---- Initial state ---- */
        applyLabels();
        fillInputs();
        render();
    })();
</script>

<?php
get_footer();
