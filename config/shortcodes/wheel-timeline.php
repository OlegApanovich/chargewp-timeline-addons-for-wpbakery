<?php
/**
 * Configuration file for [chargewp_wheel_timeline] shortcode of 'Wheel Timeline' element.
 *
 * @since 1.3
 */

use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeEmpty;

defined( 'ABSPATH' ) || exit;

$params = [
	[
		'type'       => 'param_group',
		'group'      => esc_html__( 'Timeline Items', 'chargewp-timeline-addons-for-wpbakery' ),
		'heading'    => esc_html__( 'Timeline Items', 'chargewp-timeline-addons-for-wpbakery' ),
		'value'      => '%5B%7B%22image_source%22%3A%22external_link%22%2C%22image_custom_src%22%3A%22https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fb%2Fb0%2FCassovia_Retro_2019_02.jpg%22%2C%22date%22%3A%221964%22%2C%22date_active_color%22%3A%22%23ffcc00%22%2C%22date_color%22%3A%22%23cccccc%22%2C%22content%22%3A%22%3Cp%3EBorn%20to%20Roam%3A%20The%20Golden%20Era%20Begins%3C%2Fp%3E%22%2C%22marker_color%22%3A%22%23DD9933%22%2C%22marker_border_color%22%3A%22%23F69400%22%2C%22marker_size%22%3A%2212%22%7D%2C%7B%22image_source%22%3A%22external_link%22%2C%22image_custom_src%22%3A%22https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Ff%2Ff0%2F2010_LTI_TX4_Gold%252C_Berlin_London_cab_front_right.jpg%22%2C%22date%22%3A%221974%22%2C%22date_active_color%22%3A%22%23ffcc00%22%2C%22date_color%22%3A%22%23cccccc%22%2C%22content%22%3A%22%3Cp%3EPower%20and%20Chrome%3A%20Muscle%20at%20Its%20Peak%3C%2Fp%3E%22%2C%22marker_color%22%3A%22%23DD9933%22%2C%22marker_border_color%22%3A%22%23F69400%22%2C%22marker_size%22%3A%2212%22%7D%2C%7B%22image_source%22%3A%22external_link%22%2C%22image_custom_src%22%3A%22https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2F3%2F37%2FSeat_Emelba_Pandita_1984.jpg%22%2C%22date%22%3A%221984%22%2C%22date_active_color%22%3A%22%23ffcc00%22%2C%22date_color%22%3A%22%23cccccc%22%2C%22content%22%3A%22%3Cp%3ETurbo%20Dreams%20and%20Pop-Up%20Lights%3C%2Fp%3E%22%2C%22marker_color%22%3A%22%23DD9933%22%2C%22marker_border_color%22%3A%22%23F69400%22%2C%22marker_size%22%3A%2212%22%7D%2C%7B%22is_active%22%3A%22true%22%2C%22image_source%22%3A%22external_link%22%2C%22image_custom_src%22%3A%22https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2F8%2F89%2FPretty_Wheels_-_Flickr_-_FaceMePLS.jpg%22%2C%22date%22%3A%221994%22%2C%22date_active_color%22%3A%22%23ffcc00%22%2C%22date_color%22%3A%22%23cccccc%22%2C%22content%22%3A%22%3Cp%3ERefined%20Speed%20Meets%20Everyday%20Comfort%3C%2Fp%3E%22%2C%22marker_color%22%3A%22%23DD9933%22%2C%22marker_border_color%22%3A%22%23F69400%22%2C%22marker_size%22%3A%2212%22%7D%2C%7B%22image_source%22%3A%22external_link%22%2C%22image_custom_src%22%3A%22https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fd%2Fd3%2FMichael_Schumacher_Ferrari_2004.jpg%22%2C%22date%22%3A%222004%22%2C%22date_active_color%22%3A%22%23ffcc00%22%2C%22date_color%22%3A%22%23cccccc%22%2C%22content%22%3A%22%3Cp%3ESleek%2C%20Smart%2C%20and%20Fuel-Efficient%3C%2Fp%3E%22%2C%22marker_color%22%3A%22%23DD9933%22%2C%22marker_border_color%22%3A%22%23F69400%22%2C%22marker_size%22%3A%2212%22%7D%2C%7B%22image_source%22%3A%22external_link%22%2C%22image_custom_src%22%3A%22https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fe%2Fec%2FAbarth_600e_Scorpionissima_Auto_Zuerich_2024_DSC_6149.jpg%22%2C%22date%22%3A%222024%22%2C%22date_active_color%22%3A%22%23ffcc00%22%2C%22date_color%22%3A%22%23cccccc%22%2C%22content%22%3A%22%3Cp%3E%26nbsp%3B%3Cem%20data-start%3D%5C%22415%5C%22%20data-end%3D%5C%22455%5C%22%3EElectric%20Revolution%3A%20The%20Future%20Is%20Now%3C%2Fem%3E%3C%2Fp%3E%22%2C%22marker_color%22%3A%22%23DD9933%22%2C%22marker_border_color%22%3A%22%23F69400%22%2C%22marker_size%22%3A%2212%22%7D%5D',
		'param_name' => 'items',
		'params'     => [
			[
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Date', 'chargewp-timeline-addons-for-wpbakery' ),
				'param_name'  => 'date',
				'value'       => '1984',
				'description' => esc_html__( 'Enter date for timeline item.', 'chargewp-timeline-addons-for-wpbakery' ),
				'admin_label' => true,
				'group'       => esc_html__( 'Date', 'chargewp-timeline-addons-for-wpbakery' ),
			],
		],
	],
];

return [
	'name'                    => __( 'Wheel Timeline', 'chargewp-timeline-addons-for-wpbakery' ),
	'base'                    => 'chargewp-wheel-timeline',
	'icon'                    => CHARGEWPWPBTIMELINE_ASSETS_URI . '/images/shortcodes/icons/wheel-timeline.svg',
	'class'                   => 'chargewp-wheel-timeline',
	'category'                => 'ChargeWP',
	'description'             => __( 'Wheel Timeline. Pure CSS.', 'chargewp-timeline-addons-for-wpbakery' ),
	'php_class_name'          => ChargeWpbShortcodeEmpty::class,
	'show_settings_on_create' => true,
	'params'                  => array_merge(
		$params,
		[ vc_map_add_css_animation() ],
		chargewpwpbtimeline_config( 'element-params' )['common-bottom-params']
	),
];
