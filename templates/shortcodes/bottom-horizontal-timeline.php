<?php
/**
 * The template for displaying [chargewp-bottom-horizontal-timeline] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcode $_this
 */

defined( 'ABSPATH' ) || exit;
?>

<div <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'chargewp-bottom-horizontal-timeline-wrapper' ] ); ?>>
    <div class="chargewp-bottom-horizontal-timeline-container">
        <div class="chargewp-bottom-horizontal-timeline-item">
            <div class="chargewp-bottom-horizontal-timeline-step">1</div>
            <div class="chargewp-bottom-horizontal-timeline-content">
                <h4 class="chargewp-bottom-horizontal-timeline-title">Planning</h4>
                <p class="chargewp-bottom-horizontal-timeline-description">Define project scope and requirements</p>
            </div>
        </div>
        <div class="chargewp-bottom-horizontal-timeline-item">
            <div class="chargewp-bottom-horizontal-timeline-step">2</div>
            <div class="chargewp-bottom-horizontal-timeline-content">
                <h4 class="chargewp-bottom-horizontal-timeline-title">Design</h4>
                <p class="chargewp-bottom-horizontal-timeline-description">Create wireframes and mockups</p>
            </div>
        </div>
        <div class="chargewp-bottom-horizontal-timeline-item">
            <div class="chargewp-bottom-horizontal-timeline-step">3</div>
            <div class="chargewp-bottom-horizontal-timeline-content">
                <h4 class="chargewp-bottom-horizontal-timeline-title">Development</h4>
                <p class="chargewp-bottom-horizontal-timeline-description">Build and implement features</p>
            </div>
        </div>
        <div class="chargewp-bottom-horizontal-timeline-item">
            <div class="chargewp-bottom-horizontal-timeline-step">4</div>
            <div class="chargewp-bottom-horizontal-timeline-content">
                <h4 class="chargewp-bottom-horizontal-timeline-title">Testing</h4>
                <p class="chargewp-bottom-horizontal-timeline-description">Quality assurance and bug fixes</p>
            </div>
        </div>
        <div class="chargewp-bottom-horizontal-timeline-item">
            <div class="chargewp-bottom-horizontal-timeline-step">5</div>
            <div class="chargewp-bottom-horizontal-timeline-content">
                <h4 class="chargewp-bottom-horizontal-timeline-title">Launch</h4>
                <p class="chargewp-bottom-horizontal-timeline-description">Deploy to production environment</p>
            </div>
        </div>
    </div>
</div>

<style>
    <?php $_this->output_style_shortcode_id(); ?> .chargewp-bottom-horizontal-timeline-container::before {
        background-color: <?php echo esc_attr( $atts['base_line_color'] ); ?>;
        top: <?php echo esc_attr( $atts['base_line_height'] ); ?>px;
        height: <?php echo esc_attr( $atts['base_line_thickness'] ); ?>px;
    }
</style>

<style>
    .chargewp-bottom-horizontal-timeline-wrapper {
        width: 100%;
        position: relative;
        overflow-x: auto;
    }

    .chargewp-bottom-horizontal-timeline-container {
        display: flex;
        position: relative;
        min-width: max-content;
        align-items: flex-start;
    }

    .chargewp-bottom-horizontal-timeline-container::before {
        content: "";
        position: absolute;
        right: 25px;
        left: 25px;
        z-index: 1;
    }


    .chargewp-bottom-horizontal-timeline-item {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        min-width: 150px;
    }

    .chargewp-bottom-horizontal-timeline-step {
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

    .chargewp-bottom-horizontal-timeline-step {
        background-color: #ffffff;
        border-color: #10b981;
        color: #10b981;
    }

    .chargewp-bottom-horizontal-timeline-content {
        text-align: center;
        margin-top: 20px;
        max-width: 140px;
    }

    .chargewp-bottom-horizontal-timeline-title {
        font-size: 16px;
        font-weight: 600;
        margin: 0 0 8px 0;
        line-height: 1.3;
    }

    .chargewp-bottom-horizontal-timeline-title {
        color: #374151;
    }

    .chargewp-bottom-horizontal-timeline-description {
        font-size: 13px;
        line-height: 1.4;
        margin: 0;
    }

    .chargewp-bottom-horizontal-timeline-description {
        color: #6b7280;
    }

    .chargewp-bottom-horizontal-timeline-item.chargewp-bottom-horizontal-timeline-completed .chargewp-bottom-horizontal-timeline-step {
        border-color: #10b981;
    }

    .chargewp-bottom-horizontal-timeline-item.chargewp-bottom-horizontal-timeline-completed .chargewp-bottom-horizontal-timeline-step {
        background-color: #10b981;
        color: #ffffff;
    }
</style>
