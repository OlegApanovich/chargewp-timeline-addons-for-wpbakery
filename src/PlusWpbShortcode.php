<?php
/**
 * Class that extend WPBakeryShortCodes class with additional functionality.
 *
 * @since 1.0
 */

namespace WpbPlusTimeline;

use WPBakeryShortCode;

defined( 'ABSPATH' ) || exit;

/**
 * VerticalTimeline shortcode class.
 *
 * @since 1.0
 */
class PlusWpbShortcode {
	/**
	 * Element slug.
	 *
	 * @var string
	 */
	public $element_slug;

	/**
	 * Element template render file.
	 *
	 * @var string
	 */
	public $template;

	/**
	 * Shortcode attributes.
	 *
	 * @var array
	 */
	public $shortcode_atts;

	/**
	 * Shortcode attributes.
	 *
	 * @var array
	 */
	public $config;

	/**
	 * Shortcode id.
	 * It's uniq id that we use only for our plugin elements.
	 *
	 * @var string
	 */
	public $id;

	/**
	 * Shortcode attributes.
	 *
	 * @var WPBakeryShortCode
	 */
	public $wpb_shortcode;

	/**
	 * Set element slug.
	 *
	 * @param string $element_slug
	 * @since 1.0
	 */
	public function set_element_slug( $element_slug ) {
		$this->element_slug = $element_slug;
		return $this;
	}

	/**
	 * Set element template.
	 *
	 * @param string $template
	 * @since 1.0
	 */
	public function set_template( $template ) {
		$this->template = $template;
		return $this;
	}

	/**
	 * Set shortcode attributes.
	 *
	 * @param array $config
	 * @since 1.0
	 */
	public function set_config( $config ) {
		$this->config = $config;
		return $this;
	}

	/**
	 * Set id
	 * It's uniq id that we use only for our plugin elements.
	 *
	 * @param string $element_slug
	 *
	 * @since 1.0
	 */
	public function set_id( $element_slug ) {
		$this->id = uniqid( $element_slug . '-' );

		return $this;
	}

	/**
	 * Set WPBakeryShortCode.
	 *
	 * @param WPBakeryShortCode $wpb_shortcode
	 * @since 1.0
	 */
	public function set_wpb_shortcode( $wpb_shortcode ) {
		$this->wpb_shortcode = $wpb_shortcode;
		return $this;
	}

	/**
	 * Constructor.
	 *
	 * @since 1.0
	 */
	public function add_shortcode() {
		add_shortcode( $this->element_slug, [ $this, 'render_shortcode' ] );
	}

	/**
	 * Render shortcode.
	 *
	 * @param array       $atts
	 * @param string|null $content
	 * @return string
	 * @since 1.0
	 */
	public function render_shortcode( $atts, $content = null ) {
		$this->shortcode_atts = $atts;

		$payload = [
			'atts'    => vc_map_get_attributes( $this->wpb_shortcode->getShortcode(), $atts ),
			'content' => $content,
			'_this'   => $this,
		];

		$this->enqueue_shortcode_asset( 'css' );
		$this->enqueue_shortcode_asset( 'js' );

		return wpbplustimeline_get_template( $this->template, $payload );
	}

	/**
	 * Enqueue shortcode asset.
	 *
	 * @param string $type
	 * @param array  $deps
	 *
	 * @since 1.0
	 */
	public function enqueue_shortcode_asset( $type, $deps = [] ) {
		$css_path = WPBPLUSTIMELINE_INCLUDES_ASSETS_DIR . '/css/shortcodes/' . $this->element_slug . '.' . $type;
		$css_uri  = WPBPLUSTIMELINE_URI . '/assets/css/shortcodes/' . $this->element_slug . '.css';

		if ( file_exists( $css_path ) ) {
			wp_enqueue_style( $this->element_slug, $css_uri, $deps, filemtime( $css_path ) );
		}
	}

	/**
	 * Here we combine initial markup attributes that has our element wrapper
	 * with all attributes that should contain regular wpbakery element
	 * and output them escaped and ready to use in our element wrapper.
	 *
	 * @param array $initial_markup_atts wrapper attributes that has our initial element markup.
	 * @since 1.0
	 */
	public function output_shortcode_wrapper_attributes( $initial_markup_atts = [] ) {
		$classes = $this->get_wrapper_classes( $initial_markup_atts );

		unset( $initial_markup_atts['class'] );
		$element_wrapper_attributes['class']                          = $classes;
		$element_wrapper_attributes['id']                             = empty( $this->shortcode_atts['el_id'] ) ? [] : $this->shortcode_atts['el_id'];
		$element_wrapper_attributes[ $this->get_data_attribute_id() ] = $this->id;

		$element_wrapper_attributes = array_merge( $element_wrapper_attributes, $initial_markup_atts );

		foreach ( $element_wrapper_attributes as $name => $value ) {
			if ( ! empty( $value ) ) {
				echo ' ' . esc_attr( $name ) . '="' . esc_attr( $value ) . '"';
			}
		}
	}

	/**
	 * Get data attribute id.
	 *
	 * @return string
	 * @since 1.0
	 */
	public function get_data_attribute_id() {
		return 'data-plus-wpbakery-shortcode-id';
	}

	/**
	 * Get classes for element wrapper.
	 *
	 * @param array $initial_markup_atts wrapper attributes that has our initial element markup.
	 * @return string
	 * @since 1.0
	 */
	public function get_wrapper_classes( $initial_markup_atts ) {
		$classes  = empty( $this->shortcode_atts['css'] ) ? '' : vc_shortcode_custom_css_class( $this->shortcode_atts['css'], ' ' );
		$classes .= empty( $this->shortcode_atts['el_class'] ) ? '' : $this->wpb_shortcode->getExtraClass( $this->shortcode_atts['el_class'] );
		$classes .= empty( $this->shortcode_atts['css_animation'] ) ? '' : $this->wpb_shortcode->getCSSAnimation( $this->shortcode_atts['css_animation'] );
		$classes .= empty( $initial_markup_atts['class'] ) ? '' : ' ' . $initial_markup_atts['class'];

		return apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $classes, $this->config['base'], $this->shortcode_atts );
	}

	/**
	 * Output uniq id with data attribute that we can use in our styles.
	 *
	 * @since 1.0
	 */
	public function output_style_shortcode_id() {
		echo '[' . esc_attr( $this->get_data_attribute_id() ) . '="' . esc_attr( $this->id ) . '"]';
	}
}
