<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\OrganizationInterface;
use App\Models\Organization;

class OrganizationRepository extends BaseRepository implements OrganizationInterface
{
    public function __construct(Organization $organization)
    {
        $this->model = $organization;
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
