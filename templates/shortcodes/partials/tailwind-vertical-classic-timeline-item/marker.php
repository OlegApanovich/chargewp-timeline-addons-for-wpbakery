<?php
/**
 * The template for displaying marker part of [chargewp-tailwind-vertical-classic-timeline-item] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\ChargeWpbShortcode $_this
 */

use ChargewpWpbTimeline\CustomIconIntegration;
$custom_icon_integration = new CustomIconIntegration();

if ( 'no' !== $atts['marker_type'] ) {
	?>
	<div class="
				chargewp-absolute
				chargewp-left-1/2
				chargewp-transform
				-chargewp-translate-x-1/2
				-chargewp-translate-y-1/2
				chargewp-w-[3%]
				chargewp-h-[3%]
				chargewp-min-w-[<?php echo esc_attr( $atts['marker_height'] ); ?>px]
				chargewp-min-h-[<?php echo esc_attr( $atts['marker_width'] ); ?>px]
				chargewp-bg-[<?php echo esc_attr( $atts['marker_background_color'] ); ?>]
				group-hover:chargewp-bg-[<?php echo esc_attr( $atts['marker_background_hover_color'] ); ?>]
				chargewp-border-<?php echo esc_attr( $atts['marker_border_type'] ); ?>
				chargewp-border-[<?php echo esc_attr( $atts['marker_border_color'] ); ?>]
				chargewp-border-<?php echo esc_attr( $atts['marker_border_style'] ); ?>
				group-hover:chargewp-border-[<?php echo esc_attr( $atts['marker_border_hover_color'] ); ?>]
				<?php echo esc_attr( $atts['marker_negative_rotation_degree'] ) ? '-' : ''; ?>chargewp-rotate-<?php echo esc_attr( $atts['marker_rotation_degree'] ); ?>
				chargewp-hidden
				sm:chargewp-flex
				chargewp-items-center
				chargewp-justify-center
				<?php
				switch ( $atts['marker_type'] ) {
					case 'circle':
						?>
						chargewp-rounded-full
						<?php
						break;
					default:
						break;
				}
				?>
				">
		<?php
		if ( 'true' === $atts['add_icon'] ) {
			$custom_icon_integration->output_icon_integration( $_this, $atts, 'i_' );
			?>
			<?php
		}
		?>

	</div>
	<?php
}
