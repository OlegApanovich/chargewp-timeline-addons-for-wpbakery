<?php
/**
 * Custom param 'Switch' for wpbakery element.
 *
 * @see https://github.com/OlegApanovich/wpbakery-custom-param-collection?tab=readme-ov-file#3-switcher
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
	 * Param output.
	 *
	 * @param array $settings_initial
	 * @param mixed $value
	 * @return string
	 */
	public function param_output( array $settings_initial, $value ): string {
		$output   = '';
		$settings = $this->get_default_settings( $settings_initial );
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

		return $this->attach_styles_to_param_output( $output );
	}
}
