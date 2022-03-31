require('./bootstrap');

window.Vue = require('vue').default;

import { vue } from 'laravel-mix';
import VueRouter from 'vue-router'

import routes from './routes'
//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});