/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';
//import { Axios } from 'axios';
import 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'
import '@fortawesome/fontawesome-free/css/fontawesome.min.css'


/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import VueTheMask from 'vue-the-mask'
app.use(VueTheMask);

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

import ListaInscritosComponent from './components/ListaInscritosComponent.vue';
app.component('lista-inscritos-component', ListaInscritosComponent);

import InscricaoComponent from './components/InscricaoComponent.vue';
app.component('inscricao-component', InscricaoComponent);

import InscricaoConcluidaComponent from './components/InscricaoConcluidaComponent.vue';
app.component('inscricao-concluida-component', InscricaoConcluidaComponent);



// axios.defaults.withCredentials = true;// todas as paginas irão ficar cm credencial = true
//Axios.defaults.baseURL = 'http://localhost:92/ciclosesc';


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.globEager('./**/*.vue')).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');
