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
		'type'        => 'chargewp_switcher',
		'param_name'  => 'is_arrow_keys',
		'heading'     => esc_html__( 'Navigation', 'chargewp-timeline-addons-for-wpbakery' ),
		'description' => esc_html__( 'Enable or disable navigation arrows for timeline slider.', 'chargewp-timeline-addons-for-wpbakery' ),
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
		'value'      => '%5B%7B%22image_source%22%3A%22external_link%22%2C%22image_custom_src%22%3A%22https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fb%2Fb0%2FCassovia_Retro_2019_02.jpg%22%2C%22date%22%3A%221964%22%2C%22date_active_color%22%3A%22%23ffcc00%22%2C%22date_color%22%3A%22%23cccccc%22%2C%22content%22%3A%22%3Cp%3EBorn%20to%20Roam%3A%20The%20Golden%20Era%20Begins%3C%2Fp%3E%22%2C%22marker_color%22%3A%22%23DD9933%22%2C%22marker_border_color%22%3A%22%23F69400%22%2C%22marker_size%22%3A%2212%22%7D%2C%7B%22image_source%22%3A%22external_link%22%2C%22image_custom_src%22%3A%22https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Ff%2Ff0%2F2010_LTI_TX4_Gold%252C_Berlin_London_cab_front_right.jpg%22%2C%22date%22%3A%221974%22%2C%22date_active_color%22%3A%22%23ffcc00%22%2C%22date_color%22%3A%22%23cccccc%22%2C%22content%22%3A%22%3Cp%3EPower%20and%20Chrome%3A%20Muscle%20at%20Its%20Peak%3C%2Fp%3E%22%2C%22marker_color%22%3A%22%23DD9933%22%2C%22marker_border_color%22%3A%22%23F69400%22%2C%22marker_size%22%3A%2212%22%7D%2C%7B%22image_source%22%3A%22external_link%22%2C%22image_custom_src%22%3A%22https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2F3%2F37%2FSeat_Emelba_Pandita_1984.jpg%22%2C%22date%22%3A%221984%22%2C%22date_active_color%22%3A%22%23ffcc00%22%2C%22date_color%22%3A%22%23cccccc%22%2C%22content%22%3A%22%3Cp%3ETurbo%20Dreams%20and%20Pop-Up%20Lights%3C%2Fp%3E%22%2C%22marker_color%22%3A%22%23DD9933%22%2C%22marker_border_color%22%3A%22%23F69400%22%2C%22marker_size%22%3A%2212%22%7D%2C%7B%22is_active%22%3A%22true%22%2C%22image_source%22%3A%22external_link%22%2C%22image_custom_src%22%3A%22https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2F8%2F89%2FPretty_Wheels_-_Flickr_-_FaceMePLS.jpg%22%2C%22date%22%3A%221994%22%2C%22date_active_color%22%3A%22%23ffcc00%22%2C%22date_color%22%3A%22%23cccccc%22%2C%22content%22%3A%22%3Cp%3ERefined%20Speed%20Meets%20Everyday%20Comfort%3C%2Fp%3E%22%2C%22marker_color%22%3A%22%23DD9933%22%2C%22marker_border_color%22%3A%22%23F69400%22%2C%22marker_size%22%3A%2212%22%7D%2C%7B%22image_source%22%3A%22external_link%22%2C%22image_custom_src%22%3A%22https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fd%2Fd3%2FMichael_Schumacher_Ferrari_2004.jpg%22%2C%22date%22%3A%222004%22%2C%22date_active_color%22%3A%22%23ffcc00%22%2C%22date_color%22%3A%22%23cccccc%22%2C%22content%22%3A%22%3Cp%3ESleek%2C%20Smart%2C%20and%20Fuel-Efficient%3C%2Fp%3E%22%2C%22marker_color%22%3A%22%23DD9933%22%2C%22marker_border_color%22%3A%22%23F69400%22%2C%22marker_size%22%3A%2212%22%7D%2C%7B%22image_source%22%3A%22external_link%22%2C%22image_custom_src%22%3A%22https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fe%2Fec%2FAbarth_600e_Scorpionissima_Auto_Zuerich_2024_DSC_6149.jpg%22%2C%22date%22%3A%222024%22%2C%22date_active_color%22%3A%22%23ffcc00%22%2C%22date_color%22%3A%22%23cccccc%22%2C%22content%22%3A%22%3Cp%3E%26nbsp%3B%3Cem%20data-start%3D%5C%22415%5C%22%20data-end%3D%5C%22455%5C%22%3EElectric%20Revolution%3A%20The%20Future%20Is%20Now%3C%2Fem%3E%3C%2Fp%3E%22%2C%22marker_color%22%3A%22%23DD9933%22%2C%22marker_border_color%22%3A%22%23F69400%22%2C%22marker_size%22%3A%2212%22%7D%5D',
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
		chargewpwpbtimeline_config( 'element-params' )['shortcode-container']
	),
];
