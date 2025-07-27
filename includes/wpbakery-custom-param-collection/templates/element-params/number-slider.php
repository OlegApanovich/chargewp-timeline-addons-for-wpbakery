<?php
/**
 * Custom element param template for a number param.
 *
 * @see https://kb.wpbakery.com/docs/developers-how-tos/create-new-param-type
 *
 * @var mixed $value
 * @var array $settings
 * @var WpbCustomParamCollection\ElementParams\Lib\NumberSlider $_this
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="wcp-number-slider-wrapper">
	<input
			type="range"
			min="<?php echo esc_attr( $settings['min'] ); ?>"
			max="<?php echo esc_attr( $settings['max'] ); ?>"
			step="<?php echo esc_attr( $settings['step'] ); ?>"
			class="wcp-number-slider"
			value="<?php echo esc_attr( $_this->get_value( $settings, $value ) ); ?>"
	>
	<div class="wcp-number-with-title">
		<input
				type="number"
				min="<?php echo esc_attr( $settings['min'] ); ?>"
				max="<?php echo esc_attr( $settings['max'] ); ?>"
				step="<?php echo esc_attr( $settings['step'] ); ?>"
				class="wcp-number-slider-input <?php echo esc_attr( $_this->get_param_classes( $settings ) ); ?>"
				name="<?php echo esc_attr( $settings['param_name'] ); ?>"
				value="<?php echo esc_attr( $_this->get_value( $settings, $value ) ); ?>"
		>&nbsp;<span class="wcp-number-slider-title"><?php echo esc_html( $settings['title'] ); ?></span>
	</div>
</div>
