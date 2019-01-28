<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                        <button class="btn btn-primary">Primary</button>

                    </div>
                    <mdb-navbar class="grey lighten-4 py-4">
                        <mdb-navbar-nav nav left>
                            <mdb-nav-item href="#" active>Active</mdb-nav-item>
                            <mdb-nav-item href="#">Link</mdb-nav-item>
                            <mdb-nav-item href="#">Link</mdb-nav-item>
                            <mdb-nav-item href="#" disabled>Disabled</mdb-nav-item>
                        </mdb-navbar-nav>
                    </mdb-navbar>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {Navbar, NavbarItem, NavbarNav } from 'mdbvue';



    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components: {
            'mdb-navbar': Navbar,
            'mdb-nav-item': NavbarItem,
            'mdb-navbar-nav': NavbarNav
        }
    }
</script>
