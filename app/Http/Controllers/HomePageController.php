<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\CollabCategoryInterface;
use App\Contracts\Interfaces\CollabMitraInterface;
use App\Contracts\Interfaces\HomePageInterface;
use App\Contracts\Interfaces\NewsInterface;
use App\Contracts\Interfaces\ProductInterface;
use App\Contracts\Interfaces\ProfileInterface;
use App\Contracts\Interfaces\SectionInterface;
use App\Contracts\Interfaces\ServiceInterface;
use App\Contracts\Interfaces\VisitorDetectionInterface;
use App\Http\Requests\StoreVisitorDetectionRequest;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    private ProfileInterface $profile;
    private ServiceInterface $service;
    private NewsInterface $news;
    private VisitorDetectionInterface $visitorDetection;
    private CollabMitraInterface $mitras;
    private SectionInterface $section;
    private ProductInterface $product;


    public function __construct( ProfileInterface $profile,VisitorDetectionInterface $visitorDetection, ServiceInterface $service, NewsInterface $news, CollabMitraInterface $mitras, SectionInterface $section, ProductInterface $product)
    {
        $this->profile = $profile;
        $this->service = $service;
        $this->news = $news;
        $this->visitorDetection = $visitorDetection;
        $this->mitras = $mitras;
        $this->section = $section;
        $this->product = $product;

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visitorDetections = $this->visitorDetection->GetCount();
        $profile = $this->profile->get();
        $service = $this->service->get();
        $news = $this->news->get();
        $mitras = $this->mitras->get();
        $section = $this->section->get();
        $product = $this->product->getByType('company');
        return view('landing.index', compact('profile','service','news','mitras','section','product' ,'visitorDetections'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function mitra()
    {
        $mitras = $this->mitras->get();
        return view('landing.mitra' , compact('mitras'));
    }
}
