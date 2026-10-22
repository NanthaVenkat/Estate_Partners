<?php

/**
 * Template Name: Stamp Duty Calculator
 *
 * Tamil Nadu stamp duty & registration fee calculator with live calculations,
 * explanatory content, FAQ accordion (with FAQPage schema) and CTA strip.
 *
 * Applies automatically to a page with the slug "stamp-duty-calculator",
 * or choose "Stamp Duty Calculator" in Page Attributes > Template.
 *
 * @package YourThemeName
 */

get_header();

$td   = 'your-theme-textdomain';
$home = home_url('/');

/* ------------------------------------------------------------------ *
 * Rates & limits (edit here; the JavaScript reads these values)
 * ------------------------------------------------------------------ */
$calc = array(
    'stamp'     => 7,          // Stamp duty, % of property value.
    'reg'       => 4,          // Registration fee, % of property value.
    'women_reg' => 3,          // Reduced registration fee for women, %.
    'women_max' => 1000000,    // Women's concession applies up to this value (₹10 lakh).
    'min'       => 500000,     // Slider minimum (₹5 lakh).
    'max'       => 500000000,  // Slider maximum (₹50 crore).
);

$container = 'container mx-auto px-4 sm:px-6 lg:px-8';
$h2        = 'text-xl sm:text-2xl font-semibold text-[#302F5A]';
$p         = 'text-sm sm:text-base leading-relaxed text-[#444444]';

$steps = array(
    array('title' => '1. Enter Property Value',        'text' => 'Provide the applicable property value — either the agreed sale price or the guideline value, whichever is higher.'),
    array('title' => '2. Select Gender & State',       'text' => 'Choose the buyer’s gender and state. In Tamil Nadu, women buying property valued up to ₹10 lakh pay a reduced registration fee.'),
    array('title' => '3. View Estimated Charges',      'text' => 'Get an estimated breakup of stamp duty, registration fee, and total government charges payable.'),
);

$other_costs = array(
    array('GST',                              'applicable on under-construction properties (not applicable to ready-to-move or resale properties)'),
    array('TDS',                              '1% tax deducted at source, applicable when the property value exceeds ₹50 lakh'),
    array('Legal & documentation charges',    'for title verification, agreement drafting, and due diligence'),
    array('Home loan processing fees',        'typically 0.5%–1% of the loan amount, charged by the lender'),
    array('Maintenance or corpus fund charges', 'applicable for apartments and gated communities, usually collected at possession'),
);

$faqs = array(
    array(
        'q' => 'What is stamp duty on property?',
        'a' => 'Stamp duty is a government tax paid to legally validate a property transaction. Without a duly stamped document, your sale deed is not admissible as evidence in court, which can affect your legal claim to the property.'
    ),
    array(
        'q' => 'What is the difference between stamp duty and registration charges?',
        'a' => 'Stamp duty is a tax on the document that gives it legal validity, while the registration fee is the charge for recording the document in the government’s land records. Both are payable on a property purchase.'
    ),
    array(
        'q' => 'How is stamp duty calculated in Tamil Nadu?',
        'a' => 'Stamp duty is charged at 7% of the property value, which is the higher of the guideline value and the value stated in the sale agreement. The registration fee of 4% is charged on the same value.'
    ),
    array(
        'q' => 'Is stamp duty applicable to plots, apartments and villas?',
        'a' => 'Yes. Stamp duty and registration charges apply to the purchase of plots, apartments, and villas alike. Other costs, such as GST on under-construction properties, may apply in addition.'
    ),
    array(
        'q' => 'Is guideline value different from the property purchase price?',
        'a' => 'Yes. The guideline value is the minimum value notified by the government for a location. If the agreed price is lower than the guideline value, duty is still calculated on the guideline value.'
    ),
    array(
        'q' => 'How can I calculate registration charges for a property in Coimbatore?',
        'a' => 'Use the calculator on this page: select the gender, then enter the property value. Coimbatore follows the same statewide rates as the rest of Tamil Nadu.'
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
?>

<style>
    /* Property value slider */
    .sd-range {
        -webkit-appearance: none;
        appearance: none;
        width: 100%;
        height: 4px;
        margin: 12px 0;
        border-radius: 9999px;
        outline: none;
        cursor: pointer;
        background: linear-gradient(to right, #b3814e 0, #b3814e var(--pct, 0%), rgba(255, 255, 255, .35) var(--pct, 0%), rgba(255, 255, 255, .35) 100%);
    }

    .sd-range::-webkit-slider-runnable-track {
        height: 4px;
        background: transparent;
    }

    .sd-range::-webkit-slider-thumb {
        -webkit-appearance: none;
        width: 22px;
        height: 22px;
        margin-top: -9px;
        border-radius: 9999px;
        background: #fff;
        border: 5px solid #b3814e;
        box-shadow: 0 0 0 3px rgba(179, 129, 78, .25);
    }

    .sd-range::-moz-range-track {
        height: 4px;
        background: transparent;
    }

    .sd-range::-moz-range-thumb {
        width: 12px;
        height: 12px;
        border-radius: 9999px;
        background: #fff;
        border: 5px solid #b3814e;
        box-shadow: 0 0 0 3px rgba(179, 129, 78, .25);
    }

    .sd-range:focus-visible::-webkit-slider-thumb {
        box-shadow: 0 0 0 4px rgba(227, 201, 143, .8);
    }

    .sd-range:focus-visible::-moz-range-thumb {
        box-shadow: 0 0 0 4px rgba(227, 201, 143, .8);
    }
</style>

<main id="primary" class="site-main">

    <!-- ======================= PAGE TITLE ======================= -->
    <section class="pt-10 sm:pt-12">
        <div class="<?php echo esc_attr($container); ?>">
            <h1 class="font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight"><?php echo esc_html(get_the_title() ? get_the_title() : __('Stamp Duty Calculator', $td)); ?></h1>
            <span class="mt-3 block h-[3px] w-14 rounded bg-gold"></span>
        </div>
    </section>

    <!-- ======================= CALCULATOR ======================= -->
    <section class="py-8 sm:py-10">
        <div class="<?php echo esc_attr($container); ?>">
            <div id="stamp-calculator"
                class="reveal grid grid-cols-1 lg:grid-cols-2 overflow-hidden rounded-lg border border-ink-line shadow-xl scroll-mt-28"
                data-stamp="<?php echo esc_attr($calc['stamp']); ?>"
                data-reg="<?php echo esc_attr($calc['reg']); ?>"
                data-women-reg="<?php echo esc_attr($calc['women_reg']); ?>"
                data-women-max="<?php echo esc_attr($calc['women_max']); ?>"
                data-min="<?php echo esc_attr($calc['min']); ?>"
                data-max="<?php echo esc_attr($calc['max']); ?>">

                <!-- Inputs -->
                <form id="sd-form" class="bg-[#302F5A] text-white p-6 sm:p-10 lg:p-12 space-y-8" novalidate>

                    <div>
                        <label for="sd-gender" class="block text-lg font-semibold mb-3"><?php esc_html_e('Select Gender', $td); ?></label>
                        <div class="relative">
                            <select id="sd-gender" class="w-full appearance-none h-12 rounded-md bg-white text-[#444444] text-sm px-5 pr-10 outline-none focus:ring-2 focus:ring-gold-light">
                                <option value="male"><?php esc_html_e('Male', $td); ?></option>
                                <option value="female"><?php esc_html_e('Female', $td); ?></option>
                                <option value="other"><?php esc_html_e('Other', $td); ?></option>
                            </select>
                            <i class="fa-solid fa-caret-down pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-[#444444] text-xs" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div>
                        <label for="sd-state" class="block text-lg font-semibold mb-3"><?php esc_html_e('State', $td); ?></label>
                        <input id="sd-state" type="text" value="Tamil Nadu" readonly aria-readonly="true" class="w-full h-12 rounded-md bg-white text-[#444444] text-sm px-5 outline-none" />
                    </div>

                    <div>
                        <label for="sd-value" class="block text-lg font-semibold mb-3"><?php esc_html_e('Enter your Property Value', $td); ?></label>
                        <div class="relative">
                            <span class="pointer-events-none absolute left-5 top-1/2 -translate-y-1/2 text-sm text-[#444444]" aria-hidden="true">₹</span>
                            <input id="sd-value" type="text" inputmode="numeric" autocomplete="off" placeholder="10,00,000" class="w-full h-12 rounded-md bg-white text-[#444444] text-sm pl-10 pr-5 outline-none focus:ring-2 focus:ring-gold-light" />
                        </div>
                        <p id="sd-error" class="mt-2 text-sm text-[#ffb4b4] hidden" role="alert"></p>

                        <p id="sd-words" class="mt-4 text-sm text-white/90 leading-relaxed min-h-[2.5rem]" aria-live="polite"></p>

                        <div class="mt-3">
                            <input id="sd-range" type="range" min="0" max="1000" step="1" value="0" class="sd-range" aria-label="<?php esc_attr_e('Property value slider', $td); ?>" />
                            <div class="mt-1 flex justify-between text-xs text-white/80">
                                <span><?php esc_html_e('Five Lakhs', $td); ?></span>
                                <span><?php esc_html_e('Fifty Crore', $td); ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- <button type="submit" class="w-full h-12 rounded-md bg-gold hover:bg-gold-dark text-white font-semibold transition-colors">
                        <   ?php esc_html_e('Calculate Stamp Duty', $td); ?>
                    </button> -->
                </form>

                <!-- Results -->
                <div id="sd-results" class="bg-[#fbf6f0] text-[#302F5A] flex flex-col divide-y divide-ink-line" aria-live="polite">

                    <div class="flex-1 flex flex-col items-center justify-center text-center px-6 py-10 lg:py-8">
                        <p class="text-sm"><?php esc_html_e('Stamp Duty for your property is', $td); ?></p>
                        <p id="sd-stamp-amt" class="mt-4 text-3xl font-semibold">₹0</p>
                        <span class="mt-1 mb-3 block w-40 border-t border-[#302F5A]/40"></span>
                        <p class="text-lg"><?php esc_html_e('Stamp Duty for your property is', $td); ?> <span id="sd-stamp-rate">0.00%</span></p>
                    </div>

                    <div class="flex-1 flex flex-col items-center justify-center text-center px-6 py-10 lg:py-8">
                        <p class="text-sm"><?php esc_html_e('Registration Fee for your property is', $td); ?></p>
                        <p id="sd-reg-amt" class="mt-4 text-3xl font-semibold">₹0</p>
                        <span class="mt-1 mb-3 block w-40 border-t border-[#302F5A]/40"></span>
                        <p class="text-lg"><?php esc_html_e('Registration Fee for your property is', $td); ?> <span id="sd-reg-rate">0.00%</span></p>
                    </div>

                    <div class="flex-1 flex flex-col items-center justify-center text-center px-6 py-10 lg:py-8">
                        <p class="text-sm"><?php esc_html_e('Stamp Duty + Registration Fee = Total Fee', $td); ?></p>
                        <p id="sd-total-amt" class="mt-4 text-3xl font-semibold">₹0</p>
                        <span class="mt-1 mb-3 block w-40 border-t border-[#302F5A]/40"></span>
                        <p class="text-lg"><?php esc_html_e('Total Fee for your property is', $td); ?> <span id="sd-total-rate">0.00%</span></p>
                        <p id="sd-note" class="mt-4 max-w-sm text-xs text-[#6f6f6f] hidden"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================= CONTENT ======================= -->
    <section class="pb-16 sm:pb-20">
        <div class="<?php echo esc_attr($container); ?> space-y-14">

            <!-- Intro + steps -->
            <div>
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('Stamp Duty Calculator', $td); ?></h2>
                <span class="mt-3 block h-[3px] w-14 rounded bg-gold"></span>

                <p class="mt-6 <?php echo esc_attr($p); ?>"><?php esc_html_e('Estimate the stamp duty and registration charges payable when purchasing a plot, apartment, or villa in Tamil Nadu. Enter your property value above to get an indicative breakdown of government charges.', $td); ?></p>

                <h3 class="mt-5 font-semibold text-[#302F5A]"><?php esc_html_e('How to Calculate Your Property Registration Cost', $td); ?></h3>
                <p class="mt-2 <?php echo esc_attr($p); ?>"><?php esc_html_e('Use the calculator above to estimate your stamp duty and registration charges in three steps:', $td); ?></p>

                <div class="mt-4 space-y-4">
                    <?php foreach ($steps as $step) : ?>
                        <div>
                            <h4 class="font-semibold text-[#302F5A]"><?php echo esc_html($step['title']); ?></h4>
                            <p class="mt-1 pl-4 <?php echo esc_attr($p); ?>"><?php echo esc_html($step['text']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Charges in Tamil Nadu -->
            <div>
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('Stamp Duty & Registration Charges in Tamil Nadu', $td); ?></h2>
                <span class="mt-3 block h-[3px] w-14 rounded bg-gold"></span>

                <p class="mt-6 <?php echo esc_attr($p); ?>"><?php esc_html_e('When you purchase a property in Tamil Nadu, stamp duty and registration charges apply in addition to the property price. Stamp duty is a tax levied under the Indian Stamp Act to legally validate the transaction, while the registration fee, charged under the Registration Act, 1908, is paid to record the transaction in government land records. These rates apply uniformly across the state, including Coimbatore, and are calculated on whichever is higher: the property’s guideline value or its agreement value.', $td); ?></p>

                <div class="mt-8 max-w-xl overflow-hidden rounded-lg border border-ink-line">
                    <table class="w-full text-sm text-center">
                        <thead class="bg-[#302F5A] text-white">
                            <tr>
                                <th scope="col" class="w-1/2 px-6 py-5 font-semibold border-r border-white/20"><?php esc_html_e('Charge', $td); ?></th>
                                <th scope="col" class="w-1/2 px-6 py-5 font-semibold"><?php esc_html_e('What It Covers', $td); ?></th>
                            </tr>
                        </thead>
                        <tbody class="text-[#444444]">
                            <tr class="border-b border-ink-line">
                                <td class="px-6 py-5 border-r border-ink-line"><?php esc_html_e('Stamp Duty', $td); ?></td>
                                <td class="px-6 py-5"><?php echo esc_html($calc['stamp']); ?>% <?php esc_html_e('of property value', $td); ?></td>
                            </tr>
                            <tr class="border-b border-ink-line">
                                <td class="px-6 py-5 border-r border-ink-line"><?php esc_html_e('Registration Fee', $td); ?></td>
                                <td class="px-6 py-5"><?php echo esc_html($calc['reg']); ?>% <?php esc_html_e('of property value', $td); ?></td>
                            </tr>
                            <tr class="font-semibold text-[#302F5A]">
                                <td class="px-6 py-5 border-r border-ink-line"><?php esc_html_e('Total', $td); ?></td>
                                <td class="px-6 py-5"><?php esc_html_e('Approximately', $td); ?> <?php echo esc_html($calc['stamp'] + $calc['reg']); ?>%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p class="mt-6 <?php echo esc_attr($p); ?>"><strong class="text-[#302F5A]"><?php esc_html_e('Concession for women buyers:', $td); ?></strong>
                    <?php
                    printf(
                        /* translators: 1: concessional rate, 2: normal rate */
                        esc_html__('From 1 April 2025, women purchasing residential property valued up to ₹10 lakh pay a reduced registration fee of %1$s%% instead of %2$s%%. There is no separate stamp duty concession for women in Tamil Nadu.', $td),
                        esc_html($calc['women_reg']),
                        esc_html($calc['reg'])
                    );
                    ?>
                </p>
                <p class="mt-3 <?php echo esc_attr($p); ?>"><strong class="text-[#302F5A]"><?php esc_html_e('Note:', $td); ?></strong> <?php esc_html_e('Rates are set by the Tamil Nadu government and are subject to revision. Always verify the current rate on the TNREGINET portal or with your local Sub-Registrar office before completing registration.', $td); ?></p>
            </div>

            <!-- Guideline value -->
            <div>
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('Guideline Value & Property Value: What’s the Difference?', $td); ?></h2>
                <span class="mt-3 block h-[3px] w-14 rounded bg-gold"></span>

                <p class="mt-6 <?php echo esc_attr($p); ?>"><?php echo wp_kses(__('Stamp duty in Tamil Nadu is calculated on the <strong class="text-[#302F5A]">higher of two values:</strong> the guideline value (the government’s notified minimum value for a location, also called guidance value) and the value stated in the sale agreement. This means that even if you negotiate a lower price, stamp duty is still computed on the guideline value if it exceeds the agreed price.', $td), array('strong' => array('class' => array()))); ?></p>
                <p class="mt-3 <?php echo esc_attr($p); ?>"><strong class="text-[#302F5A]"><?php esc_html_e('Tip:', $td); ?></strong> <?php esc_html_e('Guideline values vary by locality and are revised periodically by the Tamil Nadu government. Check the applicable guideline value for your property’s specific location on TNREGINET before finalizing your budget — it may differ from the market price you’re quoted.', $td); ?></p>
            </div>

            <!-- Other costs -->
            <div>
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('Other Costs to Consider When Buying a Property', $td); ?></h2>
                <span class="mt-3 block h-[3px] w-14 rounded bg-gold"></span>

                <p class="mt-6 <?php echo esc_attr($p); ?>"><?php esc_html_e('Stamp duty and registration charges are a significant part of your purchase cost, but not the only one. Depending on the property and transaction type, you should also budget for:', $td); ?></p>
                <ul class="mt-3 list-disc pl-6 space-y-1 <?php echo esc_attr($p); ?>">
                    <?php foreach ($other_costs as $cost) : ?>
                        <li><strong class="text-[#302F5A]"><?php echo esc_html($cost[0]); ?></strong> - <?php echo esc_html($cost[1]); ?></li>
                    <?php endforeach; ?>
                </ul>
                <p class="mt-4 <?php echo esc_attr($p); ?>"><?php esc_html_e('Accounting for these upfront helps you plan your total property budget more accurately, rather than being surprised by additional costs at registration.', $td); ?></p>
            </div>

            <!-- Before you register -->
            <div>
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('Before You Register Your Property', $td); ?></h2>
                <span class="mt-3 block h-[3px] w-14 rounded bg-gold"></span>

                <p class="mt-6 <?php echo esc_attr($p); ?>"><?php esc_html_e('Use the Stamp Duty Calculator to estimate your registration expenses before finalizing a property purchase. Understanding these charges upfront helps you plan your total budget accurately.', $td); ?></p>
                <a href="#stamp-calculator" class="mt-4 inline-flex items-center gap-2 font-semibold text-[#302F5A] hover:text-gold transition-colors"><?php esc_html_e('Calculate Your Stamp Duty & Registration Charges', $td); ?> <i class="fa-solid fa-arrow-right text-xs" aria-hidden="true"></i></a>
                <p class="mt-4 <?php echo esc_attr($p); ?>"><strong class="text-[#302F5A]"><?php esc_html_e('Disclaimer:', $td); ?></strong> <?php esc_html_e('The information on this page is for general informational purposes only and does not constitute legal, tax, or financial advice. Stamp duty and registration rates are set by the Tamil Nadu government and are subject to change. Please verify current rates on the TNREGINET portal or with your local Sub-Registrar office before completing any property transaction.', $td); ?></p>
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
                    <details name="emi-faq" class="border-b border-[#d9cdbd]" <?php echo 0 === $i ? 'open' : ''; ?>>
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
    /* Stamp duty calculator: live calculations, Indian number formatting, amount in words, log-scale slider. */
    (function() {
        var root = document.getElementById('stamp-calculator');
        if (!root) {
            return;
        }

        var cfg = {
            stamp: parseFloat(root.dataset.stamp),
            reg: parseFloat(root.dataset.reg),
            womenReg: parseFloat(root.dataset.womenReg),
            womenMax: parseFloat(root.dataset.womenMax),
            min: parseFloat(root.dataset.min),
            max: parseFloat(root.dataset.max)
        };

        var $ = function(id) {
            return document.getElementById(id);
        };
        var el = {
            form: $('sd-form'),
            gender: $('sd-gender'),
            value: $('sd-value'),
            range: $('sd-range'),
            words: $('sd-words'),
            error: $('sd-error'),
            note: $('sd-note'),
            results: $('sd-results'),
            stampAmt: $('sd-stamp-amt'),
            stampRate: $('sd-stamp-rate'),
            regAmt: $('sd-reg-amt'),
            regRate: $('sd-reg-rate'),
            totalAmt: $('sd-total-amt'),
            totalRate: $('sd-total-rate')
        };

        var nf = new Intl.NumberFormat('en-IN');
        var STEPS = 1000;
        var ratio = Math.log(cfg.max / cfg.min);

        function rupee(n) {
            return '₹' + nf.format(Math.round(n));
        }

        function pct(n) {
            return n.toFixed(2) + '%';
        }

        /* ---- Amount in words (Indian system) ---- */
        var ones = ['', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Eleven',
            'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'
        ];
        var tens = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];

        function twoDigits(n) {
            return n < 20 ? ones[n] : tens[Math.floor(n / 10)] + (n % 10 ? ' ' + ones[n % 10] : '');
        }

        function threeDigits(n) {
            var h = Math.floor(n / 100),
                r = n % 100;
            return (h ? ones[h] + ' Hundred' + (r ? ' And ' : '') : '') + (r ? twoDigits(r) : '');
        }

        function toWords(n) {
            if (!n) {
                return '';
            }
            var parts = [];
            var crore = Math.floor(n / 10000000);
            n %= 10000000;
            var lakh = Math.floor(n / 100000);
            n %= 100000;
            var thousand = Math.floor(n / 1000);
            n %= 1000;
            if (crore) {
                parts.push(twoDigits(crore) + ' Crore');
            }
            if (lakh) {
                parts.push(twoDigits(lakh) + ' Lakh');
            }
            if (thousand) {
                parts.push(twoDigits(thousand) + ' Thousand');
            }
            if (n) {
                parts.push(threeDigits(n));
            }
            return parts.join(' ');
        }

        /* ---- Value <-> slider (logarithmic, so lakhs and crores are both easy to pick) ---- */
        function sliderToValue(t) {
            return Math.round(cfg.min * Math.exp(ratio * t / STEPS) / 10000) * 10000;
        }

        function valueToSlider(v) {
            v = Math.max(cfg.min, Math.min(cfg.max, v));
            return Math.round(STEPS * Math.log(v / cfg.min) / ratio);
        }

        function paintSlider() {
            el.range.style.setProperty('--pct', (el.range.value / STEPS * 100) + '%');
        }

        function currentValue() {
            return parseInt(el.value.value.replace(/\D/g, ''), 10) || 0;
        }

        function setValue(n) {
            el.value.value = n ? nf.format(n) : '';
        }

        /* ---- Calculation ---- */
        function calculate() {
            var v = currentValue();
            var womanConcession = el.gender.value === 'female' && v > 0 && v <= cfg.womenMax;
            var regPct = womanConcession ? cfg.womenReg : cfg.reg;

            var stamp = Math.round(v * cfg.stamp / 100);
            var reg = Math.round(v * regPct / 100);

            el.stampAmt.textContent = rupee(stamp);
            el.stampRate.textContent = pct(cfg.stamp);
            el.regAmt.textContent = rupee(reg);
            el.regRate.textContent = pct(regPct);
            el.totalAmt.textContent = rupee(stamp + reg);
            el.totalRate.textContent = pct(cfg.stamp + regPct);

            if (womanConcession) {
                el.note.textContent = 'Women’s registration fee concession applied (' + cfg.womenReg + '% instead of ' + cfg.reg + '%).';
                el.note.classList.remove('hidden');
            } else {
                el.note.classList.add('hidden');
            }
        }

        function refreshWords() {
            el.words.textContent = toWords(currentValue());
        }

        function showError(msg) {
            if (msg) {
                el.error.textContent = msg;
                el.error.classList.remove('hidden');
            } else {
                el.error.textContent = '';
                el.error.classList.add('hidden');
            }
        }

        /* ---- Events ---- */
        el.value.addEventListener('input', function() {
            // Keep the caret next to the same digit after re-formatting.
            var raw = el.value.value,
                caret = el.value.selectionStart || 0;
            var digitsBeforeCaret = raw.slice(0, caret).replace(/\D/g, '').length;

            var n = Math.min(parseInt(raw.replace(/\D/g, ''), 10) || 0, cfg.max);
            setValue(n);

            var pos = 0,
                seen = 0,
                out = el.value.value;
            while (pos < out.length && seen < digitsBeforeCaret) {
                if (/\d/.test(out.charAt(pos))) {
                    seen++;
                }
                pos++;
            }
            el.value.setSelectionRange(pos, pos);

            el.range.value = valueToSlider(n);
            paintSlider();
            showError('');
            refreshWords();
            calculate();
        });

        el.range.addEventListener('input', function() {
            var n = sliderToValue(parseInt(el.range.value, 10));
            setValue(n);
            paintSlider();
            showError('');
            refreshWords();
            calculate();
        });

        el.gender.addEventListener('change', calculate);

        el.form.addEventListener('submit', function(e) {
            e.preventDefault();
            if (currentValue() < 1) {
                showError('Please enter your property value.');
                el.value.focus();
                return;
            }
            showError('');
            calculate();
            // On small screens the results sit below the form, so bring them into view.
            if (window.matchMedia('(max-width: 1023px)').matches) {
                el.results.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });

        /* ---- Initial state: ₹10,00,000 ---- */
        setValue(1000000);
        el.range.value = valueToSlider(1000000);
        paintSlider();
        refreshWords();
        calculate();
    })();
</script>

<?php
get_footer();
