<?php
/**
 * Custom param 'Notice' for wpbakery element.
 * We use this to show user some notice or information about the element.
 *
 * @see https://kb.wpbakery.com/docs/inner-api/vc_add_shortcode_param
 * @since 1.1
 */

namespace ChargewpWpbTimeline\ElementParams\Lib;

use ChargewpWpbTimeline\ElementParams\ElementParamsAbstract;

/**
 * ChargewpNumber class.
 *
 * @since 1.1
 */
class ChargewpNotice extends ElementParamsAbstract {
	/**
	 * Get param default attr list.
	 *
	 * @since 1.1
	 * @return array
	 */
	public function get_param_default_attr_list(): array {
		return [
			'param_name',
			'level',
			'notice',
		];
	}

	/**
	 * Get params values.
	 *
	 * @param array $settings
	 * @return array
	 * @since 1.1
	 */
	public function merge_default_settings( array $settings ): array {
		$values = [];

		foreach ( $this->get_param_default_attr_list() as $name ) {
            if ( 'level' === $name ) {
                if ( in_array( $settings[ $name ], $this->get_level_list() ) ) {
                    $values[ $name ] = 'notice-' . esc_attr( $settings[ $name ] );
                } else {
                    $values[ $name ] = 'notice';
                }
            } else {
                $values[ $name ] = $settings[ $name ] ?? '';
            }
		}

		return $values;
	}


    /**
     * Get level notice list possible values.
     *
     * @return string[]
     */
    public function get_level_list() : array {
        return [
            'info',
            'warning',
            'error',
            'success',
        ];
    }
}
