<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface PermissionRepositoryInterface
{
    public function create(array $attributes): Model;

    public function find($id): ?Model;

    public function update($id, array $attributes): bool;

    public function delete($id): bool;

    public function all(array $columns = ['*']);
}
