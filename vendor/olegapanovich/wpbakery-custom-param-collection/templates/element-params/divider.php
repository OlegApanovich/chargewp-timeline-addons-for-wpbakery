<?php
/**
 * Custom element param template for a divider param.
 *
 * @see https://kb.wpbakery.com/docs/developers-how-tos/create-new-param-type
 *
 * @var array $settings
 * @var WpbCustomParamCollection\ElementParams\Lib\Divider $_this
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="wpb_element_label wcp-vc-divider <?php echo esc_attr( $_this->get_param_classes( $settings ) ); ?>" <?php $_this->output_color_style( $settings ); ?> >
	<?php
	echo esc_html( $settings['title'] );

	// @phpstan-ignore-next-line
	if ( version_compare( WPB_VC_VERSION, '8.0', '>=' ) ) {
		if ( ! empty( $settings['title_description'] ) ) {
			vc_include_template(
				'editors/partials/param-info.tpl.php',
				[ 'description' => $settings['title_description'] ]
			);
		}
	}
	?>
</div>
<span class="vc_description vc_clearfix">
	<?php echo esc_html( $settings['subtitle'] ); ?>
</span>
<input type="hidden" class="wpb_vc_param_value" name="<?php echo esc_attr( $settings['param_name'] ); ?>" value="1" />