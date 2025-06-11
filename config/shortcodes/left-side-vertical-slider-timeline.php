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
		'value'       => '#DD993340',
		'heading'     => esc_html__( 'Baseline Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'baseline_color',
		'description' => esc_html__( 'Select custom color for timeline base line.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
	[
		'type'        => 'chargewp_number_slider',
		'value'       => '2',
		'min'         => '0.5',
		'max'         => '10',
		'step'        => '0.5',
		'heading'     => esc_html__( 'Baseline Width', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'baseline_width',
		'description' => esc_html__( 'Set custom width from 0 to 10 for timeline base line.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
	[
		'type'       => 'chargewp_switcher',
		'param_name' => 'is_arrow_keys',
		'options'    => [
			'true' => [
				'label' => '',
				'on'    => __( 'Yes', 'chargewp-timeline-addons-for-wpbakery' ),
				'off'   => __( 'No', 'chargewp-timeline-addons-for-wpbakery' ),
			],
		],
		'value'      => '',
	],
	[
		'type'        => 'colorpicker',
		'value'       => '#cccccc',
		'heading'     => esc_html__( 'Prev Arrow Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'prev_arrow_color',
		'description' => esc_html__( 'Select custom color for bottom navigation arrow.', 'chargewp-timeline-addons-for-wpbakery' ),
		'dependency'  => [
			'element' => 'is_arrow_keys',
			'value'   => 'true',
		],
	],
	[
		'type'        => 'colorpicker',
		'value'       => '#cccccc',
		'heading'     => esc_html__( 'Next Arrow Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'next_arrow_color',
		'description' => esc_html__( 'Select custom color for top navigation arrow.', 'chargewp-timeline-addons-for-wpbakery' ),
		'dependency'  => [
			'element' => 'is_arrow_keys',
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
				'heading'     => esc_html__( 'Active Item', 'chargewp-timeline-addons-for-wpbakery' ),
				'description' => esc_html__( 'Set this item as active after the page finishes loading in the slider. Only one item can be active in the slider. If you select more than one as active, the slider will activate only the last one.', 'chargewp-timeline-addons-for-wpbakery' ),
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
				'value'       => '1984',
				'description' => esc_html__( 'Enter date for timeline item.', 'chargewp-timeline-addons-for-wpbakery' ),
				'admin_label' => true,
				'group'       => esc_html__( 'Date', 'chargewp-timeline-addons-for-wpbakery' ),
			],
			[
				'type'        => 'colorpicker',
				'value'       => '#ffcc00',
				'heading'     => esc_html__( 'Date Active Color', 'chargewp-timeline-addons-for-wpbakery' ),
				'param_name'  => 'date_active_color',
				'description' => esc_html__( 'Select custom color for timeline date active element.', 'chargewp-timeline-addons-for-wpbakery' ),
			],
			[
				'type'        => 'colorpicker',
				'value'       => '#cccccc',
				'heading'     => esc_html__( 'Date Regular Color', 'chargewp-timeline-addons-for-wpbakery' ),
				'param_name'  => 'date_color',
				'description' => esc_html__( 'Select custom color for timeline date not active element.', 'chargewp-timeline-addons-for-wpbakery' ),
			],
			[
				'type'        => 'chargewp_wysiwyg',
                // phpcs:ignore:WordPress.PHP.DiscouragedPHPFunctions.obfuscation_base64_encode
				'value'       => '',
				'heading'     => esc_html__( 'Text', 'chargewp-timeline-addons-for-wpbakery' ),
				'description' => esc_html__( 'Main text field for timeline item.', 'chargewp-timeline-addons-for-wpbakery' ),
				'scope'       => [
					'use_tabs'       => 'true',
					'use_menubar'    => 'false',
					'use_media'      => 'false',
					'use_link'       => 'true',
					'use_lists'      => 'false',
					'use_blockquote' => 'true',
					'use_textcolor'  => 'true',
					'use_background' => 'true',
				],
				'param_name'  => 'content',
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
				'type'        => 'chargewp_number_slider',
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
	'show_settings_on_create' => true,
	'params'                  => array_merge(
		$params,
		[ vc_map_add_css_animation() ],
		chargewpwpbtimeline_config( 'shortcode-container-config' )
	),
];
