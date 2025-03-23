<?php
/**
 * Entry point for add plugin elements to dependency plugin.
 *
 * @since 1.0
 */

namespace ChargewpWpbTimeline;

use Exception;
use WPBakeryShortCode;
use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeEmpty;
use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcodeContainerEmpty;
use ChargewpWpbTimeline\ElementParams\ElementParams;

defined( 'ABSPATH' ) || exit;

/**
 * Admin settings
 *
 * @since 1.0
 */
class Charge {
	/**
	 * Initialize plugin.
	 *
	 * @since 1.0
	 */
	public function init() {
		add_action( 'init', [ $this, 'add_builder_elements' ] );
		add_action( 'admin_enqueue_scripts', [ $this, 'register_elements_icons' ] );
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
	 * Then we can use this attributes in element edit window.
	 *
	 * @param array $config Element config.
	 *
	 * @since 1.0
	 */
	public function map_wpb_shortcode( $config ) {
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
	 */
	public function is_dependency_plugin_active() {
		return chargewpwpbtimeline_validate_dependency_plugin(
			'ChargeWP Builder WPBakery Timeline Addons',
			'WPBakery Page Builder',
			'js_composer/js_composer.php',
			'4.0'
		);
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
	public function get_wpb_shortcode_instance( $element_init_data, $config ) {
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
	 * Register elements icons that user can see in 'Add Element' modal.
	 *
	 * @since 1.0
	 */
	public function register_elements_icons() {
		wp_enqueue_style(
			'chargewp-timeline-element-icons',
			CHARGEWPWPBTIMELINE_URI . '/assets/css/chargewp-timeline-element-icons.css',
			[],
			CHARGEWPWPBTIMELINE_VERSION
		);
	}

	/**
	 * Initialize custom element params.
	 *
	 * @since 1.1
	 */
	public function init_custom_element_params() {
		( new ElementParams() )->init_custom_element_params();
	}
}
