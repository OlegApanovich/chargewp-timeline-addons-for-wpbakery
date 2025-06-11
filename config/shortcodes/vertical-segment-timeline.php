<?php
/**
 * Configuration file for [chargewp_vertical_segment_timeline] shortcode of 'Vertical Segment Timeline' element.
 *
 * @since 1.0
 */

use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeContainerEmpty;

defined( 'ABSPATH' ) || exit;

$params = [
	[
		'type'        => 'colorpicker',
		'value'       => '#004ffc',
		'heading'     => esc_html__( 'Baseline Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'baseline_background',
		'description' => esc_html__( 'Select custom color for timeline base line.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
	[
		'type'        => 'colorpicker',
		'value'       => '#080808',
		'heading'     => esc_html__( 'Background Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'background_color',
		'description' => esc_html__( 'Select a custom color for the whole element.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
	[
		'type'        => 'colorpicker',
		'value'       => '#252827',
		'heading'     => esc_html__( 'Content Background Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'content_background_color',
		'description' => esc_html__( 'Select a custom color for content part.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
];

return [
	'name'                    => __( 'Vertical Segment Timeline', 'chargewp-timeline-addons-for-wpbakery' ),
	'base'                    => 'chargewp-vertical-segment-timeline',
	'icon'                    => CHARGEWPWPBTIMELINE_ASSETS_URI . '/images/shortcodes/icons/vertical-segment-timeline.svg',
	'class'                   => 'chargewp-vertical-segment-timeline',
	'category'                => 'ChargeWP',
	'description'             => __( 'Timeline element with vertical-segment interface.', 'chargewp-timeline-addons-for-wpbakery' ),
	'php_class_name'          => ChargeWpbShortcodeContainerEmpty::class,
	'as_parent'               => [ 'only' => 'chargewp-vertical-segment-timeline-item' ],
	'content_element'         => true,
	'default_content'         => '[chargewp-vertical-segment-timeline-item]Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/chargewp-vertical-segment-timeline-item][chargewp-vertical-segment-timeline-item]Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.[/chargewp-vertical-segment-timeline-item]',
	'show_settings_on_create' => true,
	'params'                  => array_merge(
		$params,
		[ vc_map_add_css_animation() ],
		chargewpwpbtimeline_config( 'shortcode-container-config' )
	),
];
