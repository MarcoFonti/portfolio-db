<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- LOGO --}}
    <link rel="icon" href="{{ Vite::asset('resources/img/logo.png') }}">

    {{-- TITOLO --}}
    <title>{{ config('app.name', 'portfolio_db') }} | @yield('title')</title>

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">

        {{-- NAVBAR --}}
        @include('includes.navbar')

        {{-- CONTENUTO PRINCIPALE --}}
        <main class="">
            @yield('content')
        </main>
    </div>
</body>

</html>
