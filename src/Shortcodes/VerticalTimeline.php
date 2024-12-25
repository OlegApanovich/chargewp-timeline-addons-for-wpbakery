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
	 * Constructor.
	 *
	 * @param array $config
	 * @since 1.0
	 */
	public function __construct( $config ) {
		parent::__construct( $config );
	}
}
