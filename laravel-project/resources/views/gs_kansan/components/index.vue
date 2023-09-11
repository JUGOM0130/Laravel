<script setup>
const HYOJUN_KAKAKU = 175;
let haioku = ref(HYOJUN_KAKAKU + 11);
let regular = ref(HYOJUN_KAKAKU);
let disel = ref(HYOJUN_KAKAKU - 30);

</script>
<template>
  <div>
    <h4>1000kmあたりのコスト</h4>
    <div>
      <input type="number">
    </div>
    <div id="flex">
      <div class="item">
        <h6>ハイオク</h6>
        <div>
          <label for="kingaku">￥</label>
          <input type="number" :value="haioku">
        </div>
      </div>
      <div class="item">
        <h6>レギュラー</h6>
        <div>
          <label for="kingaku">￥</label>
          <input type="number" :value="regular">
        </div>
      </div>
      <div class="item">
        <h6>ディーゼル</h6>
        <div>
          <label for="kingaku">￥</label>
          <input type="number" :value="disel">
        </div>
      </div>
    </div>
  </div>
</template>
<style scoped>
#flex {
  display: flex;
  flex-wrap: wrap;
}
.item {
  flex-grow: 1;
}
</style>