/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('jquery');
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
import Vue from 'vue';

window.Vue = require('vue');
"use strict";
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
const app = new Vue({
    el: '#app'
});

//
// require('./bootstrap');
// require('jquery');
//
// import VueRouter from 'vue-router';
//
// import UserModal from './components/backend/UserModal.vue';
//
// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });
//
// window.Vue = require('vue');
// window.Vue.use(VueRouter);
//
// const routes = [
//     {
//         path: '/js/components/backend/',
//         components: {
//             companiesIndex: UserModal
//         },
//         name: 'UserModal'
//     },
// ]
//
// const router = new VueRouter({routes})
//
// const app = new Vue({router}).$mount('#app')