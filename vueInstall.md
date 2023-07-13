# vueの導入方法

## 参考サイト
[こちら](https://blog.capilano-fw.com/?p=10747)

## 導入方法
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

