<?php
/**
 * List of element params values.
 *
 * @since 1.1
 */

return [
	'tailwind'            => [
		'rotation_degree' => [
			0   => '0',
			1   => '1',
			2   => '2',
			3   => '3',
			6   => '6',
			12  => '12',
			45  => '45',
			90  => '90',
			180 => '180',
		],
		'fit'             => [
			esc_html__( 'Cover', 'js_composer' )        => 'cover',
			esc_html__( 'Contain', 'js_composer' )      => 'contain',
			esc_html__( 'Fill', 'js_composer' )         => 'fill',
			esc_html__( 'Center', 'js_composer' )       => 'center',
			esc_html__( 'Top', 'js_composer' )          => 'top',
			esc_html__( 'Left', 'js_composer' )         => 'left',
			esc_html__( 'Right', 'js_composer' )        => 'right',
			esc_html__( 'Bottom', 'js_composer' )       => 'bottom',
			esc_html__( 'Left Bottom', 'js_composer' )  => 'left-bottom',
			esc_html__( 'Right Top', 'js_composer' )    => 'right-top',
			esc_html__( 'Right Bottom', 'js_composer' ) => 'right-bottom',
			esc_html__( 'None', 'js_composer' )         => 'none',
		],
		'shadow'          => [
			esc_html__( 'None', 'js_composer' )        => 'none',
			esc_html__( 'Small', 'js_composer' )       => 'sm',
			esc_html__( 'Medium', 'js_composer' )      => 'md',
			esc_html__( 'Large', 'js_composer' )       => 'lg',
			esc_html__( 'Extra Large', 'js_composer' ) => 'xl',
			esc_html__( 'XXL', 'js_composer' )         => '2xl',
			esc_html__( 'Inner', 'js_composer' )       => 'inner',
		],
		'rounded'         => [
			esc_html__( 'None', 'js_composer' )        => 'none',
			esc_html__( 'Small', 'js_composer' )       => 'sm',
			esc_html__( 'Medium', 'js_composer' )      => 'md',
			esc_html__( 'Large', 'js_composer' )       => 'lg',
			esc_html__( 'Extra Large', 'js_composer' ) => 'xl',
			esc_html__( 'XXL', 'js_composer' )         => '2xl',
			esc_html__( 'XXXL', 'js_composer' )        => '3xl',
			esc_html__( 'Full', 'js_composer' )        => 'full',
		],
		'border_type'     => [
			esc_html__( 'None', 'chargewp-timeline-addons-for-wpbakery' ) => '0',
			esc_html__( 'Slim', 'chargewp-timeline-addons-for-wpbakery' ) => '2',
			esc_html__( 'Middle', 'chargewp-timeline-addons-for-wpbakery' ) => '4',
			esc_html__( 'Bold', 'chargewp-timeline-addons-for-wpbakery' ) => '8',
		],
		'border_style'    => [
			esc_html__( 'Solid', 'chargewp-timeline-addons-for-wpbakery' ) => 'solid',
			esc_html__( 'Dotted', 'chargewp-timeline-addons-for-wpbakery' ) => 'dotted',
			esc_html__( 'Dashed', 'chargewp-timeline-addons-for-wpbakery' ) => 'dashed',
		],
	],
	'shortcode-container' => [
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
	],
];
