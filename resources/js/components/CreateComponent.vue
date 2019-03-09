
<template>
    <div>
        <h1>Create A Card</h1>
        <form @submit.prevent="addPost">
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
                <button class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                card:{}
            }
        },
        methods: {
            addPost(){
                let uri = 'http://127.0.0.1:8000/api/card/create';
                this.axios.post(uri, this.card).then((response) => {
                    this.$router.push({name: 'cards'});
                 // console.log(this.card);
                });
            }
        }
    }
</script>