<?php
/**
 * Configuration file for [wpb_plus_vertical_timeline] shortcode of 'Vertical Timeline' element.
 *
 * @since 1.0
 */

defined( 'ABSPATH' ) || exit;

return [
    'name'                    => __( 'Vertical Timeline', 'wpbakery-plus-timeline-element' ),
    'base'                    => 'wpbakery-plus-vertical-timeline',
    'class'                   => 'wpbakery-plus-vertical-timeline',
    'category'                => 'Plus Timeline',
    'description'             => __( 'Timeline element with vertical interface.', 'wpbakery-plus-timeline-element' ),
    'as_parent'               => [ 'only' => 'wpbakery-plus-vertical-timeline-item' ],
    'content_element'         => true,
    'show_settings_on_create' => true,
    'js_view'                 => 'VcColumnView',
    'params' => array_merge(
        [vc_map_add_css_animation()],
        wpbplustimeline_config( 'shortcode-container-config' )
    ),
];
