<?php

namespace App\Repositories\User;

use App\Models\User;

interface UserRepositoryInterface
{
    public function create(array $payload);
    public function update($user_id, $payload);
    public function get_all();
    public function get_by_id($user_id);
}