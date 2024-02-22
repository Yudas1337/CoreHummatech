<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\ServiceInterface;
use App\Models\Service;

class ServiceRepository extends BaseRepository implements ServiceInterface
{
    public function __construct(Service $service)
    {
        $this->model = $service;
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
