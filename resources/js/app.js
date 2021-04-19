import Vue from "vue";
import Vuelidate from "vuelidate";
import Vuex from 'vuex'
import store from "./store";
import './bootstrap'
import 'slick-carousel/slick/slick.min';

Vue.use(Vuelidate);
Vue.use(Vuex);

Vue.component('modal', require('./components/Modal.vue').default);
Vue.component('thanks', require('./components/Thanks.vue').default);
Vue.component('quiz', require('./components/Quiz.vue').default);
Vue.component('last-step', require('./components/LastStep.vue').default);


const app = new Vue({
    store,
    el: '#app',
    computed:{
        isThanks(){
            return this.$store.getters.isThanks
        }
    }
});

