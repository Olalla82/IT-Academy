import { createRouter, createWebHistory} from "vue router"

const routeInfos = [
    {
        path: '/',
        component: ShopComponent
    },
    {
        path: 'shop',
        component: TiendaComponent
    }
]
const router = createRouter({
    history: createWebHistory(),
})