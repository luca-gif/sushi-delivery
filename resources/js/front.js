window.Vue = require("vue");
window.axios = require("axios"); //importo axios globalmente

import App from "./App.vue";
import router from "./routes";

const app = new Vue({
    el: "#app",
    router,
    render: (h) => h(App), //formula per innestare App.vue in #app
});

// Ridimensiono la navbar allo scroll

window.onscroll = function() {
    resizeHeader();
    showAnchor();
};

function resizeHeader() {
    if (
        document.body.scrollTop > 100 ||
        document.documentElement.scrollTop > 100
    ) {
        document.getElementById("navbar").style.height = "50px";
        document.getElementById("logo").style.width = "50px";
    } else {
        document.getElementById("navbar").style.height = "80px";
        document.getElementById("logo").style.width = "80px";
    }
}

function showAnchor() {
    if (
        document.body.scrollTop > 400 ||
        document.documentElement.scrollTop > 400
    ) {
        document.querySelector(".anchor").style.display = "flex";
    } else {
        document.querySelector(".anchor").style.display = "none";
    }
}