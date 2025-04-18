<?php
/**
 * Class that extend WPBakeryShortCodes class with additional functionality.
 *
 * @since 1.0
 */

namespace ChargewpWpbTimeline\Shortcodes;

use WPBakeryShortCode;

defined( 'ABSPATH' ) || exit;

/**
 * VerticalTimeline shortcode class.
 *
 * @since 1.0
 */
class ChargeWpbShortcode {
	/**
	 * Element slug.
	 *
	 * @since 1.0
	 * @var string
	 */
	public $element_slug;

	/**
	 * Element template render file.
	 *
	 * @since 1.0
	 * @var string
	 */
	public $template;

	/**
	 * Shortcode attributes.
	 *
	 * @since 1.0
	 * @var array
	 */
	public $shortcode_atts;

	/**
	 * Shortcode attributes.
	 *
	 * @since 1.0
	 * @var array
	 */
	public $config;

	/**
	 * Shortcode id.
	 * It's uniq id that we use only for our plugin elements.
	 *
	 * @since 1.0
	 * @var string
	 */
	public $id;

	/**
	 * Shortcode attributes.
	 *
	 * @since 1.0
	 * @var WPBakeryShortCode
	 */
	public $wpb_shortcode;

	/**
	 * We set this data for each element in config/elements.php.
	 *
	 * @since 1.0
	 * @var array
	 */
	public $element_init_data;

	/**
	 * External assets prefix.
	 *
	 * @since 1.1
	 * @var string
	 */
	public $external_assets_prefix = 'chargewp';

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
	 * Set element init data.
	 *
	 * @param array $element_init_data
	 * @since 1.0
	 */
	public function set_element_init_data( $element_init_data ) {
		$this->element_init_data = $element_init_data;
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

		$this->id = uniqid( $this->element_slug . '-' );

		$this->enqueue_shortcode_assets();

		return chargewpwpbtimeline_get_template( $this->template, $payload );
	}

	/**
	 * Enqueue shortcode asset css.
	 *
	 * @param string $file_name
	 * @param array  $deps
	 *
	 * @since 1.0
	 */
	public function enqueue_shortcode_asset_css( $file_name, $deps = [] ) {
		$path = $this->get_shortcode_asset_path( $file_name, 'css' );
		$uri  = $this->get_shortcode_asset_uri( $file_name, 'css' );

		if ( ! file_exists( $path ) ) {
			return;
		}

		wp_enqueue_style( $this->element_slug . '-' . $file_name, $uri, $deps, filemtime( $path ) );
	}

	/**
	 * Enqueue shortcode asset js.
	 *
	 * @param string $file_name
	 * @param array  $deps
	 * @since 1.0
	 */
	public function enqueue_shortcode_asset_js( $file_name, $deps = [] ) {
		$path = $this->get_shortcode_asset_path( $file_name, 'js' );
		$uri  = $this->get_shortcode_asset_uri( $file_name, 'js' );

		if ( ! file_exists( $path ) ) {
			return;
		}

		wp_enqueue_script( $this->element_slug . '-' . $file_name, $uri, $deps, filemtime( $path ), true );
	}

	/**
	 * Get path to shortcode asset.
	 *
	 * @param string $file_name
	 * @param string $type
	 * @since 1.0
	 */
	public function get_shortcode_asset_path( $file_name, $type ) {
		return CHARGEWPWPBTIMELINE_ASSETS_DIR . '/' . $type . '/shortcodes/' . $this->element_slug . '/' . $file_name;
	}

	/**
	 * Get uri to shortcode asset.
	 *
	 * @param string $file_name
	 * @param string $type
	 * @since 1.0
	 */
	public function get_shortcode_asset_uri( $file_name, $type ) {
		return CHARGEWPWPBTIMELINE_URI . '/assets/' . $type . '/shortcodes/' . $this->element_slug . '/' . $file_name;
	}

	/**
	 * Enqueue shortcode dependency assets.
	 * They can be inner and external
	 * Inner assets we keep in the same directory where regular shortcode assets
	 * External assets provided in shortcode config by url.
	 *
	 * @since 1.0
	 */
	public function enqueue_shortcode_assets() {
		if ( empty( $this->element_init_data['depend_assets'] ) ) {
			return;
		}

		$this->enqueue_shortcode_inner_assets( $this->element_init_data['depend_assets'] );
		$this->enqueue_shortcode_external_assets( $this->element_init_data['depend_assets'] );
	}

	/**
	 * Enqueue shortcode dependency inner assets.
	 *
	 * @param array $depend_assets
	 * @since 1.0
	 */
	public function enqueue_shortcode_inner_assets( $depend_assets ) {
		if ( empty( $depend_assets['inner'] ) ) {
			return;
		}

		foreach ( $depend_assets['inner'] as $type => $assets_list ) {
			foreach ( $assets_list as $asset ) {
				if ( 'js' === $type ) {
					$this->enqueue_shortcode_asset_js( $asset );
				} elseif ( 'css' === $type ) {
					$this->enqueue_shortcode_asset_css( $asset );
				}
			}
		}
	}

	/**
	 * Enqueue shortcode dependency external assets.
	 *
	 * @param array $depend_assets
	 * @since 1.0
	 */
	public function enqueue_shortcode_external_assets( $depend_assets ) {
		if ( empty( $depend_assets['external'] ) ) {
			return;
		}

		foreach ( $depend_assets['external'] as $type => $assets_list ) {
			foreach ( $assets_list as $asset_name => $asset_url ) {
				if ( 'js' === $type ) {
					wp_enqueue_script( $this->external_assets_prefix . '-' . $asset_name, $asset_url, [], CHARGEWPWPBTIMELINE_VERSION, true );
				} elseif ( 'css' === $type ) {
					wp_enqueue_style( $this->external_assets_prefix . '-' . $asset_name, $asset_url, [], CHARGEWPWPBTIMELINE_VERSION );
				}
			}
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
		return 'data-chargewp-shortcode-id';
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

	/**
	 * We use it when want to get output template element shortcode
	 * that was already integrated in current element.
	 *
	 * @since 1.1
	 * @param array  $atts
	 * @param string $integrated_slug
	 * @param string $integrated_prefix we use this prefix to find integrated shortcode atts,
	 * that contains our current shortcode atts.
	 *
	 * @return string
	 */
	public function get_integrated_shortcode_output( $atts, $integrated_slug, $integrated_prefix ) {
		$data = vc_map_integrate_parse_atts( $this->element_slug, $integrated_slug, $atts, $integrated_prefix );
		if ( $data ) {
			$integrated_shortcode = wpbakery()->getShortCode( 'vc_icon' );
			if ( is_object( $integrated_shortcode ) ) {
				return $integrated_shortcode->render( array_filter( $data ) );
			}
		}

		return '';
	}
}
