<?php
/**
 * The template for displaying marker part of [chargewp-tailwind-vertical-classic-timeline-item] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcode $_this
 */

use ChargewpWpbTimeline\ElementIntegration\IconIntegration;
$custom_icon_integration = new IconIntegration();

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
				chargewp-min-w-[<?php echo esc_attr( $atts['marker_width'] ); ?>px]
				chargewp-min-h-[<?php echo esc_attr( $atts['marker_height'] ); ?>px]
				chargewp-bg-[<?php echo esc_attr( $atts['marker_background_color'] ); ?>]
				group-hover:chargewp-bg-[<?php echo esc_attr( $atts['marker_background_hover_color'] ); ?>]
				chargewp-border-<?php echo esc_attr( $atts['marker_border_width'] ); ?>
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
?>

<style>
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-bg-\[\<?php echo esc_attr( $atts['marker_background_color'] ); ?>\] {
        background-color: <?php echo esc_attr( $atts['marker_background_color'] ); ?>;
    }
    .chargewp-tailwind-container .chargewp-group:hover .group-hover\:chargewp-bg-\[\<?php echo esc_attr( $atts['marker_background_hover_color'] ); ?>\] {
        background-color: <?php echo esc_attr( $atts['marker_background_hover_color'] ); ?>;
    }

    <?php $_this->output_style_shortcode_id(); ?> .chargewp-min-h-\[<?php echo esc_attr( $atts['marker_height'] ); ?>px\] {
        min-height: <?php echo esc_attr( $atts['marker_height'] ); ?>px;
    }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-min-w-\[<?php echo esc_attr( $atts['marker_width'] ); ?>px\] {
        min-width: <?php echo esc_attr( $atts['marker_width'] ); ?>px;
    }

    <?php $_this->output_style_shortcode_id(); ?> .chargewp-border-<?php echo esc_attr( (int) $atts['marker_border_width'] ); ?> {
        border-width: <?php echo esc_attr( (int) $atts['marker_border_width'] ); ?>px;
    }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-border-\[\<?php echo esc_attr( $atts['marker_border_color'] ); ?>\] {
        border-color: <?php echo esc_attr( $atts['marker_border_color'] ); ?>
    }
    .chargewp-group:hover .group-hover\:chargewp-border-\[\<?php echo esc_attr( $atts['marker_border_hover_color'] ); ?>\] {
        border-color: <?php echo esc_attr( $atts['marker_border_hover_color'] ); ?>
    }
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-border-<?php echo esc_attr( $atts['marker_border_style'] ); ?> {
        border-style: <?php echo esc_attr( $atts['marker_border_style'] ); ?>
    }

    <?php $_this->output_style_shortcode_id(); ?> .<?php echo esc_attr( $atts['marker_negative_rotation_degree'] ) ? '-' : ''; ?>chargewp-rotate-0 {
        --tw-rotate: <?php echo esc_attr( $atts['marker_negative_rotation_degree'] ) ? '-' : ''; ?>0deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
    <?php $_this->output_style_shortcode_id(); ?> .<?php echo esc_attr( $atts['marker_negative_rotation_degree'] ) ? '-' : ''; ?>chargewp-rotate-1 {
        --tw-rotate: <?php echo esc_attr( $atts['marker_negative_rotation_degree'] ) ? '-' : ''; ?>1deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
    <?php $_this->output_style_shortcode_id(); ?> .<?php echo esc_attr( $atts['marker_negative_rotation_degree'] ) ? '-' : ''; ?>chargewp-rotate-2 {
        --tw-rotate: <?php echo esc_attr( $atts['marker_negative_rotation_degree'] ) ? '-' : ''; ?>2deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
    <?php $_this->output_style_shortcode_id(); ?> .<?php echo esc_attr( $atts['marker_negative_rotation_degree'] ) ? '-' : ''; ?>chargewp-rotate-3 {
        --tw-rotate: <?php echo esc_attr( $atts['marker_negative_rotation_degree'] ) ? '-' : ''; ?>3deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
    <?php $_this->output_style_shortcode_id(); ?> .<?php echo esc_attr( $atts['marker_negative_rotation_degree'] ) ? '-' : ''; ?>chargewp-rotate-6 {
        --tw-rotate: <?php echo esc_attr( $atts['marker_negative_rotation_degree'] ) ? '-' : ''; ?>6deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
    <?php $_this->output_style_shortcode_id(); ?> .<?php echo esc_attr( $atts['marker_negative_rotation_degree'] ) ? '-' : ''; ?>chargewp-rotate-12 {
        --tw-rotate: <?php echo esc_attr( $atts['marker_negative_rotation_degree'] ) ? '-' : ''; ?>12deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
    <?php $_this->output_style_shortcode_id(); ?> .<?php echo esc_attr( $atts['marker_negative_rotation_degree'] ) ? '-' : ''; ?>chargewp-rotate-45 {
        --tw-rotate: <?php echo esc_attr( $atts['marker_negative_rotation_degree'] ) ? '-' : ''; ?>45deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
    <?php $_this->output_style_shortcode_id(); ?> .<?php echo esc_attr( $atts['marker_negative_rotation_degree'] ) ? '-' : ''; ?>chargewp-rotate-90 {
        --tw-rotate: <?php echo esc_attr( $atts['marker_negative_rotation_degree'] ) ? '-' : ''; ?>90deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
    <?php $_this->output_style_shortcode_id(); ?> .<?php echo esc_attr( $atts['marker_negative_rotation_degree'] ) ? '-' : ''; ?>chargewp-rotate-180 {
        --tw-rotate: <?php echo esc_attr( $atts['marker_negative_rotation_degree'] ) ? '-' : ''; ?>180deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }
</style>
