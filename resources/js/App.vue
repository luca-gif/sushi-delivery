<template>
  <div>

    <header-comp />

    <router-view></router-view>

    <footer-comp />

  </div>
</template>

<script>
import FooterComp from './components/partials/FooterComp.vue'
import HeaderComp from './components/partials/HeaderComp.vue'

export default {
  components: { HeaderComp, FooterComp },
    name: 'App',

}
</script>

<style lang="scss">
    @import'~bootstrap/dist/css/bootstrap.css';

    main{
        margin-top: 80px;
    }

    .lm-jumbotron{
        height: 600px;

        .jumbo-container{
            height: 100%;
            width: 55%;
            margin: 0 auto;

            .name{
                border-top: 1px solid grey;
                border-bottom: 1px solid grey;
                width: 100%;
                text-align: center;
                padding: 60px 0;

                h1{
                    font-size: 80px;
                }
            }
        }
    }

    .miko-btn{
        background-color: #9a000e;
        padding: 13px 20px;
        margin-top: 30px;
        text-transform: uppercase;
    }

    .overlay{
        height: 100%;
        width: 100%;
        background-image: linear-gradient(to right, rgba(0, 0, 0, .8), rgba(0, 0, 0, 0.1));
    }

    .debug{
        background-color: rgba(255, 0, 0, .4);
        border: 1px solid black;
    }

</style>
