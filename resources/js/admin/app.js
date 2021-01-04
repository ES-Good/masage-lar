import Vue from "vue";
import App from "./App.vue";
import Vuelidate from "vuelidate";
import router from "./router";
import messagePlugin from "./utils/message.plugin";
import dateFilter from "./filters/date.filter";
import "./bootstrap";
import "materialize-css/dist/js/materialize.min";


Vue.use(Vuelidate);
Vue.use(messagePlugin);
Vue.filter('date', dateFilter)

const app = new Vue({
    router,
    render: h => h(App),
}).$mount('#app')
