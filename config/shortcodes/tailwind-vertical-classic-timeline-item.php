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
			'type'       => 'chargewp-notice',
			'level'      => 'warning',
			'notice'     => '<b>The Tailwind environment may apply additional CSS styles to the entire current page, not just the current element. Please check the page output after using Tailwind elements.</b>',
			'param_name' => 'tailwind_notice',
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
			'group'       => esc_html__( 'Marker', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#ffffff',
			'heading'     => esc_html__( 'Background color', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'marker_background_color',
			'description' => esc_html__( 'Select custom color for background.', 'chargewp-timeline-addons-for-wpbakery' ),
			'dependency'  => [
				'element' => 'marker_type',
				'value'   => [ 'circle', 'square' ],
			],
			'group'       => esc_html__( 'Marker', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#EEEE22',
			'heading'     => esc_html__( 'Background hover color', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'marker_background_hover_color',
			'description' => esc_html__( 'Select custom color for background hover.', 'chargewp-timeline-addons-for-wpbakery' ),
			'dependency'  => [
				'element' => 'marker_type',
				'value'   => [ 'circle', 'square' ],
			],
			'group'       => esc_html__( 'Marker', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'dropdown',
			'value'       => chargewpwpbtimeline_config( 'element-params' )['tailwind']['border_type'],
			'heading'     => esc_html__( 'Border Type', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'marker_border_type',
			'description' => esc_html__( 'Choose border type.', 'chargewp-timeline-addons-for-wpbakery' ),
			'dependency'  => [
				'element' => 'marker_type',
				'value'   => [ 'circle', 'square' ],
			],
			'group'       => esc_html__( 'Marker', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#cccccc',
			'heading'     => esc_html__( 'Border color', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'marker_border_color',
			'description' => esc_html__( 'Select custom color for border.', 'chargewp-timeline-addons-for-wpbakery' ),
			'dependency'  => [
				'element' => 'marker_type',
				'value'   => [ 'circle', 'square' ],
			],
			'group'       => esc_html__( 'Marker', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#EEEE2278',
			'heading'     => esc_html__( 'Border hover color', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'marker_border_hover_color',
			'description' => esc_html__( 'Select custom color for border hover.', 'chargewp-timeline-addons-for-wpbakery' ),
			'dependency'  => [
				'element' => 'marker_type',
				'value'   => [ 'circle', 'square' ],
			],
			'group'       => esc_html__( 'Marker', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'dropdown',
			'value'       => [
				esc_html__( 'Slim', 'chargewp-timeline-addons-for-wpbakery' ) => '2',
				esc_html__( 'Middle', 'chargewp-timeline-addons-for-wpbakery' ) => '4',
				esc_html__( 'Bold', 'chargewp-timeline-addons-for-wpbakery' ) => '8',
			],
			'heading'     => esc_html__( 'Border Style', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'marker_border_style',
			'description' => esc_html__( 'Choose border style.', 'chargewp-timeline-addons-for-wpbakery' ),
			'dependency'  => [
				'element' => 'marker_type',
				'value'   => [ 'circle', 'square' ],
			],
			'group'       => esc_html__( 'Marker', 'chargewp-timeline-addons-for-wpbakery' ),
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
			'group'       => esc_html__( 'Marker', 'chargewp-timeline-addons-for-wpbakery' ),
			'dependency'  => [
				'element' => 'marker_type',
				'value'   => [ 'circle', 'square' ],
			],
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
			'group'       => esc_html__( 'Marker', 'chargewp-timeline-addons-for-wpbakery' ),
			'dependency'  => [
				'element' => 'marker_type',
				'value'   => [ 'circle', 'square' ],
			],
			'title'       => esc_html__( 'px', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'             => 'dropdown',
			'value'            => chargewpwpbtimeline_config( 'element-params' )['tailwind']['rotation_degree'],
			'heading'          => esc_html__( 'Marker Rotation Degree', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'       => 'marker_rotation_degree',
			'description'      => esc_html__( 'Choose rotation degree.', 'chargewp-timeline-addons-for-wpbakery' ),
			'dependency'       => [
				'element' => 'marker_type',
				'value'   => [ 'circle', 'square' ],
			],
			'edit_field_class' => 'vc_col-sm-9',
			'group'            => esc_html__( 'Marker', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'             => 'checkbox',
			'heading'          => esc_html__( 'Negative rotation degree?', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'       => 'marker_negative_rotation_degree',
			'description'      => esc_html__( 'Enable negative rotation degree.', 'chargewp-timeline-addons-for-wpbakery' ),
			'edit_field_class' => 'vc_col-sm-3',
			'group'            => esc_html__( 'Marker', 'chargewp-timeline-addons-for-wpbakery' ),
		],
	],
	$custom_icon_integration->add_icon_checkbox( [ 'background_style', 'align', 'link', 'background_color', 'custom_background_color' ] ),
	[
		[
			'type'             => 'textfield',
			'value'            => 'Feb 2015',
			'heading'          => esc_html__( 'Date', 'chargewp-timeline-addons-for-wpbakery' ),
			'admin_label'      => true,
			'param_name'       => 'date',
			'description'      => esc_html__( 'Initially, it was designed as a date field, but you can use it as a regular text as well. ', 'chargewp-timeline-addons-for-wpbakery' ),
			'edit_field_class' => 'vc_col-sm-9',
			'group'            => esc_html__( 'Content', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'             => 'checkbox',
			'heading'          => esc_html__( 'Use custom font?', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'       => 'use_custom_fonts_date',
			'description'      => esc_html__( 'Enable custom font option.', 'chargewp-timeline-addons-for-wpbakery' ),
			'edit_field_class' => 'vc_col-sm-3',
			'group'            => esc_html__( 'Content', 'chargewp-timeline-addons-for-wpbakery' ),
		],
	],
	$custom_heading_integration->add_custom_font_to_field( 'date', 'Date', [ 'exclude' => [ 'source', 'text', 'css' ] ], [ 'tag', 'text_align' ] ),
	[
		[
			'type'             => 'textfield',
			'value'            => 'Lorem ipsum.',
			'heading'          => esc_html__( 'Title', 'chargewp-timeline-addons-for-wpbakery' ),
			'admin_label'      => true,
			'param_name'       => 'title',
			'description'      => esc_html__( 'Enter text for title line.', 'chargewp-timeline-addons-for-wpbakery' ),
			'edit_field_class' => 'vc_col-sm-9',
			'group'            => esc_html__( 'Content', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'             => 'checkbox',
			'heading'          => esc_html__( 'Use custom font?', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'       => 'use_custom_fonts_title',
			'description'      => esc_html__( 'Enable custom font option.', 'chargewp-timeline-addons-for-wpbakery' ),
			'edit_field_class' => 'vc_col-sm-3',
			'group'            => esc_html__( 'Content', 'chargewp-timeline-addons-for-wpbakery' ),
		],
	],
	$custom_heading_integration->add_custom_font_to_field( 'title', 'Title', [ 'exclude' => [ 'source', 'text', 'css' ] ], [ 'tag', 'text_align' ] ),
	[
		[
			'type'       => 'textarea_html',
			'heading'    => esc_html__( 'Text', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name' => 'content',
			'value'      => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam necessitatibus numquam earum ipsa fugiat veniam suscipit, officiis repudiandae, eum recusandae neque dignissimos. Cum fugit laboriosam culpa, repellendus esse commodi deserunt.',
			'group'      => esc_html__( 'Content', 'chargewp-timeline-addons-for-wpbakery' ),
		],
	],
	[
		[
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Background color', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'content_background_color',
			'description' => esc_html__( 'Select custom color for background.', 'chargewp-timeline-addons-for-wpbakery' ),
			'group'       => esc_html__( 'Content', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Background hover color', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'content_background_hover_color',
			'description' => esc_html__( 'Select custom color for background hover.', 'chargewp-timeline-addons-for-wpbakery' ),
			'group'       => esc_html__( 'Content', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'dropdown',
			'value'       => chargewpwpbtimeline_config( 'element-params' )['tailwind']['border_type'],
			'heading'     => esc_html__( 'Border Type', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'content_border_type',
			'description' => esc_html__( 'Choose border type.', 'chargewp-timeline-addons-for-wpbakery' ),
			'group'       => esc_html__( 'Content', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Border color', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'content_border_color',
			'description' => esc_html__( 'Select custom color for border.', 'chargewp-timeline-addons-for-wpbakery' ),
			'group'       => esc_html__( 'Content', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Border hover color', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'content_border_hover_color',
			'description' => esc_html__( 'Select custom color for border hover.', 'chargewp-timeline-addons-for-wpbakery' ),
			'group'       => esc_html__( 'Content', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'dropdown',
			'value'       => chargewpwpbtimeline_config( 'element-params' )['tailwind']['border_style'],
			'heading'     => esc_html__( 'Border Style', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'content_border_style',
			'description' => esc_html__( 'Choose border style.', 'chargewp-timeline-addons-for-wpbakery' ),
			'group'       => esc_html__( 'Content', 'chargewp-timeline-addons-for-wpbakery' ),
		],
	],
	[
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
			'group'       => esc_html__( 'Image', 'chargewp-timeline-addons-for-wpbakery' ),
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
			'group'       => esc_html__( 'Image', 'chargewp-timeline-addons-for-wpbakery' ),
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
			'group'       => esc_html__( 'Image', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Rounded', 'js_composer' ),
			'param_name'  => 'image_rounded',
			'value'       => chargewpwpbtimeline_config( 'element-params' )['tailwind']['rounded'],
			'std'         => 'media_library',
			'description' => esc_html__( 'Select image rounded value.', 'js_composer' ),
			'group'       => esc_html__( 'Image', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Shadow', 'js_composer' ),
			'param_name'  => 'image_shadow',
			'value'       => chargewpwpbtimeline_config( 'element-params' )['tailwind']['shadow'],
			'std'         => 'media_library',
			'description' => esc_html__( 'Select image shadow value.', 'js_composer' ),
			'group'       => esc_html__( 'Image', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Fit', 'js_composer' ),
			'param_name'  => 'image_fit',
			'value'       => chargewpwpbtimeline_config( 'element-params' )['tailwind']['fit'],
			'std'         => 'media_library',
			'description' => esc_html__( 'Select image fit/position value.', 'js_composer' ),
			'group'       => esc_html__( 'Image', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'             => 'dropdown',
			'value'            => chargewpwpbtimeline_config( 'element-params' )['tailwind']['rotation_degree'],
			'heading'          => esc_html__( 'Rotation Degree', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'       => 'image_rotation_degree',
			'edit_field_class' => 'vc_col-sm-9',
			'description'      => esc_html__( 'Choose rotation degree.', 'chargewp-timeline-addons-for-wpbakery' ),
			'group'            => esc_html__( 'Image', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'             => 'checkbox',
			'heading'          => esc_html__( 'Negative rotation degree?', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'       => 'image_negative_rotation_degree',
			'description'      => esc_html__( 'Enable negative rotation degree.', 'chargewp-timeline-addons-for-wpbakery' ),
			'edit_field_class' => 'vc_col-sm-3',
			'group'            => esc_html__( 'Image', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'dropdown',
			'value'       => chargewpwpbtimeline_config( 'element-params' )['tailwind']['border_type'],
			'heading'     => esc_html__( 'Border Type', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'image_border_type',
			'description' => esc_html__( 'Choose border type.', 'chargewp-timeline-addons-for-wpbakery' ),
			'group'       => esc_html__( 'Image', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#cccccc',
			'heading'     => esc_html__( 'Border color', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'image_border_color',
			'description' => esc_html__( 'Select custom color for border.', 'chargewp-timeline-addons-for-wpbakery' ),
			'group'       => esc_html__( 'Image', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#EEEE2278',
			'heading'     => esc_html__( 'Border hover color', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'image_border_hover_color',
			'description' => esc_html__( 'Select custom color for border hover.', 'chargewp-timeline-addons-for-wpbakery' ),
			'group'       => esc_html__( 'Image', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'dropdown',
			'value'       => chargewpwpbtimeline_config( 'element-params' )['tailwind']['border_style'],
			'heading'     => esc_html__( 'Border Style', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'image_border_style',
			'description' => esc_html__( 'Choose border style.', 'chargewp-timeline-addons-for-wpbakery' ),
			'group'       => esc_html__( 'Image', 'chargewp-timeline-addons-for-wpbakery' ),
		],
	]
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
