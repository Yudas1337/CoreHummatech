<?php

namespace App\Services;

use App\Enums\TypeEnum;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use App\Http\Requests\StoreComingSoonProductRequest;
use App\Http\Requests\UpdateComingSoonProductRequest;
use App\Models\ComingSoonProduct;

class ComingSoonProductService
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

    public function store(StoreComingSoonProductRequest $request): array|bool
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($request->name);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $request->file('image')->store(TypeEnum::PRODUCT->value, 'public');
            return $data;
        }
        return $data;
    }

    public function update(ComingSoonProduct $comingSoonProduct, UpdateComingSoonProductRequest $request): array|bool
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($request->name);

        if ($request->has('image')) {
            $this->remove($comingSoonProduct->image);
            $data['image'] = $request->file('image')->store(TypeEnum::PRODUCT->value, 'public');
        } else {
            $data['image'] = $comingSoonProduct->image;
        }

        return $data;
    }

    public function delete(ComingSoonProduct $comingSoonProduct)
    {
        $this->remove($comingSoonProduct->image);
    }
}
