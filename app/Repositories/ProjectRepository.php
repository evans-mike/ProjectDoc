<?php

namespace App\Repositories;

use App\User;

class ProjectRepository
{
    /**
     * Get all of the projects for a given owner.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return $user->projects()
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}