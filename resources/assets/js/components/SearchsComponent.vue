<template>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Probabilidad <strong>{{name.probability}}%</strong>
                </div>
                <div class="panel-body">
                <div v-if="selectMode" class=" p-3 mb-2 bg-primary text-white" >
                   <p > {{name.name}} </p>                
                </div>
                <div v-else >
                   <p > {{name.name}} </p>                
                </div>
                </div>
                <div v-if="!selectMode" class="panel-footer">
                    <button class="btn btn-success" v-on:click="onClickSelect()">
                       Seleccionar
                    </button>
                </div>
            </div>

</template>

<script>
    export default {
    props:['name'],
    data(){
        return {
            selectMode: false
          };
},

        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            onClickSelect(){
                this.selectMode=true;
                this.$emit('select')
            }
        }
    }
</script>
