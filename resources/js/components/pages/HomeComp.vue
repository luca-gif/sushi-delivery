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

                    <router-link :to="{name: 'delivery'}" class="miko-btn text-white">Ordina ora</router-link>

                </div>

            </div>
        </div>

        <div class="container">

            <section class="experience">

                <div class="row py-5">

                <div class="col-6">
                    <img id="girl" src="../../assets/img/64784400_157513548631681_833729039937920018_n.webp" alt="">
                </div>

                <div class="col-6 py-5">

                    <h4 class="pb-3"><span>20 ANNI DI ESPERIENZA</span></h4>
                    <h2>Una spanna sopra gli altri</h2>

                    <p class="pt-3">Un detto giapponese afferma che mangiando con il cuore, le persone ricavano l’energia necessaria per perseguire i propri Sogni.</p>

                    <p class="py-3">Questo è lo scopo della cucina giapponese e cinese.</p>

                    <p>I loro ingredienti sono semplici e leggeri, ma è soprattutto il loro equilibrio e la loro armonia che trasformano il tutto in qualcosa di magico, qualcosa di PERFETTO.</p>

                    <div class="my-5">
                        <router-link :to="{name: 'delivery'}" class="miko-btn text-white">Chi siamo</router-link>
                    </div>

                </div>

            </div>

            </section>

        </div>

        <div class="i-nostri-piatti row">
            <div class="col-12 text-center">
                <h4>100% FRESCO</h4>

                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="disegno"></div>
                    <span>I nostri piatti</span>
                    <div class="disegno"></div>
                </div>
            </div>


            <div class="container text-center">
                <div class="row">
                    <div class="col-3">
                            <img src="https://764000.smushcdn.com/1772720/wp-content/uploads/2020/05/P1488388-400x516.jpg?lossy=1&strip=1&webp=1" alt="">
                    </div>
                    <div class="col-3">
                        <img src="https://764000.smushcdn.com/1772720/wp-content/uploads/2020/05/P1477104-400x516.jpg?lossy=1&strip=1&webp=1" alt="">
                    </div>
                    <div class="col-3">
                        <img src="https://764000.smushcdn.com/1772720/wp-content/uploads/2020/05/P1477058-400x516.jpg?lossy=1&strip=1&webp=1" alt="">
                    </div>
                    <div class="col-3">
                        <img src="https://764000.smushcdn.com/1772720/wp-content/uploads/2020/05/P1477534-400x516.jpg?lossy=1&strip=1&webp=1" alt="">
                    </div>
                </div>

                <p class="my-5">I piatti più amati. Scoprili tutti…</p>
                <div class="pb-5"><router-link :to="{name: 'delivery'}" class="miko-btn text-white">Vai allo shop</router-link></div>
            </div>
        </div>

        <section class="tocca-a-te">
            <div class="d-flex justify-content-between align-items-baseline text-white py-4">
                <div class="disegno"></div>
                <span>Tocca a te adesso</span>
                <div class="disegno"></div>
            </div>
        </section>

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
        width: 500px;
        border: 4px solid black;
        padding: 30px;
    }

    .experience{
        h2{
            font-size: 50px;
        }

        h4{
            color: #9a000e;
        }
    }

    .i-nostri-piatti, .tocca-a-te{
         h4{
            color: #9a000e;
        }

        span{
            font-size: 50px;
            text-transform: uppercase;
            margin-top: 20px;
        };
            .disegno{
            width: 500px;
            height: 30px;
            background-image: url('../../assets/img/butcher-image-11-2.webp');;
        }

        img{
            width: 220px;
            border-radius: 10px;
            margin: 20px 0;
        }
    }

    .tocca-a-te{
        background-image: url(../../assets/img/crediamo-alla-qualità-scaled.jpg);
        height: 1500px;
    }


</style>
