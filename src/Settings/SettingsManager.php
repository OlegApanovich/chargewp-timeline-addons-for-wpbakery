<?php
/**
 * Plugin settings manager.
 *
 * @since 1.3
 */

namespace ChargewpWpbTimeline\Settings;

defined( 'ABSPATH' ) || exit;

/**
 * Class SettingsManager
 *
 * @since 1.3
 */
class SettingsManager {
	/**
	 * Initialize settings manager.
	 *
	 * @since 1.3
	 */
	public function init() {
		$deactivation_feedback = new DeactivationFeedback();
		$deactivation_feedback->init();
	}
}
