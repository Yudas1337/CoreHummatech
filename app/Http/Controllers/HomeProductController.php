<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\ProductInterface;
use Illuminate\Http\Request;

class HomeProductController extends Controller
{
    private ProductInterface $product;

    public function __construct(ProductInterface $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $products = $this->product->get();
        return view('landing.product', compact('products'));
    }

    public function detail()
    {}
}
