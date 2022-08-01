<template>
  <main>

    <div class="lm-jumbotron">
        <div class="overlay">

            <div class="jumbo-container text-white d-flex align-items-center justify-content-center flex-column">

                <div class="name">
                    <h1>SIAMO TORNATI</h1>

                    <h5>SIAMO TORNATI! </h5>

                <p>Sul Delivery hai il 10% di sconto se ordini almeno un giorno prima. <br>
                    Mentre se vieni a ritirare da noi il tuo Asporto hai il 20% di sconto. <br>
                    Ricordiamo che i Box non rientrano nella promozione.</p>

                </div>

                <router-link :to="{name: 'delivery'}" class="miko-btn text-white">Inizia ora l'ordine</router-link>

            </div>
        </div>
    </div>

  </main>
</template>

<script>
export default {
    name: 'DeliveryComp'
}
</script>

<style lang="scss" scoped>

    .lm-jumbotron{
        background-image: url('../../assets/img/P1488251-scaled.jpg');
        background-position: center;
        background-size: cover;

        p{
            line-height: 30px;
        }
    }


</style>
