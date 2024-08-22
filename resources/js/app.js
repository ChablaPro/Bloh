
//import './bootstrap';
import '../css/app.css'; // Import de Tailwind CSS
import { createApp } from 'vue';
const app = createApp({});

import App from './components/App.vue';
app.component('App', App);

import { createRouter, createWebHashHistory } from 'vue-router';

const routes = [
    {
        path: '/',
        component: () => import('./components/accueil.vue')
    },
    {
        path: '/about',
        component: () => import('./components/about.vue')
    },
    {
        path: '/blog',
        component: () => import('./components/blog.vue')
    },
    {
        path: '/contact',
        component: () => import('./components/contact.vue')
    },
    {
        path: '/moreDesc',
        component: () => import('./components/moreDescription.vue')
    },
    {
        path: '/singleBlog',
        component: () => import('./components/singleBlog.vue')
    },
    {
        path: '/work',
        component: () => import('./components/work.vue')
    }

]

const router = createRouter({
    history: createWebHashHistory(),
    routes
});

app.use(router)
app.mount('#app');
