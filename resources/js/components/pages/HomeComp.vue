<template>
    <main>

        <div class="lm-jumbotron">
            <div class="overlay">

                <div class="jumbo-container text-uppercase text-white d-flex align-items-center justify-content-center flex-column">

                    <h2>Fusion Restaurant</h2>

                    <div class="name">
                        <h1>SUSHIKO</h1>
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

            <div class="container">
                <div class="row text-center">
                    <div class="col-6 col-sx text-white">

                        <h6>ONLINE</h6>
                        <h2>
                            ORDINA ORA <br>
                            E OTTIENI <br>
                            IL <span>10%</span> <br>
                            DI SCONTO <br>
                        </h2>

                        <p class="text-muted">
                            *Ordina almeno un giorno prima ciò che più ami, la promozione è valida anche per il ritiro in negozio, i box non rientrano nella promozione.
                        </p>

                        <div class="p-5"><router-link :to="{name: 'delivery'}" class="miko-btn text-white">Scopri il men&uacute;</router-link></div>

                    </div>
                    <div class="col-6 col-dx p-0">
                        <div class="overlay-white">

                            <h6>VIENI A TROVARCI</h6>
                            <h2>SIAMO APERTI</h2>
                            <p class="py-2">
                                Tutti i giorni tranne il lunedì, pranzo e cena. <br>
                                (Da asporto o Domicilio)
                            </p>

                            <p>
                                – Pranzo dalle  12:00 – 15:00 <br>
                                – Cena dalle 19:00 – 23:30 <br>
                                (Da Asporto o Domicilio) <br>
                            </p>

                            <p>Prenota ora il tuo tavolo</p>

                            <div class="p-5"><router-link :to="{name: 'delivery'}" class="miko-btn text-white">Prenota</router-link></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lm-container come-funziona">

                <div class="row">
                    <div class="col-6 text-white">

                        <h4>COME FUNZIONA?</h4>
                        <h2>ORDINA E RESTA <br> COMODO</h2>
                        <p>Ordina i tuoi piatti preferiti riempiendo il carrello e prepara la tavola perchè stiamo arrivando!</p>
                        <h5>Compila il tuo ordine:</h5>
                        <ul>
                            <li>il giorno e l’orario di consegna</li>
                            <li>l’indirizzo di consegna</li>
                            <li>il nome e/o cognome sul campanello</li>
                            <li>il tuo numero di telefono, per contattarti in caso di necessità</li>
                        </ul>

                        <h5>PAGAMENTI</h5>
                        <ul>
                            <li>Potrai pagare in Contanti alla consegna.</li>
                        </ul>

                        <h5>Ordine minimo:</h5>
                        <ul>
                            <li>La soglia minima per ordine varia in base al chilometraggio nel dettaglio:</li>
                            <div>– Da 0 a 8 km ordine minimo di 40€ .</div>
                            <div>– Da 8 a 12 km ordine minimo 80€ .</div>
                        </ul>

                        <div class="p-5"><router-link :to="{name: 'delivery'}" class="miko-btn text-white">Vai allo shop</router-link></div>

                    </div>
                    <div class="col-6 offset-6 text-white">

                        <h4>COME FUNZIONA?</h4>
                        <h2>SUSHI DRIVE</h2>
                        <p>Ordina i tuoi piatti preferiti riempiendo il carrello e vieni a ritirare i tuoi piatti in negozio restando comodamente nella tua auto!</p>
                        <h5>Compila il tuo ordine:</h5>
                        <ul>
                            <li>il giorno e l’orario del ritiro (ti chiediamo di presentarti soltanto nell’orario scelto)</li>
                            <li>il nome e/o cognome identificativo del tuo ordine</li>
                            <li>il tuo numero di telefono, per contattarti in caso di necessità</li>
                        </ul>

                        <h5>PAGAMENTI</h5>
                        <ul>
                            <li>Potrai pagare in Contanti al ritiro</li>
                        </ul>


                        <div class="p-5"><router-link :to="{name: 'delivery'}" class="miko-btn text-white">Vai allo shop</router-link></div>

                    </div>
                </div>
            </div>

            <div class="row pt-3">
                <div class="col-12 covid-19 text-center text-white">
                    <h3>COVID-19</h3>
                    <h2 class="py-4">COME TI TUTELIAMO</h2>
                    <h6>
                        La tua sicurezza e la cosa che ci sta più a cuore,  soprattutto ora, considerando la situazione che stiamo vivendo.
                    </h6>
                    <h6>Scopri come svolgiamo le modalità di consegna e ritiro per far sì che tu possa essere sempre al sicuro.</h6>
                <div class="p-5">
                    <a href="#" class="miko-btn text-white">Scopri di pi&uacute;</a></div>
                </div>
            </div>

        </section>

        <section class="map">

            <div class="d-flex justify-content-between align-items-baseline text-dark py-4">
                <div class="disegno"></div>
                <span>RITIRA IN NEGOZIO</span>
                <div class="disegno"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2864.0077612748355!2d12.28234142799624!3d44.12446206303605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132cbb6e4fe6b78b%3A0x560fa944243cf77!2sMiko%20Sushi%20Cesena!5e0!3m2!1sit!2sit!4v1659385217620!5m2!1sit!2sit" width="700" height="350" style="border:0; filter: invert(90%)" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-4">

                        <h5>Ti aspettiamo</h5>
                        <p>Vieni a ritirare il tuo ordine direttamente al ristorante, ci troviamo in Via Emilia Levante, <br>
                            1655, 47521 Cesena FC</p>

                        <div><router-link :to="{name: 'delivery'}" class="miko-btn text-white">Ordina ora</router-link></div>
                        <h5 class="mt-5">Orari per il ritiro</h5>
                        <h6>Pranzo: 12:00 – 15:00</h6>
                        <h6> Cena: 19:00 – 23:30 (Da Asporto o Domicilio)</h6>

                    </div>
                </div>
            </div>
        </section>

        <div class="row">
            <div class="col-6 family p-0">
                <div class="overlay">
                    <h2>TU SEI LA NOSTRA FAMIGLIA.</h2>
                </div>

            </div>
            <div class="col-6 menu p-0">
                <div class="overlay"></div>

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

@import '../../../sass/food/variables';

    main{
        overflow-x: hidden;
    }

    .lm-jumbotron{
        background-image: url(../../assets/img/home-jumbo.jpg);
        background-position: center;
        background-size: cover;

        h2,h3{
            letter-spacing: 5px;
        }

        .name{
            padding: 40px 0;
        }
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
            color: $base-color;
        }
    }

    .i-nostri-piatti, .tocca-a-te, .map{
         h4{
            color: $base-color;
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
        background-position: top;
        background-size: cover;


        .col-sx{
            background-image: url('https://mikosushi.it/wp-content/uploads/2020/05/butcher-09.jpg');
        }
        .col-dx{
            background-image: url('https://mikosushi.it/wp-content/uploads/2020/05/64784400_157513548631681_833729039937920018_n.jpg');
        }

        h2{
            line-height: 70px;
            letter-spacing: 5px;
        }

        h6{
            color: $base-color;
            padding-bottom: 20px;
        }

        p{
            font-size: 20px;
            line-height: 40px;
        }

        span{
            color: $base-color;
        }

        .col-sx, .overlay-white{
            padding: 100px 60px 50px;
        }

        .overlay-white{
            h2{
                font-size: 50px;
            }
        }
    }


    .lm-container{
        width: 90%;
        margin: 0 auto;
        margin-top: 100px;

        h2{
            font-size: 40px;
            font-weight: bolder;
        }

        h4{
            font-weight: bolder;
        }
    }

    .covid-19{

         h2{
            font-size: 40px;
        }

        h6{
            color: #fff;
        }
    }

    .map{

        margin-bottom: 40px;
        h5{
            letter-spacing: 5px;
            text-transform: uppercase;
        }
        p{
            line-height: 30px;
            padding: 20px 0;
        }
    }

    .family{
        background-image: url('https://mikosushi.it/wp-content/uploads/2020/05/our-family-recipe-book-scaled.jpg');
        background-position: center;
        background-size: cover;
        height: 700px;

        h2{
            font-size: 80px;
            color: #fff;
            line-height: 150px;
            padding: 100px 80px;
        }
    }
    .menu{
        background-image: url('https://mikosushi.it/wp-content/uploads/2020/05/53524919_2039244126372772_5984011031826634360_n.jpg');
        background-position: center;
        background-size: cover;
        height: 700px;
    }

</style>
