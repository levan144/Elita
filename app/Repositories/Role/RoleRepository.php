<?php

namespace App\Repositories;

use App\Models\Role;

class RoleRepository implements RoleRepositoryInterface
{
    protected $model;

    public function __construct(Role $model)
    {
        $this->model = $model;
    }

    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    public function find($id): ?Model
    {
        return $this->model->find($id);
    }

    public function update($id, array $attributes): bool
    {
        $record = $this->find($id);
        if ($record) {
            return $record->update($attributes);
        }
        return false;
    }

    public function delete($id): bool
    {
        return $this->model->destroy($id) > 0;
    }

    public function all(array $columns = ['*'])
    {
        return $this->model->all($columns);
    }
}
