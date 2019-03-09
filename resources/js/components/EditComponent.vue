<template>
    <div>
        <h1>Edit Component</h1>
        <form @submit.prevent="updatePost">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Post Title:</label>
                        <input type="text" class="form-control" v-model="card.title">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Post Body:</label>
                        <textarea class="form-control" v-model="card.body" rows="5"></textarea>
                    </div>
                </div>
            </div><br />
            <div class="form-group">
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                card: {}
            }
        },
        created() {
            let uri = `http://127.0.0.1:8000/api/card/edit/${this.$route.params.id}`;
            this.axios.get(uri).then((response) => {
                this.card = response.data;
            });
        },
        methods: {
            updatePost() {
                let uri = `http://127.0.0.1:8000/api/card/update/${this.$route.params.id}`;
                this.axios.post(uri, this.card).then((response) => {
                    this.$router.push({name: 'cards'});
                });
            }
        }
    }
</script>