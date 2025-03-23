<?php
/**
 * Custom param 'Number' for wpbakery element.
 *
 * @see https://kb.wpbakery.com/docs/inner-api/vc_add_shortcode_param
 * @since 1.1
 */

namespace ChargewpWpbTimeline\ElementParams\Lib;

use ChargewpWpbTimeline\ElementParams\ElementParamsAbstract;

/**
 * ChargewpNumber class.
 *
 * @since 1.1
 */
class ChargewpNumber extends ElementParamsAbstract {
	/**
	 * Get param default attr list.
	 *
	 * @since 1.1
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
	 * @since 1.1
	 */
	public function merge_default_settings( array $settings ): array {
		$values = [];

		foreach ( $this->get_param_default_attr_list() as $name ) {
			$values[ $name ] = $settings[ $name ] ?? '';
		}

		return $values;
	}
}
