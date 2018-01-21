<template>
    <div class="container">
        <div class="row">


            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>size</th>
                </tr>
                </thead>
                <tbody>
                    <tr v-for="cartItem in cart">
                    <td>{{cartItem.name}}</td>
                    <td>{{cartItem.price}}</td>
                    <td>
                        <button @click="removeFromCart(cartItem)" class="button alert tiny">-</button> <strong>{{cartItem.qty}}</strong> <button @click="addToCart(cartItem)" class="button success tiny">+</button>

                    </td>
                    <td>
                          {{cartItem.size}}

                    </td>

                </tr>

                <tr>
                    <td></td>
                    <td>
                        Grand Total: {{carttotal}}
                </td>
                    <td>Items: {{ totalitems}}


                </td>
                    <td></td>
                    <td></td>

                </tr>
                </tbody>
            </table>

            <button class="button">Checkout</button>

        </div>
    </div>
</template>

<script>
    export default {
        props:['cart','carttotal','totalitems'],

        methods:{
            removeFromCart(item){
                bus.$emit('remove-from-cart',item);

            },
            addToCart(item){
                bus.$emit('added-to-cart',item);

            }


        }
    }
</script>
