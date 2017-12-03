@extends('layouts.app')

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
                      <a class="slider-link" href="#">
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
                        <a class="slider-link" href="#">
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
                        <a class="slider-link" href="#">
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
                        <a class="slider-link" href="#">
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
<div class="container">
    <div class="row">

    </div>
</div>
<script src="{{ asset('js/swiper.min.js') }}"></script>

<script>
    var mySwiper = new Swiper ('.swiper-container', {
        lazy: true,
        preloadImages: true,
        loadPrevNextAmount: 2,
        loadPrevNext: true,
        speed: 1100,
        autoplay: {
            delay: 8000
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

<section class="middle-content">

</section>
@endsection
