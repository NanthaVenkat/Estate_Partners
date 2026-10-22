<?php

/**
 * Template Name: Home Loan Tax Benefit Calculator
 *
 * Estimates income tax saved by a home loan (old tax regime: Section 80C principal +
 * Section 24(b) interest). Includes explanatory content, FAQ accordion (with FAQPage
 * schema) and CTA strip.
 *
 * Applies automatically to a page with the slug "home-loan-tax-benefit-calculator",
 * or choose "Home Loan Tax Benefit Calculator" in Page Attributes > Template.
 *
 * @package YourThemeName
 */

get_header();

$td   = 'your-theme-textdomain';
$home = home_url('/');

/* ------------------------------------------------------------------ *
 * Tax rules used by the calculator (old regime). Edit here when the
 * rules change; the JavaScript, tables and text all read from this.
 * ------------------------------------------------------------------ */
$tax = array(
    'std_deduction' => 50000,    // Standard deduction (salaried), old regime.
    'limit_80c'     => 150000,   // Section 80C overall limit.
    'limit_24b'     => 200000,   // Section 24(b) limit, self-occupied property.
    'rebate_limit'  => 500000,   // Section 87A: rebate if taxable income is up to this.
    'rebate_max'    => 12500,    // Section 87A: maximum rebate.
    'cess'          => 0.04,     // Health & education cess.
    'max_input'     => 1000000000, // Largest value accepted in any field (₹100 crore).
    'slabs'         => array(    // [upper limit of slab, rate]. null = no upper limit.
        array(250000,  0),
        array(500000,  0.05),
        array(1000000, 0.20),
        array(null,    0.30),
    ),
    'defaults'      => array(
        'gross'     => 1800000,
        'interest'  => 180000,
        'principal' => 120000,
    ),
);

/** Formats an amount as lakhs, e.g. 150000 => "1.5", 200000 => "2". */
$lakh = function ($n) {
    return rtrim(rtrim(number_format($n / 100000, 2, '.', ''), '0'), '.');
};
$l80c = $lakh($tax['limit_80c']);
$l24b = $lakh($tax['limit_24b']);

/* Slab table rows, built from the config. */
$slab_rows = array();
$prev      = 0;
foreach ($tax['slabs'] as $slab) {
    if (null === $slab[0]) {
        $label = sprintf('Above ₹%s lakh', $lakh($prev));
    } elseif (0 === $prev) {
        $label = sprintf('Up to ₹%s lakh', $lakh($slab[0]));
    } else {
        $label = sprintf('₹%s – ₹%s lakh', $lakh($prev), $lakh($slab[0]));
    }
    $slab_rows[] = array($label, $slab[1] ? ($slab[1] * 100) . '%' : 'Nil');
    $prev        = $slab[0];
}

$container = 'container mx-auto px-4 sm:px-6 lg:px-8';
$h2        = 'text-xl sm:text-2xl font-semibold text-[#302F5A]';
$h3        = 'font-semibold text-[#302F5A]';
$p         = 'text-sm sm:text-base leading-relaxed text-[#444444]';
$ul        = 'list-disc pl-6 space-y-2 text-sm sm:text-base leading-relaxed text-[#444444]';
$th        = 'px-6 py-5 font-semibold border-r border-white/20 last:border-r-0';
$td_cell   = 'px-6 py-5 border-r border-ink-line last:border-r-0';
$strong    = array('strong' => array('class' => array()));

$glance = array(
    array('Section 80C',             'Principal repayment',          sprintf('Up to ₹%s lakh combined 80C limit under the old regime', $l80c)),
    array('Section 24(b)',           'Home-loan interest',           sprintf('Up to ₹%s lakh for eligible self-occupied property under the old regime', $l24b)),
    array('Pre-construction interest', 'Interest paid before completion', 'Can be claimed in prescribed instalments after completion, subject to conditions'),
);

$faqs = array(
    array(
        'q' => 'Can I claim tax benefits on my home loan?',
        'a' => 'Eligible home-loan borrowers may claim deductions on principal repayment and interest paid, subject to the applicable provisions, eligibility conditions and tax regime.'
    ),
    array(
        'q' => 'How much principal repayment can I claim under Section 80C?',
        'a' => sprintf('Up to ₹%s lakh per financial year under the old tax regime. This limit is shared with your other Section 80C investments, such as PPF, EPF and life insurance premiums.', $l80c)
    ),
    array(
        'q' => 'How much home-loan interest can I claim under Section 24(b)?',
        'a' => sprintf('Up to ₹%s lakh per financial year for a self-occupied property under the old tax regime, subject to conditions.', $l24b)
    ),
    array(
        'q' => 'Are home-loan tax benefits available under the new tax regime?',
        'a' => 'For a self-occupied property, the Section 24(b) interest and Section 80C principal deductions are generally not available under the new tax regime. Interest on a let-out property can still be deducted, subject to the applicable limits.'
    ),
    array(
        'q' => 'Can I claim tax benefits on a joint home loan?',
        'a' => sprintf('Yes. When the loan is taken jointly, each eligible co-borrower can claim up to ₹%1$s lakh on interest and ₹%2$s lakh on principal in their own return, subject to conditions such as co-ownership and their share of repayment.', $l24b, $l80c)
    ),
    array(
        'q' => 'Can I claim interest paid before possession?',
        'a' => 'Interest paid during construction cannot be claimed at once. Under the old regime it is generally claimed in equal instalments over five years starting from the year construction is completed, within the overall interest limit and subject to conditions.'
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

$field = 'w-full h-12 rounded-md bg-white text-[#444444] text-sm pl-10 pr-5 outline-none focus:ring-2 focus:ring-gold-light';
?>

<main id="primary" class="site-main">

    <!-- ======================= PAGE TITLE ======================= -->
    <section class="pt-10 sm:pt-12">
        <div class="<?php echo esc_attr($container); ?>">
            <h1 class="font-prata text-[#302F5A] text-3xl sm:text-4xl leading-tight"><?php echo esc_html(get_the_title() ? get_the_title() : __('Home Loan Tax Benefit Calculator', $td)); ?></h1>
            <span class="mt-3 block h-[3px] w-14 rounded bg-gold"></span>
        </div>
    </section>

    <!-- ======================= CALCULATOR ======================= -->
    <section class="py-8 sm:py-10">
        <div class="<?php echo esc_attr($container); ?>">
            <div id="tax-calculator"
                class="reveal grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_minmax(0,1fr)] overflow-hidden rounded-lg border border-ink-line shadow-xl scroll-mt-28"
                data-config="<?php echo esc_attr(wp_json_encode($tax)); ?>">

                <!-- Inputs -->
                <div class="bg-[#302F5A] text-white p-6 sm:p-10 lg:p-12 space-y-8">
                    <div>
                        <label for="tb-gross" class="block text-lg font-semibold mb-3"><?php esc_html_e('Enter Gross Income (Annual)', $td); ?></label>
                        <div class="relative">
                            <span class="pointer-events-none absolute left-5 top-1/2 -translate-y-1/2 text-sm text-[#444444]" aria-hidden="true">₹</span>
                            <input id="tb-gross" type="text" inputmode="numeric" autocomplete="off" class="<?php echo esc_attr($field); ?>" />
                        </div>
                    </div>

                    <div>
                        <label for="tb-interest" class="block text-lg font-semibold mb-3"><?php esc_html_e('Enter Interest Paid on Home Loan', $td); ?></label>
                        <div class="relative">
                            <span class="pointer-events-none absolute left-5 top-1/2 -translate-y-1/2 text-sm text-[#444444]" aria-hidden="true">₹</span>
                            <input id="tb-interest" type="text" inputmode="numeric" autocomplete="off" class="<?php echo esc_attr($field); ?>" />
                        </div>
                    </div>

                    <div>
                        <label for="tb-principal" class="block text-lg font-semibold mb-3"><?php esc_html_e('Enter Principal Repaid on Home Loan', $td); ?></label>
                        <div class="relative">
                            <span class="pointer-events-none absolute left-5 top-1/2 -translate-y-1/2 text-sm text-[#444444]" aria-hidden="true">₹</span>
                            <input id="tb-principal" type="text" inputmode="numeric" autocomplete="off" class="<?php echo esc_attr($field); ?>" />
                        </div>
                    </div>
                </div>

                <!-- Results -->
                <div class="bg-[#fbf6f0] text-[#302F5A] p-6 sm:p-10 lg:p-14 flex flex-col justify-center" aria-live="polite">
                    <p class="text-center text-lg sm:text-xl font-medium leading-snug">
                        <?php esc_html_e('Total income tax benefit with a Home Loan', $td); ?>
                        <span id="tb-benefit" class="font-semibold whitespace-nowrap">₹ 0</span>
                    </p>

                    <div class="mt-10 space-y-6">
                        <div class="flex items-end justify-between gap-4 border-b border-[#cfc4b4] pb-3">
                            <p class="text-sm text-[#6f6f6f]"><?php esc_html_e('Income tax payable without a Home Loan -', $td); ?></p>
                            <p id="tb-without" class="text-lg font-semibold whitespace-nowrap">₹ 0</p>
                        </div>
                        <div class="flex items-end justify-between gap-4 border-b border-[#cfc4b4] pb-3">
                            <p class="text-sm text-[#6f6f6f]"><?php esc_html_e('Income tax payable with a Home Loan -', $td); ?></p>
                            <p id="tb-with" class="text-lg font-semibold whitespace-nowrap">₹ 0</p>
                        </div>
                    </div>

                    <p id="tb-detail" class="mt-6 text-xs leading-relaxed text-[#6f6f6f]"></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================= CONTENT ======================= -->
    <section class="pb-16 sm:pb-20">
        <div class="<?php echo esc_attr($container); ?> space-y-14">

            <!-- How it works -->
            <div>
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('How Home Loan Tax Benefits Work?', $td); ?></h2>
                <span class="mt-3 block h-[3px] w-14 rounded bg-gold"></span>

                <p class="mt-6 <?php echo esc_attr($p); ?>"><?php esc_html_e('Two main deductions are relevant to most home loans:', $td); ?></p>
                <ul class="mt-3 <?php echo esc_attr($ul); ?>">
                    <li><strong class="text-[#302F5A]"><?php esc_html_e('Section 80C:', $td); ?></strong> <?php echo esc_html(sprintf('Principal repayment can qualify for deduction, subject to the overall ₹%s lakh limit under Section 80C in the old tax regime.', $l80c)); ?></li>
                    <li><strong class="text-[#302F5A]"><?php esc_html_e('Section 24(b):', $td); ?></strong> <?php echo esc_html(sprintf('Interest paid on a housing loan for a self-occupied property can qualify for deduction up to ₹%s lakh under the old tax regime, subject to conditions.', $l24b)); ?></li>
                    <li><?php echo wp_kses(__('Tax treatment differs between the <strong class="text-[#302F5A]">old and new tax regimes.</strong> This calculator uses the old tax regime, because home-loan deductions on a self-occupied property are generally not available in the new regime.', $td), $strong); ?></li>
                </ul>
            </div>

            <!-- At a glance -->
            <div>
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('Home Loan Tax Benefits at a Glance', $td); ?></h2>

                <div class="mt-6 overflow-hidden rounded-lg border border-ink-line">
                    <div class="overflow-x-auto">
                        <table class="w-full min-w-[640px] text-sm text-center">
                            <thead class="bg-[#302F5A] text-white">
                                <tr>
                                    <th scope="col" class="<?php echo esc_attr($th); ?>"><?php esc_html_e('Tax Benefit', $td); ?></th>
                                    <th scope="col" class="<?php echo esc_attr($th); ?>"><?php esc_html_e('What It Covers', $td); ?></th>
                                    <th scope="col" class="<?php echo esc_attr($th); ?>"><?php esc_html_e('Limit', $td); ?></th>
                                </tr>
                            </thead>
                            <tbody class="text-[#444444]">
                                <?php foreach ($glance as $row) : ?>
                                    <tr class="border-b border-ink-line last:border-b-0">
                                        <td class="<?php echo esc_attr($td_cell); ?>"><?php echo esc_html($row[0]); ?></td>
                                        <td class="<?php echo esc_attr($td_cell); ?>"><?php echo esc_html($row[1]); ?></td>
                                        <td class="<?php echo esc_attr($td_cell); ?>"><?php echo esc_html($row[2]); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <p class="mt-6 <?php echo esc_attr($p); ?>"><?php echo esc_html(sprintf('The ₹%1$s lakh Section 80C combined limit and the ₹%2$s lakh Section 24(b) self-occupied limit apply under the old regime.', $l80c, $l24b)); ?></p>
            </div>

            <!-- How the calculator estimates -->
            <div>
                <h2 class="<?php echo esc_attr($h2); ?>"><?php esc_html_e('How This Calculator Estimates Your Tax', $td); ?></h2>
                <span class="mt-3 block h-[3px] w-14 rounded bg-gold"></span>

                <p class="mt-6 <?php echo esc_attr($p); ?>"><?php esc_html_e('The calculator compares your income tax with and without the home-loan deductions, using old tax regime slab rates:', $td); ?></p>

                <div class="mt-4 max-w-md overflow-hidden rounded-lg border border-ink-line">
                    <table class="w-full text-sm text-center">
                        <thead class="bg-[#302F5A] text-white">
                            <tr>
                                <th scope="col" class="<?php echo esc_attr($th); ?>"><?php esc_html_e('Taxable Income', $td); ?></th>
                                <th scope="col" class="<?php echo esc_attr($th); ?>"><?php esc_html_e('Tax Rate', $td); ?></th>
                            </tr>
                        </thead>
                        <tbody class="text-[#444444]">
                            <?php foreach ($slab_rows as $row) : ?>
                                <tr class="border-b border-ink-line last:border-b-0">
                                    <td class="<?php echo esc_attr($td_cell); ?>"><?php echo esc_html($row[0]); ?></td>
                                    <td class="<?php echo esc_attr($td_cell); ?>"><?php echo esc_html($row[1]); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <ul class="mt-5 <?php echo esc_attr($ul); ?>">
                    <li><?php echo esc_html(sprintf('A standard deduction of ₹%s is assumed (salaried income).', number_format($tax['std_deduction']))); ?></li>
                    <li><?php echo esc_html(sprintf('A rebate under Section 87A of up to ₹%1$s applies when taxable income is ₹%2$s lakh or less.', number_format($tax['rebate_max']), $lakh($tax['rebate_limit']))); ?></li>
                    <li><?php echo esc_html(sprintf('%s%% health and education cess is added. Surcharge (applicable at higher incomes) is not included.', $tax['cess'] * 100)); ?></li>
                    <li><?php echo esc_html(sprintf('The ₹%s lakh Section 80C limit is assumed to be otherwise unused. If PPF, EPF, insurance premiums or other investments already use it up, your home-loan principal may add little or no further benefit.', $l80c)); ?></li>
                    <li><?php esc_html_e('No other deductions or exemptions are considered.', $td); ?></li>
                </ul>
                <p class="mt-4 <?php echo esc_attr($p); ?>"><strong class="text-[#302F5A]"><?php esc_html_e('Note:', $td); ?></strong> <?php esc_html_e('Results are estimates for general information and are not tax advice. Tax rules change and individual situations differ, so please confirm your actual liability with a qualified tax professional.', $td); ?></p>
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
                    <details name="tb-faq" class="border-b border-[#d9cdbd]" <?php echo 0 === $i ? 'open' : ''; ?>>
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
    /* Home loan tax benefit calculator (old regime):
   benefit = tax without the loan deductions - tax with them. */
    (function() {
        var root = document.getElementById('tax-calculator');
        if (!root) {
            return;
        }

        var cfg = JSON.parse(root.getAttribute('data-config'));
        var nf = new Intl.NumberFormat('en-IN');
        var $ = function(id) {
            return document.getElementById(id);
        };
        var el = {
            gross: $('tb-gross'),
            interest: $('tb-interest'),
            principal: $('tb-principal'),
            benefit: $('tb-benefit'),
            without: $('tb-without'),
            withLoan: $('tb-with'),
            detail: $('tb-detail')
        };

        function rupee(n) {
            return '₹ ' + nf.format(Math.round(n));
        }

        function read(input) {
            return parseInt(input.value.replace(/\D/g, ''), 10) || 0;
        }

        /* Tax on a taxable income: slabs, then Section 87A rebate, then cess. */
        function taxFor(taxable) {
            var tax = 0,
                prev = 0;
            for (var i = 0; i < cfg.slabs.length; i++) {
                var top = cfg.slabs[i][0] === null ? Infinity : cfg.slabs[i][0];
                var rate = cfg.slabs[i][1];
                if (taxable > prev) {
                    tax += (Math.min(taxable, top) - prev) * rate;
                }
                prev = top;
            }
            if (taxable <= cfg.rebate_limit) {
                tax = Math.max(0, tax - cfg.rebate_max);
            }
            return tax * (1 + cfg.cess);
        }

        function update() {
            var gross = read(el.gross),
                interest = read(el.interest),
                principal = read(el.principal);

            var base = Math.max(gross - cfg.std_deduction, 0);
            var d80c = Math.min(principal, cfg.limit_80c);
            var d24b = Math.min(interest, cfg.limit_24b);

            var without = Math.round(taxFor(base));
            var withLoan = Math.round(taxFor(Math.max(base - d80c - d24b, 0)));
            var benefit = Math.max(without - withLoan, 0);

            el.benefit.textContent = rupee(benefit);
            el.without.textContent = rupee(without);
            el.withLoan.textContent = rupee(withLoan);

            var capped80c = principal > cfg.limit_80c ? ' (capped at ' + rupee(cfg.limit_80c) + ')' : '';
            var capped24b = interest > cfg.limit_24b ? ' (capped at ' + rupee(cfg.limit_24b) + ')' : '';
            el.detail.textContent = 'Deductions considered: Section 80C ' + rupee(d80c) + capped80c +
                ' · Section 24(b) ' + rupee(d24b) + capped24b + '.';
        }

        /* Money fields: Indian digit grouping while typing, caret kept beside the same digit. */
        function bindMoney(input, initial) {
            input.value = nf.format(initial);
            input.addEventListener('input', function() {
                var raw = input.value,
                    caret = input.selectionStart || 0;
                var digitsBeforeCaret = raw.slice(0, caret).replace(/\D/g, '').length;
                var n = Math.min(parseInt(raw.replace(/\D/g, ''), 10) || 0, cfg.max_input);
                input.value = n ? nf.format(n) : '';

                var pos = 0,
                    seen = 0,
                    out = input.value;
                while (pos < out.length && seen < digitsBeforeCaret) {
                    if (/\d/.test(out.charAt(pos))) {
                        seen++;
                    }
                    pos++;
                }
                input.setSelectionRange(pos, pos);
                update();
            });
        }

        bindMoney(el.gross, cfg.defaults.gross);
        bindMoney(el.interest, cfg.defaults.interest);
        bindMoney(el.principal, cfg.defaults.principal);
        update();
    })();
</script>

<?php
get_footer();
