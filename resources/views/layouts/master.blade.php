<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@yield('title')

<!-- Styles -->
@include('layouts.css')

<!-- Swiper for index page styles -->
@if($controller == 'IndexController' && $action == 'index')
    <link href="{{ asset('css/swiper.min.css') }}" rel="stylesheet">
@endif

</head>
<body>
@include('layouts.facebook')
@if(Session::has('message'))
    <div class="custom-alert">{{ Session::get('message') }}</div>
@endif
<div id="app" style="display: none;"></div>
@include('header')
@if($controller == 'IndexController' && $action == 'index')
    @yield('content')
@else

    @yield('sidebar')

    @yield('content')

@endif


<!-- Scripts -->
@include('layouts.scripts')
@include('footer')

@yield('custom_js')
</body>
</html>
