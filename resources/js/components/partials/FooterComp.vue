<template>
    <footer>

        <div class="footer-top">

            <div class="container">

                <div class="row banners text-white my-5">
                    <div class="col-5 coupon p-3">
                        <h6>Ottieni il 10% di sconto</h6>
                        <div class="py-2">
                            <small class="text-muted">*L’offerta è valida se ordini almeno un giorno prima, i box non rientrano nella promozione.</small>
                        </div>
                        <span>GUARDA I PRODOTTI</span>
                    </div>

                    <div class="col-5 offset-2 delivery p-3">
                        <h3 class="pb-2">Spedizione Gratuita</h3>
                        <div><small>Miko Sushi offre la spedizione gratuita su ordini superiori ai 80€</small></div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="container footer-list py-5">
                <div class="row">
                    <div class="col-6">

                        <img src="../../assets/img/pngwing.com(2).png" alt="sushi logo">

                        <p class="py-4 text-muted">
                        Miko Sushi è cucina fusion di alta qualità e di straordinario equilibrio sensoriale. Tradizioni millenarie che diventano vere e proprie opere d’arte, piene di eleganza e di gusto. Piatti che ti catturano con gli occhi prima ancora del con il palato. Miko Sushi è esperienza culinaria che diventa emozione.
                        </p>
                    </div>

                    <div class="col-3">
                        <h6>Sitemap</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Delivery</a></li>
                            <li><a href="#">Box Delivery</a></li>
                            <li><a href="#">Family Menu</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contatti</a></li>
                        </ul>
                    </div>

                    <div class="col-3">
                        <h6>Info</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Cookie Policy</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Domande Frequenti</a></li>
                            <li><a href="#">Covid-19</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer-bottom">

            <div class="container">
                <div class="row text-center">

                    <div class="col-3">
                        <h6>DOVE SIAMO</h6>
                        <span class="text-muted">
                            Via Maddalena, <br>
                            20019 Milano
                        </span>
                    </div>

                    <div class="col-3">
                        <h6>ORARIO</h6>
                        <span class="text-muted">
                            Pranzo: <strong>12:00 – 15:00</strong> <br>
                            Cena: <strong>19:00 – 23:30 <br>
                            (Da Asporto o Domicilio)</strong>
                        </span>
                    </div>

                    <div class="col-3">
                        <h6>INFO</h6>
                        <span class="higlight">
                            0000 000000 <br>
                            info@sushino.com
                        </span>
                    </div>

                    <div class="col-3">
                        <h6>FOLLOW</h6>
                        <span>
                            <img id="ig" src="../../assets/img/ig .png" alt="instagram" title="Instagram">
                            <img id="fb" src="../../assets/img/fb.png" alt="facebook" title="Facebook">
                        </span>
                    </div>
                </div>

                <div class="text-center p-5">
                    Made with ❤ by <span class="higlight">Luca</span>.
                </div>

            </div>
        </div>

    </footer>
</template>

<script>
export default {
    name: 'FooterComp'
}
</script>

<style lang="scss" scoped>

    footer{

        .footer-top{

            .banners{

                .coupon{
                    background-image: url(https://mikosushi.it/wp-content/uploads/2020/05/coupon-banner-313d.jpg);
                    background-position: center;
                    background-size: cover;
                }

                .delivery{
                    background-image: url(https://mikosushi.it/wp-content/uploads/2020/05/coupon-banner-313d.jpg);
                }

            }

                img{
                    width: 70%;
                }

                .footer-list{
                    h6{
                        color: #aecbe0;
                        padding-bottom: 10px;
                    }

                    a{
                        color: black;
                        text-decoration: underline;
                        line-height: 30px;

                        &:hover{
                            text-decoration: none;
                        }
                    }
                }
        }

        .footer-bottom{
            background-color: #1f2638;
            color: #fff;
            padding-top: 100px;

            h6{
                margin-bottom: 15px;
            }

            img{
                width: 35px;
                cursor: pointer;
            }

            #fb{
                width: 30px;
                border-radius: 5px;
                margin-left: 5px;
            }
        }

        .higlight{
            color: #ec7550;
        }
    }


</style>
