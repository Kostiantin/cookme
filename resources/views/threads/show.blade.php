@extends('layouts.master')

@section('title')
    <title>{{ config('app.name', 'CookMe') }}</title>
@endsection

@section('content')
    <div class="container common-content-block">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$thread->title}}</div>

                    <div class="card-body">

                        <article>
                            <div class="body">
                                {{$thread->body}}
                            </div>
                        </article>
                        <hr>

                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($thread->replies as $reply)
                    <div class="card">
                        <div class="card-header">{{$reply->created_at->diffForHumans()}} by <a href="#">{{$reply->user->name}}</a></div>
                        <div class="card-body">

                            <article>
                                <div class="body">
                                    {{$reply->body}}
                                </div>
                            </article>
                            <hr>

                        </div>
                    </div>
                @endforeach
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
