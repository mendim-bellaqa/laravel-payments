import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from '../components/Home.vue';
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



    ]
});