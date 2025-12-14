<?php
/**
 * Loader for a custom element params for wpbakery element.
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
		$localization['wcp_param_prefix_list'] = $this->get_param_prefix_list();

		return $localization;
	}

	/**
	 * Get param prefix.
	 *
	 * @return array
	 */
	public function get_param_prefix_list(): array {
		$prefix_list = (array) apply_filters( 'wpcustomparamcollection_get_param_prefix', [] );
		if ( empty( $prefix_list ) ) {
			$prefix_list = [ WPBCUSTOMPARAMCCOLECTION_PARAM_PREFIX ];
		}

		return $prefix_list;
	}

	/**
	 * Load element custom params.
	 */
	public function load_custom_element_params() {
		$param_list = wpbcustomparamcollection_config( 'element-custom-params' );

		foreach ( $param_list as $param_slug => $param_defaults ) {
			foreach ( $this->get_param_prefix_list() as $prefix ) {
				$prefix_slug = $prefix . '_' . $param_slug;
				$result      = $this->load_single_param( $param_slug, $param_defaults, $prefix_slug );

				if ( ! $result ) {
					trigger_error( "Can't init custom element param " . esc_attr( $param_slug ) . __FILE__ . ' on line ' . __LINE__, E_USER_ERROR );
				}
			}
		}
	}

	/**
	 * Initialize single element custom param.
	 *
	 * @param string $param_slug
	 * @param array  $param_defaults
	 * @param string $prefix_slug
	 *
	 * @return bool
	 */
	public function load_single_param( string $param_slug, array $param_defaults, string $prefix_slug ): bool {
		$param_instance = $this->get_param_instance( $param_slug, $param_defaults );

		$param_script = $this->get_param_script( $param_slug );
		// as wpbakery does not have a system to include param styles we output styles together with param output.
		// @see ElementParamsAbstract::param_output().

		return vc_add_shortcode_param( $prefix_slug, [ $param_instance, 'param_output' ], $param_script );
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
