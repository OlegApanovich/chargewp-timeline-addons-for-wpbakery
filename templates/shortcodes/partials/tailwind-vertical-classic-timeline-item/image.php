<?php
/**
 * The template for displaying image part of [chargewp-tailwind-vertical-classic-timeline-item] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcode $_this
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
		alt="<?php echo esc_attr( $img_alt )?>"
		class="chargewp-transform
		    chargewp-w-full
			chargewp-aspect-video
			chargewp-object-<?php echo esc_attr( $atts['image_fit'] ); ?>
			chargewp-rounded-<?php echo esc_attr( $atts['image_rounded'] ); ?>
			chargewp-shadow-<?php echo esc_attr( $atts['image_shadow'] ); ?>
			<?php echo esc_attr( $atts['image_negative_rotation_degree'] ) ? '-' : ''; ?>chargewp-rotate-<?php echo esc_attr( $atts['image_rotation_degree'] ); ?>
			chargewp-border-<?php echo esc_attr( (int) $atts['image_border_width'] ); ?>
			chargewp-border-[<?php echo esc_attr( $atts['image_border_color'] ); ?>]
			chargewp-border-<?php echo esc_attr( $atts['image_border_style'] ); ?>
			group-hover:chargewp-border-[<?php echo esc_attr( $atts['image_border_hover_color'] ); ?>]"
	>
	<?php
}
?>

<style>
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-object-<?php echo esc_attr( $atts['image_fit'] ); ?> {
        object-fit: <?php echo esc_attr( $atts['image_fit'] ); ?>;
    }

    <?php $_this->output_style_shortcode_id(); ?> .chargewp-border-<?php echo esc_attr( (int) $atts['image_border_width'] ); ?> {
        border-width: <?php echo esc_attr( (int) $atts['image_border_width'] ); ?>px;
    }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-border-\[\<?php echo esc_attr( $atts['image_border_color'] ); ?>\] {
        border-color: <?php echo esc_attr( $atts['image_border_color'] ); ?>
    }
    .chargewp-group:hover .group-hover\:chargewp-border-\[\<?php echo esc_attr( $atts['image_border_hover_color'] ); ?>\] {
        border-color: <?php echo esc_attr( $atts['image_border_hover_color'] ); ?>
    }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-border-<?php echo esc_attr( $atts['image_border_style'] ); ?> {
      border-style: <?php echo esc_attr( $atts['image_border_style'] ); ?>
    }
    <?php $_this->output_style_shortcode_id(); ?> group-hover:chargewp-border-[<?php echo esc_attr( $atts['image_border_hover_color'] ); ?>]" {
        border-style: <?php echo esc_attr( $atts['image_border_hover_color'] ); ?>
    }

    <?php $_this->output_style_shortcode_id(); ?> .chargewp-rounded-full {
        border-radius: 9999px;
    }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-rounded-3xl {
        border-radius: 1.5rem
    }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-rounded-2xl {
        border-radius: 1rem
    }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-rounded-xl {
        border-radius: 0.75rem
    }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-rounded-lg {
        border-radius: 0.5rem
    }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-rounded-md {
        border-radius: 0.375rem;
    }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-rounded-sm {
        border-radius: 0.125rem
    }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-rounded-none {
        border-radius: 0;
    }

    <?php $_this->output_style_shortcode_id(); ?> .chargewp-shadow-inner {
        --tw-shadow: inset 0 2px 4px 0 rgb(0 0 0 / 0.05);
        --tw-shadow-colored: inset 0 2px 4px 0 var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-shadow-2xl {
        --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
        --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-shadow-xl {
        --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-shadow-lg {
        --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-shadow-md {
        --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-shadow-sm {
        --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
        --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-shadow-none {
        --tw-shadow: 0 0 #0000;
        box-shadow: var(--tw-shadow);
    }

    <?php $_this->output_style_shortcode_id(); ?> .<?php echo esc_attr( $atts['image_negative_rotation_degree'] ) ? '-' : ''; ?>chargewp-rotate-0 {
        --tw-rotate: <?php echo esc_attr( $atts['image_negative_rotation_degree'] ) ? '-' : ''; ?>0deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
    <?php $_this->output_style_shortcode_id(); ?> .<?php echo esc_attr( $atts['image_negative_rotation_degree'] ) ? '-' : ''; ?>chargewp-rotate-1 {
        --tw-rotate: <?php echo esc_attr( $atts['image_negative_rotation_degree'] ) ? '-' : ''; ?>1deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
    <?php $_this->output_style_shortcode_id(); ?> .<?php echo esc_attr( $atts['image_negative_rotation_degree'] ) ? '-' : ''; ?>chargewp-rotate-2 {
        --tw-rotate: <?php echo esc_attr( $atts['image_negative_rotation_degree'] ) ? '-' : ''; ?>2deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
    <?php $_this->output_style_shortcode_id(); ?> .<?php echo esc_attr( $atts['image_negative_rotation_degree'] ) ? '-' : ''; ?>chargewp-rotate-3 {
        --tw-rotate: <?php echo esc_attr( $atts['image_negative_rotation_degree'] ) ? '-' : ''; ?>3deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
    <?php $_this->output_style_shortcode_id(); ?> .<?php echo esc_attr( $atts['image_negative_rotation_degree'] ) ? '-' : ''; ?>chargewp-rotate-6 {
        --tw-rotate: <?php echo esc_attr( $atts['image_negative_rotation_degree'] ) ? '-' : ''; ?>6deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
    <?php $_this->output_style_shortcode_id(); ?> .<?php echo esc_attr( $atts['image_negative_rotation_degree'] ) ? '-' : ''; ?>chargewp-rotate-12 {
        --tw-rotate: <?php echo esc_attr( $atts['image_negative_rotation_degree'] ) ? '-' : ''; ?>12deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
    <?php $_this->output_style_shortcode_id(); ?> .<?php echo esc_attr( $atts['image_negative_rotation_degree'] ) ? '-' : ''; ?>chargewp-rotate-45 {
        --tw-rotate: <?php echo esc_attr( $atts['image_negative_rotation_degree'] ) ? '-' : ''; ?>45deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
    <?php $_this->output_style_shortcode_id(); ?> .<?php echo esc_attr( $atts['image_negative_rotation_degree'] ) ? '-' : ''; ?>chargewp-rotate-90 {
        --tw-rotate: <?php echo esc_attr( $atts['image_negative_rotation_degree'] ) ? '-' : ''; ?>90deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
    <?php $_this->output_style_shortcode_id(); ?> .<?php echo esc_attr( $atts['image_negative_rotation_degree'] ) ? '-' : ''; ?>chargewp-rotate-180 {
        --tw-rotate: <?php echo esc_attr( $atts['image_negative_rotation_degree'] ) ? '-' : ''; ?>180deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
</style>
