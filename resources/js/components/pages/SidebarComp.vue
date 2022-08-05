<template>
  <div>

    <ul class="list-unstyled">
        <h4 class="mb-4">Filtra per categoria</h4>
        <li @click="category.id == 4 ? showType = !showType : '',
            $emit('categorySlug', category.slug)"

            v-for="category in categories" :key="category.id"
            class="mb-3">

        <div class="check d-inline-block text-center">+</div> {{category.name}}
        </li>
    </ul>

    <ul v-show="showType == true" class="list-unstyled">

        <h4  class="mt-5 mb-4">Filtra per tipologia</h4>
        <li v-for="tipology in tipologies" :key="tipology.id" class="mb-3">
        <div class="check d-inline-block text-center">+</div> {{tipology.name}}

        </li>
    </ul>

  </div>
</template>

<script>
export default {
    name: 'SidebarComp',
    props: {
        categories: Array,
        tipologies: Array
    },

     data(){
        return{
            showType: false,
        }
    },
}
</script>

<style lang="scss" scoped>

    li{
        color: grey;
        font-weight: 900;
        cursor: pointer;
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
            border: 2px solid #29c4a9;
        }
    }

</style>
