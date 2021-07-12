<template>

    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">

            <img class="card-img-top" :src="cuadro.imagen">

            <div class="card-body">
                <h3>{{cuadro.nombre}}</h3>
            <p class="card-text">{{cuadro.autor}}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                
                <button type="button" v-on:click="deleteCuadro" class="btn btn-sm btn-outline-secondary">Eliminar</button>
                </div>
                <small class="text-muted">{{cuadro.precio}} Euros</small>
            </div>
            </div>
        </div>
    </div>
 
</template>

<script>
    export default {
        props: {
            cuadro: {
                type:Object,
                required: true
            }
        },
        data(){
            return{
                cuadro: {
                    id: '1',
                    nombre: 'Product 1',
                    imagen: 'https://via.placeholder.com/640x480.png/007722?text=quas',
                    precio: 150
                   
                }
            }
        },
        methods: {
            deleteCuadro(){
                axios.defaults.headers.common = {
                     Authorization: "Bearer " + localStorage.getItem("token"),
                };
                axios.delete('/api/cuadros/' +this.cuadro.id).then(() => {
                
                   this.$emit('delete')   
            });

            }
        }
    }
</script>

<style>

</style>
