<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>

<body>
    <h1>EDIT</h1>
    <form action="{{ route('moneydata.store') }}" method="post">
        @csrf
        <div>
            dd($data)

            <select name="year" id="year">
                <option value="2022">2022</option>
                <option value="2023">2023</option>
            </select>
            <label for="year">年</label>
        </div>
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

</body>

</html>
