<?php

namespace App\Repository\project;

use App\Data\ProjectDTO;
use App\Data\StatsDTO;
use Database\PDODatabase;
use Generator;

class ProjectRepository implements ProjectRepositoryInterface
{
    private PDODatabase $db;

    /**
     * @param PDODatabase $db
     */
    public function __construct(PDODatabase $db)
    {
        $this->db = $db;
    }

    public function findTotalMembers()
    {
        $sql = "SELECT COUNT(id) AS totalMembers
                        FROM users";
        return $this->db->query(
            $sql
        )->execute()
            ->getSingleData();
    }

    public function findAll(): Generator
    {
        return $this->db->query(
            "SELECT project_id AS projectID,
                        project_name AS projectName,
                        description AS projectDescription,
                        project_url AS projectURL,
                        commission,
                        rcb AS RCB,
                        status,
                        img_url AS projectIMG,
                        h_metrics AS hMetrics,
                        launch_date AS launchDate,
                        added_date AS added
                    FROM projects
                    ORDER BY launch_date DESC"
        )->execute()
            ->fetch(ProjectDTO::class);
    }
}