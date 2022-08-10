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

    <!-- visualizza carrello -->

    <div v-show="cart.length > 0" class="checkout">
        <button class="btn btn-warning" v-show="!showCart" @click="showCart = true" id="view-cart">Visualizza carrello</button>
        <button class="btn btn-info mt-3" id="counter">Procedi con l'ordine</button>
        <div @click="cart = []" id="close">X</div>
    </div>

    <!-- mostro i prodotti nel carrello -->

    <div :class="{'d-block' : showCart}" class="products-in-cart">
        <div v-for="item in cart" :key="item.id" class="product-box">
            <div class="items w-100">
                <div class="item-name d-inline-block pb-3">{{item.name}}</div>
                <div class="item-price d-inline-block pb-3">{{item.price}} €</div>
            </div>

            <div class="commands">
                <div class="command remove-item"> <b>-</b> </div>
                <div class="command amount">{{counter}}</div>
                <div class="command add-item"> <b>+</b> </div>
            </div>
        </div>
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
            showCart: false,
        }
    },

    methods: {
        addProductToCart(product){
            this.cart.push(product);
            this.counter = this.cart.length;
            this.showFinalPrice();
        },

        showFinalPrice(){
            this.totalPrice = this.itemsSum();
        },

        itemsSum(){
            let totalSum = 0;
            for(let i = 0; i < this.cart.length; i++){
                totalSum += parseFloat(this.cart[i].price);
            }
                return totalSum;
        },

        ricevoIlProdottoCliccato(product){
            this.addProductToCart(product)
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
        display: flex;
        justify-content: end;
        flex-direction: column;
        background-color: #fff;
        width: 300px;
        padding: 10px;
        margin: 20px;
        border-radius: 5px;
        z-index: 999;
        box-shadow: 0 0 10px;

    }

    .products-in-cart{
        position: fixed;
        right: 0;
        bottom: 150px;
        display: flex;
        justify-content: end;
        flex-direction: column;
        background-color: #fff;
        width: 300px;
        max-height: 400px;
        padding: 10px;
        margin: 20px;
        border-radius: 5px;
        z-index: 999;
        font-size: 15px;
        display: none;
        overflow: auto;
        box-shadow: 0 0 10px;

        .product-box{
            display: flex;
            flex-direction: column;
            padding: 20px;
            border: 1px solid lightgray;
            margin: 20px 10px;
            position: relative;

            .items{
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .commands{
                width: 100%;
                display: flex;
                justify-content: space-evenly;
                position: absolute;
                bottom: -15px;
                left: 0;

            }

            .command{
                background-color: #fff;
                width: 35px;
                height: 35px;
                border-radius: 50%;
                border: 1px solid lightgray;
                display: flex;
                justify-content: center;
                align-items: center;
                cursor: pointer;
            }


        }
    }

    #close{
        position: absolute;
        top: 0;
        right: 10px;
        cursor: pointer;
    }


</style>
