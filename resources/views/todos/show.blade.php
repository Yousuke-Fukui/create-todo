<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $todo->name }}
        </h1>
        <div class="content">
            <div class="content__todo">
                <h3>範囲</h3>
                <p>{{ $todo->range}}</p>
            </div>
            <div class="content__todo">
                <h3>日付</h3>
                <p>{{ $todo->day}}</p>
            </div>
        </div>
        <div class="edit"><a href="/todos/{{ $todo->id }}/edit">edit</a></div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>