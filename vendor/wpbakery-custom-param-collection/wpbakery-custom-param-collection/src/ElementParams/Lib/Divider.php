<?php
/**
 * Custom param 'Divider' for wpbakery element.
 *
 * @see https://github.com/OlegApanovich/wpbakery-custom-param-collection?tab=readme-ov-file#6-devider
 */

namespace WpbCustomParamCollection\ElementParams\Lib;

use WpbCustomParamCollection\ElementParams\ElementParamsAbstract;

/**
 * Divider class.
 */
class Divider extends ElementParamsAbstract {
	/**
	 * Output param color as a regular style attribute.
	 *
	 * @param array $settings
	 */
	public function output_color_style( array $settings ) {
		if ( ! isset( $settings['color'] ) ) {
			return;
		}

		echo 'style="border-color: ' . esc_attr( $settings['color'] ) . ';"';
	}
}
