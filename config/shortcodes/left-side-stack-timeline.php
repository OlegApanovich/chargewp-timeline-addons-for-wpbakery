<?php
/**
 * Configuration file for [chargewp_left_side_stack_timeline] shortcode of 'Left Side Stack Timeline' element.
 *
 * @since 1.0
 */

defined( 'ABSPATH' ) || exit;

use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeContainerEmpty;

$params = [
	[
		'type'        => 'colorpicker',
		'value'       => '#27293d',
		'heading'     => esc_html__( 'Baseline Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'baseline_background',
		'description' => esc_html__( 'Select custom color for timeline base line.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
];

return [
	'name'                    => __( 'Left Side Stack Timeline', 'chargewp-timeline-addons-for-wpbakery' ),
	'base'                    => 'chargewp-left-side-stack-timeline',
	'icon'                    => CHARGEWPWPBTIMELINE_ASSETS_URI . '/images/shortcodes/icons/left-side-stack-timeline.svg',
	'class'                   => 'chargewp-left-side-stack-timeline',
	'category'                => 'ChargeWP',
	'description'             => __( 'Timeline element with stack items on the left side.', 'chargewp-timeline-addons-for-wpbakery' ),
	'php_class_name'          => ChargeWpbShortcodeContainerEmpty::class,
	'as_parent'               => [ 'only' => 'chargewp-left-side-stack-timeline-item' ],
	'content_element'         => true,
	'default_content'         => '[chargewp-left-side-stack-timeline-item title="Primary." i_icon_fontawesome="far fa-grin" i_color="white" i_css="" add_icon="true"]Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam necessitatibus numquam earum ipsa fugiat veniam suscipit, officiis repudiandae, eum recusandae neque dignissimos. Cum fugit laboriosam culpa, repellendus esse commodi deserunt.[/chargewp-left-side-stack-timeline-item][chargewp-left-side-stack-timeline-item title="Danger." title_background_color="#FD5D93" circle_color="#FD5D93" i_icon_fontawesome="fas fa-radiation" i_color="white" i_css="" add_icon="true"]Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam necessitatibus numquam earum ipsa fugiat veniam suscipit, officiis repudiandae, eum recusandae neque dignissimos. Cum fugit laboriosam culpa, repellendus esse commodi deserunt.[/chargewp-left-side-stack-timeline-item][chargewp-left-side-stack-timeline-item title="Success." title_background_color="#00BF9A" circle_color="#00BF9A" i_icon_fontawesome="fas fa-check" i_color="white" i_css="" add_icon="true"]Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam necessitatibus numquam earum ipsa fugiat veniam suscipit, officiis repudiandae, eum recusandae neque dignissimos. Cum fugit laboriosam culpa, repellendus esse commodi deserunt.[/chargewp-left-side-stack-timeline-item]',
	'show_settings_on_create' => true,
	'js_view'                 => 'VcColumnView',
	'params'                  => array_merge(
		$params,
		[ version_compare( WPB_VC_VERSION, '9.0', '<' ) ? vc_map_add_css_animation() : vc_config()->get_css_animation() ],
		chargewpwpbtimeline_config( 'element-params' )['common-bottom-params']
	),
];
