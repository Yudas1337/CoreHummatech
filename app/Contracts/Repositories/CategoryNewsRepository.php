<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\CategoryNewsInterface;
use App\Models\CategoryNews;

class CategoryNewsRepository extends BaseRepository implements CategoryNewsInterface
{
    public function __construct(CategoryNews $categoryNews)
    {
        $this->model = $categoryNews;
    }

    public function get(): mixed
    {
        return $this->model->query()->get();
    }
    public function store(array $data): mixed
    {
        return $this->model->query()->create($data);
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
