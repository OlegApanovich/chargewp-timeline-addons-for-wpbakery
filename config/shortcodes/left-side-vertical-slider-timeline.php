<?php
/**
 * Configuration file for [chargewp_left_side_vertical_slider_timeline] shortcode of 'Left Side Vertical Slider Timeline' element.
 *
 * @since 1.0
 */

use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeContainerEmpty;

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
		'type'        => 'colorpicker',
		'value'       => '#cccccc',
		'heading'     => esc_html__( 'Baseline Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'baseline_color',
		'description' => esc_html__( 'Select custom color for timeline base line.', 'chargewp-timeline-addons-for-wpbakery' ),
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
