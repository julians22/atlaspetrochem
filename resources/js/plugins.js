const { default: Swiper } = require("swiper");
import 'alpinejs';

import 'waypoints/lib/noframework.waypoints';
import { CountUp } from 'countup.js';

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

AOS.init();
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
            delay: 3000,
            disableOnInteraction: false
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: true
        }
    });

    var videoSlide = new Swiper(".swiper-video", {
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: true
        },
        navigation: false
    });

    var teamSwiper = new Swiper(".swiper-team", {
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: true
        },
        navigation: false
    });

    $('[data-toggle="tooltip"]').tooltip();
});
