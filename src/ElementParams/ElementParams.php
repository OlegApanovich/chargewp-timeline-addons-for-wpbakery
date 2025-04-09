<?php
/**
 * Custom element params for wpbakery element controller.
 *
 * @see https://kb.wpbakery.com/docs/developers-how-tos/create-new-param-type
 * @since 1.1
 */

namespace ChargewpWpbTimeline\ElementParams;

defined( 'ABSPATH' ) || exit;

/**
 * Custom params class.
 *
 * @since 1.1
 */
class ElementParams {
	/**
	 * Namespace prefix.
	 *
	 * @since 1.1
	 * @var string
	 */
	public $namespace_prefix = 'ChargewpWpbTimeline\ElementParams\Lib\\';

	/**
	 * Initialize element custom params.
	 *
	 * @since 1.1
	 */
	public function init_custom_element_params() {
		$param_list = chargewpwpbtimeline_config( 'element-custom-params' );

		foreach ( $param_list as $param_slug ) {
			$result = $this->init_single_param( $param_slug );
			if ( ! $result ) {
				trigger_error( "Can't init custom element param " . esc_attr( $param_slug ) . __FILE__ . ' on line ' . __LINE__, E_USER_ERROR );
			}
		}
	}

	/**
	 * Initialize single element custom param.
	 *
	 * @param string $param_slug
	 * @since 1.1
	 *
	 * @return bool
	 */
	public function init_single_param( string $param_slug ): bool {
		$param_instance = $this->get_param_instance( $param_slug );

		if ( version_compare( WPB_VC_VERSION, 4.8 ) >= 0 ) {
			$result = vc_add_shortcode_param( $param_slug, [ $param_instance, 'param_output' ] );
		} else {
			$result = add_shortcode_param( $param_slug, [ $param_instance, 'param_output' ] );
		}

		return $result;
	}

	/**
	 * Get param class instance.
	 *
	 * @param string $param_slug
	 * @return ElementParamsAbstract
	 * @since 1.1
	 */
	public function get_param_instance( string $param_slug ): ElementParamsAbstract {
		$param_class = $this->namespace_prefix . str_replace( ' ', '', ucwords( str_replace( '-', ' ', $param_slug ) ) );

		return new $param_class( $param_slug );
	}
}
