# 導入
## Installコマンド
[参考サイト](https://www.kagoya.jp/howto/cloud/container/docker_laravel/)
* root dirで```docker compose up -d```を実施すると起動します
  * サービスが起動してきます。（初回は時間がかかる）
* ```docker compose ps```コマンドでコンテナが正常に起動しているかを確認正常なら次へ進む
* コンテナ停止方法```docker compose down```

## Laravelアプリの作成
1. Dickerコンテナに入る```docker compose exec app bash```
2. Laravelアプリの作成```composer create-project --prefer-dist laravel/laravel laravel-project "10.*"```
3. storage dirの所有者をwww-dataに変更
   ```
   cd laravel-project
   chown www-data storage/ -R
   ```
4. localhost:8000へアクセス
5. 抜ける方法```exit```

## Laravelをgithubからcloneした時
* vendor配下は管理対象外のためinstallする
  ```
  docker compose exec app bash
  cd laravel-project
  composer install
  ```

## php.iniなどを変更した時
* 再ビルド
```
  docker compose down
  docker compose build
  docker compose up -d
```

## デフォルトからの変更点
* dbのport番号を50000番に変更
* nginxのport8888に変更

# Larabelについて
## ドキュメント
[公式　8.xドキュメント](https://readouble.com/laravel/8.x/ja/)
## マイグレーションの作成
* ファイルの場所とファイル名ルール
  database/migrations
  2014_09_09_000000_create_users_table.php
  生成時間　　　　　　　アクション名　テーブル名　　となっている
* ファイル生成コマンド
  ```php artisan make:migration create_テーブル名[複数系の単語にする]_table```
  カラム追加：```add_カラム名_to_users_table```
* 実行コマンド
  全ファイルが実行される：```php artisan migrate```
### マイグレーションの中身
* upとdown
  upが作成（実行）
  downが削除（元に戻す）

### migrationできない
```
  php artisan config:cache#
  php artisan migrate
```
