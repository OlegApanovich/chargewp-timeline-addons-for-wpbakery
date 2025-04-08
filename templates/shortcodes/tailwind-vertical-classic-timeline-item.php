<?php
/**
 * The template for displaying [chargewp-tailwind-vertical-classic-timeline-item] shortcode output.
 *
 * @var array $atts
 * @var string $content - shortcode content
 * @var ChargewpWpbTimeline\ChargeWpbShortcode $_this
 */

defined( 'ABSPATH' ) || exit;
?>
<div <?php $_this->output_shortcode_wrapper_attributes( [ 'class' => 'chargewp-tailwind-vertical-classic-timeline-item-container relative flex flex-col sm:flex-row items-center sm:items-center justify-between group' ] ); ?>>
    <?php
    if ('right' === $atts['rotation']) {
        ?>
            <div class="w-full sm:w-[48%] pr-0 sm:pr-[4%] md:pr-[6%] order-2 sm:order-1">
                <?php
                chargewpwpbtimeline_include_template(
                    'shortcodes/partials/tailwind-vertical-classic-timeline-item/image.php',
                    [
                        'atts' => $atts,
                        'content' => $content,
                        '_this' => $_this,
                    ]
                );
                ?>
            </div>
            <?php
            chargewpwpbtimeline_include_template(
                'shortcodes/partials/tailwind-vertical-classic-timeline-item/marker.php',
                [
                    'atts' => $atts,
                    'content' => $content,
                    '_this' => $_this,
                ]
            );
            chargewpwpbtimeline_include_template(
                'shortcodes/partials/tailwind-vertical-classic-timeline-item/content.php',
                [
                    'atts' => $atts,
                    'content' => $content,
                    '_this' => $_this,
                    'default_classes' => 'w-full sm:w-[48%] pl-0 sm:pl-[4%] md:pl-[6%] order-1 sm:order-2 text-center sm:text-left mb-4 sm:mb-0',
                ]
            );
    } else {
        ?>
            <?php
            chargewpwpbtimeline_include_template(
                'shortcodes/partials/tailwind-vertical-classic-timeline-item/content.php',
                [
                    'atts' => $atts,
                    'content' => $content,
                    '_this' => $_this,
                    'default_classes' => 'w-full sm:w-[48%] pr-0 sm:pr-[4%] md:pr-[6%] text-center sm:text-right mb-4 sm:mb-0',
                ]
            );
            chargewpwpbtimeline_include_template(
                'shortcodes/partials/tailwind-vertical-classic-timeline-item/marker.php',
                [
                    'atts' => $atts,
                    'content' => $content,
                    '_this' => $_this,
                ]
            );
            ?>
            <div class="w-full sm:w-[48%] pl-0 sm:pl-[4%] md:pl-[6%]">
                <?php
                chargewpwpbtimeline_include_template(
                    'shortcodes/partials/tailwind-vertical-classic-timeline-item/image.php',
                    [
                        'atts' => $atts,
                        'content' => $content,
                        '_this' => $_this,
                    ]
                );
                ?>
            </div>
        <?php
    }
    ?>
</div>
