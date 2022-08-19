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

    <div v-show="cart.length > 0" class="checkout text-center">
        <h5>Totale: {{totalPrice}} €</h5>
        <button @click="showCart = true" class="btn btn-warning" v-show="!showCart" id="view-cart">Visualizza carrello</button>
        <button @click="showForm = true" class="btn btn-info mt-3" id="counter">Procedi con l'ordine</button>
    </div>

    <!-- mostro i prodotti nel carrello -->

    <div v-if="cart.length != 0" :class="showCart ? 'd-block' : '' " class="products-in-cart text-center">

        <h4><strong>Il tuo carrello</strong></h4>
        <span @click="showCart = false" class="close-cart"> x </span>
        <div v-for="(item, index) in cart" :key="index"
        class="product-box"
        >

            <div class="items w-100">
                <div class="item-name d-inline-block pb-3">{{item.name}}</div>
                <div class="item-price d-inline-block pb-3">{{item.price}} €</div>
            </div>

            <div class="commands">
                <div @click="removeItem(item)" class="command remove-item"> <b>-</b> </div>
                <div class="command amount">{{item.amount}}</div>
                <div @click="addItem(item)" class="command add-item"> <b>+</b> </div>
            </div>
        </div>
    </div>

    <!-- Visualizzo il form solo al click su "Procedi con l'ordine" -->

    <checkout-comp v-if="showForm"
    @closeForm = "closeForm"
    />


  </main>
</template>

<script>
import CheckoutComp from './CheckoutComp.vue';
import FoodComp from './FoodComp.vue';
import SidebarComp from './SidebarComp.vue';


export default {
  components: {FoodComp, SidebarComp, CheckoutComp},
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
            showCart: false,
            showForm: false,
        }
    },

    methods: {

        closeForm(){
            this.showForm = false
        },

        // aggiungo un prodotto al click sul +

        addItem(product){
            if(!this.cart.includes(product)){
                this.cart.push(product)
            }
            product.amount++
            this.showFinalPrice()
            // console.log(this.cart)
        },

        // rimuovo un prodotto al click sul -

        removeItem(product){
            if(product.amount == 1){
                let productToRemove = this.cart.indexOf(product)
                this.cart.splice(productToRemove,1)
            }
            product.amount--
            this.showFinalPrice()
            // console.log(this.cart)
        },

        //aggiunge il prodotto cliccato all'array carrello

        addProductToCart(product){
            if(!this.cart.includes(product)){
                this.cart.push(product);
            }
            product.amount++
            this.showFinalPrice();
            console.log(this.cart);
        },

        showFinalPrice(){
            this.totalPrice = this.itemsSum();
        },

        itemsSum(){
            let totalSum = 0;
            for(let i = 0; i < this.cart.length; i++){
                totalSum += parseFloat(this.cart[i].price) * this.cart[i].amount;
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
        overflow: auto;
        box-shadow: 0 0 10px;
        display: none;

        .close-cart{
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 10px;
            cursor: pointer;
            border: 1px solid rgba(255, 0, 0, .6);
            border-radius: 50%;
            color: rgba(255, 0, 0, .6);
            height: 30px;
            width: 30px;
            display: flex;
            justify-content: center;
            align-items: center;

             &:hover{
                background-color: rgba(255, 0, 0, .6);
                color: white;
            }
        }

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
                align-items: center;
                position: absolute;
                bottom: -15px;
                left: 0;

                .amount{
                    width: 40px;
                    height: 32px;
                    font-size: 14px;
                    border: 1px solid rgb(230, 230, 230);
                    cursor: default;
                }
            }

            .command{
                background-color: #fff;
                width: 35px;
                height: 32px;
                border-radius: 50%;
                border: 1px solid lightgray;
                display: flex;
                justify-content: center;
                align-items: center;
                cursor: pointer;
            }
        }
    }

</style>
