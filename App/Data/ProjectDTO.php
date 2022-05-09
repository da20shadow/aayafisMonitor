<?php

namespace App\Data;

class ProjectDTO
{
    private int $projectID;
    private string $projectName;
    private string $projectDescription;
    private string $projectURL;
    private int $commission;
    private int $RCB;
    private int $status;
    private string $projectIMG;
    private string $hMetrics;
    private $launchDate;
    private $added;

    public function create($projectName,$projectDescription,$projectURL,$commission,
                           $RCB,$status,$projectIMG,$hMetrics,$launchDate,$added,$projectID = null): ProjectDTO
    {
        return (new ProjectDTO())
            ->setProjectID($projectID)
            ->setProjectName($projectName)
            ->setProjectDescription($projectDescription)
            ->setProjectURL($projectURL)
            ->setCommission($commission)
            ->setRCB($RCB)
            ->setStatus($status)
            ->setProjectIMG($projectIMG)
            ->setHMetrics($hMetrics)
            ->setLaunchDate($launchDate)
            ->setAdded($added);
    }

    /**
     * @param int $projectID
     * @return ProjectDTO
     */
    public function setProjectID(int $projectID): ProjectDTO
    {
        $this->projectID = $projectID;
        return $this;
    }

    /**
     * @param string $projectName
     * @return ProjectDTO
     */
    public function setProjectName(string $projectName): ProjectDTO
    {
        $this->projectName = $projectName;
        return $this;
    }

    /**
     * @param string $projectDescription
     * @return ProjectDTO
     */
    public function setProjectDescription(string $projectDescription): ProjectDTO
    {
        $this->projectDescription = $projectDescription;
        return $this;
    }

    /**
     * @param string $projectURL
     * @return ProjectDTO
     */
    public function setProjectURL(string $projectURL): ProjectDTO
    {
        $this->projectURL = $projectURL;
        return $this;
    }

    /**
     * @param int $commission
     * @return ProjectDTO
     */
    public function setCommission(int $commission): ProjectDTO
    {
        $this->commission = $commission;
        return $this;
    }

    /**
     * @param int $RCB
     * @return ProjectDTO
     */
    public function setRCB(int $RCB): ProjectDTO
    {
        $this->RCB = $RCB;
        return $this;
    }

    /**
     * @param int $status
     * @return ProjectDTO
     */
    public function setStatus(int $status): ProjectDTO
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param string $projectIMG
     */
    public function setProjectIMG(string $projectIMG): ProjectDTO
    {
        $this->projectIMG = $projectIMG;
        return $this;
    }

    /**
     * @param string $hMetrics
     * @return ProjectDTO
     */
    public function setHMetrics(string $hMetrics): ProjectDTO
    {
        $this->hMetrics = $hMetrics;
        return $this;
    }

    /**
     * @param mixed $launchDate
     */
    public function setLaunchDate($launchDate): ProjectDTO
    {
        $this->launchDate = $launchDate;
        return $this;
    }

    /**
     * @param mixed $added
     */
    public function setAdded($added): ProjectDTO
    {
        $this->added = $added;
        return $this;
    }



    /**
     * @return int
     */
    public function getProjectID(): int
    {
        return $this->projectID;
    }

    /**
     * @return string
     */
    public function getProjectName(): string
    {
        return $this->projectName;
    }

    /**
     * @return string
     */
    public function getProjectDescription(): string
    {
        return $this->projectDescription;
    }

    /**
     * @return string
     */
    public function getProjectURL(): string
    {
        return $this->projectURL;
    }

    /**
     * @return int
     */
    public function getCommission(): int
    {
        return $this->commission;
    }

    /**
     * @return int
     */
    public function getRCB(): int
    {
        return $this->RCB;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getProjectIMG(): string
    {
        return $this->projectIMG;
    }

    /**
     * @return string
     */
    public function getHMetrics(): string
    {
        return $this->hMetrics;
    }

    /**
     * @return mixed
     */
    public function getLaunchDate()
    {
        return $this->launchDate;
    }

    /**
     * @return mixed
     */
    public function getAdded()
    {
        return $this->added;
    }


}