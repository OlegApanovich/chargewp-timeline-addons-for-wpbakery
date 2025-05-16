<?php
/**
 * Custom param 'Notice' for wpbakery element.
 * We use this to show user some notice or information about the element.
 *
 * @see https://github.com/OlegApanovich/wpbakery-custom-param-collection?tab=readme-ov-file#2-notice
 * @since 1.0
 */

namespace WpbCustomParamCollection\ElementParams\Lib;

use WpbCustomParamCollection\ElementParams\ElementParamsAbstract;

/**
 * Notice class.
 *
 * @since 1.0
 */
class Notice extends ElementParamsAbstract {
	/**
	 * Get param default attr list.
	 *
	 * @since 1.0
	 * @return array
	 */
	public function get_param_default_attr_list(): array {
		return [
			'param_name',
			'level',
			'notice',
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
			if ( 'level' === $name ) {
				if ( in_array( $settings[ $name ], $this->get_level_list(), true ) ) {
					$values[ $name ] = 'notice-' . esc_attr( $settings[ $name ] );
				} else {
					$values[ $name ] = 'notice';
				}
			} else {
				$values[ $name ] = $settings[ $name ] ?? '';
			}
		}

		return $values;
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
