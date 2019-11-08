<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <!-- <h1>hjhj</h1> -->
    <ul>
        @foreach ($tasks as $task)
            <li>{{$task}}</li>
        @endforeach;
    </ul>

    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>