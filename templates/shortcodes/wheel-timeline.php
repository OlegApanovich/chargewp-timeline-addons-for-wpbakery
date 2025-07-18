<?php
/**
 * The template for displaying [chargewp-wheel-timeline] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\Shortcodes\ChargeWpbShortcode $_this
 */

defined( 'ABSPATH' ) || exit;

$items = vc_param_group_parse_atts( $atts['items'] );
$items = $_this->get_atts_lib( 'param-group' )->set_items_id( $items, $_this, 'items' );
?>

<div <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'chargewp-wheel-timeline-wrapper' ] ); ?>>
    <div class="chargewp-cards-container">
        <ul class="chargewp-cards" style="--items: 26;">
            <li style="--i: 0;">
                <input type="radio" id="chargewp-item-0" name="chargewp-gallery-item" checked>
                <label for="chargewp-item-0">2000</label>
                <h2>2000</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 1;">
                <input type="radio" id="chargewp-item-1" name="chargewp-gallery-item">
                <label for="chargewp-item-1">2001</label>
                <h2>2001</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 2;">
                <input type="radio" id="chargewp-item-2" name="chargewp-gallery-item">
                <label for="chargewp-item-2">2002</label>
                <h2>2002</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 3;">
                <input type="radio" id="chargewp-item-3" name="chargewp-gallery-item">
                <label for="chargewp-item-3">2003</label>
                <h2>2003</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 4;">
                <input type="radio" id="chargewp-item-4" name="chargewp-gallery-item">
                <label for="chargewp-item-4">2004</label>
                <h2>2004</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 5;">
                <input type="radio" id="chargewp-item-5" name="chargewp-gallery-item">
                <label for="chargewp-item-5">2005</label>
                <h2>2005</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 6;">
                <input type="radio" id="chargewp-item-6" name="chargewp-gallery-item">
                <label for="chargewp-item-6">2006</label>
                <h2>2006</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 7;">
                <input type="radio" id="chargewp-item-7" name="chargewp-gallery-item">
                <label for="chargewp-item-7">2007</label>
                <h2>2007</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 8;">
                <input type="radio" id="chargewp-item-8" name="chargewp-gallery-item">
                <label for="chargewp-item-8">2008</label>
                <h2>2008</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 9;">
                <input type="radio" id="chargewp-item-9" name="chargewp-gallery-item">
                <label for="chargewp-item-9">2009</label>
                <h2>2009</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 10;">
                <input type="radio" id="chargewp-item-10" name="chargewp-gallery-item">
                <label for="chargewp-item-10">2010</label>
                <h2>2010</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 11;">
                <input type="radio" id="chargewp-item-11" name="chargewp-gallery-item">
                <label for="chargewp-item-11">2011</label>
                <h2>2011</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 12;">
                <input type="radio" id="chargewp-item-12" name="chargewp-gallery-item">
                <label for="chargewp-item-12">2012</label>
                <h2>2012</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 13;">
                <input type="radio" id="chargewp-item-13" name="chargewp-gallery-item">
                <label for="chargewp-item-13">2013</label>
                <h2>2013</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 14;">
                <input type="radio" id="chargewp-item-14" name="chargewp-gallery-item">
                <label for="chargewp-item-14">2014</label>
                <h2>2014</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 15;">
                <input type="radio" id="chargewp-item-15" name="chargewp-gallery-item">
                <label for="chargewp-item-15">2015</label>
                <h2>2015</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 16;">
                <input type="radio" id="chargewp-item-16" name="chargewp-gallery-item">
                <label for="chargewp-item-16">2016</label>
                <h2>2016</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 17;">
                <input type="radio" id="chargewp-item-17" name="chargewp-gallery-item">
                <label for="chargewp-item-17">2017</label>
                <h2>2017</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 18;">
                <input type="radio" id="chargewp-item-18" name="chargewp-gallery-item">
                <label for="chargewp-item-18">2018</label>
                <h2>2018</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 19;">
                <input type="radio" id="chargewp-item-19" name="chargewp-gallery-item">
                <label for="chargewp-item-19">2019</label>
                <h2>2019</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 20;">
                <input type="radio" id="chargewp-item-20" name="chargewp-gallery-item">
                <label for="chargewp-item-20">2020</label>
                <h2>2020</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 21;">
                <input type="radio" id="chargewp-item-21" name="chargewp-gallery-item">
                <label for="chargewp-item-21">2021</label>
                <h2>2021</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 22;">
                <input type="radio" id="chargewp-item-22" name="chargewp-gallery-item">
                <label for="chargewp-item-22">2022</label>
                <h2>2022</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 23;">
                <input type="radio" id="chargewp-item-23" name="chargewp-gallery-item">
                <label for="chargewp-item-23">2023</label>
                <h2>2023</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 24;">
                <input type="radio" id="chargewp-item-24" name="chargewp-gallery-item">
                <label for="chargewp-item-24">2024</label>
                <h2>2024</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
            <li style="--i: 25;">
                <input type="radio" id="chargewp-item-25" name="chargewp-gallery-item">
                <label for="chargewp-item-25">2025</label>
                <h2>2025</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, perspiciatis dicta? In nihil quidem sunt omnis facilis quas corporis at, officia itaque!</p>
            </li>
        </ul>
    </div>
</div>


<style>
    .chargewp-wheel-timeline-wrapper {
        container-type: inline-size;
        padding: 30px;
        overflow: hidden;
    }

    @layer template, demo;

    @layer demo {
        <?php $_this->output_style_shortcode_id(); ?> .chargewp-cards-container {
            --label-color: <?php echo esc_attr( $atts['circles_color'] ); ?>;
            --label-color-hover: <?php echo esc_attr( $atts['circles_hover_color'] ); ?>;
            --base-rotation: <?php echo esc_attr( $atts['wheel_rotation_degree'] ); ?>deg;
            --duration: <?php echo esc_attr( $atts['wheel_speed'] ); ?>ms;
            --label-dot-size: <?php echo esc_attr( $atts['circles_size'] ); ?>px;
            --title-top: <?php echo esc_attr( $atts['vertical_date_alignment'] ); ?>rem;
            --info-top: <?php echo esc_attr( $atts['vertical_info_alignment'] ); ?>rem;
            --info-width: min(<?php echo esc_attr( $atts['info_width'] ); ?>%);
            --label-line-h: 0;
        }
    }

    @layer demo {
        .chargewp-cards-container {
            --full-circle: 360deg;
            --radius: min(45cqw, 400px);
            --cards-container-size: calc(var(--radius) * 2);
            --cards-container-padding: 2rem;
            --border-color: transparent;
            --label-offset: calc(var(--radius) * -1 - 1rem);
            --label-size: 30px;
            --label-line-h-current: 2rem;
            --title-offset-y: 30px;
            --info-offset-y: 30px;
            box-sizing: content-box;
            position: relative;
            width: var(--cards-container-size);
            height: var(--cards-container-size);
            padding: var(--cards-container-padding);
            /* Ensure it fits within parent with some margin */
            max-width: calc(100% - 80px);
        }
    }

    .chargewp-cards-container input[type="radio"] {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border-width: 0;
    }

    .chargewp-cards {
        position: absolute;
        inset: var(--cards-container-padding);
        aspect-ratio: 1;
        border-radius: 50%;
        border: 1px solid var(--border-color);
        transition: transform 0.3s ease-in-out var(--duration);
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .chargewp-cards li {
        position: absolute;
        inset: 0;
        margin: 0;
        padding: 0;
        transform-origin: center;
        display: grid;
        place-content: center;
        transform: rotate(calc(var(--i) * 360deg / var(--items)));
        pointer-events: none;
    }

    .chargewp-cards li>label {
        position: absolute;
        inset: 0;
        margin: auto;
        transform: translateY(var(--label-offset));
        width: var(--label-size);
        height: var(--label-size);
        cursor: pointer;
        pointer-events: initial;
        text-align: center;
        color: var(--label-color);
        font-size: clamp(.8rem, 2.5vw + .04rem, 1rem);
        transition: var(--duration) ease-in-out;
    }

    .chargewp-cards li>label::before {
        content: '';
        position: absolute;
        top: var(--cards-container-padding);
        left: 50%;
        translate: -50% 0;
        width: var(--label-dot-size);
        height: var(--label-dot-size);
        aspect-ratio: 50%;
        border-radius: 50%;
        background-color: var(--label-color);
        transition: background-color var(--duration) ease-in-out;
    }

    .chargewp-cards li>label::after {
        content: '';
        position: absolute;
        top: 100%;
        left: 50%;
        translate: -50% 5px;
        width: 2px;
        height: var(--label-line-h);
        background-color: steelblue;
        transition: height 300ms ease-in-out var(--label-line-delay, 0ms);
    }

    .chargewp-cards li>label:hover {
        --label-color: var(--label-color-hover);
    }

    .chargewp-cards>li>h2,
    .chargewp-cards>li>p {
        position: absolute;
        left: 50%;
        text-align: center;
        transform: translate(-50%, 0);
        transform-origin: center;
    }

    .chargewp-cards>li>h2 {
        top: var(--title-top);
        opacity: var(--title-opacity, 0);
        translate: 0 var(--title-offset-y);
        transition: var(--duration) ease-in-out var(--title-delay, 0ms);
        margin: 0;
    }

    .chargewp-cards>li>p {
        top: var(--info-top);
        margin: 0 auto;
        width: var(--info-width);
        z-index: 2;
        font-size: clamp(.8rem, 2.5vw + 0.05rem, .9rem);
        text-align: left;
        text-wrap: pretty;
        opacity: var(--info-opacity, 0);
        transition: var(--duration) ease-in-out var(--info-delay, 0ms);
    }

    /* update custom properties for checked item */
    .chargewp-cards li:has(input:checked) {
        --label-opacity: 1;
        --label-color: var(--label-color-hover);
        --label-line-h: var(--label-line-h-current);
        --label-line-delay: calc(var(--duration) * 2);

        --title-opacity: 1;
        --title-offset-y: 0;
        --title-delay: calc(var(--duration) * 3);

        --info-opacity: 1;
        --info-offset-y: 0;
        --info-delay: calc(var(--duration) * 4);
    }

    /* rotate container based on checked radio */
    .chargewp-cards:has(input:checked) {
        transform: rotate(calc(var(--base-rotation) - (var(--index) * var(--full-circle) / var(--items))));
    }

    /* Index selectors for rotation */
    .chargewp-cards:has(li:nth-child(1)>input:checked) { --index: 0; }
    .chargewp-cards:has(li:nth-child(2)>input:checked) { --index: 1; }
    .chargewp-cards:has(li:nth-child(3)>input:checked) { --index: 2; }
    .chargewp-cards:has(li:nth-child(4)>input:checked) { --index: 3; }
    .chargewp-cards:has(li:nth-child(5)>input:checked) { --index: 4; }
    .chargewp-cards:has(li:nth-child(6)>input:checked) { --index: 5; }
    .chargewp-cards:has(li:nth-child(7)>input:checked) { --index: 6; }
    .chargewp-cards:has(li:nth-child(8)>input:checked) { --index: 7; }
    .chargewp-cards:has(li:nth-child(9)>input:checked) { --index: 8; }
    .chargewp-cards:has(li:nth-child(10)>input:checked) { --index: 9; }
    .chargewp-cards:has(li:nth-child(11)>input:checked) { --index: 10; }
    .chargewp-cards:has(li:nth-child(12)>input:checked) { --index: 11; }
    .chargewp-cards:has(li:nth-child(13)>input:checked) { --index: 12; }
    .chargewp-cards:has(li:nth-child(14)>input:checked) { --index: 13; }
    .chargewp-cards:has(li:nth-child(15)>input:checked) { --index: 14; }
    .chargewp-cards:has(li:nth-child(16)>input:checked) { --index: 15; }
    .chargewp-cards:has(li:nth-child(17)>input:checked) { --index: 16; }
    .chargewp-cards:has(li:nth-child(18)>input:checked) { --index: 17; }
    .chargewp-cards:has(li:nth-child(19)>input:checked) { --index: 18; }
    .chargewp-cards:has(li:nth-child(20)>input:checked) { --index: 19; }
    .chargewp-cards:has(li:nth-child(21)>input:checked) { --index: 20; }
    .chargewp-cards:has(li:nth-child(22)>input:checked) { --index: 21; }
    .chargewp-cards:has(li:nth-child(23)>input:checked) { --index: 22; }
    .chargewp-cards:has(li:nth-child(24)>input:checked) { --index: 23; }
    .chargewp-cards:has(li:nth-child(25)>input:checked) { --index: 24; }
    .chargewp-cards:has(li:nth-child(26)>input:checked) { --index: 25; }

    /* Fallback for browsers that don't support container queries */
    @supports not (width: 1cqw) {
        .chargewp-cards-container {
            --radius: min(20%, 400px);
        }
    }
</style>
