<?php
/**
 * Custom param 'Number Slider' for wpbakery element.
 *
 * @see https://github.com/OlegApanovich/wpbakery-custom-param-collection?tab=readme-ov-file#4-number-slider
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
