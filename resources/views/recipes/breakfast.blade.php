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
                <h2>Veggie breakfast bakes</h2>
                <p>Hit 3 of your 5-a-day with this alternative fry-up - it's packed with vegetables and oven-baked</p>
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
                <h3>Chef Ingredients</h3>
                <ul>
                    <li>4 large field mushrooms</li>
                    <li>8 tomatoes, halved</li>
                    <li>1 garlic clove, thinly sliced</li>
                    <li>2 tsp olive oil</li>
                    <li>200g bag spinach</li>
                    <li>4 eggs</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <h3>How to CookMe</h3>
                <ul>
                    <li>Heat oven to 200C/180C fan/gas 6. Put the mushrooms and tomatoes into 4 ovenproof dishes. Divide garlic between the dishes, drizzle over the oil and some seasoning, then bake for 10 mins.</li>
                    <li>Meanwhile, put the spinach into a large colander, then pour over a kettle of boiling water to wilt it. Squeeze out any excess water, then add the spinach to the dishes. Make a little gap between the vegetables and crack an egg into each dish. Return to the oven and cook for a further 8-10 mins or until the egg is cooked to your liking.</li>
                </ul>
            </div>
        </div>


        <hr>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <h2>American pancakes</h2>
                <p>Easy, American-style, fluffy pancakes are great for feeding a crowd at breakfast or brunch. Top with something sweet like fruit, jam or syrup, or rashers of crispy bacon.</p>
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
                <h3>Chef Ingredients</h3>
                <ul>
                    <li>200g self-raising flour</li>
                    <li>1 ½ tsp baking powder</li>
                    <li>1 tbsp golden caster sugar</li>
                    <li>3 large eggs</li>
                    <li>25g melted butter, plus extra for cooking</li>
                    <li>200ml milk</li>
                    <li>vegetable oil for cooking</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <h3>How to CookMe</h3>
                <ul>
                    <li>Mix the flour, baking powder, caster sugar and a pinch of salt together in a large bowl. Create a well in the centre with the back of your spoon then add the eggs, melted butter and milk. Whisk together either with a balloon whisk or electric hand beaters until smooth then pour into a jug.</li>
                    <li>Heat a small knob of butter and 1 tsp of oil in a large, non-stick frying pan over a medium heat. When the butter looks frothy pour in rounds of the batter, approximately 8cm wide. Make sure you don’t put the pancakes too close together as they will spread during cooking. Cook the pancakes on their first side for about 1-2 mins or until lots of tiny bubbles start to appear and pop on the surface. Flip the pancakes over and cook for a further minute on the other side. Repeat until all the batter is used up.</li>
                    <li>Serve your pancakes stacked up on a plate with a drizzle of maple syrup and any of your favourite toppings.</li>
                </ul>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <h2>Baked green eggs</h2>
                <p>This five-ingredient breakfast or brunch with spinach, pesto and bubbling melted cheese can be on the table in 15 minutes</p>
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
                <h3>Chef Ingredients</h3>
                <ul>
                    <li>100g baby spinach, roughly chopped</li>
                    <li>4 tbsp fresh pesto</li>
                    <li>100ml double cream</li>
                    <li>1 tbsp finely grated Gruyère (or vegetarian alternative)</li>
                    <li>4 medium eggs</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <h3>How to CookMe</h3>
                <ul>
                    <li>Heat oven to 200C/180C fan/gas 6. Mix together the spinach, pesto, cream and some seasoning, and tip into 2 individual shallow ovenproof dishes. Sprinkle the cheese over the top. Make 2 shallow hollows in the mixture in each dish and break an egg into each hollow. Bake in the oven for 10-12 mins until the whites are set and the yolks are still runny.</li>
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
