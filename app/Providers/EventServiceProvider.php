<?php

namespace App\Providers;

use App\Models\EnterpriseStructure;
use App\Models\News;
use App\Models\Sale;
use App\Models\SalesPackage;
use App\Observers\NewsObserver;
use App\Models\Testimonial;
use App\Observers\EnterpriseStructureObserver;
use App\Observers\SaleObserver;
use App\Observers\SalesPackageObserver;
use App\Observers\TestimonialObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        News::observe(NewsObserver::class);
        Sale::observe(SaleObserver::class);
        EnterpriseStructure::observe(EnterpriseStructureObserver::class);
        SalesPackage::observe(SalesPackageObserver::class);
        Testimonial::observe(TestimonialObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
