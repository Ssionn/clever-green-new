<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'resources/js/dashboard.js'
    ])

</head>

<body class="min-h-screen">
    <x-dashboard.navbar.navigation />

    <main>
        {{ $slot }}
    </main>

</body>

</html>
