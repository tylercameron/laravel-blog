<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }
</style>
<body>

    <ul>
        @foreach ($tasks as $task)
            <a href="/tasks/{{$task->id}}">
                <li>{{ $task->body }}</li>
            </a>
        @endforeach
    </ul>
    
</body>
</html>