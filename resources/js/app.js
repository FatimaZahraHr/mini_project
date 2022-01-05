/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
 require('./bootstrap');

import Vue from 'vue';

import VueRouter from 'vue-router'
import { routes } from './routes';
import VueAxios from 'vue-axios';
import axios from 'axios';
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.use(VueAxios, axios);
Vue.use(Vuetify)
Vue.use(VueRouter)
const router = new VueRouter({
    routes, 
})

 const app = new Vue({
    vuetify : new Vuetify(),
    el: '#app',
    router
    });
