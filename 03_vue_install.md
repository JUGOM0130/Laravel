# Pluginの導入方法

## Vue

### 参考サイト
[こちら](https://blog.capilano-fw.com/?p=10747)

### 導入方法
1. 
```cmd
npm install
```

2. パッケージのインストール
```cmd
npm i @vitejs/plugin-vue --save-dev
```

3. インストールしただけでは、このvue用プラグインは有効にならないのでvite.config.jsを編集

```js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
        ]),
        vue(),
    ],
});
```

## fontawesome

### 参考サイト
[こちら](https://qiita.com/miyamotok0105/items/e147de69112a4708505e);

### 導入方法
1. 
```cmd
npm install @fortawesome/fontawesome-free
```
2. app.cssに下記追加
```css
@import "@fortawesome/fontawesome-free/css/all.css";
```
3. 下記が使える
```html
<i class="fa-solid fa-cart-shopping"></i>
```

## sass
### 参考サイト
[こちら](https://next-code.jp/blog/tech/php/laravel/laravel9%E3%80%80vite%E3%81%A7scss%E3%82%92%E4%BD%BF%E3%81%86%E6%96%B9%E6%B3%95/)
### 導入

