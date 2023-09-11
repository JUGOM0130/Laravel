<script setup>
const HYOJUN_KAKAKU = 175;
let haioku = ref(HYOJUN_KAKAKU + 11);
let regular = ref(HYOJUN_KAKAKU);
let disel = ref(HYOJUN_KAKAKU - 30);

/**
 * 計算
 * 
 * disel comvert to regular
 * regular 175
 * disel 145
 *
 * d = 30km/l
 * 145 / 30 = 4.833
 * 175 - 145 = 30 / 4.833 = 6.21
 * d + 6.21 = 36.21km/l
 * 
 * d = 1000 / 30 = 33.33 * 145 = 4833
 * r = 1000 / 30 = 33.33 * 175 = 5833
 * r - d = 1000
 */
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