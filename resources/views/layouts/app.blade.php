<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"> --}}
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                @if (isset($index))
                    {{ $index }}
                @elseif (isset($shop))
                    {{ $shop }}
                @endif
            </main>
        </div>
    </body>
</html>
