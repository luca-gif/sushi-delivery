<template>
  <header class="fixed-top">

    <nav @scroll ="isScrolling = true" :class="{ 'heigth-50' : isScrolling }" class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            LOGO
        </div>

        <div class="actions">
           <ul class="d-flex list-unstyled mb-0">
                <li><router-link :to="{name: 'home'}">Home</router-link></li>
                <li><router-link :to="{name: 'delivery'}">Delivery</router-link></li>
                <li><router-link :to="{name: 'about'}">About Us</router-link></li>
                <li><router-link :to="{name: 'contacts'}">Contatti</router-link></li>
           </ul>
        </div>
    </nav>

  </header>
</template>

<script>

export default {
    name: 'HeaderComp',

    data(){
        return{
            isScrolling: false
        }
    }
}
</script>

<style lang="scss" scoped>

    header{
        background-color: black;
        z-index: 999;

        nav{
            height: 80px;

            li{
                margin-left: 20px;
            }

            a{
                color: #919191;
                text-decoration: none;

            }
        }
    }

    .heigth-50{
        height: 50px;
    }


</style>
