@extends('layouts.master')

@section('title')
    <title>{{$thread->title}}</title>
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
                    <form method="POST" action="{{route('add_reply_to_thread', ['category' => $thread->category->slug, 'thread' => $thread->id])}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <textarea name="body" id="body" class="form-control" rows="5"></textarea>
                        </div>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                            <button class="btn btn-medium btn-info">@lang('everywhere.post')</button>
                        </div>
                    </form>
                </div>
            </div>
        @else
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p>@lang('everywhere.please') <a href="{{route('login')}}">@lang('everywhere.sign_in')</a> @lang('everywhere.to_participate_in_discussion').</p>
                </div>
            </div>
        @endif
    </div>
@endsection

@section('custom_js')

@endsection
