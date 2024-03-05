/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import HomeComponent from './components/HomeComponent.vue';
import TaskComponent from './components/TaskComponent.vue';
import AddTaskComponent from './components/AddTaskComponent.vue'; // Importez votre composant AddTaskComponent
import EditTaskComponent from './components/EditTaskComponent.vue'; // Importez votre composant AddTaskComponent

// Création de l'application Vue
const app = createApp({});

// Définition des routes
const routes = [
    {
        path: '/',
        component: HomeComponent
    },
    {
        path: '/tasks',
        component: TaskComponent
    }
];

// Création du routeur
const router = createRouter({
    history: createWebHistory(),
    routes
});

// Utilisation du routeur dans l'application
app.use(router);

// Enregistrement du composant AddTaskComponent
app.component('add-task', AddTaskComponent);

app.component('edit-task', EditTaskComponent);

// Montage de l'application
app.mount('#app');
