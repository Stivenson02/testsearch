
require('./bootstrap');

window.Vue = require('vue');

Vue.component('home-component', require('./components/HomeComponent.vue'));
Vue.component('form-component', require('./components/FormComponent.vue'));
Vue.component('searchs-component', require('./components/SearchsComponent.vue'));

const app = new Vue({
    el: '#app'
});
