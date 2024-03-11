<?php

namespace App\Services;

use App\Enums\TypeEnum;
use App\Enums\UploadDiskEnum;
use App\Traits\UploadTrait;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\Sale;
use App\Models\News;
use Illuminate\Support\Str;

class NewsService
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
     * @param StoreSaleRequest $request
     *
     * @return array|bool
     */
    public function store(StoreNewsRequest $request): array|bool
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($request->title);
        $data['image'] = $request->file('image')->store(TypeEnum::NEWS->value, 'public');
        $this->compressImage($data['image'], 'compressed_' . $data['image']);

        return $data;
    }


    /**
     * Handle update data event to models.
     *
     * @param Sale $sale
     * @param UpdateSaleRequest $request
     *
     * @return array|bool
     */
    public function update(News $service, UpdateNewsRequest $request): array|bool
    {
        $data = $request->validated();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $this->remove($service->image);
            $data['image'] = $request->file('image')->store(TypeEnum::NEWS->value, 'public');
        } else {
            $data['image'] = $service->image;
        }

        // Splitting tags data
        $array = json_decode($request->tags, true);
        $values = collect($array)->flatten()->unique()->values();

        $data['slug'] = Str::slug($request->title);
        $data['tags'] = $values->each(fn ($value) => "$value")->join(',');

        return $data;
    }
}
