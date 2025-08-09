<?php
/**
 * The template for displaying plugin deactivation feedback popup.
 */

defined( 'ABSPATH' ) || exit;
?>

<div id="chargewp-deactivation-popup">
	<div class="chargewp-deactivation-popup-overlay"></div>
	<div class="chargewp-deactivation-popup-content">
		<div class="chargewp-deactivation-popup-header">
			<h2><?php esc_html_e( 'Quick Feedback', 'chargewp-timeline-addons-for-wpbakery' ); ?></h2>
		</div>
		<div class="chargewp-deactivation-popup-body">
			<p><?php esc_html_e( 'If you have a moment, please let us know why you are deactivating this plugin.', 'chargewp-timeline-addons-for-wpbakery' ); ?></p>
			<form id="chargewp-deactivation-form">
				<?php
				wp_nonce_field( '_chargewp_deactivate_feedback_action' );
				?>
				<div class="chargewp-form-group">
					<label>
						<input type="radio" name="reason_key" value="temporary_deactivation" checked>
						<?php esc_html_e( 'It\'s a temporary deactivation.', 'chargewp-timeline-addons-for-wpbakery' ); ?>
					</label>
				</div>
				<div class="chargewp-form-group">
					<label>
						<input type="radio" name="reason_key" value="plugin_missing_addon">
						<?php esc_html_e( 'The plugin is missing a specific WPBakery addon.', 'chargewp-timeline-addons-for-wpbakery' ); ?>
					</label>
					<textarea name="plugin_missing_addon_details" placeholder="<?php esc_html_e( 'Please describe the missing addon.', 'chargewp-timeline-addons-for-wpbakery' ); ?>"></textarea>
				</div>
				<div class="chargewp-form-group">
					<label>
						<input type="radio" name="reason_key" value="plugin_not_working_as_expected">
						<?php esc_html_e( "The plugin didn't work as expected.", 'chargewp-timeline-addons-for-wpbakery' ); ?>
					</label>
					<textarea name="plugin_not_working_as_expected_details" placeholder="<?php esc_html_e( 'What did you expected.', 'chargewp-timeline-addons-for-wpbakery' ); ?>"></textarea>
				</div>
				<div class="chargewp-form-group">
					<label>
						<input type="radio" name="reason_key" value="plugin_missing_feature">
						<?php esc_html_e( 'The plugin is missing a specific feature.', 'chargewp-timeline-addons-for-wpbakery' ); ?>
					</label>
					<textarea name="plugin_missing_feature_details" placeholder="<?php esc_html_e( 'What feature?', 'chargewp-timeline-addons-for-wpbakery' ); ?>"></textarea>
				</div>
				<div class="chargewp-form-group">
					<label>
						<input type="radio" name="reason_key" value="plugin_not_working">
						<?php esc_html_e( 'The plugin is not working.', 'chargewp-timeline-addons-for-wpbakery' ); ?>
					</label>
					<textarea name="plugin_not_working_details" placeholder="<?php esc_html_e( "Kindly share what didn't work so we can fix it for future users", 'chargewp-timeline-addons-for-wpbakery' ); ?>"></textarea>
				</div>
				<div class="chargewp-form-group">
					<label>
						<input type="radio" name="reason_key" value="other">
						<?php esc_html_e( 'Other', 'chargewp-timeline-addons-for-wpbakery' ); ?>
					</label>
					<textarea name="other_details" placeholder="<?php esc_html_e( 'Please specify', 'chargewp-timeline-addons-for-wpbakery' ); ?>"></textarea>
				</div>
			</form>
		</div>
		<div class="chargewp-deactivation-popup-footer">
			<button type="button" class="button button-primary chargewp-deactivation-submit"><?php esc_html_e( 'Submit & Deactivate', 'chargewp-timeline-addons-for-wpbakery' ); ?></button>
			<div class="chargewp-button-delimiter"></div>
			<button type="button" class="button button-secondary chargewp-deactivation-skip"><?php esc_html_e( 'Skip & Deactivate', 'chargewp-timeline-addons-for-wpbakery' ); ?></button>
		</div>
	</div>
</div>
