<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('panel/assets/css/main/app.css') }}">
        <link rel="stylesheet" href="{{ asset('panel/assets/css/pages/auth.css') }}">
        <link rel="shortcut icon" href="{{ asset('panel/assets/images/logo/favicon.svg') }}" type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('panel/assets/images/logo/favicon.png') }}" type="image/png">
        <!-- Scripts -->
        @vite(['resources/js/app.js'])
    </head>
    <body>
        <div id="auth">
            <div class="row h-100">
                {{ $slot }}

                <div class="col-lg-7 d-none d-lg-block">
                    <div id="auth-right"></div>
                </div>
            </div>
        </div>
    </body>
</html>
