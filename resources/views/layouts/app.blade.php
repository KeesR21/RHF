<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link
        href="http://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style-liberty.css') }}">


        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        @include('main-navigation')
        <x-jet-banner />

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

        @stack('modals')

        @livewireScripts
    </body>
</html>
