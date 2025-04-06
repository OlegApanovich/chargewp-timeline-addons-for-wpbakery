<?php
/**
 * This class helps to integrate vc_icon shortcode
 * to our shortcodes with custom parameters.
 *
 * @since 1.0
 */

namespace ChargewpWpbTimeline;

defined( 'ABSPATH' ) || exit;

/**
 * Class CustomIconIntegration
 *
 * @since 1.0
 */
class CustomIconIntegration {
	/**
	 * Get custom icon checkbox field params.
	 *
	 * @since 1.0
	 * @param array $exclude
	 * @return array
	 */
	public function add_icon_checkbox( $exclude = [] ) {
		require_once vc_path_dir( 'CONFIG_DIR', 'content/vc-icon-element.php' );

		$icon_params = [
			[
				'type'        => 'checkbox',
				'param_name'  => 'add_icon',
				'heading'     => esc_html__( 'Add icon?', 'js_composer' ),
				'description' => esc_html__( 'Add icon next to section title.', 'js_composer' ),
			],
		];

		$exclude = array_merge( $this->get_always_exclude_params(), $exclude );

		$include_params     = [ 'exclude' => $exclude ];
		$integration_params = [
			'element' => 'add_icon',
			'value'   => 'true',
		];

		return array_merge(
			$icon_params,
			vc_map_integrate_shortcode(
				vc_icon_element_params(),
				'i_',
				'',
				$include_params,
				$integration_params
			)
		);
	}

	/**
	 * Get icon elements params list that we always exclude when integrate icon shortcode.
	 *
	 * @return array
	 */
	public function get_always_exclude_params() {
		return [
			'css_animation',
			'el_id',
			'el_class',
			'css',
		];
	}

	/**
	 * Get icon class base on user selection.
	 *
	 * @since 1.0
	 * @param array $atts
	 * @return string
	 */
	public function get_element_icon_class( $atts ) {
		return $atts[ 'i_icon_' . $atts['i_type'] ];
	}

	/**
	 * Get icon class base on user selection.
	 *
	 * @since 1.0
	 * @param array $atts
	 * @return string
	 */
	public function get_element_icon_color( $atts ) {
		if ( 'custom' === $atts['i_color'] ) {
			return $atts['i_custom_color'];
		}

		return $this->get_icon_color_from_color_lib( $atts['i_color'] );
	}

	/**
	 * Get icon color from color library.
	 *
	 * @since 1.0
	 * @param string $color_name
	 * @return string
	 */
	public function get_icon_color_from_color_lib( $color_name ) {
		$color_lib = [
			'blue'        => '#5472D2',
			'turquoise'   => '#00C1CF',
			'pink'        => '#FE6C61',
			'violet'      => '#8D6DC4',
			'peacoc'      => '#4CADC9',
			'chino'       => '#CEC2AB',
			'mulled_wine' => '#50485B',
			'vista_blue'  => '#75D69C',
			'black'       => '#2A2A2A',
			'grey'        => '#EBEBEB',
			'orange'      => '#F7BE68',
			'sky'         => '#5AA1E3',
			'green'       => '#6DAB3C',
			'juicy_pink'  => '#F4524D',
			'sandy_brown' => '#F79468',
			'purple'      => '#B97EBB',
			'white'       => '#FFFFFF',
			'default'     => '#111111',
		];

		return isset( $color_lib[ $color_name ] ) ? $color_lib[ $color_name ] : $color_lib['default'];
	}

    /**
     * Output integrated icon
     *
     * @since 1.1
     * @param ChargeWpbShortcode $shortcode
     * @param array $atts
     * @param string $prefix
     */
    public function output_icon_integration( $shortcode, $atts, $prefix ) {
        // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        echo $shortcode->get_integrated_shortcode_output( $atts, 'vc_icon', $prefix );
    }
}
