import Vue from 'vue'
import App from './components/App.vue';
import router from '../js/router/index';
 const app = new Vue({
    el: '#app',
    router,
    components: {
        App
    },
});
