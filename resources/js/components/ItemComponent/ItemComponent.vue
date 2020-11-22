<template>
    <div class="w3-container w3-card w3-white w3-margin-bottom">
        <div class="w3-container w3-padding-16 table-responsive">
           <table class="table table-bordered table-responsive">
               <tr>
                   <th>No</th>
                   <th>Name</th>
                   <th>Lastname</th>
                   <th>Tell</th>
                   <th>Email</th>
                   <th>Edit</th>
                   <th>Delete</th>
               </tr>

               <tr v-for="(item,index) in item">
                   <td>{{index+1}}</td>
                   <td>{{item.name}}</td>
                   <td>{{item.lastname}}</td>
                   <td>{{item.tell}}</td>
                   <td>{{item.email}}</td>
                   <td><a :href="'/update-item/'+item.id" class="btn btn-primary">Edit</a></td>
                   <td><a href="javascript:;" class="btn badge-danger" v-on:click="DeleteItem(item.id,index)" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
               </tr>
           </table>
        </div>

<!--        <div class="w3-container w3-padding-16">-->
<!--            <a href="/create-item" class="btn btn-primary">Insert</a>-->
<!--        </div>-->

    </div>
</template>

<script>
export default {
    mounted(){
       this.getUserData();
    },
    methods:{
        getUserData(){
            axios.get('api-item').then(response=>{
              // console.log(response)
                this.item=response.data;
            });
        },
        DeleteItem(id,index){
            axios.delete('delete_item/'+id).then(response=>{
                this.item.splice(index,1);
            });
        }
    },
    data(){
        return{
            item:[],
            item:{
                id:0,
                name:'',
                lastname:'',
                tel:'',
                email:'',
            }
        }
    }
}
</script>
