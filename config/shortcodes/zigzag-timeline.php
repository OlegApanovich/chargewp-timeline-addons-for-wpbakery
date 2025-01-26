<?php
/**
 * Configuration file for [chargewp_zigzag_timeline] shortcode of 'Zigzag Timeline' element.
 *
 * @since 1.0
 */

defined( 'ABSPATH' ) || exit;

return [
	'name'                    => __( 'Zigzag Timeline', 'chargewp-wpbakery-timeline-addons' ),
	'base'                    => 'chargewp-zigzag-timeline',
	'icon'                    => 'chargewp-zigzag-timeline',
	'class'                   => 'chargewp-zigzag-timeline',
	'category'                => 'ChargeWP',
	'description'             => __( 'Timeline element with zigzag interface.', 'chargewp-wpbakery-timeline-addons' ),
	'as_parent'               => [ 'only' => 'chargewp-zigzag-timeline-item' ],
	'content_element'         => true,
	'default_content'         => '[chargewp-zigzag-timeline-item position="right" i_icon_fontawesome="fas fa-dog" i_color="purple" i_css="" add_icon="true"]Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, nam! Nam eveniet ut aliquam ab asperiores, accusamus iure veniam corporis incidunt reprehenderit accusantium id aut architecto harum quidem dolorem in![/chargewp-zigzag-timeline-item][chargewp-zigzag-timeline-item decorative_circle_color="#87BBFE" date_background="#555AC0" i_icon_fontawesome="fas fa-dove" i_css="" add_icon="true"]Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, nam! Nam eveniet ut aliquam ab asperiores, accusamus iure veniam corporis incidunt reprehenderit accusantium id aut architecto harum quidem dolorem in![/chargewp-zigzag-timeline-item][chargewp-zigzag-timeline-item position="right" decorative_circle_color="#AFF1B6" date_background="#24B47E" i_icon_fontawesome="fas fa-cat" i_color="green" i_css="" add_icon="true"]Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, nam! Nam eveniet ut aliquam ab asperiores, accusamus iure veniam corporis incidunt reprehenderit accusantium id aut architecto harum quidem dolorem in![/chargewp-zigzag-timeline-item]',
	'show_settings_on_create' => true,
	'js_view'                 => 'VcColumnView',
	'params'                  => array_merge(
		[ vc_map_add_css_animation() ],
		chargewpwpbtimeline_config( 'shortcode-container-config' )
	),
];
