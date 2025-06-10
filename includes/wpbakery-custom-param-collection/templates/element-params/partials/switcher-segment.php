<?php
/**
 * Switcher segment element param template.
 *
 * @since 1.1
 *
 * @var string $uid,
 * @var string $label,
 * @var array $opts,
 * @var string $un,
 * @var string $checked,
 * @var mixed $value
 * @var array $settings
 * @var WpbCustomParamCollection\ElementParams\ElementParamsAbstract $_this
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="ult-onoffswitch">
	<input type="checkbox"
			name="<?php echo esc_attr( $settings['param_name'] ); ?>"
			value="<?php echo esc_attr( $value ); ?>"
			class="<?php echo esc_attr( $_this->get_param_classes( $settings ) ); ?> ult-onoffswitch-checkbox chk-switch-<?php echo esc_attr( $un ); ?>"
			id="switch<?php echo esc_attr( $uid ); ?>" <?php echo esc_attr( $checked ); ?>
	>

	<label class="ult-onoffswitch-label" for="switch<?php echo esc_attr( $uid ); ?>">
		<div class="ult-onoffswitch-inner">
			<div class="ult-onoffswitch-active">
				<div class="ult-onoffswitch-switch">
					<?php echo esc_html( $opts['on'] ); ?>
				</div>
			</div>
			<div class="ult-onoffswitch-inactive">
				<div class="ult-onoffswitch-switch">
					<?php echo esc_html( $opts['off'] ); ?>
				</div>
			</div>
		</div>
	</label>
</div>
<div class="chk-label">
	<?php echo esc_html( $label ); ?>
</div><br/>
