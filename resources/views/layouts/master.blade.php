<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')


    <!-- Styles -->
    @include('layouts.css')

    @if($controller == 'IndexController' && $action == 'index')
        <link href="{{ asset('css/swiper.min.css') }}" rel="stylesheet">
    @endif
</head>
<body>
<div id="app" style="display: none;"></div>
@include('header')
@if($controller == 'IndexController' && $action == 'index')
    @yield('content')
@else
<div class="container">
    <div class="row">
        <div class="col-sm-8 s-main">
            @yield('content')
        </div>
        <div class="col-sm-4 s-sidebar">
            @include('sidebar')
        </div>

    </div>
</div>
@endif
@include('footer')

    <!-- Scripts -->

@include('layouts.scripts')

@yield('custom_js')
</body>
</html>
