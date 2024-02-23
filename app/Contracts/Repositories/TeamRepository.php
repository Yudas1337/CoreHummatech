<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\TeamInterface;
use App\Models\Team;

class TeamRepository extends BaseRepository implements TeamInterface
{
    public function __construct(Team $team)
    {
        $this->model = $team;
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
