<?php

namespace App\Providers;

use App\Http\View\Composers\CategoryComposer;
use App\Http\View\Composers\UserComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer(['layouts.main'], UserComposer::class);
        View::composer(['layouts.main_sidebar'], CategoryComposer::class);
        View::composer(['layouts.user_sidebar'], CategoryComposer::class);
    }
}
