require('./bootstrap');
import Vue from 'vue';

window.Vue = require('vue');
window.axios=require('axios');
import VueModal from '@kouts/vue-modal';
import '@kouts/vue-modal/dist/vue-modal.css';

Vue.component('example-component',require('./components/ExampleComponents.vue').default);
Vue.component('item',require('./components/ItemComponent/ItemComponent').default);
Vue.component('create-item',require('./components/ItemComponent/ItemCreate').default);
Vue.component('update-item',require('./components/ItemComponent/ItemUpdate').default);
Vue.component('Modal', VueModal);
//Vue.component('Modal',require('./components/ItemComponent/Modal_add').default);

const  app = new Vue({
    el:'#app',
    data: {
        showModal: false
    }
});

