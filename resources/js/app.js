
//import './bootstrap';
import '../css/app.css'; // Import de Tailwind CSS
import { createApp } from 'vue';
const app = createApp({});

import App from './components/App.vue';
import Navbar from './components/navbar.vue';
import Footer from './components/footer.vue';
app.component('App', App);
app.component('navbar-component', Navbar);
app.component('footer-component', Footer)

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
        path: '/contact/:type?',
        component: () => import('./components/contact.vue')
    },
    {
        path: '/moreDescLivre',
        component: () => import('./components/moreDescriptionLivre.vue')
    },
    {
        path: '/moreDescCliQue',
        component: () => import('./components/moreDescriptionCliQue.vue')
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
