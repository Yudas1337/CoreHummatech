<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\PositionInterface;
use App\Models\Position;

class PositionRepository extends BaseRepository implements PositionInterface
{
    public function __construct(Position $position)
    {
        $this->model = $position;
    }

    public function get(): mixed
    {
        return $this->model->query()->get();
    }
    public function store(array $data): mixed
    {
        return $this->model->query()->create($data);
    }
    public function update(mixed $id, array $data): mixed
    {
        return $this->model->query()->findOrFail($id)->update($data);
    }
    public function delete(mixed $id): mixed
    {
        return $this->model->query()->findOrFail($id)->delete($id);
    }
}
