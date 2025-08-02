<?php
/**
 * The template for displaying [chargewp-bottom-horizontal-timeline] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcode $_this
 */

defined( 'ABSPATH' ) || exit;

ob_start();
var_dump(1);
$imp_to_file = ob_get_clean();
file_put_contents('/var/www/test.html', $imp_to_file, FILE_APPEND);

?>

<div class="bottom-horizontal-timeline-container">
    <div class="bottom-horizontal-timeline-wrapper">
        <div class="bottom-horizontal-timeline-item">
            <div class="bottom-horizontal-timeline-step">1</div>
            <div class="bottom-horizontal-timeline-content">
                <h4 class="bottom-horizontal-timeline-title">Planning</h4>
                <p class="bottom-horizontal-timeline-description">Define project scope and requirements</p>
            </div>
        </div>
        <div class="bottom-horizontal-timeline-item">
            <div class="bottom-horizontal-timeline-step">2</div>
            <div class="bottom-horizontal-timeline-content">
                <h4 class="bottom-horizontal-timeline-title">Design</h4>
                <p class="bottom-horizontal-timeline-description">Create wireframes and mockups</p>
            </div>
        </div>
        <div class="bottom-horizontal-timeline-item">
            <div class="bottom-horizontal-timeline-step">3</div>
            <div class="bottom-horizontal-timeline-content">
                <h4 class="bottom-horizontal-timeline-title">Development</h4>
                <p class="bottom-horizontal-timeline-description">Build and implement features</p>
            </div>
        </div>
        <div class="bottom-horizontal-timeline-item">
            <div class="bottom-horizontal-timeline-step">4</div>
            <div class="bottom-horizontal-timeline-content">
                <h4 class="bottom-horizontal-timeline-title">Testing</h4>
                <p class="bottom-horizontal-timeline-description">Quality assurance and bug fixes</p>
            </div>
        </div>
        <div class="bottom-horizontal-timeline-item">
            <div class="bottom-horizontal-timeline-step">5</div>
            <div class="bottom-horizontal-timeline-content">
                <h4 class="bottom-horizontal-timeline-title">Launch</h4>
                <p class="bottom-horizontal-timeline-description">Deploy to production environment</p>
            </div>
        </div>
    </div>
</div>
<style>
    .bottom-horizontal-timeline-container {
        width: 100%;
        position: relative;
        overflow-x: auto;
    }

    .bottom-horizontal-timeline-wrapper {
        display: flex;
        position: relative;
        min-width: max-content;
        align-items: flex-start;
    }

    .bottom-horizontal-timeline-wrapper::before {
        content: "";
        position: absolute;
        top: 25px;
        right: 25px;
        left: 25px;
        height: 2px;
        z-index: 1;
    }

    .bottom-horizontal-timeline-line {
        background-color: #e5e7eb;
    }

    .bottom-horizontal-timeline-wrapper::before {
        background-color: #e5e7eb;
    }

    .bottom-horizontal-timeline-item {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        min-width: 150px;
    }

    .bottom-horizontal-timeline-step {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 16px;
        position: relative;
        z-index: 2;
        border: 3px solid;
    }

    .bottom-horizontal-timeline-step-bg {
        background-color: #ffffff;
    }

    .bottom-horizontal-timeline-step-border {
        border-color: #10b981;
    }

    .bottom-horizontal-timeline-step-color {
        color: #10b981;
    }

    .bottom-horizontal-timeline-step {
        background-color: #ffffff;
        border-color: #10b981;
        color: #10b981;
    }

    .bottom-horizontal-timeline-content {
        text-align: center;
        margin-top: 20px;
        max-width: 140px;
    }

    .bottom-horizontal-timeline-title {
        font-size: 16px;
        font-weight: 600;
        margin: 0 0 8px 0;
        line-height: 1.3;
    }

    .bottom-horizontal-timeline-title-color {
        color: #374151;
    }

    .bottom-horizontal-timeline-title {
        color: #374151;
    }

    .bottom-horizontal-timeline-description {
        font-size: 13px;
        line-height: 1.4;
        margin: 0;
    }

    .bottom-horizontal-timeline-description-color {
        color: #6b7280;
    }

    .bottom-horizontal-timeline-description {
        color: #6b7280;
    }

    .bottom-horizontal-timeline-item.bottom-horizontal-timeline-completed .bottom-horizontal-timeline-step {
        border-color: #10b981;
    }

    .bottom-horizontal-timeline-completed-bg {
        background-color: #10b981;
    }

    .bottom-horizontal-timeline-completed-color {
        color: #ffffff;
    }

    .bottom-horizontal-timeline-item.bottom-horizontal-timeline-completed .bottom-horizontal-timeline-step {
        background-color: #10b981;
        color: #ffffff;
    }
</style>
