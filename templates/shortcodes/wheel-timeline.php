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
            <?php
            foreach ( $items as $index => $item ) :
                $checked = ( isset( $item['is_active'] ) && 'true' === $item['is_active'] ) ? 'checked' : '';
                ?>
                <li style="--i: <?php echo esc_attr( $index ); ?>;" data-item-id="<?php echo esc_attr( $item['id'] ); ?>">
                    <input type="radio" id="chargewp-item-<?php echo esc_attr( $index ); ?>" name="chargewp-gallery-item" <?php echo esc_attr($checked); ?>>
                    <label for="chargewp-item-<?php echo esc_attr( $index ); ?>">
                        <?php echo isset( $item['date'] ) ? esc_html( $item['date'] ) : ''; ?>
                    </label>
                    <div>
                        <?php echo isset( $item['date'] ) ? esc_html( $item['date'] ) : ''; ?>
                    </div>
                    <p>
                        <?php echo isset( $item['info'] ) ? esc_html( $item['info'] ) : ''; ?>
                    </p>
                </li>
            <?php
            endforeach;
            ?>
        </ul>
    </div>
</div>

<style>
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
            --label-line-h: <?php echo esc_attr( $atts['connection_line_height'] ); ?>rem;
            --label-line-h-current: <?php echo esc_attr( $atts['active_connection_line_height'] ); ?>rem;
        }
    }

    <?php
    if ( 'true' === $atts['is_connection_lines'] ) :
        $_this->output_style_shortcode_id(); ?> .chargewp-cards li>label::after {
            content: '';
            position: absolute;
            top: 100%;
            left: 50%;
            translate: -50% 5px;
            width: 2px;
            height: var(--label-line-h);
            background-color: <?php echo esc_attr( $atts['connection_line_color'] ); ?>;
            transition: height 300ms ease-in-out var(--label-line-delay, 0ms);
        }
    <?php
    endif;
    if ( 'true' === $atts['is_wheel_spinning'] ) :
        foreach ( $items as $index => $item ) :
            ?>
            .chargewp-cards:has(li:nth-child( <?php echo esc_attr( $index + 1 ) ?> )>input:checked) { --index: <?php echo esc_attr( $index ) ?>; }
            <?php
        endforeach;
    endif;
    foreach ( $items as $index => $item ) :
        if ( ! empty( $item['date_color'] ) ) :
            $_this->output_style_shortcode_id(); ?> .chargewp-cards li[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"]>label {
                color: <?php echo esc_attr( $item['date_color'] ); ?>;
            }
        <?php
        endif;
        if ( ! empty( $item['date_hover_color'] ) ) :
            $_this->output_style_shortcode_id(); ?> .chargewp-cards li[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"]>label:hover {
                color: <?php echo esc_attr( $item['date_hover_color'] ); ?>;
            }
        <?php
        endif;

        if ( ! empty( $item['circle_color'] ) ) :
            $_this->output_style_shortcode_id(); ?> .chargewp-cards li[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"]>label::before {
                background-color: <?php echo esc_attr( $item['circle_color'] ); ?>;
            }
        <?php
        endif;
        if ( ! empty( $item['circle_hover_color'] ) ) :
            $_this->output_style_shortcode_id(); ?> .chargewp-cards li[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"]>label:hover::before {
                background-color: <?php echo esc_attr( $item['circle_hover_color'] ); ?>;
            }
        <?php
        endif;
//        if ( ! empty( $item['date_color'] ) ) :
            $_this->output_style_shortcode_id(); ?> .chargewp-cards li[data-item-id="<?php echo esc_attr( $item['id'] ); ?>"]>label::before {
                width: <?php echo esc_attr( $item['circle_size'] ); ?>px;
                height: <?php echo esc_attr( $item['circle_size'] ); ?>px;
            }
        <?php
//        endif;
endforeach;
?>

    @layer demo {
        .chargewp-cards-container {
            --full-circle: 360deg;
            --radius: min(45cqw, 400px);
            --cards-container-size: calc(var(--radius) * 2);
            --cards-container-padding: 2rem;
            --border-color: transparent;
            --label-offset: calc(var(--radius) * -1 - 1rem);
            --label-size: 30px;
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

    .chargewp-wheel-timeline-wrapper {
        container-type: inline-size;
        padding: 50px;
        overflow: hidden;
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

    .chargewp-cards li>label:hover {
        --label-color: var(--label-color-hover);
    }

    .chargewp-cards>li>div,
    .chargewp-cards>li>p {
        position: absolute;
        left: 50%;
        text-align: center;
        transform: translate(-50%, 0);
        transform-origin: center;
    }

    .chargewp-cards>li>div {
        top: var(--title-top);
        opacity: var(--title-opacity, 0);
        translate: 0 var(--title-offset-y);
        transition: var(--duration) ease-in-out var(--title-delay, 0ms);
        margin: 0;
        font-weight: 800;
        font-size: 28px;
        letter-spacing: -0.1px;
        line-height: 1.125;
    }

    .chargewp-cards>li>p {
        top: var(--info-top);
        margin: 0 auto;
        width: var(--info-width);
        z-index: 2;
        font-size: clamp(.8rem, 2.5vw + 0.05rem, .9rem);
        text-align: center;
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

    /* Fallback for browsers that don't support container queries */
    @supports not (width: 1cqw) {
        .chargewp-cards-container {
            --radius: min(20%, 400px);
        }
    }
</style>
