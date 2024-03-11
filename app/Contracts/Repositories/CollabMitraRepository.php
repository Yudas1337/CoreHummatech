<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\CollabMitraInterface;
use App\Models\CollabMitra;

class CollabMitraRepository extends BaseRepository implements CollabMitraInterface
{
    public function __construct(CollabMitra $collabMitra)
    {
        $this->model = $collabMitra;
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
    public function GetCount(): mixed
    {
        return $this->model->query()->count();
    }
}
