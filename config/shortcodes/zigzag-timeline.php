<?php
/**
 * Configuration file for [wpb_plus_zigzag_timeline] shortcode of 'Zigzag Timeline' element.
 *
 * @since 1.0
 */

defined( 'ABSPATH' ) || exit;

return [
	'name'                    => __( 'Zigzag Timeline', 'charge-wp-wpbakery-timeline-addons' ),
	'base'                    => 'wpbakery-plus-zigzag-timeline',
	'icon'                    => 'wpbakery-plus-zigzag-timeline',
	'class'                   => 'wpbakery-plus-zigzag-timeline',
	'category'                => 'Plus Timeline',
	'description'             => __( 'Timeline element with vertical interface.', 'charge-wp-wpbakery-timeline-addons' ),
	'as_parent'               => [ 'only' => 'wpbakery-plus-zigzag-timeline-item' ],
	'content_element'         => true,
	'default_content'         => '[wpbakery-plus-zigzag-timeline-item position="right"]Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, nam! Nam eveniet ut aliquam ab asperiores, accusamus iure veniam corporis incidunt reprehenderit accusantium id aut architecto harum quidem dolorem in![/wpbakery-plus-zigzag-timeline-item][wpbakery-plus-zigzag-timeline-item decorative_circle_color="#87BBFE" date_background="#555AC0"]Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, nam! Nam eveniet ut aliquam ab asperiores, accusamus iure veniam corporis incidunt reprehenderit accusantium id aut architecto harum quidem dolorem in![/wpbakery-plus-zigzag-timeline-item][wpbakery-plus-zigzag-timeline-item position="right" decorative_circle_color="#AFF1B6" date_background="#24B47E"]Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, nam! Nam eveniet ut aliquam ab asperiores, accusamus iure veniam corporis incidunt reprehenderit accusantium id aut architecto harum quidem dolorem in![/wpbakery-plus-zigzag-timeline-item]',
	'show_settings_on_create' => true,
	'js_view'                 => 'VcColumnView',
	'params'                  => array_merge(
		[ vc_map_add_css_animation() ],
		wpbplustimeline_config( 'shortcode-container-config' )
	),
];
