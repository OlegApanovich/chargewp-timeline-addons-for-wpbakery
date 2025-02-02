<?php
/**
 * Configuration file for [chargewp-vertical-timeline-item] shortcode of 'Vertical Timeline' element.
 *
 * @since 1.0
 */

use ChargewpWpbTimeline\CustomHeadingIntegration;

defined( 'ABSPATH' ) || exit;

$custom_heading_integration = new CustomHeadingIntegration();

$params = array_merge(
	[
		[
			'type'        => 'dropdown',
			'value'       => [
				esc_html__( 'Right', 'chargewp-timeline-addons-for-wpbakery' ) => 'right',
				esc_html__( 'Left', 'chargewp-timeline-addons-for-wpbakery' ) => 'left',
			],
			'heading'     => esc_html__( 'Position', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'position',
			'description' => esc_html__( 'Choose right or left item position for timeline item.', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#00c4f3',
			'heading'     => esc_html__( 'Marker color', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'marker_color',
			'description' => esc_html__( 'Select custom color for timeline item marker.', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#FEFEFE',
			'heading'     => esc_html__( 'Title Background', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'title_color',
			'description' => esc_html__( 'Select background for title.', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'             => 'textfield',
			'value'            => 'Lorem ipsum.',
			'heading'          => esc_html__( 'Title', 'chargewp-timeline-addons-for-wpbakery' ),
			'admin_label'      => true,
			'param_name'       => 'title',
			'description'      => esc_html__( 'Enter text for title line.', 'chargewp-timeline-addons-for-wpbakery' ),
			'edit_field_class' => 'vc_col-sm-9',
		],
		[
			'type'             => 'checkbox',
			'heading'          => esc_html__( 'Use custom font?', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'       => 'use_custom_fonts_title',
			'description'      => esc_html__( 'Enable custom font option.', 'chargewp-timeline-addons-for-wpbakery' ),
			'edit_field_class' => 'vc_col-sm-3',
		],
	],
	$custom_heading_integration->add_custom_font_to_field( 'title', 'Title', [ 'exclude' => [ 'source', 'text', 'css' ] ], [ 'tag', 'text_align' ] ),
	[
		[
			'type'             => 'textfield',
			'value'            => 'Feb 2016',
			'heading'          => esc_html__( 'Date', 'chargewp-timeline-addons-for-wpbakery' ),
			'admin_label'      => true,
			'param_name'       => 'date',
			'description'      => esc_html__( 'Initially, it was designed as a date field, but you can use it as a regular text as well. ', 'chargewp-timeline-addons-for-wpbakery' ),
			'edit_field_class' => 'vc_col-sm-9',
		],
		[
			'type'             => 'checkbox',
			'heading'          => esc_html__( 'Use custom font?', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'       => 'use_custom_fonts_date',
			'description'      => esc_html__( 'Enable custom font option.', 'chargewp-timeline-addons-for-wpbakery' ),
			'edit_field_class' => 'vc_col-sm-3',
		],
	],
	$custom_heading_integration->add_custom_font_to_field( 'date', 'Date', [ 'exclude' => [ 'source', 'text', 'css' ] ], [ 'tag', 'text_align' ] ),
	[
		[
			'type'        => 'colorpicker',
			'value'       => '#00c4f3',
			'heading'     => esc_html__( 'Date background', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'date_background',
			'description' => esc_html__( 'Select custom color for your date field.', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'       => 'textarea_html',
			'heading'    => esc_html__( 'Text', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name' => 'content',
			'value'      => 'Lorem ipsum Nisi labore aute do aute culpa magna nulla voluptate exercitation deserunt proident.',
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#FEFEFE',
			'heading'     => esc_html__( 'Text Background', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'text_color',
			'description' => esc_html__( 'Select background for text.', 'chargewp-timeline-addons-for-wpbakery' ),
		],
	]
);

return [
	'name'                    => __( 'Vertical Timeline Item', 'chargewp-timeline-addons-for-wpbakery' ),
	'base'                    => 'chargewp-vertical-timeline-item',
	'class'                   => 'chargewp-vertical-timeline-item',
	'description'             => __( 'Timeline item for vertical timeline element.', 'chargewp-timeline-addons-for-wpbakery' ),
	'as_child'                => [ 'only' => 'chargewp-vertical-timeline' ],
	'content_element'         => true,
	'show_settings_on_create' => true,
	'js_view'                 => 'VcColumnView',
	'params'                  => array_merge(
		$params,
		[ vc_map_add_css_animation() ],
		chargewpwpbtimeline_config( 'shortcode-container-config' )
	),
];
