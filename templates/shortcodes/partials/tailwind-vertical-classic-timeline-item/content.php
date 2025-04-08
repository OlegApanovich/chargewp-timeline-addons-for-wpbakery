<?php
/**
 * The template for displaying content part of [chargewp-tailwind-vertical-classic-timeline-item] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\ChargeWpbShortcode $_this
 * @var string $default_classes
 */

use ChargewpWpbTimeline\CustomHeadingIntegration;
$custom_heading_integration = new CustomHeadingIntegration();
?>

<div class="<?php echo esc_attr( $default_classes ); ?>
			bg-[<?php echo esc_attr( $atts['content_background_color'] ); ?>]
			group-hover:bg-[<?php echo esc_attr( $atts['content_background_hover_color'] ); ?>]
			border-<?php echo esc_attr( $atts['content_border_type'] ); ?>
			border-[<?php echo esc_attr( $atts['content_border_color'] ); ?>]
			border-<?php echo esc_attr( $atts['content_border_style'] ); ?>
			group-hover:border-[<?php echo esc_attr( $atts['content_border_hover_color'] ); ?>]"
>
	<div class="text-base sm:text-lg md:text-xl text-gray-500">
		<?php $custom_heading_integration->output_custom_font_attribute( 'date', $atts, $_this->element_slug, 'span' ); ?>
	</div>
	<div class="text-lg sm:text-xl md:text-2xl font-playfair text-gray-900 mt-2">
		<?php $custom_heading_integration->output_custom_font_attribute( 'title', $atts, $_this->element_slug, 'span' ); ?>
	</div>
	<div class="mt-2 text-sm sm:text-base">
		<?php echo wpb_js_remove_wpautop( $content, true ); // phpcs:ignore: WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	</div>
</div>
