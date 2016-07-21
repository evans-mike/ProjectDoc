<?php

namespace App\Repositories;

use App\User;
use App\Project;

class ProjectRepository extends Repository
{
    public function __construct(Project $project)
    {
        parent::__construct($project);
    }

    /**
     * Get all of the projects for a given owner.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return Project::where('user_id', $user->id)
                    ->orderBy('id', 'desc')
                    ->get();
    }
}

