<?php

class ProjectCrud
{
    private static ?ProjectCrud $instance = null;
    private static array $allProjects;

    private function __construct($pdo)
    {
        $sql = "SELECT * FROM projects";

        $stm = $pdo->prepare($sql);
        $stm->execute();
        self::$allProjects = $stm->fetchAll(PDO::FETCH_ASSOC);
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
}