require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//Vue.component('testimonial-component', require('./components/Testimonial.vue').default);
Vue.component('e-component', require('./components/Ecomponent.vue').default);

let app = new Vue({
    el: '#app'
});