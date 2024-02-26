<?php

namespace App\Services;

use App\Enums\TypeEnum;
use App\Http\Requests\UpdateEnterpriseStructureRequest;
use App\Traits\UploadTrait;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Models\EnterpriseStructure;
use App\Models\Sale;
use App\Models\News;
use Illuminate\Support\Str;

class EnterpriseStructureService
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
    public function store(UpdateEnterpriseStructureRequest $request): array|bool
    {
        $data = $request->validated();

        // Storing data
        $data['image'] = $request->file('image')->store(TypeEnum::ENTERPRISESTRUCTURE->value, 'public');
        $data['products'] = json_encode($request->products);

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
    public function update(EnterpriseStructure $service, UpdateEnterpriseStructureRequest $request): array|bool
    {
        $data = $request->validated();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $this->remove($service->image);
            $data['image'] = $request->file('image')->store(TypeEnum::ENTERPRISESTRUCTURE->value, 'public');
        } else {
            $data['image'] = $service->image;
        }

        // Splitting tags data
        $data['products'] = json_encode($request->products);

        return $data;
    }
}
