<?php
/**
 * Entry point for add plugin elements to dependency plugin.
 *
 * @since 1.0
 */

namespace WpbPlusTimeline;

use Exception;
use WPBakeryShortCode;
use WpbPlusTimeline\Shortcodes\PlusWpbShortcodeEmpty;
use WpbPlusTimeline\Shortcodes\PlusWpbShortcodeContainerEmpty;

defined( 'ABSPATH' ) || exit;

/**
 * Admin settings
 *
 * @since 1.0
 */
class Plus {
	/**
	 * Initialize plugin.
	 *
	 * @since 1.0
	 */
	public function init() {
		add_action( 'init', [ $this, 'add_builder_elements' ] );
		add_action( 'admin_enqueue_scripts', [ $this, 'register_elements_icons' ] );
	}

	/**
	 * Add elements to dependency plugin.
	 *
	 * @since 1.0
	 */
	public function add_builder_elements() {
		$element_list = wpbplustimeline_config( 'elements' );

		foreach ( $element_list as $element_slug => $element_init_data ) {

			$config = wpbplustimeline_config( $element_init_data['config'] );

			$this->map_wpb_shortcode( $config );

			$wpb_shortcode = $this->get_wpb_shortcode_instance( $element_init_data, $config );

			( new PlusWpbShortcode() )
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
		return wpbplustimeline_validate_dependency_plugin(
			'WPBakery Page Builder Plus Timeline Element',
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
			$instance = new PlusWpbShortcodeContainerEmpty( $config );
		} else {
			$instance = new PlusWpbShortcodeEmpty( $config );
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
            'plus-wpb-timeline-element-icons',
            WPBPLUSTIMELINE_URI . '/assets/css/plus-wpb-timeline-element-icons.css'
        );
    }
}
