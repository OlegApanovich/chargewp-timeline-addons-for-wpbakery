function switchWysiwygTab(mode, visualTab, htmlTab, editorId) {
    var textarea = jQuery("textarea#" + editorId),
        mceTinymce = textarea.siblings(".mce-tinymce.mce-container.mce-panel"),
        content = "";

    if (mode !== "visual" || visualTab.hasClass("active")) {
        if (mode === "html" && !htmlTab.hasClass("active")) {
            visualTab.removeClass("active");
            htmlTab.addClass("active");
            content = tinymce.get(editorId).getContent({ source_view: true });
            tinymce.get(editorId).windowManager.close();
            textarea.val(content).show();
            mceTinymce.hide();
            jQuery(".mce-toolbar-grp.mce-inline-toolbar-grp.mce-container.mce-panel").hide();
        }
    } else {
        visualTab.addClass("active");
        htmlTab.removeClass("active");
        content = textarea.val();
        tinymce.get(editorId).setContent(content, { format: "raw" });
        tinymce.get(editorId).windowManager.close();
        textarea.hide();
        mceTinymce.show();
        jQuery(".mce-toolbar-grp.mce-inline-toolbar-grp.mce-container.mce-panel").hide();
    }
}

// Main WYSIWYG component definition
vc.atts[window.i18nLocale.wcp_param_prefix + "_wysiwyg"] = {
    render: function (param, value) {
        return value
            ? jQuery("<div/>").text(value).html()
            : "";
    },

    parse: function (param) {
        var input = this.content().find(".wpb_vc_param_value[name=" + param.param_name + "]"),
            editorId = input.attr("id"),
            result = "",
            tabs = input.siblings(".wcp-wysiwyg-tabs"),
            editor = tinymce.EditorManager.get(editorId);

        if (tabs.length > 0) {
            var visualTab = tabs.find(".wcp-wysiwyg-visual"),
                htmlTab = tabs.find(".wcp-wysiwyg-html");

            result = visualTab.hasClass("active")
                ? (editor && editor instanceof tinymce.Editor ? editor.getContent({ format: "html" }) : input.val())
                : (htmlTab.hasClass("active") && input.val());
        } else {
            result = editor && editor instanceof tinymce.Editor
                ? editor.getContent({ format: "html" })
                : input.val();
        }

        return result;
    },

    init: function (param, $el) {
        var wysiwyg = $el.find(".wcp-wysiwyg-container");

        var useTabs = wysiwyg.attr("data-use-tabs") === "true",
            useMenubar = wysiwyg.attr("data-use-menubar") === "true",
            useMedia = wysiwyg.attr("data-use-media") === "true",
            useLink = wysiwyg.attr("data-use-link") === "true",
            useTextColor = wysiwyg.attr("data-use-textcolor") === "true",
            useBackground = wysiwyg.attr("data-use-background") === "true",
            useBlockquote = wysiwyg.attr("data-use-blockquote") === "true",
            useLists = wysiwyg.attr("data-use-lists") === "true",
            editorHeight = parseInt(wysiwyg.attr("data-use-height")),
            useRootBlock = wysiwyg.attr("data-use-rootblock") === "true" ||
                (wysiwyg.attr("data-use-rootblock") !== "false" && wysiwyg.attr("data-use-rootblock")),
            editorId = wysiwyg.find("textarea.wcp-wysiwyg-editor").attr("id"),
            siteUrl = wysiwyg.attr("data-url-site");

        var visualTab, htmlTab;

        if (useTabs) {
            var tabs = wysiwyg.find(".wcp-wysiwyg-tabs");
            visualTab = tabs.find(".wcp-wysiwyg-visual");
            htmlTab = tabs.find(".wcp-wysiwyg-html");
        }

        var plugins = [
            "wpdialogs", "wptextpattern", "wpview", "wordpress", "wpemoji",
            "charmap", "hr", "fullscreen", "paste"
        ];

        if (useMedia) plugins.push("wpeditimage", "image", "media");
        if (useLists) plugins.push("lists");
        if (useLink) plugins.push("wplink");
        if (useTextColor || useBackground) plugins.push("textcolor", "colorpicker");

        var toolbar1 = "bold italic underline strikethrough | " +
            (useBlockquote ? "blockquote " : "") +
            "alignleft aligncenter alignright alignjustify " +
            (useLists ? "| bullist numlist outdent indent " : "") +
            (useLink ? "| link unlink " : "") +
            "| undo redo";

        var toolbar2 = "formatselect fontselect fontsizeselect " +
            (useTextColor || useBackground ? "| " +
                (useTextColor ? "forecolor " : "") +
                (useBackground ? "backcolor " : "") : "") +
            "| charmap | removeformat | media image";

        // Check if editor already exists and remove it
        // Without it, we can’t initialize the editor a second time after closing the edit popup.
        var existingEditor = tinymce.get(editorId);
        if (existingEditor) {
            existingEditor.remove();
        }

        tinymce.init({
            selector: "textarea#" + editorId,
            mode: "exact",
            theme: "modern",
            skin: "lightgray",
            content_css: tinyMCE.baseURL + "/skins/wordpress/wp-content.css",
            plugins: plugins.join(" "),
            external_plugins: {},
            menubar: useMenubar && "edit insert view format tools",
            toolbar1: toolbar1,
            toolbar2: toolbar2,
            fontsize_formats: "8px 10px 11px 12px 14px 16px 18px 24px 36px 48px",
            media_buttons: useMedia,
            image_advtab: useMedia,
            height: editorHeight,
            forced_root_block: useRootBlock,
            relative_urls: false,
            remove_script_host: false,
            document_base_url: siteUrl,
            setup: function (editor) {
                if ( window.vc_auto_save ) {
                    var debouncedSave = _.debounce(function () {
                        vc.edit_element_block_view.save();
                        isModified = false;
                    }, 500);

                    editor.on('keyup', function () {
                        vc.saveInProcess = true;
                        debouncedSave();
                    });
                    editor.on('blur', function () {
                        // Prevent save on blur on initial load
                        // and when save is in process from the keyup event
                        if ( !vc.saveInProcess ) {
                            vc.saveInProcess = true;
                            vc.edit_element_block_view.save();
                        }
                    });
                    editor.on('ExecCommand', debouncedSave);
                    jQuery( '#' + editorId ).on( 'change', function () {
                        vc.saveInProcess = true;
                        debouncedSave();
                    });
                }
                editor.on("init", function () {
                    if (useTabs) {
                        htmlTab.removeClass("active");
                        visualTab.addClass("active");
                    }
                });
            }
        });

        if (useTabs) {
            visualTab.on("click", function () {
                switchWysiwygTab("visual", visualTab, htmlTab, editorId);
            });

            htmlTab.on("click", function () {
                switchWysiwygTab("html", visualTab, htmlTab, editorId);
            });
        }
    }
};

jQuery(document).ready(function () {
    // fix issue with WYSIWYG editor inside param_group
    jQuery(".edit_form_line > .vc_param_group-list > .vc_param_group-add_content").on("click", function () {

        let $newEl = jQuery(this).parent().parent().find('.vc_param_group-template').html();

        $newEl = $newEl.replace(
            /<!-- wcp-wysiwyg-start -->([\s\S]*?)<!-- wcp-wysiwyg-end -->/g,
            (match, content) => {
                const idMatch = content.match(/wcp-wysiwyg-container-(\d+)/);
                if (!idMatch) return match;

                const baseId = idMatch[1];
                const newSuffix = Math.floor(Math.random() * 100000);
                const newId = `${baseId}-${newSuffix}`;

                return match
                    .replace(new RegExp(`wcp-wysiwyg-container-${baseId}`, 'g'), `wcp-wysiwyg-container-${newId}`)
                    .replace(new RegExp(`wcp-wysiwyg-tabs-${baseId}`, 'g'), `wcp-wysiwyg-tabs-${newId}`)
                    .replace(new RegExp(`wcp-wysiwyg-html-${baseId}`, 'g'), `wcp-wysiwyg-html-${newId}`)
                    .replace(new RegExp(`wcp-wysiwyg-visual-${baseId}`, 'g'), `wcp-wysiwyg-visual-${newId}`)
                    .replace(new RegExp(`wcp-wysiwyg-editor-${baseId}`, 'g'), `wcp-wysiwyg-editor-${newId}`);
            }
        );

        jQuery(this).parent().parent().find('.vc_param_group-template').text($newEl);
    });
});
