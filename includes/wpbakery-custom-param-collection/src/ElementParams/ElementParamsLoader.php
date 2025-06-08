<?php
/**
 * Custom element params for wpbakery element controller.
 *
 * @see https://kb.wpbakery.com/docs/developers-how-tos/create-new-param-type
 */

namespace WpbCustomParamCollection\ElementParams;

defined( 'ABSPATH' ) || exit;

/**
 * ElementParamsLoader class.
 */
class ElementParamsLoader {
	/**
	 * Namespace prefix.
	 *
	 * @var string
	 */
	public $namespace_prefix = 'WpbCustomParamCollection\ElementParams\Lib\\';

	/**
	 * Param prefix.
	 *
	 * @var string
	 */
	public $param_prefix;

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_filter( 'vc_get_editor_locale', [ $this, 'localize_wpb_editors' ], 20 );
	}

	/**
	 * Localization for js code in WPBakery Page Builder editors.
	 *
	 * @param array $localization
	 * @return array
	 */
	public function localize_wpb_editors( array $localization ): array {
		$localization['wcp_param_prefix'] = $this->get_param_prefix();

		return $localization;
	}

	/**
	 * Get param prefix.
	 *
	 * @return string
	 */
	public function get_param_prefix(): string {
		if ( empty( $this->param_prefix ) ) {
			$prefix = WPBCUSTOMPARAMCCOLECTION_PARAM_PREFIX;
		} else {
			$prefix = $this->param_prefix;
		}

		return (string) apply_filters( 'wpcustomparamcollection_get_param_prefix', $prefix );
	}

	/**
	 * Load element custom params.
	 */
	public function load_custom_element_params() {
		$param_list = wpbcustomparamcollection_config( 'element-custom-params' );

		foreach ( $param_list as $param_slug => $param_defaults ) {
			$result = $this->load_single_param( $param_slug, $param_defaults );

			if ( ! $result ) {
				trigger_error( "Can't init custom element param " . esc_attr( $param_slug ) . __FILE__ . ' on line ' . __LINE__, E_USER_ERROR );
			}
		}
	}

	/**
	 * Initialize single element custom param.
	 *
	 * @param string $param_slug
	 * @param array  $param_defaults
	 *
	 * @return bool
	 */
	public function load_single_param( string $param_slug, array $param_defaults ): bool {
		$param_instance = $this->get_param_instance( $param_slug, $param_defaults );

		$param_script = $this->get_param_script( $param_slug );
		$param_slug   = $this->get_param_prefix() . '_' . $param_slug;
		// as wpbakery does not have a system to include param styles we output styles together with param output.
		// @see ElementParamsAbstract::param_output().

		return vc_add_shortcode_param( $param_slug, [ $param_instance, 'param_output' ], $param_script );
	}

	/**
	 * Get param script.
	 *
	 * @param string $param_slug
	 * @return string|null
	 */
	public function get_param_script( $param_slug ) {
		$path             = '/js/params/' . $param_slug . '.js';
		$param_script     = WPBCUSTOMPARAMCCOLECTION_ASSETS_DIR . $path;
		$param_script_url = WPBCUSTOMPARAMCCOLECTION_ASSETS_URI . $path;

		return file_exists( $param_script ) ? $param_script_url : null;
	}

	/**
	 * Get param class instance.
	 *
	 * @param string $param_slug
	 * @param array  $param_defaults
	 * @return ElementParamsAbstract
	 */
	public function get_param_instance( string $param_slug, array $param_defaults ): ElementParamsAbstract {
		$param_class = $this->namespace_prefix . str_replace( ' ', '', ucwords( str_replace( '_', ' ', $param_slug ) ) );

		return new $param_class( $param_slug, $param_defaults );
	}
}
