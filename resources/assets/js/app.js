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
        matchingProductIndex:0,
        matchingProduct:null,
        cart:[]
    },
    created(){
        this.getCart();
        bus.$on('added-to-cart',(product)=>{
                this.addToCart(product);
            })

        bus.$on('remove-from-cart',(product)=>{
                this.removeFromCart(product);
            })

        bus.$on('increase-qty',(product)=>{
                this.increaseQty(product);
            })

        bus.$on('reduce-qty',(product)=>{
                this.decreaseQty(product);
            })
        },
    computed:{
        cartTotal(){
          return this.cart.reduce((total,product)=>{
                return total+product.qty * product.price;
            },0);
        },
        totalItems(){
            return this.cart.reduce((total,product)=>{
                return total+product.qty;
            },0);
        }
    },
    methods:{

        getCart () {
            if (localStorage && localStorage.getItem('cart')) {
                 this.cart = JSON.parse(localStorage.getItem('cart'));

            }else{
                this.cart=[];
            }
        },
        addToCart(product){
            this.getCart();
            product.qty=1;

            var increased=this.increaseQty(product);

            if(increased){
                return;
            }
            this.cart.push(product);

            localStorage.setItem('cart', JSON.stringify(this.cart));
        },

        removeFromCart(product){
            this.cart= _.filter(this.cart,(eachItem)=>{
                if(eachItem.id !== product.id){
                    return true;
                }
            });

            localStorage.setItem('cart',JSON.stringify(this.cart));
        },
        increaseQty(product){
            this.matchingProductIndex= _.findIndex(this.cart,(item)=>{
                return item.id==product.id;
            });

            if(this.matchingProductIndex>-1){
                this.cart[this.matchingProductIndex].qty++;
                localStorage.setItem('cart', JSON.stringify(this.cart));

                return true;
            }
            return false;
        },
        decreaseQty(product){
            this.matchingProductIndex= _.findIndex(this.cart,(item)=>{
                return item.id==product.id;
            });


            if(this.matchingProductIndex>-1){
                this.matchingProduct=this.cart[this.matchingProductIndex];
                if(this.matchingProduct.qty<=1){
                    return this.removeFromCart(product);
                }
                var quantity=this.cart[this.matchingProductIndex].qty-1;
                this.$set(this.cart[this.matchingProductIndex],'qty',quantity);
                localStorage.setItem('cart', JSON.stringify(this.cart));

                return true;
            }
            return false;
        }




    }
});
