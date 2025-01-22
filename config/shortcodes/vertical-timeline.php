<?php
/**
 * Configuration file for [wpb_plus_vertical_timeline] shortcode of 'Vertical Timeline' element.
 *
 * @since 1.0
 */

defined( 'ABSPATH' ) || exit;

return [
	'name'                    => __( 'Vertical Timeline', 'chargewp-wpbakery-timeline-addons' ),
	'base'                    => 'wpbakery-plus-vertical-timeline',
	'icon'                    => 'wpbakery-plus-vertical-timeline',
	'class'                   => 'wpbakery-plus-vertical-timeline',
	'category'                => 'Plus Timeline',
	'description'             => __( 'Timeline element with vertical interface.', 'chargewp-wpbakery-timeline-addons' ),
	'as_parent'               => [ 'only' => 'wpbakery-plus-vertical-timeline-item' ],
	'content_element'         => true,
	'default_content'         => '[wpbakery-plus-vertical-timeline-item position="left"]Lorem ipsum Nisi labore aute do aute culpa magna nulla voluptate exercitation deserunt proident.[/wpbakery-plus-vertical-timeline-item][wpbakery-plus-vertical-timeline-item]Lorem ipsum Nisi labore aute do aute culpa magna nulla voluptate exercitation deserunt proident.[/wpbakery-plus-vertical-timeline-item]',
	'show_settings_on_create' => true,
	'js_view'                 => 'VcColumnView',
	'params'                  => array_merge(
		[ vc_map_add_css_animation() ],
		wpbplustimeline_config( 'shortcode-container-config' )
	),
];
