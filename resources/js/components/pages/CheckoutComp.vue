<template>
  <section>

      <form>
        <h4 class="mb-3">Dettagli dell’ordine</h4>
        <span @click="$emit('closeForm')"> x </span>

        <div class="form-group">
            <input type="text" class="form-control" v-model.trim="newOrder.name" id="name" placeholder="Nome">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" v-model.trim="newOrder.email" id="email" placeholder="E-mail">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" v-model.trim="newOrder.phone" id="phone" placeholder="Telefono">
        </div>

        <strong class="m-2 d-inline-block">Seleziona il giorno e l'ora di ritiro</strong>

        <div class="form-group">
            <input type="date" class="form-control" v-model="newOrder.date" id="date" :min="currentDay">
        </div>

        <select class="form-control" v-model.trim="newOrder.hour" name="hour" id="hour">
            <option value="">Seleziona un orario</option>
            <option value="">12:00</option>
            <option value="">12:30</option>
            <option value="">13:00</option>
            <option value="">13:30</option>
            <option value="">14:00</option>
        </select>

        <button @click="sendOrder()" type="submit" class="btn btn-secondary mt-3 w-100">Invia</button>

        <h5 class="text-right p-3 text-muted">Totale ordine: <strong>€ {{price}}</strong></h5>
    </form>

  </section>
</template>

<script>
export default {
    name: 'CheckoutComp',

    props: {
        price: Number
    },

    data(){
        return{
            foodApi: '/api/foods',
            newOrder: {
                name: '',
                email: '',
                phone: '',
                date: '',
                hour: ''
            },

            currentDay: "",
            currentTime: "",
        }
    },

    methods: {

        sendOrder(){
            axios.post(this.foodApi, this.newOrder)
            .then((r) => {

            console.log(r.data)
            })
        },

        // Prendo la data attuale per oscurare le date antecedenti nel calendario

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

        getTime() {
                const today = new Date();
                const time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                this.currentTime = time;
                console.log(this.currentTime)
            }
        },

        created(){
            this.getDate()
            // this.getTime()
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
