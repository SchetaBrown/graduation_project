<?php

namespace App\Providers;

use App\Repositories\EventRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\EventRepositoryInterface;

class AppRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */

    private array $BINDINGS = [
        EventRepositoryInterface::class => EventRepository::class,
    ];

    public function register(): void
    {
        foreach ($this->BINDINGS as $abstract => $concrete) {
            $this->app->bind($abstract, $concrete);
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
