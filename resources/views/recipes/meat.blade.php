@extends('layouts.master')

@section('title')
    <title>{{ config('app.name', 'CookMe') }}</title>
@endsection

@section('content')
<div class="our-recipes">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <h1>@lang('everywhere.meat_cuisine')</h1>
                <h2>@lang('everywhere.bacon_and_onion_salad')</h2>
                <p>@lang('everywhere.rustic_salad')</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="main-image-container">
                    <img alt="" src="{{ asset('img/bacon_salad.jpg') }}"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 chef-ingredients">
                <h3>@lang('everywhere.chef_ingredients')</h3>
                <ul>
                    <li>@lang('everywhere.rustic_salad_i_1')</li>
                    <li>@lang('everywhere.rustic_salad_i_2')</li>
                    <li>@lang('everywhere.rustic_salad_i_3')</li>
                    <li>@lang('everywhere.rustic_salad_i_4')</li>
                    <li>@lang('everywhere.rustic_salad_i_5')</li>
                    <li>@lang('everywhere.rustic_salad_i_6')</li>
                    <li>@lang('everywhere.rustic_salad_i_7')</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <h3>@lang('everywhere.how_to_cookme')</h3>
                <ul>
                    <li>@lang('everywhere.rustic_salad_m_1')</li>
                    <li>@lang('everywhere.rustic_salad_m_2')</li>
                    <li>@lang('everywhere.rustic_salad_m_3')</li>
                    <li>@lang('everywhere.rustic_salad_m_4')</li>
                </ul>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <h2>@lang('everywhere.roast_beef')</h2>
                <p>@lang('everywhere.roast_beef_description')</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="main-image-container">
                    <img alt="" src="{{ asset('img/roast-beef.jpg') }}"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 chef-ingredients">
                <h3>@lang('everywhere.chef_ingredients')</h3>
                <ul>
                    <li>@lang('everywhere.roast_beef_i_1')</li>
                    <li>@lang('everywhere.roast_beef_i_2')</li>
                    <li>@lang('everywhere.roast_beef_i_3')</li>
                    <li>@lang('everywhere.roast_beef_i_4')</li>
                    <li>@lang('everywhere.roast_beef_i_5')</li>
                    <li>@lang('everywhere.roast_beef_i_6')</li>
                    <li>@lang('everywhere.roast_beef_i_7')</li>
                    <li>@lang('everywhere.roast_beef_i_8')</li>
                    <li>@lang('everywhere.roast_beef_i_9')</li>
                    <li>@lang('everywhere.roast_beef_i_10')</li>
                    <li>@lang('everywhere.roast_beef_i_11')</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <h3>@lang('everywhere.how_to_cookme')</h3>
                <ul>
                    <li>@lang('everywhere.roast_beef_m_1')</li>
                    <li>@lang('everywhere.roast_beef_m_2')</li>
                    <li>@lang('everywhere.roast_beef_m_3')</li>
                    <li>@lang('everywhere.roast_beef_m_4')</li>
                    <li>@lang('everywhere.roast_beef_m_5')</li>
                </ul>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <h2>@lang('everywhere.slow_chicken')</h2>
                <p>@lang('everywhere.slow_chicken_description')</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="main-image-container">
                    <img alt="" src="{{ asset('img/roastchicken.jpg') }}"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 chef-ingredients">
                <h3>@lang('everywhere.chef_ingredients')</h3>
                <ul>
                    <li>@lang('everywhere.slow_chicken_i_1')</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <h3>@lang('everywhere.how_to_cookme')</h3>
                <ul>
                    <li>@lang('everywhere.slow_chicken_m_1')</li>
                    <li>@lang('everywhere.slow_chicken_m_2')</li>
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
