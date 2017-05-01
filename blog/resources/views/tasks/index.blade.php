<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Task List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Task list</h1>
        <ul>
            @foreach ($tasks as $task)
            <li>
                <a href="/tasks/{{ $task->id }}">Item {{ $task->id }}: {{ $task->body }}</a>
            </li>            
            @endforeach
        </ul>
    </body>
</html>