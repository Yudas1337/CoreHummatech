<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\CategoryProductInterface;
use App\Models\CategoryProduct;
use App\Http\Requests\StoreCategoryProductRequest;
use App\Http\Requests\UpdateCategoryProductRequest;

class CategoryProductController extends Controller
{

    private CategoryProductInterface $categoryProduct;

    public function __construct(CategoryProductInterface $categoryProduct)
    {
        $this->categoryProduct = $categoryProduct;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoryProducts = $this->categoryProduct->get();
        return view('' , compact('categoryProducts'));
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
    public function store(StoreCategoryProductRequest $request)
    {
        $this->categoryProduct->store($request->validated());
        return back()->with('success' , 'Berhasil Menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryProduct $categoryProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryProduct $categoryProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryProductRequest $request, CategoryProduct $categoryProduct)
    {
        $this->categoryProduct->update($request , $categoryProduct->id);
        return back()->with('success' , 'Berhasil Memperbarui Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryProduct $categoryProduct)
    {
        $this->categoryProduct->delete($categoryProduct->id);
        return back()->with('success' , 'Berhasil Menghapus data');
    }
}
