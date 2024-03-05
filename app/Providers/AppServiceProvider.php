<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Contracts\Interfaces\FaqInterface;
use App\Contracts\Interfaces\NewsInterface;
use App\Contracts\Interfaces\SaleInterface;
use App\Contracts\Interfaces\TeamInterface;
use App\Contracts\Interfaces\ForceInterface;
use App\Contracts\Interfaces\BranchInterface;
use App\Contracts\Repositories\FaqRepository;

use App\Contracts\Interfaces\ProductInterface;
use App\Contracts\Interfaces\ProfileInterface;
use App\Contracts\Interfaces\SectionInterface;
use App\Contracts\Interfaces\ServiceInterface;
use App\Contracts\Repositories\NewsRepository;
use App\Contracts\Repositories\SaleRepository;
use App\Contracts\Repositories\TeamRepository;
use App\Contracts\Interfaces\PositionInterface;
use App\Contracts\Repositories\ForceRepository;
use App\Contracts\Interfaces\NewsImageInterface;
use App\Contracts\Interfaces\ProcedureInterface;
use App\Contracts\Repositories\BranchRepository;
use App\Contracts\Repositories\ProductRepository;

use App\Contracts\Repositories\ProfileRepository;
use App\Contracts\Repositories\SectionRepository;
use App\Contracts\Repositories\ServiceRepository;
use App\Contracts\Interfaces\CollabMitraInterface;
use App\Contracts\Interfaces\SosialMediaInterface;
use App\Contracts\Interfaces\TestimonialInterface;
use App\Contracts\Repositories\PositionRepository;
use App\Contracts\Interfaces\CategoryNewsInterface;
use App\Contracts\Interfaces\NewsCategoryInterface;
use App\Contracts\Interfaces\SalesPackageInterface;
use App\Contracts\Repositories\NewsImageRepository;
use App\Contracts\Repositories\ProcedureRepository;
use App\Contracts\Interfaces\CollabCategoryInterface;
use App\Contracts\Interfaces\TermsconditionInterface;
use App\Contracts\Repositories\CollabMitraRepository;
use App\Contracts\Repositories\SosialMediaRepository;
use App\Contracts\Repositories\TestimonialRepository;
use App\Contracts\Interfaces\VisionAndMisionInterface;
use App\Contracts\Repositories\CategoryNewsRepository;
use App\Contracts\Repositories\NewsCategoryRepository;
use App\Contracts\Repositories\SalesPackageRepository;
use App\Contracts\Repositories\CollabCategoryRepository;
use App\Contracts\Repositories\TermsconditionRepository;
use App\Contracts\Repositories\GaleryImageRepository;
use App\Contracts\Repositories\VisionAndMisionRepository;
use App\Contracts\Interfaces\EnterpriseStructureInterface;
use App\Contracts\Interfaces\GaleryImageInterface;
use App\Contracts\Interfaces\OrganizationInterface;
use App\Contracts\Repositories\OrganizationRepository;
use App\Contracts\Interfaces\GalleryInterface;
use App\Contracts\Interfaces\StructureInterface;
use App\Contracts\Repositories\GalleryRepository;
use App\Contracts\Interfaces\VacancyInterface;
use App\Contracts\Repositories\EnterpriseStructureRepository;
use App\Contracts\Repositories\StructureRepository;
use App\Contracts\Repositories\VacancyRepository;

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
        NewsInterface::class => NewsRepository::class,
        CollabMitraInterface::class => CollabMitraRepository::class,
        SosialMediaInterface::class => SosialMediaRepository::class,
        SectionInterface::class => SectionRepository::class,
        PositionInterface::class => PositionRepository::class,
        TeamInterface::class => TeamRepository::class,
        TestimonialInterface::class => TestimonialRepository::class,
        VisionAndMisionInterface::class => VisionAndMisionRepository::class,
        ProfileInterface::class => ProfileRepository::class,
        EnterpriseStructureInterface::class => EnterpriseStructureRepository::class,
        FaqInterface::class => FaqRepository::class,
        NewsCategoryInterface::class => NewsCategoryRepository::class,
        NewsImageInterface::class => NewsImageRepository::class,
        TermsconditionInterface::class => TermsconditionRepository::class,
        ProcedureInterface::class => ProcedureRepository::class,
        ForceInterface::class => ForceRepository::class,
        GalleryInterface::class => GalleryRepository::class,
        VacancyInterface::class => VacancyRepository::class,
        StructureInterface::class => StructureRepository::class
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
        Paginator::useBootstrapFive();
    }
}
