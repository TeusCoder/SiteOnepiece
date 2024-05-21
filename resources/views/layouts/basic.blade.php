<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "{{ asset('css/base.css') }}">
    </head>
    <header>
        
    </header>
    <body>
        @include('layouts.header')
        @yield('body')
    </body>
</html>
