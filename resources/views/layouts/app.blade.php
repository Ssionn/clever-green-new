<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gradient-to-b from-white to-[#2A7F62]">
    <header>
        <x-landingpage.navbar.navigation />
    </header>

    <main class="flex flex-col max-w-screen-xl mx-auto p-6 sm:p-6 md:p-4 lg:p-2 xl:p-0">
        {{ $slot }}
    </main>

    <footer>
        <x-landingpage.footer />
    </footer>
</body>

</html>
