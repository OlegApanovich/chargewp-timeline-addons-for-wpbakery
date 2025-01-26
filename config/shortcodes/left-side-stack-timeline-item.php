<?php
/**
 * Configuration file for [chargewp-left-side-stack-item] shortcode of 'Left Side Stack Item' element.
 *
 * @since 1.0
 */

use ChargewpWpbTimeline\CustomHeadingIntegration;
use ChargewpWpbTimeline\CustomIconIntegration;

defined( 'ABSPATH' ) || exit;

$custom_heading_integration = new CustomHeadingIntegration();
$custom_icon_integration    = new CustomIconIntegration();

$params = array_merge(
	[
		[
			'type'             => 'textfield',
			'value'            => 'Lorem ipsum.',
			'heading'          => esc_html__( 'Title', 'chargewp-wpbakery-timeline-addons' ),
			'admin_label'      => true,
			'param_name'       => 'title',
			'description'      => esc_html__( 'Enter text for title line.', 'chargewp-wpbakery-timeline-addons' ),
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
			'type'        => 'colorpicker',
			'value'       => '#1d8cf8',
			'heading'     => esc_html__( 'Title background color', 'chargewp-wpbakery-timeline-addons' ),
			'param_name'  => 'title_background_color',
			'description' => esc_html__( 'Select custom color for title background.', 'chargewp-wpbakery-timeline-addons' ),
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#1d8cf8',
			'heading'     => esc_html__( 'Circle color', 'chargewp-wpbakery-timeline-addons' ),
			'param_name'  => 'circle_color',
			'description' => esc_html__( 'Select custom color for circle.', 'chargewp-wpbakery-timeline-addons' ),
		],
		[
			'type'             => 'textfield',
			'value'            => '1 Hours Ago',
			'heading'          => esc_html__( 'Date', 'chargewp-wpbakery-timeline-addons' ),
			'admin_label'      => true,
			'param_name'       => 'date',
			'description'      => esc_html__( 'Initially, it was designed as a date field, but you can use it as a regular text as well. ', 'chargewp-wpbakery-timeline-addons' ),
			'edit_field_class' => 'vc_col-sm-9',
		],
		[
			'type'             => 'checkbox',
			'heading'          => esc_html__( 'Use custom font?', 'chargewp-wpbakery-timeline-addons' ),
			'param_name'       => 'use_custom_fonts_date',
			'description'      => esc_html__( 'Enable custom font option.', 'chargewp-wpbakery-timeline-addons' ),
			'edit_field_class' => 'vc_col-sm-3',
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#27293d',
			'heading'     => esc_html__( 'Item background color', 'chargewp-wpbakery-timeline-addons' ),
			'param_name'  => 'item_background_color',
			'description' => esc_html__( 'Select custom color for item background.', 'chargewp-wpbakery-timeline-addons' ),
		],
	],
	$custom_heading_integration->add_custom_font_to_field( 'date', 'Date', [ 'exclude' => [ 'source', 'text', 'css' ] ], [ 'tag', 'text_align' ] ),
	[
		[
			'type'       => 'textarea_html',
			'heading'    => esc_html__( 'Text', 'chargewp-wpbakery-timeline-addons' ),
			'param_name' => 'content',
			'value'      => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam necessitatibus numquam earum ipsa fugiat veniam suscipit, officiis repudiandae, eum recusandae neque dignissimos. Cum fugit laboriosam culpa, repellendus esse commodi deserunt.',
		],
	],
	$custom_icon_integration->add_icon_checkbox( [ 'background_style', 'align', 'link', 'background_color', 'custom_background_color', 'size' ] )
);

return [
	'name'                    => __( 'Left Side Stack Item', 'chargewp-wpbakery-timeline-addons' ),
	'base'                    => 'chargewp-left-side-stack-timeline-item',
	'class'                   => 'chargewp-left-side-stack-timeline-item',
	'description'             => __( 'Timeline item for left side stack timeline element.', 'chargewp-wpbakery-timeline-addons' ),
	'as_child'                => [ 'only' => 'chargewp-left-side-stack-timeline' ],
	'content_element'         => true,
	'show_settings_on_create' => true,
	'js_view'                 => 'VcColumnView',
	'params'                  => array_merge(
		$params,
		[ vc_map_add_css_animation() ],
		chargewpwpbtimeline_config( 'shortcode-container-config' )
	),
];
