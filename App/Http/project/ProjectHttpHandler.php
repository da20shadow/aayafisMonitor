<?php

namespace App\Http\project;

use App\Http\BaseHttpHandler;
use App\Service\project\ProjectServiceInterface;

class ProjectHttpHandler extends BaseHttpHandler
{
    public function home(ProjectServiceInterface $projectService){
        $this->render("project/_home",$projectService->getAll());
    }
}