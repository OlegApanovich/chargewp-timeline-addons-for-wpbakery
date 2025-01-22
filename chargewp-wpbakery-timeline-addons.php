<?php
/**
 * Plugin Name:       ChargeWP Builder WPBakery Timeline Addons
 * Plugin URI:        https://github.com/OlegApanovich/chargewp-wpbakery-timeline-addons
 * Description:       Power your WPBakery Page Builder with new well crafted timeline elements.
 * Author:            OlegApanovich
 * Author URI:        https://github.com/OlegApanovich
 * Text Domain:       chargewp-wpbakery-timeline-addons
 * Domain Path:       /languages
 * Version:           1.0
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 *
 * Requires at least: 4.9
 * Requires PHP:      5.6
 */

defined( 'ABSPATH' ) || exit;

use WpbPlusTimeline\Plus;

/**
 * Main Plugin Class.
 *
 * @since 1.0
 */
class Wpbplus_Timeline_Element {
	/**
	 * The single instance of the class.
	 *
	 * @since  1.0
	 * @var Wpbplus_Timeline_Element|null
	 */
	public static $instance = null;

	/**
	 * Plus dependency plugin instance.
	 *
	 * @since 1.0
	 * @var Plus
	 */
	public $plus;

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
	 * Wpbplus_Timeline_Element Constructor.
	 *
	 * @since 1.0
	 */
	public function __construct() {
		$this->define_constants();
		$this->includes();

		$this->init_hooks();

		$plus = $this->get_plus();

		if ( ! $plus->is_dependency_plugin_active() ) {
			return;
		}

		$plus->init();
	}

	/**
	 * Get Plus instance.
	 *
	 * @since 1.0
	 * @return Plus
	 */
	public function get_plus() {
		if ( ! $this->plus ) {
			$this->set_plus();
		}

		return $this->plus;
	}

	/**
	 * Set Plus instance.
	 *
	 * @since 1.0
	 */
	public function set_plus() {
		$this->plus = new Plus();
	}

	/**
	 * Define plugin constants.
	 *
	 * @since 1.0
	 */
	private function define_constants() {
		define( 'WPBPLUSTIMELINE_VERSION', '1.0' );
		define( 'WPBPLUSTIMELINE_PLUGIN_FILE', __FILE__ );
		define( 'WPBPLUSTIMELINE_URI', plugins_url( '', WPBPLUSTIMELINE_PLUGIN_FILE ) );
		define( 'WPBPLUSTIMELINE_URI_ABSPATH', __DIR__ . '/' );
		define( 'WPBPLUSTIMELINE_TEMPLATES_DIR', __DIR__ . '/templates' );
		define( 'WPBPLUSTIMELINE_INCLUDES_DIR', __DIR__ . '/includes' );
		define( 'WPBPLUSTIMELINE_INCLUDES_ASSETS_DIR', __DIR__ . '/assets' );
		define( 'WPBPLUSTIMELINE_CONFIG_DIR', __DIR__ . '/config' );
	}

	/**
	 * Include required plugin core files.
	 *
	 * @since 1.0
	 */
	public function includes() {
		require_once WPBPLUSTIMELINE_INCLUDES_DIR . '/helpers.php';
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
		do_action( 'before_wpbplustimeline' );
		// Set up localisation.
		$this->load_plugin_textdomain();
		// After init action.
		do_action( 'after_wpbplustimeline' );
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
			'chargewp-wpbakery-timeline-addons',
			false,
			WPBPLUSTIMELINE_URI_ABSPATH . '/languages'
		);
	}
}

Wpbplus_Timeline_Element::instance();
