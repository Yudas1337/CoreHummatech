<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GaleryImage;
use Illuminate\Http\Request;
use App\Helpers\ResponseHelper;
use App\Services\GaleryService;
use App\Http\Requests\StoreGaleryRequest;
use App\Http\Requests\StoreGalleryRequest;
use App\Contracts\Interfaces\GalleryInterface;
use App\Contracts\Interfaces\ServiceInterface;
use App\Contracts\Interfaces\GaleryImageInterface;
use App\Http\Requests\UpdateGaleryImageRequest;

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
        $gallery = $this->galleryimage->get();
        // dd($gallery);
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
        $gallerie_id = $this->model->store([
            'name' => $data['name'],
            'service_id' => $data['service_id'],
        ])->id;
        foreach ($data['image'] as $img) {
            $this->galleryimage->store([
                'galleries_id' => $gallerie_id,
                'image' => $img,
            ]);
        }
        return redirect()->back();
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
    public function update(UpdateGaleryImageRequest $request, GaleryImage $galeryImage)
    {
        $data = $this->galeryService->update($galeryImage, $request);
        $this->galleryimage->update($galeryImage->id, $data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GaleryImage $galeryImage)
    {
        $this->galeryService->delete($galeryImage);
        $this->galleryimage->delete($galeryImage->id);
        return redirect()->back();
    }
}
