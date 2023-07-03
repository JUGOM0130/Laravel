<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOW</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

    </style>
</head>

<body>
    <div class="container">
    <h1>SHOW</h1>

    <a href="{{route('money.index')}}">
        ← 一覧へ</a>

        <div class="mb-3">
            {{Form::label('year','年',["class"=>"form-label"])}}
            {{Form::text('inputText',$data->year,['id'=>'year','class'=>'form-control'])}}

        </div>
        <div class="mb-3">
            {{Form::label('month','月',["class"=>"form-label"])}}
            {{Form::text('inputText',$data->month,['id'=>'month','class'=>'form-control'])}}

        </div>
        <div class="mb-3">
            {{Form::label('category','カテゴリ',["class"=>"form-label"])}}
            {{Form::text('inputText',$data->category,['name'=>'category','class'=>'form-control'])}}
        </div>
        <div class="mb-3">
            {{Form::label('kingaku','金額',["class"=>"form-label"])}}
            {{Form::text('inputText',$data->kingaku,['name'=>'kingaku','class'=>'form-control'])}}
        </div>
        <div class="mb-3">
            {{Form::label('comment','コメント',["class"=>"form-label"])}}
            {{Form::textarea('comment',$data->comment,['class'=>'form-control'])}}
        </div>

    <!-- Formタグ生成 -->
    <div class="row">
        <div class="col">
            {{Form::open(['method'=>'get','route'=>['money.edit','id'=>$data->id]])}}
                @csrf
                @method('get')
                {{Form::submit('編集',['class'=>"btn btn-outline-primary"])}}
            {{Form::close()}}
        </div>
        <div class="col">
            {{Form::open(['method'=>'post','route'=>['money.destroy','id'=>$data->id]])}}
                @csrf
                @method('delete')
                {{Form::submit('削除',['class'=>"btn btn-outline-danger"])}}
            {{Form::close()}}
        </div>
    </div>
</div>
</body>

</html>
