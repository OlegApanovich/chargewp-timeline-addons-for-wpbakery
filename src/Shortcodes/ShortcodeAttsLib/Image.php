<?php
/**
 * Lib that help work with image attributes for WPBakery shortcodes.
 *
 * @since 1.2
 */

namespace ChargewpWpbTimeline\Shortcodes\ShortcodeAttsLib;

/**
 * Class Image
 *
 * @since 1.2
 */
class Image {

	/**
	 * Get image data from combination of image_source atts.
	 *
	 * @param array $item Item attributes.
	 * @return array Image data including source and alt text.
	 * @since 1.2
	 */
	public function get_item_data( array $item ): array {
		$img_data = [
			'img_src' => '',
			'img_alt' => '',
		];
		if ( 'media_library' === $item['image_source'] ) {
			if ( isset( $item['image'] ) ) {
				$img_data['img_src'] = wp_get_attachment_image_url( $item['image'], 'full' );
				$img_data['img_alt'] = get_post_meta( $item['image'], '_wp_attachment_image_alt', true );
			}
		} elseif ( $item['image_custom_src'] ) {
			$img_data['img_src'] = $item['image_custom_src'];
			$img_data['img_alt'] = __( 'External Image', 'chargewp-timeline-addons-for-wpbakery' );
		}

		return $img_data;
	}
}
