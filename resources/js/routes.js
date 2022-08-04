// importo Vue e VueRouter
import Vue from "vue";
import VueRouter from "vue-router";

import VueSmoothScroll from "vue2-smooth-scroll";

// dico a Vue di usare VueRouter
Vue.use(VueRouter);

// dico a Vue di usare VueRouter
Vue.use(VueSmoothScroll);

// importo i componenti
import HomeComp from "./components/pages/HomeComp";
import DeliveryComp from "./components/pages/DeliveryComp";
import AboutComp from "./components/pages/AboutComp";
import ContactsComp from "./components/pages/ContactsComp";
import FoodDetail from "./components/pages/FoodDetail";

const router = new VueRouter({
    mode: "history",
    linkExactActiveClass: "text-danger", //aggiunge la classe in base alla rotta in cui sei
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
        {
            path: "/immagine-piatto/:slug",
            name: "detail",
            component: FoodDetail,
        },
    ],
});

export default router;