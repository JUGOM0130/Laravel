<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- iconCDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <style>
        a.icon {
            text-decoration: none;
            color: green;
        }
    </style>
    <title>Index</title>
</head>

<body>
    <h1>Link</h1>
    <a href="{{route('money.toroku')}}">Create</a>
    <div>

        <table>
            <tr>
                <th>詳細</th>
                <th>年</th>
                <th>月</th>
                <th>カテゴリNo</th>
                <th>カテゴリ名</th>
                <th>金額</th>
                <th>コメント</th>
            </tr>
            @foreach($list as $data)
            <tr>
                <td>
                    <span class="material-symbols-outlined">
                        <a class="icon" href={{route('money.show',['id'=>$data->id])}}>
                            edit_note
                        </a>
                    </span>
                </td>
                <td>{{$data->year}}</td>
                <td>{{$data->month}}</td>
                <td>{{$data->category}}</td>
                @if($data->category == '1')
                <td>電気</td>
                @endif
                @if($data->category == '2')
                <td>ガス</td>
                @endif
                @if($data->category == '3')
                <td>水道</td>
                @endif
                <td>{{$data->kingaku}}</td>
                <td>{{$data->comment}}</td>

            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
