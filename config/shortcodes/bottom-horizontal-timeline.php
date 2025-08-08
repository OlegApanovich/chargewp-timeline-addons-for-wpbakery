<?php
/**
 * Configuration file for [chargewp_bottom_horizontal_timeline] shortcode of 'Bottom Horizontal Timeline' element.
 *
 * @since 1.3
 */

use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeEmpty;
use ChargewpWpbTimeline\ElementIntegration\IconIntegration;

defined( 'ABSPATH' ) || exit;

$custom_icon_integration = new IconIntegration();

$params = [
	[
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Base Line Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'base_line_color',
		'description' => esc_html__( 'Select custom color for the base line.', 'chargewp-timeline-addons-for-wpbakery' ),
		'value'       => '#D4AF37',
	],
	[
		'type'        => 'chargewp_number_slider',
		'param_name'  => 'base_line_thickness',
		'heading'     => esc_html__( 'Base Line Width', 'chargewp-timeline-addons-for-wpbakery' ),
		'description' => esc_html__( 'Set the width of the base line.', 'chargewp-timeline-addons-for-wpbakery' ),
		'title'       => 'px',
		'min'         => 1,
		'max'         => 100,
		'step'        => 1,
		'value'       => 4,
	],
	[
		'type'        => 'chargewp_number_slider',
		'param_name'  => 'base_line_height',
		'heading'     => esc_html__( 'Base Line Height', 'chargewp-timeline-addons-for-wpbakery' ),
		'description' => esc_html__( 'Set the height of the base line to adjust the vertical position of it.', 'chargewp-timeline-addons-for-wpbakery' ),
		'title'       => 'px',
		'min'         => -150,
		'max'         => 150,
		'step'        => 1,
		'value'       => 46,
	],
];

$items_paramas = [
	[
		'type'        => 'dropdown',
		'value'       => [
			esc_html__( 'Circle', 'chargewp-timeline-addons-for-wpbakery' ) => 'circle',
			esc_html__( 'Square', 'chargewp-timeline-addons-for-wpbakery' ) => 'square',
		],
		'heading'     => esc_html__( 'Item Type', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'type',
		'description' => esc_html__( 'Choose item type.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
	[
		'type'        => 'chargewp_number_slider',
		'param_name'  => 'size',
		'heading'     => esc_html__( 'Size', 'chargewp-timeline-addons-for-wpbakery' ),
		'description' => esc_html__( 'Set item size in pixels.', 'chargewp-timeline-addons-for-wpbakery' ),
		'title'       => 'px',
		'min'         => 0,
		'max'         => 200,
		'step'        => 1,
		'value'       => 50,
	],
	[
		'type'        => 'chargewp_number_slider',
		'param_name'  => 'border',
		'heading'     => esc_html__( 'Border', 'chargewp-timeline-addons-for-wpbakery' ),
		'description' => esc_html__( 'Set item border in pixels.', 'chargewp-timeline-addons-for-wpbakery' ),
		'title'       => 'px',
		'min'         => 0,
		'max'         => 20,
		'step'        => 1,
		'value'       => 3,
	],
	[
		'type'        => 'dropdown',
		'value'       => chargewpwpbtimeline_config( 'element-params' )['tailwind']['border_style'],
		'heading'     => esc_html__( 'Border Style', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'border_style',
		'description' => esc_html__( 'Choose item border style.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
	[
		'type'              => 'chargewp_divider',
		'param_name'        => 'divider_item_text',
		'title'             => __( 'Text', 'chargewp-timeline-addons-for-wpbakery' ),
		'title_description' => __( 'Set item text options', 'chargewp-timeline-addons-for-wpbakery' ),
		'color'             => 'black',
	],
	[
		'type'            => 'textfield',
		'wcp_group'       => true,
		'wcp_group_color' => 'black',
		'heading'         => esc_html__( 'Number', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'      => 'number',
		'description'     => esc_html__( 'Enter number that will be displayed inside circle.', 'chargewp-timeline-addons-for-wpbakery' ),
		'admin_label'     => true,
	],
	[
		'type'            => 'textfield',
		'wcp_group'       => true,
		'wcp_group_color' => 'black',
		'heading'         => esc_html__( 'Title', 'chargewp-timeline-addons-for-wpbakery' ),
		'value'           => '',
		'param_name'      => 'title',
		'description'     => esc_html__( 'Enter title that will be displayed under the circle.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
	[
		'type'            => 'chargewp_wysiwyg',
		'wcp_group'       => true,
		'wcp_group_color' => 'black',
		'heading'         => esc_html__( 'Info', 'chargewp-timeline-addons-for-wpbakery' ),
		'description'     => esc_html__( 'Enter info that will be displayed under the title.', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'      => 'info',
		'value'           => '',
		'scope'           => [
			'use_menubar' => 'false',
			'use_media'   => 'false',
		],
	],
	[
		'type'              => 'chargewp_divider',
		'param_name'        => 'divider_item_color',
		'title'             => __( 'Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'title_description' => __( 'Set item color options', 'chargewp-timeline-addons-for-wpbakery' ),
		'color'             => '#3e73c6',
	],
	[
		'type'        => 'colorpicker',
		'wcp_group'   => true,
		'heading'     => esc_html__( 'Border Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'circle_color',
		'description' => esc_html__( 'Select custom color for item border.', 'chargewp-timeline-addons-for-wpbakery' ),
		'value'       => '#10b981',
	],
	[
		'type'        => 'colorpicker',
		'wcp_group'   => true,
		'heading'     => esc_html__( 'Background Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'circle_background_color',
		'description' => esc_html__( 'Select custom color for item background.', 'chargewp-timeline-addons-for-wpbakery' ),
		'value'       => '#ffffff',
	],
	[
		'type'        => 'colorpicker',
		'wcp_group'   => true,
		'heading'     => esc_html__( 'Number Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'number_color',
		'description' => esc_html__( 'Select custom color for number inside circle.', 'chargewp-timeline-addons-for-wpbakery' ),
		'value'       => '#10b981',
	],
	[
		'type'        => 'colorpicker',
		'wcp_group'   => true,
		'heading'     => esc_html__( 'Title Color', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'title_color',
		'description' => esc_html__( 'Select custom color for item circle.', 'chargewp-timeline-addons-for-wpbakery' ),
		'value'       => '#374151',
	],
	[
		'type'        => 'colorpicker',
		'wcp_group'   => true,
		'heading'     => esc_html__( 'Info', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'  => 'info_color',
		'description' => esc_html__( 'Select custom color for item info.', 'chargewp-timeline-addons-for-wpbakery' ),
		'value'       => '#6b7280',
	],
	[
		'type'              => 'chargewp_divider',
		'param_name'        => 'divider_item_font_size',
		'title'             => __( 'Font Sizes', 'chargewp-timeline-addons-for-wpbakery' ),
		'title_description' => __( 'Set for sizes for item elements', 'chargewp-timeline-addons-for-wpbakery' ),
		'color'             => 'green',
	],
	[
		'type'            => 'chargewp_number',
		'wcp_group'       => true,
		'wcp_group_color' => 'green',
		'min'             => '1',
		'max'             => '50',
		'value'           => '16',
		'step'            => '1',
		'title'           => 'px',
		'heading'         => esc_html__( 'Number Font Size', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'      => 'number_font_size',
		'description'     => esc_html__( 'Set font size for number text in pixels.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
	[
		'type'            => 'chargewp_number',
		'wcp_group'       => true,
		'wcp_group_color' => 'green',
		'min'             => '1',
		'max'             => '50',
		'value'           => '16',
		'step'            => '1',
		'title'           => 'px',
		'heading'         => esc_html__( 'Title Font Size', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'      => 'title_font_size',
		'description'     => esc_html__( 'Set font size for title text in pixels.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
	[
		'type'            => 'chargewp_number',
		'wcp_group'       => true,
		'wcp_group_color' => 'green',
		'min'             => '1',
		'max'             => '50',
		'value'           => '13',
		'step'            => '1',
		'title'           => 'px',
		'heading'         => esc_html__( 'Info Font Size', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'      => 'info_font_size',
		'description'     => esc_html__( 'Set font size for info text in pixels.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
	[
		'type'              => 'chargewp_divider',
		'param_name'        => 'divider_item_color',
		'title'             => __( 'Font Weight', 'chargewp-timeline-addons-for-wpbakery' ),
		'title_description' => __( 'Set for weights for item elements', 'chargewp-timeline-addons-for-wpbakery' ),
		'color'             => '#7339dc',
	],
	[
		'type'            => 'chargewp_number_slider',
		'wcp_group'       => true,
		'wcp_group_color' => '#7339dc',
		'value'           => '600',
		'min'             => '0',
		'max'             => '900',
		'step'            => '100',
		'heading'         => esc_html__( 'Number Font Weight', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'      => 'number_font_weight',
		'description'     => esc_html__( 'Set font weight for number.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
	[
		'type'            => 'chargewp_number_slider',
		'wcp_group'       => true,
		'wcp_group_color' => '#7339dc',
		'value'           => '600',
		'min'             => '0',
		'max'             => '900',
		'step'            => '100',
		'heading'         => esc_html__( 'Title Font Weight', 'chargewp-timeline-addons-for-wpbakery' ),
		'param_name'      => 'title_font_weight',
		'description'     => esc_html__( 'Set font weight for a title.', 'chargewp-timeline-addons-for-wpbakery' ),
	],
];

$items_params = array_merge(
	$items_paramas,
	$custom_icon_integration->add_icon_checkbox( [ 'background_style', 'align', 'link', 'background_color', 'custom_background_color' ] )
);

$items = [
	[
		'type'       => 'param_group',
		'group'      => esc_html__( 'Timeline Items', 'chargewp-timeline-addons-for-wpbakery' ),
		'heading'    => esc_html__( 'Timeline Items', 'chargewp-timeline-addons-for-wpbakery' ),
		'value'      => '',
		'param_name' => 'items',
		'value'      => '%5B%7B%22type%22%3A%22circle%22%2C%22size%22%3A%2283%22%2C%22border%22%3A%225%22%2C%22border_style%22%3A%22solid%22%2C%22title%22%3A%22THE%20UNIVERSITY%20DEBACLE%22%2C%22info%22%3A%22%3Cp%3EFour%20splendid%20years%20mastering%20the%20ancient%20art%20of%20deadline%20dodging%20and%20instant%20noodle%20cuisine%20preparation%3C%2Fp%3E%22%2C%22circle_color%22%3A%22%23837458%22%2C%22circle_background_color%22%3A%22%23ffffff%22%2C%22number_color%22%3A%22%2310b981%22%2C%22title_color%22%3A%22%23374151%22%2C%22info_color%22%3A%22%235D4E42%22%2C%22number_font_size%22%3A%2216%22%2C%22title_font_size%22%3A%2216%22%2C%22info_font_size%22%3A%2215%22%2C%22number_font_weight%22%3A%22600%22%2C%22title_font_weight%22%3A%22600%22%2C%22add_icon%22%3A%22true%22%2C%22i_type%22%3A%22fontawesome%22%2C%22i_icon_fontawesome%22%3A%22fa%20fa-solid%20fa-microscope%22%2C%22i_icon_openiconic%22%3A%22vc-oi%20vc-oi-dial%22%2C%22i_icon_typicons%22%3A%22typcn%20typcn-adjust-brightness%22%2C%22i_icon_entypo%22%3A%22entypo-icon%20entypo-icon-note%22%2C%22i_icon_linecons%22%3A%22vc_li%20vc_li-heart%22%2C%22i_icon_monosocial%22%3A%22vc-mono%20vc-mono-fivehundredpx%22%2C%22i_icon_material%22%3A%22vc-material%20vc-material-cake%22%2C%22i_icon_pixelicons%22%3A%22vc_pixel_icon%20vc_pixel_icon-alert%22%2C%22i_color%22%3A%22custom%22%2C%22i_custom_color%22%3A%22%23837458%22%2C%22i_size%22%3A%22md%22%7D%2C%7B%22type%22%3A%22square%22%2C%22size%22%3A%2283%22%2C%22border%22%3A%225%22%2C%22border_style%22%3A%22solid%22%2C%22number%22%3A%22II%22%2C%22title%22%3A%22THE%20HUSTLE%20ERA%22%2C%22info%22%3A%22%3Cp%3EPioneered%20revolutionary%20door-to-door%20food%20transportation%20and%20professional%20dog%20companionship%20services%3C%2Fp%3E%22%2C%22circle_color%22%3A%22%23C8AF4A%22%2C%22circle_background_color%22%3A%22%23B9A03E%22%2C%22number_color%22%3A%22%23372A17%22%2C%22title_color%22%3A%22%23374151%22%2C%22info_color%22%3A%22%235D4E42%22%2C%22number_font_size%22%3A%2241%22%2C%22title_font_size%22%3A%2216%22%2C%22info_font_size%22%3A%2215%22%2C%22number_font_weight%22%3A%22600%22%2C%22title_font_weight%22%3A%22600%22%2C%22i_type%22%3A%22fontawesome%22%2C%22i_icon_fontawesome%22%3A%22fa%20fa-solid%20fa-microscope%22%2C%22i_icon_openiconic%22%3A%22vc-oi%20vc-oi-dial%22%2C%22i_icon_typicons%22%3A%22typcn%20typcn-adjust-brightness%22%2C%22i_icon_entypo%22%3A%22entypo-icon%20entypo-icon-note%22%2C%22i_icon_linecons%22%3A%22vc_li%20vc_li-heart%22%2C%22i_icon_monosocial%22%3A%22vc-mono%20vc-mono-fivehundredpx%22%2C%22i_icon_material%22%3A%22vc-material%20vc-material-cake%22%2C%22i_icon_pixelicons%22%3A%22vc_pixel_icon%20vc_pixel_icon-alert%22%2C%22i_color%22%3A%22custom%22%2C%22i_custom_color%22%3A%22%23837458%22%2C%22i_size%22%3A%22md%22%7D%2C%7B%22type%22%3A%22circle%22%2C%22size%22%3A%2283%22%2C%22border%22%3A%225%22%2C%22border_style%22%3A%22solid%22%2C%22title%22%3A%22THE%20CORPORATE%20INFILTRATION%22%2C%22info%22%3A%22%3Cp%3ESuccessfully%20convinced%20distinguished%20establishment%20of%20spreadsheet%20mastery%20through%20bathroom-based%20tutorials%3C%2Fp%3E%22%2C%22circle_color%22%3A%22%23C8AF4A%22%2C%22circle_background_color%22%3A%22%23BBA240%22%2C%22number_color%22%3A%22%2310b981%22%2C%22title_color%22%3A%22%23374151%22%2C%22info_color%22%3A%22%235D4E42%22%2C%22number_font_size%22%3A%2216%22%2C%22title_font_size%22%3A%2216%22%2C%22info_font_size%22%3A%2215%22%2C%22number_font_weight%22%3A%22600%22%2C%22title_font_weight%22%3A%22600%22%2C%22add_icon%22%3A%22true%22%2C%22i_type%22%3A%22fontawesome%22%2C%22i_icon_fontawesome%22%3A%22fa%20fa-solid%20fa-briefcase%22%2C%22i_icon_openiconic%22%3A%22vc-oi%20vc-oi-dial%22%2C%22i_icon_typicons%22%3A%22typcn%20typcn-adjust-brightness%22%2C%22i_icon_entypo%22%3A%22entypo-icon%20entypo-icon-note%22%2C%22i_icon_linecons%22%3A%22vc_li%20vc_li-heart%22%2C%22i_icon_monosocial%22%3A%22vc-mono%20vc-mono-fivehundredpx%22%2C%22i_icon_material%22%3A%22vc-material%20vc-material-cake%22%2C%22i_icon_pixelicons%22%3A%22vc_pixel_icon%20vc_pixel_icon-alert%22%2C%22i_color%22%3A%22custom%22%2C%22i_custom_color%22%3A%22%23372A17%22%2C%22i_size%22%3A%22md%22%7D%5D',
		'params'     => $items_params,
	],
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
		$items,
		[ vc_map_add_css_animation() ],
		chargewpwpbtimeline_config( 'element-params' )['common-bottom-params']
	),
];
