
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.moment = require('moment'); 

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('vue-drag', require('./components/DragDrop/index.vue'));
Vue.component('temp-one-drag', require('./components/DragDrop/TempOne.vue'));
Vue.component('temp-two-drag', require('./components/DragDrop/TempTwo.vue'));
Vue.component('form-index', require('./components/Form/index.vue'));
Vue.component('temp-one-form', require('./components/Form/TempOne.vue'));
Vue.component('temp-two-form', require('./components/Form/TempTwo.vue'));



Vue.component('user-profile-tabs', require('./components/User/Profile.vue'));
Vue.component('user-profile-details', require('./components/User/UserProfileDetails.vue'));
Vue.component('user-email-details', require('./components/User/UserEmailDetails.vue'));
Vue.component('user-address-details', require('./components/User/UserAddressDetails.vue'));
Vue.component('users-list', require('./components/User/UsersList.vue'));



const app = new Vue({
    el: '#app'
});
