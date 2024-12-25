<?php
/**
 * The template for displaying [wpbakery-plus-vertical-timeline-item] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var \WpbPlusTimeline\Shortcodes\VerticalTimelineItem $_this
 */

defined( 'ABSPATH' ) || exit;
?>

<li <?php $_this->outputShortcodeWrapperAttributes(); ?>>
    <div class="wpplus-direction-r">
        <div class="wpplus-flag-wrapper">
            <span class="wpplus-hexa"></span>
            <span class="wpplus-flag">Lorem ipsum.</span>
            <span class="wpplus-time-wrapper"><span class="wpplus-time">Feb 2015</span></span>
        </div>
        <div class="wpplus-desc">Lorem ipsum Nisi labore aute do aute culpa magna nulla voluptate exercitation deserunt proident.</div>
    </div>
</li>
