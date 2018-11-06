require('./bootstrap')
import Vue from 'vue'
import VeeValidate from 'vee-validate'
import Vuetify from 'vuetify'
 import 'vuetify/dist/vuetify.min.css'
 // index.js or main.js
Vue.use(Vuetify)
import router from './router/';
import store from './store';

// import Carousel3d from 'vue-carousel-3d';
// Vue.use(Carousel3d);

import { Validator } from 'vee-validate';
import messages from './messages';
// import 'vue-flux/dist/vue-flux.css'
import vSelect from 'vue-select/src/components/Select'
import Paginate from 'vuejs-paginate'

window.Vue = Vue;
Vue.use(VeeValidate, {
    locale: 'vi',
    dictionary: {
        vi: messages['vi']
    }
});

Vue.component(
    'admin-layout',
    require('./components/layouts/AdminLayout.vue')
);
Vue.component(
    'frontend-layout',
    require('./unexpected/App.vue')
);
Vue.component('v-select', vSelect)
Vue.component('paginate', Paginate)

Vue.config.performance = process.env.NODE_ENV !== 'production'

var app = new Vue({
    el: '#wrapper',
    router,
    store
})

var frontend = new Vue({
    el:'#app',
    router,
    store
})
