<?php

namespace App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use App\TranslatorLanguages;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $currLocale = Config::get('app.locale');
        $currLang = TranslatorLanguages::get()->where('active','=', '1')->where('locale', '=', $currLocale)->first();

        app('view')->share('currLang', $currLang);
        // variables for layouts/app.blade file
        app('view')->composer('layouts.master', function ($view) {

            $languages = TranslatorLanguages::get()->where('active','=', '1');



            $action = app('request')->route()->getAction();

            $controller = class_basename($action['controller']);

            list($controller, $action) = explode('@', $controller);

            $view->with(compact('controller', 'action', 'languages'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
