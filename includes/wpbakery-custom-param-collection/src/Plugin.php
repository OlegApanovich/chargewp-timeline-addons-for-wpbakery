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
	 */
	public function init() {
		add_action( 'admin_init', [ $this, 'init_custom_element_params' ], 20 );
	}

	/**
	 * Initialize custom element params.
	 */
	public function init_custom_element_params() {
		( new ElementParamsLoader() )->load_custom_element_params();
	}
}
