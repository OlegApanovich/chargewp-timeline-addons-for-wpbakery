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
<div <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'chargewp-vertical-segment-timeline-content' ] ); ?>>
	<ul class="chargewp-vertical-segment-timeline-list">
		<?php echo do_shortcode( $content ); ?>
	</ul>
</div>

<?php
$custom_tag = 'style';
?>

<<?php echo esc_attr( $custom_tag ); ?>>
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-vertical-segment-timeline-list {
		border-left: 4px solid <?php echo esc_attr( $atts['baseline_background'] ); ?>;
		background: <?php echo esc_attr( $atts['content_background_color'] ); ?>;
	}
	.chargewp-vertical-segment-timeline-content<?php $_this->output_style_shortcode_id(); ?> {
		background: <?php echo esc_attr( $atts['background_color'] ); ?>;
		overflow: hidden;
	}
</<?php echo esc_attr( $custom_tag ); ?>>
