<template>
  <div>

    <div class="d-flex flex-wrap">

        <div v-for="food in foodsLoaded" :key="food.id" class="sushi col-3">
            <div class="card mb-4" style="width: 12rem; min-height: 27rem; border-radius: 5px;">

                <router-link :to="{name: 'detail', params:{slug: food.slug}}">
                    <img v-if="food.image" class="card-img-top" :src="food.image" :alt="food.name" :title="food.name">
                </router-link>

                <div class="card-body">

                    <h5 class="card-title">{{ food.name }}</h5>
                    <p v-if="food.description" class="card-text">{{ food.description }}</p>
                    <h6 class="card-text price">{{ food.price }} €</h6>

                </div>
            </div>
        </div>
        <div @click="loadMore()" class="load-more">Carica pi&uacute; prodotti</div>
    </div>

  </div>
</template>

<script>
export default {
    name: 'FoodComp',
    data(){
        return{
            length: 8,
        }
    },

    props: {
        foods: Array,
    },

    methods: {
        loadMore(){
            if (this.length > this.foods.length) return;
            this.length = this.length + 4;
        },
    },

    computed: {

        foodsLoaded() {
            return this.foods.slice(0, this.length);
        }
    },
}
</script>

<style lang="scss" scoped>
@import '../../../sass/food/_variables.scss';

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

</style>
