<?php
/**
 * Custom param 'Notice' for wpbakery element.
 * We use this to show user some notice or information about the element.
 *
 * @see https://github.com/OlegApanovich/wpbakery-custom-param-collection?tab=readme-ov-file#2-notice
 */

namespace WpbCustomParamCollection\ElementParams\Lib;

use WpbCustomParamCollection\ElementParams\ElementParamsAbstract;

/**
 * Notice class.
 */
class Notice extends ElementParamsAbstract {
	/**
	 * Get specific param settings.
	 *
	 * @param array $settings
	 * @return array
	 */
	public function get_specific_param_settings( array $settings ): array {
		foreach ( $this->get_param_default_attr_list() as $name => $value ) {
			if ( 'level' !== $name ) {
				continue;
			}

			if ( in_array( $settings[ $name ], $this->get_level_list(), true ) ) {
				$settings[ $name ] = 'notice-' . esc_attr( $settings[ $name ] );
			} else {
				$settings[ $name ] = $value;
			}
		}

		return $settings;
	}


	/**
	 * Get level notice list possible values.
	 *
	 * @return string[]
	 */
	public function get_level_list(): array {
		return [
			'info',
			'warning',
			'error',
			'success',
		];
	}
}
