<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "{{ asset('css/base.css') }}">
        <link rel="stylesheet" href="{{asset('css/formularioContato.css')}}">
        <link rel="stylesheet" href="{{asset('css/formPersonagem.css')}}">
        <link rel="stylesheet" href="{{asset('css/card.css')}}">
    </head>
    <body>
        @include('layouts.header')
        <div class="content">
            @yield('content')
        </div>
    </body>
</html>
