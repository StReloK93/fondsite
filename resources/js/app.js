window.axios = require('axios');
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.withCredentials = true;
axios.defaults.baseURL = '/api/';

import {createApp} from 'vue'
import App from './App.vue'
import router from './router';
import store from './store';


window.store = store
window.router = router

store.dispatch('getUser').then(() =>{
    createApp(App)
    .use(router)
    .use(store)
    .mount("#app")
})