require('./bootstrap');

    import {createApp} from 'vue';
    import ShopComponent from './components/ShopComponent'
    import TiendaComponent from './components/TiendaComponent'
 
    
    createApp({
        components: {
            ShopComponent,
            TiendaComponent
        }
    }).mount('#app')