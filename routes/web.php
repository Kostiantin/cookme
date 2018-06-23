<?php
use Illuminate\Support\Facades\Config;
use App\Message;

$localizer = \App::make(\Waavi\Translation\UriLocalizer::class);

//localization of all routes
Route::group(['prefix' => $localizer->localeFromRequest()], function(){

    Route::get('/', 'IndexController@index');

    Auth::routes();

    //recipes pages
    Route::get('/recipes/{theme}', 'RecipesController@recipes');


    //chat routes
    Route::get('/chat', 'ChatController@index')->middleware('auth');
    Route::get('/messages', 'ChatController@messages')->middleware('auth');
    // send and save user message
    Route::post('savemessage', 'ChatController@savemessage');

});



