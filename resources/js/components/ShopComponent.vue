<template>  

        <div class="container">     
                <div class="row">
                    <div class="offset-md-3 col-md-6">
                        <h2 class="text-light font-weight-bold mt-5" style="text-shadow: 3px 3px 10px black;">AÑADIR PRODUCTO</h2>
                        <form-component @add="newCuadro"></form-component>
                    </div>
                </div>
                <div class="offset-md-5"><h2  class="mt-5 text-light font-weight-bold" style="text-shadow: 3px 3px 10px black;">PRODUCTOS</h2></div>
                <div class="row">
                    <card-component v-for="(cuadro,index) in cuadros" 
                        :cuadro="cuadro"
                        @delete="deleteCuadro(index)"
                        :key="cuadro.id">  
                    </card-component>
                </div>
        </div>

         

</template>

<script>
    import CardComponent from './CardComponent'
    import FormComponent from './FormComponent'

    export default {
        components: {
            CardComponent,
            FormComponent
            
        },
        data(){
            return {
                cuadros: [

                ]
            }
        },
        methods: {
            newCuadro(cuadro) {
                this.cuadros.push(cuadro)
            },
            deleteCuadro(index) {
                //console.log(index); 
                this.cuadros.splice(index, 1)
            }
        },
        mounted() {
            //console.log(localStorage.getItem("token"))
            //envio del token 
            axios.defaults.headers.common = {
                Authorization: "Bearer " + localStorage.getItem("token"),
            };
            axios.get('/api/cuadros').then((response) => {
                this.cuadros = response.data.cuadros
            });
        }
            
    }

</script>
<style scoped>

</style>
