import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from '../components/Home.vue';
import ZW from '../components/ZW.vue';
import ZO from '../components/ZO.vue';
// import Worker from '../components/Worker/Worker.vue'


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
            path: '/zw',
            name: 'zw',
            component: ZW,
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

    ]
});