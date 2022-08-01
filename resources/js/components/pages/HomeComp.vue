<template>
    <main>

            <div class="lm-jumbotron">
                <div class="overlay">

                    <div class="jumbo-container text-uppercase text-white d-flex align-items-center justify-content-center flex-column">

                        <h2>Fusion Restaurant</h2>

                        <div class="name">
                            <h1>Miko</h1>
                        </div>

                        <h3>20 anni di esperienza</h3>

                        <div class="miko-btn"> <a class="text-white" href="#">Ordina ora</a> </div>

                    </div>

                </div>
            </div>

            <div class="container">

                <div class="row py-5">

                    <div class="col-6">
                        <img id="girl" src="../../assets/img/64784400_157513548631681_833729039937920018_n.webp" alt="">
                    </div>

                    <div class="col-6 debug">

                        <h4>20 ANNI DI ESPERIENZA</h4>
                        <h2>Una spanna sopra gli altri</h2>

                        <p>Un detto giapponese afferma che mangiando con il cuore, le persone ricavano l’energia necessaria per perseguire i propri Sogni.</p>

                        <p>Questo è lo scopo della cucina giapponese e cinese.</p>

                        <p>I loro ingredienti sono semplici e leggeri, ma è soprattutto il loro equilibrio e la loro armonia che trasformano il tutto in qualcosa di magico, qualcosa di PERFETTO.</p>

                        <a href="#" class="miko-btn text-white">Chi siamo</a>

                    </div>

                </div>

            </div>

    </main>
</template>

<script>
export default {
    name: 'HomeComp'
}
</script>

<style lang="scss" scoped>

    .lm-jumbotron{
        background-image: url(../../assets/img/home-jumbo.jpg);
        background-position: center;
        background-size: cover;
    }

    #girl{
        width: 450px;
        border: 4px solid black;
        padding: 30px;
    }




</style>
