<?php

namespace App\Http\Controllers;

//use App\Http\Traits\GeneralFunctions;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    //use GeneralFunctions;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth')->except(['index', 'show']); //only index and show actions are allowed without login
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo $this->callMyTest();die;
        return view('index.index');
    }
}
