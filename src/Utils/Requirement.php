<?php
/**
 * Requirements utils class.
 *
 * @since 1.2
 */

namespace ChargewpWpbTimeline\Utils;

/**
 * Requirement.
 *
 * @since 1.2
 */
class Requirement {

	/**
	 * The list of requirements that do not meet.
	 *
	 * @since 1.2
	 * @var list<string>
	 */
	protected $does_not_meet = [];

	/**
	 * Requirement constructor.
	 *
	 * @since 1.2
	 */
	public function __construct() {
		require_once ABSPATH . 'wp-admin/includes/plugin.php';
	}

	/**
	 * Get the status of the requirements check.
	 *
	 * @since 1.2
	 */
	public function met(): bool {
		return [] === $this->does_not_meet;
	}

	/**
	 * Check if the plugin is running on PHP version greater than or equal to
	 * the specified version.
	 *
	 * @since 1.2
	 * @param string $min_version The minimum PHP version required.
	 */
	public function php( string $min_version ): self {
		if ( version_compare( PHP_VERSION, $min_version, '<' ) ) {
			$this->does_not_meet[] = sprintf( '<strong>%s</strong> <code>%s</code> or higher', 'PHP', $min_version );
		}
		return $this;
	}

	/**
	 * Check if the plugin is running on WordPress version greater than or equal to
	 * the specified version.
	 *
	 * @since 1.2
	 * @param string $min_version The minimum WordPress version required.
	 */
	public function wp( string $min_version ): self {
		if ( version_compare( get_bloginfo( 'version' ), $min_version, '<' ) ) {
			$this->does_not_meet[] = sprintf( '<strong>%s</strong> <code>%s</code> or higher', 'WordPress', $min_version );
		}
		return $this;
	}

	/**
	 * Check if the plugin is running on multisite.
	 *
	 * @since 1.2
	 * @param bool $must Whether the plugin must be running on multisite.
	 */
	public function multisite( bool $must ): self {
		if ( $must && ! is_multisite() ) {
			$this->does_not_meet[] = 'WordPress Multisite';
		}
		return $this;
	}

	/**
	 * Check if plugins are active and may have the minimum version specified.
	 *
	 * @since 1.2
	 * @param array $plugins The plugins to check. Use the plugin file path, e.g. `['js_composer/js_composer.php' => '10.0',]`.
	 */
	public function plugins( array $plugins ): self {
		foreach ( $plugins as $index => $value ) {
			if ( is_int( $index ) ) {
				$this->process_plugin_path( $value );
			} else {
				$this->process_plugin_path_with_version( $index, $value );
			}
		}
		return $this;
	}

	/**
	 * Process the plugin path.
	 *
	 * @since 1.2
	 * @param string $plugin_path
	 * @return void
	 */
	private function process_plugin_path( string $plugin_path ) {
		if ( is_plugin_active( $plugin_path ) ) {
			return;
		}

		$plugin_name           = get_plugin_data( WP_PLUGIN_DIR . '/' . $plugin_path, true, false )['Name'];
		$this->does_not_meet[] = sprintf( '<strong>%s</strong>', $plugin_name );
	}


	/**
	 * Process the plugin path with version.
	 *
	 * @since 1.2
	 * @param string $plugin_path
	 * @param string $version
	 * @return void
	 */
	private function process_plugin_path_with_version( string $plugin_path, string $version ) {
		$plugin_name = get_plugin_data( WP_PLUGIN_DIR . '/' . $plugin_path, true, false )['Name'];
		if ( ! is_plugin_active( $plugin_path ) ) {
			$this->does_not_meet[] = sprintf( '<strong>%s</strong>', $plugin_name );
		} elseif ( version_compare( get_plugin_data( WP_PLUGIN_DIR . '/' . $plugin_path, true, false )['Version'], $version, '<' ) ) {
			$this->does_not_meet[] = sprintf( '<strong>%s</strong> <code>%s</code> or higher', $plugin_name, $version );
		}
	}

	/**
	 * Check if the site is using the specified theme.
	 *
	 * @since 1.2
	 * @param string      $parent_theme The parent theme to check.
	 * @param string|null $version The minimum version of the parent theme.
	 */
	public function theme( string $parent_theme, string $version = null ): self {
		$theme = wp_get_theme();
		if ( get_template() !== $parent_theme ) {
			$this->does_not_meet[] = sprintf( '<strong>%s</strong>', $parent_theme );
		} elseif ( $version && version_compare( ( $theme->parent() ?: $theme )->get( 'Version' ), $version, '<' ) ) {
			$this->does_not_meet[] = sprintf( '<strong>%s</strong> <code>%s</code> or higher', $parent_theme, $version );
		}
		return $this;
	}

	/**
	 * Print the notice if the requirements are not met.
	 *
	 * @since 1.2
	 */
	public function print_notice() {
		$name = esc_html( get_plugin_data( CHARGEWPWPBTIMELINE_PLUGIN_FILE, false )['Name'] );
		if ( ! current_user_can( 'activate_plugins' ) ) {
			return;
		}
		$notice = sprintf(
			/* translators: 1: plugin name, 2: list of requirements */
			esc_html__( 'The %1$s plugin minimum requirements are not met:', 'chargewp-timeline-addons-for-wpbakery' ),
			'<strong>' . $name . '</strong>'
		);
		$requirements = count( $this->does_not_meet ) === 0 ? '' : '<ul><li>' . implode( '</li><li>', $this->does_not_meet ) . '</li></ul>';
		printf( '<div class="notice notice-error"><p>%1$s</p>%2$s</div>', wp_kses_post( $notice ), wp_kses_post( $requirements ) );
	}
}
