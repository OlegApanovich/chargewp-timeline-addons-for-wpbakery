<?php
/**
 * The template for displaying [chargewp-vertical-timeline] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcode $_this
 */

defined( 'ABSPATH' ) || exit;
?>

<div>
	<div <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'chargewp-tailwind-vertical-classic-timeline-container chargewp-tailwind-container' ] ); ?>>
		<div class="chargewp-relative chargewp-w-full chargewp-p-6 chargewp-md:p-8">
			<div class="chargewp-w-full chargewp-max-w-[100%] chargewp-mx-auto chargewp-container">
				<div class="chargewp-relative chargewp-w-full chargewp-px-[2%] sm:chargewp-px-[4%] md:chargewp-px-[6%]">
					<div class="chargewp-absolute chargewp-left-1/2 chargewp-transform -chargewp-translate-x-1/2 chargewp-h-full chargewp-w-<?php echo (float) $atts['baseline_width']; ?> chargewp-bg-[<?php echo esc_attr( $atts['baseline_background'] ); ?>] chargewp-hidden sm:chargewp-block"></div>
					<div class="chargewp-space-y-[4%] sm:chargewp-space-y-[6%] md:chargewp-space-y-[8%]">
						<?php echo do_shortcode( $content ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<style>
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-w-0\.5 { width: 0.125rem }
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-w-1 { width: 0.25rem; }
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-w-1\.5 { width: 0.375rem }
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-w-2 { width: 0.5rem }
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-w-2\.5 { width: 0.625rem }
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-w-3 { width: 0.75rem }
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-w-3\.5 { width: 0.875rem }
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-w-4 { width: 1rem }
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-w-4\.5 { width: 1.12rem }
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-w-5 { width: 1.25rem }
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-w-5\.5 { width: 1.375rem }
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-w-6 { width: 1.5rem }
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-w-6\.5 { width: 1.625rem }
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-w-7 { width: 1.75rem }
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-w-7\.5 { width: 1.875rem }
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-w-8 { width: 2rem }
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-w-8\.5 { width: 2.125rem }
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-w-9 { width: 2.25rem }
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-w-9\.5 { width: 2.375rem }
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-w-10 { width: 2.5rem }

	<?php $_this->output_style_shortcode_id(); ?> .chargewp-bg-\[\<?php echo esc_attr( $atts['baseline_background'] ); ?>\] {
		background-color: <?php echo esc_attr( $atts['baseline_background'] ); ?>
	}
</style>
