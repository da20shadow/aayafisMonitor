<?php

namespace App\Service\project;

use App\Repository\project\ProjectRepositoryInterface;
use Generator;

class ProjectService implements ProjectServiceInterface
{

    private ProjectRepositoryInterface $projectRepository;

    /**
     * @param ProjectRepositoryInterface $projectRepository
     */
    public function __construct(ProjectRepositoryInterface $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    public function getTotalMembers()
    {
        return $this->projectRepository->findTotalMembers();
    }

    public function getAll(): Generator
    {
        return $this->projectRepository->findAll();
    }
}