<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\BackgroundInterface;
use App\Contracts\Interfaces\ProductInterface;
use App\Enums\ProductEnum;
use Illuminate\Http\Request;
use App\Contracts\Interfaces\CategoryProductInterface;
use App\Models\CategoryProduct;

class HomeProductController extends Controller
{
    private ProductInterface $product;
    private BackgroundInterface $background;
    private CategoryProductInterface $categoryProduct;

    public function __construct(ProductInterface $product, CategoryProductInterface $categoryProduct, BackgroundInterface $background)
    {
        $this->product = $product;

        $this->categoryProduct = $categoryProduct;
        $this->background = $background;
    }

    public function index()
    {
        $products = $this->product->getByType('company');
        $background = $this->background->getByType('Portofolio');
        $categories = $this->categoryProduct->get();

        return view('landing.product', compact('products', 'background','categories'));
    }

    public function productCategory(Request $request, CategoryProduct $category)
    {
        $products = $this->product->where($category->id);
        // dd($products);
        $categories = $this->categoryProduct->get();
        return view('landing.product', compact('products', 'categories'));
    }
}
