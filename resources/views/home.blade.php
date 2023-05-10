<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    @vite('resources/js/app.js')

</head>

<body>

    <div class="container">
        <h1>prova</h1>

        @foreach ($movies as $movie)
        <div class="card">
            {{$movie->title}} - {{$movie->original_title}}
        </div>  
    @endforeach

    </div>

</body>

</html>