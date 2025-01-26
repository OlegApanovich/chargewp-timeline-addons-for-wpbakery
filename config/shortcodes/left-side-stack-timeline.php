<?php
/**
 * Configuration file for [chargewp_left_side_stack_timeline] shortcode of 'Left Side Stack Timeline' element.
 *
 * @since 1.0
 */

defined( 'ABSPATH' ) || exit;

$params = [
    [
        'type'        => 'colorpicker',
        'value'       => '#27293d',
        'heading'     => esc_html__( 'Baseline Color', 'chargewp-wpbakery-timeline-addons' ),
        'param_name'  => 'baseline_background',
        'description' => esc_html__( 'Select custom color for timeline base line.', 'chargewp-wpbakery-timeline-addons' ),
    ],
];

return [
	'name'                    => __( 'Left Side Stack Timeline', 'chargewp-wpbakery-timeline-addons' ),
	'base'                    => 'chargewp-left-side-stack-timeline',
	'icon'                    => 'chargewp-left-side-stack-timeline',
	'class'                   => 'chargewp-left-side-stack-timeline',
	'category'                => 'ChargeWP',
	'description'             => __( 'Timeline element with stack items on the left side.', 'chargewp-wpbakery-timeline-addons' ),
	'as_parent'               => [ 'only' => 'chargewp-left-side-stack-timeline-item' ],
	'content_element'         => true,
	'default_content'         => '[chargewp-left-side-stack-timeline-item title="Primary." i_icon_fontawesome="far fa-grin" i_color="white" i_css="" add_icon="true"]Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam necessitatibus numquam earum ipsa fugiat veniam suscipit, officiis repudiandae, eum recusandae neque dignissimos. Cum fugit laboriosam culpa, repellendus esse commodi deserunt.[/chargewp-left-side-stack-timeline-item][chargewp-left-side-stack-timeline-item title="Danger." title_background_color="#FD5D93" circle_color="#FD5D93" i_icon_fontawesome="fas fa-radiation" i_color="white" i_css="" add_icon="true"]Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam necessitatibus numquam earum ipsa fugiat veniam suscipit, officiis repudiandae, eum recusandae neque dignissimos. Cum fugit laboriosam culpa, repellendus esse commodi deserunt.[/chargewp-left-side-stack-timeline-item][chargewp-left-side-stack-timeline-item title="Success." title_background_color="#00BF9A" circle_color="#00BF9A" i_icon_fontawesome="fas fa-check" i_color="white" i_css="" add_icon="true"]Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam necessitatibus numquam earum ipsa fugiat veniam suscipit, officiis repudiandae, eum recusandae neque dignissimos. Cum fugit laboriosam culpa, repellendus esse commodi deserunt.[/chargewp-left-side-stack-timeline-item]',
	'show_settings_on_create' => true,
	'js_view'                 => 'VcColumnView',
	'params'                  => array_merge(
        $params,
		[ vc_map_add_css_animation() ],
		chargewpwpbtimeline_config( 'shortcode-container-config' )
	),
];
