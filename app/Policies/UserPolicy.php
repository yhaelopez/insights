<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        if($user->can(['viewAny users'])) {
            return true;
        }
    }

    public function view(User $user, User $model)
    {
        if($user->can(['view user'])) {
            return true;
        }
    }

    public function create(User $user)
    {
        if($user->can(['create user'])) {
            return true;
        }
    }

    public function update(User $user, User $model)
    {
        if($user->can(['update user'])) {
            return true;
        }
    }

    public function delete(User $user, User $model)
    {
        if($user->can(['delete user'])) {
            if($user->id != $model->id) {
                return true;
            }
        }
    }

    public function restore(User $user, User $model)
    {
        if($user->can(['restore user'])) {
            return true;
        }
    }

    public function permissions(User $user)
    {
        if($user->can(['view user permissions'])) {
            return true;
        }
    }
}
