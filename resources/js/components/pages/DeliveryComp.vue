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
                    <div class="over-line mt-5"></div>
                    <h2>Delivery</h2>
                </div>
        </div>

        <div class="container food">

            <div class="row">
                <div class="categories col-3">

                    <sidebar-comp
                    :categories="arrayCategory"
                    :tipologies="arrayType"
                    @categorySlug = 'categorySlug'
                    @tipologySlug = 'tipologySlug'
                    />

                </div>

                <div class="col-9">

                       <food-comp
                       :foods="arrayFood"
                       @bottoneCliccato="ricevoIlProdottoCliccato"
                       />

                </div>
            </div>

        </div>
    </section>

    <div v-show="cart.length > 0" class="checkout">
        <div id="total">Totale: € {{totalPrice}}</div>
        <div id="counter">Quantità: {{counter}}</div>
    </div>

  </main>
</template>

<script>
import FoodComp from './FoodComp.vue';
import SidebarComp from './SidebarComp.vue';


export default {
  components: {FoodComp, SidebarComp},
    name: 'DeliveryComp',
    data(){
        return{
            foodApi: '/api/foods',
            arrayFood: [],
            arrayCategory: [],
            arrayType: [],
            showType: false,
            slugCategory: '',
            slugType: '',
            cart: [],
            totalPrice: 0,
            counter: 0,
        }
    },

    methods: {
        addProductToCart(product){
            this.cart.push(product);
            this.counter = this.cart.length;
            this.showFinalPrice();
            // console.log(this.cart)
        },

        showFinalPrice(){
            this.totalPrice = this.itemsSum();
        },

        itemsSum(){
            let totalSum = 0;
            for(let i = 0; i < this.cart.length; i++){
                totalSum += this.cart[i].price;
                // console.log(this.cart);
            }
                return totalSum;
        },

        ricevoIlProdottoCliccato(food){
            this.addProductToCart(food)
        },

        getFood(){
            axios.get(this.foodApi)
            .then(r=>{

                this.arrayFood = r.data.foods;
                this.arrayCategory = r.data.categories;
                this.arrayType = r.data.types;
                // console.log(this.arrayFood);
            })
            .catch(e=>{
                console.log(e);
            })
        },

        getFoodByCategory(){

            axios.get(this.foodApi + '/food-category/' + this.slugCategory )
            .then(r=>{

                this.arrayFood = r.data.foods;
                console.log(this.arrayFood);
            })
            .catch(e=>{
                console.log(e);
            })
        },

        getFoodByType(){

            axios.get(this.foodApi + '/food-type/' + this.slugType )
            .then(r=>{

                this.arrayFood = r.data.foods;
                console.log(this.arrayFood);
            })
            .catch(e=>{
                console.log(e);
            })
        },

        categorySlug(slug){
            this.slugCategory = slug
            this.getFoodByCategory();
        },

        tipologySlug(slug){
            this.slugType = slug
            this.getFoodByType();
        },
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

        .over-line{
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

    }

    .checkout{
        position: fixed;
        right: 0;
        bottom: 0;
        background-color: aquamarine;
        width: 250px;
        height: 120px;
        padding: 10px;
        margin: 20px;
        border-radius: 5px;
        z-index: 999;
    }


</style>
