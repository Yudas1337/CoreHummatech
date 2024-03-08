<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\CollabMitraInterface;
use App\Contracts\Interfaces\NewsInterface;
use App\Contracts\Interfaces\ProductInterface;
use App\Contracts\Interfaces\ServiceInterface;
use App\Contracts\Interfaces\VisitorDetectionInterface;
use App\Services\HomeService;

class HomeController extends Controller
{
    private VisitorDetectionInterface $visitorDetection;
    private ProductInterface $product;
    private CollabMitraInterface $mitra;
    private NewsInterface $news;
    private ServiceInterface $service;
    private HomeService $homeService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(HomeService $homeService, VisitorDetectionInterface $visitorDetection, ServiceInterface $service, ProductInterface $product, NewsInterface $news, CollabMitraInterface $mitra)
    {
        $this->middleware('auth');
        $this->visitorDetection = $visitorDetection;
        $this->service = $service;
        $this->news = $news;
        $this->homeService = $homeService;
        $this->mitra = $mitra;
        $this->product = $product;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $visitorDetections = $this->visitorDetection;
        $chart = $this->homeService->Chart($visitorDetections);
        $services = $this->service->GetCount();
        $products = $this->product->GetCount();
        $newss = $this->news->GetCount();
        $mitras = $this->mitra->GetCount();
        return view('admin.pages.dashboard.index', compact('chart', 'services', 'products', 'newss', 'mitras'));
    }
}
