<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;

use App\Partner;

use App\Course;

use App\Gallery;

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
        $nav_partner = Partner::orderBy('order','ASC')->get();
        $subjects = Course::orderBy('order','ASC')->get();
        $photos = Gallery::orderBy('order','ASC')->get();
        View::share(compact('nav_partner','subjects','photos'));
    }
}
