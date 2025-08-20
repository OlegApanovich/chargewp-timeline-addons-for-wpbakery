<?php
/**
 * The template for displaying [chargewp-classic-horizontal-timeline] shortcode output.
 *
 * @since 1.5
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcode $_this
 */

use ChargewpWpbTimeline\ElementIntegration\IconIntegration;

defined( 'ABSPATH' ) || exit;

$items                   = vc_param_group_parse_atts( $atts['items'] );
$items                   = $_this->get_atts_lib( 'param-group' )->set_items_id( $items, $_this, 'items' );
$custom_icon_integration = new IconIntegration();
?>

<div <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'chargewp-classic-horizontal-timeline-wrapper' ] ); ?>>
	<div class="chargewp-classic-horizontal-timeline-wrapper-container">
		<div class="chargewp-classic-horizontal-timeline-container">
			<div class="chargewp-classic-horizontal-timeline-track">
				<?php
				foreach ( $items as $index => $item ) :
					?>
					<div class="chargewp-classic-horizontal-timeline-item" data-item-id="<?php echo esc_attr( $item['id'] ); ?>">
						<div class="chargewp-classic-horizontal-timeline-marker"></div>
						<div class="chargewp-classic-horizontal-timeline-content chargewp-classic-horizontal-timeline-<?php echo esc_attr( $item['position'] ); ?>">
							<div class="chargewp-classic-horizontal-timeline-date">Q1 2024</div>
							<div class="chargewp-classic-horizontal-timeline-title">Planning</div>
							<div class="chargewp-classic-horizontal-timeline-description">Initial project planning and comprehensive research phase</div>
						</div>
					</div>
					<?php
				endforeach;
				?>
			</div>
		</div>
	</div>
</div>

<style>
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-classic-horizontal-timeline-track::before {
		background-color: <?php echo esc_attr( $atts['base_line_color'] ); ?>;
		height: <?php echo esc_attr( $atts['base_line_thickness'] ); ?>px;
	}

	<?php $_this->output_style_shortcode_id(); ?> .chargewp-classic-horizontal-timeline-container {
		height: <?php echo esc_attr( $atts['timeline_height'] ); ?>px;
	}

	<?php
	foreach ( $items as $index => $item ) :
		?>
		div[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"] .chargewp-classic-horizontal-timeline-marker {
			width: <?php echo esc_attr( $item['size'] ); ?>px;
			height: <?php echo esc_attr( $item['size'] ); ?>px;
			<?php
			if ( 'circle' === $item['type'] ) {
				echo 'border-radius: 50%;';
			}
			?>
			background-color: <?php echo esc_attr( $item['marker_color'] ); ?>;
		}
		div[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"] .chargewp-classic-horizontal-timeline-top {
			bottom: <?php echo esc_attr( $item['vertical_align'] ); ?>px;
		}
		div[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"] .chargewp-classic-horizontal-timeline-bottom {
			top: <?php echo esc_attr( $item['vertical_align'] ); ?>px;
		}
		div[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"] .chargewp-classic-horizontal-timeline-content {
			width: <?php echo esc_attr( $item['content_width'] ); ?>px;
			background-color: <?php echo esc_attr( $item['content_background_color'] ); ?>;
			<?php
			if ( 'true' === $item['is_content_border'] ) {
				?>
				border-radius: <?php echo esc_attr( $item['content_border_radius'] ); ?>px;
				<?php
				if ( 'shadow' === $item['content_border_type'] ) {
					?>
					box-shadow: 0 3px 15px<?php echo esc_attr( $item['content_border_color'] ); ?>;
					<?php
				} else {
					?>
					border: <?php echo esc_attr( $item['content_border_size'] ); ?>px <?php echo esc_attr( $item['content_border_type'] ); ?> <?php echo esc_attr( $item['content_border_color'] ); ?>;
					<?php
				}
			}
			?>
		}
		<?php
endforeach;
	?>
</style>

<style>
.chargewp-classic-horizontal-timeline-wrapper-container {
	position: relative;
	width: 100%;
	overflow-x: auto;
}

.chargewp-classic-horizontal-timeline-container {
	position: relative;
	padding: 20px;
}

.chargewp-classic-horizontal-timeline-track {
	position: relative;
	height: 100%;
	display: flex;
	align-items: center;
	justify-content: space-between;
}

.chargewp-classic-horizontal-timeline-track::before {
	content: "";
	position: absolute;
	top: 50%;
	left: 0;
	right: 0;
	transform: translateY(-50%);
}

.chargewp-classic-horizontal-timeline-item {
	position: relative;
	flex: 1;
	display: flex;
	flex-direction: column;
	align-items: center;
	z-index: 2;
}

.chargewp-classic-horizontal-timeline-marker {
	position: relative;
	z-index: 3;
}

.chargewp-classic-horizontal-timeline-content {
	position: absolute;
	text-align: center;
	padding: 15px;
}

.chargewp-classic-horizontal-timeline-content::before {
	content: "";
	position: absolute;
	width: 0;
	height: 0;
	border-left: 10px solid transparent;
	border-right: 10px solid transparent;
	left: 50%;
	transform: translateX(-50%);
}

.chargewp-classic-horizontal-timeline-top::before {
	top: 100%;
	border-top: 10px solid #ffffff;
}

.chargewp-classic-horizontal-timeline-bottom::before {
	bottom: 100%;
	border-bottom: 10px solid #ffffff;
}

.chargewp-classic-horizontal-timeline-date {
	font-size: 12px;
	font-weight: bold;
	margin-bottom: 5px;
	color: #e74c3c;
}

.chargewp-classic-horizontal-timeline-title {
	font-size: 16px;
	font-weight: bold;
	margin-bottom: 5px;
	color: #2c3e50;
}

.chargewp-classic-horizontal-timeline-description {
	font-size: 12px;
	line-height: 1.4;
	color: #7f8c8d;
}
</style>
