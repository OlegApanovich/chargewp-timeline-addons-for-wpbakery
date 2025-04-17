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
        <div class="relative w-full p-6 md:p-8">
            <div class="w-full max-w-[100%] mx-auto container">
                <div class="relative w-full px-[2%] sm:px-[4%] md:px-[6%]">
                    <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-<?php echo esc_attr( (int) $atts['baseline_width'] ); ?> bg-[<?php echo esc_attr( $atts['baseline_background'] ); ?>] hidden sm:block"></div>
                    <div class="space-y-[4%] sm:space-y-[6%] md:space-y-[8%]">
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

    .chargewp-tailwind-container .container {
        width: 100%
    }

    @media (min-width: 640px) {
        .chargewp-tailwind-container .container {
            max-width: 640px
        }
    }

    @media (min-width: 768px) {
        .chargewp-tailwind-container .container {
            max-width: 768px
        }
    }

    @media (min-width: 1024px) {
        .chargewp-tailwind-container .container {
            max-width: 1024px
        }
    }

    @media (min-width: 1280px) {
        .chargewp-tailwind-container .container {
            max-width: 1280px
        }
    }

    @media (min-width: 1536px) {
        .chargewp-tailwind-container .container {
            max-width: 1536px
        }
    }

    .chargewp-tailwind-container .absolute { position: absolute }
    .chargewp-tailwind-container .relative { position: relative }
    .chargewp-tailwind-container .left-1\/2 { left: 50% }
    .chargewp-tailwind-container .order-1 { order: 1 }
    .chargewp-tailwind-container .order-2 { order: 2 }
    .chargewp-tailwind-container .mx-auto { margin-left: auto; margin-right: auto }
    .chargewp-tailwind-container .mb-4 { margin-bottom: 1rem }
    .chargewp-tailwind-container .mt-2 { margin-top: 0.5rem }
    .chargewp-tailwind-container .flex { display: flex }
    .chargewp-tailwind-container .hidden { display: none }
    .chargewp-tailwind-container .aspect-video { aspect-ratio: 16 / 9 }
    .chargewp-tailwind-container .h-\[3\%\] { height: 3% }
    .chargewp-tailwind-container .h-full { height: 100% }
    .chargewp-tailwind-container .min-h-\[44px\] { min-height: 44px }
    .chargewp-tailwind-container .min-h-\[50px\] { min-height: 50px }
    .chargewp-tailwind-container .w-1 { width: 0.25rem }
    .chargewp-tailwind-container .w-\[3\%\] { width: 3% }
    .chargewp-tailwind-container .w-full { width: 100% }
    .chargewp-tailwind-container .min-w-\[44px\] { min-width: 44px }
    .chargewp-tailwind-container .min-w-\[50px\] { min-width: 50px }
    .chargewp-tailwind-container .max-w-\[100\%\] { max-width: 100% }
    .chargewp-tailwind-container .-translate-x-1\/2 {
        --tw-translate-x: -50%;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
    .chargewp-tailwind-container .-translate-y-1\/2 {
        --tw-translate-y: -50%;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
    .chargewp-tailwind-container .rotate-0 {
        --tw-rotate: 0deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
    .chargewp-tailwind-container .rotate-45 {
        --tw-rotate: 45deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
    .chargewp-tailwind-container .transform {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
    .chargewp-tailwind-container .flex-col { flex-direction: column }
    .chargewp-tailwind-container .items-center { align-items: center }
    .chargewp-tailwind-container .justify-center { justify-content: center }
    .chargewp-tailwind-container .justify-between { justify-content: space-between }
    .chargewp-tailwind-container .space-y-\[4\%\] > :not([hidden]) ~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(4% * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(4% * var(--tw-space-y-reverse))
    }
    .chargewp-tailwind-container .rounded-full { border-radius: 9999px }
    .chargewp-tailwind-container .rounded-md { border-radius: 0.375rem }
    .chargewp-tailwind-container .rounded-none { border-radius: 0px }
    .chargewp-tailwind-container .border-0 { border-width: 0px }
    .chargewp-tailwind-container .border-2 { border-width: 2px }
    .chargewp-tailwind-container .border-solid { border-style: solid }
    .chargewp-tailwind-container .border-\[\#cccccc\] {
        --tw-border-opacity: 1;
        border-color: rgb(204 204 204 / var(--tw-border-opacity, 1))
    }
    .chargewp-tailwind-container .bg-\[\#cccccc\] {
        --tw-bg-opacity: 1;
        background-color: rgb(204 204 204 / var(--tw-bg-opacity, 1))
    }
    .chargewp-tailwind-container .bg-\[\#ffffff\] {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1))
    }
    .chargewp-tailwind-container .object-cover {
        -o-object-fit: cover;
        object-fit: cover
    }
    .chargewp-tailwind-container .px-\[2\%\] {
        padding-left: 2%;
        padding-right: 2%
    }
    .chargewp-tailwind-container .pl-0 { padding-left: 0px }
    .chargewp-tailwind-container .pr-0 { padding-right: 0px }
    .chargewp-tailwind-container .text-center { text-align: center }
    .chargewp-tailwind-container .text-base {
        font-size: 1rem;
        line-height: 1.5rem
    }
    .chargewp-tailwind-container .text-lg {
        font-size: 1.125rem;
        line-height: 1.75rem
    }
    .chargewp-tailwind-container .text-sm {
        font-size: 0.875rem;
        line-height: 1.25rem
    }
    .chargewp-tailwind-container .text-gray-500 {
        --tw-text-opacity: 1;
        color: rgb(107 114 128 / var(--tw-text-opacity, 1))
    }
    .chargewp-tailwind-container .text-gray-900 {
        --tw-text-opacity: 1;
        color: rgb(17 24 39 / var(--tw-text-opacity, 1))
    }
    .chargewp-tailwind-container .shadow-md {
        --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }
    .chargewp-tailwind-container .shadow-none {
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }
    .chargewp-tailwind-container .group:hover .group-hover\:border-\[\#EEEE2278\] {
        border-color: #EEEE2278
    }
    .chargewp-tailwind-container .group:hover .group-hover\:bg-\[\#EEEE22\] {
        --tw-bg-opacity: 1;
        background-color: rgb(238 238 34 / var(--tw-bg-opacity, 1))
    }

    @media (min-width: 640px) {
        .chargewp-tailwind-container .sm\:order-1 { order: 1 }
        .chargewp-tailwind-container .sm\:order-2 { order: 2 }
        .chargewp-tailwind-container .sm\:mb-0 { margin-bottom: 0px }
        .chargewp-tailwind-container .sm\:block { display: block }
        .chargewp-tailwind-container .sm\:flex { display: flex }
        .chargewp-tailwind-container .sm\:w-\[48\%\] { width: 48% }
        .chargewp-tailwind-container .sm\:flex-row { flex-direction: row }
        .chargewp-tailwind-container .sm\:items-center { align-items: center }
        .chargewp-tailwind-container .sm\:space-y-\[6\%\] > :not([hidden]) ~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(6% * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(6% * var(--tw-space-y-reverse))
        }
        .chargewp-tailwind-container .sm\:px-\[4\%\] {
            padding-left: 4%;
            padding-right: 4%
        }
        .chargewp-tailwind-container .sm\:pl-\[4\%\] { padding-left: 4% }
        .chargewp-tailwind-container .sm\:pr-\[4\%\] { padding-right: 4% }
        .chargewp-tailwind-container .sm\:text-left { text-align: left }
        .chargewp-tailwind-container .sm\:text-right { text-align: right }
        .chargewp-tailwind-container .sm\:text-base {
            font-size: 1rem;
            line-height: 1.5rem
        }
        .chargewp-tailwind-container .sm\:text-lg {
            font-size: 1.125rem;
            line-height: 1.75rem
        }
        .chargewp-tailwind-container .sm\:text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }
    }

    @media (min-width: 768px) {
        .chargewp-tailwind-container .md\:space-y-\[8\%\] > :not([hidden]) ~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(8% * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(8% * var(--tw-space-y-reverse))
        }
        .chargewp-tailwind-container .md\:px-\[6\%\] {
            padding-left: 6%;
            padding-right: 6%
        }
        .chargewp-tailwind-container .md\:pl-\[6\%\] { padding-left: 6% }
        .chargewp-tailwind-container .md\:pr-\[6\%\] { padding-right: 6% }
        .chargewp-tailwind-container .md\:text-2xl {
            font-size: 1.5rem;
            line-height: 2rem
        }
        .chargewp-tailwind-container .md\:text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }
    }
</style>
