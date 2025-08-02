<?php
/**
 * Configuration file for [chargewp_bottom_horizontal_timeline] shortcode of 'Bottom Horizontal Timeline' element.
 *
 * @since 1.3
 */

use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeEmpty;

defined( 'ABSPATH' ) || exit;

$params = [
    [
        'type'        => 'colorpicker',
        'heading'     => esc_html__( 'Base Line Color', 'chargewp-timeline-addons-for-wpbakery' ),
        'param_name'  => 'base_line_color',
        'description' => esc_html__( 'Select custom color for the base line.', 'chargewp-timeline-addons-for-wpbakery' ),
        'value'       => '#e5e7eb',
    ],
    [
        'type'        => 'chargewp_number_slider',
        'param_name'  => 'base_line_thickness',
        'heading' => esc_html__( 'Base Line Width', 'chargewp-timeline-addons-for-wpbakery' ),
        'description' => esc_html__( 'Set the width of the base line.', 'chargewp-timeline-addons-for-wpbakery' ),
        'title' => 'px',
        'min' => 1,
        'max' => 50,
        'step' => 1,
        'value' => 2,
    ],
    [
        'type'        => 'chargewp_number_slider',
        'param_name'  => 'base_line_height',
        'heading' => esc_html__( 'Base Line Height', 'chargewp-timeline-addons-for-wpbakery' ),
        'description' => esc_html__( 'Set the height of the base line to adjust the vertical position of it.', 'chargewp-timeline-addons-for-wpbakery' ),
        'title' => 'px',
        'min' => -30,
        'max' => 30,
        'step' => 1,
        'value' => 25,
    ],
];

return [
	'name'                    => __( 'Bottom Horizontal Timeline', 'chargewp-timeline-addons-for-wpbakery' ),
	'base'                    => 'chargewp-bottom-horizontal-timeline',
	'icon'                    => CHARGEWPWPBTIMELINE_ASSETS_URI . '/images/shortcodes/icons/bottom-horizontal-timeline.svg',
	'class'                   => 'chargewp-bottom-horizontal-timeline',
	'category'                => 'ChargeWP',
	'description'             => __( 'Bottom Horizontal Timeline. Pure CSS.', 'chargewp-timeline-addons-for-wpbakery' ),
	'php_class_name'          => ChargeWpbShortcodeEmpty::class,
	'show_settings_on_create' => true,
	'params'                  => array_merge(
		$params,
		[ vc_map_add_css_animation() ],
		chargewpwpbtimeline_config( 'element-params' )['common-bottom-params']
	),
];
