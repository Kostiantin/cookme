@extends('layouts.master')

@section('title')
    <title>{{ config('app.name', 'CookMe') }}</title>
@endsection

@section('content')
<div class="our-recipes breakfast">
    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <h1>@lang('everywhere.healthy_breakfast_recipes')</h1>
                <h2>@lang('everywhere.veggie_breakfast')</h2>
                <p>@lang('everywhere.veggie_breakfast_description')</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="main-image-container">
                    <img alt="" src="{{ asset('img/veggie_breakfast.jpg') }}"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 chef-ingredients">
                <h3>@lang('everywhere.chef_ingredients')</h3>
                <ul>
                    <li>@lang('everywhere.veggie_breakfast_i_1')</li>
                    <li>@lang('everywhere.veggie_breakfast_i_2')</li>
                    <li>@lang('everywhere.veggie_breakfast_i_3')</li>
                    <li>@lang('everywhere.veggie_breakfast_i_4')</li>
                    <li>@lang('everywhere.veggie_breakfast_i_5')</li>
                    <li>@lang('everywhere.veggie_breakfast_i_6')</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <h3>@lang('everywhere.how_to_cookme')</h3>
                <ul>
                    <li>@lang('everywhere.veggie_breakfast_m_1')</li>
                    <li>@lang('everywhere.veggie_breakfast_m_2')</li>
                </ul>
            </div>
        </div>


        <hr>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <h2>@lang('everywhere.american_pancakes')</h2>
                <p>@lang('everywhere.american_pancakes_description')</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="main-image-container">
                    <img alt="" src="{{ asset('img/american-pancakes.jpg') }}"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 chef-ingredients">
                <h3>@lang('everywhere.chef_ingredients')</h3>
                <ul>
                    <li>@lang('everywhere.american_pancakes_i_1')</li>
                    <li>@lang('everywhere.american_pancakes_i_2')</li>
                    <li>@lang('everywhere.american_pancakes_i_3')</li>
                    <li>@lang('everywhere.american_pancakes_i_4')</li>
                    <li>@lang('everywhere.american_pancakes_i_5')</li>
                    <li>@lang('everywhere.american_pancakes_i_6')</li>
                    <li>@lang('everywhere.american_pancakes_i_7')</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <h3>@lang('everywhere.how_to_cookme')</h3>
                <ul>
                    <li>@lang('everywhere.american_pancakes_m_1')</li>
                    <li>@lang('everywhere.american_pancakes_m_2')</li>
                    <li>@lang('everywhere.american_pancakes_m_3')</li>
                </ul>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <h2>@lang('everywhere.baked_green_eggs')</h2>
                <p>@lang('everywhere.baked_green_eggs_description')</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="main-image-container">
                    <img alt="" src="{{ asset('img/baked-green-eggs.jpg') }}"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 chef-ingredients">
                <h3>@lang('everywhere.chef_ingredients')</h3>
                <ul>
                    <li>@lang('everywhere.baked_green_eggs_i_1')</li>
                    <li>@lang('everywhere.baked_green_eggs_i_2')</li>
                    <li>@lang('everywhere.baked_green_eggs_i_3')</li>
                    <li>@lang('everywhere.baked_green_eggs_i_4')</li>
                    <li>@lang('everywhere.baked_green_eggs_i_5')</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <h3>@lang('everywhere.how_to_cookme')</h3>
                <ul>
                    <li>@lang('everywhere.baked_green_eggs_m_1')</li>
                </ul>
            </div>
        </div>


    </div>
</div>
<section class="middle-content">

</section>
@endsection

@section('custom_js')




@endsection
