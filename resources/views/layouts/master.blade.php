<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @section('title')
        <title>{{ config('app.name', 'Laravel') }}</title>
    @show

<!-- Scripts -->
    {{--<script src="/js/manifest.js"></script>--}}
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{mix('css/animate.css')}}">
    <link rel="stylesheet" href="{{mix('css/pe-icons.css')}}">
    <link rel="stylesheet" href="{{mix('css/style.css')}}">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
<div id="app">
    <div id="preloader"></div>
    @include('layouts.header')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
</div>
<script src="{{ asset('js/plugins.js') }}" defer></script>
<script src="{{ asset('js/jquery.prettyPhoto.js') }}" defer></script>
<script src="{{ asset('js/jquery.isotope.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('js/init.js') }}" defer></script>
</body>
</html>
