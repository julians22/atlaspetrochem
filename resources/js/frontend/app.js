
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Swal from 'sweetalert2';
import '../bootstrap';
import '../plugins';
import './navbarAnimation';

require('./modenizer');

const Gumshoe = require('gumshoejs');

$(document).ready(function () {
    var companySpy = new Gumshoe("#company-menu div a", {
        navClass: false,
        contentClass: 'active-content',
        offset: function () {
            var header = document.querySelector("#nav");
            return header.getBoundingClientRect().height * 2;
        },
    });
})

if (Modernizr.cssanimations) {
    // supported
    // Swal.fire({
    //     icon: 'success',
    //     title: 'Nice',
    //     text: 'Your browser is support the animation feature',
    // });
    console.log('Yess!!');
} else {
    alert('Your device is not support the animatmation')
}

// import Vue from 'vue';

// window.Vue = Vue;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });