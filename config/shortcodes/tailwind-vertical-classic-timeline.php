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
		'type'        => 'chargewp-number',
		'value'       => '1',
		'min'         => '0.5',
		'max'         => '10',
		'step'        => '0.5',
		'heading'     => esc_html__( 'Baseline Width', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'baseline_width',
		'description' => esc_html__( 'Set custom width from 0 to 10 for timeline base line.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
];

$params = array_merge(
    $params,
    [ vc_map_add_css_animation() ],
    chargewpwpbtimeline_config( 'shortcode-container-config' )
);

$params[] = [
    'type'       => 'chargewp-notice',
    'level'      => 'warning',
    'notice'     => '<b>The Tailwind environment apply additional preflight CSS to element, it can affect some text and containers that you use inside element. <a href="https://tailwindcss.com/docs/preflight" target="_blank"> Please check which html elements can be affected<a></a></b>',
    'param_name' => 'tailwind_notice',
];

return [
	'name'                    => __( 'Tailwind Vertical Classic Timeline', 'chargewp-timeline-addons-for-wpbakery' ),
	'base'                    => 'chargewp-tailwind-vertical-classic-timeline',
	'icon'                    => 'chargewp-tailwind-vertical-classic-timeline',
	'class'                   => 'chargewp-tailwind-vertical-classic-timeline',
	'category'                => 'ChargeWP',
	'description'             => __( 'Timeline element with base on tailwind css framework with classic vertical interface.', 'chargewp-timeline-addons-for-wpbakery' ),
	'php_class_name'          => ChargeWpbShortcodeContainerEmpty::class,
	'as_parent'               => [ 'only' => 'chargewp-tailwind-vertical-classic-timeline-item' ],
	'content_element'         => true,
	'show_settings_on_create' => true,
	'default_content'         => '[chargewp-tailwind-vertical-classic-timeline-item marker_type="square" marker_rotation_degree="45" date="Feb 2023" title="Visual Storytelling" image_source="external_link" image_rounded="none" image_shadow="none" image_fit="cover" image_custom_src="https://images.unsplash.com/photo-1516116216624-53e697fedbea"]The art of visual narrative reaches new heights with immersive technologies and creative direction.[/chargewp-tailwind-vertical-classic-timeline-item][chargewp-tailwind-vertical-classic-timeline-item rotation="right" marker_border_type="4" marker_width="50" marker_height="50" marker_rotation_degree="45" i_type="openiconic" i_icon_openiconic="vc-oi vc-oi-target" i_color="custom" date="Feb 2024" title="Print Evolution" image_source="external_link" image_rounded="none" image_shadow="none" image_fit="cover" add_icon="true" i_custom_color="#A4A4A4" image_custom_src="https://images.unsplash.com/photo-1542744094-24638eff58bb"]Traditional print media adapts to modern demands while maintaining its timeless appeal.[/chargewp-tailwind-vertical-classic-timeline-item][chargewp-tailwind-vertical-classic-timeline-item marker_type="square" marker_rotation_degree="45" date="Feb 2025" title="Digital Renaissance" image_source="external_link" image_rounded="md" image_shadow="md" image_fit="cover" image_custom_src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0"]The emergence of revolutionary digital platforms transforms modern journalism and storytelling methods.[/chargewp-tailwind-vertical-classic-timeline-item]',
	'js_view'                 => 'VcColumnView',
	'params'                  => $params,
];
