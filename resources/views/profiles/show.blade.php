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
                            @forelse ($activities as $date => $record)
                                <h3>{{$date}}</h3>
                                @foreach ($record as $activity)
                                    @if(view()->exists("profiles.activities.{$activity->type}"))
                                        <hr>
                                        @include("profiles.activities.{$activity->type}")
                                    @endif
                                @endforeach
                            @empty
                                @lang('everywhere.no_threads_yet')
                            @endforelse
                            {{--{{$threads->links()}}--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')

@endsection
