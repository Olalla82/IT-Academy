<template>

    <div class="text-dark bg-danger"><h3 class="display-5" style="text-shadow: 5px 5px 18px black">Tienda:{{tienda.nombre}}</h3></div><br>
    <div class="text-dark bg-danger"><h3 class="display-5" style="text-shadow: 5px 5px 18px black">Nº de Cuadros: {{tienda.numero_cuadros}}</h3></div>    

         
</template>

<script>
    export default {
        props: {
            tienda: {
                type:Object,
                required: true
            }
        },
        data(){
            return{
               
            }
        },
        methods: {
            deleteTienda(){
                axios.defaults.headers.common = {
                     Authorization: "Bearer " + localStorage.getItem("token"),
                };

            }
        }
    }
</script>

<style>

</style>
