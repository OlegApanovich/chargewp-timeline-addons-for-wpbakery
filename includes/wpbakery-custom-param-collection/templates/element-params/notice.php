<?php
/**
 * Custom element param template for a notice param.
 * We use this to show user some notice or information about the element.
 *
 * @see https://kb.wpbakery.com/docs/developers-how-tos/create-new-param-type
 * @since 1.1
 *
 * @var mixed $value
 * @var array $settings
 * @var WpbCustomParamCollection\ElementParams\ElementParamsAbstract $_this
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="notice <?php echo esc_attr( $settings['level'] ); ?> update-nag inline" style="margin: 0">
	<?php
	echo wp_kses_post( $settings['notice'] );
	?>
</div>
