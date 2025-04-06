<?php
/**
 * Configuration file for [chargewp-tailwind-vertical-classic-timeline-item] shortcode of 'Tailwind Vertical Classic Timeline' element.
 *
 * @since 1.1
 */

use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeEmpty;
use ChargewpWpbTimeline\CustomHeadingIntegration;
use ChargewpWpbTimeline\CustomIconIntegration;

defined( 'ABSPATH' ) || exit;

$custom_heading_integration = new CustomHeadingIntegration();
$custom_icon_integration    = new CustomIconIntegration();

$params = array_merge(
    [
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
            'type'        => 'colorpicker',
            'value'       => '#EEEE22',
            'heading'     => esc_html__( 'Marker background hover color', 'chargewp-timeline-addons-for-wpbakery' ),
            'param_name'  => 'marker_background_hover_color',
            'description' => esc_html__( 'Select custom color for marker background hover.', 'chargewp-timeline-addons-for-wpbakery' ),
            'dependency'  => [ 'element' => 'marker_type', 'value' => [ 'circle', 'square' ] ],
            'group'       => 'Marker',
        ],
        [
            'type'        => 'dropdown',
            'value'       => [
                esc_html__( 'Slim', 'chargewp-timeline-addons-for-wpbakery' ) => '2',
                esc_html__( 'Middle', 'chargewp-timeline-addons-for-wpbakery' ) => '4',
                esc_html__( 'Bold', 'chargewp-timeline-addons-for-wpbakery' ) => '8',
            ],
            'heading'     => esc_html__( 'Marker Border Type', 'chargewp-timeline-addons-for-wpbakery' ),
            'param_name'  => 'marker_border_type',
            'description' => esc_html__( 'Choose marker border type.', 'chargewp-timeline-addons-for-wpbakery' ),
            'dependency'  => [ 'element' => 'marker_type', 'value' => [ 'circle', 'square' ] ],
            'group'       => 'Marker',
        ],
        [
            'type'        => 'colorpicker',
            'value'       => '#cccccc',
            'heading'     => esc_html__( 'Marker border color', 'chargewp-timeline-addons-for-wpbakery' ),
            'param_name'  => 'marker_border_color',
            'description' => esc_html__( 'Select custom color for marker border.', 'chargewp-timeline-addons-for-wpbakery' ),
            'dependency'  => [ 'element' => 'marker_type', 'value' => [ 'circle', 'square' ] ],
            'group'       => 'Marker',
        ],
        [
            'type'        => 'colorpicker',
            'value'       => '#EEEE2278',
            'heading'     => esc_html__( 'Marker border hover color', 'chargewp-timeline-addons-for-wpbakery' ),
            'param_name'  => 'marker_border_hover_color',
            'description' => esc_html__( 'Select custom color for marker border hover.', 'chargewp-timeline-addons-for-wpbakery' ),
            'dependency'  => [ 'element' => 'marker_type', 'value' => [ 'circle', 'square' ] ],
            'group'       => 'Marker',
        ],
        [
            'type'        => 'chargewp-number',
            'value'       => '44',
            'min'         => '15',
            'max'         => '100',
            'step'        => '1',
            'heading'     => esc_html__( 'Marker Width', 'chargewp-timeline-addons-for-wpbakery' ),
            'param_name'  => 'marker_width',
            'description' => esc_html__( 'Set custom width in px from 15 to 100 for marker.', 'chargewp-timeline-addons-for-wpbakery' ),
            'group'       => 'Marker',
            'dependency'  => [ 'element' => 'marker_type', 'value' => [ 'circle', 'square' ] ],
            'title'       => esc_html__( 'px', 'chargewp-timeline-addons-for-wpbakery' ),
        ],
        [
            'type'        => 'chargewp-number',
            'value'       => '44',
            'min'         => '15',
            'max'         => '100',
            'step'        => '1',
            'heading'     => esc_html__( 'Marker Height', 'chargewp-timeline-addons-for-wpbakery' ),
            'param_name'  => 'marker_height',
            'description' => esc_html__( 'Set custom height in px from 15 to 100 for marker.', 'chargewp-timeline-addons-for-wpbakery' ),
            'group'       => 'Marker',
            'dependency'  => [ 'element' => 'marker_type', 'value' => [ 'circle', 'square' ] ],
            'title'       => esc_html__( 'px', 'chargewp-timeline-addons-for-wpbakery' ),
        ],
        [
            'type'        => 'dropdown',
            'value'       => [
                esc_html__( 'Solid', 'chargewp-timeline-addons-for-wpbakery' ) => 'solid',
                esc_html__( 'Dotted', 'chargewp-timeline-addons-for-wpbakery' ) => 'dotted',
                esc_html__( 'Dashed', 'chargewp-timeline-addons-for-wpbakery' ) => 'dashed',
            ],
            'heading'     => esc_html__( 'Marker Border Style', 'chargewp-timeline-addons-for-wpbakery' ),
            'param_name'  => 'marker_border_style',
            'description' => esc_html__( 'Choose marker border style.', 'chargewp-timeline-addons-for-wpbakery' ),
            'dependency'  => [ 'element' => 'marker_type', 'value' => [ 'circle', 'square' ] ],
            'group'       => 'Marker',
        ],
        [
            'type'        => 'dropdown',
            'value'       => [
                0 => '0',
                15=> '15',
                30 => '30',
                45 => '45',
                90 => '90',
                180 => '180',
                270 => '270',
            ],
            'heading'     => esc_html__( 'Marker Rotation Degree', 'chargewp-timeline-addons-for-wpbakery' ),
            'param_name'  => 'marker_rotation_degree',
            'description' => esc_html__( 'Choose rotation degree.', 'chargewp-timeline-addons-for-wpbakery' ),
            'dependency'  => [ 'element' => 'marker_type', 'value' => [ 'circle', 'square' ] ],
            'group'       => 'Marker',
        ],
    ],
    $custom_icon_integration->add_icon_checkbox( [ 'background_style', 'align', 'link', 'background_color', 'custom_background_color' ] )
);

return [
	'name'                    => __( 'Tailwind Vertical Classic Timeline Item', 'chargewp-timeline-addons-for-wpbakery' ),
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
