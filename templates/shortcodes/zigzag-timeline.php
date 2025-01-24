<?php
/**
 * The template for displaying [wpbakery-plus-vertical-timeline] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\ChargeWpbShortcode $_this
 */

defined( 'ABSPATH' ) || exit;
?>
<div <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'plus-wpb-zigzag-timeline' ] ); ?>>
	<?php echo do_shortcode( $content ); ?>
</div>

<style>
	.plus-wpb-zigzag-timeline {
		display: flex;
		flex-direction: column;
		margin: 20px auto;
		position: relative;
	}
	.plus-wpb-zigzag-timeline__event {
		position: relative;
		display: flex;
		margin: 20px 0;
		border-radius: 6px;
		align-self: center;
		width: 50vw;
	}
	.plus-wpb-zigzag-timeline__event__title {
		font-size: 1.2rem;
		line-height: 1.4;
		text-transform: uppercase;
		font-weight: 600;
		letter-spacing: 1.5px;
	}
	.plus-wpb-zigzag-timeline__event__content {
		padding: 20px;
		box-shadow: 0 30px 60px -12px rgba(50, 50, 93, 0.25), 0 18px 36px -18px rgba(0, 0, 0, 0.3), 0 -12px 36px -8px rgba(0, 0, 0, 0.025);
		background: #fff;
		width: calc(40vw - 84px);
		border-radius: 0 6px 6px 0;
	}
	.plus-wpb-zigzag-timeline__event__date {
		font-size: 1.5rem;
		font-weight: 600;
		display: flex;
		align-items: center;
		justify-content: center;
		white-space: nowrap;
		padding: 0 20px;
		border-radius: 6px 0 0 6px;
	}
	.plus-wpb-zigzag-timeline__event__icon {
		display: flex;
		align-items: center;
		justify-content: center;
		align-self: center;
		margin: 0 20px;
		border-radius: 100%;
		width: 40px;
		box-shadow: 0 30px 60px -12px rgba(50, 50, 93, 0.25), 0 18px 36px -18px rgba(0, 0, 0, 0.3), 0 -12px 36px -8px rgba(0, 0, 0, 0.025);
		padding: 40px;
		height: 40px;
		position: relative;
	}
	.plus-wpb-zigzag-timeline__event__icon i {
		font-size: 32px;
	}
	.plus-wpb-zigzag-timeline__event__icon:before {
		content: "";
		width: 2px;
		height: 100%;
		position: absolute;
		top: 0%;
		z-index: -1;
		left: 50%;
		transform: translateX(-50%);
		animation: fillTop 2s forwards 4s ease-in-out;
	}
	.plus-wpb-zigzag-timeline__event__icon:after {
		content: "";
		width: 100%;
		height: 2px;
		position: absolute;
		left: 0%;
		z-index: -1;
		top: 50%;
		transform: translateY(-50%);
		animation: fillLeftOdd 2s forwards 4s ease-in-out;
	}
	.plus-wpb-zigzag-timeline__event__description {
		flex-basis: 60%;
	}
	.plus-wpb-zigzag-timeline__event:last-child .plus-wpb-zigzag-timeline__event__icon:before {
		content: none;
	}
	@media (max-width: 786px) {
		.plus-wpb-zigzag-timeline__event {
			flex-direction: column;
			align-self: center;
		}
		.plus-wpb-zigzag-timeline__event__content {
			width: 100%;
		}
		.plus-wpb-zigzag-timeline__event__icon {
			border-radius: 6px 6px 0 0;
			width: 100%;
			margin: 0;
			box-shadow: none;
		}
		.plus-wpb-zigzag-timeline__event__icon:before,
		.plus-wpb-zigzag-timeline__event__icon:after {
			display: none;
		}
		.plus-wpb-zigzag-timeline__event__date {
			border-radius: 0;
			padding: 20px;
		}
	}
	@keyframes fillLeft {
		100% {
			right: 100%;
		}
	}
	@keyframes fillTop {
		100% {
			top: 100%;
		}
	}
	@keyframes fillLeftOdd {
		100% {
			left: 100%;
		}
	}
</style>
