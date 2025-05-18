<?php
/**
 * The template for displaying [chargewp-left-side-vertical-slider-timeline] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcode $_this
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="timeline-container">
	<div id="timeline">
		<ul id="dates">
			<li><a href="#1900">1900</a></li>
			<li><a href="#1930">1930</a></li>
			<li><a href="#1944">1944</a></li>
			<li><a href="#1950">1950</a></li>
			<li><a href="#1971">1971</a></li>
			<li><a href="#1977">1977</a></li>
			<li><a href="#1989">1989</a></li>
			<li><a href="#1999">1999</a></li>
			<li><a href="#2001">2001</a></li>
			<li><a href="#2011">2011</a></li>
		</ul>
		<ul id="issues">
			<li id="1900">
				<img src="http://www.csslab.cl/ejemplos/timelinr/latest/images/9.png" />
				<h1>1900</h1>
				<p>Here we are.</p>
			</li>
			<li id="1930">
				<img src="http://www.csslab.cl/ejemplos/timelinr/latest/images/9.png" />
				<h1>1930</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit.</p>
			</li>
			<li id="1944">
				<img src="http://www.csslab.cl/ejemplos/timelinr/latest/images/9.png" />
				<h1>1944</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit.</p>
			</li>
			<li id="1950">
				<img src="http://www.csslab.cl/ejemplos/timelinr/latest/images/9.png" />
				<h1>1950</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit.</p>
			</li>
			<li id="1971">
				<img src="http://www.csslab.cl/ejemplos/timelinr/latest/images/9.png" />
				<h1>1971</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit.</p>
			</li>
			<li id="1977">
				<img src="http://www.csslab.cl/ejemplos/timelinr/latest/images/9.png" />
				<h1>1977</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit.</p>
			</li>
			<li id="1989">
				<img src="http://www.csslab.cl/ejemplos/timelinr/latest/images/9.png" />
				<h1>1989</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit.</p>
			</li>
			<li id="1999">
				<img src="http://www.csslab.cl/ejemplos/timelinr/latest/images/9.png" />
				<h1>1999</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit.</p>
			</li>
			<li id="2001">
				<img src="http://www.csslab.cl/ejemplos/timelinr/latest/images/9.png" />
				<h1>2001</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit.</p>
			</li>
			<li id="2011">
				<img src="http://www.csslab.cl/ejemplos/timelinr/latest/images/9.png" />
				<h1>2011</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit.</p>
			</li>
		</ul>
		<a href="#" id="next">+</a>
		<a href="#" id="prev">-</a>
	</div>
</div>

<style>
	/* Container-specific styles instead of global styles */
	.timeline-container {
		margin: 0;
		padding: 0;
		font-family: Georgia, serif;
		color: #fff;
		font-size: 14px;
		background: #222;
		width: 100%;
	}

	/* Reset styles only for elements inside the container */
	.timeline-container * {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}

	.timeline-container a {
		color: #ffffcc;
		text-decoration: none;
		-webkit-transition: 0.5s;
		-moz-transition: 0.5s;
		-o-transition: 0.5s;
		-ms-transition: 0.5s;
		transition: 0.5s;
	}

	.timeline-container a:hover,
	.timeline-container a.selected {
		color: #ffcc00;
	}

	.timeline-container #timeline {
		width: 100%; /* Make timeline responsive */
		height: 600px;
		overflow: hidden;
		margin: 0 auto;
		position: relative;
		display: flex; /* Use flexbox for layout */
	}

	/* Add a vertical line through the center of the dots */
	.timeline-container #timeline::before {
		content: '';
		position: absolute;
		top: 0;
		left: 6px; /* Position for center of dots (dot is at 0px, 12px wide) */
		width: 2px;
		height: 100%;
		background-color: #444;
		z-index: 1;
	}

	.timeline-container #dates {
		width: auto; /* Let width be determined by content */
		min-width: 60px;
		height: 600px;
		overflow: hidden;
		float: left;
	}

	.timeline-container #dates li {
		list-style: none;
		width: auto;
		height: 100px;
		line-height: 100px;
		font-size: 16px;
		padding-left: 15px;
		padding-right: 15px;
		position: relative; /* For absolute positioning of the dot */
	}

	/* Create a dot centered on the vertical line */
	.timeline-container #dates li::before {
		content: '';
		position: absolute;
		left: 0;
		top: 50%;
		transform: translateY(-50%);
		width: 12px;
		height: 12px;
		background-color: #666;
		border: 1px solid #999;
		border-radius: 50%;
		z-index: 2;
	}

	.timeline-container #dates a {
		line-height: 38px;
		padding-bottom: 10px;
	}

	.timeline-container #dates a.selected,
	.timeline-container #dates li a.selected {
		font-size: 24px; /* Larger selected font size */
	}

	.timeline-container #issues {
		width: auto; /* Let issues take remaining space */
		height: 600px;
		overflow: hidden;
		float: left;
	}

	.timeline-container #issues li {
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

	.timeline-container #issues li.selected img {
		-webkit-transform: scale(1.1,1.1);
		-moz-transform: scale(1.1,1.1);
		-o-transform: scale(1.1,1.1);
		-ms-transform: scale(1.1,1.1);
		transform: scale(1.1,1.1);
	}

	.timeline-container #issues li img {
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

	.timeline-container #issues li h1 {
		color: #ffcc00;
		font-size: 24px; /* Smaller heading */
		text-align: center; /* Center heading */
		text-shadow: #000 1px 1px 2px;
		margin-bottom: 10px;
	}

	.timeline-container #issues li p {
		font-size: 12px; /* Smaller text */
		margin: 10px auto;
		font-weight: normal;
		line-height: 1.4;
		text-shadow: #000 1px 1px 2px;
		text-align: center; /* Center paragraph text */
		max-width: 250px; /* Control paragraph width */
	}

	.timeline-container #next,
	.timeline-container #prev {
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

	.timeline-container #next:hover,
	.timeline-container #prev:hover {
		opacity: 0.8;
	}

	.timeline-container #next.disabled,
	.timeline-container #prev.disabled {
		opacity: 0.2;
	}

	/* REPLACED BACKGROUND IMAGES WITH SVG */
	.timeline-container #next {
		bottom: 0;
		background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 38 22'%3E%3Cpath d='M19 22L0 3L3 0L19 16L35 0L38 3L19 22Z' fill='%23ffcc00'/%3E%3C/svg%3E") no-repeat center;
	}

	.timeline-container #prev {
		top: 0;
		background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 38 22'%3E%3Cpath d='M19 0L38 19L35 22L19 6L3 22L0 19L19 0Z' fill='%23ffcc00'/%3E%3C/svg%3E") no-repeat center;
	}

	.timeline-container #grad_top {
		top: 0;
		background: linear-gradient(to bottom, rgba(34,34,34,1) 0%, rgba(34,34,34,0) 100%);
	}

	.timeline-container #grad_bottom {
		bottom: 0;
		background: linear-gradient(to top, rgba(34,34,34,1) 0%, rgba(34,34,34,0) 100%);
	}
</style>

<script>
	jQuery(window).ready(function() {
		jQuery(function(){
			jQuery().timelinr({
				orientation: 'vertical',
				issuesSpeed: 300,
				datesSpeed: 100,
				arrowKeys: 'true',
				startAt: 2
			});
		});
	});
</script>
