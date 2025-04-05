<?php
/**
 * Configuration file for [tailwind_vertical_classic_timeline] shortcode of 'Tailwind Vertical Classic Timeline' element.
 *
 * @since 1.1
 */

use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeContainerEmpty;

defined( 'ABSPATH' ) || exit;

$params = [
	[
		'type'        => 'chargewp-notice',
	    'level'       => 'warning',
	    'notice'      => '<b>The Tailwind environment may apply additional CSS styles to the entire current page, not just the current element. Please check the page output after using Tailwind elements.</b>',
        'param_name'  => 'tailwind_notice',
	],
	[
		'type'        => 'colorpicker',
		'value'       => '#cccccc',
		'heading'     => esc_html__( 'Baseline Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'baseline_background',
		'description' => esc_html__( 'Select custom color for timeline base line.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
	[
		'type'        => 'chargewp-number',
		'value'       => '1',
		'min'         => '0',
		'max'         => '10',
		'step'        => '1',
		'heading'     => esc_html__( 'Baseline Width', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'baseline_width',
		'description' => esc_html__( 'Set custom width from 0 to 10 for timeline base line.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
];

return [
	'name'                            => __( 'Tailwind Vertical Classic Timeline', 'chargewp-timeline-addons-for-wpbakery' ),
	'base'                            => 'chargewp-tailwind-vertical-classic-timeline',
	'icon'                            => 'chargewp-tailwind-vertical-classic-timeline',
	'class'                           => 'chargewp-tailwind-vertical-classic-timeline',
	'category'                        => 'ChargeWP',
	'description'                     => __( 'Timeline element with base on tailwind css framework with classic vertical interface.', 'chargewp-timeline-addons-for-wpbakery' ),
	'php_class_name'                  => ChargeWpbShortcodeContainerEmpty::class,
	'as_parent'                       => [ 'only' => 'chargewp-tailwind-vertical-classic-timeline-item' ],
	'content_element'                 => true,
	// 'default_content'         => '',
			'show_settings_on_create' => true,
	'js_view'                         => 'VcColumnView',
	'params'                          => array_merge(
		$params,
		[ vc_map_add_css_animation() ],
		chargewpwpbtimeline_config( 'shortcode-container-config' )
	),
];
