<?php
/**
 * List of elements to add to dependency plugin.
 *
 * @note if you need specific class for a shortcode
 * then use for example: 'class'    => 'WpbPlusTimeline\Shortcodes\VerticalTimelineItem'
 * otherwise user 'is_container' => true for a container shortcode
 * and 'is_container' => false for a simple shortcode.
 *
 * @since 1.0
 */

return [
	'wpbakery-plus-vertical-timeline'      => [
		'config'       => 'shortcodes.vertical-timeline',
		'template'     => 'shortcodes/vertical-timeline.php',
		'is_container' => true,
	],
	'wpbakery-plus-vertical-timeline-item' => [
		'config'   => 'shortcodes.vertical-timeline-item',
		'template' => 'shortcodes/vertical-timeline-item.php',
	],
];
