<?php

namespace App\Services;

use App\Models\Sale;
use App\Enums\TypeEnum;
use App\Http\Requests\StoreProductCompanyRequest;
use App\Models\Product;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use App\Models\ProductFeature;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductCompanyRequest;
use App\Http\Requests\UpdateProductRequest;

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
            'slug' => Str::slug($request->description),
            'link' => $request->link,
            'service_id' => $request->service_id,
            'type' => $request->type,
        ];
        // dd($data);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $request->file('image')->store(TypeEnum::PRODUCT->value, 'public');
            return $data;
        }
        return $data;
    }

    public function storeCompany(StoreProductCompanyRequest $request): array|bool
    {
        $data = $request->validated();

        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->description),
            'description' => $request->description,
            'link' => $request->link,
            'type' => $request->type,
        ];
        // dd($data);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $request->file('image')->store(TypeEnum::PRODUCT->value, 'public');
            return $data;
        }
        return $data;
    }

    public function storefeaturecompany(StoreProductCompanyRequest $request, $product_id)
    {
        // dd($product_id->id);
        foreach ($request->feature as $index => $item) {
            $data = [
                'product_id' => $product_id->id,
                'title' => $request->feature[$index]
            ];
            ProductFeature::create($data);
        }
    }

    public function storefeature(StoreProductRequest $request, $product_id)
    {
        // dd($product_id->id);
        foreach ($request->feature as $index => $item) {
            $data = [
                'product_id' => $product_id->id,
                'description' => $item,
                'title' => $request->title[$index]
            ];
            ProductFeature::create($data);
        }
    }

    public function updatefeature(UpdateProductRequest $request, $product)
    {
        // dd($product_id->id);
        foreach ($request->feature as $index => $item) {
            $data = [
                'product_id' => $product->id,
                'description' => $item,
                'title' => $request->title[$index]
            ];
            ProductFeature::create($data);
        }
    }

    public function updatefeaturecompany(UpdateProductCompanyRequest $request, $product)
    {
        // dd($product_id->id);
        foreach ($request->feature as $index => $item) {
            $data = [
                'product_id' => $product->id,
                'title' => $request->title[$index]
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
            'slug' => Str::slug($request->description),
            'description' => $request->description,
            'link' => $request->link,
            'service_id' => $request->service_id,
            'type' => $request->type,
        ];
        // dd($data);
        if ($request->has('image')) {
            $this->remove($product->image);
            $data['image'] = $request->file('image')->store(TypeEnum::PRODUCT->value, 'public');
        } else {
            $data['image'] = $product->image;
        }

        foreach ($request->id_feature as $fitur)
        {
            ProductFeature::findOrfail($fitur)->delete();
        }

        return $data;
    }

    public function updateCompany(Product $product, UpdateProductCompanyRequest $request): array|bool
    {
        $data = $request->validated();
        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->description),
            'description' => $request->description,
            'link' => $request->link,
            'type' => $request->type,
        ];
        // dd($data);
        if ($request->has('image')) {
            $this->remove($product->image);
            $data['image'] = $request->file('image')->store(TypeEnum::PRODUCT->value, 'public');
        } else {
            $data['image'] = $product->image;
        }

        foreach ($request->id_feature as $fitur)
        {
            ProductFeature::findOrfail($fitur)->delete();
        }

        return $data;
    }
    public function delete(Product $product)
    {
        $this->remove($product->image);
    }
}
