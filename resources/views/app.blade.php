<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Link-shortener</title>

    @vite(['resources/js/app.js'])
</head>
<body>
    <div id="app"></div>
    <noscript>
        <p>JavaScript required.</p>
    </noscript>
</body>
</html>
