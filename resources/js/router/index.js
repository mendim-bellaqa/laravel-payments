import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from '../components/Home.vue';
import ZW from '../components/ZW.vue';
import CLIENTS from '../components/CLIENTS.vue';
import ZO from '../components/ZO.vue';
import CLIENTS_BANK from '../components/CLIENTS_BANK.vue';
import ZBO from '../components/ZBO.vue';
import VueHtmlToPaper from 'vue-html-to-paper';





Vue.use(VueRouter); 

Vue.use(VueHtmlToPaper);
// or using the defaults with no stylesheet
Vue.use(VueHtmlToPaper);

export default new VueRouter({
    
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
            // meta: {
            //     requiresAuth: true
            // }
        },
        {
            path: '/zw',
            name: 'zw',
            component: ZW,
            // meta: {
            //     requiresAuth: true
            // }
        },
        {
            path: '/clients',
            name: 'clients',
            component: CLIENTS,
            // meta: {
            //     requiresAuth: true
            // }
        },
        {
            path: '/zo',
            name: 'zo',
            component: ZO,
            // meta: {
            //     requiresAuth: true
            // }
        },
        {
            path: '/bank',
            name: 'bank',
            component: CLIENTS_BANK,
            // meta: {
            //     requiresAuth: true
            // }
        },
        {
            path: '/zbo',
            name: 'zbo',
            component: ZBO,
            // meta: {
            //     requiresAuth: true
            // }
        },

    ]
});