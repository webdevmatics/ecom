<template>
    <div>
        <button data-open="compareModal" class="button floating"> <span class="badge">{{compareItems.length}}</span>Compare</button>
        <div class="reveal" id="compareModal" data-reveal>
            <div class="row">
                <div class="columns small-12">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="8">Comparing Items</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Image</td>
                                <td v-for="product in compareItems"><img :src="/storage/+product.image" alt=""></td>
                            </tr>

                            <tr>
                                <td>Name</td>
                                <td v-for="product in compareItems">{{product.name}}</td>
                            </tr>

                            <tr>
                                <td>Description</td>
                                <td v-for="product in compareItems">{{htmlToText(product.description)}}</td>
                            </tr>

                            <tr>
                                <td>Price</td>
                                <td v-for="product in compareItems">{{product.price}}</td>
                            </tr>

                            <tr>
                                <td>Size</td>
                                <td v-for="product in compareItems">{{product.size}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                compareItems:[]
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            htmlToText(html) {
                var tag = document.createElement('div');
                tag.innerHTML = html;

                return tag.innerText;
            }
        },
        created(){
            bus.$on('added-to-compare',(shirt)=>{
                console.log('on emit shirt',shirt);
                this.compareItems.push(shirt);
                localStorage.setItem('compareitems',JSON.stringify(this.compareItems));

            });

        }
    }
</script>
