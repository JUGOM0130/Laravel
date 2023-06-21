# 導入
## Installコマンド
[参考サイト](https://www.kagoya.jp/howto/cloud/container/docker_laravel/)
* root dirで```docker compose up -d```を実施すると起動します
  * サービスが起動してきます。（初回は時間がかかる）
* ```docker compose ps```コマンドでコンテナが正常に起動しているかを確認正常なら次へ進む

## Laravelアプリの作成
1. Dickerコンテナに入る```docker compose exec app bash```
2. Laravelアプリの作成```composer create-project --prefer-dist laravel/laravel laravel-project "10.*"```
3. storage dirの所有者をwww-dataに変更
   ```
   cd laravel-project
   chown www-data storage/ -R
   ```
4. localhost:8000へアクセス


## デフォルトからの変更点
* dbのport番号を50000番に変更

