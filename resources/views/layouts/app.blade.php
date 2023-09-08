<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <style>
        a {

            text-decoration: none !important;
        }
    </style>
</head>

<body>
    <div class="container min-w-full min-h-screen">
        <div class="row min-h-screen">
            <div class="col-2">
                <x-sidebar />
            </div>
            <div class="col-10">
                <div class="row">
                    @livewire('navbar', ['title' => trim(View::yieldContent('title', 'Default Title'))])
                </div>
                <main class="row">
                    {{ $content }}
                </main>

            </div>
        </div>


        @stack('modals')
        @wireUiScripts
        @livewireScripts
</body>

</html>
