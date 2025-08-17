<?php
/**
 * Configuration file for [chargewp_classic_horizontal_timeline] shortcode of 'Classic Horizontal Timeline' element.
 *
 * @since 1.5
 */

use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeEmpty;
use ChargewpWpbTimeline\ElementIntegration\IconIntegration;

defined( 'ABSPATH' ) || exit;

$custom_icon_integration = new IconIntegration();

$params = [
	[
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Base Line Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'base_line_color',
		'description' => esc_html__( 'Select custom color for the base line.', 'chargewp-timeline-addons-for-wpbakery' ),
		'value'       => '#D4AF37',
	],
	[
		'type'        => 'chargewp_number_slider',
		'param_name'  => 'base_line_thickness',
		'heading'     => esc_html__( 'Base Line Width', 'chargewp-timeline-addons-for-wpbakery' ),
		'description' => esc_html__( 'Set the width of the base line.', 'chargewp-timeline-addons-for-wpbakery' ),
		'title'       => 'px',
		'min'         => 1,
		'max'         => 100,
		'step'        => 1,
		'value'       => 4,
	],
];

$items_params = [
	[
		'type'        => 'dropdown',
		'value'       => [
			esc_html__( 'Circle', 'chargewp-timeline-addons-for-wpbakery' ) => 'circle',
			esc_html__( 'Square', 'chargewp-timeline-addons-for-wpbakery' ) => 'square',
		],
		'heading'     => esc_html__( 'Item Type', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'type',
		'description' => esc_html__( 'Choose item type.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
];

$items_params = array_merge(
	$items_params,
	$custom_icon_integration->add_icon_checkbox( [ 'background_style', 'align', 'link', 'background_color', 'custom_background_color' ] )
);

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
