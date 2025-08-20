<?php
/**
 * Configuration file for [chargewp_classic_horizontal_timeline] shortcode of 'Classic Horizontal Timeline' element.
 *
 * @since 1.5
 */

use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeEmpty;
use ChargewpWpbTimeline\ElementIntegration\IconIntegration;

defined( 'ABSPATH' ) || exit;

$params = [
	[
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Base Line Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'base_line_color',
		'description' => esc_html__( 'Select custom color for the base line.', 'chargewp-timeline-addons-for-wpbakery' ),
		'value'       => '#e74c3c',
	],
	[
		'type'        => 'chargewp_number_slider',
		'param_name'  => 'base_line_thickness',
		'heading'     => esc_html__( 'Base Line Width', 'chargewp-timeline-addons-for-wpbakery' ),
		'description' => esc_html__( 'Set the width of the base line.', 'chargewp-timeline-addons-for-wpbakery' ),
		'title'       => 'px',
		'min'         => 0,
		'max'         => 100,
		'step'        => 0.5,
		'value'       => 2,
	],
	[
		'type'        => 'chargewp_number',
		'min'         => '1',
		'value'       => '300',
		'step'        => '1',
		'title'       => 'px',
		'heading'     => esc_html__( 'Timeline Height', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'timeline_height',
		'description' => esc_html__( 'Set heigh for the whole timeline block.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
];

$items_params = [
	[
		'type'        => 'dropdown',
		'value'       => [
			esc_html__( 'Top', 'chargewp-timeline-addons-for-wpbakery' ) => 'top',
			esc_html__( 'Bottom', 'chargewp-timeline-addons-for-wpbakery' ) => 'bottom',
		],
		'heading'     => esc_html__( 'Position', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'position',
		'description' => esc_html__( 'Choose item potion relative to the base line.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
	[
		'type'              => 'chargewp_divider',
		'param_name'        => 'divider_item_text',
		'title'             => __( 'Marker', 'chargewp-timeline-addons-for-wpbakery' ),
		'title_description' => __( 'Set options for the timeline item marker.', 'chargewp-timeline-addons-for-wpbakery' ),
		'color'             => '#3e73c6',
	],
	[
		'type'        => 'dropdown',
		'wcp_group'   => true,
		'value'       => [
			esc_html__( 'Circle', 'chargewp-timeline-addons-for-wpbakery' ) => 'circle',
			esc_html__( 'Square', 'chargewp-timeline-addons-for-wpbakery' ) => 'square',
		],
		'heading'     => esc_html__( 'Type', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'type',
		'description' => esc_html__( 'Choose marker type.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
	[
		'type'        => 'chargewp_number_slider',
		'wcp_group'   => true,
		'param_name'  => 'size',
		'heading'     => esc_html__( 'Size', 'chargewp-timeline-addons-for-wpbakery' ),
		'description' => esc_html__( 'Set marker size in pixels.', 'chargewp-timeline-addons-for-wpbakery' ),
		'title'       => 'px',
		'min'         => 0,
		'max'         => 200,
		'step'        => 1,
		'value'       => 20,
	],
	[
		'type'        => 'colorpicker',
		'wcp_group'   => true,
		'heading'     => esc_html__( 'Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'marker_color',
		'description' => esc_html__( 'Select custom color for item background.', 'chargewp-timeline-addons-for-wpbakery' ),
		'value'       => '#e74c3c',
	],
	[
		'type'              => 'chargewp_divider',
		'param_name'        => 'divider_item_text',
		'title'             => __( 'Content Block', 'chargewp-timeline-addons-for-wpbakery' ),
		'title_description' => __( 'Set options for the timeline item content block.', 'chargewp-timeline-addons-for-wpbakery' ),
		'color'             => '#B8860B',
	],
	[
		'type'            => 'chargewp_number_slider',
		'wcp_group'       => true,
		'wcp_group_color' => '#B8860B',
		'param_name'      => 'vertical_align',
		'heading'         => esc_html__( 'Vertical Alignment', 'chargewp-timeline-addons-for-wpbakery' ),
		'description'     => esc_html__( 'Align content block vertically relative to the baseline.', 'chargewp-timeline-addons-for-wpbakery' ),
		'title'           => 'px',
		'min'             => -150,
		'max'             => 150,
		'step'            => 1,
		'value'           => 40,
	],
	[
		'type'            => 'chargewp_number_slider',
		'wcp_group'       => true,
		'wcp_group_color' => '#B8860B',
		'param_name'      => 'content_width',
		'heading'         => esc_html__( 'Width', 'chargewp-timeline-addons-for-wpbakery' ),
		'description'     => esc_html__( 'Set content block width in pixels.', 'chargewp-timeline-addons-for-wpbakery' ),
		'title'           => 'px',
		'min'             => 0,
		'step'            => 1,
		'value'           => 200,
	],
	[
		'type'            => 'colorpicker',
		'wcp_group'       => true,
		'wcp_group_color' => '#B8860B',
		'heading'         => esc_html__( 'Background Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'      => 'content_background_color',
		'description'     => esc_html__( 'Set custom background color for the content block.', 'chargewp-timeline-addons-for-wpbakery' ),
		'value'           => '#ffffff',
	],
	[
		'type'            => 'chargewp_switcher',
		'wcp_group'       => true,
		'wcp_group_color' => '#B8860B',
		'param_name'      => 'is_content_border',
		'heading'         => esc_html__( 'Enable Border', 'chargewp-timeline-addons-for-wpbakery' ),
		'description'     => esc_html__( 'Enable content border.', 'chargewp-timeline-addons-for-wpbakery' ),
		'options'         => [
			'true' => [
				'label' => '',
				'on'    => __( 'Yes', 'chargewp-timeline-addons-for-wpbakery' ),
				'off'   => __( 'No', 'chargewp-timeline-addons-for-wpbakery' ),
			],
		],
		'value'           => 'true',
	],
	[
		'type'            => 'chargewp_number_slider',
		'wcp_group'       => true,
		'wcp_group_color' => '#B8860B',
		'param_name'      => 'content_border_radius',
		'heading'         => esc_html__( 'Border Radius', 'chargewp-timeline-addons-for-wpbakery' ),
		'description'     => esc_html__( 'Set border radius in pixels.', 'chargewp-timeline-addons-for-wpbakery' ),
		'title'           => 'px',
		'min'             => 0,
		'step'            => 1,
		'value'           => 8,
		'dependency'      => [
			'element' => 'is_content_border',
			'value'   => 'true',
		],
	],
	[
		'type'            => 'dropdown',
		'wcp_group'       => true,
		'wcp_group_color' => '#B8860B',
		'value'           => [
			esc_html__( 'Shadow', 'chargewp-timeline-addons-for-wpbakery' ) => 'shadow',
			esc_html__( 'Solid', 'chargewp-timeline-addons-for-wpbakery' ) => 'Solid',
			esc_html__( 'Dotted', 'chargewp-timeline-addons-for-wpbakery' ) => 'dotted',
			esc_html__( 'Dashed', 'chargewp-timeline-addons-for-wpbakery' ) => 'dashed',
		],
		'heading'         => esc_html__( 'Border Type', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'      => 'content_border_type',
		'description'     => esc_html__( 'Choose item potion relative to the base line.', 'chargewp-timeline-addons-for-wpbakery' ),
		'dependency'      => [
			'element' => 'is_content_border',
			'value'   => 'true',
		],
	],
	[
		'type'            => 'colorpicker',
		'wcp_group'       => true,
		'wcp_group_color' => '#B8860B',
		'heading'         => esc_html__( 'Border Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'      => 'content_border_color',
		'description'     => esc_html__( 'Set custom border color for the content block.', 'chargewp-timeline-addons-for-wpbakery' ),
		'value'           => '#0000001A',
		'dependency'      => [
			'element' => 'is_content_border',
			'value'   => 'true',
		],
	],
	[
		'type'            => 'chargewp_number_slider',
		'wcp_group'       => true,
		'wcp_group_color' => '#B8860B',
		'param_name'      => 'content_border_size',
		'heading'         => esc_html__( 'Border Size', 'chargewp-timeline-addons-for-wpbakery' ),
		'description'     => esc_html__( 'Set border size in pixels.', 'chargewp-timeline-addons-for-wpbakery' ),
		'title'           => 'px',
		'min'             => 0,
		'max'             => 100,
		'step'            => 1,
		'value'           => 1,
		'dependency'      => [
			'element' => 'is_content_border',
			'value'   => 'true',
		],
	],
];

$items = [
	[
		'type'       => 'param_group',
		'group'      => esc_html__( 'Timeline Items', 'chargewp-timeline-addons-for-wpbakery' ),
		'heading'    => esc_html__( 'Timeline Items', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name' => 'items',
		'params'     => $items_params,
	],
];

return [
	'name'                    => __( 'Classic Horizontal Timeline', 'chargewp-timeline-addons-for-wpbakery' ),
	'base'                    => 'chargewp-classic-horizontal-timeline',
	'icon'                    => CHARGEWPWPBTIMELINE_ASSETS_URI . '/images/shortcodes/icons/classic-horizontal-timeline.svg',
	'class'                   => 'chargewp-classic-horizontal-timeline',
	'category'                => 'ChargeWP',
	'description'             => __( 'Classic Horizontal Timeline. Pure CSS.', 'chargewp-timeline-addons-for-wpbakery' ),
	'php_class_name'          => ChargeWpbShortcodeEmpty::class,
	'show_settings_on_create' => true,
	'params'                  => array_merge(
		$params,
		$items,
		[ vc_map_add_css_animation() ],
		chargewpwpbtimeline_config( 'element-params' )['common-bottom-params']
	),
];
