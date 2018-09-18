@extends('layouts.master')

@section('title')
    <title>{{$thread->title}}</title>
@endsection

@section('content')
    <div class="container common-content-block">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{$thread->title}}</h2>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <article>
                            <div class="body">
                                {{$thread->body}}
                            </div>
                        </article>
                        <hr>

                    </div>
                </div>
                @if (count($thread->replies) > 0)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>@lang('everywhere.recent_comments')</h3>
                            @foreach($replies as $reply)
                                @include('threads.reply')
                            @endforeach
                            {{$replies->links()}}
                        </div>
                    </div>

                @endif

                @if (auth()->check())
                    <div class="panel panel-default">
                        <div class="panel-body">
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
                    <div class="panel panel-default">
                        <div class="panel-body">
                            @lang('everywhere.please') <a href="{{route('login')}}">@lang('everywhere.sign_in')</a> @lang('everywhere.to_participate_in_discussion').
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-md-4">
                <h2>@lang('everywhere.details')</h2>
                <div class="panel panel-default sidebar-thread-details">
                    <div class="panel-body">
                        <ul>
                            <li>@lang('everywhere.thread_created') {{$thread->created_at->diffForHumans()}}</li>
                            <li>@lang('everywhere.by_user') <a href="{{route('user_profile', $thread->user->name)}}">{{$thread->user->name}}</a></li>
                            <li class="c-position-relative">
                                @if ($thread->replies_count > 0)
                                    <span class="cookme-comments c-position-static">{{$thread->replies_count}}&nbsp;<i class="fa fa-comments-o" aria-hidden="true"></i></span>

                                @else
                                    <span class="cookme-comments c-position-static">{{$thread->replies_count}}&nbsp;<i class="fa fa-comments-o no-comments" aria-hidden="true"></i></span>
                                @endif
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')

@endsection
