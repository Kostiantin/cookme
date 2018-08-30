<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@yield('title')

<meta name="keywords" content="Popular Hotels,Top Hotels At the Best Destinations,Travel,Discover,Enjoy">
<meta name="description" content="LocalTells.com  - We Provide You An Ultimate Travel Experience">

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
@if($controller != 'ChatController')
<div id="app" style="display: none;"></div>
@endif
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
