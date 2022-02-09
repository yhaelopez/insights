<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script defer type="javascript/text" src="{{ asset('js/app.js') }}"></script>

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
        <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">

        <title>{{ __('title') }} | @yield('title', 'Livewire')</title>
        <meta name="description" content="@yield('description', __('auth.description'))" />
        @yield('styles')
        @livewireStyles
    </head>
    <body class="antialiased">
        <main>
            @yield('main')
        </main>
        @livewireScripts
    </body>
</html>
