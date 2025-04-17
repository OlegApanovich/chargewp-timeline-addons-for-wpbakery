<?php
/**
 * The template for displaying image part of [chargewp-tailwind-vertical-classic-timeline-item] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\ChargeWpbShortcode $_this
 */

$img_src = '';
$img_alt = '';
if ( 'media_library' === $atts['image_source'] ) {
	if ( $atts['image'] ) {
		$img_src = wp_get_attachment_image_url( $atts['image'], 'full' );
		$img_alt = get_post_meta( $atts['image'], '_wp_attachment_image_alt', true );
	}
} elseif ( $atts['image_custom_src'] ) {
		$img_src = $atts['image_custom_src'];
		$img_alt = __( 'Timeline Image', 'chargewp-timeline-addons-for-wpbakery' );
}
if ( $img_src ) {
	?>
	<img
		src="<?php echo esc_url( $img_src ); ?>"
		alt="Digital Media"
		class="chargewp-transform
		    chargewp-w-full
			chargewp-aspect-video
			chargewp-object-<?php echo esc_attr( $atts['image_fit'] ); ?>
			chargewp-rounded-<?php echo esc_attr( $atts['image_rounded'] ); ?>
			chargewp-shadow-<?php echo esc_attr( $atts['image_shadow'] ); ?>
			<?php echo esc_attr( $atts['image_negative_rotation_degree'] ) ? '-' : ''; ?>chargewp-rotate-<?php echo esc_attr( $atts['image_rotation_degree'] ); ?>
			chargewp-border-<?php echo esc_attr( $atts['image_border_type'] ); ?>
			chargewp-border-[<?php echo esc_attr( $atts['image_border_color'] ); ?>]
			chargewp-border-<?php echo esc_attr( $atts['image_border_style'] ); ?>
			chargewp-group-hover:border-[<?php echo esc_attr( $atts['image_border_hover_color'] ); ?>]"
	>
	<?php
}
