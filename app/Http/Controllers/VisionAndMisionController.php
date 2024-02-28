<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\VisionAndMisionInterface;
use App\Models\VisionAndMision;
use App\Http\Requests\StoreVisionAndMisionRequest;
use App\Http\Requests\UpdateVisionAndMisionRequest;
use App\Models\MisionItems;

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
        $visionAndMision = VisionAndMision::create(['vision' => $request->vision]);

        if (isset($request->missions) && is_array($request->missions)) {
            foreach ($request->missions as $key => $mission) {
                MisionItems::create([
                    'vision_and_mission_id' => $visionAndMision->id,
                    'mission' => $request->mission[$key],
                ]);
            }

            return back()->with('success', 'Data berhasil ditambahkan');
        } else {
            return back()->with('error', 'Data missions tidak valid');
        }
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
