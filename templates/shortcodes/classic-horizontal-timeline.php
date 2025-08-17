<?php
/**
 * The template for displaying [chargewp-classic-horizontal-timeline] shortcode output.
 *
 * @since 1.5
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcode $_this
 */

use ChargewpWpbTimeline\ElementIntegration\IconIntegration;

defined( 'ABSPATH' ) || exit;

$items                   = vc_param_group_parse_atts( $atts['items'] );
$items                   = $_this->get_atts_lib( 'param-group' )->set_items_id( $items, $_this, 'items' );
$custom_icon_integration = new IconIntegration();
?>

<div <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'chargewp-classic-horizontal-timeline-wrapper' ] ); ?>>
    <div class="chargewp-classic-horizontal-timeline-wrapper-container">
        <div class="chargewp-classic-horizontal-timeline-container">
            <div class="chargewp-classic-horizontal-timeline-track">
                <div class="chargewp-classic-horizontal-timeline-item">
                    <div class="chargewp-classic-horizontal-timeline-marker"></div>
                    <div class="chargewp-classic-horizontal-timeline-content chargewp-classic-horizontal-timeline-top">
                        <div class="chargewp-classic-horizontal-timeline-date">Q1 2024</div>
                        <div class="chargewp-classic-horizontal-timeline-title">Planning</div>
                        <div class="chargewp-classic-horizontal-timeline-description">Initial project planning and comprehensive research phase</div>
                    </div>
                </div>

                <div class="chargewp-classic-horizontal-timeline-item">
                    <div class="chargewp-classic-horizontal-timeline-marker"></div>
                    <div class="chargewp-classic-horizontal-timeline-content chargewp-classic-horizontal-timeline-bottom">
                        <div class="chargewp-classic-horizontal-timeline-date">Q2 2024</div>
                        <div class="chargewp-classic-horizontal-timeline-title">Development</div>
                        <div class="chargewp-classic-horizontal-timeline-description">Core development phase with agile methodology</div>
                    </div>
                </div>

                <div class="chargewp-classic-horizontal-timeline-item">
                    <div class="chargewp-classic-horizontal-timeline-marker"></div>
                    <div class="chargewp-classic-horizontal-timeline-content chargewp-classic-horizontal-timeline-top">
                        <div class="chargewp-classic-horizontal-timeline-date">Q3 2024</div>
                        <div class="chargewp-classic-horizontal-timeline-title">Testing</div>
                        <div class="chargewp-classic-horizontal-timeline-description">Quality assurance and comprehensive testing procedures</div>
                    </div>
                </div>

                <div class="chargewp-classic-horizontal-timeline-item">
                    <div class="chargewp-classic-horizontal-timeline-marker"></div>
                    <div class="chargewp-classic-horizontal-timeline-content chargewp-classic-horizontal-timeline-bottom">
                        <div class="chargewp-classic-horizontal-timeline-date">Q4 2024</div>
                        <div class="chargewp-classic-horizontal-timeline-title">Launch</div>
                        <div class="chargewp-classic-horizontal-timeline-description">Product launch and market deployment strategy</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.chargewp-classic-horizontal-timeline-wrapper {
    width: 90%;
}

.chargewp-classic-horizontal-timeline-wrapper-container {
    position: relative;
    width: 100%;
    overflow-x: auto;
}

.chargewp-classic-horizontal-timeline-container {
    position: relative;
    min-width: 800px;
    height: 300px;
    padding: 20px;
}

.chargewp-classic-horizontal-timeline-track {
    position: relative;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.chargewp-classic-horizontal-timeline-track::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 2px;
    transform: translateY(-50%);
    background-color: #e74c3c;
}

.chargewp-classic-horizontal-timeline-item {
    position: relative;
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    z-index: 2;
}

.chargewp-classic-horizontal-timeline-marker {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    border: 4px solid #ffffff;
    position: relative;
    z-index: 3;
    background-color: #e74c3c;
}

.chargewp-classic-horizontal-timeline-content {
    position: absolute;
    width: 200px;
    padding: 15px;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);
    background-color: #ffffff;
}

.chargewp-classic-horizontal-timeline-top {
    bottom: 40px;
}

.chargewp-classic-horizontal-timeline-bottom {
    top: 40px;
}

.chargewp-classic-horizontal-timeline-content::before {
    content: "";
    position: absolute;
    width: 0;
    height: 0;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    left: 50%;
    transform: translateX(-50%);
}

.chargewp-classic-horizontal-timeline-top::before {
    top: 100%;
    border-top: 10px solid #ffffff;
}

.chargewp-classic-horizontal-timeline-bottom::before {
    bottom: 100%;
    border-bottom: 10px solid #ffffff;
}

.chargewp-classic-horizontal-timeline-date {
    font-size: 12px;
    font-weight: bold;
    margin-bottom: 5px;
    color: #e74c3c;
}

.chargewp-classic-horizontal-timeline-title {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 5px;
    color: #2c3e50;
}

.chargewp-classic-horizontal-timeline-description {
    font-size: 12px;
    line-height: 1.4;
    color: #7f8c8d;
}
</style>
