<?php
/**
 * Configuration file for [wpb_plus_vertical_segment_timeline] shortcode of 'Vertical Segment Timeline' element.
 *
 * @since 1.0
 */

defined( 'ABSPATH' ) || exit;

$params = [
	[
		'type'        => 'colorpicker',
		'value'       => '#004ffc',
		'heading'     => esc_html__( 'Baseline Color', 'charge-wp-builder-wpbakery-timeline-elements' ),
		'param_name'  => 'baseline_background',
		'description' => esc_html__( 'Select custom color for timeline base line.', 'charge-wp-builder-wpbakery-timeline-elements' ),
	],
	[
		'type'        => 'colorpicker',
		'value'       => '#080808',
		'heading'     => esc_html__( 'Background Color', 'charge-wp-builder-wpbakery-timeline-elements' ),
		'param_name'  => 'background_color',
		'description' => esc_html__( 'Select a custom color for the whole element.', 'charge-wp-builder-wpbakery-timeline-elements' ),
	],
	[
		'type'        => 'colorpicker',
		'value'       => '#252827',
		'heading'     => esc_html__( 'Content Background Color', 'charge-wp-builder-wpbakery-timeline-elements' ),
		'param_name'  => 'content_background_color',
		'description' => esc_html__( 'Select a custom color for content part.', 'charge-wp-builder-wpbakery-timeline-elements' ),
	],
];

return [
	'name'                    => __( 'Vertical Segment Timeline', 'charge-wp-builder-wpbakery-timeline-elements' ),
	'base'                    => 'wpbakery-plus-vertical-segment-timeline',
	'icon'                    => 'wpbakery-plus-vertical-segment-timeline',
	'class'                   => 'wpbakery-plus-vertical-segment-timeline',
	'category'                => 'Plus Timeline',
	'description'             => __( 'Timeline element with vertical-segment interface.', 'charge-wp-builder-wpbakery-timeline-elements' ),
	'as_parent'               => [ 'only' => 'wpbakery-plus-vertical-segment-timeline-item' ],
	'content_element'         => true,
	'default_content'         => '[wpbakery-plus-vertical-segment-timeline-item]Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/wpbakery-plus-vertical-segment-timeline-item][wpbakery-plus-vertical-segment-timeline-item]Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/wpbakery-plus-vertical-segment-timeline-item]',
	'show_settings_on_create' => true,
	'js_view'                 => 'VcColumnView',
	'params'                  => array_merge(
		$params,
		[ vc_map_add_css_animation() ],
		wpbplustimeline_config( 'shortcode-container-config' )
	),
];
