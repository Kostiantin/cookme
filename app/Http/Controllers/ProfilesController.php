<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(User $user)
    {
        $activities = $user->activities()->latest()->with('subject')->get()->groupBy(function($activity) {
            return $activity->created_at->format('Y-m-d');
        });
        //dd($activities->toArray());
        return view('profiles.show', [
            'user' => $user,
            'activities' => $activities,
        ]);
    }
}
