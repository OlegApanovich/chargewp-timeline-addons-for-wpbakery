<?php
/**
 * Plugin deactivation feedback.
 *
 * @since 1.3
 */

namespace ChargewpWpbTimeline\Settings;

use ChargewpWpbTimeline\Utils\Api;

defined( 'ABSPATH' ) || exit;

class DeactivationFeedback {
	/**
	 * Initialize plugin deactivation feedback functionality.
	 *
	 * @since 1.3
	 */
	public function init() {
		add_action(
			'current_screen',
			function () {
				if ( ! $this->is_plugins_screen() ) {
					return;
				}

				add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_feedback_dialog_style' ] );
				add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_feedback_dialog_scripts' ] );
			}
		);

		add_action( 'wp_ajax_chargewp_timeline_deactivate_feedback', [ $this, 'ajax_plugin_deactivate_feedback' ] );
	}

	/**
	 * Enqueue feedback dialog scripts.
	 *
	 * Registers the feedback dialog scripts and enqueues them.
	 *
	 * @since 1.3
	 */
	public function enqueue_feedback_dialog_scripts() {
		add_action( 'admin_footer', [ $this, 'print_deactivate_feedback_dialog' ] );

		wp_register_script(
			'chargewp-timeline-deactivation-feedback',
			CHARGEWPWPBTIMELINE_URI . '/assets/js/settings/deactivation-popup.js',
			[
				'jquery',
			],
			CHARGEWPWPBTIMELINE_VERSION,
			true
		);

		wp_enqueue_script( 'chargewp-timeline-deactivation-feedback' );
	}

	/**
	 * Enqueue feedback dialog style.
	 *
	 * Registers the feedback dialog styles and enqueues them.
	 *
	 * @since 1.3
	 */
	public function enqueue_feedback_dialog_style() {
		wp_register_style(
			'chargewp-timeline-deactivation-feedback',
			CHARGEWPWPBTIMELINE_URI . '/assets/css/settings/deactivation-popup.css',
			[],
			CHARGEWPWPBTIMELINE_VERSION
		);

		wp_enqueue_style( 'chargewp-timeline-deactivation-feedback' );
	}


	/**
	 * Print deactivate feedback dialog.
	 *
	 * Display a dialog box to ask the user why he deactivated plugin.
	 *
	 * @since 1.3
	 */
	public function print_deactivate_feedback_dialog() {
		chargewpwpbtimeline_include_template(
			'settings/deactivation-popup.php'
		);
	}

	/**
	 * Ajax plugin deactivate feedback.
	 *
	 * Send the user feedback when plugin is deactivated.
	 *
	 * @since 1.3
	 */
	public function ajax_plugin_deactivate_feedback() {
		if ( ! isset( $_POST['_wpnonce'], $_POST['reason_key'] ) ) {
			wp_send_json_error();
		}

		if ( ! wp_verify_nonce( $_POST['_wpnonce'], '_chargewp_deactivate_feedback_action' ) ) {
			wp_send_json_error();
		}

		$reason_key  = wp_kses_post_deep( wp_unslash( $_POST['reason_key'] ) );
		$reason_text = wp_kses_post_deep( wp_unslash( $_POST[ $reason_key . '_details' ] ) ) ?? '';

		$response = Api::send_feedback( $reason_key, $reason_text );

		wp_send_json_success();
	}

	/**
	 * Check if the current screen is the wp plugins page screen.
	 *
	 * @return bool
	 * @since 1.0
	 */
	public function is_plugins_screen(): bool {
		return in_array( get_current_screen()->id, [ 'plugins', 'plugins-network' ] );
	}
}
