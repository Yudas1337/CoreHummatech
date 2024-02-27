<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\NewsCategoryInterface;
use App\Models\NewsCategory;

class NewsCategoryRepository extends BaseRepository implements NewsCategoryInterface {
    public function __construct(NewsCategory $newsCategory)
    {
        $this->model = $newsCategory;
    }

    /**
     * store
     *
     * @param  mixed $data
     * @return mixed
     */
    public function store(array $data): mixed
    {
        return $this->model->query()
            ->create($data);
    }

    /**
     * delete
     *
     * @param  mixed $id
     * @return mixed
     */
    public function delete(mixed $id): mixed
    {
        return $this->model->query()
            ->findOrFail($id)
            ->delete();
    }
}
