<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Livewire</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <script defer type="javascript/text" src="{{ asset('js/app.js') }}"></script>
        @livewireStyles
    </head>
    <body class="antialiased">
        @yield('content')
        @livewireScripts
    </body>
</html>
