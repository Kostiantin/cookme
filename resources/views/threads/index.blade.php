@extends('layouts.master')

@section('title')
    <title>{{ config('app.name', 'CookMe') }}</title>
@endsection

@section('content')
<!-- Slider main container -->
    <div class="container common-content-block">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Threads</div>

                    <div class="card-body">
                        @foreach ($threads as $thread)
                            <article>
                                <h4><a href="/threads/{{$thread->id}}">{{$thread->title}}</a></h4>
                                <div class="body">
                                    {{$thread->body}}
                                </div>
                            </article>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
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
