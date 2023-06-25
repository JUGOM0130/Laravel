<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
</head>

<body>
    <h1>INSERT</h1>
    <form action="{{ route('moneydata.store') }}" method="post">
        @csrf
        <div>
            <select name="month" id="month">
                @for($i=1; $i<=12; $i++) <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
            </select><label for="month">月</label>
        </div>
        <div>
            <label for="category">カテゴリ</label>
            <select name="category" id="category">
                <option value="1">電気代</option>
                <option value="2">ガス代</option>
                <option value="3">水道代</option>
            </select>
        </div>
        <div>
            <label for="kingaku">金額</label><input type="number" name="kingaku" id="kingaku">
        </div>
        <div>
            <label for="comment">コメント</label><textarea name="comment" id="comment" cols="30" rows="3"></textarea>
        </div>
        <input type="submit" value="登録">
    </form>

    <hr>
    <table>
        <tr>
            <th>ID</th>
            <th>月</th>
            <th>カテゴリ</th>
            <th>コメント</th>
        </tr>
        @foreach($list as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->month}}</td>
            <td>{{$data->category}}</td>
            <td>{{$data->kingaku}}</td>
            <td>{{$data->comment}}</td>
        </tr>
        @endforeach
    </table>


</body>

</html>
