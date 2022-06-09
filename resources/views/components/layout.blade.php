<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokedex</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body.classe > div{
            background-color: #000
        }
        </style>
</head>
<body class="bg-dark bg-gradient classe">
    <div style="heigth:100vh">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand text-light" href="{{ route('pokemon.index') }}">Home</a>
            </div>
        </nav>
        <div class="container">
            <h1 class="text-light">{{ $title }}</h1>
            {{ $slot }}
        </div>
    </div>
</body>
</html>
