<?php
/**
 * Plugin Name:       ChargeWP Timeline Addons For WPBakery Page Builder
 * Plugin URI:        https://github.com/OlegApanovich/chargewp-timeline-addons-for-wpbakery
 * Description:       Power your WPBakery Page Builder with well-crafted timeline addons.
 * Author:            OlegApanovich
 * Author URI:        https://github.com/OlegApanovich
 * Text Domain:       chargewp-timeline-addons-for-wpbakery
 * Domain Path:       /languages
 * Version:           1.4-beta.1
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 *
 * Requires at least: 4.9
 * Requires PHP:      7.0
 */

defined( 'ABSPATH' ) || exit;

use ChargewpWpbTimeline\Plugin;

/**
 * Main Plugin Class.
 *
 * @since 1.0
 */
class Chargewp_Wpb_Timeline_Element {
	/**
	 * The single instance of the class.
	 *
	 * @since  1.0
	 * @var Chargewp_Wpb_Timeline_Element|null
	 */
	public static $instance = null;

	/**
	 * Charge dependency plugin instance.
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
	 * Chargewp_Wpb_Timeline_Element Constructor.
	 *
	 * @since 1.0
	 */
	public function __construct() {
		$this->define_constants();
		$this->includes();

		$this->init_hooks();

		$plugin = $this->get_plugin();

		if ( ! $plugin->is_dependency_plugin_active() ) {
			return;
		}

		$plugin->init();
	}

	/**
	 * Get plugin instance.
	 *
	 * @since 1.0
	 * @return Plugin
	 */
	public function get_plugin(): Plugin {
		if ( ! $this->plugin ) {
			$this->plugin = new Plugin();
		}

		return $this->plugin;
	}

	/**
	 * Define plugin constants.
	 *
	 * @since 1.0
	 */
	private function define_constants() {
		define( 'CHARGEWPWPBTIMELINE_VERSION', '1.4-beta.1' );
		define( 'CHARGEWPWPBTIMELINE_WPBAKERY_REQUIRED_VERSION', '5.0' );
		define( 'CHARGEWPWPBTIMELINE_WPBAKERY_REQUIRED_NAME', 'WPBakery Page Builder' );
		define( 'CHARGEWPWPBTIMELINE_WPBAKERY_REQUIRED_PATH', 'js_composer/js_composer.php' );

		define( 'CHARGEWPWPBTIMELINE_PLUGIN_FILE', __FILE__ );

		define( 'CHARGEWPWPBTIMELINE_URI', plugins_url( '', CHARGEWPWPBTIMELINE_PLUGIN_FILE ) );
		define( 'CHARGEWPWPBTIMELINE_ASSETS_URI', plugins_url( 'assets', CHARGEWPWPBTIMELINE_PLUGIN_FILE ) );

		define( 'CHARGEWPWPBTIMELINE_URI_ABSPATH', __DIR__ . '/' );
		define( 'CHARGEWPWPBTIMELINE_TEMPLATES_DIR', __DIR__ . '/templates' );
		define( 'CHARGEWPWPBTIMELINE_INCLUDES_DIR', __DIR__ . '/includes' );
		define( 'CHARGEWPWPBTIMELINE_ASSETS_DIR', __DIR__ . '/assets' );
		define( 'CHARGEWPWPBTIMELINE_CONFIG_DIR', __DIR__ . '/config' );
	}

	/**
	 * Include required plugin core files.
	 *
	 * @since 1.0
	 */
	public function includes() {
		require_once CHARGEWPWPBTIMELINE_INCLUDES_DIR . '/helpers.php';
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
		do_action( 'before_chargewp_wpb_timeline_addons' );
		// Set up localization.
		$this->load_plugin_textdomain();
		// After init action.
		do_action( 'after_chargewp_wpb_timeline_addons' );
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
			'chargewp-timeline-addons-for-wpbakery',
			false,
			CHARGEWPWPBTIMELINE_URI_ABSPATH . '/languages'
		);
	}
}

Chargewp_Wpb_Timeline_Element::instance();
