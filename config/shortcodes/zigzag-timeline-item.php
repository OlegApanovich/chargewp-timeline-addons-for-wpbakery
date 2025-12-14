<?php
/**
 * Configuration file for [chargewp-zigzag-timeline-item] shortcode of 'Zigzag Timeline' element.
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
			'type'        => 'dropdown',
			'value'       => [
				esc_html__( 'Left', 'chargewp-timeline-addons-for-wpbakery' ) => 'left',
				esc_html__( 'Right', 'chargewp-timeline-addons-for-wpbakery' ) => 'right',
			],
			'heading'     => esc_html__( 'Position', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'position',
			'description' => esc_html__( 'Choose right or left item position for timeline item.', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'        => 'colorpicker',
			'value'       => '#F6A4EC',
			'heading'     => esc_html__( 'Decorative circle color', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'decorative_circle_color',
			'description' => esc_html__( 'Select custom color for decorative circle.', 'chargewp-timeline-addons-for-wpbakery' ),
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
			'value'            => 'Feb 2015',
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
			'value'       => '#9251AC',
			'heading'     => esc_html__( 'Date background', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name'  => 'date_background',
			'description' => esc_html__( 'Select custom color for your date field.', 'chargewp-timeline-addons-for-wpbakery' ),
		],
		[
			'type'       => 'textarea_html',
			'heading'    => esc_html__( 'Text', 'chargewp-timeline-addons-for-wpbakery' ),
			'param_name' => 'content',
			'value'      => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, nam! Nam eveniet ut aliquam ab asperiores, accusamus iure veniam corporis incidunt reprehenderit accusantium id aut architecto harum quidem dolorem in!',
		],
	],
	$custom_icon_integration->add_icon_checkbox( [ 'background_style', 'align', 'link', 'background_color', 'custom_background_color', 'size' ] )
);

return [
	'name'                    => __( 'Zigzag Timeline Item', 'chargewp-timeline-addons-for-wpbakery' ),
	'base'                    => 'chargewp-zigzag-timeline-item',
	'class'                   => 'chargewp-zigzag-timeline-item',
	'description'             => __( 'Timeline item for zigzag timeline element.', 'chargewp-timeline-addons-for-wpbakery' ),
	'php_class_name'          => ChargeWpbShortcodeEmpty::class,
	'as_child'                => [ 'only' => 'chargewp-zigzag-timeline' ],
	'content_element'         => true,
	'show_settings_on_create' => true,
	'params'                  => array_merge(
		$params,
		[ version_compare( WPB_VC_VERSION, '9.0', '<' ) ? vc_map_add_css_animation() : vc_config()->get_css_animation() ],
		chargewpwpbtimeline_config( 'element-params' )['common-bottom-params']
	),
];
