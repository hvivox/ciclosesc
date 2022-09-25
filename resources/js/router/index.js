import { createRouter, createWebHistory } from 'vue-router'
//import HomeView from '../views/HomeView.vue'
import InscricaoComponent from "../components/InscricaoComponent.vue"
import InscricaoConcluidaComponent from "../components/InscricaoConcluidaComponent.vue"
import ListaInscritosComponent from "../components/ListaInscritosComponent.vue"
import NotFound from '../components/NotFound.vue'

const router = createRouter({

    //history: createWebHistory(import.meta.env.BASE_URL),
    history: createWebHistory(process.env.BASE_URL),

    routes: [
        {
            path: '/',
            name: 'incricao',
            component: InscricaoComponent
        },
        {
            path: "/inscricao-concluida",
            name: 'inscricaoConcluida',
            component: InscricaoConcluidaComponent,
            // beforeEnter: Guard.redirectIfAuthenticated
        },
        {
            path: "/admin/inscricao",
            name: 'adminInscricao',
            component: ListaInscritosComponent,
            // beforeEnter: Guard.redirectIfAuthenticated
        },
        /*  {
           path: '/lista',
           name: 'lista',
           beforeEnter: middleware.guardMyroute,
           component: () => import('../views/ListaView.vue'),
         },


         {
           path: "/lista/cadastro/",
           name: 'cadastrarFolha',
           beforeEnter: middleware.guardMyroute,
           component: Cadastro
         },

         {
           path: "/lista/cadastro/:id",
           name: 'editarFolha',
           beforeEnter: middleware.guardMyroute,
           component: Cadastro
         },*/
        { path: '/:pathMatch(.*)*', name: 'not-found', component: NotFound },
        // if you omit the last `*`, the `/` character in params will be encoded when resolving or pushing
        { path: '/:pathMatch(.*)', name: 'bad-not-found', component: NotFound },
    ]
});



export default router

