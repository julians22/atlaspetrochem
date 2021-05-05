const { default: Swiper } = require("swiper");
import 'alpinejs';

import 'waypoints/lib/noframework.waypoints';
import { CountUp } from 'countup.js';


// Animation array

var animationArray = [
    "fade-up",
    "fade-down",
    "fade-left",
    "fade-right",
    "fade-up-right",
    "fade-up-left",
    "slide-up",
    "slide-down",
    "slide-left",
    "slide-right",
];

function addAnimationToBannerWithText(element) {
    const randomAnimation = Math.floor(Math.random() * animationArray.length);
    $(element).attr("data-aos", animationArray[randomAnimation]);
}

/**
 * Allows you to add data-method="METHOD to links to automatically inject a form
 * with the method on click
 *
 * Example: <a href="{{route('customers.destroy', $customer->id)}}"
 * data-method="delete" name="delete_item">Delete</a>
 *
 * Injects a form with that's fired on click of the link with a DELETE request.
 * Good because you don't have to dirty your HTML with delete forms everywhere.
 */

function addDeleteForms() {
    $('[data-method]').append(function () {
        if (!$(this).find('form').length > 0) {
            return "\n<form action='" + $(this).attr('href') + "' method='POST' name='delete_item' style='display:none'>\n" +
                "<input type='hidden' name='_method' value='" + $(this).attr('data-method') + "'>\n" +
                "<input type='hidden' name='_token' value='" + $('meta[name="csrf-token"]').attr('content') + "'>\n" +
                '</form>\n';
        } else { return '' }
    })
        .attr('href', '#')
        .attr('style', 'cursor:pointer;')
        .attr('onclick', '$(this).find("form").submit();');
}

/**
 * Place any jQuery/helper plugins in here.
 */
$(function () {
    /**
     * Add the data-method="delete" forms to all delete links
     */
    addDeleteForms();
    if ($("#counter-trigger-point").length) {
        const triggerCount = new Waypoint({
            element: document.getElementById("counter-trigger-point"),
            handler: function(direction) {
                $(".counter").each(function(i, elem) {
                    var countUp = new CountUp(
                        elem,
                        $(elem).data("value"),
                        $(elem).data("duration")
                    );
                    countUp.start();
                });
            },
            offset: 100
        });
    }


    /**
     * Disable all submit buttons once clicked
     */
    $('form').submit(function () {
        $(this).find('input[type="submit"]').attr('disabled', true);
        $(this).find('button[type="submit"]').attr('disabled', true);
        return true;
    });

    /**
     * Generic confirm form delete using Sweet Alert
     */
    $('body').on('submit', 'form[name=delete_item]', function (e) {
        e.preventDefault();

        const form = this;
        const link = $('a[data-method="delete"]');
        const cancel = (link.attr('data-trans-button-cancel')) ? link.attr('data-trans-button-cancel') : 'Cancel';
        const confirm = (link.attr('data-trans-button-confirm')) ? link.attr('data-trans-button-confirm') : 'Yes, delete';
        const title = (link.attr('data-trans-title')) ? link.attr('data-trans-title') : 'Are you sure you want to delete this item?';

        Swal.fire({
            title: title,
            showCancelButton: true,
            confirmButtonText: confirm,
            cancelButtonText: cancel,
            icon: 'warning'
        }).then((result) => {
            result.value && form.submit();
        });
    }).on('click', 'a[name=confirm_item]', function (e) {
        /**
         * Generic 'are you sure' confirm box
         */
        e.preventDefault();

        const link = $(this);
        const title = (link.attr('data-trans-title')) ? link.attr('data-trans-title') : 'Are you sure you want to do this?';
        const cancel = (link.attr('data-trans-button-cancel')) ? link.attr('data-trans-button-cancel') : 'Cancel';
        const confirm = (link.attr('data-trans-button-confirm')) ? link.attr('data-trans-button-confirm') : 'Continue';

        Swal.fire({
            title: title,
            showCancelButton: true,
            confirmButtonText: confirm,
            cancelButtonText: cancel,
            icon: 'info'
        }).then((result) => {
            result.value && window.location.assign(link.attr('href'));
        });
    });

    var BannerSlider = new Swiper(".swiper-banner", {
        autoplay: {
            delay: 5500,
            disableOnInteraction: false
        },
        speed: 1500,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: true
        },
        on: {
            beforeInit: function() {
                if ($(".banner-description").length > 0) {
                    $(".banner-text").hide(0);
                }
            },
            afterInit: function () {
                if ($(".banner-description").length > 0) {
                    setTimeout(() => {
                        $(".banner-text").show(400);
                        addAnimationToBannerWithText($(".banner-text"));
                        AOS.init();
                    }, 500);
                }
            },
            slideChangeTransitionStart: function() {
                if ($(".banner-description").length > 0) {
                    $(".banner-text").hide(0);
                    $(".banner-text")
                        .removeClass("aos-init")
                        .removeClass("aos-animate");
                }
            },
            slideChangeTransitionEnd: function() {
                if ($(".banner-description").length > 0) {
                    $(".banner-text").show(0);
                    addAnimationToBannerWithText($(".banner-text"));
                    AOS.init();
                }
            }
        }
    });

    var videoSlide = new Swiper(".swiper-video", {
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: true,
        },
        navigation: false,
        autoHeight: true,
        init: false
    });

    videoSlide.on("init", function () {
        var currentSlides = videoSlide.slides[videoSlide.realIndex];
        setVideoTitle($(currentSlides).data("title"));  
    });

    videoSlide.on('transitionEnd', function () {
        var currentSlides = videoSlide.slides[videoSlide.realIndex];
        setVideoTitle($(currentSlides).data("title"));
    });

    videoSlide.init();
    
    function setVideoTitle(text) {
        $('#video-title').text(text);
    }

    if ($(".swiper-team").length > 0) {
        var teamSwiper = new Swiper(".swiper-team", {
            pagination: {
                el: ".swiper-pagination",
                type: "bullets",
                clickable: true
            },
            autoHeight: true,
            navigation: false
        });
    }

    var companySwiper = new Swiper(".swiper-company", {
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: true,
        },
        autoHeight: true,
        navigation: false,
    });

    $('[data-toggle="tooltip"]').tooltip();

    $("#menu-toggle").on("click", function() {
        $("#menu-wrapper").toggleClass("show");
    });

    $("li.dropdown").on("click", function() {
        var itemList = $(this).find("ul li");
        if (itemList.length > 0) {
            $(this).toggleClass("show");
        }
    });
});

AOS.init();
