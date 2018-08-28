<?php

$localizer = \App::make(\Waavi\Translation\UriLocalizer::class);

//localization of all routes
Route::group(['prefix' => $localizer->localeFromRequest()], function(){

    //home
    Route::get('/', 'IndexController@index');
    // auth
    Auth::routes();

    //recipes pages
    Route::get('/recipes/{theme}', 'RecipesController@recipes')->name('recipes');

    //chat routes
    Route::get('/chat', 'ChatController@index')->name('chat')->middleware('auth');
    Route::get('/messages', 'ChatController@messages')->name('chat_messages')->middleware('auth');
    // send and save user message
    Route::post('savemessage', 'ChatController@savemessage')->name('chat_save_message')->middleware('auth');

    Route::get('/threads', 'ThreadsController@index');
    Route::get('/threads/{thread}', 'ThreadsController@show');

});
