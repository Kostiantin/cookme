@extends('layouts.master')

@section('title')
    <title>{{ config('app.name', 'CookMe') }}</title>
@endsection

@section('content')
<div class="our-recipes simple">
    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <h1>@lang('everywhere.simple_products_delicious_diches')</h1>
                <h2>@lang('everywhere.one_pan_spagetti')</h2>
                <p>@lang('everywhere.one_pan_spagetti_description')</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="main-image-container">
                    <img alt="" src="{{ asset('img/one-pan-spaghetti.jpg') }}"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 chef-ingredients">
                <h3>@lang('everywhere.chef_ingredients')</h3>
                <ul>
                    <li>@lang('everywhere.one_pan_spagetti_i_1')</li>
                    <li>@lang('everywhere.one_pan_spagetti_i_2')</li>
                    <li>@lang('everywhere.one_pan_spagetti_i_3')</li>
                    <li>@lang('everywhere.one_pan_spagetti_i_4')</li>
                    <li>@lang('everywhere.one_pan_spagetti_i_5')</li>
                    <li>@lang('everywhere.one_pan_spagetti_i_6')</li>
                    <li>@lang('everywhere.one_pan_spagetti_i_7')</li>
                    <li>@lang('everywhere.one_pan_spagetti_i_8')</li>
                    <li>@lang('everywhere.one_pan_spagetti_i_9')</li>
                    <li>@lang('everywhere.one_pan_spagetti_i_10')</li>
                    <li>@lang('everywhere.one_pan_spagetti_i_11')</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <h3>@lang('everywhere.how_to_cookme')</h3>
                <ul>
                    <li>@lang('everywhere.one_pan_spagetti_m_1')</li>

                    <li>@lang('everywhere.one_pan_spagetti_m_2')</li>
                </ul>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <h2>@lang('everywhere.frying_pan_pizza')</h2>
                <p>@lang('everywhere.frying_pan_pizza_description')</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="main-image-container">
                    <img alt="" src="{{ asset('img/frying-pan-pizza.jpg') }}"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 chef-ingredients">
                <h3>@lang('everywhere.chef_ingredients')</h3>
                <ul>
                    <li>@lang('everywhere.frying_pan_pizza_i_1')</li>
                    <li>@lang('everywhere.frying_pan_pizza_i_2')</li>
                    <li>@lang('everywhere.frying_pan_pizza_i_3')</li>
                    <li>@lang('everywhere.frying_pan_pizza_i_4')</li>
                    <li>@lang('everywhere.frying_pan_pizza_i_5')</li>
                    <li>@lang('everywhere.frying_pan_pizza_i_6')</li>
                    <li>@lang('everywhere.frying_pan_pizza_i_7')</li>
                    <li>@lang('everywhere.frying_pan_pizza_i_8')</li>
                    <li>@lang('everywhere.frying_pan_pizza_i_9')</li>
                    <li>@lang('everywhere.frying_pan_pizza_i_10')</li>
                    <li>@lang('everywhere.frying_pan_pizza_i_11')</li>
                    <li>@lang('everywhere.frying_pan_pizza_i_12')</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <h3>@lang('everywhere.how_to_cookme')</h3>
                <ul>
                    <li>@lang('everywhere.frying_pan_pizza_m_1')</li>
                    <li>@lang('everywhere.frying_pan_pizza_m_2')</li>
                    <li>@lang('everywhere.frying_pan_pizza_m_3')</li>
                    <li>@lang('everywhere.frying_pan_pizza_m_4')</li>
                </ul>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <h2>@lang('everywhere.steak_panzanella')</h2>
                <p>@lang('everywhere.steak_panzanella_description')</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="main-image-container">
                    <img alt="" src="{{ asset('img/steak-panzanella-salad.jpg') }}"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 chef-ingredients">
                <h3>@lang('everywhere.chef_ingredients')</h3>
                <ul>
                    <li>@lang('everywhere.steak_panzanella_i_1')</li>
                    <li>@lang('everywhere.steak_panzanella_i_2')</li>
                    <li>@lang('everywhere.steak_panzanella_i_3')</li>
                    <li>@lang('everywhere.steak_panzanella_i_4')</li>
                    <li>@lang('everywhere.steak_panzanella_i_5')</li>
                    <li>@lang('everywhere.steak_panzanella_i_6')</li>
                    <li>@lang('everywhere.steak_panzanella_i_7')</li>
                    <li>@lang('everywhere.steak_panzanella_i_8')</li>
                    <li>@lang('everywhere.steak_panzanella_i_9')</li>
                    <li>@lang('everywhere.steak_panzanella_i_10')</li>
                    <li>@lang('everywhere.steak_panzanella_i_11')</li>
                    <li>@lang('everywhere.steak_panzanella_i_12')</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <h3>@lang('everywhere.how_to_cookme')</h3>
                <ul>
                    <li>@lang('everywhere.steak_panzanella_m_1')</li>

                    <li>@lang('everywhere.steak_panzanella_m_2')</li>

                    <li>@lang('everywhere.steak_panzanella_m_3')</li>

                    <li>@lang('everywhere.steak_panzanella_m_4')</li>

                    <li>@lang('everywhere.steak_panzanella_m_5')</li>
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
