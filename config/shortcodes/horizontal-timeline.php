<?php
/**
 * Configuration file for [wpb_plus_horizontal_timeline] shortcode of 'Horizontal Timeline' element.
 *
 * @since 1.0
 */

defined( 'ABSPATH' ) || exit;

return [
	'name'                            => __( 'Horizontal Timeline', 'wpbakery-plus-timeline-element' ),
	'base'                            => 'wpbakery-plus-horizontal-timeline',
	'class'                           => 'wpbakery-plus-horizontal-timeline',
	'category'                        => 'Plus Timeline',
	'description'                     => __( 'Timeline element with horizontal interface.', 'wpbakery-plus-timeline-element' ),
	'as_parent'                       => [ 'only' => 'wpbakery-plus-horizontal-timeline-item' ],
	'content_element'                 => true,
	// 'default_content'         => '',
			'show_settings_on_create' => true,
	'js_view'                         => 'VcColumnView',
	'params'                          => array_merge(
		[ vc_map_add_css_animation() ],
		wpbplustimeline_config( 'shortcode-container-config' )
	),
];
