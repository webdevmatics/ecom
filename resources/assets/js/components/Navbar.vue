<template>
<div>
    <v-toolbar color="pink lighten-3">
    <v-toolbar-side-icon class="hidden-sm-and-up"  @click.stop=" drawer = !drawer"  ></v-toolbar-side-icon>
    <v-toolbar-title>
        <v-btn href="/" flat>
            MC-MyKey Shirts
        </v-btn>

    </v-toolbar-title>
    <v-spacer></v-spacer>
    <v-toolbar-items class="hidden-sm-and-down">
        <v-btn href="/shirts" flat>Shirts</v-btn>
        <v-btn href="/conact" flat>Contact</v-btn>
        <v-btn flat>
            <cart-count > </cart-count>
        </v-btn>
    </v-toolbar-items>

    </v-toolbar>

    <v-list v-if="drawer">
        <v-list-tile href="/shirts">
            <v-list-tile-content>
                <v-list-tile-title>Shirts</v-list-tile-title>
            </v-list-tile-content>
        </v-list-tile>
        <v-list-tile href="/contact">
            <v-list-tile-content>
                <v-list-tile-title>Contact</v-list-tile-title>
            </v-list-tile-content>
        </v-list-tile>
        <v-list-tile >
            <v-list-tile-content>
                <cart-count > </cart-count>

            </v-list-tile-content>
        </v-list-tile>
    </v-list>
</div>

</template>


<script>

    export default {
        data(){
          return {
            drawer:null
          }
        }
    }

</script>