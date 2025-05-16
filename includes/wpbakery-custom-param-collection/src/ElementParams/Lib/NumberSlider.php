<?php
/**
 * Custom param 'Number Slider' for wpbakery element.
 *
 * @see https://kb.wpbakery.com/docs/inner-api/vc_add_shortcode_param
 * @since 1.0
 */

namespace WpbCustomParamCollection\ElementParams\Lib;

use WpbCustomParamCollection\ElementParams\ElementParamsAbstract;

/**
 * Number class.
 *
 * @since 1.0
 */
class NumberSlider extends ElementParamsAbstract {
	/**
	 * Get param default attr list.
	 *
	 * @since 1.0
	 * @return array
	 */
	public function get_param_default_attr_list(): array {
		return [
			'param_name',
			'type',
			'min',
			'max',
			'step',
			'title',
			'class',
		];
	}

	/**
	 * Get params values.
	 *
	 * @param array $settings
	 * @return array
	 * @since 1.0
	 */
	public function merge_default_settings( array $settings ): array {
		$values = [];

		foreach ( $this->get_param_default_attr_list() as $name ) {
			$values[ $name ] = $settings[ $name ] ?? '';
		}

		return $values;
	}

	/**
	 * Get param classes.
	 *
	 * @param array       $settings
	 * @param string|null $current_value
	 * @return string
	 * @since 1.0
	 */
	public function get_value( array $settings, $current_value ): string {
		if ( null !== $current_value ) {
			return $current_value;
		}

		return '' === $settings['min'] ? '0' : $settings['min'];
	}
}
