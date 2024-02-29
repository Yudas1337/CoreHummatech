<?php

namespace App\Services;

use App\Enums\TypeEnum;
use App\Http\Requests\StoreVisionAndMisionRequest;
use App\Http\Requests\UpdateVisionAndMisionRequest;
use App\Models\MisionItems;
use App\Models\VisionAndMision;
use App\Traits\UploadTrait;

class VisionAndMisionService
{
    public function store(StoreVisionAndMisionRequest $request)
    {
        $data[] = [
            'vision' => $request->vision,
        ];
        // dd($data);
        return $data;
    }

    public function storemision(StoreVisionAndMisionRequest $request, $useId)
    {
        foreach ($request->mission as $key => $value) {
            $data[] = [
                'vision_and_mission_id' => $useId->id,
                'mission' => $value,
            ];


        }
        foreach ($data as $item){
            MisionItems::create($item);
        }
        return $data;
    }

    public function update(UpdateVisionAndMisionRequest $request)
    {

        $data[] = [
            'vision' => $request->vision,
        ];
        // dd($data);
        return $data;
    }

    public function updatemision(UpdateVisionAndMisionRequest $request, MisionItems $misionItems)
    {
        MisionItems::findOrfail($misionItems->id)->update($request->all());
    }

    public function destroy(MisionItems $misionItems)
    {
        $misionItems->delete($misionItems->id);
    }
}
