<template>
    <div class="container">
        <div class="offset-md-56">
            <h2 class="text-light font-weight-bold mt-5" style="text-shadow: 3px 3px 10px black;">
                AÑADIR PRODUCTO
            </h2>
            <form-component @add="newCuadro"></form-component>
        </div>
        <div>
            <h2 class="text-light font-weight-bold mt-5 d-flex justify-content-center" style="text-shadow: 3px 3px 10px black;">
                CUADROS
            </h2>
        </div>
   
        <div class="row">
            <card-component v-for="(cuadro, index) in cuadros" 
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
                   /*  {
                        id: '1',
                        nombre:'Las Meninas',
                        imagen: 'https://via.placeholder.com/640x480.png/0088cc?text=quas',
                        precio: '1500',
                        autor: 'autor' 
                    },
                    {
                        id: '2',
                        nombre:'MonaLisa',
                        imagen: 'https://via.placeholder.com/640x480.png/0088cc?text=quas',
                        precio: '2200',
                        autor: 'autor'   
                    } */
                ]
            }
        },
        methods: {
            newCuadro(cuadro){
               
               this.cuadros.push(cuadro)
            },
            deleteCuadro(index) {
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
