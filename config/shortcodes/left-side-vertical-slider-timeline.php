<?php
/**
 * Configuration file for [chargewp_left_side_vertical_slider_timeline] shortcode of 'Left Side Vertical Slider Timeline' element.
 *
 * @since 1.0
 */

use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeEmpty;

defined( 'ABSPATH' ) || exit;

$params = [
	[
		'type'        => 'colorpicker',
		'value'       => '#cccccc',
		'heading'     => esc_html__( 'Baseline Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'baseline_color',
		'description' => esc_html__( 'Select custom color for timeline base line.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
	[
		'type'        => 'chargewp-number-slider',
		'value'       => '2',
		'min'         => '0.5',
		'max'         => '10',
		'step'        => '0.5',
		'heading'     => esc_html__( 'Baseline Width', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'baseline_width',
		'description' => esc_html__( 'Set custom width from 0 to 10 for timeline base line.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
	[
		'type'        => 'colorpicker',
		'value'       => '#cccccc',
		'heading'     => esc_html__( 'Prev Arrow Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'prev_arrow_color',
		'description' => esc_html__( 'Select custom color for bottom navigation arrow.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
	[
		'type'        => 'colorpicker',
		'value'       => '#cccccc',
		'heading'     => esc_html__( 'Next Arrow Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'next_arrow_color',
		'description' => esc_html__( 'Select custom color for top navigation arrow.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
	[
		'type'       => 'param_group',
		'value'      => '',
		'group'      => esc_html__( 'Timeline Items', 'chargewp-timeline-addons-for-wpbakery' ),
		'heading'    => esc_html__( 'Timeline Items', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name' => 'items',
		'params'     => [
			[
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Active Item', 'chargewp-timeline-addons-for-wpbakery' ),
				'description' => esc_html__( 'Set this item as active after the page finishes loading in the slider. Only one item can be active in the slider. If you select more than one as active, the slider will activate only the last one.', 'chargewp-timeline-addons-for-wpbakery' ),
				'param_name'  => 'is_active',
			],
			[
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Image source', 'js_composer' ),
				'param_name'  => 'image_source',
				'value'       => [
					esc_html__( 'Media library', 'js_composer' ) => 'media_library',
					esc_html__( 'External link', 'js_composer' ) => 'external_link',
				],
				'std'         => 'media_library',
				'description' => esc_html__( 'Select image source.', 'js_composer' ),
			],
			[
				'type'        => 'attach_image',
				'heading'     => esc_html__( 'Image', 'js_composer' ),
				'param_name'  => 'image',
				'value'       => '',
				'description' => esc_html__( 'Select image from media library.', 'js_composer' ),
				'dependency'  => [
					'element' => 'image_source',
					'value'   => 'media_library',
				],
				'admin_label' => true,
			],
			[
				'type'        => 'textfield',
				'heading'     => esc_html__( 'External link', 'js_composer' ),
				'param_name'  => 'image_custom_src',
				'description' => esc_html__( 'Select external link.', 'js_composer' ),
				'dependency'  => [
					'element' => 'image_source',
					'value'   => 'external_link',
				],
				'admin_label' => true,
			],
			[
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Date', 'chargewp-timeline-addons-for-wpbakery' ),
				'param_name'  => 'date',
				'description' => esc_html__( 'Enter date for timeline item.', 'chargewp-timeline-addons-for-wpbakery' ),
				'admin_label' => true,
				'group'       => esc_html__( 'Date', 'chargewp-timeline-addons-for-wpbakery' ),
			],
			[
				'type'       => 'textarea',
				'heading'    => esc_html__( 'Text', 'chargewp-timeline-addons-for-wpbakery' ),
				'param_name' => 'content',
			],
			[
				'type'        => 'colorpicker',
				'value'       => '#cccccc',
				'heading'     => esc_html__( 'Marker Color', 'chargewp-timeline-addons-for-wpbakery' ),
				'param_name'  => 'marker_color',
				'description' => esc_html__( 'Select custom color for item marker.', 'chargewp-timeline-addons-for-wpbakery' ),
			],
			[
				'type'        => 'colorpicker',
				'value'       => '#cccccc',
				'heading'     => esc_html__( 'Marker Border Color', 'chargewp-timeline-addons-for-wpbakery' ),
				'param_name'  => 'marker_border_color',
				'description' => esc_html__( 'Select custom border color for item marker.', 'chargewp-timeline-addons-for-wpbakery' ),
			],
			[
				'type'        => 'chargewp-number-slider',
				'value'       => '12',
				'min'         => '5',
				'max'         => '20',
				'step'        => '1',
				'heading'     => esc_html__( 'Marker Size', 'chargewp-timeline-addons-for-wpbakery' ),
				'param_name'  => 'marker_size',
				'description' => esc_html__( 'Set custom size in px from 5 to 20 for timeline item marker.', 'chargewp-timeline-addons-for-wpbakery' ),
			],
		],
	],
];

return [
	'name'                    => __( 'Left Side Vertical Slider Timeline', 'chargewp-timeline-addons-for-wpbakery' ),
	'base'                    => 'chargewp-left-side-vertical-slider-timeline',
	'icon'                    => CHARGEWPWPBTIMELINE_ASSETS_URI . '/images/shortcodes/icons/left-side-vertical-slider-timeline.svg',
	'class'                   => 'chargewp-left-side-vertical-slider-timeline',
	'category'                => 'ChargeWP',
	'description'             => __( 'Timeline element with vertical left side slider interface.', 'chargewp-timeline-addons-for-wpbakery' ),
	'php_class_name'          => ChargeWpbShortcodeEmpty::class,
	'content_element'         => true,
	'show_settings_on_create' => true,
	'js_view'                 => 'VcColumnView',
	'params'                  => array_merge(
		$params,
		[ vc_map_add_css_animation() ],
		chargewpwpbtimeline_config( 'shortcode-container-config' )
	),
];
