<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='todos'>
            <a href='/todos/create'>create</a>
            @foreach ($todos as $todo)
          
            <h2 class='title'>
                <a href="/todos/{{ $todo->id }}">{{ $todo->name }}</a>
                </h2>
                <div class='todo'>
                    <h2 class='title'>{{ $todo->date }}</h2>
                    <p class='body'>{{ $todo->range }}</p>
                    @if($todo->achievement)
                    <p>達成済み</p>
                    @else
                    <p>未達成</p>
                    @endif
                     <form action="/todos/{{ $todo->id }}" id="form_{{ $todo->id }}" method="post">
                         @csrf
                         <button type="submit">achievement</button>
                         </form>
                </div>
            @endforeach
            </div>
        <div class='paginate'>
            {{ $todos->links() }}
        </div>
    </body>
</html>