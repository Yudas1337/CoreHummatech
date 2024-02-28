<?php

namespace App\Services;

use App\Enums\TypeEnum;
use App\Models\MisionItems;
use App\Models\VisionAndMision;
use App\Traits\UploadTrait;

class VisionAndMisionService
{

    public function createVisionAndMision($vision, $mision)
    {
        return VisionAndMision::create(['vision' => $vision]);
    }

    public function createMisionItems(VisionAndMision $visionAndMision, $vision, $mision)
    {
        return MisionItems::create([
            'vision_and_mission_id' => $visionAndMision->id,
            // 'vision' => $vision,
            'mission' => $mision,
        ]);
    }
}
