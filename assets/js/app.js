jQuery(document).ready(function ($) {
    'use strict';

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });

    window.onload = function () {
        //hide the preloader
        var perloader = $(".perloader-wrapper");
        if (perloader.length > 0) {
            document.querySelector(".perloader-wrapper").style.display = "none";
        }
    }
});


