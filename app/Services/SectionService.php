<?php

namespace App\Services;

use App\Enums\TypeEnum;
use App\Traits\UploadTrait;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\StoreSectionRequest;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Http\Requests\UpdateSectionRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Section;
use App\Models\Service;

class SectionService
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
    public function store(StoreSectionRequest $request): array|bool
    {
        $data = $request->validated();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $request->file('image')->store(TypeEnum::SALE->value, 'public');
            $this->compressImage($data['image'],'compressed_' . $data['image']);
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
    public function update(Section $section, UpdateSectionRequest $request): array|bool
    {
        $data = $request->validated();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $this->remove($section->image);
            $data['image'] = $request->file('image')->store(TypeEnum::SECTION->value, 'public');
        } else {
            $data['image'] = $section->image;
        }
        return $data;
    }
}
