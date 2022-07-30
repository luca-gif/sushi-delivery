window.Vue = require("vue");
window.axios = require("axios"); //importo axios globalmente

import App from "./App.vue";
import router from "./routes";

const app = new Vue({
    el: "#app",
    router,
    render: (h) => h(App), //formula per innestare App.vue in #app
});