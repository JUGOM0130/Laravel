<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>

<body>
    <h1>EDIT</h1>
    {{Form::open(['method'=>'post','route'=>['money.update']])}}
    @csrf
    @method('put')

    <div>
        {{Form::select('year',["2022"=>2022,"2023"=>2023,"2024"=>2024],$data->year,['id'=>'year'])}}
        {{Form::label('year','年')}}
    </div>
    <div>
        {{Form::select('month',["1"=>1,"2"=>2,"3"=>3,"4"=>4,"5"=>5,"6"=>6,"7"=>7,"8"=>8,"9"=>9,"10"=>10,"11"=>11,"12"=>12],$data->month,['id'=>'month'])}}
        {{Form::label('month','月')}}
    </div>
    <div>
        {{Form::select('category',["1"=>"電気代","2"=>"ガス代","3"=>"水道代"],$data->category,['id'=>'category'])}}
        {{Form::label('category','月')}}
    </div>
    <div>
        {{Form::label('kingaku','金額')}}
        {{Form::input('number','kingaku',$data->kingaku,['id'=>'kingaku'])}}
        {{Form::label('kingaku','円')}}
    </div>
    <div>
        {{Form::label('comment',"コメント")}}
        {{Form::textarea('comment',$data->comment)}}
    </div>
    {{Form::hidden('id', $data->id)}}
    {{Form::submit("更新",['class'=>'btn'])}}
    {{Form::close()}}
</body>

</html>
