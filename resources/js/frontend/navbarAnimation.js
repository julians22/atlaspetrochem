$(document).ready(function () {
    'use strict';

    var c, currentScrollTop = 0, navbar = $('nav');

    $(window).scroll(function () {
        var a = $(window).scrollTop();
        var b = navbar.height();

        currentScrollTop = a;

        if (c < currentScrollTop && a > b + b) {
            navbar.removeClass("animate__slideInDown");
            navbar.addClass("scrollUp animate__slideOutUp");
        }else if(c > currentScrollTop && !(a <= b)){
            navbar.removeClass("scrollUp animate__slideOutUp");
            navbar.addClass("animate__slideInDown");
        }
        c = currentScrollTop;
    })
})
