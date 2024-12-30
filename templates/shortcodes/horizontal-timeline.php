<?php
/**
 * The template for displaying [wpbakery-plus-horizontal-timeline] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var \WpbPlusTimeline\Shortcodes\VerticalTimeline $_this
 */

defined( 'ABSPATH' ) || exit;
?>
<!--<div --><?php // $_this->output_shortcode_wrapper_attributes(); ?><!-->-->
<!--	<ul class="wpplus-timeline">-->
<!--		--><?php // echo do_shortcode( $content ); ?>
<!--	</ul>-->
<!--</div>-->

<section class="wplus-wpbakery-horisontal-timeline-main">
	<ol>
		<li>
			<div>
				<time>1934</time> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
			</div>
		</li>
		<li>
			<div>
				<time>1937</time> Proin quam velit, efficitur vel neque vitae, rhoncus commodo mi. Suspendisse finibus mauris et bibendum molestie. Aenean ex augue, varius et pulvinar in, pretium non nisi.
			</div>
		</li>
		<li>
			<div>
				<time>1940</time> Proin iaculis, nibh eget efficitur varius, libero tellus porta dolor, at pulvinar tortor ex eget ligula. Integer eu dapibus arcu, sit amet sollicitudin eros.
			</div>
		</li>
		<li>
			<div>
				<time>1943</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
			</div>
		</li>
		<li>
			<div>
				<time>1946</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
			</div>
		</li>
		<li>
			<div>
				<time>1956</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
			</div>
		</li>
		<li>
			<div>
				<time>1957</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
			</div>
		</li>
		<li>
			<div>
				<time>1967</time> Aenean condimentum odio a bibendum rhoncus. Ut mauris felis, volutpat eget porta faucibus, euismod quis ante.
			</div>
		</li>
		<li>
			<div>
				<time>1977</time> Vestibulum porttitor lorem sed pharetra dignissim. Nulla maximus, dui a tristique iaculis, quam dolor convallis enim, non dignissim ligula ipsum a turpis.
			</div>
		</li>
		<li>
			<div>
				<time>1985</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
			</div>
		</li>
		<li>
			<div>
				<time>2000</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
			</div>
		</li>
		<li>
			<div>
				<time>2005</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
			</div>
		</li>
		<li></li>
	</ol>

	<div class="plus-wpbakery-horizontal-timeline-arrows">
		<button class="plus-wpbakery-horizontal-timeline-arrow plus-wpbakery-horizontal-timeline-arrow__prev plus-wpbakery-horizontal-timeline-disabled" disabled>
			<svg xmlns="http://www.w3.org/2000/svg" style="fill: #F45B69;" width="40" height="40" viewBox="0 0 24 24">
				<path d="M0 12c0 6.627 5.373 12 12 12s12-5.373 12-12-5.373-12-12-12-12 5.373-12 12zm7.58 0l5.988-5.995 1.414 1.416-4.574 4.579 4.574 4.59-1.414 1.416-5.988-6.006z"/>
			</svg>
		</button>
		<button class="plus-wpbakery-horizontal-timeline-arrow plus-wpbakery-horizontal-timeline-arrow__next">
			<svg xmlns="http://www.w3.org/2000/svg" style="fill: #F45B69;" width="40" height="40" viewBox="0 0 24 24">
				<path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.218 19l-1.782-1.75 5.25-5.25-5.25-5.25 1.782-1.75 6.968 7-6.968 7z"/>
			</svg>
		</button>
	</div>
</section>

<style type="text/css">
	.wplus-wpbakery-horisontal-timeline-main {
		white-space: nowrap;
		overflow-x: hidden;
	}

	.wplus-wpbakery-horisontal-timeline-main ol {
		font-size: 0;
		width: 100vw;
		padding: 250px 0;
		transition: all 1s;
	}

	.wplus-wpbakery-horisontal-timeline-main ol li {
		position: relative;
		display: inline-block;
		list-style-type: none;
		width: 160px;
		height: 3px;
		background: #eee;
	}

	.wplus-wpbakery-horisontal-timeline-main ol li:last-child {
		width: 280px;
	}

	.wplus-wpbakery-horisontal-timeline-main ol li:not(:first-child) {
		margin-left: 14px;
	}

	.wplus-wpbakery-horisontal-timeline-main ol li:not(:last-child)::after {
		content: "";
		position: absolute;
		top: 50%;
		left: calc(100% + 1px);
		bottom: 0;
		width: 12px;
		height: 12px;
		transform: translateY(-50%);
		border-radius: 50%;
		background: #f45b69;
	}

	.wplus-wpbakery-horisontal-timeline-main ol li div {
		position: absolute;
		left: calc(100% + 7px);
		width: 280px;
		padding: 15px;
		font-size: 1rem;
		white-space: normal;
		color: black;
		background: #ccc;
	}

	.wplus-wpbakery-horisontal-timeline-main ol li div::before {
		content: "";
		position: absolute;
		top: 100%;
		left: 0;
		width: 0;
		height: 0;
		border-style: solid;
	}

	.wplus-wpbakery-horisontal-timeline-main ol li:nth-child(odd) div {
		top: -16px;
		transform: translateY(-100%);
	}

	.wplus-wpbakery-horisontal-timeline-main ol li:nth-child(odd) div::before {
		top: 100%;
		border-width: 8px 8px 0 0;
		border-color: #ccc transparent transparent transparent;
	}

	.wplus-wpbakery-horisontal-timeline-main ol li:nth-child(even) div {
		top: calc(100% + 16px);
	}

	.wplus-wpbakery-horisontal-timeline-main ol li:nth-child(even) div::before {
		top: -8px;
		border-width: 8px 0 0 8px;
		border-color: transparent transparent transparent #ccc;
	}

	.wplus-wpbakery-horisontal-timeline-main time {
		display: block;
		font-size: 1.2rem;
		font-weight: bold;
		margin-bottom: 8px;
	}

	.wplus-wpbakery-horisontal-timeline-main .plus-wpbakery-horizontal-timeline-arrows {
		display: flex;
		justify-content: center;
		margin-bottom: 20px;
	}

	.wplus-wpbakery-horisontal-timeline-main .plus-wpbakery-horizontal-timeline-arrows .plus-wpbakery-horizontal-timeline-arrow__prev {
		margin-right: 20px;
	}

	.wplus-wpbakery-horisontal-timeline-main .plus-wpbakery-horizontal-timeline-disabled {
		opacity: 0.5;
	}

	.wplus-wpbakery-horisontal-timeline-main .plus-wpbakery-horizontal-timeline-arrows img {
		width: 45px;
		height: 45px;
	}

	.wplus-wpbakery-horisontal-timeline-main .plus-wpbakery-horizontal-timeline-arrows button {
		background: transparent;
		border: none;
		cursor: pointer;
		outline: none;
	}

	@media screen and (max-width: 599px) {
		.wplus-wpbakery-horisontal-timeline-main ol,
		.wplus-wpbakery-horisontal-timeline-main ol li {
			width: auto;
		}

		.wplus-wpbakery-horisontal-timeline-main ol {
			padding: 0;
			transform: none !important;
		}

		.wplus-wpbakery-horisontal-timeline-main ol li {
			display: block;
			height: auto;
			background: transparent;
		}

		.wplus-wpbakery-horisontal-timeline-main ol li:first-child {
			margin-top: 25px;
		}

		.wplus-wpbakery-horisontal-timeline-main ol li:not(:first-child) {
			margin-left: auto;
		}

		.wplus-wpbakery-horisontal-timeline-main ol li div {
			position: static;
			width: 94%;
			height: auto !important;
			margin: 0 auto 25px;
		}

		.wplus-wpbakery-horisontal-timeline-main ol li:nth-child(odd) div {
			transform: none;
		}

		.wplus-wpbakery-horisontal-timeline-main ol li:nth-child(odd) div::before,
		.wplus-wpbakery-horisontal-timeline-main ol li:nth-child(even) div::before {
			left: 50%;
			top: 100%;
			transform: translateX(-50%);
			border: none;
			border-left: 1px solid white;
			height: 25px;
		}

		.wplus-wpbakery-horisontal-timeline-main ol li:last-child,
		.wplus-wpbakery-horisontal-timeline-main ol li:nth-last-child(2) div::before,
		.wplus-wpbakery-horisontal-timeline-main ol li:not(:last-child)::after,
		.wplus-wpbakery-horisontal-timeline-main .plus-wpbakery-horizontal-timeline-arrows {
			display: none;
		}
	}
</style>

<script type="text/javascript">
	(function () {
		// VARIABLES
		const timeline = document.querySelector(".wplus-wpbakery-horisontal-timeline-main ol"),
			elH = document.querySelectorAll(".wplus-wpbakery-horisontal-timeline-main li > div"),
			arrows = document.querySelectorAll(".wplus-wpbakery-horisontal-timeline-main .plus-wpbakery-horizontal-timeline-arrows .plus-wpbakery-horizontal-timeline-arrow"),
			arrowPrev = document.querySelector(".wplus-wpbakery-horisontal-timeline-main .plus-wpbakery-horizontal-timeline-arrows .plus-wpbakery-horizontal-timeline-arrow__prev"),
			arrowNext = document.querySelector(".wplus-wpbakery-horisontal-timeline-main .plus-wpbakery-horizontal-timeline-arrows .plus-wpbakery-horizontal-timeline-arrow__next"),
			firstItem = document.querySelector(".wplus-wpbakery-horisontal-timeline-main li:first-child"),
			lastItem = document.querySelector(".wplus-wpbakery-horisontal-timeline-main li:last-child"),
			xScrolling = 280,
			disabledClass = "plus-wpbakery-horizontal-timeline-disabled";

		// START
		window.addEventListener("load", init);

		function init() {
			setEqualHeights(elH);
			animateTl(xScrolling, arrows, timeline);
			setSwipeFn(timeline, arrowPrev, arrowNext);
			setKeyboardFn(arrowPrev, arrowNext);
		}

		// SET EQUAL HEIGHTS
		function setEqualHeights(el) {
			let counter = 0;
			for (let i = 0; i < el.length; i++) {
				const singleHeight = el[i].offsetHeight;

				if (counter < singleHeight) {
					counter = singleHeight;
				}
			}

			for (let i = 0; i < el.length; i++) {
				el[i].style.height = `${counter}px`;
			}
		}

		// CHECK IF AN ELEMENT IS IN VIEWPORT
		// http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
		function isElementInViewport(el) {
			const rect = el.getBoundingClientRect();
			return (
				rect.top >= 0 &&
				rect.left >= 0 &&
				rect.bottom <=
				(window.innerHeight || document.documentElement.clientHeight) &&
				rect.right <= (window.innerWidth || document.documentElement.clientWidth)
			);
		}

		// SET STATE OF PREV/NEXT ARROWS
		function setBtnState(el, flag = true) {
			if (flag) {
				el.classList.add(disabledClass);
			} else {
				if (el.classList.contains(disabledClass)) {
					el.classList.remove(disabledClass);
				}
				el.disabled = false;
			}
		}

		// ANIMATE TIMELINE
		function animateTl(scrolling, el, tl) {
			let counter = 0;
			for (let i = 0; i < el.length; i++) {
				el[i].addEventListener("click", function () {
					if (!arrowPrev.disabled) {
						arrowPrev.disabled = true;
					}
					if (!arrowNext.disabled) {
						arrowNext.disabled = true;
					}
					const sign = this.classList.contains("plus-wpbakery-horizontal-timeline-arrow__prev") ? "" : "-";
					if (counter === 0) {
						tl.style.transform = `translateX(-${scrolling}px)`;
					} else {
						const tlStyle = getComputedStyle(tl);
						// add more browser prefixes if needed here
						const tlTransform =
							tlStyle.getPropertyValue("-webkit-transform") ||
							tlStyle.getPropertyValue("transform");
						const values =
							parseInt(tlTransform.split(",")[4]) +
							parseInt(`${sign}${scrolling}`);
						tl.style.transform = `translateX(${values}px)`;
					}

					setTimeout(() => {
						isElementInViewport(firstItem)
							? setBtnState(arrowPrev)
							: setBtnState(arrowPrev, false);
						isElementInViewport(lastItem)
							? setBtnState(arrowNext)
							: setBtnState(arrowNext, false);
					}, 1100);

					counter++;
				});
			}
		}

		// ADD SWIPE SUPPORT FOR TOUCH DEVICES
		function setSwipeFn(tl, prev, next) {
			const hammer = new Hammer(tl);
			hammer.on("swipeleft", () => next.click());
			hammer.on("swiperight", () => prev.click());
		}

		// ADD BASIC KEYBOARD FUNCTIONALITY
		function setKeyboardFn(prev, next) {
			document.addEventListener("keydown", (e) => {
				if (e.which === 37 || e.which === 39) {
					const timelineOfTop = timeline.offsetTop;
					const y = window.pageYOffset;
					if (timelineOfTop !== y) {
						window.scrollTo(0, timelineOfTop);
					}
					if (e.which === 37) {
						prev.click();
					} else if (e.which === 39) {
						next.click();
					}
				}
			});
		}
	})();

</script>
