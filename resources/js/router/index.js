import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from '../components/Home.vue';
import CLIENTS from '../components/CLIENTS.vue';
import ZO from '../components/ZO.vue';
import CLIENTS_BANK from '../components/CLIENTS_BANK.vue';
import ZBO from '../components/ZBO.vue';




Vue.use(VueRouter);


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