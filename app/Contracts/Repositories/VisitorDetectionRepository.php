<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\VisitorDetectionInterface;
use App\Models\VisitorDetection;
use PhpParser\Node\Expr\FuncCall;

class VisitorDetectionRepository extends BaseRepository implements VisitorDetectionInterface
{
    public function __construct(VisitorDetection $visitorDetection)
    {
        $this->model = $visitorDetection;
    }

    public function GetCount(): mixed
    {
        return $this->model->query()->count();
    }

}
