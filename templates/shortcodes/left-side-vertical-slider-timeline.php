<?php
/**
 * The template for displaying [chargewp-left-side-vertical-slider-timeline] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcode $_this
 */

defined( 'ABSPATH' ) || exit;

$timeline_id = uniqid();
$items       = vc_param_group_parse_atts( $atts['items'] );
$items       = $_this->get_atts_lib( 'param-group' )->set_items_id( $items, $_this, 'items' );
?>

<div <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'chargewp-left-side-vertical-slider-timeline-container' ] ); ?>>
	<div id="timeline-<?php echo esc_attr( $timeline_id ); ?>">
		<ul id="dates-<?php echo esc_attr( $timeline_id ); ?>">
			<?php
			foreach ( $items as $item ) :
				if ( ! isset( $item['date'] ) ) {
					continue;
				}
				?>
				<li data-item-id="<?php echo esc_attr( $item['id'] ); ?>">
					<a href="<?php echo esc_attr( $item['id'] ); ?>">
						<?php echo esc_html( $item['date'] ); ?>
					</a>
				</li>
				<?php
			endforeach;
			?>
		</ul>
		<ul id="issues-<?php echo esc_attr( $timeline_id ); ?>">
			<?php
			foreach ( $items as $item ) :
				if ( ! isset( $item['date'] ) ) {
					continue;
				}
				?>
				<li id="<?php echo esc_attr( $item['id'] ); ?>">
					<?php
					$item_data = $_this->get_atts_lib( 'image' )->get_item_data( $item );

					if ( $item_data['img_src'] ) {
						?>
						<img alt="<?php echo esc_attr( $item_data['img_alt'] ); ?>" src="<?php echo esc_url( $item_data['img_src'] ); ?>">
						<?php
					}
					?>
					<div class="content">
						<?php
						if ( isset( $item['content'] ) ) {
							echo wp_kses_post( $item['content'] );
						}
						?>
					</div>
				</li>
				<?php
			endforeach;
			?>
		</ul>
		<?php
		if ( 'true' === $atts['is_arrow_keys'] ) {
			?>
			<a href="#" id="next-<?php echo esc_attr( $timeline_id ); ?>" aria-label="<?php echo esc_html__( 'Next', 'chargewp-timeline-addons-for-wpbakery' ); ?>">+</a>
			<a href="#" id="prev-<?php echo esc_attr( $timeline_id ); ?>" aria-label="<?php echo esc_html__( 'Previous', 'chargewp-timeline-addons-for-wpbakery' ); ?>">-</a>
			<?php
		}
		?>
	</div>
</div>

<style>
	<?php $_this->output_style_shortcode_id(); ?>.chargewp-left-side-vertical-slider-timeline-container #timeline-<?php echo esc_attr( $timeline_id ); ?>::before {
		background-color: <?php echo esc_attr( $atts['baseline_color'] ); ?>;
		width: <?php echo esc_attr( $atts['baseline_width'] ); ?>px;
		left: <?php echo esc_attr( (string) ( ( 10 - $atts['baseline_width'] ) + $atts['baseline_width'] / 2 ) ); ?>px;
	}

	<?php $_this->output_style_shortcode_id(); ?>.chargewp-left-side-vertical-slider-timeline-container #next-<?php echo esc_attr( $timeline_id ); ?> {
		background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 38 22'%3E%3Cpath d='M19 22L0 3L3 0L19 16L35 0L38 3L19 22Z' fill='<?php echo rawurlencode( esc_attr( $atts['next_arrow_color'] ) ); ?>'/%3E%3C/svg%3E") no-repeat center;
	}
	<?php $_this->output_style_shortcode_id(); ?>.chargewp-left-side-vertical-slider-timeline-container #prev-<?php echo esc_attr( $timeline_id ); ?> {
		background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 38 22'%3E%3Cpath d='M19 0L38 19L35 22L19 6L3 22L0 19L19 0Z' fill='<?php echo rawurlencode( esc_attr( $atts['prev_arrow_color'] ) ); ?>'/%3E%3C/svg%3E") no-repeat center;
	}
	.chargewp-left-side-vertical-slider-timeline-container #timeline-<?php echo esc_attr( $timeline_id ); ?> {
		width: 100%;
		height: 600px;
		overflow: hidden;
		margin: 0 auto;
		position: relative;
		display: flex;
	}

	.chargewp-left-side-vertical-slider-timeline-container #timeline-<?php echo esc_attr( $timeline_id ); ?>::before {
		content: '';
		position: absolute;
		top: 0;
		left: 10px;
		height: 100%;
		z-index: 1;
	}

	.chargewp-left-side-vertical-slider-timeline-container #dates-<?php echo esc_attr( $timeline_id ); ?> {
		width: auto; /* Let width be determined by content */
		min-width: <?php echo isset( $atts['navigation_width'] ) ? $atts['navigation_width'] : '60'  ?>px;
		height: 600px;
		overflow: hidden;
		float: left;
	}

	.chargewp-left-side-vertical-slider-timeline-container #dates-<?php echo esc_attr( $timeline_id ); ?> li {
		list-style: none;
		width: auto;
		height: 100px;
		line-height: 100px;
		font-size: 16px;
		padding-left: 33px;
		padding-right: 15px;
		position: relative;
	}

	/* Create a dot centered on the vertical line */
	.chargewp-left-side-vertical-slider-timeline-container #dates-<?php echo esc_attr( $timeline_id ); ?> li::before {
		content: '';
		position: absolute;
		top: 50%;
		left: 0;
		transform: translateY(-50%);
		borderius: 50%;
		z-index: 2;
	}

	.chargewp-left-side-vertical-slider-timeline-container #dates-<?php echo esc_attr( $timeline_id ); ?> a {
		line-height: 38px;
		padding-bottom: 10px;
		white-space: nowrap;
	}

	.chargewp-left-side-vertical-slider-timeline-container #dates-<?php echo esc_attr( $timeline_id ); ?> a.selected,
	.chargewp-left-side-vertical-slider-timeline-container #dates-<?php echo esc_attr( $timeline_id ); ?> li a.selected {
		font-size: 24px; /* Larger selected font size */
	}

	.chargewp-left-side-vertical-slider-timeline-container #issues-<?php echo esc_attr( $timeline_id ); ?> {
		width: auto; /* Let issues take remaining space */
		height: 600px;
		overflow: hidden;
		float: left;
	}

	.chargewp-left-side-vertical-slider-timeline-container #issues-<?php echo esc_attr( $timeline_id ); ?> li {
		max-width: <?php echo isset( $atts['content_width'] ) ? $atts['content_width'] : '300'  ?>px;
		height: 600px;
		list-style: none;
		text-align: center; /* Center all text content */
		margin: 0 auto; /* Center the list item */
		display: flex;
		flex-direction: column;
		justify-content: center;
		padding: 0 10px;
	}

	.chargewp-left-side-vertical-slider-timeline-container #issues-<?php echo esc_attr( $timeline_id ); ?> li.selected img {
		-webkit-transform: scale(1.1,1.1);
		-moz-transform: scale(1.1,1.1);
		-o-transform: scale(1.1,1.1);
		-ms-transform: scale(1.1,1.1);
		transform: scale(1.1,1.1);
	}

	.chargewp-left-side-vertical-slider-timeline-container #issues-<?php echo esc_attr( $timeline_id ); ?> li img {
		width: 70%;
		margin: 10px auto;
		display: block;
		-webkit-transition: all 2s ease-in-out;
		-moz-transition: all 2s ease-in-out;
		-o-transition: all 2s ease-in-out;
		-ms-transition: all 2s ease-in-out;
		transition: all 2s ease-in-out;
		-webkit-transform: scale(0.7,0.7);
		-moz-transform: scale(0.7,0.7);
		-o-transform: scale(0.7,0.7);
		-ms-transform: scale(0.7,0.7);
		transform: scale(0.7,0.7);
	}

	.chargewp-left-side-vertical-slider-timeline-container #issues-<?php echo esc_attr( $timeline_id ); ?> li .content {
		margin: 10px auto;
		text-align: center;
		max-width: <?php echo isset( $atts['content_width'] ) ? $atts['content_width'] : '300'  ?>px;
	}

	.chargewp-left-side-vertical-slider-timeline-container #next-<?php echo esc_attr( $timeline_id ); ?>,
	.chargewp-left-side-vertical-slider-timeline-container #prev-<?php echo esc_attr( $timeline_id ); ?> {
		position: absolute;
		left: 30px;
		transform: translateX(-50%);
		font-size: 70px;
		width: 38px;
		height: 22px;
		text-indent: -9999px;
		overflow: hidden;
		z-index: 100;
	}

	.chargewp-left-side-vertical-slider-timeline-container #next-<?php echo esc_attr( $timeline_id ); ?>:hover,
	.chargewp-left-side-vertical-slider-timeline-container #prev-<?php echo esc_attr( $timeline_id ); ?>:hover {
		opacity: 0.8;
	}

	.chargewp-left-side-vertical-slider-timeline-container #next-<?php echo esc_attr( $timeline_id ); ?>.disabled,
	.chargewp-left-side-vertical-slider-timeline-container #prev-<?php echo esc_attr( $timeline_id ); ?>.disabled {
		opacity: 0.2;
	}

	.chargewp-left-side-vertical-slider-timeline-container #next-<?php echo esc_attr( $timeline_id ); ?> {
		bottom: 0;
	}

	.chargewp-left-side-vertical-slider-timeline-container #prev-<?php echo esc_attr( $timeline_id ); ?> {
		top: 0;
	}
	<?php
	foreach ( $items as $item ) {
        //phpcs:ignore:Squiz.PHP.EmbeddedPhp.ContentBeforeEnd
		$_this->output_style_shortcode_id();?>.chargewp-left-side-vertical-slider-timeline-container #dates-<?php echo esc_attr( $timeline_id ); ?> [data-item-id="<?php echo esc_attr( $item['id'] ); ?>"]::before {
			width: <?php echo (int) esc_attr( $item['marker_size'] ); ?>px;
			height: <?php echo (int) esc_attr( $item['marker_size'] ); ?>px;
			background-color: <?php echo esc_attr( $item['marker_color'] ); ?>;
			border: 1px solid <?php echo esc_attr( $item['marker_border_color'] ); ?>;
			left: <?php echo esc_attr( (string) ( ( round( ( -7 / 15 * $item['marker_size'] + 28 / 3 ) * 2 ) / 2 ) - 0.5 ) ); ?>px;
		}
		<?php $_this->output_style_shortcode_id(); ?>.chargewp-left-side-vertical-slider-timeline-container [data-item-id="<?php echo esc_attr( $item['id'] ); ?>"] a:hover,
		<?php $_this->output_style_shortcode_id(); ?>.chargewp-left-side-vertical-slider-timeline-container [data-item-id="<?php echo esc_attr( $item['id'] ); ?>"] a.selected {
			color: <?php echo esc_attr( $item['date_active_color'] ); ?> !important;
		}
		<?php $_this->output_style_shortcode_id(); ?>.chargewp-left-side-vertical-slider-timeline-container [data-item-id="<?php echo esc_attr( $item['id'] ); ?>"] a {
			color: <?php echo esc_attr( $item['date_color'] ); ?> !important;
		}
		<?php
	}
	?>
</style>

<?php
$active = 1;
foreach ( $items as $key => $item ) {
	$active = isset( $item['is_active'] ) ? $key + 1 : $active;
}
?>

<script>
	jQuery(window).ready(function() {
		jQuery(function(){
			jQuery().timelinr({
				startAt: <?php echo esc_attr( (string) $active ); ?>,
				containerDiv: '#timeline-<?php echo esc_attr( $timeline_id ); ?>',
				datesDiv: '#dates-<?php echo esc_attr( $timeline_id ); ?>',
				issuesDiv: '#issues-<?php echo esc_attr( $timeline_id ); ?>',
				prevButton: '#prev-<?php echo esc_attr( $timeline_id ); ?>',
				nextButton: '#next-<?php echo esc_attr( $timeline_id ); ?>',
			});
		});
	});
</script>
