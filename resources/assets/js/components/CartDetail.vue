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
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr v-for="cartItem in cart">
                    <td>{{cartItem.name}}</td>
                    <td>{{cartItem.price}}</td>
                    <td>
                        <button @click="reduceQty(cartItem)" class="button alert tiny">-</button> <strong>{{cartItem.qty}}</strong> <button @click="increaseQty(cartItem)" class="button success tiny">+</button>

                    </td>
                    <td>
                          {{cartItem.size}}

                    </td>
                        <td>
                            <button @click="removeItem(cartItem)" class="button alert">x</button>
                        </td>

                </tr>

                <tr>
                    <td></td>
                    <td>
                        Grand Total: {{carttotal}}
                </td>
                    <td>Items: {{ cart.count}}


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
        props:['cart','carttotal'],

        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            removeItem(item){

                bus.$emit('remove-from-cart',item);


            },
            reduceQty(item){
                bus.$emit('reduce-qty',item);

            },
            increaseQty(item){
                bus.$emit('increase-qty',item);

            }


        }
    }
</script>
