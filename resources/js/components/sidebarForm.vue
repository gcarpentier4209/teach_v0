<template>


    <v-navigation-drawer permanent>
        <!--<v-toolbar flat>-->
            <!--<v-list>-->
                <!--<v-list-tile>-->
                    <!--<v-list-tile-title class="title">-->
                        <!--Projet Teach-->
                    <!--</v-list-tile-title>-->
                <!--</v-list-tile>-->
            <!--</v-list>-->
        <!--</v-toolbar>-->

        <!--<v-divider></v-divider>-->

        <v-text-field
                append-icon="fa-microphone"
                class="mx-3"
                flat
                label="Search"
                prepend-inner-icon="fa-search"
                solo-inverted
        ></v-text-field>

        <v-divider></v-divider>

        <v-list dense class="pt-0">
            <v-list-tile
                    v-for="item in items"
                    :key="item.title"
                    @click=""
            >
                <v-list-tile-action>
                    <v-icon>{{ item.icon }}</v-icon>
                </v-list-tile-action>

                <v-list-tile-content>
                    <v-list-tile-title>{{ item.title }}</v-list-tile-title>
                </v-list-tile-content>
            </v-list-tile>
        </v-list>

        <v-divider></v-divider>

        <v-list-group
                no-action
                sub-group
                value="true"
                prepend-icon="fa-tags"
        >
            <v-list-tile slot="activator">
                <v-list-tile-title>Etiquettes</v-list-tile-title>
            </v-list-tile>

            <v-list-tile
                    v-for="(etiquette, i) in etiquettes"
                    :key="i"
                    @click=""
            >
                <v-list-tile-title v-text="etiquette[0]"></v-list-tile-title>
                <v-list-tile-action>
                    <v-icon v-text="etiquette[1]"></v-icon>
                </v-list-tile-action>
            </v-list-tile>
        </v-list-group>

    </v-navigation-drawer>
</template>

<script>
    export default {
        data () {
            return {
                items: [
                    { title: 'Ressources', icon: 'fa-sticky-note' },
                    { title: 'Cours', icon: 'fa-cube' },
                    { title: 'Parcours', icon: 'fa-cubes' },
                ],
                etiquettes: [
                    ['étiquette', 'fa-tag'],
                    ['étiquette', 'fa-tag']
                ],


                right: null
            }
        }
    }
</script>
