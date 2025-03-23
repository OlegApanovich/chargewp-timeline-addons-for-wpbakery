<?php
/**
 * Base abstract class for custom element params.
 *
 * @see https://kb.wpbakery.com/docs/developers-how-tos/create-new-param-type
 * @since 1.1
 */

namespace ChargewpWpbTimeline\ElementParams;

defined( 'ABSPATH' ) || exit;

/**
 * ElementParamsAbstract class.
 *
 * @since 1.1
 */
abstract class ElementParamsAbstract {

	/**
	 * Element params templates folder.
	 *
	 * @since 1.1
	 * @var string
	 */
	public $element_params_templates_folder = 'element-params';

	/**
	 * Param slug.
	 *
	 * @since 1.1
	 * @var string
	 */
	public string $param_slug;

	/**
	 * ElementParamsAbstract constructor.
	 *
	 * @since 1.1
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
	 * @since 1.1
	 */
	public function param_output( array $settings, $value ): string {
		$settings = $this->merge_default_settings( $settings );

		return chargewpwpbtimeline_get_template(
			$this->get_param_template_name(),
			[
				'value'    => $value,
				'settings' => $settings,
				'_this'    => $this,
			]
		);
	}

	/**
	 * Get param default attr list.
	 *
	 * @since 1.1
	 * @return array
	 */
	abstract public function get_param_default_attr_list(): array;

	/**
	 * Get default attr values list.
	 *
	 * @param array $settings
	 * @return array
	 * @since 1.1
	 */
	abstract public function merge_default_settings( array $settings ): array;

	/**
	 * Get param slug.
	 *
	 * @since 1.1
	 * @return string
	 */
	public function get_param_slug(): string {
		return $this->param_slug;
	}

	/**
	 * Get param template name.
	 *
	 * @since 1.1
	 * @return string
	 */
	public function get_param_template_name(): string {
		$name = str_replace( 'chargewp-', '', $this->get_param_slug() );
		return $this->element_params_templates_folder . '/' . $name . '.php';
	}

	/**
	 * Get param classes.
	 *
	 * @param array $settings
	 * @return string
	 */
	public function get_param_classes( $settings ) {
		$class_list = [
			'wpb_vc_param_value',
			$settings['param_name'],
			$settings['type'],
			$settings['class'],
		];

		return implode( ' ', $class_list );
	}
}
