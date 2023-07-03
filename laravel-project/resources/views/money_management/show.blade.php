<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOW</title>
</head>

<body>
    <h1>SHOW</h1>

    <a href="{{route('money.index')}}">
        ← 一覧へ</a>
    <div>
        <div>
            {{Form::text('inputText',$data->year,['name'=>'year'])}}
            <label for="year">年</label>
        </div>
        <div>
            {{Form::text('inputText',$data->month,['name'=>'month'])}}
            <label for="year">月</label>
        </div>
        <div>
            <label for="category">カテゴリ：</label>
            {{Form::text('inputText',$data->category,['name'=>'category'])}}
        </div>
        <div>
            <label for="kingaku">金額：</label>
            {{Form::text('inputText',$data->kingaku,['name'=>'kingaku'])}}
        </div>
        <div>
            <label for="comment">コメント</label>
            {{Form::textarea('comment',$data->comment)}}
        </div>
    </div>
    <!-- Formタグ生成 -->
    {{Form::open(['method'=>'post','route'=>['money.destroy','id'=>$data->id]])}}
    @csrf
    @method('delete')
    {{Form::submit('削除')}}
    {{Form::close()}}

    {{Form::open(['method'=>'post','route'=>['money.edit','id'=>$data->id]])}}
    @csrf
    @method('post')
    {{Form::submit('編集')}}
    {{Form::close()}}
</body>

</html>
