<?php
/**
 * The template for displaying [chargewp-left-side-vertical-slider-timeline] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcode $_this
 */

defined( 'ABSPATH' ) || exit;

$items = vc_param_group_parse_atts( $atts['items'] );
$items = $_this->get_atts_lib( 'param-group' )->set_items_id( $items, $_this, 'items' );
?>

<div <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'chargewp-left-side-vertical-slider-timeline-container' ] ); ?>>
	<div id="timeline">
		<ul id="dates">
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
		<ul id="issues">
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
					<h1><?php echo esc_attr( $item['date'] ); ?></h1>
					<?php
					if ( isset( $item['content'] ) ) {
						?>
						<p>
							<?php echo esc_html( $item['content'] ); ?>
						</p>
						<?php
					}
					?>
				</li>
				<?php
			endforeach;
			?>
		</ul>
		<a href="#" id="next">+</a>
		<a href="#" id="prev">-</a>
	</div>
</div>

<style>
	<?php $_this->output_style_shortcode_id(); ?>.chargewp-left-side-vertical-slider-timeline-container #timeline::before {
		background-color: <?php echo esc_attr( $atts['baseline_color'] ); ?>;
		width: <?php echo esc_attr( $atts['baseline_width'] ); ?>px;
	}

	.chargewp-left-side-vertical-slider-timeline-container #dates li::before {
		left: <?php echo esc_attr( $atts['baseline_width'] <= 6 ? intdiv( $atts['baseline_width'] - 1, 2 ) : ( $atts['baseline_width'] <= 9 ? 3 : 4 ) ); ?>px;;
	}

	<?php $_this->output_style_shortcode_id(); ?>.chargewp-left-side-vertical-slider-timeline-container #next {
		background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 38 22'%3E%3Cpath d='M19 22L0 3L3 0L19 16L35 0L38 3L19 22Z' fill='<?php echo rawurlencode( esc_attr( $atts['next_arrow_color'] ) ); ?>'/%3E%3C/svg%3E") no-repeat center;
	}
	<?php $_this->output_style_shortcode_id(); ?>.chargewp-left-side-vertical-slider-timeline-container #prev {
		background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 38 22'%3E%3Cpath d='M19 0L38 19L35 22L19 6L3 22L0 19L19 0Z' fill='<?php echo rawurlencode( esc_attr( $atts['prev_arrow_color'] ) ); ?>'/%3E%3C/svg%3E") no-repeat center;
	}
	<?php
	foreach ( $items as $item ) {
		$_this->output_style_shortcode_id();
		?>
		.chargewp-left-side-vertical-slider-timeline-container #dates [data-item-id="<?php echo esc_attr( $item['id'] ); ?>"]::before {
				width: <?php echo (int) esc_attr( $item['marker_size'] ); ?>px;
				height: <?php echo (int) esc_attr( $item['marker_size'] ); ?>px;
				background-color: <?php echo esc_attr( $item['marker_color'] ); ?>;
				border: 1px solid <?php echo esc_attr( $item['marker_border_color'] ); ?>;
			}
		<?php
	}
	?>
</style>

<style>
	.chargewp-left-side-vertical-slider-timeline-container {
		margin: 0;
		padding: 0;
		width: 100%;
	}

	.chargewp-left-side-vertical-slider-timeline-container * {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}

	.chargewp-left-side-vertical-slider-timeline-container a {
		color: #ffffcc;
		text-decoration: none;
		-webkit-transition: 0.5s;
		-moz-transition: 0.5s;
		-o-transition: 0.5s;
		-ms-transition: 0.5s;
		transition: 0.5s;
	}

	.chargewp-left-side-vertical-slider-timeline-container a:hover,
	.chargewp-left-side-vertical-slider-timeline-container a.selected {
		color: #ffcc00;
	}

	.chargewp-left-side-vertical-slider-timeline-container #timeline {
		width: 100%; /* Make timeline responsive */
		height: 600px;
		overflow: hidden;
		margin: 0 auto;
		position: relative;
		display: flex; /* Use flexbox for layout */
	}

	.chargewp-left-side-vertical-slider-timeline-container #timeline::before {
		content: '';
		position: absolute;
		top: 0;
		left: 6px; /* Position for center of dots (dot is at 0px, 12px wide) */
		height: 100%;
		z-index: 1;
	}

	.chargewp-left-side-vertical-slider-timeline-container #dates {
		width: auto; /* Let width be determined by content */
		min-width: 60px;
		height: 600px;
		overflow: hidden;
		float: left;
	}

	.chargewp-left-side-vertical-slider-timeline-container #dates li {
		list-style: none;
		width: auto;
		height: 100px;
		line-height: 100px;
		font-size: 16px;
		padding-left: 25px;
		padding-right: 15px;
		position: relative; /* For absolute positioning of the dot */
	}

	/* Create a dot centered on the vertical line */
	.chargewp-left-side-vertical-slider-timeline-container #dates li::before {
		content: '';
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		border-radius: 50%;
		z-index: 2;
	}

	.chargewp-left-side-vertical-slider-timeline-container #dates a {
		line-height: 38px;
		padding-bottom: 10px;
		white-space: nowrap;
	}

	.chargewp-left-side-vertical-slider-timeline-container #dates a.selected,
	.chargewp-left-side-vertical-slider-timeline-container #dates li a.selected {
		font-size: 24px; /* Larger selected font size */
	}

	.chargewp-left-side-vertical-slider-timeline-container #issues {
		width: auto; /* Let issues take remaining space */
		height: 600px;
		overflow: hidden;
		float: left;
	}

	.chargewp-left-side-vertical-slider-timeline-container #issues li {
		max-width: 300px;
		height: 600px;
		list-style: none;
		text-align: center; /* Center all text content */
		margin: 0 auto; /* Center the list item */
		display: flex;
		flex-direction: column;
		justify-content: center;
		padding: 0 10px;
	}

	.chargewp-left-side-vertical-slider-timeline-container #issues li.selected img {
		-webkit-transform: scale(1.1,1.1);
		-moz-transform: scale(1.1,1.1);
		-o-transform: scale(1.1,1.1);
		-ms-transform: scale(1.1,1.1);
		transform: scale(1.1,1.1);
	}

	.chargewp-left-side-vertical-slider-timeline-container #issues li img {
		width: 80%; /* Responsive image size */
		max-width: 100px;
		margin: 10px auto; /* Center image horizontally */
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

	.chargewp-left-side-vertical-slider-timeline-container #issues li h1 {
		color: #ffcc00;
		font-size: 24px; /* Smaller heading */
		text-align: center; /* Center heading */
		text-shadow: #000 1px 1px 2px;
		margin-bottom: 10px;
	}

	.chargewp-left-side-vertical-slider-timeline-container #issues li p {
		font-size: 12px; /* Smaller text */
		margin: 10px auto;
		font-weight: normal;
		line-height: 1.4;
		text-shadow: #000 1px 1px 2px;
		text-align: center; /* Center paragraph text */
		max-width: 250px; /* Control paragraph width */
	}

	.chargewp-left-side-vertical-slider-timeline-container #next,
	.chargewp-left-side-vertical-slider-timeline-container #prev {
		position: absolute;
		left: 30px; /* Center horizontally relative to the issues container */
		transform: translateX(-50%); /* Center perfectly by shifting back by half of width */
		font-size: 70px;
		width: 38px;
		height: 22px;
		text-indent: -9999px;
		overflow: hidden;
		z-index: 100; /* Ensure arrows appear above content */
	}

	.chargewp-left-side-vertical-slider-timeline-container #next:hover,
	.chargewp-left-side-vertical-slider-timeline-container #prev:hover {
		opacity: 0.8;
	}

	.chargewp-left-side-vertical-slider-timeline-container #next.disabled,
	.chargewp-left-side-vertical-slider-timeline-container #prev.disabled {
		opacity: 0.2;
	}

	.chargewp-left-side-vertical-slider-timeline-container #next {
		bottom: 0;
	}

	.chargewp-left-side-vertical-slider-timeline-container #prev {
		top: 0;
	}

	.chargewp-left-side-vertical-slider-timeline-container #grad_top {
		top: 0;
		background: linear-gradient(to bottom, rgba(34,34,34,1) 0%, rgba(34,34,34,0) 100%);
	}

	.chargewp-left-side-vertical-slider-timeline-container #grad_bottom {
		bottom: 0;
		background: linear-gradient(to top, rgba(34,34,34,1) 0%, rgba(34,34,34,0) 100%);
	}
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
				orientation: 'vertical',
				issuesSpeed: 300,
				datesSpeed: 100,
				arrowKeys: 'true',
				startAt: <?php echo esc_attr( $active ); ?>,
			});
		});
	});
</script>
