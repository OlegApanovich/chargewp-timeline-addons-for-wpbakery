<?php
/**
 * The template for displaying [chargewp-zigzag-timeline-item] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\ChargeWpbShortcode $_this
 */

defined( 'ABSPATH' ) || exit;

use ChargewpWpbTimeline\CustomHeadingIntegration;
use ChargewpWpbTimeline\CustomIconIntegration;
$custom_heading_integration = new CustomHeadingIntegration();
$custom_icon_integration    = new CustomIconIntegration();
?>

<div <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'chargewp-zigzag-timeline__event  animated fadeInUp delay-3s4' ] ); ?>>
	<div class="chargewp-zigzag-timeline__event__icon ">
		<?php
		if ( 'true' === $atts['add_icon'] ) {
			vc_icon_element_fonts_enqueue( $atts['i_type'] );
			$icon_class = $custom_icon_integration->get_element_icon_class( $atts );
			$icon_color = $custom_icon_integration->get_element_icon_color( $atts );
			?>
			<i class="<?php echo esc_attr( $icon_class ); ?>" style="color: <?php echo esc_attr( $icon_color ); ?>"></i>
			<?php
		}
		?>
	</div>
	<div class="chargewp-zigzag-timeline__event__date">
		<?php $custom_heading_integration->output_custom_font_attribute( 'date', $atts, $_this->element_slug, 'span' ); ?>
	</div>
	<div class="chargewp-zigzag-timeline__event__content ">
		<div class="chargewp-zigzag-timeline__event__title">
			<?php $custom_heading_integration->output_custom_font_attribute( 'title', $atts, $_this->element_slug, 'span' ); ?>
		</div>
		<div class="chargewp-zigzag-timeline__event__description">
			<?php echo wpb_js_remove_wpautop( $content, true ); // phpcs:ignore: WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</div>
	</div>
</div>

<style>
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-zigzag-timeline__event__icon {
		background: <?php echo esc_attr( $atts['decorative_circle_color'] ); ?>;
	}
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-zigzag-timeline__event__icon:before {
		background: <?php echo esc_attr( $atts['decorative_circle_color'] ); ?>;
	}
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-zigzag-timeline__event__icon:after {
		background: <?php echo esc_attr( $atts['decorative_circle_color'] ); ?>;
	}
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-zigzag-timeline__event__date {
		background: <?php echo esc_attr( $atts['date_background'] ); ?>;
	}

	<?php
	if ( 'right' === $atts['position'] ) {
		$_this->output_style_shortcode_id();
		?>
			{
				flex-direction: row-reverse;
			}
			<?php $_this->output_style_shortcode_id(); ?> .chargewp-zigzag-timeline__event__date {
				border-radius: 0 6px 6px 0;
			}

			<?php $_this->output_style_shortcode_id(); ?> .chargewp-zigzag-timeline__event__content {
				border-radius: 6px 0 0 6px;
			}

			<?php $_this->output_style_shortcode_id(); ?> .chargewp-zigzag-timeline__event__icon:before {
				content: "";
				width: 2px;
				height: 100%;
				position: absolute;
				top: 0%;
				left: 50%;
				right: auto;
				z-index: -1;
				transform: translateX(-50%);
				animation: chargewp-zigzag-timeline-fillTop 2s forwards 4s ease-in-out;
			}

			<?php $_this->output_style_shortcode_id(); ?> .chargewp-zigzag-timeline__event__icon:after {
				content: "";
				width: 100%;
				height: 2px;
				position: absolute;
				right: 0;
				z-index: -1;
				top: 50%;
				left: auto;
				transform: translateY(-50%);
				animation: chargewp-zigzag-timeline-fillLeft 2s forwards 4s ease-in-out;
			}
			@media (max-width: 786px) {
				<?php $_this->output_style_shortcode_id(); ?> {
					flex-direction: column;
					align-self: center;
				}

				<?php $_this->output_style_shortcode_id(); ?> .chargewp-zigzag-timeline__event__date {
					border-radius: 0;
					padding: 20px;
				}

				<?php $_this->output_style_shortcode_id(); ?> .chargewp-zigzag-timeline__event__icon {
					border-radius: 6px 6px 0 0;
					margin: 0;
				}
			}
		<?php
	}
	?>
</style>
