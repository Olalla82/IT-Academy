<template>
    <form v-on:submit.prevent="newCuadro()">
        <div class="form-group">
            <label for="nombre" class="text-light font-weight-bold" style="text-shadow: 3px 3px 10px black;">NOMBRE</label>
            <input type="text" class="form-control" id="nombre" v-model="cuadro.nombre">
        </div>
        <div class="form-group">
            <label for="precio"  class="text-light font-weight-bold" style="text-shadow: 3px 3px 10px black;">PRECIO</label>
            <input type="text" class="form-control" id="precio" v-model="cuadro.precio">
        </div>
        <div class="form-group">
            <label for="autor" class="text-light font-weight-bold" style="text-shadow: 3px 3px 10px black;">AUTOR</label>
            <input type="text" class="form-control" id="autor" v-model="cuadro.autor">
        </div>
        <div class="form-group">
            <label for="fecha_entrada" class="text-light font-weight-bold" style="text-shadow: 3px 3px 10px black;">FECHA ENTRADA PRODUCTO</label>
            <input type="date" class="form-control" id="fecha_entrada" v-model="cuadro.fecha_entrada">
        </div>
        <button type="submit" class="btn btn-light font-weight-bold">AÑADIR PRODUCTO</button>
    </form>
</template>

<script>

    let defaultCuadro = {
        id: '',
        nombre: '',
        autor: '',
        precio: '',
        fecha_entrada: '',
        imagen: 'https://via.placeholder.com/640x480.png/0088cc?text=quas'

    };

export default {
    data() {
        return{
            cuadro: Object.assign({}, defaultCuadro)
        }
    },
    methods: {
        newCuadro(){
            this.$emit('add', this.cuadro);
           // alert(this.cuadro.nombre, ':D');
             axios.defaults.headers.common = {
                Authorization: "Bearer " + localStorage.getItem("token"),
            }; 
           axios.post('/api/cuadros', this.cuadro).then((response) => {
               this.$emit('add', response.data.cuadro);
            });
            
            this.cuadro = Object.assign({}, defaultCuadro) 
        }
    }
}

</script>
<style>

</style>