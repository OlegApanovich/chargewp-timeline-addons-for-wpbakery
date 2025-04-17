<?php
/**
 * The template for displaying [chargewp-tailwind-vertical-classic-timeline-item] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\ChargeWpbShortcode $_this
 */

defined( 'ABSPATH' ) || exit;
?>
<div <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'chargewp-tailwind-vertical-classic-timeline-item-container chargewp-relative chargewp-flex chargewp-flex-col sm:chargewp-flex-row chargewp-items-center sm:chargewp-items-center chargewp-justify-between chargewp-group' ] ); ?>>
	<?php
	if ( 'right' === $atts['rotation'] ) {
		?>
			<div class="chargewp-w-full sm:chargewp-w-[48%] chargewp-pr-0 sm:chargewp-pr-[4%] md:chargewp-pr-[6%] chargewp-order-2 sm:chargewp-order-1">
				<?php
				chargewpwpbtimeline_include_template(
					'shortcodes/partials/tailwind-vertical-classic-timeline-item/image.php',
					[
						'atts'    => $atts,
						'content' => $content,
						'_this'   => $_this,
					]
				);
				?>
			</div>
			<?php
			chargewpwpbtimeline_include_template(
				'shortcodes/partials/tailwind-vertical-classic-timeline-item/marker.php',
				[
					'atts'    => $atts,
					'content' => $content,
					'_this'   => $_this,
				]
			);
			chargewpwpbtimeline_include_template(
				'shortcodes/partials/tailwind-vertical-classic-timeline-item/content.php',
				[
					'atts'            => $atts,
					'content'         => $content,
					'_this'           => $_this,
					'default_classes' => 'chargewp-w-full sm:chargewp-w-[48%] chargewp-pl-0 sm:chargewp-pl-[4%] md:chargewp-pl-[6%] chargewp-order-1 sm:chargewp-order-2 chargewp-text-center sm:chargewp-text-left chargewp-mb-4 sm:chargewp-mb-0',
				]
			);
	} else {
		?>
			<?php
			chargewpwpbtimeline_include_template(
				'shortcodes/partials/tailwind-vertical-classic-timeline-item/content.php',
				[
					'atts'            => $atts,
					'content'         => $content,
					'_this'           => $_this,
					'default_classes' => 'chargewp-w-full sm:chargewp-w-[48%] chargewp-pr-0 sm:chargewp-pr-[4%] md:chargewp-pr-[6%] chargewp-text-center sm:chargewp-text-right chargewp-mb-4 sm:chargewp-mb-0',
				]
			);
			chargewpwpbtimeline_include_template(
				'shortcodes/partials/tailwind-vertical-classic-timeline-item/marker.php',
				[
					'atts'    => $atts,
					'content' => $content,
					'_this'   => $_this,
				]
			);
			?>
			<div class="chargewp-w-full sm:chargewp-w-[48%] chargewp-pl-0 sm:chargewp-pl-[4%] md:chargewp-pl-[6%]">
				<?php
				chargewpwpbtimeline_include_template(
					'shortcodes/partials/tailwind-vertical-classic-timeline-item/image.php',
					[
						'atts'    => $atts,
						'content' => $content,
						'_this'   => $_this,
					]
				);
				?>
			</div>
		<?php
	}
	?>
</div>
