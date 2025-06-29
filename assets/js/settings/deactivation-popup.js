(function($) {
    var pluginDeactivationLink = 'tr[data-plugin="chargewp-timeline-addons-for-wpbakery/chargewp-timeline-addons-for-wpbakery.php"] .deactivate a';
    var deactivationUrl = $(pluginDeactivationLink).attr('href');

    $(pluginDeactivationLink).on('click', function(e) {
        e.preventDefault();
        $('#chargewp-deactivation-popup').show();
    });

    $('#chargewp-deactivation-popup .chargewp-deactivation-popup-close, #chargewp-deactivation-popup .chargewp-deactivation-skip').on('click', function() {
        window.location.href = deactivationUrl;
    });

    $('#chargewp-deactivation-popup .chargewp-deactivation-submit').on('click', function() {
        var data = $('#chargewp-deactivation-form').serialize();
        data += '&action=chargewp_timeline_deactivate_feedback';

        $.ajax( {
            type: 'POST',
            url: window.ajaxurl,
            data: data,
            success: function(response) {
                response
                // window.location.href = deactivationUrl;
            },
            error: function( error ) {
                console.log(2);
                // window.location.href = deactivationUrl;
            }
        });
    });

    function updateTextareaVisibility() {
        $('.chargewp-form-group').each(function() {
            var $group = $(this);
            var $radio = $group.find('input[type="radio"]');
            var $textarea = $group.find('textarea');
            if ($textarea.length) {
                if ($radio.is(':checked')) {
                    $textarea.show();
                } else {
                    $textarea.hide();
                }
            }
        });
    }

    // Bind to radio change
    $('input[name="reason_key"]').on('change', function() {
        updateTextareaVisibility();
    });

    // Initial state
    updateTextareaVisibility();

    // Close popup when clicking outside the content
    $('#chargewp-deactivation-popup .chargewp-deactivation-popup-overlay').on('click', function() {
        $('#chargewp-deactivation-popup').hide();
    });
})(jQuery);
