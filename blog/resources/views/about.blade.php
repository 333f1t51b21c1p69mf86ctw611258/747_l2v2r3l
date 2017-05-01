<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>About us</h1>
        <h1>hello, <?= $name ?></h1>

        @if ($name == 'test')
            <ul>
                @foreach ($tasks as $task)
                <li>item: {{ $task }}</li>
                @endforeach
            </ul>
        @endif
    </body>
</html>