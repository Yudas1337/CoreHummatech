<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\VisionAndMisionInterface;
use App\Models\VisionAndMision;

class VisionAndMisionRepository extends BaseRepository implements VisionAndMisionInterface
{
    public function __construct(VisionAndMision $visionAndMision)
    {
        $this->model = $visionAndMision;
    }

    public function get(): mixed
    {
        return $this->model->query()->get();
    }
}
