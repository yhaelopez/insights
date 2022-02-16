<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('app.includes.seo')

        <script defer type="text/javascript" src="{{ asset('js/app.js') }}"></script>

        <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/sidebar.css') }}">

        @yield('css')
    </head>
    <body class="d-flex flex-column min-vh-100 bg-ccdl-light-gray">

        @include('app.includes.header')

        <main>
            <div class="container-fluid">
                <div class="row">

                    @include('includes.sidebar')

                    <div class="col-md-9 ms-sm-auto col-lg-10 py-3 px-md-4">
                        @include('includes.messages')
                        @yield('main')
                    </div>

                </div>
            </div>
        </main>

        @yield('js')

    </body>
</html>
