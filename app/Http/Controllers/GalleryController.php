<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\GalleryInterface;
use App\Contracts\Interfaces\ServiceInterface;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    private GalleryInterface $model;
    private ServiceInterface $serviceModel;

    public function __construct(GalleryInterface $gallery, ServiceInterface $service)
    {
        $this->serviceModel = $service;
        $this->model = $gallery;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $serviceData = $this->serviceModel->get()->pluck('name', 'id');
        $gallery = $this->model->get();
        return view('admin.pages.gallery.index', compact('gallery', 'serviceData'));
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
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
