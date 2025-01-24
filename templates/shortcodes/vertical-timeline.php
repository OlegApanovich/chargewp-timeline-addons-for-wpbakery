<?php
/**
 * The template for displaying [wpbakery-plus-vertical-timeline] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\ChargeWpbShortcode $_this
 */

defined( 'ABSPATH' ) || exit;
?>
<div <?php $_this->output_shortcode_wrapper_attributes(); ?>>
	<ul class="wpplus-timeline">
		<?php echo do_shortcode( $content ); ?>
	</ul>
</div>
