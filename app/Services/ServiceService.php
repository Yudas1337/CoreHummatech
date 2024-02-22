<?php

namespace App\Services;

use App\Enums\TypeEnum;
use App\Traits\UploadTrait;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;

class ServiceService
{
    use UploadTrait;

    /**
     * Handle custom upload validation.
     *
     * @param string $disk
     * @param object $file
     * @param string|null $old_file
     * @return string
     */
    public function validateAndUpload(string $disk, object $file, string $old_file = null): string
    {
        if ($old_file) $this->remove($old_file);

        return $this->upload($disk, $file);
    }

    /**
     * Handle store data event to models.
     *
     * @param StoreServiceRequest $request
     *
     * @return array|bool
     */
    public function store(StoreServiceRequest $request): array|bool
    {
        $data = $request->validated();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $request->file('image')->store(TypeEnum::SERVICE->value, 'public');
            return $data;
        }
        return false;
    }

    /**
     * Handle update data event to models.
     *
     * @param Service $service
     * @param UpdateServiceRequest $request
     *
     * @return array|bool
     */
    public function update(Service $service, UpdateServiceRequest $request): array|bool
    {
        $data = $request->validated();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $this->remove($service->image);
            $data['image'] = $request->file('image')->store(TypeEnum::SERVICE->value, 'public');
        } else {
            $data['image'] = $service->image;
        }

        return $data;
    }
}
