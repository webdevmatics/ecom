<template>
    <div class="container">
        <div class="row">


            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <!--<th>qty</th>-->
                    <th>size</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr v-for="cartItem in cart">
                    <td>{{cartItem.name}}</td>
                    <td>{{cartItem.price}}</td>
                    <!--<td width="50px">-->
                        <!--{{cartItem.qty}}-->


                    <!--</td>-->
                    <td>
                        <div >
                          {{cartItem.size}}

                           </div>

                    </td>
                        <td>
                            <button @click="removeItem(cartItem)" class="button">x</button>
                        </td>

                </tr>

                <tr>
                    <td></td>
                    <td>
                        Tax: 22 <br>
                        Sub Total: 22 <br>
                        Grand Total: 22
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
        props:['cart'],

        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            removeItem(item){

                bus.$emit('remove-from-cart',item);


            }
        }
    }
</script>
