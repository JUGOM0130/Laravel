# Laravel

## 参考

[学習サイト](https://www.techpit.jp/courses/42/curriculums/45/sections/362/parts/1143)

## 導入(環境構築)

### Installコマンド

[参考サイト](https://www.kagoya.jp/howto/cloud/container/docker_laravel/)

* root dirで```docker compose up -d```を実施すると起動します
  * サービスが起動してきます。（初回は時間がかかる）
* ```docker compose ps```コマンドでコンテナが正常に起動しているかを確認正常なら次へ進む
* コンテナ停止方法```docker compose down```

### Laravelアプリの作成

1. Dickerコンテナに入る```docker compose exec app bash```
2. Laravelアプリの作成```composer create-project --prefer-dist laravel/laravel laravel-project "10.*"```
3. storage dirの所有者をwww-dataに変更

   ```cmd
   cd laravel-project
   chown www-data storage/ -R
   ```

4. localhost:8000へアクセス
5. 抜ける方法```exit```

### Laravelをgithubからcloneした時

* vendor配下は管理対象外のためinstallする

  ```cmd
  docker compose exec app bash
  cd laravel-project
  composer install
  ```

### php.iniなどを変更した時

* 再ビルド

  ```cmd
    docker compose down
    docker compose build
    docker compose up -d
  ```

### デフォルトからの変更点

* dbのport番号を50000番に変更
* nginxのport8888に変更

## Larabelについて

### ドキュメント

[公式　8.xドキュメント](https://readouble.com/laravel/8.x/ja/)

### マイグレーションの作成

* ファイルの場所とファイル名ルール
  * database/migrations
  * 2014_09_09_000000_create_users_table.php
  * 生成時間 + アクション名 + テーブル名　　となっている

* ファイル生成コマンド

  ```cmd
  php artisan make:migration create_テーブル名[複数系の単語にする]_table
  # php artisan make:migration create_users_table #usersテーブルの作成
  ```

* カラム追加

  ```cmd
  add_カラム名_to_users_table
  ```

* 実行コマンド

  ```cmd
  php artisan migrate
  ```

* ロールバックする

  ```cmd
  php artisan migrate:rollback
  ```

### マイグレーションの中身

* upとdown
  upが作成（実行）
  downが削除（元に戻す）

### migrationできない

* compose.ymlのDBコンテナ名をDB_HOSTに設定するroopBackアドレスだとNGかも
* phpに接続できてなかった（portが50000:3306だったのに対して、50000を指定していたしかしコマンドはコンテナ内部から実行になるので、3306で良かった模様）

## [学習サイト](https://b-risk.jp/blog/2022/08/laravel/#MVC-2)

### model作成

* modelの名前は「単数系」
* テーブル名は「複数系」
* ```php artisan make:model TodoList -mc```実行
* 3つのファイルが生成される
  * app/Http/Controllers/<color="orange">TodoListController.php</color>
  * app/Models/<color="orange">TodoList.php</color>
  * database/migrations/<color="orange">2023_06_22_000000_create_todo_lists_table.php</color>

* マイグレーションファイル追記
  
  ```php
  public function up()
  {
    Schema::create('todo_lists', function (Blueprint $table) {
      $table->id();
      $table->string('name', 100); //★追記
      $table->timestamps();
    });
  }
  ```

* マイグレーション実行　```php artisan migrate```
* ダミーデータの登録　```php artisan make:seeder TodoListSeeder```

* ```database/seeders/TodoListSeeder.php```　の編集
  
  ```php
  <?php
  namespace Database\Seeders;

  use Illuminate\Database\Console\Seeds\WithoutModelEvents;
  use Illuminate\Database\Seeder;
  use Illuminate\Support\Facades\DB; //追記

  class TodoListSeeder extends Seeder
  {
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
      DB::table('todo_lists')->insert(
        [
          [
            'name' => 'テスト1'
          ],
          [
            'name' => 'テスト2'
          ],
          [
            'name' => 'テスト3'
          ],
        ]
      );
    }
  }
  ```

* database/seeders/DatabaseSeeder.phpを編集

  ```php
  public function run()
  {
    $this->call([
      TodoListSeeder::class
    ]);
  }

  ```

* 実行　```php artisan db:seed --class=TodoListSeeder```

* これで用意が完了

### コントローラーを作成

* app\Http\Controllers\TodoListContoroller.phpを編集
  
  ```php
  <?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Models\TodoList;//追記

  class TodoListController extends Controller
  {
    public function index(Request $request)
    {
      $todo_lists = TodoList::all();

      return view('todo_list.index', ['todo_lists', $todo_lists]);
    }
  }

  ```

* ```$todo_lists = TodoList::all();```</br>このコマンドでDBからテーブルtodolistsにある全レコードを取得しています。</br>このモデルクラス「TodoList」を使うためには、スクリプトの先頭でuse文によりTodoListを読み込まないといけない点に注意してくだいさい。

* ```return view('todo_list.index', ['todo_lists' => $todo_lists]);```</br>
  テンプレートに変数「todo_lists」を渡しています。</br>
  viewメソッドの第一引数には、「どのビューファイルか」を指定します。</br>
  書き方は、view(‘フォルダ名.ファイル名’)となります。</br>
  また、ビューに値を渡すときは、このように変数名と値がペアになった連想配列を第2引数に設定します。

### Viewファイルを用意する
  
* ```resrouces/views/todo_list/index.blade.php```
* このファイルでは、さきほどコントローラーから渡された「todo_lists」を表示します。</br>
  そのためには、以下のように書きます。

```php
  <!DOCTYPE html>
  <html lang="ja">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>テスト</title>
  </head>

  <body>

      @if ($todo_lists->isNotEmpty())
          <ul>
              @foreach ($todo_lists as $item)
                  <li>
                      {{ $item->name }}
                  </li>
              @endforeach
          </ul>
      @endif

  </body>
  </html>
```

* LaravelではBladeテンプレートと言うものを使用する
* @マークから始まるものはBladeディレクティブといいBladeテンプレート内でスクリプトを書く際は、基本的にBladeディレクティブを使用します。もちろん、素のPHPを書くこともできます。
* 変数の出力は波括弧を２つ重ねて```{{ 変数 }}```のように記述します。

* ルーティング
  * ```routes/web.php```に追記

    ```php
    Route::get('/list', [TodoListController::class, 'index']);
    ```
  
  * ルーティングには下記の様に記載
    * ```Route::get( アドレス , [コントローラーの名前::class , メソッド名] );```
  
* ページへアクセス

* データを削除
  * seederファイルからレコードを削除したあとに
  * ```php artisan migrate:fresh --seed```

* 再びアクセスするとデータが消えているはず！
