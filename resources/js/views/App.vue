<template>
    <v-app>
        <v-navigation-drawer app>
            <router-link tag="li" to="/cards" >Cards</router-link>
        </v-navigation-drawer>
        <v-toolbar app></v-toolbar>
        <v-content>
            <v-container fluid>
                <router-link tag="li" to="/" >Home</router-link>
                <router-link tag="li" to="/about" >About</router-link>
                <router-link tag="li" to="/cards" >Cards</router-link>
                <v-btn color="success">Success</v-btn>


                <router-view></router-view>

            </v-container>
        </v-content>
        <v-footer app></v-footer>
    </v-app>
</template>

<script>
    export default {}
</script>

<style scoped>

</style>