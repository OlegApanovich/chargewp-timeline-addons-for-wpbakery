<?php
/**
 * Configuration file for [chargewp_left_side_vertical_slider_timeline] shortcode of 'Left Side Vertical Slider Timeline' element.
 *
 * @since 1.0
 */

use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeContainerEmpty;

defined( 'ABSPATH' ) || exit;

$params = [
    
];

return [
	'name'                    => __( 'Left Side Vertical Slider Timeline', 'chargewp-timeline-addons-for-wpbakery' ),
	'base'                    => 'chargewp-left-side-vertical-slider-timeline',
	'icon'                    => CHARGEWPWPBTIMELINE_ASSETS_URI . '/images/shortcodes/icons/left-side-vertical-slider-timeline.svg',
	'class'                   => 'chargewp-left-side-vertical-slider-timeline',
	'category'                => 'ChargeWP',
	'description'             => __( 'Timeline element with vertical left side slider interface.', 'chargewp-timeline-addons-for-wpbakery' ),
	'php_class_name'          => ChargeWpbShortcodeContainerEmpty::class,
	'as_parent'               => [ 'only' => 'chargewp-left-side-vertical-slider-timeline-item' ],
	'content_element'         => true,
	'show_settings_on_create' => true,
	'js_view'                 => 'VcColumnView',
	'params'                  => array_merge(
		$params,
		[ vc_map_add_css_animation() ],
		chargewpwpbtimeline_config( 'shortcode-container-config' )
	),
];
