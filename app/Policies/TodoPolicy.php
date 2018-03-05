<?php

namespace App\Policies;

use App\User;
use App\Todo;
use Illuminate\Auth\Access\HandlesAuthorization;

class TodoPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Todo $todo)
    {
       return  $user->id == $todo->user_id;
    }
}
