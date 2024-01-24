<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Sono</title>
</head>
<body>
    <h1>Chi Sono</h1>
    <p>{{ $descrizione ?? 'Breve descrizione della persona' }}</p>
    <div>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('articoli') }}">Articoli</a>
        <a href="{{ route('chi_sono') }}">Chi Sono</a>
    </div>
</body>
</html>
