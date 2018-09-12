@extends('layouts.master')

@section('title')
    <title>{{ config('app.name', 'CookMe') }}</title>
@endsection

@section('content')
<!-- Slider main container -->
    <div class="container common-content-block">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>@lang('everywhere.all_threads')</h2>
                <div class="panel panel-default">
                    <div class="panel-body">

                        @foreach ($threads as $thread)
                            <article>
                                <h4 class="threads-header">
                                    <a href="{{route('show_thread',['category' => $thread->category->slug, 'thread' => $thread->id])}}">{{$thread->title}}</a>
                                    @if ($thread->replies_count > 0)
                                        <span class="cookme-comments">{{$thread->replies_count}}&nbsp;<i class="fa fa-comments-o" aria-hidden="true"></i></span>

                                    @else
                                        <span class="cookme-comments"><i class="fa fa-comments-o no-comments" aria-hidden="true"></i></span>
                                    @endif
                                </h4>
                                <div class="body">
                                    {{$thread->body}}
                                </div>
                            </article>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h2>@lang('everywhere.details')</h2>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')

@endsection
