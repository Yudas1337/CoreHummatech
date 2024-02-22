<?php

namespace App\Services;

use App\Enums\TypeEnum;
use App\Http\Requests\StoreProductRequest;
use App\Traits\UploadTrait;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Models\Product;
use App\Models\Sale;

class ProductService
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
    public function store(StoreProductRequest $request): array|bool
    {
        $data = $request->validated();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $request->file('image')->store(TypeEnum::PRODUCT->value, 'public');
            return $data;
        }
        return false;
    }

    /**
     * Handle update data event to models.
     *
     * @param Sale $sale
     * @param UpdateSaleRequest $request
     *
     * @return array|bool
     */
    public function update(Product $product, UpdateProductRequest $request): array|bool
    {
        $data = $request->validated();
        $oldThumbnail = $product->image;
        if ($request->hasFile('image')) {
            $this->remove($oldThumbnail);
            $oldThumbnail = $this->upload(TypeEnum::PRODUCT->value, $request->file('image'));
        }else{
            $data['image'] = $oldThumbnail;
            return $data;
        }
    }
}
