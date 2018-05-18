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
                <h2>One-pan spaghetti with nduja, fennel & olives</h2>
                <p>A spicy sausage pasta dish with a difference. Using the cooking water helps the sauce cling to the pasta and gives the dish more body. A silky smooth sauce, perfect pasta and one pan to wash!</p>
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
                    <li>400g spaghetti</li>
                    <li>3 garlic cloves, very thinly sliced</li>
                    <li>½ fennel, halved and very thinly sliced</li>
                    <li>75g nduja or sobrasada paste (see tip)</li>
                    <li>200g tomatoes</li>
                    <li>(the best you can get), chopped into chunks</li>
                    <li>75g black olives, pitted and sliced</li>
                    <li>2 tsp tomato purée</li>
                    <li>3 tbsp olive oil, plus a drizzle</li>
                    <li>2 tsp red wine vinegar</li>
                    <li>40g pecorino, plus extra to serve handful basil, torn</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <h3>@lang('everywhere.how_to_cookme')</h3>
                <ul>
                    <li>Boil the kettle. Put all the ingredients except the pecorino and basil in a wide saucepan or deep frying pan and season well. Pour over 800ml kettle-hot water and bring to a simmer, using your tongs to ease the spaghetti under the liquid as it starts to soften.</li>

                    <li>Simmer, uncovered, for 10-12 mins, tossing the spaghetti through the liquid every so often until it is cooked and the sauce is reduced and clinging to it. Add a splash more hot water if the sauce is too thick or does not cover the pasta while it cooks. Turn up the heat for the final few mins to drive off the excess liquid, leaving you with a rich sauce. Stir through the pecorino and basil, and serve with an extra drizzle of oil and pecorino on the side.</li>
                </ul>
            </div>
        </div>


        <hr>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <h2>Frying pan pizza with aubergine, ricotta & mint</h2>
                <p>This recipe ensures a crispy-bottomed pizza without ever turning on the oven. It's easy, veggie and 2 of your 5-a-day</p>
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
                    <li>200g strong white bread flour, plus a little for dusting</li>
                    <li>½ tsp fast-action dried yeast</li>
                    <li>¼ tsp golden caster sugar</li>
                    <li>a little oil, for greasing</li>
                    <li>For the toppings 4 tbsp olive oil, plus a little extra</li>
                    <li>1 garlic clove, thinly sliced</li>
                    <li>200g passata</li>
                    <li>pinch of golden caster sugar (optional)</li>
                    <li>1 small aubergine, sliced into discs</li>
                    <li>100g ricotta</li>
                    <li>small handful mint, roughly chopped</li>
                    <li>extra virgin olive oil, for drizzling</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <h3>@lang('everywhere.how_to_cookme')</h3>
                <ul>
                    <li>Weigh the ingredients for the dough into a large bowl and add 1/2 tsp salt and 125ml warm water. Mix to form a soft dough, then tip onto your work surface and knead for 5 mins or until the dough feels stretchy. Clean and grease the bowl and return the dough. Cover with cling film and leave somewhere warm to rise for 1 hr, or until the dough has doubled in size.</li>
                    <li>Meanwhile, make the sauce. Heat 1 tbsp olive oil in a pan and add the garlic. Sizzle gently for 30 secs, making sure the garlic doesn’t brown, then add the passata. Season well and bubble for 8-10 mins until you have a rich sauce – add a pinch of sugar if it tastes a little too tart. Set aside.</li>
                    <li>When the dough has risen, knock out the air and roll it into a pizza base the same size as a large frying pan. Oil the surface of the dough, cover with cling film , then leave on the work surface for 15 mins to puff up a little. Meanwhile, heat 2 tbsp oil in the frying pan and add the aubergines in a single layer (you may have to cook in batches). Season well and cook for 4-5 mins on each side until really tender and golden. Transfer to a dish and cover with foil to keep warm.</li>
                    <li>Heat the remaining 1 tbsp of oil in the pan and carefully lift the dough into it. You may have to reshape it a little to fit. Cook over a low-medium heat until the underside is golden brown and the edges of the dough are starting to look dry and set – this should take about 6 mins, but it’s best to go by eye. Flip over, drizzle a little more oil around the edge of the pan so it trickles underneath the pizza base, and cook for another 5-6 mins until golden and cooked through. Reheat the sauce if you need to and spread it over the base. Top with the warm aubergines and dot with spoonfuls of ricotta. Scatter with mint and drizzle with a little extra virgin olive oil just before serving.</li>
                </ul>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <h2>Steak panzanella salad with roasted lemons</h2>
                <p>Bavette with sharp, sweet roasted lemons and crisp, spiced pitta bread makes a hearty meal that will satisfy even salad-phobics</p>
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
                    <li>1 large unwaxed lemon, cut into thin rounds, then halved</li>
                    <li>2 ½ tbsp olive oil</li>
                    <li>1 tbsp za'atar</li>
                    <li>2 pitta breads, torn into pieces</li>
                    <li>200g leftover cooked bavette steak, thinly sliced</li>
                    <li>600g mixed tomatoes, smaller ones left whole, larger ones halved or cut into wedges</li>
                    <li>100g feta, crumbled</li>
                    <li>½ cucumber, halved and sliced</li>
                    <li>1 red onion, finely chopped</li>
                    <li>100g Kalamata olives, stoned and roughly chopped</li>
                    <li>small pack mint, leaves picked and roughly chopped</li>
                    <li>extra virgin olive oil, for drizzling</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <h3>@lang('everywhere.how_to_cookme')</h3>
                <ul>
                    <li>Heat oven to 200C/180C fan/ gas 6. Put the lemon slices on a baking sheet lined with baking parchment. Drizzle over 1 /2 tbsp oil and put in the oven on the highest shelf to roast for 15-20 mins, until the lemon has released its natural sugars and the peel has softened and begun to caramelise. Keep an eye on them – you may need to turn the tray so that they cook evenly.</li>

                    <li>Meanwhile, mix together the remaining oil and za’atar in a bowl, then toss in the pitta and use your hands to coat in the spiced oil. Spread out on a baking tray and roast for 15-20 mins until crisp and golden.</li>

                    <li>About 5 mins before the lemons are ready, wrap the bavette in a foil parcel and put in the oven alongside the pitta bread to warm through. </li>

                    <li>Mix all the other salad ingredients together in a large bowl. Add a drizzle of extra virgin olive oil and season with black pepper and a little sea salt (the olives and feta will add salt so you shouldn’t need much).</li>

                    <li>Add the lemons, spiced pitta and warmed bavette. Mix everything together with your hands, then divide between plates or serve sharing-style on a large platter.</li>
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
