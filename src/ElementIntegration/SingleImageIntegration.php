<?php
/**
 * This class helps to integrate vc_single_image shortcode
 * to our shortcodes with custom parameters.
 *
 * @since 1.6
 */

namespace ChargewpWpbTimeline\ElementIntegration;

defined( 'ABSPATH' ) || exit;

/**
 * Class SingleImageIntegration
 *
 * @since 1.6
 */
class SingleImageIntegration {
	/**
	 * Get integration config.
	 *
	 * @since 1.6
	 * @param array $exclude
	 * @return array
	 */
	public function add_config( array $exclude = [] ): array {
		include_once vc_path_dir( 'CONFIG_DIR', 'lean-map.php' );
		$image_config = include vc_path_dir( 'CONFIG_DIR', 'content/shortcode-vc-single-image.php' );

		$exclude = array_merge( $this->get_always_exclude_params(), $exclude );

		$include_params = [ 'exclude' => $exclude ];

		$config =
			vc_map_integrate_shortcode(
				$image_config,
				'',
				'',
				$include_params
			);

		return $config;
	}

	/**
	 * Get elements params list that we always exclude when integrate shortcode.
	 *
	 * @since 1.6
	 * @return array
	 */
	public function get_always_exclude_params(): array {
		return [
			'title',
			'css_animation',
			'el_id',
			'el_class',
			'css',
		];
	}

	/**
	 * Add additional params to each config param set.
	 *
	 * @since 1.6
	 * @param array $init_param
	 * @param array $additional_params
	 * @return array
	 */
	public function add_config_params( array $init_param, array $additional_params ): array {
		foreach ( $init_param as $init_param_key => $init_param_value ) {
			$init_param[ $init_param_key ] = array_merge(
				$init_param_value,
				$additional_params
			);
		}

		return $init_param;
	}
}
