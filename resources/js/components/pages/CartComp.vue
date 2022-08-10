<template>
  <div>.

        <!-- riquadro carrello -->

    <div v-show="cart.length > 0" class="checkout">
        <div id="total">Totale: € {{totalPrice}}</div>
        <div id="counter">Quantità: {{counter}}</div>
        <span @click="cart = []" id="close">X</span>
    </div>

  </div>
</template>

<script>
export default {
    name: 'CartComp'
}
</script>

<style lang="scss" scoped>

</style>
