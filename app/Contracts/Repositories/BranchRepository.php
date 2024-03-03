<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\BranchInterface;
use App\Models\Branch;

class BranchRepository extends BaseRepository implements BranchInterface
{
    public function __construct(Branch $branch)
    {
        $this->model = $branch;
    }
    public function get(): mixed
    {
        return $this->model->query()->get();
    }
    public function store(array $data): mixed
    {
        return  $this->model->query()->create($data);
    }

    public function delete(mixed $id): mixed
    {
        return $this->model->query()->findOrFail($id)->delete($id);
    }

    public function update(mixed $id, array $data): mixed
    {
        return $this->model->query()->findOrFail($id)->update($data);
    }
}
