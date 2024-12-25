<?php
/** z
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
     * Shortcode attributes.
     *
     * @var WPBakeryShortCode
     */
    public $wpbShortcode;

    /**
     * Set element slug.
     *
     * @param string $element_slug
     * @since 1.0
     */
    public function setElementSlug($element_slug){
        $this->element_slug = $element_slug;
        return $this;
    }

    /**
     * Set element template.
     *
     * @param string $template
     * @since 1.0
     */
    public function setTemplate($template)
    {
        $this->template = $template;
        return $this;
    }

    /**
     * Set shortcode attributes.
     *
     * @param array $config
     * @since 1.0
     */
    public function setConfig($config)
    {
        $this->config = $config;
        return $this;
    }

    /**
     * Set WPBakeryShortCode.
     *
     * @param WPBakeryShortCode $wpbShortcode
     * @since 1.0
     */
    public function setWpbShortcode($wpbShortcode) {
        $this->wpbShortcode = $wpbShortcode;
        return $this;
    }

	/**
	 * Constructor.
	 *
	 * @since 1.0
	 */
	public function add_shortcode() {
		add_shortcode( $this->element_slug, array( $this, 'render_shortcode' ) );
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

		$payload = array(
			'atts'    => $atts,
			'content' => $content,
			'_this' => $this,
		);

		return wpbplustimeline_get_template( $this->template, $payload );
	}

    /**
     * Here we combine initial markup attributes that has our element wrapper
     * with all attributes that should contain regular wpbakery element
     * and output them escaped and ready to use in our element wrapper.
     *
     * @param array $initial_markup_atts wrapper attributes that has our initial element markup
     * @since 1.0
     */
    public function outputShortcodeWrapperAttributes( $initial_markup_atts = [] ) {
        $classes = $this->getWrapperClasses( $initial_markup_atts );

        unset($initial_markup_atts['class']);
        $element_wrapper_attributes['class'] = $classes;
        $element_wrapper_attributes['id'] = empty($this->shortcode_atts['el_id'] ) ? [] : $this->shortcode_atts['el_id'];

        $element_wrapper_attributes = array_merge( $element_wrapper_attributes, $initial_markup_atts );

        foreach ( $element_wrapper_attributes as $name => $value ) {
            if ( ! empty( $value ) ) {
                echo ' ' . esc_attr( $name ) . '="' . esc_attr( $value ) . '"';
            }
        }
    }

    /**
     * Get classes for element wrapper.
     *
     * @param array $initial_markup_atts wrapper attributes that has our initial element markup
     * @return string
     * @since 1.0
     */
    public function getWrapperClasses( $initial_markup_atts ) {
        $classes = empty($this->shortcode_atts['css'] ) ? '' : vc_shortcode_custom_css_class($this->shortcode_atts['css'], ' ');
        $classes .= empty($this->shortcode_atts['el_class']) ? '' : $this->wpbShortcode->getExtraClass( $this->shortcode_atts['el_class'] );
        $classes .= empty( $this->shortcode_atts['css_animation'] ) ? '' : $this->wpbShortcode->getCSSAnimation( $this->shortcode_atts['css_animation'] );
        $classes .= empty($initial_markup_atts['class']) ? '' : ' ' . $initial_markup_atts['class'];

        return apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $classes, $this->config['base'], $this->shortcode_atts );
    }
}
