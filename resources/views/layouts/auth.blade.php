<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('auth.includes.seo')
        <script defer type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            html {
               height: 100%;
            }
            body {
                min-height: 100%;
            }
            main {
                min-height: 100%;
            }
        </style>
    </head>

    <body class="bg-ccdl-light-gray">
        <main>
            <div class="container-fluid bg-ccdl-light-gray h-100 py-5">
                <div class="container py-4">

                    <div class="row">
                        <div class="col-12">
                            @include('includes.messages')
                        </div>
                        <div class="col-12 text-center">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('storage/resources/logo.png') }}" alt="logo" class="mb-2">
                            </a>
                        </div>
                    </div>

                    @yield('main')

                </div>
            </div>
        </main>
    </body>
</html>
