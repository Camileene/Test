import 'bootstrap/dist/css/bootstrap.css';
import Vue from 'vue';

window.Vue = require('vue').default;
window.axios = require('axios');

Vue.component('userform', require('./components/userform.vue').default);

const app = new Vue({
    el: '#app',
});
