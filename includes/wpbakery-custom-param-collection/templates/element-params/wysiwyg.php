<?php
/**
 * Custom element param template for a switch param.
 *
 * @see https://kb.wpbakery.com/docs/developers-how-tos/create-new-param-type
 * @since 1.1
 *
 * @var mixed $value
 * @var array $settings
 * @var string $randomizer
 * @var string $type
 */

defined( 'ABSPATH' ) || exit;
$reduced_height = strval( $settings['use_height'] - 60 );
?>
<!-- wcp-wysiwyg-start -->
<div
	id="wcp-wysiwyg-container-<?php echo esc_attr( $randomizer ); ?>"
	class="wcp-wysiwyg-container"
	data-use-tabs="<?php echo esc_attr( $settings['scope']['use_tabs'] ); ?>"
	data-use-height="<?php echo esc_attr( $reduced_height ); ?>"
	data-use-menubar="<?php echo esc_attr( $settings['scope']['use_menubar'] ); ?>"
	data-use-media="<?php echo esc_attr( $settings['scope']['use_media'] ); ?>"
	data-use-link="<?php echo esc_attr( $settings['scope']['use_link'] ); ?>"
	data-use-blockquote="<?php echo esc_attr( $settings['scope']['use_blockquote'] ); ?>"
	data-use-lists="<?php echo esc_attr( $settings['scope']['use_lists'] ); ?>"
	data-use-textcolor="<?php echo esc_attr( $settings['scope']['use_textcolor'] ); ?>"
	data-use-background="<?php echo esc_attr( $settings['scope']['use_background'] ); ?>"
	data-use-rootblock="<?php echo esc_attr( $settings['scope']['use_rootblock'] ); ?>"
	data-url-home="<?php echo esc_url( get_home_url() ); ?>"
	data-url-site="<?php echo esc_url( get_site_url() ); ?>"
>
	<?php
	if ( 'true' === $settings['scope']['use_tabs'] ) {
		?>
	<div id="wcp-wysiwyg-tabs-<?php echo esc_attr( $randomizer ); ?>" class="wcp-wysiwyg-tabs">
		<a id="wcp-wysiwyg-html-<?php echo esc_attr( $randomizer ); ?>" class="wcp-wysiwyg-html active">HTML</a>
		<a id="wcp-wysiwyg-visual-<?php echo esc_attr( $randomizer ); ?>" class="wcp-wysiwyg-visual">Visual</a>
		<div style="clear: both;"></div>
	</div>
		<?php
	}
	?>
	<textarea id="wcp-wysiwyg-editor-<?php echo esc_attr( $randomizer ); ?>"
				name="<?php echo esc_attr( $settings['param_name'] ); ?>"
				class="wcp-wysiwyg-editor wpb_vc_param_value <?php echo esc_attr( $settings['param_name'] ); ?> <?php echo esc_attr( $settings['type'] ); ?>"
				style="height: <?php echo esc_attr( $settings['scope']['use_height'] ); ?>px;"><?php echo wp_kses_post( $value ); ?></textarea>
</div>

<!-- wcp-wysiwyg-end -->
