<?php
/**
 * The template for displaying [chargewp-vertical-timeline] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcode $_this
 */

defined( 'ABSPATH' ) || exit;
?>

<div>
	<div <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'chargewp-tailwind-vertical-classic-timeline-container chargewp-tailwind-container' ] ); ?>>
        <div class="chargewp-relative chargewp-w-full chargewp-p-6 chargewp-md:p-8">
            <div class="chargewp-w-full chargewp-max-w-[100%] chargewp-mx-auto chargewp-container">
                <div class="chargewp-relative chargewp-w-full chargewp-px-[2%] sm:chargewp-px-[4%] md:chargewp-px-[6%]">
                    <div class="chargewp-absolute chargewp-left-1/2 chargewp-transform -chargewp-translate-x-1/2 chargewp-h-full chargewp-w-<?php echo esc_attr( (float) $atts['baseline_width'] ); ?> chargewp-bg-[<?php echo esc_attr( $atts['baseline_background'] ); ?>] chargewp-hidden sm:chargewp-block"></div>
                    <div class="chargewp-space-y-[4%] sm:chargewp-space-y-[6%] md:chargewp-space-y-[8%]">
                        <?php echo do_shortcode( $content ); ?>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

<style>
    *, ::before, ::after {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x:  ;
        --tw-pan-y:  ;
        --tw-pinch-zoom:  ;
        --tw-scroll-snap-strictness: proximity;
        --tw-gradient-from-position:  ;
        --tw-gradient-via-position:  ;
        --tw-gradient-to-position:  ;
        --tw-ordinal:  ;
        --tw-slashed-zero:  ;
        --tw-numeric-figure:  ;
        --tw-numeric-spacing:  ;
        --tw-numeric-fraction:  ;
        --tw-ring-inset:  ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(59 130 246 / 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur:  ;
        --tw-brightness:  ;
        --tw-contrast:  ;
        --tw-grayscale:  ;
        --tw-hue-rotate:  ;
        --tw-invert:  ;
        --tw-saturate:  ;
        --tw-sepia:  ;
        --tw-drop-shadow:  ;
        --tw-backdrop-blur:  ;
        --tw-backdrop-brightness:  ;
        --tw-backdrop-contrast:  ;
        --tw-backdrop-grayscale:  ;
        --tw-backdrop-hue-rotate:  ;
        --tw-backdrop-invert:  ;
        --tw-backdrop-opacity:  ;
        --tw-backdrop-saturate:  ;
        --tw-backdrop-sepia:  ;
        --tw-contain-size:  ;
        --tw-contain-layout:  ;
        --tw-contain-paint:  ;
        --tw-contain-style:
    }

    ::backdrop {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x:  ;
        --tw-pan-y:  ;
        --tw-pinch-zoom:  ;
        --tw-scroll-snap-strictness: proximity;
        --tw-gradient-from-position:  ;
        --tw-gradient-via-position:  ;
        --tw-gradient-to-position:  ;
        --tw-ordinal:  ;
        --tw-slashed-zero:  ;
        --tw-numeric-figure:  ;
        --tw-numeric-spacing:  ;
        --tw-numeric-fraction:  ;
        --tw-ring-inset:  ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(59 130 246 / 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur:  ;
        --tw-brightness:  ;
        --tw-contrast:  ;
        --tw-grayscale:  ;
        --tw-hue-rotate:  ;
        --tw-invert:  ;
        --tw-saturate:  ;
        --tw-sepia:  ;
        --tw-drop-shadow:  ;
        --tw-backdrop-blur:  ;
        --tw-backdrop-brightness:  ;
        --tw-backdrop-contrast:  ;
        --tw-backdrop-grayscale:  ;
        --tw-backdrop-hue-rotate:  ;
        --tw-backdrop-invert:  ;
        --tw-backdrop-opacity:  ;
        --tw-backdrop-saturate:  ;
        --tw-backdrop-sepia:  ;
        --tw-contain-size:  ;
        --tw-contain-layout:  ;
        --tw-contain-paint:  ;
        --tw-contain-style:
    }

    .chargewp-tailwind-container .chargewp-container {
        width: 100%;
    }
    @media (min-width: 640px) {
        .chargewp-tailwind-container .chargewp-container {
            max-width: 640px;
        }
    }
    @media (min-width: 768px) {
        .chargewp-tailwind-container .chargewp-container {
            max-width: 768px;
        }
    }
    @media (min-width: 1024px) {
        .chargewp-tailwind-container .chargewp-container {
            max-width: 1024px;
        }
    }
    @media (min-width: 1280px) {
        .chargewp-tailwind-container .chargewp-container {
            max-width: 1280px;
        }
    }
    @media (min-width: 1536px) {
        .chargewp-tailwind-container .chargewp-container {
            max-width: 1536px;
        }
    }

    /* All Other Styles */
    .chargewp-tailwind-container .chargewp-absolute { position: absolute; }
    .chargewp-tailwind-container .chargewp-relative { position: relative; }
    .chargewp-tailwind-container .chargewp-left-1\/2 { left: 50%; }
    .chargewp-tailwind-container .chargewp-order-1 { order: 1; }
    .chargewp-tailwind-container .chargewp-order-2 { order: 2; }
    .chargewp-tailwind-container .chargewp-mx-auto { margin-left: auto; margin-right: auto; }
    .chargewp-tailwind-container .chargewp-mb-4 { margin-bottom: 1rem; }
    .chargewp-tailwind-container .chargewp-mt-2 { margin-top: 0.5rem; }
    .chargewp-tailwind-container .chargewp-flex { display: flex; }
    .chargewp-tailwind-container .chargewp-hidden { display: none; }
    .chargewp-tailwind-container .chargewp-aspect-video { aspect-ratio: 16 / 9; }
    .chargewp-tailwind-container .chargewp-h-\[3\%\] { height: 3%; }
    .chargewp-tailwind-container .chargewp-h-full { height: 100%; }
    .chargewp-tailwind-container .chargewp-w-1 { width: 0.25rem; }
    .chargewp-tailwind-container .chargewp-w-\[3\%\] { width: 3%; }
    .chargewp-tailwind-container .chargewp-w-full { width: 100%; }
    .chargewp-tailwind-container .chargewp-max-w-\[100\%\] { max-width: 100%; }

    /* Transforms */
    .chargewp-tailwind-container .-chargewp-translate-x-1\/2,
    .chargewp-tailwind-container .-chargewp-translate-y-1\/2,
    .chargewp-tailwind-container .chargewp-rotate-0,
    .chargewp-tailwind-container .chargewp-rotate-45,
    .chargewp-tailwind-container .chargewp-transform {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y))
        rotate(var(--tw-rotate))
        skewX(var(--tw-skew-x))
        skewY(var(--tw-skew-y))
        scaleX(var(--tw-scale-x))
        scaleY(var(--tw-scale-y));
    }
    .chargewp-tailwind-container .-chargewp-translate-x-1\/2 { --tw-translate-x: -50%; }
    .chargewp-tailwind-container .-chargewp-translate-y-1\/2 { --tw-translate-y: -50%; }
    .chargewp-tailwind-container .chargewp-rotate-0 { --tw-rotate: 0deg; }
    .chargewp-tailwind-container .chargewp-rotate-45 { --tw-rotate: 45deg; }

    /* Layout */
    .chargewp-tailwind-container .chargewp-flex-col { flex-direction: column; }
    .chargewp-tailwind-container .chargewp-items-center { align-items: center; }
    .chargewp-tailwind-container .chargewp-justify-center { justify-content: center; }
    .chargewp-tailwind-container .chargewp-justify-between { justify-content: space-between; }
    .chargewp-tailwind-container .chargewp-space-y-\[4\%\] > :not([hidden]) ~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(4% * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(4% * var(--tw-space-y-reverse));
    }
</style>

<style>
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-0\.5 { width: 0.125rem }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-1 { width: 0.25rem; }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-1\.5 { width: 0.375rem }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-2 { width: 0.5rem }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-2\.5 { width: 0.625rem }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-3 { width: 0.75rem }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-3\.5 { width: 0.875rem }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-4 { width: 1rem }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-4\.5 { width: 1.12rem }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-5 { width: 1.25rem }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-5\.5 { width: 1.375rem }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-6 { width: 1.5rem }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-6\.5 { width: 1.625rem }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-7 { width: 1.75rem }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-7\.5 { width: 1.875rem }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-8 { width: 2rem }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-8\.5 { width: 2.125rem }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-9 { width: 2.25rem }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-9\.5 { width: 2.375rem }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-w-10 { width: 2.5rem }

    <?php $_this->output_style_shortcode_id(); ?> .chargewp-bg-\[\<?php echo esc_attr( $atts['baseline_background'] ); ?>\] {
        background-color: <?php echo esc_attr( $atts['baseline_background'] ); ?>
    }
</style>

<style>
    /* Misc */
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
