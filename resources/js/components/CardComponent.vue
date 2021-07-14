<template>
        <div class="card shadow-sm" style="width:25%;">
            <img class="crad-img-top" :src="cuadro.imagen">

            <div class="card-body">
              <p class="card-text">{{cuadro.nombre}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" v-on:click="deleteCuadro" class="btn btn-sm btn-outline-secondary">Eliminar</button>
                </div>
                <small class="text-muted">{{cuadro.precio}} €</small>
              </div>
            </div>
          </div>
</template>
<script>

export default{
    props: {
        cuadro: {
            type: Object,
            required: true
        }
    },
     data() {
         return {
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
<style scoped>

</style>

