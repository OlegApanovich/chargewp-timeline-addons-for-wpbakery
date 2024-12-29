<?php
/**
 * List of elements to add to dependency plugin.
 *
 * @since 1.0
 */

return array(
	'wpbakery-plus-vertical-timeline'      => array(
		'config'   => 'shortcodes.vertical-timeline',
		'template' => 'shortcodes/vertical-timeline.php',
		'class'    => 'WpbPlusTimeline\Shortcodes\VerticalTimeline',
	),
	'wpbakery-plus-vertical-timeline-item' => array(
		'config'   => 'shortcodes.vertical-timeline-item',
		'template' => 'shortcodes/vertical-timeline-item.php',
		'class'    => 'WpbPlusTimeline\Shortcodes\VerticalTimelineItem',
	),
);
