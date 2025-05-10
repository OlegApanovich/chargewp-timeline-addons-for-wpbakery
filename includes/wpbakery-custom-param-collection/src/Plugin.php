<?php
/**
 * Entry point for add plugin elements to dependency plugin.
 *
 * @since 1.0
 */

namespace WpbCustomParamCollection;

use WpbCustomParamCollection\ElementParams\ElementParamsLoader;

defined( 'ABSPATH' ) || exit;

/**
 * Admin settings
 *
 * @since 1.0
 */
class Plugin {
	/**
	 * Initialize plugin.
	 *
	 * @since 1.0
	 */
	public function init() {
		add_action( 'admin_init', [ $this, 'init_custom_element_params' ], 20 );
	}

	/**
	 * Initialize custom element params.
	 *
	 * @since 1.1
	 */
	public function init_custom_element_params() {
		( new ElementParamsLoader() )->init_custom_element_params();
	}
}
