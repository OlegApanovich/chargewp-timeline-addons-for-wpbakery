<?php
/**
 * Entry point for add plugin elements to dependency plugin.
 */

namespace WpbCustomParamCollection;

use WpbCustomParamCollection\ElementParams\ElementParamsLoader;
use WpbCustomParamCollection\ParamsFunctionality\Grouped;

defined( 'ABSPATH' ) || exit;

/**
 * Admin settings
 */
class Plugin {
	/**
	 * Initialize plugin.
	 */
	public function init() {
		add_action( 'admin_init', [ $this, 'init_custom_element_params' ], 20 );
		add_action( 'admin_init', [ $this, 'init_grouped_param_functionality' ], 20 );
	}

	/**
	 * Initialize custom element params.
	 */
	public function init_custom_element_params() {
		( new ElementParamsLoader() )->load_custom_element_params();
	}

	/**
	 * Initialize functionality that groups element params.
	 */
	public function init_grouped_param_functionality() {
		( new Grouped() )->init();
	}
}
