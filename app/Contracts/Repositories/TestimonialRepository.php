<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\TestimonialInterface;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialRepository extends BaseRepository implements TestimonialInterface
{
    public function __construct(Testimonial $testimonial)
    {
        $this->model = $testimonial;
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
}
