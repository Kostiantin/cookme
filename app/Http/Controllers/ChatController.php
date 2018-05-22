<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
//use App\Events\ChatEvent;
use Illuminate\Support\Facades\Auth;
use App\Message;


class ChatController extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth');
    }

    public function index()
    {
        return view('chat.index');
    }

    public function getMessages(Request $request)
    {
        if ( ! $request->ajax()) {
            //throw new UnauthorizedException();
        }
        $messages = Message::with('user')->MostRecent()->get();
        $messages = array_reverse($messages->toArray());
        return $messages;
    }

    public function postMessage(Request $request)
    {
        if ( ! $request->ajax()) {
            //throw new UnauthorizedException();
        }
        $user = Auth::user();
        $message = $user->messages()->create([
            'message' => request()->get('message')
        ]);
        //broadcast(new MessagePosted($message, $user))->toOthers();
        return ['status' => 'OK'];
    }
    /*public function chat()
    {
        return view('chat');
    }

    public function send(request $request)
    {
        //return $request->all();
        $user = User::find(Auth::id());
        event(new ChatEvent($request->message, $user));
    }*/


}
