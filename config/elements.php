<?php
/**
 * List of elements to add to dependency plugin.
 *
 * @since 1.0
 */

return [
	'wpbakery-plus-vertical-timeline'      => [
		'config'   => 'shortcodes.vertical-timeline',
		'template' => 'shortcodes/vertical-timeline.php',
		'class'    => 'WpbPlusTimeline\Shortcodes\VerticalTimeline',
	],
	'wpbakery-plus-vertical-timeline-item' => [
		'config'   => 'shortcodes.vertical-timeline-item',
		'template' => 'shortcodes/vertical-timeline-item.php',
		'class'    => 'WpbPlusTimeline\Shortcodes\VerticalTimelineItem',
	],
];
