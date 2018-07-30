<template>
            <v-card >
                <v-card-media
                        :src='shirtimagepath'
                        height="250px"
                ></v-card-media>

                <v-card-title  primary-title>
                    <div>

                            <h3 class="headline mb-0">
                                <a :href="shirtlink">
                                {{shirt.name}} | {{shirt.price}}
                                </a>

                            </h3>

                        <div>
                            {{htmlToText(shirt.description)  }}
                        </div>
                    </div>
                </v-card-title>

                <v-card-actions>
                    <v-btn @click="addToCart" flat color="success">Add to Cart</v-btn>
                    <v-btn  @click="addToCompare" flat color="info">Add to compare</v-btn>
                </v-card-actions>
            </v-card>
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
            },
            addToCompare(){
                bus.$emit('added-to-compare',this.shirt);
            },
            htmlToText(html) {
                var tag = document.createElement('div');
                tag.innerHTML = html;

                return tag.innerText;
            }
        }
    }
</script>
