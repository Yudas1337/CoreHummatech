<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\ProductInterface;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Services\ProductService;

class ProductController extends Controller
{
    private ProductInterface $product;
    private ProductService $productService;

    public function __construct(ProductInterface $product , ProductService $productService)
    {
        $this->product = $product;
        $this->productService = $productService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $products = $this->product->get();
        return view('admin.pages.products.index' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = $this->productService->store($request);
        $this->product->store($data);
        return back()->with('success' , 'Produk berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $this->productService->update($product , $request);
        $this->product->update($product->id ,$data);
        return back()->with('success', 'Penjualan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if (!$this->product->delete($product->id)) {
            return back()->with('error', 'Testimoni Gagal Di Hapus');
        }

        $this->productService->remove($product->image);
        return back()->with('success' , 'Testimoni Berhasil Di Hapus');
    }
}
