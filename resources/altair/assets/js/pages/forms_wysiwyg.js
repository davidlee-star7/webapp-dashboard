/*
*  Altair Admin
*  @version v2.4.0
*  @author tzd
*  @license http://themeforest.net/licenses
*  forms_wysiwyg.js - forms_wysiwyg.html
*/

$(function() {
    // ckeditor
    altair_wysiwyg._ckeditor();
    // ckeditor inline
    altair_wysiwyg._ckeditor_inline();
    // tinymce
    altair_wysiwyg._tinymce();
});

// wysiwyg editors
altair_wysiwyg = {
    _ckeditor: function() {
        var $ckEditor = $('#wysiwyg_ckeditor');
        if($ckEditor.length) {
            $ckEditor
                .ckeditor(function() {
                    /* Callback function code. */
                }, {
                    customConfig: '../../assets/js/custom/ckeditor_config.js'
                });
        }
    },
    _tinymce: function() {
        var $tinymce = '#wysiwyg_tinymce';
        if($($tinymce).length) {
            tinymce.init({
                skin_url: 'assets/skins/tinymce/material_design',
                selector: "#wysiwyg_tinymce",
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            });
        }
    },
    _ckeditor_inline: function() {
        var $ckEditor_inline = $('#wysiwyg_ckeditor_inline');
        if($ckEditor_inline.length) {
            console.log($ckEditor_inline);
            $ckEditor_inline
                .ckeditor(function() {
                    /* Callback function code. */
                }, {
                    customConfig: '../../assets/js/custom/ckeditor_config.js',
                    allowedContent: true
                });
        }
    }
};