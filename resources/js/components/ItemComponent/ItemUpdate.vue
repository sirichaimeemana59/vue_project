<template>
    <div class="w3-container w3-card w3-white w3-margin-bottom">
        <div class="w3-container w3-padding-16">
            <form action="/edit_item">
                Name : <input type="text" class="form-control" name="name" v-model="name">
               <input type="hidden" class="form-control" name="id" v-model="id">
                Lastname : <input type="text" class="form-control" name="lastname" v-model="lastname">
                Tell : <input type="text" class="form-control" name="tell" v-model="tell">
                Email : <input type="text" class="form-control" name="email" v-model="email">

                <button class="btn btn-primary" v-on:click="UpdateItem()">Save</button>
                <button class="btn btn-dark">Cancel</button>

            </form>
        </div>
    </div>
</template>

<script>
export default {
    props:['id'],
    data(){
        return{
            name :'',
            lastname : '',
            tell : '',
            email : ''
        }
    },
    mounted() {
        axios.get('/show_item/'+this.id).then(response=>{
            var item = response.data;
            this.name=item.name;
            this.lastname=item.lastname;
            this.tell=item.tell;
            this.email=item.email;
        });
    },
    methods:{
        UpdateItem(){
            axios.post('edit_item',{
                id:this.id,
                name:this.name,
                lastname:this.lastname,
                tell:this.tell,
                email:this.email
            });
        }
    }
}
</script>
