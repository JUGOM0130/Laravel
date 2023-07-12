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
        <h1>EDIT</h1>

        {{ Form::open(['method' => 'put', 'route' => ['camp.update']]) }}
        {{ Form::token() }}
        {{ Form::hidden('id', $data->id) }}
        <div class="row">
            <div class="col mb-3">
                {{ Form::label('season_start', 'シーズン開始日', ['class' => 'form-label']) }}
                {{ Form::date('season_start', $data->season_start, ['class' => 'form-control']) }}
            </div>
            <div class="col mb-3">
                {{ Form::label('season_end', 'シーズン終了日', ['class' => 'form-label']) }}
                {{ Form::date('season_end', $data->season_end, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col">
                {{ Form::label('place_name', '名称', ['class' => 'form-label']) }}
                {{ Form::text('place_name', $data->place_name, ['class' => 'form-control']) }}
            </div>
            <div class="mb-3 col">
                {{ Form::label('address1', '住所', ['class' => 'form-label']) }}
                {{ Form::text('address1', $data->address1, ['class' => 'form-control']) }}
            </div>
            <div class="mb-3 col">
                {{ Form::label('comment', 'コメント', ['class' => 'form-label']) }}
                {{ Form::text('comment', $data->comment, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                {{ Form::label('season_A', 'トップシーズン料金', ['class' => 'form-label']) }}
                {{ Form::number('season_A', $data->season_A, ['class' => 'form-control']) }}
            </div>
            <div class="col">
                {{ Form::label('season_B', 'ハイシーズン料金', ['class' => 'form-label']) }}
                {{ Form::number('season_B', $data->season_B, ['class' => 'form-control']) }}
            </div>
            <div class="col">
                {{ Form::label('season_C', 'レギュラーシーズン料金', ['class' => 'form-label']) }}
                {{ Form::number('season_C', $data->season_C, ['class' => 'form-control']) }}
            </div>
            <div class="col">
                {{ Form::label('season_D', 'オフシーズン料金', ['class' => 'form-label']) }}
                {{ Form::number('season_D', $data->season_D, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="mb-3">
            {{ Form::checkbox('is_entry_car', '1', $data->is_entry_car, ['id' => 'is_entry_car']) }}
            {{ Form::label('is_entry_car', '車の乗り入れ') }}
        </div>
        <div class="mb-3">
            {{ Form::checkbox('is_reserve', '1', $data->is_reserve, ['id' => 'is_reserve']) }}
            {{ Form::label('is_reserve', '予約必要') }}
        </div>
        {{ Form::submit('更新', ['class' => 'btn btn-outline-primary']) }}
        {{ Form::close() }}
    </div>
</body>

</html>
