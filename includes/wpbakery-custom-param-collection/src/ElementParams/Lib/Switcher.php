<?php
/**
 * Custom param 'Switch' for wpbakery element.
 *
 * @see https://kb.wpbakery.com/docs/inner-api/vc_add_shortcode_param
 * @since 1.0
 */

namespace WpbCustomParamCollection\ElementParams\Lib;

use WpbCustomParamCollection\ElementParams\ElementParamsAbstract;

/**
 * Switch class.
 *
 * @since 1.0
 */
class Switcher extends ElementParamsAbstract {
	/**
	 * Get param default attr list.
	 *
	 * @since 1.0
	 * @return array
	 */
	public function get_param_default_attr_list(): array {
		return [
			'type',
			'options',
			'class',
			'default_set',
			'param_name',
		];
	}

	/**
	 * Param output.
	 *
	 * @param array $settings
	 * @param mixed $value
	 * @return string
	 * @since 1.0
	 */
	public function param_output( array $settings, $value ): string {
		$output   = '';
		$settings = $this->merge_default_settings( $settings );
		if ( ! is_array( $settings['options'] ) ) {
			return $output;
		}

		$un  = uniqid( 'ultswitch-' . wp_rand( 1000, 9999 ) );
		$uid = '';
		$key = '';
		foreach ( $settings['options'] as $key => $opts ) {
			$checked = $value === $key ? 'checked' : '';
			$uid     = uniqid( 'ultswitchparam-' . wp_rand( 1000, 9999 ) );
			$label   = $opts['label'] ?? '';
			$output .= wpbcustomparamcollection_get_template(
				'element-params/partials/switcher-segment.php',
				[
					'label'    => $label,
					'uid'      => $uid,
					'opts'     => $opts,
					'un'       => $un,
					'value'    => $value,
					'settings' => $settings,
					'checked'  => $checked,
					'_this'    => $this,
				]
			);
		}

		$set_value = $settings['default_set'] ? 'off' : '';
		$output   .= wpbcustomparamcollection_get_template(
			$this->get_param_template_name(),
			[
				'uid'       => $uid,
				'key'       => $key,
				'set_value' => $set_value,
			]
		);

		return $output;
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
			if ( 'default_set' === $name ) {
				$values[ $name ] = $settings[ $name ] ?? false;
			} else {
				$values[ $name ] = $settings[ $name ] ?? '';
			}
		}

		return $values;
	}
}
