<?php
/**
 * Custom element param template for a switch param.
 *
 * @see https://kb.wpbakery.com/docs/developers-how-tos/create-new-param-type
 *
 * @var string $uid
 * @var string $key
 * @var string $set_value
 */

defined( 'ABSPATH' ) || exit;
?>

<script type="text/javascript">
	jQuery("#switch<?php echo esc_attr( $uid ); ?>").change(function(){

		if(jQuery("#switch<?php echo esc_attr( $uid ); ?>").is(":checked")){
			jQuery("#switch<?php echo esc_attr( $uid ); ?>").val("<?php echo esc_attr( $key ); ?>");
			jQuery("#switch<?php echo esc_attr( $uid ); ?>").attr("checked","checked");
		} else {
			jQuery("#switch<?php echo esc_attr( $uid ); ?>").val("<?php echo esc_attr( $set_value ); ?>");
			jQuery("#switch<?php echo esc_attr( $uid ); ?>").removeAttr("checked");
		}
	});
</script>
<!-- wcp-switcher-end -->