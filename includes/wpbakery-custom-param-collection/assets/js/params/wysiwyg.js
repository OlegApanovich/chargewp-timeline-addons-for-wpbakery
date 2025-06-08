// Base64 encoding/decoding utility
var WCP_VCSC_Base64 = {
    _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",

    encode: function (input) {
        var output = "";
        if (input === "" || input === undefined) return output;

        var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
        var i = 0;

        input = WCP_VCSC_Base64._utf8_encode(input);

        while (i < input.length) {
            chr1 = input.charCodeAt(i++);
            chr2 = input.charCodeAt(i++);
            chr3 = input.charCodeAt(i++);

            enc1 = chr1 >> 2;
            enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
            enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
            enc4 = chr3 & 63;

            if (isNaN(chr2)) {
                enc3 = enc4 = 64;
            } else if (isNaN(chr3)) {
                enc4 = 64;
            }

            output += this._keyStr.charAt(enc1) +
                this._keyStr.charAt(enc2) +
                this._keyStr.charAt(enc3) +
                this._keyStr.charAt(enc4);
        }

        return output;
    },

    decode: function (input) {
        var output = "";
        if (input === "" || input === undefined) return output;

        var chr1, chr2, chr3;
        var enc1, enc2, enc3, enc4;
        var i = 0;

        input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");

        while (i < input.length) {
            enc1 = this._keyStr.indexOf(input.charAt(i++));
            enc2 = this._keyStr.indexOf(input.charAt(i++));
            enc3 = this._keyStr.indexOf(input.charAt(i++));
            enc4 = this._keyStr.indexOf(input.charAt(i++));

            chr1 = (enc1 << 2) | (enc2 >> 4);
            chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
            chr3 = ((enc3 & 3) << 6) | enc4;

            output += String.fromCharCode(chr1);
            if (enc3 !== 64) output += String.fromCharCode(chr2);
            if (enc4 !== 64) output += String.fromCharCode(chr3);
        }

        return WCP_VCSC_Base64._utf8_decode(output);
    },

    _utf8_encode: function (string) {
        string = string.replace(/\r\n/g, "\n");
        var utftext = "";

        for (var n = 0; n < string.length; n++) {
            var c = string.charCodeAt(n);

            if (c < 128) {
                utftext += String.fromCharCode(c);
            } else if (c > 127 && c < 2048) {
                utftext += String.fromCharCode((c >> 6) | 192);
                utftext += String.fromCharCode((c & 63) | 128);
            } else {
                utftext += String.fromCharCode((c >> 12) | 224);
                utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                utftext += String.fromCharCode((c & 63) | 128);
            }
        }

        return utftext;
    },

    _utf8_decode: function (utftext) {
        var string = "";
        var i = 0, c = 0, c2 = 0, c3 = 0;

        while (i < utftext.length) {
            c = utftext.charCodeAt(i);

            if (c < 128) {
                string += String.fromCharCode(c);
                i++;
            } else if (c > 191 && c < 224) {
                c2 = utftext.charCodeAt(i + 1);
                string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                i += 2;
            } else {
                c2 = utftext.charCodeAt(i + 1);
                c3 = utftext.charCodeAt(i + 2);
                string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                i += 3;
            }
        }

        return string;
    }
};

// Helper functions for URL encoding/decoding
function base64_encode(str) {
    return WCP_VCSC_Base64.encode(str);
}

function base64_decode(str) {
    return WCP_VCSC_Base64.decode(str);
}

function rawurlencode(str) {
    return encodeURIComponent(str)
        .replace(/!/g, '%21')
        .replace(/'/g, '%27')
        .replace(/\(/g, '%28')
        .replace(/\)/g, '%29')
        .replace(/\*/g, '%2A');
}

function rawurldecode(str) {
    return decodeURIComponent(str);
}

// Tab switching function for WYSIWYG editor
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
            ? jQuery("<div/>").text(rawurldecode(base64_decode(value.trim()))).html()
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

        return base64_encode(rawurlencode(result));
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
