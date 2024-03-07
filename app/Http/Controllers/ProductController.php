<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\FaqInterface;
use App\Contracts\Interfaces\ProductFeatureInterface;
use App\Models\Product;
use App\Models\ProductFeature;
use App\Services\ProductService;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Contracts\Interfaces\ProductInterface;
use App\Contracts\Interfaces\ServiceInterface;
use App\Contracts\Interfaces\TestimonialInterface;
use App\Http\Requests\StoreProductCompanyRequest;
use App\Http\Requests\UpdateProductCompanyRequest;

class ProductController extends Controller
{
    private ProductInterface $product;
    private ProductService $productService;
    private ServiceInterface $service;
    private TestimonialInterface $testimonial;
    private FaqInterface $faq;
    private ProductFeatureInterface $productFeature;

    public function __construct(ProductInterface $product, ProductFeatureInterface $productFeature, ProductService $productService, ServiceInterface $service, TestimonialInterface $testimonial, FaqInterface $faq)
    {
        $this->product = $product;
        $this->testimonial = $testimonial;
        $this->productService = $productService;
        $this->service = $service;
        $this->faq = $faq;
        $this->productFeature = $productFeature;
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

    public function storeCompany(StoreProductCompanyRequest $request)
    {
        $data = $this->productService->storeCompany($request);
        $product_id = $this->product->store($data);
        $this->productService->storefeaturecompany($request, $product_id);
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

    public function editCompany(Product $product)
    {
        $services = $this->service->get();
        $productfeatureFirst = $this->productFeature->getByServiceId($product->id)->First();
        $productfeatures = $this->productFeature->getByServiceId($product->id);


        return view('admin.pages.products.editCompany', compact( 'services', 'productfeatures', 'product', 'productfeatureFirst'));
    }

    public function edit(Product $product)
    {
        $services = $this->service->get();
        $productfeatureFirst = $this->productFeature->getByServiceId($product->id)->First();
        $productfeatures = $this->productFeature->getByServiceId($product->id);
        // dd($productfeature);

        return view('admin.pages.products.edit', compact('services', 'productfeatures', 'product', 'productfeatureFirst'));
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

    /**
     * Update the specified resource in storage.
     */
    public function updateCompany(UpdateProductCompanyRequest $request, Product $product)
    {
        // dd($request->all());
        $data = $this->productService->updateCompany($product, $request);
        $this->product->update($product->id, $data);
        $this->productService->updatefeaturecompany($request, $product);
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
        $this->productService->delete($product);
        $this->product->delete($product->id);
        return back()->with('success', 'Produk Berhasil Di Hapus');
    }

    public function showproduct(Product $product)
    {
        $testimonial = $this->testimonial->get();
        $id  = $product->id;
        $faqs = $this->faq->ServiceProductShow('product_id', $id);
        return view('landing.product.product-detail', compact('product', 'testimonial', 'faqs'));
    }
}
