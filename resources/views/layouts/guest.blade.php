<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <button type=""></button>
    <div class="font-sans text-gray-900 antialiased">
        <p
            class=" bg-btn text-white hover:bg-opacity-90 focus:bg-opacity-90 active:bg-cta focus:ring-cta flex items-center px-4 py-2 rounded-md font-semibold text-xs capitalize tracking-widest focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150">

            TEST
        </p>
        <p class="bg-cta hover:bg-opacity-90 focus:bg-opacity-90 active:bg-cta focus:ring-cta text-white">

            lkjkaf
        </p>
        <p class="bg-tittle text-btn">

            lkjkaf
        </p>
        <i class="fa-solid fa-user"></i>
        {{ $slot }}
    </div>
</body>

</html>
