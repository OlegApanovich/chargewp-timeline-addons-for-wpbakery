<?php
/**
 * Configuration file for [chargewp_wheel_timeline] shortcode of 'Wheel Timeline' element.
 *
 * @since 1.3
 */

use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeEmpty;

defined( 'ABSPATH' ) || exit;

$params = [
	[
		'type'        => 'chargewp_number_slider',
		'value'       => '45',
		'min'         => '1',
		'max'         => '50',
		'step'        => '1',
		'heading'     => esc_html__( 'Wheel Radius', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'wheel_radius',
		'description' => esc_html__( "Set wheel radius in %. It take value depending on it's container width.", 'chargewp-timeline-addons-for-wpbakery' ),
		'title'       => '%',
	],
	[
		'type'        => 'chargewp_number_slider',
		'value'       => '2',
		'min'         => '1',
		'max'         => '30',
		'step'        => '1',
		'heading'     => esc_html__( 'Vertical Date Alignment', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'vertical_date_alignment',
		'description' => esc_html__( 'Set vertical alignment for date in rem.', 'chargewp-timeline-addons-for-wpbakery' ),
		'title'       => 'rem',
	],
	[
		'type'        => 'chargewp_number_slider',
		'value'       => '5',
		'min'         => '1',
		'max'         => '30',
		'step'        => '1',
		'heading'     => esc_html__( 'Vertical Info Alignment', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'vertical_info_alignment',
		'description' => esc_html__( 'Set vertical alignment for text info in rem.', 'chargewp-timeline-addons-for-wpbakery' ),
		'title'       => 'rem',
	],
	[
		'type'        => 'chargewp_number_slider',
		'value'       => '70',
		'min'         => '1',
		'max'         => '100',
		'step'        => '1',
		'heading'     => esc_html__( 'Info Width', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'info_width',
		'description' => esc_html__( 'Set width of info block in percent.', 'chargewp-timeline-addons-for-wpbakery' ),
		'title'       => '%',
	],
	[
		'type'        => 'chargewp_switcher',
		'param_name'  => 'is_connection_lines',
		'heading'     => esc_html__( 'Enable Connection Lines', 'chargewp-timeline-addons-for-wpbakery' ),
		'description' => esc_html__( 'Switch to yes if you need a connection lines for timeline elements.', 'chargewp-timeline-addons-for-wpbakery' ),
		'options'     => [
			'true' => [
				'label' => '',
				'on'    => __( 'Yes', 'chargewp-timeline-addons-for-wpbakery' ),
				'off'   => __( 'No', 'chargewp-timeline-addons-for-wpbakery' ),
			],
		],
		'value'       => 'true',
	],
	[
		'type'        => 'chargewp_number_slider',
		'value'       => '2',
		'min'         => '0',
		'max'         => '30',
		'step'        => '1',
		'heading'     => esc_html__( 'Active Connection Line Height', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'active_connection_line_height',
		'description' => esc_html__( 'Set height of active connection line element in rem.', 'chargewp-timeline-addons-for-wpbakery' ),
		'title'       => 'rem',
		'dependency'  => [
			'element' => 'is_connection_lines',
			'value'   => 'true',
		],
	],
	[
		'type'        => 'chargewp_number_slider',
		'value'       => '0',
		'min'         => '0',
		'max'         => '30',
		'step'        => '1',
		'heading'     => esc_html__( 'Connection Line Height', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'connection_line_height',
		'description' => esc_html__( 'Set height of connection line elements in rem.', 'chargewp-timeline-addons-for-wpbakery' ),
		'title'       => 'rem',
		'dependency'  => [
			'element' => 'is_connection_lines',
			'value'   => 'true',
		],
	],
	[
		'type'        => 'colorpicker',
		'value'       => '#000666',
		'heading'     => esc_html__( 'Connection Line Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'connection_line_color',
		'description' => esc_html__( 'Select custom color for active connection line.', 'chargewp-timeline-addons-for-wpbakery' ),
		'dependency'  => [
			'element' => 'is_connection_lines',
			'value'   => 'true',
		],
	],
	[
		'type'        => 'chargewp_switcher',
		'param_name'  => 'is_wheel_spinning',
		'heading'     => esc_html__( 'Enable Wheel Spinning', 'chargewp-timeline-addons-for-wpbakery' ),
		'description' => esc_html__( 'Switch to yes if you need a wheel spinning effect when clicking timeline items.', 'chargewp-timeline-addons-for-wpbakery' ),
		'options'     => [
			'true' => [
				'label' => '',
				'on'    => __( 'Yes', 'chargewp-timeline-addons-for-wpbakery' ),
				'off'   => __( 'No', 'chargewp-timeline-addons-for-wpbakery' ),
			],
		],
		'value'       => 'true',
	],
	[
		'type'        => 'chargewp_number_slider',
		'value'       => '0',
		'min'         => '0',
		'max'         => '360',
		'step'        => '1',
		'heading'     => esc_html__( 'Wheel Initial Rotation Degree', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'wheel_rotation_degree',
		'description' => esc_html__( 'Set initial wheel rotation degree in deg.', 'chargewp-timeline-addons-for-wpbakery' ),
		'title'       => 'deg',
		'dependency'  => [
			'element' => 'is_wheel_spinning',
			'value'   => 'true',
		],
	],
	[
		'type'        => 'chargewp_number_slider',
		'value'       => '200',
		'min'         => '1',
		'max'         => '10000',
		'step'        => '1',
		'heading'     => esc_html__( 'Wheel Speed', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'wheel_speed',
		'description' => esc_html__( 'Set wheel speed transition after click on a date circle in milliseconds.', 'chargewp-timeline-addons-for-wpbakery' ),
		'title'       => 'ms',
		'dependency'  => [
			'element' => 'is_wheel_spinning',
			'value'   => 'true',
		],
	],

	[
		'type'       => 'param_group',
		'group'      => esc_html__( 'Timeline Items', 'chargewp-timeline-addons-for-wpbakery' ),
		'heading'    => esc_html__( 'Timeline Items', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name' => 'items',
		'params'     => [
			[
				'type'        => 'chargewp_switcher',
				'param_name'  => 'is_active',
				'heading'     => esc_html__( 'Default Active Item', 'chargewp-timeline-addons-for-wpbakery' ),
				'description' => esc_html__( 'Set this item as active after the page finishes loading in the slider. Only one item can be active. If you select more than one as active, the wheel will activate only the last one.', 'chargewp-timeline-addons-for-wpbakery' ),
				'options'     => [
					'true' => [
						'label' => '',
						'on'    => __( 'Yes', 'chargewp-timeline-addons-for-wpbakery' ),
						'off'   => __( 'No', 'chargewp-timeline-addons-for-wpbakery' ),
					],
				],
				'value'       => '',
			],
			[
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Date', 'chargewp-timeline-addons-for-wpbakery' ),
				'param_name'  => 'date',
				'value'       => '1984',
				'description' => esc_html__( 'Enter date for timeline item.', 'chargewp-timeline-addons-for-wpbakery' ),
				'admin_label' => true,
			],
			[
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Info', 'chargewp-timeline-addons-for-wpbakery' ),
				'param_name'  => 'info',
				'value'       => '',
				'description' => esc_html__( 'Enter timeline item info.', 'chargewp-timeline-addons-for-wpbakery' ),
			],
			[
				'type'        => 'colorpicker',
				'heading'     => esc_html__( 'Circle Color', 'chargewp-timeline-addons-for-wpbakery' ),
				'param_name'  => 'circle_color',
				'description' => esc_html__( 'Select custom color for item circle.', 'chargewp-timeline-addons-for-wpbakery' ),
				'value'       => '#000666',
			],
			[
				'type'        => 'colorpicker',
				'heading'     => esc_html__( 'Date Color', 'chargewp-timeline-addons-for-wpbakery' ),
				'param_name'  => 'date_color',
				'description' => esc_html__( 'Select custom color for item date.', 'chargewp-timeline-addons-for-wpbakery' ),
				'value'       => '#000666',
			],
			[
				'type'        => 'colorpicker',
				'heading'     => esc_html__( 'Circle Hover Color', 'chargewp-timeline-addons-for-wpbakery' ),
				'param_name'  => 'circle_hover_color',
				'description' => esc_html__( 'Select custom color for item circles on hover.', 'chargewp-timeline-addons-for-wpbakery' ),
				'value'       => '#4682B4',
			],
			[
				'type'        => 'colorpicker',
				'heading'     => esc_html__( 'Date Hover Color', 'chargewp-timeline-addons-for-wpbakery' ),
				'param_name'  => 'date_hover_color',
				'description' => esc_html__( 'Select custom color for item date on hover.', 'chargewp-timeline-addons-for-wpbakery' ),
				'value'       => '#4682B4',
			],
			[
				'type'        => 'chargewp_number_slider',
				'value'       => '10',
				'min'         => '0',
				'max'         => '100',
				'step'        => '1',
				'heading'     => esc_html__( 'Circle Size', 'chargewp-timeline-addons-for-wpbakery' ),
				'param_name'  => 'circle_size',
				'description' => esc_html__( 'Set size of circle in pixels.', 'chargewp-timeline-addons-for-wpbakery' ),
				'title'       => 'px',
			],
			[
				'type'        => 'chargewp_number',
				'min'         => '1',
				'max'         => '50',
				'step'        => '1',
				'title'       => 'px',
				'heading'     => esc_html__( 'Date Font Size', 'my-text-domain' ),
				'param_name'  => 'date_font_size',
				'description' => esc_html__( 'Set font size for date text in pixels.', 'chargewp-timeline-addons-for-wpbakery' ),
			],
		],
	],
];

return [
	'name'                    => __( 'Wheel Timeline', 'chargewp-timeline-addons-for-wpbakery' ),
	'base'                    => 'chargewp-wheel-timeline',
	'icon'                    => CHARGEWPWPBTIMELINE_ASSETS_URI . '/images/shortcodes/icons/wheel-timeline.svg',
	'class'                   => 'chargewp-wheel-timeline',
	'category'                => 'ChargeWP',
	'description'             => __( 'Wheel Timeline. Pure CSS.', 'chargewp-timeline-addons-for-wpbakery' ),
	'php_class_name'          => ChargeWpbShortcodeEmpty::class,
	'show_settings_on_create' => true,
	'params'                  => array_merge(
		$params,
		[ vc_map_add_css_animation() ],
		chargewpwpbtimeline_config( 'element-params' )['common-bottom-params']
	),
];
