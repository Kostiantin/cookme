<?php

$localizer = \App::make(\Waavi\Translation\UriLocalizer::class);

//localization of all routes
Route::group(['prefix' => $localizer->localeFromRequest()], function(){

    // home
    Route::get('/', 'IndexController@index');
    // auth
    Auth::routes();

    // recipes pages
    Route::get('/recipes/{theme}', 'RecipesController@recipes')->name('recipes');

    // chat routes
    Route::get('/chat', 'ChatController@index')->name('chat')->middleware('auth');
    Route::get('/messages', 'ChatController@messages')->name('chat_messages')->middleware('auth');

    // send and save user message
    Route::post('savemessage', 'ChatController@savemessage')->name('chat_save_message')->middleware('auth');

    // threads
    Route::get('/threads', 'ThreadsController@index')->name('all_threads');
    Route::get('/threads/create', 'ThreadsController@create')->name('create_thread');

    Route::get('/threads/{category}', 'ThreadsController@index')->name('category_all_threads');


    Route::get('/threads/{category}/{thread}', 'ThreadsController@show')->name('show_thread');

    Route::post('/threads/{category}/{thread}/replies', 'RepliesController@store')->name('add_reply_to_thread');
    Route::post('/threads', 'ThreadsController@store')->name('add_thread');

});
