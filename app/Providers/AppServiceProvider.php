<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {

    }

    public function boot(): void
    {
        Schema::defaultStringLength(191);

        $this->loadMigrationsFrom([
            database_path('migrations/00_systems'),
            database_path('migrations/01_users'),
            database_path('migrations/02_events'),
        ]);
    }
}
