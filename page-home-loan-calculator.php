<?php

/**
 * Template Name: Home Loan EMI Calculator
 *
 * Home loan EMI calculator: live sliders, payment breakdown chart (SVG, no library),
 * year-wise EMI schedule accordion, explanatory content, FAQ accordion and CTA strip.
 *
 * Applies automatically to a page with the slug "home-loan-calculator",
 * or choose "Home Loan EMI Calculator" in Page Attributes > Template.
 *
 * @package YourThemeName
 */

get_header();

$td   = 'your-theme-textdomain';
$home = home_url('/');

/* ------------------------------------------------------------------ *
 * Calculator limits & defaults (edit here; the JavaScript reads these)
 * ------------------------------------------------------------------ */
$loan = array(
    'min_amount' => 500000,     // ₹5 lakh
    'max_amount' => 200000000,  // ₹20 crore
    'def_amount' => 1000000,    // ₹10 lakh
    'min_years'  => 5,
    'max_years'  => 30,
    'def_years'  => 20,
    'min_rate'   => 6,
    'max_rate'   => 20,
    'def_rate'   => 6.5,
);

$container = 'container mx-auto px-4 sm:px-6 lg:px-8';
$h2        = 'text-xl sm:text-2xl font-semibold text-[#302F5A]';
$h3        = 'font-semibold text-[#302F5A]';
$p         = 'text-sm sm:text-base leading-relaxed text-[#444444]';
$ul        = 'list-disc pl-6 space-y-1 text-sm sm:text-base leading-relaxed text-[#444444]';

$factors = array(
    array('Loan Amount',          'The amount you borrow directly affects your monthly repayment.'),
    array('Interest Rate',        'Even a small change in the interest rate can affect your EMI and total interest over a long tenure.'),
    array('Loan Tenure',          'Increasing the tenure generally reduces the EMI but increases the total interest payable.'),
    array('Prepayments',          'Additional payments towards the outstanding principal can reduce the overall interest burden and may shorten the loan tenure, depending on how the lender applies the payment.'),
    array('Type of Interest Rate', 'With a floating-rate loan, changes in the applicable interest rate can affect your future repayment structure.'),
);

$tips = array(
    'Make a larger down payment to reduce the loan principal',
    'Compare interest rates across lenders before finalizing',
    'Maintain a good credit score to qualify for better rates',
    'Consider prepayments or part-payments when possible to reduce interest cost over time',
    'Choose a tenure that balances a manageable EMI against total interest paid',
);

$faqs = array(
    array(
        'q' => 'What information do I need to calculate my EMI?',
        'a' => 'Just three details: loan amount, interest rate, and tenure. The calculator instantly shows your monthly EMI and total repayment.'
    ),
    array(
        'q' => 'Does a longer tenure always mean I pay less overall?',
        'a' => 'No. A longer tenure lowers your monthly EMI, but you pay interest for more months, so the total interest paid over the loan is usually higher.'
    ),
    array(
        'q' => 'What’s the difference between fixed and floating interest rates?',
        'a' => 'A fixed rate stays the same for an agreed period, while a floating rate moves with the lender’s benchmark rate, so your EMI or tenure may change over time.'
    ),
    array(
        'q' => 'Can I use this calculator before finalizing a plot or apartment?',
        'a' => 'Yes. Try different loan amounts, interest rates, and tenures to plan your budget before you commit to a property.'
    ),
    array(
        'q' => 'Does this include processing fees or other charges?',
        'a' => 'No. The calculator covers principal and interest only. Processing fees, insurance, and other charges vary by lender and are not included.'
    ),
    array(
        'q' => 'Are the results exact?',
        'a' => 'The results are estimates. Your lender’s actual EMI may differ slightly because of rounding, your loan start date, and the terms of your loan agreement.'
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

/* Shared classes for the slider rows. */
$value_input = 'w-24 bg-transparent border-0 border-b border-[#9a9a9a] text-right text-sm text-[#444444] outline-none focus:border-gold py-0.5';
?>

<style>
    /* Sliders: gold track, navy thumb */
    .emi-range {
        -webkit-appearance: none;
        appearance: none;
        width: 100%;
        height: 3px;
        margin: 14px 0;
        border-radius: 9999px;
        outline: none;
        cursor: pointer;
        background: linear-gradient(to right, #b3814e 0, #b3814e var(--pct, 0%), #e3d2bb var(--pct, 0%), #e3d2bb 100%);
    }

    .emi-range::-webkit-slider-runnable-track {
        height: 3px;
        background: transparent;
    }

    .emi-range::-webkit-slider-thumb {
        -webkit-appearance: none;
        width: 16px;
        height: 16px;
        margin-top: -6.5px;
        border-radius: 9999px;
        background: #302F5A;
        border: 0;
        box-shadow: 0 0 0 3px rgba(48, 47, 90, .15);
    }

    .emi-range::-moz-range-track {
        height: 3px;
        background: transparent;
    }

    .emi-range::-moz-range-thumb {
        width: 16px;
        height: 16px;
        border-radius: 9999px;
        background: #302F5A;
        border: 0;
        box-shadow: 0 0 0 3px rgba(48, 47, 90, .15);
    }

    .emi-range:focus-visible::-webkit-slider-thumb {
        box-shadow: 0 0 0 4px rgba(179, 129, 78, .5);
    }

    .emi-range:focus-visible::-moz-range-thumb {
        box-shadow: 0 0 0 4px rgba(179, 129, 78, .5);
    }

</style>

<main id="primary" class="site-main">

    <!-- ======================= PAGE TITLE ======================= -->
    <section class="pt-10 sm:pt-12">
        <div class="<?php echo esc_attr($container); ?>">
            <h1 class="font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight"><?php echo esc_html(get_the_title() ? get_the_title() : __('Home Loan EMI Calculator', $td)); ?></h1>
            <span class="mt-3 block h-[3px] w-14 rounded bg-gold"></span>
        </div>
    </section>

    <!-- ======================= CALCULATOR ======================= -->
    <section class="py-8 sm:py-10">
        <div class="<?php echo esc_attr($container); ?>">
            <div id="emi-calculator"
                class="reveal rounded-lg border border-ink-line shadow-lg p-6 sm:p-10 grid grid-cols-1 lg:grid-cols-[minmax(0,1.15fr)_minmax(0,0.7fr)_minmax(0,1fr)] gap-10 lg:gap-12 items-center scroll-mt-28"
                data-min-amount="<?php echo esc_attr($loan['min_amount']); ?>"
                data-max-amount="<?php echo esc_attr($loan['max_amount']); ?>"
                data-def-amount="<?php echo esc_attr($loan['def_amount']); ?>"
                data-min-years="<?php echo esc_attr($loan['min_years']); ?>"
                data-max-years="<?php echo esc_attr($loan['max_years']); ?>"
                data-def-years="<?php echo esc_attr($loan['def_years']); ?>"
                data-min-rate="<?php echo esc_attr($loan['min_rate']); ?>"
                data-max-rate="<?php echo esc_attr($loan['max_rate']); ?>"
                data-def-rate="<?php echo esc_attr($loan['def_rate']); ?>">

                <!-- Sliders -->
                <div class="space-y-9">

                    <!-- Loan amount -->
                    <div>
                        <div class="flex items-center justify-between gap-4 text-sm text-[#444444]">
                            <label for="emi-amount"><?php esc_html_e('Loan Amount', $td); ?></label>
                            <span class="inline-flex items-center gap-1.5">₹ <input id="emi-amount" type="text" inputmode="numeric" autocomplete="off" class="<?php echo esc_attr($value_input); ?>" /></span>
                        </div>
                        <input id="emi-amount-range" type="range" min="0" max="1000" step="1" value="0" class="emi-range" aria-label="<?php esc_attr_e('Loan amount slider', $td); ?>" />
                        <div class="flex justify-between text-xs text-[#444444]"><span>5 Lac</span><span>20 Cr</span></div>
                    </div>

                    <!-- Tenure -->
                    <div>
                        <div class="flex items-center justify-between gap-4 text-sm text-[#444444]">
                            <label for="emi-years"><?php esc_html_e('Loan Tenure', $td); ?></label>
                            <span class="inline-flex items-center gap-1.5"><input id="emi-years" type="text" inputmode="numeric" maxlength="2" autocomplete="off" class="<?php echo esc_attr($value_input); ?> !w-14" /> <?php esc_html_e('Years', $td); ?></span>
                        </div>
                        <input id="emi-years-range" type="range" min="<?php echo esc_attr($loan['min_years']); ?>" max="<?php echo esc_attr($loan['max_years']); ?>" step="1" value="<?php echo esc_attr($loan['def_years']); ?>" class="emi-range" aria-label="<?php esc_attr_e('Loan tenure slider', $td); ?>" />
                        <div class="flex justify-between text-xs text-[#444444]"><span><?php echo esc_html($loan['min_years']); ?></span><span><?php echo esc_html($loan['max_years']); ?></span></div>
                    </div>

                    <!-- Interest rate -->
                    <div>
                        <div class="flex items-center justify-between gap-4 text-sm text-[#444444]">
                            <label for="emi-rate"><?php esc_html_e('Rate Of Interest', $td); ?></label>
                            <span class="inline-flex items-center gap-1.5"><input id="emi-rate" type="text" inputmode="decimal" maxlength="5" autocomplete="off" class="<?php echo esc_attr($value_input); ?> !w-14" /> %</span>
                        </div>
                        <input id="emi-rate-range" type="range" min="<?php echo esc_attr($loan['min_rate']); ?>" max="<?php echo esc_attr($loan['max_rate']); ?>" step="0.1" value="<?php echo esc_attr($loan['def_rate']); ?>" class="emi-range" aria-label="<?php esc_attr_e('Interest rate slider', $td); ?>" />
                        <div class="flex justify-between text-xs text-[#444444]"><span><?php echo esc_html($loan['min_rate']); ?></span><span><?php echo esc_html($loan['max_rate']); ?></span></div>
                    </div>
                </div>

                <!-- Monthly EMI box -->
                <div class="bg-[#fbf6f0] border border-ink-line rounded-md px-6 py-12 lg:py-20 text-center text-[#302F5A]" aria-live="polite">
                    <p class="text-sm"><?php esc_html_e('Monthly Loan EMI', $td); ?></p>
                    <p id="emi-value" class="mt-4 text-3xl font-semibold">₹ 0</p>
                    <p id="emi-words" class="mt-5 text-xs text-[#444444] leading-relaxed min-h-[2rem]"></p>
                </div>

                <!-- Payment breakdown -->
                <div class="text-center">
                    <h2 class="text-xl font-medium text-[#302F5A]"><?php esc_html_e('Payment Breakdown', $td); ?></h2>

                    <svg id="emi-chart" class="mx-auto mt-5 w-full max-w-[260px]" viewBox="0 0 210 110" role="img" aria-label="Principal versus interest" fill="none">
                        <path id="emi-arc-principal" d="M20 105 A85 85 0 0 1 190 105" pathLength="100" stroke="#b3814e" stroke-width="40" stroke-dasharray="50 50" />
                        <path id="emi-arc-interest" d="M20 105 A85 85 0 0 1 190 105" pathLength="100" stroke="#302F5A" stroke-width="40" stroke-dasharray="50 50" stroke-dashoffset="-50" />
                    </svg>

                    <ul class="mt-6 space-y-3 text-xs text-[#444444]">
                        <li class="flex items-center justify-between gap-3">
                            <span class="inline-flex items-center gap-2"><span class="w-3 h-3 bg-[#b3814e] inline-block"></span><?php esc_html_e('Principal Amount', $td); ?></span>
                            <span id="emi-principal">₹ 0</span>
                        </li>
                        <li class="flex items-center justify-between gap-3">
                            <span class="inline-flex items-center gap-2"><span class="w-3 h-3 bg-[#302F5A] inline-block"></span><?php esc_html_e('Interest Payable', $td); ?></span>
                            <span id="emi-interest">₹ 0</span>
                        </li>
                    </ul>
                    <p class="mt-4 flex items-center justify-between gap-3 text-sm font-medium text-[#302F5A]">
                        <span><?php esc_html_e('Total Amount Payable', $td); ?></span>
                        <span id="emi-total">₹ 0</span>
                    </p>

                    <a id="emi-view-schedule" href="#emi-schedule" class="mt-5 inline-flex w-full items-center justify-center gap-2 rounded bg-[#302F5A] hover:bg-ink text-white text-sm font-medium px-6 py-3.5 transition-colors">
                        <?php esc_html_e('View EMI Schedule', $td); ?> <i class="fa-solid fa-arrow-right-long text-xs" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================= EMI PAYMENT SCHEDULE ======================= -->
    <section id="emi-schedule" class="pb-10 sm:pb-14 scroll-mt-28">
        <div class="<?php echo esc_attr($container); ?>">
            <div class="rounded-xl border border-ink-line bg-[#fbf6f0] p-5 sm:p-10">
                <h2 class="text-gold font-bold uppercase tracking-wide text-base sm:text-lg"><?php esc_html_e('EMI Payment Schedule', $td); ?></h2>
                <div id="emi-schedule-list" class="mt-6 space-y-4"></div>
            </div>
        </div>
    </section>

    <!-- ======================= CONTENT ======================= -->
    <section class="pb-16 sm:pb-20">
        <div class="<?php echo esc_attr($container); ?> space-y-14">

            <!-- How it works -->
            <div>
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('How Does a Home Loan EMI Calculator Work?', $td); ?></h2>
                <span class="mt-3 block h-[3px] w-14 rounded bg-gold"></span>

                <p class="mt-6 <?php echo esc_attr($p); ?>"><?php esc_html_e('A home loan EMI is the amount you repay to the lender every month towards your principal and interest.', $td); ?></p>
                <p class="mt-3 <?php echo esc_attr($p); ?>"><?php esc_html_e('Your EMI is primarily determined by three factors:', $td); ?></p>
                <ul class="mt-2 <?php echo esc_attr($ul); ?>">
                    <li><strong class="text-[#302F5A]"><?php esc_html_e('Loan Amount:', $td); ?></strong> <?php esc_html_e('A higher loan amount generally results in a higher EMI.', $td); ?></li>
                    <li><strong class="text-[#302F5A]"><?php esc_html_e('Interest Rate:', $td); ?></strong> <?php esc_html_e('A higher interest rate increases both the EMI and total interest payable.', $td); ?></li>
                    <li><strong class="text-[#302F5A]"><?php esc_html_e('Loan Tenure:', $td); ?></strong> <?php esc_html_e('A longer tenure generally reduces the monthly EMI but increases the total interest paid over the loan period.', $td); ?></li>
                </ul>

                <h3 class="mt-6 <?php echo esc_attr($h3); ?>"><?php esc_html_e('Home Loan EMI Formula', $td); ?></h3>
                <p class="mt-2 <?php echo esc_attr($p); ?>">EMI = [P × R × (1 + R)<sup>n</sup>] / [(1 + R)<sup>n</sup> − 1]</p>
                <p class="mt-3 <?php echo esc_attr($p); ?>"><?php esc_html_e('Where:', $td); ?></p>
                <ul class="mt-2 <?php echo esc_attr($ul); ?>">
                    <li><strong class="text-[#302F5A]">P</strong> = <?php esc_html_e('Principal loan amount', $td); ?></li>
                    <li><strong class="text-[#302F5A]">R</strong> = <?php esc_html_e('Monthly interest rate', $td); ?></li>
                    <li><strong class="text-[#302F5A]">N</strong> = <?php esc_html_e('Total number of monthly instalments', $td); ?></li>
                </ul>
                <p class="mt-4 <?php echo esc_attr($p); ?>"><?php esc_html_e('The calculator performs this calculation automatically, so you only need to enter your loan details.', $td); ?></p>
            </div>

            <!-- Tenure -->
            <div>
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('How Loan Tenure Affects Your Home Loan', $td); ?></h2>
                <span class="mt-3 block h-[3px] w-14 rounded bg-gold"></span>

                <h3 class="mt-6 <?php echo esc_attr($h3); ?>"><?php esc_html_e('Choose the Right Loan Tenure', $td); ?></h3>
                <p class="mt-2 <?php echo esc_attr($p); ?>"><?php esc_html_e('Your loan tenure can significantly change both your monthly EMI and the total interest you pay.', $td); ?></p>

                <h3 class="mt-5 <?php echo esc_attr($h3); ?>"><?php esc_html_e('Shorter Tenure', $td); ?></h3>
                <ul class="mt-2 <?php echo esc_attr($ul); ?>">
                    <li><?php esc_html_e('Higher monthly EMI', $td); ?></li>
                    <li><?php esc_html_e('Lower total interest', $td); ?></li>
                    <li><?php esc_html_e('Loan gets paid off sooner', $td); ?></li>
                </ul>

                <h3 class="mt-5 <?php echo esc_attr($h3); ?>"><?php esc_html_e('Longer Tenure', $td); ?></h3>
                <ul class="mt-2 <?php echo esc_attr($ul); ?>">
                    <li><?php esc_html_e('Lower monthly EMI', $td); ?></li>
                    <li><?php esc_html_e('Higher total interest', $td); ?></li>
                    <li><?php esc_html_e('Longer repayment period', $td); ?></li>
                </ul>

                <p class="mt-4 <?php echo esc_attr($p); ?>"><?php esc_html_e('Use the calculator to try different tenures and compare the impact before deciding on your loan structure.', $td); ?></p>
            </div>

            <!-- Factors -->
            <div>
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('What Factors Affect Your Home Loan EMI?', $td); ?></h2>
                <span class="mt-3 block h-[3px] w-14 rounded bg-gold"></span>

                <h3 class="mt-6 <?php echo esc_attr($h3); ?>"><?php esc_html_e('Factors That Affect Your Home Loan EMI', $td); ?></h3>
                <p class="mt-2 <?php echo esc_attr($p); ?>"><?php esc_html_e('Your monthly EMI can change based on:', $td); ?></p>

                <div class="mt-4 space-y-4">
                    <?php foreach ($factors as $factor) : ?>
                        <div>
                            <h4 class="<?php echo esc_attr($h3); ?>"><?php echo esc_html($factor[0]); ?></h4>
                            <p class="mt-1 <?php echo esc_attr($p); ?>"><?php echo esc_html($factor[1]); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Tips -->
            <div>
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('Tips to Manage Your EMI', $td); ?></h2>
                <span class="mt-3 block h-[3px] w-14 rounded bg-gold"></span>

                <h3 class="mt-6 <?php echo esc_attr($h3); ?>"><?php esc_html_e('Ways to Reduce Your Home Loan EMI', $td); ?></h3>
                <ul class="mt-2 <?php echo esc_attr($ul); ?>">
                    <?php foreach ($tips as $tip) : ?>
                        <li><?php echo esc_html($tip); ?></li>
                    <?php endforeach; ?>
                </ul>
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
    /* Home loan EMI calculator: live EMI, SVG breakdown chart, year-wise schedule. */
    (function() {
        var root = document.getElementById('emi-calculator');
        if (!root) {
            return;
        }

        var cfg = {
            minAmt: parseFloat(root.dataset.minAmount),
            maxAmt: parseFloat(root.dataset.maxAmount),
            defAmt: parseFloat(root.dataset.defAmount),
            minYrs: parseFloat(root.dataset.minYears),
            maxYrs: parseFloat(root.dataset.maxYears),
            defYrs: parseFloat(root.dataset.defYears),
            minRate: parseFloat(root.dataset.minRate),
            maxRate: parseFloat(root.dataset.maxRate),
            defRate: parseFloat(root.dataset.defRate)
        };

        var $ = function(id) {
            return document.getElementById(id);
        };
        var el = {
            amount: $('emi-amount'),
            amountRange: $('emi-amount-range'),
            years: $('emi-years'),
            yearsRange: $('emi-years-range'),
            rate: $('emi-rate'),
            rateRange: $('emi-rate-range'),
            emi: $('emi-value'),
            words: $('emi-words'),
            principal: $('emi-principal'),
            interest: $('emi-interest'),
            total: $('emi-total'),
            arcP: $('emi-arc-principal'),
            arcI: $('emi-arc-interest'),
            list: $('emi-schedule-list'),
            view: $('emi-view-schedule')
        };

        var nf = new Intl.NumberFormat('en-IN');
        var STEPS = 1000;
        var ratio = Math.log(cfg.maxAmt / cfg.minAmt);
        var MONTHS = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        function rupee(n) {
            return '₹ ' + nf.format(Math.round(n));
        }

        function clamp(n, lo, hi) {
            return Math.max(lo, Math.min(hi, n));
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
                parts.push(threeDigits(crore) + ' Crore');
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

        /* ---- Loan amount slider is logarithmic (lakhs and crores both easy to pick) ---- */
        function sliderToAmount(t) {
            return Math.round(cfg.minAmt * Math.exp(ratio * t / STEPS) / 10000) * 10000;
        }

        function amountToSlider(v) {
            return Math.round(STEPS * Math.log(clamp(v, cfg.minAmt, cfg.maxAmt) / cfg.minAmt) / ratio);
        }

        function paint(range) {
            var min = parseFloat(range.min),
                max = parseFloat(range.max);
            range.style.setProperty('--pct', ((range.value - min) / (max - min) * 100) + '%');
        }

        /* ---- Reading the fields ---- */
        function readAmount() {
            var n = parseInt(el.amount.value.replace(/\D/g, ''), 10);
            return clamp(isNaN(n) ? cfg.minAmt : n, cfg.minAmt, cfg.maxAmt);
        }

        function readYears() {
            var n = parseInt(el.years.value.replace(/\D/g, ''), 10);
            return clamp(isNaN(n) ? cfg.defYrs : n, cfg.minYrs, cfg.maxYrs);
        }

        function readRate() {
            var n = parseFloat(el.rate.value);
            return clamp(isNaN(n) ? cfg.defRate : n, cfg.minRate, cfg.maxRate);
        }

        /* ---- EMI maths ---- */
        function calcEmi(P, annualRate, years) {
            var n = years * 12,
                r = annualRate / 12 / 100;
            if (r === 0) {
                return P / n;
            }
            var f = Math.pow(1 + r, n);
            return P * r * f / (f - 1);
        }

        function buildSchedule(P, annualRate, years, emi) {
            var r = annualRate / 12 / 100,
                n = years * 12,
                bal = P;
            var now = new Date(),
                year = now.getFullYear(),
                month = now.getMonth();
            var rows = [];
            for (var i = 0; i < n; i++) {
                var interest = bal * r;
                var principal = Math.min(emi - interest, bal);
                bal = Math.max(bal - principal, 0);
                rows.push({
                    year: year,
                    month: month,
                    principal: principal,
                    interest: interest,
                    total: emi,
                    balance: bal
                });
                month++;
                if (month > 11) {
                    month = 0;
                    year++;
                }
            }
            return rows;
        }

        /* ---- Schedule rendering (open/closed state is remembered per year) ---- */
        var openYears = {};
        var initialised = false;

        function renderSchedule(rows) {
            var byYear = {},
                order = [];
            rows.forEach(function(row) {
                if (!byYear[row.year]) {
                    byYear[row.year] = [];
                    order.push(row.year);
                }
                byYear[row.year].push(row);
            });

            if (!initialised) {
                openYears[order[0]] = true;
                initialised = true;
            }

            el.list.innerHTML = order.map(function(y) {
                var open = !!openYears[y];
                var body = byYear[y].map(function(r) {
                    return '<tr class="border-b border-ink-line last:border-b-0">' +
                        '<td class="px-6 py-4 border-r border-ink-line">' + MONTHS[r.month] + '</td>' +
                        '<td class="px-6 py-4 border-r border-ink-line">' + rupee(r.principal) + '</td>' +
                        '<td class="px-6 py-4 border-r border-ink-line">' + rupee(r.interest) + '</td>' +
                        '<td class="px-6 py-4 border-r border-ink-line">' + rupee(r.total) + '</td>' +
                        '<td class="px-6 py-4">' + rupee(r.balance) + '</td></tr>';
                }).join('');

                return '<div class="rounded-lg border border-ink-line bg-white shadow-sm" data-year="' + y + '">' +
                    '<button type="button" class="emi-year-toggle flex w-full items-center justify-between gap-4 px-5 sm:px-6 py-5 text-left" aria-expanded="' + open + '">' +
                    '<span><span class="block text-lg font-semibold text-gold">' + y + '</span><span class="block text-xs text-[#444444]">Monthly Payment</span></span>' +
                    '<span class="flex items-center gap-4 text-xs text-[#444444]"><span class="emi-toggle-label">' + (open ? 'Hide' : 'Show') + ' Monthly Breakup</span>' +
                    '<i class="emi-toggle-icon fa-solid ' + (open ? 'fa-caret-up' : 'fa-caret-down') + '" aria-hidden="true"></i></span>' +
                    '</button>' +
                    '<div class="emi-year-panel px-3 pb-3 sm:px-5 sm:pb-5' + (open ? '' : ' hidden') + '">' +
                    '<div class="overflow-x-auto rounded-md border border-ink-line">' +
                    '<table class="w-full min-w-[640px] text-sm text-left">' +
                    '<thead class="bg-[#302F5A] text-white"><tr>' +
                    '<th class="px-6 py-4 font-semibold border-r border-white/20">Months</th>' +
                    '<th class="px-6 py-4 font-semibold border-r border-white/20">Principal</th>' +
                    '<th class="px-6 py-4 font-semibold border-r border-white/20">Interest</th>' +
                    '<th class="px-6 py-4 font-semibold border-r border-white/20">Total Payment</th>' +
                    '<th class="px-6 py-4 font-semibold">Balance</th>' +
                    '</tr></thead>' +
                    '<tbody class="text-[#444444]">' + body + '</tbody>' +
                    '</table>' +
                    '</div>' +
                    '</div>' +
                    '</div>';
            }).join('');
        }

        el.list.addEventListener('click', function(e) {
            var btn = e.target.closest('.emi-year-toggle');
            if (!btn) {
                return;
            }
            var item = btn.parentNode,
                y = item.getAttribute('data-year');
            var open = !openYears[y];
            openYears[y] = open;
            btn.setAttribute('aria-expanded', open);
            btn.querySelector('.emi-toggle-label').textContent = (open ? 'Hide' : 'Show') + ' Monthly Breakup';
            var icon = btn.querySelector('.emi-toggle-icon');
            icon.classList.toggle('fa-caret-up', open);
            icon.classList.toggle('fa-caret-down', !open);
            item.querySelector('.emi-year-panel').classList.toggle('hidden', !open);
        });

        /* ---- Main update ---- */
        function update() {
            var P = readAmount(),
                rate = readRate(),
                years = readYears();
            var emi = calcEmi(P, rate, years);
            var total = emi * years * 12;
            var interest = total - P;

            el.emi.textContent = rupee(emi);
            el.words.textContent = toWords(Math.round(emi));
            el.principal.textContent = rupee(P);
            el.interest.textContent = rupee(interest);
            el.total.textContent = rupee(total);

            var pp = P / total * 100,
                ip = 100 - pp;
            el.arcP.setAttribute('stroke-dasharray', pp + ' ' + (100 - pp));
            el.arcI.setAttribute('stroke-dasharray', ip + ' ' + (100 - ip));
            el.arcI.setAttribute('stroke-dashoffset', -pp);

            renderSchedule(buildSchedule(P, rate, years, emi));
        }

        /* ---- Field events ---- */
        // Loan amount text box: format as you type, keep the caret next to the same digit.
        el.amount.addEventListener('input', function() {
            var raw = el.amount.value,
                caret = el.amount.selectionStart || 0;
            var digitsBeforeCaret = raw.slice(0, caret).replace(/\D/g, '').length;
            var n = Math.min(parseInt(raw.replace(/\D/g, ''), 10) || 0, cfg.maxAmt);
            el.amount.value = n ? nf.format(n) : '';

            var pos = 0,
                seen = 0,
                out = el.amount.value;
            while (pos < out.length && seen < digitsBeforeCaret) {
                if (/\d/.test(out.charAt(pos))) {
                    seen++;
                }
                pos++;
            }
            el.amount.setSelectionRange(pos, pos);

            el.amountRange.value = amountToSlider(n);
            paint(el.amountRange);
            update();
        });
        el.amount.addEventListener('blur', function() {
            el.amount.value = nf.format(readAmount());
        });

        el.amountRange.addEventListener('input', function() {
            el.amount.value = nf.format(sliderToAmount(parseInt(el.amountRange.value, 10)));
            paint(el.amountRange);
            update();
        });

        // Tenure
        el.years.addEventListener('input', function() {
            el.years.value = el.years.value.replace(/\D/g, '');
            el.yearsRange.value = readYears();
            paint(el.yearsRange);
            update();
        });
        el.years.addEventListener('blur', function() {
            el.years.value = readYears();
        });
        el.yearsRange.addEventListener('input', function() {
            el.years.value = el.yearsRange.value;
            paint(el.yearsRange);
            update();
        });

        // Interest rate (digits and a single decimal point only)
        el.rate.addEventListener('input', function() {
            var v = el.rate.value.replace(/[^0-9.]/g, '');
            var firstDot = v.indexOf('.');
            if (firstDot !== -1) {
                v = v.slice(0, firstDot + 1) + v.slice(firstDot + 1).replace(/\./g, '');
            }
            el.rate.value = v;
            el.rateRange.value = readRate();
            paint(el.rateRange);
            update();
        });
        el.rate.addEventListener('blur', function() {
            el.rate.value = readRate();
        });
        el.rateRange.addEventListener('input', function() {
            el.rate.value = parseFloat(el.rateRange.value).toFixed(1).replace(/\.0$/, '');
            paint(el.rateRange);
            update();
        });

        // "View EMI Schedule" scrolls smoothly to the schedule.
        el.view.addEventListener('click', function(e) {
            e.preventDefault();
            var target = document.getElementById('emi-schedule');
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });

        /* ---- Initial state ---- */
        el.amount.value = nf.format(cfg.defAmt);
        el.amountRange.value = amountToSlider(cfg.defAmt);
        el.years.value = cfg.defYrs;
        el.yearsRange.value = cfg.defYrs;
        el.rate.value = cfg.defRate;
        el.rateRange.value = cfg.defRate;
        paint(el.amountRange);
        paint(el.yearsRange);
        paint(el.rateRange);
        update();
    })();
</script>

<?php
get_footer();
