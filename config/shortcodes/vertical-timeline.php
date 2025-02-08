<?php
/**
 * Configuration file for [chargewp_vertical_timeline] shortcode of 'Vertical Timeline' element.
 *
 * @since 1.0
 */

use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeContainerEmpty;

defined( 'ABSPATH' ) || exit;

return [
	'name'                    => __( 'Vertical Timeline', 'chargewp-timeline-addons-for-wpbakery' ),
	'base'                    => 'chargewp-vertical-timeline',
	'icon'                    => 'chargewp-vertical-timeline',
	'class'                   => 'chargewp-vertical-timeline',
	'category'                => 'ChargeWP',
	'description'             => __( 'Timeline element with vertical interface.', 'chargewp-timeline-addons-for-wpbakery' ),
	'php_class_name'          => ChargeWpbShortcodeContainerEmpty::class,
	'as_parent'               => [ 'only' => 'chargewp-vertical-timeline-item' ],
	'content_element'         => true,
	'default_content'         => '[chargewp-vertical-timeline-item position="left"]Lorem ipsum Nisi labore aute do aute culpa magna nulla voluptate exercitation deserunt proident.[/chargewp-vertical-timeline-item][chargewp-vertical-timeline-item]Lorem ipsum Nisi labore aute do aute culpa magna nulla voluptate exercitation deserunt proident.[/chargewp-vertical-timeline-item]',
	'show_settings_on_create' => true,
	'js_view'                 => 'VcColumnView',
	'params'                  => array_merge(
		[ vc_map_add_css_animation() ],
		chargewpwpbtimeline_config( 'shortcode-container-config' )
	),
];
