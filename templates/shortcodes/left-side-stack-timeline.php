<?php
/**
 * The template for displaying [chargewp-left-side-stack-timeline] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\ChargeWpbShortcode $_this
 */

defined( 'ABSPATH' ) || exit;
?>
<div <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'chargewp-left-side-stack-timeline-container' ] ); ?>>
	<div class="chargewp-left-side-stack-timeline-timeline">
		<?php echo do_shortcode( $content ); ?>
	</div>
</div>

<style>
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-left-side-stack-timeline-timeline:before {
		background: <?php echo esc_attr( $atts['baseline_background'] ); ?>;
	}
</style>
