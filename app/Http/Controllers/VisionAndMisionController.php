<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\VisionAndMisionInterface;
use App\Models\VisionAndMision;
use App\Http\Requests\StoreVisionAndMisionRequest;
use App\Http\Requests\UpdateVisionAndMisionRequest;

class VisionAndMisionController extends Controller
{
    private VisionAndMisionInterface $visionAndMision;
    public function __construct(VisionAndMisionInterface $visionAndMision)
    {
        $this->visionAndMision = $visionAndMision;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visionAndMisions = $this->visionAndMision->get();
        return view('admin.pages.vision-mision.index' , compact('visionAndMisions'));
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
    public function store(StoreVisionAndMisionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(VisionAndMision $visionAndMision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VisionAndMision $visionAndMision)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVisionAndMisionRequest $request, VisionAndMision $visionAndMision)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VisionAndMision $visionAndMision)
    {
        //
    }
}
