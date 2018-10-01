<?php

namespace App\Http\Controllers;
use App\Thread;
use Illuminate\Http\Request;

class RepliesController extends Controller
{
    public function store($category_slug, Thread $thread)
    {
        $this->validate(request(),[
            'body' => 'required',
        ]);

        $thread->addReply([
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        return back()->with('flash-message', trans('everywhere.reply_created'));
    }
}
