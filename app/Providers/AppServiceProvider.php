<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
//use Illuminate\View\View;

use Illuminate\Support\Facades\DB;

use App\Models\Pages;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer('*', function($view)
        {
            $navs = DB::table('pages')->where('active', '1')->get();
            $view->with('navs', $navs);
        });

    }
}
