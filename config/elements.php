<?php
/**
 * List of elements to add to dependency plugin.
 *
 * @note if you need specific class for a shortcode
 * then use for example: 'class'    => 'ChargewpWpbTimeline\Shortcodes\VerticalTimelineItem'
 * otherwise user 'is_container' => true for a container shortcode
 * and 'is_container' => false for a simple shortcode.
 *
 * @note we can use 'depend_assets' to include assets.
 * We consider dependency assets all assets no strictly related to shortcode itself.
 * They can be inner and external.
 *  - Inner assets we keep in the same directory where regular shortcode, it's a shortcode specific asset.
 * 'depend_assets' => ['inner' => ['js' => ['hammer.js',],]],
 *  - External assets provided in shortcode config by url.
 * 'depend_assets' => ['external' => ['js' => ['https://code.jquery.com/jquery-3.7.1.min.js',],]],
 *
 * @since 1.0
 */

return [
	'chargewp-vertical-segment-timeline'               => [
		'config'        => 'shortcodes.vertical-segment-timeline',
		'template'      => 'shortcodes/vertical-segment-timeline.php',
		'is_container'  => true,
		'depend_assets' => [
			'inner' => [
				'css' => [
					'element.css',
				],
			],
		],
	],
	'chargewp-vertical-segment-timeline-item'          => [
		'config'   => 'shortcodes.vertical-segment-timeline-item',
		'template' => 'shortcodes/vertical-segment-timeline-item.php',
	],

	'chargewp-zigzag-timeline'                         => [
		'config'        => 'shortcodes.zigzag-timeline',
		'template'      => 'shortcodes/zigzag-timeline.php',
		'is_container'  => true,
		'depend_assets' => [
			'inner' => [
				'css' => [
					'element.css',
				],
				'js'  => [
					'element.js',
				],
			],
		],
	],
	'chargewp-zigzag-timeline-item'                    => [
		'config'   => 'shortcodes.zigzag-timeline-item',
		'template' => 'shortcodes/zigzag-timeline-item.php',
	],

	'chargewp-left-side-stack-timeline'                => [
		'config'        => 'shortcodes.left-side-stack-timeline',
		'template'      => 'shortcodes/left-side-stack-timeline.php',
		'is_container'  => true,
		'depend_assets' => [
			'inner' => [
				'css' => [
					'element.css',
				],
			],
		],
	],
	'chargewp-left-side-stack-timeline-item'           => [
		'config'   => 'shortcodes.left-side-stack-timeline-item',
		'template' => 'shortcodes/left-side-stack-timeline-item.php',
	],

	'chargewp-tailwind-vertical-classic-timeline'      => [
		'config'        => 'shortcodes.tailwind-vertical-classic-timeline',
		'template'      => 'shortcodes/tailwind-vertical-classic-timeline.php',
		'is_container'  => true,
		'depend_assets' => [
			'external' => [
                'css' => [
                    'chargewp-tailwind-cdn-before-setup' => CHARGEWPWPBTIMELINE_ASSETS_URI . '/css/shortcodes-common/tailwind-base.css',
                ],
			],
			'inner'    => [
				'css' => [
					'element.css',
				],
			],
		],
	],
	'chargewp-tailwind-vertical-classic-timeline-item' => [
		'config'   => 'shortcodes.tailwind-vertical-classic-timeline-item',
		'template' => 'shortcodes/tailwind-vertical-classic-timeline-item.php',
	],
];
