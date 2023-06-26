<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <h1>Link</h1>
    <a href="{{route('money.toroku')}}">Create</a>
    <div>

    <table>
        <tr>
            <th>ID</th>
            <th>年</th>
            <th>月</th>
            <th>カテゴリNo</th>
            <th>カテゴリ名</th>
            <th>金額</th>
            <th>コメント</th>
        </tr>
        @foreach($list as $data)
        <tr>
            <td>{{$data->id}}</td>
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
