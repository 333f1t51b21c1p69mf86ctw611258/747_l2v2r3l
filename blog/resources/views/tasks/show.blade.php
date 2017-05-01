<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Task Information</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <span>Id:</span>
            <span>{{ $task->id }}</span>
        </div>
        <div>
            <span>Body:</span>
            <span>{{ $task->body }}</span>
        </div>
    </body>
</html>