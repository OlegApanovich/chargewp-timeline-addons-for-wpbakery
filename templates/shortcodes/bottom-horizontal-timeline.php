<?php
/**
 * The template for displaying [chargewp-bottom-horizontal-timeline] shortcode output.
 *
 * @since 1.4
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcode $_this
 */

use ChargewpWpbTimeline\ElementIntegration\IconIntegration;

defined( 'ABSPATH' ) || exit;

$items                   = vc_param_group_parse_atts( $atts['items'] );
$items                   = $_this->get_atts_lib( 'param-group' )->set_items_id( $items, $_this, 'items' );
$custom_icon_integration = new IconIntegration();
?>

<div <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'chargewp-bottom-horizontal-timeline-wrapper' ] ); ?>>
	<div class="chargewp-bottom-horizontal-timeline-container">
		<?php
		foreach ( $items as $index => $item ) :
			?>
			<div class="chargewp-bottom-horizontal-timeline-item" data-item-id="<?php echo esc_attr( $item['id'] ); ?>">
				<div class="chargewp-bottom-horizontal-timeline-step">
					<?php
					if ( isset( $item['add_icon'] ) && 'true' === $item['add_icon'] ) {
						vc_icon_element_fonts_enqueue( $item['i_type'] );
						$icon_class = $custom_icon_integration->get_element_icon_class( $item );
						$icon_color = $custom_icon_integration->get_element_icon_color( $item );
						$icon_size  = $custom_icon_integration->get_element_icon_size( $item );
						?>
						<i class="<?php echo esc_attr( $icon_class ); ?>" style="color: <?php echo esc_attr( $icon_color ); ?>; font-size: <?php echo esc_attr( $icon_size ); ?>; "></i>
						<?php
					} else {
						echo isset( $item['number'] ) ? esc_attr( $item['number'] ) : '';
					}
					?>
				</div>
				<div class="chargewp-bottom-horizontal-timeline-content">
					<?php
					if ( isset( $item['title'] ) ) {
						?>
						<div class="chargewp-bottom-horizontal-timeline-title">
							<?php echo esc_html( $item['title'] ); ?>
						</div>
						<?php
					}
					?>
					<div class="chargewp-bottom-horizontal-timeline-description">
						<?php
						if ( isset( $item['info'] ) ) {
							echo wp_kses_post( $item['info'] );
						}
						?>
					</div>
				</div>
			</div>
			<?php
		endforeach;
		?>
	</div>
</div>

<style>
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-bottom-horizontal-timeline-container::before {
		background-color: <?php echo esc_attr( $atts['base_line_color'] ); ?>;
		top: <?php echo esc_attr( $atts['base_line_height'] ); ?>px;
		height: <?php echo esc_attr( $atts['base_line_thickness'] ); ?>px;
	}

	<?php
	foreach ( $items as $index => $item ) :
		?>
		div[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"] .chargewp-bottom-horizontal-timeline-title {
			color: <?php echo esc_attr( $item['title_color'] ); ?>;
			font-size: <?php echo esc_attr( $item['title_font_size'] ); ?>px;
			font-weight: <?php echo esc_attr( $item['title_font_weight'] ); ?>;
		}
		div[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"] .chargewp-bottom-horizontal-timeline-description {
			color: <?php echo esc_attr( $item['info_color'] ); ?>;
			font-size: <?php echo esc_attr( $item['info_font_size'] ); ?>px;
		}
		div[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"] .chargewp-bottom-horizontal-timeline-step {
			background-color: <?php echo esc_attr( $item['circle_background_color'] ); ?>;
			color: <?php echo esc_attr( $item['number_color'] ); ?>;
			font-size: <?php echo esc_attr( $item['number_font_size'] ); ?>px;
			width: <?php echo esc_attr( $item['size'] ); ?>px;
			height: <?php echo esc_attr( $item['size'] ); ?>px;
			font-weight: <?php echo esc_attr( $item['number_font_weight'] ); ?>;
			border: <?php echo esc_attr( $item['border'] ); ?>px <?php echo esc_attr( $item['border_style'] ); ?> <?php echo esc_attr( $item['circle_color'] ); ?>;
			<?php
			if ( 'circle' === $item['type'] ) {
				echo 'border-radius: 50%;';
			}
			?>
		}
		<?php
	endforeach;
	?>
</style>
