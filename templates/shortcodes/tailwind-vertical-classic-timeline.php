<?php
/**
 * The template for displaying [chargewp-vertical-timeline] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\ChargeWpbShortcode $_this
 */

defined( 'ABSPATH' ) || exit;
?>

<div>
	<div <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'chargewp-tailwind-vertical-classic-timeline-container chargewp-tailwind-container' ] ); ?>>
        <div class="chargewp-relative chargewp-w-full chargewp-p-6 chargewp-md:p-8">
            <div class="chargewp-w-full chargewp-max-w-[100%] chargewp-mx-auto chargewp-container">
                <div class="chargewp-relative chargewp-w-full chargewp-px-[2%] sm:chargewp-px-[4%] md:chargewp-px-[6%]">
                    <div class="chargewp-absolute chargewp-left-1/2 chargewp-transform -chargewp-translate-x-1/2 chargewp-h-full chargewp-w-<?php echo esc_attr( (int) $atts['baseline_width'] ); ?> chargewp-bg-[<?php echo esc_attr( $atts['baseline_background'] ); ?>] chargewp-hidden sm:chargewp-block"></div>
                    <div class="chargewp-space-y-[4%] sm:chargewp-space-y-[6%] md:chargewp-space-y-[8%]">
                        <?php echo do_shortcode( $content ); ?>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

<style>
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-1 { width: 0.25rem; }

    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-2 {
        width: 0.5rem
    }

    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-3 {
        width: 0.75rem
    }

    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-4 {
        width: 1rem
    }

    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-5 {
        width: 1.25rem
    }

    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-6 {
        width: 1.5rem
    }

    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-7 {
        width: 1.75rem
    }

    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-8 {
        width: 2rem
    }

    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-9 {
        width: 2.25rem
    }

    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-10 {
        width: 2.5rem
    }

</style>

<style>
    /* Borders, Radius, Backgrounds */
    .chargewp-tailwind-container .chargewp-rounded-full { border-radius: 9999px; }
    .chargewp-tailwind-container .chargewp-rounded-md { border-radius: 0.375rem; }
    .chargewp-tailwind-container .chargewp-rounded-none { border-radius: 0; }
    .chargewp-tailwind-container .chargewp-border-0 { border-width: 0px; }
    .chargewp-tailwind-container .chargewp-border-2 { border-width: 2px; }
    .chargewp-tailwind-container .chargewp-border-solid { border-style: solid; }
    .chargewp-tailwind-container .chargewp-border-\[\#cccccc\] {
        --tw-border-opacity: 1;
        border-color: rgb(204 204 204 / var(--tw-border-opacity));
    }
    .chargewp-tailwind-container .chargewp-bg-\[\#cccccc\] {
        --tw-bg-opacity: 1;
        background-color: rgb(204 204 204 / var(--tw-bg-opacity));
    }
    .chargewp-tailwind-container .chargewp-bg-\[\#ffffff\] {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity));
    }

    /* Misc */
    .chargewp-tailwind-container .chargewp-object-cover { object-fit: cover; }
    .chargewp-tailwind-container .chargewp-p-6 { padding: 1.5rem; }
    .chargewp-tailwind-container .chargewp-px-\[2\%\] { padding-left: 2%; padding-right: 2%; }
    .chargewp-tailwind-container .chargewp-pl-0 { padding-left: 0; }
    .chargewp-tailwind-container .chargewp-pr-0 { padding-right: 0; }
    .chargewp-tailwind-container .chargewp-text-center { text-align: center; }
    .chargewp-tailwind-container .chargewp-text-base {
        font-size: 1rem;
        line-height: 1.5rem;
    }
    .chargewp-tailwind-container .chargewp-text-lg {
        font-size: 1.125rem;
        line-height: 1.75rem;
    }
    .chargewp-tailwind-container .chargewp-text-sm {
        font-size: 0.875rem;
        line-height: 1.25rem;
    }
    .chargewp-tailwind-container .chargewp-text-gray-500 {
        --tw-text-opacity: 1;
        color: rgb(107 114 128 / var(--tw-text-opacity));
    }
    .chargewp-tailwind-container .chargewp-text-gray-900 {
        --tw-text-opacity: 1;
        color: rgb(17 24 39 / var(--tw-text-opacity));
    }
    .chargewp-tailwind-container .chargewp-shadow-md {
        --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1),
        0 2px 4px -2px rgb(0 0 0 / 0.1);
        box-shadow: var(--tw-shadow);
    }
    .chargewp-tailwind-container .chargewp-shadow-none {
        --tw-shadow: 0 0 #0000;
        box-shadow: var(--tw-shadow);
    }

    /* Hover Groups */
    .chargewp-tailwind-container .chargewp-group:hover .group-hover\:chargewp-border-\[\#EEEE2278\] {
        border-color: #EEEE2278;
    }
    .chargewp-tailwind-container .chargewp-group:hover .group-hover\:chargewp-bg-\[\#EEEE22\] {
        --tw-bg-opacity: 1;
        background-color: rgb(238 238 34 / var(--tw-bg-opacity));
    }

    /* Responsive Styles */
    @media (min-width: 640px) {
        .chargewp-tailwind-container .sm\:chargewp-order-1 { order: 1; }
        .chargewp-tailwind-container .sm\:chargewp-order-2 { order: 2; }
        .chargewp-tailwind-container .sm\:chargewp-mb-0 { margin-bottom: 0; }
        .chargewp-tailwind-container .sm\:chargewp-block { display: block; }
        .chargewp-tailwind-container .sm\:chargewp-flex { display: flex; }
        .chargewp-tailwind-container .sm\:chargewp-w-\[48\%\] { width: 48%; }
        .chargewp-tailwind-container .sm\:chargewp-flex-row { flex-direction: row; }
        .chargewp-tailwind-container .sm\:chargewp-items-center { align-items: center; }
        .chargewp-tailwind-container .sm\:chargewp-space-y-\[6\%\] > :not([hidden]) ~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(6% * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(6% * var(--tw-space-y-reverse));
        }
        .chargewp-tailwind-container .sm\:chargewp-px-\[4\%\] {
            padding-left: 4%;
            padding-right: 4%;
        }
        .chargewp-tailwind-container .sm\:chargewp-pl-\[4\%\] { padding-left: 4%; }
        .chargewp-tailwind-container .sm\:chargewp-pr-\[4\%\] { padding-right: 4%; }
        .chargewp-tailwind-container .sm\:chargewp-text-left { text-align: left; }
        .chargewp-tailwind-container .sm\:chargewp-text-right { text-align: right; }
        .chargewp-tailwind-container .sm\:chargewp-text-base {
            font-size: 1rem;
            line-height: 1.5rem;
        }
        .chargewp-tailwind-container .sm\:chargewp-text-lg {
            font-size: 1.125rem;
            line-height: 1.75rem;
        }
        .chargewp-tailwind-container .sm\:chargewp-text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }
    }
    @media (min-width: 768px) {
        .chargewp-tailwind-container .md\:chargewp-space-y-\[8\%\] > :not([hidden]) ~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(8% * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(8% * var(--tw-space-y-reverse));
        }
        .chargewp-tailwind-container .md\:chargewp-px-\[6\%\] {
            padding-left: 6%;
            padding-right: 6%;
        }
        .chargewp-tailwind-container .md\:chargewp-pl-\[6\%\] { padding-left: 6%; }
        .chargewp-tailwind-container .md\:chargewp-pr-\[6\%\] { padding-right: 6%; }
        .chargewp-tailwind-container .md\:chargewp-text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }
        .chargewp-tailwind-container .md\:chargewp-text-2xl {
            font-size: 1.5rem;
            line-height: 2rem;
        }
    }
</style>
