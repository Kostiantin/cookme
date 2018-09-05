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
                        <form method="POST" action="{{route('add_thread')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="title">@lang('everywhere.title')</label>
                                <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}">
                                @if (!empty($errors) && $errors->has('title'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="body">@lang('everywhere.body')</label>
                                <textarea class="form-control" name="body" id="body" rows="5">{{old('body')}}</textarea>
                                @if (!empty($errors) && $errors->has('body'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="category_id">@lang('everywhere.category')</label>
                                <select name="category_id" id="category_id" class="form-control">
                                        <option value="">@lang('everywhere.select')</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" @if (old('category_id') == $category->id)selected @endif >{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @if (!empty($errors) && $errors->has('category_id'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                @endif
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
