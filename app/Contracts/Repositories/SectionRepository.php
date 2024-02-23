<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\SectionInterface;
use App\Models\Section;

class SectionRepository extends BaseRepository implements SectionInterface
{
    public function __construct(Section $section)
    {
        $this->model = $section ;
    }

    public function get(): mixed
    {
        return $this->model->query()->get();
    }
    public function store(array $data): mixed
    {
        return $this->model->query()->create($data);
    }
}
