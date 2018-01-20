<template>
    <div class="container">
        <div class="row">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <button @click="addToCart"  class="button expanded add-to-cart">
                        Add to Cart
                    </button>
                    <a href="#">
                        <img :src='shirtimagepath' />
                    </a>
                </div>
                <a :href="shirtlink">
                    <h3>
                        {{shirt.name}}
                        </h3>
                </a>
                <h5>
                    $ {{ shirt.price }}
                    </h5>
                <p>
                    {{ shirt.description }}

                </p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['shirt','shirtlink','shirtimagepath'],
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            addToCart(){
                bus.$emit('added-to-cart',this.shirt);
            }
        }
    }
</script>
