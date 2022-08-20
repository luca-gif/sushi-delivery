<template>
  <section>

      <form>
        <h4 class="mb-3">Dettagli dell’ordine</h4>
        <span @click="$emit('closeForm')"> x </span>

        <div class="form-group">
            <input type="text" class="form-control" v-model.trim="newOrder.customer_name" id="name" placeholder="Nome">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" v-model.trim="newOrder.customer_email" id="email" placeholder="E-mail">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" v-model.trim="newOrder.customer_phone" id="phone" placeholder="Telefono">
        </div>

        <strong class="m-2 d-inline-block">Seleziona il giorno e l'ora di ritiro</strong>

        <div class="form-group">
            <input type="date" class="form-control" v-model="newOrder.date" id="date" :min="currentDay">
        </div>
        <div class="form-group">
            <input type="time" class="form-control" v-model="newOrder.hour" id="time">
        </div>

        <button @click="sendOrder(), $emit('orderSended')" type="submit" class="btn btn-secondary mt-3 w-100">Invia</button>

        <h5 class="text-right p-3 text-muted">Totale ordine: <strong>€ {{price}}</strong></h5>
    </form>

  </section>
</template>

<script>
export default {
    name: 'CheckoutComp',

    props: {
        price: Number,
        cart: Array,
    },

    data(){
        return{
            orderApi: '/api/orders',
            newOrder: {
                customer_name: '',
                customer_email: '',
                customer_phone: '',
                date: '',
                hour: '',
                amount: '',
                food_name: '',
            },

            currentDay: "",
        }
    },

    methods: {

        sendOrder(){

            for (let i = 0; i < this.cart.length; i++) {

            this.newOrder.food_name = this.cart[i].name;
            this.newOrder.amount = this.cart[i].amount;

            }

            axios.post(this.orderApi, this.newOrder)
            .then((r) => {

                console.log(r.data)
                console.log(this.newOrder)
            })
        },

        // Prendo la data attuale per disabilitare le date antecedenti nel calendario

        getDate() {
                const today = new Date();

                if(today.getMonth() < 10){
                    const date = today.getFullYear() +'-'+ '0' + (today.getMonth()+1) +'-'+ today.getDate();
                    this.currentDay = date;
                } else if (today.getDay() < 10){
                    const date = today.getFullYear() +'-'+ (today.getMonth()+1) +'-'+ '0' + today.getDate();
                    this.currentDay = date;
                }
                else{
                    const date = today.getFullYear() +'-'+ (today.getMonth()+1) +'-' + today.getDate();
                    this.currentDay = date;
                }
            },

        },

        created(){
            this.getDate()
        }
    }
</script>

<style lang="scss" scoped>

    section{
        height: 100vh;
        width: 100vw;
        background-color: rgba(0, 0, 0, .4);
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9988;
    }

    form{
        background-color: white;
        border-radius: 10px;
        padding: 20px 30px;
        width: 30%;
        margin: 0 auto;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 999;
        overflow-y: scroll;

        span{
            cursor: pointer;
            position: absolute;
            top: 20px;
            right: 20px;
            border: 1px solid rgba(255, 0, 0, .6);
            border-radius: 50%;
            color: rgba(255, 0, 0, .6);
            height: 30px;
            width: 30px;
            display: flex;
            justify-content: center;

            &:hover{
                background-color: rgba(255, 0, 0, .6);
                color: white;
            }
        }
    }

</style>
