import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './views/App'
import Hello from './views/Hello'
import Home from './views/Home'
import Cart from './views/Cart'
import ProductReview from './views/ProductReview'
import ProductTabs from './views/ProductTabs'

Vue.component('product-review',ProductReview)
Vue.component('cart',Cart)
Vue.component('product-tabs',ProductTabs)

export const bus = new Vue();

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/hello',
            name: 'hello',
            component: Hello,
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App,Cart,ProductReview, ProductTabs },
    router,
    data: {
        premium: true,
    }
});

