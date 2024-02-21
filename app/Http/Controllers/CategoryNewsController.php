<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\CategoryNewsInterface;
use App\Models\CategoryNews;
use App\Http\Requests\StoreCategoryNewsRequest;
use App\Http\Requests\UpdateCategoryNewsRequest;

class CategoryNewsController extends Controller
{
    private CategoryNewsInterface $categoryNews ;
    public function __construct(CategoryNewsInterface $categoryNews)
    {
        $this->categoryNews = $categoryNews;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoryNews = $this->categoryNews->get();
        return view('admin.pages.news-category.index' , compact('categoryNews'));
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
    public function store(StoreCategoryNewsRequest $request)
    {
        $this->categoryNews->store($request->validated());
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryNews $categoryNews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryNews $categoryNews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryNewsRequest $request, CategoryNews $categoryNews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryNews $categoryNews)
    {
        //
    }
}
