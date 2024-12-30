<?php
/**
 * List of elements to add to dependency plugin.
 *
 * @note if you need specific class for a shortcode
 * then use for example: 'class'    => 'WpbPlusTimeline\Shortcodes\VerticalTimelineItem'
 * otherwise user 'is_container' => true for a container shortcode
 * and 'is_container' => false for a simple shortcode.
 *
 * @note we can use 'depend_assets' to include 3 party assets.
 * We consider dependency assets all 3 party assets no strictly related to shortcode itself.
 * They can be inner and external
 * Inner assets we keep in the same directory where regular shortcode
 * 'depend_assets' => ['inner' => ['js' => ['hammer.js',],]],
 * External assets provided in shortcode config by url.
 * 'depend_assets' => ['external' => ['js' => ['https://code.jquery.com/jquery-3.7.1.min.js',],]],
 *
 * @since 1.0
 */

return [
	'wpbakery-plus-vertical-timeline'        => [
		'config'       => 'shortcodes.vertical-timeline',
		'template'     => 'shortcodes/vertical-timeline.php',
		'is_container' => true,
	],
	'wpbakery-plus-vertical-timeline-item'   => [
		'config'   => 'shortcodes.vertical-timeline-item',
		'template' => 'shortcodes/vertical-timeline-item.php',
	],
	'wpbakery-plus-horizontal-timeline'      => [
		'config'        => 'shortcodes.horizontal-timeline',
		'template'      => 'shortcodes/horizontal-timeline.php',
		'is_container'  => true,
		'depend_assets' => [
			'inner'    => [
				'js' => [
					'hammer',
				],
			],
			'external' => [
				'js' => [
					'http://localhost/Test/test.js',
				],
			],
		],
	],
	'wpbakery-plus-horizontal-timeline-item' => [
		'config'   => 'shortcodes.horizontal-timeline-item',
		'template' => 'shortcodes/horizontal-timeline-item.php',
	],
];
