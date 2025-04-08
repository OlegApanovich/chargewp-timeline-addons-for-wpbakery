<?php
/**
 * The template for displaying marker part of [chargewp-tailwind-vertical-classic-timeline-item] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\ChargeWpbShortcode $_this
 */

use ChargewpWpbTimeline\CustomIconIntegration;
$custom_icon_integration = new CustomIconIntegration();

if ( 'no' !== $atts['marker_type'] ) {
    ?>
    <div class="
                absolute
                left-1/2
                transform
                -translate-x-1/2
                -translate-y-1/2
                w-[3%]
                h-[3%]
                min-w-[<?php echo esc_attr( $atts['marker_height'] ); ?>px]
                min-h-[<?php echo esc_attr( $atts['marker_width'] ); ?>px]
                bg-[<?php echo esc_attr( $atts['marker_background_color'] ); ?>]
                group-hover:bg-[<?php echo esc_attr( $atts['marker_background_hover_color'] ); ?>]
                border-<?php echo esc_attr( $atts['marker_border_type'] ); ?>
                border-[<?php echo esc_attr( $atts['marker_border_color'] ); ?>]
                border-<?php echo esc_attr( $atts['marker_border_style'] ); ?>
                group-hover:border-[<?php echo esc_attr( $atts['marker_border_hover_color'] ); ?>]
                <?php echo esc_attr($atts['marker_negative_rotation_degree']) ? '-' : '' ?>rotate-<?php echo esc_attr( $atts['marker_rotation_degree'] ); ?>
                hidden
                sm:flex
                items-center
                justify-center
                <?php
    switch ($atts['marker_type']) {
        case 'circle':
            ?>
                        rounded-full
                        <?php
            break;
        default:
            break;
    }
    ?>
                ">
        <?php
        if ( 'true' === $atts['add_icon'] ) {
            $custom_icon_integration->output_icon_integration( $_this, $atts, 'i_');
            ?>
            <?php
        }
        ?>

    </div>
    <?php
}
