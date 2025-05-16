<?php
/**
 * Base abstract class for custom element params.
 *
 * @see https://kb.wpbakery.com/docs/developers-how-tos/create-new-param-type
 * @since 1.0
 */

namespace WpbCustomParamCollection\ElementParams;

defined( 'ABSPATH' ) || exit;

/**
 * ElementParamsAbstract class.
 *
 * @since 1.0
 */
abstract class ElementParamsAbstract {
	/**
	 * Element params templates folder.
	 *
	 * @since 1.0
	 * @var string
	 */
	public $element_params_templates_folder = 'element-params';

	/**
	 * Param slug.
	 *
	 * @since 1.0
	 * @var string
	 */
	public $param_slug;

	/**
	 * ElementParamsAbstract constructor.
	 *
	 * @since 1.0
	 * @param string $param_slug
	 */
	public function __construct( string $param_slug ) {
		$this->param_slug = $param_slug;
	}

	/**
	 * Param output.
	 *
	 * @param array $settings
	 * @param mixed $value
	 * @return string
	 * @since 1.0
	 */
	public function param_output( array $settings, $value ): string {
		$settings = $this->merge_default_settings( $settings );

		$output = wpbcustomparamcollection_get_template(
			$this->get_param_template_name(),
			[
				'value'    => $value,
				'settings' => $settings,
				'_this'    => $this,
			]
		);

		return $this->attach_styles_to_param_output( $output );
	}

	/**
	 * Attach param styles to param output.
	 *
	 * @param string $output
	 * @return string
	 * @since 1.0
	 */
	public function attach_styles_to_param_output( $output ): string {
		$path        = '/css/params/' . $this->param_slug . '.css';
		$param_style = WPBCUSTOMPARAMCCOLECTION_ASSETS_DIR . $path;

		if ( ! file_exists( $param_style ) ) {
			return $output;
		}

        // phpcs:ignore:WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
		$output .= '<style>' . file_get_contents( $param_style ) . '</style>';

		return $output;
	}

	/**
	 * Get param default attr list.
	 *
	 * @since 1.0
	 * @return array
	 */
	abstract public function get_param_default_attr_list(): array;

	/**
	 * Get default attr values list.
	 *
	 * @param array $settings
	 * @return array
	 * @since 1.0
	 */
	abstract public function merge_default_settings( array $settings ): array;

	/**
	 * Get param slug.
	 *
	 * @since 1.0
	 * @return string
	 */
	public function get_param_slug(): string {
		return $this->param_slug;
	}

	/**
	 * Get param template name.
	 *
	 * @since 1.0
	 * @return string
	 */
	public function get_param_template_name(): string {
		return $this->element_params_templates_folder . '/' . $this->get_param_slug() . '.php';
	}

	/**
	 * Get param classes.
	 *
	 * @param array $settings
	 * @return string
	 */
	public function get_param_classes( array $settings ): string {
		$class_list = [
			'wpb_vc_param_value',
			$settings['param_name'],
			$settings['type'],
			$settings['class'],
		];

		return implode( ' ', $class_list );
	}
}
