<?php
/**
 * Configuration file for [chargewp-left-side-stack-item] shortcode of 'Left Side Stack Item' element.
 *
 * @since 1.0
 */

use ChargewpWpbTimeline\ElementIntegration\HeadingIntegration;
use ChargewpWpbTimeline\ElementIntegration\IconIntegration;
use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeEmpty;

defined( 'ABSPATH' ) || exit;

$custom_heading_integration = new HeadingIntegration();
$custom_icon_integration    = new IconIntegration();

$params = array_merge(
	[
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
			'type'        => 'colorpicker',
			'value'       => '#1d8cf8',
			'heading'     => esc_html__( 'Title background color', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'title_background_color',
			'description' => esc_html__( 'Select custom color for title background.', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#1d8cf8',
			'heading'     => esc_html__( 'Circle color', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'circle_color',
			'description' => esc_html__( 'Select custom color for circle.', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'             => 'textfield',
			'value'            => '1 Hours Ago',
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
		[
			'type'        => 'colorpicker',
			'value'       => '#27293d',
			'heading'     => esc_html__( 'Item background color', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'item_background_color',
			'description' => esc_html__( 'Select custom color for item background.', 'chargewp-timeline-addons-for-wpbakery' ),
		],
	],
	$custom_heading_integration->add_custom_font_to_field( 'date', 'Date', [ 'exclude' => [ 'source', 'text', 'css' ] ], [ 'tag', 'text_align' ] ),
	[
		[
			'type'       => 'textarea_html',
			'heading'    => esc_html__( 'Text', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name' => 'content',
			'value'      => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam necessitatibus numquam earum ipsa fugiat veniam suscipit, officiis repudiandae, eum recusandae neque dignissimos. Cum fugit laboriosam culpa, repellendus esse commodi deserunt.',
		],
	],
	$custom_icon_integration->add_icon_checkbox( [ 'background_style', 'align', 'link', 'background_color', 'custom_background_color', 'size' ] )
);

return [
	'name'                    => __( 'Left Side Stack Item', 'chargewp-timeline-addons-for-wpbakery' ),
	'base'                    => 'chargewp-left-side-stack-timeline-item',
	'class'                   => 'chargewp-left-side-stack-timeline-item',
	'description'             => __( 'Timeline item for left side stack timeline element.', 'chargewp-timeline-addons-for-wpbakery' ),
	'php_class_name'          => ChargeWpbShortcodeEmpty::class,
	'as_child'                => [ 'only' => 'chargewp-left-side-stack-timeline' ],
	'content_element'         => true,
	'show_settings_on_create' => true,
	'params'                  => array_merge(
		$params,
		[ vc_map_add_css_animation() ],
		chargewpwpbtimeline_config( 'element-params' )['shortcode-container']
	),
];
