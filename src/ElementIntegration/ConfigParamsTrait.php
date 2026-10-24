<?php
/**
 * Common helpers for element integration configs.
 *
 * @since 1.6.4
 */

namespace ChargewpWpbTimeline\ElementIntegration;

defined( 'ABSPATH' ) || exit;

/**
 * Trait ConfigParamsTrait
 *
 * @since 1.6.4
 */
trait ConfigParamsTrait {
	/**
	 * Add additional params to each config param set.
	 *
	 * @since 1.6.4
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
