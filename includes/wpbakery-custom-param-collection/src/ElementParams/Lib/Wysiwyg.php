<?php
/**
 * Custom param 'Wysiwyg' for wpbakery element.
 *
 * @see https://github.com/OlegApanovich/wpbakery-custom-param-collection?tab=readme-ov-file#5-wysiwyg
 * @since 1.1
 */

namespace WpbCustomParamCollection\ElementParams\Lib;

use WpbCustomParamCollection\ElementParams\ElementParamsAbstract;

/**
 * Switch class.
 *
 * @since 1.1
 */
class Wysiwyg extends ElementParamsAbstract {
	/**
	 * Param output.
	 *
	 * @param array $settings_initial
	 * @param mixed $value
	 * @return string
	 */
	public function param_output( array $settings_initial, $value ): string {
		$settings = $this->get_default_settings( $settings_initial );
		$settings = $this->get_specific_param_settings( $settings );

		$output = wpbcustomparamcollection_get_template(
			$this->get_param_template_name(),
			[
				'value'      => $value,
				'settings'   => $settings,
				'randomizer' => (string) wp_rand( 100000, 99999999 ),
				'_this'      => $this,
			]
		);

		return $this->attach_styles_to_param_output( $output );
	}

	/**
	 * Get specific param settings.
	 *
	 * @param array $settings
	 * @return array
	 */
	public function get_specific_param_settings( array $settings ): array {
		$defaults = [
			'use_tabs'       => 'true',
			'use_menubar'    => 'true',
			'use_media'      => 'true',
			'use_link'       => 'true',
			'use_lists'      => 'true',
			'use_blockquote' => 'true',
			'use_textcolor'  => 'true',
			'use_background' => 'true',
			'use_height'     => 250,
			'use_rootblock'  => 'p',
		];

		foreach ( $defaults as $key => $default ) {
			$settings['scope'][ $key ] = $settings['scope'][ $key ] ?? $default;
		}

		// Minimal Usage Override.
		if ( 'true' === $settings['minimal'] ) {
			$settings['scope']['use_menubar']    = 'false';
			$settings['scope']['use_media']      = 'false';
			$settings['scope']['use_link']       = 'false';
			$settings['scope']['use_blockquote'] = 'false';
			$settings['scope']['use_lists']      = 'false';
			$settings['scope']['use_background'] = 'false';
			$settings['scope']['use_height']     = 150;
		}

		return $settings;
	}
}
