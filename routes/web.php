<?php
use Illuminate\Support\Facades\Config;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$localizer = \App::make(\Waavi\Translation\UriLocalizer::class);

Route::group(['prefix' => $localizer->localeFromRequest()], function(){
    /* Your routes here */
    Route::get('/', 'IndexController@index');
    Auth::routes();

    // chat route
    //Route::get('/chat', 'ChatController@chat');
    //Route::post('/send', 'ChatController@send');
    Route::get('/recipes/{theme}', 'RecipesController@recipes');

    /*Route::get('/chat-messages', 'ChatController@getMessages')
        ->middleware('auth');
    Route::post('/chat-messages', 'ChatController@postMessage')
        ->middleware('auth');
    Route::get('/chat', 'ChatController@index')->middleware('auth');*/

    Route::get('/chat', function () {
       return view('chat');
    });

});



