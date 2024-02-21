<?php

namespace App\Providers;

use App\Contracts\Interfaces\CategoryNewsInterface;
use App\Contracts\Repositories\CategoryNewsRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    private array $register = [
            CategoryNewsInterface::class => CategoryNewsRepository::class
    ];
    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->register as $index => $value) $this->app->bind($index, $value);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
