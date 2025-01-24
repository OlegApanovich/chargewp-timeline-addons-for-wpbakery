<?php
/**
 * The template for displaying [wpbakery-plus-vertical-timeline-item] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\ChargeWpbShortcode $_this
 */

defined( 'ABSPATH' ) || exit;

use ChargewpWpbTimeline\CustomHeadingIntegration;
$custom_heading_integration = new CustomHeadingIntegration();
?>

<li <?php $_this->output_shortcode_wrapper_attributes(); ?>>
	<div class="wpplus-direction-<?php echo empty( $atts['position'] ) || 'right' === $atts['position'] ? 'r' : 'l'; ?>">
		<div class="wpplus-flag-wrapper">
			<span class="wpplus-hexa"></span>
			<span class="wpplus-flag"><?php $custom_heading_integration->output_custom_font_attribute( 'title', $atts, $_this->element_slug, 'span' ); ?></span>
			<span class="wpplus-time-wrapper"><span class="wpplus-time"><?php $custom_heading_integration->output_custom_font_attribute( 'date', $atts, $_this->element_slug, 'span' ); ?></span></span>
		</div>

		<div class="wpplus-desc">
			<?php echo wpb_js_remove_wpautop( $content, true ); // phpcs:ignore: WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</div>
	</div>
</li>

<style>
	<?php $_this->output_style_shortcode_id(); ?> .wpplus-hexa {
		background: <?php echo esc_attr( $atts['marker_color'] ); ?>;
	}

	.wpplus-timeline <?php $_this->output_style_shortcode_id(); ?> .wpplus-hexa:before {
		border-bottom: 4px solid <?php echo esc_attr( $atts['marker_color'] ); ?>;
		border-left-width: 8px;
		border-right-width: 8px;
		top: -4px;
	}

	.wpplus-timeline <?php $_this->output_style_shortcode_id(); ?> .wpplus-hexa:after {
		border-left-width: 8px;
		border-right-width: 8px;
		border-top: 4px solid <?php echo esc_attr( $atts['marker_color'] ); ?>;
		bottom: -4px;
	}

	<?php $_this->output_style_shortcode_id(); ?> .wpplus-time {
		background: <?php echo esc_attr( $atts['date_background'] ); ?>;
	}

	<?php $_this->output_style_shortcode_id(); ?> .wpplus-flag {
		background: <?php echo esc_attr( $atts['title_color'] ); ?>;
	}

	<?php $_this->output_style_shortcode_id(); ?> .wpplus-desc {
		background: <?php echo esc_attr( $atts['text_color'] ); ?>;
		<?php if ( '#FEFEFE' === $atts['text_color'] ) : ?>
			-webkit-box-shadow: 0 0 1px rgba(0,0,0,0.20);
			-moz-box-shadow: 0 0 1px rgba(0,0,0,0.20);
			box-shadow: 0 0 1px rgba(0,0,0,0.20);
		<?php endif; ?>
	}
</style>
