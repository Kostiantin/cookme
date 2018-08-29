@extends('layouts.master')

@section('title')
    <title>{{ config('app.name', 'CookMe') }}</title>
@endsection

@section('content')
    <div class="container common-content-block">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{$thread->title}}</h2>
                <div class="card">
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
        @if (count($thread->replies) > 0)
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h3>@lang('everywhere.recent_comments')</h3>
                    @foreach($thread->replies as $reply)
                        @include('threads.reply')
                    @endforeach
                </div>
            </div>
        @endif

        @if (auth()->check())
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h3>@lang('everywhere.give_your_comment')</h3>
                    <form method="POST" action="{{route('add_reply_to_thread', ['thread' => $thread->id])}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <textarea name="body" id="body" class="form-control" placeholder="Have something to say?" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-medium btn-info">@lang('everywhere.post')</button>
                        </div>
                    </form>
                </div>
            </div>
        @else
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p>@lang('everywhere.please')Please <a href="{{route('login')}}">@lang('everywhere.sign_in')</a> @lang('everywhere.to_participate_in_discussion').</p>
                </div>
            </div>
        @endif
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
