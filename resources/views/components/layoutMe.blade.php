<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @livewireStyles

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Amine Triki | {{ $title }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans">

    <x-navbar />
    <main class="min-h-screen bg-gray-100">
        {{ $slot }}

    </main>
    <x-footer />
@livewireScripts

</body>

</html>
