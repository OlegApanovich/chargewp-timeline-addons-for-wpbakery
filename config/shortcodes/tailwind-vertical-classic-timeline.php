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
		'type'        => 'colorpicker',
		'value'       => '#cccccc',
		'heading'     => esc_html__( 'Baseline Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'baseline_background',
		'description' => esc_html__( 'Select custom color for timeline base line.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
	[
		'type'        => 'chargewp_number_slider',
		'value'       => '0.5',
		'min'         => '0.5',
		'max'         => '10',
		'step'        => '0.5',
		'heading'     => esc_html__( 'Baseline Width', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'baseline_width',
		'description' => esc_html__( 'Set custom width from 0 to 10 for timeline base line.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
];

return [
	'name'                    => __( 'Tailwind Vertical Classic Timeline', 'chargewp-timeline-addons-for-wpbakery' ),
	'base'                    => 'chargewp-tailwind-vertical-classic-timeline',
	'icon'                    => CHARGEWPWPBTIMELINE_ASSETS_URI . '/images/shortcodes/icons/tailwind-vertical-classic-timeline.svg',
	'class'                   => 'chargewp-tailwind-vertical-classic-timeline',
	'category'                => 'ChargeWP',
	'description'             => __( 'Timeline element with base on tailwind css framework with classic vertical interface.', 'chargewp-timeline-addons-for-wpbakery' ),
	'php_class_name'          => ChargeWpbShortcodeContainerEmpty::class,
	'as_parent'               => [ 'only' => 'chargewp-tailwind-vertical-classic-timeline-item' ],
	'content_element'         => true,
	'show_settings_on_create' => true,
	'js_view'                 => 'VcColumnView',
	'default_content'         => '[chargewp-tailwind-vertical-classic-timeline-item marker_type="square" marker_rotation_degree="45" date="2024" title="Digital Renaissance" image_source="external_link" image_rounded="lg" image_shadow="none" image_fit="cover" image_custom_src="https://images.unsplash.com/photo-1516116216624-53e697fedbea?q=30"]The emergence of revolutionary digital platforms transforms modern journalism and storytelling methods.[/chargewp-tailwind-vertical-classic-timeline-item][chargewp-tailwind-vertical-classic-timeline-item rotation="right" marker_width="52" marker_height="50" i_color="grey" date="2025" title="Print Evolution" image_source="external_link" image_rounded="lg" image_shadow="none" image_fit="cover" image_rotation_degree="3" add_icon="true" image_negative_rotation_degree="true" marker_border_hover_color="#EEEE223B" marker_background_hover_color="#EEEE223D" image_custom_src="https://images.unsplash.com/photo-1542744094-24638eff58bb?q=30"]Traditional print media adapts to modern demands while maintaining its timeless appeal.[/chargewp-tailwind-vertical-classic-timeline-item][chargewp-tailwind-vertical-classic-timeline-item marker_type="square" marker_rotation_degree="45" date="2026" title="Visual Storytelling" image_source="external_link" image_rounded="lg" image_shadow="none" image_fit="cover" image_custom_src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=30"]The art of visual narrative reaches new heights with immersive technologies and creative direction.[/chargewp-tailwind-vertical-classic-timeline-item]',
	'params'                  => array_merge(
		$params,
		[ vc_map_add_css_animation() ],
		chargewpwpbtimeline_config( 'element-params' )['common-bottom-params']
	),
];
