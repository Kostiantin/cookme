@extends('layouts.master')

@section('title')
    <title>{{ config('app.name', 'CookMe') }}</title>
@endsection

@section('content')
<!-- Slider main container -->
<div class="swiper-container home-slider">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <div data-background="{{ asset('img/home_slider/image1.jpg') }}" class="swiper-lazy">
              <div class="slide-caption">
                  <div class="slide-caption-content">
                      <p class="c-text">
                          @lang('everywhere.have_cooking_questions')
                      </p>
                      <a class="slider-link" href="{{route('chat')}}">
                          @lang('everywhere.ask_chef')
                      </a>
                  </div>
              </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div style="background-image:url('{{ asset('img/home_slider/image2.jpg') }}')" class="swiper-lazy swiper-lazy-loaded">
                <div class="slide-caption">
                    <div class="slide-caption-content">
                        <p class="c-text">
                            @lang('everywhere.simple_products_delicious_diches')
                        </p>
                        <a class="slider-link" href="{{route('recipes','simple')}}">
                            @lang('everywhere.check_recipes')
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div style="background-image:url('{{ asset('img/home_slider/image3.jpg') }}')" class="swiper-lazy swiper-lazy-loaded">
                <div class="slide-caption">
                    <div class="slide-caption-content">
                        <p class="c-text">
                            @lang('everywhere.meat_cuisine')
                        </p>
                        <a class="slider-link" href="{{route('recipes','meat')}}">
                            @lang('everywhere.cook_me')
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div style="background-image:url('{{ asset('img/home_slider/image4.jpg') }}')" class="swiper-lazy swiper-lazy-loaded">
                <div class="slide-caption">
                    <div class="slide-caption-content">
                        <p class="c-text">
                            @lang('everywhere.healthy_breakfast_recipes')
                        </p>
                        <a class="slider-link" href="{{route('recipes','breakfast')}}">
                            @lang('everywhere.try_it')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
    <div id="social-menu">
        <ul>
            <li>
                <a target="_blank" href="#" class="fb"></a>
            </li>
            <li>
                <a target="_blank" href="#" class="lin"></a>
            </li>
            <li>
                <a target="_blank" href="#" class="twt"></a>
            </li>
        </ul>
    </div>
</div>
<div class="what-we-do">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-content index-text-content">
                <h2>@lang('everywhere.what_we_do')</h2>
                <p>@lang('everywhere.want_to_unite'). @lang('everywhere.here_you_can')</p>
            </div>
        </div>
    </div>
</div>
<section class="middle-content">
    Recently Discussed Topics
</section>
<section class="middle-content">
    Recently Joined Users
</section>
@endsection

@section('custom_js')
    <script src="{{ asset('js/swiper.min.js') }}"></script>

    <script>
        var mySwiper = new Swiper ('.swiper-container', {
            lazy: true,
            preloadImages: true,
            loadPrevNextAmount: 2,
            loadPrevNext: true,
            speed: 1100,
            autoplay: {
                delay: 10000
            },
            // Optional parameters
            direction: 'vertical',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            }
        });
    </script>
@endsection
