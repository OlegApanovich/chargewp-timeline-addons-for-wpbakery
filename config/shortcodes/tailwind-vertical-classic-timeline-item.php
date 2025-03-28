<?php
/**
 * Configuration file for [chargewp-tailwind-vertical-classic-timeline-item] shortcode of 'Tailwind Vertical Classic Timeline' element.
 *
 * @since 1.1
 */

use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeEmpty;

defined( 'ABSPATH' ) || exit;

$params = [
    [
        'type'        => 'dropdown',
        'value'       => [
            esc_html__( 'Left', 'chargewp-timeline-addons-for-wpbakery' ) => 'left',
            esc_html__( 'Right', 'chargewp-timeline-addons-for-wpbakery' ) => 'right',
        ],
        'heading'     => esc_html__( 'Rotation', 'chargewp-timeline-addons-for-wpbakery' ),
        'param_name'  => 'rotation',
        'description' => esc_html__( 'Choose right or left item rotation for timeline item.', 'chargewp-timeline-addons-for-wpbakery' ),
    ],
];

return [
	'name'                    => __( 'Tailwind Vertical Classic Timeline', 'chargewp-timeline-addons-for-wpbakery' ),
	'base'                    => 'chargewp-tailwind-vertical-classic-timeline-item',
	'class'                   => 'chargewp-tailwind-vertical-classic-timeline-item',
	'description'             => __( 'Timeline item for "Tailwind Vertical Classic Timeline" element.', 'chargewp-timeline-addons-for-wpbakery' ),
	'php_class_name'          => ChargeWpbShortcodeEmpty::class,
	'as_child'                => [ 'only' => 'chargewp-tailwind-vertical-classic-timeline' ],
	'content_element'         => true,
	'show_settings_on_create' => true,
	'params'                  => array_merge(
		$params,
		[ vc_map_add_css_animation() ],
		chargewpwpbtimeline_config( 'shortcode-container-config' )
	),
];
