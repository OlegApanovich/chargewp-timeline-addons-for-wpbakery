<?php
/**
 * The template for displaying [chargewp-vertical-timeline] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\ChargeWpbShortcode $_this
 */

defined( 'ABSPATH' ) || exit;
?>
<div <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'chargewp-horizontal-section-timeline-content' ] ); ?>>
	<ul class="chargewp-horizontal-section-timeline-list">
		<?php echo do_shortcode( $content ); ?>
	</ul>
</div>

<style>
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-horizontal-section-timeline-list {
		border-left: 4px solid <?php echo esc_attr( $atts['baseline_background'] ); ?>;
		background: <?php echo esc_attr( $atts['content_background_color'] ); ?>;
	}
	.chargewp-horizontal-section-timeline-content<?php $_this->output_style_shortcode_id(); ?> {
		background: <?php echo esc_attr( $atts['background_color'] ); ?>;
	}
</style>
