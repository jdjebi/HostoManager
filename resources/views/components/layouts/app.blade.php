<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HostoManager') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased bg-gray-100">

    <x-jet-banner />

    <div>
        @livewire('navigation-menu')
    </div>

    <div class="flex flex-row flex-wrap h-screen"> 
        <x-menus.sidebar/>
        <div class="bg-gray-100 flex-1 p-6">
            {{ $slot }}
        </div>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>