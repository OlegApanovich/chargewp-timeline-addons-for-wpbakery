<?php
/**
 * Grouped element params functionality for WPBakery Page Builder.
 */

namespace WpbCustomParamCollection\ParamsFunctionality;

defined( 'ABSPATH' ) || exit;

/**
 * ElementParamsLoader class.
 */
class Grouped {
	/**
	 * Initialize grouped element params functionality.
	 */
	public function init() {
		add_filter( 'vc_single_param_edit_holder_output', [ $this, 'add_wrapper_for_grouped_params' ], 10, 2 );
	}

	/**
	 * Add div wrapper for grouped params.
	 *
	 * @param string $output The output HTML.
	 * @return string Modified output HTML with grouped params.
	 */
	public function add_wrapper_for_grouped_params( $output, $param ) {
		if ( empty( $param['wcp_group'] ) ) {
			return $output;
		}

		$color = '#4873c9';
		if ( ! empty( $param['wcp_group_color'] ) ) {
			$color = $param['wcp_group_color'];
		}

		$margin = 'margin-left: 5px;';
		if ( ! empty( $param['wcp_group_margin_top'] ) ) {
			$margin .= ' margin-top: ' . esc_attr( $param['wcp_group_margin_top'] ) . 'px;';
		}
		if ( ! empty( $param['wcp_group_margin_bottom'] ) ) {
			$margin .= ' margin-bottom: ' . esc_attr( $param['wcp_group_margin_bottom'] ) . 'px;';
		}

		$style = 'style="border-left: 5px solid ' . esc_attr( $color ) . '; ' . $margin . '"';

		return str_replace( 'data-vc-ui-element="panel-shortcode-param"', 'data-vc-ui-element="panel-shortcode-param" ' . $style, $output );
	}
}
