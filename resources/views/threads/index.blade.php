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
                    <div class="card-header"><h1>@lang('everywhere.all_threads')</h1></div>

                    <div class="card-body">
                        @foreach ($threads as $thread)
                            <article>
                                <h4><a href="{{route('show_thread',['category' => $thread->category->slug, 'thread' => $thread->id])}}">{{$thread->title}}</a></h4>
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

@endsection
