// importo Vue e VueRouter
import Vue from "vue";
import VueRouter from "vue-router";

// dico a Vue di usare VueRouter
Vue.use(VueRouter);

// importo i componenti

const router = new VueRouter({
    mode: "history",
    routes: [],
});

export default router;