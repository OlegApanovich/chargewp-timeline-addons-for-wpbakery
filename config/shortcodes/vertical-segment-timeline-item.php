<?php
/**
 * Configuration file for [wpb-plus-vertical-segment-timeline-item] shortcode of 'Vertical Segment Timeline' element.
 *
 * @since 1.0
 */

use WpbPlusTimeline\CustomHeadingIntegration;

defined( 'ABSPATH' ) || exit;

$custom_heading_integration = new CustomHeadingIntegration();

$params = array_merge(
	[
		[
			'type'        => 'colorpicker',
			'value'       => '#004ffc',
			'heading'     => esc_html__( 'Marker circle color', 'chargewp-wpbakery-timeline-addons' ),
			'param_name'  => 'marker_color',
			'description' => esc_html__( 'Select custom color for timeline item circle of marker.', 'chargewp-wpbakery-timeline-addons' ),
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#2c2f2e',
			'heading'     => esc_html__( 'Marker inside circle color', 'chargewp-wpbakery-timeline-addons' ),
			'param_name'  => 'marker_inner_color',
			'description' => esc_html__( 'Select custom color for marker inside circle.', 'chargewp-wpbakery-timeline-addons' ),
		],
		[
			'type'             => 'textfield',
			'value'            => 'Dinosaurs Roamed the Earth.',
			'heading'          => esc_html__( 'Title', 'chargewp-wpbakery-timeline-addons' ),
			'admin_label'      => true,
			'param_name'       => 'title',
			'description'      => esc_html__( 'Dinosaurs Roamed the Earth.', 'chargewp-wpbakery-timeline-addons' ),
			'edit_field_class' => 'vc_col-sm-9',
		],
		[
			'type'             => 'checkbox',
			'heading'          => esc_html__( 'Use custom font?', 'chargewp-wpbakery-timeline-addons' ),
			'param_name'       => 'use_custom_fonts_title',
			'description'      => esc_html__( 'Enable custom font option.', 'chargewp-wpbakery-timeline-addons' ),
			'edit_field_class' => 'vc_col-sm-3',
		],
	],
	$custom_heading_integration->add_custom_font_to_field( 'title', 'Title', [ 'exclude' => [ 'source', 'text', 'css' ] ], [ 'tag', 'text_align' ] ),
	[
		[
			'type'             => 'textfield',
			'value'            => '65Million B.C.',
			'heading'          => esc_html__( 'Date', 'chargewp-wpbakery-timeline-addons' ),
			'admin_label'      => true,
			'param_name'       => 'date',
			'description'      => esc_html__( 'Initially, it was designed as a date field, but you can use it as a regular text as well. ', 'chargewp-wpbakery-timeline-addons' ),
			'edit_field_class' => 'vc_col-sm-9',
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#E6E6E6',
			'heading'     => esc_html__( 'Date color.', 'chargewp-wpbakery-timeline-addons' ),
			'param_name'  => 'date_color',
			'description' => esc_html__( 'Select custom color for date.', 'chargewp-wpbakery-timeline-addons' ),
		],
		[
			'type'             => 'textfield',
			'value'            => '16px',
			'heading'          => esc_html__( 'Date font size.', 'chargewp-wpbakery-timeline-addons' ),
			'admin_label'      => true,
			'param_name'       => 'date_font_size',
			'description'      => esc_html__( 'Set custom size for date font.', 'chargewp-wpbakery-timeline-addons' ),
			'edit_field_class' => 'vc_col-sm-3',
		],
		[
			'type'       => 'textarea_html',
			'heading'    => esc_html__( 'Text', 'chargewp-wpbakery-timeline-addons' ),
			'param_name' => 'content',
			'value'      => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#080808',
			'heading'     => esc_html__( 'Delimiter Color', 'chargewp-wpbakery-timeline-addons' ),
			'param_name'  => 'delimiter_color',
			'description' => esc_html__( 'Select custom color for timeline section delimiter.', 'chargewp-wpbakery-timeline-addons' ),
		],
		[
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Delimiter Type', 'chargewp-wpbakery-timeline-addons' ),
			'value'       => [
				esc_html__( 'Dashed', 'chargewp-wpbakery-timeline-addons' ) => 'dashed',
				esc_html__( 'Solid', 'chargewp-wpbakery-timeline-addons' ) => 'solid',
				esc_html__( 'Dotted', 'chargewp-wpbakery-timeline-addons' ) => 'dotted',
				esc_html__( 'Double', 'chargewp-wpbakery-timeline-addons' ) => 'double',
				esc_html__( 'Hidden', 'chargewp-wpbakery-timeline-addons' ) => 'hidden',

			],
			'param_name'  => 'delimiter_type',
			'description' => esc_html__( 'Choose right or left item position for timeline item.', 'chargewp-wpbakery-timeline-addons' ),
		],
		[
			'type'             => 'textfield',
			'value'            => '1px',
			'heading'          => esc_html__( 'Delimiter Size', 'chargewp-wpbakery-timeline-addons' ),
			'admin_label'      => true,
			'param_name'       => 'delimiter_size',
			'description'      => esc_html__( 'Set custom size for timeline section delimiter.', 'chargewp-wpbakery-timeline-addons' ),
			'edit_field_class' => 'vc_col-sm-3',
		],
	]
);

return [
	'name'                    => __( 'Vertical Segment Timeline Item', 'chargewp-wpbakery-timeline-addons' ),
	'base'                    => 'wpbakery-plus-vertical-segment-timeline-item',
	'class'                   => 'wpbakery-plus-vertical-segment-timeline-item',
	'description'             => __( 'Timeline item for vertical segment timeline element.', 'chargewp-wpbakery-timeline-addons' ),
	'as_child'                => [ 'only' => 'wpbakery-plus-vertical-segment-timeline' ],
	'content_element'         => true,
	'show_settings_on_create' => true,
	'js_view'                 => 'VcColumnView',
	'params'                  => array_merge(
		$params,
		[ vc_map_add_css_animation() ],
		wpbplustimeline_config( 'shortcode-container-config' )
	),
];
