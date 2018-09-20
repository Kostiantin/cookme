@extends('layouts.master')

@section('title')
    <title>{{$user->name}}</title>
@endsection

@section('content')
    <div class="container common-content-block">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <h2>{{$user->name}} <small>@lang('everywhere.joined') {{$user->created_at->diffForHumans()}}</small></h2>
                <div class="panel panel-default">
                    <div class="panel-body">
                            @forelse ($threads as $thread)
                                <h2>@lang('everywhere.all_threads')</h2>
                                <hr>
                                <article>
                                    <div class="actions text-right">
                                        @if ($thread->user_id == auth()->id())
                                            <form method="POST" action="{{route('destroy_thread', ['category' => $thread->category->slug, 'thread' => $thread->id])}}">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <button type="submit" class="btn btn-xs btn-danger">

                                                    <i class="fa fa-times" aria-hidden="true"></i>

                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                    <h4 class="threads-header">
                                        <a href="{{route('show_thread',['category' => $thread->category->slug, 'thread' => $thread->id])}}">{{$thread->title}}</a>&nbsp; {{$thread->created_at->diffForHumans()}}
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

                            @empty
                                @lang('everywhere.no_threads_yet')
                            @endforelse
                            {{$threads->links()}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')

@endsection
