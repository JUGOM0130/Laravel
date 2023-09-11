<script setup>
import { ref } from "vue/dist/vue.esm-bundler";
let str = ref("aaa.vue");
</script>
<template>
  <div>
    <ul>
      <li>{{ str }}</li>
      <li>
        エイリアスに..を使いたくない
        <ul>
          <li>
            <a href="https://zenn.dev/k_u_0615/articles/34b7f7d4a79e52"
              >リンク</a
            >
          </li>
          <li>vite.config.jsで設定をする</li>
          <li>しかし使用するとvueファイルが更新されない。。。</li>
          <li>
            解決　vite.config.js →　"@components@": path.join(__dirname,
            'resources/views/vue_test/components/'),
          </li>
          <li>
            どうやらviteconfigにフルパスで記載する必要がある？＋最後が「/」で終わっている必要があるみたい
          </li>
          <li>
            解決ページ 　→　<a
              href="https://chaika.hatenablog.com/entry/2022/05/14/083000"
              >こちら</a
            >
          </li>
        </ul>
      </li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
    <hr />
    <div>
      <ul>
        <li>git cloneしたあと</li>
        <li>npm install</li>
        <li>npm run dev</li>
        <li>
          npm run dev -- --force
          ←キャッシュが残っている場合キャッシュがクリアされる
        </li>
      </ul>
    </div>
    <h1>h1です</h1>
  </div>
</template>
<style scoped>
h1 {
  color: green;
}
</style>
