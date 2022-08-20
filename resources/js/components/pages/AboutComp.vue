<template>
  <main>

    <div class="lm-jumbotron">
        <div class="overlay">

            <div class="jumbo-container text-white d-flex align-items-center justify-content-center flex-column">

                <div class="name">
                    <h1>ABOUT US</h1>

                <p>Scopri chi siamo.</p>

                </div>

                <div class="buttons">
                    <a href="#" v-smooth-scroll class="miko-btn text-white">CHI SIAMO</a>
                </div>

            </div>
        </div>
    </div>

  </main>
</template>

<script>
export default {
    name: 'AboutComp'
}
</script>

<style lang="scss" scoped>
@import '../../../sass/food/_variables.scss';

    .lm-jumbotron{
        background-image: url('../../assets/img/P1488251-scaled.jpg');
        background-position: center;
        background-size: cover;

        p{
            line-height: 30px;
        }

        .buttons{
            margin-top: 70px;
            cursor: pointer;
        }

        a + a{
            text-decoration: underline;
            font-weight: bolder;
            margin-left: 20px;

            &:hover{
                text-decoration: none;
            }
        }

    }

</style>
