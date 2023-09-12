<?php

namespace App\Services;

use App\Repositories\Project\ProjectRepositoryInterface;

class ProjectServices
{

    protected $projectRepository;

    public function __construct(ProjectRepositoryInterface $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    public function create($payload)
    {
        return $this->projectRepository->create($payload);
    }

    public function update($project_id, $payload)
    {
        return $this->projectRepository->update($project_id, $payload);
    }

    public function get_all()
    {
        return $this->projectRepository->get_all();
    }

    public function get_by_id($project_id)
    {
        return $this->projectRepository->get_by_id($project_id);
    }

}
