<?php

namespace App\Providers;

use App\Contracts\Interfaces\BranchInterface;
use App\Contracts\Interfaces\CategoryNewsInterface;
use App\Contracts\Interfaces\CollabCategoryInterface;
use App\Contracts\Interfaces\CollabMitraInterface;
use App\Contracts\Interfaces\PositionInterface;
use App\Contracts\Interfaces\ProductInterface;
use App\Contracts\Repositories\BranchRepository;
use App\Contracts\Repositories\CategoryNewsRepository;
use App\Contracts\Repositories\CollabCategoryRepository;
use App\Contracts\Interfaces\SaleInterface;
use App\Contracts\Repositories\ProductRepository;
use App\Contracts\Interfaces\SalesPackageInterface;
use App\Contracts\Interfaces\SectionInterface;
use App\Contracts\Interfaces\ServiceInterface;
use App\Contracts\Interfaces\SosialMediaInterface;
use App\Contracts\Interfaces\TeamInterface;
use App\Contracts\Repositories\CollabMitraRepository;
use App\Contracts\Repositories\PositionRepository;
use App\Contracts\Repositories\SaleRepository;
use App\Contracts\Repositories\SalesPackageRepository;
use App\Contracts\Repositories\SectionRepository;
use App\Contracts\Repositories\ServiceRepository;
use App\Contracts\Repositories\SosialMediaRepository;
use App\Contracts\Repositories\TeamRepository;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    private array $register = [
        CategoryNewsInterface::class => CategoryNewsRepository::class,
        BranchInterface::class => BranchRepository::class,
        CollabCategoryInterface::class => CollabCategoryRepository::class,
        SaleInterface::class => SaleRepository::class,
        ProductInterface::class => ProductRepository::class,
        SalesPackageInterface::class => SalesPackageRepository::class,
        ServiceInterface::class => ServiceRepository::class,
        CollabMitraInterface::class => CollabMitraRepository::class,
        SosialMediaInterface::class => SosialMediaRepository::class,
        SectionInterface::class => SectionRepository::class,
        PositionInterface::class => PositionRepository::class,
        TeamInterface::class => TeamRepository::class
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
