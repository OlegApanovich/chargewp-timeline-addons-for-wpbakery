<?php
/**
 * Configuration file for [chargewp_vertical_segment_timeline] shortcode of 'Vertical Segment Timeline' element.
 *
 * @since 1.0
 */

defined( 'ABSPATH' ) || exit;

$params = [
	[
		'type'        => 'colorpicker',
		'value'       => '#004ffc',
		'heading'     => esc_html__( 'Baseline Color', 'chargewp-wpbakery-timeline-addons' ),
		'param_name'  => 'baseline_background',
		'description' => esc_html__( 'Select custom color for timeline base line.', 'chargewp-wpbakery-timeline-addons' ),
	],
	[
		'type'        => 'colorpicker',
		'value'       => '#080808',
		'heading'     => esc_html__( 'Background Color', 'chargewp-wpbakery-timeline-addons' ),
		'param_name'  => 'background_color',
		'description' => esc_html__( 'Select a custom color for the whole element.', 'chargewp-wpbakery-timeline-addons' ),
	],
	[
		'type'        => 'colorpicker',
		'value'       => '#252827',
		'heading'     => esc_html__( 'Content Background Color', 'chargewp-wpbakery-timeline-addons' ),
		'param_name'  => 'content_background_color',
		'description' => esc_html__( 'Select a custom color for content part.', 'chargewp-wpbakery-timeline-addons' ),
	],
];

return [
	'name'                    => __( 'Vertical Segment Timeline', 'chargewp-wpbakery-timeline-addons' ),
	'base'                    => 'chargewp-vertical-segment-timeline',
	'icon'                    => 'chargewp-vertical-segment-timeline',
	'class'                   => 'chargewp-vertical-segment-timeline',
	'category'                => 'ChargeWP',
	'description'             => __( 'Timeline element with vertical-segment interface.', 'chargewp-wpbakery-timeline-addons' ),
	'as_parent'               => [ 'only' => 'chargewp-vertical-segment-timeline-item' ],
	'content_element'         => true,
	'default_content'         => '[chargewp-vertical-segment-timeline-item]Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/chargewp-vertical-segment-timeline-item][chargewp-vertical-segment-timeline-item]Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/chargewp-vertical-segment-timeline-item]',
	'show_settings_on_create' => true,
	'js_view'                 => 'VcColumnView',
	'params'                  => array_merge(
		$params,
		[ vc_map_add_css_animation() ],
		chargewpwpbtimeline_config( 'shortcode-container-config' )
	),
];
