<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\GaleryImageInterface;
use App\Contracts\Interfaces\GalleryInterface;
use App\Contracts\Interfaces\ServiceInterface;
use App\Helpers\ResponseHelper;
use App\Http\Requests\StoreGaleryRequest;
use App\Http\Requests\StoreGalleryRequest;
use App\Models\Gallery;
use App\Services\GaleryService;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    private GaleryImageInterface $galleryimage;
    private GaleryService $galeryService;
    private GalleryInterface $model;
    private ServiceInterface $serviceModel;

    public function __construct(GalleryInterface $gallery, ServiceInterface $service , GaleryService $galeryService , GaleryImageInterface $galleryimage)
    {
        $this->serviceModel = $service;
        $this->model = $gallery;
        $this->galleryimage = $galleryimage;
        $this->galeryService = $galeryService;
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
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGaleryRequest $request)
    {
        $data = $this->galeryService->store($request);
        $gallerie_id = $this->model->store($data)->id;
        foreach ($data['image'] as $img) {
            $this->galleryimage->store([
                'gallerie_id' => $gallerie_id,
                'image' => $img,
            ]);
        }
        return ResponseHelper::success(null , trans('alert.add_success'));
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
