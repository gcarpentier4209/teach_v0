<template>
    <div>
        <h1>Cards</h1>
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <router-link :to="{ name: 'create' }" class="btn btn-primary">Create Cards</router-link>
            </div>
        </div><br />

        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Item body</th>
                <th>Item title</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="card in cards" :key="card.id">
                <td>{{ card.id }}</td>
                <td>{{ card.title }}</td>
                <td>{{ card.body }}</td>
                <td><router-link :to="{name: 'edit', params: { id: card.id }}" class="btn btn-primary">Edit</router-link></td>
                <td><button class="btn btn-danger"  @click.prevent="deletePost(card.id)">Delete</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                cards: []
            }
        },
        created() {
            let uri = 'http://127.0.0.1:8000/api/cards';
            this.axios.get(uri).then(response => {
                this.cards = response.data.data;
            });
        },
        methods: {
            deletePost(id)
            {
                let uri = `http://127.0.0.1:8000/api/card/delete/${id}`;
                this.axios.delete(uri).then(response => {
                    this.cards.splice(this.card.indexOf(id), 1);
                });
            }
        }
    }
</script>
