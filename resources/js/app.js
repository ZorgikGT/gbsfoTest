require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';

import VueRouter from 'vue-router';

window.Vue.use(VueRouter);


import UsersIndex from './components/users/UsersIndex.vue';
import UsersCreate from './components/users/UsersCreate.vue';
import UsersEdit from './components/users/UsersEdit.vue';
import App from './App';

const routes = [
    {
        path: 'index',
        name: 'index',
        component: UsersIndex
    },
    {path: 'user/create', component: UsersCreate, name: 'createUser'},
    {path: 'user/edit/:id', component: UsersEdit, name: 'editUser'},
]

const router = new VueRouter({ routes })

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
