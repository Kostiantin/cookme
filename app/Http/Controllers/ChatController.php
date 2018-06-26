<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
//use App\Events\ChatEvent;
use Illuminate\Support\Facades\Auth;
use App\Message;
use App\Events\MessagePosted;

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

    public function messages()
    {
        $data = [];
        $data['messages'] = Message::with('user')->orderBy('id', 'asc')->get();
        $data['current_user'] = Auth::user();
        return $data;
    }

    public function savemessage()
    {
        $user = Auth::user();
        $message = $user->messages()->create(['message' => request()->get('message')]);

        // broadcast even posted
        event(new MessagePosted($message,$user));

        return ['status' => 'OK'];
    }
}
