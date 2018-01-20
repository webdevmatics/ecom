
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.bus= new Vue();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('product', require('./components/Product.vue'));
Vue.component('cart-count', require('./components/CartCount.vue'));
Vue.component('cart-detail', require('./components/CartDetail.vue'));

const app = new Vue({
    el: '#app',
    data:{
      itemCount:0,
        cart:[]
    },
    created(){
this.getCart();
        bus.$on('added-to-cart',(product)=>{
                this.increaseCounter();
                this.addToCart(product);
            })

        bus.$on('remove-from-cart',(product)=>{
                this.removeFromCart(product);
            })
        },
    methods:{
        increaseCounter(){
            return this.itemCount++;
        },
        getCart () {
            if (localStorage && localStorage.getItem('cart')) {
                console.log('yes');
                 this.cart = JSON.parse(localStorage.getItem('cart'));

            }else{
console.log('no');
                this.cart=[];
            }
        },
        addToCart(product){
            this.getCart();
            console.log(this.cart);
            this.cart.push(product);
            localStorage.setItem('cart', JSON.stringify(this.cart));
//             cart.push(product);
//
// console.log(this.cart);

            //
            // // this.cart.push(product);
            // localStorage.setItem('cart',JSON.stringify(product));
            // console.log(JSON.parse(localStorage.getItem('cart')));

        },
        removeFromCart(product){
            this.cart= _.filter(this.cart,(eachItem)=>{
                if(eachItem.id !== product.id){
                    return true;
                }
            });

            localStorage.setItem('cart',JSON.stringify(this.cart));
        }

    }
});
