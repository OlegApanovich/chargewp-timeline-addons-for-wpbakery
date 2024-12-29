<?php
/**
 * We use this empty class to only get instance of WPBakeryShortCodesContainer.
 *
 * @note this class should stay always empty.
 * @note if you need place for a common functionality of every PlusWpbShortcode then use PlusWpbShortcode class.
 * @note if you need place for a functionality of a specific shortcode
 * then use the shortcode class in config/elements.php.
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
class PlusWpbShortcodeContainerEmpty extends WPBakeryShortCodesContainer {}
