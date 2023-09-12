<?php

namespace App\Repositories\Project;

use App\Models\Project;

class ProjectRepository implements ProjectRepositoryInterface
{
    public function create(array $payload) {
        return Project::create($payload);
    }

    public function update($project_id, $payload) {
        $project = $this->get_by_id($project_id);
        return $project ? $project->update($payload) : null;
    }

    public function get_all()
    {
        $all= Project::get();
        return $all;
    }

    public function get_by_id($project_id)
    {
        return Project::where('id', $project_id)->first();
    }
}