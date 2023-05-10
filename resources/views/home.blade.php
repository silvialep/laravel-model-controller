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
        <h1 id="main-title">Movies</h1>

        <div id="card-container">
            @foreach ($movies as $movie)
            <div class="card single-card">
                <div>Titolo: <strong>{{$movie->title}}</strong> <small>({{$movie->original_title}})</small></div>
                <div>Data di uscita: {{$movie->date}}</div>
                <div>Nazionalità: {{$movie->nationality}}</div>
                <div>Voto medio: {{$movie->vote}}</div>
            </div>  
            @endforeach
        </div>

    </div>

</body>

</html>