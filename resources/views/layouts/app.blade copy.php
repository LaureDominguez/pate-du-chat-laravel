<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
        @if (isset($head))
            {{ $head }}
        @endif
    </head>
    
    <body>
        <div>
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header>
                    {{ $header }}
                </header>
            @endif

            <!-- Page Content -->
            <main>
                @if (isset($main))
                    @if (isset($admin) && Auth::user() && Auth::user()->is_admin)
                        {{$admin}}
                    @endif
                    {{ $main }}
                @endif
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
