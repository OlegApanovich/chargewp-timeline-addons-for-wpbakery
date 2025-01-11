<?php
/**
 * Library of helper functions.
 *
 * @since 1.0
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wpbplustimeline_validate_dependency_plugin' ) ) :
	/**
	 * Verify if a plugin is active, if not than deactivate the actual our plugin and show an error.
	 *
	 * @since  1.0
	 *
	 * @param string $my_plugin_name The plugin name trying to activate. The name of this plugin.
	 * @param string $dependency_plugin_name The dependency plugin name.
	 * @param string $path_to_plugin Path of the plugin
	 * to verify with the format 'dependency_plugin/dependency_plugin.php'.
	 * @param string $version_to_check Optional, verify certain version of the dependent plugin.
	 *
	 * @return bool
	 */
	function wpbplustimeline_validate_dependency_plugin(
		$my_plugin_name,
		$dependency_plugin_name,
		$path_to_plugin,
		$version_to_check = null
	) {
		$template_payload = [
			'my_plugin_name'         => $my_plugin_name,
			'dependency_plugin_name' => $dependency_plugin_name,
			'version_to_check'       => $version_to_check,
		];
		// Needed to the function "is_plugin_active" works.
		include_once ABSPATH . 'wp-admin/includes/plugin.php';
		$main_plugin_file = WP_PLUGIN_DIR . '/' . $path_to_plugin;

		if ( ! is_plugin_active( $path_to_plugin ) || ! file_exists( $main_plugin_file ) ) {
			wpbplustimeline_output_plugin_dependen_notice( $template_payload );
			return false;
		}

		if ( is_readable( $main_plugin_file ) ) {
			$version =
				wpbplustimeline_get_plugin_version( $main_plugin_file );

			// Compare version.
			$is_required_version = ! version_compare(
				$version,
				$version_to_check,
				'>='
			);

			if ( $is_required_version ) {
				wpbplustimeline_output_plugin_dependen_notice( $template_payload );
				return false;
			}
		}

		return true;
	}
endif;

if ( ! function_exists( 'wpbplustimeline_output_plugin_dependen_notice' ) ) :
	/**
	 * Output the plugin dependency notice.
	 *
	 * @param string $template_payload
	 */
	function wpbplustimeline_output_plugin_dependen_notice( $template_payload ) {
		add_action(
			'admin_notices',
			function () use ( $template_payload ) {
				wpbplustimeline_include_template( 'required-plugin-notification.php', $template_payload );
			}
		);
	}
endif;

if ( ! function_exists( 'wpbplustimeline_get_plugin_version' ) ) :
	/**
	 * Get the plugin version, parsing main plugin file.
	 *
	 * @param string $plugin_file_path
	 *
	 * @return bool|string
	 */
	function wpbplustimeline_get_plugin_version( $plugin_file_path ) {
        // phpcs:ignore:WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
		$plugin_data = file_get_contents( $plugin_file_path );
		if ( preg_match( '/^[ \t\/*#@]*[Vv]ersion\s*:\s*([^\r\n]+)/m', $plugin_data, $matches ) ) {
			return trim( $matches[1] );
		}
		return false;
	}
endif;

if ( ! function_exists( 'wpbplustimeline_include_template' ) ) :
	/**
	 * Include template from templates dir.
	 *
	 * @param string $template
	 * @param array  $variables - passed variables to the template.
	 *
	 * @param bool   $once
	 *
	 * @return mixed
	 * @since 1.0
	 */
	function wpbplustimeline_include_template( $template, $variables = [], $once = false ) {
        // phpcs:ignore:WordPress.PHP.DontExtract.extract_extract
		is_array( $variables ) && extract( $variables );
		if ( $once ) {
			return require_once wpbplustimeline_template( $template );
		} else {
			return require wpbplustimeline_template( $template );
		}
	}
endif;

if ( ! function_exists( 'wpbplustimeline_get_template' ) ) :
	/**
	 * Output template from templates dir.
	 *
	 * @param string $template
	 * @param array  $variables - passed variables to the template.
	 *
	 * @param bool   $once
	 *
	 * @return string
	 * @since 1.0
	 */
	function wpbplustimeline_get_template( $template, $variables = [], $once = false ) {
		ob_start();
		$output = wpbplustimeline_include_template( $template, $variables, $once );

		if ( 1 === $output ) {
			$output = ob_get_contents();
		}

		ob_end_clean();

		return $output;
	}
endif;

if ( ! function_exists( 'wpbplustimeline_template' ) ) :
	/**
	 * Shorthand for getting to plugin templates.
	 *
	 * @param string $file
	 *
	 * @since 1.0
	 *
	 * @return string
	 */
	function wpbplustimeline_template( $file ) {
		return WPBPLUSTIMELINE_TEMPLATES_DIR . '/' . $file;
	}
endif;

if ( ! function_exists( 'wpbplustimeline_config' ) ) :
	/**
	 * Retrieve a configuration value from a file in the config directory.
	 *
	 * @param string $config_path The path to the configuration value, e.g. 'elements.foo'.
	 *
	 * @return mixed The configuration value.
	 */
	function wpbplustimeline_config( $config_path ) {
		static $loaded_configs = [];

		// Replace dots with slashes, except for the last dot.
		$path = str_replace( '.', '/', $config_path );

		// Check if the config file has already been loaded.
		if ( ! isset( $loaded_configs[ $path ] ) ) {
			$file_path = WPBPLUSTIMELINE_CONFIG_DIR . '/' . $path . '.php';

			// Load the configuration file.
			// This will throw a fatal error if the file does not exist.
			$loaded_configs[ $path ] = include $file_path;
		}

		// Retrieve config value.
		return $loaded_configs[ $path ];
	}
endif;
