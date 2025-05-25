<?php
/**
 * Lib that help work with param_group attributes for WPBakery shortcodes.
 *
 * @since 1.2
 */

namespace ChargewpWpbTimeline\Shortcodes\ShortcodeAttsLib;

use ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcode;

/**
 * Class ParamGroup
 *
 * @since 1.2
 */
class ParamGroup {

	/**
	 * Set unique ID for each item in the list.
	 *
	 * @param array              $item_list
	 * @param ChargeWpbShortcode $wpb_shortcode
	 * @param string             $atts_name
	 * @return array
	 * @since 1.2
	 */
	public function set_items_id( array $item_list, ChargeWpbShortcode $wpb_shortcode, string $atts_name ): array {
		$uniq = uniqid( $atts_name . '-' );
		foreach ( $item_list as $key => $item ) {
			$item_list[ $key ]['id'] = $wpb_shortcode->id . '-' . $uniq . '-' . $key;
		}

		return $item_list;
	}
}
