<?php
/**
 * Class that handles specific [wpbakery-plus-vertical-timeline] shortcode.
 *
 * @since 1.0
 */

namespace WpbPlusTimeline\Shortcodes;

use WPBakeryShortCodesContainer;

defined( 'ABSPATH' ) || exit;

/**
 * VerticalTimeline shortcode class.
 *
 * @since 1.0
 */
class VerticalTimeline extends WPBakeryShortCodesContainer {
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
	 * Constructor.
	 *
	 * @param string $element_slug
	 * @param array  $config
	 * @param string $template
	 * @since 1.0
	 */
	public function __construct( $element_slug, $config, $template ) {
		parent::__construct( $config );
		$this->element_slug = $element_slug;
		$this->template     = $template;

		add_shortcode( $element_slug, array( $this, 'render_shortcode' ) );
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
		$payload = array(
			'atts'    => $atts,
			'content' => $content,
		);

		return wpbplustimeline_get_template( $this->template, $payload );
	}
}
