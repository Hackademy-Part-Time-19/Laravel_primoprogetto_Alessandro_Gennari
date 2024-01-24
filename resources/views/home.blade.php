<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>{{ $siteTitle ?? 'Nome del Sito' }}</h1>
    <p>Contenuto della pagina home</p>
    <div>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('articoli') }}">Articoli</a>
        <a href="{{ route('chi_sono') }}">Chi Sono</a>
    </div>
</body>
</html>
