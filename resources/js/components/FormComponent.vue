<template>
    <form v-on:submit.prevent="newCuadro()">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" v-model="cuadro.nombre">
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="text" class="form-control" id="precio" v-model="cuadro.precio">
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" id="autor" v-model="cuadro.autor">
        </div>
        <div class="form-group">
            <label for="fecha_entrada">Fecha Entrada Producto</label>
            <input type="date" class="form-control" id="fecha_entrada" v-model="cuadro.fecha_entrada">
        </div>
        <button type="submit" class="btn btn-primary">AÑADIR PRODUCTO</button>
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
            axios.defaults.headers.common = {
                Authorization: "Bearer " + localStorage.getItem("token"),
            };
           axios.post('/api/cuadros', this.cuadro).then((response) => {
               this.$emit('add', response.data.cuadro);
               // this.cuadros = response.data.cuadros
            });
            
            this.cuadro = Object.assign({}, defaultCuadro)
        }
    }
}

</script>
<style>

</style>