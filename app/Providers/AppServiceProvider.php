<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Привязываем системное имя User к вашему классу users
        if (!class_exists('App\Models\User')) {
            class_alias(\App\Models\users::class, 'App\Models\User');
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
