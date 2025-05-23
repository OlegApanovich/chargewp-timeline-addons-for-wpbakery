jQuery(window).ready(function() {
    jQuery('.chargewp-left-side-vertical-slider-timeline-container #dates li').on('click', function(e) {
        var target = jQuery(this).find('a');
        if (target.hasClass('selected')) {
            return
        }

        target.click();
    });
});