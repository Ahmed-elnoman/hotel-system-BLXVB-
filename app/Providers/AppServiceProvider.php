<?php

namespace App\Providers;

use App\Models\Employees;
use App\Mail\WecEmployee;
use App\Models\Guests;
use Illuminate\Support\Facades\Mail;
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
        Guests::created(function($guest) {

            Mail::to($guest)->send(new WecEmployee($guest));

        });
    }
}
