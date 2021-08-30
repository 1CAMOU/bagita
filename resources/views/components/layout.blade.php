<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel=stylesheet>

    <title>Blog</title>
</head>

<body class="bg-gray-50">
    <nav class="bg-gradient-to-tr from-primary-light to-primary-dark w-full h-32">
        <h1 class="">bagita</h1>
    </nav>
    {{ $slot }}
</body>

</html>