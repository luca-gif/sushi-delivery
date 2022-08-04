<template>
    <div class="container">
        <div class="image mb-3">
            <img :src="arrayShowFood.image" :alt="arrayShowFood.name" :title="arrayShowFood.name">
        </div>
        <span class="badge badge-danger">{{ arrayShowFood.category.name }}</span>
        <span v-if="arrayShowFood.type" class="badge badge-warning">{{ arrayShowFood.type.name }}</span>
    </div>
</template>

<script>
export default {
    name: 'FoodDetail',

    data(){
        return{
            foodApi: '/api/foods',
            arrayShowFood: null,
        }
    },

    methods: {
        showImage(){
            axios.get(this.foodApi + '/' + this.$route.params.slug)
            .then(r=>{

                this.arrayShowFood = r.data;
                console.log(this.arrayShowFood);
            })
            .catch(e=>{
                console.log(e);
            })
        }
    },

    mounted(){
        this.showImage();
    }
}
</script>

<style lang="scss" scoped>

.container{
    margin-top: 120px;
    text-align: center;

    img{
        width: 500px;
    }
}

</style>
