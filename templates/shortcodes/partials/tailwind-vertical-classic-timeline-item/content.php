<?php
/**
 * The template for displaying content part of [chargewp-tailwind-vertical-classic-timeline-item] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\ChargeWpbShortcode $_this
 */

use ChargewpWpbTimeline\CustomHeadingIntegration;
$custom_heading_integration = new CustomHeadingIntegration();
?>

<div class="text-base sm:text-lg md:text-xl text-gray-500">
    <?php $custom_heading_integration->output_custom_font_attribute( 'date', $atts, $_this->element_slug, 'span' ); ?>
</div>
<div class="text-lg sm:text-xl md:text-2xl font-playfair text-gray-900 mt-2">
    <?php $custom_heading_integration->output_custom_font_attribute( 'title', $atts, $_this->element_slug, 'span' ); ?>
</div>
<div class="mt-2 text-sm sm:text-base">
    <?php echo wpb_js_remove_wpautop( $content, true ); // phpcs:ignore: WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</div>
