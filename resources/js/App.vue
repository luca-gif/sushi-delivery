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


</style>
