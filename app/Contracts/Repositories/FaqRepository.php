<?php

namespace App\Contracts\Repositories;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Contracts\Interfaces\FaqInterface;

class FaqRepository extends BaseRepository implements FaqInterface
{
    public function __construct(Faq $faq)
    {
        $this->model = $faq;
    }

    public function customPaginate(Request $request, int $pagination = 10): mixed
    {
        return $this->model->query()->paginate($pagination);
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
