<script setup>
/**
 *
 * url: http://localhost:8888/vue/nenpi
 * 計算
 *
 * disel comvert to regular
 * regular 175
 * disel 145
 *
 * d = 30km/l
 * 145 / 30 = 4.833円/km
 * 175 - 145 = 30 / 4.833 = 6.21
 * d + 6.21 = 36.21km/l
 *
 * d = 1000 / 30 = 33.33 * 145 = 4833
 * r = 1000 / 30 = 33.33 * 175 = 5833
 * r - d = 1000
 */
import { ref,onMounted } from "vue/dist/vue.esm-bundler";
let nenpi = ref(0);
let def_pri = ref(0);
let regular = ref(0);
let haioku = ref(0);
let disel = ref(0);

/*diselNENPI */
let d_nenpi = ref(0);
let d_to_r_nenpi = ref(0);

/*compaire */
let a = ref(0);
let b = ref(0);
let ab_sa = ref(0);

/**
 * 標準価格変更
 */
const defaultPriceSet = () =>{
  const DEFAULT = def_pri.value;
  regular.value = DEFAULT;
  haioku.value = DEFAULT + 11;
  disel.value = DEFAULT - 30;
}

/**
 * ディーゼルからレギュラー換算計算
 */
const d_to_r_calc = () =>{
  let d = Number(disel.value);
  let dnen = Number(d_nenpi.value);
  let kmpl = d / dnen;
  let sa = Number(regular.value) - Number(disel.value);
  let amari = sa / kmpl;
  console.log(`d=${d} dnen=>${dnen} kmpl=>${kmpl} sa=>${sa} amari=>${amari}`);
  let ans = dnen + amari;
  ans = (Math.round(ans * 100))/100
  d_to_r_nenpi.value = ans;
}

/**
 * 燃費比較計算
 */
const compaire = ()=>{
  if(a.value != 0 && b.value != 0){
    let a_gs = 1000 / a.value * def_pri.value;
    let b_gs = 1000 / b.value * def_pri.value;
    const SA = Math.abs(a_gs - b_gs);
    ab_sa.value = (Math.round(SA * 100))/100; 
    console.log(`a_gs=>${a_gs} b_gs=>${b_gs}`);
  }
}

/**
 * マウント時処理
 */
onMounted(()=>{
  const DEFAULT = 175;
  def_pri.value = DEFAULT;
  nenpi.value = 12;
  defaultPriceSet()
});

</script>
<template>
  <div>
    <div class="flex">
      <div class="item">
        <label for="r">REGULAR:￥{{ regular }}</label>
      </div>
      <div class="item">
        <label for="h">HAIOKU:￥{{ haioku }}</label>
      </div>
      <div class="item">
        <label for="d">DISEL:￥{{ disel }}</label>
      </div>
    </div>
    <div>
      <label for="nenpi">NENPI:</label><input type="number" v-model="nenpi" name="nenpi"><label for="nenpi">km/l</label>
    </div>
    <div>
      <label for="def_pri">PRICE</label><input type="number" v-model="def_pri" v-on:change="defaultPriceSet"><label for="def_pri">円</label>
    </div>
    <div>
      <h6>DISEL > REGULAR 換算</h6>
      <div>
        <label for="d_nenpi">NENPI:</label><input type="number" v-model="d_nenpi" name="d_nenpi" v-on:change="d_to_r_calc"><label for="d_nenpi">km/l</label>
      </div>
      <p>{{ d_to_r_nenpi }}km/l</p>
    </div>
    <div>
      <h6>NENPI比較</h6>
      <div>
        <label for="a">A:</label>
        <input type="number" name="a" v-model="a" @change="compaire">
        <label for="a">km/l</label>
      </div>
      <div>
        <label for="b">B:</label>
        <input type="number" name="b" v-model="b" @change="compaire">
        <label for="b">km/l</label>
      </div>
      <div>
        <p>{{ ab_sa }}</p>
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
  flex-grow: 0;
  margin-right: 5px;
}
</style>