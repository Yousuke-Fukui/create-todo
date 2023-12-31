<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>TODO</title>
    </head>
    <body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/todos/{{ $todo->id }}" method="TODO">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='todo[title]' value="{{ $todo->title }}">
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <input type='text' name='todo[body]' value="{{ $todo->body }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
</body>
</html>