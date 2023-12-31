<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>TODO</title>
    </head>
    <body>
        <h1>TODO LIST</h1>
        <form action="/todos" method="POST">
            @csrf
            <div class="name">
                <h2>教材の名前</h2>
                <input type="text" name="todo[name]" placeholder="教材の名前"/>
            </div>
            <div class="range">
                <h2>勉強する範囲</h2>
                <input type="text" name="todo[range]" placeholder="勉強する範囲"/>
            </div>
             <div class="day">
                <h2>日付</h2>
                <input type="date" name="todo[day]"/>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>