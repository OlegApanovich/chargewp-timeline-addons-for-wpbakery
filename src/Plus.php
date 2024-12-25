<?php
/**
 * Entry point for add plugin elements to dependency plugin.
 *
 * @since 1.0
 */

namespace WpbPlusTimeline;

use WpbPlusTimeline\PlusWpbShortcode;

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
		add_action( 'init', array( $this, 'add_builder_elements' ) );
	}

	/**
	 * Add elements to dependency plugin.
	 *
	 * @since 1.0
	 */
	public function add_builder_elements() {
		$element_list = wpbplustimeline_config( 'elements' );

		foreach ( $element_list as $element_slug => $element_init_data ) {

			if ( ! class_exists( $element_init_data['class'] ) ) {
				continue;
			}

			$config = wpbplustimeline_config( $element_init_data['config'] );
			wpb_map( $config );

			$wpb_shortcode = new $element_init_data['class']($config);

             (new PlusWpbShortcode())
                ->setElementSlug($element_slug)
                ->setConfig($config)
                ->setTemplate($element_init_data['template'])
                ->setWpbShortcode($wpb_shortcode)
                ->add_shortcode();
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
}
