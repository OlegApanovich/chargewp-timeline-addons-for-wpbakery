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

<div>
	<div <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'chargewp-tailwind-vertical-classic-timeline-container relative w-full p-6 md:p-8' ] ); ?>>
		<div class="w-full max-w-[100%] mx-auto container">
			<div class="relative w-full px-[2%] sm:px-[4%] md:px-[6%]">
				<div class="absolute left-1/2 transform -translate-x-1/2 h-full w-<?php echo esc_attr( (int) $atts['baseline_width'] ); ?> bg-[<?php echo esc_attr( $atts['baseline_background'] ); ?>] hidden sm:block"></div>
				<div class="space-y-[4%] sm:space-y-[6%] md:space-y-[8%]">
					<?php echo do_shortcode( $content ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
