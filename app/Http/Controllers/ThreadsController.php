<?php

namespace App\Http\Controllers;

use App\Category;
use App\Filters\ThreadFilters;
use App\Thread;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Activity;

class ThreadsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category_slug = null, ThreadFilters $filters)
    {

        //$threads = Thread::filter($filters)->get();
        if (!empty($category_slug)) {
            $category_id = Category::where('slug', $category_slug)->first()->id;
            $threads = Thread::where('category_id', $category_id)->latest();
        }
        else {
            $threads = Thread::with('category')->latest();
        }


        $threads = $threads->filter($filters)->get();

        return view('threads.index', compact('threads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('threads.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);

        $category = Category::find(request('category_id'));

        $thread = Thread::create([
            'user_id' => auth()->id(),
            'category_id' => request('category_id'),
            'title' => request('title'),
            'body' => request('body'),
        ]);

        return redirect('/threads/' . $category->slug . '/' . $thread->id)->with('flash-message', trans('everywhere.thread_created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show($category_slug, Thread $thread)
    {
        return view('threads.show',[
            'thread' => $thread,
            'replies' => $thread->replies()->paginate(15),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy($category_slug = null, Thread $thread)
    {
        // authorize with the policy
        $this->authorize('update', $thread);

        $thread->replies->each(function($reply) {
            Activity::where(['user_id' => auth()->id(),'subject_id' => $reply->id, 'subject_type' => get_class($reply),])->delete();
            $reply->delete();
        });

        Activity::where(['user_id' => auth()->id(),'subject_id' => $thread->id, 'subject_type' => get_class($thread),])->delete();

        $thread->delete();

        return back()->with('flash-message', trans('everywhere.thread_removed'));
    }
}
