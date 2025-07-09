<?php
/**
 * Api utils class.
 *
 * @since 1.3
 */

namespace ChargewpWpbTimeline\Utils;

use WP_Error;

/**
 * Plugin API.
 *
 * Plugin API utils class is responsible for communicating with plugin remote servers.
 *
 * @since 1.3
 */
class Api {
	/**
	 * API URL
	 *
	 * @var string
	 * @since 1.3
	 */
	private static $api_url = 'https://api.joywp.com';

	/**
	 * Endpoint's library
	 *
	 * @var array
	 * @since 1.3
	 */
	private static $endpoint_lib = [
		'plugin_deactivation_feedback' => 'plugin-deactivation-feedback',
	];

	/**
	 * We call endpoint here the full path for a specific API request.
	 *
	 * @since 1.3
	 * @param string $endpoint_slug
	 * @return string
	 */
	private static function get_endpoint( $endpoint_slug ): string {

		if ( ! isset( self::$endpoint_lib[ $endpoint_slug ] ) ) {
			return '';
		}

		return self::$api_url . '/' . self::$endpoint_lib[ $endpoint_slug ];
	}

	/**
	 * Send Feedback.
	 *
	 * Fires a request to the plugin server with the feedback data
	 *
	 * @param string $feedback_key Feedback key.
	 * @param string $feedback_text Feedback text.
	 * @return array|WP_Error The response of the request.
	 * @since 1.3
	 */
	public static function send_feedback( string $feedback_key, string $feedback_text ) {
		$plugin_slug = basename( dirname( CHARGEWPWPBTIMELINE_PLUGIN_FILE ) );

		return wp_remote_post(
			self::get_endpoint( 'plugin_deactivation_feedback' ),
			[
				'timeout' => 30,
				'body'    => [
					'plugin'         => $plugin_slug,
					'plugin_version' => CHARGEWPWPBTIMELINE_VERSION,
					'reason'         => $feedback_key,
					'reason_text'    => $feedback_text,
				],
			]
		);
	}
}
