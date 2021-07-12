<template>
	<div class="container">

        <div class="row d-flex justify-content-center"><h1 class="display-3" style="color:#294c6d; font-weight:bold;">REGISTRAR TIENDAS</h1></div>
        
        <form v-on:submit.prevent="newTienda()">
        
            <div class="form-group">
            <label for="nombre" class="text-light"><h3 class="display-5" style="text-shadow: 3px 3px 18px black">NOMBRE DE LA TIENDA</h3></label>
            <input id ="nombre" type="text" class="form-control" v-model="tienda.nombre">
            </div>
            <div class="form-group">
            <label for="numero_cuadros" class="text-light"><h3 class="display-5"  style="text-shadow: 3px 3px 18px black">NUMERO DE CUADROS</h3></label>
            <input id="numero_cuadros" type="text" class="form-control" v-model="tienda.numero_cuadros">
            </div>
            <button type="submit" class="btn text-light" style="background:#294c6d;">CREAR REGISTRO</button>
        </form><br><br>

        <div class="text-dark bg-danger"><h3 class="display-5">Tienda: {{tienda.nombre}}</h3></div><br>
        <div class="text-dark bg-danger"><h3 class="display-5">Nº de Cuadros: {{tienda.numero_cuadros}}</h3></div>

        <bbdd-component v-for="(tienda) in tiendas" 
                        :tienda="tienda"
                        :key="tienda.id">  
        </bbdd-component>
        
    </div>
    
</template>

<script>
  let defaultTienda = {
        id: '',
        nombre: '',
        numero_cuadros: ''

    };
 
import BbddComponent from './BbddComponent'


export default {
     components: {
            BbddComponent
        },
    data() {
        return{
            tienda: Object.assign({}, defaultTienda)
        }
    },
    methods: {
        newTienda(){
            axios.defaults.headers.common = {
                Authorization: "Bearer " + localStorage.getItem("token"),
            };
           console.log(this.tienda)
           axios.post('/api/shop', this.tienda).then((response) => {
               this.$emit('add', response.data.tienda);
               // this.cuadros = response.data.cuadros
            });
            
            this.tienda = Object.assign({}, defaultTienda)
        }
    }
}

</script>
<style>

</style>