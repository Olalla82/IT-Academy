<template>  

        <div class="container">     
                <div class="row">
                    <div class="offset-md-3 col-md-6">
                        <h2>AÑADIR PRODUCTO</h2>
                        <form-component @add="newCuadro"></form-component>
                    </div>
                </div>
                <div class="offset-md-5"><h2>PRODUCTOS</h2></div>
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
