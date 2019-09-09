require('./bootstrap');

import Vue from 'vue'
import App from './pages/App'
import VueRouter from 'vue-router'
import router from './routes'
import store from './store/index'
import axios from 'axios'
import VueAxios from 'vue-axios'
import VueAuth from '@websanova/vue-auth'
// import VueSocialauth from 'vue-social-auth'


Vue.use(VueRouter);
Vue.use(VueAxios, axios);

Vue.router = router;

Vue.use(VueAuth, {
    auth: require('@websanova/vue-auth/drivers/auth/bearer.js'),
    http: require('@websanova/vue-auth/drivers/http/axios.1.x.js'),
    router: require('@websanova/vue-auth/drivers/router/vue-router.2.x.js'),
    logout: {
        makeRequest: false,
        redirect: '/'
    }
});

// Vue.use(VueSocialauth, {
//     providers: {
//         vkontakte: {
//             clientId: '',
//             redirectUri: '/auth/vkontakte/callback',
//             oauthType: '2.0',
//         }
//     }
// });

Vue.axios.defaults.baseURL = 'http://microcrm.code-on.space/api';

Vue.component('navbar', require('./components/Navbar').default);
Vue.component('PerformerUsers', require('./components/PerformerUsers').default);
Vue.component('BadgeRole', require('./components/BadgeRole').default);
Vue.component('PerformerEvents', require('./components/PerformerEvents').default);

new Vue({
    el: '#app',
    router,
    store,
    render: h => h(App),
});
