import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const Foo = {template: '<div>foo</div>'}
const Bar = {template: '<div>bar</div>'}
const theCheckersComponent = require('./components/theCheckersComponent');

const router = new VueRouter({
    mode: 'history',
    base: '/',
    routes: [
        {path: '/foo', component: Foo},
        {path: '/bar', component: Bar},
        {path: '/conway-checkers', component: theCheckersComponent},
    ],
});
import theWelcomePage from './components/theWelcomePage.vue'

new Vue({
    components: {
        theWelcomePage,
    },
    router
}).$mount('#app');