<?php
/**
 * Configuration file for [chargewp-vertical-segment-timeline-item] shortcode of 'Vertical Segment Timeline' element.
 *
 * @since 1.0
 */

use ChargewpWpbTimeline\ElementIntegration\HeadingIntegration;
use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeEmpty;

defined( 'ABSPATH' ) || exit;

$custom_heading_integration = new HeadingIntegration();

$params = array_merge(
	[
		[
			'type'             => 'textfield',
			'value'            => 'Dinosaurs Roamed the Earth.',
			'heading'          => esc_html__( 'Title', 'chargewp-timeline-addons-for-wpbakery' ),
			'admin_label'      => true,
			'param_name'       => 'title',
			'description'      => esc_html__( 'Dinosaurs Roamed the Earth.', 'chargewp-timeline-addons-for-wpbakery' ),
			'edit_field_class' => 'vc_col-sm-9',
		],
		[
			'type'             => 'checkbox',
			'heading'          => esc_html__( 'Use custom font?', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'       => 'use_custom_fonts_title',
			'description'      => esc_html__( 'Enable custom font option.', 'chargewp-timeline-addons-for-wpbakery' ),
			'edit_field_class' => 'vc_col-sm-3',
		],
		[
			'type'       => 'textarea_html',
			'heading'    => esc_html__( 'Text', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name' => 'content',
			'value'      => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		],
		[
			'type'              => 'chargewp_divider',
			'param_name'        => 'divider_marker',
			'title'             => __( 'Marker', 'chargewp-timeline-addons-for-wpbakery' ),
			'title_description' => __( 'Set of options for marker.', 'chargewp-timeline-addons-for-wpbakery' ),
			'color'             => '#3e73c6',
		],
		[
			'type'        => 'colorpicker',
			'wcp_group'   => true,
			'value'       => '#004ffc',
			'heading'     => esc_html__( 'Marker circle color', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'marker_color',
			'description' => esc_html__( 'Select custom color for timeline item circle of marker.', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'colorpicker',
			'wcp_group'   => true,
			'value'       => '#2c2f2e',
			'heading'     => esc_html__( 'Marker inside circle color', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'marker_inner_color',
			'description' => esc_html__( 'Select custom color for marker inside circle.', 'chargewp-timeline-addons-for-wpbakery' ),
		],
	],
	$custom_heading_integration->add_custom_font_to_field( 'title', 'Title', [ 'exclude' => [ 'source', 'text', 'css' ] ], [ 'tag', 'text_align' ] ),
	[
		[
			'type'              => 'chargewp_divider',
			'param_name'        => 'divider_date',
			'title'             => __( 'Date', 'chargewp-timeline-addons-for-wpbakery' ),
			'title_description' => __( 'Set of options for date.', 'chargewp-timeline-addons-for-wpbakery' ),
			'color'             => '#B8860B',
		],
		[
			'type'             => 'textfield',
			'wcp_group'        => true,
			'wcp_group_color'  => '#B8860B',
			'value'            => '65Million B.C.',
			'heading'          => esc_html__( 'Date', 'chargewp-timeline-addons-for-wpbakery' ),
			'admin_label'      => true,
			'param_name'       => 'date',
			'description'      => esc_html__( 'Initially, it was designed as a date field, but you can use it as a regular text as well. ', 'chargewp-timeline-addons-for-wpbakery' ),
			'edit_field_class' => 'vc_col-sm-9',
		],
		[
			'type'            => 'colorpicker',
			'wcp_group'       => true,
			'wcp_group_color' => '#B8860B',
			'value'           => '#E6E6E6',
			'heading'         => esc_html__( 'Date color.', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'      => 'date_color',
			'description'     => esc_html__( 'Select custom color for date.', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'             => 'textfield',
			'wcp_group'        => true,
			'wcp_group_color'  => '#B8860B',
			'value'            => '16px',
			'heading'          => esc_html__( 'Date font size.', 'chargewp-timeline-addons-for-wpbakery' ),
			'admin_label'      => true,
			'param_name'       => 'date_font_size',
			'description'      => esc_html__( 'Set custom size for date font.', 'chargewp-timeline-addons-for-wpbakery' ),
			'edit_field_class' => 'vc_col-sm-3',
		],
		[
			'type'              => 'chargewp_divider',
			'param_name'        => 'divider_delimiter',
			'title'             => __( 'Timeline Section Delimiter', 'chargewp-timeline-addons-for-wpbakery' ),
			'title_description' => __( 'Set of options for timeline section delimiter.', 'chargewp-timeline-addons-for-wpbakery' ),
			'color'             => '#006400',
		],
		[
			'type'            => 'colorpicker',
			'wcp_group'       => true,
			'wcp_group_color' => '#006400',
			'value'           => '#080808',
			'heading'         => esc_html__( 'Delimiter Color', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'      => 'delimiter_color',
			'description'     => esc_html__( 'Select custom color for timeline section delimiter.', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'            => 'dropdown',
			'wcp_group'       => true,
			'wcp_group_color' => '#006400',
			'heading'         => esc_html__( 'Delimiter Type', 'chargewp-timeline-addons-for-wpbakery' ),
			'value'           => [
				esc_html__( 'Dashed', 'chargewp-timeline-addons-for-wpbakery' ) => 'dashed',
				esc_html__( 'Solid', 'chargewp-timeline-addons-for-wpbakery' ) => 'solid',
				esc_html__( 'Dotted', 'chargewp-timeline-addons-for-wpbakery' ) => 'dotted',
				esc_html__( 'Double', 'chargewp-timeline-addons-for-wpbakery' ) => 'double',
				esc_html__( 'Hidden', 'chargewp-timeline-addons-for-wpbakery' ) => 'hidden',

			],
			'param_name'      => 'delimiter_type',
			'description'     => esc_html__( 'Choose right or left item position for timeline item.', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'             => 'textfield',
			'wcp_group'        => true,
			'wcp_group_color'  => '#006400',
			'value'            => '1px',
			'heading'          => esc_html__( 'Delimiter Size', 'chargewp-timeline-addons-for-wpbakery' ),
			'admin_label'      => true,
			'param_name'       => 'delimiter_size',
			'description'      => esc_html__( 'Set custom size for timeline section delimiter.', 'chargewp-timeline-addons-for-wpbakery' ),
			'edit_field_class' => 'vc_col-sm-3',
		],
	]
);

return [
	'name'                    => __( 'Vertical Segment Timeline Item', 'chargewp-timeline-addons-for-wpbakery' ),
	'base'                    => 'chargewp-vertical-segment-timeline-item',
	'class'                   => 'chargewp-vertical-segment-timeline-item',
	'description'             => __( 'Timeline item for vertical segment timeline element.', 'chargewp-timeline-addons-for-wpbakery' ),
	'php_class_name'          => ChargeWpbShortcodeEmpty::class,
	'as_child'                => [ 'only' => 'chargewp-vertical-segment-timeline' ],
	'content_element'         => true,
	'show_settings_on_create' => true,
	'params'                  => array_merge(
		$params,
		[ function_exists( 'vc_config' ) && method_exists( vc_config(), 'get_css_animation' ) ? vc_config()->get_css_animation() : vc_map_add_css_animation() ],
		chargewpwpbtimeline_config( 'element-params' )['common-bottom-params']
	),
];
