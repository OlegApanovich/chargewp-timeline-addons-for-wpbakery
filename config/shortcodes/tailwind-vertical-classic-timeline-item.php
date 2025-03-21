<?php
/**
 * Configuration file for [chargewp-tailwind-vertical-classic-timeline-item] shortcode of 'Tailwind Vertical Classic Timeline' element.
 *
 * @since 1.1
 */

use ChargewpWpbTimeline\CustomHeadingIntegration;
use ChargewpWpbTimeline\CustomIconIntegration;
use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeEmpty;

defined( 'ABSPATH' ) || exit;

$custom_heading_integration = new CustomHeadingIntegration();
$custom_icon_integration    = new CustomIconIntegration();

$params = [];

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
