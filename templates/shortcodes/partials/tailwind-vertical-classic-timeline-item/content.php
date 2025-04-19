<?php
/**
 * The template for displaying content part of [chargewp-tailwind-vertical-classic-timeline-item] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcode $_this
 * @var string $default_classes
 */

use ChargewpWpbTimeline\ElementIntegration\HeadingIntegration;
$custom_heading_integration = new HeadingIntegration();
?>

<div class="<?php echo esc_attr( $default_classes ); ?>
			chargewp-bg-[<?php echo esc_attr( $atts['content_background_color'] ); ?>]
			group-hover:chargewp-bg-[<?php echo esc_attr( $atts['content_background_hover_color'] ); ?>]
			chargewp-border-<?php echo esc_attr( $atts['content_border_width'] ); ?>
			chargewp-border-[<?php echo esc_attr( $atts['content_border_color'] ); ?>]
			chargewp-border-<?php echo esc_attr( $atts['content_border_style'] ); ?>
			group-hover:chargewp-border-[<?php echo esc_attr( $atts['content_border_hover_color'] ); ?>]"
>
	<div class="chargewp-text-base sm:chargewp-text-lg md:chargewp-text-xl chargewp-text-gray-500">
		<?php $custom_heading_integration->output_custom_font_attribute( 'date', $atts, $_this->element_slug, 'span' ); ?>
	</div>
	<div class="chargewp-text-lg sm:chargewp-text-xl md:chargewp-text-2xl chargewp-font-playfair chargewp-text-gray-900 chargewp-mt-2">
		<?php $custom_heading_integration->output_custom_font_attribute( 'title', $atts, $_this->element_slug, 'span' ); ?>
	</div>
	<div class="chargewp-mt-2 chargewp-text-sm sm:chargewp-text-base">
		<?php echo wpb_js_remove_wpautop( $content, true ); // phpcs:ignore: WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	</div>
</div>

<style>
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-bg-\[\<?php echo esc_attr( $atts['content_background_color'] ); ?>\] {
        background-color: <?php echo esc_attr( $atts['content_background_color'] ); ?>;
    }
    .chargewp-tailwind-container .chargewp-group:hover .group-hover\:chargewp-bg-\[\<?php echo esc_attr( $atts['content_background_hover_color'] ); ?>\] {
        background-color: <?php echo esc_attr( $atts['content_background_hover_color'] ); ?>;
    }

    <?php $_this->output_style_shortcode_id(); ?> .chargewp-border-<?php echo esc_attr( (int) $atts['content_border_width'] ); ?> {
        border-width: <?php echo esc_attr( (int) $atts['content_border_width'] ); ?>px;
    }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-border-\[\<?php echo esc_attr( $atts['content_border_color'] ); ?>\] {
        border-color: <?php echo esc_attr( $atts['content_border_color'] ); ?>
    }
    .chargewp-group:hover .group-hover\:chargewp-border-\[\<?php echo esc_attr( $atts['content_border_hover_color'] ); ?>\] {
        border-color: <?php echo esc_attr( $atts['content_border_hover_color'] ); ?>
    }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-border-<?php echo esc_attr( $atts['content_border_style'] ); ?> {
        border-style: <?php echo esc_attr( $atts['content_border_style'] ); ?>
    }

</style>
