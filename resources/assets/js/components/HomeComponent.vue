<template>
     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Busca al usuario</div>
                <form-component @new="addName" ></form-component>
            </div>

            <searchs-component
             v-for="(name, index) in names" 
             :key="name.id"
              :name ="name"
              @select="selectName(index)">

            </searchs-component>
        </div>
    </div>

</template>

<script>
    export default {

        data(){
            return {
                names: []
            }
        },

        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            addName(name) {
                this.names =(name);
            },
            selectName(index){
               // this.names.splice(index, 1);
            }
        }
    }
</script>
