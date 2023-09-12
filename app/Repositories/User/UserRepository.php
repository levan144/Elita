<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function create(array $payload) {
        return User::create($payload);
    }

    public function update($user_id, $payload) {
        $user = $this->get_by_id($user_id);
        return $user ? $user->update($payload) : null;
    }

    public function get_all()
    {
        return User::get();
    }

    public function get_by_id($user_id)
    {
        return User::where('id', $user_id)->first();
    }
}