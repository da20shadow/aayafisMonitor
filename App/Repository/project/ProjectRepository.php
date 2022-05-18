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

    public function getMonitorStatistics(): array
    {

        $totalMembers = $this->db->query(
            "
            SELECT COUNT(id) AS totalMembers
            FROM users;"
        )->execute()
            ->getSingleData();
        $totalMembers = $totalMembers['totalMembers'];

        $paidRCB = $this->db->query(
            "
            SELECT SUM(paid_rcb) AS paidRCB
            FROM users;"
        )->execute()
            ->getSingleData();
        $paidRCB = $paidRCB['paidRCB'];

        $rcbProcessed = $this->db->query(
            "
            SELECT COUNT(rcb_id) AS rcbCount
            FROM rcb_requests;"
        )->execute()
            ->getSingleData();
        $rcbProcessed = $rcbProcessed['rcbCount'];

        $lastRCB = $this->db->query(
            "
            SELECT rcb, user_id
            FROM rcb_requests ORDER BY date DESC LIMIT 10;"
        )->execute()
            ->getAllData();

        $lastRCBPaidUsers = [];
        $i = 0;
        foreach ($lastRCB as $rcb) {

            $user_id = $rcb['user_id'];
            $paid = $rcb['rcb'];
            $username = $this->db->query(
                "SELECT username
                FROM users
                WHERE id = :user_id"
            )->execute(
                array(":user_id"=>$user_id)
            )->getSingleData();
            $username = $username['username'];
            $current = ["username" => $username, "rcb" => $paid];
            $lastRCBPaidUsers[$i] = $current;
            $i++;
        }

        $stat = StatsDTO::create($totalMembers,$paidRCB,$rcbProcessed);
        return array($stat,$lastRCBPaidUsers);
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