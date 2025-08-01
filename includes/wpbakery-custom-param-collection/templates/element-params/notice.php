<?php
/**
 * Custom element param template for a notice param.
 * We use this to show user some notice or information about the element.
 *
 * @see https://kb.wpbakery.com/docs/developers-how-tos/create-new-param-type
 *
 * @var mixed $value
 * @var array $settings
 * @var WpbCustomParamCollection\ElementParams\Lib\Notice $_this
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="notice <?php echo esc_attr( $settings['level'] ); ?> update-nag inline <?php echo esc_attr( $_this->get_param_classes( $settings ) ); ?>" style="margin: 0">
	<?php
	echo wp_kses_post( $settings['notice'] );
	?>
</div>
