<?php
/**
 * Configuration file for [chargewp_bottom_horizontal_timeline] shortcode of 'Bottom Horizontal Timeline' element.
 *
 * @since 1.3
 */

use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeEmpty;

defined( 'ABSPATH' ) || exit;

$params = [

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
