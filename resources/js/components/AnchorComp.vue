<template>
  <div>
    <a href="#top" v-smooth-scroll>
        <div class="anchor">
          <i class="fa-solid fa-angle-up"></i>
        </div>
    </a>
  </div>
</template>

<script>
export default {
  name: 'AnchorComp'
}
</script>

<style lang="scss" scoped>

@import '../../sass/food/_variables.scss';

.anchor{
  position: fixed;
  bottom: 0;
  right: 70px;
  height: 35px;
  width: 50px;
  background-color: #484848;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 5px 5px 0 0;
  cursor: pointer;
  transition: all .4s;
  display: none;

  &:hover{
    background-color: $base-color;
  }

  i{
    color: #fff;
  }
}

</style>
