<?php
/**
 * The template for displaying [chargewp-tailwind-vertical-classic-timeline-item] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\ChargeWpbShortcode $_this
 */

defined( 'ABSPATH' ) || exit;

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<div <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'chargewp-tailwind-vertical-classic-timeline-item-container relative flex flex-col sm:flex-row items-center sm:items-center justify-between group' ] ); ?>>
    <?php
    if ('right' === $atts['rotation']) {
        ?>
            <div class="w-full sm:w-[48%] pr-0 sm:pr-[4%] md:pr-[6%] order-2 sm:order-1">
                <img src="https://images.unsplash.com/photo-1542744094-24638eff58bb" alt="Print Innovation" class="w-full aspect-video object-cover rounded-lg shadow-lg">
            </div>
            <div class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[3%] h-[3%] min-w-[24px] min-h-[24px] bg-white border-2 border-gray-200 group-hover:border-indigo-500 transition-colors duration-300 rotate-45 hidden sm:block"></div>
            <div class="w-full sm:w-[48%] pl-0 sm:pl-[4%] md:pl-[6%] order-1 sm:order-2 text-center sm:text-left mb-4 sm:mb-0">
                <span class="text-base sm:text-lg md:text-xl font-playfair text-gray-500">2022</span>
                <h3 class="text-lg sm:text-xl md:text-2xl font-playfair text-gray-900 mt-2">Print Evolution</h3>
                <p class="mt-2 text-sm sm:text-base text-gray-600 font-lato">Traditional print media adapts to modern demands while maintaining its timeless appeal.</p>
            </div>
        <?php
    } else {
        ?>
            <div class="w-full sm:w-[48%] pr-0 sm:pr-[4%] md:pr-[6%] text-center sm:text-right mb-4 sm:mb-0">
                <span class="text-base sm:text-lg md:text-xl font-playfair text-gray-500">2023</span>
                <h3 class="text-lg sm:text-xl md:text-2xl font-playfair text-gray-900 mt-2">Digital Renaissance</h3>
                <p class="mt-2 text-sm sm:text-base text-gray-600 font-lato">The emergence of revolutionary digital platforms transforms modern journalism and storytelling methods.</p>
            </div>

            <div class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[3%] h-[3%] min-w-[44px] min-h-[24px] bg-white border-2 border-gray-200 group-hover:border-indigo-500 transition-colors duration-300 rotate-75 hidden sm:flex items-center justify-center">
                <i class="fas fa-newspaper text-gray-400 group-hover:text-indigo-500 text-xs"></i>
            </div>
<!--            <div class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[3%] h-[3%] min-w-[44px] min-h-[44px] bg-green-500 border-2 border-green-300 group-hover:border-indigo-500 transition-colors duration-300 hidden sm:block rounded-full"></div>-->

<!--                <div class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[3%] h-[3%] min-w-[24px] min-h-[24px] bg-white border-2 border-gray-200 group-hover:border-indigo-500 transition-colors duration-300 rotate-45 hidden sm:flex items-center justify-center">-->
<!--                    <i class="fas fa-newspaper -rotate-45 text-gray-400 group-hover:text-indigo-500 text-xs"></i>-->
<!--                </div>-->

            <div class="w-full sm:w-[48%] pl-0 sm:pl-[4%] md:pl-[6%]">
                <img src="https://images.unsplash.com/photo-1516116216624-53e697fedbea" alt="Digital Media" class="w-full aspect-video object-cover rounded-lg shadow-lg">
            </div>
        <?php
    }
    ?>
</div>
