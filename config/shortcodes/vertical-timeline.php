<?php
/**
 * Configuration file for [wpb_plus_vertical_timeline] shortcode of 'Vertical Timeline' element.
 *
 * @since 1.0
 */

defined( 'ABSPATH' ) || exit;

return array(
	'name'                    => __( 'Vertical Timeline', 'wpbakery-plus-timeline-element' ),
	'base'                    => 'wpbakery-plus-vertical-timeline',
	'class'                   => 'wpbakery-plus-vertical-timeline',
	'category'                => 'Content',
	'description'             => __( 'Timeline element with vertical interface.', 'wpbakery-plus-timeline-element' ),
	'as_parent'               => array( 'only' => 'vc_gmaps' ),
	'content_element'         => true,
	'show_settings_on_create' => true,
	'params'                  => array(),
	'js_view'                 => 'VcColumnView',
);
