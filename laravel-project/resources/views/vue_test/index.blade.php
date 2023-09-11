<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memo</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    
</head>
<body>
    <div id="app"></div>
    @vite(['resources/css/vue_test/app.css', 'resources/js/vue_test/app.js'])
</body>
</html>