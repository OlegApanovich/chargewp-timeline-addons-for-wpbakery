<?php
/**
 * Custom element param template for a number param.
 *
 * @see https://kb.wpbakery.com/docs/developers-how-tos/create-new-param-type
 * @since 1.1
 *
 * @var mixed $value
 * @var array $settings
 * @var WpbCustomParamCollection\ElementParams\Lib\Number $_this
 */

defined( 'ABSPATH' ) || exit;
?>

<input
	type="number"
	min="<?php echo esc_attr( $settings['min'] ); ?>"
	max="<?php echo esc_attr( $settings['max'] ); ?>"
	step="<?php echo esc_attr( $settings['step'] ); ?>"
	class="<?php echo esc_attr( $_this->get_param_classes( $settings ) ); ?>"
	name="<?php echo esc_attr( $settings['param_name'] ); ?>"
	value="<?php echo esc_attr( $value ); ?>"
	style="max-width:100px; margin-right: 10px;"
/><?php echo esc_html( $settings['title'] ); ?>
