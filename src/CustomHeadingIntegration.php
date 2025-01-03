<?php
/**
 * This class helps to integrate vc_custom_heading shortcode
 * to our shortcodes with custom parameters.
 *
 * @since 1.0
 */

namespace WpbPlusTimeline;

use Exception;

defined( 'ABSPATH' ) || exit;

/**
 * Trait CustomHeadingIntegration
 *
 * @since 1.0
 */
class CustomHeadingIntegration {
	/**
	 * Add custom font integration to element attribute textfield.
	 * It appears near the textfield as checkbox, checked it user can
	 * configure custom fonts in a new tab.
	 *
	 * @param string $filed_slug
	 * @param string $field_title
	 * @param array  $condition here we can regulate custom fonts attributes.
	 * @param array  $exclude here we can regulate our excludes from custom container attributes.
	 *  specific tag attributes: 'tag', 'text_align', 'font_size', 'line_height', 'color'.
	 *
	 * @return array
	 * @since 1.0
	 */
	public function add_custom_font_to_field( $filed_slug, $field_title, $condition, $exclude = [] ) {
		$custom_font_atts = $this->get_integration_custom_heading_shortcode( $filed_slug, $field_title, $condition );

		foreach ( $custom_font_atts as $key => $font_attr ) {
			$nothing_to_exclude = empty( $font_attr['type'] ) || 'font_container' !== $font_attr['type'] || empty( $exclude );
			if ( $nothing_to_exclude ) {
				continue;
			}

			// remove any exising default values.
			$custom_font_atts[ $key ]['value'] = '';

			$custom_font_atts = $this->exclude_fields_from_custom_font_container( $custom_font_atts, $key, $exclude );

		}

		return $custom_font_atts;
	}

	/**
	 * Exclude fields from custom font container.
	 *
	 * @pram array $custom_font_atts
	 * @pram string|int $key
	 * @pram array $exclude
	 *
	 * @return array
	 * @since 1.0
	 */
	public function exclude_fields_from_custom_font_container( $custom_font_atts, $key, $exclude ) {
		foreach ( $custom_font_atts[ $key ]['settings']['fields'] as $field_key => $field_value ) {
			if ( in_array( $field_key, $exclude, true ) ) {
				unset( $custom_font_atts[ $key ]['settings']['fields'][ $field_key ] );
			}
			if ( in_array( $field_value, $exclude, true ) ) {
				unset( $custom_font_atts[ $key ]['settings']['fields'][ $field_key ] );
			}
		}

		return $custom_font_atts;
	}

	/**
	 * Get configuration for custom heading shortcode with our custom parameters.
	 *
	 * @pram string $filed_slug
	 * @pram string $field_title
	 * @pram array $condition
	 *
	 * @return array
	 * @since 1.0
	 */
	public function get_integration_custom_heading_shortcode( $filed_slug, $field_title, $condition ) {
		require_once vc_path_dir( 'CONFIG_DIR', 'content/vc-custom-heading-element.php' );

		try {
			$custom_font_atts = vc_map_integrate_shortcode(
				vc_custom_heading_element_params(),
				$filed_slug . '_',
				$field_title,
				$condition,
				[
					'element' => 'use_custom_fonts_' . $filed_slug,
					'value'   => 'true',
				]
			);
		} catch ( Exception $e ) {
			return [];
		}

		// This is needed to remove custom heading options.
		if ( ! is_array( $custom_font_atts ) ) {
			return [];
		}

		return $custom_font_atts;
	}

	/**
	 * Get values for a certain attribute
	 * and attach custom font integration to it if needed.
	 *
	 * @pram string $atts_slug
	 * @pram array $atts
	 * @pram string $shortcode_tag
	 * @pram string $tag wrapper tag
	 *
	 * @since 1.0
	 */
	public function output_custom_font_attribute( $atts_slug, $atts, $shortcode_tag, $tag = '' ) {
		$is_custom_attr_slug = 'use_custom_fonts_' . $atts_slug;
		$is_custom_font      = isset( $atts[ $is_custom_attr_slug ] ) && 'true' === $atts[ $is_custom_attr_slug ];
		$default_value       = esc_html( $atts[ $atts_slug ] );

		if ( ! $is_custom_font ) {
			echo esc_html( $default_value );
			return;
		}

		if ( ! isset( $atts[ $atts_slug ] ) || '' === trim( $atts[ $atts_slug ] ) ) {
			echo '';
			return;
		}

		$custom_heading         = wpbakery()->getShortCode( 'vc_custom_heading' );
		$data                   = vc_map_integrate_parse_atts( $shortcode_tag, 'vc_custom_heading', $atts, $atts_slug . '_' );
		$data['font_container'] = implode(
			'|',
			array_filter(
				[
					$tag ? 'tag:' . $tag : '',
					$data['font_container'],
				]
			)
		);
		$data['text']           = $atts[ $atts_slug ]; // provide text to shortcode.

		$result = $custom_heading->render( array_filter( $data ) );

		// we already has properly escaped value here that we get on integration shortcode level.
        // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo $result;
	}
}
