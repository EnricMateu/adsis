<?php

namespace App\Providers;

use App\Evaluation;
use App\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Observers\UserObserver;
use App\Observers\EvaluationObserver;


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

        User::observe(UserObserver::class);
        Evaluation::observe(EvaluationObserver::class);

        Schema::defaultStringLength(191);
    }
}
