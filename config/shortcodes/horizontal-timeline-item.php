<?php
/**
 * Configuration file for [wpb-plus-horizontal-timeline-item] shortcode of 'Horizontal Timeline' element.
 *
 * @since 1.0
 */

use WpbPlusTimeline\CustomHeadingIntegration;

defined( 'ABSPATH' ) || exit;

$custom_heading_integration = new CustomHeadingIntegration();

$params = array_merge(
	[
		[
			'type'        => 'dropdown',
			'value'       => [
				esc_html__( 'Right', 'wpbakery-plus-timeline-element' ) => 'right',
				esc_html__( 'Left', 'wpbakery-plus-timeline-element' ) => 'left',
			],
			'heading'     => esc_html__( 'Postion', 'wpbakery-plus-timeline-element' ),
			'param_name'  => 'position',
			'description' => esc_html__( 'Choose right or left item position for timeline item.', 'wpbakery-plus-timeline-element' ),
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#00c4f3',
			'heading'     => esc_html__( 'Marker color', 'wpbakery-plus-timeline-element' ),
			'param_name'  => 'marker_color',
			'description' => esc_html__( 'Select custom color for timeline item marker.', 'wpbakery-plus-timeline-element' ),
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#FEFEFE',
			'heading'     => esc_html__( 'Title Background', 'wpbakery-plus-timeline-element' ),
			'param_name'  => 'title_color',
			'description' => esc_html__( 'Select background for title.', 'wpbakery-plus-timeline-element' ),
		],
		[
			'type'             => 'textfield',
			'value'            => 'Lorem ipsum.',
			'heading'          => esc_html__( 'Title', 'wpbakery-plus-timeline-element' ),
			'admin_label'      => true,
			'param_name'       => 'title',
			'description'      => esc_html__( 'Enter text for title line.', 'wpbakery-plus-timeline-element' ),
			'edit_field_class' => 'vc_col-sm-9',
		],
		[
			'type'             => 'checkbox',
			'heading'          => esc_html__( 'Use custom font?', 'wpbakery-plus-timeline-element' ),
			'param_name'       => 'use_custom_fonts_title',
			'description'      => esc_html__( 'Enable custom font option.', 'wpbakery-plus-timeline-element' ),
			'edit_field_class' => 'vc_col-sm-3',
		],
	],
	$custom_heading_integration->add_custom_font_to_field( 'title', 'Title', [ 'exclude' => [ 'source', 'text', 'css' ] ], [ 'tag', 'text_align' ] ),
	[
		[
			'type'             => 'textfield',
			'value'            => 'Feb 2015',
			'heading'          => esc_html__( 'Date', 'wpbakery-plus-timeline-element' ),
			'admin_label'      => true,
			'param_name'       => 'date',
			'description'      => esc_html__( 'Initially, it was designed as a date field, but you can use it as a regular text as well. ', 'wpbakery-plus-timeline-element' ),
			'edit_field_class' => 'vc_col-sm-9',
		],
		[
			'type'             => 'checkbox',
			'heading'          => esc_html__( 'Use custom font?', 'wpbakery-plus-timeline-element' ),
			'param_name'       => 'use_custom_fonts_date',
			'description'      => esc_html__( 'Enable custom font option.', 'wpbakery-plus-timeline-element' ),
			'edit_field_class' => 'vc_col-sm-3',
		],
	],
	$custom_heading_integration->add_custom_font_to_field( 'date', 'Date', [ 'exclude' => [ 'source', 'text', 'css' ] ], [ 'tag', 'text_align' ] ),
	[
		[
			'type'        => 'colorpicker',
			'value'       => '#00c4f3',
			'heading'     => esc_html__( 'Date background', 'wpbakery-plus-timeline-element' ),
			'param_name'  => 'date_background',
			'description' => esc_html__( 'Select custom color for your date field.', 'wpbakery-plus-timeline-element' ),
		],
		[
			'type'       => 'textarea_html',
			'heading'    => esc_html__( 'Text', 'wpbakery-plus-timeline-element' ),
			'param_name' => 'content',
			'value'      => 'Lorem ipsum Nisi labore aute do aute culpa magna nulla voluptate exercitation deserunt proident.',
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#FEFEFE',
			'heading'     => esc_html__( 'Text Background', 'wpbakery-plus-timeline-element' ),
			'param_name'  => 'text_color',
			'description' => esc_html__( 'Select background for text.', 'wpbakery-plus-timeline-element' ),
		],
	]
);

return [
	'name'                    => __( 'Horizontal Timeline Item', 'wpbakery-plus-timeline-element' ),
	'base'                    => 'wpbakery-plus-horizontal-timeline-item',
	'class'                   => 'wpbakery-plus-horizontal-timeline-item',
	'description'             => __( 'Timeline item for horizontal timeline element.', 'wpbakery-plus-timeline-element' ),
	'as_child'                => [ 'only' => 'wpbakery-plus-horizontal-timeline' ],
	'content_element'         => true,
	'show_settings_on_create' => true,
	'js_view'                 => 'VcColumnView',
	'params'                  => array_merge(
		[],
		[ vc_map_add_css_animation() ],
		wpbplustimeline_config( 'shortcode-container-config' )
	),
];
