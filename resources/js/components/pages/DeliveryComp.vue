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

                <div class="buttons">
                    <a href="#delivery" v-smooth-scroll class="miko-btn text-white">Inizia ora l'ordine</a>
                    <a class="text-white">Come funziona?</a>
                </div>


            </div>
        </div>
    </div>

    <div class="copertura">
       <div class="container">
        <div class="row align-items-center py-5">

            <div class="col-5">
                <h5>I piatti che ami a domicilio</h5>
                <h2 class="text-white">Verifica la copertura</h2>
                <p>Vorresti la consegna dei nostri piatti direttamente a casa tua? Inserisci il tuo domicilio e scopri subito se rientri all’interno dei 20Km. Altrimenti potrai sempre venire a ritirarlo nel nostro ristorante!</p>

            </div>

            <div class="col-5 offset-2">
                <img src="../../assets/img/delivery_boy-miko.webp" alt="">
            </div>

        </div>
       </div>
    </div>

    <section id="delivery" class="delivery">
        <div class="container d-flex justify-content-center align-items-center">

                <div class="delivery-title d-flex flex-column align-items-center justify-content-center">
                    <div class="over mt-5"></div>
                    <h2>Delivery</h2>
                </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="categories col-3">

                    <ul class="list-unstyled">
                        <h4 class="mb-4">Filtra per categoria</h4>
                        <li @click="category.id == 4 ? showType = !showType : '' "
                            v-for="category in arrayFood.categories" :key="category.id"
                            class="mb-3">

                        <div class="check d-inline-block text-center">+</div> {{category.name}}
                        </li>
                    </ul>

                    <ul v-show="showType == true" class="list-unstyled">
                        <h4  class="mt-5 mb-4">Filtra per tipologia</h4>

                        <li v-for="tipology in arrayFood.types" :key="tipology.id" class="mb-3">
                        <div class="check d-inline-block text-center">+</div> {{tipology.name}}
                        </li>
                    </ul>

                </div>

                <div class="col-9">
                    <div class="d-flex flex-wrap">
                        <div v-for="food in companiesLoaded" :key="food.id" class="sushi col-3">
                            <div class="card mb-4" style="width: 12rem; min-height: 27rem; border-radius: 5px;">

                                <img v-if="food.image" class="card-img-top" :src="food.image" :alt="food.name" :title="food.name">

                                <div class="card-body">

                                    <h5 class="card-title">{{ food.name }}</h5>

                                    <p v-if="food.description" class="card-text">{{ food.description }}</p>

                                    <h6 class="card-text price">{{ food.price }} €</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div @click="loadMore()" class="load-more">Carica pi&uacute; prodotti</div>
                </div>
            </div>

        </div>
    </section>

  </main>
</template>

<script>


export default {
    name: 'DeliveryComp',
    data(){
        return{
            foodApi: '/api/foods',
            arrayFood: [],
            showType: false,
            length: 8,
        }
    },

    methods: {
        getFood(){
            axios.get(this.foodApi)
            .then(r=>{

                this.arrayFood = r.data;
                console.log(this.arrayFood);
            })
            .catch(e=>{
                console.log(e);
            })
        },

        loadMore(){
            if (this.length > this.arrayFood.foods.length) return;
            this.length = this.length + 4;
        },
    },

    computed: {

        companiesLoaded() {
            return this.arrayFood.foods.slice(0, this.length);
        }
    },

    mounted(){
        this.getFood()
    }
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

    .copertura{

        background-image: url('../../assets/img/butcher-09.jpg');

        img{
            width: 300px;
        }

        h2{
            font-weight: bolder;
        }

        h5{
            color: $base-color;
            font-weight: bolder;
        }

        p{
            color: rgb(174, 174, 174);
        }
    }

    .delivery{

        .over{
            height: 5px;
            width: 75px;
            background-color: #000;
        }

        h2{
            font-size: 50px;
            font-weight: 900;
            color: $base-color;
            padding: 25px 0;
            margin-bottom: 60px;
        }

        .price{
            color: #29c4a9;
            font-weight: 900;
        }

        .card{
            p{
                font-size: 13px;
                letter-spacing: 1px;
            }
        }

        .categories{
            li{
                color: grey;
                font-weight: 900;
            }
        }


        .check{
            width: 30px;
            height: 30px;
            border: 1px solid grey;
            border-radius: 5px;
            vertical-align: middle;
            margin-right: 10px;
            line-height: 30px;
            cursor: pointer;

            &:hover{
                border: 1.5px solid #29c4a9;
            }
        }

        .hideContent{
            height: 56rem;
            overflow: hidden;
        }

        .load-more{
            text-transform: uppercase;
            font-size: 14px;
            font-weight: 900;
            width: 100%;
            text-align: center;
            color: #fff;
            background-color: #3b3b3b;
            padding: 8px 0;
            border-radius: 5px;
            cursor: pointer;
            transition: all .4s;

            &:hover{
                background-color: #fff;
                border: 1px solid black;
                color: black;
            }
        }
    }


</style>
