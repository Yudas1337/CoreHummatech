<?php

namespace App\Services;

use App\Models\Sale;
use App\Enums\TypeEnum;
use App\Models\Product;
use App\Traits\UploadTrait;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Http\Requests\StoreBackgroundRequest;
use App\Http\Requests\UpdateBackgroundRequest;
use App\Models\Background;
use Illuminate\Support\Facades\Request;

class BackgroundService
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
    public function store(Request $request): array|bool
    {
        // dd($request);
        $data = $request->all();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $request->file('image')->store(TypeEnum::BACKGROUND->value, 'public');
            return $data;
        }
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
    public function update(Background $background, UpdateBackgroundRequest $request): array|bool
    {
        $data = $request->validated();
        if ($request->has('image')) {
            $this->remove($background->image);
            $data['image'] = $request->file('image')->store(TypeEnum::BACKGROUND->value, 'public');
        } else {
            $data['image'] = $background->image;
        }

        return $data;
    }

    public function delete(Background $background)
    {
        $this->remove($background->image);
    }
}
