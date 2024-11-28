import './bootstrap';  // Include Laravel's bootstrap
import { createApp } from 'vue';  // Vue 3 createApp function
import { createRouter, createWebHistory } from 'vue-router'; // Vue Router

// Import components
import Navbar from './components/Navbar.vue';  // Import Navbar component
import Footer from './components/Footer.vue';  // Import Footer component
import Home from './components/Home.vue';  // Import Home component
import About from './components/About.vue';  // Import About component

// Define your routes
const routes = [
    { path: '/', component: Home },
    { path: '/about', component: About },
];

// Create a router instance
const router = createRouter({
    history: createWebHistory(), // Use HTML5 history mode
    routes,  // Define the routes
});

// Create Vue app instance
const app = createApp({});

// Register components globally
app.component('navbar', Navbar);  // Register Navbar component globally
app.component('footers', Footer);  // Register Footer component globally

// Use the router in the app
app.use(router);

// Mount the Vue app to the DOM element with id "app"
app.mount('#app');
