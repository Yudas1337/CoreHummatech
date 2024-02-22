<?php

namespace App\Observers;

use App\Models\Service;
use Faker\Provider\Uuid;
use Illuminate\Support\Str;

class ServiceObserver
{
    public function creating(Service $service): void
    {
        $service->id = Uuid::uuid();
        $service->slug = Str::slug($service->name);
    }

    /**
     * Handle the Service "created" event.
     */
    public function created(Service $service): void
    {
        //
    }

    /**
     * Handle the Service "updated" event.
     */
    public function updated(Service $service): void
    {
        //
    }

    /**
     * Handle the Service "deleted" event.
     */
    public function deleted(Service $service): void
    {
        //
    }

    /**
     * Handle the Service "restored" event.
     */
    public function restored(Service $service): void
    {
        //
    }

    /**
     * Handle the Service "force deleted" event.
     */
    public function forceDeleted(Service $service): void
    {
        //
    }
}
