
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
Vue.use(ElementUI);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('form-element', require('./components/FormElement.vue'));
Vue.component('InputNumber', require('./components/InputNumber.vue'));
Vue.component('CalcField', require('./components/CalcField.vue'));
Vue.component('Tabs', require('./components/Tabs.vue'));
Vue.component('Steps', require('./components/Steps.vue'));
Vue.component('Select', require('./components/Select.vue'));
Vue.component('Checkbox', require('./components/Checkbox.vue'));
Vue.component('formnew', require('./components/FormNew.vue'));

const app = new Vue({
    el: '#app'
});
