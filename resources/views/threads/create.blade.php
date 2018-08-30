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
                    <div class="card-header"><h1>@lang('everywhere.new_thread')</h1></div>

                    <div class="card-body">
                        <form method="POST" action="/threads">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="title">@lang('everywhere.title')</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>
                            <div class="form-group">
                                <label for="body">@lang('everywhere.body')</label>
                                <textarea class="form-control" name="body" id="body" rows="5">

                                </textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-medium btn-info">@lang('everywhere.publish')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')

@endsection
