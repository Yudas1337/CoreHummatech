<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductFeature;
use App\Services\ProductService;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Contracts\Interfaces\ProductInterface;
use App\Contracts\Interfaces\ServiceInterface;
use App\Contracts\Interfaces\TestimonialInterface;

class ProductController extends Controller
{
    private ProductInterface $product;
    private ProductService $productService;
    private ServiceInterface $service;
    private TestimonialInterface $testimonial;

    public function __construct(ProductInterface $product, ProductService $productService, ServiceInterface $service, TestimonialInterface $testimonial)
    {
        $this->product = $product;
        $this->testimonial = $testimonial;
        $this->productService = $productService;
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->product->get();
        $services = $this->service->get();
        return view('admin.pages.products.index', compact('products', 'services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = $this->service->get();
        // dd($services);
        return view('admin.pages.products.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = $this->productService->store($request);
        $product_id = $this->product->store($data);
        $this->productService->storefeature($request, $product_id);
        return to_route('product.index')->with('success', 'Produk berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $products = $this->product->show($product->id);
        return view('admin.pages.products.detail', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Product $product)
    {
        $services = $this->service->get();
        $productfeature = ProductFeature::where('product_id', $product->id)->get();
        // dd($productfeature);
        return view('admin.pages.products.edit', compact('product', 'services', 'productfeature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        // dd($request->all());
        $data = $this->productService->update($product, $request);
        $this->product->update($product->id, $data);
        $this->productService->updatefeature($request, $product);
        return to_route('product.index')->with('success', 'Produk Berhasil Di Update');
    }

    public function feature(ProductFeature $ProductFeature)
    {
        // dd($ProductFeature);
        $ProductFeature->delete();
        return back();
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
        return back()->with('success', 'Testimoni Berhasil Di Hapus');
    }

    public function product()
    {
        $products = $this->product->get();
        return view('landing.product', compact('products'));
    }

    public function showproduct(Product $product)
    {
        $testimonial = $this->testimonial->get()->where('product_id', $product->id);
        return view('landing.product.product-detail', compact('product', 'testimonial'));
    }
}
