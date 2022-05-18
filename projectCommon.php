<?php

use App\Http\project\ProjectHttpHandler;
use App\Repository\project\ProjectRepository;
use App\Service\project\ProjectService;

require_once ("common.php");

$projectRepository = new ProjectRepository($db);
$projectService = new ProjectService($projectRepository);
$projectHttpHandler = new ProjectHttpHandler($template,$dataBinder);