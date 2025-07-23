<?php
/**
 * The template for displaying [chargewp-wheel-timeline] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcode $_this
 */

defined( 'ABSPATH' ) || exit;

$items = vc_param_group_parse_atts( $atts['items'] );
$items = $_this->get_atts_lib( 'param-group' )->set_items_id( $items, $_this, 'items' );
?>

<div <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'chargewp-wheel-timeline-wrapper' ] ); ?>>
	<div class="chargewp-wheel-timeline-cards-container">
		<ul class="chargewp-wheel-timeline-cards" style="--items: <?php echo esc_attr( (string) count( $items ) ); ?>;">
			<?php
			$checked     = '';
			$checked_set = false;
			foreach ( $items as $index => $item ) :
				if ( ! $checked_set && isset( $item['is_active'] ) && 'true' === $item['is_active'] ) {
					$checked_set = true;
					$checked     = 'checked';
				} else {
					$checked = '';
				}
				?>
				<li style="--i: <?php echo esc_attr( $index ); ?>;" data-item-id="<?php echo esc_attr( $item['id'] ); ?>">
					<input type="radio" id="chargewp-item-<?php echo esc_attr( $_this->id . '-' . $index ); ?>" name="chargewp-gallery-item-<?php echo esc_attr( $_this->id ); ?>" <?php echo esc_attr( $checked ); ?>>
					<label for="chargewp-item-<?php echo esc_attr( $_this->id . '-' . $index ); ?>">
						<?php echo isset( $item['date'] ) ? esc_html( $item['date'] ) : ''; ?>
					</label>
					<div>
						<?php echo isset( $item['date'] ) ? esc_html( $item['date'] ) : ''; ?>
					</div>
					<p>
						<?php echo isset( $item['info'] ) ? esc_html( $item['info'] ) : ''; ?>
					</p>
				</li>
				<?php
			endforeach;
			?>
		</ul>
	</div>
</div>

<style>
	@layer template, demo;

	@layer demo {
		<?php $_this->output_style_shortcode_id(); ?> .chargewp-wheel-timeline-cards-container {
			--base-rotation: <?php echo esc_attr( $atts['wheel_rotation_degree'] ); ?>deg;
			--duration: <?php echo esc_attr( $atts['wheel_speed'] ); ?>ms;
			--title-top: <?php echo esc_attr( $atts['vertical_date_alignment'] ); ?>rem;
			--info-top: <?php echo esc_attr( $atts['vertical_info_alignment'] ); ?>rem;
			--info-width: min(<?php echo esc_attr( $atts['info_width'] ); ?>%);
			--label-line-h: <?php echo esc_attr( $atts['connection_line_height'] ); ?>rem;
			--label-line-h-current: <?php echo esc_attr( $atts['active_connection_line_height'] ); ?>rem;
			--radius: min(<?php echo esc_attr( $atts['wheel_radius'] ); ?>cqw, 400px);
		}
	}

	<?php
	if ( 'true' === $atts['is_connection_lines'] ) :
		$_this->output_style_shortcode_id();
		?>
		.chargewp-wheel-timeline-cards li>label::after {
			content: '';
			position: absolute;
			top: 100%;
			left: 50%;
			translate: -50% 5px;
			width: 2px;
			height: var(--label-line-h);
			background-color: <?php echo esc_attr( $atts['connection_line_color'] ); ?>;
			transition: height 300ms ease-in-out var(--label-line-delay, 0ms);
		}
		<?php
	endif;
	if ( 'true' === $atts['is_wheel_spinning'] ) :
		foreach ( $items as $index => $item ) :
			?>
			.chargewp-wheel-timeline-cards:has(li:nth-child( <?php echo esc_attr( (string) ( $index + 1 ) ); ?> )>input:checked) { --index: <?php echo esc_attr( $index ); ?>; }
			<?php
		endforeach;
	endif;
	foreach ( $items as $index => $item ) :
		if ( ! empty( $item['date_active_font_size'] ) ) :
			$_this->output_style_shortcode_id();
			?>
			.chargewp-wheel-timeline-cards li[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"]>div {
				font-size: <?php echo esc_attr( $item['date_active_font_size'] ); ?>px;
			}
			<?php
		endif;
		if ( ! empty( $item['date_active_font_weight'] ) ) :
			$_this->output_style_shortcode_id();
			?>
			.chargewp-wheel-timeline-cards li[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"]>div {
				font-weight: <?php echo esc_attr( $item['date_active_font_weight'] ); ?>;
			}
			<?php
		endif;
		if ( ! empty( $item['date_font_size'] ) ) :
			$_this->output_style_shortcode_id();
			?>
			.chargewp-wheel-timeline-cards li[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"]>label {
				font-size: <?php echo esc_attr( $item['date_font_size'] ); ?>px;
			}
			<?php
		endif;
		if ( ! empty( $item['date_font_weight'] ) ) :
			$_this->output_style_shortcode_id();
			?>
			.chargewp-wheel-timeline-cards li[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"]>label {
				font-weight: <?php echo esc_attr( $item['date_font_weight'] ); ?>;
			}
			<?php
		endif;
		if ( ! empty( $item['info_font_size'] ) ) :
			$_this->output_style_shortcode_id();
			?>
			.chargewp-wheel-timeline-cards li[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"]>p {
				font-size: <?php echo esc_attr( $item['info_font_size'] ); ?>px;
			}
			<?php
		endif;
		if ( ! empty( $item['info_font_weight'] ) ) :
			$_this->output_style_shortcode_id();
			?>
			.chargewp-wheel-timeline-cards li[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"]>p {
				font-weight: <?php echo esc_attr( $item['info_font_weight'] ); ?>;
			}
			<?php
		endif;
		if ( ! empty( $item['date_color'] ) ) :
			$_this->output_style_shortcode_id();
			?>
			.chargewp-wheel-timeline-cards li[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"]>label {
				color: <?php echo esc_attr( $item['date_color'] ); ?>;
			}
			<?php
		endif;
		if ( ! empty( $item['date_hover_color'] ) ) :
			$_this->output_style_shortcode_id();
			?>
			.chargewp-wheel-timeline-cards li[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"]>label:hover {
				color: <?php echo esc_attr( $item['date_hover_color'] ); ?>;
			}
			<?php
		endif;

		if ( ! empty( $item['circle_color'] ) ) :
			$_this->output_style_shortcode_id();
			?>
			.chargewp-wheel-timeline-cards li[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"]>label::before {
				background-color: <?php echo esc_attr( $item['circle_color'] ); ?>;
			}
			<?php
		endif;
		if ( ! empty( $item['circle_hover_color'] ) ) :
			$_this->output_style_shortcode_id();
			?>
			.chargewp-wheel-timeline-cards li[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"]>label:hover::before {
				background-color: <?php echo esc_attr( $item['circle_hover_color'] ); ?>;
			}
			<?php
		endif;
		if ( ! empty( $item['circle_size'] ) ) :
			$_this->output_style_shortcode_id();
			?>
				.chargewp-wheel-timeline-cards li[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"]>label::before {
					width: <?php echo esc_attr( $item['circle_size'] ); ?>px;
					height: <?php echo esc_attr( $item['circle_size'] ); ?>px;
				}
			<?php
		endif;
	endforeach;
	?>

	@layer demo {
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-wheel-timeline-cards-container {
			--full-circle: 360deg;
			--cards-container-size: calc(var(--radius) * 2);
			--cards-container-padding: 2rem;
			--label-offset: calc(var(--radius) * -1 - 1rem);
			--title-offset-y: 30px;
			--info-offset-y: 30px;
			width: var(--cards-container-size);
			height: var(--cards-container-size);
			padding: var(--cards-container-padding);
		}
	}

	<?php $_this->output_style_shortcode_id(); ?> .chargewp-wheel-timeline-cards li {
		transform: rotate(calc(var(--i) * 360deg / var(--items)));
	}

	<?php $_this->output_style_shortcode_id(); ?> .chargewp-wheel-timeline-cards li>label {
		transform: translateY(var(--label-offset));
		transition: var(--duration) ease-in-out;
	}

	<?php $_this->output_style_shortcode_id(); ?> .chargewp-wheel-timeline-cards li>label::before {
		top: var(--cards-container-padding);
		transition: background-color var(--duration) ease-in-out;
	}

	<?php $_this->output_style_shortcode_id(); ?> .chargewp-wheel-timeline-cards>li>div {
		top: var(--title-top);
		opacity: var(--title-opacity, 0);
		translate: 0 var(--title-offset-y);
		transition: var(--duration) ease-in-out var(--title-delay, 0ms);
	}

	<?php $_this->output_style_shortcode_id(); ?> .chargewp-wheel-timeline-cards>li>p {
		top: var(--info-top);
		width: var(--info-width);
		opacity: var(--info-opacity, 0);
		transition: var(--duration) ease-in-out var(--info-delay, 0ms);
	}

	<?php $_this->output_style_shortcode_id(); ?> .chargewp-wheel-timeline-cards li:has(input:checked) {
		--label-opacity: 1;
		--label-line-h: var(--label-line-h-current);
		--label-line-delay: calc(var(--duration) * 2);

		--title-opacity: 1;
		--title-offset-y: 0;
		--title-delay: calc(var(--duration) * 3);

		--info-opacity: 1;
		--info-offset-y: 0;
		--info-delay: calc(var(--duration) * 4);
	}

	/* rotate container based on checked radio */
	<?php $_this->output_style_shortcode_id(); ?> .chargewp-wheel-timeline-cards:has(input:checked) {
		transform: rotate(calc(var(--base-rotation) - (var(--index) * var(--full-circle) / var(--items))));
	}
</style>
