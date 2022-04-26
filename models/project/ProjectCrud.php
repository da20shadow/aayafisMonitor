<?php

class ProjectCrud
{
    private static ?ProjectCrud $instance = null;
    private static array $allProjects;
    private $pdo;

    private function __construct($pdo)
    {
        $this->pdo = $pdo;
        $sql = "SELECT * FROM projects";

        try {
            $stm = $pdo->prepare($sql);
            $stm->execute();
            self::$allProjects = $stm->fetchAll(PDO::FETCH_ASSOC);
        }catch (Exception $exception){
            echo ("Exception message: " . $exception->getMessage());
            return;
        }
    }
    public static function getInstance($pdo): ?ProjectCrud
    {
        if (self::$instance == null)
        {
            self::$instance = new ProjectCrud($pdo);
        }

        return self::$instance;
    }

    /**
     * @return array
     */
    public static function getAllProjects(): array
    {
        return self::$allProjects ;
    }

    public static function getProjectById($id){
        foreach (self::$allProjects as $project){
            if ($project['project_id'] == $id){
                return $project;
            }
        }
        return null;
    }

    public static function getTotalProjects(): int
    {
        return count(self::$allProjects);
    }

    public function updateProjectStatus($project_id,$status): bool
    {
        if (self::getProjectById($project_id) == null){
            $_SESSION['id_error'] = "Wrong Project ID!";
            return false;
        }
        $sql = "UPDATE projects
                SET status = :status
                WHERE project_id = :project_id";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindparam(':status', $status);
            $stmt->bindparam(':project_id', $project_id);
            $stmt->execute();
            return true;
        }catch (Exception $e){
            $_SESSION['id_error'] = "Project With Such ID Doesn't Exist!";
            return false;
        }
    }

    public function updateProjectId($project_id,$project_name,$url,$h_metrics,
                                           $img_url,$commission,$rcb,$status,$description,$launchDate): bool
    {
        if (self::getProjectById($project_id) == null){
            $_SESSION['id_error'] = "Wrong Project ID!";
            return false;
        }

        $sql = "UPDATE projects
                SET project_name = :project_name, project_url = :url,
                    description = :description, commission = :commission,
                    rcb = :rcb, status = :status, img_url = :img_url,
                    h_metrics = :h_metrics, launch_date = :launch_date
                WHERE project_id = :project_id";
        try {
            $stmt = $this->pdo->prepare($sql);

//            $stmt->bindparam(':project_name', $project_name);
//            $stmt->bindparam(':url', $url);
//            $stmt->bindparam(':h_metrics', $h_metrics);
//            $stmt->bindparam(':img_url', $img_url);
//            $stmt->bindparam(':commission', $commission);
//            $stmt->bindparam(':rcb', $rcb);
//            $stmt->bindparam(':status', $status);
//            $stmt->bindparam(':description', $description);
//            $stmt->bindparam(':project_id', $project_id);
//            $stmt->bindparam(':launch_date', $launchDate);
            $stmt->execute(array(
                ":project_name" => $project_name,
                ":url" => $url,
                ":h_metrics" => $h_metrics,
                ":img_url" => $img_url,
                ":commission" => $commission,
                ":rcb" => $rcb,
                ":status" => $status,
                ":description" => $description,
                ":project_id" => $project_id,
                ":launch_date" => $launchDate
            ));
            return true;
        }catch (Exception $exception){
            echo ("Internal error please, contact support!" . $exception->getMessage());
            error_log("ProjectCrud.php, SQL error = " . $exception->getMessage());
            return false;
        }
    }
}