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
                <h2>Bacon & roast onion salad</h2>
                <p>A rustic salad for one - contrast peas and caramelised onion with salty, streaky bacon and mustard dressing</p>
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
                <h3>Chef Ingredients</h3>
                <ul>
                    <li>1 red onion, cut into 8 wedges, root left intact</li>
                    <li>2 tbsp olive oil, plus extra for drizzling (optional) handful of peas (fresh or frozen)</li>
                    <li>1 tsp sherry vinegar</li>
                    <li>1 tsp Dijon mustard</li>
                    <li>2 slices smoked streaky bacon</li>
                    <li>1 slice of bread, cut into cubes</li>
                    <li>1 Baby Gem lettuce, leaves torn</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <h3>How to CookMe</h3>
                <ul>
                    <li>Heat oven to 220C/200C fan/gas 7. Arrange the onion wedges on one side of a baking tray. Drizzle with ½ tbsp of the olive oil and season. Put in the oven and roast for 15 mins.</li>
                    <li>Meanwhile, cook the peas in boiling water for 2 mins, drain and rinse in very cold water. Set aside.</li>
                    <li>Make the dressing by mixing together another ½ tbsp of the oil, the vinegar, mustard and seasoning. Turn the onions, and put the bacon slices and bread next to them on the baking tray. Drizzle the remaining oil over the bread. Return the tray to the oven for 12 mins more, until the bacon and bread are golden.</li>
                    <li>Put the lettuce and peas in a bowl, add the dressing and toss to combine. Arrange the onion and bread on top. Break up the bacon slightly and scatter over. Drizzle with a little more olive oil, if you like, and eat straight away.</li>
                </ul>
            </div>
        </div>


        <hr>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <h2>Roast beef with red wine & banana shallots</h2>
                <p>Succulent roast topside of beef, made especially irresistible with a mustard crust, piquant shallots and red wine enriched gravy</p>
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
                <h3>Chef Ingredients</h3>
                <ul>
                    <li>2kg topside of beef (buy one with a layer of natural fat on the top)</li>
                    <li>1 tbsp vegetable oil or sunflower oil</li>
                    <li>1 tbsp English mustard powder</li>
                    <li>1 tsp Maldon sea salt</li>
                    <li>2 large carrots, halved lengthways</li>
                    <li>12 banana shallots, peeled and halved lengthways</li>
                    <li>2 bay leaves</li>
                    <li>2 tbsp plain flour</li>
                    <li>300ml full-bodied red wine ( I used a shiraz blend)</li>
                    <li>500ml fresh beef stock</li>
                    <li>2 tsp redcurrant jelly</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <h3>How to CookMe</h3>
                <ul>
                    <li>Let the meat come to room temperature for 1 hr before you roast it. Heat oven to 220C/200C fan/gas 7. Dry the meat with kitchen paper, then rub the oil all over it. Mix the mustard powder with the sea salt and 1 tsp pepper, then rub this over the meat too. Lay the carrots in a large roasting tin to make a trivet and sit the beef on top, fat-side up.</li>
                    <li>Roast for 15 mins, then turn the heat down to 180C/160C fan/gas 4 and roast for another 55 mins. This will give you medium beef; for medium-rare, cook for 45 mins. (When it’s done, a probe thermometer inserted into the thickest part of the beef should read 65C).</li>
                    <li>With 30 mins cooking time left, baste the beef in the fat that has pooled in the tin, add the shallots and bay leaves, and coat these in the fat too. Season and return to the oven. Meanwhile, boil the wine in a small saucepan to reduce it by two-thirds.</li>
                    <li>When the meat is ready, transfer to a board, cover loosely with foil and leave to rest. Turn the oven up to 200C/180C fan/gas 6 and return the tin to the oven for a further 10-15 mins until the shallots are tender.</li>
                    <li>
                        Scoop out the shallots with a slotted spoon and set aside to keep warm. Remove the excess fat from the tin and discard, leaving 1 tbsp fat and all the dark juices behind. Add the flour and cook on the hob for 2 mins, stirring constantly. Gradually whisk in the reduced wine, followed by the stock and redcurrant jelly, scraping up all the tasty bits from the bottom of the tin. Bubble until thickened and rich, add the juices from the resting meat, then season to taste. Discard the carrots. Serve the beef with the gravy and shallots.
                    </li>
                </ul>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <h2>Slow cooker chicken</h2>
                <p>Why not use the slow cooker to make your Sunday lunch? Cooking low and slow ensures wonderfully tender, juicy meat – then use the pan juices to make gravy</p>
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
                <h3>Chef Ingredients</h3>
                <ul>
                    <li>1 large chicken</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <h3>How to CookMe</h3>
                <ul>
                    <li>Heat the slow cooker if necessary and add a splash of water to the base. Scrunch up some foil to make a trivet to sit in the base of the bowl to rest the chicken on. Put the chicken into the pot and season the skin. Cover and cook on Low for 5 hours or until the leg or wing feels very loose when you wiggle it. Tip the juices inside the chicken out as you lift it out.</li>
                    <li>Brown the chicken skin under the grill or carve the chicken before anyone sees it. Spoon the liquid out of the base of the pan to use as gravy, there won't be much but it will have a good flavour.</li>
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
