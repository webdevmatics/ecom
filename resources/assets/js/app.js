/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue'
import Vuetify from 'vuetify'

Vue.use(Vuetify)
import 'vuetify/dist/vuetify.min.css'
import VueStarRating  from 'vue-star-rating'

require('./bootstrap');


window.bus = new Vue();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('product', require('./components/Product.vue'));
Vue.component('cart-count', require('./components/CartCount.vue'));
Vue.component('cart-detail', require('./components/CartDetail.vue'));
Vue.component('review-form', require('./components/ReviewForm.vue'));
Vue.component('compare', require('./components/Compare.vue'));
Vue.component('navbar', require('./components/Navbar.vue'));
Vue.component('hero', require('./components/Hero.vue'));

Vue.component('star-rating', VueStarRating);

const app = new Vue({
    el: '#app',
    data: {
        cart: []
    },
    created(){
        this.getCart();

        bus.$on('added-to-cart', (product) => {
            this.addToCart(product);
        });

        bus.$on('remove-from-cart', (product) => {
            this.removeFromCart(product);
        });

    },
    computed: {
        cartTotal(){
            return this.cart.reduce((total, product) => {
                return total + product.qty * product.price;
            }, 0);
        },
        totalItems(){
            return this.cart.reduce((total, product) => {
                return total + product.qty;
            }, 0);
        }
    },
    methods: {
        getCart () {
            if (localStorage && localStorage.getItem('cart')) {
                this.cart = JSON.parse(localStorage.getItem('cart'));

            } else {
                this.cart = [];
            }
        },
        addToCart(product){
            const matchingProductIndex = this.cart.findIndex((item) => {
                return item.id === product.id;
            });

            if (matchingProductIndex > -1) {
                this.cart[matchingProductIndex].qty++;
            } else {
                product.qty = 1;
                this.cart.push(product);

            }

            localStorage.setItem('cart', JSON.stringify(this.cart));
        },

        removeFromCart(product){
            const matchingProductIndex = this.cart.findIndex((item) => {
                return item.id == product.id;
            });

            if (this.cart[matchingProductIndex].qty <= 1) {
                this.cart.splice(matchingProductIndex, 1);
            } else {
                this.cart[matchingProductIndex].qty--;
            }

            localStorage.setItem('cart', JSON.stringify(this.cart));
        }

    }
});
