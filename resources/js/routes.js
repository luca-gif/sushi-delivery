// importo Vue e VueRouter
import Vue from "vue";
import VueRouter from "vue-router";

// dico a Vue di usare VueRouter
Vue.use(VueRouter);

// importo i componenti

import HomeComp from "./components/pages/HomeComp";
import DeliveryComp from "./components/pages/DeliveryComp";
import AboutComp from "./components/pages/AboutComp";
import ContactsComp from "./components/pages/ContactsComp";

const router = new VueRouter({
    mode: "history",
    routes: [{
            path: "/",
            name: "home",
            component: HomeComp,
        },
        {
            path: "/delivery",
            name: "delivery",
            component: DeliveryComp,
        },
        {
            path: "/chi-siamo",
            name: "about",
            component: AboutComp,
        },
        {
            path: "/contatti",
            name: "contacts",
            component: ContactsComp,
        },
    ],
});

export default router;