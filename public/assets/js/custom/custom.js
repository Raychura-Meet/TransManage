"use strict";


$(document).ready(function () {

    /// START :: ACTIVE MENU CODE
    $(".menu a").each(function () {
        var pageUrl = window.location.href.split(/[?#]/)[0];

        if (this.href == pageUrl) {
            $(this).parent().parent().addClass("active");
            $(this).parent().addClass("active"); // add active to li of the current link
            $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
            $(this).parent().parent().parent().addClass("active"); // add active class to an anchor
            $(this).parent().parent().parent().parent().addClass("active"); // add active class to an anchor
        }

        var subURL = $("a#subURL").attr("href");
        if (subURL != 'undefined') {
            if (this.href == subURL) {

                $(this).parent().addClass("active"); // add active to li of the current link
                $(this).parent().parent().addClass("active");
                $(this).parent().parent().prev().addClass("active"); // add active class to an anchor

                $(this).parent().parent().parent().addClass("active"); // add active class to an anchor

            }
        }
    });
    /// END :: ACTIVE MENU CODE

});




/// START :: TinyMCE
document.addEventListener("DOMContentLoaded", () => {
   const themeOptions = document.body.classList.contains("theme-dark")
        ? {
            skin: "oxide-dark",
            content_css: "dark",
        }
        : {
            skin: "oxide",
            content_css: "default",
        }
    tinymce.init({
        selector: '#tinymce_editor',
        height: 400,
        menubar: true,
        plugins: [
            'advlist autolink lists link charmap print preview anchor textcolor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime table contextmenu paste code help wordcount'
        ],
        themeOptions,
        toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
        setup: function (editor) {
            editor.on("change keyup", function (e) {
                //tinyMCE.triggerSave(); // updates all instances
                editor.save(); // updates this instance's textarea
                $(editor.getElement()).trigger('change'); // for garlic to detect change
            });
        }
    });
});
/// END :: TinyMCE



