/**
 * Landing Page Scripts
 * Off-canvas menu control (مثل gyem_theme-main)
 */

(function ($) {
    'use strict';

    /*------------------
        Canvas Menu (المنيو الجانبي)
    --------------------*/
    // فتح المنيو عند الضغط على الهامبرجر
    $(".canvas-open").on('click', function () {
        $(".offcanvas-menu-wrapper").addClass("show-offcanvas-menu-wrapper");
        $(".offcanvas-menu-overlay").addClass("active");
        // منع scroll للـ body
        $("body").css("overflow", "hidden");
    });

    // إغلاق المنيو عند الضغط على X أو الخلفية المعتمة
    $(".canvas-close, .offcanvas-menu-overlay").on('click', function () {
        $(".offcanvas-menu-wrapper").removeClass("show-offcanvas-menu-wrapper");
        $(".offcanvas-menu-overlay").removeClass("active");
        // إعادة scroll للـ body
        $("body").css("overflow", "");
    });

})(jQuery);
