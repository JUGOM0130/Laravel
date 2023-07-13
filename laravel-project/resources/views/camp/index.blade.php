<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CAMP-INDEX</title>
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">編集</th>
                    <th scope="col">TOP</th>
                    <th scope="col">名称</th>
                    <th scope="col">リンク</th>
                    <th scope="col">削除</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($list as $d)
                    <tr>
                        <td>
                            {{ Form::open(['method' => 'get', 'route' => ['camp.edit', 'id' => $d->id]]) }}
                            {{ Form::submit('編集', ['class' => 'btn btn-outline-primary']) }}
                            {{ Form::close() }}
                            <!--
                            <a href={{ route('camp.edit', ['id' => $d->id]) }}>{{ $d->id }}</a></td>
                            -->
                        <td>{{ $d->season_A }}</td>
                        <td>{{ $d->place_name }}</td>
                        <td><a href={{ $d->url }}>リンク</a></td>
                        <td>
                            {{ Form::open(['method' => 'delete', 'route' => ['camp.destroy', 'id' => $d->id]]) }}
                            {{ Form::submit('削除', ['class' => 'btn btn-outline-danger']) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('camp.create') }}">登録</a>
    </div>
</body>

</html>
