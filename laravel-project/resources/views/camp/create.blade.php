<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
{{Form::open(['method'=>'post','route'=>['camp.store']])}}
{{Form::token()}}
    <div>
        {{Form::label('season_start','シーズン開始日')}}
        {{Form::date('season_start')}}
    </div>
    <div>
        {{Form::label('season_end','シーズン終了日')}}
        {{Form::date('season_end')}}
    </div>
    <div>
        {{Form::label('place','場所')}}
        {{Form::text('place',"")}}
    </div>
    <div class="row">
    <div class="col">
        {{Form::label('season_A','トップシーズン料金')}}
        {{Form::number('season_A',0)}}
    </div>
    <div class="col">
        {{Form::label('season_B','ハイシーズン料金')}}
        {{Form::number('season_B',0)}}
    </div>
    <div class="col">
        {{Form::label('season_C','レギュラーシーズン料金')}}
        {{Form::number('season_C',0)}}
    </div>
    <div class="col">
        {{Form::label('season_D','オフシーズン料金')}}
        {{Form::number('season_D',0)}}
    </div>
</div>
    <div>
        {{Form::checkbox('is_entry_car', '1', false,['id'=>"is_entry_car"])}}
        {{Form::label('is_entry_car','車の乗り入れ')}}
    </div>
    <div>
        {{Form::checkbox('is_reserve', '1', false,['id'=>"is_reserve"])}}
        {{Form::label('is_reserve','予約必要')}}
    </div>
{{Form::submit('登録',['class'=>'btn btn-outline-primary'])}}
{{Form::close()}}
</div>
</body>
</html>
