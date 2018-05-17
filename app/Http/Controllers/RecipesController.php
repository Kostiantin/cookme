<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{

    public function recipes($theme)
    {
        if(view()->exists('recipes.'.$theme)){
            return view('recipes.'.$theme);
        }
        else {
            return redirect()->action('IndexController@index');
        }
    }

}
