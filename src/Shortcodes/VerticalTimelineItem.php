<?php
/**
 * Class that handles specific [wpbakery-plus-vertical-timeline-item] shortcode.
 *
 * @since 1.0
 */

namespace WpbPlusTimeline\Shortcodes;

use WPBakeryShortCode;

defined( 'ABSPATH' ) || exit;

/**
 * VerticalTimeline shortcode class.
 *
 * @since 1.0
 */
class VerticalTimelineItem extends WPBakeryShortCode {
	/**
	 * Constructor.
	 *
	 * @param array  $config
	 * @since 1.0
	 */
	public function __construct( $config ) {
		parent::__construct( $config );
	}
}
