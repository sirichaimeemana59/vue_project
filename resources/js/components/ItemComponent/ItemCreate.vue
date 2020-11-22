<template>
<!--    <div class="w3-container w3-card w3-white w3-margin-bottom">-->
<!--        <div class="w3-container w3-padding-16">-->
            <form action="/insert_item">
                Name : <input type="text" class="form-control" name="name" v-model="name">
                Lastname : <input type="text" class="form-control" name="lastname" v-model="lastname">
                Tell : <input type="text" class="form-control" name="tell" v-model="tell">
                Email : <input type="text" class="form-control" name="email" v-model="email">

                <button class="btn btn-primary" v-on:click="addNewItem()">Save</button>
                <button class="btn btn-dark">Cancel</button>

            </form>
<!--        </div>-->
<!--    </div>-->

</template>


<script>
export default {
    data(){
        return{
            name :'',
            lastname : '',
            tell : '',
            email : ''
        }
    },
    methods:{
        addNewItem(){
           axios.post('api-item',{
               name:this.name,
               lastname:this.lastname,
               tell:this.tell,
               email:this.email
           })
        }
    }
}
new Vue({
    data:{
        showModal:false
    }
});
</script>
