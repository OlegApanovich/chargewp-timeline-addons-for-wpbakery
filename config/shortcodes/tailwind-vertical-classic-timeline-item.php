<?php
/**
 * Configuration file for [chargewp-tailwind-vertical-classic-timeline-item] shortcode of 'Tailwind Vertical Classic Timeline' element.
 *
 * @since 1.1
 */

use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeEmpty;

defined( 'ABSPATH' ) || exit;

$params = [
    [
        'type'        => 'chargewp-notice',
        'level'       => 'warning',
        'notice'      => '<b>The Tailwind environment may apply additional CSS styles to the entire current page, not just the current element. Please check the page output after using Tailwind elements.</b>',
        'param_name'  => 'tailwind_notice',
    ],
    [
        'type'        => 'dropdown',
        'value'       => [
            esc_html__( 'Left', 'chargewp-timeline-addons-for-wpbakery' ) => 'left',
            esc_html__( 'Right', 'chargewp-timeline-addons-for-wpbakery' ) => 'right',
        ],
        'heading'     => esc_html__( 'Rotation', 'chargewp-timeline-addons-for-wpbakery' ),
        'param_name'  => 'rotation',
        'description' => esc_html__( 'Choose right or left item rotation for timeline item.', 'chargewp-timeline-addons-for-wpbakery' ),
    ],
    [
        'type'        => 'dropdown',
        'value'       => [
            esc_html__( 'Circle', 'chargewp-timeline-addons-for-wpbakery' ) => 'circle',
            esc_html__( 'Square', 'chargewp-timeline-addons-for-wpbakery' ) => 'square',
            esc_html__( 'No', 'chargewp-timeline-addons-for-wpbakery' ) => 'no',
        ],
        'heading'     => esc_html__( 'Marker Type', 'chargewp-timeline-addons-for-wpbakery' ),
        'param_name'  => 'marker_type',
        'description' => esc_html__( 'Choose marker type.', 'chargewp-timeline-addons-for-wpbakery' ),
        'group'       => 'Marker',
    ],
    [
        'type'        => 'colorpicker',
        'value'       => '#ffffff',
        'heading'     => esc_html__( 'Marker background color', 'chargewp-timeline-addons-for-wpbakery' ),
        'param_name'  => 'marker_background_color',
        'description' => esc_html__( 'Select custom color for marker background.', 'chargewp-timeline-addons-for-wpbakery' ),
        'dependency'  => [ 'element' => 'marker_type', 'value' => [ 'circle', 'square' ] ],
        'group'       => 'Marker',
    ],
    [
        'type'        => 'chargewp-number',
        'value'       => '1',
        'min'         => '0',
        'max'         => '10',
        'step'        => '1',
        'heading'     => esc_html__( 'Marker Border', 'chargewp-timeline-addons-for-wpbakery' ),
        'param_name'  => 'marker_border_width',
        'description' => esc_html__( 'Set custom width from 0 to 10 for marker border.', 'chargewp-timeline-addons-for-wpbakery' ),
        'group'       => 'Marker',
        'dependency'  => [ 'element' => 'marker_type', 'value' => [ 'circle', 'square' ] ],
    ],
];

return [
	'name'                    => __( 'Tailwind Vertical Classic Timeline', 'chargewp-timeline-addons-for-wpbakery' ),
	'base'                    => 'chargewp-tailwind-vertical-classic-timeline-item',
	'class'                   => 'chargewp-tailwind-vertical-classic-timeline-item',
	'description'             => __( 'Timeline item for "Tailwind Vertical Classic Timeline" element.', 'chargewp-timeline-addons-for-wpbakery' ),
	'php_class_name'          => ChargeWpbShortcodeEmpty::class,
	'as_child'                => [ 'only' => 'chargewp-tailwind-vertical-classic-timeline' ],
	'content_element'         => true,
	'show_settings_on_create' => true,
	'params'                  => array_merge(
		$params,
		[ vc_map_add_css_animation() ],
		chargewpwpbtimeline_config( 'shortcode-container-config' )
	),
];
