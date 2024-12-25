<?php
/**
 * Configuration file for [wpb_plus_vertical_timeline-item] shortcode of 'Vertical Timeline' element.
 *
 * @since 1.0
 */

defined( 'ABSPATH' ) || exit;

return [
    'name'                    => __( 'Vertical Timeline Item', 'wpbakery-plus-timeline-element' ),
    'base'                    => 'wpbakery-plus-vertical-timeline-item',
    'class'                   => 'wpbakery-plus-vertical-timeline-item',
    'description'             => __( 'Timeline item for vertical timeline element.', 'wpbakery-plus-timeline-element' ),
    'as_child'                => [ 'only' => 'wpbakery-plus-vertical-timeline' ],
    'content_element'         => true,
    'show_settings_on_create' => true,
    'js_view'                 => 'VcColumnView',
    'params' => array_merge(
        [vc_map_add_css_animation()],
        wpbplustimeline_config( 'shortcode-container-config' )
    ),
];
