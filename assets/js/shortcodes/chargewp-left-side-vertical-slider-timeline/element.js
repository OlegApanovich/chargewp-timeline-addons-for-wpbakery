jQuery(window).ready(function() {
    jQuery(document).on('click', '.chargewp-left-side-vertical-slider-timeline-container #dates li', function() {
        var target = jQuery(this).find('a');
        if (target.hasClass('selected')) {
            return
        }

        target.click();
    });
});
