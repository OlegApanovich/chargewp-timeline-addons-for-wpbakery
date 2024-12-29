<?php
/**
 * Configuration for a shortcode container.
 *
 * @since 1.0
 */

defined( 'ABSPATH' ) || exit;

return [
	[
		'type'        => 'el_id',
		'heading'     => esc_html__( 'Element ID', 'js_composer' ),
		'param_name'  => 'el_id',
		// translators: %1$s: link to w3c specification, %2$s: closing anchor tag.
		'description' => sprintf( esc_html__( 'Enter element ID (Note: make sure it is unique and valid according to %1$sw3c specification%2$s).', 'js_composer' ), '<a href="https://www.w3schools.com/tags/att_global_id.asp" target="_blank">', '</a>' ),
	],
	[
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Extra class name', 'js_composer' ),
		'param_name'  => 'el_class',
		'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' ),
	],
	[
		'type'       => 'css_editor',
		'heading'    => esc_html__( 'CSS box', 'js_composer' ),
		'param_name' => 'css',
		'group'      => esc_html__( 'Design Options', 'js_composer' ),
	],
];
