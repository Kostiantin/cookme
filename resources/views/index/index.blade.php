@extends('layouts.app')

@section('content')
        <!-- Slider main container -->
<div class="swiper-container home-slider">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <div data-background="{{ asset('img/home_slider/image1.jpg') }}" class="swiper-lazy">

            </div>
        </div>
        <div class="swiper-slide">
            <div style="background-image:url('{{ asset('img/home_slider/image2.jpg') }}')" class="swiper-lazy swiper-lazy-loaded">

            </div>
        </div>
        <div class="swiper-slide">
            <div style="background-image:url('{{ asset('img/home_slider/image3.jpg') }}')" class="swiper-lazy swiper-lazy-loaded">

            </div>
        </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

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
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination'
        }
    });
</script>
@endsection
