<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>GOTO-INDEX</title>
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">シーズン開始</th>
                    <th scope="col">シーズン終了</th>
                    <th scope="col">TOP</th>
                    <th scope="col">HIGH</th>
                    <th scope="col">REGULAR</th>
                    <th scope="col">OFF</th>
                    <th scope="col">名称</th>
                    <th scope="col">住所</th>
                    <th scope="col">コメント</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($list as $d)
                    <tr>
                        <td><a href={{ route('camp.edit', ['id' => $d->id]) }}>{{ $d->id }}</a></td>
                        <td>{{ $d->season_start }}</td>
                        <td>{{ $d->season_end }}</td>
                        <td>{{ $d->season_A }}</td>
                        <td>{{ $d->season_B }}</td>
                        <td>{{ $d->season_C }}</td>
                        <td>{{ $d->season_D }}</td>
                        <td>{{ $d->place_name }}</td>
                        <td>{{ $d->address1 }}</td>
                        <td>{{ $d->comment }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('camp.create') }}">登録</a>
    </div>
</body>

</html>
