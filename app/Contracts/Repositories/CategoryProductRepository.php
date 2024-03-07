<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\CategoryProductInterface;
use App\Models\CategoryProduct;

class CategoryProductRepository extends BaseRepository implements CategoryProductInterface
{
    public function __construct(CategoryProduct $categoryProduct)
    {
        $this->model = $categoryProduct;
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
