<?php

namespace App\Http\Controllers;
use App\Favorite;
use App\Thread;
use App\Reply;
use Illuminate\Http\Request;
use App\Activity;

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

    public function update(Reply $reply)
    {
        // check if user can delete/update this reply
        $this->authorize('update', $reply);
        $reply->update(['body' => request('body')]);
    }

    public function destroy(Reply $reply)
    {
        // check if user can delete/update this reply
        $this->authorize('update', $reply);

        // remove current user reply activity (created_reply)
        Activity::where(['user_id' => auth()->id(), 'subject_id' => $reply->id, 'subject_type' => get_class($reply),])->delete();

        $reply->favorites->each(function($favorite) {
            Activity::where(['subject_id' => $favorite->id, 'subject_type' => get_class($favorite),])->delete();
            $favorite->delete();
        });

        $reply->delete();

        return back();
    }
}
