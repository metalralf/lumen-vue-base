import Vue from 'vue'; // https://dzone.com/articles/how-to-make-vuejs-website-seo-friendly
import VueRouter from 'vue-router';
import VueMeta from 'vue-meta'; // https://github.com/nuxt/vue-meta
import Vuex from 'vuex';

Vue.use(Vuex); // https://vuex.vuejs.org/guide/
Vue.use(VueRouter);
Vue.use(VueMeta, {
    // optional pluginOptions
    refreshOnceOnNavigation: true
})

const Foo = {template: '<div>foo</div>'}
const Bar = {template: '<div>bar</div>'}

const router = new VueRouter({
    mode: 'history',
    base: '/',
    routes: [
        {path: '/foo', component: Foo},
        {path: '/bar', component: Bar}
    ]
});

new Vue({
    router
}).$mount('#app');
