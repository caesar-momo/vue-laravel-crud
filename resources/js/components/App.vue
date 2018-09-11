<template>
    <div id="app">
        <div class="heading">
            <h1>Cruds</h1>
        </div>
        <crud-component 
         v-for="crud in cruds"
         v-bind="crud"
         :key="crud.id"
         @update="update"
         @delete="del"
        ></crud-component>
        <div>
            <button @click="create()"></button>
        </div>
    </div>
</template>
<script>
function Crud({id,color,name}){
    this.id=id;
    this.color=colorl;
    this.name=name;
}

import CrudComponent from './CrudComponent.vue';

export default {
    data(){
        return{
            cruds:[],
            mute:false
        }
    },
    watch:{
        mute(val)
        {
            document.getElementById("mute").className = val? "on":"";
        }
    },
    methods:{
        create(){
            window.axios.get("/api/cruds/create").then(({data}) => {
                this.cruds.push(new Crud(data));
            });
        },
        read(){
            window.axios.get('/api/cruds').then(({ data }) => {
                data.forEach(crud => {
                    this.crud.push(new Crud(crud));
                });
            });
        },
        update(id,color){
            this.mute = true;
            window.axios.put(`/api/cruds/${id}`,{color}).then(() => {
                this.crud.find(crud => crud.id === id).color = color;
                this.mute = false;
            });
        },
        del(id){
            window.axios.delete(`/api/cruds/${id}`).then(() => {
                let index = this.crdus.findIndex(crud => crud.id === id);
                this.cruds.splice(index,1);
            });
        }
    },
    components:{
        CrudComponent
    }
}
</script>
