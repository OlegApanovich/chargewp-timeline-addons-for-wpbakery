jQuery(document).ready(function () {
    // fix issue with switcher inside param_group
    jQuery(".edit_form_line > .vc_param_group-list > .vc_param_group-add_content").on("click", function () {

        let $newEl = jQuery(this).parent().parent().find('.vc_param_group-template').html();

        $newEl = $newEl.replace(
            /<!-- wcp-switcher-start -->([\s\S]*?)<!-- wcp-switcher-end -->/g,
            (match, content) => {
                const idMatch = content.match(/switchultswitchparam-(\d+)/);

                if (!idMatch) return match;

                const baseId = idMatch[1];
                const newSuffix = Math.floor(Math.random() * 100000);
                const newId = `${baseId}-${newSuffix}`;

                return match.replace(
                    new RegExp(`switchultswitchparam-${baseId}`, 'g'),
                    `switchultswitchparam-${newId}`
                );
            }
        );

        jQuery(this).parent().parent().find('.vc_param_group-template').text($newEl);
    });
});
