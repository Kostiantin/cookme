<?php
use Illuminate\Support\Facades\Config;
use App\Message;
use App\Events\MessagePosted;

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
    })->middleware('auth');

    Route::get('messages', function() {
        $data = [];
        $data['messages'] = App\Message::with('user')->orderBy('id', 'desc')->get();
        $data['current_user'] = Auth::user();
        return $data;
    })->middleware('auth');

    // send and save user message
    Route::post('savemessage', function() {

        $user = Auth::user();
        $message = $user->messages()->create(['message' => request()->get('message')]);

        // broadcast even posted
        event(new MessagePosted($message,$user));

        return ['status' => 'OK'];
    });
});



