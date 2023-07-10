# a

## モデル作成

### モデル名は単語区切りで大文字にする

* マイグレーション　-m
* コントローラー -c
* シーダー -s
* CRUDメソッドを生成 -r

```cmd
php artisan make:model --migration --controller --seed --resource
php artisan make:model -mcsr

php artisan make:model CampFire -mcsr
```
