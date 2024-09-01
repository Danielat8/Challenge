<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Discussion;


class DiscussionPolicy
{

    public function update(User $user, Discussion $discussion)
    {
        return $user->id === $discussion->user_id || $user->role->name === 'admin';
    }

    public function delete(User $user, Discussion $discussion)
    {
        return $user->id === $discussion->user_id || $user->role->name === 'admin';
    }
}
