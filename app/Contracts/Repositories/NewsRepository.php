<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\NewsInterface;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class NewsRepository extends BaseRepository implements NewsInterface
{
    public function __construct(News $news)
    {
        $this->model = $news;
    }
    public function get(): mixed
    {
        return $this->model->query()->get();
    }

    public function customPaginate(Request $request, int $pagination = 10): mixed
    {
        return $this->model->query()->paginate($pagination);
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

    public function slug(mixed $slug): mixed
    {
        return $this->model->query()->where('slug', $slug)->firstOrFail();
    }
}
