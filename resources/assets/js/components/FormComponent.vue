<template>
                <div class="panel-body">
               
                   <form action="" v-on:submit.prevent="searchsWords()" >
                       <div class="form-group">
                            <label for="words" > Escribe </label>
                                <input type="text" class="form-control" name="name" id="name" 
                                v-model="name">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Buscar
                        </button>
                   </form>
                </div>
</template>

<script>
    export default {
        data(){
            return {
                name:''
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            searchsWords(){
                const params ={
                    name: this.name
                }
                this.name='';
                axios.post('/search', params).
                then((response) => {
                  const name = response.data;
                    this.$emit('new', name);
                });
         
              
               
               
            }
        }
    }
</script>
