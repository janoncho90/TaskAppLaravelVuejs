
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import VueRouter from 'vue-router'
import Routes from './routes'
import main from './components/MainComponent.vue'

require('./bootstrap');

window.Vue = require('vue');
//Vue.use(VueRouter);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('project-component', require('./components/ProjectComponent.vue').default);
//const main = Vue.component('main-component', require('./components/MainComponent.vue').default);
//Vue.component('main-component', require('./components/MainComponent.vue').default);
//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//Vue.component('sprint-component', require('./components/SprintsComponent.vue').default);

const router = new VueRouter({
    routes: Routes,
    mode: 'history'
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    render: h => h(main),
    router: router
});
