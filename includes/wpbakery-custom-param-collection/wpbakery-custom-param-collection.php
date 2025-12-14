<?php
/**
 * Plugin Name:       WPBakery Custom Param Collection
 * Plugin URI:        https://github.com/OlegApanovich/wpbakery-custom-param-collection
 * Description:       Collection of element custom parameters for WPBakery Page Builder editor.
 * Author:            OlegApanovich
 * Author URI:        https://github.com/OlegApanovich
 * Text Domain:       wpb-custom-param-collection
 * Domain Path:       /languages
 * Version:           1.3.2
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 *
 * Requires at least: 4.9
 * Requires PHP:      7.1
 */

defined( 'ABSPATH' ) || exit;

use WpbCustomParamCollection\Plugin;

/**
 * Main Plugin Class.
 *
 * @since 1.0
 */
class Wpbackery_Custom_Param_Collection {
	/**
	 * The single instance of the class.
	 *
	 * @since  1.0
	 * @var Wpbackery_Custom_Param_Collection|null
	 */
	public static $instance = null;

	/**
	 * Plugin instance.
	 *
	 * @since 1.0
	 * @var Plugin|null
	 */
	public $plugin;

	/**
	 * Main plugin instance.
	 *
	 * Ensures only one instance of plugin is loaded or can be loaded.
	 *
	 * @since 1.0
	 * @static
	 * @return object Plugin main instance.
	 */
	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Wpbackery_Custom_Param_Collection Constructor.
	 *
	 * @since 1.0
	 */
	public function __construct() {
		$this->define_constants();
		$this->includes();

		$this->init_hooks();

		$plugin = $this->get_plugin();

		$plugin->init();
	}

	/**
	 * Get Plugin instance.
	 *
	 * @since 1.0
	 * @return Plugin
	 */
	public function get_plugin(): Plugin {
		if ( ! $this->plugin ) {
			$this->set_plugin();
		}

		return $this->plugin;
	}

	/**
	 * Set plugin instance.
	 *
	 * @since 1.0
	 */
	public function set_plugin() {
		$this->plugin = new Plugin();
	}

	/**
	 * Define plugin constants.
	 *
	 * @since 1.0
	 */
	private function define_constants() {
		define( 'WPBCUSTOMPARAMCCOLECTION_VERSION', '1.0' );
		define( 'WPBCUSTOMPARAMCCOLECTION_PARAM_PREFIX', 'custom' );

		define( 'WPBCUSTOMPARAMCCOLECTION_PLUGIN_FILE', __FILE__ );

		define( 'WPBCUSTOMPARAMCCOLECTION_URI', plugins_url( '', WPBCUSTOMPARAMCCOLECTION_PLUGIN_FILE ) );
		define( 'WPBCUSTOMPARAMCCOLECTION_ASSETS_URI', plugins_url( 'assets', WPBCUSTOMPARAMCCOLECTION_PLUGIN_FILE ) );

		define( 'WPBCUSTOMPARAMCCOLECTION_URI_ABSPATH', __DIR__ . '/' );
		define( 'WPBCUSTOMPARAMCCOLECTION_TEMPLATES_DIR', __DIR__ . '/templates' );
		define( 'WPBCUSTOMPARAMCCOLECTION_INCLUDES_DIR', __DIR__ . '/includes' );
		define( 'WPBCUSTOMPARAMCCOLECTION_ASSETS_DIR', __DIR__ . '/assets' );
		define( 'WPBCUSTOMPARAMCCOLECTION_CONFIG_DIR', __DIR__ . '/config' );
	}

	/**
	 * Include required plugin core files.
	 *
	 * @since 1.0
	 */
	public function includes() {
		require_once WPBCUSTOMPARAMCCOLECTION_INCLUDES_DIR . '/helpers.php';
		require_once __DIR__ . '/vendor/autoload.php';
	}

	/**
	 * Hook into actions and filters.
	 *
	 * @since 1.0
	 */
	private function init_hooks() {
		add_action( 'init', [ $this, 'init' ], 0 );
	}

	/**
	 * Init plugin when WordPress Initialises.
	 *
	 * @since 1.0
	 */
	public function init() {
		// Before init action.
		do_action( 'before_wpb_custom_param_collection' );
		// Set up localization.
		$this->load_plugin_textdomain();
		// After init action.
		do_action( 'after_wpb_custom_param_collection' );
	}

	/**
	 * Load Localisation files.
	 *
	 * Note: the first-loaded translation file overrides any following ones
	 * if the same translation is present.
	 *
	 * @since 1.0
	 */
	public function load_plugin_textdomain() {
		load_plugin_textdomain(
			'wpb-custom-param-collection',
			false,
			WPBCUSTOMPARAMCCOLECTION_URI_ABSPATH . '/languages'
		);
	}
}

Wpbackery_Custom_Param_Collection::instance();
