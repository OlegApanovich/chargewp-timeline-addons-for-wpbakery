<?php
/**
 * Plugin entry point.
 *
 * @since 1.0
 */

namespace ChargewpWpbTimeline;

use Exception;
use WPBakeryShortCode;
use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeEmpty;
use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcode;
use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeContainerEmpty;
use ChargewpWpbTimeline\Utils\Requirement;
use ChargewpWpbTimeline\Settings\SettingsManager;

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
		$this->init_settings();
		$this->init_functionality();
	}

	/**
	 * Initialize plugin settings.
	 *
	 * @since 1.3
	 */
	public function init_settings() {
		$settings_manager = new SettingsManager();
		$settings_manager->init();
	}

	/**
	 * Initialize plugin functionality.
	 *
	 * @since 1.3
	 */
	public function init_functionality() {
		add_action( 'init', [ $this, 'add_builder_elements' ] );
		add_action( 'admin_init', [ $this, 'init_custom_element_params' ] );
	}

	/**
	 * Add elements to dependency plugin.
	 *
	 * @since 1.0
	 */
	public function add_builder_elements() {
		$element_list = chargewpwpbtimeline_config( 'elements' );

		foreach ( $element_list as $element_slug => $element_init_data ) {

			$config = chargewpwpbtimeline_config( $element_init_data['config'] );

			$this->map_wpb_shortcode( $config );

			$wpb_shortcode = $this->get_wpb_shortcode_instance( $element_init_data, $config );

			( new ChargeWpbShortcode() )
				->set_element_slug( $element_slug )
				->set_config( $config )
				->set_template( $element_init_data['template'] )
				->set_wpb_shortcode( $wpb_shortcode )
				->set_element_init_data( $element_init_data )
				->add_shortcode();
		}
	}

	/**
	 * Shortcode mapping in WPBakery it an actions that dynamically create attributes for a shortcode.
	 * Then we can use attributes in the element edit window.
	 *
	 * @param array $config Element config.
	 *
	 * @since 1.0
	 */
	public function map_wpb_shortcode( array $config ) {
		try {
			wpb_map( $config );
		} catch ( Exception $e ) {
            // phpcs:ignore
			trigger_error( $e->getMessage(), E_USER_ERROR );
		}
	}

	/**
	 * Check if wpbakery already activated.
	 *
	 * @since 1.0
	 * @return bool
	 */
	public function is_dependency_plugin_active(): bool {
		$requirement = new Requirement();
		$requirement->plugins(
			[
				[
					'path'    => CHARGEWPWPBTIMELINE_WPBAKERY_REQUIRED_PATH,
					'version' => CHARGEWPWPBTIMELINE_WPBAKERY_REQUIRED_VERSION,
					'name'    => CHARGEWPWPBTIMELINE_WPBAKERY_REQUIRED_NAME,
				],
			]
		);

		$is_active = $requirement->met();
		if ( ! $is_active ) {
			add_action(
				'admin_notices',
				function () use ( $requirement ) {
					$requirement->print_notice();
				},
				0,
				0
			);
		}

		return $requirement->met();
	}

	/**
	 * Get shortcode instance.
	 *
	 * @param array $element_init_data Element init data.
	 * @param array $config Element config.
	 *
	 * @return WPBakeryShortCode
	 * @since 1.0
	 */
	public function get_wpb_shortcode_instance( array $element_init_data, array $config ) {
		if ( ! empty( $element_init_data['class'] ) ) {
			// user predefined class.
			return new $element_init_data['class']( $config );
		}

		if ( empty( $element_init_data['is_container'] ) ) {
			$instance = new ChargeWpbShortcodeEmpty( $config );
		} else {
			$instance = new ChargeWpbShortcodeContainerEmpty( $config );
		}
		return $instance;
	}

	/**
	 * Initialize custom element params.
	 *
	 * @since 1.1
	 */
	public function init_custom_element_params() {
		add_filter(
			'wpcustomparamcollection_get_param_prefix',
			function ( $prefix_list ) {
				$prefix_list[] = 'chargewp';
				return $prefix_list;
			}
		);

		if ( ! class_exists( 'Wpbackery_Custom_Param_Collection' ) ) {
			include_once JOYWPTESTIMONIALSWPB_INCLUDES_DIR . '/wpbakery-custom-param-collection/wpbakery-custom-param-collection.php';
		}
	}
}
