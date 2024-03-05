<?php

namespace App\Services;

use App\Enums\TypeEnum;
use App\Http\Requests\StoreProductRequest;
use App\Traits\UploadTrait;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Models\Product;
use App\Models\ProductFeature;
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

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'link' => $request->link,
            'service_id' => $request->service_id,
        ];
        // dd($data);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $request->file('image')->store(TypeEnum::PRODUCT->value, 'public');
            return $data;
        }
        return $data;
    }

    public function storefeature(StoreProductRequest $request, $product_id)
    {
        // dd($product_id->id);
        foreach ($request->feature as $item) {
            $data = [
                'product_id' => $product_id->id,
                'name' => $item,
            ];
            ProductFeature::create($data);
        }
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
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'link' => $request->link,
            'service_id' => $request->service_id,
        ];
        // dd($data);
        if ($request->has('image')) {
            $this->remove($product->image);
            $data['image'] = $request->file('image')->store(TypeEnum::PRODUCT->value, 'public');
        } else {
            $data['image'] = $product->image;
        }
        dd($request->feature);
        if($request->removed_feature){

            $fes = $request->removed_feature;

            foreach($fes as $fe){
                $feId = json_decode($fe, true)['featureId'];
                // dd($feId);
                ProductFeature::where('id', $feId)->delete();
            }

        }
        return $data;
    }
}
