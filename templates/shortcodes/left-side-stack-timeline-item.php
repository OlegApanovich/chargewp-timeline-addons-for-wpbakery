<?php
/**
 * The template for displaying [chargewp-left-side-stack-timeline-item] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\ChargeWpbShortcode $_this
 */

defined( 'ABSPATH' ) || exit;

use ChargewpWpbTimeline\CustomHeadingIntegration;
use ChargewpWpbTimeline\CustomIconIntegration;
$custom_heading_integration = new CustomHeadingIntegration();
$custom_icon_integration    = new CustomIconIntegration();
?>

<div <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'chargewp-left-side-stack-timeline-timeline-container' ] ); ?>>
    <div class="chargewp-left-side-stack-timeline-timeline-icon">
        <?php
        if ( 'true' === $atts['add_icon'] ) {
            vc_icon_element_fonts_enqueue( $atts['i_type'] );
            $icon_class = $custom_icon_integration->get_element_icon_class( $atts );
            $icon_color = $custom_icon_integration->get_element_icon_color( $atts );
            ?>
            <i class="<?php echo esc_attr( $icon_class ); ?>" style="color: <?php echo esc_attr( $icon_color ); ?>"></i>
            <?php
        }
        ?>
    </div>
    <div class="chargewp-left-side-stack-timeline-timeline-body">
        <h4 class="chargewp-left-side-stack-timeline-timeline-title">
            <span class="chargewp-left-side-stack-timeline-badge">
            <?php $custom_heading_integration->output_custom_font_attribute( 'title', $atts, $_this->element_slug, 'span' ); ?>
            </span>
        </h4>
        <?php echo wpb_js_remove_wpautop( $content, true ); // phpcs:ignore: WordPress.Security.EscapeOutput.OutputNotEscaped ?>
        <p class="chargewp-left-side-stack-timeline-timeline-subtitle">
            <?php $custom_heading_integration->output_custom_font_attribute( 'date', $atts, $_this->element_slug, 'span' ); ?>
        </p>
    </div>
</div>

<style>
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-left-side-stack-timeline-badge {
        background: <?php echo esc_attr( $atts['title_background_color'] ); ?>;
    }

    <?php $_this->output_style_shortcode_id(); ?> .chargewp-left-side-stack-timeline-timeline-icon {
        background: <?php echo esc_attr( $atts['circle_color'] ) ?> !important;
    }

    <?php $_this->output_style_shortcode_id(); ?> .chargewp-left-side-stack-timeline-timeline-body {
        background: <?php echo esc_attr( $atts['item_background_color'] ) ?>;
    }
</style>


